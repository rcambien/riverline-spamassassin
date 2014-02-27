<?php
/**
 * User: Romain Cambien
 * Date: 27/02/14
 * Time: 12:31
 */

namespace Riverline\SpamAssassin;

use Guzzle\Http\Client;

class PostmarkWebservice implements SpamAssassinInterface
{
    const WEBSERVICE_URL = 'http://spamcheck.postmarkapp.com/filter';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var bool
     */
    protected $longReport;

    /**
     * @var  string
     */
    protected $report;

    /**
     * @param bool $longReport Request a long report
     */
    public function __construct($longReport = false)
    {
        $this->client     = new Client();
        $this->longReport = $longReport;
    }

    /**
     * Get the SpamAssassin score
     * @param string $rawEmail
     * @throws \RuntimeException
     * @return float
     */
    public function getScore($rawEmail)
    {
        // Reset report
        $this->report = null;

        $request = $this->client->post(
            self::WEBSERVICE_URL,
            array('Content-Type' => 'application/json'),
            json_encode(array(
                'email'   => $rawEmail,
                'options' => ($this->longReport?'long':'short')
            ))
        );

        $response = $request->send()->json();

        if (!$response['success']) {
            throw new \RuntimeException($response['message']);
        } else {
            $this->report = $response['report'];
            return $response['score'];
        }
    }

    /**
     * Get the SpamAssassin full report
     * @return mixed
     */
    public function getReport()
    {
        return $this->report;
    }
}
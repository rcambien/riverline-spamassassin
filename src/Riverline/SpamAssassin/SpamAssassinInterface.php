<?php
/**
 * User: Romain Cambien
 * Date: 27/02/14
 * Time: 12:29
 */

namespace Riverline\SpamAssassin;

interface SpamAssassinInterface
{
    /**
     * Get the SpamAssassin score
     * @param string $rawEmail
     * @return float
     */
    public function getScore($rawEmail);

    /**
     * Get the SpamAssassin full report
     * @return mixed
     */
    public function getReport();
} 
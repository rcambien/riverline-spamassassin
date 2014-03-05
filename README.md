# README

[![Build Status](https://travis-ci.org/rcambien/riverline-spamassassin.png?branch=master)](https://travis-ci.org/rcambien/riverline-spamassassin)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/82d93761-63ed-487a-8123-a617205bd5f2/mini.png)](https://insight.sensiolabs.com/projects/82d93761-63ed-487a-8123-a617205bd5f2)

## What is Riverline\SpamAssassin

``Riverline\SpamAssassin`` is a simple lib to get SpamAssassin score and report for an Email.

## Requirements

* PHP 5.3
* Guzzle 3.*

## Installation

``Riverline\SpamAssassin`` is compatible with [composer](https://packagist.org/packages/riverline/spamassassin) and any prs-0 autoloader

## Usage

Currently, only one provider is available : ``PostmarkWebservice``.

It use the Postmark free Spamcheck webservice available here :
http://spamcheck.postmarkapp.com/doc

```php
<?php

use Riverline\SpamAssassin\PostmarkWebservice

$spamAssassin = new PostmarkWebservice();
echo $spamAssassin->getScore($rawEmail);

// Optionally get the full report
echo $spamAssassin->getReport();
```

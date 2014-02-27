# README

## What is Riverline\SpamAssassin

``Riverline\SpamAssassin`` is a simple lib to get SpamAssassin score and report for an Email.

## Requirements

* PHP 5.3
* Guzzle 3.*

## Installation

``Riverline\SpamAssassin`` is compatible with composer and any prs-0 autoloader

## Usage

Currently, only one provider is available : ``PostmarkWebservice``.
It use the Postmark free Spamcheck webservice aivalable here :
http://spamcheck.postmarkapp.com/doc

```php
<?php

use Riverline\SpamAssassin\PostmarkWebservice

$spamAssassin = new PostmarkWebservice();
echo $spamAssassin->getScore($rawEmail);

// Optionaly get the full report
echo $spamAssasing->getReport();
```
=======
riverline-spamassassin
======================

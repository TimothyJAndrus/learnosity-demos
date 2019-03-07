<?php

/*
|--------------------------------------------------------------------------
| Setup Security/User Details
|--------------------------------------------------------------------------
|
| Setup the necessary security and user details to be used
| by default when communicating with any Learnosity products.
|
*/
$consumer_key = 'yis0TYCu7U9V4o7M';

// Note - Consumer secret should never get displayed on the page - only used for creation of signature server side
$consumer_secret = '74c5fd430cf1242a527f6223aebd42d30464be22';

/* Some products need the domain as part of the security signature.
** Learnosity whitelists "localhost" - any requests from other domains will be rejected.
 * Function below strips any port from the hostname - learnosity requires only the hostname for signature signing.
*/

$domain = explode(':', $_SERVER['HTTP_HOST'])[0];

/*
|--------------------------------------------------------------------------
| Learnosity URLs
|--------------------------------------------------------------------------
|
| Setup any URLs for external API's to allow them to be conveniently
| changed depending on the regions.   Use protocol relative urls to ensure
| it works from http and https sites.
|
*/

$lts_version = "v2018.2.LTS";

$url_assess                = 'https://assess-va.learnosity.com/?' . $lts_version;
$url_authorapi             = 'https://authorapi.learnosity.com/?' . $lts_version;
$url_data                  = 'https://data-va.learnosity.com/' . $lts_version;
$url_events                = 'https://events-va.learnosity.com/?' . $lts_version;
$url_items                 = 'https://items-va.learnosity.com/?' . $lts_version;
$url_questioneditor        = 'https://questioneditor-va.learnosity.com/?' . $lts_version;
$url_questions             = 'https://questions-va.learnosity.com/?' . $lts_version;
$url_reports               = 'https://reports-va.learnosity.com/?' . $lts_version;



/* This is a an organisation_id for a read_only item bank.
** The purpose here is to showcase demos where static content is important.
** For loading from your primary organisation, you won't need this, and it can be removed.
*/

$read_only_organisation_id = 505;

/**
 * Allow override file to replace config options
 **/

if (file_exists(dirname(__FILE__) . '/config_override.php')) {
    require dirname(__FILE__) . '/config_override.php';
}

include_once __DIR__ . '/../vendor/autoload.php';

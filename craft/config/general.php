<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
    'omitScriptNameInUrls' => true//,
    //'defaultImageQuality' => 100//,
    //'cacheDuration' => 'P1W'
  ),

  'localhost' => array(
  'environmentVariables' => array(
    'sitePath' => '/Users/Matt/Developer/portfolio/',
    'baseUrl'  => 'http://localhost:8888/portfolio/',
    'devMode' => true,
    'testToEmailAddress'  => 'me@matt-gibbs.com'
  )
),

  'www.matt-gibbs.com' => array(
    'environmentVariables' => array(
      'basePath' => '/public_html/',
      'baseUrl'  => 'http://www.matt-gibbs.com/',
      'cacheDuration' => 'P1W'
    )
  ),

  'dev.matt-gibbs.com' => array(
    'environmentVariables' => array(
      'basePath' => '/public_html/dev/',
      'baseUrl'  => 'http://dev.matt-gibbs.com'
    )
  )
);

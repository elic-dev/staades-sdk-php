<?php
return array(
    'name' => 'Staades',
    'apiVersion' => '2.0',
    'baseUrl' => 'https://api.staades.com/2.0/',
    'operations' => array(
        'appIdentValuesGet' => array(
            'uri' => 'app/{app_key}/idents/{ident_key}/values',
            'description' => '',
            'httpMethod' => 'GET',
            'responseModel' => 'getResponse',
            'parameters' => array(
                'apikey' => array(
                    'location' => 'header',
                    'description' => 'The Api Key',
                    'type' => 'string',
                    'required' => true,
                ),
                'app_key' => array(
                    'location' => 'uri',
                    'description' => 'The app key.',
                    'required' => true,
                ),
                'ident_key' => array(
                    'location' => 'uri',
                    'description' => 'The ident key.',
                    'required' => true,
                ),
            ),
        ),
        'appIdentValueAdd' => array(
            'uri' => 'app/{app_key}/idents/{ident_key}/values/add',
            'description' => '',
            'httpMethod' => 'GET',
            'parameters' => array(
                'apikey' => array(
                    'location' => 'header',
                    'description' => 'The Api Key',
                    'type' => 'string',
                    'required' => true,
                ),
                'app_key' => array(
                    'location' => 'uri',
                    'description' => 'The app key.',
                    'required' => true,
                ),
                'ident_key' => array(
                    'location' => 'uri',
                    'description' => 'The ident key.',
                    'required' => true,
                ),
                'value' => array(
                    'location' => 'query',
                    'description' => 'The value',
                    'type' => 'any',
                    'required' => false,
                ),
            ),
        ),
        'appIdentValueSet' => array(
            'uri' => 'app/{app_key}/idents/{ident_key}/values/set',
            'description' => '',
            'httpMethod' => 'GET',
            'parameters' => array(
                'apikey' => array(
                    'location' => 'header',
                    'description' => 'The Api Key',
                    'type' => 'string',
                    'required' => true,
                ),
                'app_key' => array(
                    'location' => 'uri',
                    'description' => 'The app key.',
                    'required' => true,
                ),
                'ident_key' => array(
                    'location' => 'uri',
                    'description' => 'The ident key.',
                    'required' => true,
                ),
                'value' => array(
                    'location' => 'query',
                    'description' => 'The value',
                    'type' => 'any',
                    'required' => false,
                ),
                'date' => array(
                    'location' => 'query',
                    'description' => 'An optional date time',
                    'type' => 'any',
                    'required' => false,
                ),
            ),
        ),
    ),
    'models' => [
        'getResponse' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json',
            ],
        ],
    ],
);

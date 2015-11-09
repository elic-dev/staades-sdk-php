<?php
return array(
    'name'        => 'Staades',
    'apiVersion'  => '2.0',
    'operations'  => array(
        'appIdentValueAdd' => array(
            'uri'         => 'app/{app_key}/idents/{ident_key}/values/add',
            'description' => '',
            'httpMethod'  => 'GET',
            'parameters'  => array(
                'apikey' => array(
                    'location'    => 'header',
                    'description' => 'The Api Key',
                    'type'        => 'string',
                    'required'    => true,
                ),
                'app_key' => array(
                    'location'    => 'uri',
                    'description' => 'The app key.',
                    'required'    => true,
                ),
                'ident_key' => array(
                    'location'    => 'uri',
                    'description' => 'The ident key.',
                    'required'    => true,
                ),
                'value'          => array(
                    'location'    => 'query',
                    'description' => 'The value',
                    'type'        => 'string',
                    'required'    => true,
                ),
            ),
        ),
        'appIdentValueSet' => array(
            'uri'         => 'app/{app_key}/idents/{ident_key}/values/set',
            'description' => '',
            'httpMethod'  => 'GET',
            'parameters'  => array(
                'apikey' => array(
                    'location'    => 'header',
                    'description' => 'The Api Key',
                    'type'        => 'string',
                    'required'    => true,
                ),
                'app_key' => array(
                    'location'    => 'uri',
                    'description' => 'The app key.',
                    'required'    => true,
                ),
                'ident_key' => array(
                    'location'    => 'uri',
                    'description' => 'The ident key.',
                    'required'    => true,
                ),
                'value'          => array(
                    'location'    => 'query',
                    'description' => 'The value',
                    'type'        => 'string',
                    'required'    => true,
                ),
            ),
        ),
    ),
);
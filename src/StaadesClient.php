<?php namespace Staades;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;

class StaadesClient extends Client
{
	/**
     * Factory to create new instance.
     *
     * @param array $config
     *
     * @returns \Staades\StaadesClient
     */
    public static function factory($config = array())
    {
    	// Provide a hash of default client configuration options
        $default = array(
        	'base_url' => 'http://api.staades.net/{version}/',
            'version'  => '2.0',
        );

        // The following values are required when creating the client
        $required = array(
            'base_url',
            'app_key',
            'api_key'
        );

        // Merge in default settings and validate the config
        $config = Collection::fromConfig($config, $default, $required);

        // Create a new Staades client
        $client = new self($config->get('base_url'), $config);

        $file = 'staades_api_2_0.php';
        $client->setDescription(ServiceDescription::factory(__DIR__ . "/Resources/{$file}"));

        // Set the content type header to use "application/json" for all requests
        $client->setDefaultOption('headers', array('Content-Type' => 'application/json'));

        return $client;
    }


    /**
     * Proxy the addEvent command (to be used as a shortcut)
     *
     * @param  string $collection Name of the collection to store events
     * @param  array  $event      Event data to store
     * @return mixed
     */
    public function addValue($identKey, $value)
    {
        return $this->getCommand('appIdentValueAdd', array(
            'ident_key' => $identKey,
            'value'     => $value,
            'app_key' => $this->getConfig('app_key'),
            'apikey'  => $this->getConfig('api_key'),

        ))->getResult();
    }

    /**
     * Proxy the addEvent command (to be used as a shortcut)
     *
     * @param  string $collection Name of the collection to store events
     * @param  array  $event      Event data to store
     * @return mixed
     */
    public function setValue($identKey, $value)
    {
        return $this->getCommand('appIdentValueSet', array(
            'ident_key' => $identKey,
            'value'     => $value,
            'app_key' => $this->getConfig('app_key'),
            'apikey'  => $this->getConfig('api_key'),

        ))->getResult();
    }
}
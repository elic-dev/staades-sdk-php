<?php

namespace Staades;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Guzzle\Service\Loader\PhpLoader;
use Symfony\Component\Config\FileLocator;

class StaadesClient extends GuzzleClient
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
        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $configDirectories = array(__DIR__ . "/Resources");
        $locator = new FileLocator($configDirectories);
        $phpLoader = new PhpLoader($locator);
        $description = $phpLoader->load($locator->locate('staades_api_2_0.php'));

        $description = new Description($description);

        // Create a new Staades client
        $guzzleClient = new self($client, $description, null, null, null, $config);

        return $guzzleClient;
    }

    /**
     * Proxy the getValues command
     *
     * @param  string $identKey
     * @return array
     */
    public function getValues($identKey)
    {
        return $this->appIdentValuesGet([
            'ident_key' => $identKey,
            'app_key' => $this->getConfig('app_key'),
            'apikey' => $this->getConfig('api_key'),
        ])['data'];
    }

    /**
     * Proxy the addEvent command (to be used as a shortcut)
     *
     * @param  string $identKey   Name of the ident to store events
     * @param  array  $value      Value to be added to the ident
     * @return mixed
     */
    public function addValue($identKey, $value)
    {
        return $this->appIdentValueAdd([
            'ident_key' => $identKey,
            'value' => $value,
            'app_key' => $this->getConfig('app_key'),
            'apikey' => $this->getConfig('api_key'),
        ])['data'];
    }

    /**
     * Proxy the addEvent command (to be used as a shortcut)
     *
     * @param  string $identKey   Name of the ident to store events
     * @param  array  $value      Value to set the ident to
     * @return mixed
     */
    public function setValue($identKey, $value, DateTime $date = null)
    {
        return $this->appIdentValueSet([
            'ident_key' => $identKey,
            'value' => $value,
            'date' => $date ? $date->format(\DateTime::ATOM) : null,
            'app_key' => $this->getConfig('app_key'),
            'apikey' => $this->getConfig('api_key'),
        ]);
    }
}

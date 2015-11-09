<?php namespace Staades\Tests\Client;

use Staades\StaadesClient;
use Guzzle\Tests\GuzzleTestCase;

class StaadesTestClient extends GuzzleTestCase
{
    /**
     * Check that a Staades Client is instantiated properly
     */
    public function testFactoryReturnsClient()
    {
        $config = array(
            'app_key' => 'testapp',
            'api_key' => 'testapi'
        );

        $client = StaadesClient::factory($config);
        
        //Check that the Client is of the right type
        $this->assertInstanceOf('\Guzzle\Service\Client', $client);
        $this->assertInstanceOf('\Staades\StaadesClient', $client);

    }
}
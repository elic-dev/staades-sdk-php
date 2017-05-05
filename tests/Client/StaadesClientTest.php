<?php

namespace Staades\Tests\Client;

use PHPUnit\Framework\TestCase;
use Staades\StaadesClient;

class StaadesTestClient extends TestCase
{
    /**
     * Check that a Staades Client is instantiated properly
     */
    public function testFactoryReturnsClient()
    {
        $config = array(
            'app_key' => 'testapp',
            'api_key' => 'testapi',
        );

        $client = StaadesClient::factory($config);

        //Check that the Client is of the right type
        $this->assertInstanceOf(\GuzzleHttp\Command\Guzzle\GuzzleClient::class, $client);
        $this->assertInstanceOf(\Staades\StaadesClient::class, $client);
    }
}

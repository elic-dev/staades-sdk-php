<?php
error_reporting(-1);

// Ensure that composer has installed all dependencies
if (!@require dirname(__DIR__) . '/vendor/autoload.php') {
    die("Dependencies must be installed using composer:\n\nphp composer.phar install\n\n"
        . "See http://getcomposer.org for help with installing composer\n");
}

// Register services with the GuzzleTestCase
Guzzle\Tests\GuzzleTestCase::setMockBasePath(__DIR__ . '/mock');
$serviceBuilder = \Guzzle\Service\Builder\ServiceBuilder::factory(array(
    'services'	=> array(
        'staades' => array(
            'class'     => 'Staades\Client\StaadesClient',
            'params'    => array(
                // 'app_key' => $_SERVER['STAADES_APP_KEY'],
                // 'api_key' => $_SERVER['STAADES_API_KEY']
            )
        )
    )
) );

Guzzle\Tests\GuzzleTestCase::setServiceBuilder( $serviceBuilder );
// Emit deprecation warnings
Guzzle\Common\Version::$emitWarnings = true;
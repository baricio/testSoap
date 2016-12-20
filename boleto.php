<?php

$wsdl = __DIR__ . '/WSDL/DLB/TicketEndpointService.wsdl';
$endpoint = 'https://ymbdlb.santander.com.br/dl-ticket-services/TicketEndpointService';

$options = array(
    'uri' => $endpoint,
    'location' => $endpoint,
    'keep_alive' => true,
    'trace' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
);

try {
    $soapClient = new SoapClient($wsdl, $options);
    var_dump($soapClient->registraTitulo());
} catch (Exception $e) {
    var_dump($e);
}

<?php

/**
 * Qualiproof Gateway for PHP
 *
 * @package  Qualiproof
 * @author   Enver Morina <emorinaj@agroviva.de>
 */

use Qualiproof\RpcPropertyItem;
use Qualiproof\RpcPropertyList;

ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 900);
ini_set('default_socket_timeout', 15);

$login = [
    'user-id'        => '', // user id
    'alias-user'     => '', // username
    'alias-password' => '', // password
    'language'       => 'de',	// language
];

$RpcPropertyList = new RpcPropertyList('get-qs-category-details', new RpcPropertyItem());
$RpcPropertyList->toProperties($login);
$RpcPropertyList->toProperties([
    'location-vvvo-number' => '',			//location vvvo number
    'date'                 => date('Y-m-d'),
]);

// $RpcPropertyList->setName("get-sample-overview");
// $RpcPropertyList->setProperties(new RpcPropertyItem("start-date", "2010-01-01"));
// $RpcPropertyList->setProperties(new RpcPropertyItem("end-date", "2019-01-01"));

// Call wsdl function
$result = $client->process($RpcPropertyList);

// Echo the result
echo '<pre>'.print_r($result, true).'</pre>';

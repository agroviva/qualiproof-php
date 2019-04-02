# Qualiproof Gateway
- Check this [link](http://qualiproof.de/qualitype/gateway) to see the official documentation of how to use Qualiproof Gateway

# Installation using Composer
- run `composer requrie agroviva/qualiproof-api "dev-master"`
- implement the requried classes 
  ` 
   	<?php
	use Qualiproof\RpcPropertyList;
	use Qualiproof\RpcPropertyItem;

	$url = "http://pig.qualiproof.de/pigrelease/services/RpcGateway?WSDL";
	$client  = new SoapClient($url, [
		"trace" => true,
	]); 

	$client->__setLocation($url);

	# write your code below......
  `
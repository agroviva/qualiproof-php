# Qualiproof Gateway
- visit this [link](http://qualiproof.de/qualitype/gateway) to see the official documentation of how to use Qualiproof Soap Gateway

# Installation using Composer
- run `composer require agroviva/qualiproof-api "dev-master"`
- implement the requried classes 
```php
   	<?php
	use Qualiproof\RpcPropertyList;
	use Qualiproof\RpcPropertyItem;

	$url = "http://pig.qualiproof.de/pigrelease/services/RpcGateway?WSDL";
	$client  = new SoapClient($url, [
		"trace" => true,
	]); 

	$client->__setLocation($url);

	# write your code below......
```
- check the tests folder for a better overview of how to use this tool

# License
This tool is an open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

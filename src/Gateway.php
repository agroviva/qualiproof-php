<?php

namespace Qualiproof;

class Gateway
{

	/**
	 * Here are the credentials stored
	 * @var array
	 */
	private $login = [
		'user-id' 			=> '',
		'alias-user' 		=> '',
		'alias-password' 	=> '',
		'language' 			=> 'de',
	];

	/**
	 * RpcPropertyList instance
	 * @var Qualiproof\RpcPropertyList
	 */
	protected $RpcPropertyList;

	/**
	 * Login information
	 * @param array $args
	 */
    public function __construct(array $args)
    {
        if (!empty($args)) {
			foreach ($args as $key => $value) {
				if (isset($this->login[$key])) {
					$this->login[$key] = $value;
				}
			}
		}
    }

    /**
     * Creates a new instance of this class
     * @param array $args
     */
    public static function Login(array $args){
    	$gateway = new Gateway($args);
		return $gateway;
    }

    /**
     * [getCategoryDetails description]
     * @param  array  $properties
     * @return object
     */
    public function getCategoryDetails(array $properties){
    	$listname = "get-qs-category-details";
    	return $this->getCustom($listname, $properties);
    }

    /**
     * [getSampleOverview description]
     * @param  array  $properties
     * @return object
     */
    public function getSampleOverview(array $properties){
    	$listname = "get-sample-overview";
    	return $this->getCustom($listname, $properties);
    }

    /**
     * getCustom sets parameters required to make this work
     * @param  string $listname
     * @param  array  $properties
     * @return object
     */
    public function getCustom(string $listname, array $properties){
    	$this->RpcPropertyList = new RpcPropertyList($listname, new RpcPropertyItem());
		$this->RpcPropertyList->toProperties($this->login);
		$this->RpcPropertyList->toProperties($properties);

		return $this;
    }

    /**
     * Makes a Soap request and returns the response
     * @return mixed
     */
    public function Run(){
    	if (isset($this->RpcPropertyList)) {
    		$url = 'http://pig.qualiproof.de/pigrelease/services/RpcGateway?WSDL';
			$client = new SoapClient($url, [
			    'trace' => true,
			]);

			$client->__setLocation($url);

    		$result = $client->process($this->RpcPropertyList);
			return $result;
    	}
    }
}
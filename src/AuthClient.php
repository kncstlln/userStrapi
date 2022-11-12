<?php

namespace App;

use GuzzleHttp\Client;

define('STRAPI_API_BASE_URL', 'http://localhost:1337/api/');
$token = '6a362fcca16b9ce850d6c35b04a7e78e3f13f70711c1e795ac7608e2660646e72ff8f06b131d8aa0c3c50cc494f1c74c845a8cfd9ca5b8fc632daa60affeb71a4e2e62bc72eadccc67b04fdd0e9d0c1174d94babd1ff0faed2af896b8eea183714704f49e48595fb63771250c68923c42068381597b65df5467d67f00b8c4c69';

class AuthClient
{
    
	protected $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => STRAPI_API_BASE_URL,
			'headers' => [
                'Authorization' => 'Bearer ' . $token,
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
	}

	public function register($username, $email, $password)
	{
		$regist_endpoint = 'registration'; 
		return $this->client->post($regist_endpoint, [
			'json' => [
                'username' => $username, 
                'email' => $email, 
                'password' => $password
                ] 
		]);
	}

	public function login($identifier, $password)
	{
		$login_endpoint = 'login'; 
		return $this->client->post($login_endpoint, [
			'json' => [
                'identifier' => $identifier, 
                'password' => $password
                ] 
		]);
	}
}
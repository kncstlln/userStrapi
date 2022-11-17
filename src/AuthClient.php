<?php
namespace App;

include "vendor/autoload.php";
use GuzzleHttp\Client;

define('strapi_url', 'http://localhost:1337/api/');
class AuthClient
{
    
	protected $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => strapi_url,
			'headers' => [
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
	}

	public function register($username, $email, $password)
	{
		$regist_endpoint = 'auth/local/register'; 
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
		$login_endpoint = 'auth/local'; 
		return $this->client->post($login_endpoint, [
			'json' => [
                'identifier' => $identifier, 
                'password' => $password


                ] 
		]);
	}
	public function welcome($id)
	{
		$welcome_endpoint = 'users/'. $id; 
		$response = $this->client->get($welcome_endpoint);
		$body = $response->getBody();
		return $body;
	}
}
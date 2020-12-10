<?php
namespace App\Service;

use GuzzleHttp\Client;


class ServiceWeather {
	
	public function consultar($ciudad){

		try {
            $client = new Client([
                'base_uri' => 'http://api.openweathermap.org/data/2.5/',
            ]);

            $request = $client->request('GET', 'weather', [
                'query' => [
                    'appid' => '30fc39812aeec80f7fbbfd53c49a7c79',
                    'q' => $ciudad,	                ]
            ]);
        } catch (RequestException $e) {
            throw new Exception('Encontramos un error al consultar las información, por favor intenta de nuevo.');
        }

        $body = $request->getBody();

        $contents = $body->getContents();

        return $contents;

	}
}


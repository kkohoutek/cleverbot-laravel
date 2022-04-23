<?php

namespace Kkohoutek\Cleverbot;

use GuzzleHttp\Client;

class Cleverbot
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.cleverbot.com/',
        ]);
    }


    /**
     * Return parsed json response as an object.
     *
     * @return object
     */
    public function query($input = '', $cs = '', $cb_settings_tweak1 = '', $cb_settings_tweak2 = '', $cb_settings_tweak3 = '')
    {
        $key = config('cleverbot.key');
        $response = $this->client->get('getreply', [
                'query' => compact("key", "input", "cs", "cb_settings_tweak1", "cb_settings_tweak2", "cb_settings_tweak3")
        ]);
        return json_decode($response->getBody());
    }
}

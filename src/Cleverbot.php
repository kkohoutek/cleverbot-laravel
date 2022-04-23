<?php

namespace Kkohoutek\Cleverbot;

use GuzzleHttp\Client;

class Cleverbot
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_url' => 'https://www.cleverbot.com',
        ]);
    }


    /**
     * Return parsed json response as associative array.
     *
     * @return array
     */
    public function query($input = '', $cs = '', $cb_settings_tweak1 = '', $cb_settings_tweak2 = '', $cb_settings_tweak3 = '')
    {
        $key = config('cleverbot.key');
        $response = $this->client->get('/getreply', [
                'query' => compact("key", "input", "cs, $cb_settings_tweak", "cb_settings_tweak", "cb_settings_tweak")
        ]);
        return (array) json_decode($response->getBody(), true);
    }
}

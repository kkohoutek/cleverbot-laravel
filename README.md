# cleverbot-laravel
Laravel wrapper for the Cleverbot API.\
https://www.cleverbot.com/api/
# Config
In your .env file, add a line with your Cleverbot API key:
```
CLEVERBOT_API_KEY="your-api-key"
```

# Usage example
Use dependency injection to get access to the Cleverbot singleton. Use the ´query´ method to communicate with the API.
```php
Route::get('/', function (Kkohoutek\Cleverbot\Cleverbot $cb) {

    $response = $cb->query('Hello Cleverbot!');  
    logger($response->output);
    
     // Keep passing ´cs´ to continue the same conversation
    $response = $cb->query('How are you doing?', $response->cs);  
    logger($response->output);
    
    // ... Return  ...
});
```
// Hello Cleverbot!\
[2022-04-23 18:20:15] local.DEBUG: No. That's not my name. \
// How is it going?\
[2022-04-23 18:20:16] local.DEBUG: Not telling you.\
\
\
The valid parsed JSON response looks something like this (for more info, visit https://www.cleverbot.com/api/howto/):
```json
{
  "cs":"76nxdxIJO2...AAA",
  "interaction_count":"1",
  "input":"",
  "output":"Good afternoon.",
  "conversation_id":"AYAR1E3ITW",
  ...
}
```

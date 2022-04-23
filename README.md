# cleverbot-laravel
Laravel wrapper for the Cleverbot API.
# Example
```
use Illuminate\Support\Facades\App;
use Kkohoutek\Cleverbot\Cleverbot;
$cb = App::make(Cleverbot::class);
$response = $cb->query("Hello Cleverbot!");
logger($response->output);
$response = $cb->query("How is it going?", $response->cs);  // pass cs to continue conversation, keep blank to start a fresh one
logger($response->output);
```
// Hello Cleverbot!\n
[2022-04-23 18:20:15] local.DEBUG: No. That's not my name. \n
// How is it going?\n
[2022-04-23 18:20:16] local.DEBUG: Not telling you.\n

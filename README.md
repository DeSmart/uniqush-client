# Uniqush-client

This library serves as [Uniqush](http://uniqush.org/) client for PHP.

# Usage

```php
<?php

use \DeSmart\Uniqush\Client;
use \DeSmart\Uniqush\Request\PushRequest;
use \DeSmart\Uniqush\ValueObject\Message;

$message = new Message('It is example message.');
$request = new PushRequest('myService', ['alice', 'bob'], $message);

$client = new \DeSmart\Uniqush\Client('http://uniqush.on.some.serv.er');
$client->send($request);
?>
```

## Debugging

Currently there's none. If needed please make PR.

# Requests

`Client` is just a wrapper for sending `RequestInterface` objects. Message is represented by Value Object - `Message`.

Requests define actions which can be done using Uniqush. Currently are implemented only those requests which we needed to use.

# License

This library is under MIT License.

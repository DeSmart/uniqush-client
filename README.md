# Uniqush-client

This library serves as [Uniqush](http://uniqush.org/) client for PHP.

**Warning**  
Package is in alpha version so it may not work properly.

# Usage

```php
<?php

use \DeSmart\Uniqush\Client;
use \DeSmart\Uniqush\Request\PushRequest;

$request = new PushRequest('myService', ['alice', 'bob']);
$request->setMessage('myMessage');

$client = new \DeSmart\Uniqush\Client('http://uniqush.on.some.serv.er');
$client->send($request);
?>
```

## Debugging

Currently there's none. If needed please make PR.

# Requests

`Client` is just a wrapper for sending `RequestInterface` objects.

Requests define actions which can be done using Uniqush. Currently are implemented only those requests which we needed to use.

# License

This library is under MIT License.

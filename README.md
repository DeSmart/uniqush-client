# Uniqush-client

This tiny library serves only one purpose - sending push notifications via [Uniqush](http://uniqush.org/).

# Usage

```php
<?php

$client = new \DeSmart\Uniqush\Client('http://uniqush.on.some.serv.er');
$client->push('myService', 'myMessage', [
    'bob',
    'alice',
    'tom',
]);
```

## Debugging

Currently there's none. If needed please make PR.

# License

This library is under MIT License.

###PHP Session Library


####Usage
```php
<?php
require "vendor/autoload.php";

$pdo = new \PDO("MYSQL_CONNECTION_DSN", "MYSQL_USERNAME", "MYSQL_PASSWORD");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoHandler = new \Previewtechs\PHPSession\Handler\PDOHandler($pdo);
$handler = new \Previewtechs\PHPSession\Handler\CustomSessionHandler($pdoHandler);
$handler->setHandler();

session_start();
$_SESSION['key'] = "value";

echo $_SESSION['key'];   //will return `value`
```

_PDO Handler has been developed with [symfony/http-foundation](https://github.com/symfony/http-foundation)_
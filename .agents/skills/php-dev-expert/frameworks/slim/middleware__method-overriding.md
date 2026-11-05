# Method Overriding Middleware - Slim Framework

> **Fonte / Source:** https://www.slimframework.com/docs/v4/middleware/method-overriding.html

---

# Method Overriding Middleware

[Edit This Page](https://github.com/slimphp/Slim-Website/tree/gh-pages/docs/v4/middleware/method-overriding.md)

The Method Overriding Middleware enables you to use the `X-Http-Method-Override` request header or the request body parameter `_METHOD` to override an incoming request’s method.
The middleware should be placed after the routing middleware has been added.

## Usage

```
<?php

use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Add RoutingMiddleware before we add the MethodOverrideMiddleware so the method is overridden before routing is done
$app->addRoutingMiddleware();

// Add MethodOverride middleware
$methodOverrideMiddleware = new MethodOverrideMiddleware();
$app->add($methodOverrideMiddleware);

// ...

$app->run();
```

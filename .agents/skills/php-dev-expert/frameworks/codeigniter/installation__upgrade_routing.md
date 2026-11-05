# Upgrade Routing — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_routing.html

---

# Upgrade Routing[](#upgrade-routing "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [URI Routing Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/general/routing.html)
- [URI Routing Documentation CodeIgniter 4.x](incoming__routing.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- In CI4 the Auto Routing is disabled by default.
- In CI4 the new more secure [Auto Routing (Improved)](incoming__auto_routing_improved.md#auto-routing-improved) is introduced.
- In CI4 the routing is no longer configured by setting the routes as array.
- The Wildcard `(:any)` In CI3 will be the Placeholder `(:segment)` in CI4. The `(:any)` in CI4 matches multiple segements. See [URI Routing](incoming__routing.md#routing-placeholder-any).

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. If you use the Auto Routing in the same way as CI3, you need to enable [Auto Routing (Legacy)](incoming__routing.md#auto-routing-legacy).
2. You have to change the syntax of each routing line and append it in **app/Config/Routes.php**. For example:

   > - `$route['journals'] = 'blogs';` to `$routes->add('journals', 'Blogs::index');`. This would map to the `index()` method in the `Blogs` controller.
   > - `$route['product/(:any)'] = 'catalog/product_lookup';` to `$routes->add('product/(:segment)', 'Catalog::productLookup');`. Don’t forget to replace `(:any)` with `(:segment)`.
   > - `$route['login/(.+)'] = 'auth/login/$1';` to `$routes->add('login/(.+)', 'Auth::login/$1');`
   >
   > Note
   >
   > For backward compatibility, `$routes->add()` is used here. But we
   > strongly recommend to use [HTTP verb Routes](incoming__routing.md#routing-http-verb-routes) like
   > `$routes->get()` instead of `$routes->add()` for security.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

Path: **application/config/routes.php**:

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ...

$route['posts/index']  = 'posts/index';
$route['teams/create'] = 'teams/create';
$route['teams/update'] = 'teams/update';

$route['posts/create']   = 'posts/create';
$route['posts/update']   = 'posts/update';
$route['drivers/create'] = 'drivers/create';
$route['drivers/update'] = 'drivers/update';
$route['posts/(:any)']   = 'posts/view/$1';
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

Path: **app/Config/Routes.php**:

```
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->add('posts/index', 'Posts::index');
$routes->add('teams/create', 'Teams::create');
$routes->add('teams/update', 'Teams::update');

$routes->add('posts/create', 'Posts::create');
$routes->add('posts/update', 'Posts::update');
$routes->add('drivers/create', 'Drivers::create');
$routes->add('drivers/update', 'Drivers::update');
$routes->add('posts/(:segment)', 'Posts::view/$1');
```

Note

For backward compatibility, `$routes->add()` is used here. But we
strongly recommend to use [HTTP verb Routes](incoming__routing.md#routing-http-verb-routes) like
`$routes->get()` instead of `$routes->add()` for security.

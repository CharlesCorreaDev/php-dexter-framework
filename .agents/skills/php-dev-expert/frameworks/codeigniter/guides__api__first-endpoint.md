# Auto Routing & Your First Endpoint — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/guides/api/first-endpoint.html

---

# Auto Routing & Your First Endpoint[](#auto-routing-your-first-endpoint "Link to this heading")

In this section, we enable CodeIgniter’s *Improved Auto Routing* feature and create a simple JSON endpoint to confirm everything is wired correctly.

## [Why Auto-Routing?](#id1)[](#why-auto-routing "Link to this heading")

The previous tutorial showed how to define routes manually in **app/Config/Routes.php**. While powerful and flexible, this can be tedious for RESTful APIs with many endpoints that follow a common pattern. Auto-Routing simplifies this by mapping URL patterns to controller classes and methods based on conventions, and its focus on HTTP verbs works well for RESTful APIs.

## [Enable Improved Auto Routing](#id2)[](#enable-improved-auto-routing "Link to this heading")

By default, Auto-Routing is turned off. Enable it so your controllers automatically handle REST-style methods.

Open **app/Config/Feature.php** and confirm this flag is `true` (this is the default):

```
public bool $autoRoutesImproved = true;
```

The “Improved” auto router is more secure and reliable than the legacy version, so it’s recommended for all new projects.

Then, in **app/Config/Routing.php**, confirm auto-routing is **enabled**:

```
public bool $autoRoute = true;
```

That’s all you need for CodeIgniter to automatically map your controller classes and to URIs like `GET /api/ping` or `POST /api/ping`.

## [Create a Ping Controller](#id3)[](#create-a-ping-controller "Link to this heading")

To understand how a basic API endpoint works, let’s generate a controller to serve as our first API endpoint. This will provide a simple “ping” response to confirm our setup is correct.

```
php spark make:controller Api/Ping
```

This creates **app/Controllers/Api/Ping.php**.

Edit the file so it looks like this:

```
<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class Ping extends BaseController
{
    use ResponseTrait;

    public function getIndex(): ResponseInterface
    {
        return $this->respond(['status' => 'ok'], 200);
    }
}
```

Here we:

- Use the `ResponseTrait`, which already includes REST helpers such as [`respond()`](outgoing__api_responses.md#respond "respond") and proper status codes.
- Define a `getIndex()` method. The `get` prefix means it responds to `GET` requests, and the `Index` name means it matches the base URI (`/api/ping`).

## [Test the route](#id4)[](#test-the-route "Link to this heading")

Start the development server if it isn’t running:

```
php spark serve
```

Now visit:

- **Browser:** `http://localhost:8080/api/ping`
- **cURL:** `curl http://localhost:8080/api/ping`

Expected response:

```
{
    "status": "ok"
}
```

Congratulations — that’s your first working JSON endpoint!

## [Understand how it works](#id5)[](#understand-how-it-works "Link to this heading")

When you request `/api/ping`:

1. The **Improved Auto Router** finds the `App\Controllers\Api\Ping` class.
2. It detects the HTTP verb (`GET`).
3. It calls the corresponding method name: `getIndex()`.
4. `ResponseTrait` provides helper methods to produce consistent output.

Here’s how other verbs would map if you added them later:

| HTTP Verb | Method Name |
| --- | --- |
| `GET /api/ping` `POST /api/ping` `DELETE /api/ping` | `getIndex()` `postIndex()` `deleteIndex()` |

## [Content Negotiation with the Format Class](#id6)[](#content-negotiation-with-the-format-class "Link to this heading")

By default, CodeIgniter uses the `CodeIgniter\Format\Format` class to automatically negotiate the response format. It can return responses in either JSON or XML depending on what the client requests.

The `ResponseTrait` sets the format to JSON by default. You can change this to XML if desired, but this tutorial will focus on JSON responses.

```
<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class Ping extends BaseController
{
    use ResponseTrait;

    public function getIndex(): ResponseInterface
    {
        return $this->respond(['status' => 'ok'], 200);
    }
}
```

## [Optional: Return More Data](#id7)[](#optional-return-more-data "Link to this heading")

The `respond()` method can return additional data:

```
<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\CodeIgniter;
use CodeIgniter\HTTP\ResponseInterface;

class Ping extends BaseController
{
    use ResponseTrait;

    public function getIndex(): ResponseInterface
    {
        return $this->respond([
            'status'  => 'ok',
            'time'    => date('c'),
            'version' => CodeIgniter::CI_VERSION,
        ]);
    }
}
```

You now have a working endpoint tested in both the browser and cURL. In the next section, we’ll create our first real database resource. You’ll define a **migration**, **seeder**, and **model** for a simple `books` table that powers the API’s CRUD endpoints.

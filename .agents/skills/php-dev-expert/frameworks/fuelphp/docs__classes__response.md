# Response - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/response.html

---

#### Setting the Status Header

The status header is treated as a "special" header in Fuel. You do not set it as you would
other headers. The status header is set as follows in the controller:

```
$response = new Response($body, 404);
```

#### Setting the Status Header and other headers

```
$headers = array (
    'Cache-Control'     => 'no-cache, no-store, max-age=0, must-revalidate',
    'Expires'           => 'Mon, 26 Jul 1997 05:00:00 GMT',
    'Pragma'            => 'no-cache',
);
$response = new Response($body, 404, $headers);
```

# Request_Curl - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/request/curl.html

---

#### set\_method($method)

The **set\_method** method allows you to set the HTTP request method.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$method` | *required* | The HTTP method (GET, HEAD, POST, PUT, DELETE) to use for this request. | |
| Returns | Request\_Curl, for chaining |
| Example | ``` // create a Request_Curl object $curl = Request::forge('http://rest.example.org/api/v1/this/info', 'curl');  // this is going to be an HTTP POST $curl->set_method('post'); ``` |

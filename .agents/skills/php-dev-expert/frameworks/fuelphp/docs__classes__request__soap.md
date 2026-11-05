# Request_Soap - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/request/soap.html

---

#### set\_params($params)

The **set\_params** method allows you to set parameters to pass on the SOAP request call.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$params` | *required* | Array of parameters for the request. | |
| Returns | Request\_Soap, for chaining |
| Example | ``` // create a Request_Soap object $soap = Request::forge('http://soap.example.org/api/v1/this/info', 'soap');  // set some parameters $soap->set_params(array('userid' => 12, 'data' => $payload)); ``` |

Please note that the format in which you have to define the parameters is dependent on the SOAP service
being called. Some for example expect them to be wrapped in an array. The SOAP Request driver will pass the
parameters to the service in the format you use on `set_params`, so make sure it is correct.

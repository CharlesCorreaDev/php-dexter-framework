# Joomla! CMS 2.5 API » \JHttpTransport

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JHttpTransport.html

---

# JHttpTransport

HTTP transport class interface.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | HTTP |
| since | 11.3 |

## Methods

### \_\_construct

Constructor.

```
__construct(\JRegistry &$options)
```

|  |  |
| --- | --- |
| since | 11.3 |

#### Arguments

$options
:   `\JRegistry`

### request

Send a request to the server and return a JHttpResponse object with the response.

```
request(string $method, \JUri $uri, mixed $data = null, array $headers = null, integer $timeout = null, string $userAgent = null) : \JHttpResponse
```

|  |  |
| --- | --- |
| since | 11.3 |

#### Arguments

$method
:   `string`The HTTP method for sending the request.

$uri
:   `\JUri`The URI to the resource to request.

$data
:   `mixed`Either an associative array or a string to be sent with the request.

$headers
:   `array`An array of request headers to send with the request.

$timeout
:   `integer`Read timeout in seconds.

$userAgent
:   `string`The optional user agent string to send with the request.

#### Response

`\JHttpResponse`

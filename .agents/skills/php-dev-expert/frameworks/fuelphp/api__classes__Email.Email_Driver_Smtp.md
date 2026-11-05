# phpDocumentor » \Email\Email_Driver_Smtp

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Email.Email_Driver_Smtp.html

---

PublicProtectedPrivateInherited

- Methods
- [Class destructor

  ```
  __destruct()
  ```](#__destruct "__destruct :: Class destructor")
- » Protected
- [Initiates the sending process.

  ```
  _send()
  ```](#_send "_send :: Initiates the sending process.")
- [Sends the actual email

  ```
  _send_email()
  ```](#_send_email "_send_email :: Sends the actual email")
- [Performs authentication with the SMTP host

  ```
  smtp_authenticate()
  ```](#smtp_authenticate "smtp_authenticate :: Performs authentication with the SMTP host")
- [Connects to the given smtp and says hello to the other server.

  ```
  smtp_connect()
  ```](#smtp_connect "smtp_connect :: Connects to the given smtp and says hello to the other server.")
- [Close SMTP connection

  ```
  smtp_disconnect()
  ```](#smtp_disconnect "smtp_disconnect :: Close SMTP connection")
- [Get SMTP response

  ```
  smtp_get_response()
  ```](#smtp_get_response "smtp_get_response :: Get SMTP response")
- [Sends data to the SMTP host

  ```
  smtp_send()
  ```](#smtp_send "smtp_send :: Sends data to the SMTP host")
- Properties
- » Protected
- [The SMTP connection

  ```
  $smtp_connection
  ```](#%24smtp_connection "$smtp_connection :: The SMTP connection")

### Methods

## Class destructor

```
__destruct() 
```

## Initiates the sending process.

```
_send() : bool
```

### Returns

`bool`success boolean

## Sends the actual email

```
_send_email() : bool
```

### Returns

`bool`success boolean

## Performs authentication with the SMTP host

```
smtp_authenticate() 
```

## Connects to the given smtp and says hello to the other server.

```
smtp_connect() 
```

## Close SMTP connection

```
smtp_disconnect() 
```

## Get SMTP response

```
smtp_get_response() : string
```

### Exceptions

|  |  |
| --- | --- |
| `\SmtpTimeoutException` |  |

### Returns

`string`SMTP response

## Sends data to the SMTP host

```
smtp_send(string $data, string | bool | string $expecting, bool $return_number) : mixed
```

### Parameters

#### $data

`string`

The SMTP command

#### $expecting

`string``bool``string`

The expected response

#### $return\_number

`bool`

Set to true to return the status number

### Exceptions

|  |  |
| --- | --- |
| `\SmtpCommandFailureException` | When the command failed an expecting is not set to false. |
| `\SmtpTimeoutException` | SMTP connection timed out |

### Returns

`mixed`Result or result number, false when expecting is false

### Properties

## The SMTP connection

```
$smtp_connection 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)

# SMTP | Fat-Free Framework for PHP

> **Fonte / Source:** https://fatfreeframework.com/3.9/smtp

---

[edit](https://fatfreeframework.com/3.9/edit/smtp/main)

# SMTP : SMTP plug-in

The SMTP class is a SMTP plug-in to prepare e-mail messages (headers & attachments) and send them through a socket connection.

Namespace: `\`   
File location: `lib/smtp.php`

---

## Instantiation

**Return class instance**

```
$smtp = new SMTP ( $host, $port, $scheme, $user, $pw );
```

Please refer to the [\_\_construct](smtp.md#__construct) method for details.

The SMTP class extends the [Magic](magic.md) class.

## Methods

### set

**Bind value to e-mail header**

```
string set ( string $key, string $val )
```

This function allows you to bind a value to an e-mail header. For a full list of available fields, see [Internet Message Format, RFC5322](https://tools.ietf.org/html/rfc5322#section-3.6)
(Returns the `$val` value.)

Example:

```
echo $smtp->set('Errors-to', '<[email protected]>');
echo $smtp->set('To', '"Contact Name" <[email protected]>');
echo $smtp->set('Subject', 'Sent with the F3 SMTP plug-in');
```

Multiple recipients:

```
echo $smtp->set('To', '"Username1" <[email protected]>, "Username2" <[email protected]>');
```

NB: The e-mail header key names are case-sensitive and should be uppercase-first-char.

### get

**Return value of e-mail header**

```
string|NULL get ( string $key )
```

This function allows you to return the value of an e-mail header.

Example:

```
echo $smtp->get('From'); // displays e.g. 'J. W. von Goethe <[email protected]>'
```

### exists

**Return TRUE if header exists**

```
bool exists ( string $key )
```

This function returns `TRUE` if a header exists as per the function `set()` described above.

Example:

```
$has_date_header = $smtp->exists('Date'); // returns TRUE
```

### clear

**Remove header**

```
NULL clear ( string $key )
```

This function allows you to remove a header.

Example:

```
$smtp->clear('In-Reply-To');
```

### attach

**Add e-mail attachment**

```
NULL attach ( $filename, [ $alias ] )
```

This function allows you to add an e-mail attachment from a file on the webserver.
The optional `alias` parameter allows you to use a different label for the filename value as it appears in the email attachment, in case you wish to hide the original filename value to enhance security through obfuscation .

`attach` checks whether the filename is a regular file or not (as per the PHP function [is\_file](http://www.php.net/is_file "php.net :: ")), otherwise an `user_error` is raised.

Example:

```
$smtp->attach( './files/pdf/'.$pdf );
$smtp->attach( './pictures/'.$screenshot ); // you can attach as many attachments you need to the same e-mail
```

### send

**Transmit message**

```
bool send ( string $message [, bool $log = TRUE ] )
```

This function allows you to transmit a message. `send` opens a socket connection using the settings provided when instanciating the class. (see [\_\_construct](smtp.md#__construct) below for details).

The `'From'`, `'To'` & `'Subject'` headers are mandatory, and the `$message` as well; otherwise an `user_error` is raised.

The `$log` flag is a toggle switch for suppressing or enabling the log of the client-server conversation history you can retrieve with the [log() method](smtp.md#log).

Returns `TRUE` on success or `FALSE` when:

- Failed to establish a socket connection with the host.
- SSL is unavailable on the server while the SMTP object has been instanciated with `$scheme` == 'ssl'.

Example:

```
$smtp->send($message); // returns TRUE or FALSE
```

### log

**Return client-server conversation history**

```
string log ( )
```

This function allows you to retrieve the client-server conversation history under the form of a command-reply log.

Example:

```
echo '<pre>'.$smtp->log().'</pre>';
```

```
// Outputs:
250-8BITMIME
250-AUTH LOGIN PLAIN XOAUTH XOAUTH2 PLAIN-CLIENTTOKEN
250 CHUNKING
AUTH LOGIN
235 2.7.0 Accepted
MAIL FROM:
(…)
QUIT
502
```

### \_\_construct

**Instantiate class**

```
__construct ( string $host, int $port, string $scheme, string $user, string $pw )
```

The constructor allows you to instantiate the class and specify the settings that will be used by the `send` function.

- `$host` & `$port` of the SMTP server you want to use to send your e-mail messages.
- `$scheme` allows you to use a SSL connection, provided you have the [openssl extension](http://www.php.net/openssl "php.net :: OpenSSL") loaded on the server.
- `$scheme` allows you to use a TLS connection. The encryption will be based on the `STREAM_CRYPTO_METHOD_TLS_CLIENT` method as per the PHP function [stream\_socket\_enable\_crypto](http://www.php.net/manual/en/function.stream-socket-enable-crypto.php "php.net :: stream_socket_enable_crypto").
- `$user` & `$pw` are used to authenticate with the `AUTH LOGIN` SMTP command.

Example:

```
$smtp_ssl = new SMTP ( $host, $port, 'ssl', $user, $pw );
$smtp_tls = new SMTP ( $host, $port, 'tls', $user, $pw );
```

### fixheader

**Fix header**

```
protected string fixheader ( string $key )
```

This function allows to fix a header

This *protected* method is used internally by the `get`, `set`, `exists` & `clear` methods to check and ensure a given header value is well-formed (basically it removes forbidden characters).

### dialog

**Send SMTP command and record server response**

```
protected dialog ( [ string $cmd = NULL [, bool $log = NULL ]] )
```

This *protected* method is used internally by the `send` method and allows to send SMTP command and record server response.

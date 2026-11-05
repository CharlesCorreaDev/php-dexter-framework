# phpDocumentor » \Email\Email_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Email.Email_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [Driver constructor

  ```
  __construct()
  ```](#__construct "__construct :: Driver constructor")
- [Sets the alt body

  ```
  alt_body()
  ```](#alt_body "alt_body :: Sets the alt body")
- [Attaches a file to the email.

  ```
  attach()
  ```](#attach "attach :: Attaches a file to the email.")
- [Add to the bcc recipients list.

  ```
  bcc()
  ```](#bcc "bcc :: Add to the bcc recipients list.")
- [Sets the body

  ```
  body()
  ```](#body "body :: Sets the body")
- [Add to the cc recipients list.

  ```
  cc()
  ```](#cc "cc :: Add to the cc recipients list.")
- [Clear all address lists.

  ```
  clear_addresses()
  ```](#clear_addresses "clear_addresses :: Clear all address lists.")
- [Clear the attachments list.

  ```
  clear_attachments()
  ```](#clear_attachments "clear_attachments :: Clear the attachments list.")
- [Clear the 'bcc' recipient list.

  ```
  clear_bcc()
  ```](#clear_bcc "clear_bcc :: Clear the 'bcc' recipient list.")
- [Clear the 'cc' recipient list.

  ```
  clear_cc()
  ```](#clear_cc "clear_cc :: Clear the 'cc' recipient list.")
- [Clear all recipient lists.

  ```
  clear_recipients()
  ```](#clear_recipients "clear_recipients :: Clear all recipient lists.")
- [Clear the 'reply to' recipient list.

  ```
  clear_reply_to()
  ```](#clear_reply_to "clear_reply_to :: Clear the 'reply to' recipient list.")
- [Clear the 'to' recipient list.

  ```
  clear_to()
  ```](#clear_to "clear_to :: Clear the 'to' recipient list.")
- [Sets the from address and name

  ```
  from()
  ```](#from "from :: Sets the from address and name")
- [Gets to bcc recipients list.

  ```
  get_bcc()
  ```](#get_bcc "get_bcc :: Gets to bcc recipients list.")
- [Gets the body

  ```
  get_body()
  ```](#get_body "get_body :: Gets the body")
- [Gets to cc recipients list.

  ```
  get_cc()
  ```](#get_cc "get_cc :: Gets to cc recipients list.")
- [Get a driver config setting.

  ```
  get_config()
  ```](#get_config "get_config :: Get a driver config setting.")
- [Gets from address and name

  ```
  get_from()
  ```](#get_from "get_from :: Gets from address and name")
- [Get the invalid addresses

  ```
  get_invalid_addresses()
  ```](#get_invalid_addresses "get_invalid_addresses :: Get the invalid addresses")
- [Gets to 'reply to' recipients list.

  ```
  get_reply_to()
  ```](#get_reply_to "get_reply_to :: Gets to 'reply to' recipients list.")
- [Gets the message subject

  ```
  get_subject()
  ```](#get_subject "get_subject :: Gets the message subject")
- [Gets to recipients list.

  ```
  get_to()
  ```](#get_to "get_to :: Gets to recipients list.")
- [Sets custom headers.

  ```
  header()
  ```](#header "header :: Sets custom headers.")
- [Sets the html body and optionally a generated alt body.

  ```
  html_body()
  ```](#html_body "html_body :: Sets the html body and optionally a generated alt body.")
- [Enables or disables driver pipelining.

  ```
  pipelining()
  ```](#pipelining "pipelining :: Enables or disables driver pipelining.")
- [Sets the mail priority

  ```
  priority()
  ```](#priority "priority :: Sets the mail priority")
- [Add to the 'reply to' list.

  ```
  reply_to()
  ```](#reply_to "reply_to :: Add to the 'reply to' list.")
- [Sets the return-path address

  ```
  return_path()
  ```](#return_path "return_path :: Sets the return-path address")
- [Initiates the sending process.

  ```
  send()
  ```](#send "send :: Initiates the sending process.")
- [Set a driver config setting.

  ```
  set_config()
  ```](#set_config "set_config :: Set a driver config setting.")
- [Attach a file using string input

  ```
  string_attach()
  ```](#string_attach "string_attach :: Attach a file using string input")
- [Sets the message subject

  ```
  subject()
  ```](#subject "subject :: Sets the message subject")
- [Add to the to recipients list.

  ```
  to()
  ```](#to "to :: Add to the to recipients list.")
- » Protected
- [Initiates the sending process.

  ```
  _send()
  ```](#_send "_send :: Initiates the sending process.")
- [Add to a recipients list.

  ```
  add_to_list()
  ```](#add_to_list "add_to_list :: Add to a recipients list.")
- [Get the mimetype for an attachment

  ```
  attachment_mime()
  ```](#attachment_mime "attachment_mime :: Get the mimetype for an attachment")
- [Builds the headers and body

  ```
  build_message()
  ```](#build_message "build_message :: Builds the headers and body")
- [Clear the a recipient list.

  ```
  clear_list()
  ```](#clear_list "clear_list :: Clear the a recipient list.")
- [Encodes a mimeheader.

  ```
  encode_mimeheader()
  ```](#encode_mimeheader "encode_mimeheader :: Encodes a mimeheader.")
- [Encodes a string in the given encoding.

  ```
  encode_string()
  ```](#encode_string "encode_string :: Encodes a string in the given encoding.")
- [Finds an attachment.

  ```
  find_attachment()
  ```](#find_attachment "find_attachment :: Finds an attachment.")
- [Returns a formatted string of email addresses.

  ```
  format_addresses()
  ```](#format_addresses "format_addresses :: Returns a formatted string of email addresses.")
- [Generates an alt body

  ```
  generate_alt()
  ```](#generate_alt "generate_alt :: Generates an alt body")
- [Get the attachment headers

  ```
  get_attachment_headers()
  ```](#get_attachment_headers "get_attachment_headers :: Get the attachment headers")
- [Returns the content type

  ```
  get_content_type()
  ```](#get_content_type "get_content_type :: Returns the content type")
- [Gets the header

  ```
  get_header()
  ```](#get_header "get_header :: Gets the header")
- [Returns the mail's type

  ```
  get_mail_type()
  ```](#get_mail_type "get_mail_type :: Returns the mail's type")
- [Get a unique message id

  ```
  get_message_id()
  ```](#get_message_id "get_message_id :: Get a unique message id")
- [Standardize newlines.

  ```
  prep_newlines()
  ```](#prep_newlines "prep_newlines :: Standardize newlines.")
- [Sets unique message boundaries

  ```
  set_boundaries()
  ```](#set_boundaries "set_boundaries :: Sets unique message boundaries")
- [Sets the message headers

  ```
  set_header()
  ```](#set_header "set_header :: Sets the message headers")
- [Validates all the email addresses.

  ```
  validate_addresses()
  ```](#validate_addresses "validate_addresses :: Validates all the email addresses.")
- Properties
- » Protected
- [Message alt body

  ```
  $alt_body
  ```](#%24alt_body "$alt_body :: Message alt body")
- [Attachments array

  ```
  $attachments
  ```](#%24attachments "$attachments :: Attachments array")
- [Bcc recipients list

  ```
  $bcc
  ```](#%24bcc "$bcc :: Bcc recipients list")
- [Message body

  ```
  $body
  ```](#%24body "$body :: Message body")
- [Message boundaries

  ```
  $boundaries
  ```](#%24boundaries "$boundaries :: Message boundaries")
- [Cc recipients list

  ```
  $cc
  ```](#%24cc "$cc :: Cc recipients list")
- [Driver config

  ```
  $config
  ```](#%24config "$config :: Driver config")
- [Custom headers

  ```
  $extra_headers
  ```](#%24extra_headers "$extra_headers :: Custom headers")
- [Message headers

  ```
  $headers
  ```](#%24headers "$headers :: Message headers")
- [Invalid addresses

  ```
  $invalid_addresses
  ```](#%24invalid_addresses "$invalid_addresses :: Invalid addresses")
- [Pipelining enabled?

  ```
  $pipelining
  ```](#%24pipelining "$pipelining :: Pipelining enabled?")
- [Reply to list

  ```
  $reply_to
  ```](#%24reply_to "$reply_to :: Reply to list")
- [Message subject

  ```
  $subject
  ```](#%24subject "$subject :: Message subject")
- [To recipients list

  ```
  $to
  ```](#%24to "$to :: To recipients list")
- [Mail type

  ```
  $type
  ```](#%24type "$type :: Mail type")

### Methods

## Driver constructor

```
__construct(array $config) 
```

### Parameters

#### $config

`array`

driver config

## Sets the alt body

```
alt_body(string $alt_body) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $alt\_body

`string`

The message alt body

### Returns

`\Email\Email_Driver`

## Attaches a file to the email.

```
attach(string $file, bool $inline, string $cid, string $mime, string $name) : \Email\Email_Driver
```

This method will search for the file in the attachment paths set (config/email.php) in the attach\_paths array

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $file

`string`

The file to attach

#### $inline

`bool`

Whether to include the file inline

#### $cid

`string`

The content identifier. Used when attaching inline images

#### $mime

`string`

The file's mime-type

#### $name

`string`

The attachment's name

### Exceptions

|  |  |
| --- | --- |
| `\InvalidAttachmentsException` | Could not read attachment or attachment is empty |

### Returns

`\Email\Email_Driver`

## Add to the bcc recipients list.

```
bcc(string | array $email, string | bool $name) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string``array`

Email address or list of email addresses, array(email => name, email)

#### $name

`string``bool`

Recipient name, false, null or empty for no name

### Returns

`\Email\Email_Driver`

## Sets the body

```
body(string $body) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $body

`string`

The message body

### Returns

`\Email\Email_Driver`

## Add to the cc recipients list.

```
cc(string | array $email, string | bool $name) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string``array`

Email address or list of email addresses, array(email => name, email)

#### $name

`string``bool`

Recipient name, false, null or empty for no name

### Returns

`\Email\Email_Driver`

## Clear all address lists.

```
clear_addresses() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear the attachments list.

```
clear_attachments() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear the 'bcc' recipient list.

```
clear_bcc() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear the 'cc' recipient list.

```
clear_cc() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear all recipient lists.

```
clear_recipients() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear the 'reply to' recipient list.

```
clear_reply_to() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Clear the 'to' recipient list.

```
clear_to() : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Email\Email_Driver`

## Sets the from address and name

```
from(string $email, bool | string $name) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string`

The from email address

#### $name

`bool``string`

The optional from name

### Returns

`\Email\Email_Driver`

## Gets to bcc recipients list.

```
get_bcc() : array
```

### Returns

`array`to bcc recipients list

## Gets the body

```
get_body() : string
```

### Returns

`string`the message body

## Gets to cc recipients list.

```
get_cc() : array
```

### Returns

`array`to cc recipients list

## Get a driver config setting.

```
get_config(string $key, string $default) : mixed
```

### Parameters

#### $key

`string`

Config key

#### $default

`string`

Default value

### Returns

`mixed`the config setting value

## Gets from address and name

```
get_from() : array
```

### Returns

`array`from address and name

## Get the invalid addresses

```
get_invalid_addresses() : array
```

### Returns

`array`An array of invalid email addresses

## Gets to 'reply to' recipients list.

```
get_reply_to() : array
```

### Returns

`array`to 'reply to' recipients list

## Gets the message subject

```
get_subject() : string
```

### Returns

`string`the message subject

## Gets to recipients list.

```
get_to() : array
```

### Returns

`array`to recipients list

## Sets custom headers.

```
header(string | array $header, string $value) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $header

`string``array`

Header type or array of headers

#### $value

`string`

Header value

### Returns

`\Email\Email_Driver`

## Sets the html body and optionally a generated alt body.

```
html_body(string $html, bool $generate_alt, bool $auto_attach) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $html

`string`

The body html

#### $generate\_alt

`bool`

Whether to generate the alt body, will set is html to true

#### $auto\_attach

`bool`

Whether to auto attach inline files

### Returns

`\Email\Email_Driver`

## Enables or disables driver pipelining.

```
pipelining(bool $pipelining) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $pipelining

`bool`

Whether or not to enable pipelining

### Returns

`\Email\Email_Driver`

## Sets the mail priority

```
priority(string $priority) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $priority

`string`

The message priority

### Returns

`\Email\Email_Driver`

## Add to the 'reply to' list.

```
reply_to(string | array $email, string | bool $name) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string``array`

Email address or list of email addresses, array(email => name, email)

#### $name

`string``bool`

The name, false, null or empty for no name

### Returns

`\Email\Email_Driver`

## Sets the return-path address

```
return_path(string $email) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string`

The return-path email address

### Returns

`\Email\Email_Driver`

## Initiates the sending process.

```
send(bool $validate) : bool
```

### Parameters

#### $validate

`bool`

Whether to validate the addresses, falls back to config setting

### Exceptions

|  |  |
| --- | --- |
| `\EmailValidationFailedException` | One or more email addresses did not pass validation |
| `\FuelException` | Cannot send without from address/Cannot send without recipients |

### Returns

`bool`

## Set a driver config setting.

```
set_config(string $key, mixed $value) : object
```

### Parameters

#### $key

`string`

the config key

#### $value

`mixed`

the new config value

### Returns

`object`$this

## Attach a file using string input

```
string_attach(string $contents, string $filename, string $cid, bool $inline, string $mime) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $contents

`string`

File contents

#### $filename

`string`

The files name

#### $cid

`string`

The content identifier. Used when attaching inline images

#### $inline

`bool`

Whether it's an inline attachment

#### $mime

`string`

The file's mime-type

### Returns

`\Email\Email_Driver`

## Sets the message subject

```
subject(string $subject) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $subject

`string`

The message subject

### Returns

`\Email\Email_Driver`

## Add to the to recipients list.

```
to(string | array $email, string | bool $name) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $email

`string``array`

Email address or list of email addresses, array(email => name, email)

#### $name

`string``bool`

Recipient name, false, null or empty for no name

### Returns

`\Email\Email_Driver`

## Initiates the sending process.

```
_send() : bool
```

### Returns

`bool`success boolean

## Add to a recipients list.

```
add_to_list(string $list, string | array $email, string | bool $name) : void
```

### Parameters

#### $list

`string`

List to add to (to, cc, bcc)

#### $email

`string``array`

Email address or list of email addresses, array(email => name, email)

#### $name

`string``bool`

Recipient name, false, null or empty for no name

## Get the mimetype for an attachment

```
attachment_mime(string $file) : \Email\Email_Driver
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $file

`string`

The path to the attachment

### Returns

`\Email\Email_Driver`

## Builds the headers and body

```
build_message(bool $no_bcc) : array
```

### Parameters

#### $no\_bcc

`bool`

Whether to exclude Bcc headers.

### Returns

`array`An array containing the headers and the body

## Clear the a recipient list.

```
clear_list(string | array $list) : void
```

### Parameters

#### $list

`string``array`

List or array of lists

## Encodes a mimeheader.

```
encode_mimeheader(string $header) : string
```

### Parameters

#### $header

`string`

Header to encode

### Returns

`string`Mimeheader encoded string

## Encodes a string in the given encoding.

```
encode_string(string $string, string $encoding, string $newline) : string
```

### Parameters

#### $string

`string`

String to encode

#### $encoding

`string`

The charset

#### $newline

`string`

Newline delimeter

### Exceptions

|  |  |
| --- | --- |
| `\InvalidEmailStringEncoding` | Encoding is not a supported by encoding method |

### Returns

`string`Encoded string

## Finds an attachment.

```
find_attachment($file) : string
```

### Parameters

#### $file

### Exceptions

|  |  |
| --- | --- |
| `\AttachmentNotFoundException` | Email attachment not found |

### Returns

`string`path of the first found attachment

## Returns a formatted string of email addresses.

```
format_addresses(array $addresses) : string
```

### Parameters

#### $addresses

`array`

Array of adresses array(array(name=>name, email=>email));

### Returns

`string`Correctly formatted email addresses

## Generates an alt body

```
generate_alt(string $html, int $wordwrap, string $newline) : string
```

### Parameters

#### $html

`string`

html Body to al body generate from

#### $wordwrap

`int`

Wordwrap length

#### $newline

`string`

Line separator to use

### Returns

`string`The generated alt body

## Get the attachment headers

```
get_attachment_headers($type, $boundary) 
```

### Parameters

#### $type

#### $boundary

## Returns the content type

```
get_content_type(string $mail_type, $boundary) : string
```

### Parameters

#### $mail\_type

`string`

Type of email (plain, html, html\_inline, etc…)

#### $boundary

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` | Invalid content-type |

### Returns

`string`Mail content type

## Gets the header

```
get_header(string $header, bool $formatted) : string | array
```

### Parameters

#### $header

`string`

The header name. Will return all headers, if not specified

#### $formatted

`bool`

Adds newline as suffix and colon as prefix, if true

### Returns

`string``array`Mail header or array of headers

## Returns the mail's type

```
get_mail_type() : string
```

### Returns

`string`Mail type

## Get a unique message id

```
get_message_id() : string
```

### Returns

`string`The message id

## Standardize newlines.

```
prep_newlines(string $string, string $newline) : string
```

### Parameters

#### $string

`string`

String to prep

#### $newline

`string`

The newline delimiter

### Returns

`string`String with standardized newlines

## Sets unique message boundaries

```
set_boundaries() 
```

## Sets the message headers

```
set_header(string $header, string $value) 
```

### Parameters

#### $header

`string`

The header type

#### $value

`string`

The header value

## Validates all the email addresses.

```
validate_addresses() : bool | array
```

### Returns

`bool``array`True if all are valid or an array of recipients which failed validation.

### Properties

## Message alt body

```
$alt_body 
```

## Attachments array

```
$attachments 
```

## Bcc recipients list

```
$bcc 
```

## Message body

```
$body 
```

## Message boundaries

```
$boundaries 
```

## Cc recipients list

```
$cc 
```

## Driver config

```
$config 
```

## Custom headers

```
$extra_headers 
```

## Message headers

```
$headers 
```

## Invalid addresses

```
$invalid_addresses 
```

## Pipelining enabled?

```
$pipelining 
```

## Reply to list

```
$reply_to 
```

## Message subject

```
$subject 
```

## To recipients list

```
$to 
```

## Mail type

```
$type 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)

# Introduction - Email Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/email/introduction.html

---

## Email package

The Email package provides an interface for sending email using either php's mail function, sendmail
or SMTP. The package supports:

- Plain-text mails
- HTML mails, with and optional alternative body
- Attachments
- Inline attachments.

### Installation

The Email package is part of the official download (since version 1.1). You will have to enable the package
either in the app config or include it on the fly.

```
'always_load' => array(
	'packages' => array(
		'email',
	),
),

// Or in a controller:

\Package::load('email');
```

### Configuration

Create (or copy from the package) a config file at *app/config/email.php*. And change the settings needed.

**Please note:** The Email package loads the email config for you, so there is no need to autoload it.

#### General configuration

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| defaults | array | ``` array( /* default config array */ ) ``` | Default settings for every setup group to use. In your setup group you overwrite these values. |
| default\_setup | string | ``` 'default' ``` | The default setup to use if none is profided. |
| setups | array | ``` array( 		'default' => array(), 	) ``` | A setups array with one default setup. Add your own or modify the default setup group. |

#### Group configuration

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| useragent | string | ``` 'FuelPHP, PHP 5.3 Framework' ``` | The user agent. |
| driver | string | ``` 'mail' ``` | The driver to use. Can be mail, smtp, sendmail, mailgun, mandrill or noop (only logs writes to log). Must be lowercase. |
| is\_html | boolean | ``` false ``` | Whether to send as html mail or as plain mail. |
| encode\_headers | boolean | ``` true ``` | Whether to encode subject and recipient names. Requires the [mbstring extension](http://www.php.net/manual/en/ref.mbstring.php). |
| charset | string | ``` 'utf-8' ``` | The email message charset. |
| encoding | string | ``` '8bit' ``` | The email message encoding. Can be 7bit, 8bit, quoted-printable and base64. |
| priority | string | ``` \Email::P_NORMAL ``` | The email's priority. Can be:  - \Email::P\_LOWEST - \Email::P\_LOW - \Email::P\_NORMAL - \Email::P\_HIGH - \Email::P\_HIGHEST |
| from.email | string|false | ``` false ``` | Use this to set a default from email address. |
| from.name | string|false | ``` false ``` | Use this to set a default from name. |
| validate | bool | ``` true ``` | Set to false if you don't want to validate the addresses. Can result in failure in sending. |
| auto\_attach | bool | ``` true ``` | Whether to auto attach (background) images from a html body. |
| generate\_alt | bool | ``` true ``` | Whether to automatically generate an alt body from a html body. |
| wordwrap | int|false | ``` 76 ``` | Word wrap size. If lower than anything above 0 will wrap. This setting is ignored when using base64 or quoted-printable. |
| sendmail\_path | string | ``` '/usr/sbin/sendmail' ``` | Path to sendmail. |
| smtp.host | string | ``` '' ``` | SMTP host. |
| smtp.port | int | ``` 25 ``` | SMTP port. |
| smtp.username | string | ``` '' ``` | SMTP username. |
| smtp.password | string | ``` '' ``` | SMTP password. |
| smtp.timeout | int | ``` 5 ``` | SMTP timeout. Increase this when a SMTP server times out during the sending proccess. |
| smtp.starttls | bool | ``` false ``` | Whether a SMTP server needs STARTTLS command. |
| newline | string | ``` "\n" ``` | New line. |
| attach\_paths | array | ``` array(''); ``` | Array of attachment paths. When adding attachments, the driver will look in these paths and attach the first on found. Leave the empty ('') in there to allow absolute paths. |
| return\_path | string|false | ``` false ``` | Use this to set a default return-path email address. |
| remove\_html\_comments | bool | ``` true ``` | When true, all comments inside the HTML body will be stripped. |
| relative\_protocol\_replacement | string|false | ``` false ``` | When set to a string, all relative protocol URI's (those starting with // instead of http://) will be replaced by the value you specify here. This allows you to convert them to http:// or https://, since some Email clients (Outlook!) do not support relative protocol URI's. |
| mandrill.key | string | ``` 'api_key' ``` | Your Mandrill API Key. |
| mandrill.message\_options | array | ``` array() ``` | Check Mandrill [docs](https://mandrillapp.com/api/docs/messages.JSON.html#method=send). (Look for message struct) |
| mandrill.send\_options.async | bool | ``` false ``` | Enable a background sending mode |
| mandrill.send\_options.ip\_pool | string | ``` null ``` | The name of the dedicated ip pool that should be used to send the message |
| mandrill.send\_options.send\_at | string | ``` null ``` | When this message should be sent as a UTC timestamp in YYYY-MM-DD HH:MM:SS format. |

Make sure to install **mandrill/mandrill** composer package if you want to use the mandrill driver.

#### Mailgun configuration

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| key | string | ``` 'YOUR KEY' ``` | The key of your mailgun account. |
| domain | string | ``` 'YOUR DOMAIN' ``` | The domain of your website |

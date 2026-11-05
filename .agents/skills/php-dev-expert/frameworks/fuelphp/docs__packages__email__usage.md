# Usage - Email Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/email/usage.html

---

## Using the Email package

The email package needs only 3 things from you in order to start sending emails.

1. An address to 'send from'.
2. An address to send to.
3. And last but not least, the message

### Let's send mails.

```
// Create an instance
$email = Email::forge();

// Set the from address
$email->from('my@email.me', 'My Name');

// Set the to address
$email->to('receiver@elsewhere.co.uk', 'Johny Squid');

// Set a subject
$email->subject('This is the subject');

// Set multiple to addresses

$email->to(array(
	'example@mail.com',
	'another@mail.com' => 'With a Name',
));

// And set the body.
$email->body('This is my message');
```

At this point we're ready to start sending the mail.

### Exceptions

When sending a mail. You can encounter 2 exception types.

- **\EmailValidationFailedException**: thrown when one or more email addresses doesn't pass validation
- **\EmailSendingFailedException**, thrown when the driver failed to send the exception

The example blow shows you how to handle those exceptions.

```
try
{
	$email->send();
}
catch(\EmailValidationFailedException $e)
{
	// The validation failed
}
catch(\EmailSendingFailedException $e)
{
	// The driver could not send the email
}
```

### HTML mails.

Sending HTML mail is not very different from sending normal mails:

```
// Set a html body message
$email->html_body(\View::forge('email/template', $email_data));

/** By default this will also generate an alt body from the html,
	and attach any inline files (not paths like http://...)       **/

// Set an alt body, this is optional.
$email->alt_body('This is my alt body, for non-html viewers.');
```

### Attachments

The Email package supports two kinds of attachments: normal (attachment), and inline. Use an inline attachment if
you want to use in inside the mail. You might, for instance, want to have a graphic in your mail, and you want people to see
that image offline also. Some clients don't cache that, and yes that's dumb. But it's the interwebs and stuff like that happens.

```
// Add an attachment
$email->attach(DOCROOT.'dir/my_img.png');

// Add an inline attachment
// Add a cid here to point to the html
$email->attach(DOCROOT.'dir/my_img.png', true, 'cid:my_conten_id');
```

You can also add string attachments:

```
$contents = file_get_contents($my_file);
$email->string_attach($contents, $filename);
	
```

By default html images are auto included, but it only includes local files.
Look at the following html to see how it works.

```
<!-- This is included -->
<img src="path/to/my/file.png" />

<!-- This is not included -->
<img src="http://remote_host/file.jpeg" />

<!-- This is not included -->
<img src="cid:my_conten_id" />
	
```

The last tag you saw (with the cid:) is also not included. In this situation the email expects you to attach that file yourself using an inline attachment.

### Priority

Alter a mail's priority by using the [priority](docs__packages__email__methods.md#method_priority) method.

```
$email->priority(\Email::P_HIGH);
```

### Pipelining

Pipelining is a mechanism with which you can send out multiple emails at once.

```
$email->pipelining($true);
```

Once enabled, you can use the same `$email` object to construct and send multiple emails, re-using the same connection to the mailserver.
You should consult with your mail server hosting company to see if this is allowed, and what the maximum amount of emails is that you
can send out in a single pipeline. Most hosters limit this to a specific amount, after which the server disconnects.

Currently, only the SMTP driver supports pipelining.

## Drivers

### Mailgun driver

[Mailgun](http://www.mailgun.com/) is a service by Rackspace that allows you to send emails by demand. You will need to install the [Mailgun library](https://github.com/mailgun/mailgun-php) with composer in your FuelPHP.

Add the next line to your *composer.json* file and execute the update

```
"mailgun/mailgun-php": "1.6"
```

```
$ composer update
```

Once you have installed the package you will have to set up the config for your App.

```
/**
 * Override default Email.php config
 */
return array(
    'defaults' => array(
        'driver' => 'mailgun',
        'mailgun' => array(
            'key' => 'YOUR KEY',
            'domain' => 'YOUR DOMAIN'
        ),
    ),
);
```

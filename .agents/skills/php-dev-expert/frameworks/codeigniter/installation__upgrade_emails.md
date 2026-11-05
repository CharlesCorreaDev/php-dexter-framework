# Upgrade Emails — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_emails.html

---

# Upgrade Emails[](#upgrade-emails "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Email Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/email.html)
- [Email Documentation CodeIgniter 4.x](libraries__email.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- Only small things like the method names and the loading of the library have changed.
- The behavior when using the SMTP protocol has been slightly changed. You may not be able to communicate with your SMTP server properly if you use the CI3 settings. See [SSL versus TLS for SMTP Protocol](libraries__email.md#email-ssl-tls-for-smtp) and [Email Preferences](libraries__email.md#email-preferences).

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Within your class change the `$this->load->library('email');` to `$email = service('email');`.
2. From that on you have to replace every line starting with `$this->email` to `$email`.
3. The methods in the Email class are named slightly different. All methods, except for `send()`, `attach()`, `printDebugger()` and `clear()` have a `set` as prefix followed by the previous method name. `bcc()` is now `setBcc()` and so on.
4. The config attributes in **app/Config/Email.php** have changed. You should have a look at the [Setting Email Preferences](libraries__email.md#setting-email-preferences) to have a list of the new attributes.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('email');

$this->email->from('[email protected]', 'Your Name');
$this->email->to('[email protected]');
$this->email->cc('[email protected]');
$this->email->bcc('[email protected]');

$this->email->subject('Email Test');
$this->email->message('Testing the email class.');

$this->email->send();
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$email = service('email');

$email->setFrom('[email protected]', 'Your Name');
$email->setTo('[email protected]');
$email->setCC('[email protected]');
$email->setBCC('[email protected]');

$email->setSubject('Email Test');
$email->setMessage('Testing the email class.');

$email->send();
```

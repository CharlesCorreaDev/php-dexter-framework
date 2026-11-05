# Documentation - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs

---

HTML Purifier's documentation is organized by topic. New users should
read the [INSTALL](http://htmlpurifier.org/live/INSTALL) file that comes with your
HTML Purifier download. Any questions about HTML Purifier can be asked
at the [support forums](http://htmlpurifier.org/phorum/) (no
registration required!)

## Table of Contents

- 1.[For First-Time users](#toclink0)
- 2.[For Advanced Users](#toclink1)
- 3.[For Contributors](#toclink2)
- 4.[Frequently Asked Questions](#toclink3)
  - 4.1.[What does %HTML.Allowed mean?](#toclink4)
  - 4.2.[My attributes are mysteriously disappearing!](#toclink5)
  - 4.3.[How do I prevent foreign characters like Ã¤ and &nbsp; from turning into ÃÂ¤?](#toclink6)
  - 4.4.[I can't use the target or name attribute in my a tags!](#toclink7)
  - 4.5.[Is HTML Purifier slow?](#toclink8)
- 5.[Miscellaneous](#toclink9)

## For First-Time users

The basic code for getting HTML Purifier setup is very simple:

```
require_once '/path/to/HTMLPurifier.auto.php';

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
$clean_html = $purifier->purify($dirty_html);
```

Replace `$dirty_html` with the HTML you want to purify
and use `$clean_html` instead. While HTML Purifier
has a lot of configuration knobs, the default configuration of
HTML Purifier is quite safe and should work for many users.

It's highly recommended to take a look at the [full
install documentation](http://htmlpurifier.org/live/INSTALL) for more information, as it will give advice
on how to make sure HTML Purifier's output is matches your page's character
encoding

## For Advanced Users

- [End-User
  Documentation](index.md) â In-depth documents on how to get
  the most out of HTML Purifier. These are located in the `docs/`
  folder of your HTML Purifier installation.
- [Configuration
  documentation](http://htmlpurifier.org/live/configdoc/plain.html) â These are various configuration directives
  that can be used to customize HTML Purifier's behavior.
- [Doxygen-generated
  Documentation](http://htmlpurifier.org/doxygen/html/) â No class left undocumented! Cross-referenced
  code! A must-read for any prospective HTML Purifier hacker.
- [Print
  Definition](http://htmlpurifier.org/live/smoketests/printDefinition.php) â If you want to actually see what HTML Purifier's
  filtering rules are, look no further than to this page. You can even
  experiment with the configuration to see how things respond to different
  directives.

P.S. HTML Purifier's source code is well documented and very readable.
If a question of your isn't answered by any of the above resources,
go to the source! (Or ask in the forums.)

## For Contributors

As is with any open source project, HTML Purifier always is looking for
developers, writers and other folks willing to lend a hand. There are any
number of things to work on! Please, take a moment to
[find out how
you can help out this project](http://htmlpurifier.org/contribute).

## Frequently Asked Questions

### What does %HTML.Allowed mean?

The percent-dot format is a shorthand for HTML Purifier's configuration
directives. It takes the form of %Namespace.Directive. For
practical purposes, %HTML.Allowed translates into the following PHP
code:

```
$config->set('HTML', 'Allowed', $value);
```

### My attributes are mysteriously disappearing!

You've probably got [magic quotes](http://php.net/manual/en/security.magicquotes.php)
turned on, which is interfering with the single and double-quotes in
HTML attributes. The usual way to fix this is
[with
some runtime code or an ini tweak.](http://php.net/manual/en/security.magicquotes.disabling.php) Be sure not to introduce any
SQL injection vulnerabilities!

### How do I prevent foreign characters like Ã¤ and `&nbsp;` from turning into ÃÂ¤?

This usually means that HTML Purifier is parsing your code as UTF-8, but
your output encoding is something else. Read up [this
document on UTF-8](enduser-utf8.md) to learn how to fix this. (Short answer: use
%Core.Encoding or switch to UTF-8.)

### I can't use the `target` or `name` attribute in my `a` tags!

The `target` attribute has been deprecated for a long time, so
I highly recommend you look at other ways of, say, opening new windows
when you click a link (my favorites are âDon't do it!â or, if you
must, JavaScript) But if you must, the
[%Attr.AllowedFrameTargets](http://htmlpurifier.org/live/configdoc/plain.html#Attr.AllowedFrameTargets)
directive is what you are looking for.

The `name` attribute is dependent on IDs being enabled.
See [this document on enabling user IDs](enduser-id.md) for more information.

### Is HTML Purifier slow?

HTML Purifier isn't exactly light or speedy; this is a tradeoff for the
power and security the library affords. You can combat this by reading
[Speeding up HTML Purifier](enduser-slow.md) or using
the [standalone](http://htmlpurifier.org/download#Standalone) version.

## Miscellaneous

- [XSS
  Attacks Smoketest](http://htmlpurifier.org/live/smoketests/xssAttacks.php) â Tests how well HTML Purifier fares
  against RSnake's famous cheatsheet of XSS attacks.
- [Roadmap](http://htmlpurifier.org/live/TODO)
  â Subject to lots of delays, but it's a glimpse of the future
- [Artwork](http://htmlpurifier.org/live/art/)
  â Extra media goodies.

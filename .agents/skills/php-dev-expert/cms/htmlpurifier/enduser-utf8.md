# UTF-8: The Secret of Character Encoding - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-utf8.html

---

# UTF-8: The Secret of Character Encoding

Filed under End-User

Return to the [index](index.md).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

Character encoding and character sets are not that
difficult to understand, but so many people blithely stumble
through the worlds of programming without knowing what to actually
do about it, or say "Ah, it's a job for those *internationalization*
experts." No, it is not! This document will walk you through
determining the encoding of your system and how you should handle
this information. It will stay away from excessive discussion on
the internals of character encoding.

This document is not designed to be read in its entirety: it will
slowly introduce concepts that build on each other: you need not get to
the bottom to have learned something new. However, I strongly
recommend you read all the way to **Why UTF-8?**, because at least
at that point you'd have made a conscious decision not to migrate,
which can be a rewarding (but difficult) task.

> Asides
>
> Text in this formatting is an **aside**,
> interesting tidbits for the curious but not strictly necessary material to
> do the tutorial. If you read this text, you'll come out
> with a greater understanding of the underlying issues.

## Table of Contents

1. [Finding the real encoding](#findcharset)
2. [Finding the embedded encoding](#findmetacharset)
3. [Fixing the encoding](#fixcharset)
   1. [No embedded encoding](#fixcharset-none)
   2. [Embedded encoding disagrees](#fixcharset-diff)
   3. [Changing the server encoding](#fixcharset-server)
      1. [PHP header() function](#fixcharset-server-php)
      2. [PHP ini directive](#fixcharset-server-phpini)
      3. [Non-PHP](#fixcharset-server-nophp)
      4. [.htaccess](#fixcharset-server-htaccess)
      5. [File extensions](#fixcharset-server-ext)
   4. [XML](#fixcharset-xml)
   5. [Inside the process](#fixcharset-internals)
4. [Why UTF-8?](#whyutf8)
   1. [Internationalization](#whyutf8-i18n)
   2. [User-friendly](#whyutf8-user)
   3. [Forms](#whyutf8-forms)
      1. [application/x-www-form-urlencoded](#whyutf8-forms-urlencoded)
      2. [multipart/form-data](#whyutf8-forms-multipart)
   4. [Well supported](#whyutf8-support)
   5. [HTML Purifiers](#whyutf8-htmlpurifier)
5. [Migrate to UTF-8](#migrate)
   1. [Configuring your database](#migrate-db)
      1. [Legit method](#migrate-db-legit)
      2. [Binary](#migrate-db-binary)
   2. [Text editor](#migrate-editor)
   3. [Byte Order Mark (headers already sent!)](#migrate-bom)
   4. [Fonts](#migrate-fonts)
      1. [Obscure scripts](#migrate-fonts-obscure)
      2. [Occasional use](#migrate-fonts-occasional)
   5. [Dealing with variable width in functions](#migrate-variablewidth)
6. [Further Reading](#externallinks)

## Finding the real encoding

In the beginning, there was ASCII, and things were simple. But they
weren't good, for no one could write in Cyrillic or Thai. So there
exploded a proliferation of character encodings to remedy the problem
by extending the characters ASCII could express. This ridiculously
simplified version of the history of character encodings shows us that
there are now many character encodings floating around.

> A **character encoding** tells the computer how to
> interpret raw zeroes and ones into real characters. It
> usually does this by pairing numbers with characters.
>
> There are many different types of character encodings floating
> around, but the ones we deal most frequently with are ASCII,
> 8-bit encodings, and Unicode-based encodings.
>
> - **ASCII** is a 7-bit encoding based on the
>   English alphabet.
> - **8-bit encodings** are extensions to ASCII
>   that add a potpourri of useful, non-standard characters
>   like é and æ. They can only add 127 characters,
>   so usually only support one script at a time. When you
>   see a page on the web, chances are it's encoded in one
>   of these encodings.
> - **Unicode-based encodings** implement the
>   Unicode standard and include UTF-8, UTF-16 and UTF-32/UCS-4.
>   They go beyond 8-bits and support almost
>   every language in the world. UTF-8 is gaining traction
>   as the dominant international encoding of the web.

The first step of our journey is to find out what the encoding of
your website is. The most reliable way is to ask your
browser:

Mozilla Firefox
:   Tools > Page Info: Encoding

Internet Explorer
:   View > Encoding: bulleted item is unofficial name

Internet Explorer won't give you the MIME (i.e. useful/real) name of the
character encoding, so you'll have to look it up using their description.
Some common ones:

| IE's Description | Mime Name |
| --- | --- |
| Windows | |
| --- | --- |
| Arabic (Windows) | Windows-1256 |
| Baltic (Windows) | Windows-1257 |
| Central European (Windows) | Windows-1250 |
| Cyrillic (Windows) | Windows-1251 |
| Greek (Windows) | Windows-1253 |
| Hebrew (Windows) | Windows-1255 |
| Thai (Windows) | TIS-620 |
| Turkish (Windows) | Windows-1254 |
| Vietnamese (Windows) | Windows-1258 |
| Western European (Windows) | Windows-1252 |
| ISO | |
| --- | --- |
| Arabic (ISO) | ISO-8859-6 |
| Baltic (ISO) | ISO-8859-4 |
| Central European (ISO) | ISO-8859-2 |
| Cyrillic (ISO) | ISO-8859-5 |
| Estonian (ISO) | ISO-8859-13 |
| Greek (ISO) | ISO-8859-7 |
| Hebrew (ISO-Logical) | ISO-8859-8-l |
| Hebrew (ISO-Visual) | ISO-8859-8 |
| Latin 9 (ISO) | ISO-8859-15 |
| Turkish (ISO) | ISO-8859-9 |
| Western European (ISO) | ISO-8859-1 |
| Other | |
| --- | --- |
| Chinese Simplified (GB18030) | GB18030 |
| Chinese Simplified (GB2312) | GB2312 |
| Chinese Simplified (HZ) | HZ |
| Chinese Traditional (Big5) | Big5 |
| Japanese (Shift-JIS) | Shift\_JIS |
| Japanese (EUC) | EUC-JP |
| Korean | EUC-KR |
| Unicode (UTF-8) | UTF-8 |

Internet Explorer does not recognize some of the more obscure
character encodings, and having to lookup the real names with a table
is a pain, so I recommend using Mozilla Firefox to find out your
character encoding.

## Finding the embedded encoding

At this point, you may be asking, "Didn't we already find out our
encoding?" Well, as it turns out, there are multiple places where
a web developer can specify a character encoding, and one such place
is in a `META` tag:

```
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
```

You'll find this in the `HEAD` section of an HTML document.
The text to the right of `charset=` is the "claimed"
encoding: the HTML claims to be this encoding, but whether or not this
is actually the case depends on other factors. For now, take note
if your `META` tag claims that either:

1. The character encoding is the same as the one reported by the
   browser,
2. The character encoding is different from the browser's, or
3. There is no `META` tag at all! (horror, horror!)

## Fixing the encoding

The advice given here is for pages being served as
vanilla `text/html`. Different practices must be used
for `application/xml` or `application/xml+xhtml`, see
[W3C's
document on XHTML media types](http://www.w3.org/TR/2002/NOTE-xhtml-media-types-20020430/) for more information.

If your `META` encoding and your real encoding match,
savvy! You can skip this section. If they don't...

### No embedded encoding

If this is the case, you'll want to add in the appropriate
`META` tag to your website. It's as simple as copy-pasting
the code snippet above and replacing UTF-8 with whatever is the mime name
of your real encoding.

> For all those skeptics out there, there is a very good reason
> why the character encoding should be explicitly stated. When the
> browser isn't told what the character encoding of a text is, it
> has to guess: and sometimes the guess is wrong. Hackers can manipulate
> this guess in order to slip XSS past filters and then fool the
> browser into executing it as active code. A great example of this
> is the [Google UTF-7
> exploit](http://shiflett.org/archive/177).
>
> You might be able to get away with not specifying a character
> encoding with the `META` tag as long as your webserver
> sends the right Content-Type header, but why risk it? Besides, if
> the user downloads the HTML file, there is no longer any webserver
> to define the character encoding.

### Embedded encoding disagrees

This is an extremely common mistake: another source is telling
the browser what the
character encoding is and is overriding the embedded encoding. This
source usually is the Content-Type HTTP header that the webserver (i.e.
Apache) sends. A usual Content-Type header sent with a page might
look like this:

```
Content-Type: text/html; charset=ISO-8859-1
```

Notice how there is a charset parameter: this is the webserver's
way of telling a browser what the character encoding is, much like
the `META` tags we touched upon previously.

> In fact, the `META` tag is
> designed as a substitute for the HTTP header for contexts where
> sending headers is impossible (such as locally stored files without
> a webserver). Thus the name `http-equiv` (HTTP equivalent).

There are two ways to go about fixing this: changing the `META`
tag to match the HTTP header, or changing the HTTP header to match
the `META` tag. How do we know which to do? It depends
on the website's content: after all, headers and tags are only ways of
describing the actual characters on the web page.

If your website:

...only uses ASCII characters,
:   Either way is fine, but I recommend switching both to
    UTF-8 (more on this later).

...uses special characters, and they display properly,
:   Change the embedded encoding to the server encoding.

...uses special characters, but users often complain that they come out garbled,
:   Change the server encoding to the embedded encoding.

Changing a META tag is easy: just swap out the old encoding
for the new. Changing the server (HTTP header) encoding, however,
is slightly more difficult.

### Changing the server encoding

#### PHP header() function

The simplest way to handle this problem is to send the encoding
yourself, via your programming language. Since you're using HTML
Purifier, I'll assume PHP, although it's not too difficult to do
similar things in
[other
languages](http://www.w3.org/International/O-HTTP-charset#scripting). The appropriate code is:

```
header('Content-Type:text/html; charset=UTF-8');
```

...replacing UTF-8 with whatever your embedded encoding is.
This code must come before any output, so be careful about
stray whitespace in your application (i.e., any whitespace before
output excluding whitespace within <?php ?> tags).

#### PHP ini directive

PHP also has a neat little ini directive that can save you a
header call: `default_charset`. Using this code:

```
ini_set('default_charset', 'UTF-8');
```

...will also do the trick. If PHP is running as an Apache module (and
not as FastCGI, consult
[phpinfo](http://php.net/phpinfo)() for details), you can even use htaccess to apply this property
across many PHP files:

```
php_value default_charset "UTF-8"
```

> As with all INI directives, this can
> also go in your php.ini file. Some hosting providers allow you to customize
> your own php.ini file, ask your support for details. Use:
>
> ```
> default_charset = "utf-8"
> ```

#### Non-PHP

You may, for whatever reason, need to set the character encoding
on non-PHP files, usually plain ol' HTML files. Doing this
is more of a hit-or-miss process: depending on the software being
used as a webserver and the configuration of that software, certain
techniques may work, or may not work.

#### .htaccess

On Apache, you can use an .htaccess file to change the character
encoding. I'll defer to
[W3C](http://www.w3.org/International/questions/qa-htaccess-charset)
for the in-depth explanation, but it boils down to creating a file
named .htaccess with the contents:

```
AddCharset UTF-8 .html
```

Where UTF-8 is replaced with the character encoding you want to
use and .html is a file extension that this will be applied to. This
character encoding will then be set for any file directly in
or in the subdirectories of directory you place this file in.

If you're feeling particularly courageous, you can use:

```
AddDefaultCharset UTF-8
```

...which changes the character set Apache adds to any document that
doesn't have any Content-Type parameters. This directive, which the
default configuration file sets to iso-8859-1 for security
reasons, is probably why your headers mismatch
with the `META` tag. If you would prefer Apache not to be
butting in on your character encodings, you can tell it not
to send anything at all:

```
AddDefaultCharset Off
```

...making your internal charset declaration (usually the `META` tags)
the sole source of character encoding
information. In these cases, it is *especially* important to make
sure you have valid `META` tags on your pages and all the
text before them is ASCII.

> These directives can also be
> placed in httpd.conf file for Apache, but
> in most shared hosting situations you won't be able to edit this file.

#### File extensions

If you're not allowed to use .htaccess files, you can often
piggy-back off of Apache's default AddCharset declarations to get
your files in the proper extension. Here are Apache's default
character set declarations:

| Charset | File extension(s) |
| --- | --- |
| ISO-8859-1 | .iso8859-1 .latin1 |
| ISO-8859-2 | .iso8859-2 .latin2 .cen |
| ISO-8859-3 | .iso8859-3 .latin3 |
| ISO-8859-4 | .iso8859-4 .latin4 |
| ISO-8859-5 | .iso8859-5 .latin5 .cyr .iso-ru |
| ISO-8859-6 | .iso8859-6 .latin6 .arb |
| ISO-8859-7 | .iso8859-7 .latin7 .grk |
| ISO-8859-8 | .iso8859-8 .latin8 .heb |
| ISO-8859-9 | .iso8859-9 .latin9 .trk |
| ISO-2022-JP | .iso2022-jp .jis |
| ISO-2022-KR | .iso2022-kr .kis |
| ISO-2022-CN | .iso2022-cn .cis |
| Big5 | .Big5 .big5 .b5 |
| WINDOWS-1251 | .cp-1251 .win-1251 |
| CP866 | .cp866 |
| KOI8-r | .koi8-r .koi8-ru |
| KOI8-ru | .koi8-uk .ua |
| ISO-10646-UCS-2 | .ucs2 |
| ISO-10646-UCS-4 | .ucs4 |
| UTF-8 | .utf8 |
| GB2312 | .gb2312 .gb |
| utf-7 | .utf7 |
| EUC-TW | .euc-tw |
| EUC-JP | .euc-jp |
| EUC-KR | .euc-kr |
| shift\_jis | .sjis |

So, for example, a file named `page.utf8.html` or
`page.html.utf8` will probably be sent with the UTF-8 charset
attached, the difference being that if there is an
`AddCharset charset .html` declaration, it will override
the .utf8 extension in `page.utf8.html` (precedence moves
from right to left). By default, Apache has no such declaration.

#### Microsoft IIS

If anyone can contribute information on how to configure Microsoft
IIS to change character encodings, I'd be grateful.

### XML

`META` tags are the most common source of embedded
encodings, but they can also come from somewhere else: XML
Declarations. They look like:

```
<?xml version="1.0" encoding="UTF-8"?>
```

...and are most often found in XML documents (including XHTML).

For XHTML, this XML Declaration theoretically
overrides the `META` tag. In reality, this happens only when the
XHTML is actually served as legit XML and not HTML, which is almost always
never due to Internet Explorer's lack of support for
`application/xhtml+xml` (even though doing so is often
argued to be [good
practice](http://www.hixie.ch/advocacy/xhtml) and is required by the XHTML 1.1 specification).

For XML, however, this XML Declaration is extremely important.
Since most webservers are not configured to send charsets for .xml files,
this is the only thing a parser has to go on. Furthermore, the default
for XML files is UTF-8, which often butts heads with more common
ISO-8859-1 encoding (you see this in garbled RSS feeds).

In short, if you use XHTML and have gone through the
trouble of adding the XML Declaration, make sure it jives
with your `META` tags (which should only be present
if served in text/html) and HTTP headers.

### Inside the process

This section is not required reading,
but may answer some of your questions on what's going on in all
this character encoding hocus pocus. If you're interested in
moving on to the next phase, skip this section.

A logical question that follows all of our wheeling and dealing
with multiple sources of character encodings is "Why are there
so many options?" To answer this question, we have to turn
back our definition of character encodings: they allow a program
to interpret bytes into human-readable characters.

Thus, a chicken-egg problem: a character encoding
is necessary to interpret the
text of a document. A `META` tag is in the text of a document.
The `META` tag gives the character encoding. How can we
determine the contents of a `META` tag, inside the text,
if we don't know it's character encoding? And how do we figure out
the character encoding, if we don't know the contents of the
`META` tag?

Fortunately for us, the characters we need to write the
`META` are in ASCII, which is pretty much universal
over every character encoding that is in common use today. So,
all the web-browser has to do is parse all the way down until
it gets to the Content-Type tag, extract the character encoding
tag, then re-parse the document according to this new information.

Obviously this is complicated, so browsers prefer the simpler
and more efficient solution: get the character encoding from a
somewhere other than the document itself, i.e. the HTTP headers,
much to the chagrin of HTML authors who can't set these headers.

## Why UTF-8?

So, you've gone through all the trouble of ensuring that your
server and embedded characters all line up properly and are
present. Good job: at
this point, you could quit and rest easy knowing that your pages
are not vulnerable to character encoding style XSS attacks.
However, just as having a character encoding is better than
having no character encoding at all, having UTF-8 as your
character encoding is better than having some other random
character encoding, and the next step is to convert to UTF-8.
But why?

### Internationalization

Many software projects, at one point or another, suddenly realize
that they should be supporting more than one language. Even regular
usage in one language sometimes requires the occasional special character
that, without surprise, is not available in your character set. Sometimes
developers get around this by adding support for multiple encodings: when
using Chinese, use Big5, when using Japanese, use Shift-JIS, when
using Greek, etc. Other times, they use character references with great
zeal.

UTF-8, however, obviates the need for any of these complicated
measures. After getting the system to use UTF-8 and adjusting for
sources that are outside the hand of the browser (more on this later),
UTF-8 just works. You can use it for any language, even many languages
at once, you don't have to worry about managing multiple encodings,
you don't have to use those user-unfriendly entities.

### User-friendly

Websites encoded in Latin-1 (ISO-8859-1) which occasionally need
a special character outside of their scope often will use a character
entity reference to achieve the desired effect. For instance, θ can be
written `&theta;`, regardless of the character encoding's
support of Greek letters.

This works nicely for limited use of special characters, but
say you wanted this sentence of Chinese text: 激光,
這兩個字是甚麼意思.
The ampersand encoded version would look like this:

```
&#28608;&#20809;, &#36889;&#20841;&#20491;&#23383;&#26159;&#29978;&#40636;&#24847;&#24605;
```

Extremely inconvenient for those of us who actually know what
character entities are, totally unintelligible to poor users who don't!
Even the slightly more user-friendly, "intelligible" character
entities like `&theta;` will leave users who are
uninterested in learning HTML scratching their heads. On the other
hand, if they see θ in an edit box, they'll know that it's a
special character, and treat it accordingly, even if they don't know
how to write that character themselves.

> Wikipedia is a great case study for
> an application that originally used ISO-8859-1 but switched to UTF-8
> when it became far to cumbersome to support foreign languages. Bots
> will now actually go through articles and convert character entities
> to their corresponding real characters for the sake of user-friendliness
> and searchability. See
> [Meta's
> page on special characters](http://meta.wikimedia.org/wiki/Help:Special_characters) for more details.

### Forms

While we're on the tack of users, how do non-UTF-8 web forms deal
with characters that are outside of their character set? Rather than
discuss what UTF-8 does right, we're going to show what could go wrong
if you didn't use UTF-8 and people tried to use characters outside
of your character encoding.

The troubles are large, extensive, and extremely difficult to fix (or,
at least, difficult enough that if you had the time and resources to invest
in doing the fix, you would be probably better off migrating to UTF-8).
There are two types of form submission: `application/x-www-form-urlencoded`
which is used for GET and by default for POST, and `multipart/form-data`
which may be used by POST, and is required when you want to upload
files.

The following is a summarization of notes from
[`FORM` submission and i18n](http://web.archive.org/web/20060427015200/ppewww.ph.gla.ac.uk/~flavell/charset/form-i18n.html). That document contains lots
of useful information, but is written in a rambly manner, so
here I try to get right to the point. (Note: the original has
disappeared off the web, so I am linking to the Web Archive copy.)

#### `application/x-www-form-urlencoded`

This is the Content-Type that GET requests must use, and POST requests
use by default. It involves the ubiquitous percent encoding format that
looks something like: `%C3%86`. There is no official way of
determining the character encoding of such a request, since the percent
encoding operates on a byte level, so it is usually assumed that it
is the same as the encoding the page containing the form was submitted
in. ([RFC 3986](http://tools.ietf.org/html/rfc3986#section-2.5)
recommends that textual identifiers be translated to UTF-8; however, browser
compliance is spotty.) You'll run into very few problems
if you only use characters in the character encoding you chose.

However, once you start adding characters outside of your encoding
(and this is a lot more common than you may think: take curly
"smart" quotes from Microsoft as an example),
a whole manner of strange things start to happen. Depending on the
browser you're using, they might:

- Replace the unsupported characters with useless question marks,
- Attempt to fix the characters (example: smart quotes to regular quotes),
- Replace the character with a character entity reference, or
- Send it anyway as a different character encoding mixed in
  with the original encoding (usually Windows-1252 rather than
  iso-8859-1 or UTF-8 interspersed in 8-bit)

To properly guard against these behaviors, you'd have to sniff out
the browser agent, compile a database of different behaviors, and
take appropriate conversion action against the string (disregarding
a spate of extremely mysterious, random and devastating bugs Internet
Explorer manifests every once in a while). Or you could
use UTF-8 and rest easy knowing that none of this could possibly happen
since UTF-8 supports every character.

#### `multipart/form-data`

Multipart form submission takes away a lot of the ambiguity
that percent-encoding had: the server now can explicitly ask for
certain encodings, and the client can explicitly tell the server
during the form submission what encoding the fields are in.

There are two ways you go with this functionality: leave it
unset and have the browser send in the same encoding as the page,
or set it to UTF-8 and then do another conversion server-side.
Each method has deficiencies, especially the former.

If you tell the browser to send the form in the same encoding as
the page, you still have the trouble of what to do with characters
that are outside of the character encoding's range. The behavior, once
again, varies: Firefox 2.0 converts them to character entity references
while Internet Explorer 7.0 mangles them beyond intelligibility. For
serious internationalization purposes, this is not an option.

The other possibility is to set Accept-Encoding to UTF-8, which
begs the question: Why aren't you using UTF-8 for everything then?
This route is more palatable, but there's a notable caveat: your data
will come in as UTF-8, so you will have to explicitly convert it into
your favored local character encoding.

I object to this approach on idealogical grounds: you're
digging yourself deeper into
the hole when you could have been converting to UTF-8
instead. And, of course, you can't use this method for GET requests.

### Well supported

Almost every modern browser in the wild today has full UTF-8 and Unicode
support: the number of troublesome cases can be counted with the
fingers of one hand, and these browsers usually have trouble with
other character encodings too. Problems users usually encounter stem
from the lack of appropriate fonts to display the characters (once
again, this applies to all character encodings and HTML entities) or
Internet Explorer's lack of intelligent font picking (which can be
worked around).

We will go into more detail about how to deal with edge cases in
the browser world in the Migration section, but rest assured that
converting to UTF-8, if done correctly, will not result in users
hounding you about broken pages.

### HTML Purifier

And finally, we get to HTML Purifier. HTML Purifier is built to
deal with UTF-8: any indications otherwise are the result of an
encoder that converts text from your preferred encoding to UTF-8, and
back again. HTML Purifier never touches anything else, and leaves
it up to the module iconv to do the dirty work.

This approach, however, is not perfect. iconv is blithely unaware
of HTML character entities. HTML Purifier, in order to
protect against sophisticated escaping schemes, normalizes all character
and numeric entity references before processing the text. This leads to
one important ramification:

**Any character that is not supported by the target character
set, regardless of whether or not it is in the form of a character
entity reference or a raw character, will be silently ignored.**

Example of this principle at work: say you have `&theta;`
in your HTML, but the output is in Latin-1 (which, understandably,
does not understand Greek), the following process will occur (assuming you've
set the encoding correctly using %Core.Encoding):

- The `Encoder` will transform the text from ISO 8859-1 to UTF-8
  (note that theta is preserved here since it doesn't actually use
  any non-ASCII characters): `&theta;`
- The `EntityParser` will transform all named and numeric
  character entities to their corresponding raw UTF-8 equivalents:
  `θ`
- HTML Purifier processes the code: `θ`
- The `Encoder` now transforms the text back from UTF-8
  to ISO 8859-1. Since Greek is not supported by ISO 8859-1, it
  will be either ignored or replaced with a question mark:
  `?`

This behaviour is quite unsatisfactory. It is a deal-breaker for
international applications, and it can be mildly annoying for the provincial
soul who occasionally needs a special character. Since 1.4.0, HTML
Purifier has provided a slightly more palatable workaround using
%Core.EscapeNonASCIICharacters. The process now looks like:

- The `Encoder` transforms encoding to UTF-8: `&theta;`
- The `EntityParser` transforms entities: `θ`
- HTML Purifier processes the code: `θ`
- The `Encoder` replaces all non-ASCII characters
  with numeric entity reference: `&#952;`
- For good measure, `Encoder` transforms encoding back to
  original (which is strictly unnecessary for 99% of encodings
  out there): `&#952;` (remember, it's all ASCII!)

...which means that this is only good for an occasional foray into
the land of Unicode characters, and is totally unacceptable for Chinese
or Japanese texts. The even bigger kicker is that, supposing the
input encoding was actually ISO-8859-7, which *does* support
theta, the character would get converted into a character entity reference
anyway! (The Encoder does not discriminate).

The current functionality is about where HTML Purifier will be for
the rest of eternity. HTML Purifier could attempt to preserve the original
form of the character references so that they could be substituted back in, only the
DOM extension kills them off irreversibly. HTML Purifier could also attempt
to be smart and only convert non-ASCII characters that weren't supported
by the target encoding, but that would require reimplementing iconv
with HTML awareness, something I will not do.

So there: either it's UTF-8 or crippled international support. Your pick! (and I'm
not being sarcastic here: some people could care less about other languages).

## Migrate to UTF-8

So, you've decided to bite the bullet, and want to migrate to UTF-8.
Note that this is not for the faint-hearted, and you should expect
the process to take longer than you think it will take.

The general idea is that you convert all existing text to UTF-8,
and then you set all the headers and META tags we discussed earlier
to UTF-8. There are many ways going about doing this: you could
write a conversion script that runs through the database and re-encodes
everything as UTF-8 or you could do the conversion on the fly when someone
reads the page. The details depend on your system, but I will cover
some of the more subtle points of migration that may trip you up.

### Configuring your database

Most modern databases, the most prominent open-source ones being MySQL
4.1+ and PostgreSQL, support character encodings. If you're switching
to UTF-8, logically speaking, you'd want to make sure your database
knows about the change too. There are some caveats though:

#### Legit method

Standardization in terms of SQL syntax for specifying character
encodings is notoriously spotty. Refer to your respective database's
documentation on how to do this properly.

For [MySQL](http://dev.mysql.com/doc/refman/5.0/en/charset-conversion.html), `ALTER` will magically perform the
character encoding conversion for you. However, you have
to make sure that the text inside the column is what is says it is:
if you had put Shift-JIS in an ISO 8859-1 column, MySQL will irreversibly mangle
the text when you try to convert it to UTF-8. You'll have to convert
it to a binary field, convert it to a Shift-JIS field (the real encoding),
and then finally to UTF-8. Many a website had pages irreversibly mangled
because they didn't realize that they'd been deluding themselves about
the character encoding all along; don't become the next victim.

For [PostgreSQL](http://www.postgresql.org/docs/8.2/static/multibyte.html), there appears to be no direct way to change the
encoding of a database (as of 8.2). You will have to dump the data, and then reimport
it into a new table. Make sure that your client encoding is set properly:
this is how PostgreSQL knows to perform an encoding conversion.

Many times, you will be also asked about the "collation" of
the new column. Collation is how a DBMS sorts text, like ordering
B, C and A into A, B and C (the problem gets surprisingly complicated
when you get to languages like Thai and Japanese). If in doubt,
going with the default setting is usually a safe bet.

Once the conversion is all said and done, you still have to remember
to set the client encoding (your encoding) properly on each database
connection using `SET NAMES` (which is standard SQL and is
usually supported).

#### Binary

Due to the aforementioned compatibility issues, a more interoperable
way of storing UTF-8 text is to stuff it in a binary datatype.
`CHAR` becomes `BINARY`, `VARCHAR` becomes
`VARBINARY` and `TEXT` becomes `BLOB`.
Doing so can save you some huge headaches:

- The syntax for binary data types is very portable,
- MySQL 4.0 has *no* support for character encodings, so
  if you want to support it you *have* to use binary,
- MySQL, as of 5.1, has no support for four byte UTF-8 characters,
  which represent characters beyond the basic multilingual
  plane, and
- You will never have to worry about your DBMS being too smart
  and attempting to convert your text when you don't want it to.

MediaWiki, a very prominent international application, uses binary fields
for storing their data because of point three.

There are drawbacks, of course:

- Database tools like PHPMyAdmin won't be able to offer you inline
  text editing, since it is declared as binary,
- It's not semantically correct: it's really text not binary
  (lying to the database),
- Unless you use the not-very-portable wizardry mentioned above,
  you have to change the encoding yourself (usually, you'd do
  it on the fly), and
- You will not have collation.

Choose based on your circumstances.

### Text editor

For more flat-file oriented systems, you will often be tasked with
converting reams of existing text and HTML files into UTF-8, as well as
making sure that all new files uploaded are properly encoded. Once again,
I can only point vaguely in the right direction for converting your
existing files: make sure you backup, make sure you use
[iconv](http://php.net/ref.iconv)(), and
make sure you know what the original character encoding of the files
is (or are, depending on the tidiness of your system).

However, I can proffer more specific advice on the subject of
text editors. Many text editors have notoriously spotty Unicode support.
To find out how your editor is doing, you can check out [this list](http://www.alanwood.net/unicode/utilities_editors.html)
or [Wikipedia's list.](http://en.wikipedia.org/wiki/Comparison_of_text_editors#Encoding_support)
I personally use Notepad++, which works like a charm when it comes to UTF-8.
Usually, you will have to **explicitly** tell the editor through some dialogue
(usually Save as or Format) what encoding you want it to use. An editor
will often offer "Unicode" as a method of saving, which is
ambiguous. Make sure you know whether or not they really mean UTF-8
or UTF-16 (which is another flavor of Unicode).

The two things to look out for are whether or not the editor
supports **font mixing** (multiple
fonts in one document) and whether or not it adds a **BOM**.
Font mixing is important because fonts rarely have support for every
language known to mankind: in order to be flexible, an editor must
be able to take a little from here and a little from there, otherwise
all your Chinese characters will come as nice boxes. We'll discuss
BOM below.

### Byte Order Mark (headers already sent!)

The BOM, or [Byte
Order Mark](http://en.wikipedia.org/wiki/Byte_Order_Mark), is a magical, invisible character placed at
the beginning of UTF-8 files to tell people what the encoding is and
what the endianness of the text is. It is also unnecessary.

Because it's invisible, it often
catches people by surprise when it starts doing things it shouldn't
be doing. For example, this PHP file:

```
BOM<?php
header('Location: index.php');
?>
```

...will fail with the all too familiar **Headers already sent**
PHP error. And because the BOM is invisible, this culprit will go unnoticed.
My suggestion is to only use ASCII in PHP pages, but if you must, make
sure the page is saved WITHOUT the BOM.

> The headers the error is referring to are **HTTP headers**,
> which are sent to the browser before any HTML to tell it various
> information. The moment any regular text (and yes, a BOM counts as
> ordinary text) is output, the headers must be sent, and you are
> not allowed to send anymore. Thus, the error.

If you are reading in text files to insert into the middle of another
page, it is strongly advised (but not strictly necessary) that you replace out the UTF-8 byte
sequence for BOM `"\xEF\xBB\xBF"` before inserting it in,
via:

```
$text = str_replace("\xEF\xBB\xBF", '', $text);
```

### Fonts

Generally speaking, people who are having trouble with fonts fall
into two categories:

- Those who want to
  use an extremely obscure language for which there is very little
  support even among native speakers of the language, and
- Those where the primary language of the text is
  well-supported but there are occasional characters
  that aren't supported.

Yes, there's always a chance where an English user happens across
a Sinhalese website and doesn't have the right font. But an English user
who happens not to have the right fonts probably has no business reading Sinhalese
anyway. So we'll deal with the other two edge cases.

#### Obscure scripts

If you run a Bengali website, you may get comments from users who
would like to read your website but get heaps of question marks or
other meaningless characters. Fixing this problem requires the
installation of a font or language pack which is often highly
dependent on what the language is. [Here is an example](http://bn.wikipedia.org/wiki/%E0%A6%89%E0%A6%87%E0%A6%95%E0%A6%BF%E0%A6%AA%E0%A7%87%E0%A6%A1%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE:Bangla_script_display_and_input_help)
of such a help file for the Bengali language; I am sure there are
others out there too. You just have to point users to the appropriate
help file.

#### Occasional use

A prime example of when you'll see some very obscure Unicode
characters embedded in what otherwise would be very bland ASCII are
letters of the
[International
Phonetic Alphabet (IPA)](http://en.wikipedia.org/wiki/International_Phonetic_Alphabet), use to designate pronunciations in a very standard
manner (you probably see them all the time in your dictionary). Your
average font probably won't have support for all of the IPA characters
like ʘ (bilabial click) or ʒ (voiced postalveolar fricative).
So what's a poor browser to do? Font mix! Smart browsers like Mozilla Firefox
and Internet Explorer 7 will borrow glyphs from other fonts in order
to make sure that all the characters display properly.

But what happens when the browser isn't smart and happens to be the
most widely used browser in the entire world? Microsoft IE 6
is not smart enough to borrow from other fonts when a character isn't
present, so more often than not you'll be slapped with a nice big �.
To get things to work, MSIE 6 needs a little nudge. You could configure it
to use a different font to render the text, but you can achieve the same
effect by selectively changing the font for blocks of special characters
to known good Unicode fonts.

Fortunately, the folks over at Wikipedia have already done all the
heavy lifting for you. Get the CSS from the horses mouth here:
[Common.css](http://en.wikipedia.org/wiki/MediaWiki:Common.css),
and search for ".IPA" There are also a smattering of
other classes you can use for other purposes, check out
[this page](http://meta.wikimedia.org/wiki/Help:Special_characters#Displaying_Special_Characters)
for more details. For you lazy ones, this should work:

```
.Unicode {
        font-family: Code2000, "TITUS Cyberbit Basic", "Doulos SIL",
            "Chrysanthi Unicode", "Bitstream Cyberbit",
            "Bitstream CyberBase", Thryomanes, Gentium, GentiumAlt,
            "Lucida Grande", "Arial Unicode MS", "Microsoft Sans Serif",
            "Lucida Sans Unicode";
        font-family /**/:inherit; /* resets fonts for everyone but IE6 */
}
```

The standard usage goes along the lines of `<span class="Unicode">Crazy
Unicode stuff here</span>`. Characters in the
[Windows Glyph List](http://en.wikipedia.org/wiki/Windows_Glyph_List_4)
usually don't need to be fixed, but for anything else you probably
want to play it safe. Unless, of course, you don't care about IE6
users.

### Dealing with variable width in functions

When people claim that PHP6 will solve all our Unicode problems, they're
misinformed. It will not fix any of the aforementioned troubles. It will,
however, fix the problem we are about to discuss: processing UTF-8 text
in PHP.

PHP (as of PHP5) is blithely unaware of the existence of UTF-8 (with a few
notable exceptions). Sometimes, this will cause problems, other times,
this won't. So far, we've avoided discussing the architecture of
UTF-8, so, we must first ask, what is UTF-8? Yes, it supports Unicode,
and yes, it is variable width. Other traits:

- Every character's byte sequence is unique and will never be found
  inside the byte sequence of another character,
- UTF-8 may use up to four bytes to encode a character,
- UTF-8 text must be checked for well-formedness,
- Pure ASCII is also valid UTF-8, and
- Binary sorting will sort UTF-8 in the same order as Unicode.

Each of these traits affect different domains of text processing
in different ways. It is beyond the scope of this document to explain
what precisely these implications are. PHPWact provides
a very good [reference document](http://www.phpwact.org/php/i18n/utf-8)
on what to expect from each function, although coverage is spotty in
some areas. Their more general notes on
[character sets](http://www.phpwact.org/php/i18n/charsets)
are also worth looking at for information on UTF-8. Some rules of thumb
when dealing with Unicode text:

- Do not EVER use functions that:
  - ...convert case (strtolower, strtoupper, ucfirst, ucwords)
  - ...claim to be case-insensitive (str\_ireplace, stristr, strcasecmp)
- Think twice before using functions that:
  - ...count characters (strlen will return bytes, not characters;
    str\_split and word\_wrap may corrupt)
  - ...convert characters to entity references (UTF-8 doesn't need entities)
  - ...do very complex string processing (\*printf)

Note: this list applies to UTF-8 encoded text only: if you have
a string that you are 100% sure is ASCII, be my guest and use
`strtolower` (HTML Purifier uses this function.)

Regardless, always think in bytes, not characters. If you use strpos()
to find the position of a character, it will be in bytes, but this
usually won't matter since substr() also operates with byte indices!

You'll also need to make sure your UTF-8 is well-formed and will
probably need replacements for some of these functions. I recommend
using Harry Fuecks' [PHP
UTF-8](http://phputf8.sourceforge.net/) library, rather than use mb\_string directly. HTML Purifier
also defines a few useful UTF-8 compatible functions: check out
`Encoder.php` in the `/library/HTMLPurifier/`
directory.

## Further Reading

Well, that's it. Hopefully this document has served as a very
practical springboard into knowledge of how UTF-8 works. You may have
decided that you don't want to migrate yet: that's fine, just know
what will happen to your output and what bug reports you may receive.

Many other developers have already discussed the subject of Unicode,
UTF-8 and internationalization, and I would like to defer to them for
a more in-depth look into character sets and encodings.

- [The Absolute Minimum Every Software Developer Absolutely,
  Positively Must Know About Unicode and Character Sets
  (No Excuses!)](http://www.joelonsoftware.com/articles/Unicode.html) by Joel Spolsky, provides a *very*
  good high-level look at Unicode and character sets in general.
- [UTF-8 on Wikipedia](http://en.wikipedia.org/wiki/UTF-8),
  provides a lot of useful details into the innards of UTF-8, although
  it may be a little off-putting to people who don't know much
  about Unicode to begin with.

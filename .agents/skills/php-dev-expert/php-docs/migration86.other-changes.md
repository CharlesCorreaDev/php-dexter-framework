# Other Changes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.other-changes.php

---

## Other Changes

### Core changes

#### Core

In case of a hard OOM (out of memory) condition, PHP
now calls `abort()` instead of `exit(1)`,
changing the exit code to 134 and possibly creating a core dump.

The **`PHP_OS_FAMILY`** constant has an
`AIX` value for when running on AIX or IBM i via PASE.

### Changes in SAPI Modules

#### CLI

The [built-in development
server](features.commandline.webserver.md) now accepts requests using the HTTP
`QUERY`
method instead of returning `501 Not Implemented`.

The [built-in development
server](features.commandline.webserver.md) no longer reflects the `Host` header from
requests.

### Changed Functions

#### Core

[header\_register\_callback()](function.header-register-callback.md) now declares
[true](language.types.singleton.md) as its return type.
It has not been able to return **`false`** since PHP 8.0.0, when passing an
invalid callback started throwing a
[TypeError](class.typeerror.md) instead.

[register\_tick\_function()](function.register-tick-function.md) now declares
[true](language.types.singleton.md) as its return type.
It has always returned **`true`** on success; an invalid callback throws a
[TypeError](class.typeerror.md) during argument parsing before
the function body is reached.

[ini\_get\_all()](function.ini-get-all.md) now includes a
`"builtin_default_value"` element for each directive
when `details` is **`true`**.
It holds the built-in default value of the directive (or **`null`** if it
has none), independent of values set in php.ini, on the command line,
or at runtime.

[fclose()](function.fclose.md), [file\_put\_contents()](function.file-put-contents.md) and
[copy()](function.copy.md) now return **`false`** when flushing or closing the
stream fails.
Previously such failures were silently ignored.

#### Date

The following methods now have tentative static return
types:

- [DateTime::createFromInterface()](datetime.createfrominterface.md)
- [DateTimeImmutable::\_\_set\_state()](datetimeimmutable.set-state.md)
- [DateTimeImmutable::modify()](datetimeimmutable.modify.md)
- [DateTimeImmutable::add()](datetimeimmutable.add.md)
- [DateTimeImmutable::sub()](datetimeimmutable.sub.md)
- [DateTimeImmutable::setTimezone()](datetimeimmutable.settimezone.md)
- [DateTimeImmutable::setTime()](datetimeimmutable.settime.md)
- [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md)
- [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md)
- [DateTimeImmutable::setTimestamp()](datetimeimmutable.settimestamp.md)
- [DateTimeImmutable::createFromInterface()](datetimeimmutable.createfrominterface.md)
- **DateTimeZone::\_\_set\_state()**
- **DateInterval::\_\_set\_state()**
- **DatePeriod::\_\_set\_state()**

#### Filter

The return type of [filter\_var\_array()](function.filter-var-array.md) has been
narrowed from
[array](language.types.array.md)|[false](language.types.singleton.md)|[null](language.types.null.md)
to [array](language.types.array.md)|[false](language.types.singleton.md).
The function always establishes an array before filtering, so **`null`** was
never returned.
[filter\_input\_array()](function.filter-input-array.md) is unaffected: it still returns
**`null`** when the requested superglobal does not exist.

#### LDAP

The return type of [ldap\_free\_result()](function.ldap-free-result.md) has been
narrowed from [bool](language.types.boolean.md) to [true](language.types.singleton.md).
The function already always returned **`true`**.

#### MySQLi

The return structure of [mysqli\_get\_charset()](mysqli.get-charset.md) no longer
contains the undocumented `"comment"` element.
The value of `"charsetnr"` is now set to a constant
`0` as this number was an implementation detail that
should not have been exposed to the public.

#### OpenSSL

The output of [openssl\_x509\_parse()](function.openssl-x509-parse.md) now contains a
`"criticalExtensions"` entry listing all critical
certificate extensions.

[openssl\_sign()](function.openssl-sign.md) and [openssl\_verify()](function.openssl-verify.md)
now have an additional optional `salt_length`
argument that allows controlling the RSA-PSS salt
length when
**`OPENSSL_PKCS1_PSS_PADDING`** is used.
It accepts an explicit length or one of the new
**`OPENSSL_RSA_PSS_SALTLEN_*`**
constants.

#### PDO\_DBLIB

When using persistent connections, there is now a liveness check in
[PDO::\_\_construct()](pdo.construct.md).

#### Phar

[Phar::mungServer()](phar.mungserver.md) now supports reference values.

#### Readline

[readline\_completion\_function()](function.readline-completion-function.md) now declares
[true](language.types.singleton.md) as its return type.
It has always returned **`true`** on success; an invalid callback throws a
[TypeError](class.typeerror.md) during argument parsing before
the function body is reached.

#### Reflection

The outputs of
[ReflectionClassConstant::\_\_toString()](reflectionclassconstant.tostring.md) and
[ReflectionConstant::\_\_toString()](reflectionconstant.tostring.md) now print
[bool](language.types.boolean.md) constant values as `true` and
`false` rather than `1` and an empty
string.
This also affects other ways of printing class constants, e.g.
[ReflectionClass::\_\_toString()](reflectionclass.tostring.md).

#### Sockets

[socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) now has an additional
optional `error_code` argument that, when not
**`null`**, receives the error code on failure (one of the
**`EAI_*`** constants).

The return type of [socket\_cmsg\_space()](function.socket-cmsg-space.md) has been
narrowed from ?[int](language.types.integer.md)
to [int](language.types.integer.md).
Every failure path has thrown a
[ValueError](class.valueerror.md) since PHP 8.0.0, so **`null`** was
never returned.

#### Zip

The return type of [zip\_entry\_close()](function.zip-entry-close.md) has been narrowed
from [bool](language.types.boolean.md) to [true](language.types.singleton.md).
The function already always returned **`true`**.

### Other Changes to Extensions

#### Fileinfo

Upgraded to file 5.48.
Custom compiled magic databases from older file versions must be
regenerated.

#### Hash

The bundled version of xxHash was upgraded to 0.8.2.

#### MySQLi

Added the new constant **`MYSQLI_OPT_COMPRESS`**.

#### Opcache

JIT is now supported for ZTS builds
on Apple Silicon.

### Changes to INI File Handling

#### Core

The error\_include\_args
INI option has been added to make the display of function arguments
consistent in errors; it is off by default.
Previously, whether a function showed a parameter in the error was up to
each call to the internal error function.
Now, all parameters as they were actually passed to the function will be
displayed.
This uses the same infrastructure as stack traces, so sensitive
parameters will not be displayed, and strings will be truncated
according to
[zend.exception\_string\_param\_max\_len](ini.core.md#ini.zend.exception-string-param-max-len).

#### MBString

The [mbstring.detect\_order](mbstring.configuration.md#ini.mbstring.detect-order)
INI directive now updates the internal detection order when changed at
runtime via [ini\_set()](function.ini-set.md).
Previously, runtime changes using [ini\_set()](function.ini-set.md) did not
take effect for [mb\_detect\_order()](function.mb-detect-order.md).
Setting the directive to **`null`** or an empty string at runtime now leaves
the previously configured detection order unchanged.

#### MySQLi

[mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port) now
checks the validity of the value, which should be between
`0` and `65535` inclusive.

#### Opcache

[opcache.jit\_debug](opcache.configuration.md#ini.opcache.jit-debug) accepts a
new flag: `ZEND_JIT_DEBUG_TRACE_EXIT_INFO_SRC`.
When used along with `ZEND_JIT_DEBUG_TRACE_EXIT_INFO`,
the source of exit points is printed in the exit info output, in debug
builds.

### Performance

#### Core

[printf()](function.printf.md) using only `%s` and
`%d` will be compiled into the equivalent string
interpolation, avoiding the overhead of a function call and repeatedly
parsing the format string.

Arguments are now passed more efficiently to known constructors (e.g.
when using `new self()`).

[array\_map()](function.array-map.md) using a
[first-class
callable](functions.first_class_callable_syntax.md) or
[partial
function application](migration86.new-features.md#migration86.new-features.core.partial-function-application) callback will be compiled into the equivalent
[foreach](control-structures.foreach.md) loop, avoiding the
creation of intermediate [Closure](class.closure.md)s, the overhead of
calling userland callbacks from internal functions and providing for
better insight for the JIT.

The performance of the TAILCALL VM has been improved,
and it is now enabled on Windows when compiling with Clang 19 or later on
x86\_64.

The performance of ZTS builds has been improved.

Added a stateless closure cache.

Deeply recursive code that causes the VM to allocate new stack pages
should now be faster.

Improved performance of sorting single-element arrays.

Improved performance of the following functions:

- [addcslashes()](function.addcslashes.md), when generating octal escapes
- [array\_fill\_keys()](function.array-fill-keys.md)
- [array\_intersect()](function.array-intersect.md)
- [array\_map()](function.array-map.md), with multiple arrays passed
- [array\_product()](function.array-product.md) and [array\_sum()](function.array-sum.md), for integer-only arrays
- [array\_unshift()](function.array-unshift.md)
- [array\_walk()](function.array-walk.md)
- [intval()](function.intval.md), for `intval('0b...', 2)` and `intval('+0b...', 2)`
- [pathinfo()](function.pathinfo.md), when requesting a single component
- [str\_pad()](function.str-pad.md)
- [str\_repeat()](function.str-repeat.md), when the multiplier is `1`
- [str\_split()](function.str-split.md)

#### DOM

Made [DOMText::splitText()](domtext.splittext.md) and
[Dom\Text::splitText()](dom-text.splittext.md) faster and consume less
memory.

#### GD

[imagebmp()](function.imagebmp.md), [imagewbmp()](function.imagewbmp.md),
[imagegd()](function.imagegd.md), and [imagegd2()](function.imagegd2.md) now
buffer output when writing to PHP streams, significantly improving
performance when writing images to files.

Improved performance of [imagegrabscreen()](function.imagegrabscreen.md) and
[imagegrabwindow()](function.imagegrabwindow.md) on Windows.

#### Intl

Improved performance of
[IntlCalendar::getAvailableLocales()](intlcalendar.getavailablelocales.md) and
[IntlDateFormatter::localtime()](intldateformatter.localtime.md)/[datefmt\_localtime()](intldateformatter.localtime.md)
by pre-allocating their returned arrays.

Improved performance of [transliterator\_list\_ids()](transliterator.listids.md) and
[resourcebundle\_locales()](resourcebundle.locales.md) by pre-allocating their
returned arrays.

Optimized callback invocation in
[IntlChar::enumCharTypes()](intlchar.enumchartypes.md).

#### JSON

Improved performance of encoding arrays and objects.

Improved performance of indentation generation in
[json\_encode()](function.json-encode.md) when using
**`JSON_PRETTY_PRINT`**.

#### MBString

Improved performance of [mb\_str\_pad()](function.mb-str-pad.md).

#### Phar

Reduced temporary allocations when iterating Phar directories.

#### URI

Improved performance of [Uri\WhatWg\Url::parse()](uri-whatwg-url.parse.md)
when collecting validation errors by pre-allocating the error array.

Reduced allocations when reading IPv6/IPvFuture hosts and paths with
[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

Improved performance and memory consumption when using normalizing
(non-raw) getters on already-normalized URIs with
[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

#### Zip

Improved performance of [ZipArchive::addGlob()](ziparchive.addglob.md) and
[ZipArchive::addPattern()](ziparchive.addpattern.md) by pre-allocating their
returned arrays.

Avoid string copies in [ZipArchive::addFromString()](ziparchive.addfromstring.md).

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

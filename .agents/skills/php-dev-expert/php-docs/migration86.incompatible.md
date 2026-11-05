# Backward Incompatible Changes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.incompatible.php

---

## Backward Incompatible Changes

### PHP Core

#### By-reference foreach after array compaction

By-reference [foreach](control-structures.foreach.md)
loops may now visit previously
skipped elements after array compaction.
Internal pointers on deleted elements now move to the next surviving
element during copy-on-write.

#### Null coalescing and [empty()](function.empty.md) on magic properties

`??` and [empty()](function.empty.md) on a magic property
no longer call [\_\_get()](language.oop5.overloading.md#object.get) when
[\_\_isset()](language.oop5.overloading.md#object.isset) has materialized the
property by writing into the property table.
The freshly-written value is returned directly.
[isset()](function.isset.md) applied directly to the property is unaffected;
nested forms such as `isset($o->p['k'])` follow the same
path as `??`.

```
<?php
#[\AllowDynamicProperties]
class Example
{
    public function __isset(string $name): bool
    {
        $this->$name = 'from __isset()';
        return true;
    }

    public function __get(string $name): string
    {
        return 'from __get()';
    }
}

$example = new Example();
var_dump($example->foo ?? 'default');
// As of PHP 8.6.0: string(14) "from __isset()"
// Prior to PHP 8.6.0: string(12) "from __get()"
```

#### String conversion in [array\_intersect()](function.array-intersect.md)

[array\_intersect()](function.array-intersect.md) with at least two arrays now converts
values to strings while scanning its inputs instead of during sort
comparisons.
This can change the number and order of conversion warnings and
[\_\_toString()](language.oop5.magic.md#object.tostring) calls, which conversion
exception is reached, and the result for stateful
[\_\_toString()](language.oop5.magic.md#object.tostring) implementations.
Argument types are validated before checking for empty arrays or
converting values, so an invalid later argument can suppress conversion
side effects from earlier arrays.
Values are not converted if any input array is empty.

#### Form feed trimmed by default

Form feed (`\f`) is now added to the default trimmed
characters of [trim()](function.trim.md), [rtrim()](function.rtrim.md) and
[ltrim()](function.ltrim.md).

```
<?php
var_dump(trim("\f hello \f"));
// As of PHP 8.6.0: string(5) "hello"
// Prior to PHP 8.6.0: string(9) "\f hello \f"
```

#### New errors for invalid arguments

The following functions now raise a
[ValueError](class.valueerror.md) when an invalid flag or mode
value is passed:

- [array\_filter()](function.array-filter.md) (`mode`)
- [array\_change\_key\_case()](function.array-change-key-case.md) (`case`)
- [pathinfo()](function.pathinfo.md) (`flags`)
- [scandir()](function.scandir.md) (`sorting_order`)

The following functions now raise a
[ValueError](class.valueerror.md) when the given argument contains
`NUL` bytes:

- [getenv()](function.getenv.md) and [putenv()](function.putenv.md) (first argument)
- [dl()](function.dl.md) (`extension_filename`)
- [openlog()](function.openlog.md) (`prefix`)
- [parse\_str()](function.parse-str.md) (`string`)
- [proc\_open()](function.proc-open.md) (`cwd`)

The following functions now raise a
[ValueError](class.valueerror.md) for out-of-range values instead
of silently clamping them or allowing them to overflow:

- [number\_format()](function.number-format.md), when `decimals`
  is outside the integer range.
- [sleep()](function.sleep.md), when `seconds` is
  greater than `UINT_MAX`, or
  `UINT_MAX / 1000` on Windows.
- [usleep()](function.usleep.md), when `microseconds` is
  greater than `UINT_MAX`.

[linkinfo()](function.linkinfo.md) now raises a
[ValueError](class.valueerror.md) when the
`path` argument is empty.

[setlocale()](function.setlocale.md) now raises a
[ValueError](class.valueerror.md) when a locale name contains
`NUL` bytes, instead of silently truncating it.
Arrays are now accepted only for the `locales`
argument.
Passing an array as a later variadic locale argument now throws a
[TypeError](class.typeerror.md).
Passing any additional locale arguments when
`locales` is an array now throws an
[ArgumentCountError](class.argumentcounterror.md).

The following functions now raise a
[ValueError](class.valueerror.md) when the
`filename` argument contains `NUL`
bytes:

- [fileperms()](function.fileperms.md)
- [fileinode()](function.fileinode.md)
- [filesize()](function.filesize.md)
- [fileowner()](function.fileowner.md)
- [filegroup()](function.filegroup.md)
- [fileatime()](function.fileatime.md)
- [filemtime()](function.filemtime.md)
- [filectime()](function.filectime.md)
- [filetype()](function.filetype.md)
- [is\_writable()](function.is-writable.md)
- [is\_readable()](function.is-readable.md)
- [is\_executable()](function.is-executable.md)
- [is\_file()](function.is-file.md)
- [is\_dir()](function.is-dir.md)
- [is\_link()](function.is-link.md)
- [file\_exists()](function.file-exists.md)
- [lstat()](function.lstat.md)
- [stat()](function.stat.md)

#### Notice on imprecise number conversion

[base\_convert()](function.base-convert.md), [bindec()](function.bindec.md),
[hexdec()](function.hexdec.md) and [octdec()](function.octdec.md) now raise a
notice when they cannot precisely convert the given number.

#### Endianness modifiers in [unpack()](function.unpack.md) format names

[unpack()](function.unpack.md) now reads a `<` or
`>` immediately following a format code as an
endianness modifier rather than as the first character of the element
name.
Formats such as `"s<value"` now produce the key
`"value"` instead of `"<value"`, and
`"C>name"` raises a
[ValueError](class.valueerror.md) because the `C`
format code accepts no endianness modifier.
A name starting with these characters is unaffected when a repeater
precedes it, as in `"s1<value"`.
See also the
[new
endianness modifiers](migration86.new-features.md#migration86.new-features.core.pack-unpack-endianness).

```
<?php
var_dump(unpack('s<value', "\x01\x00"));
// As of PHP 8.6.0: ["value" => 1]
// Prior to PHP 8.6.0: ["<value" => 1]
```

### COM

It is no longer possible to clone [variant](class.variant.md) objects,
because the cloning behavior was ill-defined.

### cURL

The callback registered with **`CURLOPT_READFUNCTION`** now
throws a [ValueError](class.valueerror.md) when returning an
integer other than `0`,
**`CURL_READFUNC_ABORT`** or
**`CURL_READFUNC_PAUSE`**.

### DOM

Properties previously documented as read-only (e.g.
[DOMNode::$nodeType](class.domnode.md#domnode.props.nodetype),
[DOMDocument::$xmlEncoding](class.domdocument.md#domdocument.props.xmlencoding),
[DOMEntity::$actualEncoding](class.domentity.md#domentity.props.actualencoding),
[DOMEntity::$encoding](class.domentity.md#domentity.props.encoding),
[DOMEntity::$version](class.domentity.md#domentity.props.version)) are now declared with
[asymmetric
visibility](language.oop5.visibility.md#language.oop5.visibility-members-aviz) (`public private(set)`).
Attempts to write to them from outside the class now raise
"Cannot modify private(set) property class::$prop from global scope"
instead of the prior readonly modification error.
**ReflectionProperty::isWritable()** also reports these
properties accurately.

Array access on [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md) objects now
returns **`null`** for negative integer indexes instead of returning the first
node, and raises a [ValueError](class.valueerror.md) when the
integer index is greater than **`PHP_INT_MAX`** instead of
overflowing to a smaller index.

### FTP

[ftp\_nb\_fget()](function.ftp-nb-fget.md), [ftp\_nb\_fput()](function.ftp-nb-fput.md),
[ftp\_nb\_get()](function.ftp-nb-get.md) and [ftp\_nb\_put()](function.ftp-nb-put.md) now
throw an [Error](class.error.md) when the connection is
already transferring, instead of emitting a warning and returning **`false`**.
[ftp\_close()](function.ftp-close.md) already throws on the same condition.

### GD

[imagesetstyle()](function.imagesetstyle.md), [imagefilter()](function.imagefilter.md) and
[imagecrop()](function.imagecrop.md) filter the types and values of their array
arguments and raise a [TypeError](class.typeerror.md) or
[ValueError](class.valueerror.md) accordingly.

[imageaffinematrixget()](function.imageaffinematrixget.md) now enforces the documented
[array](language.types.array.md)|[float](language.types.float.md) type for
the `options` parameter, including the corresponding
weak and strict typing behavior.

### GMP

[gmp\_fact()](function.gmp-fact.md) now throws a
[ValueError](class.valueerror.md) if `num`
does not fit into an unsigned long.

[gmp\_pow()](function.gmp-pow.md), [gmp\_binomial()](function.gmp-binomial.md),
[gmp\_root()](function.gmp-root.md) and [gmp\_rootrem()](function.gmp-rootrem.md) now
throw a [ValueError](class.valueerror.md) if their second argument
does not fit into an unsigned long.

The shift (`<<`, `>>`) and
exponentiation (`**`) operators on
[GMP](class.gmp.md) objects now throw a
[ValueError](class.valueerror.md) when [GMP](class.gmp.md)
right operands are outside the unsigned long range, instead of silently
truncating them.

[GMP](class.gmp.md) integer string parsing now throws a
[ValueError](class.valueerror.md) for strings containing
`NUL` bytes, instead of silently truncating them.

The message of the [DivisionByZeroError](class.divisionbyzeroerror.md)
raised by [gmp\_powm()](function.gmp-powm.md) on modulo by zero now includes the
function name and argument index (`modulus`).

### Intl

Passing a non-stringable object as a time zone to Intl
APIs that accept time zone objects or strings now
raises a [TypeError](class.typeerror.md) instead of an
[Error](class.error.md).

[IntlIterator::current()](intliterator.current.md) now returns **`null`** when
called before the iterator is positioned, or after the iterator becomes
invalid, instead of exposing an undefined value.

[IntlBreakIterator::getLocale()](intlbreakiterator.getlocale.md) now raises a
[ValueError](class.valueerror.md) when the type is neither
**`Locale::ACTUAL_LOCALE`** nor
**`Locale::VALID_LOCALE`** instead of returning **`false`**.

[MessageFormatter::parse()](messageformatter.parse.md) and
[MessageFormatter::parseMessage()](messageformatter.parsemessage.md) now return
**`PHP_INT_MIN`** as [int](language.types.integer.md), rather than
[float](language.types.float.md), on 64-bit platforms when parsing integer values.

The `type` parameter of
[IntlBreakIterator::getPartsIterator()](intlbreakiterator.getpartsiterator.md) has been
changed from [string](language.types.string.md) to [int](language.types.integer.md) to match the
underlying implementation.

[UConverter::transcode()](uconverter.transcode.md) now rejects
`from_subst` and `to_subst` option values
longer than 127 bytes instead of silently truncating the length before
passing it to ICU.

[ResourceBundle::get()](resourcebundle.get.md) and
[resourcebundle\_get()](resourcebundle.get.md) now report fallback-disabled
resource lookups with
"without fallback to locale"
instead of the malformed
"without fallback from to locale".

[IntlDateFormatter::parse()](intldateformatter.parse.md)/[datefmt\_parse()](intldateformatter.parse.md)
and
[IntlDateFormatter::localtime()](intldateformatter.localtime.md)/[datefmt\_localtime()](intldateformatter.localtime.md)
now raise a [TypeError](class.typeerror.md) when the
`offset` argument is not of type [int](language.types.integer.md)
instead of silently converting the value.

[Collator::sort()](collator.sort.md),
[collator\_sort()](collator.sort.md),
[Collator::asort()](collator.asort.md), and
[collator\_asort()](collator.asort.md) now report UTF-8/UTF-16 conversion
failures during comparison through the intl error mechanism and return
**`false`**.
With [intl.use\_exceptions](intl.configuration.md#ini.intl.use-exceptions)
enabled, these failures throw an [IntlException](class.intlexception.md).
Previously, these paths emitted a warning and compared the value as an
empty string.

### MBString

Unicode data tables have been updated to Unicode 18.0.

### PCNTL

[pcntl\_alarm()](function.pcntl-alarm.md) now raises a
[ValueError](class.valueerror.md) if the
`seconds` argument is lower than zero or greater
than the platform's `UINT_MAX`.

[pcntl\_exec()](function.pcntl-exec.md) now raises a
[ValueError](class.valueerror.md) if the
`args` argument is not a list array.

### PCRE

[preg\_grep()](function.preg-grep.md) now returns **`false`** instead of a partial
array when a PCRE execution error occurs (e.g. malformed
UTF-8 input with
the `u` modifier).
This is consistent with the other `preg_*` functions.

### PGSQL

When [pg\_fetch\_object()](function.pg-fetch-object.md) is given a non-empty
`constructor_args` for a class without a constructor,
the [ValueError](class.valueerror.md) now refers to the
`constructor_args` argument instead of
`class`.
Errors raised when the requested class is not instantiable (abstract,
interface, enum) now surface before the row is fetched.

### Phar

[Phar::mungServer()](phar.mungserver.md) now raises a
[ValueError](class.valueerror.md) when an invalid argument value
is passed instead of being silently ignored.

[Phar::addEmptyDir()](phar.addemptydir.md) now rejects
`"/.phar"` paths in addition to `".phar"`
paths, and raises the same
[BadMethodCallException](class.badmethodcallexception.md) for attempts to
create the reserved magic `".phar"` directory through
that form.
Non-magic names that merely share the `".phar"` prefix
are now treated as ordinary directories.

Files are only automatically interpreted as Phar archives when included if
`".phar"` occurs as an extension in the filename component
of their paths.
Previously, it could occur in a directory name or as part of an extension
such as `".pharma"`.

### Session

Setting [session.cookie\_path](session.configuration.md#ini.session.cookie-path),
[session.cookie\_domain](session.configuration.md#ini.session.cookie-domain), or
[session.cache\_limiter](session.configuration.md#ini.session.cache-limiter) to a
value containing `NUL` bytes now emits a warning and
leaves the setting unchanged.
Previously, `NUL` bytes were silently accepted: for
`cookie_path` and `cookie_domain` this
caused the SAPI to drop the
`Set-Cookie` header; for `cache_limiter`
the value was silently truncated at the `NUL` byte.

[session\_module\_name()](function.session-module-name.md) now throws a
[ValueError](class.valueerror.md) if `name`
is a string containing `NUL` bytes.

[session\_encode()](function.session-encode.md) now returns an empty string instead of
**`false`** for empty sessions.
It only returns **`false`** now when the session data could not be encoded.
This mainly happens with the default serialization handler if a key
contains the pipe (`|`) character.

When [session.lazy\_write](session.configuration.md#ini.session.lazy-write) is
enabled and a session handler implements
[SessionUpdateTimestampHandlerInterface](class.sessionupdatetimestamphandlerinterface.md),
sessions that were read as empty and remain empty at write time will now
trigger [SessionUpdateTimestampHandlerInterface::updateTimestamp()](sessionupdatetimestamphandlerinterface.updatetimestamp.md)
instead of [SessionHandlerInterface::write()](sessionhandlerinterface.write.md).
Previously, [SessionHandlerInterface::write()](sessionhandlerinterface.write.md) was
always called for empty sessions because
[session\_encode()](function.session-encode.md) returned **`false`**, bypassing the
lazy\_write comparison.
Custom session handlers that rely on
[SessionHandlerInterface::write()](sessionhandlerinterface.write.md) being called with
empty data (e.g. to destroy the session) should implement the same logic
in their [SessionUpdateTimestampHandlerInterface::updateTimestamp()](sessionupdatetimestamphandlerinterface.updatetimestamp.md)
method.

The defaults of three session INI settings have changed to provide secure
behavior out of the box:

- [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
  is now `1` (was `0`).
  Strict mode rejects uninitialized session IDs, mitigating session
  fixation.
  Custom session handlers that previously relied on accepting externally
  supplied IDs without a corresponding storage entry must either implement
  [SessionUpdateTimestampHandlerInterface::validateId()](sessionupdatetimestamphandlerinterface.validateid.md)
  and [SessionIdInterface::create\_sid()](sessionidinterface.create-sid.md), or
  explicitly set this to `0`.
- [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly)
  is now `1` (was `0`).
  Session cookies are no longer accessible to JavaScript via
  `document.cookie`.
  Applications that read the session cookie from JavaScript must
  explicitly set this to `0`.
- [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)
  is now `"Lax"` (was unset).
  Session cookies are no longer sent on cross-site requests other than
  top-level navigations using safe HTTP methods.
  Applications that depend on session cookies being sent on cross-site
  POST submissions must explicitly set this to `"None"`
  (and also set
  [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure)
  to `1`).

**SessionHandler::validateId()** has been added and
delegates to the configured save handler.
A subclass that declares **SessionHandler::validateId()**
without a return type now emits a deprecation notice for the tentative
[bool](language.types.boolean.md) return type.
A subclass that overrides [SessionHandler::open()](sessionhandler.open.md)
without calling `parent::open()` keeps its previous behavior
and emits a warning when an ID is validated.

### Shmop

[shmop\_open()](function.shmop-open.md) now raises a
[ValueError](class.valueerror.md) when the
`key` argument is outside the platform's
`key_t` range instead of passing a truncated key to the
operating system.

### SimpleXML

[SimpleXMLElement::\_\_construct()](simplexmlelement.construct.md) now raises a
[ValueError](class.valueerror.md) when the
`data` argument contains `NUL`
bytes, matching [simplexml\_load\_file()](function.simplexml-load-file.md).
With `dataIsURL` set, it previously truncated the
path at the first `NUL` byte.
Without it, the string went to libxml, which with default options rejects
a `NUL` on current versions but accepts the truncated
document on older ones and under **`LIBXML_RECOVER`**.

### SOAP

The `"classmap"` option of
[SoapClient](class.soapclient.md) and [SoapServer](class.soapserver.md)
now rejects arrays containing integer keys.
Previously, sparse integer-keyed and mixed-keyed arrays could be accepted.
[SoapClient](class.soapclient.md) now throws a
[TypeError](class.typeerror.md) for non-array
`"classmap"` options and a
[ValueError](class.valueerror.md) for arrays containing integer
keys, also when the `"exceptions"` option is disabled.

WSDL/XML Schema parsing now rejects out-of-range integer values for
occurrence constraints and integer restriction facets.
Negative `minOccurs` and `maxOccurs`
values are rejected as well.

SOAP encoding errors now report the affected type or failing operation in
the error message instead of the generic
"Encoding: Violation of encoding rules" message.
Code that compares the exact message may need to be updated.

### Sockets

[socket\_set\_option()](function.socket-set-option.md) with
**`SO_ATTACH_REUSEPORT_CBPF`** now requires an
[int](language.types.integer.md) `value` and a
`level` of **`SOL_SOCKET`**.
Any other value type throws a [TypeError](class.typeerror.md)
instead of being coerced, and any other level raises a warning and
returns **`false`**.

[socket\_set\_option()](function.socket-set-option.md) with
**`SO_ATTACH_REUSEPORT_CBPF`** and a
`value` of `0` now detaches the
reuseport filter through **`SO_DETACH_REUSEPORT_BPF`**.
It previously used **`SO_DETACH_BPF`**, an alias of
**`SO_DETACH_FILTER`**, which left the reuseport program
attached.

### Sodium

The password-hashing functions [sodium\_crypto\_pwhash()](function.sodium-crypto-pwhash.md),
[sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md),
[sodium\_crypto\_pwhash\_scryptsalsa208sha256()](function.sodium-crypto-pwhash-scryptsalsa208sha256.md) and
[sodium\_crypto\_pwhash\_scryptsalsa208sha256\_str()](function.sodium-crypto-pwhash-scryptsalsa208sha256-str.md) now
throw a [ValueError](class.valueerror.md) instead of a
[SodiumException](class.sodiumexception.md) when an argument is out of
range, such as an `opslimit` or
`memlimit` below the documented minimum.
[SodiumException](class.sodiumexception.md) is still thrown for
internal libsodium failures.

### SPL

[SplObjectStorage::getHash()](splobjectstorage.gethash.md) implementations may no
longer mutate any [SplObjectStorage](class.splobjectstorage.md) instance.
Attempting to do so now throws an [Error](class.error.md).

[SplFileObject::next()](splfileobject.next.md) now advances the stream when
no prior [SplFileObject::current()](splfileobject.current.md) call has cached a
line.
A subsequent [SplFileObject::current()](splfileobject.current.md) call returns
the new line rather than the previous one.

[SplFileObject::fgets()](splfileobject.fgets.md) no longer caches the returned
line for subsequent [SplFileObject::current()](splfileobject.current.md) calls.
[SplFileObject::current()](splfileobject.current.md) now re-reads from the
current stream position instead of returning the line
[SplFileObject::fgets()](splfileobject.fgets.md) just returned.

[SplFileObject::next()](splfileobject.next.md) past EOF no longer increments
[SplFileObject::key()](splfileobject.key.md) without bound.
[SplFileObject::seek()](splfileobject.seek.md) past EOF now produces the same
[SplFileObject::key()](splfileobject.key.md) value as
[SplTempFileObject](class.spltempfileobject.md); the two previously returned
different values.

[DirectoryIterator::key()](directoryiterator.key.md) now returns
[int](language.types.integer.md)|[string](language.types.string.md), and
[DirectoryIterator::current()](directoryiterator.current.md) returns
[string](language.types.string.md)|[SplFileInfo](class.splfileinfo.md)|static.

### Sysvshm

[shm\_attach()](function.shm-attach.md) now raises a
[ValueError](class.valueerror.md) when the
`key` argument is outside the platform's
`key_t` range instead of passing a truncated key to the
operating system.

### URI

[Uri\WhatWg\Url::\_\_construct()](uri-whatwg-url.construct.md) now sets
`softErrors` to an empty array when URL processing
throws an exception, instead of preserving its value.
URL validation errors remain available in the
[Uri\WhatWg\InvalidUrlException::$errors](class.uri-whatwg-invalidurlexception.md#uri-whatwg-invalidurlexception.props.errors) property.

[Uri\WhatWg\Url::\_\_construct()](uri-whatwg-url.construct.md),
[Uri\WhatWg\Url::parse()](uri-whatwg-url.parse.md), the
`Uri\WhatWg\Url::with*()` methods, and
**Uri\WhatWg\UrlBuilder::build()** now report
validation errors in the order in which they are detected.
This reverses the order of multiple errors compared to PHP 8.5.

### Zip

[ZipArchive::extractTo()](ziparchive.extractto.md) now raises a
[TypeError](class.typeerror.md) for the
`files` argument if one or more of the entries is not
a string.

[ZipArchive::addGlob()](ziparchive.addglob.md) and
[ZipArchive::addPattern()](ziparchive.addpattern.md) now raise a
[TypeError](class.typeerror.md) when the
`"remove_all_path"` option is not of type
[bool](language.types.boolean.md), or when the `"comp_method"`,
`"comp_flags"`, or `"enc_method"`
options are not of type [int](language.types.integer.md) (numeric strings are coerced),
instead of emitting a warning.

Serializing or unserializing a [ZipArchive](class.ziparchive.md) now
throws an [Exception](class.exception.md).
A subclass can override
[\_\_serialize()](language.oop5.magic.md#object.serialize) and
[\_\_unserialize()](language.oop5.magic.md#object.unserialize) to round-trip through
**ZipArchive::closeString()** and
**ZipArchive::openString()**.

### Zlib

[deflate\_init()](function.deflate-init.md) now raises a
[TypeError](class.typeerror.md) when the value for option
`"level"`, `"memory"`,
`"window"`, or `"strategy"` is not of
type [int](language.types.integer.md).

[inflate\_init()](function.inflate-init.md) now raises a
[TypeError](class.typeerror.md) when the value for option
`"window"` is not of type [int](language.types.integer.md).

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

# New Features

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.new-features.php

---

## New Features

### PHP Core

#### Default values for readonly properties

[Readonly
properties](language.oop5.properties.md#language.oop5.properties.readonly-properties) may now declare default values.

```
<?php
class Config
{
    public readonly int $timeout = 30;
}

$config = new Config();
var_dump($config->timeout); // int(30)
```

#### Reference assignment on WeakMap

It is now possible to use reference assignment on a
[WeakMap](class.weakmap.md) without the key needing to be present
beforehand.

```
<?php
$obj = new stdClass();
$map = new WeakMap();
$count = 0;

// Previously: Error: "Object stdClass#1 not contained in WeakMap"
$map[$obj] = &$count;
$count++;

var_dump($map[$obj]); // int(1)
```

#### **\_\_debugInfo()** on enums

It is now possible to define the
[\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo)
magic method on [enums](language.enumerations.md).
Previously, this resulted in a fatal error.

```
<?php
enum Suit: string
{
    case Hearts = 'H';
    case Spades = 'S';

    public function __debugInfo(): array
    {
        return ['suit' => $this->name, 'symbol' => $this->value];
    }
}

var_dump(Suit::Hearts);
```

O exemplo acima produzirá:

```
enum(Suit::Hearts) (2) {
  ["suit"]=>
  string(6) "Hearts"
  ["symbol"]=>
  string(1) "H"
}
```

#### `#[\Override]` for class constants

The [Override](class.override.md) attribute can now be applied to
class constants, including enum cases.
As with methods and properties, a compile-time error is raised if no
matching constant exists in a parent class or implemented interface.

```
<?php
interface HasVersion
{
    const VERSION = '1.0';
}

class Package implements HasVersion
{
    #[\Override]
    const VERSION = '2.0';

    // Fatal error: Package::NAME has #[\Override] attribute,
    // but no matching parent constant exists
    // #[\Override]
    // const NAME = 'package';
}
```

#### Partial function application

Added support for partial function application. A call in which one or
more arguments are replaced by the `?` placeholder, or
the remaining arguments by the `...` placeholder,
creates a [Closure](class.closure.md) that accepts the missing
arguments.

```
<?php
function add(int $a, int $b, int $c = 0): int
{
    return $a + $b + $c;
}

// "?" replaces exactly one argument
$addOne = add(1, ?);
var_dump($addOne(5)); // int(6)

// "..." replaces all remaining arguments
$addToOne = add(1, ...);
var_dump($addToOne(2, 3)); // int(6)

// Works with any callable, including internal functions
$stripSpaces = str_replace(' ', '', ?);
var_dump($stripSpaces('a b c')); // string(3) "abc"
```

#### Mutating objects stored in constants

Objects stored in constants or class constants can now be mutated
directly via `OBJ->prop = $val`.

```
<?php
const CONFIG = new stdClass();

// Previously: "Fatal error: Cannot use temporary expression in write context"
CONFIG->debug = true;

var_dump(CONFIG->debug); // bool(true)
```

#### Endianness modifiers for pack() and unpack()

[pack()](function.pack.md) and [unpack()](function.unpack.md) now accept the
`<` (little-endian) and `>`
(big-endian) modifiers after the `s`, `S`,
`l`, `L`, `q` and
`Q` integer format codes, and after the
`f` and `d` float and double format codes.

```
<?php
echo bin2hex(pack('l>', 1)), PHP_EOL;   // Prints "00000001"
echo bin2hex(pack('l<', 1)), PHP_EOL;   // Prints "01000000"
echo bin2hex(pack('f>', 1.5)), PHP_EOL; // Prints "3fc00000"

var_dump(unpack('s>value', "\xff\xfe")); // ["value" => int(-2)]
```

### cURL

The array returned by [curl\_getinfo()](function.curl-getinfo.md) now includes a new
`"size_delivered"` key, which indicates the total number of
bytes passed to the download write callback.
This value can also be obtained by passing
**`CURLINFO_SIZE_DELIVERED`** as the
`option` parameter.
Requires libcurl 8.20.0 or later.

Added **`CURLOPT_SEEKFUNCTION`** to register a callback that
repositions a streamed request body, so libcurl can rewind and resend it on
a redirect, multi-pass authentication, or a retried reused connection
instead of failing with **`CURLE_SEND_FAIL_REWIND`**.
The callback receives the [CurlHandle](class.curlhandle.md), offset and
origin, and must return one of **`CURL_SEEKFUNC_OK`**,
**`CURL_SEEKFUNC_FAIL`** or
**`CURL_SEEKFUNC_CANTSEEK`**.

### Date

Added the **Time\Duration** class.

### FileInfo

[finfo\_file()](function.finfo-file.md) now works with remote streams.

### GMP

Added **gmp\_powm\_sec()** for side-channel quiet modular
exponentiation.
Requires GNU MP 5.0.0 or later; it is not available on official Windows
builds using MPIR.

Added **gmp\_prevprime()** to get the largest prime smaller
than the given number.
The optional `definitely_prime` output parameter
indicates whether the returned number is definitely prime, as opposed to
probably prime.
A [ValueError](class.valueerror.md) is thrown if no such prime
exists.
This function is only available when PHP is built against GNU MP 6.3.0 or
later; it is not available on official Windows builds using MPIR.

### Intl

Added the static methods
**IntlDatePatternGenerator::getSkeleton()** and
**IntlDatePatternGenerator::getBaseSkeleton()** to
generate the unique skeleton and base skeleton for a date/time pattern.

Added **Locale::getDisplayKeyword()** and
**Locale::getDisplayKeywordValue()**, with the aliases
**locale\_get\_display\_keyword()** and
**locale\_get\_display\_keyword\_value()**, respectively.

Added the **IntlNumberRangeFormatter** class to format
an interval of two numbers with a given skeleton and locale.
It is supported as of ICU 63.
The collapse behavior is one of:

- **`IntlNumberRangeFormatter::COLLAPSE_AUTO`**
- **`IntlNumberRangeFormatter::COLLAPSE_NONE`**
- **`IntlNumberRangeFormatter::COLLAPSE_UNIT`**
- **`IntlNumberRangeFormatter::COLLAPSE_ALL`**

The identity fallback is one of:

- **`IntlNumberRangeFormatter::IDENTITY_FALLBACK_SINGLE_VALUE`**
- **`IntlNumberRangeFormatter::IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE`**
- **`IntlNumberRangeFormatter::IDENTITY_FALLBACK_APPROXIMATELY`**
- **`IntlNumberRangeFormatter::IDENTITY_FALLBACK_RANGE`**

Added **SpoofChecker::areBidiConfusable()** to check
whether two strings are confusable for a given text direction, along with
the **`SpoofChecker::LTR`** and
**`SpoofChecker::RTL`** direction constants.
It is supported as of ICU 74.

Added **SpoofChecker::getBidiSkeleton()** to generate a
confusable skeleton for a given text direction.
It is supported as of ICU 74.

Added **SpoofChecker::getSkeleton()** to generate a
confusable skeleton for a given string.

### IO

Added a new polling API, consisting of:

- The **Io\Poll\Context** and **Io\Poll\Watcher** classes
- The **Io\Poll\Backend** and **Io\Poll\Event** enums
- The **Io\Poll\Handle** interface
- The **StreamPollHandle** class to watch streams

### JSON

Added extra information about the error location to the error messages
returned by [json\_last\_error\_msg()](function.json-last-error-msg.md) and to the message of
[JsonException](class.jsonexception.md).

### OpenSSL

Added TLS session resumption support for streams.
This allows saving and restoring client sessions across requests,
implementing custom server-side session storage, and controlling session
cache behavior, using the following new
[SSL context](context.ssl.md) options:

- `session_data`
- `session_new_cb`
- `session_cache`
- `session_cache_size`
- `session_timeout`
- `session_id_context`
- `session_get_cb`
- `session_remove_cb`
- `num_tickets`

Added TLS external PSK support for
streams with the new [SSL context](context.ssl.md)
options `psk_client_cb` and
`psk_server_cb`.
This allows setting and receiving pre-shared keys.

Added TLS 1.3 early data (0-RTT) support for streams.
Clients send early data with the `early_data`
[SSL context](context.ssl.md) option; servers accept it
with `max_early_data` and receive it through the
`early_data_cb` callback.
The outcome is reported as `"accepted"`,
`"rejected"` or `"not_sent"` in the
`"early_data"` key of the `"crypto"`
entry of the [stream\_get\_meta\_data()](function.stream-get-meta-data.md) array.

### PDO\_PGSQL

Added **`Pdo\Pgsql::ATTR_CHUNK_SIZE`**, the number of rows a
statement fetches per chunk.
A value of 1 or more enters the lazy fetch mode of
`PDO::ATTR_PREFETCH => 0`.
Setting **`PDO::ATTR_PREFETCH`** replaces the chunk size.
Statements that are prepared with neither it nor
**`PDO::ATTR_PREFETCH`** fall back to the value set on the
connection.
Requires libpq 17 or later.

### Phar

Overriding the [SplFileInfo::getMTime()](splfileinfo.getmtime.md) and
[SplFileInfo::getPathname()](splfileinfo.getpathname.md) methods now influences
the result of the [Phar::buildFromDirectory()](phar.buildfromdirectory.md) and
[Phar::buildFromIterator()](phar.buildfromiterator.md) family of methods.
This makes it possible to override the timestamp and names of files.

### SNMP

It is now possible to use `AES192`,
`AES192C`, `AES256`, and
`AES256C` as SNMPv3 security protocols if the underlying
library supports them.

It is now possible to reset the MIB tree using the new
**snmp\_init\_mib()** function.

Additional MIB parsing and output control functionality
has been exposed via:

- **snmp\_set\_mib\_option()**
- **snmp\_set\_output\_option()**
- **snmp\_set\_string\_output\_format()**
- SNMP::$numeric\_index
- SNMP::$numeric\_timeticks
- SNMP::$extended\_index
- SNMP::$dont\_print\_units
- SNMP::$escape\_quotes
- SNMP::$print\_hex\_text
- **SNMP::setOidOutputFormat()**
- **SNMP::setStringOutputFormat()**

### Streams

Added a new stream errors API, consisting of:

- The **StreamError** and **StreamException** classes
- The **StreamErrorStore**, **StreamErrorMode**, and **StreamErrorCode** enums
- The **stream\_last\_errors()** and **stream\_clear\_errors()** functions

It is controlled using the `error_mode`,
`error_store` and `error_handler`
stream context options.

Added the `filter.max_filter_count` stream context option
for [php://filter](wrappers.php.md) URLs.
When set, opening the stream fails with a warning if the URL would add more
filters than the configured value.
Negative values disable the check.

Added the [socket context](context.socket.md) option
`so_reuseaddr` that allows disabling address reuse
(`SO_REUSEADDR`) and explicitly uses
`SO_EXCLUSIVEADDRUSE` on Windows.

Added the [socket context](context.socket.md) options
`so_keepalive`, `tcp_keepidle`,
`tcp_keepintvl` and `tcp_keepcnt` that
allow setting socket keepalive options.

Added the [socket context](context.socket.md) option
`so_linger` that sets `SO_LINGER` on
TCP sockets.
A positive value enables lingering for that many seconds, zero or a
negative value disables it.
Values above 65535 are clamped as the linger time is limited to an
unsigned short on some platforms.

Added the [socket context](context.socket.md) options
`so_rcvbuf` and `so_sndbuf` that set the
socket receive and send buffer sizes in bytes
(`SO_RCVBUF` and `SO_SNDBUF`) on
TCP and UDP sockets.
The value must be an integer between 1 and 2147483647, any other value
makes the stream creation fail.
The operating system may round, cap or otherwise adjust the requested size,
and may stop sizing that buffer automatically, so the size read back can
differ from the one requested.

Filtered streams can now be cast to file descriptors for use with
[stream\_select()](function.stream-select.md).

Added the `"write_seek_mode"` filter parameter for the
bz2, iconv, zlib, and [convert](filters.convert.md) stream
filters.
This parameter must be set via an associative array where the key is
`"write_seek_mode"` and the value is one of the following
strings:

- `"preserve"`
- `"reset"`
- `"strict"`

### URI

Added **Uri\Rfc3986\Uri::getUriType()** and
**Uri\WhatWg\Url::isSpecialScheme()**.

Added **Uri\Rfc3986\Uri::getHostType()** and
**Uri\WhatWg\Url::getHostType()**.

Added the **Uri\Rfc3986\UriBuilder** and
**Uri\WhatWg\UrlBuilder** classes.

Added **Uri\WhatWg\url\_percent\_encode()**.

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

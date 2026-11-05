# Deprecated Features

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.deprecated.php

---

## Deprecated Features

### PHP Core

#### Using "namespace" as a class constant name

Declaring a [class constant](language.oop5.constants.md)
named `namespace` is now deprecated.
`namespace` is a semi-reserved keyword, and the name is
being reserved for possible future syntax such as a
`::namespace` pseudo-constant analogous to
`::class`.
Methods and static properties named `namespace` are
not affected.
Rename the constant, for example to `NAMESPACE_NAME`.

#### Returning from a finally block

Using the `return` statement inside a `finally` block
is now deprecated, and emits a compile-time deprecation notice.
Such a `return` silently discards an exception thrown
by, or overwrites the value returned from, the associated
`try` or `catch` block, so failures
vanish without a trace.
Move the `return` out of the `finally`
block instead; the same result can always be expressed without it.

```
<?php
function getConfig(): array
{
    try {
        return loadConfig(); // throws if the file is missing
    } finally {
        return []; // Deprecated: the exception is gone, the caller just gets []
    }
}
```

#### Nullable return type for \_\_debugInfo()

Declaring a return type of
?[array](language.types.array.md) for
[\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo) is now
deprecated.
Returning **`null`** from this method was
[already
deprecated in PHP 8.5](migration85.deprecated.md#migration85.deprecated.core.return-null-from-debuginfo), so the nullable return type no longer
describes valid behaviour.
Declare [array](language.types.array.md) instead.

#### Returning values from \_\_construct() and \_\_destruct()

Returning a value from
[\_\_construct()](language.oop5.decon.md#language.oop5.decon.constructor) or
[\_\_destruct()](language.oop5.decon.md#language.oop5.decon.destructor) is now
deprecated, and emits a compile-time deprecation notice.
These methods cannot declare a return type, and their return value can
never be observed during normal use, which made returning a value
confusing at best.
Using `return;` without a value to skip the remaining
logic is still allowed, as is calling these methods manually.

For the same reason, using `yield` to make
[\_\_construct()](language.oop5.decon.md#language.oop5.decon.constructor) or
[\_\_destruct()](language.oop5.decon.md#language.oop5.decon.destructor) a
[generator](language.generators.md) is now deprecated.

#### Naming a function readonly

Declaring a function named `readonly` is now deprecated.
[readonly](language.oop5.properties.md#language.oop5.properties.readonly-properties)
is a reserved keyword; a lexer exception was added in PHP 8.1 solely to
keep an existing WordPress function of that name working, and no other
keyword in PHP receives such special treatment.
Rename the function.

#### Using let, is, or \_ as an identifier

Using `let` or `is` as the name of a
class, interface, trait, enum, function, or constant (including via
[define()](function.define.md)) is now deprecated, as is using either as
the alias in a [class\_alias()](function.class-alias.md) call or in a
`use`, `use function`, or
`use const` declaration.
The names are being reserved as keywords for potential future features:
`let` for block scoping and `is` for
pattern matching.
Rename the affected symbols.

The
[deprecation
of `_` as a class name in PHP 8.4](migration84.deprecated.md#migration84.deprecated.core.underscore-class-name) is extended to
constants: declaring a constant named `_` with
`const` or [define()](function.define.md), and aliasing a
class or constant to `_` in a `use`
declaration, are now deprecated.
Functions named `_`, including the
[\_()](function.-.md) alias of [gettext()](function.gettext.md), are not
affected.

#### Third argument to define()

Passing the `case_insensitive` argument to
[define()](function.define.md) is now deprecated.
Case-insensitive constants were removed in PHP 8.0, since when the
argument has been ignored.
Explicitly passing **`false`** now emits a deprecation notice.
Passing **`true`** continues to emit a warning, whose message now states
that this will become an error in PHP 9.0.
Omit the argument.

#### is\_a() and is\_subclass\_of() with a string when allow\_string is false

Calling [is\_a()](function.is-a.md) or [is\_subclass\_of()](function.is-subclass-of.md)
with a string as the first argument while
`allow_string` is **`false`** is now deprecated.
In that case the functions always return **`false`**, even when the class
is already loaded, so such a call indicates a bug.
To avoid triggering autoloading, check [class\_exists()](function.class-exists.md)
with autoloading disabled first, and then call the function with
`allow_string` set to **`true`**.

#### metaphone()

The [metaphone()](function.metaphone.md) function is now deprecated.
It implements the original 1990 Metaphone algorithm, which is limited to
English pronunciation rules and has long been superseded by Double
Metaphone and Metaphone 3.
Phonetic algorithms are language-specific and frequently updated, so
they are better served by a userland library; use one instead.

#### More than 16 filters in a php://filter URL

Using more than 16 filters in a
[php://filter](wrappers.php.md) URL without configuring
the `filter.max_filter_count` stream context option now
emits a deprecation notice.
Long filter chains have no known legitimate use, but are the basis of
a class of attacks that turn a local file inclusion or an arbitrary file
read into remote code execution.
When `filter.max_filter_count` is set explicitly,
exceeding it is already an error: opening the stream fails with a
warning.

Code that needs more filters should either add them with
[stream\_filter\_append()](function.stream-filter-append.md) or
[stream\_filter\_prepend()](function.stream-filter-prepend.md), which are not limited, or
raise the limit through the context option, for example globally with
[stream\_context\_set\_default()](function.stream-context-set-default.md).

#### Passing objects to array\_walk(), array\_walk\_recursive(), and http\_build\_query()

Passing an object as the `array` argument to
[array\_walk()](function.array-walk.md) or
[array\_walk\_recursive()](function.array-walk-recursive.md) is now deprecated.
A small number of functions silently interpret an object as the array
of its visible properties.
Modifying such properties through a by-reference callback violates
[readonly](language.oop5.properties.md#language.oop5.properties.readonly-properties)
semantics and can corrupt enum cases, and
[array\_walk\_recursive()](function.array-walk-recursive.md) does not recurse into nested
objects anyway.
Call [get\_object\_vars()](function.get-object-vars.md) on the object first and pass
the resulting array.

Passing an object as the `data` argument to
[http\_build\_query()](function.http-build-query.md) is now deprecated.
Objects encountered as values within `data` now
also emit a deprecation notice when they are interpreted as arrays.
Treating objects as arrays has been a recurring source of confusion,
in particular for [Stringable](class.stringable.md) objects,
which users expect to be converted to a string instead.
Convert objects to arrays with [get\_object\_vars()](function.get-object-vars.md),
recursively if necessary, before calling the function.

#### is\_double(), is\_long(), is\_integer(), and doubleval()

Following the
[deprecation
of the non-canonical cast names in PHP 8.5](migration85.deprecated.md#migration85.deprecated.core.non-canonical-cast-names), the function aliases
that carry the same outdated type names are now deprecated.
They behave identically to their canonical counterparts, which should
be used instead:

- [is\_double()](function.is-double.md) => [is\_float()](function.is-float.md)
- [is\_long()](function.is-long.md) => [is\_int()](function.is-int.md)
- [is\_integer()](function.is-integer.md) => [is\_int()](function.is-int.md)
- [doubleval()](function.doubleval.md) => [floatval()](function.floatval.md)

#### strcoll() and SORT\_LOCALE\_STRING

The [strcoll()](function.strcoll.md) function is now deprecated.
It compares strings according to the `LC_COLLATE`
setting of the current locale, which is global process state set via
[setlocale()](function.setlocale.md) that any library can change, it is not
binary safe unlike every other string comparison function, and some
locales do not implement correct collation rules.
Use [Collator::compare()](collator.compare.md) from the
[intl](book.intl.md) extension instead, which is
accurate and has up-to-date collation rules.

The **`SORT_LOCALE_STRING`** flag of the sort functions
is now deprecated for the same reasons, as it sorts using
[strcoll()](function.strcoll.md).
Use one of the following methods of the
[Collator](class.collator.md) class instead:

- [Collator::sort()](collator.sort.md)
- [Collator::asort()](collator.asort.md)
- [Collator::sortWithSortKeys()](collator.sortwithsortkeys.md)

### Bzip2

Passing an object as the parameters of the
[bzip2.compress and
bzip2.decompress](filters.compression.md) stream filters is now deprecated, as only an
associative array is documented and supported.
Call [get\_object\_vars()](function.get-object-vars.md) on the object first and pass
the resulting array.

### GMP

The shift (`<<`, `>>`) and
exponentiation (`**`) operators on
[GMP](class.gmp.md) objects now emit a deprecation notice when the
right operand is a [float](language.types.float.md) whose conversion to
[int](language.types.integer.md) loses precision, consistent with the deprecation of
implicit lossy float to int conversions elsewhere in the language.

### MBString

The mbregex functions have been deprecated, because the underlying
Oniguruma library is no longer maintained; its maintenance ended in
April 2025.
The functions will be removed in PHP 9.0.
For most use cases the [PCRE](book.pcre.md) functions
with the `u` modifier are a suitable replacement.
The affected functions are:

- [mb\_ereg()](function.mb-ereg.md)
- [mb\_ereg\_match()](function.mb-ereg-match.md)
- [mb\_ereg\_replace()](function.mb-ereg-replace.md)
- [mb\_ereg\_replace\_callback()](function.mb-ereg-replace-callback.md)
- [mb\_ereg\_search()](function.mb-ereg-search.md)
- [mb\_ereg\_search\_getpos()](function.mb-ereg-search-getpos.md)
- [mb\_ereg\_search\_getregs()](function.mb-ereg-search-getregs.md)
- [mb\_ereg\_search\_init()](function.mb-ereg-search-init.md)
- [mb\_ereg\_search\_pos()](function.mb-ereg-search-pos.md)
- [mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md)
- [mb\_ereg\_search\_setpos()](function.mb-ereg-search-setpos.md)
- [mb\_eregi()](function.mb-eregi.md)
- [mb\_eregi\_replace()](function.mb-eregi-replace.md)
- [mb\_regex\_encoding()](function.mb-regex-encoding.md)
- [mb\_regex\_set\_options()](function.mb-regex-set-options.md)
- [mb\_split()](function.mb-split.md)

The **`MB_ONIGURUMA_VERSION`** constant and the
[mbstring.regex\_retry\_limit](mbstring.configuration.md#ini.mbstring.regex-retry-limit)
and
[mbstring.regex\_stack\_limit](mbstring.configuration.md#ini.mbstring.regex-stack-limit)
INI directives are deprecated along with them.

Passing an object as the `vars` argument to
[mb\_convert\_variables()](function.mb-convert-variables.md) is now deprecated, as objects
are silently interpreted as the array of their visible properties.
Call [get\_object\_vars()](function.get-object-vars.md) on the object first, or use
[mb\_convert\_encoding()](function.mb-convert-encoding.md), which converts arrays
recursively and returns the result instead of modifying its argument
in place.

### MySQLi

The [mysqli\_get\_charset()](mysqli.get-charset.md) function and the
[mysqli::get\_charset()](mysqli.get-charset.md) method are now deprecated,
without replacement.
They expose internal implementation details of the character set that
have been meaningless since the switch to mysqlnd; in particular the
reported collation does not correspond to the collation defined by the
server.
To get the name of the current character set, use
[mysqli\_character\_set\_name()](mysqli.character-set-name.md) or
[mysqli::character\_set\_name()](mysqli.character-set-name.md).

The [mysqli\_stmt\_init()](mysqli.stmt-init.md) function and the
[mysqli::stmt\_init()](mysqli.stmt-init.md) method are now deprecated.
They create an empty statement object that still has to be prepared
before use, and are a source of statement objects left in an
inconsistent state.
Use [mysqli\_prepare()](mysqli.prepare.md) or
[mysqli::prepare()](mysqli.prepare.md) instead, which prepare the
statement in one step.
For the same reason, calling the
[mysqli\_stmt::\_\_construct()](mysqli-stmt.construct.md) constructor without the
`query` parameter is now deprecated; pass the query
to the constructor instead.

### Reflection

Calling [ReflectionProperty::setValue()](reflectionproperty.setvalue.md) or
[ReflectionProperty::setRawValue()](reflectionproperty.setrawvalue.md) with an object
that is not an instance of the class on which the property was declared
is now deprecated.
Unlike the other [ReflectionProperty](class.reflectionproperty.md) methods, which
throw for such objects, these methods silently set a property on the
unrelated object, which is no better than a normal assignment and
conceptually wrong.

Passing an object to [ReflectionMethod::invoke()](reflectionmethod.invoke.md) or
[ReflectionMethod::invokeArgs()](reflectionmethod.invokeargs.md) when invoking a
static method is now deprecated.
Static methods have no $this, so the object was
ignored entirely and never validated.
Pass **`null`** instead.

### Session

Passing an object that does not implement both the
[SessionIdInterface::create\_sid()](sessionidinterface.create-sid.md) and
[SessionUpdateTimestampHandlerInterface::validateId()](sessionupdatetimestamphandlerinterface.validateid.md)
methods to [session\_set\_save\_handler()](function.session-set-save-handler.md) is now
deprecated, regardless of which interfaces the object declares.
These methods are required for a save handler to behave correctly under
[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode),
which is
[enabled by default as of
PHP 8.6](migration86.incompatible.md#migration86.incompatible.session) and mitigates session fixation.

Accordingly, a deprecation notice is now emitted when a class implements
[SessionHandlerInterface](class.sessionhandlerinterface.md) without defining
the [SessionIdInterface::create\_sid()](sessionidinterface.create-sid.md) or
[SessionUpdateTimestampHandlerInterface::validateId()](sessionupdatetimestamphandlerinterface.validateid.md)
methods.
In PHP 9.0 these methods will be moved from
[SessionIdInterface](class.sessionidinterface.md) and
[SessionUpdateTimestampHandlerInterface](class.sessionupdatetimestamphandlerinterface.md) into
[SessionHandlerInterface](class.sessionhandlerinterface.md), where they will be
required.
Implement both methods on custom save handlers now.

### SPL

The [spl\_classes()](function.spl-classes.md) function is now deprecated.
No other extension exposes such a function, and the Reflection extension
is always available.
Use [ReflectionExtension::getClassNames()](reflectionextension.getclassnames.md) instead.

The [spl\_object\_hash()](function.spl-object-hash.md) function is now deprecated.
Since PHP 8.1 its return value has been nothing more than a reformatted
[spl\_object\_id()](function.spl-object-id.md), and the name is misleading as the
value is not derived from the contents of the object.
The string form is also error-prone: two hashes can compare loosely equal
because both are numeric strings.
Use [spl\_object\_id()](function.spl-object-id.md) instead.

The following [ArrayIterator](class.arrayiterator.md) methods are now
deprecated.
They only exist because [ArrayIterator](class.arrayiterator.md) historically
shared its implementation with [ArrayObject](class.arrayobject.md); most
of them make little sense on an iterator and prevent optimizing its
implementation.
The corresponding [ArrayObject](class.arrayobject.md) methods are not
deprecated.

- [ArrayIterator::getFlags()](arrayiterator.getflags.md)
- [ArrayIterator::setFlags()](arrayiterator.setflags.md)
- [ArrayIterator::asort()](arrayiterator.asort.md)
- [ArrayIterator::ksort()](arrayiterator.ksort.md)
- [ArrayIterator::uasort()](arrayiterator.uasort.md)
- [ArrayIterator::uksort()](arrayiterator.uksort.md)
- [ArrayIterator::natsort()](arrayiterator.natsort.md)
- [ArrayIterator::natcasesort()](arrayiterator.natcasesort.md)
- [ArrayIterator::unserialize()](arrayiterator.unserialize.md)
- [ArrayIterator::serialize()](arrayiterator.serialize.md)

The CSV methods of [SplFileObject](class.splfileobject.md) are now
deprecated.
Their historical design inconsistencies, further exposed by named
arguments, have made them increasingly difficult to maintain, and CSV
handling does not naturally belong in [SplFileObject](class.splfileobject.md).
Use [fgetcsv()](function.fgetcsv.md) and [fputcsv()](function.fputcsv.md) on a
stream instead.

- [SplFileObject::fgetcsv()](splfileobject.fgetcsv.md)
- [SplFileObject::fputcsv()](splfileobject.fputcsv.md)
- [SplFileObject::setCsvControl()](splfileobject.setcsvcontrol.md)
- [SplFileObject::getCsvControl()](splfileobject.getcsvcontrol.md)

### Zlib

Passing an object as the parameters of the
[zlib.deflate and zlib.inflate](filters.compression.md)
stream filters is now deprecated, as only an associative array is
documented and supported.
Call [get\_object\_vars()](function.get-object-vars.md) on the object first and pass
the resulting array.

Passing an object as the `options` argument to
[deflate\_init()](function.deflate-init.md) or [inflate\_init()](function.inflate-init.md)
is now deprecated, as objects are silently interpreted as the array of
their visible properties.
Call [get\_object\_vars()](function.get-object-vars.md) on the object first and pass
the resulting array.

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

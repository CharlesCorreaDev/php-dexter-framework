# str() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/str.html

---

# str()

Twig Function

- [str\_limit()](docs__4.x__markup__function__str.md#str-limit)
- [str\_words()](docs__4.x__markup__function__str.md#str-words)
- [str\_replace](docs__4.x__markup__function__str.md#str-replace)
- [str\_camel()](docs__4.x__markup__function__str.md#str-camel)
- [str\_studly()](docs__4.x__markup__function__str.md#str-studly)
- [str\_snake()](docs__4.x__markup__function__str.md#str-snake)
- [str\_plural()](docs__4.x__markup__function__str.md#str-plural)
- [str\_upper()](docs__4.x__markup__function__str.md#str-upper)
- [str\_lower()](docs__4.x__markup__function__str.md#str-lower)
- [str\_ucfirst()](docs__4.x__markup__function__str.md#str-ucfirst)
- [str\_lcfirst()](docs__4.x__markup__function__str.md#str-lcfirst)
- [str\_repeat()](docs__4.x__markup__function__str.md#str-repeat)
- [str\_pad\_both](docs__4.x__markup__function__str.md#str-pad-both)
- [str\_pad\_left](docs__4.x__markup__function__str.md#str-pad-left)
- [str\_pad\_right](docs__4.x__markup__function__str.md#str-pad-right)
- [str\_reverse](docs__4.x__markup__function__str.md#str-reverse)

[More...](#)

Functions prefixed with `str_` perform tasks that are useful when dealing with strings. The helper maps directly to the `Str` PHP class and its methods. For example:

```
___TWIG0___
```

The above is the PHP equivalent of the following:

```
<?= Str::camel() ?>
```

Methods in *camelCase* should be converted to *snake\_case*.

You may also apply the string functions as a Twig filter.

```
___TWIG0___
```

## [#](#str-limit) str\_limit()

Limit the number of characters in a string.

```
___TWIG0___
```

To add a suffix when limit is applied, pass it as the third argument. Defaults to `...`.

```
___TWIG0___
```

## [#](#str-words) str\_words()

Limit the number of words in a string.

```
___TWIG0___
```

To add a suffix when limit is applied, pass it as the third argument. Defaults to `...`.

```
___TWIG0___
```

## [#](#str-replace) str\_replace

Replace all occurrences of the search string with the replacement string.

```
// Outputs: Bob
___TWIG0___
```

## [#](#str-camel) str\_camel()

Convert a value to *camelCase*.

```
// Outputs: helloWorld
___TWIG0___
```

## [#](#str-studly) str\_studly()

Convert a value to *StudlyCase*.

```
// Outputs: HelloWorld
___TWIG0___
```

## [#](#str-snake) str\_snake()

Convert a value to *snake\_case*.

```
// Outputs: hello_world
___TWIG0___
```

The second argument can supply a delimiter.

```
// Outputs: hello---world
___TWIG0___
```

## [#](#str-plural) str\_plural()

Gets the plural form of an English word.

```
// Outputs: chickens
___TWIG0___
```

## [#](#str-upper) str\_upper()

Makes a string uppercase.

```
// Outputs: Hello I'm JACK
Hello I'm ___TWIG0___
```

## [#](#str-lower) str\_lower()

Makes a string lowercase.

```
// Outputs: Hello I'm jack
Hello I'm ___TWIG0___
```

## [#](#str-ucfirst) str\_ucfirst()

Makes a string's first character uppercase.

```
// Outputs: Hello I'm Jack
Hello I'm ___TWIG0___
```

## [#](#str-lcfirst) str\_lcfirst()

Makes a string's first character lowercase.

```
// Outputs: Hello I'm jack
Hello I'm ___TWIG0___
```

## [#](#str-repeat) str\_repeat()

Repeats a string.

```
// Outputs: We are the best best best!
We are the ___TWIG0___!
```

## [#](#str-pad-both) str\_pad\_both

Pads a string to a certain length with another string from both sides.

```
// Outputs: ooxxxoo
___TWIG0___
```

## [#](#str-pad-left) str\_pad\_left

Pads a string to a certain length with another string from left side.

```
// Outputs: ooxxx
___TWIG0___
```

## [#](#str-pad-right) str\_pad\_right

Pads a string to a certain length with another string from right side.

```
// Outputs: xxxoo
___TWIG0___
```

## [#](#str-reverse) str\_reverse

Reverses a string.

```
// Outputs: !dlrow olleH
___TWIG0___
```

← [dump()](docs__4.x__markup__function__dump.md)[form()](docs__4.x__markup__function__form.md) →

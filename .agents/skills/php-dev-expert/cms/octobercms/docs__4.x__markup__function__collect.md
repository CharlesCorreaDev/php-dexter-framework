# collect() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/collect.html

---

# collect()

Twig Function

- [shuffle](docs__4.x__markup__function__collect.md#shuffle)
- [sortBy](docs__4.x__markup__function__collect.md#sortby)

The `collect()` function provides a nicer interface for building arrays in Twig. Twig is intentionally minimalist as a view layer and building an array requires a continuous merge process.

Take the following example to build an array using the native Twig `|merge` filter:

```
___TWIG0___
___TWIG1___
    ___TWIG2___
___TWIG3___
```

Using the `collect()` function returns [a collection object](docs__4.x__extend__services__collection.md) that lets you push elements instead. The above example can be achieve using the `push` method.

```
___TWIG0___
___TWIG1___
    ___TWIG2___
___TWIG3___
```

Passing an array as the first argument will initialize the collection with items prepopulated.

```
___TWIG0___
```

## [#](#shuffle) shuffle

The `shuffle()` method shuffles the collection.

```
___TWIG0___
```

In a foreach loop.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

## [#](#sortby) sortBy

The `sortBy()` and `sortByDesc` methods can sort a collection by given field (key).

```
collect(data).sortBy('age')
```

For example:

```
// Output: John David
___TWIG0___

___TWIG1___
    ___TWIG2___&nbsp;
___TWIG3___
```

#### [#](#see-also) See Also

- [Building API Resources](docs__4.x__cms__resources__building-apis.md)

← [redirect()](docs__4.x__markup__function__redirect.md)[config()](docs__4.x__markup__function__config.md) →

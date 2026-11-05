# this.session - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-session.html

---

# this.session

Twig Property

- [this.session.get()](docs__4.x__markup__property__this-session.md#this-session-get)
- [this.session.has()](docs__4.x__markup__property__this-session.md#this-session-has)
- [this.session.put()](docs__4.x__markup__property__this-session.md#this-session-put)
- [this.session.forget()](docs__4.x__markup__property__this-session.md#this-session-forget)

You can access the current session manager via `this.session` and it returns the object `Illuminate\Session\Store` [current session configuration](docs__4.x__extend__services__session.md).

## [#](#this-session-get) this.session.get()

You can retrieve data from the session by passing the key name to `this.session.get` as the first argument.

```
___TWIG0___
```

You may also pass a default value as the second argument.

```
___TWIG0___
```

## [#](#this-session-has) this.session.has()

The `this.session.has` method can determine if an item exists in the session.

```
___TWIG0___
    <h1>We found key in the session</h1>
___TWIG1___
```

## [#](#this-session-put) this.session.put()

The `this.session.put` method is used to store session data.

```
___TWIG0___
```

## [#](#this-session-forget) this.session.forget()

The `this.session.forget` will delete a single key (first argument) from the session.

```
___TWIG0___
```

To remove all the session data, use `this.session.flush` instead.

```
___TWIG0___
```

#### [#](#see-also) See Also

- [Session Service](docs__4.x__extend__services__session.md)

← [this.environment](docs__4.x__markup__property__this-environment.md)[this.request](docs__4.x__markup__property__this-request.md) →

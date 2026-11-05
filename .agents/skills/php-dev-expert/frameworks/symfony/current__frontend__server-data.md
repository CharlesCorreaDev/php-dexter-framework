# Passing Information from Twig to JavaScript (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/server-data.html

---

# Passing Information from Twig to JavaScript

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/server-data.rst)

In Symfony applications, you may find that you need to pass some dynamic data
(e.g. user information) from Twig to your JavaScript code. One great way to pass
dynamic configuration is by storing information in `data-*` attributes and reading
them later in JavaScript. For example:

```
1
2
3
4
5
6
```

```
<div class="js-user-rating"
    data-is-authenticated="{{ app.user ? 'true' : 'false' }}"
    data-user="{{ app.user|serialize(format = 'json')|e('html') }}"
>
    <!-- ... -->
</div>
```

Fetch this in JavaScript:

```
1
2
3
4
5
```

```
document.addEventListener('DOMContentLoaded', function() {
    const userRating = document.querySelector('.js-user-rating');
    const isAuthenticated = userRating.getAttribute('data-is-authenticated');
    const user = JSON.parse(userRating.getAttribute('data-user'));
});
```

Note

If you prefer to [access data attributes via JavaScript's dataset property](https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes),
the attribute names are converted from dash-style to camelCase. For example,
`data-number-of-reviews` becomes `dataset.numberOfReviews`:

```
1
2
3
```

```
// ...
const isAuthenticated = userRating.dataset.isAuthenticated;
const user = JSON.parse(userRating.dataset.user);
```

There is no size limit for the value of the `data-*` attributes, so you can
store any content. In Twig, use the `html` escaping strategy to avoid messing
with HTML attributes. For example, if your `User` object has some `getProfileData()`
method that returns an array, you could do the following:

```
1
2
3
```

```
<div data-user-profile="{{ app.user ? app.user.profileData|json_encode|e('html') }}">
    <!-- ... -->
</div>
```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

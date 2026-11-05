# Enabling CSRF Protection | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/enabling-csrf-protection

---

Search Knowledge Base

# Enabling CSRF Protection

Craft has built-in, [automatically-enabled](https://craftcms.com/docs/5.x/reference/config/general.html#enablecsrfprotection) protection against [Cross-Site Request Forgery](http://en.wikipedia.org/wiki/Cross-site_request_forgery) (CSRF) attacks.

Any time you generate a CSRF token for a user, Craft sets a `CRAFT_CSRF_TOKEN` validation cookie on their browser. Subsequent POST requests *must* be accompanied by a matching token—if they aren’t, Craft rejects the request with a 400-level error.

In most cases, Craft handles both halves of this with a single change to your forms. You can also support [CSRF over Ajax](#csrf-over-ajax)!

### CSRF in HTML Forms [#](#csrf-in-html-forms "Direct link to CSRF in HTML Forms")

Any `<form>` that uses `method="post"` must include a CSRF input. Craft comes with a [`csrfInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#csrfinput) function that generates a complete, hidden HTML input element:

```
<form method="post">
  {{ csrfInput() }}

  {# ... #}
</form>
```

This is typically equivalent to manually constructing an input:

```
<input
  type="hidden"
  name="{{ craft.app.config.general.csrfTokenName }}"
  value="{{ craft.app.request.csrfToken }}">
```

### Caching and Asynchronous CSRF [#](#caching-and-asynchronous-csrf "Direct link to Caching and Asynchronous CSRF")

Caching CSRF tokens can lead to bugs and security issues. Never manually output a token inside a [`{% cache %}`](https://craftcms.com/docs/5.x/reference/twig/tags.html#cache) tag, and avoid statically caching pages with forms that rely on CSRF.

However, Craft 5.1 added support for cachable, “asynchronous” CSRF inputs. As long as you are using the `csrfInput()` function in your templates, you can enable the [`asyncCsrfInputs`](https://craftcms.com/docs/5.x/reference/config/general.html#asynccsrfinputs) setting to replace its output with a cachable placeholder element. Craft registers a JavaScript snippet that fetches a CSRF token over Ajax and injects a hidden input—as though it was there all along.

You can strategically opt-in to asynchronous CSRF by passing an `async` key to the `csrfInput()` function:

```
<form method="post">
  {# Only use async CSRF in this one form: #}
  {{ csrfInput({ async: true }) }}

  {# ... #}
</form>
```

### CSRF over Ajax [#](#csrf-over-ajax "Direct link to CSRF over Ajax")

If your front-end needs to send data to Craft over Ajax, *it should still use CSRF*. See the documentation on [Ajax and Forms](https://craftcms.com/docs/5.x/development/forms.html#ajax) for framework-agnostic information on retrieving and sending CSRF tokens.

- [Static Caching on Craft Cloud](kb__cloud-static-caching.md "Static Caching on Craft Cloud")

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

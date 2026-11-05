# Twig Extensions Defined by Symfony (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/reference/twig_reference.html

---

# Twig Extensions Defined by Symfony

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/reference/twig_reference.rst)

[Twig](current__templates.md#twig-language) is the template engine used in Symfony applications.
There are dozens of [default filters and functions defined by Twig](https://twig.symfony.com/doc/3.x/#reference), but
Symfony also defines some filters, functions and tags to integrate the various
Symfony components with Twig templates. This article explains them all.

Tip

If these extensions provided by Symfony are not enough, you can
[create a custom Twig extension](current__templates.md#templates-twig-extension) to define
even more filters and functions.

## [Functions](#functions "Permalink to this headline")

### [absolute\_url](#absolute-url "Permalink to this headline")

```
1
```

```
{{ absolute_url(path) }}
```

`path`
:   **type**: `string`

Returns the absolute URL (with scheme and host) from the passed relative path. Combine it with the
[asset() function](current__reference__twig_reference.md#reference-twig-function-asset) to generate absolute URLs
for web assets. Read more about [Linking to CSS, JavaScript and Image Assets](current__templates.md#templates-link-to-assets).

### [access\_decision](#access-decision "Permalink to this headline")

```
1
```

```
{{ access_decision(role, object = null) }}
```

`role`
:   **type**: `string`

`object` *(optional)*
:   **type**: `object`

Returns an [AccessDecision](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Security/Core/Authorization/AccessDecision.php "Symfony\Component\Security\Core\Authorization\AccessDecision")
object, which tells whether the current user has the given role (`isGranted`) and
gives the reason of a denial (`message`). More information can be found in
[Security](current__security.md#security-template).

### [access\_decision\_for\_user](#access-decision-for-user "Permalink to this headline")

```
1
```

```
{{ access_decision_for_user(user, attribute, subject = null) }}
```

`user`
:   **type**: `object`

`attribute`
:   **type**: `string`

`subject` *(optional)*
:   **type**: `object`

Same as `access_decision()`, but it checks the authorization of the given user
instead of the current one.

### [asset](#asset "Permalink to this headline")

```
1
```

```
{{ asset(path, packageName = null) }}
```

`path`
:   **type**: `string`

`packageName` *(optional)*
:   **type**: `string` | `null` **default**: `null`

```
1
2
3
4
5
6
7
```

```
# config/packages/framework.yaml
framework:
    # ...
    assets:
        packages:
            foo_package:
                base_path: /avatars
```

```
1
2
3
```

```
{# the image lives at "public/avatars/avatar.png" #}
{{ asset(path = 'avatar.png', packageName = 'foo_package') }}
{# output: /avatars/avatar.png #}
```

Returns the public path of the given asset path (which can be a CSS file, a
JavaScript file, an image path, etc.). This function takes into account where
the application is installed (e.g. in case the project is accessed in a host
subdirectory) and the optional asset package base path.

Symfony provides various cache busting implementations via the
[assets.version](current__reference__configuration__framework.md#reference-framework-assets-version),
[assets.version\_strategy](current__reference__configuration__framework.md#reference-assets-version-strategy),
and [assets.json\_manifest\_path](current__reference__configuration__framework.md#reference-assets-json-manifest-path)
configuration options.

See also

Read more about [linking to web assets from templates](current__templates.md#templates-link-to-assets).

### [asset\_version](#asset-version "Permalink to this headline")

```
1
```

```
{{ asset_version(path, packageName = null) }}
```

`path`
:   **type**: `string`

`packageName` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns the current version of the package, more information in
[Creating and Using Templates](current__templates.md#templates-link-to-assets).

### [controller](#controller "Permalink to this headline")

```
1
```

```
{{ controller(controller, attributes = {}, query = {}) }}
```

`controller`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

`query` *(optional)*
:   **type**: `array` **default**: `{}`

Returns an instance of `ControllerReference` to be used with functions
like [render()](current__reference__twig_reference.md#reference-twig-function-render) and
[render\_esi()](current__reference__twig_reference.md#reference-twig-function-render-esi).

```
1
2
```

```
{{ render(controller('App\\Controller\\BlogController:latest', {max: 3})) }}
{# output: the content returned by the controller method; e.g. a rendered Twig template #}
```

### [csrf\_token](#csrf-token "Permalink to this headline")

```
1
```

```
{{ csrf_token(intention) }}
```

`intention`
:   **type**: `string` - an arbitrary string used to identify the token.

Renders a CSRF token. Use this function if you want [CSRF protection](current__security__csrf.md)
in a regular HTML form not managed by the Symfony Form component.

```
1
2
3
```

```
{{ csrf_token('my_form') }}
{# output: a random alphanumeric string like:
   a.YOosAd0fhT7BEuUCFbROzrvgkW8kpEmBDQ_DKRMUi2o.Va8ZQKt5_2qoa7dLW-02_PLYwDBx9nnWOluUHUFCwC5Zo0VuuVfQCqtngg #}
```

### [dns\_prefetch](#dns-prefetch "Permalink to this headline")

```
1
```

```
{{ dns_prefetch(uri, attributes = {}) }}
```

`uri`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Resource hint that indicates an origin (e.g. `https://foo.cloudfront.net`)
that will be used to fetch required resources, and that the user agent should
resolve as early as possible. Read more about [Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [dump](#dump "Permalink to this headline")

```
1
```

```
{{ dump(variable1, variable2, ...) }}
```

Dumps the contents of the given variables using the
[VarDumper component](current__components__var_dumper.md) and displays them inside the
web page contents. If you call it without arguments, it dumps all the variables
available in the template:

```
1
2
3
4
5
6
7
8
```

```
{# dump a single variable #}
{{ dump(user) }}

{# use named arguments to display labels next to the dumped contents #}
{{ dump(blog_posts: articles, user: app.user) }}

{# dump all the variables available in the template #}
{{ dump() }}
```

To avoid leaking sensitive information, this function is only available in the
`dev` and `test` [configuration environments](current__configuration.md#configuration-environments).
Use the [dump tag](current__reference__twig_reference.md#reference-twig-tag-dump) instead to send the contents to
the web debug toolbar rather than displaying them inside the web page.

See also

Read more about the [dump Twig utilities](current__templates.md#twig-dump-utilities).

### [expression](#expression "Permalink to this headline")

Creates an [Expression](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/ExpressionLanguage/Expression.php "Symfony\Component\ExpressionLanguage\Expression") related
to the [ExpressionLanguage component](current__expression_language.md).

```
1
2
```

```
{{ expression(1 + 2) }}
{# output: 3 #}
```

### [Form Related Functions](#form-related-functions "Permalink to this headline")

The following functions related to Symfony Forms are also available. They are
explained in the article about [customizing form rendering](current__form__form_customization.md):

- [form()](current__form__form_customization.md#reference-forms-twig-form)
- [form\_start()](current__form__form_customization.md#reference-forms-twig-start)
- [form\_end()](current__form__form_customization.md#reference-forms-twig-end)
- [form\_widget()](current__form__form_customization.md#reference-forms-twig-widget)
- [form\_errors()](current__form__form_customization.md#reference-forms-twig-errors)
- [form\_label()](current__form__form_customization.md#reference-forms-twig-label)
- [form\_help()](current__form__form_customization.md#reference-forms-twig-help)
- [form\_row()](current__form__form_customization.md#reference-forms-twig-row)
- [form\_rest()](current__form__form_customization.md#reference-forms-twig-rest)
- [field\_name()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_id()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_value()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_label()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_help()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_errors()](current__form__form_customization.md#reference-forms-twig-field-helpers)
- [field\_choices()](current__form__form_customization.md#reference-forms-twig-field-helpers)

### [fragment\_uri](#fragment-uri "Permalink to this headline")

```
1
```

```
{{ fragment_uri(controller, absolute = false, strict = true, sign = true) }}
```

`controller`
:   **type**: `ControllerReference`

`absolute` *(optional)*
:   **type**: `boolean` **default**: `false`

`strict` *(optional)*
:   **type**: `boolean` **default**: `true`

`sign` *(optional)*
:   **type**: `boolean` **default**: `true`

Generates the URI of [a fragment](current__templates.md#fragments-path-config).

### [impersonation\_exit\_path](#impersonation-exit-path "Permalink to this headline")

```
1
```

```
{{ impersonation_exit_path(exitTo = null) }}
```

`exitTo` *(optional)*
:   **type**: `string`

Generates a URL that you can visit to exit [user impersonation](current__security__impersonating_user.md).
After exiting impersonation, the user is redirected to the current URI. If you
prefer to redirect to a different URI, define its value in the `exitTo` argument.

If no user is being impersonated, the function returns an empty string.

### [impersonation\_exit\_url](#impersonation-exit-url "Permalink to this headline")

```
1
```

```
{{ impersonation_exit_url(exitTo = null) }}
```

`exitTo` *(optional)*
:   **type**: `string`

It's similar to the [impersonation\_exit\_path](current__reference__twig_reference.md#impersonation-exit-path) function, but it generates
absolute URLs instead of relative URLs.

### [impersonation\_path](#impersonation-path "Permalink to this headline")

```
1
```

```
{{ impersonation_path(identifier) }}
```

`identifier`
:   **type**: `string`

Generates a URL that you can visit to
[impersonate a user](current__security__impersonating_user.md), identified by the
`identifier` argument.

### [impersonation\_url](#impersonation-url "Permalink to this headline")

```
1
```

```
{{ impersonation_url(identifier) }}
```

`identifier`
:   **type**: `string`

It's similar to the [impersonation\_path](current__reference__twig_reference.md#impersonation-path) function, but it generates
absolute URLs instead of relative URLs.

### [importmap](#importmap "Permalink to this headline")

Outputs the `importmap` & a few other items when using
[the Asset component](current__frontend__asset_mapper.md).

### [is\_granted](#is-granted "Permalink to this headline")

```
1
```

```
{{ is_granted(role, object = null) }}
```

`role`
:   **type**: `string`

`object` *(optional)*
:   **type**: `object`

Returns `true` if the current user has the given role.

Optionally, an object can be passed to be used by the voter. More information
can be found in [Security](current__security.md#security-template).

### [is\_granted\_for\_user](#is-granted-for-user "Permalink to this headline")

```
1
```

```
{{ is_granted_for_user(user, attribute, subject = null) }}
```

`user`
:   **type**: `object`

`attribute`
:   **type**: `string`

`subject` *(optional)*
:   **type**: `object`

Returns `true` if the user is authorized for the specified attribute.

Optionally, an object can be passed to be used by the voter. More information
can be found in [Security](current__security.md#security-template).

### [link](#link "Permalink to this headline")

```
1
```

```
{{ link(uri, rel, attributes = {}) }}
```

`uri`
:   **type**: `string`

`rel`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Adds a `Link` HTTP header to the current response for the given link relation
type (`rel`). It can be used for any link implementing the PSR-13 standard.
Read more about [Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [logout\_path](#logout-path "Permalink to this headline")

```
1
```

```
{{ logout_path(key = null) }}
```

`key` *(optional)*
:   **type**: `string`

Generates a relative logout URL for the given firewall. If no key is provided,
the URL is generated for the current firewall the user is logged into.

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            logout:
                path: '/logout'
        othername:
            # ...
            logout:
                path: '/other/logout'
```

```
1
2
3
4
5
```

```
{{ logout_path(key = 'main') }}
{# output: /logout #}

{{ logout_path(key = 'othername') }}
{# output: /other/logout #}
```

### [logout\_url](#logout-url "Permalink to this headline")

```
1
```

```
{{ logout_url(key = null) }}
```

`key` *(optional)*
:   **type**: `string`

Equal to the [logout\_path](current__reference__twig_reference.md#logout-path) function, but it'll generate an absolute URL
instead of a relative one.

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
# config/packages/security.yaml
security:
    # ...

    firewalls:
        main:
            # ...
            logout:
                path: '/logout'
        othername:
            # ...
            logout:
                path: '/other/logout'
```

```
1
2
3
4
5
```

```
{{ logout_url(key = 'main') }}
{# output: http://example.org/logout #}

{{ logout_url(key = 'othername') }}
{# output: http://example.org/other/logout #}
```

### [path](#path "Permalink to this headline")

```
1
```

```
{{ path(name, parameters = {}, relative = false) }}
```

`name`
:   **type**: `string`

`parameters` *(optional)*
:   **type**: `array` **default**: `{}`

`relative` *(optional)*
:   **type**: `boolean` **default**: `false`

Returns the relative URL (without the scheme and host) for the given route.
If `relative` is enabled, it'll create a path relative to the current path.

```
1
2
3
4
5
6
7
```

```
{# consider that the app defines an 'app_blog' route with the path '/blog/{page}' #}

{{ path(name = 'app_blog', parameters = {page: 3}, relative = false) }}
{# output: /blog/3 #}

{{ path(name = 'app_blog', parameters = {page: 3}, relative = true) }}
{# output: blog/3 #}
```

See also

Read more about [Symfony routing](current__routing.md) and about
[creating links in Twig templates](current__templates.md#templates-link-to-pages).

### [preconnect](#preconnect "Permalink to this headline")

```
1
```

```
{{ preconnect(uri, attributes = {}) }}
```

`uri`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Resource hint that indicates an origin (e.g.
`https://www.google-analytics.com`) that will be used to fetch required
resources, initiating an early connection (DNS lookup, TCP handshake and
optional TLS negotiation) to mask the high latency costs of establishing a
connection. Read more about [Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [prefetch](#prefetch "Permalink to this headline")

```
1
```

```
{{ prefetch(uri, attributes = {}) }}
```

`uri`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Resource hint that identifies a resource that might be required by the next
navigation, and that the user agent should fetch so it can deliver a faster
response once the resource is requested in the future. Read more about
[Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [preload](#preload "Permalink to this headline")

```
1
```

```
{{ preload(uri, attributes = {}) }}
```

`uri`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Preloads a resource by adding a `Link` HTTP header with the `preload` link
relation, telling the browser to download it as soon as possible. Read more
about [Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [prerender](#prerender "Permalink to this headline")

```
1
```

```
{{ prerender(uri, attributes = {}) }}
```

`uri`
:   **type**: `string`

`attributes` *(optional)*
:   **type**: `array` **default**: `{}`

Resource hint that identifies a resource that might be required by the next
navigation, and that the user agent should fetch and execute so it can deliver
a faster response once the resource is requested later. This hint is
**deprecated** and superseded by the Speculation Rules API. Read more about
[Asset Preloading and Resource Hints with WebLink](current__web_link.md).

### [relative\_path](#relative-path "Permalink to this headline")

```
1
```

```
{{ relative_path(path) }}
```

`path`
:   **type**: `string`

Returns the relative path from the passed absolute URL. For example, assume
you're on the following page in your app:
`http://example.com/products/hover-board`.

```
1
2
3
4
5
```

```
{{ relative_path('http://example.com/human.txt') }}
{# ../human.txt #}

{{ relative_path('http://example.com/products/products_icon.png') }}
{# products_icon.png #}
```

### [render](#render "Permalink to this headline")

```
1
```

```
{{ render(uri, options = {}) }}
```

`uri`
:   **type**: `string` | `ControllerReference`

`options` *(optional)*
:   **type**: `array` **default**: `{}`

Makes a request to the given internal URI or controller and returns the result.
The render strategy can be specified in the `strategy` key of the options.
It's commonly used to [embed controllers in templates](current__templates.md#templates-embed-controllers).

### [render\_esi](#render-esi "Permalink to this headline")

```
1
```

```
{{ render_esi(uri, options = {}) }}
```

`uri`
:   **type**: `string` | `ControllerReference`

`options` *(optional)*
:   **type**: `array` **default**: `{}`

It's similar to the [render](current__reference__twig_reference.md#render) function and defines the same arguments. However,
it generates an ESI tag when [ESI support](current__http_cache__esi.md) is enabled or
falls back to the behavior of [render](current__reference__twig_reference.md#render) otherwise.

Tip

The `render_esi()` function is an example of the shortcut functions
of `render`. It automatically sets the strategy based on what's given
in the function name, e.g. `render_hinclude()` will use the hinclude.js
strategy. This works for all `render_*()` functions.

### [render\_ssi](#render-ssi "Permalink to this headline")

```
1
```

```
{{ render_ssi(uri, options = []) }}
```

`uri`
:   **type**: `string` | `ControllerReference`

`options` *(optional)*
:   **type**: `array` **default**: `[]`

It's similar to the [render](current__reference__twig_reference.md#render) function and defines the same arguments. However,
it generates an SSI tag when [SSI support](current__http_cache__ssi.md) is enabled or
falls back to the behavior of [render](current__reference__twig_reference.md#render) otherwise.

### [t](#t "Permalink to this headline")

```
1
```

```
{{ t(message, parameters = {}, domain = 'messages')|trans }}
```

`message`
:   **type**: `string`

`parameters` *(optional)*
:   **type**: `array` **default**: `{}`

`domain` *(optional)*
:   **type**: `string` **default**: `messages`

Creates a `Translatable` object that can be passed to the
[trans filter](current__reference__twig_reference.md#reference-twig-filter-trans).

YAML

XML

PHP

```
1
2
```

```
# translations/blog.en.yaml
message: Hello %name%
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
<!-- translations/blog.en.xlf -->
<?xml version="1.0" encoding="UTF-8" ?>
<xliff version="1.2" xmlns="urn:oasis:names:tc:xliff:document:1.2">
    <file source-language="en" datatype="plaintext" original="file.ext">
        <body>
            <trans-unit id="message">
                <source>message</source>
                <target>Hello %name%</target>
            </trans-unit>
        </body>
    </file>
</xliff>
```

```
1
2
3
4
```

```
// translations/blog.en.php
return [
    'message' => "Hello %name%",
];
```

Using the filter will be rendered as:

```
1
2
```

```
{{ t(message = 'message', parameters = {'%name%': 'John'}, domain = 'blog')|trans }}
{# output: Hello John #}
```

### [url](#url "Permalink to this headline")

```
1
```

```
{{ url(name, parameters = {}, schemeRelative = false) }}
```

`name`
:   **type**: `string`

`parameters` *(optional)*
:   **type**: `array` **default**: `{}`

`schemeRelative` *(optional)*
:   **type**: `boolean` **default**: `false`

Returns the absolute URL (with scheme and host) for the given route. If
`schemeRelative` is enabled, it'll create a scheme-relative URL.

```
1
2
3
4
5
6
7
```

```
{# consider that the app defines an 'app_blog' route with the path '/blog/{page}' #}

{{ url(name = 'app_blog', parameters = {page: 3}, schemeRelative = false) }}
{# output: http://example.org/blog/3 #}

{{ url(name = 'app_blog', parameters = {page: 3}, schemeRelative = true) }}
{# output: //example.org/blog/3 #}
```

See also

Read more about [Symfony routing](current__routing.md) and about
[creating links in Twig templates](current__templates.md#templates-link-to-pages).

### [workflow\_can](#workflow-can "Permalink to this headline")

```
1
```

```
{{ workflow_can(subject, transitionName, name = null) }}
```

`subject`
:   **type**: `object`

`transitionName`
:   **type**: `string`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns `true` if the given object can apply the given transition in its
current state. Use it to only display the actions that are actually available
to the user:

```
1
2
3
```

```
{% if workflow_can(post, 'publish') %}
    <a href="...">Publish</a>
{% endif %}
```

The `subject` argument is the object managed by the workflow (e.g. the blog
post) and `transitionName` is the name of one of the transitions defined in
the workflow configuration.

The `name` argument is the name of the workflow to use. It's only needed when
the object is associated with more than one workflow. All the `workflow_*()`
functions accept this same optional argument as their last parameter:

```
1
2
3
4
5
```

```
{# the object is associated with a single workflow, so the name is optional #}
{{ workflow_can(post, 'publish') }}

{# the object is associated with multiple workflows, so the name is required #}
{{ workflow_can(post, 'publish', 'blog_publishing') }}
```

See also

Read more about [Symfony Workflows](current__workflow.md).

### [workflow\_has\_marked\_place](#workflow-has-marked-place "Permalink to this headline")

```
1
```

```
{{ workflow_has_marked_place(subject, placeName, name = null) }}
```

`subject`
:   **type**: `object`

`placeName`
:   **type**: `string`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns `true` if the given object is currently in the given place. When using
workflows (instead of state machines) an object can be in several places at the
same time, so this only checks if the given place is one of them:

```
1
2
3
```

```
{% if workflow_has_marked_place(post, 'reviewed') %}
    <p>This post is ready to be published.</p>
{% endif %}
```

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

### [workflow\_marked\_places](#workflow-marked-places "Permalink to this headline")

```
1
```

```
{{ workflow_marked_places(subject, placesNameOnly = true, name = null) }}
```

`subject`
:   **type**: `object`

`placesNameOnly` *(optional)*
:   **type**: `boolean` **default**: `true`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns all the places where the given object currently is (its *marking*). By
default it returns an array of place names; set `placesNameOnly` to `false`
to get the entire marking, which is an array indexed by place name:

```
1
2
3
```

```
{% for place in workflow_marked_places(post) %}
    <span class="label">{{ place }}</span>
{% endfor %}
```

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

### [workflow\_metadata](#workflow-metadata "Permalink to this headline")

```
1
```

```
{{ workflow_metadata(subject, key, metadataSubject = null, name = null) }}
```

`subject`
:   **type**: `object`

`key`
:   **type**: `string`

`metadataSubject` *(optional)*
:   **type**: `string` `null` **default**: `null`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns the value of the `key` metadata defined in the workflow configuration.
Workflows, places and transitions can all define their own metadata, so use the
`metadataSubject` argument to select which one to read: pass a place name to
read place metadata, a [Transition](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Workflow/Transition.php "Symfony\Component\Workflow\Transition") object
to read transition metadata and omit it to read the metadata of the workflow
itself:

```
1
2
3
4
5
6
7
8
```

```
{# metadata of the workflow #}
{{ workflow_metadata(post, 'title') }}

{# metadata of the 'draft' place #}
{{ workflow_metadata(post, 'max_num_of_words', 'draft') }}

{# metadata of the 'to_review' transition #}
{{ workflow_metadata(post, 'priority', workflow_transition(post, 'to_review')) }}
```

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

See also

Read more about [storing metadata in workflows](current__workflow.md#workflow_storing-metadata).

### [workflow\_transition](#workflow-transition "Permalink to this headline")

```
1
```

```
{{ workflow_transition(subject, transitionName, name = null) }}
```

`subject`
:   **type**: `object`

`transitionName`
:   **type**: `string`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns the [Transition](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Workflow/Transition.php "Symfony\Component\Workflow\Transition") object matching the
given name, or `null` if that transition is not enabled for the object in its
current state. It's mostly used to pass a transition to the [workflow\_metadata](current__reference__twig_reference.md#workflow-metadata)
function.

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

### [workflow\_transition\_blockers](#workflow-transition-blockers "Permalink to this headline")

```
1
```

```
{{ workflow_transition_blockers(subject, transitionName, name = null) }}
```

`subject`
:   **type**: `object`

`transitionName`
:   **type**: `string`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns a [TransitionBlockerList](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Workflow/TransitionBlockerList.php "Symfony\Component\Workflow\TransitionBlockerList") object with
the reasons why the given object can't apply the given transition. These reasons
are added by the [guard event listeners](current__workflow.md#workflow-usage-guard-events) of the
workflow, so use them to explain to the user why some action is not available:

```
1
2
3
```

```
{% for blocker in workflow_transition_blockers(post, 'publish') %}
    <span class="error">{{ blocker.message }}</span>
{% endfor %}
```

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

### [workflow\_transitions](#workflow-transitions "Permalink to this headline")

```
1
```

```
{{ workflow_transitions(subject, name = null) }}
```

`subject`
:   **type**: `object`

`name` *(optional)*
:   **type**: `string` | `null` **default**: `null`

Returns an array of [Transition](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Workflow/Transition.php "Symfony\Component\Workflow\Transition") objects with
all the transitions that the given object can apply in its current state. Use it
to render all the available actions at once instead of checking them one by one
with [workflow\_can](current__reference__twig_reference.md#workflow-can):

```
1
2
3
4
5
```

```
{% for transition in workflow_transitions(post) %}
    <a href="...">{{ transition.name }}</a>
{% else %}
    No actions available.
{% endfor %}
```

See [workflow\_can](current__reference__twig_reference.md#workflow-can) for the details of the optional `name` argument.

## [Filters](#filters "Permalink to this headline")

### [abbr\_class](#abbr-class "Permalink to this headline")

```
1
```

```
{{ class|abbr_class }}
```

`class`
:   **type**: `string`

Generates an `<abbr>` element with the short name of a PHP class (the
FQCN will be shown in a tooltip when a user hovers over the element).

```
1
```

```
{{ 'App\\Entity\\Product'|abbr_class }}
```

The above example will be rendered as:

```
1
```

```
<abbr title="App\Entity\Product">Product</abbr>
```

### [abbr\_method](#abbr-method "Permalink to this headline")

```
1
```

```
{{ method|abbr_method }}
```

`method`
:   **type**: `string`

Generates an `<abbr>` element using the `FQCN::method()` syntax. If
`method` is `Closure`, `Closure` will be used instead and if `method`
doesn't have a class name, it's shown as a function (`method()`).

```
1
```

```
{{ 'App\\Controller\\ProductController::list'|abbr_method }}
```

The above example will be rendered as:

```
1
```

```
<abbr title="App\Controller\ProductController">ProductController</abbr>::list()
```

### [emojify](#emojify "Permalink to this headline")

```
1
```

```
{{ text|emojify(catalog = null) }}
```

`text`
:   **type**: `string`

`catalog` *(optional)*
:   **type**: `string` | `null`

    The emoji set used to generate the textual representation (`slack`,
    `github`, `gitlab`, etc.)

It transforms the textual representation of an emoji (e.g. `:wave:`) into the
actual emoji (👋):

```
1
2
3
```

```
{{ ':+1:'|emojify }}                 {# renders: 👍 #}
{{ ':+1:'|emojify('github') }}       {# renders: 👍 #}
{{ ':thumbsup:'|emojify('gitlab') }} {# renders: 👍 #}
```

### [file\_excerpt](#file-excerpt "Permalink to this headline")

```
1
```

```
{{ file|file_excerpt(line, srcContext = 3) }}
```

`file`
:   **type**: `string`

`line`
:   **type**: `integer`

`srcContext` *(optional)*
:   **type**: `integer`

Generates an excerpt of a code file around the given `line` number. The
`srcContext` argument defines the total number of lines to display around the
given line number (use `-1` to display the whole file).

Consider the following as the content of `file.txt`:

```
1
2
3
4
5
```

```
a
b
c
d
e
```

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
{{ '/path/to/file.txt'|file_excerpt(line = 4, srcContext = 1) }}
{# output: #}
<ol start="3">
    <li><a class="anchor" id="line3"></a><code>c</code></li>
    <li class="selected"><a class="anchor" id="line4"></a><code>d</code></li>
    <li><a class="anchor" id="line5"></a><code>e</code></li>
</ol>

{{ '/path/to/file.txt'|file_excerpt(line = 1, srcContext = 0) }}
{# output: #}
<ol start="1">
    <li class="selected"><a class="anchor" id="line1"></a><code>a</code></li>
</ol>
```

### [file\_link](#file-link "Permalink to this headline")

```
1
```

```
{{ file|file_link(line) }}
```

`file`
:   **type**: `string`

`line`
:   **type**: `integer`

Generates a link to the provided file and line number using
a preconfigured scheme.

```
1
2
```

```
{{ 'path/to/file/file.txt'|file_link(line = 3) }}
{# output: file://path/to/file/file.txt#L3 #}
```

### [file\_relative](#file-relative "Permalink to this headline")

```
1
```

```
{{ file|file_relative }}
```

`file`
:   **type**: `string`

It transforms the given absolute file path into a new file path relative to
project's root directory:

```
1
2
```

```
{{ '/var/www/blog/templates/admin/index.html.twig'|file_relative }}
{# if project root dir is '/var/www/blog/', it returns 'templates/admin/index.html.twig' #}
```

If the given file path is out of the project directory, a `null` value
will be returned.

### [format\_args](#format-args "Permalink to this headline")

```
1
```

```
{{ args|format_args }}
```

`args`
:   **type**: `array`

Generates a string with the arguments and their types (within `<em>` elements).

### [format\_args\_as\_text](#format-args-as-text "Permalink to this headline")

```
1
```

```
{{ args|format_args_as_text }}
```

`args`
:   **type**: `array`

Equal to the [format\_args](current__reference__twig_reference.md#format-args) filter, but without using HTML tags.

### [format\_file](#format-file "Permalink to this headline")

```
1
```

```
{{ file|format_file(line, text = null) }}
```

`file`
:   **type**: `string`

`line`
:   **type**: `integer`

`text` *(optional)*
:   **type**: `string` **default**: `null`

Generates the file path inside an `<a>` element. If the path is inside
the kernel root directory, the kernel root directory path is replaced by
`kernel.project_dir` (showing the full path in a tooltip on hover).

```
1
2
3
4
5
6
7
8
9
10
11
```

```
{{ '/path/to/file.txt'|format_file(line = 1, text = "my_text") }}
{# output: #}
<a href="/path/to/file.txt#L1"
    title="Click to open this file" class="file_link">my_text at line 1
</a>

{{ "/path/to/file.txt"|format_file(line = 3) }}
{# output: #}
<a href="/path/to/file.txt&amp;line=3"
    title="Click to open this file" class="file_link">/path/to/file.txt at line 3
</a>
```

Tip

If you set the [framework.ide](current__reference__configuration__framework.md#reference-framework-ide) option, the
generated links will change to open the file in that IDE/editor. For example,
when using PhpStorm, the `<a href="/path/to/file.txt&amp;line=3"` link will
become `<a href="phpstorm://open?file=/path/to/file.txt&amp;line=3"`.

### [format\_file\_from\_text](#format-file-from-text "Permalink to this headline")

```
1
```

```
{{ text|format_file_from_text }}
```

`text`
:   **type**: `string`

Uses [format\_file](current__reference__twig_reference.md#format-file) to improve the output of default PHP errors.

### [humanize](#humanize "Permalink to this headline")

```
1
```

```
{{ text|humanize }}
```

`text`
:   **type**: `string`

Transforms the given string into a human readable string (by replacing underscores
with spaces, capitalizing the string, etc.) It's useful e.g. when displaying
the names of PHP properties/variables to end users:

```
1
2
3
4
5
6
```

```
{{ 'dateOfBirth'|humanize }}    {# renders: Date of birth #}
{{ 'DateOfBirth'|humanize }}    {# renders: Date of birth #}
{{ 'date-of-birth'|humanize }}  {# renders: Date-of-birth #}
{{ 'date_of_birth'|humanize }}  {# renders: Date of birth #}
{{ 'date of birth'|humanize }}  {# renders: Date of birth #}
{{ 'Date Of Birth'|humanize }}  {# renders: Date of birth #}
```

### [trans](#trans "Permalink to this headline")

```
1
```

```
{{ message|trans(arguments = {}, domain = null, locale = null) }}
```

`message`
:   **type**: `string` | `Translatable`

`arguments` *(optional)*
:   **type**: `array` **default**: `{}`

`domain` *(optional)*
:   **type**: `string` **default**: `null`

`locale` *(optional)*
:   **type**: `string` **default**: `null`

Translates the text into the current language. More information in
[Translation Filters](current__translation.md#translation-filters).

YAML

XML

PHP

```
1
2
```

```
# translations/messages.en.yaml
message: Hello %name%
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
<!-- translations/messages.en.xlf -->
<?xml version="1.0" encoding="UTF-8" ?>
<xliff version="1.2" xmlns="urn:oasis:names:tc:xliff:document:1.2">
    <file source-language="en" datatype="plaintext" original="file.ext">
        <body>
            <trans-unit id="message">
                <source>message</source>
                <target>Hello %name%</target>
            </trans-unit>
        </body>
    </file>
</xliff>
```

```
1
2
3
4
```

```
// translations/messages.en.php
return [
    'message' => "Hello %name%",
];
```

Using the filter will be rendered as:

```
1
2
```

```
{{ 'message'|trans(arguments = {'%name%': 'John'}, domain = 'messages', locale = 'en') }}
{# output: Hello John #}
```

### [sanitize\_html](#sanitize-html "Permalink to this headline")

```
1
```

```
{{ body|sanitize_html(sanitizer = "default") }}
```

`body`
:   **type**: `string`

`sanitizer` *(optional)*
:   **type**: `string` **default**: `"default"`

Sanitizes the text using the HTML Sanitizer component. More information in
[HTML Sanitizer](current__html_sanitizer.md#html-sanitizer-twig).

### [serialize](#serialize "Permalink to this headline")

```
1
```

```
{{ object|serialize(format = 'json', context = {}) }}
```

`object`
:   **type**: `mixed`

`format` *(optional)*
:   **type**: `string`

`context` *(optional)*
:   **type**: `array`

Accepts any data that can be serialized by the [Serializer component](current__serializer.md)
and returns a serialized string in the specified `format`.

For example:

```
1
2
3
4
```

```
$object = new \stdClass();
$object->foo = 'bar';
$object->content = [];
$object->createdAt = new \DateTime('2024-11-30');
```

```
1
2
3
4
5
```

```
{{ object|serialize(format = 'json', context = {
    'datetime_format': 'D, Y-m-d',
    'empty_array_as_object': true,
}) }}
{# output: {"foo":"bar","content":{},"createdAt":"Sat, 2024-11-30"} #}
```

### [yaml\_dump](#yaml-dump "Permalink to this headline")

```
1
```

```
{{ value|yaml_dump(inline = 0, dumpObjects = false) }}
```

`value`
:   **type**: `mixed`

`inline` *(optional)*
:   **type**: `integer` **default**: `0`

`dumpObjects` *(optional)*
:   **type**: `boolean` **default**: `false`

Does the same as [yaml\_encode()](current__reference__yaml_encode.md), but includes the type in
the output.

The `inline` argument is the level where the generated output switches to inline YAML:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
```

```
{% set array = {
    'a': {
        'c': 'e'
    },
    'b': {
        'd': 'f'
    }
} %}

{{ array|yaml_dump(inline = 0) }}
{# output:
   %array% { a: { c: e }, b: { d: f } } #}

{{ array|yaml_dump(inline = 1) }}
{# output:
   %array% a: { c: e }
   b: { d: f } #}
```

The `dumpObjects` argument enables the dumping of PHP objects:

```
1
2
3
4
```

```
// ...
$object = new \stdClass();
$object->foo = 'bar';
// ...
```

```
1
2
3
4
5
```

```
{{ object|yaml_dump(dumpObjects = false) }}
{# output: %object% null #}

{{ object|yaml_dump(dumpObjects = true) }}
{# output: %object% !php/object 'O:8:"stdClass":1:{s:3:"foo";s:3:"bar";}' #}
```

### [yaml\_encode](#yaml-encode "Permalink to this headline")

```
1
```

```
{{ input|yaml_encode(inline = 0, dumpObjects = false) }}
```

`input`
:   **type**: `mixed`

`inline` *(optional)*
:   **type**: `integer` **default**: `0`

`dumpObjects` *(optional)*
:   **type**: `boolean` **default**: `false`

Transforms the input into YAML syntax.

The `inline` argument is the level where the generated output switches to inline YAML:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
```

```
{% set array = {
    'a': {
        'c': 'e'
    },
    'b': {
        'd': 'f'
    }
} %}

{{ array|yaml_encode(inline = 0) }}
{# output:
   { a: { c: e }, b: { d: f } } #}

{{ array|yaml_encode(inline = 1) }}
{# output:
   a: { c: e }
   b: { d: f } #}
```

The `dumpObjects` argument enables the dumping of PHP objects:

```
1
2
3
4
```

```
// ...
$object = new \stdClass();
$object->foo = 'bar';
// ...
```

```
1
2
3
4
5
```

```
{{ object|yaml_encode(dumpObjects = false) }}
{# output: null #}

{{ object|yaml_encode(dumpObjects = true) }}
{# output: !php/object 'O:8:"stdClass":1:{s:5:"foo";s:7:"bar";}' #}
```

See [The Yaml Component](current__components__yaml.md#components-yaml-dump) for more information.

## [Tags](#tags "Permalink to this headline")

### [dump](#dump-1 "Permalink to this headline")

```
1
```

```
{% dump variable1, variable2, ... %}
```

Dumps the contents of the given variables using the
[VarDumper component](current__components__var_dumper.md). Unlike the
[dump() function](current__reference__twig_reference.md#reference-twig-function-dump), which displays the
contents inside the web page, this tag sends them to the
[web debug toolbar](current__profiler.md), so the web page contents are not modified.

To avoid leaking sensitive information, this tag is only available in the
`dev` and `test` [configuration environments](current__configuration.md#configuration-environments).

See also

Read more about the [dump Twig utilities](current__templates.md#twig-dump-utilities).

### [form\_theme](#form-theme "Permalink to this headline")

```
1
```

```
{% form_theme form resources %}
```

`form`
:   **type**: `FormView`

`resources`
:   **type**: `array` | `string`

Sets the resources to override the form theme for the given form view instance.
You can use `_self` as resources to set it to the current resource. More
information in [How to Customize Form Rendering](current__form__form_customization.md).

### [stopwatch](#stopwatch "Permalink to this headline")

```
1
```

```
{% stopwatch 'event_name' %}...{% endstopwatch %}
```

This measures the time and memory used to execute some code in the template and
displays it in the Symfony profiler. See [how to profile Symfony applications](current__performance.md#profiling-applications).

### [trans](#trans-1 "Permalink to this headline")

```
1
```

```
{% trans with vars from domain into locale %}{% endtrans %}
```

`vars` *(optional)*
:   **type**: `array` **default**: `{}`

`domain` *(optional)*
:   **type**: `string` **default**: `string`

`locale` *(optional)*
:   **type**: `string` **default**: `string`

Renders the translation of the content. More information in [Translations](current__translation.md#translation-tags).

### [trans\_default\_domain](#trans-default-domain "Permalink to this headline")

```
1
```

```
{% trans_default_domain domain %}
```

`domain`
:   **type**: `string`

This will set the default domain in the current template.

## [Tests](#tests "Permalink to this headline")

The following tests related to Symfony Forms are available. They are explained
in the article about [customizing form rendering](current__form__form_customization.md):

- [selectedchoice()](current__form__form_customization.md#form-twig-selectedchoice)
- [rootform()](current__form__form_customization.md#form-twig-rootform)

## [Global Variables](#global-variables "Permalink to this headline")

### [app](#app "Permalink to this headline")

The `app` variable is injected automatically by Symfony in all templates and
provides access to lots of useful application information. Read more about the
[Twig global app variable](current__templates.md#twig-app-variable).

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

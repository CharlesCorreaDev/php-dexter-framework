# Routing | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/routing

---

# Routing

- ### On this Page

  - [Dynamic Routes](docs_5x__system__routing.md#dynamic-routes)
  - [Advanced Routing with URL Rules](docs_5x__system__routing.md#advanced-routing-with-url-rules)
  - [Error Templates](docs_5x__system__routing.md#error-templates)
  - [Headless](docs_5x__system__routing.md#headless)

Routing is the process by which Craft directs incoming requests to specific content or functionality.

Understanding Craft’s high-level approach to routing can help you troubleshoot template loading, plugin action URLs, dynamic routes, and unexpected 404 errors. While this list is an abstraction, it represents the order of Craft’s internal checks:

0. **Should Craft handle this request in the first place?**

   It’s important to keep in mind that Craft doesn’t get involved for *every* request that touches your server—just those that go through your `index.php`.

   The `.htaccess` file that [comes with Craft  (opens new window)](https://github.com/craftcms/craft/blob/5.x/web/.htaccess) will silently send all requests that don’t match a directory or file on your web server via `index.php`. If you point your browser directly at a file that *does* exist (such as an image, CSS, or JavaScript file), your web server will serve that file directly, without initializing Craft or PHP.
1. **Is it an action request?**

   [Action requests](docs_5x__reference__controller-actions.md) either have a path that begins with `/actions/` (or whatever your [actionTrigger](docs_5x__reference__config__general.md#actiontrigger) config setting is set to), or an `action` parameter in the POST body or query string. Every request Craft handles is ultimately routed to a controller action, but explicit action requests take precedence and guarantee that essential features are always accessible. If you look at your browser’s *Network* tab while using the control panel, you’ll see a lot of action requests, like `/index.php?action=users/session-info`.
2. **Is it a control panel request?**

   Any request to a path beginning with the [cpTrigger](docs_5x__reference__config__general.md#cptrigger) setting (`admin`, by default) uses the [control panel](docs_5x__system__control-panel.md) request context. This means that *only* control panel-specific routes are considered, and authentication is enforced. Craft does not look for element URIs, evaluate site routes (whether [defined via the control panel](#dynamic-routes) or [`routes.php`](#advanced-routing-with-url-rules)), or check for path matches in your `templates/` directory.

   Setting `cpTrigger` to `null` or `''` (an empty string) means that *all* requests that reach this stage will be treated as control panel requests. This is usually only appropriate for [headless](#headless) sites, and comes with some drawbacks.
3. **Is it an element request?**

   If the URI matches an [element](docs_5x__system__elements.md)’s URI, Craft lets the element decide how to route the request. For example, if an [entry](docs_5x__reference__element-types__entries.md)’s URI is requested, Craft will render the template specified in its section’s settings, automatically injecting an [`entry` variable](docs_5x__reference__twig__global-variables.md#other-elements). Only elements that are enabled and [live](docs_5x__system__drafts-revisions.md#statuses-visibility) are eligible for matching in this way.

   Whenever an element is saved, its URI is rendered and stored in the `elements_sites` database table.

   Modules and plugins can re-map an element’s route to a custom controller using the [EVENT\_SET\_ROUTE  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-set-route) event to gather and organize additional data, or output it as a different content-type.
4. **Does the URI match a route or rule?**

   If the URI matches any [dynamic routes](#dynamic-routes) or [URI rules](#advanced-routing-with-url-rules), the template or controller action specified by it is loaded.
5. **Does the URI match a template?**

   Craft will check if the URI is a valid [template path](docs_5x__development__templates.md#template-paths). If it is, Craft renders the matched template.

   If any of the URI segments begin with an underscore (e.g. `blog/_archive/index`), Craft skips this step. Similarly, [hidden templates](docs_5x__development__templates.md#hidden-templates) are not matched.
6. **404**

   If none of the above criteria are met, Craft will throw a [NotFoundHttpException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-notfoundhttpexception).
7. **Redirects**  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Redirection rules was first available in version 5.6.0 of Craft.")

   When a 404 exception is thrown, Craft does one final check for a matching [redirect](#redirection) rule. If one is found, the exception is dropped and a 300-level response is sent.

If an exception is thrown at any point during a request, Craft will display an error page instead of the expected content.

If [Dev Mode](docs_5x__reference__config__general.md#devmode) is enabled, an error report for the exception will be shown. Otherwise, an error will be returned using either your [custom error template](#error-templates) or Craft’s own default.

## [#](#dynamic-routes)Dynamic Routes

In some cases, you may want a URL to load a template, but its location in your `templates/` folder doesn’t agree with the URI (therefore bypassing step #4), or the URI itself is “dynamic” or parameterized.

A good example of this is an “archive” browseable by year, controlled by a path segment in the URL (e.g. `blog/2025`).
Remembering to create an entry, static route, or template each year would be impractical—instead, you can define a single route with placeholders for dynamic segments:

![Creating a New Route](/docs/assets/img/routing-creating-new-route.c98a0bd3.png)

### [#](#creating-routes)Creating Routes

To create a new route, go to

1. Settings→
2. Routes

and choose **New route**. A modal window will appear where you can define the route settings:

- What should the URI look like?
- Which template should get loaded?
- Which sites does the route apply to?

The first setting can contain [tokens](#available-tokens), which represent a range of possible matches, rather than a specific string.
The `year` token, for example, represents four consecutive digits.
Tokens can be anywhere in a route, and do not need exclusive control over a path segment (i.e. `blog/daily-summary/{year}-{month}-{day}`).
When you click on a token, Craft inserts it into the URI setting wherever the cursor is.

If you want to match URIs that look like `blog/2025`, type `blog/` into the URI field, then insert the `year` token.

Route URIs should *not* begin with a slash (`/`), and cannot contain query strings (`?`) or fragments (`#`).

After defining your URI pattern and entering a template path, press **Save**.
The modal will close, revealing your new route on the page.

When you point your browser to `https://my-project.tld/blog/2025`, it will match your new route, and Craft will render the specified template with a variable named `year`, corresponding to the token:

```
{# Fetch posts in the specified `year`: #}
{% set posts = craft.entries()
  .section('posts')
  .postDate([
    'and',
    ">= #{year}",
    "< #{year + 1}",
  ])
  .all() %}

{% for post in posts %}
  <article>
    <h2>{{ post.title }}</h2>
    {{ post.description | md }}
    <a href="{{ post.url }}">{{ 'Read More' | t }}</a>
  </article>
{% endfor %}
```

Routes automatically support [pagination](docs_5x__reference__twig__tags.md#paginate), so this one route covers other URIs like `/blog/archive/2018/page/2` (assuming your [pageTrigger](docs_5x__reference__config__general.md#pagetrigger) was `page/`). If you wanted to break the archive into smaller logical chunks, you could use additional [tokens](#available-tokens) to collect results by month—or even by day!

The order of your routes is important!
New routes are appended to this list, but can be dragged-and-dropped

Drag-and-drop handle icon

into the desired order.

### [#](#available-tokens)Available Tokens

The following tokens are available in the URI setting:

- `*` – Any string of characters, except for a forward slash (`/`)
- `day` – Day of a month (`1`-`31` or `01`-`31`)
- `month` – Numeric representation of a month (1-12 or 01-12)
- `number` – Any positive integer
- `page` – Any positive integer
- `uid` – A v4 compatible UUID (universally unique ID)
- `slug` – Any string of characters, except for a forward slash (`/`)
- `tag` – Any string of characters, except for a forward slash (`/`)
- `year` – Four consecutive digits

If you define a route using a wildcard token (`*`) in the control panel, the captured value will automatically be available as a named parameter called `any`.

The template for `my-project.tld/foo/some-slug` could then use `{{ any }}`:

```
It seems you’re looking for `{{ any }}`.
{# output: It seems you’re looking for `some-slug`. #}
```

## [#](#advanced-routing-with-url-rules)Advanced Routing with URL Rules

In addition to routes defined via the control panel, you can define [URL rules  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/runtime-routing#url-rules) in `config/routes.php` that map to templates or [custom controllers](docs_5x__extend__controllers.md):

```
return [
  // Route blog/archive/YYYY to a controller action
  'blog/archive/<year:\d{4}>' => 'controller/action/path',

  // Route blog/archive/YYYY to a template
  'blog/archive/<year:\d{4}>' => ['template' => 'blog/_archive'],
];
```

If your Craft installation has multiple sites, you can create site-specific URL rules by nesting them under a key corresponding to the site’s handle.
Craft will take care of determining the site’s base URL via this handle, so you don’t need to declare it as part of the route pattern itself:

```
return [
  'siteHandle' => [
    'blog/archive/<year:\d{4}>' => 'controller/action/path',
  ],
];
```

A subset of the [tokens](#available-tokens) above can be used in place of a regular expression in any [named parameter  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/runtime-routing#named-parameters):

- `{handle}` – matches a field handle, volume handle, etc.
- `{slug}` – matches an entry slug, category slug, etc.
- `{uid}` – matches a v4 UUID.

```
return [
  // Be aware that URIs matching an existing element route will be picked up by step #2, above!
  'blog/<entrySlug:{slug}>' => 'controller/action/path',
];
```

### [#](#accessing-named-parameters-in-your-templates)Accessing Named Parameters in your Templates

URL rules that route to a template (`['template' => 'my/template/path']`) will pass any named parameters to the template as variables—just like CP-defined routes.
For example, this rule…

```
'blog/archive/<year:\d{4}>' => ['template' => 'blog/_archive'],
```

…will load `blog/_archive.twig` with a `year` variable set to `2022` when requesting `https://my-project.tld/blog/archive/2022`.

```
<h1>Blog Entries from {{ year }}</h1>
```

### [#](#accessing-named-parameters-in-your-controllers)Accessing Named Parameters in your Controllers

Named route parameters are automatically passed to matching controller action arguments.

For example, this URL rule…

```
'comment/<postId:\d+>' => 'my-module/blog/comment',
```

…would match the numeric ID in the route to the `$id` argument of this [custom controller](docs_5x__extend__controllers.md) action:

```
namespace modules\controllers;

use craft\elements\Entry;
use craft\web\Controller;

class BlogController extends Controller
{
  /**
   * Create a comment for the specified blog post ID.
   * 
   * @param int $postId Blog Post ID defined by route parameters.
   */
  public function actionComment(int $postId)
  {
    $this->requirePostRequest();

    // Use the ID to look up the entry...
    $entry = Entry::find()
      ->section('posts')
      ->id($postId)
      ->one();

    // ...and grab the comment content from the request:
    $comment = Craft::$app->getRequest()->getBodyParam('comment');

    // ...
  }
}
```

This rule only serves as an alias to the controller action, which will always be directly accessible via an [action request](docs_5x__development__forms.md)—in this case by using the [`actionInput()`](docs_5x__reference__twig__functions.md#actioninput) function:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('my-module/blog/comment') }}
  {{ hiddenInput('postId', entry.id) }}

  <textarea name="comment"></textarea>

  <button>Post Comment</button>
</form>
```

## [#](#error-templates)Error Templates

You can provide your own error templates for Craft to use when returning errors on the front end.

When an error is encountered, Craft looks in your `templates/` directory for a template matching these criteria (in order):

1. …a template matching the error’s status code, like `404.twig`;
2. …(for 503 errors) a template named `offline.twig`;
3. …a generic template named `error.twig`;

You can tell Craft to look for the error template in a nested template directory, using the [errorTemplatePrefix](docs_5x__reference__config__general.md#errortemplateprefix) config setting. Using `_errors/` would mean that the above rules check `_errors/404.twig`, `_errors/offline.twig`, and `_errors/error.twig`.

If Craft finds a matching error template, it will render it with the following variables:

- `message` – error message
- `code` – exception code
- `file` – file that threw the exception
- `line` – line in which the exception occurred
- `statusCode` – error’s HTTP status code

Custom error templates are only used when [Dev Mode](docs_5x__reference__config__general.md#devmode) is **disabled**. When it’s enabled, an exception view will be rendered instead. Note that `devMode` may also be set via the `CRAFT_DEV_MODE` [environment override](docs_5x__configure.md#environment-overrides)!

Logged-in control panel users can enable **Show full exception views when Dev Mode is disabled** in their [preferences](docs_5x__system__user-management.md).

If Craft *can’t* find an appropriate template, it renders the built-in front-end error template. This view can be customized via CSS using the [systemTemplateCss](docs_5x__reference__config__general.md#systemtemplatecss) config setting.
Full reference for the CSS variables used on this page are [available in the source  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/web/assets/theme/dist/fe.css).  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Customizable front-end error templates was first available in version 5.6.0 of Craft.")

### [#](#redirection)Redirection [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Redirects config file was first available in version 5.6.0 of Craft.")

Craft also supports a `redirects.php` config file that can contain any number of rules, structured similarly to the [advanced routing](#advanced-routing-with-url-rules) examples, above. Redirects are only evaluated after Craft decides it can’t serve the request and begins handling the HTTP exception.

Each item in the returned array is a “rule,” and rules are evaluated from top to bottom. The simplest rule is a case-insensitive mapping from one path to another:

```
return [
    'old/path' => 'new/path',
];
```

This key-value syntax is equivalent to explicitly declaring a `from` and `to` key in the rule:

```
return [
    [
        'from' => 'old/path',
        'to' => 'new/path',
    ],
];
```

When using an array, you may also include `caseSensitive` and `statusCode` keys for more control over the rule’s behavior:

```
return [
    [
        'from' => 'old/path',
        'to' => 'new/path',
        'caseSensitive' => true,
        // Defaults to 302 (“Temporary”)
        'statusCode' => 301, // “Permanent”
    ],
];
```

To send a user to the homepage, use an empty string (`''`) for the `to` value.

Rules can contain [parameters](#advanced-routing-with-url-rules), as well:

```
return [
  'posts/<year:\d{4}>/<slug:{slug}>' => 'news/<year>-<slug>',
];
```

Named parameters can be used in the `to` value by wrapping them in angle brackets, like `<year>` and `<slug>` in this example.

If you need complete control over the matching *and* redirection logic, create a rule with a `match` key, set to a closure:

```
return [
    [
        'match' => function (\Psr\Http\Message\UriInterface $url): ?string {
            // Match a path:
            if ($url->getPath() !== 'customer_order.aspx') {
                return null;
            }

            // Or test for the presence of a query parameter:
            parse_str($url->getQuery(), $params);

            if (!isset($params['orderId'])) {
                return null;
            }

            return sprintf('account/orders/%s', $params['orderId']);
        },
        'statusCode' => 301,
    ],
];
```

You may return `null` from a match callback to skip the rule and continue processing. Callbacks are only invoked if all previous rules fail to match.

#### [#](#multi-site-redirection)Multi-Site Redirection

Unlike routes, redirection rules are processed globally, and matched against full paths. For example, a rule like `old/page` would *not* catch a request path beginning with a site’s base path, like `/secondary-site/old/page`. You may parameterize rules to match multiple sites’ base paths (i.e: `<site:{slug}>/old/page`), or define individual rules for each relevant site.

However, as part of Craft’s normal routing behavior, every front-end request is handled in the context of a site—typically one with the correct hostname and the longest matching base path, or the “default” site when none match. When a redirect rule is evaluated, its `to` value is treated as site-relative, meaning this rule…

```
return [
    'corporate/team' => 'about-us',
];
```

…behaves differently depending on whether or not a site exists with the base path `corporate`. *Without*, it would redirect normally (`/corporate/team` to `/about-us`), but *with*, requests to `/corporate/team` would actually end up at `/corporate/about-us`, because Craft tried to route the request in the “Corporate” site context.

To avoid this ambiguity, prefix the destination with a slash (`/`) to make it an “absolute” path:

```
return [
    'corporate/team' => '/about-us',
];
```

## [#](#headless)Headless

Enabling the [headlessMode](docs_5x__reference__config__general.md#headlessmode) setting skips three routing steps:

- No lookup is done against known element URIs;
- Site routes are ignored ([dynamic](#dynamic-routes) *and* [advanced](#advanced-routing-with-url-rules));
- The `templates/` folder is not checked for matching paths;

Even when your Craft instance hosts no valid front-end URLs, you must access the control panel via its path (`/admin`, by default)—or set [cpTrigger](docs_5x__reference__config__general.md#cptrigger) to `null` or `''` (an empty string).

Bypassing site rules means that [custom GraphQL routes](docs_5x__development__graphql.md#create-a-graphql-route) will not work. The same is true for plugins that automatically register front-end routes.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/routing.md)

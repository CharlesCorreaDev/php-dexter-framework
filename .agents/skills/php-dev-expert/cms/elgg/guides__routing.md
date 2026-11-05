# Routing — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/routing.html

---

# Routing[](#routing "Permalink to this heading")

Elgg has two mechanisms to respond to HTTP requests that don’t already go through the
[Forms + Actions](guides__actions.md) and [Simplecache](guides__views__simplecache.md) systems.

Contents

- [URL Identifier and Segments](#url-identifier-and-segments)
- [Page Handling](#page-handling)

  - [Routes names](#routes-names)
  - [Route configuration](#route-configuration)
  - [Plugin dependent routes](#plugin-dependent-routes)
  - [Route middleware](#route-middleware)
  - [Route controllers](#route-controllers)
- [The `route:rewrite` event](#the-route-rewrite-event)
- [Routing overview](#routing-overview)

## [URL Identifier and Segments](#id1)[](#url-identifier-and-segments "Permalink to this heading")

After removing the site URL, Elgg splits the URL path by `/` into an array. The first
element, the **identifier**, is shifted off, and the remaining elements are called the
**segments**. For example, if the site URL is `http://example.com/elgg/`, the URL
`http://example.com/elgg/blog/owner/jane?foo=123` produces:

Identifier: `'blog'`. Segments: `['owner', 'jane']`. (the query string parameters are
available via `get_input()`)

The site URL (home page) is a special case that produces an empty string identifier and
an empty segments array.

Warning

URL identifier/segments should be considered potentially dangerous user input. Elgg uses `htmlspecialchars`
to escapes HTML entities in them.

## [Page Handling](#id2)[](#page-handling "Permalink to this heading")

Elgg offers a facility to manage your plugin pages via custom routes, enabling URLs like `http://yoursite/my_plugin/section`.
You can register a new route using `elgg_register_route()`, or via `routes` config in `elgg-plugin.php`.
Routes map to resource views, where you can render page contents.

```
// in your 'init', 'system' handler
elgg_register_route('my_plugin:section' [
        'path' => '/my_plugin/section/{guid}/{subsection?}',
        'resource' => 'my_plugin/section',
        'requirements' => [
                'guid' => '\d+',
                'subsection' => '\w+',
        ],
]);

// in my_plugin/views/default/resources/my_plugin/section.php
$guid = elgg_extract('guid', $vars);
$subsection = elgg_extract('subsection', $vars);

// render content
```

In the example above, we have registered a new route that is accessible via `http://yoursite/my_plugin/section/<guid>/<subsection>`.
Whenever that route is accessed with a required `guid` segment and an optional `subsection` segment, the router
will render the specified `my_plugin/section` resource view and pass the parameters extracted from the URL to your
resource view with `$vars`.

### [Routes names](#id3)[](#routes-names "Permalink to this heading")

Route names can then be used to generate a URL:

```
$url = elgg_generate_url('my_plugin:section', [
        'guid' => $entity->guid,
        'subsection' => 'assets',
]);
```

The route names are unique across all plugins and core, so another plugin can override the route by registering different
parameters to the same route name.

Route names follow a certain convention and in certain cases will be used to automatically resolve URLs, e.g. to display an entity.

The following conventions are used in core and recommended for plugins:

**view:<entity\_type>:<entity\_subtype>**
:   Maps to the entity profile page, e.g. `view:user:user` or `view:object:blog`.
    The path must contain a `guid`, or `username` for users

**edit:<entity\_type>:<entity\_subtype>**
:   Maps to the form to edit the entity, e.g. `edit:user:user` or `edit:object:blog`.
    The path must contain a `guid`, or `username` for users.
    If you need to add subresources, use suffixes, e.g. `edit:object:blog:images`, keeping at least one
    subresource as a default without suffix.

**add:<entity\_type>:<entity\_subtype>**
:   Maps to the form to add a new entity of a given type, e.g. `add:object:blog`.
    The path, as a rule, contains `container_guid` parameter

**collection:<entity\_type>:<entity\_subtype>:<collection\_type>**
:   Maps to listing pages. Common route names used in core are, as follows:

    > - `collection:object:blog:all`: list all blogs
    > - `collection:object:blog:owner`: list blogs owned by a user with a given username
    > - `collection:object:blog:friends`: list blogs owned by friends of the logged in user (or user with a given username)
    > - `collection:object:blog:group`: list blogs in a group

**default:<entity\_type>:<entity\_subtype>**
:   Maps to the default page for a resource, e.g. the path `/blog`. Elgg happens to use the “all” collection for these routes.

    > - `default:object:blog`: handle the generic path `/blog`.

`<entity_subtype>` can be omitted from route names to register global routes applicable to all entities of a given type.
URL generator will first try to generate a URL using the subtype, and will then fallback to a route name without a subtype.
For example, user profiles are routed to the same resource view regardless of user subtype.

```
elgg_register_route('view:object:attachments', [
        'path' => '/attachments/{guid}',
        'resource' => 'attachments',
]);

elgg_register_route('view:object:blog:attachments', [
        'path' => '/blog/view/{guid}/attachments',
        'resource' => 'blog/attachments',
]);

$blog = get_entity($blog_guid);
$url = elgg_generate_entity_url($blog, 'view', 'attachments'); // /blog/view/$blog_guid/attachments

$other = get_entity($other_guid);
$url = elgg_generate_entity_url($other, 'view', 'attachments'); // /attachments/$other_guid
```

### [Route configuration](#id4)[](#route-configuration "Permalink to this heading")

Segments can be defined using wildcards, e.g. `profile/{username}`, which will match all URLs that contain
`profile/` followed by and arbitrary username.

To make a segment optional you can add a `?` (question mark) to the wildcard name, e.g. `profile/{username}/{section?}`.
In this case the URL will be matched even if the `section` segment is not provided.

You can further constrain segments using regex requirements:

```
// elgg-plugin.php
return [
        'routes' => [
                'profile' => [
                        'path' => '/profile/{username}/{section?}',
                        'resource' => 'profile',
                        'requirements' => [
                                'username' => '[\p{L}\p{Nd}._-]+', // only allow valid usernames
                                'section' => '\w+', // can only contain alphanumeric characters
                        ],
                        'defaults' => [
                                'section' => 'index',
                        ],
                ],
        ]
];
```

By default, Elgg will set the following requirements for named URL segments:

```
$patterns = [
        'guid' => '\d+', // only digits
        'group_guid' => '\d+', // only digits
        'container_guid' => '\d+', // only digits
        'owner_guid' => '\d+', // only digits
        'username' => '[\p{L}\p{Nd}._-]+', // letters, digits, underscores, dashes
];
```

Note

You can have the route params `username` and/or `guid` filled with the values of the logged in user by
default if you add the flag `use_logged_in` and set it to `true`.

### [Plugin dependent routes](#id5)[](#plugin-dependent-routes "Permalink to this heading")

If a route requires a specific plugin to be active this can be configured in the route configuration.

```
// elgg-plugin.php
return [
        'routes' => [
                'collection:object:blog:friends' => [
                        'path' => '/blog/friends/{username?}/{lower?}/{upper?}',
                        'resource' => 'blog/friends',
                        'required_plugins' => [
                                'friends', // route only allowed when friends plugin is active
                        ],
                ],
        ]
];
```

### [Route middleware](#id6)[](#route-middleware "Permalink to this heading")

Route middleware can be used to prevent access to a certain route, or to perform some business logic before
the route is rendered. Middleware can be used, e.g. to implement a paywall, or to log analytics,
or to set open graph metatags.

Elgg core implements several middleware handlers. The following middleware can be found in the namespace `\Elgg\Router\Middleware`:

#### Gatekeeper[](#gatekeeper "Permalink to this heading")

This gatekeeper will prevent access by non-authenticated users.

#### AdminGatekeeper[](#admingatekeeper "Permalink to this heading")

This gatekeeper will prevent access by non-admin users.

#### LoggedOutGatekeeper[](#loggedoutgatekeeper "Permalink to this heading")

This gatekeeper will prevent access by authenticated users.

#### AjaxGatekeeper[](#ajaxgatekeeper "Permalink to this heading")

This gatekeeper will prevent access with non-xhr requests.

#### PageOwnerGatekeeper[](#pageownergatekeeper "Permalink to this heading")

This gatekeeper will prevent access if there is no pageowner entity.

#### GroupPageOwnerGatekeeper[](#grouppageownergatekeeper "Permalink to this heading")

This gatekeeper extends the `PageOwnerGatekeeper` but also requires the pageowner to be a `ElggGroup` entity.

#### GroupToolGatekeeper[](#grouptoolgatekeeper "Permalink to this heading")

This gatekeeper extends the `GroupPageOwnerGatekeeper` and will additionally validate that the configured group tool
is enabled.

To provide the `GroupToolGatekeeper` with the group tool to check add it to the route options.

```
// in elgg-plugin.php
'routes' => [
        'collection:object:news:group' => [
                'path' => '/news/group/{guid}',
                'controller' => \Elgg\Controllers\GenericContentListing::class,
                'options' => [
                        'group_tool' => 'news',
                ],
        ],
],
```

Note

When the group tool is configured in the route options the `GroupToolGatekeeper` is automaticly added as middleware.
If a group tool is provided there is no need to add the `GroupPageOwnerGatekeeper` middleware.

#### UserPageOwnerGatekeeper[](#userpageownergatekeeper "Permalink to this heading")

This gatekeeper extends the `PageOwnerGatekeeper` but also requires the pageowner to be an `ElggUser` entity.

#### PageOwnerCanEditGatekeeper[](#pageownercaneditgatekeeper "Permalink to this heading")

This gatekeeper will prevent access if there is no pageowner detected and the pageowner can’t be editted.

#### GroupPageOwnerCanEditGatekeeper[](#grouppageownercaneditgatekeeper "Permalink to this heading")

This gatekeeper extends the `PageOwnerCanEditGatekeeper` but also requires the pageowner to be a `ElggGroup` entity.

#### UserPageOwnerCanEditGatekeeper[](#userpageownercaneditgatekeeper "Permalink to this heading")

This gatekeeper extends the `PageOwnerCanEditGatekeeper` but also requires the pageowner to be an `ElggUser` entity.

#### CsrfFirewall[](#csrffirewall "Permalink to this heading")

This middleware will prevent access without the correct CSRF tokens. This middleware will automatically be applied to actions.

#### ActionMiddleware[](#actionmiddleware "Permalink to this heading")

This middleware will provide action related logic. This middleware will automatically be applied to actions.

#### SignedRequestGatekeeper[](#signedrequestgatekeeper "Permalink to this heading")

This gatekeeper will prevent access if the url has been tampered with.
A secure URL can be generated using the `elgg_http_get_signed_url` function.

#### UpgradeGatekeeper[](#upgradegatekeeper "Permalink to this heading")

This gatekeeper will prevent access if the upgrade URL is secured and the URL is invalid.

#### WalledGarden[](#walledgarden "Permalink to this heading")

This middleware will prevent access to a route if the site is configured for authenticated users only and there is
no authenticated user logged in.
This middleware is automatically enabled for all routes. You can disable the walled garden gatekeeper with a
[route config](guides__walled-garden.md#guides-walled-garden-expose) option.

#### Custom Middleware[](#custom-middleware "Permalink to this heading")

Middleware handlers can be set to any callable that receives an instance of `\Elgg\Request`:
The handler should throw an instance of `\Elgg\Exceptions\HttpException` to prevent route access.
The handler can return an instance of `\Elgg\Http\ResponseBuilder` to prevent further implementation of the routing
sequence (a redirect response can be returned to re-route the request).

```
class MyMiddleware {

        public function __invoke(\Elgg\Request $request) {
                $entity = $request->getEntityParam();
                if ($entity) {
                        // do stuff
                } else {
                        throw new EntityNotFoundException();
                }
        }
}

elgg_register_route('myroute', [
        'path' => '/myroute/{guid?}',
        'resource' => 'myroute',
        'middleware' => [
                \Elgg\Router\Middleware\Gatekeeper::class,
                MyMiddleware::class,
        ]
]);
```

### [Route controllers](#id7)[](#route-controllers "Permalink to this heading")

In certain cases, using resource views is not appropriate. In these cases you can use a controller - any callable
that receives an instance of `\Elgg\Request`:

```
class MyController {

        public function handleFoo(\Elgg\Request $request) {
                elgg_set_http_header('Content-Type: application/json');
                $data = [
                        'entity' => $request->getEntityParam(),
                ];
                return elgg_ok_response($data);
        }

}

elgg_register_route('myroute', [
        'path' => '/myroute/{guid?}',
        'controller' => [MyController::class, 'handleFoo'],
]);
```

#### Listing controller[](#listing-controller "Permalink to this heading")

Elgg offers a default listing controller. This controller will render a full page with:

- A title
- A breadcrumb
- The default filter tabs
- An add new content button (if available)
- The list of content items

All of this is done based of the recommended route names.

**collection:<entity\_type>:<entity\_subtype>:<collection\_type>**
**default:<entity\_type>:<entity\_subtype>**

The title of the page will be the language key `collection:<entity_type>:<entity_subtype>:<collection_type>`
for the `default:<entity_type>:<entity_subtype>` route this will be `collection:<entity_type>:<entity_subtype>:all`.

```
// elgg-plugin.php
return [
        'routes' => [
                'collection:object:my_content:all' => [
                        'path' => '/my_path/all',
                        'controller' => \Elgg\Controllers\GenericContentListing::class,
                ],
                'collection:object:my_content:friends' => [
                        'path' => '/my_path/friends/{username}',
                        'controller' => \Elgg\Controllers\GenericContentListing::class,
                        'middleware' => [
                                \Elgg\Router\Middleware\UserPageOwnerGatekeeper::class,
                        ],
                ],
                'collection:object:my_content:group' => [
                        'path' => '/my_path/group/{guid}',
                        'controller' => \Elgg\Controllers\GenericContentListing::class,
                        'middleware' => [
                                \Elgg\Router\Middleware\GroupPageOwnerGatekeeper::class, // no needed if a group tool is provided
                        ],
                        'options' => [
                                'group_tool' => 'my_group_tool', // optional, if provided the group will need to have this tool enabled
                        ],
                ],
                'collection:object:my_content:owner' => [
                        'path' => '/my_path/owner/{username}',
                        'controller' => \Elgg\Controllers\GenericContentListing::class,
                        'middleware' => [
                                \Elgg\Router\Middleware\UserPageOwnerGatekeeper::class,
                        ],
                        'options' => [
                                'sidebar_view' => 'my_content/sidebar', // optional
                        ],
                ],
                'default:object:my_content' => [
                        'path' => '/my_path',
                        'controller' => \Elgg\Controllers\GenericContentListing::class,
                ],
        ],
];
```

If you have an additional collection listing you can extend the `\Elgg\Controllers\GenericContentListing` class
and add a function `listCollectionType` where `CollectionType` is taken from the route name and made into a camel case
for example `collection:object:my_content:my_listing` will call the function `listMyListing()`.

There are helper function in the controller you can extend if you just need to change some parameters.

Note

If you provide your route definition with an option `sidebar_view` that view will be called during the rendering of
the page.

#### Entity controller[](#entity-controller "Permalink to this heading")

Elgg offers a default entity controller. This controller will render a full page with:

- A title
- A breadcrumb
- A view of an entity or the form to create/edit the entity

All of this is done based of the recommended route names.

**add:<entity\_type>:<entity\_subtype>**
**edit:<entity\_type>:<entity\_subtype>**
**view:<entity\_type>:<entity\_subtype>**

The title of the page will be the language key `add:<entity_type>:<entity_subtype>`, `edit:<entity_type>:<entity_subtype>`
or the display name of the entity (by calling `$entity->getDisplayName()`.

For the `add` page the permissions will be checked that the logged in user is allowed to create the
`<entity_type>:<entity_subtype>` in the provided container.

For the `edit` page the permissions will be checked that the logged in user is allowed to edit the given entity and
that the given entity is of the `<entity_type>:<entity_subtype>` as defined in the route name.

For the `view` page the permissions will be checked that the visitor is allowed to view the given entity and that
the given entity is of the `<entity_type>:<entity_subtype>` as defined in the route name.

```
// elgg-plugin.php
return [
        'routes' => [
                'add:object:my_content' => [
                        'path' => '/my_path/add/{guid}',
                        'controller' => \Elgg\Controllers\GenericEntity::class,
                        'middleware' => [
                                \Elgg\Router\Middleware\Gatekeeper::class,
                                \Elgg\Router\Middleware\PageOwnerGatekeeper::class,
                        ],
                ],
                'edit:object:my_content' => [
                        'path' => '/my_path/edit/{guid}',
                        'controller' => \Elgg\Controllers\GenericEntity::class,
                        'middleware' => [
                                \Elgg\Router\Middleware\Gatekeeper::class,
                        ],
                ],
                'view:object:my_content' => [
                        'path' => '/my_path/view/{guid}/{title?}',
                        'controller' => \Elgg\Controllers\GenericEntity::class,
                        'options' => [
                                'sidebar_view' => 'my_content/sidebar', // optional
                        ],
                ],
        ],
];
```

Note

If you provide your route definition with an option `sidebar_view` that view will be called during the rendering of
the page.

## [The `route:rewrite` event](#id8)[](#the-route-rewrite-event "Permalink to this heading")

For URL rewriting, the `route:rewrite` event (with similar arguments as `route`) is triggered very early,
and allows modifying the request URL path (relative to the Elgg site).

Here we rewrite requests for `news/*` to `blog/*`:

```
function myplugin_rewrite_handler(\Elgg\Event $event) {
    $value = $event->getValue();

    $value['identifier'] = 'blog';

    return $value;
}

elgg_register_event_handler('route:rewrite', 'news', 'myplugin_rewrite_handler');
```

Warning

The event must be registered directly in your plugin Bootstrap `boot` function. The `init` function is too late.

## [Routing overview](#id9)[](#routing-overview "Permalink to this heading")

For regular pages, Elgg’s program flow is something like this:

1. A user requests `http://example.com/news/owner/jane`.
2. Plugins are initialized.
3. Elgg parses the URL to identifier `news` and segments `['owner', 'jane']`.
4. Elgg triggers the event `route:rewrite, news` (see above).
5. Elgg finds a registered route that matches the final route path, and renders a resource view associated with it.
   It calls `elgg_view_resource('blog/owner', $vars)` where `$vars` contains the username.
6. The `resources/blog/owner` view gets the username via `$vars['username']`, and uses many other views and
   formatting functions like `elgg_view_layout()` and `elgg_view_page()` to create the entire HTML page.
7. PHP invokes Elgg’s shutdown sequence.
8. The user receives a fully rendered page.

Elgg’s coding standards suggest a particular URL layout, but there is no syntax enforced.

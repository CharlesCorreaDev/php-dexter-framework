# Controllers | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/controllers

---

# Controllers

- ### On this Page

  - [Creating a Controller](docs_5x__extend__controllers.md#creating-a-controller)
  - [Actions](docs_5x__extend__controllers.md#actions)
  - [Routing](docs_5x__extend__controllers.md#routing)
  - [Handling Requests](docs_5x__extend__controllers.md#handling-requests)
  - [Sending Responses](docs_5x__extend__controllers.md#sending-responses)
  - [Model Lifecycle](docs_5x__extend__controllers.md#model-lifecycle)
  - [Exceptions](docs_5x__extend__controllers.md#exceptions)

Plugins and modules can provide custom [controllers  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-controllers) to Craft installations. They can also extend built-in controllers via [behaviors](docs_5x__extend__behaviors.md).

For the most part, Craft controllers behave the same as they do in Yii, so everything in the [Yii documentation  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-controllers) still applies—this page is concerned primarily with additional features that *are* Craft-specific.

## [#](#creating-a-controller)Creating a Controller

Controllers should live within the `controllers/` directory of your plugin or module’s base source folder, and must include a `Controller` suffix in their class and filename (i.e. `LeadController` and `LeadController.php`).

Craft controllers should extend [craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html), which offers a few advantages over its parent, [yii\web\Controller  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-controller):

- You can decide when the controller should allow “anonymous” access by overriding
  [$allowAnonymous  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#property-allowanonymous). (An active user session is required by default.)
- If an [exception](#exceptions) is thrown by a controller action and the request accepts a JSON response, the response will automatically be formatted as JSON, with an `error` key.
- It provides several [helper methods](#request-validation-methods) that ease development.

If you’re working on a *module*, its base class’s [$controllerNamespace  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-application#$controllerNamespace-detail) property must set the right namespace for your controllers. Plugins handle this for you, automatically.

The `$controllerNamespace` property is ultimately evaluated as a path [alias](docs_5x__configure.md#aliases) but it *should not* include a leading `@`. You may encounter errors if the first segment of the “namespace” is not a valid alias—for example, `mymodule\\controllers` will only work if the `@mymodule` alias is already defined, and points to your module’s directory.

## [#](#actions)Actions

Controllers themselves don’t provide any functionality without *actions*. Actions are methods on a controller that begin with `action`, like `actionLogin` or `actionSave`.

An action is responsible for gathering information about the request and generating a response. In the process of serving a request, you might access:

- Values passed via [route params](#routes-with-params);
- POST body params;
- GET query string params;
- HTTP headers;
- Session data;

Typically, actions return a [craft\web\Response  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-response.html) object—but they can also return `null` as a means of handing control back to Craft and [routing](#routing) to whatever *path* was originally requested (ignoring the incoming [`action` param](#action-params)). As a convenience, [craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html) includes a number of [request validation](#request-validation-methods) and [response](#sending-responses) factory methods.

A basic controller looks like this:

```
namespace mynamespace\controllers;

use craft\web\Controller;

class WidgetsController extends Controller
{
    protected array|bool|int $allowAnonymous = true;

    public function actionEcho()
    {
        return $this->asJson(['ping' => 'Pong!']);
    }
}
```

## [#](#routing)Routing

There are several ways to access your controller action in a request, which you can use within your own control panel features, and in documentation of developer-facing features.

Information on [using controller actions](docs_5x__development__forms.md) lives in the main documentation. Everything that applies to built-in controllers holds true for those provided by a plugin.

### [#](#action-params)Action Params

Passing an [`action` param](docs_5x__development__forms.md#making-requests) in a GET request’s query string or a POST request’s body lets you tell Craft exactly what controller and action you want to run.

The most common way to do this is with an HTML form, but it’s also possible via [Ajax](docs_5x__development__forms.md#ajax):

```
<form method="POST">
  {{ csrfInput() }}
  {{ actionInput('my-plugin/widgets/save') }}

  {# ... #}

  <button>Save</button>
</form>
```

[Form Helpers
→

Read more about building front-end forms.](docs_5x__development__forms.md)

### [#](#action-paths)Action Paths

Craft will route requests using a specific “action path” format to the matching action:

**Action Trigger** + **Plugin/Module Handle** + **Controller Name** + **Action Method**

```
curl -X POST https://my-project.tld/actions/my-plugin/widgets/save
```

Each URL segment follows [Yii’s conventions  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-controllers) and is lower-kebab-cased:

- Plugin Handle: From [composer.json](docs_5x__extend__plugin-guide.md#composer-json) or [config/app.php](docs_5x__extend__module-guide.md#update-the-application-config), for modules;
- Controller Name: `WidgetsController` becomes `widgets`;
- Action `WidgetsController::actionSave()` becomes `save`

The **Action Trigger** is the only exception to this rule, and can be customized with the [actionTrigger](docs_5x__reference__config__general.md#actiontrigger) config setting. This setting has no effect on the [`action` param](#action-params).

### [#](#control-panel-routes)Control Panel Routes

Many plugins that provide functionality via the control panel will want to register a bundle of sensible, human-readable routes.

In your plugin’s `init()` method, listen for the [craft\web\UrlManager::EVENT\_REGISTER\_CP\_URL\_RULES  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-urlmanager.html#event-register-cp_url_rules) event:

```
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;
use yii\base\Event;

Event::on(
    UrlManager::class,
    UrlManager::EVENT_REGISTER_CP_URL_RULES,
    function(RegisterUrlRulesEvent $event) {
        $event->rules['widgets/new'] = 'my-plugin/widgets/edit';
        $event->rules['widgets/edit/<id:\d+>'] = 'my-plugin/widgets/edit';

        // ...
    }
);
```

Here, the key represents the user-facing “path” (what will appear in the address bar of their browser), and the value is an [action path](#action-paths).

The second rule here defines a named parameter (`id`), which will be mapped to the target action. We will cover [route params](#routes-with-params), next!

### [#](#site-routes)Site Routes

Plugins should generally avoid setting site URL rules. Instead, document common actions that developers may need, and encourage use of the [`actionInput()`](docs_5x__reference__twig__functions.md#actioninput) Twig function or [`routes.php`](docs_5x__system__routing.md#advanced-routing-with-url-rules) to route requests:

```
return [
    'rate-widget' => 'my-plugin/widgets/submit-review',
];
```

### [#](#routes-with-params)Routes with Params

Through the magic of [reflection  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-controller#bindActionParams()-detail), Yii automatically maps route and query params into action arguments that share a name. For example, an action with this signature…

```
namespace mynamespace\controllers;

use craft\web\Controller;

class WidgetsController extends Controller
{
    public function actionEdit(?int $id = null)
    {
        // ...
    }
}
```

…will automatically receive the `id` parameter from a request to `?action=my-plugin/widgets/edit&id=42`.

In the previous section, we registered two control panel URL rules, the second of which included a [named parameter  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/runtime-routing#named-parameters) pattern (`my-plugin/widgets/edit/<id:\d+>`) matching any numeric value; that value will be passed to our action as though it were a query param (so long as the named parameter matches an argument).

## [#](#handling-requests)Handling Requests

A controller action’s primary job is to handle an incoming web request and generate an appropriate [response](#sending-responses).

### [#](#request-validation-methods)Request Validation Methods

[craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html) offers several methods you can call from within your actions, to validate the current request:

| Method | Description |
| --- | --- |
| [requireLogin()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requirelogin) | Requires that a user is logged in. |
| [requireGuest()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireguest) | Requires that the user is anonymous. |
| [requireAdmin()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireadmin) | Requires that the user is logged in with an Admin account. |
| [requirePermission()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requirepermission) | Requires that the user is logged in with an account that has a given permission. |
| [requireAuthorization()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireauthorization) | Requires that the user has been granted authorization to do something (whether or not they are logged in). |
| [requireElevatedSession()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireelevatedsession) | Requires that the user has an elevated session. |
| [requirePostRequest()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requirepostrequest) | Requires that the request was sent as a POST request. |
| [requireAcceptsJson()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireacceptsjson) | Requires that the request was sent with an `Accept: application/json` header. |
| [requireToken()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requiretoken) | Requires that the request was sent with a [token  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-request.html#method-gettoken). |
| [requireCpRequest()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requirecprequest) | Requires that the request URI begins with the [control panel trigger](docs_5x__reference__config__general.md#cptrigger). |
| [requireSiteRequest()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requiresiterequest) | Requires that the request URI doesn’t begin with the [control panel trigger](docs_5x__reference__config__general.md#cptrigger). |

Generally speaking, these checks should occur at the *top* of your action methods:

```
public function actionFoo()
{
    // This action should only be available to the control panel
    $this->requireCpRequest();

    // ...
}
```

Perform request validation in your controller’s `beforeAction()` method to enforce it for all actions.

### [#](#csrf)CSRF

Craft requires a valid [CSRF token](docs_5x__development__forms.md#csrf) for any POST requests. This can be disabled for an entire controller by overriding its `$enableCsrfValidation` property, or just for a specific action:

```
public function beforeAction($action): bool
{
    // Don’t require a CSRF token for incoming webhooks:
    if ($action->id === 'receive-webhook') {
        $this->enableCsrfValidation = false;
    }

    return parent::beforeAction($action);
}
```

Only disable CSRF validation when you have some other means of validating the authenticity of a request, like a webhook signature or shared secret.

## [#](#sending-responses)Sending Responses

You may want to send different types of responses based on request conditions. All of the following situations involve calling the appropriate response factory method and *returning* the result.

### [#](#rendering-templates)Rendering Templates

Controller actions can render and return Twig templates using [craft\web\Controller::renderTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-rendertemplate).

```
use yii\web\Response;
use craft\web\View;

public function actionFoo(): Response
{
    $variables = [
        'bar' => 'baz',
    ];

    // Render and return the plugin’s `foo.twig` template
    return $this->renderTemplate(
        'plugin-handle/foo',
        $variables,
        View::TEMPLATE_MODE_CP,
    );
}
```

[craft\web\Controller::renderTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-rendertemplate) calls [craft\web\View::renderPageTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-renderpagetemplate) internally, which ensures all registered assets are added to the rendered HTML—then it will set the `Content-Type` header on the response, based template’s extension, or `text/html` when a MIME type can’t be determined.

Plugins automatically get a [template root](docs_5x__extend__template-roots.md) that exposes templates in their `templates/` directory, but modules must explicitly register a template root.

#### [#](#sandboxing)Sandboxing [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Sandboxed Twig template rendering was first available in version 5.9.0 of Craft.")

Some plugins may need to render templates defined by a control panel user, as Craft does with [system messages](docs_5x__system__mail.md#system-address)).

Providing access to low-level Craft APIs in this way is effectively a form of [remote code execution  (opens new window)](https://www.cloudflare.com/learning/security/what-is-remote-code-execution/) for trusted users; whenever possible, this should be restricted to administrators, or enabled via a specific [permission](docs_5x__extend__user-permissions.md).

Your implementation should *always* process these templates via the special sandbox view methods:

```
// Load template from a database record or project config:
$notification = Automator::getInstance()->getNotifications()->getActivityNotification();

// Render safely via the sandbox environment:
$message = Craft::$app->getView()->renderSandboxedString($notification->template, [
    'user' => $user,
]);
```

To render a regular, on-disk template, use [craft\web\View::renderSandboxedTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-rendersandboxedtemplate); to render an [object template](docs_5x__system__object-templates.md), use [craft\web\View::renderSandboxedObjectTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-rendersandboxedobjecttemplate).
If a developer has opted out of sandbox rendering for a project where your plugin is installed (using the [enableTwigSandbox](docs_5x__reference__config__general.md#enabletwigsandbox) setting), these methods silently fall back to normal rendering.

You can mark your own classes, methods, and properties as “safe” for use in the sandbox by tagging them with [craft\web\twig\AllowedInSandbox  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-allowedinsandbox.html).

Any user-space templates that your plugin provides by default (say, seeded during the [install migration](docs_5x__extend__migrations.md#plugin-install-migrations)) should be fully compatible with sandboxed rendering.

#### [#](#registering-assets)Registering Assets

To register an asset for inclusion in a rendered page, call one of the [craft\web\View  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html) methods:

| Calling… | Registers… |
| --- | --- |
| [`registerJs()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registerjs) | …a block of JavaScript code. |
| [`registerJsFile()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registerjsfile) | …a `<script>` tag, with the provided value as its `src` attribute. |
| [`registerCss()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registercss) | …a block of CSS code. |
| [`registerCssFile()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registercssfile) | …a `<link rel="stylesheet">` tag with the provided value as its `href` attribute. |
| [`registerLinkTag()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registerlinktag) | …an arbitrary `<link>` tag. |
| [`registerAssetBundle()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registerassetbundle) | …everything in the provided [asset bundle](docs_5x__extend__asset-bundles.md). |

Some methods support passing one of the `View::POS_*` constants to determine where it is registered, or use an [asset bundle](docs_5x__extend__asset-bundles.md) to declare dependencies to ensure scripts are output in the correct order.

### [#](#returning-json)Returning JSON

Controller actions can explicitly return JSON responses using [yii\web\Controller::asJson()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-controller#asJson()-detail).

```
use Craft;
use yii\web\Response;

public function actionFoo(): Response
{
    return $this->asJson([
        'foo' => true,
    ]);
}
```

If your action is *only* intended for use by clients expecting JSON, the request should include an `Accept` header, and the action should call [craft\web\Controller::requireAcceptsJson()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-requireacceptsjson).

Alternatively, [craft\web\Controller::asSuccess()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-assuccess) and [craft\web\Controller::asFailure()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asfailure) may be more appropriate, as they will automatically determine the best format for a response—and they keep the structure of the response consistent.

### [#](#redirection)Redirection

Controller actions can redirect the request using [craft\web\Controller::redirect()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-redirect).

```
use yii\web\Response;

public function actionFoo(): Response
{
    return $this->redirect('bar');
}
```

Or, if the request may contain a hashed `redirect` param, you can redirect to that using [craft\web\Controller::redirectToPostedUrl()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-redirecttopostedurl).

```
use yii\web\Response;

public function actionFoo(): Response
{
    // Redirect the request based on a 'redirect' param
    return $this->redirectToPostedUrl();
}
```

If the controller action is saving something, you may want to allow forms’ `redirect` params to include dynamic tokens such as `{id}`, which should be replaced with the object’s attribute values. To support that, pass the object into [redirectToPostedUrl()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-redirecttopostedurl).

```
use yii\web\Response;

public function actionFoo(): Response
{
    // ...

    // Redirect the request based on a POSTed 'redirect' param,
    // which can contain entry attribute tokens, such as {id}:
    return $this->redirectToPostedUrl($entry);
}
```

### [#](#success-and-failure-states)Success and Failure states

For any requests that deal primarily with a single model, you can indicate success and failure states (say, saves or validation errors, respectively) with [craft\web\Controller::asModelSuccess()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asmodelsuccess) and [craft\web\Controller::asModelFailure()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asmodelfailure).

These methods combine aspects of the options above, constructing a response based on the [`Accept` header](#returning-json), issuing a [redirect](#redirection), or setting flashes and route params. Check out the [model lifecycle](#model-lifecycle) section for an example of them in use.

The lower-level [craft\web\Controller::asSuccess()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-assuccess) and [craft\web\Controller::asFailure()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asfailure) methods accomplish much the same thing, but don’t require a model.

### [#](#sending-files)Sending Files

Actions can also return entire files, rather than HTML or JSON:

```
return $this->response->sendFile(Craft::getAlias('@storage/path/to/temp-file.pdf'), 'Your Invoice.pdf', );

// ...or...

return $this->response->sendContentAsFile($csv, 'report.csv');
```

Note that these methods are accessed via the [craft\web\Response  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-response.html) stub attached to the controller.

### [#](#control-panel-screens)Control Panel Screens

When working with control panel views, you can construct a context-agnostic response by calling [craft\web\Controller::asCpScreen()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-ascpscreen). In doing so, you allow Craft to format the response as a complete HTML document, or just the fragment required for a slide-out. The universal [element editor](docs_5x__extend__element-types.md#edit-screen) makes extensive use of this.

To set up a response, call the `asCpScreen()` method from an action:

```
$response = $this->asCpScreen()
    ->action('my-plugin/widgets/save')
    ->docTitle("Edit {$widget->name}")
    ->title($widget->name)
    ->editUrl(UrlHelper::cpUrl("widgets/edit/{$widget->id}");

// ...

return $response;
```

See [craft\web\CpScreenResponseBehavior  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-cpscreenresponsebehavior.html) for a complete list of methods used to prepare the response object. Keep in mind that some properties are only used one context or another, but that the response can (and should) be configured without needing to know which context is being targeted!

## [#](#model-lifecycle)Model Lifecycle

This section expands on concepts covered in [models and validation](docs_5x__development__forms.md#models-and-validation), with a focus on the implementation of the underlying actions. Examples here will conform to the patterns discussed in that user-facing documentation.

Craft extends [parameterized URL rules](#routes-with-params) to help maintain continuity while editing models. In cases where a validation error prevents a model from saving, you’ll want to provide the user an opportunity to view and correct issues.

In this exercise, we’ll assume your plugin defines two URL rules for the control panel, like the examples above:

- `widgets/new` for creating a `Widget`;
- `widgets/<id:\d+>` for editing an existing `Widget`;

When a user arrives at `widgets/new` (or `admin/widgets/new`, more accurately), we will present them with a form to create a new `Widget`. If there are no issues with their submission, they’ll be redirected to the new widget’s edit URL (`widgets/{id}`). If there *is* an issue creating the widget (or updating it, later), we’ll drop them back where they started—for new `Widget`s, that would mean the `new` path; for existing `Widget`s, their edit URL.

### [#](#presentation-routes)Presentation Routes

To support this workflow, both rules must be mapped to a single “edit” action capable of handling both *new* and *existing* records. The action will have two arguments—one that corresponds to the `id` param from our *edit* route, and one that will receive a [dynamically-set `widget` param](#mutation-validation). Let’s look at how this is set up, in practice:

```
public function actionEdit(?int $id = null, ?Widget $widget = null)
{
    $widgets = MyPlugin::getInstance()->getWidgets();

    // Do we have an incoming Widget ID from the route?
    if ($id !== null) {
        // Was a Widget model passed back via route params? It should take priority:
        if ($widget === null) {
            // Nope, let’s look it up:
            $widget = $widgets->getWidgetById($id);

            if (!$widget) {
                // Uh oh, they’re trying to edit something that doesn’t exist!
                throw new NotFoundHttpException('The requested widget does not exist.');
            }
        }
    } else {
        // Ok, so we’re dealing with a “new” Widget… was one passed back via route params?
        if ($widget === null) {
            // Still no—let’s instantiate a fresh one so we have something to pass to the template:
            $widget = new Widget();
        }
    }

    return $this->renderTemplate('my-plugin/_widgets/edit', [
        'widget' => $widget,
    ]);
}
```

This one action can handle both the `new` and `edit` routes, defined earlier—including cases when the `Widget` fails validation and is passed back to the original path. Here’s a breakdown of the possible combinations of route params that might be available and what scenario it might represent:

| `$id` | `$widget` | Scenario |
| --- | --- | --- |
|  |  | Displaying a new form, with no prior submission. |
|  |  | Displaying validation errors for a new `Widget`. |
|  |  | Displaying a form for an existing `Widget`. |
|  |  | Displaying a form with validation errors for an existing `Widget`. |

### [#](#mutation-validation)Mutation + Validation

But how do we actually *save* a `Widget`? This is handled in a separate action, bearing a familiar structure:

```
public function actionSave()
{
    $this->requirePostRequest();

    $request = Craft::$app->getRequest();
    $widgets = MyPlugin::getInstance()->getWidgets();

    // Is the user trying to edit an existing widget?
    $id = $request->getBodyParam('id');

    if ($id) {
        // Ok, we’ve got an ID—let’s look it up.
        $widget = $widgets->getWidgetById($id);

        // Uh oh, it doesn’t exist!
        // (Or maybe you decide they don't have permission to edit it...)
        if (!$widget) {
            throw new BadRequestHttpException('Invalid widget ID.');
        }
    } else {
        // Ok, no ID was passed—looks like they want to create a new one:
        $widget = new Widget();
    }

    // ...assign, update, and validate properties...

    if (!$widgets->saveWidget($widget)) {
        // Hand the model back to the original route:
        return $this->asModelFailure(
            $widget, // Model, passed back under the key, below...
            Craft::t('my-plugin', 'Something went wrong!'), // Flash message
            'widget', // Route param key
        );
    }

    return $this->asModelSuccess(
        $widget, // Model (included in JSON responses)
        Craft::t('my-plugin', 'Widget saved.'), // Flash message
        'widget', // Key the model will be under (in JSON responses)
        'my-plugin/widgets/{id}', // Redirect “object template”
    );
}
```

This implementation of `actionSave()` doesn’t require route params to be bound to arguments—instead, it just looks for a POSTed `id` value, and attempts to load the corresponding `Widget`. Without an ID in the request, it just instantiates a new `Widget` model.

In the last return statement, you’ll notice a [redirection](#redirection) object template, which is rendered after a widget is successfully saved—the format matches our original “edit” URL rule, meaning the user will be dropped at their newly created or updated `Widget` edit screen.

Read more about the `asModelSuccess()` and `asModelFailure()` [response factory methods](#models-and-validation).

### [#](#forms)Forms

The final piece of this puzzle is the `<form>` we use to display and update a `Widget`:

```
<form method="POST">
  {{ csrfInput() }}
  {{ actionInput('my-plugin/widgets/save') }}

  {# Our `widget` may be new, so it won’t always have an ID: #}
  {% if widget.id %}
    {{ hiddenInput('id', widget.id) }}
  {% endif %}

  <label>
    {{ input('text', 'name', widget.name) }}

    {# It may also have come back with validation errors attached: #}
    {% if widget.hasErrors('name') %}
        <span>{{ widget.getErrors('name') | join(', ') }}</span>
    {% endif %}
  </label>

  <button type="submit">Save Widget</button>
</form>
```

Notice that we aren’t setting an [`action` *attribute*](docs_5x__development__forms.md#making-requests) on the form! This means that if the widget is *isn’t* saved successfully, the request will fall through to the same route the user submitted the form from (in this case, mapped to the `my-plugin/widgets/edit` action), allowing them to pick back up with the model intact. If it *was* successful, Craft will [redirect](#sending-responses) to the rendered object template (fourth argument to `asModelSuccess()` at the end of `actionSave()`).

You may still define an `action` attribute on your form when it exists at a different path from the primary editing page. The “Quick Post” dashboard widget is representative of this pattern—a minimal form is presented in one context, but errors are displayed elsewhere, after submission.

## [#](#exceptions)Exceptions

Craft automatically handles exceptions that bubble out of an action, and will present an error to the client—but only subclasses of [yii\base\UserException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-userexception) will display the actual message.

Yii provides [yii\web\HttpException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-httpexception), which can be thrown with a specific `statusCode` to set it on the response. Specific subclasses like [yii\web\ForbiddenHttpException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-forbiddenhttpexception) should be used when available.

Do not throw `HttpException`s anywhere but web controllers. If you want to indicate an internal failure, catch and re-throw an appropriate `HttpException`.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/controllers.md)

# Special Topics: Standalone Actions | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/tutorial-standalone-actions

---

0

# Standalone Actions [¶](#standalone-actions)

> Available since version 22.0.

A standalone action is a [yii\base\Action](https://www.yiiframework.com/doc/api/22.0/yii-base-action) subclass that handles a route directly, without a hosting controller. The
feature is **purely additive**: existing controllers, `actions()`, `controllerMap`, filters, and components keep working
unchanged. You opt in only where you want it.

Two optional mechanisms dispatch standalone actions, mirroring the two Yii has always offered for controllers:

- [yii\base\Module::$actionNamespace](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$actionNamespace-detail) — convention-based discovery, parallel to
  [yii\base\Module::$controllerNamespace](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerNamespace-detail). Defaults to `$controllerNamespace`, so by default actions live under the
  same root as controllers. **This is the mechanism you will use most.**
- [yii\base\Module::$actionMap](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$actionMap-detail) — explicit registration, parallel to [yii\base\Module::$controllerMap](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$controllerMap-detail). For
  endpoints that do not follow the convention (custom IDs, third-party classes).

## Quick start [¶](#quick-start)

Drop a class named `<X>Action` (extending [yii\web\Action](https://www.yiiframework.com/doc/api/22.0/yii-web-action) for HTTP, not [yii\base\Controller](https://www.yiiframework.com/doc/api/22.0/yii-base-controller)) in the right folder
and a route resolves to it. With the default configuration the folder is `app/controllers/`:

```
// app/controllers/HealthAction.php  ->  route: health
namespace app\controllers;

use yii\db\Connection;
use yii\web\Action;
use yii\web\Response;

final class HealthAction extends Action
{
    public function run(Connection $db, Response $response): Response
    {
        $ok = true;

        try {
            $db->createCommand('SELECT 1')->queryScalar();
        } catch (\Throwable) {
            $ok = false;
        }

        $response->format = Response::FORMAT_JSON;
        $response->statusCode = $ok ? 200 : 503;
        $response->data = ['status' => $ok ? 'ok' : 'degraded'];

        return $response;
    }
}
```

A request whose route resolves to `health` runs `HealthAction::run()` directly. No controller is instantiated, no
`actionXxx` method is called, and `Yii::$app->controller` stays `null`. The typed parameters of `run()`
(`Connection $db`, `Response $response`) are resolved by the DI container. Filters in the action's `behaviors()`
(such as [yii\filters\AccessControl](https://www.yiiframework.com/doc/api/22.0/yii-filters-accesscontrol) or [yii\filters\VerbFilter](https://www.yiiframework.com/doc/api/22.0/yii-filters-verbfilter)) participate in the lifecycle exactly as on a
controller.

## How routes resolve to classes [¶](#how-routes-resolve-to-classes)

The convention is the same as for controllers, with two differences: the class suffix is `Action` (not `Controller`)
and the parent is [yii\base\Action](https://www.yiiframework.com/doc/api/22.0/yii-base-action) / [yii\web\Action](https://www.yiiframework.com/doc/api/22.0/yii-web-action).

**Rule:** the **last** route segment becomes the class name (`<Camel>Action`); every **preceding** segment becomes a
sub-namespace (folder), appended verbatim to `$actionNamespace`.

With `actionNamespace` set to `app\usecase`:

| Route | Resolves to | File |
| --- | --- | --- |
| `health` | `app\usecase\HealthAction` | `usecase/HealthAction.php` |
| `post/index` | `app\usecase\post\IndexAction` | `usecase/post/IndexAction.php` |
| `post/view-summary` | `app\usecase\post\ViewSummaryAction` | `usecase/post/ViewSummaryAction.php` |
| `admin/posts/view` | `app\usecase\admin\posts\ViewAction` | `usecase/admin/posts/ViewAction.php` |

### Limits to keep in mind [¶](#limits-to-keep-in-mind)

- **Hyphens only in the last segment.** `view-summary` → `ViewSummaryAction`, but a hyphen in a preceding (folder)
  segment is rejected: `user-admin/login` does not resolve.
- **The last segment must start with a lowercase letter** (`[a-z]`). Folder segments are matched verbatim, so keep them
  lowercase to match conventional routes.
- **The first segment must not collide with a registered sub-module id.** If a sub-module with that id exists,
  resolution recurses into it (using *its* `actionNamespace`) instead of looking under the current one.
- **The class must extend [yii\base\Action](https://www.yiiframework.com/doc/api/22.0/yii-base-action) (or [yii\web\Action](https://www.yiiframework.com/doc/api/22.0/yii-web-action)) and must not extend [yii\base\Controller](https://www.yiiframework.com/doc/api/22.0/yii-base-controller).** A
  `<X>Action` class that extends `Controller` is skipped.
- Empty segments (`//`) never resolve.

## Choosing the base class [¶](#choosing-the-base-class)

| Base class | Use for | Parameter handling |
| --- | --- | --- |
| [yii\web\Action](https://www.yiiframework.com/doc/api/22.0/yii-web-action) | HTTP endpoints | Scalar coercion (`'7'` → `int 7`), [yii\web\BadRequestHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-badrequesthttpexception) on bad/missing params, HTTP-aware DI. |
| [yii\base\Action](https://www.yiiframework.com/doc/api/22.0/yii-base-action) | Non-HTTP (jobs, console) | DI via [yii\di\Container::resolveCallableDependencies()](https://www.yiiframework.com/doc/api/22.0/yii-di-container#resolveCallableDependencies()-detail), no scalar coercion. |

Every HTTP example below extends `yii\web\Action`. Reserve `yii\base\Action` for actions that should not pay
HTTP-specific costs nor surface `BadRequestHttpException` on bad scalars. This tutorial is web-focused; console
standalone dispatch also runs through `Module::runAction()`, but is out of scope here.

## Dependency injection [¶](#dependency-injection)

Standalone actions support DI in **two places**, and both coexist:

- **Constructor** — typed parameters on `__construct()` are resolved once, before the action runs. Use for long-lived
  collaborators (DB, mailer, repositories) and anything you need from `behaviors()` or `init()`.
- **`run()`** — typed parameters are resolved per invocation. Use for request-scoped artifacts ([yii\web\Request](https://www.yiiframework.com/doc/api/22.0/yii-web-request),
  [yii\web\Response](https://www.yiiframework.com/doc/api/22.0/yii-web-response), [yii\web\User](https://www.yiiframework.com/doc/api/22.0/yii-web-user)) and route scalars (`int $id`, `string $slug`).

```
final class HealthAction extends Action
{
    public function __construct(private readonly Connection $db) {}

    public function run(Response $response): Response
    {
        $response->format = Response::FORMAT_JSON;
        $response->data = ['db' => $this->db->open() ? 'ok' : 'down'];

        return $response;
    }
}
```

For a `run()` parameter, the binder resolves typed non-builtin parameters in this order: a **module component** named
like the parameter, then a **module DI definition** by type, then the **global container** by type, then `null` if the
parameter is nullable, otherwise [yii\web\ServerErrorHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-servererrorhttpexception). Route scalars on a [yii\web\Action](https://www.yiiframework.com/doc/api/22.0/yii-web-action) are coerced
and validated (`?id=abc` for `int $id` raises [yii\web\BadRequestHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-badrequesthttpexception), not a `TypeError`).

> **Advanced — `init()` and the action id.** The dispatcher calls `Yii::createObject()` with no positional arguments and
> assigns [yii\base\Action::$id](https://www.yiiframework.com/doc/api/22.0/yii-base-action#$id-detail) *after* construction. Modern actions need not call `parent::__construct()`. Call it
> explicitly only if you rely on [yii\base\Action::init()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#init()-detail) (for example, attaching behaviors there) — but note that
> during `init()` the id is still `null`. Logic that depends on the id belongs in `behaviors()` event handlers, which
> fire on `EVENT_BEFORE_ACTION` after the id is assigned. Controllers and `actions()`-registered actions keep the
> historical `__construct($id, $controller, $config)` contract; the DI-friendly path applies only to standalone actions.

## Organizing actions [¶](#organizing-actions)

By default `actionNamespace` equals `controllerNamespace`, so actions sit next to controllers. For a separate root
(vertical slices, use cases, ports/adapters), point `actionNamespace` elsewhere:

```
// config/web.php
'actionNamespace' => 'app\\usecase',
```

Controllers stay at `app/controllers/`; actions resolve under `app/usecase/`. The idiomatic layout groups actions by
feature, with the action class **directly** in the feature folder:

```
usecase/post/IndexAction.php    ->  route: post/index
usecase/post/CreateAction.php   ->  route: post/create
```

### A directory per action without a redundant route [¶](#a-directory-per-action-without-a-redundant-route)

If you prefer one folder per action (`usecase/user/login/LoginAction.php`), the convention route becomes
`user/login/login` — the folder `login/` and the class `LoginAction` both encode "login". The convention cannot avoid
this, but three configuration-only approaches give a clean route without writing code:

- **`actionMap`** — map a flat id to the class wherever it lives:
  `'actionMap' => ['login' => app\usecase\user\login\LoginAction::class]` → route `login`.
- **`urlManager` rules** — keep the internal route, expose a clean public URL:
  `'user/login' => 'user/login/login'`.
- **Sub-modules + a uniform class name** — register `user` and `login` as plain [yii\base\Module](https://www.yiiframework.com/doc/api/22.0/yii-base-module) instances with
  `actionNamespace`, and name each slice's action `DefaultAction` (the module default route). Then `user/login`
  resolves natively to `usecase/user/login/DefaultAction.php`, no alias.

> **Note:** `actionMap` is consulted only by the module whose `runAction()` handles the route (typically the
> application). Unlike `controllerMap`, it is not resolved recursively across sub-modules. `actionNamespace` discovery
> *is* recursive, so for sub-module standalone actions prefer the convention.

## A complete CRUD example [¶](#a-complete-crud-example)

A `posts` resource organized as a vertical slice under `app/usecase`. The same resource could be one `PostController`
with six `actionXxx` methods; the patterns coexist.

```
app/usecase/post/
    IndexAction.php  ViewAction.php  CreateAction.php
    UpdateAction.php DeleteAction.php SearchAction.php
    PostForm.php
    views/index.php  views/view.php  views/form.php
app/models/Post.php
config/web.php
```

### Migration [¶](#migration)

```
use yii\db\Migration;

final class m250101_000000_create_post_table extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            '{{%post}}',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(180)->notNull(),
                'body' => $this->text()->notNull(),
                'status' => $this->string(20)->notNull()->defaultValue('draft'),
                'author_id' => $this->integer()->notNull(),
                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
            ],
        );
        $this->createIndex('idx-post-status', '{{%post}}', 'status');
    }

    public function safeDown(): void
    {
        $this->dropTable('{{%post}}');
    }
}
```

### Model and form [¶](#model-and-form)

`app/models/Post.php` is a standard ActiveRecord (`tableName()`, `rules()`, `attributeLabels()`, `TimestampBehavior`).
`app/usecase/post/PostForm.php` is a form-only [yii\base\Model](https://www.yiiframework.com/doc/api/22.0/yii-base-model) used by Create and Update, keeping the input contract
independent of the table schema:

```
namespace app\usecase\post;

use yii\base\Model;

final class PostForm extends Model
{
    public string $title = '';
    public string $body = '';
    public string $status = 'draft';

    public function rules(): array
    {
        return [
            [['title', 'body'], 'required'],
            [['title'], 'string', 'max' => 180],
            [['status'], 'in', 'range' => ['draft', 'published', 'archived']],
        ];
    }
}
```

### The actions [¶](#the-actions)

`IndexAction` — list with pagination. `$this->getModule()` returns the owning module when the action runs standalone
(it falls back to the controller's module when hosted by a controller):

```
namespace app\usecase\post;

use app\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Action;

final class IndexAction extends Action
{
    public function run(): string
    {
        $provider = new ActiveDataProvider(
            [
                'query' => Post::find()->orderBy(['created_at' => SORT_DESC]),
                'pagination' => ['pageSize' => 20],
            ],
        );

        return $this->getModule()->view->render('@app/usecase/post/views/index', ['provider' => $provider], $this);
    }
}
```

There is no `Controller::render()` here, so `$module->view->render()` returns the **bare view, without a layout**. Apply
one explicitly (render the content, then `renderFile()` the layout with `['content' => $content]`) or hide it behind a
small injected renderer service. Use absolute view paths (`@app/...`): an action is not a
[yii\base\ViewContextInterface](https://www.yiiframework.com/doc/api/22.0/yii-base-viewcontextinterface), so relative names will not resolve.

`ViewAction` — the `int $id` is filled from the route and coerced; `?id=abc` raises
[yii\web\BadRequestHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-badrequesthttpexception):

```
namespace app\usecase\post;

use app\models\Post;
use yii\web\Action;
use yii\web\NotFoundHttpException;

final class ViewAction extends Action
{
    public function run(int $id): string
    {
        $post = Post::findOne($id) ?? throw new NotFoundHttpException('Post not found.');

        return $this->getModule()->view->render('@app/usecase/post/views/view', ['post' => $post], $this);
    }
}
```

`CreateAction` — POST with form validation. Filters are declared on the action itself:

```
namespace app\usecase\post;

use app\models\Post;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Action;
use yii\web\Request;
use yii\web\Response;
use yii\web\User;

final class CreateAction extends Action
{
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [['allow' => true, 'roles' => ['@']]],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => ['create' => ['POST']],
            ],
        ];
    }

    public function run(Request $request, Response $response, User $user, PostForm $form): Response|string
    {
        if (!$form->load($request->post()) || !$form->validate()) {
            $response->statusCode = 422;

            return $this->getModule()->view->render('@app/usecase/post/views/form', ['form' => $form], $this);
        }

        $post = new Post();

        $post->setAttributes($form->getAttributes());
        $post->author_id = (int) $user->getId();
        $post->save();

        Yii::$app->session->setFlash('success', 'Post created.');

        return $response->redirect(['/post/view', 'id' => $post->id]);
    }
}
```

`AccessControl` and `VerbFilter` attach to the action's `EVENT_BEFORE_ACTION` and run before `run()`. `Request`,
`Response`, and `User` are application components (resolved by name); `PostForm` is autowired by class. Validation runs
on the form, not the ActiveRecord. Because no controller runs, add a CSRF filter to `behaviors()` for this POST route
(see [CSRF protection](#csrf-protection)).

**`UpdateAction`, `DeleteAction`, `SearchAction`** follow the same pattern. Update is Create with a leading lookup
(`Post::findOne($id) ?? throw …`) guarded by `$request->isPut || $request->isPatch`. Delete only needs a `VerbFilter`
(`['delete' => ['DELETE']]`) plus an `AccessControl` rule. Search is read-only and accepts `string $q` plus pagination
parameters.

### CSRF protection [¶](#csrf-protection)

A standalone action bypasses [yii\web\Controller::beforeAction()](https://www.yiiframework.com/doc/api/22.0/yii-web-controller#beforeAction()-detail), where Yii validates the CSRF token, so **CSRF is
not checked automatically**. APIs and webhooks benefit (no token to manage); state-changing form routes
(`POST`/`PUT`/`DELETE`) restore it with a small filter attached through `behaviors()`:

```
final class CsrfFilter extends \yii\base\ActionFilter
{
    public function beforeAction($action): bool
    {
        if (!\Yii::$app->request->validateCsrfToken()) {
            throw new \yii\web\BadRequestHttpException('Unable to verify your data submission.');
        }

        return true;
    }
}
```

`validateCsrfToken()` is a no-op for `GET`/`HEAD`/`OPTIONS`, so the filter only enforces on unsafe methods. Add
`'csrf' => CsrfFilter::class` to the action's `behaviors()` — a trait is handy when several slices share the same guard.

### URL configuration [¶](#url-configuration)

[yii\web\UrlManager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager) is unchanged; point clean URLs at the route strings. The whole slice needs only the namespace
pointer plus the rules:

```
return [
    // ...
    'actionNamespace' => 'app\\usecase',
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
            'GET,HEAD posts'           => 'post/index',
            'GET posts/search'         => 'post/search',
            'POST posts'               => 'post/create',
            'GET posts/<id:\d+>'       => 'post/view',
            'PUT,PATCH posts/<id:\d+>' => 'post/update',
            'DELETE posts/<id:\d+>'    => 'post/delete',
        ],
    ],
];
```

There is no per-action registration: adding an action is dropping a file at the right path. For a one-off custom id or
namespace, add an `actionMap` entry (`'webhooks-stripe' => app\Integrations\Stripe\WebhookHandler::class`); explicit
entries take precedence over the convention.

## Coexistence and routing order [¶](#coexistence-and-routing-order)

The same application can mix controllers (in `app/controllers/`) and standalone actions (wherever `actionNamespace`
points). `Module::runAction()` resolves a route deterministically:

1. **`actionMap`** (matched on the first segment, at the dispatching module).
2. **`controllerMap`**.
3. **Sub-modules** (matched on the first segment, recursively).
4. **Controller by namespace** — `<X>Controller` with a matching `actionXxx` method.
5. **Standalone action by namespace** — `<X>Action` under `actionNamespace`.

If a controller method **and** a standalone Action class both match the same route, `runAction()` throws
`InvalidConfigException` so you disambiguate explicitly. Existing applications upgrade with no behavioral change,
because before 22.0 a class file at the convention path was never resolved. You can adopt the pattern feature by
feature; there is no global switch.

## URL generation inside standalone actions [¶](#url-generation-inside-standalone-actions)

[yii\data\Sort::createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#createUrl()-detail) and [yii\data\Pagination::createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-data-pagination#createUrl()-detail) resolve the target route from `$route`, then the
active controller's `getRoute()`, then [yii\base\Application::$requestedRoute](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$requestedRoute-detail) (the 22.0 fallback). The third step is
what makes yii\widgets\GridView and [yii\widgets\ListView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-listview) work transparently inside a standalone action — no
`route` override needed. [yii\helpers\Url::current()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#current()-detail) and [yii\helpers\Url::canonical()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#canonical()-detail) use the same fallback. When
none of the three is available (calling outside a request lifecycle) the call throws `InvalidConfigException`.

For links and forms, prefer **absolute** routes (leading `/`), which resolve from the application root without
consulting any controller:

```
<a href="<?= Url::to(['/post/view', 'id' => $post->id]) ?>">View</a>

<?= Html::beginForm(['/post/delete', 'id' => $post->id], 'post') ?>
```

A **relative** route (no leading slash, e.g. `['view']`) resolves against the current controller's module and throws
[yii\base\InvalidArgumentException](https://www.yiiframework.com/doc/api/22.0/yii-base-invalidargumentexception) when no controller is active — "relative" has no meaning without a controller.

## Frequently asked questions [¶](#frequently-asked-questions)

**Where do shared concerns live without a controller?** In three places, all pre-existing: *application-wide*
components (`db`, `session`, `mailer`, `urlManager`, …) read via typed `run()` parameters or `Yii::$app`; *per route*
in the action's own `behaviors()` (`AccessControl`, `VerbFilter`, `ContentNegotiator`, …); and *per module* via
`EVENT_BEFORE_ACTION` / `EVENT_AFTER_ACTION`, which still fire on every ancestor module (auditing, feature flags,
request logging).

**Should I migrate every controller?** No. Standalone actions pay off for endpoints with their own dependencies and
behaviors — webhooks, health checks, integrations, single-purpose use cases, vertical slices. For CRUD where several
methods share filters, layout, and helper state, a controller stays the simpler, standard choice.

**What about REST resources and existing `Action` subclasses?** [yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) and the REST action set
([yii\rest\IndexAction](https://www.yiiframework.com/doc/api/22.0/yii-rest-indexaction), …) keep working through `Controller::actions()` exactly as before; they are controller-based
by design because they share filters and serializer state. Standalone actions are complementary, not a replacement.

**How do I test a standalone action?** Build it the way the dispatcher does, then call `runWithParams([...])` and assert
on the result. A plain action needs only `new YourAction('id', null)`; a **constructor-injected** one must be created
through DI — register stubs in `Yii::$container`, build it with `Yii::createObject(YourAction::class)` (no positional
args), then assign `$action->id`. See `tests/framework/base/StandaloneActionTest.php` and
`tests/framework/base/ModuleActionNamespaceTest.php` for working examples.

## Things to keep in mind [¶](#things-to-keep-in-mind)

- `yii\base\Action::$controller` is `null` for standalone actions. Classes that read `$this->controller` directly are
  not standalone-compatible (documented on [yii\web\ViewAction](https://www.yiiframework.com/doc/api/22.0/yii-web-viewaction), [yii\web\ErrorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-erroraction), [yii\base\InlineAction](https://www.yiiframework.com/doc/api/22.0/yii-base-inlineaction)).
- `Yii::$app->controller` is **not** mutated when a standalone action runs; code reading it mid-request sees whatever
  was set previously (typically `null`).
- `yii\filters\AccessRule::matchController()` accepts `null`. A rule with a non-empty `controllers` constraint does not
  match a standalone action — leave `controllers` empty when the rule should apply to standalone actions.
- **CSRF is not validated automatically** — it lives in [yii\web\Controller::beforeAction()](https://www.yiiframework.com/doc/api/22.0/yii-web-controller#beforeAction()-detail), which standalone
  actions skip. Attach a CSRF filter for state-changing routes (see [CSRF protection](#csrf-protection)). Session and
  authentication are application-level and unaffected.

[Shared Hosting Environment](guide_22_0__tutorial-shared-hosting.md)

[Go to Top](#top)

[Template Engines](guide_22_0__tutorial-template-engines.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/tutorial-standalone-actions.md) !

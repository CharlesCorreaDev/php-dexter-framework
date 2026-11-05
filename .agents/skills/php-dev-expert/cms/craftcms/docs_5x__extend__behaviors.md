# Behaviors | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/behaviors

---

# Behaviors

- ### On this Page

  - [Behavior Class](docs_5x__extend__behaviors.md#behavior-class)
  - [Attachment](docs_5x__extend__behaviors.md#attachment)
  - [Usage](docs_5x__extend__behaviors.md#usage)

[Behaviors  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-behaviors) are a feature of Yii [Components  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-components), and functionally similar to “mixins” in other frameworks or programming paradigms. A behavior can provide additional properties and methods to its owner, without needing to subclass or replace built-in components.

A behavior’s methods and properties are not actually defined on the owner, but accessed as part of Yii’s magic [yii\base\Component::\_\_get()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component#__get()-detail) and [yii\base\Component::\_\_call()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component#__call()-detail) implementations. We’ll follow this logic in the [usage](#usage) section, below.

Every class that extends [craft\base\Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html) (in effect, virtually all core system components and data objects) automatically emits [events](docs_5x__extend__events.md) that make it easy to attach custom behaviors at runtime. Some classes that *don’t* inherit from `craft\base\Model` follow a similar pattern (like [craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html)) and emit an `EVENT_DEFINE_BEHAVIORS` event.

In this example, we’re going to give a subset of entries (within a “Posts” section) a special `getAuthorUrl()` method to standardize how we link to author indexes in our site’s front-end.

## [#](#behavior-class)Behavior Class

A behavior is a special type of class that extends [yii\base\Behavior  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-behavior), and defines methods or properties that you wish to make available on any object it is eventually attached to.

```
namespace mynamespace\myplugin\behaviors;

use craft\helpers\UrlHelper;
use yii\base\Behavior;

class Post extends Behavior
{
    public function getAuthorUrl(): ?string
    {
        $author = $this->owner->getAuthor();

        if (!$author) {
            return null;
        }

        return UrlHelper::siteUrl("authors/{$author->id}");
    }
}
```

Your [IDE](docs_5x__extend.md#ide) may complain about the `$owner` property not having a `getAuthor()` method. You can “type-hint” this with a class-level docblock:

```
/**
 * @property craft\elements\Entry $owner
 */
class Post extends Behavior
{
    // ...
}
```

## [#](#attachment)Attachment

In your plugin’s `init()` method, register an event handler on [craft\elements\Entry::EVENT\_DEFINE\_BEHAVIORS  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html#event-define-behaviors):

```
use yii\base\Event;
use craft\elements\Entry;
use craft\events\DefineBehaviorsEvent;
use mynamespace\myplugin\behaviors\Post;

Event::on(
    Entry::class,
    Entry::EVENT_DEFINE_BEHAVIORS,
    function(DefineBehaviorsEvent $e) {
        $section = $e->sender->getSection();

        // Is it relevant to this entry?
        if ($section->handle !== 'blog') {
            return;
        }

        $e->behaviors['post'] = Post::class;
    }
);
```

Here, we’re only bothering to attach the behavior to entry elements that belong to the `blog` section.

This event registration signature is consistent across any class that emits the `EVENT_DEFINE_BEHAVIORS` event:

- Subclasses of [craft\base\Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html), [craft\db\ActiveRecord  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-activerecord.html), [craft\db\Query  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html), and [craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html)
- [craft\web\twig\variables\CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html)

### [#](#configuration)Configuration

Behaviors can also be attached to system components as they’re initialized, with [application configuration](docs_5x__reference__config__app.md):

```
use craft\web\ErrorHandler;
use mynamespace\myplugin\behaviors\RedirectBehavior;

return [
    // ...
    'components' => [
        'errorHandler' => [
            'as customRedirectHandler' => RedirectBehavior::class,
        ],
    ],
];
```

This behavior can then add event handlers, provide additional methods, and so on.

If your goal is to expose functionality to developers (say, via Craft’s Twig-accessible `craft.app` APIs), consider implementing that logic in a helper class, a [Twig extension](docs_5x__extend__extending-twig.md), or a behavior attached to `<craft5:craft\web\twig\variables\CraftVariable>`.

### [#](#late-attachment)Late Attachment

Some classes will be instantiated prior to your plugin [initializing](docs_5x__extend__plugin-guide.md#initialization), and registering its `EVENT_DEFINE_BEHAVIORS` handler. In these cases, you may need to retroactively attach a behavior to specific objects:

```
// Load all the known/memoized instances of a model:
$sites = Craft::$app->getSites()->getAllSites(true);

// Attach the behavior to each one, manually:
foreach ($sites as $site) {
    $site->attachBehavior('myplugin:geolocation', Geolocation::class);
}

// Attach to any other models that are instantiated later:
Event::on(
    Site::class,
    Site::EVENT_DEFINE_BEHAVIORS,
    function(DefineBehaviorsEvent $event) {
        $event->behaviors['myplugin:geolocation'] = Geolocation::class;
    }
);
```

Models that are *not* memoized like the [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html)s above (and inaccessible via Craft’s public APIs) may be more difficult (or impossible) to retroactively attach behaviors to. In these situations, you can try a [configuration](docs_5x__reference__config__app.md)-based approach, or look for an [event](docs_5x__extend__events.md) that exposes it. This can also be an indication that the object has limited extensibility.

### [#](#naming)Naming

A name is not *required* when attaching a behavior, but can become important if its methods or properties collide with those defined by the owner or another behavior. In the example above, we’re attaching the `Post` behavior as `post`, which will allow us to access it explicitly, in the future:

```
$url = $entry->getBehavior('post')->getAuthorUrl();
```

This also makes it possible to detach a behavior, should you no longer need it:

```
$entry->detachBehavior('post');
```

### [#](#events)Events

Behaviors can automatically bind [events](docs_5x__extend__events.md) to their owners by defining an `events()` method and returning a map of event names (as keys) to methods (as values). This is a great way to collocate event handlers and functionality when they are already tightly coupled:

```
public function events()
{
    return [
        Entry::EVENT_SET_ROUTE => [$this, 'defineRoute'],
    ];
}

public function defineRoute(SetElementRouteEvent $event)
{
    $event->route = '...';
}
```

Handlers registered in this way will only receive events emitted by the owner. If you need to respond to events on *all* instances of a class, you will need to attach your behavior to every instance, or use a [class-level event listener](docs_5x__extend__events.md#class-level-events).

Read more about behaviors in the [Yii guide  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-behaviors#handling-component-events).

## [#](#usage)Usage

With the behavior attached to a class, its properties and methods will be available everywhere that instance is used:

```
$url = $entry->getAuthorUrl();
```

That means you (or your plugin’s users) can take advantage of convenience features in their Twig templates, too:

```
{{ entry.getAuthorUrl() }}
```

### [#](#how-it-works)How it Works

We alluded to “magic” methods, earlier—these are special PHP features that allow classes to intercept attempts to access properties or call methods that don’t exist on it (or any of its parent classes) and handle them on a case-by-case basis (rather than immediately throwing an exception).

[yii\base\Component  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component) implements a few of these:

`__get()`
:   This is called when accessing an undefined property. It receives the desired property name as an argument, and checks if any of the component’s behaviors define it, and returns that value.

`__call()`
:   This performs an equivalent function to `__get()`, but for methods. It receives the called method as an argument, and checks if it is defined by any attached behaviors.

Yii also uses `__get()` (and another magic method, `__set()`) to create “virtual” public properties. For example, a class may have a private `$_data` property, then implement `getData()` and `setData()` methods; it’s possible, then, to access `$model->data` or set `$model->data = 'value'` without there being a property

However: Yii will always attempt to resolve native `getMyCustomProperty()` and `setMyCustomProperty()` methods before looking for a `myCustomProperty` property on any attached behaviors. Special care should be taken when naming behavior properties so as to avoid conflicts or ambiguity when attached to a parent class. Should this be unavoidable, you can directly access a behavior via `$class->getBehavior('behaviorName')`.

Consider accessing properties and calling methods of behaviors you own via their registered [names](#naming), rather than magic methods.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/behaviors.md)

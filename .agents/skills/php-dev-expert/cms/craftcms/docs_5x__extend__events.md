# Events | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/events

---

# Events

- ### On this Page

  - [Event Code Generator](docs_5x__extend__events.md#event-code-generator)
  - [Anatomy of an Event](docs_5x__extend__events.md#anatomy-of-an-event)
  - [Discovering Events](docs_5x__extend__events.md#discovering-events)
  - [Handling Events](docs_5x__extend__events.md#handling-events)
  - [Common Event Flows](docs_5x__extend__events.md#common-event-flows)
  - [Custom Events](docs_5x__extend__events.md#custom-events)

Craft has all kinds of events you can use to customize how core features work, or connect built-in processes to new functionality. Events are a [Yii concept  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-events), and are used extensively throughout its architecture. In cases where Yii components are extended for internal use (like [craft\base\Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html)), Craft provides additional events to expose a greater customization surface for developers.

See [Using Events in a Custom Module  (opens new window)](https://craftcms.com/knowledge-base/custom-module-events) for an end-to-end tutorial on wiring up your first event handler in a module.

This page covers customizing Craft’s native behavior by registering event handlers in your plugin, and how to implement [your own events](#custom-events) that other developers can take advantage of.

## [#](#event-code-generator)Event Code Generator

Quickly find events and generate code samples. Many events will appear more than once, as they’re listed for each class that emits them—read about [discovering events](#discovering-events) for more information!

Selected Event

0 items

## [#](#anatomy-of-an-event)Anatomy of an Event

We use “event” to describe the **name** and **sender** that uniquely identify it, as well as the actual [yii\base\Event  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-event) instance that is emitted.

### [#](#sender)Sender

The class that emits an event is considered its **sender**. The sender is always available via the `sender` property of an event object, and inherits from [yii\base\Component  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component). Events are emitted by calling a component’s `trigger()` method, which automatically sets up the event-sender relationship. You can see an example of this in the [custom events](#custom-events) section.

### [#](#name)Name

Combined with the sender, an event’s **name** identifies what a given handler is listening for. Event names are unique among those on the same class. Typically, you will access event names via constants on the sender class (like [craft\services\Dashboard::EVENT\_REGISTER\_WIDGET\_TYPES  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-dashboard.html#event-register-widget_types)), instead of using the underlying string (`registerWidgetTypes`). Using event constants also allows your IDE to give you suggestions for events, and provide feedback when referencing a non-existent one—they’re also part of our formal deprecation process, receiving docblock tags and [upgrade](docs_5x__extend__updating-plugins.md#events) instructions.

### [#](#event-object)Event Object

Events are emitted as a [yii\base\Event  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-event) instance, or a subclass thereof. Craft has a number of specific event classes (in the `craft\events\` namespace) that act as specialized containers for data that a handler might be interested in.

### [#](#handled)Handled

Each time an event is emitted, a new [event object](#event-object) is created. That object is passed as an argument to each registered handler, until a handler sets the `handled` property to `true`—subsequent handlers are then skipped.

Plugins should generally avoid flagging events `handled` unless they expect to have exclusive control over another event property. Craft events that use the `EVENT_SET_*`, `EVENT_DEFINE_*`, or `EVENT_REGISTER_*` naming convention are good examples of this—situations where a handler might need to authoritatively replace an event’s value to guarantee some behavior of the extension.

#### [#](#cancelable-events)Cancelable Events

Craft extends the “handled” concept via [craft\events\CancelableEvent  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-cancelableevent.html). In addition to `handled`, handlers can set the event’s `isValid` property to `false` to signal that the sender should halt further processing. If you want to prevent other handlers from overriding your `isValid` setting, also set `handled` to `true`.

The `isValid` property is not necessarily related to model validation. A handful of Yii events use an `isValid` property to mean a variety of things, but Craft standardizes the behavior via [CancelableEvent  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-cancelableevent.html), using it exclusively as a means to halt a built-in procedure (say, to prevent a user from being activated).

Preventing something from happening in this way is *not* equivalent to throwing an exception or attempting to end the request from a handler. If an event is cancelable, Craft expects to be able to react to its cancellation—including, potentially, releasing locks or rolling back database transactions.

## [#](#discovering-events)Discovering Events

Every event emitted by an application is logged and can be reviewed with the Yii debug toolbar.

my-craft-project.ddev.site/admin/settings

![Screenshot of the Yii debug toolbar](/docs/assets/img/debug-toolbar-events.ad2bb51a.png)

List of events emitted by Craft and Yii, in the debug toolbar.

But what about all the events that *weren’t* emitted during a given request? Craft and Yii use the same convention for events: every event name is defined exactly one time, as a class constant starting with `EVENT_`.

### [#](#code-diving)Code Diving

The best way to discover an event is to get familiar with a known procedure by stepping through it with a tool like [xdebug](docs_5x__extend.md#xdebug) and looking for event constants within or adjacent to the logical flow, or on classes that logic is part of. Alternatively, setting a breakpoint on the low-level [yii\base\Event::trigger()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-event#trigger()-detail) or [yii\base\Component::trigger()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component#trigger()-detail) methods will allow you to inspect *every* event emitted during a request—and view the current call’s trace.

A fresh Craft install can easily emit 100 or more events per request, so using your IDE’s *conditional breakpoint* may be necessary to cut down on noise!

Directly searching the Craft source is a great way to learn about Craft-specific events—but it will miss a host of events emitted by Yii, as well as those that are inherited from parent classes. The [event browser](#event-code-generator) and generator enumerates *all* of those events, even if they’re technically defined by a parent.

### [#](#inherited-events)Inherited Events

Events provided by Craft (those defined on classes in the `craft\*` namespace) represent just the tip of the iceberg. Many classes inherit events from their parents, including classes defined by Yii—let’s use [craft\elements\Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) as an example:

1. Only two events exist directly on the `Entry` class:

- [`EVENT_DEFINE_ENTRY_TYPES`  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html#event-define-entry_types)
- [`EVENT_DEFINE_PARENT_SELECTION_CRITERIA`  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html#event-define-parent_selection_criteria)

2. Its parent class, [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html) defines 38 more:

- [`EVENT_REGISTER_SOURCES`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-sources)
- [`EVENT_REGISTER_FIELD_LAYOUTS`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-field_layouts)
- …

3. `Element` extends [craft\base\Component  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-component.html), which doesn’t contribute any—but its parent class [craft\base\Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html) defines five more:

- [`EVENT_INIT`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html#event-init)
- [`EVENT_DEFINE_BEHAVIORS`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html#event-define-behaviors)
- …

4. From here, we jump into [yii\base\Model  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-model), which defines two more:

- [`EVENT_BEFORE_VALIDATE`  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-model#EVENT_BEFORE_VALIDATE-detail)
- [`EVENT_AFTER_VALIDATE`  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-model#EVENT_AFTER_VALIDATE-detail)

5. The final two classes in the chain of inheritance ([yii\base\Component  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component) and [yii\base\BaseObject  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-baseobject)) don’t implement any events, themselves.

This one class contains many more events (47, at the time of writing) than is immediately evident. This also represents only the events that would designate an *entry* as its [sender](#sender)—entries (and elements or models) are passed to a variety of other services, which emit their own events. Another 33 events are emitted by [craft\services\Elements  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html), alone!

## [#](#handling-events)Handling Events

Events can be attached with different scopes, depending on your needs.

### [#](#class-level-events)Class-Level Events

In this mode, a handler is registered for *all* occurrences of an event on a class. Class-level handlers are attached using the static [yii\base\Event::on()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-event#on()-detail):

```
use Craft;
use yii\base\Event;
use craft\services\Users;
use craft\events\UserEvent;

Event::on(
    Users::class,
    Users::EVENT_AFTER_ACTIVATE_USER,
    function(UserEvent $e) {
        $message = Craft::$app->getMailer()
            ->composeFromKey('custom.welcome')
            ->setTo($e->user);

        // ...

        $message->send();
    }
);
```

Let’s look at the required arguments:

1. The fully-qualified class name that we expect to emit an event.
2. The event name we want to register the handler for. This should *always* be a class constant).
3. The [handler](#handler-signature).

Class-level events are almost always attached from a plugin’s `init()` method—but be aware that Craft’s bootstrapping process may trigger some events before handlers can be registered! We advise developers defer as much of their public plugins’ initialization as possible by wrapping it in a call to [craft\base\ApplicationTrait::onInit()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-applicationtrait.html#method-oninit)—this gives other extensions an opportunity to register handlers prior to them actually being triggered.

### [#](#instance-level-events)Instance-Level Events

If you’re only concerned about events emitted by a *single* instance of a class, handlers can be directly attached to any subclass of [yii\base\Component  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-component) (effectively every service and model in Craft, including Craft itself).

This example attaches a handler via the singleton [yii\base\Application  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-application) instance that is available as `Craft::$app`:

```
use Craft;
use yii\base\Application;

Craft::$app->on(
    Application::EVENT_AFTER_REQUEST,
    function(Event $e) {
        // ...
    }
);
```

In a different scenario, we may want to attach a handler on any object that passes through some method in our extension:

```
namespace mynamespace\myplugin\services;

use craft\base\Element;
use craft\events\ModelEvent;
use yii\base\Component;

class TrackChanges extends Component
{
    public function watch(Element $element): void
    {
        $element->on(
            Element::EVENT_AFTER_SAVE,
            function(ModelEvent $e) {
                $originalAttributes = $e->data->originalAttributes;

                // Perform some comparison of new/old attributes...
            },
            [
                'originalAttributes' => $element->getAttributes(),
            ],
        );
    }
}
```

This is a much less common pattern for dealing with built-in components, and will usually involve an initial [class-level](#class-level-events) event handler to discover objects as they’re created, anyway.

In most cases, it’s best to set a class-level listener and check in your handler whether the event (or its sender) is relevant. If you know every instance of a class will require an event, you can also attach them via [behaviors](docs_5x__extend__behaviors.md#events).

This listener makes use of the fourth `$data` argument, which allows you to capture data as part of the handler. This is available on the event object when the handler is invoked, under a `data` property. Be mindful of the volume of data you’re capturing at this stage, as it may prevent PHP from freeing memory.

### [#](#handler-signature)Handler Signature

Handlers must be a valid [callable  (opens new window)](https://www.php.net/manual/en/language.types.callable.php), and should accept a single argument that matches the expected event type. Our examples so far have used either the generic [yii\base\Event  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-event), or a type hint of [craft\events\UserEvent  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-userevent.html).

Our previous “[welcome email](#class-level-events)” example could be rewritten to use an external method, like this:

```
Event::on(
    Users::class,
    Users::EVENT_AFTER_ACTIVATE_USER,
    [MyService::class, 'handleUserActivation']
);
```

In addition to closures and callable expressions, you may also use the native [callable syntax  (opens new window)](https://www.php.net/manual/en/functions.first_class_callable_syntax.php):

```
Event::on(
    Users::class,
    Users::EVENT_AFTER_ACTIVATE_USER,
    MyPlugin::getInstance()->getMyService()->someMethod(...),
);
```

#### [#](#return-values)Return Values

Return values from handlers are ignored—instead, Craft expects that the handler modifies properties on the event object (or its sender). You may explicitly declare a `void` return type on handlers as a means to identify misuse within your own plugin, but the signature is not enforced.

### [#](#cloning-handlers)Cloning Handlers

Instance-level event handlers are *not* copied to new instances when using PHP’s `clone()`. If you want to guarantee that your handlers survive this process, create a [behavior](docs_5x__extend__behaviors.md#events) and attach that—behaviors *do* get copied thanks to [craft\base\CloneFixTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-clonefixtrait.html), and any event handlers declared by [yii\base\Behavior::events()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-behavior#events()-detail) are re-installed.

Instead of maintaining a behavior for a single handler, you can use the built-in [craft\behaviors\EventBehavior  (opens new window)](https://docs.craftcms.com/api/v5/craft-behaviors-eventbehavior.html) as a proxy for registering handlers:

```
use craft\behaviors\EventBehavior;
use craft\elements\db\ElementQuery;
use craft\elements\Entry;
use craft\events\CancelableEvent;

$query = Entry::find();

$query->attachBehavior('myBehavior', new EventBehavior([
    ElementQuery::EVENT_AFTER_PREPARE => function(CancelableEvent $event, ElementQuery $query) {
        // ...
    },
], true));
```

The second argument to the `EventBehavior` constructor tells the behavior to mimic [craft\base\Event::once()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-event.html#method-once) and will only invoke your handler once. All handlers are treated the same way, but you may mix one-time and continuous handlers by attaching multiple `EventBehavior` instances.

## [#](#common-event-flows)Common Event Flows

### [#](#adding-validation-rules)Adding Validation Rules

Models in Craft (including [elements](docs_5x__extend__element-types.md)) implement [validation rules  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-core-validators) via a `defineRules()` method. When any model is validated, its `rules()` method is called, which in turn calls `defineRules()`, then emits a [craft\events\DefineRulesEvent  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-definerulesevent.html) with those rules set on a `rules` property.

A handler that registers additional rules would look something like this:

```
use yii\base\Event;
use craft\elements\User;
use craft\events\DefineRulesEvent;

Event::on(
    User::class,
    User::EVENT_DEFINE_RULES,
    function(DefineRulesEvent $e) {
        // Enforce password minimum length:
        $e->rules[] = [['newPassword'], 'string', 'min' => 16];
    }
);
```

Note that the handler is pushing a new rule onto the event’s `rules` property, rather than [returning a value](#return-values).

You can add validation rules to custom fields in the same handler:

```
// Reject a value if it looks like spam:
$e->rules[] = [
    ['field:myCustomFieldHandle'],
    'match',
    'pattern' => '/extended warranty/i',
    'not' => true,
];
```

Building your own [field type](docs_5x__extend__field-types.md)? It should provide validation rules via `getElementValidationRules()`.

This process is the same for any class that extends [craft\base\Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html)—the `EVENT_DEFINE_RULES` event is available on any subclass! To add validation rules to an entry, you would swap out `craft\elements\User` for `craft\elements\Entry`:

```
use yii\base\Event;
use craft\elements\Entry;
use craft\events\DefineRulesEvent;

Event::on(
    Entry::class,
    Entry::EVENT_DEFINE_RULES,
    function(DefineRulesEvent $e) {
        // Disallow strings of digits that look like years:
        $e->rules[] = [
            ['slug'],
            'match',
            'pattern' => '/[0-9]{4}/',
            'not' => true,
            'message' => Craft::t('my-plugin', 'Slugs should not contain year-like values.'),
        ];
    }
);
```

Custom fields on entries can be validated the same way, by prefixing the handle with `field:`.

### [#](#saving-entries)Saving Entries

While every element in Craft has a common set of events your custom code can subscribe to, the entry-saving workflow is one of the most common and complex.

See [Handling Entry Saves  (opens new window)](https://craftcms.com/knowledge-base/handling-entry-saves) for more on entry-specific concepts.

Generally, entries progress through the following order of operations:

1. Pre-flight checks that trigger `EVENT_BEFORE_SAVE`.
2. Validation that triggers `EVENT_BEFORE_VALIDATE` and `EVENT_AFTER_VALIDATE`.
3. Saving for the initial site that triggers `EVENT_AFTER_SAVE`.
4. Propagating non-translatable changes to the entry’s other sites, which repeats steps 1-3 for each site before triggering `EVENT_AFTER_PROPAGATE`.

This process is actually a bit more abstract than this, because it covers *all* element types. The events above live on the [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html) class, but are inherited by other element types, meaning you can listen to only the subset of element lifecycle events you care about.

#### [#](#bulk-operations)Bulk Operations

Craft 5 encapsulates operations that affect one or more elements in a special event, [craft\services\Elements::EVENT\_AFTER\_BULK\_OP  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#event-after-bulk_op). In cases where you need to act on the final result of a save that may involve multiple elements, consider using this in conjunction with the new element query method [craft\elements\db\ElementQuery::inBulkOp()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop):

```
use craft\elements\Entry;
use craft\events\BulkOpEvent;
use craft\helpers\Db;
use craft\services\Elements;
use yii\base\Event;

Event::on(Elements::class, Elements::EVENT_AFTER_BULK_OP, function(BulkOpEvent $event) {
    // Fetch the affected entries in batches:
    $entries = Entry::find()
        ->inBulkOp($event->key)
        ->status(null);

    foreach (Db::each($entries) as $entry) {
        // ...
    }
});
```

Note that we didn’t immediately execute the entry query, above; instead, it’s passed to `Db::each()` and “batched” to help keep the memory usage flat. By default, elements will be loaded in chunks of 100.

Avoid memoizing the individual `$entry` objects, within the loop! This can prevent PHP from releasing the memory saved by batching the queries. If you need to tally special cases (say, failed communication with a remote API), consider capturing just the ID of the entry, instead:

```
$skipped = [];

foreach (Db::each($entries) as $entry) {
    if (!$entry->getIsCanonical()) {
        $skipped[] = $entry->id;

        continue;
    }

    // ...
}
```

If your plugin performs many sequential element saves, you can explicitly start and end a bulk operation via the elements service:

```
$key = Craft::$app->getElements()->beginBulkOp();

// ... save or delete elements ...

Craft::$app->getElements()->endBulkOp($key);
```

The `$key` will be attached to the emitted [craft\events\BulkOpEvent  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-bulkopevent.html) so that other code can get a list of elements involved! After the operation is complete (and any handlers have been called), the key will be cleaned up. It is your responsibility to save element IDs elsewhere if you need to do asynchronous processing on elements that were part of a bulk operation!

### [#](#adding-and-modifying-search-keywords)Adding and Modifying Search Keywords

If you’d like to extend system components to add your own searchable custom attributes, you can hook into the [`EVENT_REGISTER_SEARCHABLE_ATTRIBUTES`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-searchable_attributes) event.

Here, we’re making the `myCustomAttribute` property searchable for Commerce orders:

```
use craft\base\Element;
use craft\commerce\elements\Order;
use craft\events\RegisterElementSearchableAttributesEvent;
use yii\base\Event;

Event::on(
    Order::class,
    Element::EVENT_REGISTER_SEARCHABLE_ATTRIBUTES,
    function(RegisterElementSearchableAttributesEvent $event) {
        $event->attributes[] = 'billingCountry';
        // ...
    }
);
```

A “searchable attribute” doesn’t need to correspond to a real property, so long as you later handle the [craft\base\Element::EVENT\_DEFINE\_KEYWORDS  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-define-keywords) event:

```
use craft\base\Element;
use craft\commerce\elements\Order;
use craft\events\DefineAttributeKeywordsEvent;
use yii\base\Event;

Event::on(
    Order::class,
    Element::EVENT_DEFINE_KEYWORDS,
    function(DefineAttributeKeywordsEvent $event) {
        if ($event->attribute !== 'billingCountry') {
            return;
        }

        $billingAddress = $event->sender->getBillingAddress();
        $country = Craft::$app->getAddresses()
            ->getCountryRepository()
            ->get($billingAddress->countryCode);

        $event->keywords = $country->name;
    }
);
```

The same process can be repeated for each searchable attribute you wish to define—or it can all be packaged into a [behavior](docs_5x__extend__behaviors.md#events)!

## [#](#custom-events)Custom Events

Events are only necessary (or practical) for your extension if you expect other developers to want to customize or react to its behavior. Private plugins and modules generally do not need to emit events, as you (the author) already have complete control over its internal logic!

### [#](#the-evented-mindset)The “Evented” Mindset

As you design your extension, it may still be worthwhile to consider some of the patterns that events fit into. Let’s use a newsletter sign-up plugin as an example. Our plugin will need…

- …a **controller** to receive input from a front-end form;
- …a **model** to hold the contact’s details;
- …a **service** to communicate with a third-party API;

Where do events fit in this process? Craft will automatically emit events before our controller action is run, when an instance of our model is created, before and after our model is validated, after a response is sent… and potentially dozens more places in the normal request-response lifecycle.

Our “API” service is still a bit of a black box, though. Let’s give developers access to our request and response objects by creating a pair of events; one emitted just before our request to the API (with a reference to the contact being subscribed), and another emitted when we’re confident a contact has been subscribed (with references to the contact and the raw response data from the API).

Event (Before)Event (After)Service

```
namespace mynamespace\newsletter\events;

use craft\events\CancelableEvent;
use mynamespace\newsletter\models\Contact;

class SubscribeEvent extends CancelableEvent
{
    public Contact $contact;
}
```

```
namespace mynamespace\newsletter\events;

use mynamespace\newsletter\models\Contact;
use yii\base\Event;

class ApiResponseEvent extends Event
{
    public Contact $contact;
    public array $response;
}
```

```
namespace mynamespace\newsletter\services;

use craft\helpers\Json as JsonHelper;
use mynamespace\newsletter\events\ApiResponseEvent;
use mynamespace\newsletter\events\SubscribeEvent;
use mynamespace\newsletter\models\Contact;
use yii\base\Component;

class MailingList extends Component
{
    /**
     * @var string Event emitted before a contact is added to the mailing list.
     */
    public const EVENT_BEFORE_SUBSCRIBE = 'beforeSubscribe';

    /**
     * @var string Event emitted after a contact has been added to the mailing list.
     */
    public const EVENT_AFTER_SUBSCRIBE = 'afterSubscribe';

    /**
     * Subscribes a contact to the mailing list.
     *
     * @param Contact $contact
     * @return bool
     */
    public function subscribe(Contact $contact): bool
    {
        // Create an HTTP client:
        $client = Craft::createGuzzleClient([
            'base_uri' => 'https://api.mycrm.com/',
        ]);

        // We’re ready! Emit an event:
        $subscribeEvent = new SubscribeEvent([
            'contact' => $contact,
        ]);

        $this->trigger(self::EVENT_BEFORE_SUBSCRIBE, $subscribeEvent);

        // Check if a handler canceled it:
        if (!$subscribeEvent->isValid) {
            return false;
        }

        // Ok, we’re good to go!
        $response = $client->post('org/1234/lists/5678', [
            'form_params' => [
                'name' => $contact->name,
                'email' => $contact->email,
            ],
        ]);

        // Did we upset the API?
        if ($response->getStatusCode() !== 200) {
            return false;
        }

        // Unpack the response:
        $data = JsonHelper::decode($response->getBody()->getContents());

        // Give plugins a chance to react to this, regardless of success state:
        $this->trigger(self::EVENT_AFTER_SUBSCRIBE, new ApiResponseEvent([
            'contact' => $contact,
            'response' => $response,
        ]));

        // Make sure it actually contained the expected “success” flag:
        if ($data['success'] !== true) {
            return false;
        }

        return true;
    }
}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/events.md)

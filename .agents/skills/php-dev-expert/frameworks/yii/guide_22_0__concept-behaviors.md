# Key Concepts: Behaviors | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/concept-behaviors

---

0

# Behaviors [¶](#behaviors)

Behaviors are instances of [yii\base\Behavior](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior), or of a child class. Behaviors, also known
as [mixins](https://en.wikipedia.org/wiki/Mixin), allow you to enhance the functionality
of an existing [component](https://www.yiiframework.com/doc/api/22.0/yii-base-component) class without needing to change the class's inheritance.
Attaching a behavior to a component "injects" the behavior's methods and properties into the component, making those methods and properties accessible as if they were defined in the component class itself. Moreover, a behavior
can respond to the [events](guide_22_0__concept-events.md) triggered by the component, which allows behaviors to also customize the normal
code execution of the component.

## Defining Behaviors [¶](#defining-behaviors)

To define a behavior, create a class that extends [yii\base\Behavior](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior), or extends a child class. For example:

```
namespace app\components;

use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $prop1;

    private $_prop2;

    public function getProp2()
    {
        return $this->_prop2;
    }

    public function setProp2($value)
    {
        $this->_prop2 = $value;
    }

    public function foo()
    {
        // ...
    }
}
```

The above code defines the behavior class `app\components\MyBehavior`, with two properties
`prop1` and `prop2` and one method `foo()`. Note that property `prop2`
is defined via the getter `getProp2()` and the setter `setProp2()`. This is the case because [yii\base\Behavior](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior) extends [yii\base\BaseObject](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject) and therefore supports defining [properties](guide_22_0__concept-properties.md) via getters and setters.

Because this class is a behavior, when it is attached to a component, that component will then also have the `prop1` and `prop2` properties and the `foo()` method.

> **Tip:** Within a behavior, you can access the component that the behavior is attached to through the [yii\base\Behavior::$owner](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior#$owner-detail) property.

> **Note:** In case [yii\base\Behavior::\_\_get()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#__get()-detail) and/or [yii\base\Behavior::\_\_set()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#__set()-detail) method of behavior is overridden you
> need to override [yii\base\Behavior::canGetProperty()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#canGetProperty()-detail) and/or [yii\base\Behavior::canSetProperty()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#canSetProperty()-detail) as well.

## Handling Component Events [¶](#handling-component-events)

If a behavior needs to respond to the events triggered by the component it is attached to, it should override the
[yii\base\Behavior::events()](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior#events()-detail) method. For example:

```
namespace app\components;

use yii\db\ActiveRecord;
use yii\base\Behavior;

class MyBehavior extends Behavior
{
    // ...

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate',
        ];
    }

    public function beforeValidate($event)
    {
        // ...
    }
}
```

The [events()](https://www.yiiframework.com/doc/api/22.0/yii-base-behavior#events()-detail) method should return a list of events and their corresponding handlers.
The above example declares that the [EVENT\_BEFORE\_VALIDATE](https://www.yiiframework.com/doc/api/22.0/yii-base-model#EVENT_BEFORE_VALIDATE-detail) event exists and defines
its handler, `beforeValidate()`. When specifying an event handler, you may use one of the following formats:

- a string that refers to the name of a method of the behavior class, like the example above
- an array of an object or class name, and a method name as a string (without parentheses), e.g., `[$object, 'methodName']`;
- an anonymous function

The signature of an event handler should be as follows, where `$event` refers to the event parameter. Please refer
to the [Events](guide_22_0__concept-events.md) section for more details about events.

```
function ($event) {
}
```

## Attaching Behaviors [¶](#attaching-behaviors)

You can attach a behavior to a [component](https://www.yiiframework.com/doc/api/22.0/yii-base-component) either statically or dynamically. The former is more common in practice.

To attach a behavior statically, override the [behaviors()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#behaviors()-detail) method of the component
class to which the behavior is being attached. The [behaviors()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#behaviors()-detail) method should return a list of behavior [configurations](guide_22_0__concept-configurations.md).
Each behavior configuration can be either a behavior class name or a configuration array:

```
namespace app\models;

use yii\db\ActiveRecord;
use app\components\MyBehavior;

class User extends ActiveRecord
{
    public function behaviors()
    {
        return [
            // anonymous behavior, behavior class name only
            MyBehavior::class,

            // named behavior, behavior class name only
            'myBehavior2' => MyBehavior::class,

            // anonymous behavior, configuration array
            [
                'class' => MyBehavior::class,
                'prop1' => 'value1',
                'prop2' => 'value2',
            ],

            // named behavior, configuration array
            'myBehavior4' => [
                'class' => MyBehavior::class,
                'prop1' => 'value1',
                'prop2' => 'value2',
            ]
        ];
    }
}
```

You may associate a name with a behavior by specifying the array key corresponding to the behavior configuration. In this case, the behavior is called a *named behavior*. In the above example, there are two named behaviors:
`myBehavior2` and `myBehavior4`. If a behavior is not associated with a name, it is called an *anonymous behavior*.

To attach a behavior dynamically, call the [yii\base\Component::attachBehavior()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#attachBehavior()-detail) method of the component to which the behavior is being attached:

```
use app\components\MyBehavior;

// attach a behavior object
$component->attachBehavior('myBehavior1', new MyBehavior());

// attach a behavior class
$component->attachBehavior('myBehavior2', MyBehavior::class);

// attach a configuration array
$component->attachBehavior('myBehavior3', [
    'class' => MyBehavior::class,
    'prop1' => 'value1',
    'prop2' => 'value2',
]);
```

You may attach multiple behaviors at once using the [yii\base\Component::attachBehaviors()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#attachBehaviors()-detail) method:

```
$component->attachBehaviors([
    'myBehavior1' => new MyBehavior(), // a named behavior
    MyBehavior::class,                 // an anonymous behavior
]);
```

You may also attach behaviors through [configurations](guide_22_0__concept-configurations.md) like the following:

```
[
    'as myBehavior2' => MyBehavior::class,

    'as myBehavior3' => [
        'class' => MyBehavior::class,
        'prop1' => 'value1',
        'prop2' => 'value2',
    ],
]
```

For more details,
please refer to the [Configurations](guide_22_0__concept-configurations.md#configuration-format) section.

## Using Behaviors [¶](#using-behaviors)

To use a behavior, first attach it to a [component](https://www.yiiframework.com/doc/api/22.0/yii-base-component) per the instructions above. Once a behavior is attached to a component, its usage is straightforward.

You can access a *public* member variable or a [property](guide_22_0__concept-properties.md) defined by a getter and/or a setter
of the behavior through the component it is attached to:

```
// "prop1" is a property defined in the behavior class
echo $component->prop1;
$component->prop1 = $value;
```

You can also call a *public* method of the behavior similarly:

```
// foo() is a public method defined in the behavior class
$component->foo();
```

As you can see, although `$component` does not define `prop1` and `foo()`, they can be used as if they are part
of the component definition due to the attached behavior.

If two behaviors define the same property or method and they are both attached to the same component,
the behavior that is attached to the component *first* will take precedence when the property or method is accessed.

A behavior may be associated with a name when it is attached to a component. If this is the case, you may
access the behavior object using the name:

```
$behavior = $component->getBehavior('myBehavior');
```

You may also get all behaviors attached to a component:

```
$behaviors = $component->getBehaviors();
```

## Detaching Behaviors [¶](#detaching-behaviors)

To detach a behavior, call [yii\base\Component::detachBehavior()](https://www.yiiframework.com/doc/api/22.0/yii-base-component#detachBehavior()-detail) with the name associated with the behavior:

```
$component->detachBehavior('myBehavior1');
```

You may also detach *all* behaviors:

```
$component->detachBehaviors();
```

## Using `TimestampBehavior` [¶](#using-timestamp-behavior)

To wrap up, let's take a look at [yii\behaviors\TimestampBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-timestampbehavior). This behavior supports automatically
updating the timestamp attributes of an [Active Record](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) model anytime the model is saved via
`insert()`, `update()` or `save()` method.

First, attach this behavior to the [Active Record](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) class that you plan to use:

```
namespace app\models\User;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class User extends ActiveRecord
{
    // ...

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                // 'value' => new Expression('NOW()'),
            ],
        ];
    }
}
```

The behavior configuration above specifies that when the record is being:

- inserted, the behavior should assign the current UNIX timestamp to
  the `created_at` and `updated_at` attributes
- updated, the behavior should assign the current UNIX timestamp to the `updated_at` attribute

> **Note:** For the above implementation to work with MySQL database, please declare the columns(`created_at`, `updated_at`) as int(11) for being UNIX timestamp.

With that code in place, if you have a `User` object and try to save it, you will find its `created_at` and `updated_at` are automatically
filled with the current UNIX timestamp:

```
$user = new User;
$user->email = 'test@example.com';
$user->save();
echo $user->created_at;  // shows the current timestamp
```

The [TimestampBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-timestampbehavior) also offers a useful method
[touch()](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-timestampbehavior#touch()-detail), which will assign the current timestamp
to a specified attribute and save it to the database:

```
$user->touch('login_time');
```

## Other behaviors [¶](#other-behaviors)

There are several built-in and external behaviors available:

- [yii\behaviors\BlameableBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-blameablebehavior) - automatically fills the specified attributes with the current user ID.
- [yii\behaviors\SluggableBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-sluggablebehavior) - automatically fills the specified attribute with a value that can be used
  as a slug in a URL.
- [yii\behaviors\AttributeBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-attributebehavior) - automatically assigns a specified value to one or multiple attributes of
  an ActiveRecord object when certain events happen.
- [yii2tech\ar\softdelete\SoftDeleteBehavior](https://github.com/yii2tech/ar-softdelete) - provides methods to soft-delete
  and soft-restore ActiveRecord i.e. set flag or status which marks record as deleted.
- [yii2tech\ar\position\PositionBehavior](https://github.com/yii2tech/ar-position) - allows managing records order in an
  integer field by providing reordering methods.

## Comparing Behaviors with Traits [¶](#comparison-with-traits)

While behaviors are similar to [traits](https://www.php.net/traits) in that they both "inject" their
properties and methods to the primary class, they differ in many aspects. As explained below, they
both have pros and cons. They are more like complements to each other rather than alternatives.

### Reasons to Use Behaviors [¶](#pros-for-behaviors)

Behavior classes, like normal classes, support inheritance. Traits, on the other hand,
can be considered as language-supported copy and paste. They do not support inheritance.

Behaviors can be attached and detached to a component dynamically without requiring modification of the component class.
To use a trait, you must modify the code of the class using it.

Behaviors are configurable while traits are not.

Behaviors can customize the code execution of a component by responding to its events.

When there can be name conflicts among different behaviors attached to the same component, the conflicts are
automatically resolved by prioritizing the behavior attached to the component first.
Name conflicts caused by different traits requires manual resolution by renaming the affected
properties or methods.

### Reasons to Use Traits [¶](#pros-for-traits)

Traits are much more efficient than behaviors as behaviors are objects that take both time and memory.

IDEs are more friendly to traits as they are a native language construct.

[Events](guide_22_0__concept-events.md)

[Go to Top](#top)

[Configurations](guide_22_0__concept-configurations.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/concept-behaviors.md) !

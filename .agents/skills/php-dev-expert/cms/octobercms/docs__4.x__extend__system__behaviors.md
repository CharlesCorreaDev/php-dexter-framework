# Behaviors - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/system/behaviors.html

---

# Behaviors

Remix classes together with common functionality.

- [Comparison to Traits](docs__4.x__extend__system__behaviors.md#comparison-to-traits)
- [Extending Constructors](docs__4.x__extend__system__behaviors.md#extending-constructors)
- [Soft Definition](#soft-definition)
- [Dynamically Implementing a Behavior](docs__4.x__extend__system__behaviors.md#dynamically-implementing-a-behavior)
- [Dynamically Creating Methods](docs__4.x__extend__system__behaviors.md#dynamically-creating-methods)
- [Checking the Existence of a Method](#checking-the-existence-of-a-method)
- [List All Available Methods](#list-all-available-methods)
- [Usage Example](docs__4.x__extend__system__behaviors.md#usage-example)
- [Behavior / Extension class](#behavior-extension-class)
- [Extending a Class](#extending-a-class)
- [Using the Extension](#using-the-extension)

[More...](#)

Behaviors add the ability for classes to have private traits that are similar to [native PHP Traits  (opens new window)](http://php.net/manual/en/language.oop5.traits.php), except they have some distinct benefits.

1. Behaviors use their own constructor.
2. Behaviors can have private or protected methods.
3. Methods and property names can conflict safely.
4. Classes can be extended with behaviors dynamically.

## [#](#comparison-to-traits) Comparison to Traits

Where you might use a PHP trait like this.

```
class MyClass
{
    use \October\Rain\UtilityFunctions;
    use \October\Rain\DeferredBinding;
}
```

A behavior is used in a similar fashion.

```
class MyClass extends \October\Rain\Extension\Extendable
{
    public $implement = [
        \October\Rain\UtilityFunctions::class,
        \October\Rain\DeferredBinding::class,
    ];
}
```

Where you might define a trait like this.

```
trait UtilityFunctions
{
    public function sayHello()
    {
        echo "Hello from " . get_class($this);
    }
}
```

A behavior is defined like this.

```
class UtilityFunctions extends \October\Rain\Extension\ExtensionBase
{
    protected $parent;

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function sayHello()
    {
        echo "Hello from " . get_class($this->parent);
    }
}
```

The extended object is always passed as the first argument to the constructor. In summary, when using behaviors extend the following classes.

- Extend `October\Rain\Extension\ExtensionBase` to declare a class as a behavior.
- Extend `October\Rain\Extension\Extendable` as the class implementing the behavior.

## [#](#extending-constructors) Extending Constructors

Any class that extends the `Extendable` class can have its constructor extended with the static `extend` method. The argument should pass a closure that will be called as part of the class constructor.

```
MyClass::extend(function($controller) {
    //
});
```

### [#](#soft-definition) Soft Definition

If a behavior class does not exist, like a trait, a **class not found** error will be thrown. In some cases you may wish to suppress this error, for conditional implementation if a behavior is present in the system. You can do this by placing an `@` symbol at the beginning of the class name. In the following example, if the class name `RainLab\Translate\Behaviors\TranslatableModel` does not exist, no error will be thrown.

```
class User extends \October\Rain\Extension\Extendable
{
    public $implement = [
        '@'.\RainLab\Translate\Behaviors\TranslatableModel::class
    ];
}
```

## [#](#dynamically-implementing-a-behavior) Dynamically Implementing a Behavior

This unique ability to extend constructors allows behaviors to be implemented dynamically, for example, use the `implementClassWith` method to implement the `RelationController` class in the `UsersController` class.

```
UsersController::extend(function($controller) {
    $controller->implementClassWith(\Backend\Behaviors\RelationController::class);
});
```

The `implementClassWith` method can be called multiple times safely, it will check if the class is already implementing the behavior and implement it.

Use the `extendClassWith` method to extend an object after it has been constructed. The following example would dynamically extend a Model class using a class name stored in the database.

```
public function afterFetch()
{
    $this->extendClassWith($this->class_type);
}
```

To check if an object has been extended with a behavior, you may use the `isClassExtendedWith` method on the object.

```
$controller->isClassExtendedWith(\Backend\Behaviors\RelationController::class);
```

To specifically call a method from a behavior, use the `asExtension` method which takes the class base name or the fully qualified class as its argument.

```
echo $controller->asExtension('RelationController')->otherMethod();
```

## [#](#dynamically-creating-methods) Dynamically Creating Methods

Methods can be created to an extendable object by calling `addDynamicMethod` and passing a method name and callable object, like a `Closure`.

```
MyModel::extend(function($model) {
    $model->addDynamicMethod('getTagsAttribute', function() use ($model) {
        return '...';
    });
});
```

### [#](#checking-the-existence-of-a-method) Checking the Existence of a Method

To check for the existence of a method in an `Extendable` class call the `methodExists` method - similar to the PHP `method_exists()` function. This will detect both standard methods, methods in behaviors and dynamic methods that have been added through a `addDynamicMethod` call.

```
$post = new Post;
$post->methodExists('getTagsAttribute'); // true
$post->methodExists('missingMethod'); // false
```

### [#](#list-all-available-methods) List All Available Methods

To retrieve a list of all available methods in an `Extendable` class, you can use the `getClassMethods` method. This method operates similar to the PHP `get_class_methods()` function in that it returns an array of available methods in a class, but in addition to defined methods in the class, it will also list any methods provided by an extension or through an `addDynamicMethod` call.

```
$post = new Post;
$methods = $post->getClassMethods();

/**
 * $methods = [
 *   0 => '__construct',
 *   1 => 'extend',
 *   2 => 'getTagsAttribute',
 *   ...
 * ];
 */
```

## [#](#usage-example) Usage Example

### [#](#behavior-extension-class) Behavior / Extension class

```
namespace MyNamespace\Behaviors;

class FormController extends \October\Rain\Extension\ExtensionBase
{
    /**
     * @var Controller controller is a reference to the extended object.
     */
    protected $controller;

    /**
     * __construct
     */
    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function someMethod()
    {
        return "I come from the FormController Behavior!";
    }

    public function otherMethod()
    {
        return "You might not see me...";
    }
}
```

### [#](#extending-a-class) Extending a Class

This `Controller` class will implement the `FormController` behavior and then the methods will become available (mixed in) to the class. We will override the `otherMethod` method.

```
<?php namespace MyNamespace;

class Controller extends \October\Rain\Extension\Extendable
{
    /**
     * implement the FormController behavior
     */
    public $implement = [
        \MyNamespace\Behaviors\FormController::class
    ];

    public function otherMethod()
    {
        return "I come from the main Controller!";
    }
}
```

### [#](#using-the-extension) Using the Extension

```
$controller = new MyNamespace\Controller;

// Prints: I come from the FormController Behavior!
echo $controller->someMethod();

// Prints: I come from the main Controller!
echo $controller->otherMethod();

// Prints: You might not see me...
echo $controller->asExtension('FormController')->otherMethod();
```

← [Rendering Views](docs__4.x__extend__system__views.md)[Widgets](docs__4.x__extend__system__widgets.md) →

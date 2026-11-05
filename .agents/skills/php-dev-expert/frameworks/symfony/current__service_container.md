# Service Container (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/service_container.html

---

# Service Container

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/service_container.rst)

Screencast

Do you prefer video tutorials? Check out the [Symfony Fundamentals screencast series](https://symfonycasts.com/screencast/symfony-fundamentals).

[Dependency injection](https://en.wikipedia.org/wiki/Dependency_injection) is one of the most important [design patterns](https://en.wikipedia.org/wiki/Software_design_pattern) in
software development. Its idea is that classes don't create the objects they
need; they receive them from the outside. This keeps your code decoupled and
makes it more reusable and testable.

The tool that automates this pattern is called a **service container** (or
"dependency injection container"): an object that knows how to create and
connect all the objects of your application and provides them to you when you
need them. In Symfony, those objects are called **services** and almost
*everything* that your application does is actually done by one of them.
Symfony itself is built around the service container, so working with it well
is one of the keys to mastering Symfony.

The service container is provided by the DependencyInjection component. Symfony
applications create and configure the container for you. You can also use the
container in any PHP application, as explained in the
[standalone usage section](current__service_container.md#service-container-standalone) of this article.
The next section explains the dependency injection pattern in detail; if you
are already familiar with it, you can skip to the rest of the article.

## [Understanding Dependency Injection](#understanding-dependency-injection "Permalink to this headline")

To understand why dependency injection is useful and which problems it
solves, consider a class that generates status messages and formats them
before returning them:

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
18
19
20
```

```
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Formatter\TextFormatter;

class MessageGenerator
{
    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $formatter = new TextFormatter();

        return $formatter->format($messages[array_rand($messages)]);
    }
}
```

This code works well, but it has several problems that are not acceptable in
real applications:

- **The class is limited**: it only supports one specific way of formatting
  messages. If you need HTML messages somewhere else, you have to modify the
  `MessageGenerator` class itself;
- **The class is not flexible**: the formatter is created inside the class, so
  there's no way to configure it. All the code using `MessageGenerator` gets
  the exact same behavior;
- **The class is hard to test**: you can't replace the formatter with a fake
  object, so any test of `MessageGenerator` also tests the real
  `TextFormatter` behavior.

The origin of these problems is the same: the class creates the objects it
needs (its *dependencies*) instead of receiving them. A good rule of thumb is
to avoid using the `new` keyword to create dependencies inside your classes.

The **first step** to fix this is to move the dependency to the **constructor**.
The class no longer creates the formatter; it declares that it needs one and
expects to receive it:

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
18
19
20
21
```

```
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Formatter\TextFormatter;

class MessageGenerator
{
    public function __construct(
        private TextFormatter $formatter,
    ) {
    }

    public function getHappyMessage(): string
    {
        $messages = [
            // ...
        ];

        return $this->formatter->format($messages[array_rand($messages)]);
    }
}
```

Now, whoever creates a `MessageGenerator` must also create its formatter and
pass (or "inject") it as a constructor argument:

```
1
2
```

```
$generator = new MessageGenerator(new TextFormatter());
$message = $generator->getHappyMessage();
```

This is **dependency injection**: instead of creating their own dependencies,
classes receive them via the constructor (or, less commonly, via setter methods
or properties; see [Types of Dependency Injection](current__service_container__injection_types.md)).

The **second step** is to depend on an **abstraction** instead of a concrete class.
Define an interface for the formatters and use it as the constructor type-hint:

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
// src/Formatter/FormatterInterface.php
namespace App\Formatter;

interface FormatterInterface
{
    public function format(string $message): string;
}
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
14
```

```
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Formatter\FormatterInterface;

class MessageGenerator
{
    public function __construct(
        private FormatterInterface $formatter,
    ) {
    }

    // ...
}
```

The problems of the original class are now solved: you can pass a
`TextFormatter`, an `HtmlFormatter` or any other class implementing the
interface, configured in any way you need. In tests, you can pass a minimal
fake formatter to test the message generation logic in isolation:

```
1
2
```

```
// the same class works with different formatters
$generator = new MessageGenerator(new HtmlFormatter());
```

However, dependency injection creates a new problem: *someone* has to create
all these objects. In a real application, services depend on other services,
which depend on other services. You'd need to remember how to build each object,
create the dependencies in the right order and update all that code every time
some constructor changes.

Solving this problem is the job of the **service container**: it stores the
"recipe" of how to build each service and creates the objects for you, in the
right order, only when needed and only once (by default, you get the same
instance every time you ask for a service). In Symfony applications you don't
even have to write those recipes: thanks to [autowiring](current__service_container.md#services-autowire),
the container reads the constructor type-hints and figures out the dependencies
by itself.

## [Fetching and Using Services](#fetching-and-using-services "Permalink to this headline")

The moment you start a Symfony app, your container *already* contains many services.
These are like *tools*: waiting for you to take advantage of them. In your controller,
you can "ask" for a service from the container by type-hinting an argument with the
service's class or interface name. Want to [log](current__logging.md) something? No problem:

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
18
```

```
// src/Controller/ProductController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products')]
    public function list(LoggerInterface $logger): Response
    {
        $logger->info('Look, I just used a service!');

        // ...
    }
}
```

What other services are available? Find out by running:

```
1
```

```
$ php bin/console debug:autowiring
```

When you use these type-hints in your controller methods or inside your
[own services](current__service_container.md#service-container-creating-service), Symfony will automatically
pass you the service object matching that type.

Throughout the docs, you'll see how to use the many different services that live
in the container.

Tip

There are actually *many* more services in the container, and each service has
a unique id in the container, like `request_stack` or `router.default`.
For a full list, you can run `php bin/console debug:container` (see
[how to debug the container](current__service_container.md#container-debug-container)). But most of
the time, you won't need to worry about this.
See [how to choose a specific service](current__service_container.md#services-wire-specific-service).

## [Creating/Configuring Services in the Container](#creating-configuring-services-in-the-container "Permalink to this headline")

You can also organize your *own* code into services. Consider the
`MessageGenerator` class created earlier to show your users a random, happy
message. If you put this code in your controller, it can't be reused. Defining
it as a class of its own makes it a service that you can use immediately inside
your controller:

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
18
19
20
21
22
```

```
// src/Controller/ProductController.php
namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products/new')]
    public function new(MessageGenerator $messageGenerator): Response
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...

        $message = $messageGenerator->getHappyMessage();
        $this->addFlash('success', $message);
        // ...
    }
}
```

When you ask for the `MessageGenerator` service, the container constructs a new
`MessageGenerator` object and returns it. It also constructs and injects its
formatter dependency, as explained in the next sections. But if you never ask
for the service, it's *never* constructed: saving memory and speed. As a bonus,
the `MessageGenerator` service is only created *once*: the same instance is
returned each time you ask for it.

## [The Default Service Configuration](#the-default-service-configuration "Permalink to this headline")

The documentation assumes you're using the following service configuration,
which is the default config for a new project:

YAML

PHP

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
```

```
# config/services.yaml
services:
    # default configuration for services in *this* file
    _defaults:
        autowire: true      # automatically injects dependencies in your services.
        autoconfigure: true # automatically registers your services as commands, event subscribers, etc.

    # makes classes in src/ available to be used as services
    # this creates a service per class whose id is the fully-qualified class name
    App\:
        resource: '../src/'

    # order is important in this file because service definitions
    # always *replace* previous ones; add your own service configuration below

    # ...
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
14
15
16
17
18
19
20
21
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        // autowiring and autoconfiguration are enabled by default when using App::config()
        // '_defaults' => [
        //     'autowire' => true,      // automatically injects dependencies in your services.
        //     'autoconfigure' => true, // automatically registers your services as commands, event subscribers, etc.
        // ],

        // makes classes in src/ available to be used as services
        // this creates a service per class whose id is the fully-qualified class name
        'App\\' => [
            'resource' => '../src/',
        ],

        // order is important in this file because service definitions
        // always *replace* previous ones; add your own service configuration below
    ],
]);
```

Tip

The value of the `resource` option can be any valid [glob pattern](https://en.wikipedia.org/wiki/Glob_(programming)).

Thanks to this configuration, you can automatically use any classes from the
`src/` directory as a service, without needing to manually configure it.
The `id` of each service is its fully-qualified class name. You can override
any service that's imported by using its id (class name) later in this file
(e.g. see [how to manually wire arguments](current__service_container.md#services-manually-wire-args)).
If you override a service, none of the options (e.g. `public`) are inherited
from the import (but the overridden service *does* still inherit from `_defaults`).

Note

Wait, does this mean that *every* class in `src/` is registered as a
service? Even model classes? Actually, no. As long as you keep your imported
services as [private](current__service_container.md#container-public), all classes in `src/` that
are *not* explicitly used as services are automatically removed from the
final container. In reality, the import means that all classes are
"available to be *used* as services" without needing to be manually configured.

If you'd prefer to manually wire your service, you can
[use explicit configuration](current__service_container.md#services-explicitly-configure-wire-services).

### [Excluding Services](#excluding-services "Permalink to this headline")

If some files or directories in your project should not become services, you
can exclude them using the `exclude` option:

YAML

PHP

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
```

```
# config/services.yaml
services:
    # ...
    App\:
        resource: '../src/'
        exclude:
            - '../src/SomeDirectory/'
            - '../src/AnotherDirectory/'
            - '../src/SomeFile.php'
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
14
15
16
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        // ...
        'App\\' => [
            'resource' => '../src/',
            'exclude' => [
                '../src/SomeDirectory/',
                '../src/AnotherDirectory/',
                '../src/SomeFile.php',
            ],
        ],
    ],
]);
```

Tip

The value of the `exclude` option can be any valid [glob pattern](https://en.wikipedia.org/wiki/Glob_(programming)).

Excluding paths is optional, but it will slightly increase performance in the
`dev` environment: excluded paths are not tracked and so modifying them will
not cause the container to be rebuilt.

If you want to exclude only a few services, you may use the
[Exclude](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/DependencyInjection/Attribute/Exclude.php "Symfony\Component\DependencyInjection\Attribute\Exclude")
attribute directly on your class to exclude it:

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
```

```
// src/Service/SomeService.php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Exclude;

#[Exclude]
class SomeService
{
    // ...
}
```

### [Multiple Service Definitions Using the Same Namespace](#multiple-service-definitions-using-the-same-namespace "Permalink to this headline")

In the examples above, the key of each entry (e.g. `App\`) is the namespace
prefix of the classes to load. Sometimes you need to load classes of the *same*
namespace in several groups, each one with a different configuration (e.g. to
apply a different tag to each group). You can't do that with the previous
syntax, because configuration keys must be unique in both YAML and PHP config
files.

To solve this, use any unique string as the key of each group and define the
real namespace prefix in the `namespace` option:

YAML

PHP

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
# config/services.yaml
services:
    # 'command_handlers' and 'event_subscribers' are not service ids or
    # namespaces; they can be any unique string used as the entry key
    command_handlers:
        namespace: App\Domain\
        resource: '../src/Domain/*/CommandHandler'
        tags: [command_handler]

    event_subscribers:
        namespace: App\Domain\
        resource: '../src/Domain/*/EventSubscriber'
        tags: [event_subscriber]
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
14
15
16
17
18
19
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        // 'command_handlers' and 'event_subscribers' are not service ids or
        // namespaces; they can be any unique string used as the entry key
        'command_handlers' => [
            'namespace' => 'App\Domain\\',
            'resource' => '../src/Domain/*/CommandHandler',
            'tags' => ['command_handler'],
        ],
        'event_subscribers' => [
            'namespace' => 'App\Domain\\',
            'resource' => '../src/Domain/*/EventSubscriber',
            'tags' => ['event_subscriber'],
        ],
    ],
]);
```

### [The `autowire` Option](#the-autowire-option "Permalink to this headline")

The default configuration sets `autowire: true` in the `_defaults` section,
so it applies to all services defined in that file. With this setting, the
container looks at the type-hints of the arguments in the `__construct()`
method of your services and automatically passes the correct services to them.
If it can't, you'll see a clear exception with a helpful suggestion. This
entire article has been written around autowiring.

**Autowiring** is how the "dependency injection problem" described in the
introduction disappears in Symfony applications: you declare the dependencies
with type-hints and the container does the rest. Most of the time you won't
write any service configuration.

For more details, check out the [service autowiring documentation](current__service_container__autowiring.md),
which covers how autowiring works, how to handle
[multiple implementations of the same type](current__service_container__autowiring.md#autowiring-multiple-implementations-same-type),
the [#[Autowire] attribute](current__service_container__autowiring.md#autowire-attribute) for non-service
arguments, and [generating closures](current__service_container__autowiring.md#autowiring_closures) from services.

### [The `autoconfigure` Option](#the-autoconfigure-option "Permalink to this headline")

The default configuration also sets `autoconfigure: true` in the `_defaults`
section, so it applies to all services defined in that file. With this setting,
the container looks at the interfaces implemented by your service classes (and
also at their base classes and PHP attributes) to detect the *purpose* of each
service and to integrate it automatically in the feature that uses it.

Symfony needs to know, for example, which of your services are
[console commands](current__console.md) (to run them when you execute their
command), which ones are [event subscribers](current__event_dispatcher.md#events-subscriber) (to call
them when their events happen), which ones are
[Twig extensions](current__templates.md#templates-twig-extension), etc. Thanks to
`autoconfigure`, you don't have to declare any of that: create a class that
implements the right interface or extends the right base class, and Symfony
detects it and integrates it for you.

Internally, autoconfiguration uses **service tags**: labels added to the
service definitions to mark that a service must be processed in some special
way by Symfony or by third-party bundles. Most of the time you don't have to
work with tags yourself because autoconfiguration adds them for you. For
example, if your class implements `Twig\Extension\ExtensionInterface`,
`autoconfigure` adds the `twig.extension` tag to the service and Twig
loads it as one of its extensions. Read more about tags and how to use them
explicitly in the [service tags article](current__service_container__tags.md).

Autoconfiguration also works with attributes. Some attributes like
[AsMessageHandler](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Messenger/Attribute/AsMessageHandler.php "Symfony\Component\Messenger\Attribute\AsMessageHandler"),
[AsEventListener](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/EventDispatcher/Attribute/AsEventListener.php "Symfony\Component\EventDispatcher\Attribute\AsEventListener") and
[AsCommand](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/Console/Attribute/AsCommand.php "Symfony\Component\Console\Attribute\AsCommand") are registered
for autoconfiguration. Any class using these attributes will have tags applied
to them. Autoconfiguration attributes are also parsed on abstract classes when
loading services from a resource.

## [Injecting Services/Config into a Service](#injecting-services-config-into-a-service "Permalink to this headline")

What if you need to access the `logger` service from within `MessageGenerator`?
No problem! Create a `__construct()` method with a `$logger` argument that has
the `LoggerInterface` type-hint. Set this on a new `$logger` property
and use it later:

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
18
19
20
```

```
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Formatter\FormatterInterface;
use Psr\Log\LoggerInterface;

class MessageGenerator
{
    public function __construct(
        private FormatterInterface $formatter,
        private LoggerInterface $logger,
    ) {
    }

    public function getHappyMessage(): string
    {
        $this->logger->info('About to find a happy message!');
        // ...
    }
}
```

That's it! The container will *automatically* know to pass the `logger` service
when instantiating the `MessageGenerator`. How does it know to do this?
[Autowiring](current__service_container.md#services-autowire). The key is the `LoggerInterface`
type-hint in your `__construct()` method and the `autowire: true` config in
`services.yaml`. When you type-hint an argument, the container will automatically
find the matching service.

How should you know to use `LoggerInterface` for the type-hint? You can either
read the docs for whatever feature you're using, or use the `debug:autowiring`
command [shown earlier](current__service_container.md#services-debug-container-types) to get a list of
all autowireable type-hints in your application.

Tip

If some dependency is optional (i.e. your service can work without it),
declare the argument as nullable with a `null` default value (e.g.
`private ?LoggerInterface $logger = null`). The container injects the
service if it exists and `null` otherwise. See
[how to make dependencies optional](current__service_container__injection_types.md#optional-dependencies).

### [Injecting Values That Cannot Be Autowired](#injecting-values-that-cannot-be-autowired "Permalink to this headline")

Autowiring works no matter how many arguments the constructor has, but it only
works when the arguments are services. The most common case of non-service
arguments is passing configuration values to services.

Suppose you create a new service to email a site administrator each time a
site update is made, and that the admin email must be configurable:

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
18
19
20
21
22
23
24
25
26
27
```

```
// src/Service/SiteUpdater.php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SiteUpdater
{
    public function __construct(
        private MailerInterface $mailer,
        private string $adminEmail,
    ) {
    }

    public function notifyOfSiteUpdate(): void
    {
        // ...

        $email = new Email()
            ->from('admin@example.com')
            ->to($this->adminEmail)
            ->subject('Site update just happened!')
            ->text('...');

        $this->mailer->send($email);
    }
}
```

The `MailerInterface` argument is autowired as usual. But the container can't
guess the value to pass to the `$adminEmail` argument, so if you use this
service you'll see an error:

> Cannot autowire service "App\Service\SiteUpdater": argument "$adminEmail"
> of method "\_\_construct()" must have a type-hint or be given a value explicitly.

The recommended way to solve this is the
[#[Autowire] attribute](current__service_container__autowiring.md#autowire-attribute), which defines the value to
inject in the same place where the argument is declared:

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
// src/Service/SiteUpdater.php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
// ...

class SiteUpdater
{
    public function __construct(
        private MailerInterface $mailer,
        #[Autowire('manager@example.com')]
        private string $adminEmail,
    ) {
    }

    // ...
}
```

The `#[Autowire]` attribute can also inject [parameters](current__service_container.md#service-container-parameters),
[environment variables](current__configuration.md#config-env-vars), [expressions](current__service_container.md#services-expressions)
and even other services. Read more about it in
[the autowiring article](current__service_container__autowiring.md#autowire-attribute).

Alternatively, you can set the argument explicitly in your service configuration:

YAML

PHP

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
# config/services.yaml
services:
    # ... same as before

    # same as before
    App\:
        resource: '../src/'
        exclude: '../src/{DependencyInjection,Entity,Kernel.php}'

    # explicitly configure the service
    App\Service\SiteUpdater:
        arguments:
            $adminEmail: 'manager@example.com'
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
14
15
16
17
18
19
20
21
22
23
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\SiteUpdater;

return App::config([
    'services' => [
        // ... same as before

        // same as before
        'App\\' => [
            'resource' => '../src/',
            'exclude' => '../src/{DependencyInjection,Entity,Kernel.php}',
        ],

        // explicitly configure the service
        SiteUpdater::class => [
            'arguments' => [
                '$adminEmail' => 'manager@example.com',
            ],
        ],
    ],
]);
```

Thanks to this, the container will pass `manager@example.com` to the `$adminEmail`
argument of `__construct` when creating the `SiteUpdater` service. The
other argument will still be autowired.

But, isn't this fragile? Fortunately, no! If you rename the `$adminEmail` argument
to something else (e.g. `$mainEmail`) you will get a clear exception when you
reload the next page (even if that page doesn't use this service).

### [Injecting Scalar Values and Collections](#injecting-scalar-values-and-collections "Permalink to this headline")

In addition to injecting services, you can pass any type of value as an
argument of a service:

YAML

PHP

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
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
```

```
# config/services.yaml
services:
    App\Service\SomeService:
        arguments:
            # string, numeric and boolean arguments can be passed "as is"
            - 'Foo'
            - true
            - 7
            - 3.14

            # constants can be built-in, user-defined, or Enums
            - !php/const E_ALL
            - !php/const PDO::FETCH_NUM
            - !php/const Symfony\Component\HttpKernel\Kernel::VERSION
            - !php/const App\Config\SomeEnum::SomeCase

            # when not using autowiring, you can pass service arguments explicitly
            - '@some-service-id'  # the leading '@' tells this is a service ID, not a string
            - '@?some-service-id' # using '?' means to pass null if service doesn't exist

            # if the value of a string argument starts with '@', you need to escape
            # it by adding another '@' so Symfony doesn't consider it a service;
            # the following example would be parsed as the string '@securepassword'
            - '@@securepassword'

            # binary contents are passed encoded as base64 strings
            - !!binary VGhpcyBpcyBhIEJlbGwgY2hhciAH

            # collections (arrays) can include any type of argument
            -
                first: !php/const true
                second: 'Foo'
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
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        App\Service\SomeService::class => [
            'arguments' => [
                // string, numeric and boolean arguments can be passed "as is"
                'Foo',
                true,
                7,
                3.14,

                // constants can be built-in, user-defined, or Enums
                E_ALL,
                \PDO::FETCH_NUM,
                Symfony\Component\HttpKernel\Kernel::VERSION,
                App\Config\SomeEnum::SomeCase,

                // when not using autowiring, you can pass service arguments
                // explicitly; this fails if the service doesn't exist
                service('some-service-id'),
                // this passes null if the service doesn't exist
                service('some-service-id')->nullOnInvalid(),

                // collections (arrays) can include any type of argument
                [
                    'first' => true,
                    'second' => 'Foo',
                ],
            ],
        ],
    ],
]);
```

### [Injecting a Lazy Collection of Services](#injecting-a-lazy-collection-of-services "Permalink to this headline")

When you inject a list of services as an array argument, the container creates
all of them when it creates the service that receives the list, even if your
code only uses some of them. Use the `iterator` argument type instead to
create each service only when your code loops over it. For example, a shipping
cost calculator asks several rate providers, in order of preference, until one
of them supports the destination country:

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
18
19
20
21
22
23
24
25
26
```

```
// src/Shipping/ShippingCostCalculator.php
namespace App\Shipping;

class ShippingCostCalculator
{
    /**
     * @param iterable<RateProviderInterface> $rateProviders
     */
    public function __construct(
        private iterable $rateProviders,
    ) {
    }

    public function calculate(string $countryCode, int $weightInGrams): int
    {
        // the container creates each provider only when the loop reaches it,
        // so it never creates the providers that come after the matching one
        foreach ($this->rateProviders as $rateProvider) {
            if ($rateProvider->supports($countryCode)) {
                return $rateProvider->getRate($countryCode, $weightInGrams);
            }
        }

        throw new \LogicException('No rate provider supports this country.');
    }
}
```

Define the list of services in the `iterator` argument:

YAML

XML

PHP

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
```

```
# config/services.yaml
services:
    App\Shipping\ShippingCostCalculator:
        arguments:
            # the loop gets the services in this order
            - !iterator
                - '@App\Shipping\CourierRateProvider'
                - '@App\Shipping\PostalRateProvider'
                # the '@?' syntax skips the service if it doesn't exist
                - '@?App\Shipping\FreightRateProvider'
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
14
15
16
17
18
19
20
21
22
```

```
<!-- config/services.xml -->
<?xml version="1.0" encoding="UTF-8" ?>
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services
        https://symfony.com/schema/dic/services/services-1.0.xsd">

    <services>
        <service id="App\Shipping\ShippingCostCalculator">
            <!-- the loop gets the services in this order -->
            <argument type="iterator">
                <argument type="service"
                    id="App\Shipping\CourierRateProvider"/>
                <argument type="service"
                    id="App\Shipping\PostalRateProvider"/>
                <!-- on-invalid="ignore" skips missing services -->
                <argument type="service" on-invalid="ignore"
                    id="App\Shipping\FreightRateProvider"/>
            </argument>
        </service>
    </services>
</container>
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
14
15
16
17
18
19
20
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Shipping\CourierRateProvider;
use App\Shipping\FreightRateProvider;
use App\Shipping\PostalRateProvider;
use App\Shipping\ShippingCostCalculator;

return function(ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(ShippingCostCalculator::class)
        // the loop gets the services in this order
        ->args([iterator([
            service(CourierRateProvider::class),
            service(PostalRateProvider::class),
            // ignoreOnInvalid() skips the service if it doesn't exist
            service(FreightRateProvider::class)->ignoreOnInvalid(),
        ])]);
};
```

The container injects an iterable object. You can loop over it as many times
as you need, and `count()` returns the number of services without creating
them.

Prefix a service with `@!` (`on-invalid="ignore_uninitialized"` in XML and
`ignoreOnUninitialized()` in PHP) to skip it when the container hasn't
created it yet. This is useful, for example, to reset only the services that
the application used during the request.

See also

If all the services share a tag, inject them with a
[tagged iterator](current__service_container__tags.md#tags_reference-tagged-services) instead of listing
them one by one.

### [Injecting Container Parameters](#injecting-container-parameters "Permalink to this headline")

In addition to holding service objects, the container also holds configuration
values called **parameters**. The main article about Symfony configuration
explains [configuration parameters](current__configuration.md#configuration-parameters) in detail
and shows all their types (string, boolean, array, binary and PHP constant
parameters).

To inject a parameter into a service, use its name surrounded by two `%`
characters (or the dedicated `#[Autowire]` option):

Attributes

YAML

PHP

Standalone Use

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
```

```
// src/Service/SiteUpdater.php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
// ...

class SiteUpdater
{
    public function __construct(
        #[Autowire(param: 'app.admin_email')]
        private string $adminEmail,
    ) {
    }

    // ...
}
```

```
1
2
3
4
5
```

```
# config/services.yaml
services:
    App\Service\SiteUpdater:
        arguments:
            $adminEmail: '%app.admin_email%'
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
14
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\SiteUpdater;

return App::config([
    'services' => [
        SiteUpdater::class => [
            'arguments' => [
                '$adminEmail' => param('app.admin_email'),
            ],
        ],
    ],
]);
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
```

```
use App\Service\SiteUpdater;
use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->setParameter('app.admin_email', 'manager@example.com');

$container->register(SiteUpdater::class)
    ->setAutowired(true)
    ->setArgument('$adminEmail', '%app.admin_email%');
```

Warning

Using the `.` notation in parameter names is a
[Symfony convention](current__contributing__code__standards.md#service-naming-conventions) to make parameters
easier to read. Parameters are flat key-value elements; they can't
be organized into a nested array.

The same syntax works for [environment variables](current__configuration.md#config-env-vars):
use `%env(SOME_VARIABLE)%` to inject the value of an environment variable
at runtime.

### [Injecting Values Based on Expressions](#injecting-values-based-on-expressions "Permalink to this headline")

Sometimes the value to inject is not static but the result of some logic. For
these cases, the service container supports *expressions*, written with the
[ExpressionLanguage syntax](current__reference__formats__expression_language.md).

Suppose that the `App\Mail\MailerConfiguration` service has a
`getMailerMethod()` method that returns a string like `sendmail` based on
some configuration and that you want to pass the result of this method as a
constructor argument to another service:

Attributes

YAML

PHP

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
```

```
// src/Mailer.php
namespace App;

use Symfony\Component\DependencyInjection\Attribute\Autowire;

class Mailer
{
    public function __construct(
        // because of the escaping applied by PHP, you must add 4 backslashes for each original backslash
        #[Autowire(expression: 'service("App\\\\Mail\\\\MailerConfiguration").getMailerMethod()')]
        private string $mailerMethod,
    ) {
    }

    // ...
}
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
```

```
# config/services.yaml
services:
    # ...

    App\Mailer:
        # the '@=' prefix is required when using expressions for arguments in YAML files
        arguments: ['@=service("App\\Mail\\MailerConfiguration").getMailerMethod()']
        # when using double-quoted strings, the backslash needs to be escaped twice (see https://yaml.org/spec/1.2/spec.html#id2787109)
        # arguments: ["@=service('App\\\\Mail\\\\MailerConfiguration').getMailerMethod()"]
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
14
15
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Mailer;

return App::config([
    'services' => [
        // ...

        Mailer::class => [
            // because of the escaping applied by PHP, you must add 4 backslashes for each original backslash
            'arguments' => [expr("service('App\\\\Mail\\\\MailerConfiguration').getMailerMethod()")],
        ],
    ],
]);
```

In this context, you have access to 3 functions:

`service`
:   Returns a given service (see the example above).

`parameter`
:   Returns a specific parameter value (syntax is like `service`).

`env`
:   Returns the value of an env variable.

You also have access to the [Container](https://github.com/symfony/symfony/blob/8.1/src/Symfony/Component/DependencyInjection/Container.php "Symfony\Component\DependencyInjection\Container")
via a `container` variable, which allows you to write more elaborated
expressions like `container.hasParameter('some_param') ? parameter('some_param') : 'default_value'`.

Expressions can be used in `arguments`, `properties`, as arguments with
`configurator`, as arguments to `calls` (method calls) and in
`factories` ([service factories](current__service_container__factories.md)).

## [Choose a Specific Service](#choose-a-specific-service "Permalink to this headline")

The `MessageGenerator` service created earlier requires a `LoggerInterface` argument:

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
// src/Service/MessageGenerator.php
namespace App\Service;

use Psr\Log\LoggerInterface;

class MessageGenerator
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }
    // ...
}
```

However, there are *multiple* services in the container that implement `LoggerInterface`,
such as `logger`, `monolog.logger.request`, `monolog.logger.php`, etc. How
does the container know which one to use?

In these situations, the container is usually configured to automatically choose
one of the services: `logger` in this case (read more about why in [Defining Service Dependencies Automatically (Autowiring)](current__service_container__autowiring.md#service-autowiring-alias)).
But, you can control this and pass in a different logger:

Attributes

YAML

PHP

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
```

```
// src/Service/MessageGenerator.php
namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class MessageGenerator
{
    public function __construct(
        #[Autowire(service: 'monolog.logger.request')]
        private LoggerInterface $logger,
    ) {
    }
    // ...
}
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
```

```
# config/services.yaml
services:
    # ... same code as before

    # explicitly configure the service
    App\Service\MessageGenerator:
        arguments:
            # the '@' symbol is important: that's what tells the container
            # you want to pass the *service* whose id is 'monolog.logger.request',
            # and not just the *string* 'monolog.logger.request'
            $logger: '@monolog.logger.request'
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
14
15
16
17
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\MessageGenerator;

return App::config([
    'services' => [
        // ... same code as before

        // explicitly configure the service
        MessageGenerator::class => [
            'arguments' => [
                '$logger' => service('monolog.logger.request'),
            ],
        ],
    ],
]);
```

This tells the container that the `$logger` argument to `__construct` should use
the service whose id is `monolog.logger.request`.

Tip

If you need to choose between multiple implementations of the same type
across your application, you can use
[named autowiring aliases](current__service_container__autowiring.md#autowiring-multiple-implementations-same-type)
instead of manually wiring each injection point.

For a list of possible logger services that can be used with autowiring, run:

```
1
```

```
$ php bin/console debug:autowiring logger
```

## [Explicitly Configuring Services and Arguments](#explicitly-configuring-services-and-arguments "Permalink to this headline")

[Loading services automatically](current__service_container.md#service-container-services-load-example)
and [autowiring](current__service_container.md#services-autowire) are optional. And even if you use them,
there may be some cases where you want to manually wire a service. For example,
suppose that you want to register two services for the `SiteUpdater` class,
each with a different admin email. In this case, each needs to have a unique
service id:

YAML

PHP

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
18
19
20
21
22
23
24
```

```
# config/services.yaml
services:
    # ...

    # this is the service's id
    site_updater.superadmin:
        class: App\Service\SiteUpdater
        # you CAN still use autowiring here, but this example shows what it looks like without
        autowire: false
        # manually wire all arguments
        arguments:
            - '@mailer'
            - 'superadmin@example.com'

    site_updater.normal_users:
        class: App\Service\SiteUpdater
        autowire: false
        arguments:
            - '@mailer'
            - 'contact@example.com'

    # Create an alias, so that, by default, if you type-hint SiteUpdater,
    # the site_updater.superadmin will be used
    App\Service\SiteUpdater: '@site_updater.superadmin'
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
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\SiteUpdater;

return App::config([
    'services' => [
        // ...

        // site_updater.superadmin is the service's id
        'site_updater.superadmin' => [
            'class' => SiteUpdater::class,
            // you CAN still use autowiring here, but this example shows what it looks like without
            'autowire' => false,
            // manually wire all arguments
            'arguments' => [
                service('mailer'),
                'superadmin@example.com',
            ],
        ],
        'site_updater.normal_users' => [
            'class' => SiteUpdater::class,
            'autowire' => false,
            'arguments' => [
                service('mailer'),
                'contact@example.com',
            ],
        ],

        // create an alias, so that, by default, if you type-hint SiteUpdater,
        // the site_updater.superadmin will be used
        SiteUpdater::class => service('site_updater.superadmin'),
    ],
]);
```

In this case, *two* services are registered: `site_updater.superadmin`
and `site_updater.normal_users`. Thanks to the alias, if you type-hint
`SiteUpdater` the first (`site_updater.superadmin`) will be passed.
Read more about aliases in [the autowiring article](current__service_container__autowiring.md#service-autowiring-alias).

If you want to pass the second, you'll need to [manually wire the service](current__service_container.md#services-wire-specific-service)
or to create a named [autowiring alias](current__service_container__autowiring.md#autowiring-alias).

Warning

If you do *not* create the alias and are [loading all services from src/](current__service_container.md#service-container-services-load-example),
then *three* services have been created (the automatic service + your two services)
and the automatically loaded service will be passed, by default, when you type-hint
`SiteUpdater`. That's why creating the alias is a good idea.

## [Importing Configuration with `imports`](#importing-configuration-with-imports "Permalink to this headline")

By default, service configuration lives in `config/services.yaml`. But if that
file becomes large, you're free to organize the configuration into multiple
files. Suppose you decided to move some configuration to a new file:

YAML

PHP

```
1
2
3
4
5
6
```

```
# config/services/mailer.yaml
parameters:
    # ... some parameters

services:
    # ... some services
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
```

```
// config/services/mailer.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'parameters' => [
        // ... some parameters
    ],
    'services' => [
        // ... some services
    ],
]);
```

To import this file, use the `imports` key from any other file and pass either
a relative or absolute path to the imported file:

YAML

PHP

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
```

```
# config/services.yaml
imports:
    - { resource: services/mailer.yaml }
    # if you want to import a whole directory:
    - { resource: services/ }
services:
    _defaults:
        autowire: true
        autoconfigure: true

    App\:
        resource: '../src/'

    # ...
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
14
15
16
17
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'imports' => [
        ['resource' => 'services/mailer.php'],
        // if you want to import a whole directory:
        ['resource' => 'services/'],
    ],
    'services' => [
        'App\\' => [
            'resource' => '../src/',
        ],

        // ...
    ],
]);
```

When importing a directory or using glob patterns, you can use the `exclude`
option to skip specific files or patterns:

YAML

PHP

```
1
2
3
```

```
# config/services.yaml
imports:
    - { resource: services/, exclude: ['services/legacy_*.yaml'] }
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
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'imports' => [
        ['resource' => 'services/', 'exclude' => ['services/legacy_*.php']],
    ],
]);
```

8.1

The `exclude` option for `imports` was introduced in Symfony 8.1.

When loading a configuration file, Symfony first processes all imported files in
the order they are listed under the `imports` key. After all imports are processed,
it then processes the parameters and services defined directly in the current file.
In practice, this means that **later definitions override earlier ones**.

For example, if you use the [default services.yaml configuration](current__service_container.md#service-container-services-load-example)
as in the above example, your main `config/services.yaml` file uses the `App\`
namespace to auto-discover services and loads them after all imported files.
If an imported file (e.g. `config/services/mailer.yaml`) defines a service that
is also auto-discovered, the definition from `services.yaml` will take precedence.

To make sure your specific service definitions are not overridden by auto-discovery,
consider one of the following strategies:

1. [Exclude services from auto-discovery](current__service_container.md#import-exclude-services-from-auto-discovery)
2. [Override services in the same file](current__service_container.md#import-override-services-in-the-same-file)
3. [Control import order](current__service_container.md#import-control-import-order)

### [Exclude Services from Auto-Discovery](#exclude-services-from-auto-discovery "Permalink to this headline")

Adjust the `App\` definition to use [the exclude option](current__service_container.md#services-exclude).
This prevents Symfony from auto-registering classes that are defined manually elsewhere:

YAML

PHP

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
```

```
# config/services.yaml
imports:
    - { resource: services/mailer.yaml }
    # ... other imports

services:
    _defaults:
        autowire: true
        autoconfigure: true

    App\:
        resource: '../src/'
        exclude:
            - '../src/Mailer/'
            - '../src/SpecificClass.php'
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
14
15
16
17
18
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'imports' => [
        ['resource' => 'services/mailer.php'],
        // ... other imports
    ],
    'services' => [
        'App\\' => [
            'resource' => '../src/',
            'exclude' => [
                '../src/Mailer/',
                '../src/SpecificClass.php',
            ],
        ],
    ],
]);
```

### [Override Services in the Same File](#override-services-in-the-same-file "Permalink to this headline")

You can define specific services after the `App\` auto-discovery block in the
same file. These later definitions will override the auto-registered ones:

YAML

PHP

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
# config/services.yaml
services:
    _defaults:
        autowire: true
        autoconfigure: true

    App\:
        resource: '../src/'

    App\Mailer\MyMailer:
        arguments: ['%env(MAILER_DSN)%']
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
14
15
16
17
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Mailer\MyMailer;

return App::config([
    'services' => [
        'App\\' => [
            'resource' => '../src/',
        ],
        MyMailer::class => [
            'arguments' => [
                env('MAILER_DSN'),
            ],
        ],
    ],
]);
```

### [Control the Import Order](#control-the-import-order "Permalink to this headline")

Move the `App\` auto-discovery config to a separate file and import it
before more specific service files. This way, specific service definitions
can override the auto-discovered ones.

YAML

PHP

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
18
19
20
21
22
23
24
25
```

```
# config/services/autodiscovery.yaml
services:
    _defaults:
        autowire: true
        autoconfigure: true

    App\:
        resource: '../../src/'
        exclude:
            - '../../src/Mailer/'

# config/services/mailer.yaml
services:
    App\Mailer\SpecificMailer:
        # ... custom configuration

# config/services.yaml
imports:
    - { resource: services/autodiscovery.yaml }
    - { resource: services/mailer.yaml }
    - { resource: services/ }

services:
    # definitions here override anything from the imports above
    # consider keeping most definitions inside imported files
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
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
```

```
// config/services/autodiscovery.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        'App\\' => [
            'resource' => '../../src/',
            'exclude' => [
                '../../src/Mailer/',
            ],
        ],
    ],
]);

// config/services/mailer.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'services' => [
        App\Mailer\SpecificMailer::class => [
            // ... custom configuration
        ],
    ],
]);

// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'imports' => [
        ['resource' => 'services/autodiscovery.php'],
        ['resource' => 'services/mailer.php'],
        ['resource' => 'services/'],
    ],
    'services' => [
        // definitions here override anything from the imports above
        // consider keeping most definitions inside imported files
    ],
]);
```

Note

Due to the way in which parameters are resolved, you cannot use them
to build paths in imports dynamically. This means that something like
**the following does not work:**

YAML

PHP

```
1
2
3
```

```
# config/services.yaml
imports:
    - { resource: '%kernel.project_dir%/somefile.yaml' }
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
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return [
    'imports' => [
        ['resource => '%kernel.project_dir%/somefile.yaml'],
    ],
];
```

### [Importing Configuration via Container Extensions](#importing-configuration-via-container-extensions "Permalink to this headline")

Third-party bundle container configuration, including Symfony core services,
are usually loaded using another method: a [container extension](current__bundles__extension.md).

Internally, each bundle defines its services in files like you've seen so far.
However, these files aren't imported using the `imports` directive. Instead, bundles
use a *dependency injection extension* to load the files automatically. As soon
as you enable a bundle, its extension is called, which is able to load service
configuration files.

In fact, each configuration file in `config/packages/` is passed to the
extension of its related bundle (e.g. `FrameworkBundle` or `TwigBundle`)
and used to configure those services further.

## [Conditional Service Registration](#conditional-service-registration "Permalink to this headline")

Sometimes a service must be registered only in certain scenarios. Currently,
the only supported condition is the [configuration environment](current__configuration.md#configuration-environments);
for example, to register a service only in the `dev` environment:

Attributes

YAML

PHP

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
18
```

```
use Symfony\Component\DependencyInjection\Attribute\When;

// SomeClass is only registered in the "dev" environment

#[When(env: 'dev')]
class SomeClass
{
    // ...
}

// you can also apply more than one When attribute to the same class

#[When(env: 'dev')]
#[When(env: 'test')]
class AnotherClass
{
    // ...
}
```

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
# config/services.yaml
services:
    App\Service\SomeClass: ~

when@dev:
    services:
        App\Service\AnotherClass: ~
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
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set(App\Service\SomeClass::class);

    if ('dev' === $container->env()) {
        $services->set(App\Service\AnotherClass::class);
    }
};
```

Warning

The `_defaults` section applies only to services defined in the same
`services` block. Each `when@<env>` block has its own scope and does
not inherit `_defaults` from the main `services` section. Redefine
`_defaults` in every `when@<env>` block where you need it:

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
# config/services.yaml
services:
    _defaults:
        autowire: true
        autoconfigure: true
    # ...

when@prod:
    services:
        _defaults:
            autowire: true
            autoconfigure: true
        # ...
```

If you want to exclude a service from being registered in a specific
environment, you can use the `#[WhenNot]` attribute:

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
18
```

```
use Symfony\Component\DependencyInjection\Attribute\WhenNot;

// SomeClass is registered in all environments except "dev"

#[WhenNot(env: 'dev')]
class SomeClass
{
    // ...
}

// you can apply more than one WhenNot attribute to the same class

#[WhenNot(env: 'dev')]
#[WhenNot(env: 'test')]
class AnotherClass
{
    // ...
}
```

## [Public Versus Private Services](#public-versus-private-services "Permalink to this headline")

In all the examples of this article, services are used via dependency
injection: they are passed as arguments to the services and controllers that
need them. But there is another way of getting services: the container is
itself a PHP object, so code that has access to it can ask for any service
directly using `$container->get('service_id')`.

Fetching services like this is **strongly discouraged** in your own code: it hides
the real dependencies of your classes and it removes most of the benefits of
dependency injection explained at the beginning of this article. It only makes
sense at the *entry point* of an application (that's why the
[standalone usage section](current__service_container.md#service-container-standalone) uses it) and in
some tests.

That's why every service defined is **private by default**. When a service is
private, you cannot access it directly from the container using
`$container->get()`; the only way to use it is dependency injection. As a
best practice, you should keep all your services private.

Private services are special because they allow the container to optimize whether
and how they are instantiated. This increases the container's performance. It also
gives you better errors: if you try to reference a non-existent service, you will
get a clear error when you refresh any page, even if the problematic code would
not have run on that page.

Note

A private service can still be given an additional name (an *alias*) or be
made accessible through a public alias. Read more about aliases in
[the autowiring article](current__service_container__autowiring.md#services-alias).

Tip

A common reason to make services public is to fetch some of them by their
id at runtime (e.g. to pick one service or another depending on some
value). Instead of making those services public, use a
[service locator](current__service_container__subscribers_locators.md): it provides
direct access to a predefined set of services while keeping them private.

If none of this fits your use case and you still need to make a service
public, override the `public` setting:

Attributes

YAML

PHP

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
```

```
// src/Service/PublicService.php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[Autoconfigure(public: true)]
class PublicService
{
    // ...
}
```

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
# config/services.yaml
services:
    # ... same code as before

    # explicitly configure the service
    App\Service\PublicService:
        public: true
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
14
15
```

```
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Service\PublicService;

return App::config([
    'services' => [
        // ... same code as before

        // explicitly configure the service
        PublicService::class => [
            'public' => true,
        ],
    ],
]);
```

## [Fetching the Request in a Service](#fetching-the-request-in-a-service "Permalink to this headline")

Whenever you need to access the current [request](current__components__http_foundation.md#component-http-foundation-request)
in a service, inject the `RequestStack` service and get the request from it:

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
18
19
20
```

```
// src/Service/NewsletterSender.php
namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class NewsletterSender
{
    public function __construct(
        private RequestStack $requestStack,
    ) {
    }

    public function anyMethod(): void
    {
        $request = $this->requestStack->getCurrentRequest();
        // ... do something with the request
    }

    // ...
}
```

Tip

In a controller you can get the `Request` object by having it passed in as an
argument to your action method. See [Controller](current__controller.md#controller-request-argument) for
details.

## [Debugging and Linting the Container](#debugging-and-linting-the-container "Permalink to this headline")

The following commands show all the information stored in the container,
which is useful to debug dependency injection issues:

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
18
19
20
21
22
23
```

```
# shows all services registered in the container (public and private)
# and the PHP class associated to each of them
$ php bin/console debug:container

# add this option to also display "hidden services" (those whose ID starts with a dot)
$ php bin/console debug:container --show-hidden

# shows detailed information about a single service, including its
# arguments, tags and the rest of its configuration
$ php bin/console debug:container App\Service\Mailer

# shows all services tagged with the given tag
$ php bin/console debug:container --tag=kernel.event_listener

# if you pass an incomplete tag name, the command shows an
# interactive list of all the matching tags
$ php bin/console debug:container --tag=kernel

# shows all the types you can use as type-hints when autowiring
$ php bin/console debug:autowiring

# pass a search term to filter the results
$ php bin/console debug:autowiring logger
```

### [Linting Service Definitions](#linting-service-definitions "Permalink to this headline")

The `lint:container` command performs additional checks to ensure the container
is properly configured. It is useful to run this command before deploying your
application to production (e.g. in your continuous integration server):

```
1
2
3
4
5
```

```
$ php bin/console lint:container

# optionally, you can force the resolution of environment variables;
# the command will fail if any of those environment variables are missing
$ php bin/console lint:container --resolve-env-vars
```

Performing those checks whenever the container is compiled can hurt performance.
That's why they are implemented in [compiler passes](current__service_container__compiler_passes.md)
called `CheckTypeDeclarationsPass` and `CheckAliasValidityPass`, which are
disabled by default and enabled only when executing the `lint:container` command.
If you don't mind the performance loss, you can enable these compiler passes in
your application.

## [Using the Container in Standalone PHP Applications](#using-the-container-in-standalone-php-applications "Permalink to this headline")

The service container and all the features shown in this article are provided
by the DependencyInjection component, which implements a [PSR-11](https://www.php-fig.org/psr/psr-11/) compatible
container. In applications not based on the Symfony framework, first install
the component:

```
1
```

```
$ composer require symfony/dependency-injection
```

Note

If you install this component outside of a Symfony application, you must
require the `vendor/autoload.php` file in your code to enable the class
autoloading mechanism provided by Composer. Read
[this article](current__components__using_components.md) for more details.

### [Registering and Fetching Services](#registering-and-fetching-services "Permalink to this headline")

In standalone applications there is no `config/services.yaml` file and no
default configuration. Instead, you create the container and register the
services yourself using the `ContainerBuilder` class. Consider the
`MessageGenerator` and `FormatterInterface` classes shown in the
introduction of this article:

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
18
19
20
```

```
use App\Formatter\TextFormatter;
use App\Service\MessageGenerator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();

// register the formatter service
$container->register('app.text_formatter', TextFormatter::class);

// register the message generator and tell the container to inject the
// formatter service as the first constructor argument; the Reference class
// makes the container inject a service instead of the given string
$container->register('app.message_generator', MessageGenerator::class)
    ->addArgument(new Reference('app.text_formatter'));

// ask the container for the service: it creates the formatter, then the
// generator and finally injects the former into the latter
$messageGenerator = $container->get('app.message_generator');
$message = $messageGenerator->getHappyMessage();
```

The container also stores parameters that you can reuse in service definitions.
For example, if some services need to know the application locale:

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
```

```
use App\Service\MessageGenerator;
use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->setParameter('app.locale', 'es');

$container->register('app.message_generator', MessageGenerator::class)
    // the %...% syntax tells the container to inject the parameter value
    ->addArgument('%app.locale%');

// you can also work with parameters directly
// (parameter names are case-sensitive)
$container->hasParameter('app.locale');
$container->getParameter('app.locale');
```

Note

You can only set a parameter before the container is compiled, not at
runtime. Compiling is explained later in this section.

Besides constructor arguments, you can configure other types of injection,
such as calling setter methods (see [Types of Dependency Injection](current__service_container__injection_types.md)
for the available types):

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
use App\Service\MessageGenerator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();

$container->register('app.message_generator', MessageGenerator::class)
    ->addMethodCall('setLogger', [new Reference('logger')]);
```

### [Getting Services That Don't Exist](#getting-services-that-don-t-exist "Permalink to this headline")

By default, when you try to get a service that doesn't exist, you see an exception.
You can override this behavior by passing a second argument to the `get()`
method:

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
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

$container = new ContainerBuilder();

// ...

$messageGenerator = $container->get('app.message_generator', ContainerInterface::NULL_ON_INVALID_REFERENCE);
```

These are all the possible behaviors:

- `ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE`: throws an exception
  at compile time (this is the **default** behavior);
- `ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE`: throws an
  exception at runtime, when trying to access the missing service;
- `ContainerInterface::NULL_ON_INVALID_REFERENCE`: returns `null`;
- `ContainerInterface::IGNORE_ON_INVALID_REFERENCE`: ignores the wrapping
  command asking for the reference (for instance, ignore a setter if the service
  does not exist);
- `ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE`: ignores/returns
  `null` for uninitialized services or invalid references.

### [Setting Up the Container with Configuration Files](#setting-up-the-container-with-configuration-files "Permalink to this headline")

Besides defining the services in PHP as shown in the previous examples,
standalone applications can also use configuration files. To do this, you also
need to install [the Config component](current__components__config.md):

```
1
```

```
$ composer require symfony/config
```

Then, create a loader for the format of your configuration files and load them
into the container:

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
```

```
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$container = new ContainerBuilder();

// loading a YAML config file (this requires to also install the Yaml
// component: composer require symfony/yaml)
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yaml');

// loading a PHP config file
$loader = new PhpFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.php');
```

The contents of these configuration files use the same format shown in the
rest of this article. For example, this is how the previous service
definitions look in each format:

YAML

PHP

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
# services.yaml
parameters:
    app.locale: 'es'

services:
    app.text_formatter:
        class: App\Formatter\TextFormatter

    app.message_generator:
        class: App\Service\MessageGenerator
        arguments: ['@app.text_formatter']
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
14
15
16
17
18
19
20
```

```
// services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Formatter\TextFormatter;
use App\Service\MessageGenerator;

return App::config([
    'parameters' => [
        'app.locale' => 'es',
    ],
    'services' => [
        'app.text_formatter' => [
            'class' => TextFormatter::class,
        ],
        'app.message_generator' => [
            'class' => MessageGenerator::class,
            'arguments' => [service('app.text_formatter')],
        ],
    ],
]);
```

### [Compiling the Container and Best Practices](#compiling-the-container-and-best-practices "Permalink to this headline")

Before using the container, call the `compile()` method to resolve
parameters, optimize the service definitions and check their correctness:

```
1
2
3
4
```

```
// ...
$container->compile();

$messageGenerator = $container->get('app.message_generator');
```

The compilation process is also the extension point of the container: you can
register *compiler passes* that modify the service definitions before the
container is frozen. Read [Compiling and Extending the Container](current__service_container__compiler_passes.md) to learn
more about them.

Finally, while you can fetch services from the container directly, it is best
to minimize this. Fetch services from the container as few times as possible,
at the entry point of your application, and rely on constructor injection
everywhere else. Otherwise, your classes become coupled to the specific
container object, which makes them harder to reuse and to test.

### [Dumping the Compiled Container for Performance](#dumping-the-compiled-container-for-performance "Permalink to this headline")

Compiling the container on every request is slow. That's why Symfony
applications cache the compiled container in `var/cache/` and only compile
it again when the configuration changes. In standalone applications, get the
same result by dumping the compiled container to a PHP file with the
`PhpDumper` class and reusing that file in the following requests:

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
```

```
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

$file = __DIR__.'/cache/container.php';

if (file_exists($file)) {
    require_once $file;
    $container = new ProjectServiceContainer();
} else {
    $container = new ContainerBuilder();
    // ...
    $container->compile();

    $dumper = new PhpDumper($container);
    file_put_contents($file, $dumper->dump());
}
```

`ProjectServiceContainer` is the default name of the dumped container class;
you can change it with the `class` option of the `dump()` method.

Tip

The `file_put_contents()` function is not atomic, which can cause issues
in production environments with multiple concurrent requests. Use the
[dumpFile() method](current__components__filesystem.md#filesystem-dumpfile) from the
[Filesystem component](current__components__filesystem.md) or the `ConfigCache`
class shown in the following example.

The previous example never rebuilds the container, so you must delete the
cached file after any configuration change. Instead, use the `ConfigCache`
class from the [Config component](current__components__config.md) to rebuild the
cached container automatically. The container builder keeps track of all the
resources used to configure it (config files, extension classes, compiler
passes, etc.) and `ConfigCache` uses them to consider the cache stale
whenever any of those files change:

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
18
19
20
21
22
23
24
25
```

```
use Symfony\Component\Config\ConfigCache;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

// in debug mode, the cache is rebuilt whenever any config resource changes;
// when not in debug mode, the cached container is always used if it exists
$isDebug = true;

$file = __DIR__.'/cache/container.php';
$containerConfigCache = new ConfigCache($file, $isDebug);

if (!$containerConfigCache->isFresh()) {
    $container = new ContainerBuilder();
    // ...
    $container->compile();

    $dumper = new PhpDumper($container);
    $containerConfigCache->write(
        $dumper->dump(['class' => 'MyCachedContainer']),
        $container->getResources()
    );
}

require_once $file;
$container = new MyCachedContainer();
```

## [Learn more](#learn-more "Permalink to this headline")

- [Defining Service Dependencies Automatically (Autowiring)](current__service_container__autowiring.md)
- [Types of Dependency Injection](current__service_container__injection_types.md)
- [Service Tags](current__service_container__tags.md)
- [Service Subscribers & Locators](current__service_container__subscribers_locators.md)
- [Service Decoration](current__service_container__decoration.md)
- [Using a Factory to Create Services](current__service_container__factories.md)
- [Lazy Services](current__service_container__lazy_services.md)
- [Compiling and Extending the Container](current__service_container__compiler_passes.md)
- [Container Extensions](current__service_container__extensions.md)
- [Advanced Service Definition Options](current__service_container__advanced_definitions.md)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

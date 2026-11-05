# Spiral Framework: Cookbook - Console command validation

> **Fonte / Source:** https://spiral.dev/docs/cookbook-console-validation/current/en

---

Overview 

- [Table of Contents](readme__current__en.md)
- [About Framework](overview-spiral__current__en.md)
- [Design Approach](framework-design__current__en.md)
- [Application Lifecycle](framework-lifecycle__current__en.md)
- [Contributing](overview-contributing__current__en.md)
- [Versioning](overview-versioning__current__en.md)
- [License](license__current__en.md)

Getting started 

- [Installation](start-installation__current__en.md)
- [Long running](start-server__current__en.md)
- [Directory Structure](start-structure__current__en.md)
- [Configuration](start-configuration__current__en.md)
- [First HTTP controller](start-http-basics__current__en.md)
- [First CLI command](start-cli-basics__current__en.md)
- [First background job](start-queue-basics__current__en.md)
- [Deployment](start-deployment__current__en.md)

Framework 

- [Kernel and Environment](framework-kernel__current__en.md)
- [Bootloaders](framework-bootloaders__current__en.md)
- [Config Objects](framework-config__current__en.md)
- [Dispatchers](framework-dispatcher__current__en.md)
- [Interceptors](framework-interceptors__current__en.md)
- [Finalizers](framework-finalizers__current__en.md)

The Basics 

- [Database and ORM](basics-orm__current__en.md)
- [Sessions](basics-session__current__en.md)
- [Files and Directories](basics-files__current__en.md)
- [Cache](basics-cache__current__en.md)
- [Logging](basics-logging__current__en.md)
- [Errors handling](basics-errors__current__en.md)
- [Debugging](basics-debug__current__en.md)
- [Scaffolding](basics-scaffolding__current__en.md)
- [Prototyping](basics-prototype__current__en.md)

Container and DI 

- [Overview](container-overview__current__en.md)
- [Configuration](container-configuration__current__en.md)
- [Attributes](container-attributes__current__en.md)
- [Auto Wiring](container-auto-wiring__current__en.md)
- [IOC Scopes](container-scopes__current__en.md)
- [Injectors](container-injectors__current__en.md)

Advanced 

- [Static Memory](advanced-memory__current__en.md)
- [Attributes](advanced-attributes__current__en.md)
- [Application Metrics](advanced-prometheus-metrics__current__en.md)
- [Application Telemetry](advanced-telemetry__current__en.md)
- [Task Scheduling](advanced-scheduler__current__en.md)
- [Atomic Locks](advanced-locks__current__en.md)
- [Mailer](advanced-sendit__current__en.md)
- [Notifications](advanced-notifications__current__en.md)

HTTP 

- [Getting started](http-configuration__current__en.md)
- [Request Lifecycle](http-lifecycle__current__en.md)
- [Request and Response](http-request-response__current__en.md)
- [Routing](http-routing__current__en.md)
- [Middleware](http-middleware__current__en.md)
- [Cookies](http-cookies__current__en.md)
- [CSRF protection](http-csrf__current__en.md)
- [OpenAPI Documentation](http-openapi__current__en.md)
- [Error Pages](http-errors__current__en.md)
- [Interceptors](http-interceptors__current__en.md)

Request Validation 

- [Getting started](filters-configuration__current__en.md)
- [Filter Object](filters-filter__current__en.md)
- [Composite Filters](filters-composite__current__en.md)
- [Interceptors](filters-interceptors__current__en.md)
- [Migration from 2.x](filters-bridge__current__en.md)

Data grid 

- [Getting Started](data-grid-getting-started__current__en.md)
- [Installation](data-grid-installation__current__en.md)
- [Grid Schema](data-grid-grid-schema__current__en.md)
- [Input Sources](data-grid-input__current__en.md)
- [Filters](data-grid-filters__current__en.md)
- [Value Types](data-grid-values__current__en.md)
- [Value Accessors](data-grid-accessors__current__en.md)
- [Sorters](data-grid-sorters__current__en.md)
- [Pagination](data-grid-pagination__current__en.md)
- [Writers](data-grid-writers__current__en.md)

Security 

- [Data Encryption](security-encrypter__current__en.md)
- [Role Based Access Control](security-rbac__current__en.md)
- [User Authentication](security-authentication__current__en.md)

Validation 

- [Getting started](validation-factory__current__en.md)
- [Spiral Validator](validation-spiral__current__en.md)
- [Symfony Validator](validation-symfony__current__en.md)
- [Laravel Validator](validation-laravel__current__en.md)

Testing 

- [Getting Started](testing-start__current__en.md)
- [HTTP Tests](testing-http__current__en.md)
- [Storage Tests](testing-storage__current__en.md)
- [Queue Tests](testing-queue__current__en.md)
- [Mail Tests](testing-mail__current__en.md)
- [Events Tests](testing-event__current__en.md)
- [Database](testing-database__current__en.md)

Console Application 

- [Getting started](console-configuration__current__en.md)
- [User Commands](console-commands__current__en.md)
- [Command Sequences](console-sequences__current__en.md)
- [Interceptors](console-interceptors__current__en.md)

WebSockets 

- [Getting started](websockets-configuration__current__en.md)
- [Event handlers](websockets-services__current__en.md)
- [Broadcasting](websockets-broadcasting__current__en.md)
- [Centrifugo API](websockets-api__current__en.md)
- [Interceptors](websockets-interceptors__current__en.md)

Queue and Jobs 

- [Getting started](queue-configuration__current__en.md)
- [Job Handlers](queue-jobs__current__en.md)
- [RoadRunner integration](queue-roadrunner__current__en.md)
- [Interceptors](queue-interceptors__current__en.md)

Temporal 

- [Getting started](temporal-configuration__current__en.md)
- [Usage](temporal-usage__current__en.md)
- [Interceptors](temporal-interceptors__current__en.md)

GRPC 

- [Getting started](grpc-configuration__current__en.md)
- [Service Code](grpc-service__current__en.md)
- [Client SDK](grpc-client__current__en.md)
- [Interceptors](grpc-interceptors__current__en.md)

Components 

- [Discoverer](component-discoverer__current__en.md)
- [Code Generation](component-reactor__current__en.md)
- [Storage and Cloud Distribution](advanced-storage__current__en.md)
- [Static analysis](advanced-tokenizer__current__en.md)
- [Serializer](advanced-serializer__current__en.md)
- [Internalization](advanced-i18n__current__en.md)
- [Events](advanced-events__current__en.md)

Views and templating 

- [Getting started](views-configuration__current__en.md)
- [Basics](views-basics__current__en.md)
- [Plain PHP](views-plain__current__en.md)
- [Twig templating](views-twig__current__en.md)
- [Stempler templating](views-stempler__current__en.md)

Cookbook 

- [Quick start](cookbook-quick-start__current__en.md)
- [Custom Dispatcher](cookbook-custom-dispatcher__current__en.md)
- [Authentication based on JWT](cookbook-user-authentication__current__en.md)
- [Console command validation](cookbook-console-validation__current__en.md)
- [Custom HTTP request handler](cookbook-psr-15__current__en.md)
- [Realtime chat application](cookbook-simple-chat__current__en.md)
- [Queue system](cookbook-simple-queue-system__current__en.md)
- [Migration from v2.x](cookbook-migration-from-v2__current__en.md)

Keeper 

- [Getting started](keeper-intro__current__en.md)
- [Bootloaders](keeper-bootloaders__current__en.md)
- [Routing](keeper-routing__current__en.md)
- [Sitemap and breadcrumbs](keeper-sitemap__current__en.md)
- [Views](keeper-views__current__en.md)
- [Components](keeper-components__current__en.md)

Revision: Wed, 28 Oct 2026 12:14:55 GMT

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/cookbook/console-validation.md)

# Cookbook — Console command input validation

- [Principles of work](#principles-of-work)
- [Console command](#console-command)
- [Input source](#input-source)
- [Attributes](#attributes)
  - [Argument](#argument)
  - [Option](#option)
- [Create filter](#create-filter)
- [Use filter](#use-filter)
- [Validation](#validation)

The `spiral/filters` is a powerful component for filtering and validating input data. It allows you to create filters
that can be used to map and validate input data from various sources, such as HTTP requests, gRPC requests and console
commands.

With filters, you can map console command input data into structured objects, and then use those objects to validate the
input data.

Using filters to validate console command input data can help to ensure that your commands are receiving clean, valid
data, and can also make it easier to manage your validation logic. Additionally, filters can be reused across different
console commands, which can help to reduce code duplication and make it easier to maintain your application.

## [#](#principles-of-work "Permalink")Principles of work

![Console Filters](https://user-images.githubusercontent.com/773481/211006701-170ee6b7-158c-4310-96bc-d675ff22aac2.png)
*Illustration of the process of filtering and validating input data in an Console application*

## [#](#console-command "Permalink")Console command

Let's imagine that we have a console command that accepts a user's name and email address as input:

php

```
namespace App\Command;

use Spiral\Console\Command;

final class UserRegister extends Command
{
    protected const SIGNATURE = <<<CMD
        user:register
        {username : User username}
        {email : User email address}
        {--a|admin : Mark as admin}
        {--s|send-verification-email : Send a verification email to the user}
CMD;

    public function perform(): int
    {
        // ...

        return self::SUCCESS;
    }
}
```

And we want to validate the input data before we use it to create a new user. We can do this by using filters.

## [#](#input-source "Permalink")Input source

In order to use the filters component with console commands, you will need to bind an instance of
`Spiral\Filters\InputInterface` to your console command's input.

Here is an example of how you might bind an instance of `InputInterface` to your console command's input:

php

```
namespace App\Application\Console;

use Spiral\Filters\InputInterface as FilterInputInterface;
use Symfony\Component\Console\Input\InputInterface;

final class ConsoleInput implements FilterInputInterface
{
    public function __construct(
        private readonly InputInterface $input
    ) {
    }

    public function withPrefix(string $prefix, bool $add = true): self
    {
        return $this;
    }

    public function getValue(string $source, string $name = null): mixed
    {
        return match ($source) {
            'argument' => $this->input->getArgument($name),
            'option' => $this->input->getOption($name),
            default => throw new \InvalidArgumentException('Invalid input source'),
        };
    }

    public function hasValue(string $source, string $name): bool
    {
        return match ($source) {
            'argument' => $this->input->hasArgument($name),
            'option' => $this->input->hasOption($name),
            default => throw new \InvalidArgumentException('Invalid input source'),
        };
    }
}
```

In order to use your `ConsoleInput` implementation with your console command, you will need to register it in a
bootloader.

Here is an example:

php

```
namespace App\Application\Bootloader;

use App\Application\Console\ConsoleInput;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Filters\InputInterface;

final class AppBootloader extends Bootloader
{
    protected const SINGLETONS = [
        InputInterface::class => ConsoleInput::class,
    ];
}
```

## [#](#attributes "Permalink")Attributes

The `spiral/filters` component uses attributes to define the rules that should be used to validate input data.

There are two types of attributes that can be used in our application to request data from console inout:

### [#](#argument "Permalink")Argument

The attribute represents an input field that is passed as an `argument` to a console command.

php

```
namespace App\Application\Console\Attribute;

use Spiral\Attributes\NamedArgumentConstructor;
use Spiral\Filters\Attribute\Input\AbstractInput;
use Spiral\Filters\InputInterface;

#[\Attribute(\Attribute::TARGET_PROPERTY), NamedArgumentConstructor]
final class Argument extends AbstractInput
{
    public function __construct(
        public readonly ?string $key = null,
    ) {
    }

    public function getValue(InputInterface $input, \ReflectionProperty $property): mixed
    {
        return $input->getValue('argument', $this->getKey($property));
    }

    public function getSchema(\ReflectionProperty $property): string
    {
        return 'argument:' . $this->getKey($property);
    }
}
```

### [#](#option "Permalink")Option

The attribute represents an input field that is passed as an `option` to a console command.

php

```
namespace App\Application\Console\Attribute;

use Spiral\Attributes\NamedArgumentConstructor;
use Spiral\Filters\Attribute\Input\AbstractInput;
use Spiral\Filters\InputInterface;

#[\Attribute(\Attribute::TARGET_PROPERTY), NamedArgumentConstructor]
final class Option extends AbstractInput
{
    public function __construct(
        public readonly ?string $key = null,
    ) {
    }

    public function getValue(InputInterface $input, \ReflectionProperty $property): mixed
    {
        return $input->getValue('option', $this->getKey($property));
    }

    public function getSchema(\ReflectionProperty $property): string
    {
        return 'option:' . $this->getKey($property);
    }
}
```

## [#](#create-filter "Permalink")Create filter

Now that we have defined the attributes that we will use to request data from console input, we can create a filter:

php

```
namespace App\Command;

use App\Application\Console\Attribute\Argument;
use App\Application\Console\Attribute\Option;
use Spiral\Filters\Model\Filter;

class UserRegisterFilter extends Filter
{
    #[Argument]
    public string $username;

    #[Argument]
    public string $email;

    #[Option]
    public bool $admin = false;

    #[Option(key: 'send-verification-email')]
    public bool $sendVerificationEmail = false;
}
```

## [#](#use-filter "Permalink")Use filter

Now that we have created a filter, we can use it to validate the input data that is passed to our console command:

php

```
namespace App\Command;

use Spiral\Console\Command;

final class UserRegister extends Command
{
    protected const SIGNATURE = <<<CMD
        user:register
        {username : User username}
        {email : User email address}
        {--a|admin : Mark as admin}
        {--s|send-verification-email : Send a verification email to the user}
CMD;

    public function perform(UserRegisterFilter $input): int
    {
        $this->writeln(\sprintf('Username: %s', $input->username));
        $this->writeln(\sprintf('Email: %s', $input->email));
        $this->writeln(\sprintf('Is admin: %s', $input->admin ? 'yes' : 'no'));

        // $user = new User(
        //     username: $filter->username,
        //     email: $filter->email,
        //    admin: $filter->admin
        // );

        // Store the user in the database...

        if ($input->sendVerificationEmail) {
            $this->writeln('Sending verification email...');

            // Send the verification email...
        }

        $this->writeln(\sprintf('User %s registered', $input->username));

        return self::SUCCESS;
    }
}
```

Now you can run the console command:

```
php app.php user:register john_smith john@site.com -as
```

## [#](#validation "Permalink")Validation

The `spiral/filters` component uses the `spiral/validation` component to validate the input data.

> **Note**  
> The component relies on [Validation](validation-factory__current__en.md) component, make sure to read it first.

In order to use validation, you will need to define the rules that should be used to validate the input data.

Here is an example:

php

```
use App\Application\Console\Attribute\Argument;
use App\Application\Console\Attribute\Option;
use Spiral\Filters\Model\Filter;
use Spiral\Filters\Model\FilterDefinitionInterface;
use Spiral\Filters\Model\HasFilterDefinition;
use Spiral\Validator\FilterDefinition;

class UserRegisterFilter extends Filter implements HasFilterDefinition
{
    #[Argument]
    public string $username;

    #[Argument]
    public string $email;

    #[Option]
    public bool $admin = false;

    #[Option(key: 'send-verification-email')]
    public bool $sendVerificationEmail = false;

    public function filterDefinition(): FilterDefinitionInterface
    {
        return new FilterDefinition([
            'username' => ['required', 'string', ['string::longer', 3], ['string::shorter', 32]],
            'email' => ['required', 'email'],
        ]);
    }
}
```

Now if you run the console command with invalid input data, you will get an error message:

```
php app.php user:register jh john
```

Something like this:

```
[Spiral\Filters\Exception\ValidationException]

The given data was invalid.
```

But the error message won't contain details about the validation errors. If you want to get the details, you will need
to create an interceptor for console commands that will handle the `Spiral\Filters\Exception\ValidationException`
exception and display detailed information about the validation errors:

php

```
namespace App\Command;

use Spiral\Console\Command;
use Spiral\Core\CoreInterceptorInterface;
use Spiral\Core\CoreInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HandleValidationExceptions implements CoreInterceptorInterface
{
    public function process(string $controller, string $action, array $parameters, CoreInterface $core): mixed
    {
        try {
            return $core->callAction($controller, $action, $parameters);
        } catch (\Spiral\Filters\Exception\ValidationException $e) {
            $output = $parameters['output'];
            \assert($output instanceof OutputInterface);

            $output->writeln('<fg=red>Validation errors:</>');
            foreach ($e->errors as $key => $error) {
                $output->writeln(\sprintf('<fg=red>%s: %s</>', $key, $error));
            }

            return Command::FAILURE;
        }
    }
}
```

And register the interceptor in `app\config\console.php`:

php

app\config\console.php

```
return [
    'interceptors' => [
        App\Command\HandleValidationExceptions::class,
        // ...
    ],
];
```

> **See more**  
> Read more about console interceptors in the [Console — Interceptors](console-interceptors__current__en.md) section.

That's it. Now if you run the console command with invalid input data:

```
php app.php user:register jh john -as
```

you will get an error message with details about the validation errors like this:

```
Validation errors:

username: Text must be longer or equal to 3.

email: Must be a valid email address.
```

← PREVIOUS
[Authentication based on JWT](cookbook-user-authentication__current__en.md)

NEXT →
[Custom HTTP request handler](cookbook-psr-15__current__en.md)

# The Symfony Framework Best Practices (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/best_practices.html

---

# The Symfony Framework Best Practices

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/best_practices.rst)

This article describes the **best practices for developing web applications with
Symfony** that fit the philosophy envisioned by the original Symfony creators.

If you don't agree with some of these recommendations, they might be a good
**starting point** that you can then **extend and fit to your specific needs**.
You can even ignore them completely and continue using your own best practices
and methodologies. Symfony is flexible enough to adapt to your needs.

This article assumes that you already have experience developing Symfony
applications. If you don't, first read the [Getting Started](current__setup.md)
section of the documentation.

Tip

Symfony provides a sample application called [Symfony Demo](https://github.com/symfony/demo) that follows
all these best practices, so you can experience them in practice.

## [Creating the Project](#creating-the-project "Permalink to this headline")

### [Use the Symfony Binary to Create Symfony Applications](#use-the-symfony-binary-to-create-symfony-applications "Permalink to this headline")

The Symfony binary is an executable command created on your machine when you
[download Symfony](https://symfony.com/download). It provides multiple utilities, including the simplest way
to create new Symfony applications:

```
1
```

```
$ symfony new my_project_directory
```

Internally, this Symfony binary command executes the needed [Composer](https://getcomposer.org/)
command to [create a new Symfony application](current__setup.md#creating-symfony-applications)
based on the current stable version.

### [Use the Default Directory Structure](#use-the-default-directory-structure "Permalink to this headline")

Unless your project follows a development practice that imposes a certain
directory structure, follow the default Symfony directory structure. It's flat,
self-explanatory and not coupled to Symfony:

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
```

```
your_project/
├─ assets/
├─ bin/
│  └─ console
├─ config/
│  ├─ packages/
│  ├─ routes/
│  └─ services.yaml
├─ migrations/
├─ public/
│  ├─ build/
│  └─ index.php
├─ src/
│  ├─ Kernel.php
│  ├─ Command/
│  ├─ Controller/
│  ├─ DataFixtures/
│  ├─ Entity/
│  ├─ EventSubscriber/
│  ├─ Form/
│  ├─ Repository/
│  ├─ Security/
│  └─ Twig/
├─ templates/
├─ tests/
├─ translations/
├─ var/
│  ├─ cache/
│  └─ log/
└─ vendor/
```

## [Configuration](#configuration "Permalink to this headline")

### [Use Environment Variables for Infrastructure Configuration](#use-environment-variables-for-infrastructure-configuration "Permalink to this headline")

The values of these options change from one machine to another (e.g. from your
development machine to the production server), but they don't modify the
application behavior.

[Use env vars in your project](current__configuration.md#config-env-vars) to define these options
and create multiple `.env` files to [configure env vars per environment](current__configuration.md#config-dot-env).

### [Use Secrets for Sensitive Information](#use-secrets-for-sensitive-information "Permalink to this headline")

When your application has sensitive configuration, like an API key, you should
store those securely via [Symfony's secrets management system](current__configuration__secrets.md).

### [Use Parameters for Application Configuration](#use-parameters-for-application-configuration "Permalink to this headline")

These are the options used to modify the application behavior, such as the sender
of email notifications, or the enabled [feature toggles](https://en.wikipedia.org/wiki/Feature_toggle). Their value doesn't
change per machine, so don't define them as environment variables.

Define these options as [parameters](current__configuration.md#configuration-parameters) in the
`config/services.yaml` file. You can override these options per
[environment](current__configuration.md#configuration-environments) in the `config/services_dev.yaml`
and `config/services_prod.yaml` files.

Unless the application configuration is reused multiple times and needs
rigid validation, do *not* use the [Config component](current__components__config.md)
to define the options.

### [Use Short and Prefixed Parameter Names](#use-short-and-prefixed-parameter-names "Permalink to this headline")

Consider using `app.` as the prefix of your [parameters](current__configuration.md#configuration-parameters)
to avoid collisions with Symfony and third-party bundles/libraries parameters.
Then, use only one or two words to describe the purpose of the parameter:

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
parameters:
    # don't do this: 'dir' is too generic, and it doesn't convey any meaning
    app.dir: '...'
    # do this: short but easy to understand names
    app.contents_dir: '...'
    # it's OK to use dots, underscores, dashes or nothing, but always
    # be consistent and use the same format for all the parameters
    app.dir.contents: '...'
    app.contents-dir: '...'
```

### [Use Constants to Define Options that Rarely Change](#use-constants-to-define-options-that-rarely-change "Permalink to this headline")

Configuration options like the number of items to display in some listing rarely
change. Instead of defining them as [configuration parameters](current__configuration.md#configuration-parameters),
define them as PHP constants in the related classes. Example:

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
// src/Entity/Post.php
namespace App\Entity;

class Post
{
    public const NUMBER_OF_ITEMS = 10;

    // ...
}
```

The main advantage of constants is that you can use them everywhere, including
Twig templates and Doctrine entities, whereas parameters are only available
from places with access to the [service container](current__service_container.md).

The only notable disadvantage of using constants for this kind of configuration
values is that it's complicated to redefine their values in your tests.

## [Business Logic](#business-logic "Permalink to this headline")

### [Don't Create any Bundle to Organize your Application Logic](#don-t-create-any-bundle-to-organize-your-application-logic "Permalink to this headline")

A [bundle](current__bundles.md) is meant to be a piece of software that can be reused
as a stand-alone component. Don't create bundles to organize your own internal
application logic: use PHP namespaces (under the `App\` namespace) to
structure your code instead.

If you need to reuse a feature across several of your projects, then create a
bundle for it (in a private repository; you don't need to make it public).

### [Use Autowiring to Automate the Configuration of Application Services](#use-autowiring-to-automate-the-configuration-of-application-services "Permalink to this headline")

[Service autowiring](current__service_container__autowiring.md) is a feature that
reads the type-hints on your constructor (or other methods) and automatically
passes the correct services to each method, making it unnecessary to configure
services explicitly and simplifying the application maintenance.

Use it in combination with [service autoconfiguration](current__service_container.md#services-autoconfigure)
to also add [service tags](current__service_container__tags.md) to the services
needing them, such as Twig extensions, event subscribers, etc.

### [Services Should be Private Whenever Possible](#services-should-be-private-whenever-possible "Permalink to this headline")

[Make services private](current__service_container.md#container-public) to prevent you from accessing
those services via `$container->get()`. Instead, you will need to use proper
dependency injection.

### [Configure your own Services with Minimal Configuration](#configure-your-own-services-with-minimal-configuration "Permalink to this headline")

If you use the [default services.yaml configuration](current__service_container.md#service-container-services-load-example),
most services are configured automatically thanks to [autowiring](current__service_container.md#services-autowire)
and [autoconfiguration](current__service_container.md#services-autoconfigure), so you rarely
need to configure them by hand. When some service configuration belongs next to
your code, use attributes such as [#[Autowire]](current__service_container__autowiring.md#autowire-attribute).

For the remaining manual service configuration, both YAML and PHP work well:
YAML is concise and friendly to newcomers, while PHP config adds type-safety and
IDE autocompletion. Pick one format and use it consistently across your project.

### [Use Attributes to Define the Doctrine Entity Mapping](#use-attributes-to-define-the-doctrine-entity-mapping "Permalink to this headline")

Doctrine entities are plain PHP objects that you store in some "database".
Doctrine only knows about your entities through the mapping metadata configured
for your model classes.

Doctrine supports several metadata formats, but it's recommended to use PHP
attributes because they are by far the most convenient and agile way of setting
up and looking for mapping information.

## [Controllers](#controllers "Permalink to this headline")

### [Make your Controller Extend the `AbstractController` Base Controller](#make-your-controller-extend-the-abstractcontroller-base-controller "Permalink to this headline")

Symfony provides a [base controller](current__controller.md#the-base-controller-classes-services)
which includes shortcuts for the most common needs such as rendering templates
or checking security permissions.

Extending your controllers from this base controller couples your application
to Symfony. Coupling is generally wrong, but it may be OK in this case because
controllers shouldn't contain any business logic. Controllers should contain
nothing more than a few lines of *glue-code*, so you are not coupling the
important parts of your application.

### [Use Attributes to Configure Routing, Caching, and Security](#use-attributes-to-configure-routing-caching-and-security "Permalink to this headline")

Using attributes for routing, caching, and security simplifies
configuration. You don't need to browse several files created with different
formats (YAML, PHP): all the configuration is just where you require it,
and it only uses one format.

### [Use Dependency Injection to Get Services](#use-dependency-injection-to-get-services "Permalink to this headline")

If you extend the base `AbstractController`, you can only get access to the most
common services (e.g. `twig`, `router`, `doctrine`, etc.), directly from the
container via `$this->container->get()`.
Instead, you must use dependency injection to fetch services by
[type-hinting action method arguments](current__controller.md#controller-accessing-services) or
constructor arguments.

### [Use Entity Value Resolvers If They Are Convenient](#use-entity-value-resolvers-if-they-are-convenient "Permalink to this headline")

If you're using [Doctrine](current__doctrine.md), then you can *optionally* use
the [EntityValueResolver](current__doctrine.md#doctrine-entity-value-resolver) to
automatically query for an entity and pass it as an argument to your
controller. It will also show a 404 page if no entity can be found.

If the logic to get an entity from a route variable is more complex, instead of
configuring the EntityValueResolver, it's better to make the Doctrine query
inside the controller (e.g. by calling a [Doctrine repository method](current__doctrine.md)).

## [Templates](#templates "Permalink to this headline")

### [Use Snake Case for Template Names and Variables](#use-snake-case-for-template-names-and-variables "Permalink to this headline")

Use lowercase snake\_case for template names, directories, and variables (e.g.
`user_profile` instead of `userProfile` and `product/edit_form.html.twig`
instead of `Product/EditForm.html.twig`).

### [Prefix Template Fragments with an Underscore](#prefix-template-fragments-with-an-underscore "Permalink to this headline")

Template fragments, also called *"partial templates"*, allow you to
[reuse template contents](current__templates.md#templates-reuse-contents). Prefix their names
with an underscore to better differentiate them from complete templates (e.g.
`_user_metadata.html.twig` or `_caution_message.html.twig`).

## [Forms](#forms "Permalink to this headline")

### [Define your Forms as PHP Classes](#define-your-forms-as-php-classes "Permalink to this headline")

Creating [forms in classes](current__forms.md#creating-forms-in-classes) allows reusing
them in different parts of the application. Besides, not creating forms in
controllers simplifies the code and maintenance of the controllers.

### [Add Form Buttons in Templates](#add-form-buttons-in-templates "Permalink to this headline")

Form classes should be agnostic to where they will be used. For example, the
button of a form used to both create and edit items should change from "Add new"
to "Save changes" depending on where it's used.

Instead of adding buttons in form classes or the controllers, it's recommended
to add buttons in the templates. This also improves the separation of concerns
because the button styling (CSS class and other attributes) is defined in the
template instead of in a PHP class.

However, if you create a [form with multiple submit buttons](current__forms.md#processing-forms-multiple-buttons)
you should define them in the controller instead of the template. Otherwise, you
won't be able to check which button was clicked when handling the form in the controller.

### [Define Validation Constraints on the Underlying Object](#define-validation-constraints-on-the-underlying-object "Permalink to this headline")

Attaching [validation constraints](current__reference__constraints.md) to form fields
instead of to the mapped object prevents the validation from being reused in
other forms or other places where the object is used.

### [Use a Single Action to Render and Process the Form](#use-a-single-action-to-render-and-process-the-form "Permalink to this headline")

[Rendering forms](current__forms.md#rendering-forms) and [processing forms](current__forms.md#processing-forms)
are two of the main tasks when handling forms. Both are too similar (most of the
time, almost identical), so it's much simpler to let a single controller action
handle both.

## [Internationalization](#internationalization "Permalink to this headline")

### [Use the XLIFF Format for Your Translation Files](#use-the-xliff-format-for-your-translation-files "Permalink to this headline")

Of all the translation formats supported by Symfony (PHP, Qt, `.po`, `.mo`,
JSON, CSV, INI, etc.), `XLIFF` and `gettext` have the best support in the tools used
by professional translators. And since it's based on XML, you can validate `XLIFF`
file contents as you write them.

Symfony also supports notes in XLIFF files, making them more user-friendly for
translators. In the end, good translations are all about context, and these
XLIFF notes allow you to define that context.

### [Use Keys for Translations Instead of Content Strings](#use-keys-for-translations-instead-of-content-strings "Permalink to this headline")

Using keys simplifies the management of the translation files because you can
change the original contents in templates, controllers, and services without
having to update all the translation files.

Keys should always describe their *purpose* and *not* their location. For
example, if a form has a field with the label "Username", then a nice key
would be `label.username`, *not* `edit_form.label.username`.

## [Security](#security "Permalink to this headline")

### [Define a Single Firewall](#define-a-single-firewall "Permalink to this headline")

Unless you have two legitimately different authentication systems and users
(e.g. form login for the main site and a token system for your API only), it's
recommended to have only one firewall to keep things simple.

### [Use the `auto` Password Hasher](#use-the-auto-password-hasher "Permalink to this headline")

The [auto password hasher](current__security__passwords.md#reference-security-encoder-auto) automatically
selects the best possible encoder/hasher depending on your PHP installation.
Currently, the default auto hasher is `bcrypt`.

### [Use Voters to Implement Fine-grained Security Restrictions](#use-voters-to-implement-fine-grained-security-restrictions "Permalink to this headline")

If your security logic is complex, you should create custom
[security voters](current__security__voters.md) instead of defining long expressions
inside the `#[Security]` attribute.

## [Web Assets](#web-assets "Permalink to this headline")

### [Use AssetMapper to Manage Web Assets](#use-assetmapper-to-manage-web-assets "Permalink to this headline")

Web assets are the CSS, JavaScript, and image files that make the frontend of
your site look and work great. [AssetMapper](current__frontend__asset_mapper.md) lets
you write modern JavaScript and CSS without the complexity of using a bundler
such as [Webpack](https://webpack.js.org/) (directly or via [Webpack Encore](current__frontend__encore__index.md)).

## [Tests](#tests "Permalink to this headline")

### [Smoke Test your URLs](#smoke-test-your-urls "Permalink to this headline")

In software engineering, [smoke testing](https://en.wikipedia.org/wiki/Smoke_testing_(software)) consists of *"preliminary testing to
reveal simple failures severe enough to reject a prospective software release"*.
Using [PHPUnit data providers](https://docs.phpunit.de/en/13.1/writing-tests-for-phpunit.html#data-providers) you can define a functional test that
checks that all application URLs load successfully:

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
// tests/ApplicationAvailabilityFunctionalTest.php
namespace App\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApplicationAvailabilityFunctionalTest extends WebTestCase
{
    #[DataProvider('urlProvider')]
    public function testPageIsSuccessful($url): void
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertResponseIsSuccessful();
    }

    public static function urlProvider(): \Generator
    {
        yield ['/'];
        yield ['/posts'];
        yield ['/post/fixture-post-1'];
        yield ['/blog/category/fixture-category'];
        yield ['/archives'];
        // ...
    }
}
```

Add this test while creating your application because it requires little effort
and checks that none of your pages returns an error. Later, you'll add more
specific tests for each page.

### [Hard-code URLs in a Functional Test](#hard-code-urls-in-a-functional-test "Permalink to this headline")

In Symfony applications, it's recommended to [generate URLs](current__routing.md#routing-generating-urls)
using routes to automatically update all links when a URL changes. However, if a
public URL changes, users won't be able to browse it unless you set up a
redirection to the new URL.

That's why it's recommended to use raw URLs in tests instead of generating them
from routes. Whenever a route changes, tests will fail, and you'll know that
you must set up a redirection.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

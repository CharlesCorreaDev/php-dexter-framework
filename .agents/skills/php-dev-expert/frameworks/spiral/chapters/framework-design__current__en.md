# Spiral Framework: Overview - Design Approach

> **Fonte / Source:** https://spiral.dev/docs/framework-design/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/framework/design.md)

# Framework — Design Approach

- [Principles](#principles)
  - [Avoid cross dependencies when possible](#avoid-cross-dependencies-when-possible)
  - [Prioritize composition over inheritance](#prioritize-composition-over-inheritance)
  - [Prefer smaller but richer interfaces](#prefer-smaller-but-richer-interfaces)
  - [Avoid magic](#avoid-magic)
- [Hybrid Runtime](#hybrid-runtime)

Spiral is a PHP framework that aims to simplify the development of complex web applications. One of the key principles
of the framework is to adhere to the principle of pragmatic design, which includes following the principles of Keep It
Simple, Stupid (KISS) and SOLID.

## [#](#principles "Permalink")Principles

The KISS principle states that software should be designed to be as simple as possible, with a minimal number of moving
parts. This makes the code easier to understand, test, and maintain. The SOLID principles, on the other hand, are a set
of five principles of object-oriented design that are intended to make software more maintainable and scalable.

### [#](#avoid-cross-dependencies-when-possible "Permalink")Avoid cross dependencies when possible

One of the core components of Spiral is the use of dependency injection, which helps to avoid cross-dependencies between
components and promotes loose coupling. This makes it easy to replace one component with another, without affecting the
rest of the system.

### [#](#prioritize-composition-over-inheritance "Permalink")Prioritize composition over inheritance

Another important aspect of Spiral is its focus on composition over inheritance. This approach emphasizes the use of
object composition to create new objects, rather than relying on class inheritance. This allows for greater flexibility
and makes it easier to change the behavior of an object at runtime.

### [#](#prefer-smaller-but-richer-interfaces "Permalink")Prefer smaller but richer interfaces

Spiral also prioritizes smaller, richer interfaces. This means that interfaces should be kept as simple as
possible, with a minimal number of methods. This makes it easier to implement the interface and increases the chances
that a class implementing the interface has the correct behavior.

### [#](#avoid-magic "Permalink")Avoid magic

Spiral also encourages developers to avoid "magic" in their code. This means that the code should be as
explicit as possible and avoid using hidden side effects or other tricky constructs. The aim is to make the code as easy
to understand as possible.

## [#](#hybrid-runtime "Permalink")Hybrid Runtime

The framework relies on the [RoadRunner](https://roadrunner.dev) application server to run some of its services. PHP
codebase is mostly centered around quick delivery of efficient business logic. The application server, Golang based, is
focused on efficiently solving infrastructure tasks.

![High Level Architecture Diagram](https://user-images.githubusercontent.com/773481/180764832-d91daec4-36fb-4651-ace3-64eac6f289c8.png)

> **Note**  
> Read about the application lifecycle [here](framework-lifecycle__current__en.md).

← PREVIOUS
[About Framework](overview-spiral__current__en.md)

NEXT →
[Application Lifecycle](framework-lifecycle__current__en.md)

# A | Yii3 Documentation

> **Fonte / Source:** https://yiisoft.github.io/docs/guide/glossary.html

---

# A [​](#a)

## action [​](#action)

Action is a callable, class, or class method that handles a matched route and returns a response. Read more in ["Actions"](yii3_guide__structure__action.md).

## alias [​](#alias)

Alias is a string used by Yii to refer to the class or directory such as `@app/vendor`. Read more in ["Aliases"](yii3_guide__concept__aliases.md).

## application [​](#application)

Application is an object that starts up, handles a request through configured middleware, and shuts down. Read more in ["Application"](yii3_guide__structure__application.md).

## asset [​](#asset)

Asset refers to a resource file. Typically, it contains JavaScript or CSS code but can be any static content accessed via HTTP. Read more in ["Assets"](yii3_guide__views__asset.md).

## asset bundle [​](#asset-bundle)

Asset bundle is a PHP class that declares a group of CSS, JavaScript, image, or font files that should be published and registered together. Read more in ["Asset Bundles"](yii3_guide__views__asset.md#asset-bundles).

## authentication [​](#authentication)

Authentication is the process of determining the identity of the current user. Read more in ["Authentication"](yii3_guide__security__authentication.md).

## authorization [​](#authorization)

Authorization is the process of checking whether an authenticated or anonymous user is allowed to perform an action. Read more in ["Authorization"](yii3_guide__security__authorization.md).

## autoloading [​](#autoloading)

Autoloading is the process of loading PHP classes automatically when they are first used. Read more in ["Class autoloading"](yii3_guide__concept__autoloading.md).

# B [​](#b)

## bootstrap [​](#bootstrap)

Bootstrap is application startup code that prepares services, configuration, and runtime state before request handling. Read more in ["Configuration"](yii3_guide__concept__configuration.md).

# C [​](#c)

## configuration [​](#configuration)

Configuration may refer either to the process of setting properties of an object or to a configuration file that stores settings for an object, or a class of objects. Read more in ["Configuration"](yii3_guide__concept__configuration.md).

## container [​](#container)

Container is an object that creates services, resolves their dependencies, and returns configured instances. Read more in ["DI container"](yii3_guide__concept__di-container.md#di-container).

## controller [​](#controller)

Controller is a class that groups action methods for related routes. Read more in ["Actions"](yii3_guide__structure__action.md).

## cookie [​](#cookie)

Cookie is a small piece of data stored by a browser and sent with later requests to the same site. Read more in ["Cookies"](yii3_guide__runtime__cookies.md).

## CSRF [​](#csrf)

CSRF means cross-site request forgery, an attack where another site tries to make a user's browser submit an unwanted request to your application. Read more in ["Avoiding CSRF"](yii3_guide__security__best-practices.md#avoiding-csrf).

# D [​](#d)

## DI [​](#di)

Dependency injection is a programming technique where an object receives its dependencies from the outside. Read more in ["Dependency injection and container"](yii3_guide__concept__di-container.md).

# E [​](#e)

## entry script [​](#entry-script)

Entry script is the first PHP script executed for a web or console application. Read more in ["Entry scripts"](yii3_guide__structure__entry-script.md).

## event [​](#event)

Event is an object that represents something that happened and can be passed to listeners. Read more in ["Events"](yii3_guide__concept__events.md).

# H [​](#h)

## handler [​](#handler)

Handler is callable code selected by routing or middleware to process a request and produce a response. Read more in ["Routing and URL generation"](yii3_guide__runtime__routing.md).

# I [​](#i)

## installation [​](#installation)

Installation is a process of preparing something to work either by following a readme file or by executing a specially prepared script. In the case of Yii, it's setting permissions and fulfilling software requirements.

# L [​](#l)

## layout [​](#layout)

Layout is a view template that wraps page-specific content with shared page structure. Read more in ["Working with layouts"](yii3_guide__views__view.md#working-with-layouts).

# M [​](#m)

## migration [​](#migration)

Migration is a versioned PHP class that applies or reverts a database schema or data change. Read more in ["Migrations"](yii3_guide__databases__db-migrations.md).

## middleware [​](#middleware)

Middleware is a processor in the request processing stack. Given a request, it may either produce a response or do some action and pass processing to the next middleware. Read more in ["Middleware"](yii3_guide__structure__middleware.md).

## model [​](#model)

Model is an object that represents application data and usually contains validation or business rules for that data. Read more in ["Working with forms"](yii3_guide__start__forms.md).

## module [​](#module)

The module is a namespace that groups some code based on a use-case. It's typically used within the main application and may contain any source code, define additional URL handlers or console commands.

# N [​](#n)

## namespace [​](#namespace)

Namespace refers to a [PHP language feature](https://www.php.net/manual/en/language.namespaces.php) to group multiple classes under a certain name.

# P [​](#p)

## package [​](#package)

A package usually refers to [Composer package](https://getcomposer.org/doc/). It's code ready for reuse and redistribution installable automatically via a package manager.

## parameter [​](#parameter)

Parameter is a configuration value that can be used by application or package config files. Read more in ["Parameters"](yii3_guide__concept__configuration.md#parameters).

# Q [​](#q)

## queue [​](#queue)

A queue is a data structure that processes items in first-in, first-out order. Yii has a [yiisoft/queue](https://github.com/yiisoft/queue) package.

# R [​](#r)

## request [​](#request)

Request is a PSR-7 object that represents an incoming HTTP message, including method, URI, headers, body, uploaded files, and attributes. Read more in ["Request"](yii3_guide__runtime__request.md).

## response [​](#response)

Response is a PSR-7 object that represents an outgoing HTTP message, including status code, headers, and body. Read more in ["Response"](yii3_guide__runtime__response.md).

## route [​](#route)

Route describes which request method and URL pattern should be handled by which action or middleware. Read more in ["Routing and URL generation"](yii3_guide__runtime__routing.md).

## rule [​](#rule)

The rule usually refers to a validation rule of the [yiisoft/validator](https://github.com/yiisoft/validator) package. It holds a set of parameters for checking if a data set is valid. "Rule handler" does the actual processing.

# S [​](#s)

## service [​](#service)

Service is a focused object that performs application work or provides infrastructure behavior and is usually stored in the DI container. Read more in ["Service components"](https://yiisoft.github.io/docs/cookbook/organizing-code/service.html).

## service provider [​](#service-provider)

Service provider is a class that registers related service definitions for the DI container. Read more in ["Service providers"](yii3_guide__concept__configuration.md#service-providers).

## session [​](#session)

Session is server-side storage associated with a browser across multiple requests. Read more in ["Sessions"](yii3_guide__runtime__sessions.md).

# T [​](#t)

## template [​](#template)

Template is a file used by a view or template engine to produce presentation output such as HTML. Read more in ["Views"](yii3_guide__views__view.md).

# V [​](#v)

## vendor [​](#vendor)

A vendor is an organization or individual developer providing code in the form of packages. It also may refer to [Composer's `vendor` directory](https://getcomposer.org/doc/).

## view [​](#view)

View is responsible for presenting data to end users, usually by executing a template with provided data. Read more in ["Views"](yii3_guide__views__view.md).

# W [​](#w)

## widget [​](#widget)

Widget is a reusable view component that renders a piece of user interface. Read more in ["Widgets"](yii3_guide__views__widget.md).

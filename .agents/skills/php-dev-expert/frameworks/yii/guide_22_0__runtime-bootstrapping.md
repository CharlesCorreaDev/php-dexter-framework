# Handling Requests: Bootstrapping | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-bootstrapping

---

0

# Bootstrapping [¶](#bootstrapping)

Bootstrapping refers to the process of preparing the environment before an application starts
to resolve and process an incoming request. Bootstrapping is done in two places:
the [entry script](guide_22_0__structure-entry-scripts.md) and the [application](guide_22_0__structure-applications.md).

In the [entry script](guide_22_0__structure-entry-scripts.md), class autoloaders for different libraries are
registered. This includes the Composer autoloader through its `autoload.php` file and the Yii
autoloader through its `Yii` class file. The entry script then loads the application
[configuration](guide_22_0__concept-configurations.md) and creates an [application](guide_22_0__structure-applications.md) instance.

In the constructor of the application, the following bootstrapping work is done:

1. [preInit()](https://www.yiiframework.com/doc/api/22.0/yii-base-application#preInit()-detail) is called, which configures some high priority
   application properties, such as [basePath](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$basePath-detail).
2. Register the [error handler](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$errorHandler-detail).
3. Initialize application properties using the given application configuration.
4. [init()](https://www.yiiframework.com/doc/api/22.0/yii-base-application#init()-detail) is called which in turn calls
   [bootstrap()](https://www.yiiframework.com/doc/api/22.0/yii-base-application#bootstrap()-detail) to run bootstrapping components.
   - Include the extension manifest file `vendor/yiisoft/extensions.php`.
   - Create and run [bootstrap components](guide_22_0__structure-extensions.md#bootstrapping-classes)
     declared by extensions.
   - Create and run [application components](guide_22_0__structure-application-components.md) and/or
     [modules](guide_22_0__structure-modules.md) that are declared in the application's
     [bootstrap property](guide_22_0__structure-applications.md#bootstrap).

Because the bootstrapping work has to be done before handling *every* request, it is very important
to keep this process light and optimize it as much as possible.

Try not to register too many bootstrapping components. A bootstrapping component is needed only
if it wants to participate the whole life cycle of requesting handling. For example, if a module
needs to register additional URL parsing rules, it should be listed in the
[bootstrap property](guide_22_0__structure-applications.md#bootstrap) so that the new URL rules can take effect
before they are used to resolve requests.

In production mode, enable a bytecode cache, such as [PHP OPcache](https://www.php.net/manual/en/intro.opcache.php) or [APC](https://www.php.net/manual/en/book.apcu.php), to minimize the time needed for including
and parsing PHP files.

Some large applications have very complex application [configurations](guide_22_0__concept-configurations.md)
which are divided into many smaller configuration files. If this is the case, consider caching
the whole configuration array and loading it directly from cache before creating the application instance
in the entry script.

[Request Handling Overview](guide_22_0__runtime-overview.md)

[Go to Top](#top)

[Routing and URL Creation](guide_22_0__runtime-routing.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-bootstrapping.md) !

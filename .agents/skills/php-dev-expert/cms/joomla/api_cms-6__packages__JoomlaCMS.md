# Joomla! CMS 6.0.x API » \JoomlaCMS

> **Fonte / Source:** https://api.joomla.org/cms-6/packages/JoomlaCMS.html

---

## Functions

### hash\_pbkdf2

Shim for missing hash\_pbkdf2

|  |  |
| --- | --- |
| package | Joomla CMS |

#### Arguments

algo
:   `string`Algorithm to use

password
:   `string`Plaintext password

salt
:   `string`Salt for the hash

count
:   `int`Number of iterations

length
:   `int`Length

rawOutput
:   `bool`Raw output

#### Response

`string`Hashed string

## Constants

### CRLF

Constant defining a line break

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### FTP\_ASCII

Stub of the native FTP\_ASCII constant if PHP is running without the ftp extension enabled

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### FTP\_AUTOASCII

Constant defining whether the FTP connection type will automatically determine ASCII support based on a file extension

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### FTP\_BINARY

Stub of the native FTP\_BINARY constant if PHP is running without the ftp extension enabled

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### FTP\_NATIVE

Constant defining whether native FTP support is available on the platform

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### JPATH\_COMPONENT

Defines the path to the active component for the request

Note this constant is application aware and is different for each application (site/admin).

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| deprecated | 4.3 will be removed in 6.0 Will be removed without replacement |
| package | Joomla CMS |

### JPATH\_COMPONENT\_ADMINISTRATOR

Defines the path to the admin element of the active component for the request

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| deprecated | 4.3 will be removed in 6.0 Will be removed without replacement |
| package | Joomla CMS |

### JPATH\_COMPONENT\_SITE

Defines the path to the site element of the active component for the request

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| deprecated | 4.3 will be removed in 6.0 Will be removed without replacement |
| package | Joomla CMS |

## Traits

### AssociationServiceTrait

Trait to implement AssociationServiceInterface

[« More »](api_cms-6__classes__Joomla-CMS-Association-AssociationServiceTrait.md)

### CacheControllerFactoryAwareTrait

Defines the trait for a CacheControllerFactoryInterface Aware Class.

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheControllerFactoryAwareTrait.md)

### CategoryServiceTrait

Trait for component categories service.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryServiceTrait.md)

### CoreButtonsTrait

Enhance Toolbar class to add more pre-defined methods.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-CoreButtonsTrait.md)

### CoreEventAware

Returns the most suitable event class for a Joomla core event name

[« More »](api_cms-6__classes__Joomla-CMS-Event-CoreEventAware.md)

### CurrentUserTrait

Trait for classes which require a user to work with.

[« More »](api_cms-6__classes__Joomla-CMS-User-CurrentUserTrait.md)

### DocumentAwareTrait

Defines the trait for a document aware class.

[« More »](api_cms-6__classes__Joomla-CMS-Document-DocumentAwareTrait.md)

### EventAware

Trait for application classes which dispatch events

[« More »](api_cms-6__classes__Joomla-CMS-Application-EventAware.md)

### ExtensionManagerTrait

Trait for classes which can load extensions

[« More »](api_cms-6__classes__Joomla-CMS-Extension-ExtensionManagerTrait.md)

### ExtensionNamespaceMapper

Trait for application classes which ensures the namespace mapper exists and includes it.

[« More »](api_cms-6__classes__Joomla-CMS-Application-ExtensionNamespaceMapper.md)

### FieldsServiceTrait

Trait for component fields service.

[« More »](api_cms-6__classes__Joomla-CMS-Fields-FieldsServiceTrait.md)

### FormBehaviorTrait

Trait which supports form behavior.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-FormBehaviorTrait.md)

### FormFactoryAwareTrait

Defines the trait for a FormFactoryInterface Aware Class.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormFactoryAwareTrait.md)

### HelperFactoryAwareTrait

Defines the trait for a HelperFactory Aware Class.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-HelperFactoryAwareTrait.md)

### HTMLRegistryAwareTrait

Defines the trait for a HTML Registry aware class.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-HTMLRegistryAwareTrait.md)

### IdentityAware

Trait for application classes which are identity (user) aware

[« More »](api_cms-6__classes__Joomla-CMS-Application-IdentityAware.md)

### ImmutableNodeTrait

Defines the trait for an Immutable Node Class.

[« More »](api_cms-6__classes__Joomla-CMS-Tree-ImmutableNodeTrait.md)

### InstallerScriptTrait

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerScriptTrait.md)

### LanguageAwareTrait

Defines the trait for a language aware class.

[« More »](api_cms-6__classes__Joomla-CMS-Language-LanguageAwareTrait.md)

### LegacyErrorHandlingTrait

Trait which contains the legacy methods that formerly were inherited from \Joomla\CMS\Object\CMSObject to set and
get errors in a class.

[« More »](api_cms-6__classes__Joomla-CMS-Object-LegacyErrorHandlingTrait.md)

### LegacyModelLoaderTrait

Trait which contains the legacy getInstance functionality

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-LegacyModelLoaderTrait.md)

### LegacyPropertyManagementTrait

Trait which contains the legacy methods that formerly were inherited from \Joomla\CMS\Object\CMSObject to set and
get properties of the current class.

[« More »](api_cms-6__classes__Joomla-CMS-Object-LegacyPropertyManagementTrait.md)

### MailerFactoryAwareTrait

Defines the trait for a MailerFactoryInterface aware class.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailerFactoryAwareTrait.md)

### MultiFactorAuthenticationHandler

Implements the code required for integrating with Joomla's Multi-factor Authentication.

Please keep in mind that Joomla's MFA, like any MFA method, is designed to be user-interactive.
Moreover, it's meant to be used in an HTML- and JavaScript-aware execution environment i.e. a web
browser, web view or similar.
If your application is designed to work non-interactively (e.g. a JSON API application) or
outside and HTML- and JavaScript-aware execution environments (e.g. CLI) you MUST NOT use this
trait. Authentication should be either implicit (e.g. CLI) or using sufficiently secure non-
interactive methods (tokens, certificates, ...).
Regarding the Joomla CMS itself, only the SiteApplication (frontend) and AdministratorApplication
(backend) applications use this trait because of this reason. The CLI application is implicitly
authorised at the highest level, whereas the ApiApplication encourages the use of tokens for
authentication.

[« More »](api_cms-6__classes__Joomla-CMS-Application-MultiFactorAuthenticationHandler.md)

### MVCFactoryAwareTrait

MVCFactory aware trait.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-MVCFactoryAwareTrait.md)

### MVCFactoryServiceTrait

Defines the trait for a MVC factory service class.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-MVCFactoryServiceTrait.md)

### NodeTrait

Defines the trait for a Node Interface Trait Class.

[« More »](api_cms-6__classes__Joomla-CMS-Tree-NodeTrait.md)

### ReshapeArgumentsAware

A Trait to reshape arguments maintaining b/c with legacy plugin events.

Old plugin event handlers expect positional arguments, not named arguments, since they are simple
PHP methods, e.g.
public onExample($foo, $bar, $baz).
Concrete Event classes, however, use named arguments which can be passed in any order. The
following two examples are equivalent:
$event1 = new ConcreteEventClass('onExample', ['foo' => 1, 'bar' => 2, 'baz' => 3];
$event2 = new ConcreteEventClass('onExample', ['bar' => 2, 'baz' => 3, 'foo' => 1,];
However, this means that the internal $arguments property of the event object holds the named
arguments in a \*\*different\*\* order in each case.
When the event handler is aware of the ConcreteEventClass it can retrieve named arguments and
all is good in the world. However, when you have a legacy plugin listener registered through
CMSPlugin::registerLegacyListener you have a major problem! The legacy listener is passing the
arguments \*\*positionally\*\*, in the order they were added to the Event object.
In the previous example, $event1 would work as expected because the foo, bar, and baz arguments
were given in the same order legacy listeners expected them. On the other hand, $event2 would
fail miserably because the call order would be $bar, $baz, $foo which is NOT what the legacy
listener expected.
The only way to fix that is to \*reshape the argument\* in the concrete event's constructor so that
the order of arguments is guaranteed to be the same as expected by legacy listeners. Moreover,
since Joomla is passing all arguments (except the 'result' argument) blindly to the legacy
listener we must ensure that a. all necessary arguments are set and b. any other named arguments
do NOT exist. Otherwise our legacy listeners would receive the wrong number of positional
arguments and break.
All this is achieved by the reshapeArguments() method in this trait which has to be called in the
constructor of the concrete event class.
This trait is marked as deprecated with a removal target of 7.0 because in Joomla 7 we will only
be using concrete event classes with named arguments, removing legacy listeners and their
positional arguments headaches.

[« More »](api_cms-6__classes__Joomla-CMS-Event-ReshapeArgumentsAware.md)

### ResultAware

This Trait partially implements the ResultAwareInterface for mutable and immutable events.

You must additionally implement the typeCheckResult method or use one of the ResultType\*Aware
traits in your Event handler.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultAware.md)

### ResultTypeArrayAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of an Array type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeArrayAware.md)

### ResultTypeBooleanAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of a Boolean type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeBooleanAware.md)

### ResultTypeFloatAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of a Float type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeFloatAware.md)

### ResultTypeIntegerAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of an Integer type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeIntegerAware.md)

### ResultTypeMixedAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of a any type. THIS IS A COP OUT! If you expect a nullable or union type it's best to implement
the typeCheckResult method yourself to check for the exact types you expect.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeMixedAware.md)

### ResultTypeNumericAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of a Numeric type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeNumericAware.md)

### ResultTypeObjectAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of an object type.
If you do not set a list of acceptable result classes any PHP object will satisfy this type check.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeObjectAware.md)

### ResultTypeStringAware

This Trait partially implements the ResultAwareInterface for type checking.

Events using this Trait (and the ResultAware trait) will expect event handlers to set results
of a String type.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultTypeStringAware.md)

### RouterServiceTrait

Trait to implement AssociationServiceInterface

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterServiceTrait.md)

### SchemaorgPluginTrait

Trait for component schemaorg plugins.

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgPluginTrait.md)

### SchemaorgPrepareDateTrait

Prepare dates to be valid for JSON-LD output

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgPrepareDateTrait.md)

### SchemaorgPrepareDurationTrait

Prepare duration to be valid for JSON-LD output

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgPrepareDurationTrait.md)

### SchemaorgPrepareImageTrait

Prepare images to be valid for JSON-LD output

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgPrepareImageTrait.md)

### SchemaorgServiceTrait

Trait for component schemaorg service.

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgServiceTrait.md)

### SiteRouterAwareTrait

Defines the trait for a Site Router Aware Class.

[« More »](api_cms-6__classes__Joomla-CMS-Router-SiteRouterAwareTrait.md)

### StateBehaviorTrait

Trait which supports state behavior

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-StateBehaviorTrait.md)

### TagApiSerializerTrait

Trait for implementing tags in an API Serializer

[« More »](api_cms-6__classes__Joomla-CMS-Tag-TagApiSerializerTrait.md)

### TaggableTableTrait

Defines the trait for a Taggable Table Class.

[« More »](api_cms-6__classes__Joomla-CMS-Tag-TaggableTableTrait.md)

### TagServiceTrait

Trait for component tags service.

[« More »](api_cms-6__classes__Joomla-CMS-Tag-TagServiceTrait.md)

### UserFactoryAwareTrait

Defines the trait for a UserFactoryInterface Aware Class.

[« More »](api_cms-6__classes__Joomla-CMS-User-UserFactoryAwareTrait.md)

### VersionableControllerTrait

Defines the trait for a Versionable Controller Class.

[« More »](api_cms-6__classes__Joomla-CMS-Versioning-VersionableControllerTrait.md)

### VersionableModelTrait

Defines the trait for a Versionable Model Class.

[« More »](api_cms-6__classes__Joomla-CMS-Versioning-VersionableModelTrait.md)

### WorkflowBehaviorTrait

Trait which supports state behavior

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-WorkflowBehaviorTrait.md)

### WorkflowPluginTrait

Trait for component workflow plugins.

[« More »](api_cms-6__classes__Joomla-CMS-Workflow-WorkflowPluginTrait.md)

### WorkflowServiceTrait

Trait for component workflow service.

[« More »](api_cms-6__classes__Joomla-CMS-Workflow-WorkflowServiceTrait.md)

## Interfaces

### AesInterface

Interface for AES encryption adapters

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-AES-AesInterface.md)

### AssociationExtensionInterface

Association Extension Interface for the helper classes

[« More »](api_cms-6__classes__Joomla-CMS-Association-AssociationExtensionInterface.md)

### AssociationServiceInterface

The association service.

[« More »](api_cms-6__classes__Joomla-CMS-Association-AssociationServiceInterface.md)

### BootableExtensionInterface

Interface which defines that an extension can be booted.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-BootableExtensionInterface.md)

### ButtonInterface

Editor button interface

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Button-ButtonInterface.md)

### ButtonsRegistryInterface

Buttons Registry class

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Button-ButtonsRegistryInterface.md)

### CacheControllerFactoryAwareInterface

Interface to be implemented by classes depending on a cache controller factory.

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheControllerFactoryAwareInterface.md)

### CacheControllerFactoryInterface

Interface defining a factory which can create CacheController objects

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheControllerFactoryInterface.md)

### CacheExceptionInterface

Exception interface defining a cache storage error

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Exception-CacheExceptionInterface.md)

### CaptchaProviderInterface

Captcha Provider Interface

[« More »](api_cms-6__classes__Joomla-CMS-Captcha-CaptchaProviderInterface.md)

### CategoryFactoryInterface

Category factory interface

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryFactoryInterface.md)

### CategoryInterface

The category interface.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryInterface.md)

### CategoryServiceInterface

Access to component specific categories.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryServiceInterface.md)

### CheckIfRehashNeededHandlerInterface

Interface for a password handler which supports checking if the password requires rehashing

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-CheckIfRehashNeededHandlerInterface.md)

### CMSApplicationInterface

Interface defining a Joomla! CMS Application class

[« More »](api_cms-6__classes__Joomla-CMS-Application-CMSApplicationInterface.md)

### CMSWebApplicationInterface

Interface defining a Joomla! CMS Application class for web applications.

[« More »](api_cms-6__classes__Joomla-CMS-Application-CMSWebApplicationInterface.md)

### ComponentDispatcherFactoryInterface

Component dispatcher factory interface

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ComponentDispatcherFactoryInterface.md)

### ComponentInterface

Access to component specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-ComponentInterface.md)

### ControllerInterface

Joomla Platform CMS Interface

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-ControllerInterface.md)

### CurrentUserInterface

Interface to be implemented by classes depending on a current user.

[« More »](api_cms-6__classes__Joomla-CMS-User-CurrentUserInterface.md)

### DatabaseModelInterface

Interface for a database model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-DatabaseModelInterface.md)

### DispatcherInterface

Joomla Platform CMS Dispatcher Interface

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-DispatcherInterface.md)

### DocumentAwareInterface

Interface to be implemented by classes depending on a document.

[« More »](api_cms-6__classes__Joomla-CMS-Document-DocumentAwareInterface.md)

### EditorProviderInterface

Editor provider interface

[« More »](api_cms-6__classes__Joomla-CMS-Editor-EditorProviderInterface.md)

### EditorsRegistryInterface

Interface for Editor Registry classes

[« More »](api_cms-6__classes__Joomla-CMS-Editor-EditorsRegistryInterface.md)

### EventAwareInterface

Interface defining application that can trigger Joomla 3.x style events

[« More »](api_cms-6__classes__Joomla-CMS-Application-EventAwareInterface.md)

### ExtensionManagerInterface

Loads extensions.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-ExtensionManagerInterface.md)

### FactoryInterface

Interface defining a factory which can create Document objects

[« More »](api_cms-6__classes__Joomla-CMS-Document-FactoryInterface.md)

### FieldsFormServiceInterface

The fields service.

[« More »](api_cms-6__classes__Joomla-CMS-Fields-FieldsFormServiceInterface.md)

### FieldsServiceInterface

The fields service.

[« More »](api_cms-6__classes__Joomla-CMS-Fields-FieldsServiceInterface.md)

### FinderEventInterface

Interface class for finder events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-FinderEventInterface.md)

### FormFactoryAwareInterface

Interface to be implemented by classes depending on a form factory.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormFactoryAwareInterface.md)

### FormFactoryInterface

Interface defining a factory which can create Form objects

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormFactoryInterface.md)

### FormFilterInterface

Interface for a filter class.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormFilterInterface.md)

### FormModelInterface

Interface for a form model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-FormModelInterface.md)

### HelperFactoryAwareInterface

Interface to be implemented by classes depending on a helper factory.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-HelperFactoryAwareInterface.md)

### HelperFactoryInterface

Factory to load helper classes.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-HelperFactoryInterface.md)

### ImmutableNodeInterface

Interface for an immutable node class

[« More »](api_cms-6__classes__Joomla-CMS-Tree-ImmutableNodeInterface.md)

### InstallerScriptInterface

Base install script interface for use by extensions providing helper methods for common behaviours.

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerScriptInterface.md)

### ItemModelInterface

Interface for an item model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-ItemModelInterface.md)

### LanguageAwareInterface

Interface to be implemented by classes depending on a language.

[« More »](api_cms-6__classes__Joomla-CMS-Language-LanguageAwareInterface.md)

### LanguageFactoryInterface

Interface defining a factory which can create language objects

[« More »](api_cms-6__classes__Joomla-CMS-Language-LanguageFactoryInterface.md)

### LayoutInterface

Interface to handle display layout

[« More »](api_cms-6__classes__Joomla-CMS-Layout-LayoutInterface.md)

### ListModelInterface

Interface for a list model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-ListModelInterface.md)

### MailerFactoryAwareInterface

Interface to be implemented by classes depending on a mailer factory.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailerFactoryAwareInterface.md)

### MailerFactoryInterface

Interface defining a factory which can create mailer objects.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailerFactoryInterface.md)

### MailerInterface

Provides a common interface to send emails with.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailerInterface.md)

### MenuFactoryInterface

Interface defining a factory which can create Menu objects

[« More »](api_cms-6__classes__Joomla-CMS-Menu-MenuFactoryInterface.md)

### ModelExceptionInterface

Interface that all exceptions stemming from the model should implement for processing by the controller.

It is expected that the controller should catch all exceptions that implement this interface and then
make a decision as to whether the exception can be recovered from or not.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-Exception-ModelExceptionInterface.md)

### ModelInterface

Interface for a base model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-ModelInterface.md)

### ModuleDispatcherFactoryInterface

Module dispatcher factory interface

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ModuleDispatcherFactoryInterface.md)

### ModuleInterface

Access to module specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-ModuleInterface.md)

### MVCFactoryInterface

Factory to create MVC objects.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-MVCFactoryInterface.md)

### MVCFactoryServiceInterface

Interface to be implemented by classes depending on a MVC factory.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-MVCFactoryServiceInterface.md)

### NamespaceParserInterface

Feed Namespace interface.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Parser-NamespaceParserInterface.md)

### NodeInterface

Interface for a node class

[« More »](api_cms-6__classes__Joomla-CMS-Tree-NodeInterface.md)

### PluginInterface

Access to plugin specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-PluginInterface.md)

### PreloadManagerInterface

Joomla! Preload Manager Interface

[« More »](api_cms-6__classes__Joomla-CMS-Document-PreloadManagerInterface.md)

### ProviderAwareAuthenticationPluginInterface

Interface class defining the necessary methods for an authentication plugin to be provider aware
Please note: might be deprecated with Joomla 4.2

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-ProviderAwareAuthenticationPluginInterface.md)

### ProxyInterface

Interface for Proxy classes

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ProxyInterface.md)

### RandValInterface

Interface RandValInterface

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-RandValInterface.md)

### ReadOnlyProxyInterface

Interface for read-only Proxy classes

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ReadOnlyProxyInterface.md)

### RendererInterface

Interface for a document renderer

[« More »](api_cms-6__classes__Joomla-CMS-Document-RendererInterface.md)

### RendererInterface

Interface defining the rendering engine for the error handling layer

[« More »](api_cms-6__classes__Joomla-CMS-Error-RendererInterface.md)

### ResultAwareInterface

Defines an Event which has an append-only array argument named 'result'.

This is used for Events whose handlers are expected to return something when called, similar to
how many plugin events worked in earlier versions of Joomla.
This interface is partially implemented by the ResultAware trait. The typeCheckResult method is
implemented by the various ResultType\*Aware traits. Your event needs to use both the ResultAware
trait and one of the ResultType\*Aware traits. For example, if your event returns boolean results
you need to use the ResultAware and ResultTypeBooleanAware traits in your event.

[« More »](api_cms-6__classes__Joomla-CMS-Event-Result-ResultAwareInterface.md)

### RouterFactoryInterface

Router factory interface

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterFactoryInterface.md)

### RouterInterface

Component routing interface

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterInterface.md)

### RouterServiceInterface

The component router service.

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterServiceInterface.md)

### RulesInterface

RouterRules interface for Joomla

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-Rules-RulesInterface.md)

### SchemaorgServiceInterface

The schemaorg service.

[« More »](api_cms-6__classes__Joomla-CMS-Schemaorg-SchemaorgServiceInterface.md)

### SiteRouterAwareInterface

Interface for site router aware classes.

[« More »](api_cms-6__classes__Joomla-CMS-Router-SiteRouterAwareInterface.md)

### StatefulModelInterface

Interface for a stateful model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-StatefulModelInterface.md)

### StringableInterface

A transitioning interface to PHP implicit \Stringable interface

[« More »](api_cms-6__classes__Joomla-CMS-String-StringableInterface.md)

### TableInterface

Table class interface.

[« More »](api_cms-6__classes__Joomla-CMS-Table-TableInterface.md)

### TaggableTableInterface

Interface for a taggable Table class

[« More »](api_cms-6__classes__Joomla-CMS-Tag-TaggableTableInterface.md)

### TagServiceInterface

Access to component specific tagging information.

[« More »](api_cms-6__classes__Joomla-CMS-Tag-TagServiceInterface.md)

### ToolbarFactoryInterface

Interface for creating toolbar objects

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-ToolbarFactoryInterface.md)

### TransportInterface

HTTP transport class interface.

[« More »](api_cms-6__classes__Joomla-CMS-Http-TransportInterface.md)

### UCM

Interface to handle UCM

[« More »](api_cms-6__classes__Joomla-CMS-UCM-UCM.md)

### UserFactoryAwareInterface

Interface to be implemented by classes depending on a user factory.

[« More »](api_cms-6__classes__Joomla-CMS-User-UserFactoryAwareInterface.md)

### UserFactoryInterface

Interface defining a factory which can create User objects

[« More »](api_cms-6__classes__Joomla-CMS-User-UserFactoryInterface.md)

### VersionableModelInterface

Interface for a versionable model.

[« More »](api_cms-6__classes__Joomla-CMS-Versioning-VersionableModelInterface.md)

### VersionableTableInterface

Interface for a versionable Table class

[« More »](api_cms-6__classes__Joomla-CMS-Versioning-VersionableTableInterface.md)

### ViewInterface

Joomla Platform CMS Interface

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-ViewInterface.md)

### WebAssetAttachBehaviorInterface

Web Asset Behavior interface

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetAttachBehaviorInterface.md)

### WebAssetExceptionInterface

Exception interface defining a WebAsset error

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-Exception-WebAssetExceptionInterface.md)

### WebAssetItemInterface

Web Asset Item interface

Asset Item are "read only" object, all properties must be set through class constructor.
Only properties allowed to be edited is an attributes and an options.
Changing an uri or a dependencies are not allowed, prefer to create a new asset instance.

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetItemInterface.md)

### WebAssetManagerInterface

Web Asset Manager Interface

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetManagerInterface.md)

### WebAssetRegistryInterface

Web Asset Registry interface

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetRegistryInterface.md)

### WorkflowModelInterface

Interface for a workflow model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-WorkflowModelInterface.md)

### WorkflowServiceInterface

The workflow service.

[« More »](api_cms-6__classes__Joomla-CMS-Workflow-WorkflowServiceInterface.md)

### WritableLoaderInterface

Interface defining a writable command loader.

[« More »](api_cms-6__classes__Joomla-CMS-Console-Loader-WritableLoaderInterface.md)

## Classes

### AbstractAES

Abstract AES encryption class

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-AES-AbstractAES.md)

### AbstractDeleteEvent

Base class for User delete event

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AbstractDeleteEvent.md)

### AbstractEditorProvider

Abstract editor provider

[« More »](api_cms-6__classes__Joomla-CMS-Editor-AbstractEditorProvider.md)

### AbstractEvent

This class implements the base Event object used system-wide to offer orthogonality. Core objects such as Models,
Controllers, etc create such events on-the-fly and dispatch them through the application's Dispatcher (colloquially
known as the "Joomla! plugin system"). This way a suitable plugin, typically a "system" plugin, can modify the
behaviour of any internal class, providing system-wide services such as tags, content versioning, comments or even
low-level services such as the implementation of created/modified/locked behaviours, record hit counter etc.

You can create a new Event with something like this:
$event = AbstractEvent::create('onModelBeforeSomething', $myModel, $arguments);
You can access the subject object from your event Listener using $event['subject']. It is up to your listener to
determine whether it should apply its functionality against the subject.
This AbstractEvent class implements a mutable event which is allowed to change its arguments at runtime. This is
generally unadvisable. It's best to use AbstractImmutableEvent instead and constrict all your interaction to the
subject class.

[« More »](api_cms-6__classes__Joomla-CMS-Event-AbstractEvent.md)

### AbstractEvent

Event class for the Table's events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AbstractEvent.md)

### AbstractEvent

Event class for WebAsset events

[« More »](api_cms-6__classes__Joomla-CMS-Event-WebAsset-AbstractEvent.md)

### AbstractEvent

Event class for WebAsset events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Workflow-AbstractEvent.md)

### AbstractExtensionEvent

Base class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AbstractExtensionEvent.md)

### AbstractFinderEvent

Class for Finder events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-AbstractFinderEvent.md)

### AbstractGroupButton

The AbstractGroupButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-AbstractGroupButton.md)

### AbstractImmutableEvent

This class implements the immutable base Event object used system-wide to offer orthogonality.

[« More »](api_cms-6__classes__Joomla-CMS-Event-AbstractImmutableEvent.md)

### AbstractJoomlaUpdateEvent

Base class for Joomla Update events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AbstractJoomlaUpdateEvent.md)

### AbstractLoginEvent

Base class for User login event

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AbstractLoginEvent.md)

### AbstractLogoutEvent

Base class for User logout event

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AbstractLogoutEvent.md)

### AbstractMenu

Menu class

[« More »](api_cms-6__classes__Joomla-CMS-Menu-AbstractMenu.md)

### AbstractModuleDispatcher

Base class for a Joomla Module Dispatcher.

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-AbstractModuleDispatcher.md)

### AbstractPrepareFieldEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-AbstractPrepareFieldEvent.md)

### AbstractRenderer

Base class for error page renderers

[« More »](api_cms-6__classes__Joomla-CMS-Error-AbstractRenderer.md)

### AbstractResetEvent

Class for User reset event.

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AbstractResetEvent.md)

### AbstractSaveEvent

Base class for User save event

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AbstractSaveEvent.md)

### AbstractView

Base class for a Joomla View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-AbstractView.md)

### Access

Class that handles all access authorisation routines.

[« More »](api_cms-6__classes__Joomla-CMS-Access-Access.md)

### Access

Extended Utility class for all HTML drawing classes.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Access.md)

### AccessiblemediaField

The Field to load the form inside current form

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-AccessiblemediaField.md)

### AccesslevelField

Form Field class for the Joomla Platform.

Provides a list of access levels. Access levels control what users in specific
groups can see.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-AccesslevelField.md)

### ActionButton

The TaskButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Button-ActionButton.md)

### ActionsDropdown

HTML utility class for building a dropdown menu

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-ActionsDropdown.md)

### AddInstallationTabEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-AddInstallationTabEvent.md)

### AddUserCommand

Console command for adding a user

[« More »](api_cms-6__classes__Joomla-CMS-Console-AddUserCommand.md)

### AddUserToGroupCommand

Console command to add a user to group

[« More »](api_cms-6__classes__Joomla-CMS-Console-AddUserToGroupCommand.md)

### AdminController

Base class for a Joomla Administrator Controller

Controller (controllers are where you put all the actual code) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-AdminController.md)

### AdministratorApplication

Joomla! Administrator Application class

[« More »](api_cms-6__classes__Joomla-CMS-Application-AdministratorApplication.md)

### AdministratorMenu

Menu class.

[« More »](api_cms-6__classes__Joomla-CMS-Menu-AdministratorMenu.md)

### AdministratorMenuItem

Object representing an administrator menu item

[« More »](api_cms-6__classes__Joomla-CMS-Menu-AdministratorMenuItem.md)

### AdministratorRouter

Class to create and parse routes

[« More »](api_cms-6__classes__Joomla-CMS-Router-AdministratorRouter.md)

### AdminLanguage

Utility class working with administrator language select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-AdminLanguage.md)

### AdminModel

Prototype admin model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-AdminModel.md)

### Aes

A simple implementation of AES-128, AES-192 and AES-256 encryption using the
high performance mcrypt library.

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-Aes.md)

### AfterApiRouteEvent

Class for AfterApiRoute event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterApiRouteEvent.md)

### AfterBindEvent

Event class for \Joomla\CMS\Table\Table onAfterBind event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterBindEvent.md)

### AfterCategoryChangeStateEvent

Class for Model event.

Example:
new AfterCategoryChangeStateEvent('onEventName', ['context' => $extension, 'subject' => $primaryKeys, 'value' => $newState]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-AfterCategoryChangeStateEvent.md)

### AfterCategoryChangeStateEvent

Class for Model event.

Example:
new AfterCategoryChangeStateEvent('onEventName', ['context' => $extension, 'subject' => $primaryKeys, 'value' => $newState]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-AfterCategoryChangeStateEvent.md)

### AfterChangeStateEvent

Class for Model event.

Example:
new AfterChangeStateEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $primaryKeys, 'value' => $newState]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-AfterChangeStateEvent.md)

### AfterChangeStateEvent

Class for Model event.

Example:
new AfterChangeStateEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $primaryKeys, 'value' => $newState]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-AfterChangeStateEvent.md)

### AfterCheckinEvent

Class for Checkin events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Checkin-AfterCheckinEvent.md)

### AfterCheckinEvent

Event class for \Joomla\CMS\Table\Table onAfterCheckin event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterCheckinEvent.md)

### AfterCheckoutEvent

Event class for \Joomla\CMS\Table\Table onAfterCheckout event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterCheckoutEvent.md)

### AfterCleanCacheEvent

Class for Clean cache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-AfterCleanCacheEvent.md)

### AfterCleanModuleListEvent

Class for Module events.

Example:
new AfterCleanModuleListEvent('onEventName', ['subject' => $modules]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-AfterCleanModuleListEvent.md)

### AfterCompressEvent

Class for AfterCompress event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterCompressEvent.md)

### AfterDeleteEvent

Class for Model event.

Example:
new AfterDeleteEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToDelete]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-AfterDeleteEvent.md)

### AfterDeleteEvent

Class for Model event.

Example:
new AfterDeleteEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToDelete]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-AfterDeleteEvent.md)

### AfterDeleteEvent

Event class for \Joomla\CMS\Table\Table onAfterDelete event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterDeleteEvent.md)

### AfterDeleteEvent

Class for User delete event.

Example:
new AfterDeleteEvent('onEventName', ['subject' => $userArray, 'deletingResult' => $result, 'errorMessage' => $errorStr]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterDeleteEvent.md)

### AfterDispatchEvent

Class for AfterDispatch event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterDispatchEvent.md)

### AfterDisplayEvent

Class for Content event.

Example:
new AfterDisplayEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $contentObject, 'params' => $params, 'page' => $pageNum]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Content-AfterDisplayEvent.md)

### AfterExecuteEvent

Class for AfterExecute event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterExecuteEvent.md)

### AfterExtensionBootEvent

Event class for representing the extensions's `onBeforeExtensionBoot` event

[« More »](api_cms-6__classes__Joomla-CMS-Event-AfterExtensionBootEvent.md)

### AfterGetMenuTypeOptionsEvent

Class for menu events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Menu-AfterGetMenuTypeOptionsEvent.md)

### AfterHitEvent

Event class for \Joomla\CMS\Table\Table onAfterHit event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterHitEvent.md)

### AfterInitialiseDocumentEvent

Event class for AfterInitialiseDocument event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterInitialiseDocumentEvent.md)

### AfterInitialiseEvent

Class for AfterInitialise event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterInitialiseEvent.md)

### AfterInstallerEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-AfterInstallerEvent.md)

### AfterInstallEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AfterInstallEvent.md)

### AfterJoomlaUpdateEvent

Class for Joomla Update events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AfterJoomlaUpdateEvent.md)

### AfterLoadEvent

Event class for \Joomla\CMS\Table\Table onAfterLoad event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterLoadEvent.md)

### AfterLogExportEvent

Class for ActionLog events

[« More »](api_cms-6__classes__Joomla-CMS-Event-ActionLog-AfterLogExportEvent.md)

### AfterLoginEvent

Class for User event.

Example:
new AfterLoginEvent('onEventName', ['subject' => $authenticationResponseArray, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterLoginEvent.md)

### AfterLogoutEvent

Class for User event.

Example:
new AfterLogoutEvent('onEventName', ['subject' => $parameters, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterLogoutEvent.md)

### AfterLogPurgeEvent

Class for ActionLog events

[« More »](api_cms-6__classes__Joomla-CMS-Event-ActionLog-AfterLogPurgeEvent.md)

### AfterModuleListEvent

Class for Module events.

Example:
new AfterModuleListEvent('onEventName', ['subject' => $modules]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-AfterModuleListEvent.md)

### AfterMoveEvent

Event class for \Joomla\CMS\Table\Table onAfterMove event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterMoveEvent.md)

### AfterPrepareFieldEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-AfterPrepareFieldEvent.md)

### AfterPublishEvent

Event class for \Joomla\CMS\Table\Table onAfterPublish event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterPublishEvent.md)

### AfterPurgeEvent

Class for Cache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Cache-AfterPurgeEvent.md)

### AfterRemindEvent

Class for User event.

Example:
new AfterRemindEvent('onEventName', ['subject' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterRemindEvent.md)

### AfterRenderEvent

Class for AfterRender event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterRenderEvent.md)

### AfterRenderModuleEvent

Class for Module events.

Example:
new AfterRenderModuleEvent('onEventName', ['subject' => $module, 'attributes' => $attrs]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-AfterRenderModuleEvent.md)

### AfterRenderModulesEvent

Class for Module events.

Example:
new AfterRenderModulesEvent('onEventName', ['subject' => $content, 'attributes' => $attrs]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-AfterRenderModulesEvent.md)

### AfterReorderEvent

Event class for \Joomla\CMS\Table\Table onAfterReorder event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterReorderEvent.md)

### AfterResetCompleteEvent

Class for User reset event.

Example:
new AfterResetCompleteEvent('onEventName', ['subject' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterResetCompleteEvent.md)

### AfterResetEvent

Event class for \Joomla\CMS\Table\Table onAfterReset event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterResetEvent.md)

### AfterResetRequestEvent

Class for User reset event.

Example:
new AfterResetRequestEvent('onEventName', ['subject' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterResetRequestEvent.md)

### AfterRespondEvent

Class for AfterRespond event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterRespondEvent.md)

### AfterRouteEvent

Class for AfterRoute event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterRouteEvent.md)

### AfterSaveConfigurationEvent

Class for Application Configuration events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-AfterSaveConfigurationEvent.md)

### AfterSaveEvent

Class for Model event.

Example:
new AfterSaveEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToSave, 'isNew' => $isNew]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-AfterSaveEvent.md)

### AfterSaveEvent

Class for Model event.

Example:
new AfterSaveEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToSave, 'isNew' => $isNew, 'data' => $submittedData]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-AfterSaveEvent.md)

### AfterSaveEvent

Class for User save event.

Example:
new AfterSaveEvent('onEventName', ['subject' => $userArray, 'isNew' => $isNew, 'savingResult' => $result, 'errorMessage' => $errorStr]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AfterSaveEvent.md)

### AfterStoreEvent

Event class for \Joomla\CMS\Table\Table onAfterStore event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-AfterStoreEvent.md)

### AfterTitleEvent

Class for Content event.

Example:
new AfterTitleEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $contentObject, 'params' => $params, 'page' => $pageNum]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Content-AfterTitleEvent.md)

### AfterUninstallEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AfterUninstallEvent.md)

### AfterUpdateEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-AfterUpdateEvent.md)

### Ajax

Concrete event class for the onAjaxWebauthn event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-Ajax.md)

### AjaxChallenge

Concrete event class for the onAjaxWebauthnChallenge event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxChallenge.md)

### AjaxCreate

Concrete event class for the onAjaxWebauthnCreate event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxCreate.md)

### AjaxDelete

Concrete event class for the onAjaxWebauthnDelete event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxDelete.md)

### AjaxEvent

Class for onAjax... events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-AjaxEvent.md)

### AjaxInitCreate

Concrete event class for the onAjaxWebauthnInitcreate event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxInitCreate.md)

### AjaxLogin

Concrete event class for the onAjaxWebauthnLogin event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxLogin.md)

### AjaxSaveLabel

Concrete event class for the onAjaxWebauthnSavelabel event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Webauthn-AjaxSaveLabel.md)

### AliastagField

Form Field class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-AliastagField.md)

### ApcuStorage

APCu cache storage handler

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Storage-ApcuStorage.md)

### ApiApplication

Joomla! API Application class

[« More »](api_cms-6__classes__Joomla-CMS-Application-ApiApplication.md)

### ApiController

Base class for a Joomla API Controller

Controller (controllers are where you put all the actual code) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-ApiController.md)

### ApiDispatcher

API Implementation for our dispatcher. It loads a component's administrator language files, and calls the API
Controller so that components that haven't implemented web services can add their own handling.

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ApiDispatcher.md)

### ApiMVCFactory

Factory to create MVC objects based on a namespace. Note that in an API Application model and table objects will be
created from their administrator counterparts.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-ApiMVCFactory.md)

### ApiRouter

Joomla! API Router class

[« More »](api_cms-6__classes__Joomla-CMS-Router-ApiRouter.md)

### Application

Application service provider

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Application.md)

### ApplicationConfigurationEvent

Class for Application Configuration events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-ApplicationConfigurationEvent.md)

### ApplicationDocumentEvent

Class for Application's Document events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-ApplicationDocumentEvent.md)

### ApplicationEvent

Class for Application events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-ApplicationEvent.md)

### ApplicationHelper

Application helper functions

[« More »](api_cms-6__classes__Joomla-CMS-Application-ApplicationHelper.md)

### Argon2idHandler

Password handler for Argon2id hashed passwords

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-Argon2idHandler.md)

### Argon2iHandler

Password handler for Argon2i hashed passwords

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-Argon2iHandler.md)

### ArrayProxy

Array proxy class

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ArrayProxy.md)

### ArrayReadOnlyProxy

Array read-only proxy class.

The class provides read-only feature for Array, including its children.

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ArrayReadOnlyProxy.md)

### Asset

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-6__classes__Joomla-CMS-Table-Asset.md)

### AssociationExtensionHelper

Association Extension Helper

[« More »](api_cms-6__classes__Joomla-CMS-Association-AssociationExtensionHelper.md)

### Associations

Utility class for associations in multilang

[« More »](api_cms-6__classes__Joomla-CMS-Language-Associations.md)

### AtomParser

ATOM Feed Parser class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Parser-AtomParser.md)

### AtomRenderer

AtomRenderer is a feed that implements the atom specification

Please note that just by using this class you won't automatically
produce valid atom files. For example, you have to specify either an editor
for the feed or an author for every single feed item.

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Feed-AtomRenderer.md)

### Authentication

Authentication class, provides an interface for the Joomla authentication system

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Authentication.md)

### Authentication

Service provider for the authentication dependencies

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Authentication.md)

### AuthenticationEvent

Class for User event.

Example:
new AuthenticationEvent('onEventName', ['credentials' => $credentials, 'options' => $options, 'subject' => $authenticationResponse]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AuthenticationEvent.md)

### AuthenticationFailed

Exception class defining an authentication failed event

[« More »](api_cms-6__classes__Joomla-CMS-Access-Exception-AuthenticationFailed.md)

### AuthenticationFailedExceptionHandler

Handler for permission errors that should give a 401

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-AuthenticationFailedExceptionHandler.md)

### AuthenticationHelper

Authentication helper class

[« More »](api_cms-6__classes__Joomla-CMS-Helper-AuthenticationHelper.md)

### AuthenticationResponse

Authentication response class, provides an object for storing user and error details

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-AuthenticationResponse.md)

### AuthorField

Form Field to load a list of content authors

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-AuthorField.md)

### AuthorisationEvent

Class for User event.

Example:
new AuthorisationEvent('onEventName', ['subject' => $authenticationResponse, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AuthorisationEvent.md)

### AuthorisationFailureEvent

Class for User event.

Example:
new AuthorisationFailureEvent('onEventName', ['subject' => $authenticationResponseArray, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-AuthorisationFailureEvent.md)

### AutomatedUpdatesRegisterCommand

Console command for managing the update channel for Joomla

[« More »](api_cms-6__classes__Joomla-CMS-Console-AutomatedUpdatesRegisterCommand.md)

### AutomatedUpdatesUnregisterCommand

Console command for managing the update channel for Joomla

[« More »](api_cms-6__classes__Joomla-CMS-Console-AutomatedUpdatesUnregisterCommand.md)

### Backgroundfill

Image Filter class fill background with color;

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Backgroundfill.md)

### Base32

Base32 encryption class

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-Base32.md)

### BaseController

Base class for a Joomla Controller

Controller (Controllers are where you put all the actual code.) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-BaseController.md)

### BaseDatabaseModel

Base class for a database aware Joomla Model

Acts as a Factory class for application specific objects and provides many supporting API functions.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-BaseDatabaseModel.md)

### BaseLayout

Base class for rendering a display layout

[« More »](api_cms-6__classes__Joomla-CMS-Layout-BaseLayout.md)

### BaseModel

Base class for a Joomla Model

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-BaseModel.md)

### BasicButton

Renders a basic button.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-BasicButton.md)

### BCryptHandler

Password handler for BCrypt hashed passwords

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-BCryptHandler.md)

### BeforeApiRouteEvent

Class for BeforeApiRoute event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeApiRouteEvent.md)

### BeforeBatchEvent

Event class for modifying a table object before a batch event is applied

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-BeforeBatchEvent.md)

### BeforeBindEvent

Event class for Table onBeforeBind event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeBindEvent.md)

### BeforeChangeStateEvent

Class for Model event.

Example:
new BeforeChangeStateEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $primaryKeys, 'value' => $newState]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-BeforeChangeStateEvent.md)

### BeforeCheckinEvent

Event class for \Joomla\CMS\Table\Table onBeforeCheckin event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeCheckinEvent.md)

### BeforeCheckoutEvent

Event class for \Joomla\CMS\Table\Table onBeforeCheckout event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeCheckoutEvent.md)

### BeforeCompileHeadEvent

Class for BeforeCompileHead event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeCompileHeadEvent.md)

### BeforeCompileHeadEvent

Class for SchemaBeforeCompileHeadEvent event
Example:
new BeforeCompileHeadEvent('onSchemaBeforeCompileHead', ['subject' => $schema, 'context' => 'com\_example.example']);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Schemaorg-BeforeCompileHeadEvent.md)

### BeforeDeleteEvent

Class for Model event.

Example:
new BeforeDeleteEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToDelete]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-BeforeDeleteEvent.md)

### BeforeDeleteEvent

Event class for \Joomla\CMS\Table\Table onBeforeDelete event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeDeleteEvent.md)

### BeforeDeleteEvent

Class for User delete event.

Example:
new BeforeDeleteEvent('onEventName', ['subject' => $userArray]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-BeforeDeleteEvent.md)

### BeforeDisplayEvent

Class for Content event.

Example:
new BeforeDisplayEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $contentObject, 'params' => $params, 'page' => $pageNum]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Content-BeforeDisplayEvent.md)

### BeforeDisplayMethods

Concrete Event class for the onUserMultifactorBeforeDisplayMethods event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-BeforeDisplayMethods.md)

### BeforeExecuteEvent

Class for BeforeExecute event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeExecuteEvent.md)

### BeforeExtensionBootEvent

Event class for representing the extensions's `onBeforeExtensionBoot` event

[« More »](api_cms-6__classes__Joomla-CMS-Event-BeforeExtensionBootEvent.md)

### BeforeHitEvent

Event class for \Joomla\CMS\Table\Table onBeforeHit event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeHitEvent.md)

### BeforeIndexEvent

Class for Finder events.

Example:
new BeforeIndexEvent('onEventName', []);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-BeforeIndexEvent.md)

### BeforeInstallationEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-BeforeInstallationEvent.md)

### BeforeInstallerEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-BeforeInstallerEvent.md)

### BeforeInstallEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-BeforeInstallEvent.md)

### BeforeJoomlaAutoupdateEvent

Class for Joomla Auto Update events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-BeforeJoomlaAutoupdateEvent.md)

### BeforeJoomlaUpdateEvent

Class for Joomla Update events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-BeforeJoomlaUpdateEvent.md)

### BeforeLoadEvent

Event class for \Joomla\CMS\Table\Table onBeforeLoad event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeLoadEvent.md)

### BeforeMoveEvent

Event class for \Joomla\CMS\Table\Table onBeforeMove event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeMoveEvent.md)

### BeforePackageDownloadEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-BeforePackageDownloadEvent.md)

### BeforePrepareFieldEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-BeforePrepareFieldEvent.md)

### BeforePublishEvent

Event class for \Joomla\CMS\Table\Table onBeforePublish event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforePublishEvent.md)

### BeforeRenderEvent

Class for BeforeRender event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeRenderEvent.md)

### BeforeRenderingMailTemplateEvent

Class for MailTemplate events
Example:
new BeforeRenderingMailTemplateEvent('onEventName', ['templateId' => 'com\_example.template', 'subject' => $mailTemplateInstance]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Mail-BeforeRenderingMailTemplateEvent.md)

### BeforeRenderMenuItemsViewEvent

Class for menu events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Menu-BeforeRenderMenuItemsViewEvent.md)

### BeforeRenderModuleEvent

Class for Module events.

Example:
new BeforeRenderModuleEvent('onEventName', ['subject' => $module, 'attributes' => $attrs]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-BeforeRenderModuleEvent.md)

### BeforeReorderEvent

Event class for \Joomla\CMS\Table\Table onBeforeReorder event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeReorderEvent.md)

### BeforeResetCompleteEvent

Class for User reset event.

Example:
new BeforeResetCompleteEvent('onEventName', ['subject' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-BeforeResetCompleteEvent.md)

### BeforeResetEvent

Event class for \Joomla\CMS\Table\Table onBeforeReset event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeResetEvent.md)

### BeforeResetRequestEvent

Class for User reset event.

Example:
new BeforeResetRequestEvent('onEventName', ['subject' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-BeforeResetRequestEvent.md)

### BeforeRespondEvent

Class for BeforeRespond event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeRespondEvent.md)

### BeforeSaveConfigurationEvent

Class for Application Configuration events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-BeforeSaveConfigurationEvent.md)

### BeforeSaveEvent

Class for Model event.

Example:
new BeforeSaveEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToSave, 'isNew' => $isNew);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-BeforeSaveEvent.md)

### BeforeSaveEvent

Class for Model event.

Example:
new BeforeSaveEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToSave, 'isNew' => $isNew, 'data' => $submittedData]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-BeforeSaveEvent.md)

### BeforeSaveEvent

Class for User save event.

Example:
new BeforeSaveEvent('onEventName', ['subject' => $oldUserArray, 'isNew' => $isNew, 'data' => $data]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-BeforeSaveEvent.md)

### BeforeStoreEvent

Event class for \Joomla\CMS\Table\Table onBeforeStore event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-BeforeStoreEvent.md)

### BeforeUninstallEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-BeforeUninstallEvent.md)

### BeforeUpdateEvent

Class for Extension events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Extension-BeforeUpdateEvent.md)

### BeforeUpdateSiteDownloadEvent

Class for update site events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-BeforeUpdateSiteDownloadEvent.md)

### BeforeValidateDataEvent

Class for Model Form event.

Example:
new BeforeValidateDataEvent('onEventName', ['subject' => $form, 'data' => $data]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-BeforeValidateDataEvent.md)

### Behavior

Utility class for JavaScript behaviors

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Behavior.md)

### BooleanRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-BooleanRule.md)

### Bootstrap

Utility class for Bootstrap elements.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Bootstrap.md)

### Brightness

Image Filter class adjust the brightness of an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Brightness.md)

### Browser

Browser class, provides capability information about the current web client.

Browser identification is performed by examining the HTTP\_USER\_AGENT
environment variable provided by the web server.
This class has many influences from the lib/Browser.php code in
version 3 of Horde by Chuck Hagenbuch and Jon Parise.

[« More »](api_cms-6__classes__Joomla-CMS-Environment-Browser.md)

### BufferStreamHandler

Generic Buffer stream handler

This class provides a generic buffer stream. It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

[« More »](api_cms-6__classes__Joomla-CMS-Utility-BufferStreamHandler.md)

### BuildIndexEvent

Class for Finder events.

Example:
new BuildIndexEvent('onEventName', []);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-BuildIndexEvent.md)

### Button

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Button-Button.md)

### ButtonsRegistry

Buttons Registry class

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Button-ButtonsRegistry.md)

### Cache

Joomla! Cache base object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Cache.md)

### CacheConnectingException

Exception class defining an error connecting to the cache storage engine

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Exception-CacheConnectingException.md)

### CacheController

Public cache handler

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheController.md)

### CacheController

Service provider for the cache controller dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-CacheController.md)

### CacheControllerFactory

Default factory for creating CacheController objects

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheControllerFactory.md)

### CachehandlerField

Form Field class for the Joomla Platform.

Provides a list of available cache handlers

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CachehandlerField.md)

### CacheStorage

Abstract cache storage handler

[« More »](api_cms-6__classes__Joomla-CMS-Cache-CacheStorage.md)

### CacheStorageHelper

Cache storage helper functions.

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Storage-CacheStorageHelper.md)

### CachingLanguageFactory

Caching factory for creating language objects. The requested languages are
cached in memory.

[« More »](api_cms-6__classes__Joomla-CMS-Language-CachingLanguageFactory.md)

### CalendarField

Form Field class for the Joomla Platform.

Provides a pop up date picker linked to a button.
Optionally may be filtered to use user's or server's time zone.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CalendarField.md)

### CalendarRule

Form Rule class for the Joomla Platform

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-CalendarRule.md)

### Callback

Concrete Event class for the onUserMultifactorCallback event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-Callback.md)

### CallbackController

Joomla! Cache callback type object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Controller-CallbackController.md)

### CallbackLogger

Joomla! Callback Log class

This class allows logging to be handled by a callback function.
This allows unprecedented flexibility in the way logging can be handled.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-CallbackLogger.md)

### CanDo

A simple state holder class. This class acts for transition from CMSObject to Registry
and should not be used directly. Instead of, use the Registry class.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-CanDo.md)

### CanRemoveDataEvent

Class for Privacy events.

Example:
new CanRemoveDataEvent('onEventName', ['subject' => $requestTable, 'user' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-CanRemoveDataEvent.md)

### Captcha

Joomla! Captcha base object

[« More »](api_cms-6__classes__Joomla-CMS-Captcha-Captcha.md)

### CaptchaField

Captcha field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CaptchaField.md)

### CaptchaNotFoundException

Exception class defining a missing element

[« More »](api_cms-6__classes__Joomla-CMS-Captcha-Exception-CaptchaNotFoundException.md)

### CaptchaRegistry

Captcha Registry class

[« More »](api_cms-6__classes__Joomla-CMS-Captcha-CaptchaRegistry.md)

### CaptchaRegistry

Service provider for the application's CaptchaRegistry dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-CaptchaRegistry.md)

### CaptchaRule

Form Rule class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-CaptchaRule.md)

### CaptchaSetupEvent

Captcha setup event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Captcha-CaptchaSetupEvent.md)

### Captive

Concrete Event class for the onUserMultifactorCaptive event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-Captive.md)

### Categories

Categories Class.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-Categories.md)

### CategoriesView

Categories view base class.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-CategoriesView.md)

### Category

Utility class for categories

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Category.md)

### Category

Category table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Category.md)

### CategoryFactory

Option based categories factory.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryFactory.md)

### CategoryFactory

Service provider for the service categories.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-CategoryFactory.md)

### CategoryFeedView

Base feed View class for a category

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-CategoryFeedView.md)

### CategoryField

Form Field class for the Joomla Platform.

Supports an HTML select list of categories

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CategoryField.md)

### CategoryNode

Helper class to load Categorytree

[« More »](api_cms-6__classes__Joomla-CMS-Categories-CategoryNode.md)

### CategoryView

Base HTML View class for the a Category list

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-CategoryView.md)

### ChainedHandler

Password handler supporting testing against a chain of handlers

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-ChainedHandler.md)

### ChangeItem

Each object represents one query, which is one line from a DDL SQL query.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
`administrator/components/com\_admin/sql/updates/<database>`.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without updating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-6__classes__Joomla-CMS-Schema-ChangeItem.md)

### Changelog

Changelog class.

[« More »](api_cms-6__classes__Joomla-CMS-Changelog-Changelog.md)

### ChangeSet

Contains a set of JSchemaChange objects for a particular instance of Joomla.

Each of these objects contains a DDL query that should have been run against
the database when this database was created or updated. This enables the
Installation Manager to check that the current database schema is up to date.

[« More »](api_cms-6__classes__Joomla-CMS-Schema-ChangeSet.md)

### ChangeStateEvent

Class for Model event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-ChangeStateEvent.md)

### ChangeUserPasswordCommand

Console command to change a user's password

[« More »](api_cms-6__classes__Joomla-CMS-Console-ChangeUserPasswordCommand.md)

### CheckboxesField

Form Field class for the Joomla Platform.

Displays options as a list of checkboxes.
Multiselect may be forced to be true.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CheckboxesField.md)

### CheckboxField

Form Field class for the Joomla Platform.

Single checkbox field.
This is a boolean field with null for false and the specified option for true

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-CheckboxField.md)

### CheckEvent

Event class for \Joomla\CMS\Table\Table onCheck event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-CheckEvent.md)

### CheckinCheckout

Checkin/checkout Exception

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-Exception-CheckinCheckout.md)

### CheckinCheckoutExceptionHandler

Handler for invalid checkin/checkout exceptions

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-CheckinCheckoutExceptionHandler.md)

### CheckJoomlaUpdatesCommand

Console command for checking if there are pending extension updates

[« More »](api_cms-6__classes__Joomla-CMS-Console-CheckJoomlaUpdatesCommand.md)

### CheckPrivacyPolicyPublishedEvent

Class for Privacy events.

Example:
new CheckPrivacyPolicyPublishedEvent('onEventName', ['subject' => $policyInfo]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-CheckPrivacyPolicyPublishedEvent.md)

### CheckUpdatesCommand

Console command for checking if there are pending extension updates

[« More »](api_cms-6__classes__Joomla-CMS-Console-CheckUpdatesCommand.md)

### ChromestyleField

Chrome Styles field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ChromestyleField.md)

### ClassLoader

Decorate Composer ClassLoader for Joomla!

For backward compatibility due to class aliasing in the CMS, the loadClass() method was modified to call
the JLoader::applyAliasFor() method.

[« More »](api_cms-6__classes__Joomla-CMS-Autoload-ClassLoader.md)

### CleanCacheCommand

Console command for cleaning the system cache

[« More »](api_cms-6__classes__Joomla-CMS-Console-CleanCacheCommand.md)

### Cli

Joomla! Input CLI Class

[« More »](api_cms-6__classes__Joomla-CMS-Input-Cli.md)

### ClientHelper

Client helper class

[« More »](api_cms-6__classes__Joomla-CMS-Client-ClientHelper.md)

### CliRenderer

Cli error renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-CliRenderer.md)

### CMSApplication

Joomla! CMS Application class

[« More »](api_cms-6__classes__Joomla-CMS-Application-CMSApplication.md)

### CMSHelper

Base Helper class.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-CMSHelper.md)

### CMSObject

Joomla Platform Object Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-6__classes__Joomla-CMS-Object-CMSObject.md)

### CMSPlugin

Plugin Class

[« More »](api_cms-6__classes__Joomla-CMS-Plugin-CMSPlugin.md)

### CollectCapabilitiesEvent

Class for Privacy events.

Example:
new CollectCapabilitiesEvent('onEventName');

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-CollectCapabilitiesEvent.md)

### CollectionAdapter

Collection Update Adapter Class

[« More »](api_cms-6__classes__Joomla-CMS-Updater-Adapter-CollectionAdapter.md)

### ColorField

Color Form Field class for the Joomla Platform.

This implementation is designed to be compatible with HTML5's `<input type="color">`

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ColorField.md)

### ColorRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-ColorRule.md)

### ComboField

Form Field class for the Joomla Platform.

Implements a combo box field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ComboField.md)

### Component

Access to component specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Component.md)

### ComponentAdapter

Component installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-ComponentAdapter.md)

### ComponentDispatcher

Base class for a Joomla Component Dispatcher

Dispatchers are responsible for checking ACL of a component if appropriate and
choosing an appropriate controller (and if necessary, a task) and executing it.

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ComponentDispatcher.md)

### ComponentDispatcherFactory

Namespace based implementation of the ComponentDispatcherFactoryInterface

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ComponentDispatcherFactory.md)

### ComponentDispatcherFactory

Service provider for the service dispatcher factory.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-ComponentDispatcherFactory.md)

### ComponentHelper

Component helper class

[« More »](api_cms-6__classes__Joomla-CMS-Component-ComponentHelper.md)

### ComponentlayoutField

Form Field to display a list of the layouts for a component view from
the extension or template overrides.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ComponentlayoutField.md)

### ComponentRecord

Object representing a component extension record

[« More »](api_cms-6__classes__Joomla-CMS-Component-ComponentRecord.md)

### ComponentRenderer

HTML document renderer for the component output

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-ComponentRenderer.md)

### ComponentsField

Form Field class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ComponentsField.md)

### Config

Service provider for the application's config dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Config.md)

### ConfirmButton

Renders a standard button with a confirm dialog

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-ConfirmButton.md)

### Console

Service provider for the application's console services

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Console.md)

### ConsoleApplication

The Joomla! CMS Console Application

[« More »](api_cms-6__classes__Joomla-CMS-Application-ConsoleApplication.md)

### ContainerAwareToolbarFactory

Default factory for creating toolbar objects

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-ContainerAwareToolbarFactory.md)

### Content

Utility class to fire onContentPrepare for non-article based content.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Content.md)

### Content

Content table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Content.md)

### ContentEvent

Base class for Content events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Content-ContentEvent.md)

### ContentHelper

Helper for standard content style extensions.

This class mainly simplifies static helper methods often repeated in individual components

[« More »](api_cms-6__classes__Joomla-CMS-Helper-ContentHelper.md)

### ContentHistory

Content History table.

[« More »](api_cms-6__classes__Joomla-CMS-Table-ContentHistory.md)

### ContenthistoryField

Field to select Content History from a modal list.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ContenthistoryField.md)

### ContentLanguage

Utility class working with content language select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-ContentLanguage.md)

### ContentlanguageField

Provides a list of content languages

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ContentlanguageField.md)

### ContentPrepareEvent

Class for Content event.

Example:
new ContentPrepareEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $contentObject, 'params' => $params, 'page' => $pageNum]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Content-ContentPrepareEvent.md)

### ContentType

Tags table

[« More »](api_cms-6__classes__Joomla-CMS-Table-ContentType.md)

### ContenttypeField

Content Type field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ContenttypeField.md)

### Contrast

Image Filter class adjust the contrast of an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Contrast.md)

### CoreAssetItem

Web Asset Item class for Core asset

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-AssetItem-CoreAssetItem.md)

### CoreContent

Core content table

[« More »](api_cms-6__classes__Joomla-CMS-Table-CoreContent.md)

### CoreUpdateChannelCommand

Console command for managing the update channel for Joomla

[« More »](api_cms-6__classes__Joomla-CMS-Console-CoreUpdateChannelCommand.md)

### Crypt

Crypt is a Joomla Platform class for handling basic encryption/decryption of data.

[« More »](api_cms-6__classes__Joomla-CMS-Crypt-Crypt.md)

### CryptoCipher

Crypt cipher for encryption, decryption and key generation via the php-encryption library.

[« More »](api_cms-6__classes__Joomla-CMS-Crypt-Cipher-CryptoCipher.md)

### CssIdentifierRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-CssIdentifierRule.md)

### CssIdentifierSubstringRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-CssIdentifierSubstringRule.md)

### CurlTransport

HTTP transport class for using cURL.

[« More »](api_cms-6__classes__Joomla-CMS-Http-Transport-CurlTransport.md)

### CustomButton

Renders a custom button

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-CustomButton.md)

### CustomFieldsEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-CustomFieldsEvent.md)

### DaemonApplication

Class to turn CliApplication applications into daemons. It requires CLI and PCNTL support built into PHP.

[« More »](api_cms-6__classes__Joomla-CMS-Application-DaemonApplication.md)

### DaemonForkEvent

Class for Fork event for DaemonApplication

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-DaemonForkEvent.md)

### DaemonReceiveSignalEvent

Class for ReceiveSignal event for DaemonApplication

[« More »](api_cms-6__classes__Joomla-CMS-Event-Application-DaemonReceiveSignalEvent.md)

### Database

Service provider for the application's database dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Database.md)

### DatabaseconnectionField

Form Field class for the Joomla Platform.

Provides a list of available database connections, optionally limiting to
a given list.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-DatabaseconnectionField.md)

### DatabaseLogger

Joomla! MySQL Database Log class

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the Syslog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-DatabaseLogger.md)

### Date

Date is a class that stores a date and provides logic to manipulate
and render that date in a variety of formats.

[« More »](api_cms-6__classes__Joomla-CMS-Date-Date.md)

### Date

Extended Utility class for handling date display.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Date.md)

### DateField

Date field

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-DateField.md)

### DatetimeField

DateTime field

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-DatetimeField.md)

### Debug

Extended Utility class for render debug information.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Debug.md)

### DeleteEvent

Class for Model event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-DeleteEvent.md)

### DeleteUserCommand

Console command for deleting a user

[« More »](api_cms-6__classes__Joomla-CMS-Console-DeleteUserCommand.md)

### Dispatcher

Base class for a Joomla Dispatcher

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-Dispatcher.md)

### Dispatcher

Service provider for the application's event dispatcher dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Dispatcher.md)

### DisplayEvent

Event class for WebAsset events

[« More »](api_cms-6__classes__Joomla-CMS-Event-View-DisplayEvent.md)

### Document

Document class, provides an easy interface to parse and display a document

[« More »](api_cms-6__classes__Joomla-CMS-Document-Document.md)

### Document

Service provider for the application's document dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Document.md)

### DocumentRenderer

Abstract class for a renderer

[« More »](api_cms-6__classes__Joomla-CMS-Document-DocumentRenderer.md)

### DownloadSource

Data object representing a download source given as part of an update's `<downloads>` element

[« More »](api_cms-6__classes__Joomla-CMS-Updater-DownloadSource.md)

### DraggableList

HTML utility class for creating a sortable table list

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-DraggableList.md)

### Dropdown

HTML utility class for building a dropdown menu

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Dropdown.md)

### DropdownButton

Render dropdown buttons.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-DropdownButton.md)

### DummyPlugin

Placeholder plugin.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-DummyPlugin.md)

### EchoLogger

Joomla Echo logger class.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-EchoLogger.md)

### Edgedetect

Image Filter class to add an edge detect effect to an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Edgedetect.md)

### Editor

Editor class to handle WYSIWYG editors

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Editor.md)

### EditorButtonsSetupEvent

Editor setup event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Editor-EditorButtonsSetupEvent.md)

### EditorField

A textarea field for content creation

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-EditorField.md)

### EditorNotFoundException

Exception class defining a missing element

[« More »](api_cms-6__classes__Joomla-CMS-Editor-Exception-EditorNotFoundException.md)

### EditorSetupEvent

Editor setup event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Editor-EditorSetupEvent.md)

### EditorsRegistry

Editor Registry class

[« More »](api_cms-6__classes__Joomla-CMS-Editor-EditorsRegistry.md)

### EditorsRegistry

Service provider for the application's EditorsRegistry dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-EditorsRegistry.md)

### Email

Utility class for cloaking email addresses

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Email.md)

### EmailField

Form Field class for the Joomla Platform.

Provides and input field for email addresses

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-EmailField.md)

### EmailRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-EmailRule.md)

### Emboss

Image Filter class to emboss an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Emboss.md)

### EqualsRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-EqualsRule.md)

### ErrorDocument

ErrorDocument class, provides an easy interface to parse and display an HTML based error page

[« More »](api_cms-6__classes__Joomla-CMS-Document-ErrorDocument.md)

### ErrorEvent

Event class for representing the application's `onError` event

[« More »](api_cms-6__classes__Joomla-CMS-Event-ErrorEvent.md)

### ExceptionHandler

Displays the custom error page when an uncaught exception occurs.

[« More »](api_cms-6__classes__Joomla-CMS-Exception-ExceptionHandler.md)

### ExistsRule

Form rule class to determine if a value exists in a database table.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-ExistsRule.md)

### ExportRequestEvent

Class for Privacy events.

Example:
new ExportRequestEvent('onEventName', ['subject' => $requestTable, 'user' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-ExportRequestEvent.md)

### Extension

Extension table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Extension.md)

### ExtensionAdapter

Extension class for updater

[« More »](api_cms-6__classes__Joomla-CMS-Updater-Adapter-ExtensionAdapter.md)

### ExtensionDiscoverCommand

Console command for discovering extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionDiscoverCommand.md)

### ExtensionDiscoverInstallCommand

Console command for discovering extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionDiscoverInstallCommand.md)

### ExtensionDiscoverListCommand

Console command for list discovered extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionDiscoverListCommand.md)

### ExtensionHelper

Extension Helper class.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-ExtensionHelper.md)

### ExtensionInstallCommand

Console command for installing extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionInstallCommand.md)

### ExtensionRemoveCommand

Console command for removing extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionRemoveCommand.md)

### ExtensionsListCommand

Console command for listing installed extensions

[« More »](api_cms-6__classes__Joomla-CMS-Console-ExtensionsListCommand.md)

### Factory

Default factory for creating Document objects

[« More »](api_cms-6__classes__Joomla-CMS-Document-Factory.md)

### Factory

Joomla Platform Factory class.

[« More »](api_cms-6__classes__Joomla-CMS-Factory.md)

### FeaturedButton

The FeaturedButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Button-FeaturedButton.md)

### Feed

Class to encapsulate a feed for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Feed.md)

### FeedDocument

FeedDocument class, provides an easy interface to parse and display any feed document

[« More »](api_cms-6__classes__Joomla-CMS-Document-FeedDocument.md)

### FeedEnclosure

Data object representing a feed enclosure

[« More »](api_cms-6__classes__Joomla-CMS-Document-Feed-FeedEnclosure.md)

### FeedEntry

Class to encapsulate a feed entry for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-FeedEntry.md)

### FeedFactory

Feed factory class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-FeedFactory.md)

### FeedImage

Data object representing a feed image

[« More »](api_cms-6__classes__Joomla-CMS-Document-Feed-FeedImage.md)

### FeedItem

Data object representing a feed item

[« More »](api_cms-6__classes__Joomla-CMS-Document-Feed-FeedItem.md)

### FeedLink

Feed Link class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-FeedLink.md)

### FeedParser

Feed Parser class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-FeedParser.md)

### FeedPerson

Feed Person class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-FeedPerson.md)

### FeedRenderer

RSS/Atom feed error page renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-FeedRenderer.md)

### FileAdapter

File installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-FileAdapter.md)

### FileField

Form Field class for the Joomla Platform.

Provides an input field for files

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-FileField.md)

### FileLayout

Base class for rendering a display layout
loaded from a layout file

[« More »](api_cms-6__classes__Joomla-CMS-Layout-FileLayout.md)

### FilelistField

Supports an HTML select list of files

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-FilelistField.md)

### FilePathRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-FilePathRule.md)

### FileStorage

File cache storage handler

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Storage-FileStorage.md)

### FinderIndexCommand

Console command Purges and rebuilds the index (search filters are preserved)

[« More »](api_cms-6__classes__Joomla-CMS-Console-FinderIndexCommand.md)

### FolderlistField

Supports an HTML select list of folder

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-FolderlistField.md)

### FolderPathExistsRule

Form Rule class for the Joomla CMS.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-FolderPathExistsRule.md)

### Form

Form Class for the Joomla Platform.

This class implements a robust API for constructing, populating, filtering, and validating forms.
It uses XML definitions to construct form fields and a variety of field and rule classes to
render and validate the form.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Form.md)

### Form

Utility class for form elements

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Form.md)

### Form

Service provider for the form dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Form.md)

### FormattedtextLogger

Joomla! Formatted Text File Log class

This class is designed to use as a base for building formatted text files for output. By
default it emulates the Syslog style format output. This is a disk based output format.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-FormattedtextLogger.md)

### FormBehavior

Utility class for form related behaviors

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-FormBehavior.md)

### FormController

Controller tailored to suit most form-based admin operations.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-FormController.md)

### FormEvent

Class for Model Form event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-FormEvent.md)

### FormFactory

Default factory for creating Form objects

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormFactory.md)

### FormField

Abstract Form Field class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormField.md)

### FormHelper

Form's helper class.

Provides a storage for filesystem's paths where Form's entities reside and methods for creating those entities.
Also stores objects with entities' prototypes for further reusing.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormHelper.md)

### FormModel

Prototype form model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-FormModel.md)

### FormRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-FormRule.md)

### FormValidateAssetItem

Web Asset Item class for form.validate asset

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-AssetItem-FormValidateAssetItem.md)

### FormView

Base class for a Joomla Form View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-FormView.md)

### FrontendlanguageField

Provides a list of published content languages with home pages

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-FrontendlanguageField.md)

### FtpClient

FTP client class

[« More »](api_cms-6__classes__Joomla-CMS-Client-FtpClient.md)

### GarbageCollectionEvent

Class for Finder events.

Example:
new GarbageCollectionEvent('onEventName', []);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-GarbageCollectionEvent.md)

### GenericDataException

Exception class defining an error getting data from a model into a view

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-GenericDataException.md)

### GenericEvent

This class gives a concrete implementation of the AbstractEvent class.

[« More »](api_cms-6__classes__Joomla-CMS-Event-GenericEvent.md)

### GetConfigurationCommand

Console command for displaying configuration options

[« More »](api_cms-6__classes__Joomla-CMS-Console-GetConfigurationCommand.md)

### GetIconEvent

Event class for the onGetIcon event.

[« More »](api_cms-6__classes__Joomla-CMS-Event-QuickIcon-GetIconEvent.md)

### GetKeyEvent

Class for PageCache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-PageCache-GetKeyEvent.md)

### GetMethod

Concrete Event class for the onUserMultifactorGetMethod event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-GetMethod.md)

### GetOverviewEvent

Cass for Sample data events

[« More »](api_cms-6__classes__Joomla-CMS-Event-SampleData-GetOverviewEvent.md)

### GetSetup

Concrete Event class for the onUserMultifactorGetSetup event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-GetSetup.md)

### GetStatsDataEvent

Class for Stats plugin.

Example:
new GetStatsDataEvent('onEventName', ['context' => 'com\_example.example']);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Stats-GetStatsDataEvent.md)

### GetTypesEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-GetTypesEvent.md)

### Grayscale

Image Filter class to transform an image to grayscale.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Grayscale.md)

### Grid

Utility class for creating HTML Grids

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Grid.md)

### GroupedlistField

Form Field class for the Joomla Platform.

Provides a grouped list select field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-GroupedlistField.md)

### HeadertagField

Form Field class for the Joomla! CMS.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-HeadertagField.md)

### HeadRenderer

HTML document renderer for the document `<head>` element

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-HeadRenderer.md)

### Help

Help system class

[« More »](api_cms-6__classes__Joomla-CMS-Help-Help.md)

### HelpButton

Renders a help popup window button

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-HelpButton.md)

### HelperFactory

Service provider for the service helper factory.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-HelperFactory.md)

### HelperFactory

Namespace based implementation of the HelperFactoryInterface

[« More »](api_cms-6__classes__Joomla-CMS-Helper-HelperFactory.md)

### HiddenField

Form Field class for the Joomla Platform.

Provides a hidden field

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-HiddenField.md)

### HtmlDocument

HtmlDocument class, provides an easy interface to parse and display a HTML document

[« More »](api_cms-6__classes__Joomla-CMS-Document-HtmlDocument.md)

### HTMLHelper

Utility class for all HTML drawing classes

[« More »](api_cms-6__classes__Joomla-CMS-HTML-HTMLHelper.md)

### HTMLRegistry

Service provider for the HTML service registry

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-HTMLRegistry.md)

### HtmlRenderer

HTML error page renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-HtmlRenderer.md)

### HtmlView

Base class for a Joomla Html View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-HtmlView.md)

### Http

HTTP client class.

[« More »](api_cms-6__classes__Joomla-CMS-Http-Http.md)

### HttpBridgePostRequestMethod

Bridges the Joomla! HTTP API to the Google Recaptcha RequestMethod interface for a POST request.

[« More »](api_cms-6__classes__Joomla-CMS-Captcha-Google-HttpBridgePostRequestMethod.md)

### HttpFactory

HTTP factory class.

[« More »](api_cms-6__classes__Joomla-CMS-Http-HttpFactory.md)

### HttpLoaderException

[« More »](api_cms-6__classes__Joomla-CMS-TUF-HttpLoaderException.md)

### Icons

Utility class for icons.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Icons.md)

### Image

Class to manipulate an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Image.md)

### ImageDocument

ImageDocument class, provides an easy interface to output image data

[« More »](api_cms-6__classes__Joomla-CMS-Document-ImageDocument.md)

### ImageFilter

Class to manipulate an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-ImageFilter.md)

### ImagelistField

Supports an HTML select list of image

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ImagelistField.md)

### InlinehelpButton

Renders a button to show / hide the inline help text

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-InlinehelpButton.md)

### InMemoryLogger

Logger class that keeps all entries in memory

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-InMemoryLogger.md)

### Input

Service provider for the the Joomla Input object.

Whilst generally speaking it's an anti-pattern for the request object to be in a DIC, in the case of Joomla whilst
there, both the web application class and session class have a hard dependency on the input object, as a result it's
required that this exists in the DIC for now. Strategically there should be a long term plan to remove this from the
DIC.

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Input.md)

### InputFilter

InputFilter is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

[« More »](api_cms-6__classes__Joomla-CMS-Filter-InputFilter.md)

### Installer

Joomla base installer class

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Installer.md)

### InstallerAdapter

Abstract adapter for the installer.

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerAdapter.md)

### InstallerEvent

Class for Installer events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Installer-InstallerEvent.md)

### InstallerExtension

Extension object

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerExtension.md)

### InstallerHelper

Installer helper class

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerHelper.md)

### InstallerScript

Base install script for use by extensions providing helper methods for common behaviours.

[« More »](api_cms-6__classes__Joomla-CMS-Installer-InstallerScript.md)

### IntarrayFilter

Form Filter class for integer arrays

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-IntarrayFilter.md)

### IntegerField

Form Field class for the Joomla Platform.

Provides a select list of integers with specified first, last and step values.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-IntegerField.md)

### InvalidActionException

Exception class defining an Invalid Action error

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-Exception-InvalidActionException.md)

### InvalidParameterExceptionHandler

Handler for invalid param

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-InvalidParameterExceptionHandler.md)

### InvalidRouteExceptionHandler

Handler for routing errors that should give a 404

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-InvalidRouteExceptionHandler.md)

### IsExcludedEvent

Class for PageCache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-PageCache-IsExcludedEvent.md)

### ItemModel

Prototype item model.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-ItemModel.md)

### ItunesRssParser

RSS Feed Parser Namespace handler for iTunes.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Parser-Rss-ItunesRssParser.md)

### JGrid

Utility class for creating HTML Grids

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-JGrid.md)

### JoomlaSerializer

This class does the messy job of sanitising all the classes Joomla has that contain data and converting them
into a standard array that can be consumed by the Tobscure library. It also throws appropriate plugin events
to allow 3rd party extensions to add custom data and relations into these properties before they are rendered

[« More »](api_cms-6__classes__Joomla-CMS-Serializer-JoomlaSerializer.md)

### JoomlaStorage

Service provider for the application's session dependency

[« More »](api_cms-6__classes__Joomla-CMS-Session-Storage-JoomlaStorage.md)

### Jquery

Utility class for jQuery JavaScript behaviors

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Jquery.md)

### JsonapiDocument

JsonapiDocument class, provides an easy interface to parse output in JSON-API format.

[« More »](api_cms-6__classes__Joomla-CMS-Document-JsonapiDocument.md)

### JsonapiRenderer

JSON error page renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-JsonapiRenderer.md)

### JsonApiView

Base class for a Joomla Json List View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-JsonApiView.md)

### JsonDocument

JsonDocument class, provides an easy interface to parse and display JSON output

[« More »](api_cms-6__classes__Joomla-CMS-Document-JsonDocument.md)

### JsonRenderer

JSON error page renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-JsonRenderer.md)

### JsonResponse

JSON Response class.

This class serves to provide the Joomla Platform with a common interface to access
response variables for e.g. Ajax requests.

[« More »](api_cms-6__classes__Joomla-CMS-Response-JsonResponse.md)

### JsonView

Base class for a Joomla Json View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-JsonView.md)

### KeepaliveAssetItem

Web Asset Item class for Keepalive asset

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-AssetItem-KeepaliveAssetItem.md)

### LangActiveAssetItem

Web Asset Item class for load asset file for active language.

Used in core templates.

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-AssetItem-LangActiveAssetItem.md)

### Language

Languages/translation handler class

[« More »](api_cms-6__classes__Joomla-CMS-Language-Language.md)

### Language

Service provider for the language dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Language.md)

### Language

Languages table.

[« More »](api_cms-6__classes__Joomla-CMS-Table-Language.md)

### LanguageAdapter

Language installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-LanguageAdapter.md)

### LanguageFactory

Default factory for creating language objects

[« More »](api_cms-6__classes__Joomla-CMS-Language-LanguageFactory.md)

### LanguageField

Form Field class for the Joomla Platform.

Supports a list of installed application languages

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-LanguageField.md)

### LanguageHelper

Language helper class

[« More »](api_cms-6__classes__Joomla-CMS-Language-LanguageHelper.md)

### LastvisitdaterangeField

Field to show a list of available date ranges to filter on last visit date.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-LastvisitdaterangeField.md)

### LayoutHelper

Helper to render a Layout object, storing a base path

[« More »](api_cms-6__classes__Joomla-CMS-Layout-LayoutHelper.md)

### LegacyComponent

Access to component specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-LegacyComponent.md)

### LegacyComponentDispatcher

Base class for a legacy Joomla Dispatcher

Executes the single entry file of a legacy component.

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-LegacyComponentDispatcher.md)

### LegacyFactory

Factory to create MVC objects in legacy mode.

Uses the static getInstance function on the classes itself. Behavior of the old none
namespaced extension set up.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-LegacyFactory.md)

### LegacyInstallerScript

Legacy installer script which delegates the methods to the internal instance when possible.

[« More »](api_cms-6__classes__Joomla-CMS-Installer-LegacyInstallerScript.md)

### LibraryAdapter

Library installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-LibraryAdapter.md)

### LibraryHelper

Library helper class

[« More »](api_cms-6__classes__Joomla-CMS-Helper-LibraryHelper.md)

### LibraryManifest

Joomla! Library Manifest File

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Manifest-LibraryManifest.md)

### LimitboxField

Field to load a list of possible item count limits

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-LimitboxField.md)

### LinkButton

Renders a link button

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-LinkButton.md)

### Links

Utility class for icons.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Links.md)

### ListField

Form Field class for the Joomla Platform.

Supports a generic list of options.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ListField.md)

### ListHelper

Utility class for creating different select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-ListHelper.md)

### ListModel

Model class for handling lists of items.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-ListModel.md)

### ListUserCommand

Console command to list existing users

[« More »](api_cms-6__classes__Joomla-CMS-Console-ListUserCommand.md)

### ListView

Base class for a Joomla List View

Class holding methods for displaying presentation data.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-ListView.md)

### Log

Joomla! Log Class

This class hooks into the global log configuration settings to allow for user configured
logging events to be sent to where the user wishes them to be sent. On high load sites
Syslog is probably the best (pure PHP function), then the text file based loggers (CSV, W3c
or plain Formattedtext) and finally MySQL offers the most features (e.g. rapid searching)
but will incur a performance hit due to INSERT being issued.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Log.md)

### LogEntry

Joomla! Log Entry class

This class is designed to hold log entries for either writing to an engine, or for
supported engines, retrieving lists and building in memory (PHP based) search operations.

[« More »](api_cms-6__classes__Joomla-CMS-Log-LogEntry.md)

### Logger

Joomla! Logger Base Class

This class is used to be the basis of logger classes to allow for defined functions
to exist regardless of the child class.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger.md)

### Logger

Service provider for the application's PSR-3 logger dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Logger.md)

### LoggerRegistry

Service registry for loggers

[« More »](api_cms-6__classes__Joomla-CMS-Log-LoggerRegistry.md)

### LoginButtonsEvent

Class for User event.

Example:
new LoginButtonsEvent('onEventName', ['subject' => $formId]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-LoginButtonsEvent.md)

### LoginEvent

Class for User event.

Example:
new LoginEvent('onEventName', ['subject' => $authenticationResponseArray, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-LoginEvent.md)

### LoginFailureEvent

Class for User event.

Example:
new LoginFailureEvent('onEventName', ['subject' => $authenticationResponseArray, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-LoginFailureEvent.md)

### LogoutEvent

Class for User event.

Example:
new LogoutEvent('onEventName', ['subject' => $parameters, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-LogoutEvent.md)

### LogoutFailureEvent

Class for User event.

Example:
new LogoutFailureEvent('onEventName', ['subject' => $parameters, 'options' => $options]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-LogoutFailureEvent.md)

### Mail

Email Class. Provides a common interface to send email from the Joomla! Platform

[« More »](api_cms-6__classes__Joomla-CMS-Mail-Mail.md)

### MailDisabledException

Exception class defining an error for disabled mail functionality.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-Exception-MailDisabledException.md)

### Mailer

Service provider for the mailer dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Mailer.md)

### MailerFactory

Default factory for creating mailer objects.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailerFactory.md)

### MailHelper

Email helper class, provides static methods to perform various tasks relevant
to the Joomla email routines.

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailHelper.md)

### MailTemplate

Email Templating Class

[« More »](api_cms-6__classes__Joomla-CMS-Mail-MailTemplate.md)

### MailTemplateEvent

Base class for MailTemplate events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Mail-MailTemplateEvent.md)

### MaintenanceDatabaseCommand

Console command maintenance database structure

[« More »](api_cms-6__classes__Joomla-CMS-Console-MaintenanceDatabaseCommand.md)

### Manifest

Joomla! Package Manifest File

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Manifest.md)

### Mcrypt

Mcrypt implementation

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-AES-Mcrypt.md)

### MD5Handler

Password handler for MD5 hashed passwords

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-MD5Handler.md)

### MediaField

Provides a modal media selector including upload mechanism

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-MediaField.md)

### MediaHelper

Media helper class

[« More »](api_cms-6__classes__Joomla-CMS-Helper-MediaHelper.md)

### MediaRssParser

RSS Feed Parser Namespace handler for MediaRSS.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Parser-Rss-MediaRssParser.md)

### MemcachedStorage

Memcached cache storage handler

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Storage-MemcachedStorage.md)

### Menu

Utility class working with menu select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Menu.md)

### Menu

Service provider for the application's menu dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Menu.md)

### Menu

Menu table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Menu.md)

### MenuFactory

Default factory for creating Menu objects

[« More »](api_cms-6__classes__Joomla-CMS-Menu-MenuFactory.md)

### MenuField

Supports an HTML select list of menus

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-MenuField.md)

### MenuItem

Object representing a menu item

[« More »](api_cms-6__classes__Joomla-CMS-Menu-MenuItem.md)

### MenuitemField

Supports an HTML grouped select list of menu item grouped by menu

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-MenuitemField.md)

### MenuRules

Rule to identify the right Itemid for a view in a component

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-Rules-MenuRules.md)

### MenuType

Menu Types table

[« More »](api_cms-6__classes__Joomla-CMS-Table-MenuType.md)

### MessagequeueLogger

Joomla MessageQueue logger class.

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the Syslog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-MessagequeueLogger.md)

### MessageRenderer

HTML document renderer for the system message queue

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-MessageRenderer.md)

### MetadataManagerListener

Event listener for session events regarding the session metadata for users.

[« More »](api_cms-6__classes__Joomla-CMS-Session-EventListener-MetadataManagerListener.md)

### MetasRenderer

JDocument metas renderer

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-MetasRenderer.md)

### MeterField

Form Field class for the Joomla Platform.

Provides a meter to show value in a range.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-MeterField.md)

### Microdata

Joomla Platform class for interacting with Microdata semantics.

[« More »](api_cms-6__classes__Joomla-CMS-Microdata-Microdata.md)

### MissingComponentException

Exception class defining an error for a missing component

[« More »](api_cms-6__classes__Joomla-CMS-Component-Exception-MissingComponentException.md)

### ModalSelectField

Provides a modal content selection

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ModalSelectField.md)

### ModelEvent

Base class for Model events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-ModelEvent.md)

### Module

Access to module specific services.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Module.md)

### Module

Service provider for the service based modules.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-Module.md)

### Module

Module table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Module.md)

### ModuleAdapter

Module installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-ModuleAdapter.md)

### ModuleDispatcher

Base class for a Joomla Module Dispatcher

Executes the single entry file of a module.

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ModuleDispatcher.md)

### ModuleDispatcherFactory

Namespace based implementation of the ModuleDispatcherFactoryInterface

[« More »](api_cms-6__classes__Joomla-CMS-Dispatcher-ModuleDispatcherFactory.md)

### ModuleDispatcherFactory

Service provider for the service dispatcher factory.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-ModuleDispatcherFactory.md)

### ModuleEvent

Base class for Module events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-ModuleEvent.md)

### ModuleHelper

Module helper class

[« More »](api_cms-6__classes__Joomla-CMS-Helper-ModuleHelper.md)

### ModulelayoutField

Form Field to display a list of the layouts for module display from the module or template overrides.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ModulelayoutField.md)

### ModuleLayoutRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-ModuleLayoutRule.md)

### ModuleListEvent

Class for Module events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-ModuleListEvent.md)

### ModuleorderField

Module Order field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ModuleorderField.md)

### ModulepositionField

Module Position field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ModulepositionField.md)

### ModuleRenderer

HTML document renderer for a single module

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-ModuleRenderer.md)

### ModulesRenderer

HTML document renderer for a module position

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-ModulesRenderer.md)

### ModuletagField

Module Tag field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-ModuletagField.md)

### Multilanguage

Utility class for multilang

[« More »](api_cms-6__classes__Joomla-CMS-Language-Multilanguage.md)

### MVCComponent

MVC Component class.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-MVCComponent.md)

### MVCFactory

Service provider for the service MVC factory.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-MVCFactory.md)

### MVCFactory

Factory to create MVC objects based on a namespace.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Factory-MVCFactory.md)

### MysqlChangeItem

Checks the database schema against one MySQL DDL query to see if it has been run.

[« More »](api_cms-6__classes__Joomla-CMS-Schema-ChangeItem-MysqlChangeItem.md)

### Negate

Image Filter class to negate the colors of an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Negate.md)

### Nested

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-6__classes__Joomla-CMS-Table-Nested.md)

### NomenuRules

Rule to process URLs without a menu item

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-Rules-NomenuRules.md)

### NormaliseRequestDataEvent

Class for Model Form event.

Example:
new NormaliseRequestDataEvent('onEventName', ['context' => 'com\_example.example', 'data' => $data, 'subject' => $form]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-NormaliseRequestDataEvent.md)

### NotAcceptable

Exception class defining a not acceptable class

[« More »](api_cms-6__classes__Joomla-CMS-Application-Exception-NotAcceptable.md)

### NotAcceptableExceptionHandler

Handler for routing errors that should give a 406

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-NotAcceptableExceptionHandler.md)

### NotAllowed

Exception class defining a not allowed access

[« More »](api_cms-6__classes__Joomla-CMS-Access-Exception-NotAllowed.md)

### NotAllowedExceptionHandler

Handler for permission errors that should give a 403

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-NotAllowedExceptionHandler.md)

### NoteField

Form Field class for the Joomla Platform.

Supports a one line text field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-NoteField.md)

### NotequalsRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-NotequalsRule.md)

### NotifyActionLog

Concrete event class for the custom events used to notify the User Action Log plugin about Two
Factor Authentication actions.

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-NotifyActionLog.md)

### Number

HTML helper class for rendering numbers.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Number.md)

### NumberField

Form Field class for the Joomla Platform.

Provides a one line text box with up-down handles to set a number in the field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-NumberField.md)

### NumberRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-NumberRule.md)

### ObjectCreateEvent

Event class for \Joomla\CMS\Table\Table onObjectCreate event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-ObjectCreateEvent.md)

### ObjectProxy

Object proxy class

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ObjectProxy.md)

### ObjectReadOnlyProxy

Object read-only proxy class.

The class provides read-only feature for Object, including its children.

[« More »](api_cms-6__classes__Joomla-CMS-Proxy-ObjectReadOnlyProxy.md)

### OnGetApiAttributes

Event for getting extra data attributes for an API Entity

[« More »](api_cms-6__classes__Joomla-CMS-Serializer-Events-OnGetApiAttributes.md)

### OnGetApiFields

Event for getting extra API Fields and Relations to render with an entity

[« More »](api_cms-6__classes__Joomla-CMS-MVC-View-Event-OnGetApiFields.md)

### OnGetApiRelation

Event for getting information on an API Relationship

[« More »](api_cms-6__classes__Joomla-CMS-Serializer-Events-OnGetApiRelation.md)

### OpensearchDocument

Opensearch class, provides an easy interface to display an Opensearch document

[« More »](api_cms-6__classes__Joomla-CMS-Document-OpensearchDocument.md)

### OpensearchImage

Data object representing an OpenSearch image

[« More »](api_cms-6__classes__Joomla-CMS-Document-Opensearch-OpensearchImage.md)

### OpensearchUrl

Data object representing an OpenSearch URL

[« More »](api_cms-6__classes__Joomla-CMS-Document-Opensearch-OpensearchUrl.md)

### OpenSSL

OpenSSL encryption class

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-AES-OpenSSL.md)

### OptionsRule

Form Rule class for the Joomla Platform.

Requires the value entered be one of the options in a field of type="list"

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-OptionsRule.md)

### OrderingField

Ordering field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-OrderingField.md)

### OutputController

Joomla Cache output type object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Controller-OutputController.md)

### OutputFilter

OutputFilter

[« More »](api_cms-6__classes__Joomla-CMS-Filter-OutputFilter.md)

### PackageAdapter

Package installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-PackageAdapter.md)

### PackageManifest

Joomla! Package Manifest File

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Manifest-PackageManifest.md)

### PageCacheEvent

Class for PageCache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-PageCache-PageCacheEvent.md)

### PageController

Joomla! Cache page type object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Controller-PageController.md)

### Pagination

Pagination Class. Provides a common interface for content pagination for the Joomla! CMS.

[« More »](api_cms-6__classes__Joomla-CMS-Pagination-Pagination.md)

### PaginationObject

Pagination object representing a particular item in the pagination lists.

[« More »](api_cms-6__classes__Joomla-CMS-Pagination-PaginationObject.md)

### PasswordField

Form Field class for the Joomla Platform.

Text field for passwords

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-PasswordField.md)

### PasswordRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-PasswordRule.md)

### Pathway

Class to maintain a pathway.

The user's navigated path within the application.

[« More »](api_cms-6__classes__Joomla-CMS-Pathway-Pathway.md)

### Pathway

Service provider for the application's pathway dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Pathway.md)

### PHPassHandler

Password handler for PHPass hashed passwords

[« More »](api_cms-6__classes__Joomla-CMS-Authentication-Password-PHPassHandler.md)

### PluginAdapter

Plugin installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-PluginAdapter.md)

### PluginHelper

Plugin helper class

[« More »](api_cms-6__classes__Joomla-CMS-Plugin-PluginHelper.md)

### PluginsField

Form Field class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-PluginsField.md)

### PluginstatusField

Plugin Status field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-PluginstatusField.md)

### PopupButton

Renders a modal window button

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-PopupButton.md)

### PostgresqlChangeItem

Checks the database schema against one PostgreSQL DDL query to see if it has been run.

[« More »](api_cms-6__classes__Joomla-CMS-Schema-ChangeItem-PostgresqlChangeItem.md)

### PredefinedlistField

Form Field to load a list of predefined values

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-PredefinedlistField.md)

### PreloadManager

Joomla! Preload Manager

[« More »](api_cms-6__classes__Joomla-CMS-Document-PreloadManager.md)

### PrepareContentEvent

Class for Finder events.

Example:
new PrepareContentEvent('onEventName', ['subject' => $item]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-PrepareContentEvent.md)

### PrepareDataEvent

Class for Model event.

Example:
new PrepareDataEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $data]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-PrepareDataEvent.md)

### PrepareDataEvent

Class for SchemaPrepareDataEvent event
Example:
new PrepareDataEvent('onSchemaPrepareData', ['subject' => $data, 'context' => 'com\_example.example']);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Schemaorg-PrepareDataEvent.md)

### PrepareDomEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-PrepareDomEvent.md)

### PrepareFieldEvent

Class for CustomFields events

[« More »](api_cms-6__classes__Joomla-CMS-Event-CustomFields-PrepareFieldEvent.md)

### PrepareFormEvent

Class for Model Form event.

Example:
new PrepareFormEvent('onEventName', ['subject' => $form, 'data' => $data]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-PrepareFormEvent.md)

### PrepareFormEvent

Class for SchemaPrepareFormEvent event
Example:
new PrepareFormEvent('onSchemaPrepareForm', ['subject' => $form]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Schemaorg-PrepareFormEvent.md)

### PrepareModuleListEvent

Class for Module events.

Example:
new AfterModuleListEvent('onEventName', ['subject' => $modules]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-PrepareModuleListEvent.md)

### PrepareSaveEvent

Class for SchemaPrepareSaveEvent event
Example:
new PrepareFormEvent('onSchemaPrepareForm', ['subject' => $subject, 'context' => $context, 'item' => $table, 'isNew' => $isNew, 'schema' => $schema]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Plugin-System-Schemaorg-PrepareSaveEvent.md)

### PreprocessMenuItemsEvent

Class for menu events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Menu-PreprocessMenuItemsEvent.md)

### PreprocessRules

Rule to prepare the query and add missing information

This rule adds the alias to an ID query parameter and the
category ID if either of them is missing. This requires that
the db table contains an alias column.
This fixes sloppy URLs in the code, but doesn't mean you can
simply drop the alias from the &id= in the future. Cleaning up
every request with this would mean a significant performance impact

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-Rules-PreprocessRules.md)

### PrivacyEvent

Base class for Privacy events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-PrivacyEvent.md)

### Profiler

Utility class to assist in the process of benchmarking the execution
of sections of code to understand where time is being spent.

[« More »](api_cms-6__classes__Joomla-CMS-Profiler-Profiler.md)

### PublicFolderGeneratorHelper

Admin Component Public Folder Generator Helper

[« More »](api_cms-6__classes__Joomla-CMS-Helper-PublicFolderGeneratorHelper.md)

### PublishedButton

The PublishedButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Button-PublishedButton.md)

### PunycodeHelper

Joomla Platform String Punycode Class

Class for handling UTF-8 URLs
Wraps the Punycode library
All functions assume the validity of utf-8 URLs.

[« More »](api_cms-6__classes__Joomla-CMS-String-PunycodeHelper.md)

### RadiobasicField

Form Field class for the Joomla Platform.

Provides radio button inputs using default styling

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RadiobasicField.md)

### RadioField

Form Field class for the Joomla Platform.

Provides radio button inputs

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RadioField.md)

### Randval

Generates cryptographically-secure random values.

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-Randval.md)

### RangeField

Form Field class for the Joomla Platform.

Provides a horizontal scroll bar to specify a value in a range.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RangeField.md)

### RawDocument

RawDocument class, provides an easy interface to parse and display raw output

[« More »](api_cms-6__classes__Joomla-CMS-Document-RawDocument.md)

### RawFilter

Form Filter class for raw values

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-RawFilter.md)

### RedirectStatusField

Redirect Status field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RedirectStatusField.md)

### RedisStorage

Redis cache storage handler for PECL

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Storage-RedisStorage.md)

### RegexRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-RegexRule.md)

### RegistrationdaterangeField

Registration Date Range field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RegistrationdaterangeField.md)

### Registry

Service registry for JHtml services

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Registry.md)

### RemoveDataEvent

Class for Privacy events.

Example:
new RemoveDataEvent('onEventName', ['subject' => $requestTable, 'user' => $user]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Privacy-RemoveDataEvent.md)

### RemoveOldFilesCommand

Console command for removing files which should have been cleared during an update

[« More »](api_cms-6__classes__Joomla-CMS-Console-RemoveOldFilesCommand.md)

### RemoveUserFromGroupCommand

Console command to remove a user from a group

[« More »](api_cms-6__classes__Joomla-CMS-Console-RemoveUserFromGroupCommand.md)

### RenderModuleEvent

Class for Module events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Module-RenderModuleEvent.md)

### ResourceNotFound

Exception class defining a resource not found exception

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-Exception-ResourceNotFound.md)

### ResourceNotFoundExceptionHandler

Handler for invalid resource requests that should give a 404

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-ResourceNotFoundExceptionHandler.md)

### Response

HTTP response data object class.

[« More »](api_cms-6__classes__Joomla-CMS-Http-Response.md)

### ResultEvent

Class for Finder events.

Example:
new ResultEvent('onEventName', ['subject' => $item, 'query' => $query]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-ResultEvent.md)

### Route

Route handling class

[« More »](api_cms-6__classes__Joomla-CMS-Router-Route.md)

### RouteHelper

Route Helper

A class providing basic routing for urls that are for content types found in
the #\_\_content\_types table and rows found in the #\_\_ucm\_content table.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-RouteHelper.md)

### RouteNotFoundException

Exception class defining an error for a missing route

[« More »](api_cms-6__classes__Joomla-CMS-Router-Exception-RouteNotFoundException.md)

### Router

Class to create and parse routes

[« More »](api_cms-6__classes__Joomla-CMS-Router-Router.md)

### Router

Service provider for the application's API router dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Router.md)

### RouterBase

Base component routing class

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterBase.md)

### RouterFactory

Default router factory.

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterFactory.md)

### RouterFactory

Service provider for the service router factory.

[« More »](api_cms-6__classes__Joomla-CMS-Extension-Service-Provider-RouterFactory.md)

### RouterLegacy

Default routing class for missing or legacy component routers

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterLegacy.md)

### RouterView

View-based component routing class

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterView.md)

### RouterViewConfiguration

View-configuration class for the view-based component router

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-RouterViewConfiguration.md)

### RssParser

RSS Feed Parser class.

[« More »](api_cms-6__classes__Joomla-CMS-Feed-Parser-RssParser.md)

### RssRenderer

RssRenderer is a feed that implements RSS 2.0 Specification

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Feed-RssRenderer.md)

### Rule

Rule class.

[« More »](api_cms-6__classes__Joomla-CMS-Access-Rule.md)

### Rules

Access rules class.

[« More »](api_cms-6__classes__Joomla-CMS-Access-Rules.md)

### RulesField

Form Field class for the Joomla Platform.

Field for assigning permissions to groups for a given asset

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-RulesField.md)

### RulesFilter

Form Filter class for rules

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-RulesFilter.md)

### RulesRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-RulesRule.md)

### SafehtmlFilter

Form Filter class for safe HTML

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-SafehtmlFilter.md)

### SampleDataEvent

Base class for Sample data events

[« More »](api_cms-6__classes__Joomla-CMS-Event-SampleData-SampleDataEvent.md)

### Save

Exception saving data

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-Exception-Save.md)

### SaveEvent

Class for Model event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Model-SaveEvent.md)

### SaveExceptionHandler

Handler for invalid checkin/checkout exceptions

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-SaveExceptionHandler.md)

### SaveSetup

Concrete Event class for the onUserMultifactorSaveSetup event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-SaveSetup.md)

### SchemaorgComponentSectionsField

Form Field class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-SchemaorgComponentSectionsField.md)

### ScriptsRenderer

JDocument head renderer

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-ScriptsRenderer.md)

### SearchTools

Searchtools elements.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-SearchTools.md)

### SectionNotFoundException

Representing when a category section cannot be found.

[« More »](api_cms-6__classes__Joomla-CMS-Categories-SectionNotFoundException.md)

### Select

Utility class for creating HTML select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Select.md)

### SendEmail

Send email Exception

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Controller-Exception-SendEmail.md)

### SendEmailExceptionHandler

Handler for error when send email

[« More »](api_cms-6__classes__Joomla-CMS-Error-JsonApi-SendEmailExceptionHandler.md)

### SeparatorButton

Renders a button separator

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-SeparatorButton.md)

### Session

Service provider for the application's session dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Session.md)

### Session

Class for managing HTTP sessions

[« More »](api_cms-6__classes__Joomla-CMS-Session-Session.md)

### SessionFactory

Factory for creating session API objects

[« More »](api_cms-6__classes__Joomla-CMS-Session-SessionFactory.md)

### SessionGcCommand

Console command for performing session garbage collection

[« More »](api_cms-6__classes__Joomla-CMS-Console-SessionGcCommand.md)

### SessionhandlerField

Form Field class for the Joomla Platform.

Provides a select list of session handler options.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-SessionhandlerField.md)

### SessionManager

Manager for interacting with the session handler to perform updates on sessions.

[« More »](api_cms-6__classes__Joomla-CMS-Session-SessionManager.md)

### SessionMetadataGcCommand

Console command for performing session metadata garbage collection

[« More »](api_cms-6__classes__Joomla-CMS-Console-SessionMetadataGcCommand.md)

### SetCachingEvent

Class for PageCache events

[« More »](api_cms-6__classes__Joomla-CMS-Event-PageCache-SetCachingEvent.md)

### SetConfigurationCommand

Console command Setting Configuration options

[« More »](api_cms-6__classes__Joomla-CMS-Console-SetConfigurationCommand.md)

### SetNewTagsEvent

Event class for \Joomla\CMS\Table\Table onSetNewTags event

[« More »](api_cms-6__classes__Joomla-CMS-Event-Table-SetNewTagsEvent.md)

### ShowOnRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-ShowOnRule.md)

### Sidebar

Utility class to render a list view sidebar

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Sidebar.md)

### SiteApplication

Joomla! Site Application class

[« More »](api_cms-6__classes__Joomla-CMS-Application-SiteApplication.md)

### SiteCreatePublicFolderCommand

Console command for creating a public folder

[« More »](api_cms-6__classes__Joomla-CMS-Console-SiteCreatePublicFolderCommand.md)

### SiteDownCommand

Console command wrapper for getting the site into offline mode

[« More »](api_cms-6__classes__Joomla-CMS-Console-SiteDownCommand.md)

### SiteMenu

Menu class

[« More »](api_cms-6__classes__Joomla-CMS-Menu-SiteMenu.md)

### SitePathway

Class to manage the site application pathway.

[« More »](api_cms-6__classes__Joomla-CMS-Pathway-SitePathway.md)

### SiteRouter

Class to create and parse routes for the site application

[« More »](api_cms-6__classes__Joomla-CMS-Router-SiteRouter.md)

### SiteUpCommand

Console command wrapper for getting the site into offline mode

[« More »](api_cms-6__classes__Joomla-CMS-Console-SiteUpCommand.md)

### Sketchy

Image Filter class to make an image appear "sketchy".

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Sketchy.md)

### Smooth

Image Filter class adjust the smoothness of an image.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Filter-Smooth.md)

### SocketTransport

HTTP transport class for using sockets directly.

[« More »](api_cms-6__classes__Joomla-CMS-Http-Transport-SocketTransport.md)

### SodiumCipher

JCrypt cipher for sodium algorithm encryption, decryption and key generation.

[« More »](api_cms-6__classes__Joomla-CMS-Crypt-Cipher-SodiumCipher.md)

### SortableList

HTML utility class for creating a sortable table list

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-SortableList.md)

### SpacerField

Form Field class for the Joomla Platform.

Provides spacer markup to be used in form layouts.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-SpacerField.md)

### SqlField

Supports a custom SQL select list

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-SqlField.md)

### StandardButton

Renders a standard button

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Button-StandardButton.md)

### StandardRules

Rule for the standard handling of component routing

[« More »](api_cms-6__classes__Joomla-CMS-Component-Router-Rules-StandardRules.md)

### StartIndexEvent

Class for Finder events.

Example:
new StartIndexEvent('onEventName', []);

[« More »](api_cms-6__classes__Joomla-CMS-Event-Finder-StartIndexEvent.md)

### State

A simple state holder class. This class acts for transition from CMSObject to Registry
and should not be used directly. Instead of, use the Registry class.

[« More »](api_cms-6__classes__Joomla-CMS-MVC-Model-State.md)

### StatusField

Form Field to load a list of states

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-StatusField.md)

### StreamTransport

HTTP transport class for using PHP streams.

[« More »](api_cms-6__classes__Joomla-CMS-Http-Transport-StreamTransport.md)

### StringHelper

HTML helper class for rendering manipulated strings.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-StringHelper.md)

### StylesRenderer

JDocument styles renderer

[« More »](api_cms-6__classes__Joomla-CMS-Document-Renderer-Html-StylesRenderer.md)

### SubformField

The Field to load the form inside current form

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-SubformField.md)

### SubformRule

Form rule to validate subforms field-wise.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-SubformRule.md)

### SubmitContactEvent

Class for Contact events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Contact-SubmitContactEvent.md)

### SyslogLogger

Joomla! Syslog Log class

This class is designed to call the PHP Syslog function call which is then sent to the
system wide log system. For Linux/Unix based systems this is the syslog subsystem, for
the Windows based implementations this can be found in the Event Log. For Windows,
permissions may prevent PHP from properly outputting messages.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-SyslogLogger.md)

### Table

Abstract Table class

Parent class to all tables.

[« More »](api_cms-6__classes__Joomla-CMS-Table-Table.md)

### TableColumnsAssetItem

Web Asset Item class for tables.column asset

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-AssetItem-TableColumnsAssetItem.md)

### Tag

Utility class for tags

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Tag.md)

### TagField

List of Tags field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TagField.md)

### TagsHelper

Tags helper class, provides methods to perform various tasks relevant
tagging of content.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-TagsHelper.md)

### TasksListCommand

Console command to list scheduled tasks.

[« More »](api_cms-6__classes__Joomla-CMS-Console-TasksListCommand.md)

### TasksRunCommand

Console command to run scheduled tasks.

[« More »](api_cms-6__classes__Joomla-CMS-Console-TasksRunCommand.md)

### TasksStateCommand

Console command to change the state of tasks.

[« More »](api_cms-6__classes__Joomla-CMS-Console-TasksStateCommand.md)

### Telephone

HTML helper class for rendering telephone numbers.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-Telephone.md)

### TelephoneField

Form Field class for the Joomla Platform.

Supports a text field telephone numbers.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TelephoneField.md)

### TelFilter

Form Filter class for phone numbers

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-TelFilter.md)

### TelRule

Form Rule class for the Joomla Platform

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-TelRule.md)

### TemplateAdapter

Template installer

[« More »](api_cms-6__classes__Joomla-CMS-Installer-Adapter-TemplateAdapter.md)

### TemplatestyleField

Supports a select grouped list of template styles

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TemplatestyleField.md)

### Text

Text handling class.

[« More »](api_cms-6__classes__Joomla-CMS-Language-Text.md)

### TextareaField

Form Field class for the Joomla Platform.

Supports a multi line area for entry of plain text

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TextareaField.md)

### TextField

Form Field class for the Joomla Platform.

Supports a one line text field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TextField.md)

### TimeField

Form Field class for the Joomla Platform.

Provides a Time input.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TimeField.md)

### TimeRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-TimeRule.md)

### TimezoneField

Form Field class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TimezoneField.md)

### Toolbar

Service provider for the application's toolbar dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-Toolbar.md)

### Toolbar

ToolBar handler

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-Toolbar.md)

### ToolbarButton

The ToolbarButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-ToolbarButton.md)

### ToolbarHelper

Utility class for the button bar.

[« More »](api_cms-6__classes__Joomla-CMS-Toolbar-ToolbarHelper.md)

### Totp

This class provides an RFC6238-compliant Time-based One Time Passwords,
compatible with Google Authenticator (with PassCodeLength = 6 and TimePeriod = 30).

[« More »](api_cms-6__classes__Joomla-CMS-Encrypt-Totp.md)

### TransitionButton

The PublishedButton class.

[« More »](api_cms-6__classes__Joomla-CMS-Button-TransitionButton.md)

### TransitionField

Workflow Transitions field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-TransitionField.md)

### Transliterate

Class to transliterate strings

[« More »](api_cms-6__classes__Joomla-CMS-Language-Transliterate.md)

### Tuf

TUF map table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Tuf.md)

### Ucm

UCM map table

[« More »](api_cms-6__classes__Joomla-CMS-Table-Ucm.md)

### UCMBase

Base class for implementing UCM

[« More »](api_cms-6__classes__Joomla-CMS-UCM-UCMBase.md)

### UCMContent

Base class for implementing UCM

[« More »](api_cms-6__classes__Joomla-CMS-UCM-UCMContent.md)

### UCMType

UCM Class for handling content types

[« More »](api_cms-6__classes__Joomla-CMS-UCM-UCMType.md)

### UiTab

Utility class for the Joomla core UI Tab element.

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-UiTab.md)

### UnknownAssetException

Exception class defining an Unknown Asset

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-Exception-UnknownAssetException.md)

### UnparsableImageException

Exception thrown when an image has no known properties.

[« More »](api_cms-6__classes__Joomla-CMS-Image-Exception-UnparsableImageException.md)

### UnsatisfiedDependencyException

Exception class defining an Unsatisfied Dependency

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-Exception-UnsatisfiedDependencyException.md)

### UnsetFilter

Form Filter class to unset

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-UnsetFilter.md)

### UnsupportedCacheException

Exception class defining an unsupported cache storage object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Exception-UnsupportedCacheException.md)

### UnsupportedStorageException

Exception class defining an unsupported session storage object

[« More »](api_cms-6__classes__Joomla-CMS-Session-Exception-UnsupportedStorageException.md)

### Update

Update table
Stores updates temporarily

[« More »](api_cms-6__classes__Joomla-CMS-Table-Update.md)

### Update

Update class. It is used by Updater::update() to install an update. Use Updater::findUpdates() to find updates for
an extension.

[« More »](api_cms-6__classes__Joomla-CMS-Updater-Update.md)

### UpdateAdapter

UpdateAdapter class.

[« More »](api_cms-6__classes__Joomla-CMS-Updater-UpdateAdapter.md)

### UpdateCoreCommand

Console command for updating Joomla! core

[« More »](api_cms-6__classes__Joomla-CMS-Console-UpdateCoreCommand.md)

### Updater

Updater Class

[« More »](api_cms-6__classes__Joomla-CMS-Updater-Updater.md)

### UpdateSite

Update site table
Stores the update sites for extensions

[« More »](api_cms-6__classes__Joomla-CMS-Table-UpdateSite.md)

### Uri

Uri Class

This class serves two purposes. First it parses a URI and provides a common interface
for the Joomla Platform to access and manipulate a URI. Second it obtains the URI of
the current executing script from the server regardless of server.

[« More »](api_cms-6__classes__Joomla-CMS-Uri-Uri.md)

### UrlField

Form Field class for the Joomla Platform.

Supports a URL text field

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-UrlField.md)

### UrlFilter

Form Filter class for URLs

[« More »](api_cms-6__classes__Joomla-CMS-Form-Filter-UrlFilter.md)

### UrlRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-UrlRule.md)

### User

Utility class working with users

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-User.md)

### User

Service provider for the user dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-User.md)

### User

Users table

[« More »](api_cms-6__classes__Joomla-CMS-Table-User.md)

### User

User class. Handles all application interaction with a user

[« More »](api_cms-6__classes__Joomla-CMS-User-User.md)

### UseractiveField

Field to show a list of available user active statuses

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-UseractiveField.md)

### UserEvent

Base class for User events

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-UserEvent.md)

### UserFactory

Default factory for creating User objects

[« More »](api_cms-6__classes__Joomla-CMS-User-UserFactory.md)

### UserField

Field to select a user ID from a modal list.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-UserField.md)

### Usergroup

Usergroup table class.

[« More »](api_cms-6__classes__Joomla-CMS-Table-Usergroup.md)

### UserGroupAfterDeleteEvent

Class for Model event.

Example:
new UserGroupAfterDeleteEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToDelete]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-UserGroupAfterDeleteEvent.md)

### UserGroupBeforeDeleteEvent

Class for Model event.

Example:
new UserGroupBeforeDeleteEvent('onEventName', ['context' => 'com\_example.example', 'subject' => $itemObjectToDelete]);

[« More »](api_cms-6__classes__Joomla-CMS-Event-User-UserGroupBeforeDeleteEvent.md)

### UsergrouplistField

Field to load a dropdown list of available user groups

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-UsergrouplistField.md)

### UserGroupsHelper

Helper to deal with user groups.

[« More »](api_cms-6__classes__Joomla-CMS-Helper-UserGroupsHelper.md)

### UserHelper

Authorisation helper class, provides static methods to perform various tasks relevant
to the Joomla user and authorisation classes

This class has influences and some method logic from the Horde Auth package

[« More »](api_cms-6__classes__Joomla-CMS-User-UserHelper.md)

### UserIdRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-UserIdRule.md)

### UsernameRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Rule-UsernameRule.md)

### UserstateField

Field to load a list of available users statuses

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-UserstateField.md)

### Utility

JUtility is a utility functions class

[« More »](api_cms-6__classes__Joomla-CMS-Utility-Utility.md)

### Validate

Concrete Event class for the onUserMultifactorValidate event

[« More »](api_cms-6__classes__Joomla-CMS-Event-MultiFactor-Validate.md)

### ValidateContactEvent

Class for Contact events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Contact-ValidateContactEvent.md)

### Version

Version information class for the Joomla CMS.

[« More »](api_cms-6__classes__Joomla-CMS-Version.md)

### Versioning

Handle the versioning of content items

[« More »](api_cms-6__classes__Joomla-CMS-Versioning-Versioning.md)

### ViewController

Joomla! Cache view type object

[« More »](api_cms-6__classes__Joomla-CMS-Cache-Controller-ViewController.md)

### ViewLevel

ViewLevel table class.

[« More »](api_cms-6__classes__Joomla-CMS-Table-ViewLevel.md)

### W3cLogger

Joomla! W3C Logging class

This class is designed to build log files based on the W3C specification.

[« More »](api_cms-6__classes__Joomla-CMS-Log-Logger-W3cLogger.md)

### WebApplication

Base class for a Joomla! Web application.

[« More »](api_cms-6__classes__Joomla-CMS-Application-WebApplication.md)

### WebAssetItem

Web Asset Item class

Asset Item are "read only" object, all properties must be set through class constructor.
Only properties allowed to be edited is an attributes and an options.
Changing an uri or a dependencies are not allowed, prefer to create a new asset instance.

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetItem.md)

### WebAssetManager

Web Asset Manager class

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetManager.md)

### WebAssetRegistry

Service provider for the application's WebAsset dependency

[« More »](api_cms-6__classes__Joomla-CMS-Service-Provider-WebAssetRegistry.md)

### WebAssetRegistry

Web Asset Registry class

[« More »](api_cms-6__classes__Joomla-CMS-WebAsset-WebAssetRegistry.md)

### WebAssetRegistryAssetChanged

Event class for WebAssetRegistry "asset changed" events

[« More »](api_cms-6__classes__Joomla-CMS-Event-WebAsset-WebAssetRegistryAssetChanged.md)

### Workflow

Workflow Class.

[« More »](api_cms-6__classes__Joomla-CMS-Workflow-Workflow.md)

### WorkflowComponentSectionsField

Form Field class for the Joomla Framework.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-WorkflowComponentSectionsField.md)

### WorkflowconditionField

Workflow States field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-WorkflowconditionField.md)

### WorkflowFunctionalityUsedEvent

Event class for Workflow Functionality Used events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Workflow-WorkflowFunctionalityUsedEvent.md)

### WorkflowStage

Utility class working with workflow states select lists

[« More »](api_cms-6__classes__Joomla-CMS-HTML-Helpers-WorkflowStage.md)

### WorkflowstageField

Workflow Stages field.

[« More »](api_cms-6__classes__Joomla-CMS-Form-Field-WorkflowstageField.md)

### WorkflowTransitionEvent

Event class for Workflow Functionality Used events

[« More »](api_cms-6__classes__Joomla-CMS-Event-Workflow-WorkflowTransitionEvent.md)

### WritableContainerLoader

PSR-11 compatible writable command loader.

[« More »](api_cms-6__classes__Joomla-CMS-Console-Loader-WritableContainerLoader.md)

### XmlDocument

XmlDocument class, provides an easy interface to parse and display XML output

[« More »](api_cms-6__classes__Joomla-CMS-Document-XmlDocument.md)

### XmlRenderer

XML error page renderer

[« More »](api_cms-6__classes__Joomla-CMS-Error-Renderer-XmlRenderer.md)

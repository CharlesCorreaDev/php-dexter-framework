# Joomla! Framework 4.x API » \JoomlaFramework

> **Fonte / Source:** https://api.joomla.org/framework-4/packages/JoomlaFramework.html

---

## Constants

### CRLF

|  |  |
| --- | --- |
| package | Joomla Framework |

### FTP\_ASCII

|  |  |
| --- | --- |
| package | Joomla Framework |

### FTP\_AUTOASCII

|  |  |
| --- | --- |
| package | Joomla Framework |

### FTP\_BINARY

|  |  |
| --- | --- |
| package | Joomla Framework |

### FTP\_NATIVE

|  |  |
| --- | --- |
| package | Joomla Framework |

## Traits

### ContainerAwareTrait

Defines the trait for a Container Aware Class.

[« More »](api_framework-4__classes__Joomla-DI-ContainerAwareTrait.md)

### DatabaseAwareTrait

Defines the trait for a Database Aware Class.

[« More »](api_framework-4__classes__Joomla-Database-DatabaseAwareTrait.md)

### DatabaseModelTrait

Trait representing a model holding a database reference

[« More »](api_framework-4__classes__Joomla-Model-DatabaseModelTrait.md)

### DispatcherAwareTrait

Defines the trait for a Dispatcher Aware Class.

[« More »](api_framework-4__classes__Joomla-Event-DispatcherAwareTrait.md)

### MysqlQueryBuilder

Trait for MySQL Query Building.

[« More »](api_framework-4__classes__Joomla-Database-Query-MysqlQueryBuilder.md)

### PostgresqlQueryBuilder

Trait for PostgreSQL Query Building.

[« More »](api_framework-4__classes__Joomla-Database-Query-PostgresqlQueryBuilder.md)

### SessionAwareWebApplicationTrait

Trait which helps implementing `Joomla\Application\SessionAwareWebApplicationInterface` in a web application class.

[« More »](api_framework-4__classes__Joomla-Application-SessionAwareWebApplicationTrait.md)

### StatefulModelTrait

Trait representing a model holding a state

[« More »](api_framework-4__classes__Joomla-Model-StatefulModelTrait.md)

## Interfaces

### AddTemplateFolderInterface

Interface for a renderer which can have template paths added during runtime.

[« More »](api_framework-4__classes__Joomla-Renderer-AddTemplateFolderInterface.md)

### ApplicationInterface

Joomla Framework Application Interface

[« More »](api_framework-4__classes__Joomla-Application-ApplicationInterface.md)

### AuthenticationStrategyInterface

Joomla Framework AuthenticationStrategy Interface

[« More »](api_framework-4__classes__Joomla-Authentication-AuthenticationStrategyInterface.md)

### CipherInterface

Joomla Framework Cipher interface.

[« More »](api_framework-4__classes__Joomla-Crypt-CipherInterface.md)

### ConfigurableFileExtensionInterface

Interface defining a renderer with a configurable file extension.

[« More »](api_framework-4__classes__Joomla-Renderer-ConfigurableFileExtensionInterface.md)

### ConfigurationAwareApplicationInterface

Application sub-interface defining an application class which is aware of its configuration

[« More »](api_framework-4__classes__Joomla-Application-ConfigurationAwareApplicationInterface.md)

### ContainerAwareInterface

Defines the interface for a Container Aware class.

[« More »](api_framework-4__classes__Joomla-DI-ContainerAwareInterface.md)

### ControllerInterface

Joomla Framework Controller Interface

[« More »](api_framework-4__classes__Joomla-Controller-ControllerInterface.md)

### ControllerResolverInterface

Interface defining a controller resolver.

[« More »](api_framework-4__classes__Joomla-Application-Controller-ControllerResolverInterface.md)

### CryptExceptionInterface

Interface defining all crypt package exceptions

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-CryptExceptionInterface.md)

### DatabaseAwareInterface

Defines the interface for a DatabaseInterface aware class.

[« More »](api_framework-4__classes__Joomla-Database-DatabaseAwareInterface.md)

### DatabaseInterface

Joomla Framework Database Interface

[« More »](api_framework-4__classes__Joomla-Database-DatabaseInterface.md)

### DatabaseModelInterface

Joomla Framework Database Model Interface

[« More »](api_framework-4__classes__Joomla-Model-DatabaseModelInterface.md)

### DebugParserInterface

Interface describing a language file parser capable of debugging a file

[« More »](api_framework-4__classes__Joomla-Language-DebugParserInterface.md)

### DispatcherAwareInterface

Interface to be implemented by classes depending on a dispatcher.

[« More »](api_framework-4__classes__Joomla-Event-DispatcherAwareInterface.md)

### DispatcherInterface

Interface for event dispatchers.

[« More »](api_framework-4__classes__Joomla-Event-DispatcherInterface.md)

### DumpableInterface

An interface to define if an object is dumpable.

[« More »](api_framework-4__classes__Joomla-Data-DumpableInterface.md)

### EventInterface

Interface for events.

An event has a name and its propagation can be stopped.

[« More »](api_framework-4__classes__Joomla-Event-EventInterface.md)

### ExtractableInterface

Archive class interface

[« More »](api_framework-4__classes__Joomla-Archive-ExtractableInterface.md)

### FormatInterface

Interface defining a format object

[« More »](api_framework-4__classes__Joomla-Registry-FormatInterface.md)

### HandlerInterface

Interface defining a password handler

[« More »](api_framework-4__classes__Joomla-Authentication-Password-HandlerInterface.md)

### HandlerInterface

Interface defining Joomla! session handlers

[« More »](api_framework-4__classes__Joomla-Session-HandlerInterface.md)

### LoaderInterface

Interface defining a command loader.

[« More »](api_framework-4__classes__Joomla-Console-Loader-LoaderInterface.md)

### LocaliseInterface

Joomla Framework Language Interface

[« More »](api_framework-4__classes__Joomla-Language-LocaliseInterface.md)

### ParserInterface

Interface describing a language file loader

[« More »](api_framework-4__classes__Joomla-Language-ParserInterface.md)

### ProfilePointInterface

Interface for profile points.

A Profile point belongs to a ProfilerInterface and the values it holds (time and memory) are relative to the values
of the first marked point in that profiler.

[« More »](api_framework-4__classes__Joomla-Profiler-ProfilePointInterface.md)

### ProfilerInterface

Interface for Profilers containing a sequence of ProfilePointInterface.

[« More »](api_framework-4__classes__Joomla-Profiler-ProfilerInterface.md)

### ProfilerRendererInterface

Interface for profiler renderers.

[« More »](api_framework-4__classes__Joomla-Profiler-ProfilerRendererInterface.md)

### QueryInterface

Joomla Framework Query Building Interface.

[« More »](api_framework-4__classes__Joomla-Database-QueryInterface.md)

### QueryMonitorInterface

Interface defining a query monitor.

[« More »](api_framework-4__classes__Joomla-Database-QueryMonitorInterface.md)

### RendererInterface

Rendering interface.

[« More »](api_framework-4__classes__Joomla-Renderer-RendererInterface.md)

### RouterInterface

Interface defining a HTTP path router.

[« More »](api_framework-4__classes__Joomla-Router-RouterInterface.md)

### ServiceProviderInterface

Defines the interface for a Service Provider.

[« More »](api_framework-4__classes__Joomla-DI-ServiceProviderInterface.md)

### SessionAwareWebApplicationInterface

Application sub-interface defining a web application class which supports sessions

[« More »](api_framework-4__classes__Joomla-Application-SessionAwareWebApplicationInterface.md)

### SessionInterface

Interface defining a Joomla! Session object

[« More »](api_framework-4__classes__Joomla-Session-SessionInterface.md)

### StatefulModelInterface

Joomla Framework Stateful Model Interface

[« More »](api_framework-4__classes__Joomla-Model-StatefulModelInterface.md)

### StatementInterface

Interface defining a query statement.

This interface is a partial standalone implementation of PDOStatement.

[« More »](api_framework-4__classes__Joomla-Database-StatementInterface.md)

### StemmerInterface

Stemmer interface.

[« More »](api_framework-4__classes__Joomla-Language-StemmerInterface.md)

### StorageInterface

Interface defining a Joomla! session storage object

[« More »](api_framework-4__classes__Joomla-Session-StorageInterface.md)

### SubscriberInterface

Interface for event subscribers.

[« More »](api_framework-4__classes__Joomla-Event-SubscriberInterface.md)

### TransportInterface

HTTP transport class interface.

[« More »](api_framework-4__classes__Joomla-Http-TransportInterface.md)

### UriInterface

Uri Interface

Interface for read-only access to URIs.

[« More »](api_framework-4__classes__Joomla-Uri-UriInterface.md)

### UTF8MB4SupportInterface

Interface defining a driver which has support for the MySQL `utf8mb4` character set

[« More »](api_framework-4__classes__Joomla-Database-UTF8MB4SupportInterface.md)

### ValidatorInterface

Interface for validating a part of the session

[« More »](api_framework-4__classes__Joomla-Session-ValidatorInterface.md)

### ViewInterface

Joomla Framework View Interface

[« More »](api_framework-4__classes__Joomla-View-ViewInterface.md)

### WebApplicationInterface

Application sub-interface defining a web application class

[« More »](api_framework-4__classes__Joomla-Application-WebApplicationInterface.md)

## Classes

### AbstractApplication

Joomla Framework Base Application Class

[« More »](api_framework-4__classes__Joomla-Application-AbstractApplication.md)

### AbstractCommand

Base command class for a Joomla! command line application.

[« More »](api_framework-4__classes__Joomla-Console-Command-AbstractCommand.md)

### AbstractController

Joomla Framework Base Controller Class

[« More »](api_framework-4__classes__Joomla-Controller-AbstractController.md)

### AbstractEvent

Implementation of EventInterface.

[« More »](api_framework-4__classes__Joomla-Event-AbstractEvent.md)

### AbstractGithubObject

GitHub API object class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-AbstractGithubObject.md)

### AbstractKeychainCommand

Base class for all keychain console commands.

[« More »](api_framework-4__classes__Joomla-Keychain-Command-AbstractKeychainCommand.md)

### AbstractLocalise

Abstract localisation handler class

[« More »](api_framework-4__classes__Joomla-Language-Localise-AbstractLocalise.md)

### AbstractMediawikiObject

Mediawiki API object class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Mediawiki-AbstractMediawikiObject.md)

### AbstractPackage

GitHub API package class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-AbstractPackage.md)

### AbstractRenderer

Abstract class for templates renderer

[« More »](api_framework-4__classes__Joomla-Renderer-AbstractRenderer.md)

### AbstractTransport

Abstract transport class.

[« More »](api_framework-4__classes__Joomla-Http-AbstractTransport.md)

### AbstractUri

Base Joomla Uri Class

[« More »](api_framework-4__classes__Joomla-Uri-AbstractUri.md)

### AbstractUsernamePasswordAuthenticationStrategy

Abstract AuthenticationStrategy for username/password based authentication

[« More »](api_framework-4__classes__Joomla-Authentication-AbstractUsernamePasswordAuthenticationStrategy.md)

### AbstractView

Joomla Framework Abstract View Class

[« More »](api_framework-4__classes__Joomla-View-AbstractView.md)

### AbstractWebApplication

Base class for a Joomla! Web application.

[« More »](api_framework-4__classes__Joomla-Application-AbstractWebApplication.md)

### Activity

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity.md)

### AddEntryCommand

Command class to add an entry to a keychain

[« More »](api_framework-4__classes__Joomla-Keychain-Command-AddEntryCommand.md)

### AddressValidator

Interface for validating a part of the session

[« More »](api_framework-4__classes__Joomla-Session-Validator-AddressValidator.md)

### ApcuHandler

APCu session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-ApcuHandler.md)

### Application

Base application class for a Joomla! command line application.

[« More »](api_framework-4__classes__Joomla-Console-Application.md)

### ApplicationDescription

Describes an application.

[« More »](api_framework-4__classes__Joomla-Console-Descriptor-ApplicationDescription.md)

### ApplicationErrorEvent

Event class thrown when an application error occurs.

[« More »](api_framework-4__classes__Joomla-Application-Event-ApplicationErrorEvent.md)

### ApplicationErrorEvent

Event triggered when an uncaught Throwable is received by the application.

[« More »](api_framework-4__classes__Joomla-Console-Event-ApplicationErrorEvent.md)

### ApplicationEvent

Base event class for application events.

[« More »](api_framework-4__classes__Joomla-Application-Event-ApplicationEvent.md)

### ApplicationEvents

Class defining the events available in the application.

[« More »](api_framework-4__classes__Joomla-Application-ApplicationEvents.md)

### Archive

An Archive handling class

[« More »](api_framework-4__classes__Joomla-Archive-Archive.md)

### Argon2idHandler

Password handler for Argon2id hashed passwords

[« More »](api_framework-4__classes__Joomla-Authentication-Password-Argon2idHandler.md)

### Argon2iHandler

Password handler for Argon2i hashed passwords

[« More »](api_framework-4__classes__Joomla-Authentication-Password-Argon2iHandler.md)

### ArrayHelper

ArrayHelper is an array utility class for doing all sorts of odds and ends with arrays.

[« More »](api_framework-4__classes__Joomla-Utilities-ArrayHelper.md)

### Assignees

GitHub API Assignees class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues-Assignees.md)

### Authentication

Joomla Framework Authentication Class

[« More »](api_framework-4__classes__Joomla-Authentication-Authentication.md)

### Authorization

GitHub API Authorization class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Authorization.md)

### BCryptHandler

Password handler for BCrypt hashed passwords

[« More »](api_framework-4__classes__Joomla-Authentication-Password-BCryptHandler.md)

### BeforeCommandExecuteEvent

Event triggered before a command is executed.

[« More »](api_framework-4__classes__Joomla-Console-Event-BeforeCommandExecuteEvent.md)

### BladeRenderer

Blade class for rendering output.

[« More »](api_framework-4__classes__Joomla-Renderer-BladeRenderer.md)

### Blobs

GitHub API Data Blobs class for the Joomla Framework.

Since blobs can be any arbitrary binary data, the input and responses for the blob API
takes an encoding parameter that can be either utf-8 or base64. If your data cannot be
losslessly sent as a UTF-8 string, you can base64 encode it.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data-Blobs.md)

### Branches

GitHub API Repositories Branches class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Branches.md)

### Buffer

Generic Buffer stream handler

This class provides a generic buffer stream. It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

[« More »](api_framework-4__classes__Joomla-Filesystem-Buffer.md)

### Bzip2

Bzip2 format adapter for the Archive package

[« More »](api_framework-4__classes__Joomla-Archive-Bzip2.md)

### Categories

MediaWiki API Categories class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Categories.md)

### ChainedMonitor

Chained query monitor allowing multiple monitors to be executed.

[« More »](api_framework-4__classes__Joomla-Database-Monitor-ChainedMonitor.md)

### Client

Joomla Framework class for interacting with an OAuth 1.0 and 1.0a server.

[« More »](api_framework-4__classes__Joomla-OAuth1-Client.md)

### Client

Joomla Framework class for interacting with an OAuth 2.0 server.

[« More »](api_framework-4__classes__Joomla-OAuth2-Client.md)

### Collaborators

GitHub API Repositories Collaborators class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Collaborators.md)

### CommandErrorEvent

Event triggered when an uncaught Throwable is received by the application from a command.

[« More »](api_framework-4__classes__Joomla-Console-Event-CommandErrorEvent.md)

### Comments

GitHub API Gists Comments class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Gists-Comments.md)

### Comments

GitHub API Comments class for the Joomla Framework.

The Issue Comments API supports listing, viewing, editing, and creating comments
on issues and pull requests.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues-Comments.md)

### Comments

GitHub API Pulls Comments class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Pulls-Comments.md)

### Comments

GitHub API Repositories Comments class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Comments.md)

### Commits

GitHub API Data Commits class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data-Commits.md)

### Commits

GitHub API Repositories Commits class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Commits.md)

### ConnectionEvent

Database connection event

[« More »](api_framework-4__classes__Joomla-Database-Event-ConnectionEvent.md)

### ConnectionFailureException

Exception class defining an error connecting to the database platform

[« More »](api_framework-4__classes__Joomla-Database-Exception-ConnectionFailureException.md)

### ConsoleEvent

Base event class for console events.

[« More »](api_framework-4__classes__Joomla-Console-Event-ConsoleEvent.md)

### ConsoleEvents

Class defining the events available in the console application.

[« More »](api_framework-4__classes__Joomla-Console-ConsoleEvents.md)

### Container

The Container class.

[« More »](api_framework-4__classes__Joomla-DI-Container.md)

### ContainerControllerResolver

Controller resolver which supports creating controllers from a PSR-11 compatible container

Controllers must be registered in the container using their FQCN as a service key

[« More »](api_framework-4__classes__Joomla-Application-Controller-ContainerControllerResolver.md)

### ContainerLoader

PSR-11 compatible command loader.

[« More »](api_framework-4__classes__Joomla-Console-Loader-ContainerLoader.md)

### ContainerNotFoundException

No container is available.

[« More »](api_framework-4__classes__Joomla-DI-Exception-ContainerNotFoundException.md)

### Contents

GitHub API Repositories Contents class for the Joomla Framework.

These API methods let you retrieve the contents of files within a repository as Base64 encoded content.
See media types for requesting raw or other formats.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Contents.md)

### ControllerResolver

Resolves a controller for the given route.

[« More »](api_framework-4__classes__Joomla-Application-Controller-ControllerResolver.md)

### Cookie

Joomla! Input Cookie Class

[« More »](api_framework-4__classes__Joomla-Input-Cookie.md)

### CreateSessionTableCommand

Command used to create the session database table.

[« More »](api_framework-4__classes__Joomla-Session-Command-CreateSessionTableCommand.md)

### CreateSessionTableException

Exception thrown when the database session table cannot be created

[« More »](api_framework-4__classes__Joomla-Session-Exception-CreateSessionTableException.md)

### Crypt

Crypt is a Joomla Framework class for handling basic encryption/decryption of data.

[« More »](api_framework-4__classes__Joomla-Crypt-Crypt.md)

### Crypto

Joomla cipher for encryption, decryption and key generation via the php-encryption library.

[« More »](api_framework-4__classes__Joomla-Crypt-Cipher-Crypto.md)

### Curl

HTTP transport class for using cURL.

[« More »](api_framework-4__classes__Joomla-Http-Transport-Curl.md)

### Data

GitHub API DB class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data.md)

### DatabaseConnectionNotInitialised

Exception indicating the database connection has not yet been initialized

[« More »](api_framework-4__classes__Joomla-Test-Exception-DatabaseConnectionNotInitialised.md)

### DatabaseDriver

Joomla Framework Database Driver Class

[« More »](api_framework-4__classes__Joomla-Database-DatabaseDriver.md)

### DatabaseEvents

Class defining the events dispatched by the database API

[« More »](api_framework-4__classes__Joomla-Database-DatabaseEvents.md)

### DatabaseExporter

Joomla Framework Database Exporter Class

[« More »](api_framework-4__classes__Joomla-Database-DatabaseExporter.md)

### DatabaseFactory

Joomla Framework Database Factory class

[« More »](api_framework-4__classes__Joomla-Database-DatabaseFactory.md)

### DatabaseHandler

Database session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-DatabaseHandler.md)

### DatabaseImporter

Joomla Framework Database Importer Class

[« More »](api_framework-4__classes__Joomla-Database-DatabaseImporter.md)

### DatabaseIterator

Joomla Framework Database Driver Class

[« More »](api_framework-4__classes__Joomla-Database-DatabaseIterator.md)

### DatabaseManager

Helper class for building a database connection in the test environment

[« More »](api_framework-4__classes__Joomla-Test-DatabaseManager.md)

### DatabaseNotFoundException

No database is available.

[« More »](api_framework-4__classes__Joomla-Database-Exception-DatabaseNotFoundException.md)

### DatabaseProvider

Database service provider

[« More »](api_framework-4__classes__Joomla-Database-Service-DatabaseProvider.md)

### DatabaseQuery

Joomla Framework Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-DatabaseQuery.md)

### DatabaseStrategy

Joomla Framework Database Strategy Authentication class

[« More »](api_framework-4__classes__Joomla-Authentication-Strategies-DatabaseStrategy.md)

### DatabaseTestCase

Base test case for tests interacting with a database

[« More »](api_framework-4__classes__Joomla-Test-DatabaseTestCase.md)

### DataObject

DataObject is a class that is used to store data but allowing you to access the data by mimicking the way PHP handles class properties.

[« More »](api_framework-4__classes__Joomla-Data-DataObject.md)

### DataSet

DataSet is a collection class that allows the developer to operate on a set of DataObjects as if they were in a typical PHP array.

[« More »](api_framework-4__classes__Joomla-Data-DataSet.md)

### DebugEventDispatcherCommand

Command listing information about the application's event dispatcher.

[« More »](api_framework-4__classes__Joomla-Event-Command-DebugEventDispatcherCommand.md)

### DebugMonitor

Query monitor handling logging of queries.

[« More »](api_framework-4__classes__Joomla-Database-Monitor-DebugMonitor.md)

### DebugRouterCommand

Command listing information about the application's router.

[« More »](api_framework-4__classes__Joomla-Router-Command-DebugRouterCommand.md)

### DecryptionException

Exception representing an error decrypting data

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-DecryptionException.md)

### DefaultRenderer

Default profiler renderer.

[« More »](api_framework-4__classes__Joomla-Profiler-Renderer-DefaultRenderer.md)

### DeleteEntryCommand

Command class to delete an entry in a keychain

[« More »](api_framework-4__classes__Joomla-Keychain-Command-DeleteEntryCommand.md)

### DependencyResolutionException

Exception class for handling errors in resolving a dependency

[« More »](api_framework-4__classes__Joomla-DI-Exception-DependencyResolutionException.md)

### Deployments

GitHub API Deployments class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Deployments.md)

### DescriptorHelper

Describes an object.

[« More »](api_framework-4__classes__Joomla-Console-Helper-DescriptorHelper.md)

### Dispatcher

Implementation of a DispatcherInterface supporting prioritized listeners.

[« More »](api_framework-4__classes__Joomla-Event-Dispatcher.md)

### Downloads

GitHub API Repositories Downloads class for the Joomla Framework.

The downloads API is for package downloads only.
If you want to get source tarballs you should use
http://developer.github.com/v3/repos/contents/#get-archive-link instead.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Downloads.md)

### EditEntryCommand

Command class to edit an entry in a keychain

[« More »](api_framework-4__classes__Joomla-Keychain-Command-EditEntryCommand.md)

### Emails

GitHub API Emails class for the Joomla Framework.

Management of email addresses via the API requires that you are authenticated
through basic auth or OAuth with the user scope.

[« More »](api_framework-4__classes__Joomla-Github-Package-Users-Emails.md)

### Emojis

GitHub API Emojis class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Emojis.md)

### En\_GBLocalise

en-GB localisation handler class

[« More »](api_framework-4__classes__Joomla-Language-Localise-En-GBLocalise.md)

### EncryptionException

Exception representing an error encrypting data

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-EncryptionException.md)

### Event

Default Event class.

[« More »](api_framework-4__classes__Joomla-Event-Event.md)

### EventImmutable

Implementation of an immutable Event.

An immutable event cannot be modified after instantiation :
- its propagation cannot be stopped
- its arguments cannot be modified
You may want to use this event when you want to ensure that
the listeners won't manipulate it.

[« More »](api_framework-4__classes__Joomla-Event-EventImmutable.md)

### Events

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity-Events.md)

### Events

GitHub API Issues Events class for the Joomla Framework.

Records various events that occur around an Issue or Pull Request.
This is useful both for display on issue/pull request information pages and also
to determine who should be notified of comments.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues-Events.md)

### ExecutionFailureException

Exception class defining an error executing a statement

[« More »](api_framework-4__classes__Joomla-Database-Exception-ExecutionFailureException.md)

### ExportCommand

Console command for exporting the database

[« More »](api_framework-4__classes__Joomla-Database-Command-ExportCommand.md)

### Factory

Factory class to fetch Registry objects

[« More »](api_framework-4__classes__Joomla-Registry-Factory.md)

### Feeds

GitHub API Activity Feeds class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity-Feeds.md)

### FetchMode

Class defining the fetch mode for prepared statements

The values of the constants in this class match the `PDO::FETCH\_\*` constants.

[« More »](api_framework-4__classes__Joomla-Database-FetchMode.md)

### FetchOrientation

Class defining the fetch orientation for prepared statements

The values of the constants in this class match the `PDO::FETCH\_ORI\_\*` constants.

[« More »](api_framework-4__classes__Joomla-Database-FetchOrientation.md)

### File

A File handling class

[« More »](api_framework-4__classes__Joomla-Filesystem-File.md)

### Files

Joomla! Input Files Class

[« More »](api_framework-4__classes__Joomla-Input-Files.md)

### FilesystemException

Exception class for handling errors in the Filesystem package

[« More »](api_framework-4__classes__Joomla-Filesystem-Exception-FilesystemException.md)

### FilesystemHandler

Filesystem session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-FilesystemHandler.md)

### Folder

A Folder handling class

[« More »](api_framework-4__classes__Joomla-Filesystem-Folder.md)

### Followers

GitHub API Followers class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Users-Followers.md)

### Forks

GitHub API Forks class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Forks.md)

### ForwardedValidator

Interface for validating a part of the session

[« More »](api_framework-4__classes__Joomla-Session-Validator-ForwardedValidator.md)

### FtpClient

FTP client class

[« More »](api_framework-4__classes__Joomla-Filesystem-Clients-FtpClient.md)

### Gists

GitHub API Gists class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Gists.md)

### Github

Joomla Framework class for interacting with a GitHub server instance.

[« More »](api_framework-4__classes__Joomla-Github-Github.md)

### Gitignore

GitHub API Gitignore class for the Joomla Framework.

The .gitignore Templates API lists and fetches templates from the GitHub .gitignore repository.

[« More »](api_framework-4__classes__Joomla-Github-Package-Gitignore.md)

### Graphql

GitHub API GraphQL class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Graphql.md)

### Gzip

Gzip format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_framework-4__classes__Joomla-Archive-Gzip.md)

### HelpCommand

Command to render a command's help data.

[« More »](api_framework-4__classes__Joomla-Console-Command-HelpCommand.md)

### Helper

File system helper

Holds support functions for the filesystem, particularly the stream

[« More »](api_framework-4__classes__Joomla-Filesystem-Helper.md)

### Hooks

GitHub API Orgs Hooks class for the Joomla Framework.

All actions against organization webhooks require the authenticated user to be an admin of the organization being managed.
Additionally, OAuth tokens require the "admin:org\_hook" scope.

[« More »](api_framework-4__classes__Joomla-Github-Package-Orgs-Hooks.md)

### Hooks

GitHub API Hooks class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Hooks.md)

### HtmlView

Joomla Framework HTML View Class

[« More »](api_framework-4__classes__Joomla-View-HtmlView.md)

### Http

HTTP client class.

[« More »](api_framework-4__classes__Joomla-Http-Http.md)

### Http

HTTP client class for connecting to a MediaWiki instance.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Http.md)

### HttpFactory

HTTP factory class.

[« More »](api_framework-4__classes__Joomla-Http-HttpFactory.md)

### Images

MediaWiki API Images class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Images.md)

### ImportCommand

Console command for importing the database

[« More »](api_framework-4__classes__Joomla-Database-Command-ImportCommand.md)

### Inflector

Joomla Framework String Inflector Class

The Inflector transforms words

[« More »](api_framework-4__classes__Joomla-String-Inflector.md)

### Ini

INI format handler for Registry.

[« More »](api_framework-4__classes__Joomla-Registry-Format-Ini.md)

### IniParser

Language file parser for INI files

[« More »](api_framework-4__classes__Joomla-Language-Parser-IniParser.md)

### Input

Joomla! Input Base Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_framework-4__classes__Joomla-Input-Input.md)

### InputFilter

InputFilter is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

[« More »](api_framework-4__classes__Joomla-Filter-InputFilter.md)

### InvalidKeyException

Exception representing an error generating an encryption key

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-InvalidKeyException.md)

### InvalidKeyTypeException

Exception representing an invalid Joomla\Crypt\Key type for a cipher

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-InvalidKeyTypeException.md)

### InvalidResponseCodeException

Exception representing an invalid or undefined HTTP response code

[« More »](api_framework-4__classes__Joomla-Http-Exception-InvalidResponseCodeException.md)

### InvalidSessionException

Exception thrown when a session validator fails

[« More »](api_framework-4__classes__Joomla-Session-Exception-InvalidSessionException.md)

### IpHelper

IpHelper is a utility class for processing IP addresses

[« More »](api_framework-4__classes__Joomla-Utilities-IpHelper.md)

### Issues

GitHub API Issues class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues.md)

### Json

Joomla! Input JSON Class

This class decodes a JSON string from the raw request data and makes it available via the standard Input interface.

[« More »](api_framework-4__classes__Joomla-Input-Json.md)

### Json

JSON format handler for Registry.

[« More »](api_framework-4__classes__Joomla-Registry-Format-Json.md)

### JsonView

Joomla Framework JSON View Class

[« More »](api_framework-4__classes__Joomla-View-JsonView.md)

### Key

Encryption key object for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Crypt-Key.md)

### Keychain

Keychain Class

[« More »](api_framework-4__classes__Joomla-Keychain-Keychain.md)

### KeyNotFoundException

No entry was found in the container.

[« More »](api_framework-4__classes__Joomla-DI-Exception-KeyNotFoundException.md)

### Keys

GitHub API Forks class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Keys.md)

### Keys

GitHub API References class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Users-Keys.md)

### Labels

GitHub API Milestones class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues-Labels.md)

### Language

Languages/translation handler class

[« More »](api_framework-4__classes__Joomla-Language-Language.md)

### LanguageFactory

Language package factory

[« More »](api_framework-4__classes__Joomla-Language-LanguageFactory.md)

### LanguageFactoryProvider

LanguageFactory object service provider

[« More »](api_framework-4__classes__Joomla-Language-Service-LanguageFactoryProvider.md)

### LanguageHelper

Helper class for the Language package

[« More »](api_framework-4__classes__Joomla-Language-LanguageHelper.md)

### LazyServiceEventListener

Decorator for an event listener to be pulled from the service container.

[« More »](api_framework-4__classes__Joomla-Event-LazyServiceEventListener.md)

### Links

MediaWiki API Links class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Links.md)

### ListCommand

Command listing all available commands.

[« More »](api_framework-4__classes__Joomla-Console-Command-ListCommand.md)

### ListEntriesCommand

Command class to list entries in a keychain

[« More »](api_framework-4__classes__Joomla-Keychain-Command-ListEntriesCommand.md)

### LocalStrategy

Joomla Framework Local Strategy Authentication class

[« More »](api_framework-4__classes__Joomla-Authentication-Strategies-LocalStrategy.md)

### LoggingMonitor

Query monitor handling logging of queries.

[« More »](api_framework-4__classes__Joomla-Database-Monitor-LoggingMonitor.md)

### Markdown

GitHub API Markdown class.

[« More »](api_framework-4__classes__Joomla-Github-Package-Markdown.md)

### Mediawiki

Class for interacting with a MediaWiki server instance.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Mediawiki.md)

### Members

GitHub API Orgs Members class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Orgs-Members.md)

### MemcachedHandler

Memcached session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-MemcachedHandler.md)

### Merging

GitHub API Repositories Merging class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Merging.md)

### MessageCatalogue

Catalogue of loaded translation strings for a language

[« More »](api_framework-4__classes__Joomla-Language-MessageCatalogue.md)

### Meta

GitHub API Meta class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Meta.md)

### MethodNotAllowedException

Exception defining a method not allowed error.

[« More »](api_framework-4__classes__Joomla-Router-Exception-MethodNotAllowedException.md)

### Milestones

GitHub API Milestones class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Issues-Milestones.md)

### MissingDatabaseCredentials

Exception indicating the database credentials have not been set

[« More »](api_framework-4__classes__Joomla-Test-Exception-MissingDatabaseCredentials.md)

### MustacheRenderer

Mustache class for rendering output.

[« More »](api_framework-4__classes__Joomla-Renderer-MustacheRenderer.md)

### MysqlDriver

MySQL database driver supporting PDO based connections

[« More »](api_framework-4__classes__Joomla-Database-Mysql-MysqlDriver.md)

### MysqlExporter

MySQL Database Exporter.

[« More »](api_framework-4__classes__Joomla-Database-Mysql-MysqlExporter.md)

### MysqliDriver

MySQLi Database Driver

[« More »](api_framework-4__classes__Joomla-Database-Mysqli-MysqliDriver.md)

### MysqliExporter

MySQLi Database Exporter.

[« More »](api_framework-4__classes__Joomla-Database-Mysqli-MysqliExporter.md)

### MysqliImporter

MySQLi Database Importer.

[« More »](api_framework-4__classes__Joomla-Database-Mysqli-MysqliImporter.md)

### MysqlImporter

MySQL Database Importer.

[« More »](api_framework-4__classes__Joomla-Database-Mysql-MysqlImporter.md)

### MysqliQuery

MySQLi Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Mysqli-MysqliQuery.md)

### MysqliStatement

MySQLi Database Statement.

This class is modeled on \Doctrine\DBAL\Driver\Mysqli\MysqliStatement

[« More »](api_framework-4__classes__Joomla-Database-Mysqli-MysqliStatement.md)

### MysqlQuery

MySQL Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Mysql-MysqlQuery.md)

### NamespaceNotFoundException

Exception indicating a missing command namespace.

[« More »](api_framework-4__classes__Joomla-Console-Exception-NamespaceNotFoundException.md)

### NativeStorage

Base class providing a session store

[« More »](api_framework-4__classes__Joomla-Session-Storage-NativeStorage.md)

### Normalise

Joomla Framework String Normalise Class

[« More »](api_framework-4__classes__Joomla-String-Normalise.md)

### Notifications

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity-Notifications.md)

### OpenSSL

Joomla cipher for encryption, decryption and key generation via the openssl extension.

[« More »](api_framework-4__classes__Joomla-Crypt-Cipher-OpenSSL.md)

### Orgs

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Orgs.md)

### OutputFilter

OutputFilter is a class for processing an output string for "safe" display

[« More »](api_framework-4__classes__Joomla-Filter-OutputFilter.md)

### Pages

GitHub API Repositories Pages class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Pages.md)

### Pages

MediaWiki API Pages class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Pages.md)

### ParameterType

Class defining the parameter types for prepared statements

[« More »](api_framework-4__classes__Joomla-Database-ParameterType.md)

### ParserRegistry

Registry of file parsers

[« More »](api_framework-4__classes__Joomla-Language-ParserRegistry.md)

### Patcher

A Unified Diff Format Patcher class

[« More »](api_framework-4__classes__Joomla-Filesystem-Patcher.md)

### Path

A Path handling class

[« More »](api_framework-4__classes__Joomla-Filesystem-Path.md)

### PdoDriver

Joomla Framework PDO Database Driver Class

[« More »](api_framework-4__classes__Joomla-Database-Pdo-PdoDriver.md)

### PdoQuery

PDO Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Pdo-PdoQuery.md)

### PdoStatement

PDO Database Statement.

[« More »](api_framework-4__classes__Joomla-Database-Pdo-PdoStatement.md)

### PgsqlDriver

PostgreSQL PDO Database Driver

[« More »](api_framework-4__classes__Joomla-Database-Pgsql-PgsqlDriver.md)

### PgsqlExporter

PDO PostgreSQL Database Exporter.

[« More »](api_framework-4__classes__Joomla-Database-Pgsql-PgsqlExporter.md)

### PgsqlImporter

PDO PostgreSQL Database Importer.

[« More »](api_framework-4__classes__Joomla-Database-Pgsql-PgsqlImporter.md)

### PgsqlQuery

PDO PostgreSQL Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Pgsql-PgsqlQuery.md)

### Php

PHP class format handler for Registry

[« More »](api_framework-4__classes__Joomla-Registry-Format-Php.md)

### PhpEngineRenderer

PhpEngine template renderer

[« More »](api_framework-4__classes__Joomla-Renderer-PhpEngineRenderer.md)

### PlatesRenderer

Plates class for rendering output.

[« More »](api_framework-4__classes__Joomla-Renderer-PlatesRenderer.md)

### Porteren

Porter English stemmer class.

This class was adapted from one written by Richard Heyes.
See copyright and link information above.

[« More »](api_framework-4__classes__Joomla-Language-Stemmer-Porteren.md)

### PreloadManager

Manager for HTTP/2 asset preloading

[« More »](api_framework-4__classes__Joomla-Preload-PreloadManager.md)

### PreloadProvider

Service provider for preload package services

[« More »](api_framework-4__classes__Joomla-Preload-Service-PreloadProvider.md)

### PreloadSubscriber

Asset preloading event subscriber

[« More »](api_framework-4__classes__Joomla-Preload-EventListener-PreloadSubscriber.md)

### PrepareStatementFailureException

Exception class defining an error preparing the SQL statement for execution

[« More »](api_framework-4__classes__Joomla-Database-Exception-PrepareStatementFailureException.md)

### Priority

An enumeration of priorities for event listeners that you are encouraged to use when adding them in the Dispatcher.

[« More »](api_framework-4__classes__Joomla-Event-Priority.md)

### ProfilePoint

Implementation of ProfilePointInterface.

[« More »](api_framework-4__classes__Joomla-Profiler-ProfilePoint.md)

### Profiler

Implementation of ProfilerInterface.

[« More »](api_framework-4__classes__Joomla-Profiler-Profiler.md)

### ProtectedKeyException

Attempt to set the value of a protected key, which already is set

[« More »](api_framework-4__classes__Joomla-DI-Exception-ProtectedKeyException.md)

### Pulls

GitHub API Pull Requests class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Pulls.md)

### QueryElement

Query Element Class.

[« More »](api_framework-4__classes__Joomla-Database-Query-QueryElement.md)

### QueryTypeAlreadyDefinedException

Exception class defining an exception when attempting to change a query type

[« More »](api_framework-4__classes__Joomla-Database-Exception-QueryTypeAlreadyDefinedException.md)

### ReadEntryCommand

Command class to read a single entry from a keychain

[« More »](api_framework-4__classes__Joomla-Keychain-Command-ReadEntryCommand.md)

### RedisHandler

Redis session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-RedisHandler.md)

### Refs

GitHub API References class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data-Refs.md)

### RegEx

Utility class for building complex Regular Expressions

[« More »](api_framework-4__classes__Joomla-Utilities-RegEx.md)

### Registry

Registry class

[« More »](api_framework-4__classes__Joomla-Registry-Registry.md)

### Releases

GitHub API References class for the Joomla Platform.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Releases.md)

### Repositories

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories.md)

### ResolvedRoute

An object representing a resolved route.

[« More »](api_framework-4__classes__Joomla-Router-ResolvedRoute.md)

### Response

HTTP response data object class.

[« More »](api_framework-4__classes__Joomla-Http-Response.md)

### Route

An object representing a route definition.

[« More »](api_framework-4__classes__Joomla-Router-Route.md)

### RouteNotFoundException

Exception defining a route not found error.

[« More »](api_framework-4__classes__Joomla-Router-Exception-RouteNotFoundException.md)

### Router

A path router.

[« More »](api_framework-4__classes__Joomla-Router-Router.md)

### RuntimeStorage

Session storage object that stores objects in Runtime memory. This is designed for use in CLI Apps, including
unit testing applications in PHPUnit.

[« More »](api_framework-4__classes__Joomla-Session-Storage-RuntimeStorage.md)

### Search

GitHub API Search class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Search.md)

### Search

MediaWiki API Search class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Search.md)

### Session

Class for managing HTTP sessions

Provides access to session-state values as well as session-level settings and lifetime management methods.
Based on the standard PHP session handling mechanism it provides more advanced features such as expire timeouts.

[« More »](api_framework-4__classes__Joomla-Session-Session.md)

### SessionEvent

Class representing a Session event

[« More »](api_framework-4__classes__Joomla-Session-SessionEvent.md)

### SessionEvents

Class defining the events dispatched by the session API

[« More »](api_framework-4__classes__Joomla-Session-SessionEvents.md)

### SessionState

Class defining the various states of a session

[« More »](api_framework-4__classes__Joomla-Session-SessionState.md)

### Sites

MediaWiki API Sites class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Sites.md)

### Socket

HTTP transport class for using sockets directly.

[« More »](api_framework-4__classes__Joomla-Http-Transport-Socket.md)

### Sodium

Cipher for sodium algorithm encryption, decryption and key generation.

[« More »](api_framework-4__classes__Joomla-Crypt-Cipher-Sodium.md)

### SqlazureDriver

SQL Azure Database Driver

[« More »](api_framework-4__classes__Joomla-Database-Sqlazure-SqlazureDriver.md)

### SqlazureQuery

SQL Azure Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Sqlazure-SqlazureQuery.md)

### SqliteDriver

SQLite database driver supporting PDO based connections

[« More »](api_framework-4__classes__Joomla-Database-Sqlite-SqliteDriver.md)

### SqliteQuery

SQLite Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Sqlite-SqliteQuery.md)

### SqlsrvDriver

SQL Server Database Driver

[« More »](api_framework-4__classes__Joomla-Database-Sqlsrv-SqlsrvDriver.md)

### SqlsrvQuery

SQL Server Query Building Class.

[« More »](api_framework-4__classes__Joomla-Database-Sqlsrv-SqlsrvQuery.md)

### SqlsrvStatement

SQL Server Database Statement.

This class is modeled on \Doctrine\DBAL\Driver\SQLSrv\SQLSrvStatement

[« More »](api_framework-4__classes__Joomla-Database-Sqlsrv-SqlsrvStatement.md)

### Starring

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity-Starring.md)

### Statistics

GitHub API class for the Joomla Framework.

The Repository Statistics API allows you to fetch the data that GitHub uses for
visualizing different types of repository activity.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Statistics.md)

### Statuses

GitHub API References class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Repositories-Statuses.md)

### Stream

Joomla! Stream Interface

The Joomla! stream interface is designed to handle files as streams
where as the legacy JFile static class treated files in a rather
atomic manner.
This class adheres to the stream wrapper operations:

[« More »](api_framework-4__classes__Joomla-Filesystem-Stream.md)

### Stream

HTTP transport class for using PHP streams.

[« More »](api_framework-4__classes__Joomla-Http-Transport-Stream.md)

### StringController

String Controller

[« More »](api_framework-4__classes__Joomla-Filesystem-Support-StringController.md)

### StringHelper

String handling class for UTF-8 data wrapping the phputf8 library. All functions assume the validity of UTF-8 strings.

[« More »](api_framework-4__classes__Joomla-String-StringHelper.md)

### StringWrapper

String Stream Wrapper

This class allows you to use a PHP string in the same way that you would normally use a regular stream wrapper

[« More »](api_framework-4__classes__Joomla-Filesystem-Stream-StringWrapper.md)

### Tags

GitHub API Data Tags class for the Joomla Framework.

This tags API only deals with tag objects - so only annotated tags, not lightweight tags.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data-Tags.md)

### Tar

Tar format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_framework-4__classes__Joomla-Archive-Tar.md)

### Teams

GitHub API Orgs Teams class for the Joomla Framework.

All actions against teams require at a minimum an authenticated user who is a member
of the owner’s team in the :org being managed. Additionally, OAuth users require “user” scope.

[« More »](api_framework-4__classes__Joomla-Github-Package-Orgs-Teams.md)

### TerminateEvent

Event triggered immediately before the process is terminated.

[« More »](api_framework-4__classes__Joomla-Console-Event-TerminateEvent.md)

### TestHelper

Static helper methods to assist unit testing PHP code.

[« More »](api_framework-4__classes__Joomla-Test-TestHelper.md)

### Text

Text handling class.

[« More »](api_framework-4__classes__Joomla-Language-Text.md)

### TextDescriptor

Text object descriptor.

[« More »](api_framework-4__classes__Joomla-Console-Descriptor-TextDescriptor.md)

### Transliterate

Class to transliterate strings

[« More »](api_framework-4__classes__Joomla-Language-Transliterate.md)

### Trees

GitHub API Data Trees class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Data-Trees.md)

### TwigRenderer

Twig class for rendering output.

[« More »](api_framework-4__classes__Joomla-Renderer-TwigRenderer.md)

### UnableToWriteBody

Exception thrown when the application can't write to the response body

[« More »](api_framework-4__classes__Joomla-Application-Exception-UnableToWriteBody.md)

### UnexpectedResponseException

Exception representing an unexpected response

[« More »](api_framework-4__classes__Joomla-Http-Exception-UnexpectedResponseException.md)

### UnknownArchiveException

Exception class defining an unknown archive type

[« More »](api_framework-4__classes__Joomla-Archive-Exception-UnknownArchiveException.md)

### UnknownTypeException

Class representing an unknown type for a given database driver.

[« More »](api_framework-4__classes__Joomla-Database-Exception-UnknownTypeException.md)

### UnsupportedAdapterException

Exception class defining an unsupported database object

[« More »](api_framework-4__classes__Joomla-Database-Exception-UnsupportedAdapterException.md)

### UnsupportedArchiveException

Exception class defining an unsupported archive adapter

[« More »](api_framework-4__classes__Joomla-Archive-Exception-UnsupportedArchiveException.md)

### UnsupportedCipherException

Exception representing an error encrypting data

[« More »](api_framework-4__classes__Joomla-Crypt-Exception-UnsupportedCipherException.md)

### UnsupportedDatabaseDriverException

Exception thrown when the database driver is unsupported

[« More »](api_framework-4__classes__Joomla-Session-Exception-UnsupportedDatabaseDriverException.md)

### UnsupportedPasswordHandlerException

Exception class defining an unsupported password handler

[« More »](api_framework-4__classes__Joomla-Authentication-Exception-UnsupportedPasswordHandlerException.md)

### Uri

Uri Class

This class parses a URI and provides a common interface for the Joomla Framework to access and manipulate a URI.

[« More »](api_framework-4__classes__Joomla-Uri-Uri.md)

### UriHelper

Uri Helper

This class provides a UTF-8 safe version of parse\_url().

[« More »](api_framework-4__classes__Joomla-Uri-UriHelper.md)

### UriImmutable

UriImmutable Class

This is an immutable version of the AbstractUri class.

[« More »](api_framework-4__classes__Joomla-Uri-UriImmutable.md)

### Users

GitHub API References class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Users.md)

### Users

MediaWiki API Users class.

[« More »](api_framework-4__classes__Joomla-Mediawiki-Users.md)

### Watching

GitHub API Activity Watching Events class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Activity-Watching.md)

### WebApplication

A basic web application class for handing HTTP requests.

[« More »](api_framework-4__classes__Joomla-Application-WebApplication.md)

### WebClient

Class to model a Web Client.

[« More »](api_framework-4__classes__Joomla-Application-Web-WebClient.md)

### WincacheHandler

Wincache session storage handler

[« More »](api_framework-4__classes__Joomla-Session-Handler-WincacheHandler.md)

### Xml

XML format handler for Registry.

[« More »](api_framework-4__classes__Joomla-Registry-Format-Xml.md)

### Yaml

YAML format handler for Registry.

[« More »](api_framework-4__classes__Joomla-Registry-Format-Yaml.md)

### Zen

GitHub API Zen class for the Joomla Framework.

[« More »](api_framework-4__classes__Joomla-Github-Package-Zen.md)

### Zip

ZIP format adapter for the Archive package

The ZIP compression code is partially based on code from:
Eric Mueller <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
http://www.zend.com/codex.php?id=535&single=1
Deins125 <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
http://www.zend.com/codex.php?id=470&single=1
The ZIP compression date code is partially based on code from
Peter Listiak <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_framework-4__classes__Joomla-Archive-Zip.md)

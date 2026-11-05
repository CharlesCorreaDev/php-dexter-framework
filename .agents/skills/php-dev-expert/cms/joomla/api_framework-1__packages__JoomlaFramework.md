# Joomla! Framework 1.x API » \JoomlaFramework

> **Fonte / Source:** https://api.joomla.org/framework-1/packages/JoomlaFramework.html

---

## Constants

### \_QQ\_

Allows for quoting in language .ini files.

|  |  |
| --- | --- |
| deprecated | 2.0 |
| package | Joomla Framework |

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

[« More »](api_framework-1__classes__Joomla-DI-ContainerAwareTrait.md)

### DatabaseModelTrait

Trait representing a model holding a database reference

[« More »](api_framework-1__classes__Joomla-Model-DatabaseModelTrait.md)

### DispatcherAwareTrait

Defines the trait for a Dispatcher Aware Class.

[« More »](api_framework-1__classes__Joomla-Event-DispatcherAwareTrait.md)

### StatefulModelTrait

Trait representing a model holding a state

[« More »](api_framework-1__classes__Joomla-Model-StatefulModelTrait.md)

## Interfaces

### AddTemplateFolderInterface

Interface for a renderer which can have template paths added during runtime.

[« More »](api_framework-1__classes__Joomla-Renderer-AddTemplateFolderInterface.md)

### AuthenticationStrategyInterface

Joomla Framework AuthenticationStrategy Interface

[« More »](api_framework-1__classes__Joomla-Authentication-AuthenticationStrategyInterface.md)

### ConfigurableFileExtensionInterface

Interface defining a renderer with a configurable file extension.

[« More »](api_framework-1__classes__Joomla-Renderer-ConfigurableFileExtensionInterface.md)

### ContainerAwareInterface

Defines the interface for a Container Aware class.

[« More »](api_framework-1__classes__Joomla-DI-ContainerAwareInterface.md)

### ControllerInterface

Joomla Framework Controller Interface

[« More »](api_framework-1__classes__Joomla-Controller-ControllerInterface.md)

### DatabaseInterface

Joomla Framework Database Interface

[« More »](api_framework-1__classes__Joomla-Database-DatabaseInterface.md)

### DatabaseModelInterface

Joomla Framework Database Model Interface

[« More »](api_framework-1__classes__Joomla-Model-DatabaseModelInterface.md)

### DispatcherAwareInterface

Interface to be implemented by classes depending on a dispatcher.

[« More »](api_framework-1__classes__Joomla-Event-DispatcherAwareInterface.md)

### DispatcherInterface

Interface for event dispatchers.

[« More »](api_framework-1__classes__Joomla-Event-DispatcherInterface.md)

### DumpableInterface

An interface to define if an object is dumpable.

[« More »](api_framework-1__classes__Joomla-Data-DumpableInterface.md)

### EventInterface

Interface for events.

An event has a name and its propagation can be stopped (if the implementation supports it).

[« More »](api_framework-1__classes__Joomla-Event-EventInterface.md)

### ExtractableInterface

Archive class interface

[« More »](api_framework-1__classes__Joomla-Archive-ExtractableInterface.md)

### FormatInterface

Interface defining a format object

[« More »](api_framework-1__classes__Joomla-Registry-FormatInterface.md)

### HandlerInterface

Interface defining a password handler

[« More »](api_framework-1__classes__Joomla-Authentication-Password-HandlerInterface.md)

### LimitableInterface

Joomla Database Query LimitableInterface.

Adds bind/unbind methods as well as a getBounded() method
to retrieve the stored bounded variables on demand prior to
query execution.

[« More »](api_framework-1__classes__Joomla-Database-Query-LimitableInterface.md)

### LoaderInterface

Interface defining a command loader.

[« More »](api_framework-1__classes__Joomla-Console-Loader-LoaderInterface.md)

### ModelInterface

Joomla Framework Model Interface

[« More »](api_framework-1__classes__Joomla-Model-ModelInterface.md)

### PreparableInterface

Joomla Database Query Preparable Interface.

Adds bind/unbind methods as well as a getBounded() method
to retrieve the stored bounded variables on demand prior to
query execution.

[« More »](api_framework-1__classes__Joomla-Database-Query-PreparableInterface.md)

### ProcessorInterface

Class ProcessorInterface.

[« More »](api_framework-1__classes__Joomla-Application-Cli-Output-Processor-ProcessorInterface.md)

### ProfilePointInterface

Interface for profile points.

A Profile point belongs to a ProfilerInterface and the values it holds (time and memory) are relative to the values
of the first marked point in that profiler.

[« More »](api_framework-1__classes__Joomla-Profiler-ProfilePointInterface.md)

### ProfilerInterface

Interface for Profilers containing a sequence of ProfilePointInterface.

[« More »](api_framework-1__classes__Joomla-Profiler-ProfilerInterface.md)

### ProfilerRendererInterface

Interface for profiler renderers.

[« More »](api_framework-1__classes__Joomla-Profiler-ProfilerRendererInterface.md)

### RendererInterface

Rendering interface.

[« More »](api_framework-1__classes__Joomla-Renderer-RendererInterface.md)

### ServiceProviderInterface

Defines the interface for a Service Provider.

[« More »](api_framework-1__classes__Joomla-DI-ServiceProviderInterface.md)

### StatefulModelInterface

Joomla Framework Stateful Model Interface

[« More »](api_framework-1__classes__Joomla-Model-StatefulModelInterface.md)

### StemmerInterface

Stemmer interface.

[« More »](api_framework-1__classes__Joomla-Language-StemmerInterface.md)

### TransportInterface

HTTP transport class interface.

[« More »](api_framework-1__classes__Joomla-Http-TransportInterface.md)

### UriInterface

Uri Interface

Interface for read-only access to Uris.

[« More »](api_framework-1__classes__Joomla-Uri-UriInterface.md)

### ViewInterface

Joomla Framework View Interface

[« More »](api_framework-1__classes__Joomla-View-ViewInterface.md)

## Classes

### AbstractApplication

Joomla Framework Base Application Class

[« More »](api_framework-1__classes__Joomla-Application-AbstractApplication.md)

### AbstractCliApplication

Base class for a Joomla! command line application.

[« More »](api_framework-1__classes__Joomla-Application-AbstractCliApplication.md)

### AbstractCommand

Base command class for a Joomla! command line application.

[« More »](api_framework-1__classes__Joomla-Console-Command-AbstractCommand.md)

### AbstractController

Joomla Framework Base Controller Class

[« More »](api_framework-1__classes__Joomla-Controller-AbstractController.md)

### AbstractDaemonApplication

Class to turn Cli applications into daemons. It requires CLI and PCNTL support built into PHP.

[« More »](api_framework-1__classes__Joomla-Application-AbstractDaemonApplication.md)

### AbstractDatabaseModel

Joomla Framework Database Model Class

[« More »](api_framework-1__classes__Joomla-Model-AbstractDatabaseModel.md)

### AbstractEvent

Implementation of EventInterface.

[« More »](api_framework-1__classes__Joomla-Event-AbstractEvent.md)

### AbstractGithubObject

GitHub API object class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-AbstractGithubObject.md)

### AbstractHtmlView

Joomla Framework HTML View Class

[« More »](api_framework-1__classes__Joomla-View-AbstractHtmlView.md)

### AbstractMediawikiObject

Mediawiki API object class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Mediawiki-AbstractMediawikiObject.md)

### AbstractModel

Joomla Framework Base Model Class

[« More »](api_framework-1__classes__Joomla-Model-AbstractModel.md)

### AbstractPackage

GitHub API package class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-AbstractPackage.md)

### AbstractRegistryFormat

Abstract Format for Registry

[« More »](api_framework-1__classes__Joomla-Registry-AbstractRegistryFormat.md)

### AbstractRenderer

Abstract class for templates renderer

[« More »](api_framework-1__classes__Joomla-Renderer-AbstractRenderer.md)

### AbstractUri

Uri Class

Abstract base for out uri classes.
This class should be considered an implementation detail. Typehint against UriInterface.

[« More »](api_framework-1__classes__Joomla-Uri-AbstractUri.md)

### AbstractUsernamePasswordAuthenticationStrategy

Abstract AuthenticationStrategy for username/password based authentication

[« More »](api_framework-1__classes__Joomla-Authentication-AbstractUsernamePasswordAuthenticationStrategy.md)

### AbstractView

Joomla Framework Abstract View Class

[« More »](api_framework-1__classes__Joomla-View-AbstractView.md)

### AbstractWebApplication

Base class for a Joomla! Web application.

[« More »](api_framework-1__classes__Joomla-Application-AbstractWebApplication.md)

### Activity

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity.md)

### Application

Base application class for a Joomla! command line application.

[« More »](api_framework-1__classes__Joomla-Console-Application.md)

### ApplicationDescription

Describes an application.

[« More »](api_framework-1__classes__Joomla-Console-Descriptor-ApplicationDescription.md)

### ApplicationErrorEvent

Event triggered when an uncaught Throwable is received by the application.

[« More »](api_framework-1__classes__Joomla-Console-Event-ApplicationErrorEvent.md)

### Archive

An Archive handling class

[« More »](api_framework-1__classes__Joomla-Archive-Archive.md)

### Argon2idHandler

Password handler for Argon2id hashed passwords

[« More »](api_framework-1__classes__Joomla-Authentication-Password-Argon2idHandler.md)

### Argon2iHandler

Password handler for Argon2i hashed passwords

[« More »](api_framework-1__classes__Joomla-Authentication-Password-Argon2iHandler.md)

### ArrayHelper

ArrayHelper is an array utility class for doing all sorts of odds and ends with arrays.

[« More »](api_framework-1__classes__Joomla-Utilities-ArrayHelper.md)

### Assignees

GitHub API Assignees class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues-Assignees.md)

### Authentication

Joomla Framework Authentication Class

[« More »](api_framework-1__classes__Joomla-Authentication-Authentication.md)

### Authorization

GitHub API Authorization class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Authorization.md)

### BCryptHandler

Password handler for BCrypt hashed passwords

[« More »](api_framework-1__classes__Joomla-Authentication-Password-BCryptHandler.md)

### BeforeCommandExecuteEvent

Event triggered before a command is executed.

[« More »](api_framework-1__classes__Joomla-Console-Event-BeforeCommandExecuteEvent.md)

### BladeRenderer

Blade class for rendering output.

[« More »](api_framework-1__classes__Joomla-Renderer-BladeRenderer.md)

### Blobs

GitHub API Data Blobs class for the Joomla Framework.

Since blobs can be any arbitrary binary data, the input and responses for the blob API
takes an encoding parameter that can be either utf-8 or base64. If your data cannot be
losslessly sent as a UTF-8 string, you can base64 encode it.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data-Blobs.md)

### Branches

GitHub API Repositories Branches class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Branches.md)

### Buffer

Generic Buffer stream handler

This class provides a generic buffer stream. It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

[« More »](api_framework-1__classes__Joomla-Filesystem-Buffer.md)

### Bzip2

Bzip2 format adapter for the Archive package

[« More »](api_framework-1__classes__Joomla-Archive-Bzip2.md)

### Categories

MediaWiki API Categories class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Categories.md)

### Cli

Joomla! Input CLI Class

[« More »](api_framework-1__classes__Joomla-Input-Cli.md)

### Client

Joomla Framework class for interacting with an OAuth 1.0 and 1.0a server.

[« More »](api_framework-1__classes__Joomla-Oauth1-Client.md)

### Client

Joomla Framework class for interacting with an OAuth 2.0 server.

[« More »](api_framework-1__classes__Joomla-OAuth2-Client.md)

### CliInput

Class CliInput

[« More »](api_framework-1__classes__Joomla-Application-Cli-CliInput.md)

### CliOutput

Class CliOutput

[« More »](api_framework-1__classes__Joomla-Application-Cli-CliOutput.md)

### Collaborators

GitHub API Repositories Collaborators class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Collaborators.md)

### ColorProcessor

Class ColorProcessor.

[« More »](api_framework-1__classes__Joomla-Application-Cli-ColorProcessor.md)

### ColorProcessor

Class ColorProcessor.

[« More »](api_framework-1__classes__Joomla-Application-Cli-Output-Processor-ColorProcessor.md)

### ColorStyle

Class ColorStyle

[« More »](api_framework-1__classes__Joomla-Application-Cli-ColorStyle.md)

### CommandErrorEvent

Event triggered when an uncaught Throwable is received by the application from a command.

[« More »](api_framework-1__classes__Joomla-Console-Event-CommandErrorEvent.md)

### Comments

GitHub API Gists Comments class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Gists-Comments.md)

### Comments

GitHub API Comments class for the Joomla Framework.

The Issue Comments API supports listing, viewing, editing, and creating comments
on issues and pull requests.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues-Comments.md)

### Comments

GitHub API Pulls Comments class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Pulls-Comments.md)

### Comments

GitHub API Repositories Comments class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Comments.md)

### Commits

GitHub API Data Commits class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data-Commits.md)

### Commits

GitHub API Repositories Commits class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Commits.md)

### Config

Test stub configuration class.

[« More »](api_framework-1__classes__Joomla-Test-Config.md)

### ConnectionFailureException

Exception class defining an error connecting to the database platform

[« More »](api_framework-1__classes__Joomla-Database-Exception-ConnectionFailureException.md)

### ConsoleEvent

Base event class for console events.

[« More »](api_framework-1__classes__Joomla-Console-Event-ConsoleEvent.md)

### ConsoleEvents

Class defining the events available in the console application.

[« More »](api_framework-1__classes__Joomla-Console-ConsoleEvents.md)

### Container

The Container class.

[« More »](api_framework-1__classes__Joomla-DI-Container.md)

### ContainerLoader

PSR-11 compatible command loader.

[« More »](api_framework-1__classes__Joomla-Console-Loader-ContainerLoader.md)

### Contents

GitHub API Repositories Contents class for the Joomla Framework.

These API methods let you retrieve the contents of files within a repository as Base64 encoded content.
See media types for requesting raw or other formats.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Contents.md)

### Cookie

Joomla! Input Cookie Class

[« More »](api_framework-1__classes__Joomla-Input-Cookie.md)

### Curl

HTTP transport class for using cURL.

[« More »](api_framework-1__classes__Joomla-Http-Transport-Curl.md)

### Data

GitHub API DB class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data.md)

### DatabaseDriver

Joomla Framework Database Driver Class

[« More »](api_framework-1__classes__Joomla-Database-DatabaseDriver.md)

### DatabaseExporter

Joomla Framework Database Exporter Class

[« More »](api_framework-1__classes__Joomla-Database-DatabaseExporter.md)

### DatabaseFactory

Joomla Framework Database Factory class

[« More »](api_framework-1__classes__Joomla-Database-DatabaseFactory.md)

### DatabaseImporter

Joomla Framework Database Importer Class

[« More »](api_framework-1__classes__Joomla-Database-DatabaseImporter.md)

### DatabaseIterator

Joomla Framework Database Driver Class

[« More »](api_framework-1__classes__Joomla-Database-DatabaseIterator.md)

### DatabaseQuery

Joomla Framework Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-DatabaseQuery.md)

### DatabaseStrategy

Joomla Framework Database Strategy Authentication class

[« More »](api_framework-1__classes__Joomla-Authentication-Strategies-DatabaseStrategy.md)

### DataObject

DataObject is a class that is used to store data but allowing you to access the data
by mimicking the way PHP handles class properties.

[« More »](api_framework-1__classes__Joomla-Data-DataObject.md)

### DataSet

DataSet is a collection class that allows the developer to operate on a set of DataObject objects as if they were in a
typical PHP array.

[« More »](api_framework-1__classes__Joomla-Data-DataSet.md)

### DefaultRenderer

Default profiler renderer.

[« More »](api_framework-1__classes__Joomla-Profiler-Renderer-DefaultRenderer.md)

### DelegatingDispatcher

A dispatcher delegating its methods to an other dispatcher.

[« More »](api_framework-1__classes__Joomla-Event-DelegatingDispatcher.md)

### DependencyResolutionException

Exception class for handling errors in resolving a dependency

[« More »](api_framework-1__classes__Joomla-DI-Exception-DependencyResolutionException.md)

### Deployments

GitHub API Deployments class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Deployments.md)

### DescriptorHelper

Describes an object.

[« More »](api_framework-1__classes__Joomla-Console-Helper-DescriptorHelper.md)

### Dispatcher

Implementation of a DispatcherInterface supporting
prioritized listeners.

[« More »](api_framework-1__classes__Joomla-Event-Dispatcher.md)

### Downloads

GitHub API Repositories Downloads class for the Joomla Framework.

The downloads API is for package downloads only.
If you want to get source tarballs you should use
http://developer.github.com/v3/repos/contents/#get-archive-link instead.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Downloads.md)

### Emails

GitHub API Emails class for the Joomla Framework.

Management of email addresses via the API requires that you are authenticated
through basic auth or OAuth with the user scope.

[« More »](api_framework-1__classes__Joomla-Github-Package-Users-Emails.md)

### Emojis

GitHub API Emojis class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Emojis.md)

### Event

Default Event class.

[« More »](api_framework-1__classes__Joomla-Event-Event.md)

### EventImmutable

Implementation of an immutable Event.

An immutable event cannot be modified after instanciation :
- its propagation cannot be stopped
- its arguments cannot be modified
You may want to use this event when you want to ensure that
the listeners won't manipulate it.

[« More »](api_framework-1__classes__Joomla-Event-EventImmutable.md)

### Events

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity-Events.md)

### Events

GitHub API Issues Events class for the Joomla Framework.

Records various events that occur around an Issue or Pull Request.
This is useful both for display on issue/pull request information pages and also
to determine who should be notified of comments.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues-Events.md)

### ExecutionFailureException

Exception class defining an error executing a statement

[« More »](api_framework-1__classes__Joomla-Database-Exception-ExecutionFailureException.md)

### Factory

Factory class to fetch Registry objects

[« More »](api_framework-1__classes__Joomla-Registry-Factory.md)

### Feeds

GitHub API Activity Feeds class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity-Feeds.md)

### File

A File handling class

[« More »](api_framework-1__classes__Joomla-Filesystem-File.md)

### Files

Joomla! Input Files Class

[« More »](api_framework-1__classes__Joomla-Input-Files.md)

### FilesystemException

Exception class for handling errors in the Filesystem package

[« More »](api_framework-1__classes__Joomla-Filesystem-Exception-FilesystemException.md)

### Folder

A Folder handling class

[« More »](api_framework-1__classes__Joomla-Filesystem-Folder.md)

### Followers

GitHub API Followers class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Users-Followers.md)

### Forks

GitHub API Forks class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Forks.md)

### FtpClient

FTP client class

[« More »](api_framework-1__classes__Joomla-Filesystem-Clients-FtpClient.md)

### Gists

GitHub API Gists class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Gists.md)

### Github

Joomla Framework class for interacting with a GitHub server instance.

[« More »](api_framework-1__classes__Joomla-Github-Github.md)

### GithubObject

GitHub API object class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-GithubObject.md)

### Gitignore

GitHub API Gitignore class for the Joomla Framework.

The .gitignore Templates API lists and fetches templates from the GitHub .gitignore repository.

[« More »](api_framework-1__classes__Joomla-Github-Package-Gitignore.md)

### Graphql

GitHub API GraphQL class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Graphql.md)

### Gzip

Gzip format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_framework-1__classes__Joomla-Archive-Gzip.md)

### HelpCommand

Command to render a command's help data.

[« More »](api_framework-1__classes__Joomla-Console-Command-HelpCommand.md)

### Helper

File system helper

Holds support functions for the filesystem, particularly the stream

[« More »](api_framework-1__classes__Joomla-Filesystem-Helper.md)

### Hooks

GitHub API Orgs Hooks class for the Joomla Framework.

All actions against organization webhooks require the authenticated user to be an admin of the organization being managed.
Additionally, OAuth tokens require the "admin:org\_hook" scope.

[« More »](api_framework-1__classes__Joomla-Github-Package-Orgs-Hooks.md)

### Hooks

GitHub API Hooks class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Hooks.md)

### Http

HTTP client class for connecting to a GitHub instance.

[« More »](api_framework-1__classes__Joomla-Github-Http.md)

### Http

HTTP client class.

[« More »](api_framework-1__classes__Joomla-Http-Http.md)

### Http

HTTP client class for connecting to a MediaWiki instance.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Http.md)

### HttpFactory

HTTP factory class.

[« More »](api_framework-1__classes__Joomla-Http-HttpFactory.md)

### Images

MediaWiki API Images class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Images.md)

### Inflector

Joomla Framework String Inflector Class

The Inflector transforms words

[« More »](api_framework-1__classes__Joomla-String-Inflector.md)

### Ini

INI format handler for Registry.

[« More »](api_framework-1__classes__Joomla-Registry-Format-Ini.md)

### Input

Joomla! Input Base Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_framework-1__classes__Joomla-Input-Input.md)

### InputFilter

InputFilter is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

[« More »](api_framework-1__classes__Joomla-Filter-InputFilter.md)

### InvalidResponseCodeException

Exception representing an invalid or undefined HTTP response code

[« More »](api_framework-1__classes__Joomla-Http-Exception-InvalidResponseCodeException.md)

### IpHelper

IpHelper is a utility class for processing IP addresses

[« More »](api_framework-1__classes__Joomla-Utilities-IpHelper.md)

### Issues

GitHub API Issues class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues.md)

### Json

Joomla! Input JSON Class

This class decodes a JSON string from the raw request data and makes it available via
the standard Input interface.

[« More »](api_framework-1__classes__Joomla-Input-Json.md)

### Json

JSON format handler for Registry.

[« More »](api_framework-1__classes__Joomla-Registry-Format-Json.md)

### Keychain

Keychain Class

[« More »](api_framework-1__classes__Joomla-Keychain-Keychain.md)

### KeyNotFoundException

No entry was found in the container.

[« More »](api_framework-1__classes__Joomla-DI-Exception-KeyNotFoundException.md)

### Keys

GitHub API Forks class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Keys.md)

### Keys

GitHub API References class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Users-Keys.md)

### Labels

GitHub API Milestones class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues-Labels.md)

### Language

Languages/translation handler class

[« More »](api_framework-1__classes__Joomla-Language-Language.md)

### LanguageFactory

Language package factory

[« More »](api_framework-1__classes__Joomla-Language-LanguageFactory.md)

### Links

MediaWiki API Links class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Links.md)

### ListCommand

Command listing all available commands.

[« More »](api_framework-1__classes__Joomla-Console-Command-ListCommand.md)

### ListenersPriorityQueue

A class containing an inner listeners priority queue that can be iterated multiple times.

One instance of ListenersPriorityQueue is used per Event in the Dispatcher.

[« More »](api_framework-1__classes__Joomla-Event-ListenersPriorityQueue.md)

### LocalStrategy

Joomla Framework Local Strategy Authentication class

[« More »](api_framework-1__classes__Joomla-Authentication-Strategies-LocalStrategy.md)

### Markdown

GitHub API Markdown class.

[« More »](api_framework-1__classes__Joomla-Github-Package-Markdown.md)

### Mediawiki

Class for interacting with a MediaWiki server instance.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Mediawiki.md)

### Members

GitHub API Orgs Members class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Orgs-Members.md)

### Merging

GitHub API Repositories Merging class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Merging.md)

### Meta

GitHub API Meta class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Meta.md)

### Milestones

GitHub API Milestones class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Issues-Milestones.md)

### MustacheRenderer

Mustache class for rendering output.

[« More »](api_framework-1__classes__Joomla-Renderer-MustacheRenderer.md)

### MysqlDriver

MySQL database driver supporting PDO based connections

[« More »](api_framework-1__classes__Joomla-Database-Mysql-MysqlDriver.md)

### MysqlExporter

MySQL Database Exporter.

[« More »](api_framework-1__classes__Joomla-Database-Mysql-MysqlExporter.md)

### MysqliDriver

MySQLi Database Driver

[« More »](api_framework-1__classes__Joomla-Database-Mysqli-MysqliDriver.md)

### MysqliExporter

MySQLi Database Exporter.

[« More »](api_framework-1__classes__Joomla-Database-Mysqli-MysqliExporter.md)

### MysqliImporter

MySQLi Database Importer.

[« More »](api_framework-1__classes__Joomla-Database-Mysqli-MysqliImporter.md)

### MysqliIterator

MySQLi Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Mysqli-MysqliIterator.md)

### MysqlImporter

MySQL Database Importer.

[« More »](api_framework-1__classes__Joomla-Database-Mysql-MysqlImporter.md)

### MysqliQuery

MySQLi Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Mysqli-MysqliQuery.md)

### MysqlIterator

MySQL Database Iterator

[« More »](api_framework-1__classes__Joomla-Database-Mysql-MysqlIterator.md)

### MysqlQuery

MySQL Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Mysql-MysqlQuery.md)

### NamespaceNotFoundException

Exception indicating a missing command namespace.

[« More »](api_framework-1__classes__Joomla-Console-Exception-NamespaceNotFoundException.md)

### Normalise

Joomla Framework String Normalise Class

[« More »](api_framework-1__classes__Joomla-String-Normalise.md)

### Notifications

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity-Notifications.md)

### OracleDriver

Oracle Database Driver supporting PDO based connections

[« More »](api_framework-1__classes__Joomla-Database-Oracle-OracleDriver.md)

### OracleIterator

Oracle Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Oracle-OracleIterator.md)

### OracleQuery

Oracle Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Oracle-OracleQuery.md)

### Orgs

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Orgs.md)

### OutputFilter

OutputFilter is a class for processing an output string for "safe" display

[« More »](api_framework-1__classes__Joomla-Filter-OutputFilter.md)

### Package

GitHub API package class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package.md)

### Pages

GitHub API Repositories Pages class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Pages.md)

### Pages

MediaWiki API Pages class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Pages.md)

### Patcher

A Unified Diff Format Patcher class

[« More »](api_framework-1__classes__Joomla-Filesystem-Patcher.md)

### Path

A Path handling class

[« More »](api_framework-1__classes__Joomla-Filesystem-Path.md)

### PdoDriver

Joomla Framework PDO Database Driver Class

[« More »](api_framework-1__classes__Joomla-Database-Pdo-PdoDriver.md)

### PdoIterator

PDO Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Pdo-PdoIterator.md)

### PdoQuery

PDO Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Pdo-PdoQuery.md)

### PgsqlDriver

PostgreSQL PDO Database Driver

[« More »](api_framework-1__classes__Joomla-Database-Pgsql-PgsqlDriver.md)

### PgsqlExporter

PDO PostgreSQL Database Exporter.

[« More »](api_framework-1__classes__Joomla-Database-Pgsql-PgsqlExporter.md)

### PgsqlImporter

PDO PostgreSQL Database Importer.

[« More »](api_framework-1__classes__Joomla-Database-Pgsql-PgsqlImporter.md)

### PgsqlIterator

PDO PostgreSQL Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Pgsql-PgsqlIterator.md)

### PgsqlQuery

PDO PostgreSQL Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Pgsql-PgsqlQuery.md)

### Php

PHP class format handler for Registry

[« More »](api_framework-1__classes__Joomla-Registry-Format-Php.md)

### PhpEngineRenderer

PhpEngine template renderer

[« More »](api_framework-1__classes__Joomla-Renderer-PhpEngineRenderer.md)

### PhpUnit6TestCase

Compatibility test case used for PHPUnit 6.x and earlier

[« More »](api_framework-1__classes__Joomla-Test-PHPUnit-PhpUnit6TestCase.md)

### PhpUnit7TestCase

Compatibility test case used for PHPUnit 7.x and later

[« More »](api_framework-1__classes__Joomla-Test-PHPUnit-PhpUnit7TestCase.md)

### PlatesRenderer

Plates class for rendering output.

[« More »](api_framework-1__classes__Joomla-Renderer-PlatesRenderer.md)

### Porteren

Porter English stemmer class.

This class was adapted from one written by Richard Heyes.
See copyright and link information above.

[« More »](api_framework-1__classes__Joomla-Language-Stemmer-Porteren.md)

### PostgresqlDriver

PostgreSQL Database Driver

[« More »](api_framework-1__classes__Joomla-Database-Postgresql-PostgresqlDriver.md)

### PostgresqlExporter

PostgreSQL Database Exporter.

[« More »](api_framework-1__classes__Joomla-Database-Postgresql-PostgresqlExporter.md)

### PostgresqlImporter

PostgreSQL Database Importer.

[« More »](api_framework-1__classes__Joomla-Database-Postgresql-PostgresqlImporter.md)

### PostgresqlIterator

PostgreSQL Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Postgresql-PostgresqlIterator.md)

### PostgresqlQuery

PostgreSQL Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Postgresql-PostgresqlQuery.md)

### PreloadManager

Manager for HTTP/2 asset preloading

[« More »](api_framework-1__classes__Joomla-Preload-PreloadManager.md)

### PreloadProvider

Service provider for preload package services

[« More »](api_framework-1__classes__Joomla-Preload-Service-PreloadProvider.md)

### PreloadSubscriber

Asset preloading event subscriber

[« More »](api_framework-1__classes__Joomla-Preload-EventListener-PreloadSubscriber.md)

### Priority

An enumeration of priorities for event listeners,
that you are encouraged to use when adding them in the Dispatcher.

[« More »](api_framework-1__classes__Joomla-Event-Priority.md)

### ProfilePoint

Implementation of ProfilePointInterface.

[« More »](api_framework-1__classes__Joomla-Profiler-ProfilePoint.md)

### Profiler

Implementation of ProfilerInterface.

[« More »](api_framework-1__classes__Joomla-Profiler-Profiler.md)

### ProtectedKeyException

Attempt to set the value of a protected key, which already is set

[« More »](api_framework-1__classes__Joomla-DI-Exception-ProtectedKeyException.md)

### Pulls

GitHub API Pull Requests class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Pulls.md)

### QueryElement

Query Element Class.

[« More »](api_framework-1__classes__Joomla-Database-Query-QueryElement.md)

### Refs

GitHub API References class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data-Refs.md)

### Registry

Registry class

[« More »](api_framework-1__classes__Joomla-Registry-Registry.md)

### Releases

GitHub API References class for the Joomla Platform.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Releases.md)

### Repositories

GitHub API Activity class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories.md)

### Response

HTTP response data object class.

[« More »](api_framework-1__classes__Joomla-Http-Response.md)

### RestRouter

RESTful Web application router class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Router-RestRouter.md)

### Router

A path router.

[« More »](api_framework-1__classes__Joomla-Router-Router.md)

### Search

GitHub API Search class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Search.md)

### Search

MediaWiki API Search class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Search.md)

### Sites

MediaWiki API Sites class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Sites.md)

### Socket

HTTP transport class for using sockets directly.

[« More »](api_framework-1__classes__Joomla-Http-Transport-Socket.md)

### SqlazureDriver

SQL Azure Database Driver

[« More »](api_framework-1__classes__Joomla-Database-Sqlazure-SqlazureDriver.md)

### SqlazureIterator

SQL Azure Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Sqlazure-SqlazureIterator.md)

### SqlazureQuery

SQL Azure Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Sqlazure-SqlazureQuery.md)

### SqliteDriver

SQLite database driver supporting PDO based connections

[« More »](api_framework-1__classes__Joomla-Database-Sqlite-SqliteDriver.md)

### SqliteIterator

SQLite Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Sqlite-SqliteIterator.md)

### SqliteQuery

SQLite Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Sqlite-SqliteQuery.md)

### SqlsrvDriver

SQL Server Database Driver

[« More »](api_framework-1__classes__Joomla-Database-Sqlsrv-SqlsrvDriver.md)

### SqlsrvIterator

SQL Server Database Iterator.

[« More »](api_framework-1__classes__Joomla-Database-Sqlsrv-SqlsrvIterator.md)

### SqlsrvQuery

SQL Server Query Building Class.

[« More »](api_framework-1__classes__Joomla-Database-Sqlsrv-SqlsrvQuery.md)

### Starring

GitHub API Activity Events class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity-Starring.md)

### Statistics

GitHub API class for the Joomla Framework.

The Repository Statistics API allows you to fetch the data that GitHub uses for
visualizing different types of repository activity.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Statistics.md)

### Statuses

GitHub API References class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Repositories-Statuses.md)

### Stdout

Class Stdout.

[« More »](api_framework-1__classes__Joomla-Application-Cli-Output-Stdout.md)

### Stemmer

Stemmer base class.

[« More »](api_framework-1__classes__Joomla-Language-Stemmer.md)

### Stream

Joomla! Stream Interface

The Joomla! stream interface is designed to handle files as streams
where as the legacy JFile static class treated files in a rather
atomic manner.
This class adheres to the stream wrapper operations:

[« More »](api_framework-1__classes__Joomla-Filesystem-Stream.md)

### Stream

HTTP transport class for using PHP streams.

[« More »](api_framework-1__classes__Joomla-Http-Transport-Stream.md)

### String

String Stream Wrapper

This class allows you to use a PHP string in the same way that
you would normally use a regular stream wrapper

[« More »](api_framework-1__classes__Joomla-Filesystem-Stream-String.md)

### String

String handling class for utf-8 data
Wraps the phputf8 library
All functions assume the validity of utf-8 strings.

[« More »](api_framework-1__classes__Joomla-String-String.md)

### StringController

String Controller

[« More »](api_framework-1__classes__Joomla-Filesystem-Support-StringController.md)

### StringHelper

String handling class for UTF-8 data wrapping the phputf8 library. All functions assume the validity of UTF-8 strings.

[« More »](api_framework-1__classes__Joomla-String-StringHelper.md)

### StringWrapper

String Stream Wrapper

This class allows you to use a PHP string in the same way that you would normally use a regular stream wrapper

[« More »](api_framework-1__classes__Joomla-Filesystem-Stream-StringWrapper.md)

### Tags

GitHub API Data Tags class for the Joomla Framework.

This tags API only deals with tag objects - so only annotated tags, not lightweight tags.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data-Tags.md)

### Tar

Tar format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_framework-1__classes__Joomla-Archive-Tar.md)

### Teams

GitHub API Orgs Teams class for the Joomla Framework.

All actions against teams require at a minimum an authenticated user who is a member
of the owner’s team in the :org being managed. Additionally, OAuth users require “user” scope.

[« More »](api_framework-1__classes__Joomla-Github-Package-Orgs-Teams.md)

### TerminateEvent

Event triggered immediately before the process is terminated.

[« More »](api_framework-1__classes__Joomla-Console-Event-TerminateEvent.md)

### TestCase

Compatibility test case used for PHPUnit 6.x and earlier

[« More »](api_framework-1__classes__Joomla-Test-PHPUnit-TestCase.md)

### TestDatabase

Abstract test case class for database testing.

[« More »](api_framework-1__classes__Joomla-Test-TestDatabase.md)

### TestHelper

Static helper methods to assist unit testing PHP code.

[« More »](api_framework-1__classes__Joomla-Test-TestHelper.md)

### Text

Text handling class.

[« More »](api_framework-1__classes__Joomla-Language-Text.md)

### TextDescriptor

Text object descriptor.

[« More »](api_framework-1__classes__Joomla-Console-Descriptor-TextDescriptor.md)

### Transliterate

Class to transliterate strings

[« More »](api_framework-1__classes__Joomla-Language-Transliterate.md)

### Trees

GitHub API Data Trees class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Data-Trees.md)

### TwigRenderer

Twig class for rendering output.

[« More »](api_framework-1__classes__Joomla-Renderer-TwigRenderer.md)

### UnexpectedResponseException

Exception representing an unexpected response

[« More »](api_framework-1__classes__Joomla-Http-Exception-UnexpectedResponseException.md)

### UnknownArchiveException

Exception class defining an unknown archive type

[« More »](api_framework-1__classes__Joomla-Archive-Exception-UnknownArchiveException.md)

### UnsupportedAdapterException

Exception class defining an unsupported database object

[« More »](api_framework-1__classes__Joomla-Database-Exception-UnsupportedAdapterException.md)

### UnsupportedArchiveException

Exception class defining an unsupported archive adapter

[« More »](api_framework-1__classes__Joomla-Archive-Exception-UnsupportedArchiveException.md)

### Uri

Uri Class

This class parses a URI and provides a common interface for the Joomla Framework
to access and manipulate a URI.

[« More »](api_framework-1__classes__Joomla-Uri-Uri.md)

### UriHelper

Uri Helper

This class provides a UTF-8 safe version of parse\_url().

[« More »](api_framework-1__classes__Joomla-Uri-UriHelper.md)

### UriImmutable

Uri Class

This is an immutable version of the uri class.

[« More »](api_framework-1__classes__Joomla-Uri-UriImmutable.md)

### Users

GitHub API References class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Users.md)

### Users

MediaWiki API Users class.

[« More »](api_framework-1__classes__Joomla-Mediawiki-Users.md)

### Watching

GitHub API Activity Watching Events class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Activity-Watching.md)

### WebClient

Class to model a Web Client.

[« More »](api_framework-1__classes__Joomla-Application-Web-WebClient.md)

### WebInspector

Inspector for the Joomla\Application\AbstractWebApplication class.

[« More »](api_framework-1__classes__Joomla-Test-WebInspector.md)

### Xml

Class Xml.

[« More »](api_framework-1__classes__Joomla-Application-Cli-Output-Xml.md)

### Xml

XML format handler for Registry.

[« More »](api_framework-1__classes__Joomla-Registry-Format-Xml.md)

### Yaml

YAML format handler for Registry.

[« More »](api_framework-1__classes__Joomla-Registry-Format-Yaml.md)

### Zen

GitHub API Zen class for the Joomla Framework.

[« More »](api_framework-1__classes__Joomla-Github-Package-Zen.md)

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

[« More »](api_framework-1__classes__Joomla-Archive-Zip.md)

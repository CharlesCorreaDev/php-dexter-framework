# Joomla! CMS 3.10.x API » \JoomlaCMS

> **Fonte / Source:** https://api.joomla.org/cms-3/packages/JoomlaCMS.html

---

## Constants

### \_QQ\_

Defines a placeholder for a double quote character (") in a language file

|  |  |
| --- | --- |
| var |  |
| since | 1.6 |
| deprecated | 4.0 Use escaped double quotes (") instead. |
| package | Joomla CMS |

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

### JCOMPAT\_UNICODE\_PROPERTIES

Flag indicating UTF-8 and PCRE support is present

|  |  |
| --- | --- |
| var |  |
| since | 1.6 |
| package | Joomla CMS |

### JPATH\_COMPONENT

Defines the path to the active component for the request

Note this constant is application aware and is different for each application (site/admin).

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### JPATH\_COMPONENT\_ADMINISTRATOR

Defines the path to the admin element of the active component for the request

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### JPATH\_COMPONENT\_SITE

Defines the path to the site element of the active component for the request

|  |  |
| --- | --- |
| var |  |
| since | 1.5 |
| package | Joomla CMS |

### JPATH\_ROOT

|  |  |
| --- | --- |
| package | Joomla CMS |

## Traits

### TaggableTableTrait

Defines the trait for a Taggable Table Class.

Note: This is a placeholder to ease transition to the new system in 4.0

[« More »](api_cms-3__classes__Joomla-CMS-Tag-TaggableTableTrait.md)

### VersionableControllerTrait

Defines the trait for a Versionable Controller Class.

Note: This is a placeholder to ease transition to the new system in 4.0

[« More »](api_cms-3__classes__Joomla-CMS-Versioning-VersionableControllerTrait.md)

### VersionableModelTrait

Defines the trait for a Versionable Model Class.

Note: This is a placeholder to ease transition to the new system in 4.0

[« More »](api_cms-3__classes__Joomla-CMS-Versioning-VersionableModelTrait.md)

## Interfaces

### AssociationExtensionInterface

Association Extension Interface for the helper classes

[« More »](api_cms-3__classes__Joomla-CMS-Association-AssociationExtensionInterface.md)

### CacheExceptionInterface

Exception interface defining a cache storage error

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Exception-CacheExceptionInterface.md)

### CategoryFactoryInterface

Category factory interface

[« More »](api_cms-3__classes__Joomla-CMS-Categories-CategoryFactoryInterface.md)

### CategoryInterface

The category interface.

[« More »](api_cms-3__classes__Joomla-CMS-Categories-CategoryInterface.md)

### CipherInterface

Crypt cipher interface.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-CipherInterface.md)

### CryptPassword

Joomla Platform Password Hashing Interface

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-CryptPassword.md)

### LayoutInterface

Interface to handle display layout

[« More »](api_cms-3__classes__Joomla-CMS-Layout-LayoutInterface.md)

### MVCFactoryInterface

Factory to create MVC objects.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Factory-MVCFactoryInterface.md)

### NamespaceParserInterface

Feed Namespace interface.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Parser-NamespaceParserInterface.md)

### ProviderAwareAuthenticationPluginInterface

Interface class defining the necessary methods for an authentication plugin to be provider aware
Please note: might be deprecated with Joomla 4.2

[« More »](api_cms-3__classes__Joomla-CMS-Authentication-ProviderAwareAuthenticationPluginInterface.md)

### RouterInterface

Component routing interface

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-RouterInterface.md)

### RulesInterface

RouterRules interface for Joomla

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-Rules-RulesInterface.md)

### TableInterface

Table class interface.

[« More »](api_cms-3__classes__Joomla-CMS-Table-TableInterface.md)

### TaggableTableInterface

Empty Interface for a taggable Table class as a placeholder for extensions that need compatibility between Joomla
Note: This is an empty placeholder to ease transition to the new system in 4.0. In 4.x this interface will contain
4 methods (these aren't included as they contain return typehints which would unncessarily increase the minimum PHP
version required to use this interface).

[« More »](api_cms-3__classes__Joomla-CMS-Tag-TaggableTableInterface.md)

### TransportInterface

HTTP transport class interface.

[« More »](api_cms-3__classes__Joomla-CMS-Http-TransportInterface.md)

### UCM

Interface to handle UCM

[« More »](api_cms-3__classes__Joomla-CMS-UCM-UCM.md)

### VersionableTableInterface

Interface for a versionable Table class

[« More »](api_cms-3__classes__Joomla-CMS-Versioning-VersionableTableInterface.md)

## Classes

### AbstractMenu

Menu class

[« More »](api_cms-3__classes__Joomla-CMS-Menu-AbstractMenu.md)

### AbstractObserver

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Observer-AbstractObserver.md)

### Access

Class that handles all access authorisation routines.

[« More »](api_cms-3__classes__Joomla-CMS-Access-Access.md)

### Access

Wrapper class for Access

[« More »](api_cms-3__classes__Joomla-CMS-Access-Wrapper-Access.md)

### Adapter

Adapter Class
Retains common adapter pattern functions
Class harvested from joomla.installer.installer

[« More »](api_cms-3__classes__Joomla-CMS-Adapter-Adapter.md)

### AdapterInstance

Adapter Instance Class

[« More »](api_cms-3__classes__Joomla-CMS-Adapter-AdapterInstance.md)

### AdminController

Base class for a Joomla Administrator Controller

Controller (controllers are where you put all the actual code) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Controller-AdminController.md)

### AdministratorApplication

Joomla! Administrator Application class

[« More »](api_cms-3__classes__Joomla-CMS-Application-AdministratorApplication.md)

### AdministratorMenu

Menu class.

[« More »](api_cms-3__classes__Joomla-CMS-Menu-AdministratorMenu.md)

### AdministratorRouter

Class to create and parse routes

[« More »](api_cms-3__classes__Joomla-CMS-Router-AdministratorRouter.md)

### AdminModel

Prototype admin model.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Model-AdminModel.md)

### ApcStorage

APC cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-ApcStorage.md)

### ApcuStorage

APCu cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-ApcuStorage.md)

### ApplicationHelper

Application helper functions

[« More »](api_cms-3__classes__Joomla-CMS-Application-ApplicationHelper.md)

### Asset

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Asset.md)

### AssociationExtensionHelper

Association Extension Helper

[« More »](api_cms-3__classes__Joomla-CMS-Association-AssociationExtensionHelper.md)

### Associations

Utility class for associations in multilang

[« More »](api_cms-3__classes__Joomla-CMS-Language-Associations.md)

### AtomParser

ATOM Feed Parser class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Parser-AtomParser.md)

### AtomRenderer

AtomRenderer is a feed that implements the atom specification

Please note that just by using this class you won't automatically
produce valid atom files. For example, you have to specify either an editor
for the feed or an author for every single feed item.

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Feed-AtomRenderer.md)

### Authentication

Authentication class, provides an interface for the Joomla authentication system

[« More »](api_cms-3__classes__Joomla-CMS-Authentication-Authentication.md)

### AuthenticationHelper

Authentication helper class

[« More »](api_cms-3__classes__Joomla-CMS-Helper-AuthenticationHelper.md)

### AuthenticationResponse

Authentication response class, provides an object for storing user and error details

[« More »](api_cms-3__classes__Joomla-CMS-Authentication-AuthenticationResponse.md)

### AuthorField

Form Field to load a list of content authors

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-AuthorField.md)

### BaseApplication

Joomla Platform Base Application Class

[« More »](api_cms-3__classes__Joomla-CMS-Application-BaseApplication.md)

### BaseController

Base class for a Joomla Controller

Controller (Controllers are where you put all the actual code.) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Controller-BaseController.md)

### BaseDatabaseModel

Base class for a database aware Joomla Model

Acts as a Factory class for application specific objects and provides many supporting API functions.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Model-BaseDatabaseModel.md)

### BaseLayout

Base class for rendering a display layout

[« More »](api_cms-3__classes__Joomla-CMS-Layout-BaseLayout.md)

### BlowfishCipher

Crypt cipher for Blowfish encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-BlowfishCipher.md)

### BooleanRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-BooleanRule.md)

### Browser

Browser class, provides capability information about the current web client.

Browser identification is performed by examining the HTTP\_USER\_AGENT
environment variable provided by the web server.
This class has many influences from the lib/Browser.php code in
version 3 of Horde by Chuck Hagenbuch and Jon Parise.

[« More »](api_cms-3__classes__Joomla-CMS-Environment-Browser.md)

### BufferStreamHandler

Generic Buffer stream handler

This class provides a generic buffer stream. It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

[« More »](api_cms-3__classes__Joomla-CMS-Utility-BufferStreamHandler.md)

### Cache

Joomla! Cache base object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Cache.md)

### CacheConnectingException

Exception class defining an error connecting to the cache storage engine

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Exception-CacheConnectingException.md)

### CacheController

Public cache handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-CacheController.md)

### CacheliteStorage

Cache lite storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-CacheliteStorage.md)

### CacheStorage

Abstract cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-CacheStorage.md)

### CacheStorageHelper

Cache storage helper functions.

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-CacheStorageHelper.md)

### CalendarRule

Form Rule class for the Joomla Platform

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-CalendarRule.md)

### CallbackController

Joomla! Cache callback type object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Controller-CallbackController.md)

### CallbackLogger

Joomla! Callback Log class

This class allows logging to be handled by a callback function.
This allows unprecedented flexibility in the way logging can be handled.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-CallbackLogger.md)

### Captcha

Joomla! Captcha base object

[« More »](api_cms-3__classes__Joomla-CMS-Captcha-Captcha.md)

### CaptchaField

Captcha field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-CaptchaField.md)

### CaptchaRule

Form Rule class for the Joomla Framework.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-CaptchaRule.md)

### Categories

Categories Class.

[« More »](api_cms-3__classes__Joomla-CMS-Categories-Categories.md)

### CategoriesView

Categories view base class.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-View-CategoriesView.md)

### Category

Category table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Category.md)

### CategoryFactory

Option based categories factory.

[« More »](api_cms-3__classes__Joomla-CMS-Categories-CategoryFactory.md)

### CategoryFeedView

Base feed View class for a category

[« More »](api_cms-3__classes__Joomla-CMS-MVC-View-CategoryFeedView.md)

### CategoryNode

Helper class to load Categorytree

[« More »](api_cms-3__classes__Joomla-CMS-Categories-CategoryNode.md)

### CategoryView

Base HTML View class for the a Category list

[« More »](api_cms-3__classes__Joomla-CMS-MVC-View-CategoryView.md)

### ChangeItem

Each object represents one query, which is one line from a DDL SQL query.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
`administrator/components/com\_admin/sql/updates/<database>`.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-3__classes__Joomla-CMS-Schema-ChangeItem.md)

### ChangeSet

Contains a set of JSchemaChange objects for a particular instance of Joomla.

Each of these objects contains a DDL query that should have been run against
the database when this database was created or updated. This enables the
Installation Manager to check that the current database schema is up to date.

[« More »](api_cms-3__classes__Joomla-CMS-Schema-ChangeSet.md)

### ChromestyleField

Chrome Styles field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ChromestyleField.md)

### Cli

Joomla! Input CLI Class

[« More »](api_cms-3__classes__Joomla-CMS-Input-Cli.md)

### CliApplication

Base class for a Joomla! command line application.

[« More »](api_cms-3__classes__Joomla-CMS-Application-CliApplication.md)

### ClientHelper

Client helper class

[« More »](api_cms-3__classes__Joomla-CMS-Client-ClientHelper.md)

### ClientWrapper

Wrapper class for ClientHelper

[« More »](api_cms-3__classes__Joomla-CMS-Client-ClientWrapper.md)

### CMSApplication

Joomla! CMS Application class

[« More »](api_cms-3__classes__Joomla-CMS-Application-CMSApplication.md)

### CMSHelper

Base Helper class.

[« More »](api_cms-3__classes__Joomla-CMS-Helper-CMSHelper.md)

### CMSObject

Joomla Platform Object Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-3__classes__Joomla-CMS-Object-CMSObject.md)

### CMSPlugin

Plugin Class

[« More »](api_cms-3__classes__Joomla-CMS-Plugin-CMSPlugin.md)

### CollectionAdapter

Collection Update Adapter Class

[« More »](api_cms-3__classes__Joomla-CMS-Updater-Adapter-CollectionAdapter.md)

### ColorRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-ColorRule.md)

### Component

A Component type of node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node-Component.md)

### ComponentAdapter

Component installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-ComponentAdapter.md)

### ComponentHelper

Component helper class

[« More »](api_cms-3__classes__Joomla-CMS-Component-ComponentHelper.md)

### ComponentRecord

Object representing a component extension record

[« More »](api_cms-3__classes__Joomla-CMS-Component-ComponentRecord.md)

### ComponentRenderer

HTML document renderer for the component output

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Html-ComponentRenderer.md)

### ConfirmButton

Renders a standard button with a confirm dialog

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-ConfirmButton.md)

### Container

A Container type of node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node-Container.md)

### Content

Content table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Content.md)

### ContentHelper

Helper for standard content style extensions.

This class mainly simplifies static helper methods often repeated in individual components

[« More »](api_cms-3__classes__Joomla-CMS-Helper-ContentHelper.md)

### ContentHistory

Content History table.

[« More »](api_cms-3__classes__Joomla-CMS-Table-ContentHistory.md)

### ContentHistory

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Observer-ContentHistory.md)

### ContenthistoryField

Field to select Content History from a modal list.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ContenthistoryField.md)

### ContentHistoryHelper

Versions helper class, provides methods to perform various tasks relevant
versioning of content.

[« More »](api_cms-3__classes__Joomla-CMS-Helper-ContentHistoryHelper.md)

### ContentlanguageField

Provides a list of content languages

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ContentlanguageField.md)

### ContentType

Tags table

[« More »](api_cms-3__classes__Joomla-CMS-Table-ContentType.md)

### ContenttypeField

Content Type field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ContenttypeField.md)

### Cookie

Joomla! Input Cookie Class

[« More »](api_cms-3__classes__Joomla-CMS-Input-Cookie.md)

### CoreContent

Core content table

[« More »](api_cms-3__classes__Joomla-CMS-Table-CoreContent.md)

### Crypt

Crypt is a Joomla Platform class for handling basic encryption/decryption of data.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Crypt.md)

### CryptoCipher

Crypt cipher for encryption, decryption and key generation via the php-encryption library.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-CryptoCipher.md)

### CssIdentifierSubstringRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-CssIdentifierSubstringRule.md)

### CurlTransport

HTTP transport class for using cURL.

[« More »](api_cms-3__classes__Joomla-CMS-Http-Transport-CurlTransport.md)

### CustomButton

Renders a custom button

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-CustomButton.md)

### DaemonApplication

Class to turn CliApplication applications into daemons. It requires CLI and PCNTL support built into PHP.

[« More »](api_cms-3__classes__Joomla-CMS-Application-DaemonApplication.md)

### DatabaseLogger

Joomla! MySQL Database Log class

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the Syslog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-DatabaseLogger.md)

### Date

JDate is a class that stores a date and provides logic to manipulate
and render that date in a variety of formats.

[« More »](api_cms-3__classes__Joomla-CMS-Date-Date.md)

### DelegatingPsrLogger

Delegating logger which delegates log messages received from the PSR-3 interface to the Joomla! Log object.

[« More »](api_cms-3__classes__Joomla-CMS-Log-DelegatingPsrLogger.md)

### Document

Document class, provides an easy interface to parse and display a document

[« More »](api_cms-3__classes__Joomla-CMS-Document-Document.md)

### DocumentRenderer

Abstract class for a renderer

[« More »](api_cms-3__classes__Joomla-CMS-Document-DocumentRenderer.md)

### DownloadSource

Data object representing a download source given as part of an update's `<downloads>` element

[« More »](api_cms-3__classes__Joomla-CMS-Updater-DownloadSource.md)

### EchoLogger

Joomla Echo logger class.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-EchoLogger.md)

### Editor

Editor class to handle WYSIWYG editors

[« More »](api_cms-3__classes__Joomla-CMS-Editor-Editor.md)

### EditorField

A textarea field for content creation

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-EditorField.md)

### EmailRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-EmailRule.md)

### EqualsRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-EqualsRule.md)

### ErrorDocument

ErrorDocument class, provides an easy interface to parse and display an error page

[« More »](api_cms-3__classes__Joomla-CMS-Document-ErrorDocument.md)

### ExceptionHandler

Displays the custom error page when an uncaught exception occurs.

[« More »](api_cms-3__classes__Joomla-CMS-Exception-ExceptionHandler.md)

### ExistsRule

Form rule class to determine if a value exists in a database table.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-ExistsRule.md)

### Extension

Extension table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Extension.md)

### ExtensionAdapter

Extension class for updater

[« More »](api_cms-3__classes__Joomla-CMS-Updater-Adapter-ExtensionAdapter.md)

### ExtensionHelper

Extension Helper class.

[« More »](api_cms-3__classes__Joomla-CMS-Extension-ExtensionHelper.md)

### Factory

Joomla Platform Factory class.

[« More »](api_cms-3__classes__Joomla-CMS-Factory.md)

### FactoryWrapper

Wrapper class for HttpFactory

[« More »](api_cms-3__classes__Joomla-CMS-Http-Wrapper-FactoryWrapper.md)

### Feed

Class to encapsulate a feed for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Feed.md)

### FeedDocument

FeedDocument class, provides an easy interface to parse and display any feed document

[« More »](api_cms-3__classes__Joomla-CMS-Document-FeedDocument.md)

### FeedEnclosure

Data object representing a feed enclosure

[« More »](api_cms-3__classes__Joomla-CMS-Document-Feed-FeedEnclosure.md)

### FeedEntry

Class to encapsulate a feed entry for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-FeedEntry.md)

### FeedFactory

Feed factory class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-FeedFactory.md)

### FeedImage

Data object representing a feed image

[« More »](api_cms-3__classes__Joomla-CMS-Document-Feed-FeedImage.md)

### FeedItem

Data object representing a feed item

[« More »](api_cms-3__classes__Joomla-CMS-Document-Feed-FeedItem.md)

### FeedLink

Feed Link class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-FeedLink.md)

### FeedParser

Feed Parser class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-FeedParser.md)

### FeedPerson

Feed Person class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-FeedPerson.md)

### File

A File handling class

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-File.md)

### FileAdapter

File installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-FileAdapter.md)

### FileLayout

Base class for rendering a display layout
loaded from from a layout file

[« More »](api_cms-3__classes__Joomla-CMS-Layout-FileLayout.md)

### FilePathRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-FilePathRule.md)

### Files

Joomla! Input Files Class

[« More »](api_cms-3__classes__Joomla-CMS-Input-Files.md)

### FileStorage

File cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-FileStorage.md)

### FilesystemHelper

File system helper

Holds support functions for the filesystem, particularly the stream

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-FilesystemHelper.md)

### FileWrapper

Wrapper class for File

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Wrapper-FileWrapper.md)

### Folder

A Folder handling class

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Folder.md)

### FolderWrapper

Wrapper class for Folder

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Wrapper-FolderWrapper.md)

### Form

Form Class for the Joomla Platform.

This class implements a robust API for constructing, populating, filtering, and validating forms.
It uses XML definitions to construct form fields and a variety of field and rule classes to
render and validate the form.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Form.md)

### FormattedtextLogger

Joomla! Formatted Text File Log class

This class is designed to use as a base for building formatted text files for output. By
default it emulates the Syslog style format output. This is a disk based output format.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-FormattedtextLogger.md)

### FormController

Controller tailored to suit most form-based admin operations.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Controller-FormController.md)

### FormField

Abstract Form Field class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-FormField.md)

### FormHelper

Form's helper class.

Provides a storage for filesystem's paths where Form's entities reside and methods for creating those entities.
Also stores objects with entities' prototypes for further reusing.

[« More »](api_cms-3__classes__Joomla-CMS-Form-FormHelper.md)

### FormModel

Prototype form model.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Model-FormModel.md)

### FormRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-FormRule.md)

### FormWrapper

Wrapper class for FormHelper

[« More »](api_cms-3__classes__Joomla-CMS-Form-FormWrapper.md)

### FrontendlanguageField

Provides a list of published content languages with home pages

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-FrontendlanguageField.md)

### FtpClient

FTP client class

[« More »](api_cms-3__classes__Joomla-CMS-Client-FtpClient.md)

### HeadertagField

Form Field class for the Joomla! CMS.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-HeadertagField.md)

### Heading

A Heading type of node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node-Heading.md)

### HeadRenderer

HTML document renderer for the document `<head>` element

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Html-HeadRenderer.md)

### Help

Help system class

[« More »](api_cms-3__classes__Joomla-CMS-Help-Help.md)

### HelpButton

Renders a help popup window button

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-HelpButton.md)

### HelpsiteField

Form Field class for the Joomla Platform.

Provides a select list of help sites.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-HelpsiteField.md)

### HtmlDocument

HtmlDocument class, provides an easy interface to parse and display a HTML document

[« More »](api_cms-3__classes__Joomla-CMS-Document-HtmlDocument.md)

### HTMLHelper

Utility class for all HTML drawing classes

[« More »](api_cms-3__classes__Joomla-CMS-HTML-HTMLHelper.md)

### HtmlView

Base class for a Joomla View

Class holding methods for displaying presentation data.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-View-HtmlView.md)

### Http

HTTP client class.

[« More »](api_cms-3__classes__Joomla-CMS-Http-Http.md)

### HttpBridgePostRequestMethod

Bridges the Joomla! HTTP API to the Google Recaptcha RequestMethod interface for a POST request.

[« More »](api_cms-3__classes__Joomla-CMS-Captcha-Google-HttpBridgePostRequestMethod.md)

### HttpFactory

HTTP factory class.

[« More »](api_cms-3__classes__Joomla-CMS-Http-HttpFactory.md)

### Image

Class to manipulate an image.

[« More »](api_cms-3__classes__Joomla-CMS-Image-Image.md)

### ImageDocument

ImageDocument class, provides an easy interface to output image data

[« More »](api_cms-3__classes__Joomla-CMS-Document-ImageDocument.md)

### ImageFilter

Class to manipulate an image.

[« More »](api_cms-3__classes__Joomla-CMS-Image-ImageFilter.md)

### Input

Joomla! Input Base Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_cms-3__classes__Joomla-CMS-Input-Input.md)

### InputFilter

InputFilter is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

[« More »](api_cms-3__classes__Joomla-CMS-Filter-InputFilter.md)

### Installer

Joomla base installer class

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Installer.md)

### InstallerAdapter

Abstract adapter for the installer.

[« More »](api_cms-3__classes__Joomla-CMS-Installer-InstallerAdapter.md)

### InstallerExtension

Extension object

[« More »](api_cms-3__classes__Joomla-CMS-Installer-InstallerExtension.md)

### InstallerHelper

Installer helper class

[« More »](api_cms-3__classes__Joomla-CMS-Installer-InstallerHelper.md)

### InstallerScript

Base install script for use by extensions providing helper methods for common behaviours.

[« More »](api_cms-3__classes__Joomla-CMS-Installer-InstallerScript.md)

### ItemModel

Prototype item model.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Model-ItemModel.md)

### ItunesRssParser

RSS Feed Parser Namespace handler for iTunes.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Parser-Rss-ItunesRssParser.md)

### Json

Joomla! Input JSON Class

This class decodes a JSON string from the raw request data and makes it available via
the standard JInput interface.

[« More »](api_cms-3__classes__Joomla-CMS-Input-Json.md)

### JsonDocument

JsonDocument class, provides an easy interface to parse and display JSON output

[« More »](api_cms-3__classes__Joomla-CMS-Document-JsonDocument.md)

### JsonResponse

JSON Response class.

This class serves to provide the Joomla Platform with a common interface to access
response variables for e.g. Ajax requests.

[« More »](api_cms-3__classes__Joomla-CMS-Response-JsonResponse.md)

### JTextWrapper

Wrapper class for JText

[« More »](api_cms-3__classes__Joomla-CMS-Language-Wrapper-JTextWrapper.md)

### Key

Encryption key object for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Key.md)

### Language

Languages/translation handler class

[« More »](api_cms-3__classes__Joomla-CMS-Language-Language.md)

### Language

Languages table.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Language.md)

### LanguageAdapter

Language installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-LanguageAdapter.md)

### LanguageHelper

Language helper class

[« More »](api_cms-3__classes__Joomla-CMS-Language-LanguageHelper.md)

### LanguageHelperWrapper

Wrapper class for LanguageHelper

[« More »](api_cms-3__classes__Joomla-CMS-Language-Wrapper-LanguageHelperWrapper.md)

### LanguageStemmer

Stemmer base class.

[« More »](api_cms-3__classes__Joomla-CMS-Language-LanguageStemmer.md)

### LastvisitdaterangeField

Field to show a list of available date ranges to filter on last visit date.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-LastvisitdaterangeField.md)

### LayoutHelper

Helper to render a Layout object, storing a base path

[« More »](api_cms-3__classes__Joomla-CMS-Layout-LayoutHelper.md)

### LegacyFactory

Factory to create MVC objects in legacy mode.

Uses the static getInstance function on the classes itself. Behavior of the old none
namespaced extension set up.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Factory-LegacyFactory.md)

### LibraryAdapter

Library installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-LibraryAdapter.md)

### LibraryHelper

Library helper class

[« More »](api_cms-3__classes__Joomla-CMS-Helper-LibraryHelper.md)

### LibraryManifest

Joomla! Library Manifest File

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Manifest-LibraryManifest.md)

### LimitboxField

Field to load a list of posible item count limits

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-LimitboxField.md)

### LinkButton

Renders a link button

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-LinkButton.md)

### ListModel

Model class for handling lists of items.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Model-ListModel.md)

### Log

Joomla! Log Class

This class hooks into the global log configuration settings to allow for user configured
logging events to be sent to where the user wishes them to be sent. On high load sites
Syslog is probably the best (pure PHP function), then the text file based loggers (CSV, W3c
or plain Formattedtext) and finally MySQL offers the most features (e.g. rapid searching)
but will incur a performance hit due to INSERT being issued.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Log.md)

### LogEntry

Joomla! Log Entry class

This class is designed to hold log entries for either writing to an engine, or for
supported engines, retrieving lists and building in memory (PHP based) search operations.

[« More »](api_cms-3__classes__Joomla-CMS-Log-LogEntry.md)

### Logger

Joomla! Logger Base Class

This class is used to be the basis of logger classes to allow for defined functions
to exist regardless of the child class.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger.md)

### Mail

Email Class. Provides a common interface to send email from the Joomla! Platform

[« More »](api_cms-3__classes__Joomla-CMS-Mail-Mail.md)

### MailHelper

Email helper class, provides static methods to perform various tasks relevant
to the Joomla email routines.

TODO: Test these methods as the regex work is first run and not tested thoroughly

[« More »](api_cms-3__classes__Joomla-CMS-Mail-MailHelper.md)

### MailWrapper

Wrapper class for MailHelper

[« More »](api_cms-3__classes__Joomla-CMS-Mail-MailWrapper.md)

### Manifest

Joomla! Package Manifest File

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Manifest.md)

### McryptCipher

Crypt cipher for mcrypt algorithm encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-McryptCipher.md)

### MediaField

Provides a modal media selector including upload mechanism

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-MediaField.md)

### MediaHelper

Media helper class

[« More »](api_cms-3__classes__Joomla-CMS-Helper-MediaHelper.md)

### MediaRssParser

RSS Feed Parser Namespace handler for MediaRSS.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Parser-Rss-MediaRssParser.md)

### MemcachedStorage

Memcached cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-MemcachedStorage.md)

### MemcacheStorage

Memcache cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-MemcacheStorage.md)

### Menu

Menu table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Menu.md)

### MenuField

Supports an HTML select list of menus

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-MenuField.md)

### MenuHelper

Menu Helper utility

[« More »](api_cms-3__classes__Joomla-CMS-Menu-MenuHelper.md)

### MenuItem

Object representing a menu item

[« More »](api_cms-3__classes__Joomla-CMS-Menu-MenuItem.md)

### MenuitemField

Supports an HTML grouped select list of menu item grouped by menu

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-MenuitemField.md)

### MenuRules

Rule to identify the right Itemid for a view in a component

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-Rules-MenuRules.md)

### MenuType

Menu Types table

[« More »](api_cms-3__classes__Joomla-CMS-Table-MenuType.md)

### MessagequeueLogger

Joomla MessageQueue logger class.

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the Syslog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-MessagequeueLogger.md)

### MessageRenderer

HTML document renderer for the system message queue

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Html-MessageRenderer.md)

### Microdata

Joomla Platform class for interacting with Microdata semantics.

[« More »](api_cms-3__classes__Joomla-CMS-Microdata-Microdata.md)

### MissingComponentException

Exception class defining an error for a missing component

[« More »](api_cms-3__classes__Joomla-CMS-Component-Exception-MissingComponentException.md)

### Module

Module table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Module.md)

### ModuleAdapter

Module installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-ModuleAdapter.md)

### ModuleHelper

Module helper class

[« More »](api_cms-3__classes__Joomla-CMS-Helper-ModuleHelper.md)

### ModuleLayoutRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-ModuleLayoutRule.md)

### ModuleorderField

Module Order field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ModuleorderField.md)

### ModulepositionField

Module Position field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ModulepositionField.md)

### ModuleRenderer

HTML document renderer for a single module

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Html-ModuleRenderer.md)

### ModulesRenderer

HTML document renderer for a module position

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Html-ModulesRenderer.md)

### ModuletagField

Module Tag field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-ModuletagField.md)

### Multilanguage

Utility class for multilang

[« More »](api_cms-3__classes__Joomla-CMS-Language-Multilanguage.md)

### MVCFactory

Factory to create MVC objects based on a namespace.

[« More »](api_cms-3__classes__Joomla-CMS-MVC-Factory-MVCFactory.md)

### MysqlChangeItem

Checks the database schema against one MySQL DDL query to see if it has been run.

[« More »](api_cms-3__classes__Joomla-CMS-Schema-ChangeItem-MysqlChangeItem.md)

### Nested

Table class supporting modified pre-order tree traversal behavior.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Nested.md)

### Node

A Node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node.md)

### NomenuRules

Rule to process URLs without a menu item

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-Rules-NomenuRules.md)

### NotAllowed

Exception class defining a not allowed access

[« More »](api_cms-3__classes__Joomla-CMS-Access-Exception-NotAllowed.md)

### NotequalsRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-NotequalsRule.md)

### NumberRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-NumberRule.md)

### OpensearchDocument

Opensearch class, provides an easy interface to display an Opensearch document

[« More »](api_cms-3__classes__Joomla-CMS-Document-OpensearchDocument.md)

### OpensearchImage

Data object representing an OpenSearch image

[« More »](api_cms-3__classes__Joomla-CMS-Document-Opensearch-OpensearchImage.md)

### OpensearchUrl

Data object representing an OpenSearch URL

[« More »](api_cms-3__classes__Joomla-CMS-Document-Opensearch-OpensearchUrl.md)

### OptionsRule

Form Rule class for the Joomla Platform.

Requires the value entered be one of the options in a field of type="list"

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-OptionsRule.md)

### OrderingField

Ordering field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-OrderingField.md)

### OutputController

Joomla Cache output type object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Controller-OutputController.md)

### OutputFilter

OutputFilter

[« More »](api_cms-3__classes__Joomla-CMS-Filter-OutputFilter.md)

### OutputFilterWrapper

Wrapper class for OutputFilter

[« More »](api_cms-3__classes__Joomla-CMS-Filter-Wrapper-OutputFilterWrapper.md)

### PackageAdapter

Package installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-PackageAdapter.md)

### PackageManifest

Joomla! Package Manifest File

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Manifest-PackageManifest.md)

### PageController

Joomla! Cache page type object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Controller-PageController.md)

### Pagination

Pagination Class. Provides a common interface for content pagination for the Joomla! CMS.

[« More »](api_cms-3__classes__Joomla-CMS-Pagination-Pagination.md)

### PaginationObject

Pagination object representing a particular item in the pagination lists.

[« More »](api_cms-3__classes__Joomla-CMS-Pagination-PaginationObject.md)

### PasswordRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-PasswordRule.md)

### Patcher

A Unified Diff Format Patcher class

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Patcher.md)

### Path

A Path handling class

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Path.md)

### Pathway

Class to maintain a pathway.

The user's navigated path within the application.

[« More »](api_cms-3__classes__Joomla-CMS-Pathway-Pathway.md)

### PathWrapper

Wrapper class for Path

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Wrapper-PathWrapper.md)

### PluginAdapter

Plugin installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-PluginAdapter.md)

### PluginHelper

Plugin helper class

[« More »](api_cms-3__classes__Joomla-CMS-Plugin-PluginHelper.md)

### PluginstatusField

Plugin Status field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-PluginstatusField.md)

### PopupButton

Renders a modal window button

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-PopupButton.md)

### Porteren

Porter English stemmer class.

This class was adapted from one written by Richard Heyes.
See copyright and link information above.

[« More »](api_cms-3__classes__Joomla-CMS-Language-Stemmer-Porteren.md)

### PostgresqlChangeItem

Checks the database schema against one PostgreSQL DDL query to see if it has been run.

[« More »](api_cms-3__classes__Joomla-CMS-Schema-ChangeItem-PostgresqlChangeItem.md)

### Profiler

Utility class to assist in the process of benchmarking the execution
of sections of code to understand where time is being spent.

[« More »](api_cms-3__classes__Joomla-CMS-Profiler-Profiler.md)

### PunycodeHelper

Joomla Platform String Punycode Class

Class for handling UTF-8 URLs
Wraps the Punycode library
All functions assume the validity of utf-8 URLs.

[« More »](api_cms-3__classes__Joomla-CMS-String-PunycodeHelper.md)

### RawDocument

RawDocument class, provides an easy interface to parse and display raw output

[« More »](api_cms-3__classes__Joomla-CMS-Document-RawDocument.md)

### RedirectStatusField

Redirect Status field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-RedirectStatusField.md)

### RedisStorage

Redis cache storage handler for PECL

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-RedisStorage.md)

### RegistrationdaterangeField

Registration Date Range field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-RegistrationdaterangeField.md)

### Response

HTTP response data object class.

[« More »](api_cms-3__classes__Joomla-CMS-Http-Response.md)

### Rijndael256Cipher

Crypt cipher for Rijndael 256 encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-Rijndael256Cipher.md)

### Route

Route handling class

[« More »](api_cms-3__classes__Joomla-CMS-Router-Route.md)

### RouteHelper

Route Helper

A class providing basic routing for urls that are for content types found in
the #\_\_content\_types table and rows found in the #\_\_ucm\_content table.

[« More »](api_cms-3__classes__Joomla-CMS-Helper-RouteHelper.md)

### RouteNotFoundException

Exception class defining an error for a missing route

[« More »](api_cms-3__classes__Joomla-CMS-Router-Exception-RouteNotFoundException.md)

### Router

Class to create and parse routes

[« More »](api_cms-3__classes__Joomla-CMS-Router-Router.md)

### RouterBase

Base component routing class

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-RouterBase.md)

### RouterLegacy

Default routing class for missing or legacy component routers

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-RouterLegacy.md)

### RouterView

View-based component routing class

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-RouterView.md)

### RouterViewConfiguration

View-configuration class for the view-based component router

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-RouterViewConfiguration.md)

### RssParser

RSS Feed Parser class.

[« More »](api_cms-3__classes__Joomla-CMS-Feed-Parser-RssParser.md)

### RssRenderer

RssRenderer is a feed that implements RSS 2.0 Specification

[« More »](api_cms-3__classes__Joomla-CMS-Document-Renderer-Feed-RssRenderer.md)

### Rule

Rule class.

[« More »](api_cms-3__classes__Joomla-CMS-Access-Rule.md)

### Rules

Access rules class.

[« More »](api_cms-3__classes__Joomla-CMS-Access-Rules.md)

### RulesRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-RulesRule.md)

### SearchHelper

Helper class for Joomla! Search components

[« More »](api_cms-3__classes__Joomla-CMS-Helper-SearchHelper.md)

### SectionNotFoundException

Representing when a category section cannot be found.

[« More »](api_cms-3__classes__Joomla-CMS-Categories-SectionNotFoundException.md)

### Separator

A Separator type of node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node-Separator.md)

### SeparatorButton

Renders a button separator

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-SeparatorButton.md)

### Session

Class for managing HTTP sessions

Provides access to session-state values as well as session-level
settings and lifetime management methods.
Based on the standard PHP session handling mechanism it provides
more advanced features such as expire timeouts.

[« More »](api_cms-3__classes__Joomla-CMS-Session-Session.md)

### SimpleCipher

Crypt cipher for Simple encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-SimpleCipher.md)

### SimpleCryptPassword

Joomla Platform Password Crypter

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Password-SimpleCryptPassword.md)

### SiteApplication

Joomla! Site Application class

[« More »](api_cms-3__classes__Joomla-CMS-Application-SiteApplication.md)

### SiteMenu

Menu class

[« More »](api_cms-3__classes__Joomla-CMS-Menu-SiteMenu.md)

### SitePathway

Class to manage the site application pathway.

[« More »](api_cms-3__classes__Joomla-CMS-Pathway-SitePathway.md)

### SiteRouter

Class to create and parse routes for the site application

[« More »](api_cms-3__classes__Joomla-CMS-Router-SiteRouter.md)

### SliderButton

Renders a button to render an HTML element in a slider container

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-SliderButton.md)

### SocketTransport

HTTP transport class for using sockets directly.

[« More »](api_cms-3__classes__Joomla-CMS-Http-Transport-SocketTransport.md)

### SodiumCipher

JCrypt cipher for sodium algorithm encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-SodiumCipher.md)

### SqlsrvChangeItem

Checks the database schema against one SQL Server DDL query to see if it has been run.

[« More »](api_cms-3__classes__Joomla-CMS-Schema-ChangeItem-SqlsrvChangeItem.md)

### StandardButton

Renders a standard button

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Button-StandardButton.md)

### StandardRules

Rule for the standard handling of component routing

[« More »](api_cms-3__classes__Joomla-CMS-Component-Router-Rules-StandardRules.md)

### StatusField

Form Field to load a list of states

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-StatusField.md)

### Stream

Joomla! Stream Interface

The Joomla! stream interface is designed to handle files as streams
where as the legacy File static class treated files in a rather
atomic manner.

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Stream.md)

### StreamString

String Stream Wrapper

This class allows you to use a PHP string in the same way that
you would normally use a regular stream wrapper

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Streams-StreamString.md)

### StreamTransport

HTTP transport class for using PHP streams.

[« More »](api_cms-3__classes__Joomla-CMS-Http-Transport-StreamTransport.md)

### StringController

String Controller

[« More »](api_cms-3__classes__Joomla-CMS-Filesystem-Support-StringController.md)

### SubformRule

Form rule to validate subforms field-wise.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-SubformRule.md)

### SyslogLogger

Joomla! Syslog Log class

This class is designed to call the PHP Syslog function call which is then sent to the
system wide log system. For Linux/Unix based systems this is the syslog subsystem, for
the Windows based implementations this can be found in the Event Log. For Windows,
permissions may prevent PHP from properly outputting messages.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-SyslogLogger.md)

### Table

Abstract Table class

Parent class to all tables.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Table.md)

### TagField

List of Tags field.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-TagField.md)

### Tags

Abstract class defining methods that can be
implemented by an Observer class of a Table class (which is an Observable).

Attaches $this Observer to the $table in the constructor.
The classes extending this class should not be instantiated directly, as they
are automatically instanciated by the \JObserverMapper

[« More »](api_cms-3__classes__Joomla-CMS-Table-Observer-Tags.md)

### TagsHelper

Tags helper class, provides methods to perform various tasks relevant
tagging of content.

[« More »](api_cms-3__classes__Joomla-CMS-Helper-TagsHelper.md)

### TelRule

Form Rule class for the Joomla Platform

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-TelRule.md)

### TemplateAdapter

Template installer

[« More »](api_cms-3__classes__Joomla-CMS-Installer-Adapter-TemplateAdapter.md)

### TemplatestyleField

Supports a select grouped list of template styles

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-TemplatestyleField.md)

### Text

Text handling class.

[« More »](api_cms-3__classes__Joomla-CMS-Language-Text.md)

### Toolbar

ToolBar handler

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-Toolbar.md)

### ToolbarButton

Button base class

The JButton is the base class for all JButton types

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-ToolbarButton.md)

### ToolbarHelper

Utility class for the button bar.

[« More »](api_cms-3__classes__Joomla-CMS-Toolbar-ToolbarHelper.md)

### Transliterate

Class to transliterate strings

[« More »](api_cms-3__classes__Joomla-CMS-Language-Transliterate.md)

### TransliterateWrapper

Wrapper class for Transliterate

[« More »](api_cms-3__classes__Joomla-CMS-Language-Wrapper-TransliterateWrapper.md)

### Tree

Menu Tree class to represent a menu tree hierarchy

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Tree.md)

### TripleDesCipher

JCrypt cipher for Triple DES encryption, decryption and key generation.

[« More »](api_cms-3__classes__Joomla-CMS-Crypt-Cipher-TripleDesCipher.md)

### Ucm

UCM map table

[« More »](api_cms-3__classes__Joomla-CMS-Table-Ucm.md)

### UCMBase

Base class for implementing UCM

[« More »](api_cms-3__classes__Joomla-CMS-UCM-UCMBase.md)

### UCMContent

Base class for implementing UCM

[« More »](api_cms-3__classes__Joomla-CMS-UCM-UCMContent.md)

### UCMType

UCM Class for handling content types

[« More »](api_cms-3__classes__Joomla-CMS-UCM-UCMType.md)

### UnsupportedCacheException

Exception class defining an unsupported cache storage object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Exception-UnsupportedCacheException.md)

### UnsupportedStorageException

Exception class defining an unsupported session storage object

[« More »](api_cms-3__classes__Joomla-CMS-Session-Exception-UnsupportedStorageException.md)

### Update

Update table
Stores updates temporarily

[« More »](api_cms-3__classes__Joomla-CMS-Table-Update.md)

### Update

Update class. It is used by Updater::update() to install an update. Use Updater::findUpdates() to find updates for
an extension.

[« More »](api_cms-3__classes__Joomla-CMS-Updater-Update.md)

### UpdateAdapter

UpdateAdapter class.

[« More »](api_cms-3__classes__Joomla-CMS-Updater-UpdateAdapter.md)

### Updater

Updater Class

[« More »](api_cms-3__classes__Joomla-CMS-Updater-Updater.md)

### UpdateSite

Update site table
Stores the update sites for extensions

[« More »](api_cms-3__classes__Joomla-CMS-Table-UpdateSite.md)

### Uri

JUri Class

This class serves two purposes. First it parses a URI and provides a common interface
for the Joomla Platform to access and manipulate a URI. Second it obtains the URI of
the current executing script from the server regardless of server.

[« More »](api_cms-3__classes__Joomla-CMS-Uri-Uri.md)

### Url

An external Url type of node for MenuTree

[« More »](api_cms-3__classes__Joomla-CMS-Menu-Node-Url.md)

### UrlRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-UrlRule.md)

### User

Users table

[« More »](api_cms-3__classes__Joomla-CMS-Table-User.md)

### User

User class. Handles all application interaction with a user

[« More »](api_cms-3__classes__Joomla-CMS-User-User.md)

### UseractiveField

Field to show a list of available user active statuses

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-UseractiveField.md)

### UserField

Field to select a user ID from a modal list.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-UserField.md)

### Usergroup

Usergroup table class.

[« More »](api_cms-3__classes__Joomla-CMS-Table-Usergroup.md)

### UsergrouplistField

Field to load a dropdown list of available user groups

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-UsergrouplistField.md)

### UserGroupsHelper

Helper to deal with user groups.

[« More »](api_cms-3__classes__Joomla-CMS-Helper-UserGroupsHelper.md)

### UserHelper

Authorisation helper class, provides static methods to perform various tasks relevant
to the Joomla user and authorisation classes

This class has influences and some method logic from the Horde Auth package

[« More »](api_cms-3__classes__Joomla-CMS-User-UserHelper.md)

### UsernameRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-3__classes__Joomla-CMS-Form-Rule-UsernameRule.md)

### UserstateField

Field to load a list of available users statuses

[« More »](api_cms-3__classes__Joomla-CMS-Form-Field-UserstateField.md)

### UserWrapper

Wrapper class for UserHelper

[« More »](api_cms-3__classes__Joomla-CMS-User-UserWrapper.md)

### Utility

JUtility is a utility functions class

[« More »](api_cms-3__classes__Joomla-CMS-Utility-Utility.md)

### Version

Version information class for the Joomla CMS.

[« More »](api_cms-3__classes__Joomla-CMS-Version.md)

### ViewController

Joomla! Cache view type object

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Controller-ViewController.md)

### ViewLevel

Viewlevels table class.

[« More »](api_cms-3__classes__Joomla-CMS-Table-ViewLevel.md)

### W3cLogger

Joomla! W3C Logging class

This class is designed to build log files based on the W3C specification.

[« More »](api_cms-3__classes__Joomla-CMS-Log-Logger-W3cLogger.md)

### WebApplication

Base class for a Joomla! Web application.

[« More »](api_cms-3__classes__Joomla-CMS-Application-WebApplication.md)

### WincacheStorage

WinCache cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-WincacheStorage.md)

### XcacheStorage

XCache cache storage handler

[« More »](api_cms-3__classes__Joomla-CMS-Cache-Storage-XcacheStorage.md)

### XmlDocument

XmlDocument class, provides an easy interface to parse and display XML output

[« More »](api_cms-3__classes__Joomla-CMS-Document-XmlDocument.md)

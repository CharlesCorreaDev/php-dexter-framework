# Joomla! CMS 2.5 API » \

> **Fonte / Source:** https://api.joomla.org/cms-2.5/namespaces/default.html

---

## Functions

### callbackJFilterInputConvertDecimal

Decimal decode callback for JFilterInput::\_decode.

|  |  |
| --- | --- |
| package | Joomla.Platform |

#### Arguments

$matches

#### Response

`string`

### callbackJFilterInputConvertHex

Hex decode callback for JFilterInput::\_decode.

|  |  |
| --- | --- |
| package | Joomla.Platform |

#### Arguments

$matches

#### Response

`string`

### jexit

Global application exit.

This function provides a single exit point for the platform.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| since | 11.1 |

#### Arguments

$message
:   `mixed`Exit code or string. Defaults to zero.

### jimport

Intelligent file importer.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| since | 11.1 |

#### Arguments

$path
:   `string`A dot syntax path.

#### Response

`boolean`True on success.

## Constants

### \_QQ\_

Allows for quoting in language .ini files.

|  |  |
| --- | --- |
| package | Joomla.Platform |

### CRLF

|  |  |
| --- | --- |
| package | Joomla.Platform |

### DS

|  |  |
| --- | --- |
| package | Joomla.Platform |

### FTP\_ASCII

|  |  |
| --- | --- |
| package | Joomla.Platform |

### FTP\_AUTOASCII

|  |  |
| --- | --- |
| package | Joomla.Platform |

### FTP\_BINARY

|  |  |
| --- | --- |
| package | Joomla.Platform |

### FTP\_NATIVE

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JAUTHENTICATE\_STATUS\_CANCEL

Status to indicate cancellation of authentication (unused)

|  |  |
| --- | --- |
| deprecated |  |
| package | Joomla.Platform |

### JAUTHENTICATE\_STATUS\_FAILURE

This is the status code returned when the authentication failed (prevent login if no success)

|  |  |
| --- | --- |
| deprecated | Use JAuthentication::STATUS\_FAILURE |
| package | Joomla.Platform |

### JAUTHENTICATE\_STATUS\_SUCCESS

This is the status code returned when the authentication is success (permit login)

|  |  |
| --- | --- |
| deprecated | Use JAuthentication::STATUS\_SUCCESS |
| package | Joomla.Platform |

### JCOMPAT\_UNICODE\_PROPERTIES

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JERROR\_CALLBACK\_NOT\_CALLABLE

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JERROR\_ILLEGAL\_MODE

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JERROR\_ILLEGAL\_OPTIONS

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_COMPONENT

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_COMPONENT\_ADMINISTRATOR

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_COMPONENT\_SITE

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_ISMAC

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_ISWIN

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JPATH\_ROOT

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JREQUEST\_ALLOWHTML

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JREQUEST\_ALLOWRAW

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JREQUEST\_NOTRIM

Set the available masks for cleaning variables

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JROUTER\_MODE\_RAW

Set the available masks for the routing mode

|  |  |
| --- | --- |
| package | Joomla.Platform |

### JROUTER\_MODE\_SEF

|  |  |
| --- | --- |
| package | Joomla.Platform |

## Interfaces

### JCryptCipher

JCrypt cipher interface.

[« More »](api_cms-2.5__classes__JCryptCipher.md)

### JDatabaseInterface

Database interface class.

[« More »](api_cms-2.5__classes__JDatabaseInterface.md)

### JHttpTransport

HTTP transport class interface.

[« More »](api_cms-2.5__classes__JHttpTransport.md)

## Classes

### JAccess

Class that handles all access authorisation routines.

[« More »](api_cms-2.5__classes__JAccess.md)

### JAccessRule

JAccessRule class.

[« More »](api_cms-2.5__classes__JAccessRule.md)

### JAccessRules

JAccessRules class.

[« More »](api_cms-2.5__classes__JAccessRules.md)

### JAdapter

Adapter Class
Retains common adapter pattern functions
Class harvested from joomla.installer.installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JAdapter.md)

### JAdapterInstance

Adapter Instance Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JAdapterInstance.md)

### JApplication

Base class for a Joomla! application.

Acts as a Factory class for application specific objects and provides many
supporting API functions. Derived clases should supply the route(), dispatch()
and render() functions.

[« More »](api_cms-2.5__classes__JApplication.md)

### JApplicationBase

Joomla Platform Base Application Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JApplicationBase.md)

### JApplicationCli

Base class for a Joomla! command line application.

[« More »](api_cms-2.5__classes__JApplicationCli.md)

### JApplicationDaemon

Class to turn JCli applications into daemons. It requires CLI and PCNTL support built into PHP.

[« More »](api_cms-2.5__classes__JApplicationDaemon.md)

### JApplicationHelper

Application helper functions

[« More »](api_cms-2.5__classes__JApplicationHelper.md)

### JApplicationWeb

Base class for a Joomla! Web application.

[« More »](api_cms-2.5__classes__JApplicationWeb.md)

### JArchive

An Archive handling class

[« More »](api_cms-2.5__classes__JArchive.md)

### JArchiveBzip2

Bzip2 format adapter for the JArchive class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JArchiveBzip2.md)

### JArchiveGzip

Gzip format adapter for the JArchive class

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_cms-2.5__classes__JArchiveGzip.md)

### JArchiveTar

Tar format adapter for the JArchive class

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_cms-2.5__classes__JArchiveTar.md)

### JArchiveZip

ZIP format adapter for the JArchive class

The ZIP compression code is partially based on code from:
Eric Mueller <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
http://www.zend.com/codex.php?id=535&single=1
Deins125 <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
http://www.zend.com/codex.php?id=470&single=1
The ZIP compression date code is partially based on code from
Peter Listiak <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

[« More »](api_cms-2.5__classes__JArchiveZip.md)

### JArrayHelper

JArrayHelper is an array utility class for doing all sorts of odds and ends with arrays.

[« More »](api_cms-2.5__classes__JArrayHelper.md)

### JAuthentication

Authentication class, provides an interface for the Joomla authentication system

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JAuthentication.md)

### JAuthenticationResponse

Authentication response class, provides an object for storing user and error details

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JAuthenticationResponse.md)

### JBrowser

Browser class, provides capability information about the current web client.

Browser identification is performed by examining the HTTP\_USER\_AGENT
environment variable provided by the web server.
This class has many influences from the lib/Browser.php code in
version 3 of Horde by Chuck Hagenbuch and Jon Parise.

[« More »](api_cms-2.5__classes__JBrowser.md)

### JBuffer

Generic Buffer stream handler

This class provides a generic buffer stream. It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

[« More »](api_cms-2.5__classes__JBuffer.md)

### JButton

Button base class

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButton.md)

### JButtonConfirm

Renders a standard button with a confirm dialog

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonConfirm.md)

### JButtonCustom

Renders a custom button

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonCustom.md)

### JButtonHelp

Renders a help popup window button

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonHelp.md)

### JButtonLink

Renders a link button

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonLink.md)

### JButtonPopup

Renders a popup window button

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonPopup.md)

### JButtonSeparator

Renders a button separator

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonSeparator.md)

### JButtonStandard

Renders a standard button

The JButton is the base class for all JButton types

[« More »](api_cms-2.5__classes__JButtonStandard.md)

### JCache

Joomla! Cache base object

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JCache.md)

### JCacheController

Public cache handler

[« More »](api_cms-2.5__classes__JCacheController.md)

### JCacheControllerCallback

Joomla! Cache callback type object

[« More »](api_cms-2.5__classes__JCacheControllerCallback.md)

### JCacheControllerOutput

Joomla Cache output type object

[« More »](api_cms-2.5__classes__JCacheControllerOutput.md)

### JCacheControllerPage

Joomla! Cache page type object

[« More »](api_cms-2.5__classes__JCacheControllerPage.md)

### JCacheControllerView

Joomla! Cache view type object

[« More »](api_cms-2.5__classes__JCacheControllerView.md)

### JCacheStorage

Abstract cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorage.md)

### JCacheStorageApc

APC cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageApc.md)

### JCacheStorageCachelite

Cache lite storage handler

[« More »](api_cms-2.5__classes__JCacheStorageCachelite.md)

### JCacheStorageEaccelerator

eAccelerator cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageEaccelerator.md)

### JCacheStorageFile

File cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageFile.md)

### JCacheStorageHelper

Cache storage helper functions.

[« More »](api_cms-2.5__classes__JCacheStorageHelper.md)

### JCacheStorageMemcache

Memcache cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageMemcache.md)

### JCacheStorageMemcached

Memcached cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageMemcached.md)

### JCacheStorageWincache

WINCACHE cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageWincache.md)

### JCacheStorageXcache

XCache cache storage handler

[« More »](api_cms-2.5__classes__JCacheStorageXcache.md)

### JCaptcha

Joomla! Captcha base object

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JCaptcha.md)

### JCategories

JCategories Class.

[« More »](api_cms-2.5__classes__JCategories.md)

### JCategoryNode

Helper class to load Categorytree

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JCategoryNode.md)

### JCli

Deprecated class placeholder. You should use JApplicationCli instead.

[« More »](api_cms-2.5__classes__JCli.md)

### JClientHelper

Client helper class

[« More »](api_cms-2.5__classes__JClientHelper.md)

### JComponentHelper

Component helper class

[« More »](api_cms-2.5__classes__JComponentHelper.md)

### JController

Base class for a Joomla Controller

Controller (Controllers are where you put all the actual code.) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-2.5__classes__JController.md)

### JControllerAdmin

Base class for a Joomla Administrator Controller

Controller (controllers are where you put all the actual code) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-2.5__classes__JControllerAdmin.md)

### JControllerForm

Controller tailored to suit most form-based admin operations.

Controller (Controllers are where you put all the actual code.) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-2.5__classes__JControllerForm.md)

### JControllerLegacy

Alias to JController for forward compatability.

Controller (Controllers are where you put all the actual code.) Provides basic
functionality, such as rendering views (aka displaying templates).

[« More »](api_cms-2.5__classes__JControllerLegacy.md)

### JCrypt

JCrypt is a Joomla Platform class for handling basic encryption/decryption of data.

[« More »](api_cms-2.5__classes__JCrypt.md)

### JCryptCipherSimple

JCrypt cipher for Simple encryption, decryption and key generation.

[« More »](api_cms-2.5__classes__JCryptCipherSimple.md)

### JCryptKey

Encryption key object for the Joomla Platform.

[« More »](api_cms-2.5__classes__JCryptKey.md)

### JDaemon

Backward Compatability Stub for JApplicationDaemon

[« More »](api_cms-2.5__classes__JDaemon.md)

### JDatabase

Database connector class.

[« More »](api_cms-2.5__classes__JDatabase.md)

### JDatabaseException

Exception class definition for the Database subpackage.

[« More »](api_cms-2.5__classes__JDatabaseException.md)

### JDatabaseExporterMySQL

MySQL export driver.

[« More »](api_cms-2.5__classes__JDatabaseExporterMySQL.md)

### JDatabaseExporterMySQLi

MySQL export driver.

[« More »](api_cms-2.5__classes__JDatabaseExporterMySQLi.md)

### JDatabaseImporterMySQL

MySQL import driver.

[« More »](api_cms-2.5__classes__JDatabaseImporterMySQL.md)

### JDatabaseImporterMySQLi

MySQL import driver.

[« More »](api_cms-2.5__classes__JDatabaseImporterMySQLi.md)

### JDatabaseMySQL

MySQL database driver

[« More »](api_cms-2.5__classes__JDatabaseMySQL.md)

### JDatabaseMySQLi

MySQLi database driver

[« More »](api_cms-2.5__classes__JDatabaseMySQLi.md)

### JDatabaseQuery

Query Building Class.

[« More »](api_cms-2.5__classes__JDatabaseQuery.md)

### JDatabaseQueryElement

Query Element Class.

[« More »](api_cms-2.5__classes__JDatabaseQueryElement.md)

### JDatabaseQueryMySQL

Query Building Class.

[« More »](api_cms-2.5__classes__JDatabaseQueryMySQL.md)

### JDatabaseQueryMySQLi

Query Building Class.

[« More »](api_cms-2.5__classes__JDatabaseQueryMySQLi.md)

### JDatabaseQuerySQLAzure

Query Building Class.

[« More »](api_cms-2.5__classes__JDatabaseQuerySQLAzure.md)

### JDatabaseQuerySQLSrv

Query Building Class.

[« More »](api_cms-2.5__classes__JDatabaseQuerySQLSrv.md)

### JDatabaseSQLAzure

SQL Server database driver

[« More »](api_cms-2.5__classes__JDatabaseSQLAzure.md)

### JDatabaseSQLSrv

SQL Server database driver

[« More »](api_cms-2.5__classes__JDatabaseSQLSrv.md)

### JDate

JDate is a class that stores a date and provides logic to manipulate
and render that date in a variety of formats.

[« More »](api_cms-2.5__classes__JDate.md)

### JDispatcher

Class to handle dispatching of events.

This is the Observable part of the Observer design pattern
for the event architecture.

[« More »](api_cms-2.5__classes__JDispatcher.md)

### JDocument

Document class, provides an easy interface to parse and display a document

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocument.md)

### JDocumentError

DocumentError class, provides an easy interface to parse and display an error page

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentError.md)

### JDocumentFeed

DocumentFeed class, provides an easy interface to parse and display any feed document

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentFeed.md)

### JDocumentHTML

DocumentHTML class, provides an easy interface to parse and display a HTML document

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentHTML.md)

### JDocumentJSON

JDocumentJSON class, provides an easy interface to parse and display JSON output

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentJSON.md)

### JDocumentOpensearch

OpenSearch class, provides an easy interface to display an OpenSearch document

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentOpensearch.md)

### JDocumentRaw

DocumentRAW class, provides an easy interface to parse and display raw output

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRaw.md)

### JDocumentRenderer

Abstract class for a renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRenderer.md)

### JDocumentRendererAtom

JDocumentRenderer\_Atom is a feed that implements the atom specification

Please note that just by using this class you won't automatically
produce valid atom files. For example, you have to specify either an editor
for the feed or an author for every single feed item.

[« More »](api_cms-2.5__classes__JDocumentRendererAtom.md)

### JDocumentRendererComponent

Component renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererComponent.md)

### JDocumentRendererHead

JDocument head renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererHead.md)

### JDocumentRendererMessage

JDocument system message renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererMessage.md)

### JDocumentRendererModule

JDocument Module renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererModule.md)

### JDocumentRendererModules

JDocument Modules renderer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererModules.md)

### JDocumentRendererRSS

JDocumentRenderer\_RSS is a feed that implements RSS 2.0 Specification

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentRendererRSS.md)

### JDocumentXml

DocumentXML class, provides an easy interface to parse and display XML output

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JDocumentXml.md)

### JEditor

JEditor class to handle WYSIWYG editors

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JEditor.md)

### JElement

Parameter base class

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElement.md)

### JElementCalendar

Renders a calendar element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementCalendar.md)

### JElementCategory

Renders a category element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementCategory.md)

### JElementComponentLayouts

Parameter to display a list of the layouts for a component view from the extension or default template overrides.

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementComponentLayouts.md)

### JElementContentLanguages

Renders a select list of Asset Groups

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementContentLanguages.md)

### JElementEditors

Renders a editors element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementEditors.md)

### JElementFilelist

Renders a filelist element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementFilelist.md)

### JElementFolderlist

Renders a filelist element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementFolderlist.md)

### JElementHelpsites

Renders a helpsites element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementHelpsites.md)

### JElementHidden

Renders a hidden element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementHidden.md)

### JElementImageList

Renders a imagelist element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementImageList.md)

### JElementLanguages

Renders a languages element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementLanguages.md)

### JElementList

Renders a list element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementList.md)

### JElementMenu

Renders a menu element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementMenu.md)

### JElementMenuItem

Renders a menu item element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementMenuItem.md)

### JElementModuleLayouts

Parameter to display a list of the layouts for a module from the module or default template overrides.

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementModuleLayouts.md)

### JElementPassword

Renders a password element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementPassword.md)

### JElementRadio

Renders a radio element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementRadio.md)

### JElementSpacer

Renders a spacer element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementSpacer.md)

### JElementSQL

Renders a SQL element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementSQL.md)

### JElementTemplateStyle

Renders a list of template styles.

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementTemplateStyle.md)

### JElementText

Renders a text element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementText.md)

### JElementTextarea

Renders a textarea element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementTextarea.md)

### JElementTimezones

Renders a timezones element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementTimezones.md)

### JElementUserGroup

Renders a editors element

The JElement is the base class for all JElement types

[« More »](api_cms-2.5__classes__JElementUserGroup.md)

### JError

Error Handling Class

This class is inspired in design and concept by patErrorManager <http://www.php-tools.net>
patErrorManager contributors include:
- gERD Schaufelberger <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
- Sebastian Mordziol <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
- Stephan Schmidt <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>

[« More »](api_cms-2.5__classes__JError.md)

### JEvent

JEvent Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JEvent.md)

### JException

Joomla! Exception object.

[« More »](api_cms-2.5__classes__JException.md)

### JExtension

Extension object

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JExtension.md)

### JFactory

Joomla Platform Factory class

[« More »](api_cms-2.5__classes__JFactory.md)

### JFeedEnclosure

JFeedEnclosure is an internal class that stores feed enclosure information

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JFeedEnclosure.md)

### JFeedImage

JFeedImage is an internal class that stores feed image information

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JFeedImage.md)

### JFeedItem

JFeedItem is an internal class that stores feed item information

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JFeedItem.md)

### JFile

A File handling class

[« More »](api_cms-2.5__classes__JFile.md)

### JFilesystemHelper

File system helper

Holds support functions for the filesystem, particularly the stream

[« More »](api_cms-2.5__classes__JFilesystemHelper.md)

### JFilterInput

JFilterInput is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <[[email protected]](https://api.joomla.org/cdn-cgi/l/email-protection)>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

[« More »](api_cms-2.5__classes__JFilterInput.md)

### JFilterOutput

JFilterOutput

[« More »](api_cms-2.5__classes__JFilterOutput.md)

### JFolder

A Folder handling class

[« More »](api_cms-2.5__classes__JFolder.md)

### JForm

Form Class for the Joomla Platform.

This class implements a robust API for constructing, populating, filtering, and validating forms.
It uses XML definitions to construct form fields and a variety of field and rule classes to
render and validate the form.

[« More »](api_cms-2.5__classes__JForm.md)

### JFormField

Abstract Form Field class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormField.md)

### JFormFieldAccessLevel

Form Field class for the Joomla Platform.

Provides a list of access levels. Access levels control what users in specific
groups can see.

[« More »](api_cms-2.5__classes__JFormFieldAccessLevel.md)

### JFormFieldCacheHandler

Form Field class for the Joomla Platform.

Provides a list of available cache handlers

[« More »](api_cms-2.5__classes__JFormFieldCacheHandler.md)

### JFormFieldCalendar

Form Field class for the Joomla Platform.

Provides a pop up date picker linked to a button.
Optionally may be filtered to use user's or server's time zone.

[« More »](api_cms-2.5__classes__JFormFieldCalendar.md)

### JFormFieldCaptcha

Form Field class for the Joomla Framework.

[« More »](api_cms-2.5__classes__JFormFieldCaptcha.md)

### JFormFieldCategory

Form Field class for the Joomla Platform.

Supports an HTML select list of categories

[« More »](api_cms-2.5__classes__JFormFieldCategory.md)

### JFormFieldCheckbox

Form Field class for the Joomla Platform.

Single check box field.
This is a boolean field with null for false and the specified option for true

[« More »](api_cms-2.5__classes__JFormFieldCheckbox.md)

### JFormFieldCheckboxes

Form Field class for the Joomla Platform.

Displays options as a list of check boxes.
Multiselect may be forced to be true.

[« More »](api_cms-2.5__classes__JFormFieldCheckboxes.md)

### JFormFieldColor

Color Form Field class for the Joomla Platform.

This implementation is designed to be compatible with HTML5's <input type="color">

[« More »](api_cms-2.5__classes__JFormFieldColor.md)

### JFormFieldCombo

Form Field class for the Joomla Platform.

Implements a combo box field.

[« More »](api_cms-2.5__classes__JFormFieldCombo.md)

### JFormFieldComponentLayout

Form Field to display a list of the layouts for a component view from
the extension or template overrides.

[« More »](api_cms-2.5__classes__JFormFieldComponentLayout.md)

### JFormFieldContentLanguage

Form Field class for the Joomla Platform.

Provides a list of content languages

[« More »](api_cms-2.5__classes__JFormFieldContentLanguage.md)

### JFormFieldDatabaseConnection

Form Field class for the Joomla Platform.

Provides a list of available database connections, optionally limiting to
a given list.

[« More »](api_cms-2.5__classes__JFormFieldDatabaseConnection.md)

### JFormFieldEditor

Form Field class for the Joomla Platform.

An editarea field for content creation

[« More »](api_cms-2.5__classes__JFormFieldEditor.md)

### JFormFieldEditors

Form Field class for the Joomla Platform.

Provides a list of installed editors.

[« More »](api_cms-2.5__classes__JFormFieldEditors.md)

### JFormFieldEMail

Form Field class for the Joomla Platform.

Provides and input field for e-mail addresses

[« More »](api_cms-2.5__classes__JFormFieldEMail.md)

### JFormFieldFile

Form Field class for the Joomla Platform.

Provides an input field for files

[« More »](api_cms-2.5__classes__JFormFieldFile.md)

### JFormFieldFileList

Supports an HTML select list of files

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldFileList.md)

### JFormFieldFolderList

Supports an HTML select list of folder

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldFolderList.md)

### JFormFieldGroupedList

Form Field class for the Joomla Platform.

Provides a grouped list select field.

[« More »](api_cms-2.5__classes__JFormFieldGroupedList.md)

### JFormFieldHelpsite

Form Field class for the Joomla Platform.

Provides a select list of help sites.

[« More »](api_cms-2.5__classes__JFormFieldHelpsite.md)

### JFormFieldHidden

Form Field class for the Joomla Platform.

Provides a hidden field

[« More »](api_cms-2.5__classes__JFormFieldHidden.md)

### JFormFieldImageList

Supports an HTML select list of image

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldImageList.md)

### JFormFieldInteger

Form Field class for the Joomla Platform.

Provides a select list of integers with specified first, last and step values.

[« More »](api_cms-2.5__classes__JFormFieldInteger.md)

### JFormFieldLanguage

Form Field class for the Joomla Platform.

Supports a list of installed application languages

[« More »](api_cms-2.5__classes__JFormFieldLanguage.md)

### JFormFieldList

Form Field class for the Joomla Platform.

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldList.md)

### JFormFieldMedia

Form Field class for the Joomla Platform.

Provides a modal media selector including upload mechanism

[« More »](api_cms-2.5__classes__JFormFieldMedia.md)

### JFormFieldMenu

Supports an HTML select list of menus

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldMenu.md)

### JFormFieldMenuItem

Supports an HTML grouped select list of menu item grouped by menu

Provides a grouped list select field.

[« More »](api_cms-2.5__classes__JFormFieldMenuItem.md)

### JFormFieldModuleLayout

Form Field to display a list of the layouts for module display from the module or template overrides.

[« More »](api_cms-2.5__classes__JFormFieldModuleLayout.md)

### JFormFieldPassword

Form Field class for the Joomla Platform.

Text field for passwords

[« More »](api_cms-2.5__classes__JFormFieldPassword.md)

### JFormFieldPlugins

Form Field class for the Joomla Framework.

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldPlugins.md)

### JFormFieldRadio

Form Field class for the Joomla Platform.

Provides radio button inputs

[« More »](api_cms-2.5__classes__JFormFieldRadio.md)

### JFormFieldRules

Form Field class for the Joomla Platform.

Field for assigning permissions to groups for a given asset

[« More »](api_cms-2.5__classes__JFormFieldRules.md)

### JFormFieldSessionHandler

Form Field class for the Joomla Platform.

Provides a select list of session handler options.

[« More »](api_cms-2.5__classes__JFormFieldSessionHandler.md)

### JFormFieldSpacer

Form Field class for the Joomla Platform.

Provides spacer markup to be used in form layouts.

[« More »](api_cms-2.5__classes__JFormFieldSpacer.md)

### JFormFieldSQL

Supports an custom SQL select list

Supports a generic list of options.

[« More »](api_cms-2.5__classes__JFormFieldSQL.md)

### JFormFieldTel

Form Field class for the Joomla Platform.

Supports a text field telephone numbers.

[« More »](api_cms-2.5__classes__JFormFieldTel.md)

### JFormFieldTemplateStyle

Form Field class for the Joomla CMS.

Supports a select grouped list of template styles

[« More »](api_cms-2.5__classes__JFormFieldTemplateStyle.md)

### JFormFieldText

Form Field class for the Joomla Platform.

Supports a one line text field.

[« More »](api_cms-2.5__classes__JFormFieldText.md)

### JFormFieldTextarea

Form Field class for the Joomla Platform.

Supports a multi line area for entry of plain text

[« More »](api_cms-2.5__classes__JFormFieldTextarea.md)

### JFormFieldTimezone

Form Field class for the Joomla Platform.

Provides a grouped list select field.

[« More »](api_cms-2.5__classes__JFormFieldTimezone.md)

### JFormFieldUrl

Form Field class for the Joomla Platform.

Supports a URL text field

[« More »](api_cms-2.5__classes__JFormFieldUrl.md)

### JFormFieldUser

Field to select a user id from a modal list.

[« More »](api_cms-2.5__classes__JFormFieldUser.md)

### JFormFieldUsergroup

Form Field class for the Joomla Platform.

Supports a nested check box field listing user groups.
Multiselect is available by default.

[« More »](api_cms-2.5__classes__JFormFieldUsergroup.md)

### JFormHelper

JForm's helper class.

Provides a storage for filesystem's paths where JForm's entities reside and methods for creating those entities.
Also stores objects with entities' prototypes for further reusing.

[« More »](api_cms-2.5__classes__JFormHelper.md)

### JFormRule

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRule.md)

### JFormRuleBoolean

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleBoolean.md)

### JFormRuleCaptcha

Form Rule class for the Joomla Framework.

[« More »](api_cms-2.5__classes__JFormRuleCaptcha.md)

### JFormRuleColor

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleColor.md)

### JFormRuleEmail

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleEmail.md)

### JFormRuleEquals

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleEquals.md)

### JFormRuleOptions

Form Rule class for the Joomla Platform.

Requires the value entered be one of the options in a field of type="list"

[« More »](api_cms-2.5__classes__JFormRuleOptions.md)

### JFormRuleRules

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleRules.md)

### JFormRuleTel

Form Rule class for the Joomla Platform

[« More »](api_cms-2.5__classes__JFormRuleTel.md)

### JFormRuleUrl

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleUrl.md)

### JFormRuleUsername

Form Rule class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JFormRuleUsername.md)

### JFTP

FTP client class

[« More »](api_cms-2.5__classes__JFTP.md)

### JGithub

Joomla Platform class for interacting with a GitHub server instance.

[« More »](api_cms-2.5__classes__JGithub.md)

### JGithubForks

GitHub API References class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubForks.md)

### JGithubGists

GitHub API Gists class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubGists.md)

### JGithubHttp

HTTP client class for connecting to a GitHub instance.

[« More »](api_cms-2.5__classes__JGithubHttp.md)

### JGithubIssues

GitHub API Issues class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubIssues.md)

### JGithubObject

GitHub API object class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubObject.md)

### JGithubPulls

GitHub API Pull Requests class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubPulls.md)

### JGithubRefs

GitHub API References class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JGithubRefs.md)

### JGrid

JGrid class to dynamically generate HTML tables

[« More »](api_cms-2.5__classes__JGrid.md)

### JHelp

Help system class

[« More »](api_cms-2.5__classes__JHelp.md)

### JHtml

Utility class for all HTML drawing classes

[« More »](api_cms-2.5__classes__JHtml.md)

### JHtmlAccess

Extended Utility class for all HTML drawing classes.

[« More »](api_cms-2.5__classes__JHtmlAccess.md)

### JHtmlBatch

Extended Utility class for batch processing widgets.

[« More »](api_cms-2.5__classes__JHtmlBatch.md)

### JHtmlBehavior

Utility class for javascript behaviors

[« More »](api_cms-2.5__classes__JHtmlBehavior.md)

### JHtmlCategory

Utility class for categories

[« More »](api_cms-2.5__classes__JHtmlCategory.md)

### JHtmlContent

Utility class to fire onContentPrepare for non-article based content.

[« More »](api_cms-2.5__classes__JHtmlContent.md)

### JHtmlContentLanguage

Utility class working with content language select lists

[« More »](api_cms-2.5__classes__JHtmlContentLanguage.md)

### JHtmlDate

Extended Utility class for handling date display.

[« More »](api_cms-2.5__classes__JHtmlDate.md)

### JHtmlEmail

Utility class for cloaking email addresses

[« More »](api_cms-2.5__classes__JHtmlEmail.md)

### JHtmlForm

Utility class for form elements

[« More »](api_cms-2.5__classes__JHtmlForm.md)

### JHtmlGrid

Utility class for creating HTML Grids

[« More »](api_cms-2.5__classes__JHtmlGrid.md)

### JHtmlIcons

Utility class for icons.

[« More »](api_cms-2.5__classes__JHtmlIcons.md)

### JHtmlImage

Utility class working with images.

[« More »](api_cms-2.5__classes__JHtmlImage.md)

### JHtmlJGrid

Utility class for creating HTML Grids

[« More »](api_cms-2.5__classes__JHtmlJGrid.md)

### JHtmlList

Utility class for creating different select lists

[« More »](api_cms-2.5__classes__JHtmlList.md)

### JHtmlMenu

Utility class working with menu select lists

[« More »](api_cms-2.5__classes__JHtmlMenu.md)

### JHtmlNumber

HTML helper class for rendering numbers.

[« More »](api_cms-2.5__classes__JHtmlNumber.md)

### JHtmlRules

Extended Utility class for all HTML drawing classes.

[« More »](api_cms-2.5__classes__JHtmlRules.md)

### JHtmlSelect

Utility class for creating HTML select lists

[« More »](api_cms-2.5__classes__JHtmlSelect.md)

### JHtmlSliders

Utility class for Sliders elements

[« More »](api_cms-2.5__classes__JHtmlSliders.md)

### JHtmlString

HTML helper class for rendering manipulated strings.

[« More »](api_cms-2.5__classes__JHtmlString.md)

### JHtmlTabs

Utility class for Tabs elements.

[« More »](api_cms-2.5__classes__JHtmlTabs.md)

### JHtmlTel

HTML helper class for rendering telephone numbers.

[« More »](api_cms-2.5__classes__JHtmlTel.md)

### JHtmlUser

Utility class working with users

[« More »](api_cms-2.5__classes__JHtmlUser.md)

### JHttp

HTTP client class.

[« More »](api_cms-2.5__classes__JHttp.md)

### JHttpFactory

HTTP factory class.

[« More »](api_cms-2.5__classes__JHttpFactory.md)

### JHttpResponse

HTTP response data object class.

[« More »](api_cms-2.5__classes__JHttpResponse.md)

### JHttpTransportCurl

HTTP transport class for using cURL.

[« More »](api_cms-2.5__classes__JHttpTransportCurl.md)

### JHttpTransportSocket

HTTP transport class for using sockets directly.

[« More »](api_cms-2.5__classes__JHttpTransportSocket.md)

### JHttpTransportStream

HTTP transport class for using PHP streams.

[« More »](api_cms-2.5__classes__JHttpTransportStream.md)

### JImage

Class to manipulate an image.

[« More »](api_cms-2.5__classes__JImage.md)

### JImageFilter

Class to manipulate an image.

[« More »](api_cms-2.5__classes__JImageFilter.md)

### JImageFilterBrightness

Image Filter class adjust the brightness of an image.

[« More »](api_cms-2.5__classes__JImageFilterBrightness.md)

### JImageFilterContrast

Image Filter class adjust the contrast of an image.

[« More »](api_cms-2.5__classes__JImageFilterContrast.md)

### JImageFilterEdgedetect

Image Filter class to add an edge detect effect to an image.

[« More »](api_cms-2.5__classes__JImageFilterEdgedetect.md)

### JImageFilterEmboss

Image Filter class to emboss an image.

[« More »](api_cms-2.5__classes__JImageFilterEmboss.md)

### JImageFilterGrayScale

Image Filter class to transform an image to grayscale.

[« More »](api_cms-2.5__classes__JImageFilterGrayScale.md)

### JImageFilterNegate

Image Filter class to negate the colors of an image.

[« More »](api_cms-2.5__classes__JImageFilterNegate.md)

### JImageFilterSketchy

Image Filter class to make an image appear "sketchy".

[« More »](api_cms-2.5__classes__JImageFilterSketchy.md)

### JImageFilterSmooth

Image Filter class adjust the smoothness of an image.

[« More »](api_cms-2.5__classes__JImageFilterSmooth.md)

### JInput

Joomla! Input Base Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_cms-2.5__classes__JInput.md)

### JInputCLI

Joomla! Input CLI Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_cms-2.5__classes__JInputCLI.md)

### JInputCookie

Joomla! Input Cookie Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_cms-2.5__classes__JInputCookie.md)

### JInputFiles

Joomla! Input Files Class

This is an abstracted input class used to manage retrieving data from the application environment.

[« More »](api_cms-2.5__classes__JInputFiles.md)

### JInstaller

Joomla base installer class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstaller.md)

### JInstallerComponent

Component installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerComponent.md)

### JInstallerFile

File installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerFile.md)

### JInstallerHelper

Installer helper class

[« More »](api_cms-2.5__classes__JInstallerHelper.md)

### JInstallerLanguage

Language installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerLanguage.md)

### JInstallerLibrary

Library installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerLibrary.md)

### JInstallerModule

Module installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerModule.md)

### JInstallerPackage

Package installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerPackage.md)

### JInstallerPlugin

Plugin installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerPlugin.md)

### JInstallerTemplate

Template installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JInstallerTemplate.md)

### JLanguage

Languages/translation handler class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JLanguage.md)

### JLanguageHelper

Language helper class

[« More »](api_cms-2.5__classes__JLanguageHelper.md)

### JLanguageMultilang

Utitlity class for multilang

[« More »](api_cms-2.5__classes__JLanguageMultilang.md)

### JLanguageTransliterate

Class to transliterate strings

[« More »](api_cms-2.5__classes__JLanguageTransliterate.md)

### JLDAP

LDAP client class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JLDAP.md)

### JLibraryManifest

Joomla! Library Manifest File

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JLibraryManifest.md)

### JLoader

Static class to handle loading of libraries.

[« More »](api_cms-2.5__classes__JLoader.md)

### JLog

Joomla! Log Class

This class hooks into the global log configuration settings to allow for user configured
logging events to be sent to where the user wishes them to be sent. On high load sites
SysLog is probably the best (pure PHP function), then the text file based loggers (CSV, W3C
or plain FormattedText) and finally MySQL offers the most features (e.g. rapid searching)
but will incur a performance hit due to INSERT being issued.

[« More »](api_cms-2.5__classes__JLog.md)

### JLogEntry

Joomla! Log Entry class

This class is designed to hold log entries for either writing to an engine, or for
supported engines, retrieving lists and building in memory (PHP based) search operations.

[« More »](api_cms-2.5__classes__JLogEntry.md)

### JLogger

Joomla! Logger Base Class

This class is used to be the basis of logger classes to allow for defined functions
to exist regardless of the child class.

[« More »](api_cms-2.5__classes__JLogger.md)

### JLoggerDatabase

Joomla! MySQL Database Log class

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the SysLog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-2.5__classes__JLoggerDatabase.md)

### JLoggerEcho

Joomla Echo logger class.

This class is used to be the basis of logger classes to allow for defined functions
to exist regardless of the child class.

[« More »](api_cms-2.5__classes__JLoggerEcho.md)

### JLoggerFormattedText

Joomla! Formatted Text File Log class

This class is designed to use as a base for building formatted text files for output. By
default it emulates the SysLog style format output. This is a disk based output format.

[« More »](api_cms-2.5__classes__JLoggerFormattedText.md)

### JLoggerMessageQueue

Joomla MessageQueue logger class.

This class is designed to output logs to a specific MySQL database table. Fields in this
table are based on the Syslog style of log output. This is designed to allow quick and
easy searching.

[« More »](api_cms-2.5__classes__JLoggerMessageQueue.md)

### JLoggerSysLog

Joomla! SysLog Log class

This class is designed to call the PHP SysLog function call which is then sent to the
system wide log system. For Linux/Unix based systems this is the syslog subsystem, for
the Windows based implementations this can be found in the Event Log. For Windows,
permissions may prevent PHP from properly outputting messages.

[« More »](api_cms-2.5__classes__JLoggerSysLog.md)

### JLoggerW3C

Joomla! W3C Logging class

This class is designed to build log files based on the W3C specification
at: http://www.w3.org/TR/WD-logfile.html

[« More »](api_cms-2.5__classes__JLoggerW3C.md)

### JMail

Email Class. Provides a common interface to send email from the Joomla! Platform

[« More »](api_cms-2.5__classes__JMail.md)

### JMailHelper

Email helper class, provides static methods to perform various tasks relevant
to the Joomla email routines.

TODO: Test these methods as the regex work is first run and not tested thoroughly

[« More »](api_cms-2.5__classes__JMailHelper.md)

### JMenu

JMenu class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JMenu.md)

### JModel

Base class for a Joomla Model

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModel.md)

### JModelAdmin

Prototype admin model.

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModelAdmin.md)

### JModelForm

Prototype form model.

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModelForm.md)

### JModelItem

Prototype item model.

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModelItem.md)

### JModelLegacy

Alias to JModel for forward compatability.

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModelLegacy.md)

### JModelList

Model class for handling lists of items.

Acts as a Factory class for application specific objects and
provides many supporting API functions.

[« More »](api_cms-2.5__classes__JModelList.md)

### JModuleHelper

Module helper class

[« More »](api_cms-2.5__classes__JModuleHelper.md)

### JNode

Tree Node Class.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JNode.md)

### JObject

Joomla Platform Object Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JObject.md)

### JObservable

Abstract observable class to implement the observer design pattern

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JObservable.md)

### JObserver

Abstract observer class to implement the observer design pattern

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JObserver.md)

### JOpenSearchImage

JOpenSearchImage is an internal class that stores Images for the OpenSearch Description

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JOpenSearchImage.md)

### JOpenSearchUrl

JOpenSearchUrl is an internal class that stores the search URLs for the OpenSearch description

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JOpenSearchUrl.md)

### JPackageManifest

Joomla! Package Manifest File

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPackageManifest.md)

### JPagination

Pagination Class. Provides a common interface for content pagination for the
Joomla! Platform.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPagination.md)

### JPaginationObject

Pagination object representing a particular item in the pagination lists.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPaginationObject.md)

### JPane

JPane abstract class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPane.md)

### JPaneSliders

JPanelSliders class to to draw parameter panes.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPaneSliders.md)

### JPaneTabs

JPanelTabs class to to draw parameter panes.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPaneTabs.md)

### JParameter

Parameter handler

[« More »](api_cms-2.5__classes__JParameter.md)

### JPath

A Path handling class

[« More »](api_cms-2.5__classes__JPath.md)

### JPathway

Class to maintain a pathway.

The user's navigated path within the application.

[« More »](api_cms-2.5__classes__JPathway.md)

### JPlatform

Version information class for the Joomla Platform.

[« More »](api_cms-2.5__classes__JPlatform.md)

### JPlugin

JPlugin Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JPlugin.md)

### JPluginHelper

Plugin helper class

[« More »](api_cms-2.5__classes__JPluginHelper.md)

### JProfiler

Utility class to assist in the process of benchmarking the execution
of sections of code to understand where time is being spent.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JProfiler.md)

### JRegistry

JRegistry class

[« More »](api_cms-2.5__classes__JRegistry.md)

### JRegistryFormat

Abstract Format for JRegistry

[« More »](api_cms-2.5__classes__JRegistryFormat.md)

### JRegistryFormatINI

INI format handler for JRegistry.

[« More »](api_cms-2.5__classes__JRegistryFormatINI.md)

### JRegistryFormatJSON

JSON format handler for JRegistry.

[« More »](api_cms-2.5__classes__JRegistryFormatJSON.md)

### JRegistryFormatPHP

PHP class format handler for JRegistry

[« More »](api_cms-2.5__classes__JRegistryFormatPHP.md)

### JRegistryFormatXML

XML format handler for JRegistry.

[« More »](api_cms-2.5__classes__JRegistryFormatXML.md)

### JRequest

JRequest Class

This class serves to provide the Joomla Platform with a common interface to access
request variables. This includes $\_POST, $\_GET, and naturally $\_REQUEST. Variables
can be passed through an input filter to avoid injection or returned raw.

[« More »](api_cms-2.5__classes__JRequest.md)

### JResponse

JResponse Class.

This class serves to provide the Joomla Platform with a common interface to access
response variables. This includes header and body.

[« More »](api_cms-2.5__classes__JResponse.md)

### JRoute

Route handling class

[« More »](api_cms-2.5__classes__JRoute.md)

### JRouter

Class to create and parse routes

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JRouter.md)

### JRule

Deprecated class placeholder. You should use JAccessRule instead.

[« More »](api_cms-2.5__classes__JRule.md)

### JRules

Deprecated class placeholder. You should use JAccessRules instead.

[« More »](api_cms-2.5__classes__JRules.md)

### JSchemaChangeitem

Each object represents one query, which is one line from a DDS SQL query.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitem.md)

### JSchemaChangeitemmysql

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemmysql.md)

### JSchemaChangeitemsqlazure

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemsqlazure.md)

### JSchemaChangeitemsqlsrv

Checks the database schema against one MySQL DDL query to see if it has been run.

This class is used to check the site's database to see if the DDL query has been run.
If not, it provides the ability to fix the database by re-running the DDL query.
The queries are parsed from the update files in the folder
administrator/components/com\_admin/sql/updates/<database>.
These updates are run automatically if the site was updated using com\_installer.
However, it is possible that the program files could be updated without udpating
the database (for example, if a user just copies the new files over the top of an
existing installation).
This is an abstract class. We need to extend it for each database and add a
buildCheckQuery() method that creates the query to check that a DDL query has been run.

[« More »](api_cms-2.5__classes__JSchemaChangeitemsqlsrv.md)

### JSchemaChangeset

Contains a set of JSchemaChange objects for a particular instance of Joomla.

Each of these objects contains a DDL query that should have been run against
the database when this database was created or updated. This enables the
Installation Manager to check that the current database schema is up to date.

[« More »](api_cms-2.5__classes__JSchemaChangeset.md)

### JSession

Class for managing HTTP sessions

Provides access to session-state values as well as session-level
settings and lifetime management methods.
Based on the standard PHP session handling mechanism it provides
more advanced features such as expire timeouts.

[« More »](api_cms-2.5__classes__JSession.md)

### JSessionStorage

Custom session storage handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorage.md)

### JSessionStorageApc

APC session storage handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageApc.md)

### JSessionStorageDatabase

Database session storage handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageDatabase.md)

### JSessionStorageEaccelerator

eAccelerator session storage handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageEaccelerator.md)

### JSessionStorageMemcache

Memcache session storage handler for PHP

-- Inspired in both design and implementation by the Horde memcache handler --

[« More »](api_cms-2.5__classes__JSessionStorageMemcache.md)

### JSessionStorageMemcached

Memcached session storage handler for PHP

-- Inspired in both design and implementation by the Horde memcached handler --

[« More »](api_cms-2.5__classes__JSessionStorageMemcached.md)

### JSessionStorageNone

File session handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageNone.md)

### JSessionStorageWincache

WINCACHE session storage handler for PHP

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageWincache.md)

### JSessionStorageXcache

XCache session storage handler

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSessionStorageXcache.md)

### JSimpleCrypt

JSimpleCrypt is a very simple encryption algorithm for encrypting/decrypting strings

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JSimpleCrypt.md)

### JSimpleXML

SimpleXML implementation.

The XML Parser extension (expat) is required to use JSimpleXML.
The class provides a pure PHP4 implementation of the PHP5
interface SimpleXML. As with PHP5's SimpleXML it is what it says:
simple. Nevertheless, it is an easy way to deal with XML data,
especially for read only access.
Because it's not possible to use the PHP5 ArrayIterator interface
with PHP4 there are some differences between this implementation
and that of PHP5:
The access to the root node has to be explicit in
JSimpleXML, not implicit as with PHP5. Write
$xml->document->node instead of $xml->node
You cannot access CDATA using array syntax. Use the method data() instead
You cannot access attributes directly with array syntax. Use attributes()
to read them.
Comments are ignored.
Last and least, this is not as fast as PHP5 SimpleXML--it is pure PHP4.
Example:
<code>
:simple.xml:
<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<document>
<node>
<child gender="m">Tom Foo</child>
<child gender="f">Tamara Bar</child>
<node>
</document>
---
// read and write a document
$xml = new JSimpleXML;
$xml->loadFile('simple.xml');
print $xml->document->toString();
// access a given node's CDATA
print $xml->root->node->child[0]->data(); // Tom Foo
// access attributes
$attr = $xml->root->node->child[1]->attributes();
print $attr['gender']; // f
// access children
foreach($xml->root->node->children() as $child) {
print $child->data();
}
</code>
Note: JSimpleXML cannot be used to access sophisticated XML doctypes
using datatype ANY (e.g. XHTML). With a DOM implementation you can
handle this.

[« More »](api_cms-2.5__classes__JSimpleXML.md)

### JSimpleXMLElement

SimpleXML Element

This object stores all of the direct children of itself in the $children array.
They are also stored by type as arrays. So, if, for example, this tag had 2 <font>
tags as children, there would be a class member called $font created as an array.
$font[0] would be the first font tag, and $font[1] would be the second.
To loop through all of the direct children of this object, the $children member
should be used.
To loop through all of the direct children of a specific tag for this object, it
is probably easier to use the arrays of the specific tag names, as explained above.

[« More »](api_cms-2.5__classes__JSimpleXMLElement.md)

### JStream

Joomla! Stream Interface

The Joomla! stream interface is designed to handle files as streams
where as the legacy JFile static class treated files in a rather
atomic manner.

[« More »](api_cms-2.5__classes__JStream.md)

### JStreamString

String Stream Wrapper

This class allows you to use a PHP string in the same way that
you would normally use a regular stream wrapper

[« More »](api_cms-2.5__classes__JStreamString.md)

### JString

String handling class for utf-8 data
Wraps the phputf8 library
All functions assume the validity of utf-8 strings.

[« More »](api_cms-2.5__classes__JString.md)

### JStringController

String Controller

[« More »](api_cms-2.5__classes__JStringController.md)

### JStringNormalise

Joomla Platform String Normalise Class

[« More »](api_cms-2.5__classes__JStringNormalise.md)

### JStringNormalize

Joomla Platform String Normalize Class

[« More »](api_cms-2.5__classes__JStringNormalize.md)

### JTable

Abstract Table class

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTable.md)

### JTableAsset

Table class supporting modified pre-order tree traversal behavior.

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableAsset.md)

### JTableCategory

Category table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableCategory.md)

### JTableContent

Content table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableContent.md)

### JTableExtension

Extension table
Replaces plugins table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableExtension.md)

### JTableLanguage

Languages table.

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableLanguage.md)

### JTableMenu

Menu table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableMenu.md)

### JTableMenuType

Menu Types table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableMenuType.md)

### JTableModule

Module table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableModule.md)

### JTableNested

Table class supporting modified pre-order tree traversal behavior.

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableNested.md)

### JTableSession

Session table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableSession.md)

### JTableUpdate

Update table
Stores updates temporarily

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableUpdate.md)

### JTableUser

Users table

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableUser.md)

### JTableUsergroup

Usergroup table class.

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableUsergroup.md)

### JTableViewlevel

Viewlevels table class.

Parent class to all tables.

[« More »](api_cms-2.5__classes__JTableViewlevel.md)

### JText

Text handling class.

[« More »](api_cms-2.5__classes__JText.md)

### JToolBar

ToolBar handler

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JToolBar.md)

### JTree

Tree Class.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JTree.md)

### JUpdate

Update class.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUpdate.md)

### JUpdateAdapter

UpdateAdapter class.

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUpdateAdapter.md)

### JUpdater

Updater Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUpdater.md)

### JUpdaterCollection

Collection Update Adapter Class

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUpdaterCollection.md)

### JUpdaterExtension

Extension class for updater

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUpdaterExtension.md)

### JURI

JURI Class

This class serves two purposes. First it parses a URI and provides a common interface
for the Joomla Platform to access and manipulate a URI. Second it obtains the URI of
the current executing script from the server regardless of server.

[« More »](api_cms-2.5__classes__JURI.md)

### JUser

User class. Handles all application interaction with a user

This class allows for simple but smart objects with get and set methods
and an internal error handler.

[« More »](api_cms-2.5__classes__JUser.md)

### JUserHelper

Authorisation helper class, provides static methods to perform various tasks relevant
to the Joomla user and authorisation classes

This class has influences and some method logic from the Horde Auth package

[« More »](api_cms-2.5__classes__JUserHelper.md)

### JUtility

JUtility is a utility functions class

[« More »](api_cms-2.5__classes__JUtility.md)

### JVersion

Version information class for the Joomla CMS.

[« More »](api_cms-2.5__classes__JVersion.md)

### JView

Base class for a Joomla View

Class holding methods for displaying presentation data.

[« More »](api_cms-2.5__classes__JView.md)

### JViewLegacy

Alias to JView for forward compatability.

Class holding methods for displaying presentation data.

[« More »](api_cms-2.5__classes__JViewLegacy.md)

### JWeb

Deprecated class placeholder. You should use JApplicationWeb instead.

[« More »](api_cms-2.5__classes__JWeb.md)

### JWebClient

Class to model a Web Client.

[« More »](api_cms-2.5__classes__JWebClient.md)

### JXMLElement

Wrapper class for php SimpleXMLElement.

[« More »](api_cms-2.5__classes__JXMLElement.md)

### LogException

Exception class definition for the Log subpackage.

[« More »](api_cms-2.5__classes__LogException.md)

# Joomla! CMS 5.4.x API » \Joomla\CMS\Application

> **Fonte / Source:** https://api.joomla.org/cms-5/namespaces/joomla-cms-application.html

---

## Traits

### EventAware

Trait for application classes which dispatch events

[« More »](api_cms-5__classes__Joomla-CMS-Application-EventAware.md)

### ExtensionNamespaceMapper

Trait for application classes which ensures the namespace mapper exists and includes it.

[« More »](api_cms-5__classes__Joomla-CMS-Application-ExtensionNamespaceMapper.md)

### IdentityAware

Trait for application classes which are identity (user) aware

[« More »](api_cms-5__classes__Joomla-CMS-Application-IdentityAware.md)

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

[« More »](api_cms-5__classes__Joomla-CMS-Application-MultiFactorAuthenticationHandler.md)

## Interfaces

### CMSApplicationInterface

Interface defining a Joomla! CMS Application class

[« More »](api_cms-5__classes__Joomla-CMS-Application-CMSApplicationInterface.md)

### CMSWebApplicationInterface

Interface defining a Joomla! CMS Application class for web applications.

[« More »](api_cms-5__classes__Joomla-CMS-Application-CMSWebApplicationInterface.md)

### EventAwareInterface

Interface defining application that can trigger Joomla 3.x style events

[« More »](api_cms-5__classes__Joomla-CMS-Application-EventAwareInterface.md)

## Classes

### AdministratorApplication

Joomla! Administrator Application class

[« More »](api_cms-5__classes__Joomla-CMS-Application-AdministratorApplication.md)

### ApiApplication

Joomla! API Application class

[« More »](api_cms-5__classes__Joomla-CMS-Application-ApiApplication.md)

### ApplicationHelper

Application helper functions

[« More »](api_cms-5__classes__Joomla-CMS-Application-ApplicationHelper.md)

### BaseApplication

Joomla Platform Base Application Class

[« More »](api_cms-5__classes__Joomla-CMS-Application-BaseApplication.md)

### CliApplication

Base class for a Joomla! command line application.

[« More »](api_cms-5__classes__Joomla-CMS-Application-CliApplication.md)

### CMSApplication

Joomla! CMS Application class

[« More »](api_cms-5__classes__Joomla-CMS-Application-CMSApplication.md)

### ConsoleApplication

The Joomla! CMS Console Application

[« More »](api_cms-5__classes__Joomla-CMS-Application-ConsoleApplication.md)

### DaemonApplication

Class to turn CliApplication applications into daemons. It requires CLI and PCNTL support built into PHP.

[« More »](api_cms-5__classes__Joomla-CMS-Application-DaemonApplication.md)

### SiteApplication

Joomla! Site Application class

[« More »](api_cms-5__classes__Joomla-CMS-Application-SiteApplication.md)

### WebApplication

Base class for a Joomla! Web application.

[« More »](api_cms-5__classes__Joomla-CMS-Application-WebApplication.md)

## Classes

### CliInput

Class CliInput

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-CliInput.md)

### CliOutput

Base class defining a command line output handler

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-CliOutput.md)

### ColorStyle

Class defining ANSI-color styles for command line output

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-ColorStyle.md)

## Classes

### Stdout

Output handler for writing command line output to the stdout interface

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-Output-Stdout.md)

### Xml

Output handler for writing command line output to the stdout interface

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-Output-Xml.md)

## Interfaces

### ProcessorInterface

Interface for a command line output processor

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-Output-Processor-ProcessorInterface.md)

## Classes

### ColorProcessor

Command line output processor supporting ANSI-colored output

[« More »](api_cms-5__classes__Joomla-CMS-Application-CLI-Output-Processor-ColorProcessor.md)

## Classes

### NotAcceptable

Exception class defining a not acceptable class

[« More »](api_cms-5__classes__Joomla-CMS-Application-Exception-NotAcceptable.md)

# Joomla! CMS 6.0.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/cms-6/deprecated.html

---

# Deprecated Elements

## repos/joomla-cms/libraries/src/Application/AdministratorApplication.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\AdministratorApplication::getRouter() | 226 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(AdministratorRouter::class); |
| \Joomla\CMS\Application\AdministratorApplication::purgeMessages() | 405 | 4.3 will be removed in 6.0 Purge the messages through the messages model Example: Factory::getApplication()->bootComponent('messages')->getMVCFactory() ->createModel('Messages', 'Administrator')->purge(Factory::getApplication()->getIdentity()->id); |

## repos/joomla-cms/libraries/src/Application/ApiApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\ApiApplication::getApiRouter() | 399 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(ApiRouter::class); |

## repos/joomla-cms/libraries/src/Application/CMSApplication.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSApplication::checkUserRequireReset() | 385 | 5.2.3 will be removed in 7.0 Use $this->checkUserRequiresReset() instead. |
| \Joomla\CMS\Application\CMSApplication::getCfg() | 507 | 3.2 will be removed in 6.0 Use get() instead Example: Factory::getApplication()->get($varname, $default); |
| \Joomla\CMS\Application\CMSApplication::getInstance() | 551 | 4.0 will be removed in 6.0 Use the application service from the DI container instead Example: Factory::getContainer()->get($name); |
| \Joomla\CMS\Application\CMSApplication::getRouter() | 695 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get($name); |
| \Joomla\CMS\Application\CMSApplication::route() | 1162 | 4.0 will be removed in 6.0 Implement the route functionality in the extending class, this here will be removed without replacement |
| \Joomla\CMS\Application\CMSApplication::isTwoFactorAuthenticationRequired() | 1313 | 4.2 will be removed in 6.0 Will be removed without replacements |
| \Joomla\CMS\Application\CMSApplication::hasUserConfiguredTwoFactorAuthentication() | 1330 | 4.2 will be removed in 6.0 Will be removed without replacements |

## repos/joomla-cms/libraries/src/Application/CMSWebApplicationInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSWebApplicationInterface::getRouter() | 63 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get($name); |

## repos/joomla-cms/libraries/src/Application/ConsoleApplication.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\ConsoleApplication::\_\_get() | 166 | 4.0 will be removed in 6.0 This is a B/C proxy for deprecated read accesses, use getInput() method instead Example: $app->getInput(); |
| \Joomla\CMS\Application\ConsoleApplication::getRouter() | 466 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(ApiRouter::class); |

## repos/joomla-cms/libraries/src/Application/EventAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\EventAware::triggerEvent() | 92 | 4.0 will be removed in 7.0 Use the Dispatcher method instead Example: Factory::getApplication()->getDispatcher()->dispatch($eventName, $event); |

## repos/joomla-cms/libraries/src/Application/EventAwareInterface.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\EventAwareInterface | 28 | 4.3 will be removed in 7.0 This interface will be removed without replacement as the Joomla 3.x compatibility layer will be removed |
| \Joomla\CMS\Application\EventAwareInterface::triggerEvent() | 61 | 4.0 will be removed in 7.0 Use the Dispatcher method instead Example: Factory::getApplication()->getDispatcher()->dispatch($eventName, $event); |

## repos/joomla-cms/libraries/src/Application/SiteApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\SiteApplication::getRouter() | 389 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(SiteRouter::class); |

## repos/joomla-cms/libraries/src/Application/WebApplication.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\WebApplication::getInstance() | 133 | 4.0 will be removed in 6.0 Use the application service in the DI container instead Example: \Joomla\CMS\Factory::getContainer()->get($name) |
| \Joomla\CMS\Application\WebApplication::loadSession() | 339 | 4.3 will be removed in 6.0 The session should be injected as a service. |
| \Joomla\CMS\Application\WebApplication::\_\_get() | 471 | 4.0 will be removed in 8.0 use $this->getInput() instead |
| \Joomla\CMS\Application\WebApplication::$JComponentTitle | 57 | 5.2.0 will be removed in 7.0 Use the Document getTitle() Method Example: \Joomla\CMS\Factory::getApplication()->getDocument()->getTitle() |

## repos/joomla-cms/libraries/src/Authentication/Password/MD5Handler.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Authentication\Password\MD5Handler | 28 | 4.0 will be removed in 6.0 Support for MD5 hashed passwords will be removed without replacement |

## repos/joomla-cms/libraries/src/Authentication/Password/PHPassHandler.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Authentication\Password\PHPassHandler | 26 | 4.0 will be removed in 6.0 Support for PHPass hashed passwords will be removed without replacement |

## repos/joomla-cms/libraries/src/Cache/Cache.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Cache::getInstance() | 94 | 4.2 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($type, $options); |

## repos/joomla-cms/libraries/src/Cache/CacheController.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\CacheController::getInstance() | 94 | 4.2 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($type, $options); |
| \Joomla\CMS\Cache\CacheController::addIncludePath() | 148 | 4.2 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($type, $options); |

## repos/joomla-cms/libraries/src/Captcha/Captcha.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Captcha\Captcha::initialise() | 138 | Without replacement. Will be removed in 7.0. |
| \Joomla\CMS\Captcha\Captcha::update() | 258 | Without replacement. Will be removed in 7.0. |
| \Joomla\CMS\Captcha\Captcha::\_load() | 279 | Should use CaptchaRegistry. Will be removed in 7.0. |
| \Joomla\CMS\Captcha\Captcha::$captcha | 43 | Should use Provider instance |

## repos/joomla-cms/libraries/src/Categories/Categories.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Categories\Categories::getInstance() | 142 | 4.0 will be removed in 6.0 Use the ComponentInterface to get the categories Example: Factory::getApplication()->bootComponent($component)->getCategory($options, $section); |

## repos/joomla-cms/libraries/src/Component/ComponentHelper.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JPATH\_COMPONENT | 326 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \JPATH\_COMPONENT\_SITE | 339 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \JPATH\_COMPONENT\_ADMINISTRATOR | 352 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Component/ComponentRecord.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\ComponentRecord::\_\_get() | 96 | 4.3 will be removed in 6.0 Access the item parameters through the `getParams()` method Example: $componentRecord->getParams(); |
| \Joomla\CMS\Component\ComponentRecord::\_\_set() | 120 | 4.3 will be removed in 6.0 Set the item parameters through the `setParams()` method Example: $componentRecord->setParams($value); |
| \Joomla\CMS\Component\ComponentRecord::$namespace | 58 | 5.3.0 will be removed in 7.0 as it was never used |

## repos/joomla-cms/libraries/src/Component/Router/RouterLegacy.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\Router\RouterLegacy | 24 | 5.1 will be removed in 7.0 Will be removed without replacement. Use the class based router implementing the RouterInterface |

## repos/joomla-cms/libraries/src/Component/Router/Rules/MenuRules.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\Router\Rules\MenuRules::$sefparams | 53 | 5.2.0 will be removed in 6.0 without replacement |

## repos/joomla-cms/libraries/src/Console/CheckJoomlaUpdatesCommand.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Console\CheckJoomlaUpdatesCommand::\_\_construct() | 58 | 5.1.0 will be removed in 6.0 Use core:update:check instead of core:check-updates |

## repos/joomla-cms/libraries/src/Crypt/Cipher/CryptoCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\CryptoCipher | 27 | 4.3 will be removed in 6.0 Will be removed without replacement use SodiumCipher instead |

## repos/joomla-cms/libraries/src/Document/Document.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\Document::getInstance() | 349 | 4.3 will be removed in 6.0 Use the \Joomla\CMS\Document\FactoryInterface instead Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Document\Document::addScript() | 510 | 4.3 will be removed in 7.0 Use WebAssetManager Example: $wa->registerAndUseScript(...); |
| \Joomla\CMS\Document\Document::addScriptDeclaration() | 537 | 4.3 will be removed in 7.0 Use WebAssetManager Example: $wa->addInlineScript(...); |
| \Joomla\CMS\Document\Document::addStyleSheet() | 609 | 4.3 will be removed in 7.0 Use WebAssetManager Example: $wa->registerAndUseStyle(...); |
| \Joomla\CMS\Document\Document::addStyleDeclaration() | 641 | 4.3 will be removed in 7.0 Use WebAssetManager Example: $wa->addInlineStyle(...); |
| \Joomla\CMS\Document\Document::$\_scripts | 150 | 4.3 will be removed in 7.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_script | 161 | 4.3 will be removed in 7.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_styleSheets | 179 | 4.3 will be removed in 7.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_style | 190 | 4.3 will be removed in 7.0 Use WebAssetManager |

## repos/joomla-cms/libraries/src/Document/HtmlDocument.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\HtmlDocument::countMenuChildren() | 703 | 4.4 will be removed in 6.0 Load the active menu item directly and count the children with the php count function `$children = count($app->getMenu()->getActive()->getChildren())` beware getActive could be `null` |

## repos/joomla-cms/libraries/src/Editor/Button/Button.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Editor\Button\Button::\_\_get() | 153 | 7.0 This is a B/C proxy for deprecated read accesses |
| \Joomla\CMS\Editor\Button\Button::\_\_set() | 171 | 7.0 This is a B/C proxy for deprecated write accesses |

## repos/joomla-cms/libraries/src/Editor/Editor.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Editor\Editor::initialise() | 166 | 7.0 Without replacement |
| \Joomla\CMS\Editor\Editor::\_loadEditor() | 321 | 7.0 Should use EditorRegistry |
| \Joomla\CMS\Editor\Editor::$\_editor | 44 | Should use Provider instance |

## repos/joomla-cms/libraries/src/Encrypt/AES/Mcrypt.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Encrypt\AES\Mcrypt | 26 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Encrypt/Aes.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Encrypt\Aes::\_\_construct() | 56 | 4.3 $strength will be removed in 6.0 |

## repos/joomla-cms/libraries/src/Event/Cache/AfterPurgeEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Cache\AfterPurgeEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Checkin/AfterCheckinEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Checkin\AfterCheckinEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Contact/SubmitContactEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Contact\SubmitContactEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Contact/ValidateContactEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Contact\ValidateContactEvent::$legacyArgumentsOrder | 41 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Content/ContentEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Content\ContentEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Content/ContentPrepareEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Content\ContentPrepareEvent::$legacyArgumentsOrder | 35 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/CustomFields/AbstractPrepareFieldEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\CustomFields\AbstractPrepareFieldEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/CustomFields/AfterPrepareFieldEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\CustomFields\AfterPrepareFieldEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/CustomFields/CustomFieldsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\CustomFields\CustomFieldsEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/CustomFields/PrepareDomEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\CustomFields\PrepareDomEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AbstractExtensionEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AbstractExtensionEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AbstractJoomlaUpdateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AbstractJoomlaUpdateEvent::$legacyArgumentsOrder | 36 | 5.2.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AfterInstallEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AfterInstallEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AfterJoomlaUpdateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AfterJoomlaUpdateEvent::$legacyArgumentsOrder | 31 | 5.2.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AfterUninstallEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AfterUninstallEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/AfterUpdateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\AfterUpdateEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/BeforeInstallEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\BeforeInstallEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/BeforeUninstallEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\BeforeUninstallEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Extension/BeforeUpdateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Extension\BeforeUpdateEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Finder/AbstractFinderEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Finder\AbstractFinderEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Finder/AfterSaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Finder\AfterSaveEvent::$legacyArgumentsOrder | 35 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Finder/BeforeSaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Finder\BeforeSaveEvent::$legacyArgumentsOrder | 35 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Finder/PrepareContentEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Finder\PrepareContentEvent::$legacyArgumentsOrder | 35 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Finder/ResultEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Finder\ResultEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Installer/AfterInstallerEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Installer\AfterInstallerEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Installer/BeforePackageDownloadEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Installer\BeforePackageDownloadEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Installer/InstallerEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Installer\InstallerEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Mail/BeforeRenderingMailTemplateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Mail\BeforeRenderingMailTemplateEvent::$legacyArgumentsOrder | 29 | 5.2.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Mail/MailTemplateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Mail\MailTemplateEvent::$legacyArgumentsOrder | 37 | 5.2.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Menu/AfterGetMenuTypeOptionsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Menu\AfterGetMenuTypeOptionsEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Menu/BeforeRenderMenuItemsViewEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Menu\BeforeRenderMenuItemsViewEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Menu/PreprocessMenuItemsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Menu\PreprocessMenuItemsEvent::$legacyArgumentsOrder | 38 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/AfterCleanCacheEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\AfterCleanCacheEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/ChangeStateEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\ChangeStateEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/DeleteEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\DeleteEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/FormEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\FormEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/ModelEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\ModelEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/NormaliseRequestDataEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\NormaliseRequestDataEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/PrepareDataEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\PrepareDataEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Model/SaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Model\SaveEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Module/AfterRenderModulesEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Module\AfterRenderModulesEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Module/ModuleEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Module\ModuleEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Module/ModuleListEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Module\ModuleListEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Module/RenderModuleEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Module\RenderModuleEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/MultiFactor/BeforeDisplayMethods.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\BeforeDisplayMethods::setUser() | 52 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Callback.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Callback::setMethod() | 49 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Captive.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Captive::setRecord() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/GetSetup.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\GetSetup::setRecord() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/SaveSetup.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\SaveSetup::setRecord() | 65 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\SaveSetup::setInput() | 85 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Validate.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Validate::setRecord() | 65 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\Validate::setUser() | 85 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\Validate::setCode() | 105 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Plugin/System/Stats/GetStatsDataEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Plugin\System\Stats\GetStatsDataEvent::$legacyArgumentsOrder | 43 | 5.3.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Privacy/CanRemoveDataEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Privacy\CanRemoveDataEvent::$legacyArgumentsOrder | 41 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Privacy/CheckPrivacyPolicyPublishedEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Privacy\CheckPrivacyPolicyPublishedEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Privacy/ExportRequestEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Privacy\ExportRequestEvent::$legacyArgumentsOrder | 41 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Privacy/PrivacyEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Privacy\PrivacyEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/Privacy/RemoveDataEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Privacy\RemoveDataEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/QuickIcon/GetIconEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\QuickIcon\GetIconEvent::setContext() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/ReshapeArgumentsAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\ReshapeArgumentsAware | 58 | 4.3 will be removed in 7.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Event/Result/ResultAware.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultAware::setResult() | 92 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Result\ResultAware::$preventSetArgumentResult | 40 | 4.3 will be removed in 7.0 Using setResult() for the result argument will always be disallowed. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeArrayAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeArrayAware::$resultIsFalseable | 43 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeFloatAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeFloatAware::$resultIsFalseable | 43 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeIntegerAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeIntegerAware::$resultIsFalseable | 43 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeNumericAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeNumericAware::$resultIsFalseable | 43 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeObjectAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeObjectAware::$resultIsFalseable | 45 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeStringAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeStringAware::$resultIsFalseable | 43 | 4.3 will be removed in 7.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Table/AbstractEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AbstractEvent::setSubject() | 55 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterLoadEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterLoadEvent::setResult() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterLoadEvent::setRow() | 78 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterMoveEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setRow() | 66 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setDelta() | 87 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setWhere() | 108 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterReorderEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterReorderEvent::setWhere() | 57 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterStoreEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterStoreEvent::setResult() | 56 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeBindEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeBindEvent::setSrc() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeBindEvent::setIgnore() | 82 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeCheckoutEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeCheckoutEvent::setUserId() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeLoadEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeLoadEvent::setReset() | 59 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeMoveEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setQuery() | 68 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setDelta() | 89 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setWhere() | 110 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforePublishEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setQuery() | 66 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setState() | 87 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setUserId() | 108 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeReorderEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeReorderEvent::setQuery() | 63 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeReorderEvent::setWhere() | 84 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeStoreEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeStoreEvent::setUpdateNulls() | 59 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/SetNewTagsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\SetNewTagsEvent::setReplaceTags() | 61 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/User/AbstractDeleteEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AbstractDeleteEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AbstractLoginEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AbstractLoginEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AbstractLogoutEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AbstractLogoutEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AbstractResetEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AbstractResetEvent::$legacyArgumentsOrder | 31 | 5.2.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AbstractSaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AbstractSaveEvent::$legacyArgumentsOrder | 31 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AfterDeleteEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AfterDeleteEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AfterLoginEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AfterLoginEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AfterLogoutEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AfterLogoutEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AfterRemindEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AfterRemindEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AfterSaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AfterSaveEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AuthenticationEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AuthenticationEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AuthorisationEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AuthorisationEvent::$legacyArgumentsOrder | 39 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/AuthorisationFailureEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\AuthorisationFailureEvent::$legacyArgumentsOrder | 33 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/BeforeSaveEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\BeforeSaveEvent::$legacyArgumentsOrder | 40 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/LoginButtonsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\LoginButtonsEvent::$legacyArgumentsOrder | 40 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/UserEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\UserEvent::$legacyArgumentsOrder | 36 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/UserGroupAfterDeleteEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\UserGroupAfterDeleteEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/User/UserGroupBeforeDeleteEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\User\UserGroupBeforeDeleteEvent::$legacyArgumentsOrder | 37 | 5.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Event/WebAsset/WebAssetRegistryAssetChanged.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\WebAsset\WebAssetRegistryAssetChanged::setSubject() | 68 | 4.4.0 will be removed in 7.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Extension/PluginInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Extension\PluginInterface::registerListeners() | 38 | 5.4.0 will be removed in 7.0 Plugin should implement SubscriberInterface. These plugins will be added to dispatcher in PluginHelper::import(). |

## repos/joomla-cms/libraries/src/Factory.php 18

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Factory::getConfig() | 183 | 4.3 will be removed in 6.0 Use the configuration object within the application Example: Factory::getApplication()->getConfig(); |
| \Joomla\CMS\Factory::getSession() | 264 | 4.3 will be removed in 6.0 Use the session service in the DI container or get from the application object Example: Factory::getApplication()->getSession(); |
| \Joomla\CMS\Factory::getLanguage() | 293 | 4.3 will be removed in 6.0 Use the language service in the DI container or get from the application object Example: Factory::getApplication()->getLanguage(); |
| \Joomla\CMS\Factory::getDocument() | 326 | 4.3 will be removed in 6.0 Use the document service in the DI container or get from the application object Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Factory::getUser() | 361 | 4.3 will be removed in 6.0 Load the user service from the dependency injection container or get from the application object Example: Factory::getApplication()->getIdentity(); |
| \Joomla\CMS\Factory::getCache() | 405 | 4.3 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($handler, $options); |
| \Joomla\CMS\Factory::getDbo() | 451 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |
| \Joomla\CMS\Factory::getMailer() | 487 | 4.4.0 will be removed in 6.0 Use the mailer service in the DI container and create a mailer from there Example: Factory::getContainer()->get(MailerFactoryInterface::class)->createMailer(); |
| \Joomla\CMS\Factory::createConfig() | 561 | 4.0 will be removed in 6.0 Use the configuration object within the application. Example: Factory::getApplication()->getConfig(); |
| \Joomla\CMS\Factory::createDbo() | 646 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |
| \Joomla\CMS\Factory::createMailer() | 709 | 4.4.0 will be removed in 6.0 Use the mailer service in the DI container and create a mailer from there Example: Factory::getContainer()->get(MailerFactoryInterface::class)->createMailer(); |
| \Joomla\CMS\Factory::createLanguage() | 731 | 4.0 will be removed in 6.0 Load the language service from the dependency injection container or via $app->getLanguage() Example: Factory::getContainer()->get(LanguageFactoryInterface::class)->createLanguage($locale, $debug) |
| \Joomla\CMS\Factory::createDocument() | 762 | 4.0 will be removed in 6.0 Load the document service from the dependency injection container or via $app->getDocument() Example: Factory::getContainer()->get(FactoryInterface::class)->createDocument($type, $attributes); |
| \Joomla\CMS\Factory::$config | 69 | 4.3 will be removed in 6.0 Use the configuration object within the application Example: Factory::getApplication()->getConfig(); |
| \Joomla\CMS\Factory::$session | 98 | 4.3 will be removed in 6.0 Use the session service in the DI container or get from the application object Example: Factory::getApplication()->getSession(); |
| \Joomla\CMS\Factory::$language | 111 | 4.3 will be removed in 6.0 Use the language service in the DI container or get from the application object Example: Factory::getApplication()->getLanguage(); |
| \Joomla\CMS\Factory::$document | 124 | 4.3 will be removed in 6.0 Use the document service in the DI container or get from the application object Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Factory::$database | 137 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |

## repos/joomla-cms/libraries/src/Fields/FieldsFormServiceInterface.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Fields\FieldsFormServiceInterface | 25 | 5.1.0 will be removed in 7.0 |
| \Joomla\CMS\Fields\FieldsFormServiceInterface::prepareForm() | 43 | 5.1.0 will be removed in 7.0 Use the FieldServiceInterface instead |

## repos/joomla-cms/libraries/src/Form/Field/RadiobasicField.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Field\RadiobasicField | 25 | 5.2 will be moved to the b/c plugin in 6.0 and removed in 7.0 Use \Joomla\CMS\Form\Field\RadioField instead |

## repos/joomla-cms/libraries/src/Form/Field/UserField.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Field\UserField::$groups | 42 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Form\Field\UserField::$excluded | 51 | 4.4 will be removed in 6.0 without replacement |

## repos/joomla-cms/libraries/src/Form/Form.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Form::getInstance() | 1691 | 4.3 will be removed in 6.0 Use the FormFactory service from the container Example: Factory::getContainer()->get(FormFactoryInterface::class)->createForm($name, $options); |

## repos/joomla-cms/libraries/src/Helper/AuthenticationHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\AuthenticationHelper::getTwoFactorMethods() | 37 | 4.2 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Helper/TagsHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\TagsHelper::postStoreProcess() | 829 | 5.3 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/HTML/Helpers/Behavior.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\Behavior::core() | 47 | 4.0 will be removed in 6.0 Use the webasset manager instead Example: Factory::getApplication()->getDocument()->getWebAssetManager()->useScript('core'); |
| \Joomla\CMS\HTML\Helpers\Behavior::formvalidator() | 68 | 4.0 will be removed in 6.0 Use the webasset manager instead Example: Factory::getApplication()->getDocument()->getWebAssetManager()->useScript('form.validate'); |
| \Joomla\CMS\HTML\Helpers\Behavior::combobox() | 94 | 4.0 will be removed in 6.0 Use the webasset manager instead Example: Factory::getApplication()->getDocument()->getWebAssetManager()->useScript('awesomeplete'); |
| \Joomla\CMS\HTML\Helpers\Behavior::multiselect() | 114 | 4.0 will be removed in 6.0 Use the webasset manager instead Example: Factory::getApplication()->getDocument()->getWebAssetManager()->useScript('multiselect'); Factory::getDocument()->addScriptOptions('js-multiselect', ['formName' => $id]); |
| \Joomla\CMS\HTML\Helpers\Behavior::keepalive() | 141 | 4.0 will be removed in 6.0 Use the webasset manager instead Example: Factory::getApplication()->getDocument()->getWebAssetManager()->useScript('keepalive'); |
| \Joomla\CMS\HTML\Helpers\Behavior::highlighter() | 164 | 4.0 will be removed in 6.0 Use the script directly |

## repos/joomla-cms/libraries/src/HTML/Helpers/Bootstrap.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\Bootstrap::framework() | 634 | 4.0 will be removed in 6.0 Will be removed without replacement Load the different scripts with their individual method calls |

## repos/joomla-cms/libraries/src/HTML/Helpers/FormBehavior.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\FormBehavior | 33 | 4.0 will be removed in 6.0 Will be removed without replacement Use choice.js instead Example: Factory::getDocument()->getWebAssetManager()->enableAsset('choicesjs'); HTMLHelper::\_('webcomponent', 'system/webcomponents/joomla-field-fancy-select.min.js', ['version' => 'auto', 'relative' => true]); |

## repos/joomla-cms/libraries/src/HTML/Helpers/Jquery.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\Jquery::framework() | 55 | 4.0 will be removed in 6.0 Use webasset manager instead Example: $wa = Factory::getApplication()->getDocument()->getWebAssetManager(); $wa->useScript('jquery'); $wa->useScript('jquery-noconflict'); $wa->useScript('jquery-migrate'); |

## repos/joomla-cms/libraries/src/HTML/Helpers/SortableList.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\SortableList | 26 | 4.0 will be removed in 6.0 Sortable List will be deprecated in favour of a new dragula script in 4.0 |
| \Joomla\CMS\HTML\Helpers\SortableList::sortable() | 46 | 4.0 will be removed in 6.0 Use the new dragula script Example: JHtml::\_('draggablelist.draggable') and add a class of js-draggable to the tbody element of the table |

## repos/joomla-cms/libraries/src/HTML/Helpers/Tag.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\Helpers\Tag::ajaxfield() | 173 | 4.0 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/HTML/HTMLHelper.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\HTMLHelper::extract() | 84 | 4.0 will be removed in 6.0 Use the service registry instead HTMLHelper::getServiceRegistry()->getService($file); |
| \Joomla\CMS\HTML\HTMLHelper::register() | 211 | 4.0 will be removed in 6.0 Use the service registry instead HTMLHelper::getServiceRegistry()->register($key, $function); |
| \Joomla\CMS\HTML\HTMLHelper::unregister() | 236 | 4.0 will be removed in 6.0 Use the service registry instead |
| \Joomla\CMS\HTML\HTMLHelper::stylesheet() | 795 | 5.3.0 will be removed in 7.0 Use WebAssetManager::useStyle() or WebAssetManager::registerAndUseStyle() instead. |
| \Joomla\CMS\HTML\HTMLHelper::script() | 847 | 5.3.0 will be removed in 7.0 Use WebAssetManager::useScript() or WebAssetManager::registerAndUseScript() instead. |
| \Joomla\CMS\HTML\HTMLHelper::addIncludePath() | 1202 | 4.0 will be removed in 6.0 Use the service registry instead |
| \Joomla\CMS\HTML\HTMLHelper::$includePaths | 52 | 4.0 will be removed in 6.0 |
| \Joomla\CMS\HTML\HTMLHelper::$registry | 61 | 4.0 will be removed in 6.0 |

## repos/joomla-cms/libraries/src/Http/Http.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Http | 26 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Http instead |
| \Joomla\CMS\Http\Http::\_\_construct() | 40 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Http::\_\_construct() instead |

## repos/joomla-cms/libraries/src/Http/HttpFactory.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\HttpFactory | 26 | 6.0.0 will be removed in 7.0 Use Joomla\Http\HttpFactory instead |
| \Joomla\CMS\Http\HttpFactory::getHttp() | 41 | 6.0.0 will be removed in 7.0 Use Joomla\Http\HttpFactory::getHttp() instead |
| \Joomla\CMS\Http\HttpFactory::getAvailableDriver() | 74 | 6.0.0 will be removed in 7.0 Use Joomla\Http\HttpFactory::getAvailableDriver() instead |
| \Joomla\CMS\Http\HttpFactory::getHttpTransports() | 113 | 6.0.0 will be removed in 7.0 Use Joomla\Http\HttpFactory::getHttpTransports() instead |

## repos/joomla-cms/libraries/src/Http/Response.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Response | 26 | 4.0 will be removed in 7.0 Use Joomla\Http\Response instead |
| \Joomla\CMS\Http\Response::\_\_get() | 39 | 6.0.0 will be removed in 7.0 Access data via the PSR-7 ResponseInterface instead |

## repos/joomla-cms/libraries/src/Http/Transport/CurlTransport.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Transport\CurlTransport | 33 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Curl instead |
| \Joomla\CMS\Http\Transport\CurlTransport::request() | 52 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Curl::request() instead |
| \Joomla\CMS\Http\Transport\CurlTransport::getResponse() | 229 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Curl::getResponse() instead |
| \Joomla\CMS\Http\Transport\CurlTransport::isSupported() | 288 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Curl::isSupported() instead |
| \Joomla\CMS\Http\Transport\CurlTransport::redirectsAllowed() | 302 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Curl::redirectsAllowed() instead |

## repos/joomla-cms/libraries/src/Http/Transport/SocketTransport.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Transport\SocketTransport | 32 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Socket instead |
| \Joomla\CMS\Http\Transport\SocketTransport::request() | 57 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Socket::request() instead |
| \Joomla\CMS\Http\Transport\SocketTransport::getResponse() | 162 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Socket::getResponse() instead |
| \Joomla\CMS\Http\Transport\SocketTransport::connect() | 208 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Socket::connect() instead |
| \Joomla\CMS\Http\Transport\SocketTransport::isSupported() | 290 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Socket::isSupported() instead |

## repos/joomla-cms/libraries/src/Http/Transport/StreamTransport.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Transport\StreamTransport | 33 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Stream instead |
| \Joomla\CMS\Http\Transport\StreamTransport::request() | 52 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Stream::request() instead |
| \Joomla\CMS\Http\Transport\StreamTransport::getResponse() | 208 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Stream::getResponse() instead |
| \Joomla\CMS\Http\Transport\StreamTransport::isSupported() | 237 | 6.0.0 will be removed in 7.0 Use Joomla\Http\Transport\Stream::isSupported() instead |

## repos/joomla-cms/libraries/src/Http/TransportInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\TransportInterface | 26 | 4.0 will be removed in 7.0 Implement Joomla\Http\TransportInterface instead |

## repos/joomla-cms/libraries/src/Input/Cli.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Cli | 27 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::\_\_construct() | 63 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::serialize() | 88 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::unserialize() | 113 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::parseArguments() | 138 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::$executable | 38 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::$args | 50 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Installer/Installer.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Installer\Installer::loadAdapter() | 2517 | 6.0.0 will be removed in 7.0 Use getAdapter() instead |

## repos/joomla-cms/libraries/src/Installer/InstallerAdapter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Installer\InstallerAdapter::\_\_get() | 1282 | 4.3 will be removed in 6.0 Use getDatabase() instead of directly accessing \_db |

## repos/joomla-cms/libraries/src/Language/Language.php 17

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Language::getInstance() | 211 | 4.3 will be removed in 6.0 Use the language factory instead Example: Factory::getContainer()->get(LanguageFactoryInterface::class)->createLanguage($lang, $debug); |
| \Joomla\CMS\Language\Language::getIgnoredSearchWords() | 411 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getIgnoredSearchWordsCallback() | 429 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setIgnoredSearchWordsCallback() | 445 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getLowerLimitSearchWord() | 462 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getLowerLimitSearchWordCallback() | 480 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setLowerLimitSearchWordCallback() | 496 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getUpperLimitSearchWord() | 513 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getUpperLimitSearchWordCallback() | 531 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setUpperLimitSearchWordCallback() | 547 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getSearchDisplayedCharactersNumber() | 564 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getSearchDisplayedCharactersNumberCallback() | 582 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setSearchDisplayedCharactersNumberCallback() | 598 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$ignoredSearchWordsCallback | 67 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$lowerLimitSearchWordCallback | 77 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$upperLimitSearchWordCallback | 87 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$searchDisplayedCharactersNumberCallback | 97 | 4.4 will be removed in 6.0 without replacement |

## repos/joomla-cms/libraries/src/Mail/Mail.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Mail\Mail::getInstance() | 113 | 4.4.0 will be removed in 6.0 Use the mailer service in the DI container and create a mailer from there Example: Factory::getContainer()->get(MailerFactoryInterface::class)->createMailer(); |
| \Joomla\CMS\Mail\Mail::$instances | 39 | 4.4.0 will be removed in 6.0 See getInstance() for more details |

## repos/joomla-cms/libraries/src/Menu/AbstractMenu.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\AbstractMenu::getInstance() | 124 | 4.3 will be removed in 6.0 Use the MenuFactoryInterface from the container instead Example: Factory::getContainer()->get(MenuFactoryInterface::class)->createMenu($client, $options) |
| \Joomla\CMS\Menu\AbstractMenu::$instances | 66 | 4.3 will be removed in 6.0 Use the MenuFactoryInterface from the container instead Example: Factory::getContainer()->get(MenuFactoryInterface::class)->createMenu($client, $options) |

## repos/joomla-cms/libraries/src/MVC/Controller/BaseController.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Controller\BaseController::addModelPath() | 206 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead |
| \Joomla\CMS\MVC\Controller\BaseController::getInstance() | 270 | 4.3 will be removed in 6.0 Get the controller through the MVCFactory instead Example: Factory::getApplication()->bootComponent($option)->getMVCFactory()->createController(...); |

## repos/joomla-cms/libraries/src/MVC/Controller/FormController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Controller\FormController::editAssociations() | 886 | 4.3 will be removed in 6.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/AdminModel.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\AdminModel::batchTag() | 706 | 5.3 will be removed in 7.0 |
| \Joomla\CMS\MVC\Model\AdminModel::editAssociations() | 1668 | 4.3 will be removed in 6.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/BaseDatabaseModel.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::dispatchEvent() | 376 | 4.4 will be removed in 7.0. Use $this->getDispatcher() directly. |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::getDbo() | 401 | 4.3 will be removed in 6.0 Use getDatabase() instead Example: $model->getDatabase(); |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::setDbo() | 423 | 4.3 will be removed in 6.0 Use setDatabase() instead Example: $model->setDatabase($db); |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::\_\_get() | 444 | 4.3 will be removed in 6.0 Use getDatabase() instead of directly accessing \_db |

## repos/joomla-cms/libraries/src/MVC/Model/BaseModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\BaseModel::addIncludePath() | 97 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory + namespace instead |

## repos/joomla-cms/libraries/src/MVC/Model/LegacyModelLoaderTrait.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait | 32 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::\_createFileName() | 47 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::getInstance() | 67 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead Example: Factory::getApplication()->bootComponent('com\_xxx')->getMVCFactory()->createModel($type, $prefix, $config); |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::addTablePath() | 120 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::createModelFromComponent() | 139 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/MVC/Model/State.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\State | 26 | 5.0.0 will be removed in 7.0, use the Registry directly |
| \Joomla\CMS\MVC\Model\State::getProperties() | 75 | 5.0.0 will be removed in 7.0, use toArray instead |
| \Joomla\CMS\MVC\Model\State::\_\_get() | 92 | 5.0.0 will be removed in 7.0 |
| \Joomla\CMS\MVC\Model\State::\_\_set() | 112 | 5.0.0 will be removed in 7.0 |
| \Joomla\CMS\MVC\Model\State::\_\_isset() | 131 | 5.0.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/MVC/View/AbstractView.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\View\AbstractView::get() | 146 | 5.3.0 will be removed in 7.0. Retrieve the model with $model = $this->getModel(); and call the methods to the model directly, e.g. $model->getItems() instead of $this->get('Items'). |
| \Joomla\CMS\MVC\View\AbstractView::dispatchEvent() | 332 | 4.4 will be removed in 7.0. Use $this->getDispatcher() directly. |
| \Joomla\CMS\MVC\View\AbstractView::$document | 56 | 4.4.0 will be removed in 6.0 Use $this->getDocument() instead |

## repos/joomla-cms/libraries/src/MVC/View/CanDo.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\View\CanDo | 26 | 7.0 Use the Registry directly |
| \Joomla\CMS\MVC\View\CanDo::getProperties() | 75 | 7.0 Use toArray instead |
| \Joomla\CMS\MVC\View\CanDo::\_\_get() | 92 | 5.0.0 will be removed in 7.0 |
| \Joomla\CMS\MVC\View\CanDo::\_\_set() | 112 | 5.0.0 will be removed in 7.0 |
| \Joomla\CMS\MVC\View\CanDo::\_\_isset() | 131 | 5.0.0 will be removed in 7.0 |

## repos/joomla-cms/libraries/src/Object/CMSObject.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\CMSObject | 28 | 4.0 will be removed in 7.0 Use \stdClass or \Joomla\Registry\Registry instead. Example: new \Joomla\Registry\Registry(); |
| \Joomla\CMS\Object\CMSObject::\_\_toString() | 58 | 3.1.4 will be removed in 7.0 Classes should provide their own \_\_toString() implementation. |

## repos/joomla-cms/libraries/src/Object/LegacyErrorHandlingTrait.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait | 26 | 4.3 will be removed in 7.0 Will be removed without replacement Throw an Exception instead of setError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::getError() | 62 | 3.1.4 will be removed in 7.0 Will be removed without replacement Catch thrown Exceptions instead of getError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::getErrors() | 94 | 3.1.4 will be removed in 7.0 Will be removed without replacement Catch thrown Exceptions instead of getErrors |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::setError() | 112 | 3.1.4 will be removed in 7.0 Will be removed without replacement Throw an Exception instead of using setError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::shouldUseExceptions() | 129 | 7.0 |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::setUseExceptions() | 144 | 7.0 |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::$\_errors | 36 | 3.1.4 JError has been deprecated |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::$useExceptions | 46 | 7.0 |

## repos/joomla-cms/libraries/src/Object/LegacyPropertyManagementTrait.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait | 26 | 4.3.0 will be removed in 7.0 Will be removed without replacement Create proper setter functions for the individual properties or use a \Joomla\Registry\Registry |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::def() | 41 | 4.3.0 will be removed in 7.0 Defining dynamic properties should not be used anymore |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::get() | 63 | 4.3.0 will be removed in 7.0 Create a proper getter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::getProperties() | 86 | 4.3.0 will be removed in 7.0 Create a proper getter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::set() | 132 | 4.3.0 will be removed in 7.0 Create a proper setter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::setProperties() | 154 | 4.3.0 will be removed in 7.0 Create a proper setter function for the property |

## repos/joomla-cms/libraries/src/Pathway/Pathway.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Pathway\Pathway::getInstance() | 67 | 4.3 will be removed in 6.0 Get the instance from the application Example: $app->getPathway() |

## repos/joomla-cms/libraries/src/Plugin/CMSPlugin.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Plugin\CMSPlugin::registerListeners() | 296 | 5.4.0 will be removed in 7.0 Plugin should implement SubscriberInterface. These plugins will be added to dispatcher in PluginHelper::import(). |
| \Joomla\CMS\Plugin\CMSPlugin::registerLegacyListener() | 366 | 5.4.0 will be removed in 7.0 Plugin should implement SubscriberInterface. |
| \Joomla\CMS\Plugin\CMSPlugin::registerListener() | 417 | 5.4.0 will be removed in 7.0 Plugin should implement SubscriberInterface. |
| \Joomla\CMS\Plugin\CMSPlugin::parameterImplementsEventInterface() | 434 | 5.4.0 will be removed in 7.0 Plugin should implement SubscriberInterface. |
| \Joomla\CMS\Plugin\CMSPlugin::setLanguage() | 509 | 5.2 will be removed in 7.0 Plugin should use the language from Application, and only after the app is initialised |
| \Joomla\CMS\Plugin\CMSPlugin::getLanguage() | 526 | 5.2 will be removed in 7.0 Plugin should use the language from Application, and only after the app is initialised. |
| \Joomla\CMS\Plugin\CMSPlugin::setDispatcher() | 548 | 5.2 will be removed in 7.0 Plugin should implement DispatcherAwareInterface on its own, when it is needed. |
| \Joomla\CMS\Plugin\CMSPlugin::getDispatcher() | 571 | 5.2 will be removed in 7.0 Plugin should implement DispatcherAwareInterface on its own, when it is needed. |
| \Joomla\CMS\Plugin\CMSPlugin::$allowLegacyListeners | 111 | 4.3 will be removed in 6.0 Implement your plugin methods accepting an AbstractEvent object Example: onEventTriggerName(AbstractEvent $event) { $context = $event->getArgument(...); } |

## repos/joomla-cms/libraries/src/Router/Router.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Router\Router::getInstance() | 118 | 4.0 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(SiteRouter::class); |

## repos/joomla-cms/libraries/src/Session/Session.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Session\Session::getInstance() | 157 | 4.3 will be removed in 6.0 Load the session service from the dependency injection container or via $app->getSession() Example: Factory::getApplication()->getSession(); |

## repos/joomla-cms/libraries/src/Table/CoreContent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\CoreContent::storeUcmBase() | 263 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/Table/Table.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Table::getInstance() | 289 | 4.3 will be removed in 6.0 Use the MvcFactory instead or instantiate the table class directly. Example: Factory::getApplication()->bootComponent('...')->getMVCFactory()->createTable($name, $prefix, $config); $table = new \Joomla\CMS\Table\Content($db); |
| \Joomla\CMS\Table\Table::addIncludePath() | 367 | 4.3 will be removed in 6.0 Should not be used anymore as tables are loaded through the MvcFactory |
| \Joomla\CMS\Table\Table::getDbo() | 549 | 5.4.0 will be removed in 7.0 Use getDatabase() instead Example: $this->getDatabase(); |
| \Joomla\CMS\Table\Table::setDbo() | 567 | 5.4.0 will be removed in 7.0 Use setDatabase() instead Example: $this->setDatabase($db); |
| \Joomla\CMS\Table\Table::$\_db | 99 | 5.4.0 will be removed in 7.0 Use setDatabase() and getDatabase() instead Example: $this->setDatabase($db); |

## repos/joomla-cms/libraries/src/Table/Ucm.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Ucm | 25 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\Table\Ucm::\_\_construct() | 36 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/Toolbar/Button/BasicButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\BasicButton::fetchButton() | 48 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/ConfirmButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\ConfirmButton::fetchButton() | 62 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/CustomButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\CustomButton::fetchButton() | 56 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/HelpButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\HelpButton::fetchButton() | 74 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/InlinehelpButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\InlinehelpButton::fetchButton() | 75 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/LinkButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\LinkButton::fetchButton() | 70 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/SeparatorButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\SeparatorButton::fetchButton() | 44 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Button/StandardButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Button\StandardButton::fetchButton() | 73 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/Toolbar/Toolbar.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Toolbar::getInstance() | 146 | 4.0 will be removed in 6.0 Use the ToolbarFactoryInterface instead Example: Factory::getContainer()->get(ToolbarFactoryInterface::class)->createToolbar($name) |
| \Joomla\CMS\Toolbar\Toolbar::addButtonPath() | 408 | 4.0 will be removed in 6.0 ToolbarButton classes should be autoloaded via namespaces |
| \Joomla\CMS\Toolbar\Toolbar::getButtonPath() | 445 | 4.0 will be removed in 6.0 ToolbarButton buttons should be autoloaded via namespaces |
| \Joomla\CMS\Toolbar\Toolbar::$instances | 85 | 5.0 will be removed in 7.0 Toolbars instances will be stored in the \Joomla\CMS\Document\HTMLDocument object Request the instance from Factory::getApplication()->getDocument()->getToolbar('name'); |

## repos/joomla-cms/libraries/src/Toolbar/ToolbarButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\ToolbarButton::fetchButton() | 255 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/UCM/UCM.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\UCM\UCM | 22 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/UCM/UCMBase.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\UCM\UCMBase | 26 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::\_\_construct() | 55 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::store() | 77 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::getType() | 113 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::mapBase() | 133 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::$type | 35 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMBase::$alias | 44 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/UCM/UCMContent.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\UCM\UCMContent | 29 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::\_\_construct() | 59 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::save() | 82 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::delete() | 110 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::mapData() | 142 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::store() | 192 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::getPrimaryKey() | 225 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::$table | 38 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMContent::$ucmData | 47 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/UCM/UCMType.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\UCM\UCMType | 60 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::\_\_construct() | 99 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::getType() | 119 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::getTypeByAlias() | 146 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::getTypeByTable() | 169 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::getTypeId() | 200 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::fieldmapExpand() | 233 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::\_\_get() | 252 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::$type | 69 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::$db | 78 | 5.4.0 will be removed in 7.0 without replacement |
| \Joomla\CMS\UCM\UCMType::$alias | 87 | 5.4.0 will be removed in 7.0 without replacement |

## repos/joomla-cms/libraries/src/User/User.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\User::getInstance() | 299 | 4.3 will be removed in 6.0 Load the user service from the dependency injection container or via $app->getIdentity() Example: Factory::getContainer()->get(UserFactoryInterface::class)->loadUserById($id) |

## repos/joomla-cms/libraries/src/User/UserHelper.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\UserHelper::HASH\_ARGON2I\_BC | 66 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_ARGON2I instead |
| \Joomla\CMS\User\UserHelper::HASH\_ARGON2ID\_BC | 89 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_ARGON2ID instead |
| \Joomla\CMS\User\UserHelper::HASH\_BCRYPT\_BC | 108 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_BCRYPT instead |
| \Joomla\CMS\User\UserHelper::HASH\_MD5 | 119 | 4.0 will be removed in 6.0 Support for MD5 hashed passwords will be removed use any of the other hashing methods |
| \Joomla\CMS\User\UserHelper::HASH\_PHPASS | 130 | 4.0 will be removed in 6.0 Support for PHPass hashed passwords will be removed use any of the other hashing methods |

## repos/joomla-cms/libraries/src/Versioning/Versioning.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Versioning\Versioning | 33 | 6.0.0 will be removed in 8.0 without direct replacement, use the new versioning concept (LINK TO DOCUMENTATION) |

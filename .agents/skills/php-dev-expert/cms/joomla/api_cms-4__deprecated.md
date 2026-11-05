# Joomla! CMS 4.4.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/cms-4/deprecated.html

---

# Deprecated Elements

## repos/joomla-cms/libraries/src/Adapter/Adapter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Adapter\Adapter | 29 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Adapter/AdapterInstance.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Adapter\AdapterInstance | 27 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Application/AdministratorApplication.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\AdministratorApplication::getRouter() | 207 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(AdministratorRouter::class); |
| \Joomla\CMS\Application\AdministratorApplication::purgeMessages() | 371 | 4.3 will be removed in 6.0 Purge the messages through the messages model Example: Factory::getApplication()->bootComponent('messages')->getMVCFactory() ->createModel('Messages', 'Administrator')->purge(Factory::getApplication()->getIdentity()->id); |

## repos/joomla-cms/libraries/src/Application/ApiApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\ApiApplication::getApiRouter() | 388 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(ApiRouter::class); |

## repos/joomla-cms/libraries/src/Application/BaseApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\BaseApplication | 33 | 4.3 will be removed in 6.0 Application classes should directly be based on \Joomla\Application\AbstractApplication don't use this class anymore |

## repos/joomla-cms/libraries/src/Application/CLI/CliInput.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\CliInput | 24 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/CliOutput.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\CliOutput | 26 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/ColorStyle.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\ColorStyle | 24 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/Output/Processor/ColorProcessor.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\Output\Processor\ColorProcessor | 26 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/Output/Processor/ProcessorInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\Output\Processor\ProcessorInterface | 24 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/Output/Stdout.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\Output\Stdout | 26 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CLI/Output/Xml.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CLI\Output\Xml | 26 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Application/CliApplication.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CliApplication | 40 | 4.0 will be removed in 6.0 Use the ConsoleApplication instead |
| \Joomla\CMS\Application\CliApplication::\_\_get() | 168 | 4.0 will be removed in 6.0 This is a B/C proxy for deprecated read accesses Example: Factory::getApplication()->getInput(); |
| \Joomla\CMS\Application\CliApplication::getInstance() | 234 | 4.0 will be removed in 6.0 Load the app through the container or via the Factory Example: Factory::getContainer()->get(CliApplication::class) |
| \Joomla\CMS\Application\CliApplication::isCli() | 419 | 4.0 will be removed in 6.0 Will be removed without replacements |

## repos/joomla-cms/libraries/src/Application/CMSApplication.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSApplication::getCfg() | 424 | 3.2 will be removed in 6.0 Use get() instead Example: Factory::getApplication()->get($varname, $default); |
| \Joomla\CMS\Application\CMSApplication::getInstance() | 468 | 4.0 will be removed in 6.0 Use the application service from the DI container instead Example: Factory::getContainer()->get($name); |
| \Joomla\CMS\Application\CMSApplication::getRouter() | 612 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get($name); |
| \Joomla\CMS\Application\CMSApplication::route() | 1052 | 4.0 will be removed in 6.0 Implement the route functionality in the extending class, this here will be removed without replacement |
| \Joomla\CMS\Application\CMSApplication::isCli() | 1200 | 4.0 will be removed in 6.0 Will be removed without replacements |
| \Joomla\CMS\Application\CMSApplication::isTwoFactorAuthenticationRequired() | 1217 | 4.2 will be removed in 6.0 Will be removed without replacements |
| \Joomla\CMS\Application\CMSApplication::hasUserConfiguredTwoFactorAuthentication() | 1234 | 4.2 will be removed in 6.0 Will be removed without replacements |

## repos/joomla-cms/libraries/src/Application/CMSApplicationInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSApplicationInterface::isCli() | 139 | 4.0 will be removed in 6.0 Will be removed without replacement. CLI will be handled by the joomla/console package instead |

## repos/joomla-cms/libraries/src/Application/CMSWebApplicationInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSWebApplicationInterface::getRouter() | 63 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get($name); |

## repos/joomla-cms/libraries/src/Application/ConsoleApplication.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\ConsoleApplication::\_\_get() | 170 | 4.0 will be removed in 6.0 This is a B/C proxy for deprecated read accesses, use getInput() method instead Example: $app->getInput(); |
| \Joomla\CMS\Application\ConsoleApplication::isCli() | 403 | 4.0 will be removed in 6.0 Will be removed without replacement. CLI will be handled by the joomla/console package instead |
| \Joomla\CMS\Application\ConsoleApplication::getRouter() | 482 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(ApiRouter::class); |

## repos/joomla-cms/libraries/src/Application/EventAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\EventAware::triggerEvent() | 92 | 4.0 will be removed in 6.0 Use the Dispatcher method instead Example: Factory::getApplication()->getDispatcher()->dispatch($eventName, $event); |

## repos/joomla-cms/libraries/src/Application/EventAwareInterface.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\EventAwareInterface | 28 | 4.3 will be removed in 6.0 This interface will be removed without replacement as the Joomla 3.x compatibility layer will be removed |
| \Joomla\CMS\Application\EventAwareInterface::triggerEvent() | 61 | 4.0 will be removed in 6.0 Use the Dispatcher method instead Example: Factory::getApplication()->getDispatcher()->dispatch($eventName, $event); |

## repos/joomla-cms/libraries/src/Application/SiteApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\SiteApplication::getRouter() | 382 | 4.3 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(SiteRouter::class); |

## repos/joomla-cms/libraries/src/Application/WebApplication.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\WebApplication::getInstance() | 132 | 4.0 will be removed in 6.0 Use the application service in the DI container instead Example: \Joomla\CMS\Factory::getContainer()->get($name) |
| \Joomla\CMS\Application\WebApplication::loadSession() | 319 | 4.3 will be removed in 6.0 The session should be injected as a service. |
| \Joomla\CMS\Application\WebApplication::$item\_associations | 56 | 4.4.0 will be removed in 6.0 as this property is not used anymore |

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
| \Joomla\CMS\Cache\CacheController::getInstance() | 93 | 4.2 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($type, $options); |
| \Joomla\CMS\Cache\CacheController::addIncludePath() | 147 | 4.2 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($type, $options); |

## repos/joomla-cms/libraries/src/Cache/Storage/WincacheStorage.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Storage\WincacheStorage | 27 | 4.3 will be removed in 6.0 WinCache is abandoned and not supported from PHP 8 onwards Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::contains() | 42 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::get() | 61 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::getAll() | 76 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::store() | 124 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::remove() | 142 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::clean() | 163 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::gc() | 188 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Cache\Storage\WincacheStorage::isSupported() | 213 | 4.3 will be removed in 6.0 Will be removed without replacement |

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

## repos/joomla-cms/libraries/src/Component/ComponentRecord.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\ComponentRecord::\_\_get() | 94 | 4.3 will be removed in 6.0 Access the item parameters through the `getParams()` method Example: $componentRecord->getParams(); |
| \Joomla\CMS\Component\ComponentRecord::\_\_set() | 118 | 4.3 will be removed in 6.0 Set the item parameters through the `setParams()` method Example: $componentRecord->setParams($value); |

## repos/joomla-cms/libraries/src/Crypt/Cipher/CryptoCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\CryptoCipher | 27 | 4.3 will be removed in 6.0 Will be removed without replacement use SodiumCipher instead |

## repos/joomla-cms/libraries/src/Date/Date.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Date\Date::$gmt | 68 | 4.0 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\Date\Date::$stz | 80 | 4.0 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Document/Document.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\Document::getInstance() | 349 | 4.3 will be removed in 6.0 Use the \Joomla\CMS\Document\FactoryInterface instead Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Document\Document::addScript() | 510 | 4.3 will be removed in 6.0 Use WebAssetManager Example: $wa->registerAndUseScript(...); |
| \Joomla\CMS\Document\Document::addScriptDeclaration() | 537 | 4.3 will be removed in 6.0 Use WebAssetManager Example: $wa->addInlineScript(...); |
| \Joomla\CMS\Document\Document::addStyleSheet() | 609 | 4.3 will be removed in 6.0 Use WebAssetManager Example: $wa->registerAndUseStyle(...); |
| \Joomla\CMS\Document\Document::addStyleDeclaration() | 641 | 4.3 will be removed in 6.0 Use WebAssetManager Example: $wa->addInlineStyle(...); |
| \Joomla\CMS\Document\Document::$\_scripts | 150 | 4.3 will be removed in 6.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_script | 161 | 4.3 will be removed in 6.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_styleSheets | 179 | 4.3 will be removed in 6.0 Use WebAssetManager |
| \Joomla\CMS\Document\Document::$\_style | 190 | 4.3 will be removed in 6.0 Use WebAssetManager |

## repos/joomla-cms/libraries/src/Document/HtmlDocument.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\HtmlDocument::countMenuChildren() | 693 | 4.4 will be removed in 6.0 Load the active menu item directly and count the children with the php count function `$children = count($app->getMenu()->getActive()->getChildren())` beware getActive could be `null` |

## repos/joomla-cms/libraries/src/Encrypt/AES/Mcrypt.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Encrypt\AES\Mcrypt | 26 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Encrypt/Aes.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Encrypt\Aes::\_\_construct() | 56 | 4.3 $strength will be removed in 6.0 |

## repos/joomla-cms/libraries/src/Event/MultiFactor/BeforeDisplayMethods.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\BeforeDisplayMethods::setUser() | 52 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Callback.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Callback::setMethod() | 49 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Captive.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Captive::setRecord() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/GetSetup.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\GetSetup::setRecord() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/SaveSetup.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\SaveSetup::setRecord() | 65 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\SaveSetup::setInput() | 85 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/MultiFactor/Validate.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\MultiFactor\Validate::setRecord() | 65 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\Validate::setUser() | 85 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\MultiFactor\Validate::setCode() | 105 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/QuickIcon/GetIconEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\QuickIcon\GetIconEvent::setContext() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/ReshapeArgumentsAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\ReshapeArgumentsAware | 58 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Event/Result/ResultAware.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultAware::setResult() | 93 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Result\ResultAware::$preventSetArgumentResult | 41 | 4.3 will be removed in 6.0 Using setResult() for the result argument will always be disallowed. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeArrayAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeArrayAware::$resultIsFalseable | 43 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeFloatAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeFloatAware::$resultIsFalseable | 43 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeIntegerAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeIntegerAware::$resultIsFalseable | 43 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeNumericAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeNumericAware::$resultIsFalseable | 43 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeObjectAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeObjectAware::$resultIsFalseable | 45 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Result/ResultTypeStringAware.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Result\ResultTypeStringAware::$resultIsFalseable | 43 | 4.3 will be removed in 6.0 You should use nullable values or exceptions instead of returning boolean false results. |

## repos/joomla-cms/libraries/src/Event/Table/AbstractEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AbstractEvent::setSubject() | 55 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterLoadEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterLoadEvent::setResult() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterLoadEvent::setRow() | 78 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterMoveEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setRow() | 68 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setDelta() | 89 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\AfterMoveEvent::setWhere() | 110 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterReorderEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterReorderEvent::setWhere() | 57 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/AfterStoreEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\AfterStoreEvent::setResult() | 56 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeBindEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeBindEvent::setSrc() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeBindEvent::setIgnore() | 82 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeCheckoutEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeCheckoutEvent::setUserId() | 61 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeLoadEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeLoadEvent::setReset() | 59 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeMoveEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setQuery() | 68 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setDelta() | 89 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeMoveEvent::setWhere() | 110 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforePublishEvent.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setQuery() | 66 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setState() | 87 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforePublishEvent::setUserId() | 108 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeReorderEvent.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeReorderEvent::setQuery() | 63 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |
| \Joomla\CMS\Event\Table\BeforeReorderEvent::setWhere() | 84 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/BeforeStoreEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\BeforeStoreEvent::setUpdateNulls() | 59 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/Table/SetNewTagsEvent.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\Table\SetNewTagsEvent::setReplaceTags() | 60 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Event/WebAsset/WebAssetRegistryAssetChanged.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Event\WebAsset\WebAssetRegistryAssetChanged::setSubject() | 68 | 4.4.0 will be removed in 6.0 Use counterpart with onSet prefix |

## repos/joomla-cms/libraries/src/Factory.php 18

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Factory::getConfig() | 183 | 4.3 will be removed in 6.0 Use the configuration object within the application Example: Factory::getApplication->getConfig(); |
| \Joomla\CMS\Factory::getSession() | 264 | 4.3 will be removed in 6.0 Use the session service in the DI container or get from the application object Example: Factory::getApplication()->getSession(); |
| \Joomla\CMS\Factory::getLanguage() | 293 | 4.3 will be removed in 6.0 Use the language service in the DI container or get from the application object Example: Factory::getApplication()->getLanguage(); |
| \Joomla\CMS\Factory::getDocument() | 326 | 4.3 will be removed in 6.0 Use the document service in the DI container or get from the application object Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Factory::getUser() | 361 | 4.3 will be removed in 6.0 Load the user service from the dependency injection container or get from the application object Example: Factory::getApplication()->getIdentity(); |
| \Joomla\CMS\Factory::getCache() | 405 | 4.3 will be removed in 6.0 Use the cache controller factory instead Example: Factory::getContainer()->get(CacheControllerFactoryInterface::class)->createCacheController($handler, $options); |
| \Joomla\CMS\Factory::getDbo() | 451 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |
| \Joomla\CMS\Factory::getMailer() | 487 | 4.4.0 will be removed in 6.0 Use the mailer service in the DI container and create a mailer from there Example: Factory::getContainer()->get(MailerFactoryInterface::class)->createMailer(); |
| \Joomla\CMS\Factory::createConfig() | 561 | 4.0 will be removed in 6.0 Use the configuration object within the application. Example: Factory::getApplication->getConfig(); |
| \Joomla\CMS\Factory::createDbo() | 643 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |
| \Joomla\CMS\Factory::createMailer() | 706 | 4.4.0 will be removed in 6.0 Use the mailer service in the DI container and create a mailer from there Example: Factory::getContainer()->get(MailerFactoryInterface::class)->createMailer(); |
| \Joomla\CMS\Factory::createLanguage() | 728 | 4.0 will be removed in 6.0 Load the language service from the dependency injection container or via $app->getLanguage() Example: Factory::getContainer()->get(LanguageFactoryInterface::class)->createLanguage($locale, $debug) |
| \Joomla\CMS\Factory::createDocument() | 759 | 4.0 will be removed in 6.0 Load the document service from the dependency injection container or via $app->getDocument() Example: Factory::getContainer()->get(FactoryInterface::class)->createDocument($type, $attributes); |
| \Joomla\CMS\Factory::$config | 69 | 4.3 will be removed in 6.0 Use the configuration object within the application Example: Factory::getApplication()->getConfig(); |
| \Joomla\CMS\Factory::$session | 98 | 4.3 will be removed in 6.0 Use the session service in the DI container or get from the application object Example: Factory::getApplication()->getSession(); |
| \Joomla\CMS\Factory::$language | 111 | 4.3 will be removed in 6.0 Use the language service in the DI container or get from the application object Example: Factory::getApplication()->getLanguage(); |
| \Joomla\CMS\Factory::$document | 124 | 4.3 will be removed in 6.0 Use the document service in the DI container or get from the application object Example: Factory::getApplication()->getDocument(); |
| \Joomla\CMS\Factory::$database | 137 | 4.3 will be removed in 6.0 Use the database service in the DI container Example: Factory::getContainer()->get(DatabaseInterface::class); |

## repos/joomla-cms/libraries/src/Filesystem/File.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\File | 30 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File instead. |
| \Joomla\CMS\Filesystem\File::stripExt() | 77 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::stripExt() instead. |
| \Joomla\CMS\Filesystem\File::makeSafe() | 93 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::makeSafe() instead. |
| \Joomla\CMS\Filesystem\File::copy() | 124 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::copy() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\File::invalidateFileCache() | 202 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::invalidateFileCache() instead. |
| \Joomla\CMS\Filesystem\File::delete() | 259 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::delete() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\File::move() | 335 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::move() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\File::write() | 408 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::write() instead. |
| \Joomla\CMS\Filesystem\File::upload() | 533 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\File::upload() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\File::exists() | 624 | 4.4 will be removed in 6.0 Use is\_file() instead. |

## repos/joomla-cms/libraries/src/Filesystem/FilesystemHelper.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\FilesystemHelper | 25 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::remotefsize() | 39 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::remotefsize() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::ftpChmod() | 124 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::ftpChmod() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::getWriteModes() | 189 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::getWriteModes() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::getSupported() | 206 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::getSupported() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::getTransports() | 227 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::getTransports() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::getFilters() | 242 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::getFilters() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::getJStreams() | 258 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::getJStreams() instead. |
| \Joomla\CMS\Filesystem\FilesystemHelper::isJoomlaStream() | 290 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Helper::isJoomlaStream() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Folder.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Folder | 29 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder instead. |
| \Joomla\CMS\Filesystem\Folder::copy() | 47 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::copy() instead. |
| \Joomla\CMS\Filesystem\Folder::create() | 172 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::create() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Folder::delete() | 288 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::delete() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Folder::move() | 378 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::move() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Folder::exists() | 441 | 4.4 will be removed in 6.0 Use is\_dir() instead. |
| \Joomla\CMS\Filesystem\Folder::files() | 464 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::files() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Folder::folders() | 520 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::folders() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Folder::\_items() | 571 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::\_items() instead. |
| \Joomla\CMS\Filesystem\Folder::listFolderTree() | 638 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::listFolderTree() instead. |
| \Joomla\CMS\Filesystem\Folder::makeSafe() | 679 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Folder::makeSafe() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Patcher.php 13

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Patcher | 26 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher instead. |
| \Joomla\CMS\Filesystem\Patcher::\_\_construct() | 87 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::\_\_construct() instead. |
| \Joomla\CMS\Filesystem\Patcher::getInstance() | 100 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::getInstance() instead. |
| \Joomla\CMS\Filesystem\Patcher::reset() | 118 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::reset() instead. |
| \Joomla\CMS\Filesystem\Patcher::apply() | 138 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::apply() instead. |
| \Joomla\CMS\Filesystem\Patcher::addFile() | 224 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::addFile() instead. |
| \Joomla\CMS\Filesystem\Patcher::add() | 242 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::add() instead. |
| \Joomla\CMS\Filesystem\Patcher::splitLines() | 264 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::splitLines() instead. |
| \Joomla\CMS\Filesystem\Patcher::findHeader() | 285 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::findHeader() instead. |
| \Joomla\CMS\Filesystem\Patcher::findHunk() | 344 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::findHunk() instead. |
| \Joomla\CMS\Filesystem\Patcher::applyHunk() | 393 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::applyHunk() instead. |
| \Joomla\CMS\Filesystem\Patcher::getSource() | 496 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::getSource() instead. |
| \Joomla\CMS\Filesystem\Patcher::getDestination() | 521 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Patcher::getDestination() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Path.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Path | 28 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path instead. |
| \Joomla\CMS\Filesystem\Path::canChmod() | 41 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::canChmod() instead. |
| \Joomla\CMS\Filesystem\Path::setPermissions() | 69 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::setPermissions() instead. |
| \Joomla\CMS\Filesystem\Path::getPermissions() | 123 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::getPermissions() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Path::check() | 160 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::check() instead. |
| \Joomla\CMS\Filesystem\Path::clean() | 200 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::clean() instead. |
| \Joomla\CMS\Filesystem\Path::isOwner() | 248 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::isOwner() instead. |
| \Joomla\CMS\Filesystem\Path::find() | 296 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::find() instead. |
| \Joomla\CMS\Filesystem\Path::resolve() | 345 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::resolve() instead. |
| \Joomla\CMS\Filesystem\Path::removeRoot() | 389 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Path::removeRoot() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Stream.php 28

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Stream | 36 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream instead. |
| \Joomla\CMS\Filesystem\Stream::\_\_construct() | 154 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::\_\_construct() instead. |
| \Joomla\CMS\Filesystem\Stream::\_\_destruct() | 169 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::\_\_destruct() instead. |
| \Joomla\CMS\Filesystem\Stream::open() | 198 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::open() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::close() | 311 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::close() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::eof() | 371 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::eof() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::gets() | 480 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::gets() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::read() | 535 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::read() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::seek() | 626 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::seek() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::tell() | 677 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::tell() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::write() | 737 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::write() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::chmod() | 806 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::chmod() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::get\_meta\_data() | 868 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::get\_meta\_data() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::\_buildContext() | 889 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::\_buildContext() instead. |
| \Joomla\CMS\Filesystem\Stream::setContextOptions() | 913 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::setContextOptions() instead. |
| \Joomla\CMS\Filesystem\Stream::addContextEntry() | 934 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::addContextEntry() instead. |
| \Joomla\CMS\Filesystem\Stream::deleteContextEntry() | 953 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::deleteContextEntry() instead. |
| \Joomla\CMS\Filesystem\Stream::applyContextToStream() | 986 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::applyContextToStream() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::appendFilter() | 1024 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::appendFilter() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::prependFilter() | 1064 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::prependFilter() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::removeFilter() | 1104 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::removeFilter() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::copy() | 1143 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::copy() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::move() | 1196 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::move() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::delete() | 1244 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::delete() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::upload() | 1290 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::upload() instead. The framework class throws Exceptions in case of error which you have to catch. |
| \Joomla\CMS\Filesystem\Stream::writeFile() | 1314 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::writeFile() instead. |
| \Joomla\CMS\Filesystem\Stream::\_getFilename() | 1341 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::\_getFilename() instead. |
| \Joomla\CMS\Filesystem\Stream::getFileHandle() | 1376 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream::getFileHandle() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Streams/StreamString.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Streams\StreamString | 26 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_open() | 108 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_open() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_stat() | 133 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_stat instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::url\_stat() | 151 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::url\_stat() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_read() | 188 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_read() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_write() | 208 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_write() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_tell() | 223 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_tell() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_eof() | 237 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_eof() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_seek() | 258 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_seek() instead. |
| \Joomla\CMS\Filesystem\Streams\StreamString::stream\_flush() | 297 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Stream\StringWrapper::stream\_flush() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Support/StringController.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Support\StringController | 23 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Support\StringController instead. |
| \Joomla\CMS\Filesystem\Support\StringController::\_getArray() | 34 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Support\StringController::getArray() instead. |
| \Joomla\CMS\Filesystem\Support\StringController::createRef() | 53 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Support\StringController::createRef() instead. |
| \Joomla\CMS\Filesystem\Support\StringController::getRef() | 70 | 4.4 will be removed in 6.0 Use Joomla\Filesystem\Support\StringController::getRef() instead. |

## repos/joomla-cms/libraries/src/Form/Field/UserField.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Field\UserField::$groups | 43 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Form\Field\UserField::$excluded | 52 | 4.4 will be removed in 6.0 without replacement |

## repos/joomla-cms/libraries/src/Form/Form.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Form::getInstance() | 1676 | 4.3 will be removed in 6.0 Use the FormFactory service from the container Example: Factory::getContainer()->get(FormFactoryInterface::class)->createForm($name, $options); |

## repos/joomla-cms/libraries/src/Form/FormRule.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JCOMPAT\_UNICODE\_PROPERTIES | 30 | 4.0 will be removed in 6.0 Will be removed without replacement (Also remove phpcs exception) |

## repos/joomla-cms/libraries/src/Helper/AuthenticationHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\AuthenticationHelper::getTwoFactorMethods() | 37 | 4.2 will be removed in 6.0 Will be removed without replacement |

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
| \Joomla\CMS\HTML\Helpers\Bootstrap::framework() | 603 | 4.0 will be removed in 6.0 Will be removed without replacement Load the different scripts with their individual method calls |

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

## repos/joomla-cms/libraries/src/HTML/HTMLHelper.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\HTMLHelper::extract() | 84 | 4.0 will be removed in 6.0 Use the service registry instead HTMLHelper::getServiceRegistry()->getService($file); |
| \Joomla\CMS\HTML\HTMLHelper::register() | 196 | 4.0 will be removed in 6.0 Use the service registry instead HTMLHelper::getServiceRegistry()->register($key, $function); |
| \Joomla\CMS\HTML\HTMLHelper::unregister() | 221 | 4.0 will be removed in 6.0 Use the service registry instead |
| \Joomla\CMS\HTML\HTMLHelper::addIncludePath() | 1148 | 4.0 will be removed in 6.0 Use the service registry instead |
| \Joomla\CMS\HTML\HTMLHelper::$includePaths | 52 | 4.0 will be removed in 6.0 |
| \Joomla\CMS\HTML\HTMLHelper::$registry | 61 | 4.0 will be removed in 6.0 |

## repos/joomla-cms/libraries/src/Http/Response.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\Response | 26 | 4.0 will be removed in 6.0 Use Joomla\Http\Response instead |

## repos/joomla-cms/libraries/src/Http/TransportInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Http\TransportInterface | 26 | 4.0 will be removed in 6.0 Implement Joomla\Http\TransportInterface instead |

## repos/joomla-cms/libraries/src/Image/Image.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Image\Image::createThumbs() | 391 | 4.0 will be removed in 6.0 Use \Joomla\CMS\Image\createThumbnails instead |

## repos/joomla-cms/libraries/src/Input/Cli.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Cli | 26 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::\_\_construct() | 62 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::serialize() | 87 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::unserialize() | 113 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::parseArguments() | 138 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::$executable | 37 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |
| \Joomla\CMS\Input\Cli::$args | 49 | 4.3 will be removed in 6.0 Use the `joomla/console` package instead |

## repos/joomla-cms/libraries/src/Input/Cookie.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Cookie | 26 | 4.3 will be removed in 6.0. Use Joomla\Input\Cookie instead |
| \Joomla\CMS\Input\Cookie::\_\_construct() | 39 | 4.3 will be removed in 6.0. Use Joomla\Input\Cookie instead |
| \Joomla\CMS\Input\Cookie::set() | 76 | 4.3 will be removed in 6.0. Use Joomla\Input\Cookie instead |

## repos/joomla-cms/libraries/src/Input/Files.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Files | 26 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::\_\_construct() | 51 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::get() | 81 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::decodeData() | 121 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::set() | 149 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::$decodedData | 37 | 4.3 will be removed in 6.0. Use Joomla\Input\Files instead |

## repos/joomla-cms/libraries/src/Input/Input.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Input | 37 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::\_\_construct() | 72 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::\_\_get() | 93 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::getArray() | 138 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::getArrayRecursive() | 163 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::unserialize() | 210 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::$allowedGlobals | 48 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::$inputs | 59 | 4.3 will be removed in 6.0. Use Joomla\Input\Input instead |

## repos/joomla-cms/libraries/src/Input/Json.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Json | 29 | 4.3 will be removed in 6.0. Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::\_\_construct() | 51 | 4.3 will be removed in 6.0. Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::getRaw() | 83 | 4.3 will be removed in 6.0. Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::$\_raw | 38 | 4.3 will be removed in 6.0. Use Joomla\Input\Json instead |

## repos/joomla-cms/libraries/src/Installer/InstallerAdapter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Installer\InstallerAdapter::\_\_get() | 1276 | 4.3 will be removed in 6.0 Use getDatabase() instead of directly accessing \_db |

## repos/joomla-cms/libraries/src/Language/Language.php 17

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Language::getInstance() | 298 | 4.3 will be removed in 6.0 Use the language factory instead Example: Factory::getContainer()->get(LanguageFactoryInterface::class)->createLanguage($lang, $debug); |
| \Joomla\CMS\Language\Language::getIgnoredSearchWords() | 498 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getIgnoredSearchWordsCallback() | 516 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setIgnoredSearchWordsCallback() | 532 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getLowerLimitSearchWord() | 549 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getLowerLimitSearchWordCallback() | 567 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setLowerLimitSearchWordCallback() | 583 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getUpperLimitSearchWord() | 600 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getUpperLimitSearchWordCallback() | 618 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setUpperLimitSearchWordCallback() | 634 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getSearchDisplayedCharactersNumber() | 651 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::getSearchDisplayedCharactersNumberCallback() | 669 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::setSearchDisplayedCharactersNumberCallback() | 685 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$ignoredSearchWordsCallback | 154 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$lowerLimitSearchWordCallback | 164 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$upperLimitSearchWordCallback | 174 | 4.4 will be removed in 6.0 without replacement |
| \Joomla\CMS\Language\Language::$searchDisplayedCharactersNumberCallback | 184 | 4.4 will be removed in 6.0 without replacement |

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
| \Joomla\CMS\MVC\Controller\BaseController::addModelPath() | 199 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead |
| \Joomla\CMS\MVC\Controller\BaseController::getInstance() | 263 | 4.3 will be removed in 6.0 Get the controller through the MVCFactory instead Example: Factory::getApplication()->bootComponent($option)->getMVCFactory()->createController(...); |

## repos/joomla-cms/libraries/src/MVC/Controller/FormController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Controller\FormController::editAssociations() | 874 | 4.3 will be removed in 6.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/AdminModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\AdminModel::editAssociations() | 1577 | 4.3 will be removed in 6.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/BaseDatabaseModel.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::dispatchEvent() | 374 | 4.4 will be removed in 6.0. Use $this->getDispatcher() directly. |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::getDbo() | 399 | 4.3 will be removed in 6.0 Use getDatabase() instead Example: $model->getDatabase(); |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::setDbo() | 421 | 4.3 will be removed in 6.0 Use setDatabase() instead Example: $model->setDatabase($db); |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::\_\_get() | 442 | 4.3 will be removed in 6.0 Use getDatabase() instead of directly accessing \_db |

## repos/joomla-cms/libraries/src/MVC/Model/BaseModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\BaseModel::addIncludePath() | 92 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory + namespace instead |

## repos/joomla-cms/libraries/src/MVC/Model/DatabaseAwareTrait.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\DatabaseAwareTrait | 27 | 4.3 will be removed in 6.0 Use the trait from the database package Example: \Joomla\Database\DatabaseAwareTrait |
| \Joomla\CMS\MVC\Model\DatabaseAwareTrait::getDbo() | 53 | 4.3 will be removed in 6.0 Use the trait from the database package Example: \Joomla\Database\DatabaseAwareTrait::getDatabase() |
| \Joomla\CMS\MVC\Model\DatabaseAwareTrait::setDbo() | 75 | 4.3 will be removed in 6.0 Use the trait from the database package Example: \Joomla\Database\DatabaseAwareTrait::setDatabase() |
| \Joomla\CMS\MVC\Model\DatabaseAwareTrait::$\_db | 39 | 4.3 will be removed in 6.0 Use the trait from the database package Example: \Joomla\Database\DatabaseAwareTrait::$databaseAwareTraitDatabase |

## repos/joomla-cms/libraries/src/MVC/Model/LegacyModelLoaderTrait.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait | 32 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::\_createFileName() | 47 | 4.3 will be removed in 6.0 Will be removed without replacement |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::getInstance() | 67 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead Example: Factory::getApplication->bootComponent('com\_xxx')->getMVCFactory()->createModel($type, $prefix, $config); |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::addTablePath() | 120 | 4.3 will be removed in 6.0 Will be removed without replacement. Get the model through the MVCFactory instead |
| \Joomla\CMS\MVC\Model\LegacyModelLoaderTrait::createModelFromComponent() | 139 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/MVC/Model/ListModel.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\ListModel::$filterBlacklist | 100 | 4.0 will be removed in 6.0 Use $filterForbiddenList instead |
| \Joomla\CMS\MVC\Model\ListModel::$listBlacklist | 118 | 4.0 will be removed in 6.0 Use $listForbiddenList instead |

## repos/joomla-cms/libraries/src/MVC/View/AbstractView.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\View\AbstractView::dispatchEvent() | 310 | 4.4 will be removed in 6.0. Use $this->getDispatcher() directly. |
| \Joomla\CMS\MVC\View\AbstractView::$document | 49 | 4.4.0 will be removed in 6.0 Use $this->getDocument() instead |

## repos/joomla-cms/libraries/src/Object/CMSObject.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\CMSObject | 28 | 4.3 will be removed in 6.0 Use \stdClass or \Joomla\Registry\Registry instead. Example: new \Joomla\Registry\Registry(); |
| \Joomla\CMS\Object\CMSObject::\_\_toString() | 59 | 4.3 will be removed in 6.0 Classes should provide their own \_\_toString() implementation. |

## repos/joomla-cms/libraries/src/Object/LegacyErrorHandlingTrait.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait | 26 | 4.3 will be removed in 6.0 Will be removed without replacement Throw an Exception instead of setError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::getError() | 53 | 3.1.4 will be removed in 6.0 Will be removed without replacement Catch thrown Exceptions instead of getError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::getErrors() | 85 | 3.1.4 will be removed in 6.0 Will be removed without replacement Catch thrown Exceptions instead of getErrors |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::setError() | 103 | 3.1.4 will be removed in 6.0 Will be removed without replacement Throw an Exception instead of using setError |
| \Joomla\CMS\Object\LegacyErrorHandlingTrait::$\_errors | 36 | 3.1.4 JError has been deprecated |

## repos/joomla-cms/libraries/src/Object/LegacyPropertyManagementTrait.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait | 26 | 4.3.0 will be removed in 6.0 Will be removed without replacement Create proper setter functions for the individual properties or use a \Joomla\Registry\Registry |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::def() | 41 | 4.3.0 will be removed in 6.0 Defining dynamic properties should not be used anymore |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::get() | 63 | 4.3.0 will be removed in 6.0 Create a proper getter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::getProperties() | 86 | 4.3.0 will be removed in 6.0 Create a proper getter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::set() | 114 | 4.3.0 will be removed in 6.0 Create a proper setter function for the property |
| \Joomla\CMS\Object\LegacyPropertyManagementTrait::setProperties() | 136 | 4.3.0 will be removed in 6.0 Create a proper setter function for the property |

## repos/joomla-cms/libraries/src/Pathway/Pathway.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Pathway\Pathway::getInstance() | 67 | 4.3 will be removed in 6.0 Get the instance from the application Example: $app->getPathway() |

## repos/joomla-cms/libraries/src/Plugin/CMSPlugin.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Plugin\CMSPlugin::$allowLegacyListeners | 90 | 4.3 will be removed in 6.0 Implement your plugin methods accepting an AbstractEvent object Example: onEventTriggerName(AbstractEvent $event) { $context = $event->getArgument(...); } |

## repos/joomla-cms/libraries/src/Router/Router.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Router\Router::getInstance() | 108 | 4.0 will be removed in 6.0 Inject the router or load it from the dependency injection container Example: Factory::getContainer()->get(SiteRouter::class); |

## repos/joomla-cms/libraries/src/Schema/ChangeItem/SqlsrvChangeItem.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Schema\ChangeItem\SqlsrvChangeItem | 26 | 4.3 will be removed in 6.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Session/Session.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Session\Session::getInstance() | 157 | 4.3 will be removed in 6.0 Load the session service from the dependency injection container or via $app->getSession() Example: Factory::getApplication()->getSession(); |

## repos/joomla-cms/libraries/src/Table/Table.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Table::getInstance() | 277 | 4.3 will be removed in 6.0 Use the MvcFactory instead Example: Factory::getApplication()->bootComponent('...')->getMVCFactory()->createTable($name, $prefix, $config); |
| \Joomla\CMS\Table\Table::addIncludePath() | 332 | 4.3 will be removed in 6.0 Should not be used anymore as tables are loaded through the MvcFactory |

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

## repos/joomla-cms/libraries/src/Toolbar/Toolbar.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\Toolbar::getInstance() | 142 | 4.0 will be removed in 6.0 Use the ToolbarFactoryInterface instead Example: Factory::getContainer()->get(ToolbarFactoryInterface::class)->createToolbar($name) |
| \Joomla\CMS\Toolbar\Toolbar::addButtonPath() | 397 | 4.0 will be removed in 6.0 ToolbarButton classes should be autoloaded via namespaces |
| \Joomla\CMS\Toolbar\Toolbar::getButtonPath() | 434 | 4.0 will be removed in 6.0 ToolbarButton buttons should be autoloaded via namespaces |

## repos/joomla-cms/libraries/src/Toolbar/ToolbarButton.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Toolbar\ToolbarButton::fetchButton() | 255 | 4.3 will be removed in 6.0 Use render() instead. |

## repos/joomla-cms/libraries/src/User/User.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\User::getInstance() | 269 | 4.3 will be removed in 6.0 Load the user service from the dependency injection container or via $app->getIdentity() Example: Factory::getContainer()->get(UserFactoryInterface::class)->loadUserById($id) |
| \Joomla\CMS\User\User::$aid | 231 | 4.4.0 will be removed in 6.0 as this property is not used anymore |

## repos/joomla-cms/libraries/src/User/UserHelper.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\UserHelper::HASH\_ARGON2I\_BC | 67 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_ARGON2I instead |
| \Joomla\CMS\User\UserHelper::HASH\_ARGON2ID\_BC | 90 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_ARGON2ID instead |
| \Joomla\CMS\User\UserHelper::HASH\_BCRYPT\_BC | 109 | 4.0 will be removed in 6.0 Use UserHelper::HASH\_BCRYPT instead |
| \Joomla\CMS\User\UserHelper::HASH\_MD5 | 120 | 4.0 will be removed in 6.0 Support for MD5 hashed passwords will be removed use any of the other hashing methods |
| \Joomla\CMS\User\UserHelper::HASH\_PHPASS | 131 | 4.0 will be removed in 6.0 Support for PHPass hashed passwords will be removed use any of the other hashing methods |

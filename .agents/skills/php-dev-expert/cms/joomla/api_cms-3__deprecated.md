# Joomla! CMS 3.10.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/cms-3/deprecated.html

---

# Deprecated Elements

## repos/joomla-cms/libraries/src/Access/Access.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Access\Access::preloadPermissionsParentIdMapping() | 292 | 3.7.0 No replacement. Will be removed in 4.0. |
| \Joomla\CMS\Access\Access::getActions() | 1131 | 4.0 Use Access::getActionsFromFile or Access::getActionsFromData instead. |
| \Joomla\CMS\Access\Access::$assetPermissionsById | 56 | 3.7.0 No replacement. Will be removed in 4.0. |
| \Joomla\CMS\Access\Access::$assetPermissionsByName | 66 | 3.7.0 No replacement. Will be removed in 4.0. |

## repos/joomla-cms/libraries/src/Access/Wrapper/Access.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Access\Wrapper\Access | 22 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::clearStatics() | 33 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::check() | 51 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::checkGroup() | 69 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getAssetRules() | 86 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getGroupsByUser() | 103 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getUsersByGroup() | 120 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getAuthorisedViewLevels() | 136 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getActions() | 153 | 4.0 Use StaticAccess::getActionsFromFile or StaticAccess::getActionsFromData instead. |
| \Joomla\CMS\Access\Wrapper\Access::getActionsFromFile() | 170 | 4.0 Use `Joomla\CMS\Access\Access` directly |
| \Joomla\CMS\Access\Wrapper\Access::getActionsFromData() | 187 | 4.0 Use `Joomla\CMS\Access\Access` directly |

## repos/joomla-cms/libraries/src/Adapter/Adapter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Adapter\Adapter | 23 | 5.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Adapter/AdapterInstance.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Adapter\AdapterInstance | 21 | 5.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Application/ApplicationHelper.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\ApplicationHelper::parseXMLInstallFile() | 220 | 4.0 Use \JInstaller::parseXMLInstallFile instead. |
| \Joomla\CMS\Application\ApplicationHelper::parseXMLLangMetaFile() | 239 | 4.0 Use \JInstaller::parseXMLInstallFile instead. |

## repos/joomla-cms/libraries/src/Application/BaseApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\BaseApplication::doExecute() | 163 | 4.0 The default concrete implementation of doExecute() will be removed, subclasses will need to provide their own implementation. |

## repos/joomla-cms/libraries/src/Application/CMSApplication.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\CMSApplication::getCfg() | 332 | 5.0 Use get() instead |
| \Joomla\CMS\Application\CMSApplication::isAdmin() | 679 | 4.0 Use isClient('administrator') instead. |
| \Joomla\CMS\Application\CMSApplication::isSite() | 705 | 4.0 Use isClient('site') instead. |
| \Joomla\CMS\Application\CMSApplication::$\_clientId | 57 | 4.0 Will be renamed $clientId |
| \Joomla\CMS\Application\CMSApplication::$\_messageQueue | 66 | 4.0 Will be renamed $messageQueue |
| \Joomla\CMS\Application\CMSApplication::$\_name | 75 | 4.0 Will be renamed $name |

## repos/joomla-cms/libraries/src/Application/SiteApplication.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\SiteApplication::getPageParameters() | 288 | 4.0 Use getParams() instead |
| \Joomla\CMS\Application\SiteApplication::$\_language\_filter | 31 | 4.0 Will be renamed $language\_filter |
| \Joomla\CMS\Application\SiteApplication::$\_detect\_browser | 40 | 4.0 Will be renamed $detect\_browser |

## repos/joomla-cms/libraries/src/Application/WebApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Application\WebApplication::initialise() | 317 | 4.0 |

## repos/joomla-cms/libraries/src/Cache/CacheController.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\CacheController::get() | 158 | 4.0 Implement own method in subclass |
| \Joomla\CMS\Cache\CacheController::store() | 201 | 4.0 Implement own method in subclass |

## repos/joomla-cms/libraries/src/Cache/CacheStorage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\CacheStorage::test() | 324 | 4.0 |

## repos/joomla-cms/libraries/src/Cache/Controller/CallbackController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Controller\CallbackController::call() | 39 | 4.0 |

## repos/joomla-cms/libraries/src/Cache/Controller/OutputController.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Controller\OutputController::start() | 59 | 4.0 |
| \Joomla\CMS\Cache\Controller\OutputController::end() | 121 | 4.0 |
| \Joomla\CMS\Cache\Controller\OutputController::$\_locktest | 46 | 4.0 |

## repos/joomla-cms/libraries/src/Cache/Storage/ApcStorage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Storage\ApcStorage | 22 | 4.0 Use the APCu handler instead |

## repos/joomla-cms/libraries/src/Cache/Storage/CacheliteStorage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Storage\CacheliteStorage | 22 | 4.0 Deprecated without replacement |

## repos/joomla-cms/libraries/src/Cache/Storage/MemcacheStorage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Storage\MemcacheStorage | 24 | 4.0 Use the Memcached handler instead |

## repos/joomla-cms/libraries/src/Cache/Storage/XcacheStorage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Cache\Storage\XcacheStorage | 22 | 4.0 The XCache PHP extension is not compatible with PHP 7 |

## repos/joomla-cms/libraries/src/Client/ClientWrapper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Client\ClientWrapper | 19 | 4.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Component/ComponentHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\ComponentHelper::\_load() | 417 | 4.0 Use JComponentHelper::load() instead |

## repos/joomla-cms/libraries/src/Component/ComponentRecord.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Component\ComponentRecord::\_\_get() | 81 | 4.0 Access the item parameters through the `getParams()` method |
| \Joomla\CMS\Component\ComponentRecord::\_\_set() | 102 | 4.0 Set the item parameters through the `setParams()` method |

## repos/joomla-cms/libraries/src/Crypt/Cipher/BlowfishCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\BlowfishCipher | 19 | 4.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Cipher/CryptoCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\CryptoCipher | 22 | 5.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Cipher/McryptCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\McryptCipher | 23 | 4.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Cipher/Rijndael256Cipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\Rijndael256Cipher | 19 | 4.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Cipher/SimpleCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\SimpleCipher | 23 | 4.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Cipher/TripleDesCipher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Cipher\TripleDesCipher | 19 | 4.0 Without replacement use SodiumCipher |

## repos/joomla-cms/libraries/src/Crypt/Crypt.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Crypt::hasStrongPasswordSupport() | 164 | 4.0 |

## repos/joomla-cms/libraries/src/Crypt/CryptPassword.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\CryptPassword | 19 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\CryptPassword::create() | 40 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\CryptPassword::verify() | 53 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\CryptPassword::setDefaultType() | 65 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\CryptPassword::getDefaultType() | 75 | 4.0 Use PHP 5.5's native password hashing API |

## repos/joomla-cms/libraries/src/Crypt/Password/SimpleCryptPassword.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword | 22 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::create() | 50 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::setCost() | 101 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::getSalt() | 116 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::verify() | 136 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::setDefaultType() | 184 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::getDefaultType() | 200 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::$cost | 29 | 4.0 Use PHP 5.5's native password hashing API |
| \Joomla\CMS\Crypt\Password\SimpleCryptPassword::$defaultType | 36 | 4.0 Use PHP 5.5's native password hashing API |

## repos/joomla-cms/libraries/src/Document/Document.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\Document::addScript() | 475 | 4.0 The (url, mime, defer, async) method signature is deprecated, use (url, options, attributes) instead. |
| \Joomla\CMS\Document\Document::addScriptVersion() | 530 | 4.0 This method is deprecated, use addScript(url, options, attributes) instead. |
| \Joomla\CMS\Document\Document::addStyleSheet() | 658 | 4.0 The (url, mime, media, attribs) method signature is deprecated, use (url, options, attributes) instead. |
| \Joomla\CMS\Document\Document::addStyleSheetVersion() | 721 | 4.0 This method is deprecated, use addStyleSheet(url, options, attributes) instead. |

## repos/joomla-cms/libraries/src/Document/Renderer/Html/HeadRenderer.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Document\Renderer\Html\HeadRenderer::fetchHead() | 51 | 4.0 Method code will be moved into the render method |

## repos/joomla-cms/libraries/src/Editor/Editor.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Editor\Editor::initialise() | 243 | 4.0 This function will not load any custom tag from 4.0 forward, use JHtml::script |
| \Joomla\CMS\Editor\Editor::save() | 350 | 4.0 Bind functionality to form submit through javascript |
| \Joomla\CMS\Editor\Editor::getContent() | 388 | 4.0 Use Joomla.editors API, see core.js |
| \Joomla\CMS\Editor\Editor::setContent() | 421 | 4.0 Use Joomla.editors API, see core.js |

## repos/joomla-cms/libraries/src/Environment/Browser.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Environment\Browser::isSSLConnection() | 1020 | 4.0 - Use the isSSLConnection method on the application object. |

## repos/joomla-cms/libraries/src/Extension/ExtensionHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Extension\ExtensionHelper | 20 | 4.0 Replace class with a non static methods for better testing |

## repos/joomla-cms/libraries/src/Factory.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Factory::getAcl() | 321 | 4.0 - Use JAccess directly. |
| \Joomla\CMS\Factory::getFeedParser() | 387 | 4.0 Use directly JFeedFactory or supply SimplePie instead. Mehod will be proxied to JFeedFactory beginning in 3.2 |
| \Joomla\CMS\Factory::getXml() | 412 | 4.0 - Use SimpleXML directly. |
| \Joomla\CMS\Factory::getEditor() | 466 | 4.0 - Use Editor directly |
| \Joomla\CMS\Factory::getUri() | 496 | 4.0 - Use JUri directly. |
| \Joomla\CMS\Factory::$acl | 98 | 4.0 |

## repos/joomla-cms/libraries/src/Filesystem/File.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\File::read() | 343 | 4.0 - Use the native file\_get\_contents() instead. |
| \Joomla\CMS\Filesystem\File::getName() | 662 | 4.0 - Use basename() instead. |

## repos/joomla-cms/libraries/src/Filesystem/Wrapper/FileWrapper.php 12

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper | 21 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::getExt() | 34 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::stripExt() | 50 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::makeSafe() | 66 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::copy() | 85 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::delete() | 101 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::move() | 120 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::read() | 140 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::write() | 158 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::upload() | 176 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::exists() | 192 | 4.0 Use \Joomla\CMS\Filesystem\File instead |
| \Joomla\CMS\Filesystem\Wrapper\FileWrapper::getName() | 208 | 4.0 Use \Joomla\CMS\Filesystem\File instead |

## repos/joomla-cms/libraries/src/Filesystem/Wrapper/FolderWrapper.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper | 21 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::copy() | 39 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::create() | 56 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::delete() | 73 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::move() | 92 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::exists() | 108 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::files() | 130 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::folders() | 152 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::listFolderTree() | 173 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |
| \Joomla\CMS\Filesystem\Wrapper\FolderWrapper::makeSafe() | 189 | 4.0 Use \Joomla\CMS\Filesystem\Folder instead |

## repos/joomla-cms/libraries/src/Filesystem/Wrapper/PathWrapper.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper | 21 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::canChmod() | 34 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::setPermissions() | 52 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::getPermissions() | 68 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::check() | 85 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::clean() | 103 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::isOwner() | 119 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |
| \Joomla\CMS\Filesystem\Wrapper\PathWrapper::find() | 136 | 4.0 Use \Joomla\CMS\Filesystem\Path instead |

## repos/joomla-cms/libraries/src/Filter/InputFilter.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filter\InputFilter::\_remove() | 766 | 4.0 Use InputFilter::remove() instead |
| \Joomla\CMS\Filter\InputFilter::\_cleanTags() | 810 | 4.0 Use InputFilter::cleanTags() instead |
| \Joomla\CMS\Filter\InputFilter::\_cleanAttributes() | 1082 | 4.0 Use InputFilter::cleanAttributes() instead |
| \Joomla\CMS\Filter\InputFilter::\_decode() | 1156 | 4.0 Use InputFilter::decode() instead |
| \Joomla\CMS\Filter\InputFilter::\_escapeAttributeValues() | 1214 | 4.0 Use InputFilter::escapeAttributeValues() instead |
| \Joomla\CMS\Filter\InputFilter::\_stripCSSExpressions() | 1229 | 4.0 Use InputFilter::stripCSSExpressions() instead |

## repos/joomla-cms/libraries/src/Filter/OutputFilter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filter\OutputFilter::\_ampReplaceCallback() | 127 | 4.0 Use OutputFilter::ampReplaceCallback() instead |

## repos/joomla-cms/libraries/src/Filter/Wrapper/OutputFilterWrapper.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper | 21 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::objectHTMLSafe() | 36 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::linkXHTMLSafe() | 52 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::stringURLSafe() | 68 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::stringURLUnicodeSlug() | 84 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::ampReplace() | 100 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::\_ampReplaceCallback() | 116 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::cleanText() | 132 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::stripImages() | 148 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |
| \Joomla\CMS\Filter\Wrapper\OutputFilterWrapper::stripIframes() | 164 | 4.0 Use `Joomla\CMS\Filter\OutputFilter` directly |

## repos/joomla-cms/libraries/src/Form/Field/EditorField.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Field\EditorField::save() | 336 | 4.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Form/Field/HelpsiteField.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Field\HelpsiteField | 25 | 4.0 To be removed |

## repos/joomla-cms/libraries/src/Form/Form.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\Form::getControlGroup() | 627 | 3.2.3 Use renderField() instead of getControlGroup |
| \Joomla\CMS\Form\Form::getControlGroups() | 644 | 3.2.3 Use renderFieldset() instead of getControlGroups |
| \Joomla\CMS\Form\Form::loadFieldType() | 1983 | 4.0 Use FormHelper::loadFieldType() directly |
| \Joomla\CMS\Form\Form::loadRuleType() | 2000 | 4.0 Use FormHelper::loadRuleType() directly |

## repos/joomla-cms/libraries/src/Form/FormField.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\FormField::getControlGroup() | 915 | 3.2.3 Use renderField() instead |

## repos/joomla-cms/libraries/src/Form/FormWrapper.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Form\FormWrapper | 19 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::loadFieldType() | 33 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::loadRuleType() | 50 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::loadFieldClass() | 66 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::loadRuleClass() | 82 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::addFieldPath() | 98 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::addFormPath() | 114 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |
| \Joomla\CMS\Form\FormWrapper::addRulePath() | 130 | 4.0 Use `Joomla\CMS\Form\FormHelper` directly |

## repos/joomla-cms/libraries/src/Helper/ContentHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\ContentHelper::\_getActions() | 152 | 3.2 Use ContentHelper::getActions() instead |

## repos/joomla-cms/libraries/src/Helper/ContentHistoryHelper.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\ContentHistoryHelper | 23 | 4.0 Deprecated in favour of \Joomla\CMS\Versioning\Versioning in Joomla 4 |
| \Joomla\CMS\Helper\ContentHistoryHelper::\_\_construct() | 42 | 4.0 |
| \Joomla\CMS\Helper\ContentHistoryHelper::deleteHistory() | 57 | 4.0 Use \Joomla\CMS\Versioning\Versioning::delete in Joomla 4 |
| \Joomla\CMS\Helper\ContentHistoryHelper::getHistory() | 84 | 4.0 Use \Joomla\CMS\Versioning\Versioning::get in Joomla 4 |
| \Joomla\CMS\Helper\ContentHistoryHelper::store() | 109 | 4.0 Use \Joomla\CMS\Versioning\Versioning::store in Joomla 4 |
| \Joomla\CMS\Helper\ContentHistoryHelper::$typeAlias | 32 | 4.0 |

## repos/joomla-cms/libraries/src/Helper/LibraryHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\LibraryHelper::\_load() | 141 | 4.0 Use LibraryHelper::loadLibrary() instead |

## repos/joomla-cms/libraries/src/Helper/ModuleHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\ModuleHelper::\_load() | 341 | 4.0 Use ModuleHelper::load() instead |

## repos/joomla-cms/libraries/src/Helper/TagsHelper.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Helper\TagsHelper::createTagsFromMetadata() | 287 | 4.0 This method is no longer used in the CMS and will not be replaced. |
| \Joomla\CMS\Helper\TagsHelper::getTypeId() | 743 | 4.0 Use \JUcmType::getTypeId() instead |

## repos/joomla-cms/libraries/src/HTML/HTMLHelper.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\HTML\HTMLHelper::getMd5Version() | 296 | 4.0 Usage of MD5SUM files is deprecated, use version instead. |
| \Joomla\CMS\HTML\HTMLHelper::stylesheet() | 607 | 4.0 The (file, attribs, relative, pathOnly, detectBrowser, detectDebug) method signature is deprecated, use (file, options, attributes) instead. |
| \Joomla\CMS\HTML\HTMLHelper::script() | 679 | 4.0 The (file, framework, relative, pathOnly, detectBrowser, detectDebug) method signature is deprecated, use (file, options, attributes) instead. |
| \Joomla\CMS\HTML\HTMLHelper::getJSObject() | 1123 | 4.0 Use `json_encode()` or `Joomla\Registry\Registry::toString('json')` instead |

## repos/joomla-cms/libraries/src/Input/Cli.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Cli | 21 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::\_\_construct() | 51 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::serialize() | 77 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::unserialize() | 101 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::parseArguments() | 127 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::$executable | 30 | 5.0 Use Joomla\Input\Cli instead |
| \Joomla\CMS\Input\Cli::$args | 40 | 5.0 Use Joomla\Input\Cli instead |

## repos/joomla-cms/libraries/src/Input/Cookie.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Cookie | 21 | 5.0 Use Joomla\Input\Cookie instead |
| \Joomla\CMS\Input\Cookie::\_\_construct() | 32 | 5.0 Use Joomla\Input\Cookie instead |
| \Joomla\CMS\Input\Cookie::set() | 89 | 5.0 Use Joomla\Input\Cookie instead |

## repos/joomla-cms/libraries/src/Input/Files.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Files | 21 | 5.0 Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::\_\_construct() | 42 | 5.0 Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::get() | 73 | 5.0 Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::decodeData() | 114 | 5.0 Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::set() | 142 | 5.0 Use Joomla\Input\Files instead |
| \Joomla\CMS\Input\Files::$decodedData | 30 | 5.0 Use Joomla\Input\Files instead |

## repos/joomla-cms/libraries/src/Input/Input.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Input | 31 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::\_\_construct() | 60 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::\_\_get() | 80 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::getArray() | 126 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::getArrayRecursive() | 149 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::unserialize() | 210 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::$allowedGlobals | 40 | 5.0 Use Joomla\Input\Input instead |
| \Joomla\CMS\Input\Input::$inputs | 49 | 5.0 Use Joomla\Input\Input instead |

## repos/joomla-cms/libraries/src/Input/Json.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Input\Json | 24 | 5.0 Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::\_\_construct() | 42 | 5.0 Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::getRaw() | 79 | 5.0 Use Joomla\Input\Json instead |
| \Joomla\CMS\Input\Json::$\_raw | 31 | 5.0 Use Joomla\Input\Json instead |

## repos/joomla-cms/libraries/src/Installer/Installer.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Installer\Installer::getAdapter() | 2319 | 4.0 The internal adapter cache will no longer be supported, use loadAdapter() to fetch an adapter instance |
| \Joomla\CMS\Installer\Installer::loadAllAdapters() | 2465 | 4.0 Individual adapters should be instantiated as needed |
| \Joomla\CMS\Installer\Installer::$instance | 134 | 4.0 |

## repos/joomla-cms/libraries/src/Installer/InstallerHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Installer\InstallerHelper::splitSql() | 367 | 4.0 Use \JDatabaseDriver::splitSql() directly |

## repos/joomla-cms/libraries/src/Language/Language.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Language::exists() | 680 | 3.7.0, use LanguageHelper::exists() instead. |
| \Joomla\CMS\Language\Language::getMetadata() | 1187 | 3.7.0, use LanguageHelper::getMetadata() instead. |
| \Joomla\CMS\Language\Language::getKnownLanguages() | 1204 | 3.7.0, use LanguageHelper::getKnownLanguages() instead. |
| \Joomla\CMS\Language\Language::getLanguagePath() | 1222 | 3.7.0, use LanguageHelper::getLanguagePath() instead. |
| \Joomla\CMS\Language\Language::setLanguage() | 1241 | 4.0 (CMS) - Instantiate a new Language object instead |
| \Joomla\CMS\Language\Language::parseLanguageFiles() | 1312 | 3.7.0, use LanguageHelper::parseLanguageFiles() instead. |
| \Joomla\CMS\Language\Language::parseXMLLanguageFile() | 1330 | 3.7.0, use LanguageHelper::parseXMLLanguageFile() instead. |

## repos/joomla-cms/libraries/src/Language/LanguageHelper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \\_QQ\_ | 443 | 4.0 Use escaped double quotes (") instead. |

## repos/joomla-cms/libraries/src/Language/LanguageStemmer.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\LanguageStemmer | 19 | 4.0 Use wamania/php-stemmer |

## repos/joomla-cms/libraries/src/Language/Multilanguage.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Multilanguage::getSiteLangs() | 75 | 3.7.0 Use \JLanguageHelper::getInstalledLanguages(0) instead. |

## repos/joomla-cms/libraries/src/Language/Stemmer/Porteren.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Stemmer\Porteren | 25 | 4.0 Use wamania/php-stemmer |

## repos/joomla-cms/libraries/src/Language/Wrapper/JTextWrapper.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Wrapper\JTextWrapper | 19 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::\_() | 35 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::alt() | 55 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::plural() | 72 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::sprintf() | 88 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::printf() | 104 | 4.0 Use `JText` directly |
| \Joomla\CMS\Language\Wrapper\JTextWrapper::script() | 122 | 4.0 Use `JText` directly |

## repos/joomla-cms/libraries/src/Language/Wrapper/LanguageHelperWrapper.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Wrapper\LanguageHelperWrapper | 21 | 4.0 Use `Joomla\CMS\Language\LanguageHelper` directly |
| \Joomla\CMS\Language\Wrapper\LanguageHelperWrapper::createLanguageList() | 37 | 4.0 Use `Joomla\CMS\Language\LanguageHelper` directly |
| \Joomla\CMS\Language\Wrapper\LanguageHelperWrapper::detectLanguage() | 51 | 4.0 Use `Joomla\CMS\Language\LanguageHelper` directly |
| \Joomla\CMS\Language\Wrapper\LanguageHelperWrapper::getLanguages() | 67 | 4.0 Use `Joomla\CMS\Language\LanguageHelper` directly |

## repos/joomla-cms/libraries/src/Language/Wrapper/TransliterateWrapper.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Language\Wrapper\TransliterateWrapper | 21 | 4.0 Use `Joomla\CMS\Language\Transliterate` directly |
| \Joomla\CMS\Language\Wrapper\TransliterateWrapper::utf8\_latin\_to\_ascii() | 35 | 4.0 Use `Joomla\CMS\Language\Transliterate` directly |

## repos/joomla-cms/libraries/src/Layout/FileLayout.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Layout\FileLayout::setLayout() | 522 | 3.5 Use setLayoutId() |
| \Joomla\CMS\Layout\FileLayout::refreshIncludePaths() | 556 | 3.5 Use FileLayout::clearIncludePaths() |

## repos/joomla-cms/libraries/src/Mail/Mail.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Mail\Mail::sendAdminMail() | 789 | 4.0 Without replacement please implement it in your own code |

## repos/joomla-cms/libraries/src/Mail/MailWrapper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Mail\MailWrapper | 19 | 4.0 Will be removed without replacement |

## repos/joomla-cms/libraries/src/Menu/AbstractMenu.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\AbstractMenu::$\_items | 32 | 4.0 Will convert to $items |
| \Joomla\CMS\Menu\AbstractMenu::$\_default | 41 | 4.0 Will convert to $default |
| \Joomla\CMS\Menu\AbstractMenu::$\_active | 50 | 4.0 Will convert to $active |

## repos/joomla-cms/libraries/src/Menu/MenuHelper.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\MenuHelper | 20 | 4.0 |
| \Joomla\CMS\Menu\MenuHelper::\_\_construct() | 38 | 4.0 |
| \Joomla\CMS\Menu\MenuHelper::addPreset() | 57 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |
| \Joomla\CMS\Menu\MenuHelper::getPresets() | 90 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |
| \Joomla\CMS\Menu\MenuHelper::loadPreset() | 135 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |
| \Joomla\CMS\Menu\MenuHelper::resolveAlias() | 166 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |
| \Joomla\CMS\Menu\MenuHelper::createLevels() | 218 | 4.0 |
| \Joomla\CMS\Menu\MenuHelper::loadXml() | 274 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |
| \Joomla\CMS\Menu\MenuHelper::parseXmlNode() | 371 | 4.0 Use Joomla\Component\Menus\Administrator\Helper\MenusHelper |

## repos/joomla-cms/libraries/src/Menu/MenuItem.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\MenuItem::\_\_get() | 217 | 4.0 Access the item parameters through the `getParams()` method |
| \Joomla\CMS\Menu\MenuItem::\_\_set() | 238 | 4.0 Set the item parameters through the `setParams()` method |
| \Joomla\CMS\Menu\MenuItem::\_\_isset() | 260 | 4.0 Deprecated without replacement |
| \Joomla\CMS\Menu\MenuItem::get() | 324 | 4.0 |
| \Joomla\CMS\Menu\MenuItem::set() | 345 | 4.0 |

## repos/joomla-cms/libraries/src/Menu/Node/Component.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node\Component | 21 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Component::\_\_construct() | 83 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Component::get() | 107 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Node/Container.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node\Container | 19 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Node/Heading.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node\Heading | 21 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Heading::\_\_construct() | 62 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Heading::get() | 83 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Node/Separator.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node\Separator | 21 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Separator::\_\_construct() | 41 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Separator::get() | 59 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Node/Url.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node\Url | 21 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Url::\_\_construct() | 73 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node\Url::get() | 96 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Node.php 14

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Node | 21 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::\_\_construct() | 84 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::addChild() | 102 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::removeChild() | 130 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::hasParent() | 151 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::getParent() | 165 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::hasChildren() | 179 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::getChildren() | 193 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::getLevel() | 207 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::isRoot() | 221 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::setActive() | 237 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::setParams() | 253 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::getParam() | 269 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Node::get() | 285 | 4.0 Use Joomla\CMS\Menu\MenuItem |

## repos/joomla-cms/libraries/src/Menu/Tree.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Menu\Tree | 18 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::\_\_construct() | 54 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::getRoot() | 69 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::getCurrent() | 83 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::setCurrent() | 99 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::getParent() | 118 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::reset() | 141 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::addChild() | 166 | 4.0 Use Joomla\CMS\Menu\MenuItem |
| \Joomla\CMS\Menu\Tree::getIconClass() | 188 | 4.0 |
| \Joomla\CMS\Menu\Tree::getCss() | 234 | 4.0 |

## repos/joomla-cms/libraries/src/MVC/Controller/BaseController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Controller\BaseController::authorise() | 499 | 3.0 Use \JAccess instead. |

## repos/joomla-cms/libraries/src/MVC/Controller/FormController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Controller\FormController::editAssociations() | 989 | 5.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/AdminModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\AdminModel::editAssociations() | 1623 | 5.0 It is handled by regular save method now. |

## repos/joomla-cms/libraries/src/MVC/Model/BaseDatabaseModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\Model\BaseDatabaseModel::$factory | 81 | 4.0 This is a temporary property that will be moved into a trait in Joomla 4 |

## repos/joomla-cms/libraries/src/MVC/View/HtmlView.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\MVC\View\HtmlView::assign() | 278 | 3.0 Use native PHP syntax. |
| \Joomla\CMS\MVC\View\HtmlView::assignRef() | 355 | 3.0 Use native PHP syntax. |
| \Joomla\CMS\MVC\View\HtmlView::setEscape() | 597 | 3.0 Override \JViewLegacy::escape() instead. |
| \Joomla\CMS\MVC\View\HtmlView::$\_escape | 117 | 3.0 |

## repos/joomla-cms/libraries/src/Object/CMSObject.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Object\CMSObject | 22 | 4.0 |
| \Joomla\CMS\Object\CMSObject::\_\_toString() | 58 | 12.3 Classes should provide their own \_\_toString() implementation. |
| \Joomla\CMS\Object\CMSObject::getError() | 143 | 12.3 JError has been deprecated |
| \Joomla\CMS\Object\CMSObject::getErrors() | 179 | 12.3 JError has been deprecated |
| \Joomla\CMS\Object\CMSObject::setError() | 240 | 12.3 JError has been deprecated |
| \Joomla\CMS\Object\CMSObject::$\_errors | 32 | 12.3 JError has been deprecated |

## repos/joomla-cms/libraries/src/Pagination/Pagination.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Pagination\Pagination::set() | 877 | 4.0 Access the properties directly. |
| \Joomla\CMS\Pagination\Pagination::get() | 902 | 4.0 Access the properties directly. |

## repos/joomla-cms/libraries/src/Pathway/Pathway.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Pathway\Pathway::\_makeItem() | 220 | 4.0 Use makeItem() instead |
| \Joomla\CMS\Pathway\Pathway::$\_pathway | 29 | 4.0 Will convert to $pathway |
| \Joomla\CMS\Pathway\Pathway::$\_count | 36 | 4.0 Will convert to $count |

## repos/joomla-cms/libraries/src/Plugin/PluginHelper.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Plugin\PluginHelper::\_import() | 211 | 4.0 Use PluginHelper::import() instead |
| \Joomla\CMS\Plugin\PluginHelper::\_load() | 299 | 4.0 Use PluginHelper::load() instead |

## repos/joomla-cms/libraries/src/Profiler/Profiler.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Profiler\Profiler::getmicrotime() | 147 | 4.0 - Use PHP's microtime(1) |
| \Joomla\CMS\Profiler\Profiler::getMemory() | 163 | 4.0 - Use PHP's native memory\_get\_usage() |

## repos/joomla-cms/libraries/src/Router/Router.php 21

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Router\Router::getMode() | 300 | 4.0 |
| \Joomla\CMS\Router\Router::setMode() | 315 | 4.0 |
| \Joomla\CMS\Router\Router::\_parseRawRoute() | 450 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\Router::parseRawRoute() | 465 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\Router::\_parseSefRoute() | 480 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\Router::parseSefRoute() | 495 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\Router::\_buildRawRoute() | 510 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\Router::buildRawRoute() | 525 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\Router::\_buildSefRoute() | 539 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\Router::buildSefRoute() | 554 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\Router::\_processParseRules() | 568 | 4.0 Use processParseRules() instead |
| \Joomla\CMS\Router\Router::\_processBuildRules() | 612 | 4.0 Use processBuildRules() instead |
| \Joomla\CMS\Router\Router::\_createUri() | 653 | 4.0 Use createUri() instead |
| \Joomla\CMS\Router\Router::\_encodeSegments() | 718 | 4.0 This should be performed in the component router instead |
| \Joomla\CMS\Router\Router::encodeSegments() | 733 | 4.0 This should be performed in the component router instead |
| \Joomla\CMS\Router\Router::\_decodeSegments() | 756 | 4.0 This should be performed in the component router instead |
| \Joomla\CMS\Router\Router::decodeSegments() | 771 | 4.0 This should be performed in the component router instead |
| \Joomla\CMS\Router\Router::$mode | 55 | 4.0 |
| \Joomla\CMS\Router\Router::$\_mode | 64 | 4.0 |
| \Joomla\CMS\Router\Router::$\_vars | 81 | 4.0 Will convert to $vars |
| \Joomla\CMS\Router\Router::$\_rules | 105 | 4.0 Will convert to $rules |

## repos/joomla-cms/libraries/src/Router/SiteRouter.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Router\SiteRouter::parseRawRoute() | 202 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\SiteRouter::parseSefRoute() | 273 | 4.0 Attach your logic as rule to the main parse stage |
| \Joomla\CMS\Router\SiteRouter::buildRawRoute() | 469 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\SiteRouter::\_buildSefRoute() | 500 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\SiteRouter::buildSefRoute() | 515 | 4.0 Attach your logic as rule to the main build stage |
| \Joomla\CMS\Router\SiteRouter::processBuildRules() | 630 | 4.0 The special logic should be implemented as rule |

## repos/joomla-cms/libraries/src/Table/Content.php 9

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Content | 27 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::\_\_construct() | 37 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::\_getAssetName() | 58 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::\_getAssetTitle() | 73 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::\_getAssetParentId() | 89 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::bind() | 135 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::check() | 185 | 3.1.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::getDefaultAssetValues() | 294 | 3.4 Class will be removed upon completion of transition to UCM |
| \Joomla\CMS\Table\Content::store() | 318 | 3.1.4 Class will be removed upon completion of transition to UCM |

## repos/joomla-cms/libraries/src/Table/Observer/ContentHistory.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Observer\ContentHistory::$\_myTableForPregreplaceOnly | 45 | Never use this |

## repos/joomla-cms/libraries/src/Table/Observer/Tags.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Table\Observer\Tags::$\_myTableForPregreplaceOnly | 65 | Never use this |

## repos/joomla-cms/libraries/src/Updater/Updater.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Updater\Updater::update() | 199 | 4.0 No replacement. |

## repos/joomla-cms/libraries/src/Uri/Uri.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Uri\Uri::setPath() | 259 | 4.0 Use {@link \Joomla\Uri\Uri::setPath()} |
| \Joomla\CMS\Uri\Uri::\_cleanPath() | 339 | 4.0 Use {@link \Joomla\Uri\Uri::cleanPath()} instead |

## repos/joomla-cms/libraries/src/User/User.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\User::getParameters() | 529 | 4.0 - Instead use User::getParam() |
| \Joomla\CMS\User\User::$userHelper | 217 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |

## repos/joomla-cms/libraries/src/User/UserHelper.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\UserHelper::getCryptedPassword() | 430 | 4.0 |
| \Joomla\CMS\User\UserHelper::getSalt() | 551 | 4.0 |
| \Joomla\CMS\User\UserHelper::invalidateCookie() | 751 | 4.0 This is handled in the authentication plugin itself. The 'invalid' column in the db should be removed as well |
| \Joomla\CMS\User\UserHelper::clearExpiredTokens() | 779 | 4.0 This is handled in the authentication plugin itself |
| \Joomla\CMS\User\UserHelper::getRememberCookieData() | 799 | 4.0 This is handled in the authentication plugin itself |

## repos/joomla-cms/libraries/src/User/UserWrapper.php 17

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\User\UserWrapper | 19 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::addUserToGroup() | 34 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::getUserGroups() | 50 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::removeUserFromGroup() | 67 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::setUserGroups() | 84 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::getProfile() | 100 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::activateUser() | 116 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::getUserId() | 132 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::hashPassword() | 150 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::verifyPassword() | 168 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::getCryptedPassword() | 192 | 4.0 |
| \Joomla\CMS\User\UserWrapper::getSalt() | 214 | 4.0 |
| \Joomla\CMS\User\UserWrapper::genRandomPassword() | 230 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |
| \Joomla\CMS\User\UserWrapper::invalidateCookie() | 247 | 4.0 |
| \Joomla\CMS\User\UserWrapper::clearExpiredTokens() | 261 | 4.0 |
| \Joomla\CMS\User\UserWrapper::getRememberCookieData() | 275 | 4.0 |
| \Joomla\CMS\User\UserWrapper::getShortHashedUserAgent() | 289 | 4.0 Use `Joomla\CMS\User\UserHelper` directly |

## repos/joomla-cms/libraries/src/Version.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\CMS\Version::\_\_get() | 158 | 4.0 Access the constants directly |
| \Joomla\CMS\Version::RELEASE | 72 | 4.0 Use separated version constants instead |
| \Joomla\CMS\Version::DEV\_LEVEL | 81 | 4.0 Use separated version constants instead |
| \Joomla\CMS\Version::BUILD | 98 | 4.0 |

# Joomla! Framework 2.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/framework-2/deprecated.html

---

# Deprecated Elements

## repos/application/src/AbstractWebApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\AbstractWebApplication::\_\_get() | 226 | 3.0 This is a B/C proxy for deprecated read accesses |

## repos/database/src/DatabaseDriver.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseDriver::getInstance() | 292 | 3.0 Use DatabaseFactory::getDriver() instead |
| \Joomla\Database\DatabaseDriver::\_\_get() | 462 | 3.0 This is a B/C proxy since $this->name was previously public |
| \Joomla\Database\DatabaseDriver::quoteNameStr() | 1683 | 2.0 Use quoteNameString instead |
| \Joomla\Database\DatabaseDriver::$instances | 190 | 3.0 Singleton storage will no longer be supported. |

## repos/database/src/DatabaseQuery.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseQuery::castAsChar() | 608 | 3.0 Use $query->castAs('CHAR', $value) |
| \Joomla\Database\DatabaseQuery::dump() | 918 | 3.0 Deprecated without replacement |

## repos/database/src/Query/LimitableInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Query\LimitableInterface | 27 | 3.0 Capabilities will be required in Joomla\Database\QueryInterface |

## repos/database/src/Query/PreparableInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Query\PreparableInterface | 30 | 3.0 Capabilities will be required in Joomla\Database\QueryInterface |

## repos/di/src/Container.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\DI\Container::exists() | 135 | 3.0 Use ContainerInterface::has() instead |

## repos/event/src/Dispatcher.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Dispatcher::setEvent() | 45 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::addEvent() | 69 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::hasEvent() | 96 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvent() | 124 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::removeEvent() | 151 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvents() | 181 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::clearEvents() | 201 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::countEvents() | 224 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::triggerEvent() | 503 | 3.0 Use dispatch() instead. |
| \Joomla\Event\Dispatcher::getDefaultEvent() | 531 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::$events | 25 | 3.0 Default event objects will no longer be supported |

## repos/event/src/Event.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Event::stop() | 102 | 3.0 Use stopPropogation instead |

## repos/filesystem/src/Support/StringController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filesystem\Support\StringController::\_getArray() | 34 | 2.0 Use `getArray` instead. |

## repos/filter/src/InputFilter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filter\InputFilter::decode() | 683 | This method will be removed once support for PHP 5.3 is discontinued. |

## repos/github/src/Package/Orgs/Teams.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Orgs\Teams::isMember() | 209 | Use getTeamMembership() instead |
| \Joomla\Github\Package\Orgs\Teams::addMember() | 245 | Use addTeamMembership() instead |
| \Joomla\Github\Package\Orgs\Teams::removeMember() | 271 | Use removeTeamMembership() instead |

## repos/github/src/Package/Repositories/Downloads.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Repositories\Downloads | 25 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::getList() | 38 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::get() | 61 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::create() | 91 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::upload() | 141 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::delete() | 158 | The Releases API should be used instead |

## repos/github/src/Package/Search.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Search::issues() | 36 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::repositories() | 69 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::users() | 101 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::email() | 130 | The legacy API is deprecated |

## repos/http/src/Response.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Http\Response::\_\_get() | 34 | 3.0 Access data via the PSR-7 ResponseInterface instead |

## repos/language/src/Language.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\Language::\_() | 214 | 3.0 Use translate instead |
| \Joomla\Language\Language::exists() | 355 | 3.0 Use LanguageHelper::exists() instead |
| \Joomla\Language\Language::getMetadata() | 783 | 3.0 Use LanguageHelper::getMetadata() instead |
| \Joomla\Language\Language::getKnownLanguages() | 807 | 3.0 Use LanguageHelper::getKnownLanguages() instead |
| \Joomla\Language\Language::getLanguagePath() | 832 | 3.0 Use LanguageHelper::getLanguagePath() instead |
| \Joomla\Language\Language::parseLanguageFiles() | 937 | 3.0 Use LanguageHelper::parseLanguageFiles() instead |
| \Joomla\Language\Language::parseXmlLanguageFile() | 961 | 3.0 Use LanguageHelper::parseXMLLanguageFile() instead |

## repos/registry/src/Registry.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Registry\Registry::set() | 462 | The $separator parameter will be removed in version 4. |
| \Joomla\Registry\Registry::\_\_get() | 854 | 3.0 This is a B/C proxy for deprecated read accesses |
| \Joomla\Registry\Registry::\_\_set() | 905 | 3.0 This is a B/C proxy for deprecated read accesses |

## repos/string/src/Inflector.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\String\Inflector::addWord() | 112 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::addPluraliseRule() | 168 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::addSingulariseRule() | 193 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::getInstance() | 218 | 3.0 Use static methods without a class instance instead. |
| \Joomla\String\Inflector::toPlural() | 292 | 3.0 Use Doctrine\Common\Inflector\Inflector::pluralize() instead. |
| \Joomla\String\Inflector::toSingular() | 315 | 3.0 Use Doctrine\Common\Inflector\Inflector::singularize() instead. |
| \Joomla\String\Inflector::$instance | 29 | 3.0 |

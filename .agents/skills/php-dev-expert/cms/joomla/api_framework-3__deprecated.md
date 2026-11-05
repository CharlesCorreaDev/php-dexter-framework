# Joomla! Framework 3.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/framework-3/deprecated.html

---

# Deprecated Elements

## repos/application/src/AbstractWebApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\AbstractWebApplication::\_\_get() | 226 | 3.0 This is a B/C proxy for deprecated read accesses |

## repos/database/src/DatabaseDriver.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseDriver::getInstance() | 289 | 3.0 Use DatabaseFactory::getDriver() instead |
| \Joomla\Database\DatabaseDriver::\_\_get() | 437 | 3.0 This is a B/C proxy since $this->name was previously public |
| \Joomla\Database\DatabaseDriver::quoteNameStr() | 1592 | 2.0 Use quoteNameString instead |
| \Joomla\Database\DatabaseDriver::$instances | 191 | 3.0 Singleton storage will no longer be supported. |

## repos/database/src/DatabaseQuery.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseQuery::castAsChar() | 576 | 3.0 Use $query->castAs('CHAR', $value) |
| \Joomla\Database\DatabaseQuery::dump() | 879 | 3.0 Deprecated without replacement |

## repos/database/src/Query/LimitableInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Query\LimitableInterface | 30 | 3.0 Capabilities will be required in Joomla\Database\QueryInterface |

## repos/database/src/Query/PreparableInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Query\PreparableInterface | 33 | 3.0 Capabilities will be required in Joomla\Database\QueryInterface |

## repos/di/src/Container.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\DI\Container::exists() | 132 | 3.0 Use ContainerInterface::has() instead |

## repos/event/src/Dispatcher.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Dispatcher::setEvent() | 46 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::addEvent() | 70 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::hasEvent() | 96 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvent() | 123 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::removeEvent() | 149 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvents() | 177 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::clearEvents() | 197 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::countEvents() | 220 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::triggerEvent() | 471 | 3.0 Use dispatch() instead. |
| \Joomla\Event\Dispatcher::getDefaultEvent() | 498 | 3.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::$events | 26 | 3.0 Default event objects will no longer be supported |

## repos/event/src/Event.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Event::stop() | 101 | 3.0 Use stopPropagation instead |

## repos/filesystem/src/Support/StringController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filesystem\Support\StringController::\_getArray() | 35 | 2.0 Use `getArray` instead. |

## repos/filter/src/InputFilter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filter\InputFilter::decode() | 640 | This method will be removed once support for PHP 5.3 is discontinued. |

## repos/github/src/Package/Orgs/Teams.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Orgs\Teams::isMember() | 205 | Use getTeamMembership() instead |
| \Joomla\Github\Package\Orgs\Teams::addMember() | 240 | Use addTeamMembership() instead |
| \Joomla\Github\Package\Orgs\Teams::removeMember() | 266 | Use removeTeamMembership() instead |

## repos/github/src/Package/Repositories/Downloads.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Repositories\Downloads | 26 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::getList() | 39 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::get() | 62 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::create() | 92 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::upload() | 142 | The Releases API should be used instead |
| \Joomla\Github\Package\Repositories\Downloads::delete() | 159 | The Releases API should be used instead |

## repos/github/src/Package/Search.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Search::issues() | 37 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::repositories() | 69 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::users() | 99 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::email() | 127 | The legacy API is deprecated |

## repos/http/src/Response.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Http\Response::\_\_get() | 35 | 3.0 Access data via the PSR-7 ResponseInterface instead |

## repos/language/src/Language.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\Language::\_() | 212 | 3.0 Use translate instead |
| \Joomla\Language\Language::exists() | 340 | 3.0 Use LanguageHelper::exists() instead |
| \Joomla\Language\Language::getMetadata() | 746 | 3.0 Use LanguageHelper::getMetadata() instead |
| \Joomla\Language\Language::getKnownLanguages() | 770 | 3.0 Use LanguageHelper::getKnownLanguages() instead |
| \Joomla\Language\Language::getLanguagePath() | 795 | 3.0 Use LanguageHelper::getLanguagePath() instead |
| \Joomla\Language\Language::parseLanguageFiles() | 899 | 3.0 Use LanguageHelper::parseLanguageFiles() instead |
| \Joomla\Language\Language::parseXmlLanguageFile() | 923 | 3.0 Use LanguageHelper::parseXMLLanguageFile() instead |

## repos/registry/src/Registry.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Registry\Registry::\_\_get() | 852 | 3.0 This is a B/C proxy for deprecated read accesses |
| \Joomla\Registry\Registry::\_\_set() | 903 | 3.0 This is a B/C proxy for deprecated read accesses |

## repos/string/src/Inflector.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\String\Inflector::addWord() | 104 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::addPluraliseRule() | 157 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::addSingulariseRule() | 182 | 3.0 Use Doctrine\Common\Inflector\Inflector::rules() instead. |
| \Joomla\String\Inflector::getInstance() | 207 | 3.0 Use static methods without a class instance instead. |
| \Joomla\String\Inflector::toPlural() | 279 | 3.0 Use Doctrine\Common\Inflector\Inflector::pluralize() instead. |
| \Joomla\String\Inflector::toSingular() | 302 | 3.0 Use Doctrine\Common\Inflector\Inflector::singularize() instead. |
| \Joomla\String\Inflector::$instance | 30 | 3.0 |

# Joomla! Framework 4.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/framework-4/deprecated.html

---

# Deprecated Elements

## repos/database/src/DatabaseDriver.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseDriver::getInstance() | 288 | 3.0 Use DatabaseFactory::getDriver() instead |
| \Joomla\Database\DatabaseDriver::\_\_get() | 436 | 3.0 This is a B/C proxy since $this->name was previously public |
| \Joomla\Database\DatabaseDriver::$instances | 191 | 3.0 Singleton storage will no longer be supported. |

## repos/database/src/DatabaseQuery.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseQuery::dump() | 859 | 3.0 Deprecated without replacement |

## repos/event/src/Dispatcher.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Dispatcher::setEvent() | 46 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::addEvent() | 70 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::hasEvent() | 96 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvent() | 123 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::removeEvent() | 149 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::getEvents() | 177 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::clearEvents() | 197 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::countEvents() | 220 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::triggerEvent() | 471 | 2.0 will be removed in 5.0 Use dispatch() instead. |
| \Joomla\Event\Dispatcher::getDefaultEvent() | 498 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |
| \Joomla\Event\Dispatcher::$events | 26 | 2.0 will be removed in 5.0 Default event objects will no longer be supported |

## repos/event/src/Event.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Event::stop() | 101 | 2.0 will be removed in 5.0 Use stopPropagation instead |

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

## repos/language/src/LanguageFactory.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\LanguageFactory::getStemmer() | 142 | 5.0 Use wamania/php-stemmer instead |

## repos/language/src/Stemmer/Porteren.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\Stemmer\Porteren | 24 | 5.0 Use wamania/php-stemmer instead |

## repos/string/src/Inflector.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\String\Inflector | 22 | 5.0 Use doctrine/inflector package as complete replacement instead. |

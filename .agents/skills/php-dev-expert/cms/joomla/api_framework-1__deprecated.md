# Joomla! Framework 1.x API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/framework-1/deprecated.html

---

# Deprecated Elements

## repos/application/src/AbstractCliApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\AbstractCliApplication | 20 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/AbstractDaemonApplication.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\AbstractDaemonApplication | 23 | 2.0 Deprecated without replacement |

## repos/application/src/Cli/CliInput.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\CliInput | 17 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/CliOutput.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\CliOutput | 19 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/ColorProcessor.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\ColorProcessor | 19 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/ColorStyle.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\ColorStyle | 17 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/Output/Processor/ColorProcessor.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\Output\Processor\ColorProcessor | 20 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/Output/Processor/ProcessorInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\Output\Processor\ProcessorInterface | 17 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/Output/Stdout.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\Output\Stdout | 19 | 2.0 Use the `joomla/console` package instead |

## repos/application/src/Cli/Output/Xml.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Application\Cli\Output\Xml | 19 | 2.0 Use the `joomla/console` package instead |

## repos/database/src/DatabaseDriver.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseDriver::\_\_get() | 477 | 1.4.0 This is a B/C proxy since $this->name was previously public |
| \Joomla\Database\DatabaseDriver::quoteNameStr() | 1573 | 2.0 Use quoteNameString instead |

## repos/database/src/DatabaseFactory.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\DatabaseFactory::getInstance() | 144 | 1.4.0 Instantiate a new factory object as needed |
| \Joomla\Database\DatabaseFactory::setInstance() | 190 | 1.4.0 Instantiate a new factory object as needed |
| \Joomla\Database\DatabaseFactory::$instance | 25 | 1.4.0 Instantiate a new factory object as needed |

## repos/database/src/Oracle/OracleDriver.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Oracle\OracleDriver | 20 | 2.0 Oracle support will be removed. |

## repos/database/src/Oracle/OracleIterator.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Oracle\OracleIterator | 19 | 2.0 Oracle support will be removed. |

## repos/database/src/Oracle/OracleQuery.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Oracle\OracleQuery | 21 | 2.0 Oracle support will be removed. |

## repos/database/src/Postgresql/PostgresqlDriver.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Postgresql\PostgresqlDriver | 26 | 2.0 Use the PDO PostgreSQL driver instead |
| \Joomla\Database\Postgresql\PostgresqlDriver::test() | 258 | 1.1.0 Use isSupported() instead |

## repos/database/src/Postgresql/PostgresqlExporter.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Postgresql\PostgresqlExporter | 19 | 2.0 Use the PDO PostgreSQL driver instead |

## repos/database/src/Postgresql/PostgresqlImporter.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Postgresql\PostgresqlImporter | 19 | 2.0 Use the PDO PostgreSQL driver instead |
| \Joomla\Database\Postgresql\PostgresqlImporter::getIdxLookup() | 487 | 2.0 Use {@link getKeyLookup()} instead |

## repos/database/src/Postgresql/PostgresqlIterator.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Postgresql\PostgresqlIterator | 19 | 2.0 Use the PDO PostgreSQL driver instead |

## repos/database/src/Postgresql/PostgresqlQuery.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Database\Postgresql\PostgresqlQuery | 22 | 2.0 Use the PDO PostgreSQL driver instead |

## repos/di/src/Container.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\DI\Container::exists() | 499 | 3.0 Use ContainerInterface::has() instead |

## repos/di/src/ContainerAwareInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\DI\ContainerAwareInterface::getContainer() | 27 | 2.0 The getter will no longer be part of the interface. |

## repos/event/src/DelegatingDispatcher.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\DelegatingDispatcher | 17 | 2.0 Create your own delegating (decorating) dispatcher as needed. |

## repos/event/src/Dispatcher.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Event\Dispatcher::setListenerFilter() | 78 | 1.1.0 Incorporate a method in your listener object such as `getEvents` to feed into the `setListener` method. |
| \Joomla\Event\Dispatcher::$listenerFilter | 39 | 1.1.0 |

## repos/filesystem/src/Stream/String.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filesystem\Stream\String | 20 | 2.0 Use StringWrapper instead |

## repos/filesystem/src/Support/StringController.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filesystem\Support\StringController::\_getArray() | 34 | 2.0 Use `getArray` instead. |

## repos/filter/src/InputFilter.php 6

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Filter\InputFilter::decode() | 732 | This method will be removed once support for PHP 5.3 is discontinued. |
| \Joomla\Filter\InputFilter::TAGS\_WHITELIST | 30 | 2.0 Use the `InputFilter::ONLY_ALLOW_DEFINED_TAGS` constant instead |
| \Joomla\Filter\InputFilter::TAGS\_BLACKLIST | 39 | 2.0 Use the `InputFilter::ONLY_BLOCK_DEFINED_TAGS` constant instead |
| \Joomla\Filter\InputFilter::ATTR\_WHITELIST | 48 | 2.0 Use the `InputFilter::ONLY_ALLOW_DEFINED_ATTRIBUTES` constant instead |
| \Joomla\Filter\InputFilter::ATTR\_BLACKLIST | 57 | 2.0 Use the `InputFilter::ONLY_BLOCK_DEFINED_ATTRIBUTES` constant instead |
| \Joomla\Filter\InputFilter::$instances | 98 | 2.0 |

## repos/github/src/GithubObject.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\GithubObject | 17 | 2.0 Use AbstractGithubObject instead. |

## repos/github/src/Http.php 5

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Http | 20 | 2.0 Use Joomla\Http\Http instead |
| \Joomla\Github\Http::\_\_construct() | 52 | 2.0 |
| \Joomla\Github\Http::AUTHENTICATION\_NONE | 27 | 2.0 |
| \Joomla\Github\Http::AUTHENTICATION\_BASIC | 34 | 2.0 |
| \Joomla\Github\Http::AUTHENTICATION\_OAUTH | 41 | 2.0 |

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

## repos/github/src/Package/Repositories.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Repositories::getListBranches() | 401 | 2.0 Use Joomla\Github\Package\Repositories\Branches::getList() instead |
| \Joomla\Github\Package\Repositories::getBranch() | 418 | 2.0 Use Joomla\Github\Package\Repositories\Branches::get() instead |

## repos/github/src/Package/Search.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package\Search::issues() | 37 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::repositories() | 70 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::users() | 102 | The legacy API is deprecated |
| \Joomla\Github\Package\Search::email() | 131 | The legacy API is deprecated |

## repos/github/src/Package.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Github\Package | 17 | 2.0 Use AbstractPackage instead. |

## repos/input/src/Cli.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Input\Cli | 19 | 2.0 Use a Symfony\Component\Console\Input\InputInterface implementation when using the `joomla/console` package |

## repos/keychain/src/Keychain.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Keychain\Keychain::deleteValue() | 78 | 2.0 Use `Registry::remove()` instead. |

## repos/language/src/Language.php 22

| Element | Line | Description |
| --- | --- | --- |
| \\_QQ\_ | 18 | 2.0 |
| \Joomla\Language\Language::getInstance() | 302 | 2.0 Use LanguageFactory::getLanguage() instead |
| \Joomla\Language\Language::getTransliterator() | 427 | 2.0 |
| \Joomla\Language\Language::setTransliterator() | 442 | 2.0 The transliterator must be set in a language's localise file. |
| \Joomla\Language\Language::getPluralSuffixesCallback() | 477 | 2.0 |
| \Joomla\Language\Language::setPluralSuffixesCallback() | 492 | 2.0 The plural suffix method must be set in a language's localise file. |
| \Joomla\Language\Language::getIgnoredSearchWords() | 508 | 2.0 |
| \Joomla\Language\Language::getIgnoredSearchWordsCallback() | 526 | 2.0 |
| \Joomla\Language\Language::setIgnoredSearchWordsCallback() | 541 | 2.0 |
| \Joomla\Language\Language::getLowerLimitSearchWord() | 557 | 2.0 |
| \Joomla\Language\Language::getLowerLimitSearchWordCallback() | 575 | 2.0 |
| \Joomla\Language\Language::setLowerLimitSearchWordCallback() | 590 | 2.0 |
| \Joomla\Language\Language::getUpperLimitSearchWord() | 606 | 2.0 |
| \Joomla\Language\Language::getUpperLimitSearchWordCallback() | 624 | 2.0 |
| \Joomla\Language\Language::setUpperLimitSearchWordCallback() | 639 | 2.0 |
| \Joomla\Language\Language::getSearchDisplayedCharactersNumber() | 655 | 2.0 |
| \Joomla\Language\Language::getSearchDisplayedCharactersNumberCallback() | 673 | 2.0 |
| \Joomla\Language\Language::setSearchDisplayedCharactersNumberCallback() | 688 | 2.0 |
| \Joomla\Language\Language::setLanguage() | 1275 | 2.0 |
| \Joomla\Language\Language::$languages | 34 | 2.0 |
| \Joomla\Language\Language::$languageFactory | 43 | 2.0 |
| \Joomla\Language\Language::$strings | 116 | 2.0 |

## repos/language/src/LanguageFactory.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\LanguageFactory::$loadedClasses | 33 | 2.0 Singleton object storage will no longer be supported |

## repos/language/src/Stemmer.php 4

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\Stemmer | 19 | 2.0 Stemmer objects should directly implement the StemmerInterface |
| \Joomla\Language\Stemmer::getInstance() | 50 | 2.0 Use LanguageFactory::getStemmer() instead |
| \Joomla\Language\Stemmer::$cache | 28 | 2.0 Subclasses should implement this property directly |
| \Joomla\Language\Stemmer::$instances | 37 | 2.0 |

## repos/language/src/Text.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Language\Text::\_() | 80 | 2.0 Will be replaced with a `translate` method. |
| \Joomla\Language\Text::script() | 335 | 2.0 Deprecated without replacement |
| \Joomla\Language\Text::$strings | 25 | 2.0 |

## repos/model/src/AbstractDatabaseModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Model\AbstractDatabaseModel | 20 | 2.0 Implement the model interfaces directly; the concrete implementations are provided as traits |

## repos/model/src/AbstractModel.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Model\AbstractModel | 19 | 2.0 Implement the model interfaces directly; the concrete implementations are provided as traits |

## repos/model/src/ModelInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Model\ModelInterface | 19 | 2.0 Use the StatefulModelInterface instead |

## repos/registry/src/AbstractRegistryFormat.php 3

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Registry\AbstractRegistryFormat | 17 | 2.0 Format objects should directly implement the FormatInterface |
| \Joomla\Registry\AbstractRegistryFormat::getInstance() | 39 | 2.0 Use Factory::getFormat() instead |
| \Joomla\Registry\AbstractRegistryFormat::$instances | 24 | 2.0 Object caching will no longer be supported |

## repos/registry/src/Factory.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Registry\Factory::$formatInstances | 25 | 2.0 Object caching will no longer be supported |

## repos/registry/src/Registry.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Registry\Registry::getInstance() | 270 | 2.0 Instantiate a new Registry instance instead |
| \Joomla\Registry\Registry::$instances | 43 | 2.0 Object caching will no longer be supported |

## repos/router/src/RestRouter.php 8

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Router\RestRouter | 17 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::isMethodInPostRequest() | 53 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::setHttpMethodSuffix() | 69 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::setMethodInPostRequest() | 86 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::fetchControllerSuffix() | 100 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::parseRoute() | 135 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::$methodInPostRequest | 26 | 2.0 Use the base Router class instead |
| \Joomla\Router\RestRouter::$suffixMap | 35 | 2.0 Use the base Router class instead |

## repos/router/src/Router.php 10

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Router\Router::addMap() | 81 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::addMaps() | 153 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::getController() | 175 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::setControllerPrefix() | 194 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::setDefaultController() | 211 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::fetchController() | 229 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::$controllerPrefix | 28 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::$default | 37 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::$input | 46 | 2.0 Deprecated without replacement |
| \Joomla\Router\Router::$maps | 56 | 2.0 Deprecated without replacement |

## repos/string/src/String.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\String\String | 19 | 2.0 Use StringHelper instead |

## repos/test/src/TestConfig.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Test\Config | 17 | 2.0 Deprecated without replacement |

## repos/test/src/TestDatabase.php 11

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Test\TestDatabase | 20 | 2.0 Deprecated due to the deprecation of `phpunit/dbunit` |
| \Joomla\Test\TestDatabase::setUpBeforeClass() | 39 | 2.0 |
| \Joomla\Test\TestDatabase::tearDownAfterClass() | 82 | 2.0 |
| \Joomla\Test\TestDatabase::assignMockCallbacks() | 103 | 2.0 Use TestHelper::assignMockCallbacks instead |
| \Joomla\Test\TestDatabase::assignMockReturns() | 121 | 2.0 Use TestHelper::assignMockReturns instead |
| \Joomla\Test\TestDatabase::getConnection() | 134 | 2.0 |
| \Joomla\Test\TestDatabase::getDataSet() | 150 | 2.0 |
| \Joomla\Test\TestDatabase::getSetUpOperation() | 163 | 2.0 |
| \Joomla\Test\TestDatabase::getTearDownOperation() | 182 | 2.0 |
| \Joomla\Test\TestDatabase::setUp() | 198 | 2.0 |
| \Joomla\Test\TestDatabase::$driver | 29 | 2.0 |

## repos/test/src/TestHelper.php 2

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Test\TestHelper::assignMockCallbacks() | 34 | 2.0 Manage callbacks within your test cases |
| \Joomla\Test\TestHelper::assignMockReturns() | 68 | 2.0 Manage returns within your test cases |

## repos/test/src/WebInspector.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\Test\WebInspector | 19 | 2.0 Deprecated without replacement |

## repos/view/src/AbstractHtmlView.php 7

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\View\AbstractHtmlView | 20 | 2.0 Will become BaseHtmlView in 2.0 |
| \Joomla\View\AbstractHtmlView::escape() | 85 | 2.0 Interface method is deprecated without replacement. |
| \Joomla\View\AbstractHtmlView::getPath() | 114 | 2.0 In 2.0, a RendererInterface object will be required which will manage paths. |
| \Joomla\View\AbstractHtmlView::getPaths() | 133 | 2.0 In 2.0, a RendererInterface object will be required which will manage paths. |
| \Joomla\View\AbstractHtmlView::setPaths() | 195 | 2.0 In 2.0, a RendererInterface object will be required which will manage paths. |
| \Joomla\View\AbstractHtmlView::loadPaths() | 210 | 2.0 In 2.0, a RendererInterface object will be required which will manage paths. |
| \Joomla\View\AbstractHtmlView::$paths | 37 | 2.0 In 2.0, a RendererInterface object will be required which will manage paths. |

## repos/view/src/AbstractView.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\View\AbstractView::escape() | 52 | 2.0 Interface method is deprecated without replacement. |

## repos/view/src/ViewInterface.php 1

| Element | Line | Description |
| --- | --- | --- |
| \Joomla\View\ViewInterface::escape() | 28 | 2.0 Output escaping will no longer be required by the interface. |

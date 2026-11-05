# Joomla! CMS 2.5 API » Deprecated elements

> **Fonte / Source:** https://api.joomla.org/cms-2.5/deprecated.html

---

# Deprecated Elements

## joomla/access/access.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JAccess::getActions() | 455 | 12.3 Use JAccess::getActionsFromFile or JAccess::getActionsFromData instead. |

## joomla/access/rule.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JRule | 186 | 12.3 |
| \JRule::\_\_construct() | 199 | 12.3 |

## joomla/access/rules.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JRules | 229 | 12.3 |
| \JRules::\_\_construct() | 242 | 12.3 |

## joomla/application/cli.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JCli | 398 | 12.3 |

## joomla/application/component/controller.php 5

| Element | Line | Description |
| --- | --- | --- |
| \JController::authorize() | 498 | 12.1 Use JAuthorise |
| \JController::authorise() | 515 | 12.3 |
| \JController::setAccessControl() | 1072 | 12.1 Use JAccess |
| \JController::\_acoSection | 31 | 12.1 |
| \JController::\_acoSectionValue | 40 | 12.1 |

## joomla/application/helper.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JApplicationHelper::getPath() | 170 | 12.1 |
| \JApplicationHelper::parseXMLInstallFile() | 295 | 13.3 Use JInstaller::parseXMLInstallFile instead. |
| \JApplicationHelper::\_checkPath() | 397 | 12.1 |

## joomla/application/router.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JRouter::\_mode | 42 | use $mode declare as private |
| \JRouter::\_vars | 59 | use $vars declare as private |
| \JRouter::\_rules | 79 | use $rules declare as private |

## joomla/application/web.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JWeb | 1208 | 12.3 |

## joomla/base/node.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JNode | 21 | 12.3 |

## joomla/base/object.php 6

| Element | Line | Description |
| --- | --- | --- |
| \JObject::\_\_toString() | 58 | 12.3 Classes should provide their own \_\_toString() implementation. |
| \JObject::getError() | 140 | 12.3 JError has been deprecated |
| \JObject::getErrors() | 176 | 12.3 JError has been deprecated |
| \JObject::setError() | 235 | 12.3 JError has been deprecated |
| \JObject::toString() | 249 | 12.1 Use magic method \_\_toString() |
| \JObject::\_errors | 32 | 12.3 JError has been deprecated |

## joomla/base/observable.php 9

| Element | Line | Description |
| --- | --- | --- |
| \JObservable | 21 | 12.3 |
| \JObservable::\_\_construct() | 57 | 12.3 |
| \JObservable::getState() | 70 | 12.3 |
| \JObservable::notify() | 83 | 12.3 |
| \JObservable::attach() | 104 | 12.3 |
| \JObservable::detach() | 173 | 12.3 |
| \JObservable::\_observers | 30 | 12.3 |
| \JObservable::\_state | 39 | 12.3 |
| \JObservable::\_methods | 48 | 12.3 |

## joomla/base/observer.php 4

| Element | Line | Description |
| --- | --- | --- |
| \JObserver | 21 | 12.3 |
| \JObserver::\_\_construct() | 40 | 12.3 |
| \JObserver::update() | 59 | 12.3 |
| \JObserver::\_subject | 30 | 12.3 |

## joomla/base/tree.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JTree | 23 | 12.3 |

## joomla/database/database.php 18

| Element | Line | Description |
| --- | --- | --- |
| \JDatabase::addQuoted() | 476 | 12.1 |
| \JDatabase::getLimit() | 647 | 3.0 Required for SQLSRV support for 2.5 only |
| \JDatabase::getOffset() | 707 | 3.0 Required for SQLSRV support for 2.5 only |
| \JDatabase::hasUTF() | 813 | 12.1 |
| \JDatabase::explain() | 1719 | 12.1 |
| \JDatabase::getErrorMsg() | 1731 | 12.1 |
| \JDatabase::getErrorNum() | 1754 | 12.1 |
| \JDatabase::getEscaped() | 1773 | 12.1 |
| \JDatabase::getTableFields() | 1793 | 12.1 |
| \JDatabase::getTicker() | 1818 | 12.1 |
| \JDatabase::isQuoted() | 1836 | 12.1 |
| \JDatabase::loadResultArray() | 1863 | 12.1 |
| \JDatabase::queryBatch() | 1901 | 12.1 |
| \JDatabase::stderr() | 1913 | 12.1 |
| \JDatabase::errorNum | 139 | 12.1 |
| \JDatabase::errorMsg | 146 | 12.1 |
| \JDatabase::hasQuoted | 153 | 12.1 |
| \JDatabase::quoted | 160 | 12.1 |

## joomla/database/database/mysql.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JDatabaseMySQL::hasUTF() | 448 | 12.1 |
| \JDatabaseMySQL::explain() | 737 | 12.1 |
| \JDatabaseMySQL::queryBatch() | 799 | 12.1 |

## joomla/database/database/mysqli.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JDatabaseMySQLi::hasUTF() | 313 | 12.1 |
| \JDatabaseMySQLi::queryBatch() | 526 | 12.1 |

## joomla/database/database/sqlsrv.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JDatabaseSQLSrv::explain() | 961 | 12.1 |
| \JDatabaseSQLSrv::queryBatch() | 1029 | 12.1 |

## joomla/database/exception.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JDatabaseException | 20 | 12.3 Use semantic exceptions instead |

## joomla/database/table.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JTable::canDelete() | 1383 | 12.1 |
| \JTable::toXML() | 1469 | 12.1 |

## joomla/database/table/content.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JTableContent::toXML() | 375 | 12.1 |

## joomla/environment/browser.php 11

| Element | Line | Description |
| --- | --- | --- |
| \JBrowser | 26 | This API may be changed in the near future and should not be considered stable |
| \JBrowser::\_setQuirk() | 900 | 12.1 This function will be dropped without replacement |
| \JBrowser::setQuirk() | 916 | 12.1 This function will be dropped without replacement |
| \JBrowser::hasQuirk() | 932 | 12.1 This function will be dropped without replacement |
| \JBrowser::getQuirk() | 948 | 12.1 This function will be dropped without replacement |
| \JBrowser::\_setFeature() | 965 | 12.1 This function will be dropped without replacement |
| \JBrowser::setFeature() | 981 | 12.1 This function will be dropped without replacement |
| \JBrowser::hasFeature() | 997 | 12.1 This function will be dropped without replacement |
| \JBrowser::getFeature() | 1013 | 12.1 This function will be dropped without replacement |
| \JBrowser::\_features | 141 | 12.1 This variable will be dropped without replacement |
| \JBrowser::\_quirks | 166 | 12.1 This variable will be dropped without replacement |

## joomla/environment/request.php 18

| Element | Line | Description |
| --- | --- | --- |
| \JRequest | 38 | 12.1 Get the JInput object from the application instead |
| \JRequest::getURI() | 49 | 12.1 |
| \JRequest::getMethod() | 64 | 12.1 |
| \JRequest::getVar() | 101 | 12.1 Use JInput::Get |
| \JRequest::getInt() | 195 | 12.1 |
| \JRequest::getUInt() | 216 | 12.1 |
| \JRequest::getFloat() | 238 | 12.1 |
| \JRequest::getBool() | 259 | 12.1 |
| \JRequest::getWord() | 281 | 12.1 |
| \JRequest::getCmd() | 304 | 12.1 |
| \JRequest::getString() | 327 | 12.1 |
| \JRequest::setVar() | 347 | 12.1 |
| \JRequest::get() | 426 | 12.1 User JInput::get |
| \JRequest::set() | 490 | 12.1 Use JInput::Set |
| \JRequest::checkToken() | 510 | 12.1 Use JSession::checkToken() instead. |
| \JRequest::clean() | 544 | 12.1 |
| \JRequest::\_cleanVar() | 607 | 12.1 |
| \JRequest::\_stripSlashesRecursive() | 647 | 12.1 |

## joomla/error/error.php 26

| Element | Line | Description |
| --- | --- | --- |
| \JError | 34 | 12.1 Use PHP Exception |
| \JError::isError() | 74 | 12.1 |
| \JError::getError() | 93 | 12.1 |
| \JError::getErrors() | 122 | 12.1 |
| \JError::addToStack() | 140 | 12.1 |
| \JError::raise() | 167 | 12.1 Use PHP Exception |
| \JError::throwError() | 190 | 12.1 Use PHP Exception |
| \JError::raiseError() | 246 | 12.1 Use PHP Exception |
| \JError::raiseWarning() | 271 | 12.1 Use PHP Exception |
| \JError::raiseNotice() | 295 | 12.1 Use PHP Exception |
| \JError::getErrorHandling() | 314 | 12.1 Use PHP Exception |
| \JError::setErrorHandling() | 349 | 12.1 Use PHP Exception |
| \JError::attachHandler() | 420 | 12.1 |
| \JError::detachHandler() | 437 | 12.1 |
| \JError::registerErrorLevel() | 462 | 12.1 |
| \JError::translateErrorLevel() | 490 | 12.1 |
| \JError::handleIgnore() | 516 | 12.1 |
| \JError::handleEcho() | 537 | 12.1 |
| \JError::handleVerbose() | 611 | 12.1 |
| \JError::handleDie() | 658 | 12.1 |
| \JError::handleMessage() | 700 | 12.1 |
| \JError::handleLog() | 725 | 12.1 |
| \JError::handleCallback() | 760 | 12.1 |
| \JError::customErrorPage() | 778 | 12.1 |
| \JError::customErrorHandler() | 842 | 12.1 |
| \JError::renderBacktrace() | 860 | 12.1 |

## joomla/error/exception.php 11

| Element | Line | Description |
| --- | --- | --- |
| \JException | 20 | 12.1 |
| \JException::\_\_construct() | 115 | 12.1 |
| \JException::\_\_toString() | 181 | 12.1 |
| \JException::toString() | 194 | 12.1 |
| \JException::get() | 211 | 12.1 |
| \JException::getProperties() | 231 | 12.1 |
| \JException::getError() | 259 | 12.1 |
| \JException::getErrors() | 298 | 12.1 |
| \JException::set() | 318 | 12.1 |
| \JException::setProperties() | 339 | 12.1 |
| \JException::setError() | 371 | 12.1 |

## joomla/factory.php 7

| Element | Line | Description |
| --- | --- | --- |
| \JFactory::getXMLParser() | 384 | 12.1 Use JXMLElement instead. |
| \JFactory::\_createConfig() | 573 | 12.3 |
| \JFactory::\_createSession() | 631 | 12.3 |
| \JFactory::\_createDbo() | 674 | 12.3 |
| \JFactory::\_createMailer() | 735 | 12.3 |
| \JFactory::\_createLanguage() | 798 | 12.3 |
| \JFactory::\_createDocument() | 832 | 12.3 |

## joomla/form/fields/editors.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JFormFieldEditors | 24 | 21.1 Use JFormFieldPlugins instead (with folder="editors") |

## joomla/html/html.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JHtml::\_includeRelativeFiles() | 289 | 12.1 |
| \JHtml::core() | 659 | 12.1 Use JHtml::\_('behavior.framework'); instead. |

## joomla/html/html/behavior.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JHtmlBehavior::mootools() | 78 | 12.1 |

## joomla/html/html/grid.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JHtmlGrid::access() | 139 | 12.1 |

## joomla/html/html/image.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JHtmlImage::site() | 41 | 12.1 |
| \JHtmlImage::administrator() | 128 | 12.1 |

## joomla/html/html/list.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JHtmlList::accesslevel() | 33 | 12.1 Use JHtml::\_('access.assetgrouplist', 'access', $selected) instead |
| \JHtmlList::specificordering() | 160 | 12.1 Use JHtml::\_('list.ordering') instead |
| \JHtmlList::category() | 351 | 12.1 Use JHtmlCategory instead |

## joomla/html/html/select.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JHtmlSelect::optgroup() | 328 | 12.1 Use JHtmlSelect::groupedList() |

## joomla/html/pane.php 20

| Element | Line | Description |
| --- | --- | --- |
| \JPane | 20 | 12.1 Use JHtml::\_ static helpers |
| \JPane::getInstance() | 36 | 12.1 |
| \JPane::startPane() | 58 | 12.1 |
| \JPane::endPane() | 69 | 12.1 |
| \JPane::startPanel() | 82 | 12.1 |
| \JPane::endPanel() | 92 | 12.1 |
| \JPane::\_loadBehavior() | 102 | 12.1 |
| \JPaneTabs | 113 | Use JHtml::\_ static helpers |
| \JPaneTabs::startPane() | 149 | 12.1 |
| \JPaneTabs::endPane() | 167 | 12.1 |
| \JPaneTabs::startPanel() | 187 | 12.1 |
| \JPaneTabs::endPanel() | 204 | 12.1 |
| \JPaneTabs::\_loadBehavior() | 222 | 12.1 |
| \JPaneSliders | 265 | Use JHtml::\_ static helpers |
| \JPaneSliders::\_\_construct() | 276 | 12.1 |
| \JPaneSliders::startPane() | 303 | 12.1 |
| \JPaneSliders::endPane() | 320 | 12.1 |
| \JPaneSliders::startPanel() | 340 | 12.1 |
| \JPaneSliders::endPanel() | 358 | 12.1 |
| \JPaneSliders::\_loadBehavior() | 377 | 12.1 |

## joomla/html/parameter.php 14

| Element | Line | Description |
| --- | --- | --- |
| \JParameter | 23 | 12.1 Use JForm instead |
| \JParameter::\_\_construct() | 58 | 12.1 |
| \JParameter::def() | 100 | 12.1 |
| \JParameter::setXML() | 120 | 12.1 |
| \JParameter::bind() | 155 | 12.1 |
| \JParameter::render() | 186 | 12.1 |
| \JParameter::renderToArray() | 238 | 12.1 |
| \JParameter::getNumParams() | 267 | 12.1 |
| \JParameter::getGroups() | 290 | 12.1 |
| \JParameter::getParams() | 320 | 12.1 |
| \JParameter::getParam() | 352 | 12.1 |
| \JParameter::loadSetupFile() | 388 | 12.1 |
| \JParameter::loadElement() | 427 | 12.1 |
| \JParameter::addElementPath() | 490 | 12.1 |

## joomla/html/parameter/element.php 5

| Element | Line | Description |
| --- | --- | --- |
| \JElement | 22 | 12.1 Use JFormField instead |
| \JElement::getName() | 66 | 12.1 |
| \JElement::render() | 86 | 12.1 |
| \JElement::fetchTooltip() | 121 | 12.1 |
| \JElement::fetchElement() | 153 | 12.1 |

## joomla/html/parameter/element/calendar.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JElementCalendar | 20 | Use JFormFieldCalendar instead. |
| \JElementCalendar::fetchElement() | 45 | 12.1 |
| \JElementCalendar::\_name | 29 | 12.1 |

## joomla/html/parameter/element/category.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementCategory | 20 | Use JFormFieldCategory instead. |
| \JElementCategory::fetchElement() | 42 | 12.1 |

## joomla/html/parameter/element/componentlayouts.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementComponentLayouts | 24 | Use JFormFieldComponentLayouts instead |
| \JElementComponentLayouts::\_getOptions() | 43 | 12.1 |

## joomla/html/parameter/element/contentlanguages.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementContentLanguages | 23 | Use JFormFieldContentLanguage instead. |
| \JElementContentLanguages::\_getOptions() | 43 | 12.1 Use JFormFieldContentLanguage::getOptions instead |

## joomla/html/parameter/element/editors.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementEditors | 20 | Use JFormFieldEditors instead |
| \JElementEditors::fetchElement() | 43 | 12.1 |

## joomla/html/parameter/element/filelist.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementFilelist | 20 | use JFormFieldFileList instead |
| \JElementFilelist::fetchElement() | 42 | 12.1 Use JFormFieldFileList::getOptions instead |

## joomla/html/parameter/element/folderlist.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementFolderlist | 20 | 12.1 Use JFormFieldFolderList instead. |
| \JElementFolderlist::fetchElement() | 42 | 12.1 Use JFormFieldFolderlist::getOptions instead. |

## joomla/html/parameter/element/helpsites.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementHelpsites | 21 | Use JFormFieldHelpsite instead |
| \JElementHelpsites::fetchElement() | 43 | 12.1 Use jFormFieldHelpSites::getOptions instead |

## joomla/html/parameter/element/hidden.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JElementHidden | 20 | 12.1 Use JFormFieldHidden instead. |
| \JElementHidden::fetchElement() | 43 | 12.1 |
| \JElementHidden::fetchTooltip() | 69 | 12.1 |

## joomla/html/parameter/element/imagelist.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementImageList | 20 | 12.1 Use JFormFieldImageList instead. |
| \JElementImageList::fetchElement() | 42 | 12.1 Use JFormFieldImageLst instead. |

## joomla/html/parameter/element/languages.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementLanguages | 21 | 12.1 Use JFormFieldLanguage instead |
| \JElementLanguages::fetchElement() | 44 | 12.1 Use JFormFieldLanguage |

## joomla/html/parameter/element/list.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JElementList | 20 | Use JFormFieldList instead |
| \JElementList::\_getOptions() | 40 | 12.1 Use JFormFieldList::getOptions Instead |
| \JElementList::fetchElement() | 68 | 12.1 |

## joomla/html/parameter/element/menu.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementMenu | 20 | Use JFormMenu instead |
| \JElementMenu::fetchElement() | 42 | 12.1 Use JFormFieldMenu::getOptions instead |

## joomla/html/parameter/element/menuitem.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementMenuItem | 20 | Use JformFieldMenuItem instead |
| \JElementMenuItem::fetchElement() | 43 | 12.1 useJFormFieldMenuItem::getGroups |

## joomla/html/parameter/element/modulelayouts.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementModuleLayouts | 23 | Use JFormFieldModuleLayout instead |
| \JElementModuleLayouts::\_getOptions() | 40 | 12.1 Use JFormFieldModuleLayouts::getInput instead. |

## joomla/html/parameter/element/password.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementPassword | 20 | 12.1 Use JFormFieldPassword instead. |
| \JElementPassword::fetchElement() | 42 | 12.1 Use JFormFieldPasssword::getInput instead. |

## joomla/html/parameter/element/radio.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementRadio | 20 | 12.1 Use JFormFieldRadio instead |
| \JElementRadio::fetchElement() | 42 | 12.1 Use JFormFieldRadio::getInput and JFormFieldRadio::getOptions indsead. |

## joomla/html/parameter/element/spacer.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JElementSpacer | 20 | 12.1 Use JFormFormFieldSpacer instead |
| \JElementSpacer::fetchTooltip() | 43 | 12.1 |
| \JElementSpacer::fetchElement() | 61 | 12.1 Use JFormFieldSpacer::getInput instead. |

## joomla/html/parameter/element/sql.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementSQL | 20 | 12.1 Use JFormFieldSQL Instead. |
| \JElementSQL::fetchElement() | 42 | 12.1 |

## joomla/html/parameter/element/templatestyle.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JElementTemplateStyle | 20 | 12.1 Use JFormFieldTemplateStyle instead |
| \JElementTemplateStyle::fetchElement() | 42 | 12.1 Use JFormFieldTemplateStyle::getGroups Instead |
| \JElementTemplateStyle::\_getSelected() | 70 | 12.1 Use jFormFieldTemplateStyle instead. |

## joomla/html/parameter/element/text.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementText | 20 | 12.1 Use JFormFormFieldText instead |
| \JElementText::fetchElement() | 42 | 12.1 Use JFormFieldText::getInput instead. |

## joomla/html/parameter/element/textarea.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementTextarea | 20 | 12.1 Use JFormFieldTextArea instead |
| \JElementTextarea::fetchElement() | 42 | 12.1 Use JFormFieldTextArea::getInput |

## joomla/html/parameter/element/timezones.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementTimezones | 21 | 12.1 Use JFormFieldTimeZone instead. |
| \JElementTimezones::fetchElement() | 44 | 12.1 Use JFormFieldTimeZone::getGroups instead. |

## joomla/html/parameter/element/usergroup.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JElementUserGroup | 20 | 12.1 Use JFormFieldUserGroup instead. |
| \JElementUserGroup::fetchElement() | 42 | 12.1 Use JFormFieldUserGroup::getInput instead. |

## joomla/installer/installer.php 2

| Element | Line | Description |
| --- | --- | --- |
| \JInstaller::getOverwrite() | 148 | 12.1 Use JInstaller::isOverwrite() |
| \JInstaller::getUpgrade() | 225 | 12.1 Use JInstaller::isUpgrade() |

## joomla/language/language.php 4

| Element | Line | Description |
| --- | --- | --- |
| \JLanguage::getPluralSufficesCallback() | 440 | 12.1 |
| \JLanguage::\_parseLanguageFiles() | 1297 | 12.1 |
| \JLanguage::\_parseXMLLanguageFiles() | 1343 | 12.1 |
| \JLanguage::\_parseXMLLanguageFile() | 1397 | 12.1 |

## joomla/log/log.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JLog::getInstance() | 231 | 12.1 |
| \JLog::addEntry() | 304 | 12.1 Use JLog::add() instead. |
| \JLog::legacy | 113 | 12.1 |

## joomla/log/logexception.php 1

| Element | Line | Description |
| --- | --- | --- |
| \LogException | 20 | 12.3 Use semantic exceptions instead |

## joomla/registry/registry.php 8

| Element | Line | Description |
| --- | --- | --- |
| \JRegistry::loadXML() | 471 | 12.1 Use loadString passing XML as the format instead. |
| \JRegistry::loadINI() | 494 | 12.1 Use loadString passing INI as the format instead. |
| \JRegistry::loadJSON() | 515 | 12.1 Use loadString passing JSON as the format instead. |
| \JRegistry::makeNameSpace() | 536 | 12.1 |
| \JRegistry::getNameSpaces() | 556 | 12.1 |
| \JRegistry::getValue() | 579 | 12.1 |
| \JRegistry::setValue() | 607 | 12.1 |
| \JRegistry::loadSetupFile() | 634 | 12.1 |

## joomla/string/normalise.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JStringNormalize | 20 | 12.1 |

## joomla/updater/updater.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JUpdater::arrayUnique() | 231 | 12.1 |

## joomla/user/authentication.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JAUTHENTICATE\_STATUS\_SUCCESS | 18 | Use JAuthentication::STATUS\_SUCCESS |
| \JAUTHENTICATE\_STATUS\_CANCEL | 24 |  |
| \JAUTHENTICATE\_STATUS\_FAILURE | 30 | Use JAuthentication::STATUS\_FAILURE |

## joomla/user/helper.php 1

| Element | Line | Description |
| --- | --- | --- |
| \JUserHelper::getCryptedPassword() | 395 | 4.0 |

## joomla/user/user.php 3

| Element | Line | Description |
| --- | --- | --- |
| \JUser::authorize() | 340 | 12.1 |
| \JUser::authorisedLevels() | 405 | 12.1 |
| \JUser::usertype | 86 | 12.1 |

## joomla/utilities/date.php 4

| Element | Line | Description |
| --- | --- | --- |
| \JDate::setOffset() | 409 | 12.1 Use setTimezone instead. |
| \JDate::toFormat() | 456 | Use JDate::format() instead. |
| \JDate::toFormat() | 456 | 12.1 Use JDate::format() instead. |
| \JDate::toMySQL() | 527 | 12.1 Use JDate::toSql() |
| \JDate::offsets | 61 | 12.1 |

## joomla/utilities/simplecrypt.php 10

| Element | Line | Description |
| --- | --- | --- |
| \JSimpleCrypt | 20 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_\_construct() | 38 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::decrypt() | 63 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::encrypt() | 81 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_hexToInt() | 105 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_hexToIntArray() | 181 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_charToInt() | 205 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_xorString() | 222 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_intToHex() | 253 | 12.3 Use JCrypt instead. |
| \JSimpleCrypt::\_xorCharString() | 280 | 12.3 Use JCrypt instead. |

## joomla/utilities/simplexml.php 28

| Element | Line | Description |
| --- | --- | --- |
| \JSimpleXML | 76 | 12.1 Use SimpleXML instead |
| \JSimpleXML::\_\_construct() | 111 | 12.1 Use SimpleXML instead. |
| \JSimpleXML::loadString() | 158 | 12.1 Use simpleXML\_load\_string |
| \JSimpleXML::loadFile() | 184 | 12.1 Use simplexml\_load\_file instead |
| \JSimpleXML::importDOM() | 226 | 12.1 use simplexml\_import\_dom instead. |
| \JSimpleXML::getParser() | 243 | 12.1 Use SimpleXMLElement |
| \JSimpleXML::setParser() | 262 | 12.1 Use SimpleXML |
| \JSimpleXML::\_parse() | 283 | 12.1 |
| \JSimpleXML::\_handleError() | 315 | 12.1 |
| \JSimpleXML::\_handleError() | 315 | 12.1 Use PHP Exception |
| \JSimpleXML::\_getStackLocation() | 333 | 12.1 |
| \JSimpleXML::\_startElement() | 360 | 12.1 |
| \JSimpleXML::\_endElement() | 401 | 12.1 |
| \JSimpleXML::\_characterData() | 421 | 12.1 |
| \JSimpleXMLElement | 454 | 12.1 Use SimpleXMLElement instead |
| \JSimpleXMLElement::\_\_construct() | 506 | 12.1 Use SimpleXMLElement |
| \JSimpleXMLElement::name() | 530 | 12.1 |
| \JSimpleXMLElement::attributes() | 549 | 12.1 |
| \JSimpleXMLElement::data() | 571 | 12.1 Use SimpleXMLElement |
| \JSimpleXMLElement::setData() | 590 | 12.1 Use SimpleXMLElement |
| \JSimpleXMLElement::children() | 607 | 12.1 |
| \JSimpleXMLElement::level() | 623 | 12.1 |
| \JSimpleXMLElement::addAttribute() | 642 | 12.1 |
| \JSimpleXMLElement::removeAttribute() | 661 | 12.1 |
| \JSimpleXMLElement::addChild() | 681 | 12.1 |
| \JSimpleXMLElement::removeChild() | 723 | 12.1 |
| \JSimpleXMLElement::getElementByPath() | 758 | 12.1 |
| \JSimpleXMLElement::map() | 804 | 12.1 |
| \JSimpleXMLElement::toString() | 830 | 12.1 |

## joomla/utilities/utility.php 8

| Element | Line | Description |
| --- | --- | --- |
| \JUtility::sendMail() | 42 | 12.1 |
| \JUtility::sendAdminMail() | 71 | 12.1 |
| \JUtility::getHash() | 93 | 12.1 Use JApplication::getHash() instead. |
| \JUtility::getToken() | 112 | 12.1 Use JSession::getFormToken() instead |
| \JUtility::isWinOS() | 160 | 12.1 |
| \JUtility::dump() | 181 | 12.1 |
| \JUtility::array\_unshift\_ref() | 205 | 12.1 |
| \JUtility::return\_bytes() | 227 | 12.1 |

## joomla/utilities/xmlelement.php 5

| Element | Line | Description |
| --- | --- | --- |
| \JXMLElement | 20 | 13.3 Use SimpleXMLElement instead. |
| \JXMLElement::name() | 30 | 13.3 Use SimpleXMLElement::getName() instead. |
| \JXMLElement::data() | 44 | 12.1 |
| \JXMLElement::getAttribute() | 64 | 12.1 |
| \JXMLElement::asFormattedXML() | 84 | 13.3 Use SimpleXMLElement::asXML() instead. |

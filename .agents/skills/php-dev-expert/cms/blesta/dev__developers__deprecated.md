# Deprecated Functionality | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/deprecated

---

Version: 6

On this page

The following represents namespaces, classes, arguments, or other code/functionality that is currently deprecated. Everything listed here is pending removal. We recommend you update any custom integrations you use (i.e. modules, gateways, plugins, API calls, or custom source code) to no longer use deprecated functionality as soon as possible.

Blesta v5

With the release of Blesta v5 most of this functionality has now been removed

## Core[â](#core "Direct link to Core")

### API & Models[â](#api--models "Direct link to API & Models")

Models interface with the data storage system and are callable via the API. They are stored in the */app/models/* directory.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| *Coupons::getTypes* | Coupon types are not used by the system. |  | 4.1.0 | 5.0 |
| *Coupons::validateType* | Coupon types are not used by the system. |  | 4.1.0 | 5.0 |
| *Coupons::validateInclusiveRecurring* | Coupon types are not used by the system. |  | 4.1.0 | 5.0 |
| *CronTasks::delete* | Method arguments have changed, so a new replacement method exists. | *CronTasks::deleteTask* | 4.3.0 | 5.0 |
| *CronTasks::validateKeyUnique* | The method provides no beneficial use. |  | 4.3.0 | 5.0 |
| *CronTasks::validateTaskType* | The method provides no beneficial use. |  | 4.3.0 | 5.0 |
| *Invoices::makeLinesFromItems* | This logic has been abstracted to a different library. | Blesta\Core\Pricing\ libraries | 4.1.0 | 5.0 |
| *Invoices::getItemTotals* | This logic has been abstracted to a different library. | Blesta\Core\Pricing\ libraries | 4.0.0 | 5.0 |
| *Invoices::calcLineTotals* | This logic has been abstracted to a different library. | Blesta\Core\Pricing\ libraries | 4.6.0 | 5.0 |
| *Logs::getCronList* | The *plugin\_dir* property of each retrieved object is deprecated since it is no longer sufficient. | Use the *dir* property along with the *task\_type* property | 4.3.0 | 5.0 |
| *Logs::getLatestCron* | The *plugin\_dir* property of the retrieved object is deprecated since it is no longer sufficient. | Use the *dir* property along with the *task\_type* property | 4.3.0 | 5.0 |
| *Logs::getRunningCronTasks* | The *plugin\_dir* property of each retrieved object is deprecated since it is no longer sufficient. | Use the *dir* property along with the *task\_type* property | 4.3.0 | 5.0 |
| *PackageGroups::add* argument data | Some associative keys passed to the first argument of *PackageGroups::add* have been deprecated.The first argument toÂ *PackageGroups::add* is an array of *$vars*. The keys 'name' and 'description' have been deprecated (i.e. *$vars['name']* and *$vars['description']*). | Pass values for *$vars['names']* and *$vars['descriptions']* instead | 4.5.0 | 5.0 |
| *PackageGroups::edit* argument data | Some associative keys passed to the first argument of *PackageGroups::edit* have been deprecated.The first argument toÂ *PackageGroups::edit* is an array of *$vars*. The keys 'name' and 'description' have been deprecated (i.e. *$vars['name']* and *$vars['description']*). | Pass values for *$vars['names']* and *$vars['descriptions']* instead | 4.5.0 | 5.0 |
| *Packages::add* argument data | Some associative keys passed to the first argument of Packages\*::add\* have been deprecated.The first argument to Packages\*::add\* is an array of *$vars*. The keys 'name', 'description', and 'description\_html' have been deprecated (i.e. *$vars['name'], $vars['description']*, and *$vars['description\_html']*). | Pass values for *$vars['names']* and *$vars['descriptions']* instead | 4.5.0 | 5.0 |
| *Packages::calcLineTotals* | This logic has been abstracted to a different library. | Blesta\Core\Pricing\ libraries | 4.6.0 | 5.0 |
| *Packages::edit* argument data | Some associative keys passed to the first argument of Packages\*::edit\* have been deprecated.The first argument to Packages\*::edit\* is an array of *$vars*. The keys 'name', 'description', and 'description\_html' have been deprecated (i.e. *$vars['name'], $vars['description']*, and *$vars['description\_html']*). | Pass values for *$vars['names']* and *$vars['descriptions']* instead | 4.5.0 | 5.0 |
| *Packages::getPackageItems* | This logic has been abstracted to a different library. | Blesta\Core\Pricing\ libraries | 4.6.0 | 5.0 |
| *PluginManager::invokeEvents* | The event system has changed and this method does not support the new *EventInterface* for invoking plugin events. | *PluginManager::triggerEvents*Note: this should not be called via the API | 4.3.0 | 5.0 |
| *ServiceChanges::getItems* | The items are retrieved using the deprecated *PricingPresenter* component library. | *ServiceChanges::getPresenter*Note: this should not be called via the API as it will return an empty object | 4.0 | 5.0 |
| *Services::edit* argument data | An associative key passed to the second argument of *Services::edit* has been deprecated.The second argument to *Services::edit* is an array of *$vars*. The key 'prorate' has been deprecated (i.e. *$vars['prorate']*). |  | 4.0.0 | 5.0 |
| *Services::getItemsFromData* | The items are retrieved using the deprecated *PricingPresenter* component library. | *Services::getDataPresenter*Note: this should not be called via the API as it will return an empty object | 4.0.0 | 5.0 |
| *Staff::delete* | Deleting a staff member may cause other data relying on a deleted staff member to become corrupt. | Use *Staff::edit* to change the staff member's status to 'inactive' | 4.1.0 | TBD |

### Controllers[â](#controllers "Direct link to Controllers")

Controllers facilitate the retrieval of data and rendering of views. They are stored in the */app/ and /app/controllers/* directories.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| *AppController::authorized* client contact permissions | *AppController::authorized* validates client contact permissions too specific for its use. The method will continue to exist, but it will no longer function to check client contact authorization. | Use *ClientController::authorized* instead | 3.4.0 | 5.0 |

### Components[â](#components "Direct link to Components")

Components are libraries that provide additional utility. They are stored in the */components/* directory.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| Events | The Events system has been refactored, therefore the *Events* component library in its entirety, including *EventObject*, and all *Event\_\*\_Callback* classes, are deprecated.This affects the *Events* object available in all classes inheriting from *AppController* and *AppModel* via *$this->Events*. | [*Blesta\Core\Util\Events\ library*](dev__developers__plugins__plugin-events.md) | 4.3.0 | 5.0 |
| Json | The *Json* component provided support for JSON-encoding in older versions of php that no longer meet minimum system requirements. | Use php's *json\_encode* and *json\_decode* functions | 4.5.0 | 5.0 |
| *NetGeoIp::\_\_construct* argument data | The first argument to *NetGeoIp::\_\_construct* is the path to a *$database\_file*. This file is the path to the GeoIP v1 database file, but since the GeoIP v1 database has been discontinued, it is no longer recommended to pass this argument (it is now optional).The new GeoIP v2 database file will be used, if available (provided you do not pass this argument), if found in the system upload directory as defined in Blesta under *Settings > System > General > GeoIP* Settings. |  | 4.5.0 | 5.0 |
| PricingPresenter | Pricing has been refactored, therefore the *PricingPresenter* component library is deprecated. | \*Blesta\Core\Pricing\* libraries | 4.0.0 | 5.0 |
| *ReportType* Interface | The interface has changed for all report classes, and the *ReportType* interface is no longer used. | *ReportInterface* | 4.3.0 | 5.0 |
| *Session* | The *Session* component has been replaced by *Minphp\Session\Session* | *Minphp\Session\Session* | 4.6.0 | TBD |
| *VCard::create* argument data | Some associative keys passed to the first argument of *VCard::create* have been deprecated.The first argument to *VCard::create* is an array of *$data*. The keys 'email1' and 'office\_tel' have been deprecated (i.e. *$data['email1']* and *$data['office\_tel']*). | Pass values for *$data['email']* and *$data['work\_tel']* instead | 4.5.0 | 5.0 |

### Helpers[â](#helpers "Direct link to Helpers")

Helpers are libraries that help improve the UI. They are stored in the */helpers/* directory.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| Areyouahuman | The "Are you a human" verification service used by this helper is no longer available for use. |  | 4.0.0 | 5.0 |
| Recaptcha | The Google Recaptcha v1 API was removed and is no longer available for use.Â  v2 of the Google Recaptcha API is supported via a separate library. | *Blesta\Core\Util\Captcha\ library* | 4.0.0 | 5.0 |

### Other Libraries[â](#other-libraries "Direct link to Other Libraries")

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| *Blesta\Core\Pricing\Presenter\Format\Fields\AbstractFormatFields::\_\_construct* argument data | The first argument when constructing a *Blesta\Core\Pricing\Presenter\Format\Fields\AbstractFormatFields* instance is an instance of *Json*, which is no longer used. This argument will be removed and the constructor will take no arguments |  | 4.6.0 | 5.0 |
| *Blesta\Core\Util\Events\Common\AbstractEvent::getReturnVal* | This method only exists to conform with the deprecated *Events* component interface (i.e. *EventObject::getReturnVal*) for backward compatibility. | Blesta\Core\Util\Events\Common\*AbstractEvent::getReturnValue\* | 4.3.0 | 5.0 |
| Blesta\Core\Util\Events\Common\*AbstractEvent::setReturnVal\* | This method only exists to conform with the deprecated *Events* component interface (i.e. *EventObject::setReturnVal*) for backward compatibility. | Blesta\Core\Util\Events\Common\*AbstractEvent::setReturnValue\* | 4.3.0 | 5.0 |

## Plugins[â](#plugins "Direct link to Plugins")

Versions

Deprecated and Removal versions defined for Plugins refer to the version of that particular plugin, not of the version of Blesta.

### Order[â](#order "Direct link to Order")

The Order plugin is an extension included with Blesta by default.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| *OrderType::requiresItemsOnSignup* | The OrderType abstract class defines a public method, *requiresItemsOnSignup*, which is no longer supported. |  | 1.3.0 | 3.0 |

### Support Manager[â](#support-manager "Direct link to Support Manager")

The Support Manager plugin is an extension included with Blesta by default.

| Source | Description | Alternative | Deprecated Since | Proposed Removal |
| --- | --- | --- | --- | --- |
| *SupportManagerDepartments::getCloseTicketIntervals* | Fetching the ticket intervals from the *SupportManagerDepartments* model has been changed. | *SupportManagerDepartments::getTicketIntervals(30)* | 2.14.0 | 3.0 |

## Other[â](#other "Direct link to Other")

| Source | Description | Alternative | Removed Since |
| --- | --- | --- | --- |
| *inv\_terms* company setting key | The inv\_terms company setting key no longer exists and is replaced by language-defined invoice terms\*.\* | *inv\_terms\_en\_us* company setting key | 4.5.0 |

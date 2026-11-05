# Handling Request Parameters: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/request-parameters

---

#### [Develop](develop__develop.md)

- [Introduction](develop__guides__develop-introduction.md)
- Getting started
  - [Setting Up](develop__guides__getting-started-part-1.md)
  - [Distributing Your Plugin](develop__guides__distributing-your-plugin.md)
- Analytics
  - [Custom Report](develop__guides__custom-reports.md)
  - [Dimensions](develop__guides__dimensions.md)
  - [Widgets](develop__guides__widgets.md)
  - [Report visualizations](develop__guides__visualizing-report-data.md)
  - [Record Builder](develop__guides__writing-a-record-builder.md)
  - [JS Tracker](develop__guides__enrich-js-tracker.md)
- Tag Manager
  - [Setting Up](develop__guides__tagmanager__settingup.md)
  - [Tags](develop__guides__tagmanager__custom-tag.md)
  - [Triggers](develop__guides__tagmanager__custom-trigger.md)
  - [Variables](develop__guides__tagmanager__custom-variable.md)
  - [Parameters](develop__guides__tagmanager__parameters.md)
  - [Testing](develop__guides__tagmanager__testing.md)
  - [Developer FAQ](develop__guides__tagmanager__faq.md)
- WordPress
  - [Getting Started](develop__guides__wordpress__getting-started.md)
  - [Basics](develop__guides__wordpress__basics.md)
  - [Data Access](develop__guides__wordpress__data-access.md)
  - [Matomo Plugin](develop__guides__wordpress__matomo-plugin.md)
- Plugin Basics
  - [Themes](develop__guides__theming.md)
  - [Plugin file](develop__guides__plugin-file.md)
  - [Pages](develop__guides__pages.md)
  - [Menus](develop__guides__menus.md)
  - [Handling Request Parameters](develop__guides__request-parameters.md)
  - [API Methods](develop__guides__expose-api-methods.md)
  - [JavaScript and CSS](develop__guides__working-with-piwiks-ui.md)
  - [Plugin Settings](develop__guides__plugin-settings.md)
  - [Scheduled tasks](develop__guides__scheduled-tasks.md)
  - [Visitor log & profile](develop__guides__visitor-log-and-profile.md)
  - [Data Table](develop__guides__datatable.md)
  - [System check](develop__guides__system-check.md)
  - [Commands](develop__guides__piwik-on-the-command-line.md)
  - [Plugin Directory Structure](develop__guides__plugin-directory-structure.md)
  - [Dependency injection](develop__guides__dependency-injection.md)
  - [GDPR](develop__guides__gdpr.md)
- Security
  - [Security best practices](develop__guides__security-in-piwik.md)
  - [User permissions](develop__guides__permissions.md)
- Utils
  - [Events](develop__guides__events.md)
  - [Translations](develop__guides__translations.md)
  - [Notifications](develop__guides__notifications.md)
  - [Database](develop__guides__database.md)
  - [Extending the database](develop__guides__extending-database.md)
  - [Logging](develop__guides__logging.md)
  - [Sending Emails](develop__guides__sending-emails.md)
  - [Providing updates](develop__guides__providing-updates.md)
- [Tests](develop__guides__tests.md)
  - [PHP Tests](develop__guides__tests-php.md)
  - [UI Tests](develop__guides__tests-ui.md)
  - [JavaScript Tracker](develop__guides__tests-js-tracker.md)
  - [Running tests as GitHub Action](develop__guides__tests-github.md)
  - [Troubleshooting](develop__guides__tests-troubleshooting.md)
- Migrations
  - [Migrate Plugin from Matomo 5.X to Matomo 6](develop__guides__migrate-matomo-5-to-6.md)
  - [Migrate Plugin from Matomo 4.X to Matomo 5](develop__guides__migrate-matomo-4-to-5.md)
  - [Migrate Plugin from Matomo 3.X to Matomo 4](develop__guides__migrate-matomo-3-to-4.md)
  - [Migrate Plugin from Matomo 2.X to Matomo 3 (Matomo 3)](develop__guides__migrate-piwik-2-to-3.md)
- [Matomo In Depth](develop__piwik-in-depth.md)

#### Handling Request Parameters

- [Using a Request object (recommended)](#using-a-request-object-recommended)
- [Using Common::getRequestVar (deprecated)](#using-commongetrequestvar-deprecated)

# Handling Request Parameters

Matomo currently provides two ways of accessing request variables. While using a [`Request`](develop__api-reference__Piwik__Request.md) object is recommended, there is still a global method [`Common::getRequestVar()`](develop__api-reference__Piwik__Common.md#getrequestvar) that can be used to access request parameters.

Both methods basically have one big difference.

The old [`Common::getRequestVar()`](develop__api-reference__Piwik__Common.md#getrequestvar), was designed in a way, that all values returned by that method are automatically sanitized for security reasons. Having that was kind of useful, as it automatically protected Matomo against certain security vulnerabilities like XSS.
Having a requirement of unsanitizing values on purpose to work with it's original data prevented an accidental output of unsafe data.

However, this automatic sanitization sometimes caused issues, where unsanitizing a value doesn't fully bring back it's original value. To address this, we have introduced a new [`Request`](develop__api-reference__Piwik__Request.md) object in Matomo 5. It allows a direct access to request parameters without any sanitization (only null byte characters are removed). So when using values returned by this object, you need to handle them with care. Especially parameters received as string, array or json might contain malicious content. Make sure to sanitize the values, e.g. with [`Common::sanitizeInputValues()`](develop__api-reference__Piwik__Common.md#sanitizeinputvalues), where ever they might be directly used in any output.
In Templates and API responses this might already happen automatically, but we recommend to always double check this with potential XSS content.

## Using a `Request` object (recommended)

With Matomo 5 we introduced a new [`Request`](develop__api-reference__Piwik__Request.md) class that can be used to easily access any type of request parameters and then provides various methods to access request values type safe (if possible).

The class can be used for accessing different type of request parameters:

**All request paramters ($\_GET + $\_POST)**

```
$request = \Piwik\Request::fromRequest();
```

**GET request paramters only ($\_GET)**

```
$request = \Piwik\Request::fromGet();
```

**POST request paramters only ($\_POST)**

```
$request = \Piwik\Request::fromPost();
```

**Parameters from a query string**

```
$request = \Piwik\Request::fromQueryString('param=value&arr[]=1');
```

**Custom paramters**

```
$request = new \Piwik\Request(['param1' => 'val1', 'param2' => 'val2']);
```

### Accessing parameters

To access the parameters in the [`Request`](develop__api-reference__Piwik__Request.md) object, there are various methods.

#### Handling of missing parameters & default values

All methods provide the possibility to define a default value.
If no default value is provided and the parameter is missing in the request object an `InvalidArgumentException` will be thrown.

#### Accessing parameters with an expected type

If you are expecting a certain type your request variable should contain, you should use one of the type safe methods. This methods will automatically check if the request parameter has a certain type (or can be lossless converted to it). If this is not the case, the default value will be used or an `InvalidArgumentException` will be thrown if non was provided.

- **Integer values** / **getIntegerParameter()**

  Use this method if you expect the parameter to contain an integer value. Only fully valid integeres will be accepted by this method. Strings like `12string` or floating values like `4.5` will be fully discarded and not converted.

  ```
  $request->getIntegerParameter(string $name, int $default = null): int
  ```
- **Floating values** / **getFloatParameter()**

  Use this method if you expect the parameter to contain a floating value. Only fully valid floats or integers will be accepted by this method. Strings like `12.7string` will be discarded and not converted.

  ```
  $request->getFloatParameter(string $name, float $default = null): float
  ```
- **String values** / **getStringParameter()**

  Use this method if you expect the parameter to contain a string value. Numeric values will be returned as strings. Other incompatible types like arrays or booleans will be discarded.

  ```
  $request->getStringParameter(string $name, string $default = null): string
  ```
- **Boolean values** / **getBoolParameter()**

  Use this method if you want to use the parameter as a boolean flag. Accepted boolish values are

  - true: true, 'true', '1', 1
  - false: false, 'false', '0', 0
    All other values will be discarded.

  ```
  $request->getBoolParameter(string $name, bool $default = null): bool
  ```

#### Accessing parameters with special or unknown types

If your parameters does not have a specific type you may use the following methods. But always keep in mind, that the returned values might of any type, so you need to use them with care to avoid type related problems.

- **Array values** / **getArrayParameter()**

  Use this method if your parameter should be provided as array. If the parameter is provided with another type it will be discarded. The values within the array might be of any type, so take care to validate / cast them if needed.

  ```
  $request->getArrayParameter(string $name, array $default = null): array
  ```
- **JSON encoded data** / **getJsonParameter()**

  If the data of your parameter should contain a json encoded string, you can use this method, to directly receive the parameters values decoded. The returned type though might contain any type of data, so handle it with care.

  ```
  $request->getJsonParameter(string $name, mixed $default = null): mixed
  ```
- **Unspecific type** / **getParameter()**

  Use this method if your parameter might contain different types. The value if available will simply be returned as is. Keep in mind to properly check for acceptable values before working with them.

  ```
  $request->getParameter(string $name, mixed $default = null): mixed
  ```

### Sanitizing request parameters

As mention in the introduction, values returned by a request object are not sanitized automatically. Only null byte sequences are removed for security reasons.
When using parameters of type string, array, json or with unspecific type you need to ensure to sanitize/escape the content, where ever those values are used in output.

### Whitespace and types are preserved

As of Matomo 6, request parameters are no longer trimmed while a request is parsed. `Piwik\API\Request::getRequestArrayFromString()` used to apply `trim((string) $value)` to every non-array parameter. Leading and trailing whitespace in values such as a `label` or a segment operand is therefore preserved, and scalars keep their original type instead of being cast to string.

This matters when passing parameters through [`Request::processRequest()`](develop__api-reference__Piwik__API__Request.md#processrequest). A boolean no longer arrives as `'1'` or `''`, so a parameter read with `Common::getRequestVar($name, $default, 'string')` or `$request->getStringParameter()` falls back to its default. Either pass a string, or read the value with `$request->getBoolParameter()`, which accepts real booleans:

```
// a real boolean no longer reads back as a string
Request::processRequest('MyPlugin.myMethod', ['flat' => true]);

// either pass a string ...
Request::processRequest('MyPlugin.myMethod', ['flat' => '1']);

// ... or read it with getBoolParameter()
$flat = $request->getBoolParameter('flat', false);
```

## Using `Common::getRequestVar` (deprecated)

Before Matomo 5 we provided another possibility only, that is still available and can be used. We nevertheless recommend to use the Request class instead.

If you need to access a query or post parameter value, use the [`Common::getRequestVar($varName, $varDefault = null, $varType = null, $requestArrayToUse = null)`](develop__api-reference__Piwik__Common.md#getrequestvar) method.

**To avoid XSS vulnerabilities, never access `$_GET`/`$_POST` directly, always go through [Common::getRequestVar](develop__api-reference__Piwik__Common.md#getrequestvar).**

Using `Common::getRequestVar` will automatically sanitize the request variables using [Common#sanitizeInputValues](develop__api-reference__Piwik__Common.md#sanitizeinputvalues). For arrays and parsed json data this is done recursively. Internally this will escape e.g. special html characters. If you need to work with unescaped values, you may need to apply [Common#unsanitizeInputValues](develop__api-reference__Piwik__Common.md#unsanitizeinputvalues).

### Type handling

When working with request variables you should be aware that your variables might not be provided with the type you expect.
Someone could for example provide `&var[]=x` in the URL instead of `&var=x`, causing a variable to be of type `array` instead of `string`.

When using `$_GET` or `$_POST` directly your variables can actually only have the two types: `string` or `array`.
`Common::getRequestVar()` is able to validate your variables for some other types as well. Internally this is done by checking if casting the variable changes it's value.

To force type validation you can pass one of the following types as third parameter:
- `string`
- `array`
- `int` / `integer`
- `float`
- `json` (this tries to perform a `json_decode` on the provided value)

When providing a default value (other than `null`) together with a specific type, please ensure the default value has the same type. The default will be cast to the expected type, which might cause unexpected results. This doesn't apply for the special type `json`.

It's recommended to use the method with three parameters where ever a certain type is expected. This will prevent PHP warnings or errors if an unexpected type was provided.

### Distinguish between GET and POST

In some cases it might be needed to ensure a parameter was provided by either GET or POST. You can achieve that by passing `$_GET` or `$_POST` as fourth parameter.
By default, a combination of `$_GET` and `$_POST` will be used, while GET parameters will overwrite POST parameters.

To receive a variable from POST only you can e.g. use:

```
$var = Common::getRequestVar('var', null, 'string', $_POST);
```

### Usage Examples

#### Request parameter in a certain type required:

```
$var = Common::getRequestVar('var', null, 'string');
```

This throws an exception if the request parameter is not provided or has another type than String

#### Request parameter can be provided in a certain type, but a default should be used if not:

```
$var = Common::getRequestVar('var', $default, 'string');
```

This uses $default if the request parameter is not provided or has another type than String

#### Request parameter is required but might have any type:

```
$var = Common::getRequestVar('var');
```

This throws an exception if the request parameter is not provided, otherwise the variable can have any type.
If you use this please ensure to do the type handling within your code, so the code won't break if an Array might be provided instead of a String.

#### Request parameter can be provided, but a default should be used if not:

```
$var = Common::getRequestVar('var', $default);
```

This won't throw an exception in any case. But you can't expect the variable to have a certain type.
If you use this please ensure to do the type handling within your code, so the code won't break if an Array might be provided instead of a String.

# Testing: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/testing

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

#### Testing

- [Setup](#setup)
- [Running tests](#running-tests)
- [Creating a test](#creating-a-test)
- [Testing a tag](#testing-a-tag)
- [Testing a trigger](#testing-a-trigger)
- [Testing a variable](#testing-a-variable)
- [Mocking document or window](#mocking-document-or-window)
  - [Document example](#document-example "Document example")
  - [Window example](#window-example "Window example")
- [Triggering an event](#triggering-an-event)
- [Asynchronous or delayed events](#asynchronous-or-delayed-events)

# Testing

We highly recommend creating tests for the JavaScript part of your tag, trigger, or variable. Did you want to write tests for the PHP part? Check out our [PHP Testing guide](develop__guides__tests-php.md).

## Setup

Because this test suite also runs the regular Matomo JavaScript tracker tests, you need to have an installed Matomo running
and ensure the `[database_tests]` section in `yourmatomo/config/config.ini.php` is configured correctly, i.e. with the correct password.

The tests will create a database named `tracker_tests` and store various tracking requests in this DB.

## Running tests

To run a test, either open `https://matomo.example.com/tests/javascript/` in a browser or execute `./console tests:run-js` on the command line.

## Creating a test

To create a test, create a new file named `plugins/$yourPlugin/tests/javascript/index.php`.

You can now define your first test like this:

```
<script type="text/javascript">
    test("Matomo TagManager DataLayer", function() {
        expect(4); // the number of expected assertions

        var dataLayer = window.MatomoTagManager.dataLayer;

        equal(typeof dataLayer.get, 'function', 'TagManager.get' );
        strictEqual(undefined, dataLayer.get('bazfooooo'), 'DataLayer.get key does not exist' );

        dataLayer.set('foobar3', [5,10,20]);
        deepEqual([5, 10, 20], dataLayer.get('foobar3'), 'DataLayer.get can return object' );
        ok(!!dataLayer.values, 'DataLayer has values');
    });

    test("AnotherCategory", function() {
        ...
    });
</script>
```

The main methods you will need to create tests are:

- [`test(testGroup, function)`](https://api.qunitjs.com/QUnit/test/) creates a new test group, ideally you group all tests for one specific tag, trigger, or template together
- [`expect(numberOfTestAssertions)`](https://api.qunitjs.com/assert/expect/) define how many assertions you expect to run during this test group
- [`ok(state, message)`](https://api.qunitjs.com/assert/ok/) expect a bool value as first parameter
- [`equal(actual, expected, message)`](https://api.qunitjs.com/assert/equal/) loose comparison of a value
- [`strictEqual(actual, expected, message)`](https://api.qunitjs.com/assert/strictEqual/) strict comparison of a value
- [`deepEqual(actual, expected, message)`](https://api.qunitjs.com/assert/deepEqual/) expecting an object (or array)

You can find more information in the [QUnit API Documentation](https://api.qunitjs.com/)

## Testing a tag

You may test a tag using the method `TagManagerTestHelper.fireTemplateTag(tagName, parameters)` like this:

```
var customHtmlParameter = TagManagerTestHelper.buildVariable('<div id="customHtmlTag1">my foo bar baz test</div>';

// configure the required parameters for this tag, if any
var params = {customHtml: customHtmlParameter)};

 // replace `CustomHtmlTag` with the name of your tag
TagManagerTestHelper.fireTemplateTag('CustomHtmlTag', params);

// we now verify the element was added by this tag
var addedElement1 = document.getElementById('customHtmlTag1');

strictEqual('my foo bar baz test', addedElement1.innerText, 'should have added the element');
```

## Testing a trigger

You may test a trigger using the method `TagManagerTestHelper.setUpTemplateTrigger(triggerName, parameters, callbackWhenEventTriggered)` like this:

```
// your trigger may or may not require a parameter
var parameters = {};

// the callback will be executed when ever the trigger triggers an event
var events = [];
var callback = function (event) { events.push(event); };

// replace `JavaScriptErrorTrigger` with the name of your trigger
TagManagerTestHelper.setUpTemplateTrigger('JavaScriptErrorTrigger', parameters, callback);

// now we fake an error
window.onerror('Uncaught Error: The error', 'https://matomo.org/tag/manager.js?cb=348181', 53, 19, new Error('The error'));

// now we ensure the error was added
deepEqual([{
    "event": "mtm.JavaScriptError",
    "mtm.errorLine": 53,
    "mtm.errorMessage": "Uncaught Error: The error",
    "mtm.errorUrl": "https://matomo.org/tag/manager.js?cb=348181"
}], events, 'should have triggered an event');
```

## Testing a variable

You may test a variable using the method `TagManagerTestHelper.resolveTemplateVariable(variableName, parameters)` like this:

```
// configure the required parameters for this tag, if any
var params = {constantValue: TagManagerTestHelper.buildVariable('mytest')};

// replace `ConstantVariable` with the name of your variable
var variable = TagManagerTestHelper.resolveTemplateVariable('ConstantVariable', params);

// assert the correct value was returned by the variable
strictEqual('mytest', variable, 'returns any passed value');
```

## Mocking document or window

As recommended in the guides on how to create a [tag](develop__guides__tagmanager__custom-tag.md), [trigger](develop__guides__tagmanager__custom-trigger.md), or [variable](develop__guides__tagmanager__custom-variable.md),
you should not access `document` or `window` within your template directly but instead `parameters.document` and `parameters.window`. This allows you to set a custom document or window in the tests.

### Document example

Inject a custom document may be helpful when for example testing a variable which retrieves values from a cookie or referrer:

```
// we fake the set document
var params = {document: {cookie: 'mytest=foobar; loginbaz=helloworld'}};
params.cookieName = TagManagerTestHelper.buildVariable('mytest');

strictEqual('foobar', TagManagerTestHelper.resolveTemplateVariable('CookieVariable', params));
```

```
var referrerUrl = 'https://apache.matomo:80/index.php?module=CoreHome&action=index&idSite=1&period=day';
var params = {document: {referrer: referrerUrl}};
strictEqual(referrerUrl, TagManagerTestHelper.resolveTemplateVariable('ReferrerUrlVariable', params));
```

### Window example

Instead of polluting the global name space, we set the variable as part of the parameters:

```
var params = {window: {myvar1: 'myfootest'}};
params.variableName = TagManagerTestHelper.buildVariable('myvar1');

strictEqual('myfootest', TagManagerTestHelper.resolveTemplateVariable('JavaScriptVariable', params));
```

It may also be useful to fake a custom location:

```
var theLocation = {"href":"https://apache.matomo:81/index.php?module=CoreHome&action=index&idSite=1&period=day#foobarhash","ancestorOrigins":{},"origin":"https://apache.matomo","protocol":"https:","host":"apache.matomo","hostname":"apache.matomo","port":"81","pathname":"/index.php","search":"?module=CoreHome&action=index&idSite=1&period=day","hash":"#foobarhash"};

// here we mock a location
var params = {window: {location: theLocation}, urlPart: TagManagerTestHelper.buildVariable('href')};

strictEqual(theLocation.href, TagManagerTestHelper.resolveTemplateVariable('UrlVariable', params));
```

## Triggering an event

Sometimes you may need to trigger an event manually. For example, you want to test a mouse movement but cannot actually move the mouse. In this case you may trigger an event programmatically like this:

```
var target = document.getElementById('myelement');
var customParams = {clientY: 2, clientX: 5}; // set to null if no custom params
var bubbles = true;
TagManagerTestHelper.triggerEvent(target, 'mouseleave', customParams, bubbles);
```

## Asynchronous or delayed events

In some cases you may have to wait for a specific event to occur as it is executed with a delay. For example a scroll
might be triggered only after 100ms. To do this, you can temporarily "stop" and "start" the test execution:

```
window.scrollTo(0, 200);
stop();

var waitForMs = 400;
setTimeout(function () {
    strictEqual(1, scrolls1.length, 'onScroll, all registered event handlers receive events');
    start();
}, waitForMs);
```

# Testing Responses — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/response.html

---

# Testing Responses[](#testing-responses "Link to this heading")

The `TestResponse` class provides a number of helpful functions for parsing and testing responses
from your test cases. Usually a `TestResponse` will be provided for you as a result of your
[Controller Tests](testing__controllers.md) or [HTTP Feature Tests](testing__feature.md), but you can always
create your own directly using any `ResponseInterface`:

```
$result = new \CodeIgniter\Test\TestResponse($response);
$result->assertOK();
```

## [Testing the Response](#id1)[](#testing-the-response "Link to this heading")

Whether you have received a `TestResponse` as a result of your tests or created one yourself,
there are a number of new assertions that you can use in your tests.

### [Accessing Request/Response](#id2)[](#accessing-request-response "Link to this heading")

#### request()[](#request "Link to this heading")

You can access directly the Request object, if it was set during testing:

```
$request = $results->request();
```

#### response()[](#response "Link to this heading")

This allows you direct access to the response object:

```
$response = $results->response();
```

### [Checking Response Status](#id3)[](#checking-response-status "Link to this heading")

#### isOK()[](#isok "Link to this heading")

Returns a boolean true/false based on whether the response is perceived to be “ok”. This is primarily determined by
a response status code in the 200 or 300’s. An empty body is not considered valid, unless in redirects.

```
if ($result->isOK()) {
    // ...
}
```

#### assertOK()[](#assertok "Link to this heading")

This assertion simply uses the `isOK()` method to test a response. `assertNotOK()` is the inverse of this assertion.

```
$result->assertOK();
```

#### isRedirect()[](#isredirect "Link to this heading")

Returns a boolean true/false based on whether the response is a redirected response.

```
if ($result->isRedirect()) {
    // ...
}
```

#### assertRedirect()[](#assertredirect "Link to this heading")

Asserts that the Response is an instance of RedirectResponse. `assertNotRedirect()` is the inverse of this assertion.

```
$result->assertRedirect();
```

#### assertRedirectTo()[](#assertredirectto "Link to this heading")

Asserts that the Response is an instance of RedirectResponse and the destination
matches the uri given.

```
$result->assertRedirectTo('foo/bar');
```

#### getRedirectUrl()[](#getredirecturl "Link to this heading")

Returns the URL set for a RedirectResponse, or null for failure.

```
$url = $result->getRedirectUrl();
$this->assertEquals(site_url('foo/bar'), $url);
```

#### assertStatus(int $code)[](#assertstatus-int-code "Link to this heading")

Asserts that the HTTP status code returned matches $code.

```
$result->assertStatus(403);
```

### [Session Assertions](#id4)[](#session-assertions "Link to this heading")

#### assertSessionHas(string $key, $value = null)[](#assertsessionhas-string-key-value-null "Link to this heading")

Asserts that a value exists in the resulting session. If $value is passed, will also assert that the variable’s value
matches what was specified.

```
$result->assertSessionHas('logged_in', 123);
```

#### assertSessionMissing(string $key)[](#assertsessionmissing-string-key "Link to this heading")

Asserts that the resulting session does not include the specified $key.

```
$result->assertSessionMissing('logged_in');
```

### [Header Assertions](#id5)[](#header-assertions "Link to this heading")

#### assertHeader(string $key, $value = null)[](#assertheader-string-key-value-null "Link to this heading")

Asserts that a header named `$key` exists in the response. If `$value` is not empty, will also assert that
the values match.

```
$result->assertHeader('Content-Type', 'text/html');
```

#### assertHeaderMissing(string $key)[](#assertheadermissing-string-key "Link to this heading")

Asserts that a header name `$key` does not exist in the response.

```
$result->assertHeader('Accepts');
```

### [Cookie Assertions](#id6)[](#cookie-assertions "Link to this heading")

#### assertCookie(string $key, $value = null, string $prefix = ‘’)[](#assertcookie-string-key-value-null-string-prefix "Link to this heading")

Asserts that a cookie named `$key` exists in the response. If `$value` is not empty, will also assert that
the values match. You can set the cookie prefix, if needed, by passing it in as the third parameter.

```
$result->assertCookie('foo', 'bar');
```

#### assertCookieMissing(string $key)[](#assertcookiemissing-string-key "Link to this heading")

Asserts that a cookie named `$key` does not exist in the response.

```
$result->assertCookieMissing('ci_session');
```

#### assertCookieExpired(string $key, string $prefix = ‘’)[](#assertcookieexpired-string-key-string-prefix "Link to this heading")

Asserts that a cookie named `$key` exists, but has expired. You can set the cookie prefix, if needed, by passing it
in as the second parameter.

```
$result->assertCookieExpired('foo');
```

### [DOM Helpers](#id7)[](#dom-helpers "Link to this heading")

The response you get back contains a number of helper methods to inspect the HTML output within the response. These
are useful for using within assertions in your tests.

#### see()[](#see "Link to this heading")

Returns a boolean true/false based on whether the text on the page exists either
by itself, or more specifically within
a tag, as specified by type, class, or id:

```
// Check that "Hello World" is on the page
if ($results->see('Hello World')) {
    // ...
}

// Check that "Hello World" is within an h1 tag
if ($results->see('Hello World', 'h1')) {
    // ...
}

// Check that "Hello World" is within an element with the "notice" class
if ($results->see('Hello World', '.notice')) {
    // ...
}

// Check that "Hello World" is within an element with id of "title"
if ($results->see('Hello World', '#title')) {
    // ...
}
```

The `dontSee()` method is the exact opposite:

```
// Checks that "Hello World" does NOT exist on the page
if ($results->dontSee('Hello World')) {
    // ...
}

// Checks that "Hellow World" does NOT exist within any h1 tag
if ($results->dontSee('Hello World', 'h1')) {
    // ...
}
```

#### seeElement()[](#seeelement "Link to this heading")

The `seeElement()` and `dontSeeElement()` are very similar to the previous methods, but do not look at the
values of the elements. Instead, they simply check that the elements exist on the page:

```
// Check that an element with class 'notice' exists
if ($results->seeElement('.notice')) {
    // ...
}

// Check that an element with id 'title' exists
if ($results->seeElement('#title')) {
    // ...
}

// Verify that an element with id 'title' does NOT exist
if ($results->dontSeeElement('#title')) {
    // ...
}
```

#### seeLink()[](#seelink "Link to this heading")

You can use `seeLink()` to ensure that a link appears on the page with the specified text:

```
// Check that a link exists with 'Upgrade Account' as the text::
if ($results->seeLink('Upgrade Account')) {
    // ...
}

// Check that a link exists with 'Upgrade Account' as the text, AND a class of 'upsell'
if ($results->seeLink('Upgrade Account', '.upsell')) {
    // ...
}
```

#### seeInField()[](#seeinfield "Link to this heading")

The `seeInField()` method checks for any input tags exist with the name and value:

```
// Check that an input exists named 'user' with the value 'John Snow'
if ($results->seeInField('user', 'John Snow')) {
    // ...
}

// Check a multi-dimensional input
if ($results->seeInField('user[name]', 'John Snow')) {
    // ...
}
```

#### seeCheckboxIsChecked()[](#seecheckboxischecked "Link to this heading")

Finally, you can check if a checkbox exists and is checked with the `seeCheckboxIsChecked()` method:

```
// Check if checkbox is checked with class of 'foo'
if ($results->seeCheckboxIsChecked('.foo')) {
    // ...
}

// Check if checkbox with id of 'bar' is checked
if ($results->seeCheckboxIsChecked('#bar')) {
    // ...
}
```

#### seeXPath()[](#seexpath "Link to this heading")

Added in version 4.5.0.

You can use `seeXPath()` to take advantage of the full power that xpath gives you.
This method is aimed at more advanced users who want to write a more complex expressions
using the DOMXPath object directly:

```
// Check that h1 element which contains class "heading" is on the page
if ($results->seeXPath('//h1[contains(@class, "heading")]')) {
    // ...
}

// Check that h1 element which contains class "heading" have a text "Hello World"
if ($results->seeXPath('//h1[contains(@class, "heading")][contains(.,"Hello world")]')) {
    // ...
}
```

The `dontSeeXPath()` method is the exact opposite:

```
// Check that h1 element which contains class "heading" does NOT exist on the page
if ($results->dontSeeXPath('//h1[contains(@class, "heading")]')) {
    // ...
}

// Check that h1 element which contains class "heading" and text "Hello World" does NOT exist on the page
if ($results->dontSeeXPath('//h1[contains(@class, "heading")][contains(.,"Hello world")]')) {
    // ...
}
```

### [DOM Assertions](#id8)[](#dom-assertions "Link to this heading")

You can perform tests to see if specific elements/text/etc exist with the body of the response with the following
assertions.

#### assertSee(string $search = null, string $element = null)[](#assertsee-string-search-null-string-element-null "Link to this heading")

Asserts that text/HTML is on the page, either by itself or - more specifically - within
a tag, as specified by type, class, or id:

```
// Verify that "Hello World" is on the page
$result->assertSee('Hello World');

// Verify that "Hello World" is within an h1 tag
$result->assertSee('Hello World', 'h1');

// Verify that "Hello World" is within an element with the "notice" class
$result->assertSee('Hello World', '.notice');

// Verify that "Hello World" is within an element with id of "title"
$result->assertSee('Hello World', '#title');
```

#### assertDontSee(string $search = null, string $element = null)[](#assertdontsee-string-search-null-string-element-null "Link to this heading")

Asserts the exact opposite of the `assertSee()` method:

```
// Verify that "Hello World" does NOT exist on the page
$results->assertDontSee('Hello World');

// Verify that "Hello World" does NOT exist within any h1 tag
$results->assertDontSee('Hello World', 'h1');
```

#### assertSeeElement(string $search)[](#assertseeelement-string-search "Link to this heading")

Similar to `assertSee()`, however this only checks for an existing element. It does not check for specific text:

```
// Verify that an element with class 'notice' exists
$results->assertSeeElement('.notice');

// Verify that an element with id 'title' exists
$results->assertSeeElement('#title');
```

#### assertDontSeeElement(string $search)[](#assertdontseeelement-string-search "Link to this heading")

Similar to `assertSee()`, however this only checks for an existing element that is missing. It does not check for
specific text:

```
// Verify that an element with id 'title' does NOT exist
$results->assertDontSeeElement('#title');
```

#### assertSeeLink(string $text, string $details = null)[](#assertseelink-string-text-string-details-null "Link to this heading")

Asserts that an anchor tag is found with matching `$text` as the body of the tag:

```
// Verify that a link exists with 'Upgrade Account' as the text::
$results->assertSeeLink('Upgrade Account');

// Verify that a link exists with 'Upgrade Account' as the text, AND a class of 'upsell'
$results->assertSeeLink('Upgrade Account', '.upsell');
```

#### assertSeeInField(string $field, string $value = null)[](#assertseeinfield-string-field-string-value-null "Link to this heading")

Asserts that an input tag exists with the name and value:

```
// Verify that an input exists named 'user' with the value 'John Snow'
$results->assertSeeInField('user', 'John Snow');

// Verify a multi-dimensional input
$results->assertSeeInField('user[name]', 'John Snow');
```

### [Working with JSON](#id9)[](#working-with-json "Link to this heading")

Responses will frequently contain JSON responses, especially when working with API methods. The following methods
can help to test the responses.

#### getJSON()[](#getjson "Link to this heading")

This method will return the body of the response as a JSON string:

```
/*
 * Response body is this:
 * ['foo' => 'bar']
 */

$json = $result->getJSON();
/*
 * $json is this:
 * {
 *     "foo": "bar"
 * }
`*/
```

You can use this method to determine if `$response` actually holds JSON content:

```
// Verify the response is JSON
$this->assertTrue($result->getJSON() !== false);
```

Note

Be aware that the JSON string will be pretty-printed in the result.

#### assertJSONFragment(array $fragment)[](#assertjsonfragment-array-fragment "Link to this heading")

Asserts that `$fragment` is found within the JSON response. It does not need to match the entire JSON value.

```
/*
 * Response body is this:
 * [
 *     'config' => ['key-a', 'key-b'],
 * ]
 */

// Is true
$result->assertJSONFragment(['config' => ['key-a']]);
```

#### assertJSONExact($test)[](#assertjsonexact-test "Link to this heading")

Similar to `assertJSONFragment()`, but checks the entire JSON response to ensure exact matches.

### [Working with XML](#id10)[](#working-with-xml "Link to this heading")

#### getXML()[](#getxml "Link to this heading")

If your application returns XML, you can retrieve it through this method.

# Working with URIs — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/uri.html

---

# Working with URIs[](#working-with-uris "Link to this heading")

CodeIgniter provides an object oriented solution for working with URI’s in your application. Using this makes it
simple to ensure that the structure is always correct, no matter how complex the URI might be, as well as adding
relative URI to an existing one and have it resolved safely and correctly.

## [Creating URI instances](#id1)[](#creating-uri-instances "Link to this heading")

Creating a URI instance is as simple as creating a new class instance.

When you create the new instance, you can pass a full or partial URL in the constructor and it will be parsed
into its appropriate sections:

```
$uri = new \CodeIgniter\HTTP\URI('http://www.example.com/some/path');
```

Alternatively, you can use the [`service()`](general__common_functions.md#service "service") function to return an instance for you:

```
$uri = service('uri', 'http://www.example.com/some/path');
```

Since v4.4.0, if you don’t pass a URL, it returns the current URI:

```
$uri = service('uri'); // returns the current SiteURI instance.
```

Note

The above code returns the `SiteURI` instance, that extends the `URI`
class. The `URI` class is for general URIs, but the `SiteURI` class is
for your site URIs.

### [The Current URI](#id2)[](#the-current-uri "Link to this heading")

When you need an object representing the current URL of the request,
you can use the [`current_url()`](helpers__url_helper.md#current_url "current_url") function available in the [URL Helper](helpers__url_helper.md):

```
$uri = current_url(true);
```

You must pass `true` as the first parameter, otherwise, it will return the string representation of the current URL.

This URI is based on the path (relative to your `baseURL`) as determined by the current request object and
your settings in `Config\App` (`baseURL`, `indexPage`, and `forceGlobalSecureRequests`).

Assuming that you’re in a controller that extends `CodeIgniter\Controller`, you
can also get the current SiteURI instance:

```
$uri = $this->request->getUri();
```

## [URI Strings](#id3)[](#uri-strings "Link to this heading")

Many times, all you really want is to get a string representation of a URI. This is easy to do by simply casting
the URI as a string:

```
<?php

$uri = current_url(true);
echo (string) $uri;  // http://example.com/index.php
```

If you know the pieces of the URI and just want to ensure it’s all formatted correctly, you can generate a string
using the URI class’ static `createURIString()` method:

```
<?php

use CodeIgniter\HTTP\URI;

$uriString = URI::createURIString($scheme, $authority, $path, $query, $fragment);

// Creates: http://exmample.com/some/path?foo=bar#first-heading
echo URI::createURIString('http', 'example.com', 'some/path', 'foo=bar', 'first-heading');
```

Important

When `URI` is cast to a string, it will attempt to adjust project URLs to the
settings defined in `Config\App`. If you need the exact, unaltered string representation
then use `URI::createURIString()` instead.

## [The URI Parts](#id4)[](#the-uri-parts "Link to this heading")

Once you have a URI instance, you can set or retrieve any of the various parts of the URI. This section will provide
details on what those parts are, and how to work with them.

### [Scheme](#id5)[](#scheme "Link to this heading")

The scheme is frequently ‘http’ or ‘https’, but any scheme is supported, including ‘file’, ‘mailto’, etc.

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com/some/path');

echo $uri->getScheme(); // 'http'
$uri->setScheme('https');
```

### [Authority](#id6)[](#authority "Link to this heading")

Many URIs contain several elements that are collectively known as the ‘authority’. This includes any user info,
the host and the port number. You can retrieve all of these pieces as one single string with the `getAuthority()`
method, or you can manipulate the individual parts.

```
<?php

$uri = new \CodeIgniter\HTTP\URI('ftp://user:[email protected]:21/some/path');

echo $uri->getAuthority();  // [email protected]:21
```

By default, this will not display the password portion since you wouldn’t want to show that to anyone. If you want
to show the password, you can use the `showPassword()` method. This URI instance will continue to show that password
until you turn it off again, so always make sure that you turn it off as soon as you are finished with it:

```
<?php

echo $uri->getAuthority();  // [email protected]:21
echo $uri->showPassword()->getAuthority();   // user:[email protected]:21

// Turn password display off again.
$uri->showPassword(false);
```

If you do not want to display the port, pass in `true` as the only parameter:

```
<?php

echo $uri->getAuthority(true);  // [email protected]
```

Note

If the current port is the default port for the scheme it will never be displayed.

### [UserInfo](#id7)[](#userinfo "Link to this heading")

The userinfo section is simply the username and password that you might see with an FTP URI. While you can get
this as part of the Authority, you can also retrieve it yourself:

```
<?php

echo $uri->getUserInfo();   // user
```

By default, it will not display the password, but you can override that with the `showPassword()` method:

```
<?php

echo $uri->showPassword()->getUserInfo();   // user:password
$uri->showPassword(false);
```

### [Host](#id8)[](#host "Link to this heading")

The host portion of the URI is typically the domain name of the URL. This can be easily set and retrieved with the
`getHost()` and `setHost()` methods:

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com/some/path');

echo $uri->getHost();   // www.example.com
echo $uri->setHost('anotherexample.com')->getHost();    // anotherexample.com
```

### [Port](#id9)[](#port "Link to this heading")

The port is an integer number between 0 and 65535. Each scheme has a default value associated with it.

```
<?php

$uri = new \CodeIgniter\HTTP\URI('ftp://user:[email protected]:21/some/path');

echo $uri->getPort();   // 21
echo $uri->setPort(2201)->getPort(); // 2201
```

When using the `setPort()` method, the port will be checked that it is within the valid range and assigned.

### [Path](#id10)[](#path "Link to this heading")

The path is all of the segments within the site itself. As expected, the `getPath()` and `setPath()` methods
can be used to manipulate it:

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com/some/path');

echo $uri->getPath();                            // '/some/path'
echo $uri->setPath('/another/path')->getPath();  // '/another/path'
```

Note

When setting the path it is sanitized to encode any dangerous
characters, and remove dot segments for safety.

Note

Since v4.4.0, the `SiteURI::getRoutePath()` method,
returns the URI path relative to baseURL, and the `SiteURI::getPath()`
method always returns the full URI path with leading `/`.

### [Query](#id11)[](#query "Link to this heading")

The query data can be manipulated through the class using simple string representations.

#### Getting/Setting Query[](#getting-setting-query "Link to this heading")

Query values can only
be set as a string currently.

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com?foo=bar');

echo $uri->getQuery();  // 'foo=bar'
$uri->setQuery('foo=bar&bar=baz');
```

The `setQuery()` method overwrites existing query variables.

Note

Query values cannot contain fragments. An InvalidArgumentException will be thrown if it does.

#### Setting Query from Array[](#setting-query-from-array "Link to this heading")

You can set query values using an array:

```
<?php

$uri->setQueryArray(['foo' => 'bar', 'bar' => 'baz']);
```

The `setQueryArray()` method overwrites existing query variables.

#### Adding Query Value[](#adding-query-value "Link to this heading")

You can add a value to the
query variables collection without destroying the existing query variables with the `addQuery()` method. The first
parameter is the name of the variable, and the second parameter is the value:

```
<?php

$uri->addQuery('foo', 'bar');
```

#### Filtering Query Values[](#filtering-query-values "Link to this heading")

You can filter the query values returned by passing an options array to the `getQuery()` method, with either an
*only* or an *except* key:

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com?foo=bar&bar=baz&baz=foz');

// Returns 'foo=bar'
echo $uri->getQuery(['only' => ['foo']]);

// Returns 'foo=bar&baz=foz'
echo $uri->getQuery(['except' => ['bar']]);
```

This only changes the values returned during this one call.

#### Changing Query Values[](#changing-query-values "Link to this heading")

If you need to modify the URI’s query values more permanently,
you can use the `stripQuery()` and `keepQuery()` methods to change the actual object’s query variable collection:

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com?foo=bar&bar=baz&baz=foz');

// Leaves just the 'baz' variable
$uri->stripQuery('foo', 'bar');

// Leaves just the 'foo' variable
$uri->keepQuery('foo');
```

Note

By default `setQuery()` and `setQueryArray()` methods uses native `parse_str()` function to prepare data.
If you want to use more liberal rules (which allow key names to contain dots), you can use a special method
`useRawQueryString()` beforehand.

### [Fragment](#id12)[](#fragment "Link to this heading")

Fragments are the portion at the end of the URL, preceded by the pound-sign (`#`). In HTML URLs these are links
to an on-page anchor. Media URI’s can make use of them in various other ways.

```
<?php

$uri = new \CodeIgniter\HTTP\URI('http://www.example.com/some/path#first-heading');

echo $uri->getFragment();   // 'first-heading'
echo $uri->setFragment('second-heading')->getFragment();    // 'second-heading'
```

## [URI Segments](#id13)[](#uri-segments "Link to this heading")

Each section of the path between the slashes is a single segment.

Note

In the case of your site URI, URI Segments mean only the URI path part
relative to the baseURL. If your baseURL contains sub folders, the values
will be different from the current URI path.

The URI class provides a simple way to determine
what the values of the segments are. The segments start at 1 being the furthest left of the path.

```
<?php

// URI = http://example.com/users/15/profile

// Prints '15'
if ($uri->getSegment(1) === 'users') {
    echo $uri->getSegment(2);
}
```

You can also set a different default value for a particular segment by using the second parameter of the `getSegment()` method. The default is empty string.

```
<?php

// URI = http://example.com/users/15/profile

// will print 'profile'
echo $uri->getSegment(3, 'foo');
// will print 'bar'
echo $uri->getSegment(4, 'bar');
// will throw an exception
echo $uri->getSegment(5, 'baz');
// will print 'baz'
echo $uri->setSilent()->getSegment(5, 'baz');
// will print '' (empty string)
echo $uri->setSilent()->getSegment(5);
```

Note

You can get the last +1 segment. When you try to get the last +2 or
more segment, an exception will be thrown by default. You could prevent
throwing exceptions with the `setSilent()` method.

You can get a count of the total segments:

```
<?php

$total = $uri->getTotalSegments(); // 3
```

Finally, you can retrieve an array of all of the segments:

```
<?php

$segments = $uri->getSegments();

/*
 * Produces:
 * [
 *     0 => 'users',
 *     1 => '15',
 *     2 => 'profile',
 * ]
 */
```

## [Disable Throwing Exceptions](#id14)[](#disable-throwing-exceptions "Link to this heading")

By default, some methods of this class may throw an exception. If you want to disable it, you can set a special flag
that will prevent throwing exceptions.

```
<?php

// Disable throwing exceptions
$uri->setSilent();

// Enable throwing exceptions (default)
$uri->setSilent(false);
```

# URI Filters - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-uri-filter.html

---

# URI Filters

Filed under End-User

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

This is a quick and dirty document to get you on your way to writing
custom URI filters for your own URL filtering needs. Why would you
want to write a URI filter? If you need URIs your users put into
HTML to magically change into a different URI, this is
exactly what you need!

## Creating the class

Any URI filter you make will be a subclass of `HTMLPurifier_URIFilter`.
The scaffolding is thus:

```
class HTMLPurifier_URIFilter_NameOfFilter extends HTMLPurifier_URIFilter
{
    public $name = 'NameOfFilter';
    public function prepare($config) {}
    public function filter(&$uri, $config, $context) {}
}
```

Fill in the variable `$name` with the name of your filter, and
take a look at the two methods. `prepare()` is an initialization
method that is called only once, before any filtering has been done of the
HTML. Use it to perform any costly setup work that only needs to be done
once. `filter()` is the guts and innards of our filter:
it takes the URI and does whatever needs to be done to it.

If you've worked with HTML Purifier, you'll recognize the `$config`
and `$context` parameters. On the other hand, `$uri`
is something unique to this section of the application: it's a
`HTMLPurifier_URI` object. The interface is thus:

```
class HTMLPurifier_URI
{
    public $scheme, $userinfo, $host, $port, $path, $query, $fragment;
    public function HTMLPurifier_URI($scheme, $userinfo, $host, $port, $path, $query, $fragment);
    public function toString();
    public function copy();
    public function getSchemeObj($config, $context);
    public function validate($config, $context);
}
```

The first three methods are fairly self-explanatory: you have a constructor,
a serializer, and a cloner. Generally, you won't be using them when
you are manipulating the URI objects themselves.
`getSchemeObj()` is a special purpose method that returns
a `HTMLPurifier_URIScheme` object corresponding to the specific
URI at hand. `validate()` performs general-purpose validation
on the internal components of a URI. Once again, you don't need to
worry about these: they've already been handled for you.

## URI format

As a URIFilter, we're interested in the member variables of the URI object.

|  |  |
| --- | --- |
| Scheme | The protocol for identifying (and possibly locating) a resource (http, ftp, https) |
| Userinfo | User information such as a username (bob) |
| Host | Domain name or IP address of the server (example.com, 127.0.0.1) |
| Port | Network port number for the server (80, 12345) |
| Path | Data that identifies the resource, possibly hierarchical (/path/to, ed@example.com) |
| Query | String of information to be interpreted by the resource (?q=search-term) |
| Fragment | Additional information for the resource after retrieval (#bookmark) |

Because the URI is presented to us in this form, and not
`http://bob@example.com:8080/foo.php?q=string#hash`, it saves us
a lot of trouble in having to parse the URI every time we want to filter
it. For the record, the above URI has the following components:

|  |  |
| --- | --- |
| Scheme | http |
| Userinfo | bob |
| Host | example.com |
| Port | 8080 |
| Path | /foo.php |
| Query | q=string |
| Fragment | hash |

Note that there is no question mark or octothorpe in the query or
fragment: these get removed during parsing.

With this information, you can get straight to implementing your
`filter()` method. But one more thing...

## Return value: Boolean, not URI

You may have noticed that the URI is being passed in by reference.
This means that whatever changes you make to it, those changes will
be reflected in the URI object the callee had. **Do not
return the URI object: it is unnecessary and will cause bugs.**
Instead, return a boolean value, true if the filtering was successful,
or false if the URI is beyond repair and needs to be axed.

Let's suppose I wanted to write a filter that converted links with a
custom `image` scheme to its corresponding real path on
our website:

```
class HTMLPurifier_URIFilter_TransformImageScheme extends HTMLPurifier_URIFilter
{
    public $name = 'TransformImageScheme';
    public function filter(&$uri, $config, $context) {
        if ($uri->scheme !== 'image') return true;
        $img_name = $uri->path;
        // Overwrite the previous URI object
        $uri = new HTMLPurifier_URI('http', null, null, null, '/img/' . $img_name . '.png', null, null);
        return true;
    }
}
```

Notice I did not `return $uri;`. This filter would turn
`image:Foo` into `/img/Foo.png`.

## Activating your filter

Having a filter is all well and good, but you need to tell HTML Purifier
to use it. Fortunately, this part's simple:

```
$uri = $config->getDefinition('URI');
$uri->addFilter(new HTMLPurifier_URIFilter_NameOfFilter(), $config);
```

After adding a filter, you won't be able to set configuration directives.
Structure your code accordingly.

## Post-filter

Remember our TransformImageScheme filter? That filter acted before we had
performed scheme validation; otherwise, the URI would have been filtered
out when it was discovered that there was no image scheme. Well, a post-filter
is run after scheme specific validation, so it's ideal for bulk
post-processing of URIs, including munging. To specify a URI as a post-filter,
set the `$post` member variable to TRUE.

```
class HTMLPurifier_URIFilter_MyPostFilter extends HTMLPurifier_URIFilter
{
    public $name = 'MyPostFilter';
    public $post = true;
    // ... extra code here
}
```

## Examples

Check the
[URIFilter](http://repo.or.cz/w/htmlpurifier.git?a=tree;hb=HEAD;f=library/HTMLPurifier/URIFilter)
directory for more implementation examples, and see [the
new directives proposal document](proposal-new-directives.txt) for ideas on what could be implemented
as a filter.

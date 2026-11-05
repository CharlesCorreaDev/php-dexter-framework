# |page - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/page.html

---

# |page

Twig Filter

- [Reverse Routing](docs__4.x__markup__filter__page.md#reverse-routing)
- [Persistent URL Parameters](docs__4.x__markup__filter__page.md#persistent-url-parameters)

The `|page` filter creates a link to a page using a page file name, without an extension, as a parameter. For example, if there is the about.htm page you can use the following code to generate a link to it:

```
<a href="___TWIG0___">About Us</a>
```

Remember that if you refer a page from a subdirectory you should specify the subdirectory name:

```
<a href="{{ 'contacts/about'|page }}">About Us</a>
```

The [Themes documentation](docs__4.x__cms__themes__themes.md) has more details on subdirectory usage.

To access the link to a certain page from the PHP section, you can use `$this->pageUrl('page-name-without-extension')`.

```
<?
function onStart()
{
    $this['newsPage'] = $this->pageUrl('blog/overview');
}
?>
```

```
___TWIG0___
```

You can create a link to the current page by filtering the `this` variable.

```
<a href="___TWIG0___">Refresh page</a>
```

To get the link to the current page in PHP, call the `$this->pageUrl()` method without any arguments.

```
<?
function onStart()
{
    $this['currentUrl'] = $this->pageUrl();
}
?>
```

```
___TWIG0___
```

## [#](#reverse-routing) Reverse Routing

When linking to a page that has URL parameters defined, the `|page` filter supports reverse routing by passing an array as the first argument.

```
url = "/blog/post/:post_id"
```

```
[...]
```

Given the above content is found in a CMS page file **post.htm** you can link to this page using:

```
<a href="___TWIG0___">
    Blog post #10
</a>
```

If the website address is **[https://octobercms.com  (opens new window)](https://octobercms.com)** the above example would output the following:

```
<a href="https://octobercms.com/blog/post/10">
    Blog post #10
</a>
```

## [#](#persistent-url-parameters) Persistent URL Parameters

If a URL parameter is already presented in the environment, the `|page` filter will use it automatically.

```
url = "/blog/post/:post_id"

url = "/blog/post/edit/:post_id"
```

If there are two pages, **post.htm** and **post-edit.htm**, with the above URLs defined, you can link to either page without needing to define the `post_id` parameter.

```
<a href="___TWIG0___">
    Edit this post
</a>
```

When the above markup appears on the **post.htm** page, it will output the following:

```
<a href="https://octobercms.com/blog/post/edit/10">
    Edit this post
</a>
```

The `post_id` value of *10* is already known and has persisted across the environments. You can disable this functionality by passing the 2nd argument as `false`:

```
<a href="___TWIG0___">
    Unknown blog post
</a>
```

Or by defining a different value:

```
<a href="___TWIG0___">
    Blog post #6
</a>
```

← [|app](docs__4.x__markup__filter__app.md)[|link](docs__4.x__markup__filter__link.md) →

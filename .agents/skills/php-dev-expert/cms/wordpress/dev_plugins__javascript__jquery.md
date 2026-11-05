# jQuery – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/javascript/jquery/

---

# jQuery

## In this article

Table of Contents

- [Using jQuery](#using-jquery)

Copy page
[View as Markdown](dev_plugins__javascript__jquery.md)

[Back to top](#wp--skip-link--target)

## [Using jQuery](#using-jquery)

Your jQuery script runs on the user’s browser after your WordPress webpage is received. A basic jQuery statement has two parts: a selector that determines which HTML elements the code applies to, and an action or event, which determines what the code does or what it reacts to. The basic event statement looks like this:

```
jQuery.(selector).event(function);
```

When an event, such as a mouse click, occurs in an HTML element selected by the selector, the function that is defined inside the final set of parentheses is executed.

All the following code examples are based on this HTML page content. Assume it appears on your plugin’s admin settings screen, defined by the file `myplugin_settings.php`. It is a simple table with radio buttons next to each title.

```
<form id="radioform">
	<table>
		<tbody>
		<tr>
			<td><input class="pref" checked="checked" name="book" type="radio" value="Sycamore Row" />Sycamore Row</td>
			<td>John Grisham</td>
		</tr>
		<tr>
			<td><input class="pref" name="book" type="radio" value="Dark Witch" />Dark Witch</td>
			<td>Nora Roberts</td>
		</tr>
		</tbody>
	</table>
</form>
```

The output could look something like this on your settings page.

![sample table](https://i0.wp.com/make.wordpress.org/docs/files/2013/11/pdh-ajax-example.png?ssl=1)

In the [article on AJAX](https://developer.wordpress.org/plugin/javascript/ajax/ "AJAX"), we will build an AJAX exchange that saves the user selection in usermeta and adds the number of posts tagged with the selected title. Not a very practical application, but it illustrates all the important steps. jQuery code can either reside in an external file or be output to the page inside a <script> block. We will focus on the external file variation because passing values from PHP requires special attention. The same code can be output to the page if that seems more expedient to you.

#### [Selector and Event](#selector-and-event)

The selector is the same form as CSS selectors: ".class" or "#id". There’s many [more forms](http://api.jquery.com/category/selectors/ "jQuery Reference"), but these are the two you will frequently use. In our example, we will use class ".pref". There’s also a slew of possible [events](http://api.jquery.com/category/events/ "jQuery Reference"), one you will likely use a lot is *‘click’*. In our example we will use *‘change’* to capture a radio button selection. Be aware that jQuery events are often named somewhat differently than those with JavaScript. So far, after we add in an empty anonymous function, our example statement looks like this:

```
$.(".pref").change(function(){
	/*do stuff*/
});
```

This code will “do stuff” when any element of the “pref” class changes.

**Note:** This code snippet, and all examples on this page, are for illustrating the use of AJAX. The code is not suitable for production environments because related operations such as [sanitization](dev_plugins__plugin-security__securing-input.md "Handbook Chapter"), [security](dev_plugins__plugin-security__user-capabilities-nonces.md#nonces "Handbook Chapter"), [error handling](http://www.sitepoint.com/error-handling-in-php/ "External Site"), and [internationalization](dev_plugins__javascript__internationalization.md "Handbook Chapter") have been intentionally omitted. Be sure to always address these important operations in your production code.

First published

October 28, 2014

Last updated

November 17, 2022

[Previous
Heartbeat API
Previous: Heartbeat API](dev_plugins__javascript__heartbeat-api.md)

[Next
AJAX
Next: AJAX](dev_plugins__javascript__ajax.md)

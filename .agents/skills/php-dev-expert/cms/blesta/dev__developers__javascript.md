# JavaScript | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/javascript

---

Version: 6

On this page

Each of the user interfaces supports its own set of custom JavaScript modules and Blesta functions attached to jQuery. This may include date pickers, tooltips, table row sorting, loading widgets, loading modals, disabling submission buttons, generating random passwords, making AJAX requests, and more.

## Admin Interface[â](#admin-interface "Direct link to Admin Interface")

### Bound Actions[â](#bound-actions "Direct link to Bound Actions")

The following functions are bound on page load and automatically listen to specific actions:

| Action | Notes | Since Version |
| --- | --- | --- |
| AJAX error refresh | If an AJAX error is encountered that returns an HTTP status code of 401 or 406, the page at the current URL will be refreshed. |  |
| Close widget boxes | Widgets may be collapsed if the widget box has a class, close. Widget boxes would match the following CSS: `.common_box_header.close+.common_box_inner` |  |
| Close alert messages | Messages (e.g. success, error, notice) may be closed by clicking the "x" icon at the top right |  |
| Form submission links | Links (i.e. `<a>` tags) that have the class submit automatically submit the closest form when clicked. `<a class="submit" href="#">Submit</a>` |  |
| Disable form submission buttons | Forms (i.e. `<form>` tags) that have the class disable-on-submit automatically set all `<input>` and `<button>` tags of type "submit" as disabled after the form is first submitted. This is to prevent multiple re-submissions of the same form. | 4.3 |
| Expandable table rows | Table rows (i.e. `<tr>` tags) that have the class expand will automatically toggle the next table row open or closed when clicked. The next table row must be a `<tr>` tag with the class expand\_details.  **See "Expandable table rows" codeblock below.** |  |
| Password Generator | A password generator modal may be triggered on click by any tag that has a generate-password class. | 4.3 |
| Tooltips | Tooltips appear when hovering the mouse over a `<span>` tag that has the class tooltip. The `<div>` inside of this span will be displayed. `<span class="tooltip">Hover Over Me<div>This text is displayed in the tooltip after you hover over the text "Hover Over Me".</div></span>` |  |

Expandable table rows

```
<table>  
	<tr class="expand">  
		<td>Clicking this row will open the next row below it.</td>  
	</tr>  
	<tr class="expand_details">  
		This row is expanded open or closed when the above row is clicked.  
	</tr>  
</table>
```

## Client Interface[â](#client-interface "Direct link to Client Interface")

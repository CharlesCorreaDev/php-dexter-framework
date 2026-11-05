# Creating search page for your component | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6890/creating-search-page-for-your-component

---

We will create search page for our custom component. First of all you will need to register a search page menu link for search sidebar. (Example Users, Groups, Your Name)

Please make sure you are using OSSN 7.2 at least

```
ossn_register_callback('ossn', 'init', function(){
			//register a menu item on search page load
			ossn_register_callback('page', 'load:search', function(){
					//keep other search arguments in place
					$args = OssnPagination::constructUrlArgs(array(
							'type'
					));
					$type = 'mycustom';
					ossn_register_menu_item('search', array(
								'name' => $type, //must be unique
								'text' => 'search:key', //this must be a langauge key not actual text as it handles itself ossn_print("search:key"),
								'href' => "search?type={$type}{$args}",
					));
			});											
});
```

Now we need to register page contents by using hook for search

```
ossn_register_callback('ossn', 'init', function(){
			//register a menu item on search page load
			ossn_register_callback('page', 'load:search', function(){
					//keep other search arguments in place
					$args = OssnPagination::constructUrlArgs(array(
							'type'
					));
					$type = 'mycustom';
					ossn_register_menu_item('search', array(
								'name' => $type, //must be unique
								'text' => 'search:key', //this must be a langauge key not actual text as it handles itself ossn_print("search:key"),
								'href' => "search?type={$type}{$args}",
					));
			});	
			
			//adding search page handler
			$type = "mycustom";
			ossn_add_hook('search', "type:{$type}", function($hook, $type, $return, $params){
					  	$query_string = $params['q'];
						//return your page contents here
						//example ossn_plugin_view('....
						return $query_string;
			});
});
```

Now adding a language file for search key. Create locale/ossn.en.php and add contents

```
<?php
ossn_register_languages('en', array(
			'search:key' => 'My Custom Component',									
));
```

Component can be found on <https://github.com/opensource-socialnetwork/SearchHandler>

[![Image Search](https://private-user-images.githubusercontent.com/805066/291061064-7913298a-7514-4633-adc6-7ebbb3b6cc0b.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTEiLCJleHAiOjE3MDI4MTU4MDcsIm5iZiI6MTcwMjgxNTUwNywicGF0aCI6Ii84MDUwNjYvMjkxMDYxMDY0LTc5MTMyOThhLTc1MTQtNDYzMy1hZGM2LTdlYmJiM2I2Y2MwYi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBSVdOSllBWDRDU1ZFSDUzQSUyRjIwMjMxMjE3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDIzMTIxN1QxMjE4MjdaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kYmMzNDlkM2U1ZGVlYTBjZGVhZTkzODc4MTUzMWQzODE2NGU2NGY2Y2U4ZGQxZGM0ZGNkNjE1Nzk2MzYxMDJmJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.NSvMJ6RipqNs_8NkfhO4KY0X_p2VSX108afwMB2UX_Y "Image Search")](https://private-user-images.githubusercontent.com/805066/291061064-7913298a-7514-4633-adc6-7ebbb3b6cc0b.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTEiLCJleHAiOjE3MDI4MTU4MDcsIm5iZiI6MTcwMjgxNTUwNywicGF0aCI6Ii84MDUwNjYvMjkxMDYxMDY0LTc5MTMyOThhLTc1MTQtNDYzMy1hZGM2LTdlYmJiM2I2Y2MwYi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBSVdOSllBWDRDU1ZFSDUzQSUyRjIwMjMxMjE3JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDIzMTIxN1QxMjE4MjdaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kYmMzNDlkM2U1ZGVlYTBjZGVhZTkzODc4MTUzMWQzODE2NGU2NGY2Y2U4ZGQxZGM0ZGNkNjE1Nzk2MzYxMDJmJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.NSvMJ6RipqNs_8NkfhO4KY0X_p2VSX108afwMB2UX_Y "Image Search")

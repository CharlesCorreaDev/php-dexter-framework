# Search page load | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5645/search-page-load

---

A callback triggered when search page is loaded. So you may add a menu items (on search page example users, group, blog etc) or perform additional things.

```
<?php
function my_component_init(){
		ossn_register_callback('page', 'load:search', 'my_component_cb');
}
function my_component_cb($callback, $type, $params = null){
		$url = OssnPagination::constructUrlArgs(array(
				'type'
		));
		ossn_register_menu_link('groups', 'groups', "search?type=groups{$url}", 'search');		
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

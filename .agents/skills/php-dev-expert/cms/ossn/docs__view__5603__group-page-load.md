# Group page load | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5603/group-page-load

---

Triggers during the group page load.

```
<?php
function my_component_init(){
		ossn_register_callback('page', 'load:group', 'my_component_cb');
}
function my_component_cb($callback, $type, $params = null){
		//it have no paramters values.
		//you can use ossn_get_page_owner_guid function to get a group GUID.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

# Profile before load | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5619/profile-before-load

---

Triggers before profile is loaded so you may register some menus if you wish or peform different stuff.

```
<?php
function my_component_init(){
		ossn_register_callback('page', 'load:profile', 'my_component_cb');
}
function my_component_cb($callback, $type, $params = null){
        //it have no paramters values.
        //you can use ossn_get_page_owner_guid function to get a profile GUID.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

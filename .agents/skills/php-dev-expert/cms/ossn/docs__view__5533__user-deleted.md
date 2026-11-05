# User deleted | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5533/user-deleted

---

A callback triggered when user is deleted from the system. This can be useful to find out which user is deleted in order to delete addtional records.

```
<?php
function my_component_init(){
		ossn_register_callback('user', 'delete', 'my_component_cb');
}
function my_component_cb($callback, $type, $variables){
			$userObject = $variables['entity'];
			//contains user object (guid, username, email etc)
			
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

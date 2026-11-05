# User created | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5532/user-created

---

A callback triggered when user is created or added to the system.

```
<?php
function my_component_init(){
		ossn_register_callback('user', 'created', 'my_component_user_created_cb');
}
function my_component_user_created_cb($callback, $type, $variables){
		$guid = $variables['guid']; //contains the GUID of newly created user	
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

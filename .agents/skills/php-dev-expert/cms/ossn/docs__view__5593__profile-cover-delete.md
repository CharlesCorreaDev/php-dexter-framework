# Profile cover delete | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5593/profile-cover-delete

---

Triggered when profile cover is deleted.

```
<?php
function my_component_init(){
		ossn_register_callback('delete', 'profile:cover:photo', 'my_component_cb');
}
function my_component_cb($callback, $type, $params){
		// $params['photo'] contains the (array) of Files Object
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

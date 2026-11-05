# Photo profile photo delete | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5594/photo-profile-photo-delete

---

Triggered when profile photo is deleted.

```
<?php
function my_component_init(){
		ossn_register_callback('delete', 'profile:photo', 'my_component_cb');
}
function my_component_cb($callback, $type, $params){
		// $params['photo'] contains the (array) of Files Object
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

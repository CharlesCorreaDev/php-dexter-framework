# Album photo delete | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5618/album-photo-delete

---

Triggers after album photo is deleted.

```
<?php
function my_component_init(){
		ossn_register_callback('delete', 'album:photo', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		// $params['photo'] contains the (array) of Files Object
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

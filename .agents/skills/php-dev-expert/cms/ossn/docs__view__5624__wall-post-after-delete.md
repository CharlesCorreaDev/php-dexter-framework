# Wall post after delete | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5624/wall-post-after-delete

---

Triggers after wall post is deleted.

```
<?php
function my_component_init(){
		ossn_register_callback('post', 'delete', 'my_component_cb');
}
function my_component_cb($callback, $type, $guid){
		//wall post $guid
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

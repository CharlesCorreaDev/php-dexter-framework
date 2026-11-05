# Group deleted | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5605/group-deleted

---

Triggers after group is deleted.

```
<?php
function my_component_init(){
		ossn_register_callback('group', 'delete', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['entity'] contains OssnGroup instance
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

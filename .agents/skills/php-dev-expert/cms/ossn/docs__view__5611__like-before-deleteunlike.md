# Like before delete/unlike | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5611/like-before-deleteunlike

---

Triggers before deleted/unliked.

```
<?php
function my_component_init(){
		ossn_register_callback('like', 'before:deleted', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params[subject_id, type, guid]
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

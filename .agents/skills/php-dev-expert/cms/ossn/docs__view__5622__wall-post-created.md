# Wall post created | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5622/wall-post-created

---

Triggers after wall post is created.

```
<?php
function my_component_init(){
		ossn_register_callback('wall', 'post:created', 'my_component_cb');
}
function my_component_cb($callback, $type, $params){
        //$params[guid, type, poster_guid]
		error_log(print_r($params, true));
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

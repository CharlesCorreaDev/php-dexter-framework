# Wall post edited | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5621/wall-post-edited

---

Triggers after wall post is edited.

```
<?php
function my_component_init(){
		ossn_register_callback('wall', 'post:edited', 'my_component_cb');
}
function my_component_cb($callback, $type, $params){
        //$params['text'] a new text, $params[object] Wall instance.
		error_log(print_r($params, true));
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

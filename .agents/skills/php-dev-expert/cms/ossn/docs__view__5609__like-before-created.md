# Like before created | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5609/like-before-created

---

Triggers before like is created.

```
<?php
function my_component_init(){
		ossn_register_callback('like', 'before:created', 'my_component_cb');
}
function my_component_cb($callback, $type, array $params){
		//$params['type'] (annotation, post, object, entity)
		//Depends on above type, $params['entity'] entity instance, $params['object'] OssnObject instance, $params['annotation'] OssnAnnotation/comment instance, $params['post'] OssnWall instance.
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

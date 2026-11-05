# Wall item load | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5620/wall-item-load

---

Triggers when wall item is loaded. So you mean register or change menu for each wall post instance.

```
<?php
function my_component_init(){
		ossn_register_callback('wall', 'load:item', 'my_component_cb');
}
function my_component_cb($callback, $type, $params){
        //$params contains wall object and some other keys.
		error_log(print_r($params, true));
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

# User Login Success | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/5749/user-login-success

---

A callback triggered when user login succeed. (Via login action)

```
<?php
function my_component_init(){
        ossn_register_callback('login', 'success', 'my_component_cb');
}
function my_component_cb($callback, $type, $vars){
            //$vars['user'] instance of user
}
ossn_register_callback('ossn', 'init', 'my_component_init');
```

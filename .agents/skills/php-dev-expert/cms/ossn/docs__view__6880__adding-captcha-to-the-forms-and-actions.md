# Adding captcha to the forms and actions | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6880/adding-captcha-to-the-forms-and-actions

---

Adding captcha to your forms using hooks are possible. Works with following captchas.

- <https://www.opensource-socialnetwork.org/component/view/1549/captcha>
- <https://www.opensource-socialnetwork.org/component/view/2516/google-recaptcha-v2>

```
<?php
function my_component_captcha_add(){
		ossn_add_hook('captcha', 'protected:components', function($hook, $type, $captcha, $params){
					 if(!is_array($captcha)){
							$captcha = array(); 
					 }
					 //examples 
					 
					 //your form names
					 $captcha['protected_forms'][] = 'login';
					 
					 //actions
					 $captcha['protected_actions'][] = 'user/register';					 
					 return $captcha;
		});
}
ossn_register_callback('ossn', 'init', 'my_component_captcha_add');
```

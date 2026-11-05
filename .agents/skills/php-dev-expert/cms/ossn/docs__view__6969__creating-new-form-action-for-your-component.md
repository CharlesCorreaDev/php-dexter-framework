# Creating new form action for your component | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6969/creating-new-form-action-for-your-component

---

You can create a new form action for your component using this subject.

Every form needs to take some sort of action. Before it can function, you must first register or create the action.

An example of an action is action/some/action/name.

Example

```
<form action="yourwebsite/action/some/action/name">.....
```

To create an OSSN action you need to add following in your component init file. `ossn_com.php`

```
<?php

ossn_register_callback('ossn', 'init', function () {
		if(ossn_isLoggedin()) {
				$path = ossn_route()->com . 'MyComponent/';
				//create file components/MyComponent/actions/myaction.php
				//MyComponent means your component ID
				ossn_register_action('mycomponent/dummy/action', $path . 'actions/myaction.php');
		}
});
```

Here component ID we used as dummy ID `MyComponent`

**Security Tokens**

Forms :

Every action must have security tokens included inside it. If you are using forms it automatically added if form is created using `ossn_view_form(...)`

Button:

If you are using action on button then you can add security tokens like

$action = ossn\_site\_url("action/mycomponent/dummy/action", true);

This will output something like

```
yourwebsite.com/action/mycomponent/dummy/action?ossn_ts=1708662980&ossn_token=683f424b5937a0058c6d11252fa0b529
```

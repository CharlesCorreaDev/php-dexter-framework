# Creating new simple end user form | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6986/creating-new-simple-end-user-form

---

In previous documentation we covered how to create your own action for your form.

[Creating new form action for your component.](docs__view__6969__creating-new-form-action-for-your-component.md "Creating new form action for your component.")

In this we will cover how to create your own simple form using OSSN simple layout and form function. We will use component `HelloWorld`

To create a form you need to use `ossn_view_form(name of form, parameters);`

```
$form  = ossn_view_form('helloworld/simple_form', array(
	'action' => ossn_site_url() . 'action/helloworld/simple/form',
	'class' => 'my-custom-form-class',
	'id' => 'my-form-id',
));
```

Name of form : `helloworld/simple_form`  
Form path : `components/HelloWorld/plugins/default/forms/helloworld/simple_form.php`

Now lets put the form in the actual page we created using `ossn_register_page` after adding into your component init function it becomes like :

```
<?php
ossn_register_callback('ossn', 'init', function () {
		ossn_register_action('helloworld/simple/form', ossn_route()->com . 'HelloWorld/actions/simple-form.php');
		ossn_register_page('hello_ossn_layout', function ($sub_pages) {
				//$subpage1 = $subpage[0]; //	website.com/hello_ossn_layout/{sub1}
				//$subpage2 = $subpage[1]; //	website.com/hello_ossn_layout/{sub1}/{sub2}

				$title = 'Page Title';
				$form  = ossn_view_form('helloworld/simple_form', array(
						'action' => ossn_site_url() . 'action/helloworld/simple/form',
						'class'  => 'my-custom-form-class',
				));
				$content = ossn_set_page_layout('contents', array(
						'content' => $form,
						'title'   => $title,
				));
				echo ossn_view_page($title, $content);
		});
});
```

It creates new page and form at Creating new page and form at website.com/hello\_ossn\_layout

References

HelloWorld Component - <https://www.opensource-socialnetwork.org/component/view/167/hello-world>

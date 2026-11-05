# Configuring the settings for your component | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6789/configuring-the-settings-for-your-component

---

Add a settings for your component. In previous document we have discussed how to add a configure panel for your component. This will cover creating a settings variables for your component.

Covered by Hello World component v2.4

**Registering an action**

In your init function register an action. `ossn_register_action("<action name>", "<full path to action file>")`

```
function my_com_init_func(){
	ossn_register_action('helloworld/admin/settings', ossn_route()->com . 'HelloWorld/actions/settings.php');
	ossn_register_com_panel('OssnWall', 'settings');
}
ossn_register_callback('ossn', 'init', 'my_com_init_func');
```

Create a file `components/HelloWorld/actions/settings.php`

**Creating a form**

Edit the configure page you created in previous tutorial, `components\HelloWorld\plugins\default\settings\administrator\HelloWorld\settings.php` and register a form

```
echo ossn_view_form('helloworld/settings_form', array(
    'action' => ossn_site_url() . 'action/helloworld/admin/settings',
    'class' => 'ossn-admin-form'	
));
```

Notice the action URL

```
'action' => ossn_site_url() . 'action/helloworld/admin/settings',
```

`helloworld/admin/settings` same as you used to register above.

\*\*Create an actual form file \*\*

Create file `components/HelloWorld/plugins/default/forms/helloworld/settings_form.php`

In the settings we will save 3 variables you can save any

```
<div>
	<label>Form Setting One</label>
	<input type="text" name="setting_one" />
</div>
<div>
	<label>Form Setting Two</label>
	<input type="text" name="setting_two" />
</div>
<div>
	<label>Form Setting Dropdown</label>
	<?php 
	echo ossn_plugin_view('input/dropdown', array(
			'name' => 'setting_dropdown',
			'placeholder' => 'Dropdown Example',
			'options' => array(
				'a' => 'Option A',
				'b' => 'Opton B',
			),
	));
	?>
</div>
<input type="submit" class="btn btn-success" value="Save" />
```

**Configuring action file**

Now we need to edit action file we have created with code to save settings.

```
<?php
$setting_one      = input('setting_one');
$setting_two      = input('setting_two');
$setting_dropdown = input('setting_dropdown');

$component = new OssnComponents();
$settings  = $component->setSettings('HellWorld', array(
		'setting_one'      => $setting_one,
		'setting_two'      => $setting_two,
		'setting_dropdown' => $setting_dropdown,
));

if($settings) {
		ossn_trigger_message('Settings has been saved');
} else {
		ossn_trigger_message('Settings can not be saved', 'error');
}
redirect(REF);
```

Notice the second paramter for setSettings must be always component ID. Here it is `HelloWorld`

**Getting the settings and pre-fill admin form**  
To get settings saved for existing component we will use getSettings method.

```
<?php
$component = new OssnComponents();
$settings  = $component->getSettings('HelloWorld');

$setting_one      = '';
$setting_two      = '';
$setting_dropdown = '';

if($settings) {
		if(isset($settings->setting_one)) {
				$setting_one = $settings->setting_one;
		}
		if(isset($settings->setting_two)) {
				$setting_two = $settings->setting_two;
		}
		if(isset($settings->setting_dropdown)) {
				$setting_dropdown = $settings->setting_dropdown;
		}
}
?>
<div>
	<label>Form Setting One</label>
	<input type="text" name="setting_one" value="<?php echo $setting_one;?>" />
</div>
<div>
	<label>Form Setting Two</label>
	<input type="text" name="setting_two"   value="<?php echo $setting_two;?>"/>
</div>
<div>
	<label>Form Setting Dropdown</label>
	<?php 
	echo ossn_plugin_view('input/dropdown', array(
			'name' => 'setting_dropdown',
			'value' => $setting_dropdown,
			'placeholder' => 'Dropdown Example',
			'options' => array(
				'a' => 'Option A',
				'b' => 'Opton B',
			),
	));
	?>
</div>
<input type="submit" class="btn btn-success" value="Save" />
```

**Getting settings on anywhere else in the code**

Use the same method

```
$component = new OssnComponents();
$settings  = $component->getSettings('HelloWorld');
```

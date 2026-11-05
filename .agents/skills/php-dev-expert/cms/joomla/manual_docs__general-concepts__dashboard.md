# Dashboard | Joomla! Programmers Documentation

> **Fonte / Source:** https://manual.joomla.org/docs/general-concepts/dashboard/

---

Version: 6.1 (Current)

On this page

It is common usage to insert a link into the component menu for direct access to your own component.
This is done in the manifest file:

Menu item Component in example.xml

```
    <administration>  
	    <menu>COM_EXAMPLE</menu>  
	  
	[.. ]  
	</administration>
```

## Add a dashboard to your component:[​](#add-a-dashboard-to-your-component "Direct link to Add a dashboard to your component:")

A parameter "dashboard" expands the menu entry to your component with a link to a dashboard. You can give this dashboard any name you want, but  **Note:** use lowercase and only "-", never underscore for the dashboard name.
my-example or example are correct, my\_example, Com-MY\_EXAMPLE are wrong.

The param dashboard

- will make a dashboard icon appear next to the administrator menu item for the component
- The dashboard icon will click through to display modules assigned to the cpanel-example administrator module position
- The title and icon defined in the XML file will be used as the header and icon at the top of the component's dashboard page.

Dashboard Link

```
<administration>  
	<menu>>  
		COM_EXAMPLE  
		<params>  
			<dashboard>example</dashboard>  
		</params>  
	</menu>  
	  
	[..]  
</administration>
```

Joomla provides now a dashboard for your component. You can add modules here using the  **position: cpanel-example** .

### Dashboard title and icon[​](#dashboard-title-and-icon "Direct link to Dashboard title and icon")

Give your dashboard a name and an icon. Add this to your manifest file:

Dashboard title and icon

```
    <dashboards>  
		<dashboard title="COM_EXAMPLE" icon="icon-calendar">example</dashboard>  
	</dashboards>
```

### Submenu[​](#submenu "Direct link to Submenu")

If you want to address different views of your component, expand the menu with a submenu.

Submenu items

```
<menu>  
	COM_EXAMPLE  
	<params>  
		<dashboard>example</dashboard>  
	</params>  
</menu>  
<submenu>  
	<menu link="option=com_example" view="examples">COM_EXAMPLE_MENU</menu>  
	<menu link="option=com_categories&amp;extension=com_example" view="categories">COM_EXAMPLE_ENU_CATEGORIES</menu>  
	<menu link="option=com_fields&amp;view=fields&ap;mp;context=com_example.example">COM_EXAMPLE_MENU_FIELDS</menu>  
	<menu link="option=com_fields&amp;view=groups&amp;context=com_example.example">COM_EXAMPLE_MENU_FIELD_GROUPS</menu>  
</submenu>
```

## Submenu Module on your Dashboard[​](#submenu-module-on-your-dashboard "Direct link to Submenu Module on your Dashboard")

Your dashboard is empty and waits for modules to be filled in. If you want to add your submenu, you have to

- add a folder presets to your component
- create a preset for your module
- add the presets folder to your .xml file
- expand your install script

Presets are already used in the core, see examples the component com\_menu.

### The menu preset[​](#the-menu-preset "Direct link to The menu preset")

In a folder 'presets' create a preset file, name it example.xml.

presets/example.xml

```
<?xml version="1.0"?>  
<menu  
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"  
	xmlns="urn:joomla.org"  
	xsi:schemaLocation="urn:joomla.org menu.xsd"  
	>  
	<menuitem  
		title="COM_EXAMPLE"  
		type="heading"  
		icon="calendar"  
		dashboard="example"  
		>  
		<menuitem  
			title="COM_EXAMPLE_MENU"  
			type="component"  
			element="com_example"  
			link="index.php?option=com_example&amp;view=examples"  
		/>  
  
		<menuitem  
			title="COM_EXAMPLE_MENU_CATEGORIES"  
			type="component"  
			element="com_categories"  
			link="index.php?option=com_categories&amp;view=categories&amp;extension=com_example"  
		/>  
	</menuitem>  
</menu>
```

### Manifest file[​](#manifest-file "Direct link to Manifest file")

New folder in example.xml

```
	<administration>  
  
    [..]  
  
		<files folder="admin">  
            <folder>forms</folder>  
			<folder>language</folder>  
            <folder>presets</folder>  
			<folder>services</folder>  
			<folder>sql</folder>  
			<folder>src</folder>  
            <folder>tmpl</folder>  
            <filename>access.xml</filename>  
            <filename>config.xml</filename>  
			<filename>example.xml</filename>  
		</files>  
	</administration>
```

### install script[​](#install-script "Direct link to install script")

We suppose here that you have a install script in your component. If not, please read the doc for install scripts.

You add your preset in the dashboard of your component with a single line of code during installation:

installation script

```
    // Add menu module to dashboard   
    $this->addDashboardMenu('example', 'example');
```

See also: [Joomla CMS Installer InstallerScript API](https://api.joomla.org/cms-6/classes/Joomla-CMS-Installer-InstallerScript.html#method_addDashboardMenu)

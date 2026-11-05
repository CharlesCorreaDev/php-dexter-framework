# Creating configure page for your component in administrator panel | Open Source Social Network Software

> **Fonte / Source:** https://www.opensource-socialnetwork.org/documentation/view/6787/creating-configure-page-for-your-component-in-administrator-panel

---

This will let you add the configuration page for your component in admin panel, in the configure menu. First you need to register a panel for your component in your component init function.

**Assumption** :

Component Name: HelloWorld  
ComponentID : HelloWorld  
Path : components/HelloWorld/

**Registering the panel**

```
function my_com_init_func(){
	ossn_register_com_panel('HelloWorld', 'settings');
}
ossn_register_callback('ossn', 'init', 'my_com_init_func');
```

**Adding page file**

Create a new file on following path `components\HelloWorld\plugins\default\settings\administrator\HelloWorld\settings.php`

In that file you can add your text, form etc. Adding settings will be explained in different document.

**Visit the page**

Go to the admin panel. In the menu bar look for Configure option. In configure option click `HelloWorld`

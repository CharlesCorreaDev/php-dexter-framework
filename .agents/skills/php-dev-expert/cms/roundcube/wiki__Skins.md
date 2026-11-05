# Skins · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Skins

---

# Skins - Styling the Roundcube Frontend

*Also see [Skin Markup](wiki__Skin-Markup.md)*

One nice feature of Roundcube certainly is it's strict separation of functionality and appearance. This allows you to create your individual skin with as much or as little features you'd like. The following explains how skins work and what commands and objects are available from the template engine.

## How do skins work

A skin is a set of HTML-based templates with CSS stylesheets and all the rest that is necessary to make Roundcube look nice. All files belonging to a skin are stored in a subfolder of the `skins/` directory which also denotes the name of the skin.

As the last step of processing a request from the client the template engine of Roundcube reads a template file from the active skin and replaces certain placeholders with real content. There's a neat schema in the [Dev Docs](wiki__Dev-Docs.md) that explains the process.

## Components of a skin

Within the skin subfolder all templates are read from the subfolder `templates/` and their file names are hard-coded. All other files are individual and are referenced from the templates and therefore can be named individually. Roundcube is shipped with a default skin (`skins/larry/` which is worth a look in order to see what a complete skin is made of.

This is the least structure a skin should provide (for list of templates see existing core skins):

```
  skins/<skinname>/
    composer.json
    meta.json
    thumbnail.png
    styles.css
    images/
    templates/
      about.html [...]
```

### Skinning plugins

As of Roundcube version 1.5.0. Some Roundcube plugins require additional skin information in order to display correctly. This is located in the `skins/` subfolder of each plugin. To make supporting plugins easier for skin developers a secondary file location is supported inside the skin folder. Inside your skin folder create a subfolder called `plugins` and then subfolders for each plugin you wish to support:

```
  skins/<skinname>/
    plugins/
      archive/
      markasjunk/
          markasjunk.css
      managesieve/
          managesieve.css
          templates/
              managesieve.html [...]
      <pluginname>/
          templates/
```

The contents of each plugin subfolder should match the contents of a skin subfolder in the original plugin folder. The original plugin folder takes priority over this location.

## meta.json

This file contains some meta information about the skin which are displayed, together with the `thumbnail.png` file, in the skin selection part of the user settings page. The meta file is purely JSON formatted (UTF-8!) and specifies the following properties:

```
{
  "name": "<the skin name>",
  "author": "<the skin author's name>",
  "url": "<link to author's website>",
  "license": "<skin license, e.g. Creative Commons, BSD, GPL>",
  "license-url": "<link to license text>",
  "localization": true,
  "config": [],
  "meta": {},
  "links": {}
}
```

- `localization` - tells Roundcube that it should read localization files from `localization/` in the skin directory. If your skin does not need additional translation labels just set it to `false`. Skins should use the same localization files structure and format used by plugins system.
- `config` - allows you can set (and force) any configuration options.
- `meta` - (Added in 1.4) a JSON object of meta tags to be inserted into the `meta` template object e.g.

```
...
"meta": {
  "<name>": "<content>",
  "viewport": "width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0"
  "theme-color": "#ffffff",
},
...
```

you can define additonal parameters for the meta tag as follows:

```
...
"<name>": {"content": "<content>", "id": "<id>"},
...
```

you can define multiple tags with the same name as follows:

```
...
"<name>": [{"content": "<content>", "id": "<id>"}, "<content>"],
...
```

- `links` - (Added in 1.4) a JSON object of link tags to be inserted into the `links` template object, the links object uses the same structure as the meta object e.g.

```
...
"links": {
  "<rel>": "<href>",
  "apple-touch-icon": {"sizes": "180x180", "href": "/apple-touch-icon.png"},
  "icon": [
    {"type": "image/png", "sizes": "32x32", "href": "/favicon-32x32.png"},
    {"type": "image/png", "sizes": "16x16", "href": "/favicon-16x16.png"}
  ],
  "manifest": "/site.webmanifest",
  "mask-icon": {"href": "/safari-pinned-tab.svg", "color": "#5bbad5"},
  "stylesheet": [
    "/branding.css",
    "/layout.css"
  ]
}
...
```

## Extending skins

As of Roundcube version 0.9.0 the skinning system allows a skin to extend another skin. This now makes it very easy to create customs skins which only apply minor changes to the default skins that come with the Roundcube core package. To create a skin that builds on another, simply name the base skin with the label `extends` in the meta.json file of your skin:

```
{
  "extends": "larry",
  ...
}
```

This basically adds the base skin folder to the search path for templates and assets. Now the extended skin only needs to provide the templates or includes that actually differ from the base skin. If you for example just want to add an additional CSS file which overrides certain styles of the Larry theme you can override the file include/links.html in your skin, adding another stylesheet. Then the custom skin file can even include the equivalent from the basic theme by specifying the `skinPath` attribute:

```
<roundcube:include file="/includes/links.html" skinPath="skins/larry" />
<link rel="stylesheet" type="text/css" href="/customstyles.css" />
```

**Unsetting an existing header**

When extending a skin if you wish to unset a meta or link tag defined in the parent skin it can be done as follows:

```
{
  "name": "MySkin",
  "extends": "elastic",
  ...
  "meta": {
    "viewport": false
  }
}
```

### Extending skins Elastic

To create a skin that builds on elastic, simply name the base skin with the label `extends` in the meta.json file of your skin:

```
{
  "extends": "elastic",
  ...
}
```

If you for example just want to add an additional CSS file which overrides certain styles of the Elastic theme you can create/override the file templates/includes/layout.html in your skin, adding another stylesheet. Then the custom skin file can even include the equivalent from the basic theme by specifying the `skinPath` attribute:

```
<roundcube:include file="includes/layout.html" skinPath="skins/elastic" />
<link rel="stylesheet" type="text/css" href="/customstyles.css" />
```

## The template engine

All templates are pure XHTML files and contain special tags of the form `<roundcube: .../>` which are parsed and replaced with the according content. Using these special tags you can also include other template files and make conditional blocks. The syntax and a detailed list of available tags is described on the [Skin Markup](wiki__Skin-Markup.md) page.

If enabled by configuration (`$rcmail_config['skin_include_php']`) also PHP code within templates is executed. All references like images, stylesheets and included files must be defined with absolute paths (starting with /) where / is the root of the skin subfolder.

## Templates and their usage

### login.html

No need to explain that this template is used to display the login page.

### mail.html

The default view of the mail section of Roundcube. This template should contain the folders and messages list and maybe the preview pane to display a message inline. The preview pane actually is an iframe which displays a mail message rendered with the `messagepreview.html`.

### message.html

Used to display the selected message including all headers and attachments. The message display is opened in the full browser window and also requires navigational parts to get back to the main view.

### messagepreview.html

Similar to `message.html` but used for the inline display of a message within the preview pane. No navigational elements are required here.

### messagepart.html

This template is used to render the frame to display a message attachment. It mainly contains an object where the actual attachment is loaded into as well as a download link.

### messageprint.html

When opening a mail message for printing this template is loaded. It should include some stylesheets optimized for printing and no navigation elements. It will be opened in a new window and might provide a link to close it.

### compose.html

This template gathers all the form elements that are necessary to compose a mail message. Copy it from the default skin because it might become quite complicated :-)

### addressbook.html

The main view of the address book section is controlled by this template. Similar to the mail view it displays the list of contacts, address sources and groups and it loads the contact details in an iframe.

### showcontact.html

Used to display all details of the selected contact record.

### editcontact.html

The edit form for a contact record is rendered using this template. It is also loaded in the iframe defined by the main address book view.

### addcontact.html

Very similar to the `editcontact.html` template but it probably shows different titles and buttons that match the task of creating a new contact record.

### importcontacts.html

The entire import process is styled by this template. The main content is hard-coded but this template provides the environment like title and navigation for these steps.

### settings.html

The section for all user settings is defined by this template. It consists of the list of settings groups and also shows the navigation to other settings parts like identities and folder management.

### settingsedit.html

This template renders the form to change a certain group of user settings. It is loaded into an iframe which is defined by the main `settings.html` template.

### identities.html

The list of sender identities is managed using this template. It has a similar structure as the `addressbook.html` template showing a list of stored identities and an iframe to load the edit form.

### editidentity.html

Contains the edit form to create or modify a sender identity record and is loaded in an iframe and thus don't requires any navigation elements.

### managefolders.html

The template that holds all elements needed to manage the imap folders of the current mailbox. It is part of the settings section and should contain links to other parts of this section.

### plugin.html

This is a generic template which is used to render the contents of a plugin. Most plugins bring their own templates but in case one doesn't this template is loaded.

### error.html

Last but not least this template is used to display notifications about fatal errors which prevent the system from working correctly.

## Publishing Skins

We strongly encourage skin developers to maintain the code in a git or svn repository, best done by creating separate repositories for every single skin. There are many platforms which offer such repositories for free (e.g. [Github](http://github.com), [Gitorious](http://gitorious.org) or [Sourceforge](http://sourceforge.net)).

Starting with Roundcube 1.5.0 and version 0.3.0 of the [Roundcube plugin-installer](https://github.com/roundcube/plugin-installer) skins can be distributed via [Composer](https://getcomposer.org/), publish your skin to [packagist.org](https://packagist.org) which is the default repository for PHP packages. As a skin developer you can publish your skin on that platform and by using git or svn repositories, the latest version you check in there will automatically find its way to the repository and finally to the users.

### sample composer.json for skins

```
{
    "name": "<your-vendor-name>/<skin-name>",
    "type": "roundcube-skin",
    "license": "GPL-3.0+",
    "require": {
        "roundcube/plugin-installer": ">=0.3.0"
    }
}
```

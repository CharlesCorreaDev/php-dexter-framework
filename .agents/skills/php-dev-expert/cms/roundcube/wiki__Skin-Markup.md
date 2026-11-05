# Skin Markup · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Skin-Markup

---

# Skin template markup language

As described on the [Skins](wiki__Skins.md) page, skin templates are regular XHTML files with special tags which are then replaced by the content according to their meaning.

## Tags

The template engine of Roundcube supports the following tags. All tags are written in common HTML syntax and require certain attributes. Regular HTML attributes are also accepted and will be added to the final HTML output of the according tag.

### roundcube:include

Includes (and processes) the referenced file. Similar to PHPs `include()` the content of the included file will be parsed by the template engine and then placed where this tag is placed.

*Attributes*:

- file: *Path to the file to be included starting with /*
- condition: *Boolean condition to be fulfilled*

*Example:*

```
<roundcube:include file="/includes/head.html" />
```

### roundcube:var

Returns the content of the specified environment variable. See [Environment variables](#environment-variables) for possible values.

*Attributes*:

- name: *The variable name*

*Example:*

```
<roundcube:var name="env:task" />
```

### roundcube:exp

Evaluates the given expression and returns the resulting content. The syntax of the expressions is actually PHP code but can contain variables as described in [Environment variables](#environment-variables).

*Attributes*:

- expression: *The expression to evaluate*

*Examples*:

```
<roundcube:exp expression="!empty(cookie:mailviewsplitter) ? cookie:mailviewsplitter-5 : 245" />
<roundcube:exp expression="browser:ie ? 'width:400px' : '380px'" />
```

### roundcube:label

Gets a localized text with the given name.
Also allows to define localized texts for various languages and 'register' them under the given name.

*Attributes*:

- name: *The label name*
- condition: *Boolean condition to be fulfilled*
- quoting: *How to escape special characters: html,javascript,no; default is html*
- noshow: *Only register the localized text under the given name but do not print it*
- `<lang-code>`: *Defines the text value for the given language code*

*Examples:*

```
<roundcube:label name="errortitle" quoting="javascript" />

<!-- register label -->
<roundcube:label name="my.label" en_US="My Label" de_DE="Mein Text" noshow="true" />

<!-- print custom label -->
<roundcube:label name="my.label" />
```

### roundcube:button

Creates a button for a specific command of the Roundcube client. A button is also registered in the UI manager and is automatically enabled and disabled according to the current state of the application.

*Attributes*:

- type: *The type of the button. Possible values are link|input|image*
- command: *The application command this button triggers*
- prop: *Additional argument of the triggered command*
- label: *Localized text content of "link" buttons*
- title: *The common HTML title attribute. Use the name of a localized label*
- content: *The actual content of the generated HTML element*
- class: *CSS class(es) for the disabled state of the button*
- classAct: *CSS class(es) for the enabled state*
- classSel: *CSS class(es) applied when the button is pressed*
- imagePas: *Image file for the disabled state*
- imageAct: *Image file for the enabled state*
- imageSel: *Image displayed when the button is pressed*
- condition: *Boolean condition to be fulfilled*

*Types*:

- link: *Creates a regular `<a></a>` tag*
- input: *Creates a form button*
- image: *Creates a button using the given image*

*Examples:*

```
<roundcube:button command="mark" prop="read" label="markread" class="rlink" classAct="rlink active" />
<roundcube:button command="save" type="input" class="button mainaction" label="save" />
<roundcube:button command="add" imageAct="/images/btn_add_act.png" imagePas="/images/btn_add_pas.png" width="32" height="32" title="newcontact" />
```

### roundcube:container

This tag defines a container where plugins can add their stuff. HTML content will be added at this tags position by the template engine and it also specifies the ID of a DOM element where more content can be added client side.

*Attributes*:

- name: *The name of the container*
- id: *ID of the HTML element which actually represents this container*

*Example:*

```
<div id="thetaskbar">
...
<roundcube:container name="taskbar" id="thetaskbar" />
</div>
```

### roundcube:object

Dynamic content which is created by the application is put into the template with this tag. An object is identified by the *name* attribute and can require further attributes according to the object type as well as regular HTML attributes which are just passed through. The section [Content objects](wiki__Skin-Markup.md#content-objects) describes all available objects and their attributes.

Please note that most objects are only available in certain steps/tempaltes. An object tag will be ignored and replaced by an empty string if it's not available.

*Attributes*:

- name: *The object to put here*
- condition: *Boolean condition to be fulfilled*
- *object-specific attributes*

*Examples:*

```
<roundcube:object name="messageContentFrame" id="messagecontframe" width="100%" height="100%" src="/watermark.html" />
<roundcube:object name="messageCountDisplay" style="padding:0.5em; float:right" />
```

(since 1.5)

Note: To use dynamic values for *object-specific attributes* the attribute name can be proceeded by a colon (:).

*Examples:*

```
<roundcube:object name="messages" :optionsmenuicon="!in_array('list_cols', (array)config:dont_override)" />
```

### roundcube:if/elseif/else/endif

These tags allow you the include or exclude certain parts of the template if a given [Conditional expressions](wiki__Doc_SkinML.md#Conditionalexpressions/) evaluates to true.

*Attributes:*

- condition: *Boolean condition to be fulfilled*

*Example:*

```
<roundcube:if condition="count(env:address_sources) &gt; 1" />
  ...
<roundcube:else />
  ...
<roundcube:endif />
```

## Content objects

These dynamic objects are created by the core application and will be placed wherever a `roundcube:object` tag is found. Objects are selected by the `name` attribute of the tag. The following objects are available and require/support the listed attributes.

### version

Prints the current version of the Roundcube installation.

### loginform

The first thing you'll see is generated by this object.

*Attributes*

- form: *The name of the `<form>` tag surrounding it. If empty the form tag will be generated*
- autocomplete: *Is added to the input fields to enable/disable the browser's form completion*

### message

Gets the container for messages displayed to the user.

### username

Displays the current user name.

### productname

Inserts the product name set by config.

### logo

Creates a `<img>` tag to display the logo. If set, the `src` attribute is replaced by the config option `skin_logo`.

*Attributes*

- src: Path to logo in skin folder
- alt: Alt text for image; defaults to object *productname*

### mailboxlist

The list of subscribed mailboxes/folders of the current IMAP account either as `<ul>` or `<select>`.
See [message.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/message.html) for examples.

### messages

Container for the table of messages. Supports many attributes for styling.
See [mail.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/mail.html) for an example.

### messagecountdisplay

Inserts a placeholder for displaying the number of messages and the currently displayed range.

### quotadisplay

Block element to display the mailbox quota provided by the IMAP server.

### mailboxname

Container to display the currently selected mailbox/folder name.

### messageheaders

Creates a table with headers of the currently displayed message.
See [message.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/message.html) for an example.

### messagebody

This is where the message content will be inserted.
Usable in [message.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/message.html) and [messagepreview.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/messagepreview.html)

### messagecontentframe

Inserts an `<iframe>` - the preview pane - to load the message preview.
See [mail.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/mail.html) for an example.

### messagepartframe

Creates an `<iframe>` to load the selected attachment.
Only used in [messagepart.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/messagepart.html).

### messagepartcontrols

Filename, size and download link of the selected attachment.
Used in [messagepart.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/messagepart.html).

### searchfilter

Creates a drop-down menu to select quick-search filters.
See [mail.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/mail.html) for an example.

### searchform

A search input field surrounded with a `<form>` used for searching messages or contacts.
See [mail.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/mail.html) for an example.

### messageattachments

The list of attachments of the currently displayed message.
Usable in [message.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/message.html) and [messagepreview.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/messagepreview.html)

### blockedobjects

Message box displayed when a HTML message contains blocked objects such as remote images and stylesheets.

### composeheaders

### composesubject

### composebody

### composeattachmentlist

### composeattachmentform

### composeattachment

### priorityselector

### editorselector

### receiptcheckbox

### storetarget

See [compose.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/compose.html) for examples of the above objects.

### filedroparea

This container will be activated to receive files dragged & dropped into the browser window in order to be uploaded.
Used in [compose.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/compose.html) and [contactedit.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/contactedit.html)

### directorylist

Similar to the mailboxlist this inserts the list of available address directories.
Used in [addressbook.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/addressbook.html).

### addresslist

### addressframe

### recordscountdisplay

See [addressbook.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/addressbook.html) for an example.

### contacthead

### contactphoto

### contactdetails

Used in [contact.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/contact.html).

### contacteditform

### contactedithead

### photouploadform

Used in [contactedit.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/contactedit.html).

### importstep

### importnav

See [importcontacts.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/importcontacts.html) for examples.

### prefsframe

### sectionslist

### userprefs

### sectionname

See [settings.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/settings.html) for examples.

### identitieslist

Used in [identities.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/identities.html).

### identityform

Used in [identityedit.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/identityedit.html).

### foldersubscription

### folderframe

See [folders.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/folders.html) for examples.

### folderdetails

Used in [folderedit.html](https://github.com/roundcube/roundcubemail/blob/master/skins/larry/templates/folderedit.html).

## Environment variables

Certain variables from the running PHP script are available to the templates too. They're mainly used to build conditional expressions or to be written to the final output using the `roundcube:expression` tag. There are several "sources" or environments where values can be retrieved from. A variable selector consists of the environment name followed by a colon and the field name:

```
env:action
```

The following environments are available:

### session:

This selector gives access to session variables. For example:

```
session:username
```

### config:

All configuration values as set in `config/main.inc.php` can be accessed using this selector. It is also possible to set a default value which is used in case the config parameter is not set. This is done by adding another colon followed by the default value:

```
config:sent_mbox:Sent
```

### env:

This selector gives access to state variables which define the current action and all its state. The most important ones are:

```
env:task
env:action
env:quota
env:address_sources
```

Env variables are very specific to tasks and actions. See the source code for more vars.

### cookie:

This selectors provides access to the cookies submitted by the client. This includes cookies which were set server-side as well as cookies set by the skin itself using javascript.

### request:

Similar to the `cookie:` selector this one provides access to values of the current request submitted either by POST or GET.

### browser:

The Roundcube backend provides a browser detection class which analyzes the user agent string submitted by the client and extracts certain values and boolean properties. The browser selector contains the following properties:

- `ie` True if Internet Explorer
- `mz` True if Mozilla Firefox or other Mozilla derivate
- `ns` True if Netscape browser
- `opera` True for Opera browsers
- `khtml` True for KHTML-based browsers
- `safari` Alias for KHTML
- `chrome` True for Google Chrome browser
- `ver` The version number according to the browser type
- `lang` The user agent language (2 chars)
- `win` True for Windows operating system
- `mac` True for Mac OS
- `linux` True for any Linux OS
- `unix` True for other Unix systems

## Conditional expressions

If a tag has the *condition* attribute it will only create output if the conditional expression within this attribute evaluates to true. These expressions consist of [environment variables](#environment-variables), boolean operators and also PHP functions. They should either evaluate to true or false, numeric values > 0 are considered as true.

*Examples:*

```
env:task == 'mail && !empty(cookie:mailviewsplitter)
count(env:address_sources) <= 1
config:identities_level:0 < 2
browser:safari || browser.opera
```

# Plugin Hooks · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Plugin-Hooks

---

# Available Plugin Hooks

The registered callback function receives a *hash array* as single argument which contains hook specific data (called *Arguments* in the following list). It can then alter some of these values (listed as *Return values*) by returning a hash array containing the modified values.

Index:

- [Global Hooks](#global-hooks)
- [Task "login"](#task-login)
- [Task "logout"](#task-logout)
- [Task "mail"](#task-mail)
- [Task "addressbook"](#task-addressbook)
- [Task "settings"](#task-settings)
- [Template Hooks](#template-hooks)
- [Missing documentation](#missing-documentation)

## Global Hooks

### startup

When the application is initialized.
This is the place where task and action arguments can be altered.

*Arguments:*

- task
- action

*Return values:*

- task
- action

### ready

(since 0.7-beta)

When the application is ready, user is authenticated and the request was checked.
This is the place where task and action arguments can be altered too. It is executed before
any actions and task's func.inc files.

*Arguments:*

- task
- action

*Return values:*

- task
- action

### config\_get

On direct access to a config option, plugins can inject their own values or implement an
alternative storage for configuration.

*Arguments:*

- name
- default
- result

*Return values:*

- result

### storage\_folders

Former `mailboxes_list`

Triggered whenever a list of the mailboxes is requested from the IMAP class.
If no plugin returns a list, the default list is retrieved.

*Arguments:*

- root: *Root folder*
- name: *Folder name pattern*
- filter: *Optional filter*
- mode: *Query mode: LSUB or LIST*

*Return values:*

- folders: *Folders list to be used*

### render\_mailboxlist

When the mailbox list is about to be rendered.
This hook allows plugins to alter the folder tree or to localize folder names.

*Arguments:*

- list: *The hierarchical list of mailboxes*
- delimiter: *IMAP hierarchy delimiter*

*Return values:*

- list

### write\_log

Triggered every time a message is sent to the logs.
Setting the `abort` field to true finishes log action before writing to file.

*Arguments:*

- name: *The name of the target log*
- line: *The line to write to the log*

*Return values:*

- name
- line
- abort

### console

Called for debug logging.
Setting the `abort` field to true avoids regular debug logging which will again trigger the `write_log`hook.

*Arguments:*

- args: *List of variables to dump*

*Return values:*

- args
- abort

### email2user

Triggered whenever a email-to-user lookup is executed.

*Arguments:*

- email: *E-mail address*

*Return values:*

- user: *User login*

### user2email

Triggered whenever a login-to-email lookup is executed.
Can be used also to set initial identities for a new user.

*Arguments:*

- user: *User login*
- first: *True if one entry is expected*
- extended: *True if array result (email and identity data) is expected*

*Return values:*

- email: *E-mail address (or array of arrays with keys: email, name, organization, reply-to, bcc, signature, html\_signature)*

### request\_token

(since 0.6-beta)

Request tokens created for CSRF prevention are passed to this hook before they're used.
A plugin can register or even alter these request tokens.

*Arguments:*

- value

*Return values:*

- value

### refresh

(since 0.9-rc)

Hook triggered by periodic polling requests from the client to collect updates or new data. This only happens on AJAX requests
and plugins can execute actions on the client by adding command calls to the output object:

```
$rcmail->output->command('plugin.somecallback');
```

*Arguments:*

- last: *timestamp of last refresh call*

*Return values:*
none.

---

## Task "login"

### authenticate

Before the user login on the IMAP server is performed.

*Arguments:*

- host
- user
- pass
- cookiecheck
- valid

*Return values:*

- host
- user
- pass
- cookiecheck: *set to false to disable cookie check*
- valid: *set to true to disable CSRF check.* (since 0.5.1)
- abort: *set to true to skip the imap login and fail*
- error: *if using abort, also set error to any string (else you will get a storage error)*

### login\_after

Triggered after a user successfully logged in.
This hook allows a plugin to control the redirect after the login form was submitted. Information about the current user can be obtained from the `rcube_user` object at `rcmail::get_instance()->user`

*Arguments:*

- [*url parameters, e.g. task, action, etc.*]

*Return values:*

- task
- action
- [*more url parameters*]

### login\_failed

Triggered if user authentication failed.
Could be useful for logging or to give more detailed feedback to the user why the login failed.

*Arguments:*

- host
- user
- code

*Return values:*
none.

### user\_create

When a somebody logs in the first time and a local user is created.
Return values will also be used to create the default identity for this new user.

*Arguments:*

- user
- user\_name
- user\_email
- host

*Return values:*

- user\_name
- user\_email
- alias
- language

### oauth\_login

(since 1.5-rc)

Hook triggered after successful authentication via OAuth.
It provides all data exchanged with the OAuth service including access and refresh tokens as well as identity information.

*Arguments:*

- access\_token: The access token obtained from the OAuth service
- token\_type: The token type (e.g. Bearer)
- refresh\_token: The refresh token (if supplied)
- expires: Unix timestamp when the access token will expire
- username: The username of the authenticated session
- identity: Hash array with identity information of the authenticated user

*Return values:*
none.

### oauth\_refresh\_token

(since 1.5-rc)

Hook triggered after the OAuth access token was refreshed.
It provides all data exchanged with the OAuth service including access and refresh tokens as well as identity information.

*Arguments:*

- access\_token: The access token obtained from the OAuth service
- token\_type: The token type (e.g. Bearer)
- expires: Unix timestamp when the access token will expire

*Return values:*
none.

---

## Task "logout"

### session\_destroy

Triggered when a user logs out and the session is destroyed.

*Arguments:*
none.

*Return values:*
none.

### logout\_after

After the user is logged out and the session is killed, this hook is triggered.
The arguments still contain some user info which is not available in `$_SESSION` anymore.
It's also possible to redirect to some other URL in this hook because it's the last action in the logout process.

*Arguments:*

- host
- user
- language

*Return values:*
none.

---

## Task "mail"

### storage\_init

Former *imap\_init*

This hook allows you to configure some IMAP communications options.

*Arguments:*

- fetch\_headers: *String appended to the FETCH HEADER.FIELDS () list*
- message\_flags: *Hash array with message flags and their IMAP equivalents*

*Return values:*

- fetch\_headers: *String with additional headers to be fetched (separated by space)*
- message\_flags

### storage\_connect

Triggered right before connecting to the IMAP server.
Similar to the *authenticate* hook but triggered in every step not just on login.

*Arguments:*

- host
- user
- attempt: *Number of connection attempt (if retry is returned)*

*Return values:*

- host
- user
- pass
- retry: *Set this to true for anther connection attempt*

### storage\_connected

(since 1.1-beta)

Triggered after successful IMAP logins.

*Arguments:*

- host
- user
- session: *IMAP session identifier if provided by the server*

*Return values:*
none.

### message\_load

Triggered when a message is loaded from the server, namely when a new rcube\_message object was created.
This allows one to analyze the structured message object and find specific attachments, headers or contents for further actions.

*Arguments:*

- object: *The rcube\_message instance*

*Return values:*
none.

### message\_read

Triggered when a message is loaded and its SEEN flag is not yet set.
The `message` argument will give you access to all the message headers and its structure.

*Arguments:*

- uid
- mailbox
- message: *The according rcube\_message instance*

*Return values:*
none.

### message\_part\_structure

Triggered for every part of the message structure when it's parsing is processed.
The *structure* argument holds a hierarchical list of the current part and its sub-parts.

*Arguments:*

- object: *The rcube\_message instance*
- structure: *The raw part structure from the IMAP server*
- mimetype: *Content type of the part (lowercase)*
- recursive: *True if the part is parsed recursively (a sub-part)*

*Return values:*

- structure
- mimetype
- recursive

### message\_part\_before

Triggered before a message part (text or html) is cleaned/formatted.

*Arguments:*

- type
- body
- safe
- plain
- inline\_html

*Return values:*

- type
- body
- safe
- plain
- inline\_html

### message\_part\_after

After message text part formatting.

*Arguments:*

- type
- body
- safe
- plain
- inline\_html

*Return values:*

- body

### message\_part\_get

(since 0.8-beta)

Callback when downloading or displaying a non-text part of a message (e.g. an attachment).

*Arguments:*

- uid: *The message UID*
- id: *The part's mime number*
- mimetype: *The part's mime type*
- download: *True if download is forced*
- part: *The message part structure*

*Return values:*

- mimetype
- download
- body

### message\_headers\_output

Triggered when building the message headers table for display.
If you want to add more headers, you need to fetch them at the *storage\_init* hook.

*Arguments:*

- output: *Hash array with all the headers to be put into the html table*
- headers: *Message headers object*

*Return values:*

- output: *Altered headers array*

### message\_check\_safe

Sets message *safe* flag when a message contains a HTML part. This hooks allows plugins to alter the *safe*
flag after the lookup for known senders was executed. Check `$args['message']->is_safe` and set
`$args['message']->set_safe(true|false)` to modify the setting.

*Arguments:*

- message: *The according rcube\_message instance*

*Return values:*
none.

### message\_objects

Hook to render the alert box displayed above a message when links to remote images or resources are detected.
This is also triggered for draft messages showing the edit button.

*Arguments:*

- content: *Array with alert box contents*
- message: *The according rcube\_message instance*

*Return values:*

- content: *Altered headers array*

### message\_body\_prefix

Contents prepended to the message body block when viewing an email message.

*Arguments:*

- part: *rcube\_message\_part instance of the rendered body part*
- prefix: *The content to be prepended*

*Return values:*

- prefix

### message\_compose

Triggered when the compose step is executed (before redirecting).
This allows a plugin to manipulate the request parameters and pre-fill the compose form.
Even attachments can be appended to the message using this hook.

*Arguments:*

- param: *Array with request parameters*

*Return values:*

- param: \_Compose parameters like 'to', 'subject', 'body' \_
- attachments: \_Array of attachments to be added. An entry (array) should contain the fields 'path', 'name' and 'mimetype' \_

### message\_compose\_body

Triggered during the compose step.
This allows a plugin to modify the body of a message after the blank/draft/forward has been assembled, but before the compose form is displayed.

*Arguments:*

- body: *The body of the message*

*Return values:*

- body: *The body of the message*

### attachment\_upload

Triggered every time a user uploads an attachment in message compose mode.
This hook is mainly used by core plugins that handle the storage of the uploaded files.

*Arguments:*

- path: *Temporary file path to the uploaded file*
- name: *The original file name*
- mimetype: *Detected mime-type*

*Return values:*

- status: *True if the file was successfully stored (required)*
- error: *Error message in case a plugin rejects the upload and sets the `abort` flag*
- id: *The unique ID of the file to get retrieve it later on (required)*
- name
- mimetype
- abort

### attachment\_save

Triggered for every attachment of forwarded message before compose.
This hook is mainly used by core plugins that handle the storage of mail attachments.

*Arguments:*

- path: *Temporary file path or*
- data: *File contents (if path is empty)*
- name: *The original file name*
- mimetype: *Detected mime-type*
- content\_id: *Message part ID*

*Return values:*

- status: *True if the file was successfully stored (required)*
- id: *The unique ID of the file to get retrieve it later on (required)*
- name
- mimetype

### message\_outgoing\_headers

(deprecated, use [message\_before\_send](#message_before_send) or [message\_ready](#message_ready) hooks instead)

Before a mail message is sent, this hooks allows you to set additional mail headers.

*Arguments:*

- headers: *Hash array with current message headers*

*Return values:*

- headers
- abort: *If true the message will not be sent*
- message: *The reason why the message was not sent which will be shown to the user*

### message\_outgoing\_body

Before a mail message is composed, this hook is triggered before adding the message body contents.

*Arguments:*

- body: *The message body to be added*
- type: *html|plain|alternative*
- message: *Reference to current MailMime object*

*Return values:*

- body

### message\_ready

(since 1.2-beta)

Before a composed message is either sent or saved as draft, this hook allows final modifications to the mime structure.

*Arguments:*

- message: *Reference to current MailMime object*

*Return values:*

- message: *The modified or completely replaced MailMime object*

### smtp\_connect

Triggered when before opening an SMTP connection to send a message.
Some SMTP related config options are passed as arguments and can be altered by a plugin.

*Arguments:*

- smtp\_server
- smtp\_port
- smtp\_user
- smtp\_pass
- smtp\_auth\_type
- smtp\_helo\_host

*Return values:*
*all arguments*

### message\_before\_send

Triggered before message is finally sent

*Arguments:*

- message: *Message object (Mail\_mime)*
- from: *Sender address string*
- mailto: *Either a comma-separated list of recipients (RFC822 compliant), or an array of recipients, each RFC822 valid*
- options: *SMTP options*

*Return values:*

- message
- from
- mailto
- options
- abort: *Aborts sending operation.*
- error: *Error message as string or arguments to be passed to rcube::gettext(). Used with abort=true*
- result: *Boolean result of send operation. Used with abort=true.*

### message\_sent

Triggered when a message is finally sent
This hook doesn't have any return values but can be used for logging or notifications.

*Arguments:*

- headers: *Hash array with all message headers*
- body: *The full message body as text or file handle*

*Return values:*
none.

### message\_draftsaved

(since 0.8-beta)

Triggered when a message is saved as draft .
This hook can be used for logging or notifications and it can overwrite the displayed confirmation message.

*Arguments:*

- msgid: *The message ID header value*
- uid: *The UID of the message saved*
- folder: *The folder where the message was saved in*

*Return values:*

- message: *Confirmation message text to display*

### check\_recent

Triggered before checking the given folders for new messages. Plugins can alter the list of folders
to be considered for the checking.

*Arguments:*

- folders: *The list of folders to be checked*
- all: *True if checking all folders is enabled*

*Return values:*

- folders

### new\_messages

Triggered in step *check\_recent* if some new (recent) messages are available.
This hook doesn't have any return values but it can add some javascript actions to the output.

*Arguments:*

- mailbox: *The current mailbox*

*Return values:*
none.

### html\_editor

Triggered to add HTML editor scripts into the page.
You can use it to replace default TinyMCE editor.

*Arguments:*

- mode: *Editor mode. Specifies where editor is used. For identity signature or message body*

*Return values:*

- abort

### quota

Triggered after fetching mailbox quota resource usage and limits from IMAP server.

*Arguments:*

- total: *Mailbox size limit in kilobytes. Not set if server doesn't support IMAP quota.*
- used: *Current mailbox size in kilobytes. Not set if server doesn't support IMAP quota.*
- percent: *Current mailbox size in percent. Not set if server doesn't support IMAP quota.*

*Return values:*

- total: *Mailbox size limit in kilobytes.*
- used: *Current mailbox size in kilobytes.*
- percent: *Current mailbox size in percent.*

### messages\_list

Triggered before sending the message list.
You can use it to set message headers, list\_cols/list\_flags and other rcube\_mail\_header variables.
Also use it to pass additional plugin related flags to the UI using the extra\_flags array.

*Arguments:*

- messages: *List of message headers.*
- cols: *All the currently visible columns.*

*Return values:*

- messages
- cols

---

## Task "addressbook"

### addressbooks\_list

Triggered when building the list of address sources in the address book view.
Each entry in the *sources* list needs to hold the following fields: *id, name, readonly*.

*Arguments:*

- sources: *Hash array with list of available address books*

*Return values:*

- sources

### addressbook\_get

This hook is triggered each time an address book object is requested.
The *id* parameter specifies which address book the application needs. If it's the ID of the plugins' address book, this hooks should return an according instance of a `rcube_addressbook` implementation.

*Arguments:*

- id

*Return values:*

- instance: *Instance of an address book implementation derived from rcube\_addressbook*

### contact\_validate

(since 1.0-beta)

Triggered before an contact record is saved (e.g. created or updated).
A plugin can perform additional validation checks and reject the contact data from being saved.

*Arguments:*

- record: *Hash array with record fields*
- autofix: *Attempt to automatically fill the missing fields*
- valid: *Result of the default pre-validation*

*Return values:*

- record: *Record data with corrected values*
- valid: *Set to false if invalid*
- error: *Provide a reason if validation failed*
- abort

### contact\_create

Triggered when an new address book record is created.
A plugin can prevent the contact to be created by setting the `abort` field to true. The user is then rejected back to the input form.

*Arguments:*

- record: *Hash array with record fields*
- source: *Address book identifier*

*Return values:*

- record
- abort

### contact\_update

Triggered when an address book record is saved.
As in the *create\_contact* hook this action can be aborted by setting the `abort` field to true.

*Arguments:*

- id
- record: *Hash array with record fields*
- source: *Address book identifier*

*Return values:*

- record
- abort

### contact\_delete

Triggered when an address book record is to be deleted.
To abort the deletion a plugin can set the `abort` field to true.

*Arguments:*

- id
- source: *Address book identifier*

*Return values:*

- abort

### contact\_displayname

(since 0.6-beta)

When saving a contact without name field or when adding a contact from mail task,
all data is passed to this hook where the display name can be composed.

*Arguments:*

- name: *The name of the contact to be saved (could be empty)*
- email: *E-mail address*
- prefix
- firstname
- middlename
- surname
- suffix

*Return values:*

- name

### group\_create

(since 0.4-beta)

Triggered when a contacts group is to be created.
A plugin can set the `abort` field to true in order to prevent the creation of this group.

*Arguments:*

- name: *The name of the group to create*
- source: *Address book identifier*

*Return values:*

- name
- abort
- message: *Reason why this operation was aborted*

### group\_delete

(since 0.4-beta)

Triggered when a specific contacts group should be deleted.
To abort the deletion a plugin can set the `abort` field to true.

*Arguments:*

- group\_id: *The group identifier*
- source: *Address book identifier*

*Return values:*

- abort
- message: *Reason why this operation was aborted*

### group\_rename

(since 0.4-beta)

This hook is triggered when a contacts group is renamed.
To abort this operation a plugin can set the `abort` field to true.

*Arguments:*

- group\_id: *The group identifier*
- name: *New name of the group*
- source: *Address book identifier*

*Return values:*

- abort
- message: *Reason why this operation was aborted*

### group\_addmembers

(since 0.4-beta)

When one or more contacts are added to a contacts group.
A plugin can set the `abort` field to true in order to prevent this action.

*Arguments:*

- ids: *List of contact IDs (string separated by comma)*
- group\_id: *The group identifier*
- source: *Address book identifier*

*Return values:*

- ids
- abort
- message: *Reason why this operation was aborted*

### group\_delmembers

(since 0.4-beta)

Contacts are about to be removed from a group.
A plugin can set the `abort` field to true in order to prevent this action.

*Arguments:*

- ids: *List of contact IDs (string separated by comma)*
- group\_id: *The group identifier*
- source: *Address book identifier*

*Return values:*

- ids
- abort
- message: *Reason why this operation was aborted*

---

## Task "settings"

### settings\_actions

(since 1.0-beta)

Hook to render the top level list of settings sections (aka "tabs").
Plugins which want to define a new section in the settings screen should use this hook instead of injecting a new item with javascript or using the "tabs" in [template\_container](#template_container) hook.
Just append the following struct to the *actions* argument:

```
array(
  'command' => '<the-command-executed-on-click>',
  'type' => 'link',
  'label' => '<plugin>.<label-name>',
  'title' => '<plugin>.<label-name>',
  'class' => '<css-class-name>',
)
```

*Arguments:*

- actions: *reference to an html\_table object*
- attrib: *HTML attributes*

*Return values:*

- actions
- attrib

### folders\_list

Allows a plugin to modify the main table on the manage folders screen

*Arguments:*

- table: *reference to an html\_table object*

*Return values:*
none.

### preferences\_save

(since 1.0-beta)

Allows a plugin to inject data into the array of preferences about to be saved

*Arguments:*

- prefs: *Hash array with prefs to be saved*

*Return values:*

- result: boolean
- abort: boolean
- prefs: array

### preferences\_update

As opposed to the *preferences\_save* hook, this is triggered whenever user preferences are updated.
And that's not limited to the preferences section but can also be executed by another plugin.

*Arguments:*

- prefs: *Hash array with prefs to be updated*
- old: *Hash array with currently stored user preferences*
- userid: *The ID of the user these prefs are saved for*

*Return values:*

- prefs: array
- old: array
- abort: boolean

### preferences\_list

Allows a plugin to modify the user preferences table.
This hook is triggered for each section of the user prefs pane. The section is denoted in the *section* parameter. Possible values are `general, mailbox, mailview, compose, folders, server`

*Arguments:*

- section: *which section of the prefs pane*
- blocks: *reference to an array containing preferences blocks/options*

*Return values:*

- blocks

### preferences\_sections\_list

Allows a plugin to modify the user preferences sections list.

*Arguments:*

- list: *list (hash array) of sections*
- cols: *column names to display*

*Return values:*

- list
- cols

### identities\_list

Triggered when a users identities are listed.

*Arguments:*

- list: *The list of identity records*
- cols: *List of cols to be displayed*

*Return values:*

- list
- cols

### identity\_create

Triggered when a user attempts to create a new sender identity.
A plugin can prevent the record to be created by setting the `abort` field to true. The user is then rejected back to the input form.

*Arguments:*

- login: *True if triggered at login when a new user is created (deprecated)*
- record: *Hash array with identity record fields*

*Return values:*

- record
- abort

### identity\_create\_after

(since 1.1.2)

Triggered when a user successfully saved a new sender identity.
In addition to the `record` property, the arguments also contain the ID of the new identity record.

*Arguments:*

- id: *The ID of the newly created identity record*
- record: *Hash array with identity record fields*

## *Return values:*

### identity\_update

Triggered when a user changes one of his sender identities.
As in the *create\_identity* hook this action can be aborted by setting the `abort` field to true.

*Arguments:*

- id
- record: *Hash array with identity record fields*

*Return values:*

- record
- abort

### identity\_delete

Triggered when a sender identity is to be deleted.
To abort the deletion a plugin can set the `abort` field to true.

*Arguments:*

- id

*Return values:*

- abort

### identity\_form

Triggered when identity edit form is being build.

*Arguments:*

- form: *Form content definition array.*
- record: *Identity data array.*

*Return values:*

- form
- record

---

## Template Hooks

The RoundCube skin retrieves certain parts (e.g. message list, folders list, etc.) from the application with special tags within the HTML templates: `<roundcube:object name="someobject" ... />`. Template hooks are triggered once a template object is rendered. A plugin can alter or extend the html content of a template object.

The hooks are named `template_object_*` where \* is the name of the object. A list of all available template objects is given in [wiki:Doc\_SkinML#Contentobjects].

*Arguments:*

- content
- [*tag attributes*]

*Return values:*

- content

### template\_container

Allows a plugin the add HTML content to a specific container.
A skin template may specify several containers (e.g. taskbar, toolbar, etc...). This hook is triggered when the template engine processes such a container and it is also internally used for adding buttons using `$this->add_button(attrib, container)`. Remember to always add or prepend to the `content` argument and never replace it entirely.

*Arguments:*

- name: *Name of the container*
- content: *The container content*

*Return values:*

- content

### render\_page

Triggered after a template was parsed, just before sending the HTML page to the client.
This is the place where plugins can add additional content to the page which is not related to any template object. Use `$rcmail->output->add_footer()` or `$this->include_script()` to extend the html page. Of course it's also possible to directly alter the `content` attribute.

*Arguments:*

- template: *Name of the rendred template*
- content: *The HTML source*

*Return values:*

- content

### send\_page

(since 0.6-beta)

The final HTML code of a page is passed to this hook before delivering it to the browser.
Final string-based modifications on the content can be made here.

*Arguments:*

- content: *The HTML source*

*Return values:*

- content

### render\_response

(since 1.0-beta)

This is the *render\_page* equivalent for AJAX calls and the final opportunity for plugins to append
or modify the server response to the client.

*Arguments:*

- response: *The full response data structure before being serialized to json*

*Return values:*

- response

## Missing documentation

Hooks that appear to be missing documentation. Obtained by searching for all calls to plugins->exec\_hook in the source of git master:

- attachment\_delete
- attachment\_display
- attachment\_get
- attachments\_cleanup
- contact\_form
- contact\_listname
- contact\_photo
- contact\_undelete
- folder\_create
- folder\_delete
- folder\_form
- folder\_rename
- folder\_update
- identity\_select
- loginform\_content
- responses\_list
- save\_hook
- saved\_search\_create
- saved\_search\_delete
- saved\_search\_get
- saved\_search\_list
- spell\_dictionary\_get
- spell\_dictionary\_save
- template\_plugin\_include

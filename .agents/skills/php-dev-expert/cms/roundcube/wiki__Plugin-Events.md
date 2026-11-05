# Plugin Events · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Plugin-Events

---

# Plugin Events in JavaScript

> NOTE: This page requires review and update

There are yet a few events that your script can subscribe to:

## Global Events

### init

The first event to be triggered when a page loads.
This is the place where plugins can add their UI elements and register custom commands.

*Arguments:*

- task
- action

### selectfolder

Triggered when a user selects a new folder (either in mail or address book task).
Please note that this is called before the message list is reloaded.

*Arguments:*

- folder: *New selected folder name*
- old: *Previously selected folder*

### listupdate

Similar to the *selectfolder* event but triggered after the message list (or contacts) list was updated.

*Arguments:*

- folder
- rowcount

### insertrow

This hook is triggered after a new row was added to the message list or the contacts list respectively.

*Arguments:*

- uid: *Row UID*
- row: *Reference to the according DOM node*

### group\_insert

This hook is triggered after a new contact group was added to the folders list.

*Arguments:*

- id: *Group ID*
- name: *Group name*
- li: *Reference to the list item node*

### group\_update

This hook is triggered after contact group was updated in the folders list.

*Arguments:*

- id: *Group ID*
- name: *Group name*
- li: *Reference to the list item node*

### group\_delete

This event is triggered just before a contact group is removed from the folders list.

*Arguments:*

- id: *Group ID*
- li: *Reference to the list item to be removed*

### before\* and after\*

As you might have seen in the code the RoundCube client is based on *commands* which can be triggered by different UI elements. To make this document as short as possible we just describe two general events: `before<command>` and `after<command>`.

These events are triggered before and after the RoundCube client executes a certain command. An event handler of the `before*` events can return `false` in order to prevent the command to be executed.

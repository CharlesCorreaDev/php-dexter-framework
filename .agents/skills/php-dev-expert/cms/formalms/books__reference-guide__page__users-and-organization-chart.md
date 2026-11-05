# Users and organization... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/users-and-organization-chart

---

# Users and organization chart

## Overview

The user management page is split into two main parts:

1. **Organization Chart**: this tree-like structure of folders (nodes) represents the core logic for user's organization, and will be used by most of the other features of the LMS. To simplify user's selection and automate massive operations.
2. **User List**:  this is the list of the users in the selected folder. Select the root folder to list all the registered users.

[![userman_overview_explained.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/ylWimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/ylWimage.png)

---

## Organization Chart

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/2bmimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/2bmimage.png)

1. Add node to the organization chart
2. Import Users
3. Waiting Users
4. Deleted Users
5. Assign Users
6. Assign Fields
7. Edit Node
8. Delete Node

---

### Add Node

Click on this link to add a new folder:

[![userman_orgchart_addnode.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/ldQimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/ldQimage.png)

**Code**: Add an alphanumeric code that can be used by other features like registration with code or I/O task

**Default Template**: assign a specific template for the users in this node

**Name (language)**: Name for this node, a different field for each language will be shown

---

### Import Users

This feature lets you import a list of users from a .CSV file.

Check the **[user import guide](books__reference-guide__page__import-users.md)** page for details

---

### Waiting Users

This link will be visible if platform registration is set as "Moderated Self Registration" or "Double Optin".

It will display a list of users that either:

- Are waiting for admin confirmation
- Have not yet clicked on the confirmation link

You will then be able to approve or delete the user

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/hcoimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/hcoimage.png)

---

### Deleted Users

Access a list of deleted users.

#### Forma < 4.1.x:

In Forma LMS until version 4.1.x, activate this feature to keep a list of deleted users, find this setting under:

[Settings > System Configuration > Settings > Security]

The list is just a plain log and it won't be possible to recover deleted user

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/Jebimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/Jebimage.png)

#### In Forma 4.2 or later

In Forma 4.2 this feature have been completely refactored and acts as "Trash" area for the deleted users.

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/NrFimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/NrFimage.png)

The system will automatically store deleted users as trashed, and it is now possible to:

- **Restore a trashed user**: this will keep all the user's trackings. Plus you can decide wether to restore user in active or suspended state
- **Delete a trashed user:** the user and all its trackings will be removed from the database. Can't be undone.
- **Massive delete/restore users**

If you are upgrading from a Forma version prior to 4.2 and the deleted user list was active, all the deleted users will be reported in the new "trash" area adding a ".deleted" suffix to the username, and it will be then possible to completely remove them from the database

---

### Assign users to a node

Click this icon to select users that you want to assign to this node

By default, users can be assigned only to a single node.  It is possible to assign users to multiple nodes, although this is strongly discouraged to avoid possible undesirable or unpredictable behaviors in other platform areas (i.e., reports, administrators assignments, or other). To enable multi-node user assignment, check the relative option under advanced configuration

---

### Assign Field to node

 This feature lets you define which custom fields must be assigned for users in this node:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/czzimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/czzimage.png)

**Assign Field**: the selected fields will be available in the profile of users in this node

**Descendants**: the selected fields will be available in the profile of users in the subnodes of this folder

**Mandatory**: filling this field will be mandatory in the user registration form

**Invisible to user**: the selected field will be hidden on user registration form

**User Inherit**: all users of this node will get the same value. If you change the value for a user, it will be sett for all the others.

---

## Users' List

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/mtyimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/mtyimage.png)

### Add new user

Click to insert a new user in the selected node.

1. **Details Tab**: fill user fields
2. **Organization chart Tab**: select the nodes to assign the user to

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/dJnimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/dJnimage.png)

### Search Users

**Show also child nodes content**: the list will show also the users from subnodes of the selected node. If you are displaying the root node, all users will be displayed.

**Show also suspended users**: show or hide suspended users from the list

**Search**: will search on any of the visible field in the user list below

**Advanced Search**: will display an advanced search form with possibility to add search over specific fields and conditions:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/s3Cimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/s3Cimage.png)

### Dynamic columns

Select from the dropdown which data field to show in the correspondent columns, and sort for the displayed data.

The search engine will search over the displayed data.

### User Actions

Actions you can take over each user:

**View user profile**: opens a pop-up window with user information

**Remove from node**: user will be removed from the selected node, but remain registered to the platform

**Activate/Suspend**: lets you suspend or reactivate users. Suspended users will be still visible in reports if needed, but can't access the platform

**Delete**: user will be deleted from the platform. This action can't be recovered

### Massive Actions

Lets you massively apply actions over all the users selected in the list.

- **Export** the selected users in a CSV file
- Massively **suspend, activate, delete**
- Massively **edit**:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/iPAimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/iPAimage.png)

Entrar em modo de seleção de seção

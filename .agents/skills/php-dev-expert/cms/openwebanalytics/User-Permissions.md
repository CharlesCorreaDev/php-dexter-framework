# User Permissions · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/User-Permissions

---

OWA user permissions are determined by the role they are assigned. OWA provides a built-in permission and authentication framework: every user is assigned a role, a role provides a collection of capabilities, and capabilities are mapped to controllers.

## How Authorization Works

Authorization is evaluated on every request as follows:

- A user makes a request to "do" something.
- OWA evaluates the `do` param and creates the corresponding controller.
- OWA checks the capability required by that controller.
- OWA checks the role of the user to see if it has the required capability.
- If the user possesses the necessary capability, the request proceeds.
- If not, the user is directed to the login page, or to an error page if they are already authenticated.

## Roles

The default roles are as follows:

- admin
- analyst
- viewer
- everyone

## Capabilities

Roles are made up of "capabilities". Controllers specifies a required capability in order to make sure users have enough permissions to perform the controller's action.

### Role/Capability Matrix

Default capabilities are stored in the bases modules default settings array and are as follows:

| Capability | admin | analyst | Viewer | Everyone |
| --- | --- | --- | --- | --- |
| install\_schema | x | x | x | x |
| view\_site\_list | x | x | x |  |
| view\_reports | x | x | x |  |
| view\_reports\_ecommerce | x | x |  |  |
| edit\_settings | x |  |  |  |
| edit\_sites | x |  |  |  |
| edit\_users | x |  |  |  |
| edit\_modules | x |  |  |  |
| edit\_reports | x |  |  |  |
| edit\_own\_email | x |  |  |  |

`edit_reports` authorises authoring a [custom report](Custom-Reports.md), and
`edit_own_email` changing the email address on your own account. Both are
admin-only by default and both are meant to be granted more widely where that
suits — see below.

**Capabilities are not the whole story for custom reports.** The list of them is
scoped by authorship as well: `view_site_list` gets a user the screen, but it
shows the reports that user created plus any their author has shared.
`edit_users` is what makes someone see everyone's regardless. Opening a report by
its URL is separate again and needs only `view_reports`. See
[Custom Reports](Custom-Reports.md).

`edit_own_email` is separate from `edit_users`, which is about other people's
accounts. The address is where password resets are sent, so changing it moves
who can recover the account; anyone may edit their own name without that being
true of their address.

## Altering Roles and Capabilities

Several settings methods exist to change the capabilities assigned to a role. This must only be used within your owa-config.php file.

```
// allow analysts to add/edit sites
$this->addCapabilityToRole('analyst', 'edit_sites' );
// do not allow analysts to view commerce reports
$this->removeCapabilityFromRole('analyst', 'view_reports_ecommerce');
// Allow anyone ot view reports without authentication
$this->addCapabilityToRole('everyone', array('view_site_list', 'view_reports', 'view_reports_ecommerce') );
```

## Your own account

Any signed-in user can edit their own account, whatever their role, from
**User Profile** in the settings navigation. That covers the display name, the
address password resets are sent to, and the password.

Two things are shown there but not editable: the **username**, because it
identifies everything the account has made — custom reports and site grants are
stored against it — and the **role**, which only an administrator can change.

Editing somebody *else's* account is a separate, administrator-only screen:
**Users**, under Organization.

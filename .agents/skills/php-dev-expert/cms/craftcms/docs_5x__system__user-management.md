# User Management | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/user-management

---

# User Management

- ### On this Page

  - [Statuses](docs_5x__system__user-management.md#statuses)
  - [Settings](docs_5x__system__user-management.md#settings)
  - [Admin Accounts](docs_5x__system__user-management.md#admin-accounts)
  - [User Groups](docs_5x__system__user-management.md#user-groups)
  - [Permissions](docs_5x__system__user-management.md#permissions)
  - [Preferences](docs_5x__system__user-management.md#preferences)
  - [Authentication](docs_5x__system__user-management.md#authentication)
  - [Public Registration](docs_5x__system__user-management.md#public-registration-pro)
  - [Logging In](docs_5x__system__user-management.md#logging-in)
  - [CLI](docs_5x__system__user-management.md#cli)

[Users](docs_5x__reference__element-types__users.md) in Craft represent humans that have some relationship with your site or application. They may be control panel users, member accounts, or records that represent people in general. Users implicitly have the ability to create passwords and [log in](#logging-in), but must be granted [permissions](#permissions) or added to [groups](#user-groups) to access the control panel or manage content.

The first user account is created during [installation](docs_5x__install.md). The number of additional users that can be created (and their capabilities) depends on your Craft [edition](docs_5x__editions.md):

- **Craft Solo** is limited to a single admin user.
- **Craft Team** New! allows up to five users, and one [user group](#user-groups).
- **Craft Pro** has no limitations on the number of registered users or groups, and supports [public registration](#public-registration).

To create a new user, visit the **Users** control panel screen, then click **New user**. If you don’t see this item in the control panel navigation, your current user may not have the required [permission](#permissions) to register other users.

my-project.ddev.site/admin/users/123&fresh=1

![Creating a new user in the Craft control panel](/docs/assets/img/users-new.cf55d9a0.png)

Creating a new user in the Craft control panel.

Users must be identified with at least an **Email** and a **Username** (or just an email address if the [`useEmailAsUsername` config setting](docs_5x__reference__config__general.md#useemailasusername) is enabled). Select **Create and set permissions**  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "The revised user creation flow was first available in version 5.3.0 of Craft.") to validate the user and move on to group and [permissions](#permissions) assignment.

If you need to capture some information about a person but don’t have their email address yet, you can select **Save as draft** from the fly-out menu in the toolbar and come back to the draft later.

The permissions screen will include a **Save and send activation email** button  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "The revised user creation flow was first available in version 5.3.0 of Craft.") if the user is still *Inactive*. Users can also be activated by…

- …selecting **Send activation email** from the action menu

  Ellipses

  in the toolbar;
- …selecting **Copy activation URL** from the action menu

  Ellipses

  and sending it manually;
- …selecting **Activate account** without setting a password.

If an account is manually activated by another user *without setting a password*, the user can request a password reset via a [front-end form](#public-registration), or the control panel login screen.

## [#](#statuses)Statuses

Users may exist in the system in a number of states. A user is typically created in a **Pending** state (ready to be activated via an activation link), whether via [public registration](#public-registration) or by another user in the control panel. Changes to a user’s status can happen implicitly (via activation, failed login attempts, etc.) or explicitly (suspension by a moderator), some requiring additional verification by email or an [elevated session](#elevated-sessions).

Active
:   An **Active** user is able perform any task their permissions allow. Users are put in this state following account activation (either via an activation link or action taken by another user). However, an active account does not necessarily have a password—but once one is set (or the current password is reset), they *would* be able to log in normally.

Pending
:   Public registration creates users in the **Pending** state, unless the **Deactivate users by default** setting is enabled in user settings. The only difference between a **Pending** and **Active** user is that they have never activated their account with an activation link, or had a user with the **Moderate users** permission activate it for them.

Suspended
:   **Suspended** users have been manually locked out of the system by an user with the [*Moderate Users* permission](#permissions). They will be unable to log in or reset their password.

Inactive
:   New users and users that have been explicitly deactivated are marked as **Inactive**. An inactive user cannot log in, reset their password, or reactivate their account.

### [#](#special-states)Special States

Credentialed
:   Craft has a special distinction for users who are able to log in *or could become able to log in* under their own power. Any user that is either **Active** or **Pending** is considered **Credentialed**.

Locked
:   When a user makes too many unsuccessful login attempts (according to the [maxInvalidLogins](docs_5x__reference__config__general.md#maxinvalidlogins) and [invalidLoginWindowDuration](docs_5x__reference__config__general.md#invalidloginwindowduration) settings), their account will be **Locked**. Another user with the **Moderate users** [permission](#permissions) can manually unlock a user in this state at any time, or the user can wait until the [cooldownDuration](docs_5x__reference__config__general.md#cooldownduration) elapses and try again.

    User locking is an automatic abuse-prevention behavior, not a moderation tool. If you need to prevent someone from accessing the site or control panel, **suspend** or **deactivate** the user.

Trashed
:   Like other elements, users can be *soft-deleted*. A trashed user cannot log in or restore themselves, and the user may be garbage-collected after remaining trashed for the configured [softDeleteDuration](docs_5x__reference__config__general.md#softdeleteduration).

## [#](#settings)Settings

The behavior of Craft’s user registration and authentication system is governed by a handful of config settings, and a few options (managed via

1. Settings→
2. Users→
3. Settings

) stored in [project config](docs_5x__system__project-config.md).

### [#](#project-config)Project Config

- **User Photo Location**: Which volume user profile assets are stored in. Files are always uploaded directly to a profile, and cannot be selected from the existing asset library.
- **Require two-step verification**: Choose which user groups (if any) are required to configure a two-step verification method. After [Craft 5.6  (opens new window)](https://github.com/craftcms/cms/releases/tag/5.6.0), this setting affects *all* matching users, not just those with control panel access.
- **Verify email addresses**: A user must demonstrate they have access to an email address before they can activate their account, or change the email on an existing account.
- **Allow public registration**: Whether or not users can register from the front-end.
- **Validate custom fields on public registration**: When registering via the front-end, require a complete user profile (including any fields marked as **Required** in the user field layout).
- **Deactivate users by default**: Place users in the **Inactive** state after registering, rather than sending an activation email. Another user with the **Moderate users** [permission](#permissions) must activate the user.
- **Default User Group**: The [group](#user-groups) that publicly-registered users are added to, if any.

In addition, the [users field layout](docs_5x__reference__element-types__users.md#custom-fields) and [addresses field layout](docs_5x__reference__element-types__addresses.md#setup) are stored in project config.

### [#](#config-files)Config Files

A combination of [user-specific](docs_5x__reference__config__general.md#users), [session](docs_5x__reference__config__general.md#session), and [security](docs_5x__reference__config__general.md#security) settings are tracked via the [General](docs_5x__reference__config__general.md) configuration file.

A summary of these settings (as they relate to front-end development) is available in the [Additional Tools](#additional-tools) section, below.

## [#](#admin-accounts)Admin Accounts

Admin users are special accounts that can do *everything* within Craft, including some things that don’t have explicit permissions:

- Modify all [Settings](docs_5x__system__control-panel.md#settings) (in environments with [admin changes](docs_5x__reference__config__general.md#allowadminchanges) are enabled);
- Make other users admins (in editions that support multiple users);
- Administrate other admins (in editions that support multiple users);

The user you create when installing Craft is an admin by default. Users in Craft Team can either have permissions from the single [group](#user-groups), or be an admin.

Considering how much damage an admin can do, we strongly advise reserving this role for key members of your team or organization who cannot fulfill their responsibilities without it. Whenever possible, design a [permissions](#permissions) scheme that grants only the necessary capabilities.

To make a user an admin, you must be logged in as an existing admin. Find the user in the **Users** screen, then select the **Permissions** tab, and enable **Admin**. The individual permissions checkboxes will be hidden, as admin implicitly have *all* permissions. While admin can be part of groups, those groups’ permissions have no bearing on their capabilities unless they are stripped of the admin designation later.

You can also audit and create admin users from the [command line](#cli).

## [#](#user-groups)User Groups Pro

**User Groups** help organize your site’s user accounts, and uniformly set [permissions](#permissions) on them.

To create a new User Group, go to **Settings** → **Users** and press **+ New user group**. Groups have a **Name** and **Handle**, plus any **Permissions** you want every user within the group to have.

After you create your groups, you can assign users to groups by going into their account settings and choosing the **Permissions** tab. Permissions granted by groups are *additive*, so a user in multiple groups receives the combined permissions of those groups (as well has any permissions granted explicitly to that user). Removing a user from a group does not revoke permissions that are granted by another group they are a member of!

Users in Craft Team belong to a single “Team” user group, the permissions for which are managed via

1. Settings→
2. Users→
3. User Permissions

.

## [#](#permissions)Permissions Team Pro

Permissions govern what users can do—like access the control panel, edit content within certain sections, create and moderate other users, etc. You can assign these permissions directly to users, or via [user groups](#user-groups). Permissions applied to a user group are inherited by all users belonging to it.

Make sure you trust users with access to settings that allow users to provide [Twig](docs_5x__development__twig.md) code, like the **System Messages** utility. It’s possible to do malicious things via Twig (like permissions escalation), so these permissions are intended primarily for trusted admins and developers.

The permissions Craft comes with are:

| Permission | [Handle](#checking-permissions) |
| --- | --- |
| Access the site when the system is off | `accessSiteWhenSystemIsOff` |
| Access the control panel This inherently enables limited read-only access to user data and most content via element selector modals and other means. | `accessCp` |
| ↳ Access the control panel when the system is offline | `accessCpWhenSystemIsOff` |
| ↳ Perform Craft CMS and plugin updates | `performUpdates` |
| ↳ Access Plugin Name | `accessPlugin-[PluginHandle]` |
| View users Read-only access to user elements. In earlier versions of Craft, user management permissions were not nested within this one.  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "View users permission was first available in version 5.6.0 of Craft.") | `viewUsers` |
| ↳ Edit users Non-critical actions like updating custom field values. | `editUsers` |
| ↳ Register users | `registerUsers` |
| ↳ Moderate users Moderation includes editing other users’ names, usernames, custom fields, and addresses, and sending activation emails.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Users with the “Moderate users” permission were given the ability to send activation emails in 5.8.0.") | `moderateUsers` |
| ↳ Administrate users User administration includes changing emails, sending password reset emails, setting passwords, and deactivating users. This permission can be used to elevate one’s own permissions by gaining access to other administrators’ accounts! | `administrateUsers` |
| ↳ Impersonate users User impersonation allows one user to temporarily access the site as though they were another user with the same (or more restrictive) permissions. | `impersonateUsers` |
| ↳ Assign user permissions | `assignUserPermissions` |
| ↳ Assign users to this group This is not an actual permission so much as a convenience feature for automatically granting the ability to add peers to the *group* you are currently editing, as its handle/UUID may not be known, yet! | See note. |
| ↳ Assign users to Group Name | `assignUserGroup:[UserGroupUID]` |
| ↳ Delete users | `deleteUsers` |
| Edit Site Name  Site permissions are intersected with other permissions. A user will only be able to edit something if they have access to the site *and* the element itself. | `editSite:[SiteUID]` |
| View entries This section is repeated for each configured section. | `viewEntries:[SectionUID]` |
| ↳ Create entries | `createEntries:[SectionUID]` |
| ↳ Save entries | `saveEntries:[SectionUID]` |
| ↳ Delete entries | `deleteEntries:[SectionUID]` |
| ↳ View other users’ entries | `viewPeerEntries:[SectionUID]` |
| ↳ Save other users’ entries | `savePeerEntries:[SectionUID]` |
| ↳ Delete other users’ entries for site Allow deleting other users’ entries for individual sites they have access to. | `deletePeerEntriesForSite:[SectionUID]` |
| ↳ Delete other users’ entries | `deletePeerEntries:[SectionUID]` |
| ↳ View other users’ drafts | `viewPeerEntryDrafts:[SectionUID]` |
| ↳ Save other users’ drafts | `savePeerEntryDrafts:[SectionUID]` |
| ↳ Delete other users’ drafts | `deletePeerEntryDrafts:[SectionUID]` |
| Edit Global Set Name | `editGlobalSet:[GlobalSetUID]` |
| View categories This section is repeated for each configured category group. | `viewCategories:[CategoryGroupUID]` |
| ↳ Save categories | `saveCategories:[CategoryGroupUID]` |
| ↳ Delete categories | `deleteCategories:[CategoryGroupUID]` |
| ↳ View other users’ drafts | `viewPeerCategoryDrafts:[CategoryGroupUID]` |
| ↳ Save other users’ drafts | `savePeerCategoryDrafts:[CategoryGroupUID]` |
| ↳ Delete other users’ drafts | `deletePeerCategoryDrafts:[CategoryGroupUID]` |
| View assets | `viewAssets:[VolumeUID]` |
| ↳ Save assets | `saveAssets:[VolumeUID]` |
| ↳ Delete assets | `deleteAssets:[VolumeUID]` |
| ↳ Replace files | `replaceFiles:[VolumeUID]` |
| ↳ Edit images | `editImages:[VolumeUID]` |
| ↳ View assets uploaded by other users | `viewPeerAssets:[VolumeUID]` |
| ↳ Save assets uploaded by other users | `savePeerAssets:[VolumeUID]` |
| ↳ Replace files uploaded by other users | `replacePeerFiles:[VolumeUID]` |
| ↳ Remove files uploaded by other users | `deletePeerAssets:[VolumeUID]` |
| ↳ Edit images uploaded by other users | `editPeerImages:[VolumeUID]` |
| ↳ Create subfolders | `createFolders:[VolumeUID]` |
| Utilities |  |
| ↳ Updates | `utility:updates` |
| ↳ System Report | `utility:system-report` |
| ↳ PHP Info | `utility:php-info` |
| ↳ System Messages | `utility:system-messages` |
| ↳ Asset Indexes | `utility:asset-indexes` |
| ↳ Queue Manager | `utility:queue-manager` |
| ↳ Caches | `utility:clear-caches` |
| ↳ Deprecation Warnings | `utility:deprecation-errors` |
| ↳ Database Backup | `utility:db-backup` |
| ↳ Find and Replace | `utility:find-replace` |
| ↳ Migrations | `utility:migrations` |

You may not see all of these options, initially—only ones that are relevant based on the current content schema will be displayed. For example, everything under *View categories* will be hidden until you have at least one [category group](docs_5x__reference__element-types__categories.md#category-groups).

Plugins may register their own permissions, which can appear in a top-level group, under *Access the control panel*, or within *Utilities*.

See the *Extending Craft* [User Permissions](docs_5x__extend__user-permissions.md) page to learn how to register custom permissions from a module or plugin.

### [#](#checking-permissions)Checking Permissions

You can check whether the logged-in user has a specific permission using its handle. Replace any bracketed items in the table above with the desired value (So `accessPlugin-[PluginHandle]` would become `accessPlugin-commerce`).

```
{% if currentUser.can('accessCp') %}
  <a href="{{ cpUrl() }}">Visit the Control Panel</a>
{% endif %}
```

For UUID-driven permissions, you can either hard-code the value in Twig, or look it up dynamically.

VerbatimDynamic

```
{# Store the UUID directly in the template: #}
{% if currentUser.can('createEntries:4fcb3c63-9477-4b5f-8021-874d64f819ce') %}
  <a href="{{ siteUrl('account/vendors/add') }}">Add a Vendor</a>
{% endfor %}
```

```
{# Look up the section by its handle: #}
{% set vendorsSection = craft.app.entries.getSectionByHandle('vendors') %}

{# Build the permission handle: #}
{% if currentUser.can("createEntries:#{vendorsSection.uid}") %}
  <a href="{{ siteUrl('account/vendors/add') }}">Add a Vendor</a>
{% endfor %}
```

This is not strictly necessary, but the `handle` of a given resource is often much easier to understand in the template context.

UUIDs and handles are safe to use like this because they’re tracked in [Project Config](docs_5x__system__project-config.md) and will be [consistent across environments](docs_5x__system__project-config.md#ids-uuids-and-handles), unlike IDs.

If your site or app doesn’t rely on specific permissions to control access to resources, you can check whether the user belongs to a group, instead:

```
{% requireLogin %}

{% if currentUser.isInGroup('members') %}
  <div class="banner">Thanks for your support!</div>
{% endif %}
```

### [#](#requiring-permissions)Requiring Permissions

You can also require the logged-in user to have a specific permission to access an entire template:

```
{% requirePermission 'accessCp' %}
```

If the requirements are not met, Craft will send a 403 *Forbidden* response with the site’s [error template](docs_5x__system__routing.md#error-templates). Logged-out visitors will be forwarded to the configured [loginPath](docs_5x__reference__config__general.md#loginpath); after signing in, the user will be redirected to the original path—but may still encounter a *Forbidden* error if their account doesn’t have the correct permissions.

### [#](#forms-content)Forms + Content

When a user is given permissions to edit or create elements that meet certain criteria (say, entries in a specific section), they do *not* need [control panel](docs_5x__system__control-panel.md) access to make updates.

When POSTing new data to actions like [`entries/save-entry`](docs_5x__reference__controller-actions.md#post-entries-save-entry) (or the more generic `elements/save`), Craft checks for the appropriate permissions. This means that you can create secure, streamlined content management tools for users, without ever granting them access to the control panel!

Keep in mind that permissions issues are dealt with differently than [validation errors](docs_5x__development__forms.md#models-and-validation), so it’s important to check permissions *prior* to displaying an edit interface to a user. Attempting to POST updates to an element that the current user cannot edit will produce a 400-level HTTP error, and the changes will be lost. If you want to make only certain fields editable to certain users, add [user conditions](docs_5x__system__fields.md#conditions) to the element’s field layout.

### [#](#querying-by-permissions)Querying by Permissions

You can look up users with a given permission using the [`can()` method](docs_5x__reference__element-types__users.md#can) on a user query. To find users belonging to a specific group, use the [`group()` method](docs_5x__reference__element-types__users.md#group).

### [#](#customizing-authorization)Customizing Authorization

Any time Craft checks a user’s capabilities in the context of a specific [element](docs_5x__system__elements.md), it emits a number of [events](docs_5x__extend__events.md).
If the built-in permissions (combined with field layout conditions) are not granular enough to enforce your editorial workflow, you can design arbitrarily complex checks in code.

In a [custom module](docs_5x__extend__module-guide.md), listen for any of the [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html) `EVENT_AUTHORIZE_*` events, and set the [craft\events\AuthorizationCheckEvent::$authorized  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-authorizationcheckevent.html#property-authorized) property to `true` when your criteria are met.

```
use craft\elements\Entry;
use craft\services\Elements;
use craft\events\AuthorizationCheckEvent;

Event::on(
    Entry::class,
    Elements::EVENT_AUTHORIZE_SAVE,
    function(AuthorizationCheckEvent $e) {
        // Make sure the system says they’re capable of this:
        if (!$e->element->canSave($e->user)) {
          return;
        }

        // Is the entry part of a section we care about?
        $section = $e->element->getSection();

        if (!$section || $section->handle !== 'classifieds') {
          return;
        }

        // Ok, they have the relevant permissions.
        // Let’s see if they've accepted the terms of service:
        if (!$e->user->acceptedTos) {
          $e->authorized = false;
        }
    }
);
```

Setting `true` *or* `false` in a handler shortcuts Craft’s internal checks, and the user’s real system permissions are never evaluated.
Avoid setting either value until you are absolutely certain a user should (or should not) be permitted to perform an action.

Permissions violations can result in confusion and lost data, so your criteria should be stable and well-communicated: in the front-end, this might mean hiding or disabling a link to an entry form so that the user learns about account limitations *prior* to entering data.

## [#](#preferences)Preferences

Users have a few settings that govern their experience of the control panel and front-end, including their preferred **Language** and **Formatting Locale**, a number of **Accessibility** features, and (for [administrators](#admin-accounts)) debugging tools.

![User preferences screen in the Craft control panel](/docs/assets/img/users-preferences.e5f66334.png)

## [#](#authentication)Authentication New!

[Credentialed](#special-states) users in Craft can authenticate with one or more methods. By default, Craft uses a password to verify the user’s identity. In addition to passwords, users can set up [two-factor authentication](#time-based-one-time-passwords), or add a [passkey](#passkeys).

![Two-factor authentication setup screen in the Craft control panel](/docs/assets/img/control-panel-2fa.f0f67336.png)

Plugins can also provide authentication methods!

### [#](#time-based-one-time-passwords)Time-based, One-Time Passwords

Craft has built-in support for one-time passwords via your favorite authenticator app or password manager. When enabled (via

1. Settings→
2. Users→
3. Security

), control panel users subject to your policy will be asked to set up an authenticator on their next login.

If a user loses access to their TOTP provider, they can use one of the recovery codes generated at the time it was set up.

In development environments, you can globally disable two-factor authentication checks with the [disable2fa](docs_5x__reference__config__general.md#disable2fa) setting—either via `general.php`, or temporarily by adding a `CRAFT_DISABLE_2FA=true` [environment override](docs_5x__configure.md#environment-overrides).

### [#](#passkeys)Passkeys

Individual users can elect to log in with a [Passkey  (opens new window)](https://fidoalliance.org/passkeys/). To configure a passkey, visit your user’s account screen via the menu in the upper-right corner of the control panel, then choose **Passkeys**.

Some browsers and devices share passkeys via their own accounts or cloud services, so you may only need one passkey added to Craft to authenticate on multiple devices.

### [#](#elevated-sessions)Elevated Sessions

The control panel may require users to reauthorize to perform some actions, like removing authentication methods, altering [permissions](#permissions), or modifying [GraphQL](docs_5x__development__graphql.md) schemas.

An elevated session’s duration is governed by the [elevatedSessionDuration](docs_5x__reference__config__general.md#elevatedsessionduration) setting.

### [#](#front-end-multi-factor-authentication)Front-end Multi-factor Authentication [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Multi-factor auth support outside the control panel was first available in version 5.6.0 of Craft.")

When **Require two-step verification** is enabled for user groups that *don’t* have control panel access, those users may be sent to the Craft-provided [front-end login page](#front-end-pro) to perform additional authentication.

## [#](#public-registration-pro)Public Registration Pro

Public user registration is disabled by default, but can be turned on by visiting

1. Settings→
2. Users→
3. Settings

, and checking **Allow public registration**. With that checked, you will also have the ability to choose a **Default User Group** that publicly-registered users are automatically added to.

Once you set up your site to allow public user registration, the last step is to create a front-end [user registration form  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#registration-form). For a full list of params a user can set during registration (or when updating their account, later on), read about the [`users/save-user` controller action](docs_5x__reference__controller-actions.md#post-users-save-user).

By default, Craft puts new users in a [pending state](#statuses) and allows them to activate their own accounts via email. You can instead select **Deactivate users by default** to place a moderation buffer between public registration and eventual access.

### [#](#affiliated-site)Affiliated Site [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Affiliated sites for user elements was first available in version 5.6.0 of Craft.")

During registration, Craft captures the current [site](docs_5x__system__sites.md) and stores it as the user’s **Affiliated Site**. This is primarily used to determine what language and template [system emails](docs_5x__system__mail.md#system-messages) should be use, when sent from site-agnostic contexts (like the control panel or CLI).

### [#](#default-group)Default Group

Users created via public registration are automatically added to the group designated by the **Default User Group** setting.

Select this group’s [permissions](#permissions) carefully, ensuring that new users don’t immediately get access to tools that can negatively affect other users’ experience.

## [#](#logging-in)Logging In

Any [credentialed](#statuses) user can set a password and log in.

### [#](#control-panel)Control Panel

Users with [control panel](docs_5x__system__control-panel.md) access should use Craft’s native login form, which is shown when visiting `/admin` (or the path corresponding to your [cpTrigger](docs_5x__reference__config__general.md#cptrigger)).
Any time an unauthenticated client tries to access a resource in the control panel, they will be redirected to the login page.

After logging in (and, when configured, completing [two-step verification](#authentication)), they will be returned to the [dashboard](docs_5x__system__control-panel.md#dashboard), or whichever protected page they originally attempted to access.

When a control panel user authenticates and is redirected, their permissions *may* still prevent them from viewing that resource.

### [#](#front-end-pro)Front-end Pro

Sites that support [public registration](#public-registration) or whose administrators create accounts without control panel access are apt to require front-end login forms.

The [loginPath](docs_5x__reference__config__general.md#loginpath) setting determines where Craft sends users who access pages guarded by the [`{% requireLogin %}`](docs_5x__reference__twig__tags.md#requirelogin) or [`{% requirePermission %}`](docs_5x__reference__twig__tags.md#requirepermission) tags, as well as the value of the global [`loginUrl` variable](docs_5x__reference__twig__global-variables.md#loginurl):

```
<header>
  <img src="{{ siteUrl('assets/logo.png') }}" alt="{{ siteName }}">

  {% if currentUser %}
    Welcome, {{ currentUser.fullName ?: currentUser.username }}!
    <a href="{{ siteUrl('my-account') }}">My Account</a>
    <a href="{{ logoutUrl }}">Sign out</a>
  {% else %}
    <a href="{{ loginUrl }}">Sign in</a>
  {% endif %}
</header>
```

By default, this path is `login`, so `{{ loginUrl }}` would print something like `https://my-project.ddev.site/login`.

When this route is requested, Craft looks for the [corresponding template](#custom-template), `templates/login.twig`. If it can’t be found, a bare-bones internal version will be used:  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Built-in front-end login template was first available in version 5.6.0 of Craft.")

my-project.ddev.site/login

![The login template included with Craft](/docs/assets/img/login.8ab994c9.png)

Logging in to the front end of a Craft website, for which a login template does not exist.

You can inject additional styles into this page using the [systemTemplateCss](docs_5x__reference__config__general.md#systemtemplatecss) setting:

```
use craft\config\GeneralConfig;

return GeneralConfig::create()
    // ...
    ->systemTemplateCss('/assets/styles/system.css')
;
```

Full reference for the CSS variables used on this page are [available in the source  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/web/assets/theme/dist/fe.css).  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "System template stylesheet setting was first available in version 5.6.0 of Craft.")

This template will also be displayed when users are required to set up a new [two-step verification](#authentication) method (or complete authorization, later).

No template is rendered for requests matching the [logoutPath](docs_5x__reference__config__general.md#logoutpath); the user’s session is terminated, and they are redirected to the [postLogoutRedirect](docs_5x__reference__config__general.md#postlogoutredirect).

### [#](#custom-template)Custom Template

Create a new Twig file at `templates/login.twig` (or `templates/{loginPath}.twig`, if you have a custom [loginPath](docs_5x__reference__config__general.md#loginpath)) with the following content:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('users/login') }}

  <label for="login-name">Username/Email</label>
  <input type="text" name="loginName" id="login-name">

  <label for="password">Password</label>
  <input type="password" name="password" id="password">

  <button>Sign in</button>
</form>
```

You are free to have this template extend an existing layout, or directly add `<head>` and `<body>` tags.

Visiting your site’s `/login` page in a *private* browser, you should see the unstyled form. Opening the same page in a browser with an *active* session may redirect you to the configured [postLoginRedirect](docs_5x__reference__config__general.md#postloginredirect) (or the primary site’s homepage, by default).

[Working with Forms
→

Learn about sending data to Craft with forms.](docs_5x__development__forms.md)

Additional information about handling login and account creation can be found in our [Front-End User Accounts  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts) guide.

Any valid username and email combination can be submitted to log in. As mentioned above, if the user needs to set up or authenticate with a two-step verification method, they will be taken to the “system” login view to complete their login.

To help users understand the state of their session (and in some limited circumstances, specific issues with the submitted information), you can output [flashes](docs_5x__development__forms.md#flashes) from the login action:

```
{% set flashes = craft.app.session.getAllFlashes(true) %}

{% if flashes is not empty %}
  <ul>
    {% for flash in flashes %}
      <li>{{ flash }}</li>
    {% endfor %}
  </ul>
{% endif %}
```

### [#](#custom-routes)Custom Routes

The `loginUrl` Twig variable is set based on the corresponding config value. How this route is handled is actually up to your project! When the `loginUrl` path is requested by a client, Craft uses its normal [route resolution process](docs_5x__system__routing.md), including the normal element URI search, `routes.php` rule matching, and looking in your project’s `templates/` directory.

This means that you can decouple the route from the template by adding a [rule](docs_5x__system__routing.md) to your `routes.php` file:

```
return [
    // Assuming your `general.php` config sets `loginPath` to `account/sign-in`...
    'account/sign-in' => ['template' => '_accounts/login'],
];
```

Then, you would be free to create `templates/_accounts/login.twig`, alongside other templates in a [hidden](docs_5x__development__templates.md#hidden-templates) directory.

### [#](#additional-tools)Additional Tools

These variables are available in all Twig contexts:

- `loginUrl` — Defined by [loginPath](docs_5x__reference__config__general.md#loginpath). Used to build a link to the central login page, and where users will be redirected when requesting a protected resource.
- `logoutUrl` — Defined by [logoutPath](docs_5x__reference__config__general.md#logoutpath). Used to build a link that immediately logs the user out.
- `setPasswordUrl` — Defined by [setPasswordRequestPath](docs_5x__reference__config__general.md#setpasswordrequestpath). Used to build a link to a central page where users can request their password be reset. A link is sent to the user’s email address (based on the [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath) setting) with `id` and `code` query parameters.

Other URLs are generated when activating accounts or resetting passwords, and are not available for direct use in templates.

Fine-grained control over registration and sign-in workflows are possible with these settings:

- Logging in and out…
  - [loginPath](docs_5x__reference__config__general.md#loginpath) — Determines the `loginUrl` variable. (Default: `login`)
  - [logoutPath](docs_5x__reference__config__general.md#logoutpath) — Determines the `logoutUrl` variable, and maps the specified path to the `users/logout` controller action. (Default: `logout`)
- Account activation…
  - [setPasswordRequestPath](docs_5x__reference__config__general.md#setpasswordrequestpath) — Determines the `setPasswordPath` variable. (Default: `setpassword`) Users will visit this page to *request* a password reset link.
  - [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath) — Where users will be sent to *set* a password. These secure, temporary URLs are generated by Craft when sending a password reset email, or when another user with the *Administrate users* permission requests a password reset link via the control panel.
  - [setPasswordSuccessPath](docs_5x__reference__config__general.md#setpasswordsuccesspath) — Where users are redirected after successfully setting a new password.
- Changing and verifying email addresses…
  - [verifyEmailPath](docs_5x__reference__config__general.md#verifyemailpath) — Used when generating a link sent via email to verify access to an email address.
  - [verifyEmailSuccessPath](docs_5x__reference__config__general.md#verifyemailsuccesspath) — Similar to `setPasswordSuccessPath`, but for redirection after a user verifies their email address (either upon creating an account, or changing its email address).
  - [useEmailAsUsername](docs_5x__reference__config__general.md#useemailasusername) — Simplifies record-keeping and authentication by eliminating discrete usernames.
- Security and timing…
  - [autoLoginAfterAccountActivation](docs_5x__reference__config__general.md#autologinafteraccountactivation) — Control whether users are immediately logged in after completing registration (typically when a [pending](#statuses) user clicking an email confirmation link or setting a password). (Default: `false`)
  - [purgePendingUsersDuration](docs_5x__reference__config__general.md#purgependingusersduration) — How long Craft waits before deleting pending, non-activated users. (Default: `0`, or *disabled*)
  - [purgeStaleUserSessionDuration](docs_5x__reference__config__general.md#purgestaleusersessionduration) — How long Craft waits before dropping stale sessions from the `sessions` database table. This may (Default: 90 days)
  - [invalidUserTokenPath](docs_5x__reference__config__general.md#invalidusertokenpath) — Where users are redirected if the token or code in an activation or verification link is invalid or has expired.

## [#](#cli)CLI

Craft’s [command line](docs_5x__system__cli.md) provides admin-level user management tools. With access to the underlying server, you can create, delete, and impersonate users, get activation URLs, set passwords, and even log out all users.

[Users CLI Reference
→

Read more about managing users via the command line.](docs_5x__reference__cli.md#users)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/user-management.md)

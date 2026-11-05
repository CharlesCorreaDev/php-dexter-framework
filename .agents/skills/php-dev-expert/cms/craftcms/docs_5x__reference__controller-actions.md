# Controller Actions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/controller-actions

---

# Controller Actions

- ### On this Page

  - [Available Actions](docs_5x__reference__controller-actions.md#available-actions)
  - [Plugins + Custom Actions](docs_5x__reference__controller-actions.md#plugins-custom-actions)

Controllers are Craft’s way of talking to the outside world. Pretty much everything you do with Craft is part of a request that involves a [controller action  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-controllers)—from updating settings to rendering an entry.

Most controllers and actions are carefully locked down with [permissions](docs_5x__system__user-management.md#permissions) to prevent malicious activity, but a select few are necessarily available to users and guests *without* special permissions to support features like [public registration](docs_5x__system__user-management.md#public-registration) or [cart management](https://craftcms.com/docs/commerce/5.x/system/orders-carts).

The following list of controller actions is non-exhaustive, but covers common patterns like [logging in](#post-userslogin), [creating entries](#post-entriessave-entry), and [managing an address book](#post-userssave-address).

[Using Forms
→

Start here to learn about sending data to Craft.](docs_5x__development__forms.md)

## [#](#available-actions)Available Actions

This is not a comprehensive list! We have selected a few actions to illustrate fundamentals that many projects can benefit from—and to get you prepared to explore the rest of Craft’s [HTTP API  (opens new window)](https://docs.craftcms.com/api/v5/craft-controllers-addressescontroller.html).

| Action | Description |
| --- | --- |
| POST [entries/save-entry](#post-entries-save-entry) | Creates or updates an entry. |
| POST [users/login](#post-users-login) | Logs a user in. |
| POST [users/save-user](#post-users-save-user) | Creates or updates a user account. |
| POST [users/upload-user-photo](#post-users-upload-user-photo) | Sets a user’s photo. |
| POST [users/send-password-reset-email](#post-users-send-password-reset-email) | Sends a password reset email. |
| GET/POST [users/set-password](#get-post-users-set-password) | Sets a new password on a user account. |
| POST [users/save-address](#post-users-save-address) | Create or update an [address](docs_5x__reference__element-types__addresses.md) element. |
| POST [users/delete-address](#post-users-delete-address) | Delete an address element. |
| GET [users/session-info](#get-users-session-info) | Retrieve information about the current session. |
| GET [app/health-check](#get-app-health-check) | Ping your app to make sure it’s up. |

In each of the following examples, you’ll find a list of **Supported Params** (the values you can send as GET query params or in the POST body) and information about the possible **Response** conditions.

**Supported Params** can be encoded in the query string, submitted with form inputs, or sent as properties in a [JSON payload](docs_5x__development__forms.md#ajax).

### [#](#globally-supported-params)Globally-Supported Params

All POST actions honor a few additional parameters, except when using an `Accepts: application/json` header:

- `redirect` — A [hashed](docs_5x__reference__twig__filters.md#hash) URL or path that Craft will send the user to after a [successful request](docs_5x__development__forms.md#after-a-post-request) (i.e. a user is registered or an entry is saved).
- `successMessage` — Overrides the default flash notice for the action.
- `failMessage` — Overrides the default flash error for the action.

You can use the [`redirectInput()`](docs_5x__reference__twig__functions.md#redirectinput), [`successMessageInput()`](docs_5x__reference__twig__functions.md#successmessageinput), and [`failMessageInput()`](docs_5x__reference__twig__functions.md#failmessageinput) Twig functions to inject these params into a form.

### [#](#post-entries-save-entry)POST `entries/save-entry`

Create or update an entry the current User has appropriate permissions for.

See the [Entry Form  (opens new window)](https://craftcms.com/knowledge-base/entry-form) guide for an example of working with this action.

Note that *all* custom fields can updated by users. For this reason, you should not assume that custom fields are protected from modification simply because they are omitted from the form.

Similarly, if you are outputting user-submitted content anywhere on site, take special care to prevent yourself or other users from being exposed to [XSS vulnerabilities  (opens new window)](https://owasp.org/www-community/attacks/xss/)!

#### [#](#supported-params)Supported Params

| Param | Description |
| --- | --- |
| `author` | The ID of the user account that should be set as the entry author. (Defaults to the entry’s current author, or the logged-in user.) |
| `canonicalId` | The ID of the entry to save, if updating an existing entry. |
| `enabledForSite` | Whether the entry should be enabled for the entry’s `siteId` (`1`/`0`), or an array of site IDs that the entry should be enabled for. (Defaults to the `enabled` param.) |
| `enabled` | Whether the entry should be enabled (`1`/`0`). (Defaults to enabled.) |
| `entryId` | Fallback if `canonicalId` isn’t passed, for backwards compatibility. |
| `entryVariable` | The [hashed](docs_5x__reference__twig__filters.md#hash) name of the variable that should reference the entry, if a validation error occurs. (Defaults to `entry`.) |
| `expiryDate` | The expiry date for the entry. (Defaults to the current expiry date, or `null`.) |
| `fieldsLocation` | Parameter name under which Craft will look for custom field data. (Defaults to `fields`.) |
| `fields[...]` | [Custom field](docs_5x__development__forms.md#custom-fields) values. |
| `parentId` | The ID of the parent entry, if it belongs to a structure section. |
| `postDate` | The post date for the entry. (Defaults to the current post date, or the current time.) |
| `provisional` | Updates the current user’s provisional draft (in the control panel, this correlates to an auto-save). |
| `revisionNotes` | Notes that should be stored on the new entry revision. |
| `sectionId` | The ID of the section the entry will be created in. (Only for new entries. User must have appropriate permissions.) |
| `siteId` | The ID of the site to save the entry in. |
| `slug` | The entry slug. (Defaults to the current slug, or an auto-generated slug.) |
| `sourceId` | Fallback if `canonicalId` isn’t passed, for backwards compatibility. |
| `title` | The entry title. (Defaults to the current entry title.) |
| `typeId` | The entry type ID to save the entry as. (Defaults to the current entry type for existing entries, or the first configured type for new ones.) |

#### [#](#permissions)Permissions

Requests to `entries/save-entry` must by made by a logged-in user with the appropriate permissions. Permissions are dependent upon the site, section, and the original author (for existing entries).

It is not currently possible to allow anonymous access without [a plugin  (opens new window)](https://plugins.craftcms.com/guest-entries?craft4).

#### [#](#response)Response

The action’s output depends on whether the entry saved successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); entry available under an `entry` key in the response object. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); entry available under an `entry` variable, in the template. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). |

### [#](#post-users-login)POST `users/login`

Logs a user in.

See the [Front-End User Accounts  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#login-form) guide for an example of working with this action.

#### [#](#supported-params-2)Supported Params

| Param | Description |
| --- | --- |
| `loginName` | The username or email of the user to login. |
| `password` | The user’s password. |
| `rememberMe` | Whether to keep the user logged-in for an extended period of time per the [rememberedUserSessionDuration](docs_5x__reference__config__general.md#rememberedusersessionduration) config setting (`1`/`0`). |

#### [#](#response-2)Response

The output of the action depends on whether the login was successful and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); additional `returnUrl`, `csrfTokenValue`, and `user` properties are included in the response object. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `loginName`, `rememberMe`, `errorCode`, and `errorMessage` variables will be available in the template. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `loginName`, `rememberMe`, `errorCode`, and `errorMessage` properties are included in the response object. |

The `errorCode` corresponds to one of the [`craft\elements\User::AUTH_*` constants  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html).

### [#](#post-users-save-user)POST `users/save-user`

Registers a new [user account](docs_5x__system__user-management.md), or updates an existing one.

See the [Front-End User Accounts  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#registration-form) guide for an example of working with this action.

Users can update all of their own custom field values—hiding or omitting them in a front-end form is not enough to protect modification!

Add a [user editability condition](docs_5x__system__fields.md#editability-conditions) to any fields that should be tamper-proof.

#### [#](#supported-params-3)Supported Params

| Param | Description |
| --- | --- |
| `admin` | Whether the user should be saved as an admin (`1`/`0`). Only assignable if the logged-in user is an admin. |
| `currentPassword` | The user’s *current* password, required when updating the `email` or setting a `newPassword`, when outside the [elevatedSessionDuration](docs_5x__reference__config__general.md#elevatedsessionduration). |
| `email` | The user’s email address. (Only checked if registering a new user, updating the logged-in user, or the logged-in user is allowed to administrate users.) |
| `fieldsLocation` | Parameter name under which Craft will look for custom field data. (Defaults to `fields`.) |
| `fields[...]` | [Custom field](docs_5x__development__forms.md#custom-fields) values. |
| `fullName` | The user’s full name. Preferred to discrete `firstName` and `lastName` params. |
| `firstName` | The user’s first name. `fullName` is preferred. |
| `lastName` | The user’s last name. `fullName` is preferred. |
| `newPassword` | The user’s new password, if updating the logged-in user’s account. (If registering a new user, send `password`.) |
| `passwordResetRequired` | Whether the user must reset their password before logging in again (`1`/`0`). Only assignable if the logged-in user is an admin. |
| `password` | The user’s password, when registering a new user. (Has no effect if [deferPublicRegistrationPassword](docs_5x__reference__config__general.md#deferpublicregistrationpassword) is `true`. To change the current user’s password, send `newPassword`.) |
| `photo` | An uploaded user photo. Use `<input type="file">`. |
| `sendVerificationEmail` | Whether a verification email should be sent before accepting the new `email` (`1`/`0`). (Only used if email verification is enabled, and the logged-in user is allowed to opt out of sending it.) |
| `userId` | The ID of the user to save, if updating an existing user. |
| `userVariable` | The hashed name of the variable that should reference the user, if a validation error occurs. (Defaults to `user`.) |
| `username` | The user’s username. (Only checked if the [useEmailAsUsername](docs_5x__reference__config__general.md#useemailasusername) config setting is `false`.) |

#### [#](#permissions-2)Permissions

Special permissions are required to allow users to administrate or update other users. A user can always update their own account.

Granting administrative permissions to front-end users opens your site up to permissions escalation and significant abuse.

#### [#](#response-3)Response

The output depends on whether the user save action was successful and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); default redirection uses the [activateAccountSuccessPath](docs_5x__reference__config__general.md#activateaccountsuccesspath) config setting, if email verification is not required. | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); additional `id` and `csrfTokenValue` keys. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); user will be available in the template under a variable determined by the `userVariable` param, or `user` by default. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). |

### [#](#post-users-upload-user-photo)POST `users/upload-user-photo`

Sets a user’s photo to an uploaded image.

You can update a user’s other properties and fields at the same time as uploading a photo, via [`users/save-user`](#post-users-save-user).

#### [#](#supported-params-4)Supported Params

| Param | Description |
| --- | --- |
| `userId` | ID of the user. Required, pass `{{ currentUser.id }}` to change a user’s own photo. |
| `photo` | Uploaded image. Use `<input type="file">`. |

Files cannot be uploaded using `Content-Type: application/json`.

#### [#](#response-4)Response

The output depends on whether the upload was successful. Only JSON is returned, and the request must include the `Accept: application/json` header.

| State | `application/json` |
| --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); `html` and `photoId` properties. `html` is only useful in control panel contexts. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `error` key is available in the response object, with the exception message. |

### [#](#post-users-send-password-reset-email)POST `users/send-password-reset-email`

Sends a password reset email.

See the [Front-End User Accounts  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#reset-password-form) guide for an example of working with this action.

#### [#](#supported-params-5)Supported Params

| Param | Description |
| --- | --- |
| `loginName` | The username or email of the user to send a password reset email for. |
| `userId` | The ID of the user to send a password reset email for. (Only checked if the logged-in user has permission to edit other users.) |

#### [#](#response-5)Response

The output of the action depends on whether the user exists, the reset password email was sent successfully, and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `errors` and `loginName` variables are passed to the template. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `errors` and `loginName` keys are available in the response object. |

The `errors` variable may include multiple discrete failure messages, but the standard `message` variable will still be an accurate summary.

### [#](#get-post-users-set-password)GET/POST `users/set-password`

A GET request displays a form allowing a user to set a new password on their account, and POST sets a new password on a user account. If the user is [pending](https://craftcms.com/docs/system/user-management.html), their account will be activated.

This action is responsible for rendering the route defined by the [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath) setting.

#### [#](#supported-params-6)Supported Params

| Param | Description |
| --- | --- |
| `code` | GET/POST The user’s verification code. Craft will provide this in URLs generated from the control panel, or when a link is sent via email. |
| `id` | GET/POST The user’s UUID. |
| `newPassword` | POST The user’s new password. |

`code` and `id` are required for both GET and POST requests; users may click a link from an email that includes both as query params—it’s your responsibility to pass these to Craft as hidden fields (along with `newPassword`) in a subsequent form submission.

See the [Front-End User Accounts  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#set-password-form) article for an example of how to set up this form.

#### [#](#response-6)Response

The output of the action depends on the request method, whether the password was updated successfully, and the `Accept` header.

For GET requests:

| State | `text/html` |
| --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); template determined by [setPasswordPath](docs_5x__reference__config__general.md#setpasswordpath) is rendered with `id` and `code` variables available. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); exception message will point to the issue—commonly, a missing or invalid token. |

For POST requests:

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); redirection depends on the user’s [status](docs_5x__system__user-management.md#statuses), the [autoLoginAfterAccountActivation](docs_5x__reference__config__general.md#autologinafteraccountactivation) and [setPasswordSuccessPath](docs_5x__reference__config__general.md#setpasswordsuccesspath) config settings, and whether the user has access to the control panel. | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); additional `csrfTokenName` key will be available in the response object. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); `errors`, `code`, `id`, and `newUser` variables will be passed to the resulting template. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). |

### [#](#post-users-save-address)POST `users/save-address`

Saves or updates an [address](docs_5x__reference__element-types__addresses.md) element against the current user’s account.

#### [#](#supported-params-7)Supported Params

| Param | Description |
| --- | --- |
| `addressId` | An existing address’s ID can be sent to update it, as long as it’s owned by the current user. |
| `userId` | Owner of the new address. Owners cannot be changed after creation, and new addresses can only be created for the current user (or other users they are allowed to edit). |
| `fullName` | Name for the address. First and last names are not stored discretely, but can by submitted separately. |
| `firstName` | Can be submitted independently from `lastName`, but will be combined for storage. |
| `lastName` | Can be submitted independently from `firstName`, but will be combined for storage. |
| `countryCode` | Required to localize and validate the rest of the address. |
| `addressLine1`, `addressLine2`, `addressLine3` | Primary and supplemental location description. These are not necessarily the first, second, and third lines of a [formatted address](docs_5x__reference__element-types__addresses.md#fields-and-formatting), and may be used differently between regions or people. |
| `organization` | Additional line for an organization or business name. |
| `organizationTaxId` | Tax/VAT ID. |
| `latitude` and `longitude` | GPS coordinates for the address. Craft does not automatically geocode address information or use these fields, internally. |
| `fields[...]` | [Custom field](docs_5x__development__forms.md#custom-fields) values. |
| `fieldsLocation` | Parameter name under which Craft will look for custom field data. (Defaults to `fields`.) |

**This list is incomplete!**

The remaining params depend upon the submitted `countryCode`—refer to the [`commerceguys/addressing` library  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/AddressFormat/AddressField.php#L15-L25) for a comprehensive list, or [learn more about managing addresses](docs_5x__reference__element-types__addresses.md#managing-addresses) in Craft.

#### [#](#response-7)Response

The output of the action depends on whether the address was saved successfully and the `Accept` header.

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); address available under the `address` property in the response object. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `address` variable will be passed to the resulting template. | [Standard behavior](docs_5x__development__forms.md#during-a-post-request); additional `address` property will be available in the response object. |

### [#](#post-users-delete-address)POST `users/delete-address`

Deletes an address owned by the current user or another user they can edit.

#### [#](#supported-params-8)Supported Params

| Param | Description |
| --- | --- |
| `addressId` | An existing address ID, owned by the current user or a user they’re allowed to edit. |

#### [#](#response-8)Response

| State | `text/html` | `application/json` |
| --- | --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request). | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); additional `address` property will be available in the response object. |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). |

### [#](#get-users-session-info)GET `users/session-info`

Retrieves information about the current session. Data is returned as JSON, and is only intended for consumption via [Ajax](docs_5x__development__forms.md#ajax).

#### [#](#response-9)Response

Only JSON responses are sent, but its content will differ for guests and logged-in users.

| State | `application/json` |
| --- | --- |
|  | [Standard behavior](docs_5x__development__forms.md#after-a-post-request); response object will contain at least `isGuest` and `timeout` keys, plus a `csrfTokenName` and `csrfTokenValue` (when CSRF protection is enabled), and the current user’s `id`, `uid`, `username`, and `email` (if logged in). |
|  | [Standard behavior](docs_5x__development__forms.md#during-a-post-request). |

### [#](#get-app-health-check)GET `app/health-check`

A “[no-op  (opens new window)](https://en.wikipedia.org/wiki/NOP_(code))” action provided for automated monitoring.

#### [#](#response-10)Response

The response will be successful (but empty) in all but “exceptional” situations, like an issue connecting to the database. Read more about [the criteria  (opens new window)](https://craftcms.com/knowledge-base/configuring-load-balanced-environments#health-check-endpoint) for a successful health check.

| State | Any |
| --- | --- |
|  | An empty document with a 200 status code. |
|  | 400- or 500-level status, with an error message or stack trace (in `devMode`, or when the current user has enabled the “show full exception views” preference enabled). |

## [#](#plugins-custom-actions)Plugins + Custom Actions

Many plugins expose functionality via their own controllers and actions. Their accepted parameters and response types are entirely up to the author, but the [fundamentals](docs_5x__development__forms.md#making-requests) will be the same. Consult the appropriate documentation for specifics!

Here are some examples in our own plugins:

- [Commerce  (opens new window)](https://plugins.craftcms.com/commerce): A variety of cart management capabilities are provided for users and guests.
- [Contact Form  (opens new window)](https://plugins.craftcms.com/contact-form): Adds the `contact-form/send` action for processing submissions and delivering notifications.
- [Element API  (opens new window)](https://plugins.craftcms.com/element-api): Customizable routes get mapped to queries, and return JSON representations of elements.

Custom modules can also provide actions via a [Controller](docs_5x__extend__controllers.md).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/controller-actions.md)

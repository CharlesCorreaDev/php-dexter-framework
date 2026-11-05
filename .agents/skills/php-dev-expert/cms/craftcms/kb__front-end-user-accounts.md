# Front-End User Accounts | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/front-end-user-accounts

---

Search Knowledge Base

# Front-End User Accounts

The Craft [control panel](https://craftcms.com/docs/5.x/system/control-panel.html) provides authentication and permissions systems designed to support content authors in a business or organization with a baseline level of trust.

When you want to provide a service to users outside that group (say, submitting content via an [entry form](kb__entry-form.md)), it doesn’t usually make sense to give them access to the control panel—either for security reasons, or because it leaves the branded space of your front-end. In these cases, you can set up Craft to use custom templates for public registration and account management.

![](https://craftcms.com/dist/images/icon-tip.svg)

Craft 5.6.0 shipped with a set of [basic front-end account management templates](https://craftcms.com/docs/5.x/system/user-management.html#front-end-pro) that you can [customize with CSS](https://craftcms.com/docs/5.x/reference/config/general.html#systemtemplatecss). This guide assumes you are looking to implement a finely-tuned, custom sign-up and login experience.

These system templates are also used for [two-factor authentication](https://craftcms.com/docs/5.x/system/user-management.html#authentication) (or “two-step verification”).

## **Step 1:** Upgrade to Craft Pro [#](#step-1-upgrade-to-craft-pro "Direct link to Step 1: Upgrade to Craft Pro")

Support for public registration and front-end user accounts is a feature of Craft Pro. If you are currently using Craft Solo or Craft Team, [upgrade now](kb__upgrading-to-craft-pro.md).

## **Step 2:** Check your User Settings [#](#step-2-check-your-user-settings "Direct link to Step 2: Check your User Settings")

Go to **Settings** → **Users** → **Settings**, and enable the **Allow public registration** setting to allow registration form submissions from your site’s front-end.

Without this setting enabled, Craft only allows existing control panel users with the “Register users” permission to create new accounts.

![](https://craftcms.com/dist/images/icon-loading.png)

![Public registration setting]()

While you’re there, make sure the other user settings look good.

- We strongly recommend you keep the **Verify email addresses** checkbox ticked, to ensure that all of your users actually have access to the email addresses they’ve set on their accounts. (This applies to new registrations *and* changes to existing accounts’ email addresses.)
- If you want your custom fields to be fully validated, be sure to tick **Validate custom fields on public registration**.
- If you want a manual account approval flow, tick the **Deactivate users by default** checkbox. (In Craft 3, this was **Suspend users by default**.)
- It’s a good idea to select a **Default User Group** (one with no permissions associated with it) so you can keep track of the publicly-registered users.

If you want your front-end users to have user photos (avatars), make sure the volume selected in the **User Photo Location** setting is configured with its **Assets in this volume have public URLs** setting enabled.

## **Step 3:** Create the Account Management Forms [#](#step-3-create-the-account-management-forms "Direct link to Step 3: Create the Account Management Forms")

Front-end user accounts should not typically have access to the Craft control panel, so you will need to create your own custom account management forms. These are traditionally implemented as Twig templates, but everything we’ll cover here can also be accomplished via [Ajax](https://craftcms.com/docs/5.x/development/forms.html#ajax), if you have a decoupled front end.

Throughout the examples below, we’ll be using some special [Twig functions](https://craftcms.com/docs/5.x/reference/twig/functions.html) provided by Craft to make the markup a little easier to read. They’re summarized in the [Helpers section](#helpers) at the end of this article!

![](https://craftcms.com/dist/images/icon-warning.svg)

[Custom fields](https://craftcms.com/docs/5.x/development/forms.html#custom-fields) can be updated by users; omitting a custom field from your form doesn’t protect it from being modified. You can make some fields tamper-proof with [conditions](https://craftcms.com/docs/5.x/system/fields.html#conditions).

Let’s get into the minimal set of forms required for maintaining front-end user accounts:

- [Registration](#registration-form)
- [Email Verification](#email-verification-form)
- [Login](#login-form)
- [User Profile](#user-profile-form)
- [Requesting a new password](#reset-password-form)
- [Setting a new password](#set-password-form)

### Registration Form [#](#registration-form "Direct link to Registration Form")

Every user requires a unique email address and username (unless the [useEmailAsUsername](https://craftcms.com/docs/5.x/reference/config/general.html#useemailasusername) is enabled). Everything else can be defered until after email verification—including choosing password.

Create a `register.twig` template with a form that posts to the [users/save-user](https://craftcms.com/docs/5.x/reference/controller-actions.html#post-users-save-user) controller action to submit the required data:

```
{% macro errorList(errors) %}
  {% if errors %}
    {{ ul(errors, {class: 'errors'}) }}
  {% endif %}
{% endmacro %}

{# A `user` variable will be defined after a submission if there are validation issues. #}
{% set user = user ?? null %}

<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('users/save-user') }}

  <label for="username">Username</label>
  {{ input('text', 'username', user.username ?? null, {
    id: 'username',
    autocomplete: 'username',
  }) }}
  {{ user ? _self.errorList(user.getErrors('username')) }}

  {# In Craft 4, `firstName` and `lastName` were combined into a single property: #}
  <label for="full-name">Full Name</label>
  {{ input('text', 'fullName', user.fullName ?? null, {
    id: 'full-name',
    autocomplete: 'name',
  }) }}
  {{ user ? _self.errorList(user.getErrors('fullName')) }}

  <label for="email">Email</label>
  {{ input('email', 'email', user.email ?? null, {
    id: 'email',
    autocomplete: 'email',
  }) }}
  {{ user ? _self.errorList(user.getErrors('email')) }}

  <label for="password">Password</label>
  {{ input('password', 'password', null, {
    id: 'password',
  }) }}
  {{ user ? _self.errorList(user.getErrors('password')) }}

  <button>Register</button>
</form>
```

![](https://craftcms.com/dist/images/icon-tip.svg)

You can skip the `username` field if you’ve enabled the [`useEmailAsUsername`](https://craftcms.com/docs/5.x/reference/config/general.html#useemailasusername) setting, and the `password` field if [deferPublicRegistrationPassword](https://craftcms.com/docs/5.x/reference/config/general.html#deferpublicregistrationpassword) is enabled. We’re including the `fullName` field so that the [default welcome message](https://craftcms.com/docs/5.x/system/email.html#system-messages) is lightly personalized.

### Email Verification Form [#](#email-verification-form "Direct link to Email Verification Form")

When users are required to verify new email addresses (either during [registration](#registration-form) or after [updating it themselves](#user-profile-form)), Craft sends them an email with a secure URL containing `id` and `code` params.

As of Craft 5.8, a system dialog is displayed when clicking a verification link, to avoid inadvertent activation of accounts by email clients that preload URLs. You may customize this using [system CSS](https://craftcms.com/docs/5.x/system/user-management.html#front-end-pro), or by defining a [route](https://craftcms.com/docs/5.x/system/routing.html) or template that corresponds to your [`verifyEmailPath` setting](https://craftcms.com/docs/5.x/reference/config/general.html#verifyemailpath).

This form must include the following:

```
<form method="post">
    {{ csrfInput() }}
    {{ actionInput('users/verify-email') }}

    {# These variables are made available by Craft based on secure parameters in the URL: #}
    {{ hiddenInput('uid', id) }}
    {{ hiddenInput('code', code) }}

    <button>Verify</button>
</form>
```

The same warnings apply here as with the [set password form](#set-password-form)—by default, verification codes expire after 24 hours. Upon successful verification, users are sent to one of the following paths:

- New accounts (users that were *pending* up to this point) are sent to the [`activateAccountSuccessPath`](https://craftcms.com/docs/5.x/reference/config/general.html#activateaccountsuccesspath);
- Users without a password (say, due to [deferPublicRegistrationPassword](https://craftcms.com/docs/5.x/reference/config/general.html#deferpublicregistrationpassword) being enabled) are sent to the [`setPasswordPath`](https://craftcms.com/docs/5.x/reference/config/general.html#setpasswordpath);
- In all other cases (like when a user has updated their own email address), they are redirected to the [`verifyEmailSuccessPath`](https://craftcms.com/docs/5.x/reference/config/general.html#verifyemailsuccesspath);

If [`autoLoginAfterAccountActivation`](https://craftcms.com/docs/5.x/reference/config/general.html#autologinafteraccountactivation) is enabled, the user will also be logged in.

### Login Form [#](#login-form "Direct link to Login Form")

Any [active](https://craftcms.com/docs/5.x/system/user-management.html#statuses) user can log in on your site’s front-end with this form, as long as they’ve set a password (either during [registration](#registration-form), or after activation).

Create a `login.twig` template with a form that POSTs to the [users/login](https://craftcms.com/docs/5.x/reference/controller-actions.html#post-users-login) controller action:

```
<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('users/login') }}

  <label for="loginName">Username or email</label>
  {{ input('text', 'loginName', craft.app.user.rememberedUsername, {
    id: 'loginName',
    autocomplete: 'username'
  }) }}

  <label for="password">Password</label>
  {{ input('password', 'password', null, {
    id: 'password',
  }) }}

  <label>
    {{ input('checkbox', 'rememberMe', '1') }}
    Remember me
  </label>

  <button>Login</button>

  {% if errorMessage is defined %}
    <p>{{ errorMessage }}</p>
  {% endif %}
</form>

<p><a href="{{ url('reset-password') }}">Forgot your password?</a></p>
```

Note that the form accepts a `loginName` param, allowing users to provide their username *or* email address.

Near the end of this template, we’re looking for the presence of an `errorMessage` variable, which Craft sets during failed login attempts. The same message is also pushed to the generic [flashes](https://craftcms.com/docs/5.x/development/forms.html#flashes) system, which you can implement in a global space to display success *and* failure notifications across the rest of these forms. You can customize these messages with the [`successMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#successmessageinput) and [`failMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#failmessageinput) Twig functions.

![](https://craftcms.com/dist/images/icon-tip.svg)

If you’d prefer to save this template somewhere else, update your [`loginPath`](https://craftcms.com/docs/5.x/reference/config/general.html#loginpath) config setting with the correct path. The setting controls *both* the public URL path *and* the location of the template to be rendered. The global `loginUrl` variable will be set accordingly.

You can choose where users get redirected to after a successful login via the [`postLoginRedirect`](https://craftcms.com/docs/5.x/reference/config/general.html#postloginredirect) config setting.

### User Profile Form [#](#user-profile-form "Direct link to User Profile Form")

Create a `profile.twig` template with a form that also posts to the [users/save-user](https://craftcms.com/docs/5.x/reference/controller-actions.html#post-users-save-user) controller action. This is similar to the registration form, except that it requires a logged-in user and includes their ID in the post data.

```
{# Require that a user is logged in to view this form. #}
{% requireLogin %}

{% macro errorList(errors) %}
  {% if errors %}
    {{ ul(errors, {class: 'errors'}) }}
  {% endif %}
{% endmacro %}

{# If there were any validation errors, a `user` variable will be passed to the
   template, which contains the posted values and validation errors. If that’s not
   set, we’ll default to the current user. #}
{% set user = user ?? currentUser %}

{% if user.hasErrors() %}
  <p>Unable to save your profile.</p>
{% endif %}

<form method="post" accept-charset="UTF-8" enctype="multipart/form-data">
  {{ csrfInput() }}
  {{ actionInput('users/save-user') }}

  {# Send the user’s ID: #}
  {{ hiddenInput('userId', user.id) }}

  {# (Optional) Redirect to another page, like a dashboard: #}
  {{ redirectInput('users/{username}') }}

  {# In Craft 4, `firstName` and `lastName` were combined into a single property: #}
  <label for="full-name">Full Name</label>
  {{ input('text', 'fullName', user.fullName, {
    id: 'full-name',
    class: user.hasErrors('fullName') ? 'error',
    autocomplete: 'name',
  }) }}
  {{ _self.errorList(user.getErrors('fullName')) }}

  {% if user.photo %}
    <label>Photo</label>
    {{ user.photo.getImg({ width: 150, height: 150 })|attr({
      id: 'user-photo',
      alt: user.friendlyName,
    }) }}

    <label for="delete-photo">
      {{ input('checkbox', 'deletePhoto', 'Bye!', {
        id: 'delete-photo',
      }) }}
      Delete photo
    </label>
  {% endif %}

  <label for="photo">Upload a new photo</label>
  {{ input('file', 'photo', null, {
    id: 'photo',
    accept: 'image/png,image/jpeg',
  }) }}

  {% if not craft.app.config.general.useEmailAsUsername %}
    <label for="username">Username</label>
    {{ input('text', 'username', user.username, {
      id: 'username',
      class: user.hasErrors('username') ? 'error',
      autocomplete: 'username',
    }) }}
    {{ _self.errorList(user.getErrors('username')) }}
  {% endif %}

  <label for="email">Email</label>
  {{ input('text', 'email', user.unverifiedEmail ?? user.email, {
    id: 'email',
    class: user.hasErrors('email') ? 'error',
    autocomplete: 'email',
  }) }}
  {{ _self.errorList(user.getErrors('email')) }}

  {% if craft.app.projectConfig.get('users.requireEmailVerification') %}
    <p>New email addresses need to be verified.</p>
  {% endif %}

  {# Custom “Bio” field #}
  <label for="bio">Bio</label>
  {{ tag('textarea', {
    text: user.bio,
    id: 'bio',
    name: 'fields[bio]',
    class: user.hasErrors('bio') ? 'error',
  }) }}
  {{ _self.errorList(user.getErrors('bio')) }}

  <button>Save Profile</button>
</form>
```

![](https://craftcms.com/dist/images/icon-tip.svg)

To avoid conflicts with your own variable names, you can change the how Craft passes the user object back to the template (if/when it contains validation errors) by sending a `userVariable` POST param in your form:

```
{{ hiddenInput('userVariable', 'myUserVar'|hash) }}
```

### Reset Password Form [#](#reset-password-form "Direct link to Reset Password Form")

If a user forgets their password, they can request a password reset link by providing their username or email address.

Create a `reset-password.twig` template with a form that posts to the [users/send-password-reset-email](https://craftcms.com/docs/5.x/reference/controller-actions.html#post-users-send-password-reset-email) controller action:

```
<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('users/send-password-reset-email') }}

  <label for="loginName">Username or email</label>
  {{ input('text', 'loginName', loginName ?? craft.app.user.rememberedUsername, {
    id: 'loginName',
    autocomplete: 'username',
  }) }}

  {% if errors is defined %}
    {{ ul(errors, { class: 'errors' }) }}
  {% endif %}

  <button>Submit</button>
</form>
```

![](https://craftcms.com/dist/images/icon-tip.svg)

You can make this form discoverable by clients that support [.well-known/change-password URLs](https://w3c.github.io/webappsec-change-password-url/) by setting the [`setPasswordRequestPath`](https://craftcms.com/docs/5.x/reference/config/general.html#setpasswordrequestpath) config setting to `'reset-password'` (or whatever path you actually end up saving this template at).

When a user submits a valid username or email, Craft sends them an email with a link they can click to [choose a new password](#set-password-form). The [`preventUserEnumeration` config setting](https://craftcms.com/docs/5.x/reference/config/general.html#preventuserenumeration) provides a valuable layer of security at this stage.

![](https://craftcms.com/dist/images/icon-tip.svg)

Customize the password-reset email subject and body from **Utilities** → **System Messages** → **When someone forgets their password**. The body of this email *must* include `{link}`, or the user will be unable to set a new password!

### Set Password Form [#](#set-password-form "Direct link to Set Password Form")

Craft provides a default template for entering a new password, but you can provide a custom one by creating a `setpassword.twig` template with a form that posts to the [users/set-password](https://craftcms.com/docs/5.x/reference/controller-actions.html#get-post-users-set-password) action:

```
<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('users/set-password') }}

  {# These two values are included in a password reset URL,
     and available in the template, automatically. They must
     be passed back when setting a new password to validate
     the request: #}
  {{ hiddenInput('code', code) }}
  {{ hiddenInput('id', id) }}

  <label for="new-password">New Password</label>
  {{ input('password', 'newPassword', null, {
    id: 'new-password',
  }) }}

  {% if errors is defined %}
    {{ ul(errors, { class: 'errors' }) }}
  {% endif %}

  <button>Submit</button>
</form>
```

This template is not accessed directly—the user clicks a special URL that securely maps the request to a predetermined controller action to validate a secret and set the special `code` and `id` template variables.

![](https://craftcms.com/dist/images/icon-tip.svg)

Verification codes expire according to the [verificationCodeDuration](https://craftcms.com/docs/5.x/reference/config/general.html#verificationcodeduration) setting (24 hours, by default). If a code has expired, the user will be redirected to the [invalidUserTokenPath](https://craftcms.com/docs/5.x/reference/config/general.html#invalidusertokenpath), and will need to request a new password reset link.

![](https://craftcms.com/dist/images/icon-tip.svg)

If you’d prefer to save this template somewhere else, update your [`setPasswordPath`](https://craftcms.com/docs/5.x/reference/config/general.html#setpasswordpath) config setting with the correct path.

The regular [user profile form](#user-profile-form) can be adapted to allow logged-in users to update the password on their own account. Send `newPassword` and `currentPassword` values to `users/save-user` to update them immediately:

```
{% if user.hasErrors() %}
  <p>Unable to update your password.</p>
{% endif %}

<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('users/save-user') }}
  {{ hiddenInput('userId', user.id) }}
  {{ redirectInput('users/{username}') }}

  <label for="new-password">New Password</label>
  {{ input('password', 'newPassword', null, {
    id: 'new-password',
    class: user.hasErrors('newPassword') ? 'error',
    autocomplete: 'new-password',
  }) }}
  {{ _self.errorList(user.getErrors('newPassword')) }}

  <label for="current-password">Current Password</label>
  {{ input('password', 'password', null, {
    id: 'current-password',
    class: user.hasErrors('currentPassword') ? 'error',
    autocomplete: 'current-password',
  }) }}
  {{ _self.errorList(user.getErrors('currentPassword')) }}

  <button>Change Password</button>
</form>
```

This example requires the same boilerplate as the user profile form, prior to its `user.hasErrors()` check. You cannot display or echo the user’s *current* password (or the submitted `newPassword`) into the inputs, so we are not declaring a `value` attribute. They will be cleared, whether or not the user successfully updates their password.

![](https://craftcms.com/dist/images/icon-tip.svg)

Users’ `currentPassword` is technically only required (or checked) outside of an “elevated session,” the length of which is determined by the [elevatedSessionDuration](https://craftcms.com/docs/5.x/reference/config/general.html#elevatedsessionduration) (five minutes, by default).

For the most consistent user experience, always have them submit a `currentPassword`.

If a user changes their email address via `users/save-user`, Craft respects the **Verify email addresses** setting, and either…

- …applies the change immediately (when verification is *off*);
- …applies the change after the user clicks the verification link sent to the new email address (when verification is *on*);

As with account activation links, verification links expire after 24 hours (or whatever your [verificationCodeDuration](https://craftcms.com/docs/5.x/reference/config/general.html#verificationcodeduration) is set to).

### Helpers [#](#helpers "Direct link to Helpers")

Here’s a quick recap of the helpers and settings we used in these forms (as well as some other related ones):

#### Twig Functions

- [`actionInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#actioninput) — Outputs a hidden `input` element that ensures a form is posted to the right action.
- [`csrfInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#csrfinput) — Outputs an `input` element that ensures a valid CSRF token is sent with the request.
- [`input()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#input) and [`hiddenInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#hiddeninput) — Generic helpers for rendering `input` elements.
- [`redirectInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#redirectinput) — Outputs a hidden `input` element with a securely hashed URL, which the user is sent to upon a [successful submission](https://craftcms.com/docs/5.x/reference/controller-actions.html#after-a-post-request).
- [`successMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#successmessageinput) — Outputs a hidden `input` element with a tamper-proof “success” message.
- [`failMessageInput()`](https://craftcms.com/docs/5.x/reference/twig/functions.html#failmessageinput) — Outputs a hidden `input` element with a tamper-proof “failure” message.

A few of the examples also used the `{% macro %}` and `{% import %}` tags, which help clean up repetitive, parameterized snippets, like our error message lists.

#### Twig Tags

- [`{% requireLogin %}`](https://craftcms.com/docs/5.x/reference/twig/tags.html#requirelogin) — Twig tag that ensures a template is only rendered for logged-in users. Craft will set a return URL and redirect guests to your `loginPath`.

#### Settings + Other Concepts

- [Session](https://craftcms.com/docs/5.x/reference/config/general.html#session) and [Security](https://craftcms.com/docs/5.x/reference/config/general.html#security) Settings — A number of options for configuring the behavior of sessions, security policies, and the URLs related to logging in and out.
- [User Management](https://craftcms.com/docs/5.x/system/user-management.html#additional-tools) — Lots more information about the lifecycle of users and the available administration/moderation tools.
- [Forms](https://craftcms.com/docs/5.x/development/forms.html) and [Controller Actions](https://craftcms.com/docs/5.x/reference/controller-actions.html) — More information on working with forms and actions, including support for Ajax.
- [System Templates](https://craftcms.com/docs/5.x/system/user-management.html#front-end-pro) and the [System Stylesheet](https://craftcms.com/docs/5.x/reference/config/general.html#systemtemplatecss) — Special templates that can help simplify setup of front-end login and account management forms.

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

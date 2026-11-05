# Managing authentication - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Managing_authentication

---

# Managing authentication

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► [Authentication](Authentication.md "Authentication") ► Managing authentication

[Authentication](Authentication.md "Authentication")

- Managing authentication
- [Manual accounts](Manual_accounts.md "Manual accounts")
- [No login](No_login.md "No login")
- [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration")
- [External database](External_database_authentication.md "External database authentication")
- [LDAP](LDAP_authentication.md "LDAP authentication")
- [LTI](LTI.md "LTI")
- [No authentication](No_authentication.md "No authentication")
- [OAuth 2](OAuth_2_authentication.md "OAuth 2 authentication")
- [Shibboleth](Shibboleth.md "Shibboleth")
- [Web services](Web_services_authentication.md "Web services authentication")
- [Multi-factor authentication](Multi-factor_authentication.md "Multi-factor authentication")
- [Authentication FAQ](Authentication_FAQ.md "Authentication FAQ")

## Setting the authentication method(s)

An administrator can set the authentication method(s) for the site as follows:

1. Go to *Site administration > Plugins > Authentication > Manage authentication*
2. Click the eye icon to enable selected authentication plugins (closed eye = disabled, open eye = enabled)
3. Click the settings link opposite the authentication plugin(s) you have chosen
4. Configure the required settings and click the "Save changes" button
5. Repeat until you have edited all the plugins you have enabled

More than one authentication plugin may be enabled. Any authentication plugin can be used to find a username/password match. Once found, a user is logged in and alternative plugins are not used. Therefore, the plugin which handles the most logins should be moved to the top of the page in order that less load is put on authentication servers.

[![](/503/en/images_en/9/9a/Authenticationintro.png)](https://docs.moodle.org/503/en/File:Authenticationintro.png)

## Authentication common settings

Authentication common settings can be changed by an administrator in *Site administration > Plugins > Authentication > Manage authentication*.

**Note:** Several login-related settings that were previously configured here have been consolidated into the [Login settings](Login_settings.md "Login settings") page (*Site administration > General > Login > Login settings*) from Moodle LMS 5.2 onwards.

### Self registration

If you wish users to be able to create their own user accounts, i.e. self-register, then select Email-based self-registration (or any other enabled plugin that can support self registration, like LDAP) from the drop-down menu. This will result in a "Is this your first time here?" instructions and a "Create new account" button being displayed on the login page.

Note: The [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration") authentication plugin must be enabled to allow users who previously self-registered to login with that plugin. Selecting Email-based self-registration as the self registration method allows potential users to self register.

Self-registration can be a source of spam accounts. To reduce this see the section 'How can I prevent spam accounts if I use self-registration?' in the [Authentication FAQ](Authentication_FAQ.md "Authentication FAQ").

### Allow accounts with same email

By default, usernames must all be unique. If this setting is set to yes, it allows users to be [created by an admin](Add_a_new_user.md "Add a new user") or [uploaded](Upload_users.md "Upload users") that have the same email address as another account. (It does NOT allow users to sign up for an account with an email address which is the same as another account.)

Note: This feature can result in confused users. Password resets will be sent to the email account so everyone with access to that email address can gain access to the other user's accounts, and the different users may be confused as to what email was sent to who. Where possible it is recommended you encourage users to mail aliases instead (such as gmail's + alias feature) so that you can differentiate the emails received about the accounts.

### Prevent account creation when authenticating

If an external database such as LDAP is used, then normally when a user logs in for the first time, a new account is created for them. Disable this setting if you don't want this to happen but if you only want existing users to be able to access the site.

### Limit concurrent logins

By default, there is no limit to the number of concurrent browser logins. (If a user is concerned about this, they can view their [Browser sessions](Browser_sessions.md "Browser sessions") page.) This setting allows you to specify how many concurrent browser logins are allowed. Once the limit is reached, the oldest session will be terminated. Note that this does not work with Single sign on plugins.

### Allowed and denied email domains

Authentication may be restricted to particular email domains when using [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration") so that, for example, only students with a university email can login.

### Restrict domains when changing email

You can choose to enforce email domains only when users create an account using [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration") i.e. after creating an account, users may change their email to a different domain.

## Profile fields data mapping and locking

Most (but not all) authentication plugins that use an external source for the user account details allow us to retrieve some user profile details (like first name, last name, email, etc.). By using the Data Mapping section on those authentication plugins configuration page we can configure what, when and how to manage all those user profile details.

[![Data Mapping Options](/503/en/images_en/f/f7/Authent-data-map-fname.jpg)](https://docs.moodle.org/503/en/File:Authent-data-map-fname.jpg "Data Mapping Options")

These fields are optional. You can choose to pre-fill some Moodle user fields with information from the external authentication source (if you are using one), from the fields that you specify here. If you leave these fields blank, then nothing will be transferred from the external authentication source and Moodle defaults will be used instead. In either case, the user will be able to edit all of these fields after they log in.

In addition to specifying how to fill this fields, we can set how to update them (in both directions, to Moodle or from Moodle), and whether we want to lock them (so the user cannot modify their value) or not:

- **Update local**: When the user field will be updated from the external authentication source:
  - **On creation**: when the user account is created during the first login
  - **On every login**: every time the user logs in (or there is a user synchronization, for those authentication plugins that support it). Fields set to update locally should be locked.
- **Update external**: When the external authentication source will be updated from the user field:
  - **Never**: never update the external authentication source from Moodle.
  - **On update**: the external authentication source will be updated when the user profile is updated. Fields should be unlocked to allow edits.
- **Lock value**: To prevent users from altering some fields (e.g. students changing profile information to inappropriate or misleading information), the site administrator can lock profile fields. It's usually a good idea to lock profile fields if you are maintaining this data in the external authentication system.
  - **Unlocked**: The field is unlocked and can be edited by the user at any time.
  - **Unlocked if empty**: The field is unlocked if it is empty, but once the user fills in some information, it becomes locked and cannot be edited any more.
  - **Locked**: The field is locked and cannot be edited by the user.

If you are using a mixture of authentication types (such as IMAP and manual), then the fields you map and lock in the authentication options are specific to that particular authentication plugin. Each authentication plugin has its own set of mapped and locked fields.

Remember to test the field locking by logging in with the proper type of account! If you test with a manual account but have set the field locking to apply to IMAP accounts, you will not be able to tell if it worked!

## See also

- [Login settings](Login_settings.md "Login settings")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Managing_authentication&oldid=155977>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Authentication](Category_Authentication.md "Category:Authentication")

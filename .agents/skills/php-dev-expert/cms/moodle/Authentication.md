# Authentication - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Authentication

---

# Authentication

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► Authentication

[Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site")

- [Admin quick guide](Admin_quick_guide.md "Admin quick guide")
- Authentication
- [Managing accounts](Managing_accounts.md "Managing accounts")
- [Enrolments](Enrolments.md "Enrolments")
- [Payment gateways](Payment_gateways.md "Payment gateways")
- [Roles and permissions](Roles_and_permissions.md "Roles and permissions")
- [Security](Security.md "Security")
- [Performance](Performance.md "Performance")
- [Backup](Backup.md "Backup")
- [Site registration](Site_registration.md "Site registration")
- [Site appearance](Site_appearance.md "Site appearance")
- [Language](Language.md "Language")
- [Server settings](Server_settings.md "Server settings")
- [Site-wide reports](Site-wide_reports.md "Site-wide reports")
- [Admin tools](Admin_tools.md "Admin tools")
- [Developer tools](Developer_tools.md "Developer tools")
- [Web services](Web_services.md "Web services")
- [More features](More_features.md "More features")
- [GDPR](GDPR.md "GDPR")
- [Communication](Communication.md "Communication")
- [MoodleNet](MoodleNet.md "MoodleNet")
- [SMS gateways](SMS_gateways.md "SMS gateways")
- [Administration FAQ](Administration_FAQ.md "Administration FAQ")

**Authentication** is the process of allowing a user to log in to a Moodle site with a username and password.

## Authentication plugins

Moodle provides a number of ways of [managing authentication](managing_authentication.md "managing authentication"), called *authentication plugins*.

Standard authentication plugins are:

- [Manual accounts](Manual_accounts.md "Manual accounts") - accounts created manually by an administrator
- [No login](No_login.md "No login") - suspend particular user account
- [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration") - for enabling users to create their own accounts
- [External database](External_database_authentication.md "External database authentication") - account details are located on an external database
- [LDAP server](LDAP_authentication.md "LDAP authentication") - account details are located on an external LDAP server
- [LTI](LTI.md "LTI") - works with the [Publish as LTI tool](Publish_as_LTI_tool.md "Publish as LTI tool") enrolment method to connect courses and activities
- [No authentication](No_authentication.md "No authentication") - for testing purposes or if the Moodle site is not available on the Internet. Do NOT use on public servers!
- [Shibboleth](Shibboleth.md "Shibboleth") - account details are located on an external Shibboleth server
- [OAuth 2](OAuth_2_authentication.md "OAuth 2 authentication") - authenticate with an OAuth 2 service
- [Web services](Web_services_authentication.md "Web services authentication") - for a dedicated account which integrates with your site via web services

There are also many [additional authentication plugins in the Moodle plugins directory](https://moodle.org/plugins/?q=type:auth).

[Multi-factor authentication](Multi-factor_authentication.md "Multi-factor authentication") can be enabled and managed from Site administration > Plugins > Admin tools in order to increase site security by requiring additional steps before users can log in.

## Password visibility toggle

Specify whether the password field on the login screen can have the visibility of its contents toggled. This is useful in providing a way to check a password value is entered in correctly. Choose between enabling this setting for all logins, or for logins on small screens only (default). This can also be disabled if required.

For the new installs, Password visibility toggle is enabled (by default) while login.

You can access this feature from *Site administration > General > Login > Login Settings*.

This setting is in sync with the redesigned 5.2 [Login page](Login_page.md "Login page") which includes a fresh look for authentication via Email, SMS, Security Key, and Authenticator App. It displays simplified default login settings to provide a more welcoming first impression for new users.

## See also

- [Multi-factor authentication](Multi-factor_authentication.md "Multi-factor authentication")
- [Authentication FAQ](Authentication_FAQ.md "Authentication FAQ")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Authentication&oldid=156186>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Site administration](Category_Site_administration.md "Category:Site administration")
- [Authentication](Category_Authentication.md "Category:Authentication")

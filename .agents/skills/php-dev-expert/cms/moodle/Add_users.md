# Add users - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Add_users

---

# Add users

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► Add users

[Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site")

- [Admin quick guide](Admin_quick_guide.md "Admin quick guide")
- [Authentication](Authentication.md "Authentication")
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

Users may be added to a Moodle site in several ways. When user accounts are created on a site, the process is called [Authentication](Authentication.md "Authentication"), and when users join a course, the process is called [Enrolment](Enrolment.md "Enrolment"). Normally only the administrator is allowed to add users to a site. Course teachers can only add students to their course and do not have permission to add users to the site. (If you're a teacher looking for instructions on how to add students to your course, read [Add students](Add_students.md "Add students").)

## Users sign up to the site themselves

If you wish people to create their own accounts on your site, you must enable [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration"). This feature is disabled by default because of the possibility of spammers accessing your site.

[![](/503/en/images_en/thumb/c/c4/selfregscreen.png/500px-selfregscreen.png)](https://docs.moodle.org/503/en/File:selfregscreen.png)

Signing up for an account

## The admin creates accounts manually

This process is called [Manual authentication](Manual_accounts.md "Manual accounts") and is enabled by default on a site. You can lock certain fields, set password expiry dates, and configure other settings from *Site administration > Plugins > Authentication > Manual accounts.*

As an administrator, you can add users one at a time from *Site administration > Users > Accounts > Add a new user*. See the documentation [Add a new user](Add_a_new_user.md "Add a new user") for more details.

You can also upload users in batches with a CSV file from *Site Administration > Users > Accounts > Upload users*. See the documentation [Upload users](Upload_users.md "Upload users") for more details.

The CSV file will also upload users directly into courses and groups within those courses. In the example below, new students are added to the site and enrolled in specified groups in two courses, English and Mathematics. (The courses need to exist already, but if the groups do not already exist, Moodle will create them on upload.)

[![](/503/en/images_en/thumb/1/1b/uploaduserscsvexample.png/500px-uploaduserscsvexample.png)](https://docs.moodle.org/503/en/File:uploaduserscsvexample.png)

New users added to site, courses and groups

Users may also be added as members of cohorts (site or category-wide batches of users.) See [Cohorts](Cohorts.md "Cohorts") for more details.

## Adding users from other systems

Users can connect to Moodle via a single sign-on from other systems. The settings for these may be found in *Site administration > Plugins >Authentication > Manage authentication* and include:

- [External database](External_database_authentication.md "External database authentication") - account details are located on an external database
- [LDAP server](LDAP_authentication.md "LDAP authentication") - account details are located on an external LDAP server
- [Shibboleth](Shibboleth.md "Shibboleth") - account details are located on an external Shibboleth server
- Web services authentication

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Add_users&oldid=153013>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Site administration](Category_Site_administration.md "Category:Site administration")

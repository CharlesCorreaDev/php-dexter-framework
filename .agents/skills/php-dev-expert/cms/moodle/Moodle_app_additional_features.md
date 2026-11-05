# Moodle app additional features - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Moodle_app_additional_features

---

# Moodle app additional features

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► [Moodle app](Moodle_app.md "Moodle app") ► Moodle app additional features

[Moodle app](Moodle_app.md "Moodle app")

- [Moodle app features](Moodle_app_features.md "Moodle app features")
- [Moodle app offline features](Moodle_app_offline_features.md "Moodle app offline features")
- [New for mobile](New_for_mobile.md "New for mobile")
- [Moodle app plans](Moodle_app_plans.md "Moodle app plans")
- [Moodle app guide for admins](Moodle_app_guide_for_admins.md "Moodle app guide for admins")
- [Moodle app notifications](Moodle_app_notifications.md "Moodle app notifications")
- [Creating mobile-friendly courses](Creating_mobile-friendly_courses.md "Creating mobile-friendly courses")
- [Plugins with mobile app support](Plugins_with_mobile_app_support.md "Plugins with mobile app support")
- [Privacy in the Moodle app](Privacy_in_the_Moodle_app.md "Privacy in the Moodle app")
- [Moodle app security](Moodle_app_security.md "Moodle app security")
- [Moodle app FAQ](Moodle_app_FAQ.md "Moodle app FAQ")

| **Moodle app additional features** |
| --- |
| Type | Local plugin |
| Set | N/A |
| Downloads | <http://moodle.org/plugins/view.php?plugin=local_mobile> |
| Issues | <https://tracker.moodle.org/browse/CONTRIB/component/13930> |
| Discussion | <https://moodle.org/mod/forum/view.php?id=7798> |
| Maintainer(s) | [Juan Leyva](https://docs.moodle.org/503/en/User:Juan_Leyva) |

The Moodle Mobile additional features plugin provides new features and web services for the Moodle Mobile app which are currently only available in Moodle 3.5 onward.

This plugin is officially developed and maintained by Moodle HQ

## How it works

Once installed the plugin creates a new service "Moodle Mobile additional features". The Mobile app checks if this service is enabled. If not, the Mobile app falls backs to the standard core Mobile app service.

Please, open [Moodle Mobile features](Moodle_Mobile_features.md "Moodle Mobile features") to check what new features are added to your site depending on your Moodle version.

## Features

- Support for Moodle sites prior to 3.2 using SSO authentication methods (Shibboleth and Google OAuth 2)
- Support for push notifications in Moodle sites prior to version 2.6

### Enable authentication for sites using SSO methods (like Shibboleth)

VERY IMPORTANT NOTE: If SSO is not working for your (or it is failing randomly), you'd need to disable the "Auto login guest" option "autologinguests". This setting may not be compatible with the SSO via app in some sites (it should work fine in Moodle 3.2 onwards).

SSO authentication is not supported in the Windows 8 and Windows Phone 8 apps

Once the plugin is installed, you need to go to Site administration > Plugins > Local plugins > Moodle Mobile additional features

There you can choose the "Type of login":

**Via the app**
:   Is the default login, the user must introduce his credentials in the app

**Via a browser window**
:   A new browser instance is open in the mobile device pointing to the login form in the Moodle site (which may again redirect to external identity providers if required). The user must introduce his credentials there. This is the option that must be selected for sites using SSO methods (or for sites that wants to force the user to authenticate in the site, not in the app)

[Video showing Moodle Mobile SSO](https://www.youtube.com/watch?v=cl8rsyyyg9g)

When using the "Via a browser window" option, you can optionally specify an URL scheme to be used by the system to open the Mobile app. By default, the URL scheme used to open the app will be the one indicated by the own app during the SSO process. If you've developed a custom app using its own URL scheme and you want to allow only SSO logins via your app, you can indicate there an URL scheme. The site will detect that setting and will use it instead of the value indicated by the app.

### Configuring the app from your site

- Disable app functionalities for your site. If there's a feature you don't want to make available via the app you can disable it here.
- Rename app text strings.
- Add new items in the app's main menu (the side menu).
- Replace the Change site option with a "Log out" one to force the users to enter their credentials on their next access.

## Installation

1. Unpack the zip file into the local/ directory. A new directory will be created called local/mobile.
2. Go to *Site administration > Notifications* to complete the plugin installation.
3. Go to *Site administration > Mobile app > Mobile settings* and enable web services for mobile devices (Remember to save the changes)
4. Go to *Site administration > Plugins > Web services > External services*, edit "Moodle Mobile additional features" and check the "Enabled" field, then save changes.
5. Go to *Site administration > Users > Permissions > Define roles*, edit the Authenticated user role and allow the capability moodle/webservice:createtoken.

Note: You need to have upgraded the Moodle Mobile app to version 1.4.4.

If you are currently using the Moodle Mobile app, you will need to log out of all your sites in order for the app to detect the new service.

## Admin users, please read

This plugin installs a new service in your Moodle installation, the automatic token creation for this type of services is forbidden for admin users. This means that admin users will not be able to use the Mobile app.

This can be solved easily, administrators must create a token manually in Moodle (*Plugins > Web Services > Manage tokens*) for the local\_mobile service. **Note:** Be sure to toggle the default "Moodle mobile web services" setting to "Moodle mobile additional features service" before creating the token.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Moodle_app_additional_features&oldid=153368>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Mobile](Category_Mobile.md "Category:Mobile")
- [Plugin](Category_Plugin.md "Category:Plugin")

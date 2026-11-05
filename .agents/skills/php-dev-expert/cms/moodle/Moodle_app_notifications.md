# Moodle app notifications - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Moodle_app_notifications

---

# Moodle app notifications

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► [Moodle app](Moodle_app.md "Moodle app") ► Moodle app notifications

[Moodle app](Moodle_app.md "Moodle app")

- [Moodle app features](Moodle_app_features.md "Moodle app features")
- [Moodle app offline features](Moodle_app_offline_features.md "Moodle app offline features")
- [New for mobile](New_for_mobile.md "New for mobile")
- [Moodle app plans](Moodle_app_plans.md "Moodle app plans")
- [Moodle app guide for admins](Moodle_app_guide_for_admins.md "Moodle app guide for admins")
- Moodle app notifications
- [Creating mobile-friendly courses](Creating_mobile-friendly_courses.md "Creating mobile-friendly courses")
- [Plugins with mobile app support](Plugins_with_mobile_app_support.md "Plugins with mobile app support")
- [Privacy in the Moodle app](Privacy_in_the_Moodle_app.md "Privacy in the Moodle app")
- [Moodle app security](Moodle_app_security.md "Moodle app security")
- [Moodle app FAQ](Moodle_app_FAQ.md "Moodle app FAQ")

## For students and teachers

[![](/503/en/images_en/thumb/e/e0/12Notifications.png/300px-12Notifications.png)](https://docs.moodle.org/503/en/File:12Notifications.png)

Forum post notification

The Moodle mobile app lets you keep up to date with all that's happening in your courses and on the site. Every time you open the app, events are synchronised with the website.

You will receive [Moodle calendar](Calendar.md "Calendar") event notifications automatically. If you don't want to get them, you can turn them all off individually (or globally) in the Calendar events options in the main menu.

You will also receive notifications of messages, forum posts, submitted assignments etc. (known as 'push notifications') if your site administrator has enabled these. To receive these notifications you need to enable them EITHER via the app OR via the website.

To enable mobile notifications via the app:

1. Go to the app settings then Notification preferences
2. Move the slider so that disable notifications is off
3. Move the slider to turn on notifications for assignment, feedback, forum etc. as required

To enable mobile notifications via the website:

1. Go to your user menu (top right of each page) and select Preferences
2. Click the link 'Notification preferences'
3. Click to turn on notifications for assignment, feedback, forum etc. as required

|  |  |
| --- | --- |
| Notification preferences in the app | Notification preferences on website |

## For administrators

Push notifications can be enabled by an administrator by connecting their Moodle site to a messaging server such <https://messages.moodle.net> (available for [registered Moodle sites](Site_registration.md "Site registration") only). An access key can be obtained via *Site administration > General > Messaging > Notification settings*; be sure the 'Mobile' is enabled and then click the link to settings, on the next page select *Request access key*. (For Moodle site versions 3.5 and 3.6 an access key can be obtained via *Site administration > Plugins > Message outputs > Manage message outputs*. Then by clicking the link to the Mobile settings, on the next page select *Request access key*.)

Note that from 2 April 2020, there will be certain limitations when using push notifications. Depending on the size of your site and the number of user devices receiving notifications, you may need to [sign up to a Premium plan](https://apps.moodle.com/local/apps/signup_site.php?plan=premium&origin=moodledocs) in the Moodle Apps portal. For further information, see the official announcement [Introducing our new Moodle App plans](https://moodle.org/mod/forum/discuss.php?d=397926).

You can enable by default Mobile notifications for your students, please read the "Default message outputs" section in [Messaging settings](Messaging_settings.md "Messaging settings").

If you have problems requesting the access key, please register your site on the Moodle Apps Portal <https://apps.moodle.com> once your site is registered there, an Airnotifier access key will be automatically generated for you.

Users then need to connect at least once with the latest version of the Moodle Mobile app in order to register their phones with the Moodle site.

### Encrypted Push Notifications

Encrypted push notifications are available in Moodle LMS 4.1.4 and later, and in Moodle App 4.2 and later.

To enable encrypted push notifications, go to Site administration > Messaging > Mobile and select ‘Encrypt notifications’.

When encrypted notifications are enabled, any information or data in the notifications that could potentially identify a user is encrypted using the Curve25519/X25519 encryption algorithm. This guarantees full compliance with GDPR for organisations that want to prevent their data from being transmitted without encryption through any processing server.

The generated key pair (public and private) used to encrypt notifications is securely stored in the keystore or keychain of each device that receives notifications from your site.

**Limitations of encrypted push notifications**

- At least Android 8 or iOS 13 are required on devices receiving notifications. Older versions of these systems are not supported.
- Rich push notifications (notifications with media attachments) are not supported.
- Some notifications may not redirect to the appropriate page or section within the app.
- If the size of the notification content is too big, it will be replaced with the message ‘Tap to view text’.
- For iOS devices only: If the Moodle App is not in the background or foreground of devices, some notifications might not be received. This is a native iOS limitation and is based on a number of factors, such as devices’ CPU usage, notifications’ priority level (data-only messages are considered ‘low priority’ by iOS), battery level, etc. You can read additional technical information in this discussion: <https://github.com/firebase/flutterfire/issues/9300>.

**Troubleshooting**

- After upgrading your Moodle site to a version that supports encrypted push notifications (Moodle LMS 4.1.4 or later), it’s important to note that your users will only start receiving encrypted notifications once they access your upgraded site through their Moodle App for the first time.
- To verify if a device supports encrypted push notifications, follow these steps:

1. Open the Moodle App and access the 'More' menu (represented by three dots).
2. Select 'App settings' and then choose 'About'.
3. On the 'About' page, tap on the App version (Moodle Mobile X.X) at the bottom.
4. A new page titled 'Device info' will appear.
5. Scroll to the bottom of the 'Device info' page to locate the section ‘Encrypted push notifications supported.’

Please note that this indicates whether a device can support encrypted push notifications, but it doesn’t necessarily mean that they have been enabled on a specific Moodle site.

### Event Reminders plugin

Push notifications can also include calendar event notifications, however this requires the [Event Reminders plugin](https://moodle.org/plugins/view/local_reminders) to be installed on the Moodle site.

The Event Reminders plugin will automatically send reminders for Moodle calendar events in a timely manner via Moodle message interface. It also allows users to control how they receive messages for each type of event in the Moodle calendar.

### Installing your own notifications infrastructure

If you have a customized version of the Moodle Mobile app, or you want to use your own notifications infrastructure, you will have to install a private [AirNotifier](http://airnotifier.github.io) (backend server for notifications).

Please notice that Moodle HQ does not maintain or offer any support for any Airnotifier-related issues. Moodle HQ has funded and contributed with some fixes to this software but it is not officially maintaining or supporting it.

Moodle offers a branded app service including a private notifications infrastructure, for more information visit <https://moodle.com/mobileapp/>

## Troubleshooting

If your users are not receiving push notifications please check:

- You have not exceeded the maximum number of active devices according to your Moodle App Plan. You can register for free on <https://apps.moodle.com> to check your current active user devices to check if you need to upgrade to a [Premium plan](https://apps.moodle.com/local/apps/signup_site.php?plan=premium&origin=moodledocs).
- You have entered an Airnotifier access key in the Mobile settings in the Site administration
- Mobile is enabled in Messaging > Notification settings in the Site administration
- In your config.php, $CFG->noemailever is not set to true (or it does not exist)
- Any user not receiving notifications has enabled mobile notifications in the mobile app in App settings > Notification preferences then check that "Disable notifications" is not selected
- Any user not receiving notifications has enabled the type of notifications they want to receive in App settings > Notification preferences
- Any user not receiving notifications hasn't disabled his current device in App settings > Notification preferences > 3 dots menu > Configure devices
- Mobile notifications are not disallowed by an administrator in 'Default message outputs' in the Site administration
- Mobile notifications are enabled in the user's Android phone (Settings > Apps > Moodle Mobile > Show notifications ticked) or iOS phone (in iOS in Settings -> Moodle Mobile > Notifications)
- The server where your Moodle site is installed is able to connect to messages.moodle.net (port 443) via telnet
- You are using the Moodle Mobile official app. If you are using a custom/branded app for your institution, please contact your institution since custom apps need their own notifications infrastructure (see above).
- Your Moodle installation cron jobs are not locked. You can check it executing the CRON manually and reading the output, more info [here](https://moodle.org/mod/forum/discuss.php?d=361595)

### Testing push notifications

To test push notifications:

1. Ensure that mobile notifications are enabled (as described above).
2. Go to a course and create a forum with forced subscription.
3. Log in as a student and create a new discussion in the forum.
4. As the same student, log in on the mobile app, go to App settings > Notification preferences > Forum and enable all the notifications.
5. In the same page, check that at the top of the page you see "You are configuring Mobile notifications". If it says "You are configuring notifications for web (or email)", switch to mobile via the three dots menu at the top right.
6. In the same page, tap the three dots menu (top right), go to Configure devices and check that your current device is enabled.
7. Now, put the Moodle Mobile app in background (switching to a different app or going to your device home).
8. Log in to the site (on the web) and post a reply to the discussion started by the student., ticking the option "Send forum post notifications with no editing-time delay".
9. Verify that the student receives a push notification on their mobile device.

## See also

- [I don't receive calendar notifications (reminders) when using Android 12 or above](https://docs.moodle.org/en/Moodle_app_FAQ#I_don.27t_receive_calendar_notifications_.28reminders.29_when_using_Android_12_or_above)
- [How notifications icon badges are updated](https://docs.moodle.org/en/Moodle_app_FAQ#How_notifications_icon_badges_are_updated)

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Moodle_app_notifications&oldid=155358>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Mobile](Category_Mobile.md "Category:Mobile")

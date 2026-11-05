# Admin quick guide - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Guide_for_new_administrators

---

# Admin quick guide

From MoodleDocs

(Redirected from [Guide for new administrators](https://docs.moodle.org/503/en/index.php?title=Guide_for_new_administrators&redirect=no "Guide for new administrators"))

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► Admin quick guide

[Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site")

- Admin quick guide
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

This page is an introduction to Moodle administration. You have a new, empty Moodle site installed. What to do next?

## Setting up the front (home) page

1. Click Site administration > General and scroll down to Site home settings.
2. Change the full name and short name if needed.
3. Decide what should be shown on the front page - news items, courses, course categories or none of these things? The same or different for logged in and non-logged in users? As for other settings, they can always be changed later.

For more information, see [Front page settings](Front_page_settings.md "Front page settings").

To add text and/or images to the central area of the front page:

1. Enable Edit mode' top right.
2. Click the configuration icon (cogwheel) near the top of the screen. (If you don't see this, check in *Site administration > General > Site home settings* that 'Include a topic section' is ticked.)
3. Add text and/or images to the summary box.

**Note**: If you don't want to use your front page for displaying courses or information about your organisation, you can display the login page only by checking "force login" in *Site administration > General > Security > Site security settings*.

## Changing the look of your site

- A new Moodle site comes with two default themes, 'Boost' and 'Classic.' Both work well on mobile devices and desktops and may be customised from the [Themes](Themes.md "Themes") area of Site administration.

- Find out how to add dropdown menus, footer links, Google Analytics and more in [Site appearance](Site_appearance.md "Site appearance").
- If your installation and organisation allow it, you can install a custom theme. See [Installing plugins](Installing_plugins.md "Installing plugins") for details.

## Adding courses

- Courses are Moodle's learning areas, where teachers and students work together.
- You may [add a new course](Adding_a_new_course.md "Adding a new course") by clicking the 'Add a new course' button on the front page or from the Manage courses and categories link in the Courses area of Site administration.
- If you plan to have many courses, you can [upload courses](upload_courses.md "upload courses") in bulk via CSV file.
- If you want certain settings in your courses to be always pre-set for you when you make a new course, check out *Site administration > Courses > Course default settings*.

See [Courses](Courses.md "Courses") for an overview of the various aspects of courses and see courses in action with user data on the [Mount Orange demo site](http://school.moodledemo.net/).

## Adding users

This is a two-step process, although it can be streamlined.

![](https://i.ytimg.com/vi/vpRJbxwMjvY/hqdefault.jpg)

[How can new users sign up to my Moodle site?](https://www.youtube-nocookie.com/embed/vpRJbxwMjvY?autoplay=1)

Load video

YouTube

YouTube might collect personal data. [Privacy Policy](https://www.youtube.com/howyoutubeworks/user-settings/privacy/)

Continue
Dismiss

Overview of adding users

### Step 1: Authentication

Everyone using your site must have an account. You can allow people to create their own account using [Email-based self-registration](Email-based_self-registration.md "Email-based self-registration"), or [add new users individually](Add_a_new_user.md "Add a new user") or [bulk create accounts via CSV file](Upload_users.md "Upload users") or choose from several other authentication methods.

For more information, see [Managing accounts](Managing_accounts.md "Managing accounts") and [Authentication](Authentication.md "Authentication").

**Note:** You do not yet decide who will be a teacher, student, or other participant roles. If you're wondering why, read the documentation on [Assigning roles](Assign_roles.md "Assign roles").

### Step 2: Enrolment

Once users have an account, they need to be enrolled in courses. (Now is the time to give them their student, teacher, or other roles.) You can allow them to [self enrol](Self_enrolment.md "Self enrolment"), or you can [enrol them manually yourself](Manual_enrolment.md "Manual enrolment") or choose from several other enrolment methods.

For more information, see [Enrolments](Enrolments.md "Enrolments").

**Note:** You can create accounts and enrol users in courses at the same time if you wish by [uploading users](Upload_users.md "Upload users") or you can explore [Cohorts](Cohorts.md "Cohorts"), site or category-wide groups.

[![](/503/en/images_en/thumb/7/71/Enrol40.png/600px-Enrol40.png)](https://docs.moodle.org/503/en/File:Enrol40.png)

Enrolling learners into a course

## File management

- Explore the process of [working with files](working_with_files.md "working with files") in courses so you'll be able to advise others.
- See [Managing repositories](Managing_repositories.md "Managing repositories") for information on allowing your users to use files from external sources (such as Google Drive, Dropbox and MS OneDrive) in their courses.
- If uploaded file size may be an issue for you, then you can add restrictions for both the user quota and the site as a whole from *Administration > Site administration > Security > Site security settings.* See [Site security settings](Site_security_settings.md "Site security settings") for more information.

## Important default site settings

1. Set your default [language](language.md "language") in *Site administration > Language > Language settings*. Moodle defaults to common English; if you need US English or another language, add that in *Language > Language pack* first, then you can set it as the default.
2. Set your default timezone and country in *Site administration > Location > Location settings*.
3. Turn off public Guest access (unless you are sure you know how to use it) in *Site administration > Plugins > Enrolments > Manage enrol plugins* and Hide its button in *Site administration > Plugins > Authentication > Manage authentication > Guest login button*.
4. Adjust your minimum password if you need to in *Site adminstration>Security > Site security settings > Password policy*.
5. Verify that [cron](cron.md "cron") is running when you set that up during install. Your site will not work properly without it. If the message "The cli/cron.php maintenance script has not been run for at least 24 hours." shows up in *Site administration > Notifications*, then it is not running properly.

## Admin tips and tricks

- Go through each activity in *Administration > Site administration > Plugins > Activity modules* and decide the most suitable default settings for your Moodle. Do the same for the gradebook, via *Administration > Site administration > Grades > General settings.*
- Go to *Administration > Site administration > Advanced features* and review whether you want to make use of additional features such as [blogs](blogs.md "blogs"), [RSS feeds](RSS_feeds.md "RSS feeds"), completion tracking (for both [Activity completion](Activity_completion.md "Activity completion") and [Course completion](Course_completion.md "Course completion")), [conditional access](Conditional_activities.md "Conditional activities"), [portfolios](portfolios.md "portfolios") or [badges](badges.md "badges").
- Consider enabling your site for [Mobile app](Mobile_app.md "Mobile app") access via *Site administration >Mobile app>Mobile settings."*
- Provide the user interface in different languages by installing additional [language packs](language_packs.md "language packs") via *Site administration > Language > Language packs.*
- Use wording more suitable to your users by changing Moodle's default terms in *Administration > Site administration > Language > Language customisation*.

[![](/503/en/images_en/thumb/8/8c/badges40.png/600px-badges40.png)](https://docs.moodle.org/503/en/File:badges40.png)

Badges -a feature to consider

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Admin_quick_guide&oldid=153667>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Site administration](Category_Site_administration.md "Category:Site administration")
- [Quick guide](Category_Quick_guide.md "Category:Quick guide")

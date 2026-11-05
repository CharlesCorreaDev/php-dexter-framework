# New for administrators - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/New_for_administrators

---

# New for administrators

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [About Moodle](About_Moodle.md "About Moodle") ► New for administrators

[About Moodle](About_Moodle.md "About Moodle")

- [Features](Features.md "Features")
- [New features in 5.3](New_features.md "New features")
- [Philosophy](Philosophy.md "Philosophy")
- [Pedagogy](Pedagogy.md "Pedagogy")
- [Standards](Standards.md "Standards")
- [Accessibility](Accessibility.md "Accessibility")
- [History](History.md "History")
- [Usage](Usage.md "Usage")
- [Moodle site - basic structure](Moodle_site_-_basic_structure.md "Moodle site - basic structure")
- [Moodle key terms](Moodle_key_terms.md "Moodle key terms")
- [About Moodle FAQ](About_Moodle_FAQ.md "About Moodle FAQ")
- [User quick guide](User_quick_guide.md "User quick guide")

This page lists new features and improvements for administrators. For the full list of new features and improvements, see the [Moodle 5.3 release notes](https://moodledev.io/general/releases/5.3).

## Appearance and navigation

### Classic theme removed

Sites that used the Classic theme switch to Boost on upgrade. You can find the former Navigation block pages, such as Site participants, Site content bank and Site badges, in *Site administration* and on the user profile.

![Site participants and Site content bank links under Site administration > Courses](/503/en/images_en/thumb/3/36/5.3_MDL-88655_siteadmincourseslinks_v2_EN.png/800px-5.3_MDL-88655_siteadmincourseslinks_v2_EN.png)

Site participants and Site content bank links under Site administration > Courses

See [Moving from the Classic theme](Boost_theme.md#Moving_from_the_Classic_theme "Boost theme") in Boost theme.

### Dark mode

You can turn on Dark mode in *Site administration > Appearance > Themes > Boost > Experimental settings*. Users can then switch between Light, Dark and System modes from the navigation bar.

![Dark mode in Boost theme](/503/en/images_en/thumb/2/21/5.3_MDL-68037_Boost_theme_dark_mode_settings%281%29.png/800px-5.3_MDL-68037_Boost_theme_dark_mode_settings%281%29.png)

Dark mode in Boost theme

See [Setting Dark mode](Boost_theme.md#Set_Dark_mode_in_Boost_theme "Boost theme") in Boost theme.

### Course linear navigation

Previous and Next buttons are on by default in the Custom sections and Weekly sections formats. You can turn them off for each course format in *Site administration > Plugins > Course formats*.

![Linear navigation for courses with Previous and Next buttons](/503/en/images_en/thumb/0/02/5.3_MDL-89406_linear_navigation_previous_next_EN%281%29.png/800px-5.3_MDL-89406_linear_navigation_previous_next_EN%281%29.png)

Linear navigation for courses with Previous and Next buttons

See [Turning off linear navigation](Course_linear_navigation.md#Where_do_administrators_disable_the_feature? "Course linear navigation") in Course linear navigation.

## Security and accounts

### New login notifications

New login notifications are on by default for new installs, and a security check warns you if they are disabled or an output is not forced on. On upgraded sites, you can turn them on in *Site administration > General > Messaging > Notification settings*.

![New login notifications for administrators on new Moodle installs](/503/en/images_en/thumb/a/ad/5.3_MDL-89465_enable_new_login_notifications_EN%281%29.png/800px-5.3_MDL-89465_enable_new_login_notifications_EN%281%29.png)

New login notifications for administrators on new Moodle installs

See [New login notifications](Notifications.md#New_login_notifications_enabled_by_default "Notifications") in Notifications.

### Role risks

The role list shows colour-coded risk icons, ordered by severity, and the number of users assigned to each role. You can select a risk icon to see only the capabilities in that role with that risk.

![Role list showing risk icons and the Role assignments column](/503/en/images_en/thumb/7/76/5.3_MDL-86934_rolelistriskiconsandassignmentcount_v2_EN.png/800px-5.3_MDL-86934_rolelistriskiconsandassignmentcount_v2_EN.png)

Role list showing risk icons and the Role assignments column

See [Role risk visibility](Managing_roles.md#Role_risk_visibility_and_audit_improvements "Managing roles") in Managing roles.

### Moodle app deep link auto-login

You can let users log in automatically from Moodle app deep links by enabling Deep link auto-login in *Site administration > Mobile app > Mobile authentication*.

![Deep link auto-login setting in Mobile authentication settings](/503/en/images_en/thumb/2/29/MDL88924deeplinkautologin.png/800px-MDL88924deeplinkautologin.png)

Deep link auto-login setting in Mobile authentication settings

See [Deep link auto-login](Moodle_app_guide_for_admins.md#Deep_link_auto-login "Moodle app guide for admins") in Moodle app guide for admins.

### Web services: OAuth 2 clients and personal access tokens

Moodle's new REST API has its own tokens. You can register apps, such as a mobile app, as [OAuth 2 clients](OAuth_2_clients.md "OAuth 2 clients") in *Site administration > Server > OAuth 2 clients*, and users can create their own [personal access tokens](Personal_access_tokens.md "Personal access tokens") from their preferences. OAuth 2 clients need the site's Composer dependencies installed.

![Edit page for the Mount Orange mobile app OAuth 2 client, showing its status, type, primary flow and ID, a callback URI and two selected scopes](/503/en/images_en/thumb/2/2e/5.3_MDL-88468_editoauth2client_EN.png/400px-5.3_MDL-88468_editoauth2client_EN.png)

Editing an OAuth 2 client

See the new [REST API tokens](REST_API_tokens.md "REST API tokens") page.

## Reports

### Environment check

You can run the Environment check from *Site administration > Reports > Performance overview*.

![Environment check in the Performance overview report](/503/en/images_en/thumb/f/f2/MDL87565environmentcheckinperformanceoverview%281%29.png/800px-MDL87565environmentcheckinperformanceoverview%281%29.png)

Environment check in the Performance overview report

See [Environment check](Performance_overview.md#Environment_check_moved_to_Performance_overview_report "Performance overview") in Performance overview.

### Status, Performance and Security reports

The System status, Performance overview and Security checks reports show each result as soon as its check finishes, so you can start reading them sooner.

See [System status report](System_status_report.md "System status report").

### Report builder

You can aggregate timestamp columns by week, month or year, filter the badges report by criteria, and see each task's full class name in task filters.

![Report builder time aggregation options (week, month, year)](/503/en/images_en/thumb/8/80/CustomReportsColumnAggregation.png/800px-CustomReportsColumnAggregation.png)

Report builder time aggregation options (week, month, year)

See [Column aggregation](Custom_reports.md#Column_aggregation "Custom reports") in Custom reports.

## Courses and tasks

### Delete courses in the background

You can turn on Delete courses asynchronously in *Site administration > Courses > Delete course*, so that courses are deleted in the background without timeouts. Courses waiting to be deleted show a "Queued for deletion" badge in the course category listing.

![Asynchronous course deletion in progress with Queued for deletion badge](/503/en/images_en/thumb/6/63/5.3_MDL77760asynchronouscoursedeletion%281%29.png/800px-5.3_MDL77760asynchronouscoursedeletion%281%29.png)

Asynchronous course deletion in progress with "Queued for deletion" badge

See [Delete courses asynchronously](Adding_a_new_course.md#Delete_courses_asynchronously "Adding a new course") in Adding a new course.

### Run scheduled tasks ASAP

You can select Run ASAP for a scheduled task to queue it to run in the background the next time cron runs, with no risk of a browser timeout.

![Run ASAP option for scheduled tasks](/503/en/images_en/thumb/f/f6/MDL85548scheduledtasksrunasap%281%29.png/800px-MDL85548scheduledtasksrunasap%281%29.png)

Run ASAP option for scheduled tasks

See [Run ASAP](Scheduled_tasks.md#Run_scheduled_tasks_ASAP_and_asynchronously_on_server "Scheduled tasks") in Scheduled tasks.

### Quiz statistics recalculation delay

Set how long Moodle waits before recalculating quiz statistics, to reduce server load on busy sites or keep statistics more up to date. You can also trigger an immediate recalculation when needed.

![Quiz statistics recalculation delay setting](/503/en/images_en/thumb/9/92/5.3_MDL-88534_recalculate_debounce_quiz_statistics%281%29.png/800px-5.3_MDL-88534_recalculate_debounce_quiz_statistics%281%29.png)

Quiz statistics recalculation delay setting

See [Statistics delay](Quiz_statistics_report.md#Configurable_Quiz_statistics_delay "Quiz statistics report") in Quiz statistics report.

### Limits for required and optional markers

You can set the maximum number of required and optional markers, and the defaults for new assignments, in *Site administration > Plugins > Activity modules > Assignment > Assignment settings*.

![Maximum required markers limit set to 10 and Maximum optional markers limit set to 9, with their descriptions](/503/en/images_en/thumb/d/d5/5.3_MDL-87709_sitelevelmarkerlimits_crop_EN.png/800px-5.3_MDL-87709_sitelevelmarkerlimits_crop_EN.png)

Maximum required markers limit and Maximum optional markers limit settings

See [Marker limits](Assignment_settings.md#Marker_limits "Assignment settings") in Assignment settings.

## Plugins and integrations

### Anthropic Claude AI provider

Use Anthropic's Claude models to power Moodle's AI features, such as generating, summarising and explaining text.

![Creating an Anthropic Claude API provider instance](/503/en/images_en/thumb/a/a6/AnthropicClaudeAPIprovider.png/800px-AnthropicClaudeAPIprovider.png)

Creating an Anthropic Claude API provider instance

See the new [Anthropic Claude API provider](Anthropic_Claude_API_provider.md "Anthropic Claude API provider") page.

### BigBlueButton

BigBlueButton is on by default for new installs and is ready to use once you enter your server URL and shared secret. You can set safe recording formats as tags, and logged-in users who are not enrolled in the course can join through a guest link.

![BigBlueButton in the activity chooser with a setup-required tooltip](/503/en/images_en/thumb/0/09/5.3_MDL-87373_activitychoosergreyedouttooltip_EN.png/800px-5.3_MDL-87373_activitychoosergreyedouttooltip_EN.png)

BigBlueButton in the activity chooser with a setup-required tooltip

See [BigBlueButton](BigBlueButton.md "BigBlueButton").

### TinyMCE Premium Markdown

With a TinyMCE Premium subscription, you can enable the Markdown plugin so users can paste Markdown and have it formatted automatically. You can limit it to specific roles with the `tiny/premium:usemarkdown` capability.

![Page content created with the TinyMCE Premium Markdown plugin](/503/en/images_en/thumb/e/e2/5.3_MDL-88547_TinyMCE_premium_page_Markdown_to_rich_text_EN%281%29.png/800px-5.3_MDL-88547_TinyMCE_premium_page_Markdown_to_rich_text_EN%281%29.png)

Page content created with the TinyMCE Premium Markdown plugin

See [Markdown plugin](TinyMCE_editor.md#Markdown_plugin "TinyMCE editor") in TinyMCE editor.

## See also

- [New features](New_features.md "New features")
- [New for teachers](New_for_teachers.md "New for teachers")
- [Moodle 5.3 release notes](https://moodledev.io/general/releases/5.3)

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=New_for_administrators&oldid=156664>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [About Moodle](Category_About_Moodle.md "Category:About Moodle")
- [New features](Category_New_features.md "Category:New features")

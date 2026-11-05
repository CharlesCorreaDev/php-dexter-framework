# New features - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/New_features

---

# New features

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [About Moodle](About_Moodle.md "About Moodle") ► New features

[About Moodle](About_Moodle.md "About Moodle")

- [Features](Features.md "Features")
- New features in 5.3
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

Read on for an overview of the key features and improvements in Moodle 5.3.

For role-specific improvements, see [New for teachers](New_for_teachers.md "New for teachers") and [New for administrators](New_for_administrators.md "New for administrators").

## What's new in Moodle 5.3?

Moodle 5.3, a Long-Term Support (LTS) release, helps educators design learning with intent.

It brings stronger tools for connecting learning to outcomes, more flexible assessment and feedback, and a clearer, more current interface that keeps the focus on teaching and learning.

This release introduces new capabilities for **course design and assessment**, practical improvements for everyday teaching and content creation, and more **efficient reporting and administration**, while continuing to **modernise the platform for future development**.

Together, these improvements make Moodle 5.3 a compelling upgrade, helping institutions design more purposeful learning experiences, support robust assessment practices, and manage their sites with greater confidence.

## Design learning with intent

New **[Learning outcomes](Learning_outcomes.md "Learning outcomes")** tools help educators connect course and activity design to defined outcomes, including a Learning outcomes page in each course and outcomes that don't need a scale.

![Manage learning outcomes page](/503/en/images_en/thumb/9/99/5.3_MDL-89334_managelearningoutcomes_v2_EN.png/800px-5.3_MDL-89334_managelearningoutcomes_v2_EN.png)

Manage learning outcomes page

**[Multiple marker workflows in assignments](Using_multiple_markers.md "Using multiple markers")** are also expanded. Each marker can now provide their own feedback alongside overall feedback for the learner, while required and optional markers support more flexible approaches to moderation and sample marking.

![Student view of assignment feedback showing the grade, the markers who graded it, a comment from each marker and the overall comment](/503/en/images_en/thumb/b/b4/5.3_MDL-86007_studentpermarkerfeedback_EN.png/530px-5.3_MDL-86007_studentpermarkerfeedback_EN.png)

Student view of assignment feedback, with a comment from each marker and the overall comment

## A clearer, more current interface

A major highlight of this release is **[Dark mode in the Boost theme](Boost_theme.md#Set_Dark_mode_in_Boost_theme "Boost theme")**, the most-voted request by the Moodle community. Available as an experimental option that administrators can enable, it lets users switch between Light, Dark and System modes for a more comfortable, readable experience.

![Boost Experimental settings page shown in Dark mode, with the Light, Dark and System menu open in the navigation bar](/503/en/images_en/thumb/2/21/5.3_MDL-68037_Boost_theme_dark_mode_settings%281%29.png/800px-5.3_MDL-68037_Boost_theme_dark_mode_settings%281%29.png)

Dark mode in Boost theme

The Moodle interface also gets a visual refresh, with updated typography, a centre-aligned page layout, a [clearer course page hierarchy](Course_homepage.md#Parts_of_a_course "Course homepage"), and more intuitive drawers and navigation. Your name now appears next to your profile picture, and the notification and message icons are updated.

![Course page with the course index on the left, centred course content and the block drawer on the right](/503/en/images_en/thumb/d/d6/5.3_MDL-88411_centrealignedlayout_v2_EN.png/800px-5.3_MDL-88411_centrealignedlayout_v2_EN.png)

Centre-aligned page layout

**[Course linear navigation](Course_linear_navigation.md "Course linear navigation")** adds **Previous** and **Next** buttons to activity and resource pages in courses using the Custom sections and Weekly sections formats, giving learners a clearer, more guided path through course content.

![Linear navigation for courses with Previous and Next buttons](/503/en/images_en/thumb/0/02/5.3_MDL-89406_linear_navigation_previous_next_EN%281%29.png/800px-5.3_MDL-89406_linear_navigation_previous_next_EN%281%29.png)

Linear navigation for courses with Previous and Next buttons

## Better tools for teaching and content creation

Enhancements to **Quiz and Question bank** functionality give educators more flexibility, including a **[new due date for quiz activities](Quiz_settings.md#Due_date_for_quiz_activity "Quiz settings")**, the option to **[delete questions along with their category](Question_categories.md#Option_to_delete_questions_while_deleting_a_category "Question categories")**, **[exporting selected questions in Moodle XML](Export_questions.md#Export_selected_questions_in_Moodle_XML_format "Export questions")** format, and new **[user filters in Quiz reports](Quiz_reports.md#New_filters_in_Quiz_reports_UI "Quiz reports")**.

![Quiz page showing its Opened, Due and Closes dates, with the message Quiz is overdue](/503/en/images_en/thumb/5/50/5.3_MDL-82521_quizduedate_v2_EN.png/800px-5.3_MDL-82521_quizduedate_v2_EN.png)

Due date for quiz

**[Safe Exam Browser](Safe_Exam_Browser.md#Manual-configuration_add-ons "Safe Exam Browser")** settings now let you allow multiple displays and screen capture, for example for proctoring tools.

Course creators can structure content more clearly with **[Accordion and List styles](TinyMCE_editor.md#Insert_Accordion_and_List_Styles_(advlist) "TinyMCE editor")** in the **TinyMCE editor**, and sites with **TinyMCE Premium** can **[paste Markdown](TinyMCE_editor.md#Markdown_plugin "TinyMCE editor")** and have it formatted automatically.

![TinyMCE editor with three collapsible accordion sections, each containing a lettered or numbered list](/503/en/images_en/thumb/6/6c/5.3_MDL-88618_accordionliststyles_v2_EN.png/800px-5.3_MDL-88618_accordionliststyles_v2_EN.png)

Accordion sections and list styles in the TinyMCE editor

**[BigBlueButton](BigBlueButton.md "BigBlueButton")** is now enabled by default on new sites, making it easier to get started with video conferencing.

## More useful reporting and administration

For administrators, more **[time-related aggregations in Report builder](Custom_reports.md#Column_aggregation "Custom reports")**, the new '[Delete courses asynchronously](Adding_a_new_course.md#Delete_courses_asynchronously "Adding a new course")' setting, the option to **[run scheduled tasks in the background](Scheduled_tasks.md#Run_scheduled_tasks_ASAP_and_asynchronously_on_server "Scheduled tasks")**, and **[role risk visibility](Managing_roles.md#Role_risk_visibility_and_audit_improvements "Managing roles")** make it easier to manage sites efficiently.

![Role list showing risk icons and the Role assignments column](/503/en/images_en/thumb/7/76/5.3_MDL-86934_rolelistriskiconsandassignmentcount_v2_EN.png/800px-5.3_MDL-86934_rolelistriskiconsandassignmentcount_v2_EN.png)

Role list showing risk icons and the Role assignments column

**[Global search](Global_search.md#Partial_word_matching "Global search")** now matches the start of words, so it's quicker to find what you're looking for.

![Global search results for 'Veg', with 'vegan and vegetarian' highlighted in a course description](/503/en/images_en/thumb/c/c4/MDL70225simpleglobalsearch%281%29.png/800px-MDL70225simpleglobalsearch%281%29.png)

Partial word search and prefix match support in Global search

The **[Course completion report](Course_completion_report.md#Download_widget_for_course_completion_report "Course completion report")** can now be downloaded in more formats, including Excel and PDF, with your current filters applied.

**[New login notifications](Notifications.md#New_login_notifications_enabled_by_default "Notifications")** are enabled by default on new sites, helping administrators spot unrecognised sign-ins sooner, and **[deep link auto-login](Moodle_app_guide_for_admins.md#Deep_link_auto-login "Moodle app guide for admins")** for the Moodle app must now be explicitly enabled by administrators, giving them greater control over how users are signed in to the app.

## More choice and visibility for AI

Moodle continues to expand AI choice and control with the **[Anthropic Claude AI provider added to core](Anthropic_Claude_API_provider.md "Anthropic Claude API provider")**, and a **[new course-level AI usage report](AI_usage_report.md#Course-level_AI_usage_report "AI usage report")** that gives teachers and learners greater visibility into how AI is used.

![Course-level AI usage report showing AI actions logged for every student in the course, as seen by a teacher](/503/en/images_en/thumb/6/6a/5.3_MDL-80893_aiusagereportteacher_EN.png/800px-5.3_MDL-80893_aiusagereportteacher_EN.png)

Course-level AI usage report, as seen by a teacher

## Stronger integrations and platform foundations

These changes mostly affect administrators and developers. For most sites, they need only a quick check after upgrading.

The **[Classic theme has been removed](Boost_theme.md#Moving_from_the_Classic_theme "Boost theme")** from core, so sites using it switch to Boost on upgrade. Check any custom themes based on Classic, and remove any Classic theme setting from config.php. For this and other changes administrators should know about, see [New for administrators](New_for_administrators.md "New for administrators").

Moodle 5.3 introduces **[OAuth 2 authentication](OAuth_2_clients.md "OAuth 2 clients")** and **[personal access tokens](Personal_access_tokens.md "Personal access tokens")** for Moodle's **[new REST API](REST_API_tokens.md "REST API tokens")**, offering more secure and flexible ways to connect with other systems. It also builds on the **React foundations** introduced in 5.2, with the **Timeline block** as the first component migrated to the new framework. The interface now uses **Bootstrap 5.3.8**.

## See also

- [New for teachers](New_for_teachers.md "New for teachers")
- [New for administrators](New_for_administrators.md "New for administrators")
- [Moodle 5.3 release notes](https://moodledev.io/general/releases/5.3)

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=New_features&oldid=156696>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [About Moodle](Category_About_Moodle.md "Category:About Moodle")
- [New features](Category_New_features.md "Category:New features")

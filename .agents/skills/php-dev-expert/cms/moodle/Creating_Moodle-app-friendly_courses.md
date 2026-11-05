# Creating mobile-friendly courses - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Creating_Moodle-app-friendly_courses

---

# Creating mobile-friendly courses

From MoodleDocs

(Redirected from [Creating Moodle-app-friendly courses](https://docs.moodle.org/503/en/index.php?title=Creating_Moodle-app-friendly_courses&redirect=no "Creating Moodle-app-friendly courses"))

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Managing a Moodle site](Managing_a_Moodle_site.md "Managing a Moodle site") ► [Moodle app](Moodle_app.md "Moodle app") ► Creating mobile-friendly courses

[Moodle app](Moodle_app.md "Moodle app")

- [Moodle app features](Moodle_app_features.md "Moodle app features")
- [Moodle app offline features](Moodle_app_offline_features.md "Moodle app offline features")
- [New for mobile](New_for_mobile.md "New for mobile")
- [Moodle app plans](Moodle_app_plans.md "Moodle app plans")
- [Moodle app guide for admins](Moodle_app_guide_for_admins.md "Moodle app guide for admins")
- [Moodle app notifications](Moodle_app_notifications.md "Moodle app notifications")
- Creating mobile-friendly courses
- [Plugins with mobile app support](Plugins_with_mobile_app_support.md "Plugins with mobile app support")
- [Privacy in the Moodle app](Privacy_in_the_Moodle_app.md "Privacy in the Moodle app")
- [Moodle app security](Moodle_app_security.md "Moodle app security")
- [Moodle app FAQ](Moodle_app_FAQ.md "Moodle app FAQ")

As more and more students access courses from their smartphones, tablets or other mobile devices, it is increasingly important to ensure your courses are mobile-friendly.

Encouraging students to install the [official Moodle mobile app](https://download.moodle.org/mobile/) is one way to improve their learning experience. Below are some suggestions for optimising your course materials for students both using the app and accessing Moodle from mobile devices.

## Setting up your course

- Custom sections or weekly course format is best suited to mobile devices. In topics format, the first section or the highlighted section is shown by default in the app. In weekly format, the current week is shown.
- Don't use stealth activities or direct links to activities (the links will work but is not the best experience for mobile).
- Blocks are collapsed by default and can be expanded by clicking the arrow-like tab on the right.
- If you have a mix of students accessing the course on mobile and desktop, consider asking your admin to install the [Moodle Mobile availability plugin](Moodle_Mobile_availability_plugin.md "Moodle Mobile availability plugin") which restricts items to desktop or mobile users.

## Course content

- Use responsive HTML in pages.
- Use a [Page](Page.md "Page") or [Book](Book.md "Book") instead of downloadable documents where possible.
- Use a [Page](Page.md "Page") or [Book](Book.md "Book") for videos instead of adding them in [Text and media area resources](Text_and_media_area.md "Text and media area"), avoid embedding more than one video in the same page.
- Avoid uploading many documents or having numerous, text heavy pages. Think more in terms of short "information-bytes".
- If you include YouTube videos, keep them short and consider providing them for download and offline viewing in a [folder](Folder_resource.md "Folder resource"). Not all video formats are supported so add them in different formats. (MP4 is probably the most widely accepted format.)
- For YouTube or Vimeo videos, you may use Bootstrap responsive classes: <https://getbootstrap.com/docs/4.0/utilities/embed/>, for example:

```
<div class="embed-responsive"><video...
```

- Note that drag and drop questions behave differently in the app. You can't drag images, you need to tap to select and tap to drop.
- Note that if you add YouTube video links or map links as URL resources, they will open automatically in the app.

|  |  |  |
| --- | --- | --- |
| Short text for label | Responsive HTML | Map link |

- Use only plugins with mobile app support so they can be accessed via the mobile app - see [Plugins with mobile app support](Plugins_with_mobile_app_support.md "Plugins with mobile app support").
- Avoid relative URLs such as ../mod/page/views.php?id=X as the app won't be able to guess the proper URL, if it is necessary to use URLs without domain, please use absolute URLs such as /mod/page/views.php?id=X

### Using Bootstrap components

The mobile app supports all **[Bootstrap 5](https://getbootstrap.com/docs/5.3/getting-started/introduction/) CSS components**; however, please refer to the list below for specific **JavaScript (JS) component** compatibility. To ensure backward compatibility, a subset of [**Bootstrap 4**](https://getbootstrap.com/docs/4.6/getting-started/introduction/) components will remain supported for a limited time.

"**Supported Bootstrap 5 JS components** *Note: These components have been adapted to align with the app's framework and visual styles, so their behavior or appearance may differ slightly from the original Bootstrap implementation:*

- [Collapse](https://getbootstrap.com/docs/5.3/components/collapse/)
- [Carousel](https://getbootstrap.com/docs/5.3/components/carousel/)
- [Accordion](https://getbootstrap.com/docs/5.3/components/accordion/)
- [Modal](https://getbootstrap.com/docs/5.3/components/modal/)
- [Popovers](https://getbootstrap.com/docs/5.3/components/popovers/)
- [Tooltips](https://getbootstrap.com/docs/5.3/components/tooltips/)
- [Tabs](https://getbootstrap.com/docs/5.3/components/navs-tabs/)
- Dismiss / close button on:
  - [Alerts](https://getbootstrap.com/docs/5.3/components/close-button/)
  - [Offcanvas](https://getbootstrap.com/docs/5.3/components/offcanvas/)
  - [Toasts](https://getbootstrap.com/docs/5.3/components/toasts/)
  - [Modal](https://getbootstrap.com/docs/5.3/components/modal/)

Please note that not all component properties are supported. We recommend testing your content within the app to verify its functionality and appearance.

### Using JavaScript

Since version 5.2 of the Mobile app and Moodle LMS, it is possible to provide a list of domains from which it is possible to include JavaScript files that will be executed in the page where it is included.

Via Site administration > Mobile app features > Allowlisted JavaScript domains, you can enter the domains from which external JavaScript files are allowed to be loaded by the Moodle app when detected in user-generated HTML content.

This will allow you to use widgets and JavaScript tools from, for example: typeform, jotform, x.com, imgur, framely, etc....

This will also allow you to include custom JavaScript code as long as it is contained in a file hosted in a domain listed in the "Allowlisted JavaScript domains" setting.

### Display mode utility classes for the app

Moodle App has introduced specific CSS classes that allow content creators to toggle the visibility and display behavior of elements specifically within the **Moodle App**. This provides a way to override standard Bootstrap classes (like `d-none`) to create a tailored mobile experience.

#### General display classes

These classes are used to control how elements behave in the mobile app regardless of the operating system (iOS or Android).

|  |  |  |
| --- | --- | --- |
| CSS Class | Effect in the Mobile App | Use Case |
| `mobileapp-d-none` | **Hides** the element. | Content that should only be visible on desktop. |
| `mobileapp-d-block` | Displays as **block**. | Making a hidden element (`d-none`) visible in the app. |
| `mobileapp-d-inline` | Displays as **inline**. | Inline text or icons specific to mobile users. |
| `mobileapp-d-inline-block` | Displays as **inline-block**. | Inline block text or icons specific to mobile users. |
| `mobileapp-d-flex` | Displays as **flex**. | Flexible layouts optimized for mobile screens. |

#### Platform-Specific Classes (OS)

You can target users based on their specific mobile device. This is useful for providing specific instructions for Android or iOS users (e.g., store links or system settings).

- **Android:** `mobileapp-android-d-block`, `mobileapp-android-d-none`, `mobileapp-android-d-inline`, etc.
- **iOS:** `mobileapp-ios-d-block`, `mobileapp-ios-d-none`, `mobileapp-ios-d-inline`, etc.

#### Examples

##### Show content ONLY in the Mobile App

Use the Bootstrap `d-none` class to hide it everywhere, then use the mobile class to reveal it in the app.

```
<div class="d-none mobileapp-d-block">
   This message is only visible to users inside the Mobile App.
</div>
```

##### Hide content in the Mobile App

Use the Bootstrap `d-block` class to show it on the web, and the mobile class to hide it in the app.

```
<div class="d-block mobileapp-d-none">
   This section is hidden in the app to save data or screen space.
</div>
```

##### Targeted OS Messaging

Messages won't be shown on the web and will be different on iOS and Android.

```
<div class="mobileapp-ios-d-block d-none">
   Instructions specifically for iPhone/iPad users.
</div>
<div class="mobileapp-android-d-block d-none">
   Instructions specifically for Android users.
</div>
```

### Media download for offline usage

To enable media files, such as video, to be automatically downloaded when viewed.

- The file must be uploaded to the course, rather than being linked to (from YouTube, Vimeo etc.)
- The file must be small - less than 2MB for 3G users or less than 20MB for WiFi users

When a page containing the video is viewed (without playing the video), the file will then be downloaded.

When using Moodle Mobile 3.1 or later with a WiFi connection, when the video is played, the file will be downloaded in the background. The next time the video is played, the downloaded file will be used.

Please note that if the user did a full download of the courses, the files will be downloaded regardless its size.

### Activities

**Quizzes**

Quizzes with lots of questions do not perform very well on the website or the app as the backend server will have to do heavy preparatory work, especially if random questions are used.

In general, our recommendation is to avoid having just a quiz with lots of questions, it is better to split it into different quizzes.

Another recommendation is to limit the number of questions per page to avoid having more than 5 questions displayed on a single page on a very narrow screen.

### Offline activities

All the supported activities work offline, although some require specific settings like the lesson and quiz module, you can find bellow additional information:

- [Moodle Mobile quiz offline attempts](Moodle_Mobile_quiz_offline_attempts.md "Moodle Mobile quiz offline attempts")
- [Moodle H5P](Moodle_app_H5P_support.md#Working_offline "Moodle app H5P support")
- [Moodle app SCORM player](Moodle_app_SCORM_player.md "Moodle app SCORM player")

### Things to avoid

Some activities are not yet fully supported by the mobile app, so find alternatives. See [Moodle Mobile SCORM player](Moodle_Mobile_SCORM_player.md "Moodle Mobile SCORM player") for things to avoid in SCORM packages.

You can find the list of activities supported by the app in the [Moodle Mobile features](Moodle_Mobile_features.md "Moodle Mobile features") page.

## Use the latest stable version of Moodle

As indicated in [Moodle Mobile features](Moodle_Mobile_features.md "Moodle Mobile features") some features are only available in recent Moodle versions.

It is recommended to use the [latest stable version](https://moodledev.io/general/releases).

## Notifications and messages

Encourage your students to enable mobile notifications so they are alerted about calendar events, forum posts, messages, assignment submissions and so on. Find out more in [Mobile app notifications](Mobile_app_notifications.md "Mobile app notifications").

You can also enable mobile notifications for all the users by default via the [Messaging settings](Messaging_settings.md "Messaging settings") default message outputs. Students can disable Mobile notifications within the app.

## Mobile device considerations

The app works better on devices running modern devices.

In old devices you may find problems related to:

- User interface
- Connection problems (specifically when connecting to sites using https certificates)
- Slowness

## Links to open the Moodle app

If required, links which open the Moodle app may be provided in the course (for users browsing the site using a mobile device with the app installed).

Links are of the form `moodlemobile://https://username@domain.com?token=TOKEN&privatetoken=PRIVATETOKEN&redirect=http://domain.com/course/view.php?id=2`.  
Please notice that this kind of links are only supported in Moodle app 3.7.0 onwards. If your app has an older version you'll have to use the old format: `moodlemobile://link=https://yourmoodlesite.org/mod/...`.

For more information about this, please read [Open the Moodle app from another app](https://docs.moodle.org/dev/Open_the_Moodle_app_from_another_app).

## Display alternative content in the Moodle app

In some cases, content that works perfectly in a web browser (Moodle LMS) might not work as intended within the Moodle app, for example, certain iframes or complex embeds. Since the Moodle app version 5.1, you can now provide alternative text or links specifically for app users using two HTML attributes.

To do this, you need to edit the source code of your content (the HTML) and add the following attributes to an element to replace its contents:

- **data-app-alt-msg**: The text to display inside the element. If not present, only *data-app-alt-url* will be displayed.
- **data-app-alt-url**: A clickable URL that appears after the message text.

**Note I**: These attributes replace the content (children) of the element they are placed on, not the element itself. Always place these attributes on a parent container (like a `<div>` or `<p>`).

**Note II**: These attributes might be removed by your Moodle site filtering depending on the values of these settings: "Content cleaning everywhere (forceclean)" if it is enabled and "Enable trusted content (enabletrusttext)" if it is disabled.

#### Example: Replacing an incompatible iframe

If you have an iframe that works fine in Moodle LMS but it doesn't in the Moodle app, you can wrap it in a `<div>` to provide a fallback link for app users:

```
<div data-app-alt-url="https://videourl.com" data-app-alt-msg="This video is not compatible with the app. Please click the link to open it in a browser.">
  <iframe src="https://videonotappcompatible.com"></iframe>
</div>
```

**What the user sees:**

- On desktop: The iframe renders normally.
- In the Moodle app: The user sees "This video is not compatible with the app. Please click the link to open it in a browser.", followed by the link specified in data-app-alt-url.

## Learn more

- Free course on Moodle Academy [Moodle App configuration](https://moodle.academy/enrol/index.php?id=100)
- Forum post: [Try the Moodle Mobile app with a mobile-friendly course](https://moodle.org/mod/forum/discuss.php?d=349160).
- [How to make third party question types work in Mobile](https://docs.moodle.org/dev/Creating_mobile_question_types) documentation for developers

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Creating_mobile-friendly_courses&oldid=156195>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Mobile](Category_Mobile.md "Category:Mobile")

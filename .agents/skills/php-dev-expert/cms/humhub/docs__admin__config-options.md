# Configuration Options | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/config-options

---

On this page

The following page gives an overview of advanced settings that can be made via the [Configuration Files](docs__admin__advanced-configuration.md).

## Core Modules[â](#core-modules "Direct link to Core Modules")

### Activity[â](#activity "Direct link to Activity")

**weeklySummaryDay** - Day to send weekly summaries on daily cron run (0 = Sunday, 6 = Saturday)  
Default: `0`  
Data Type: `Integer`

**enableMailSummaries** - Enable mail summary feature  
Default: `true`  
Data Type: `Boolean`

### Admin[â](#admin "Direct link to Admin")

**dailyCheckForNewVersion** - Check daily for new HumHub version  
Default: `true`  
Data Type: `Boolean`

**allowUserImpersonate** - Allow admins to impersonate other users  
Default: `true`  
Data Type: `Boolean`

**showDashboardIncompleteSetupWarning** - Show incomplete setup warning on the dashboard for admins  
Default: `true`  
Data Type: `Boolean`

**defaultReloadableScripts** - List of script urls which should not be cached on the client side  
Default: `[]`  
Data Type: `Array`

**cleanupPendingRegistrationInterval** - Seconds before delete old pending registrations messages  
Default: `60 * 60 * 24 * 90`  
Data Type: `Integer`

**enableManageAllContentPermission** - Enable the "Manage All Content" Group Permission to manage all content (view, edit, move, archive, pin, etc.), even private content.  
Default: `false`  
Data Type: `Boolean`

### Comment[â](#comment "Direct link to Comment")

**commentsBlockLoadSize** -Maximum comments to load at once  
  
Default: `10`  
Data Type: `Integer`

**commentsPreviewMax** - Maximum comments to show initially  
Default: `2`  
Data Type: `Integer`

### Content[â](#content "Direct link to Content")

**emailSubjectHourlyUpdate** - Custom e-mail subject for hourly update mails.  
Default: `empty`  
Data Type: `String`

**emailSubjectDailyUpdate** - Custom e-mail subject for daily update mails.  
Default: `empty`  
Data Type: `String`

**maxAttachedFiles** - Maximum allowed file uploads for posts/comments.  
Default: `50`  
Data type: `Integer`

**maxOembeds** - Maximum allowed number of oembeds in richtexts.  
Default: `5`  
Data type: `Integer`

### Dashboard[â](#dashboard "Direct link to Dashboard")

**autoIncludeProfilePosts** - Possible options to include profile posts into the dashboard stream.   
Default: `empty`  
Options: `all` - Include all profile posts, `admin` - Include all profile posts for admins only  
Data Type: `String`

**hideActivitySidebarWidget** - Hides the activities sidebar widget.   
Default: `false`   
Since: `1.3`   
Data Type: `Boolean`

### File[â](#file "Direct link to File")

**fileNameValidationPattern** - Regular expression used to validate uploaded file names.  
Default: `/[\x00-\x1F\x80-\xA0>\/\<":\*?|{}\[\]\\\\\/]/u`
Data Type: `String`

**inlineMimeTypes** - Mime types to show inline instead of download
Default: `[ 'application/pdf', 'application/x-pdf', 'image/gif', 'image/png', 'image/jpeg' ]`  
Data type: `Array`

**denyDoubleFileExtensions** - Prohibit uploads of files with double file extension.  
Default: `false`  
Data type: `Boolean`

**converterOptions** - Array of file converter options  
Default: `[]`  
Data type: `Array`

**imageMaxResolution** - Maximum image resolution before auto downscaling e.g. 1920x1080  
Default: `empty`  
Data type: `String`  
Since: `1.7`

**imageJpegQuality** - The JPEG quality for uploaded JPEG images. From 0 to 100.  
Default: `empty`  
Data type: `Integer`  
Since: `1.7`

**imagePngCompressionLevel** - The PNG compression level for uploaded PNG images. From 0 to 9.  
Default: `empty`  
Data type: `Integer`  
Since: `1.7`

**imageWebpQuality** - Tt The WebP quality for uploaded WebP files. From 0 to 100.  
Default: `empty`  
Data type: `Integer`  
Since: `1.7`

**imagePreviewMaxHeight** - The maximum height of generated preview image files in px.  
Default: `400`  
Data type: `Integer`  
Since: `1.7`

**imagePreviewMaxWidth** - The maximum width of generated preview image files in px.  
Default: `400`  
Data type: `Integer`  
Since: `1.7`

### LDAP[â](#ldap "Direct link to LDAP")

**pageSize** - The page size for ldap query, set to 0 to disable pagination.  
Default: `10000`  
Data type: `Integer`  
Since: `1.6`

**queriedAttributes** - The queried LDAP attributes, leave empty to retrieve all.  
Default: `[]`  
Data type: `Array`

### Advanced-LDAP `PRO`[â](#advanced-ldap-pro "Direct link to advanced-ldap-pro")

Module ID: `advanced-ldap`

**enableLdapParentMembershipLookup** - Recursive lookup of membership of included groups.  
Default: `false`  
Since: `1.4`  
Data type: `Boolean`

### Like[â](#like "Direct link to Like")

**autoFollowLikedContent** - Enable automatic follow liked content.  
Default: `true`  
Data type: `Boolean`  
Since: `1.2.5`

**isEnabled** - Mark this core module as enabled.  
Default: `true`  
Since: `1.4`  
Data type: `Boolean`

### Marketplace[â](#marketplace "Direct link to Marketplace")

**modulesPath** - Path to store marketplace modules.   
Default: `@app/modules`  
Data type: `String`

**enabled** - Enable marketplace.   
Default: `true`  
Data type: `Boolean`

**modulesDownloadPath** - Path to store marketplace module packages.   
Default: `@runtime/module_downloads`  
Data type: `String`

**hideLegacyModules** - Hide modules from marketplace which are marked as legacy.   
Default: `true`  
Since: `1.7`  
Data type: `Boolean`

**moduleBlacklist** - A list of module ids that cannot be installed.  
Default: `[]`  
Since: `1.7`  
Data type: `Array`

### Post[â](#post "Direct link to Post")

**collapsedPostHeight** - Pixel height at which posts are collapsed in the stream. Set to `0` to disable collapsing.  
Default: `300`  
Since: `1.15`  
Data type: `Integer`

### Space[â](#space "Direct link to Space")

**globalAdminCanAccessPrivateContent** - Allow global admins (super admin) access to private content also when no member.   
Default: `false`  
Data type: `Boolean`

**useUniqueSpaceNames** - Do not allow multiple spaces with the same name.   
Default: `true`  
Data type: `Boolean`  
Since: `1.2`

**disableFollow** - Defines if the Space following is disabled or not.  
Default: `false`  
Data type: `Boolean`  
Since: `1.2`

**maximumSpaceUrlLength** - Maximum space url length  
Default: `45`  
Since: `1.3`  
Data type: `Integer`

**minimumSpaceUrlLength** - Minimum space url length  
Default: `2`  
Since: `1.3`  
Data type: `Integer`

**hideAboutPage** - Hide about page in space menu.   
Default: `false`  
Data type: `Boolean`  
Since: `1.7`

### Stream[â](#stream "Direct link to Stream")

**streamExcludes** - Content classes to excludes from streams.   
Default: `[]`  
Data type: `Array`

**streamSuppressQueryIgnore** - Content classes which are not suppressed when in a row.  
Default: `[]`  
Data type: `Array`

**defaultStreamSuppressQueryIgnore** - Default content classes which are not suppressed when in a row.  
Default: `[]`  
Data type: `Array`

**showDeactivatedUserContent** - Show contents of deactivated users in stream.   
Default: `true`  
Data type: `Boolean`

### UI[â](#ui "Direct link to UI")

**iconAlias** - Contains all available icon aliases.   
Default: `[ 'dropdownToggle' => 'angle-down', 'edit' => 'pencil', 'delete' => 'trash', 'dashboard' => 'tachometer', 'directory' => 'book', 'back' => 'arrow-left', 'add' => 'plus', 'invite' => 'paper-plane', 'remove' => 'times', 'controls' => 'cog', 'about' => 'info-circle', 'stream' => 'bars' ]`  
Data type: `Array`

### User[â](#user "Direct link to User")

**sendInviteMailsInGlobalLanguage** - Option to translate all invite mails except self invites to the default language (true) or user language(false).  
Default: `true`  
Data Type: `Boolean`

**loginRememberMeDefault** - Default state of remember me checkbox on login page.  
Default: `true`  
Data Type: `Boolean`

**loginRememberMeDuration** - Number of seconds that the user can remain in logged-in status if remember me is clicked on login.  
Default: `2592000`  
Data type: `Integer`

**logoutUrl** - Redirect url after logout (if not set, home url will be used).  
Default: `empty`  
Data Type: `String`

**profileDefaultRoute** - The default route for user profiles.  
Default: `empty`  
Data Type: `String`

**userListPaginationSize** - The default pagination size of the user list lightbox.  
Default: `8`  
Data type: `Integer`

**adminCanChangeUserProfileImages** - Allow admin users to modify user profile image and banner.  
Default: `false`  
Data Type: `Boolean`

**validUsernameRegexp** - Regular expression to check username characters.  
Default: `/^[\p{L}\d_\-@\.]+$/iu`

**maximumUsernameLength** - The maximum username length.  
Default: `50`  
Data type: `Integer`

**minimumUsernameLength** - The minimum username length.  
Default: `4`  
Data type: `Integer`

**displayNameCallback** - A callback that returns the user display name.  
Default: `null`  
Data type: `Callable`

**displayNameSubCallback** - A callback that returns the user display name sub text.  
Default: `null`  
Data type: `Callable`

**disableFollow** - Defines if the user following is disabled or not.  
Default: `false`  
Data Type: `Boolean`

**emailRequired** - Defines mark user e-mail field as required. (Experimental)  
Default: `true`  
Data Type: `Boolean`

**softDeleteKeepProfileFields** - Profile field names to keep after user soft deletion.  
Default: `['firstname', 'lastname']`  
Data type: `Array`

**includeAllUserContentsOnProfile** - Include user contents on profile stream.  
Default: `true`  
Data Type: `Boolean`

**passwordStrength** - Defines empty additional rules for password validation  
Default: `[]`  
Data type: `Array`

**profileDisableStream** - Disable the profile stream.  
Default: `false`  
Data Type: `Boolean`

**failedLoginDelayTimes** - Account login blocking times after attempted incorrect logins. Format: Number of tries => Time delay in seconds.  
Default: `[2 => 10, 6 => 20]`  
Data type: `Array`

### Web[â](#web "Direct link to Web")

**security** - Web Security Settings.  
Default: `[]`

**enableServiceWorker** - Enable Service Worker and PWA Support.  
Default: `true`  
Since: `1.8`  
Data Type: `Boolean`

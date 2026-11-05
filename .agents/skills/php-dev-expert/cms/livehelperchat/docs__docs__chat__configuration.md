# Chat configuration | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/chat/configuration

---

On this page

## Introduction[​](#introduction "Direct link to Introduction")

This is the main window where you can configure various settings.

You can find these settings in:

> System configuration -> Chat configuration

![Chat configuration](/assets/images/chat-configuration-6016cde6855abc3448b634bdce185cee.png)

## Notifications for New Chats[​](#notifications-for-new-chats "Direct link to Notifications for New Chats")

These settings are the same ones operators can modify from their [account page](docs__docs__users__account.md#notifications).

## Copyright settings[​](#copyright-settings "Direct link to Copyright settings")

### Application Name[​](#application-name "Direct link to Application Name")

Here you can change the basic copyright settings globally.

![Copyright settings](/assets/images/copyright-settings-10d1ba6251bcd118d76673ccf7f3285d.png)

### Site Settings[​](#site-settings "Direct link to Site Settings")

Here you can change:

- The copyright text visible in the bottom right corner.
- The Terms of Service URL, which is visible as a link within the checkbox during the start chat workflow.

![Site settings](/assets/images/site-settings-7986165d6f3d431ade743dc1bac48604.png)

## Online Tracking[​](#online-tracking "Direct link to Online Tracking")

This section contains all the settings related to online tracking.

![Online tracking](/assets/images/online-tracking-05b83311f729026b5e9c5b515a9b917f.png)

### IPs to Ignore in Online Users List (comma-separated)[​](#ips-to-ignore-in-online-users-list-comma-separated "Direct link to IPs to Ignore in Online Users List (comma-separated)")

[More information](docs__docs__blocking.md#how-to-block-users-from-appearing-on-online-users-list)

### IPs Not Allowed to Chat[​](#ips-not-allowed-to-chat "Direct link to IPs Not Allowed to Chat")

[More information](docs__docs__blocking.md#how-to-block-users-from-starting-a-chat)

### Enable Online Site Visitor Tracking[​](#enable-online-site-visitor-tracking "Direct link to Enable Online Site Visitor Tracking")

If you disable this option, online visitors will not be tracked. This will also disable the following features:

- Proactive invitations
- Online visitors list
- Previous chats detection

### Track online visitors even if there is no online operators[​](#track-online-visitors-even-if-there-is-no-online-operators "Direct link to Track online visitors even if there is no online operators")

It only effects old widget. If you are using new widget it can be ignored as it does nothing.

### Show need help tooltip?[​](#show-need-help-tooltip "Direct link to Show need help tooltip?")

This one tells should we show [need help](docs__docs__need-help.md) tooltip or not.

### Need help tooltip timeout, after how many hours show again tooltip?[​](#need-help-tooltip-timeout-after-how-many-hours-show-again-tooltip "Direct link to Need help tooltip timeout, after how many hours show again tooltip?")

Once visitor closes need help tooltip after how long we should show it again to him?

### Play sound on invitation to chat.[​](#play-sound-on-invitation-to-chat "Direct link to Play sound on invitation to chat.")

Should we play sound for a visitor when invitation it shown to him.

tip

New widget does not support this yet.

### Is pro active chat invitation active. Online users tracking also has to be enabled.[​](#is-pro-active-chat-invitation-active-online-users-tracking-also-has-to-be-enabled "Direct link to Is pro active chat invitation active. Online users tracking also has to be enabled.")

Enables/Disables proactive invitations in general.

### Should invitation logic be executed if there is no online operators[​](#should-invitation-logic-be-executed-if-there-is-no-online-operators "Direct link to Should invitation logic be executed if there is no online operators")

It effects only old widget. In a new widget invitations are shown only if there is online operators.

tip

This feature will be added to a new widget over time.

### Proactive message timeout in hours.[​](#proactive-message-timeout-in-hours "Direct link to Proactive message timeout in hours.")

After how many hours proactive chat mesasge should be shown again.

### Pro active chats invitations limitation based on pending chats.[​](#pro-active-chats-invitations-limitation-based-on-pending-chats "Direct link to Pro active chats invitations limitation based on pending chats.")

We will show invitation if only pending chats number satisfies required conditions.

(-1) do not limit, (0,1,n+1) number of pending chats can be for invitation to be shown.

### Track users footprint.[​](#track-users-footprint "Direct link to Track users footprint.")

For this also online visitors tracking should be enabled.

### Footprint updates should be processed in the background.[​](#footprint-updates-should-be-processed-in-the-background "Direct link to Footprint updates should be processed in the background.")

When chat starts we have to assign pageviews to a specific chat. As footprint table can get quite bit this operation takes time. So it makes sense just to delegate this task to background.

Make sure you are running [workflow cronjob](docs__docs__development__cronjob.md#default-cronjob-setup).

### Cleanup should be done only using cronjob.[​](#cleanup-should-be-done-only-using-cronjob "Direct link to Cleanup should be done only using cronjob.")

Time from time then new visitor comes we use this event to clean up online visitors tables. If record is older then defined `How many days keep records of online users.` setting. As this table can get quite big to avoid UI delay makes sense just to have this work happening in the background.

Make sure you are running [workflow cronjob](docs__docs__development__cronjob.md#default-cronjob-setup).

### How many days keep records of online users.[​](#how-many-days-keep-records-of-online-users "Direct link to How many days keep records of online users.")

Defines how long we should keep online users record from his last activity.

### How many days keep records of users footprint.[​](#how-many-days-keep-records-of-users-footprint "Direct link to How many days keep records of users footprint.")

Older records than defined amount will be deleted.

### How long department availability statistic should be kept? (days)[​](#how-long-department-availability-statistic-should-be-kept-days "Direct link to How long department availability statistic should be kept? (days)")

If you are using [department availability chart](docs__docs__chat__statistic.md#departments) you can define how long we should store this data.

Make sure you are running [workflow cronjob](docs__docs__development__cronjob.md#default-cronjob-setup).

### How long keep operators online sessions data? (days)[​](#how-long-keep-operators-online-sessions-data-days "Direct link to How long keep operators online sessions data? (days)")

This data is used to generate [agents performance statistic](docs__docs__chat__statistic.md#agents-statistic), but over time this table can get quite big so makes sense just have limited days this data should be stored.

Make sure you are running [workflow cronjob](docs__docs__development__cronjob.md#default-cronjob-setup).

## Misc[​](#misc "Direct link to Misc")

In this section can be found all the 😄 tricky settings. Most of the time you do not need to touch anything unless you want to play around.

### Set your domain to enable user tracking across different domain subdomains.[​](#set-your-domain-to-enable-user-tracking-across-different-domain-subdomains "Direct link to Set your domain to enable user tracking across different domain subdomains.")

This overrides javascript options and set's cookie always under defined domain. If you want more security and you will use chat only for one domain makes sense to enter this site domain. It has to be plain value like `example.com`

### Domains where script can be embedded. E.g example.com, google.com[​](#domains-where-script-can-be-embedded-eg-examplecom-googlecom "Direct link to Domains where script can be embedded. E.g example.com, google.com")

If you want to add more security and allow Live Helper Chat script to be embeded just on specific domain(s). You can set your domain here.
Domain's has to be separated by a comma. E.g

> livehelperchat.com, google.com

### Please enter explicit http mode. Either http: or https:, do not forget : at the end.[​](#please-enter-explicit-http-mode-either-http-or-https-do-not-forget--at-the-end "Direct link to Please enter explicit http mode. Either http: or https:, do not forget : at the end.")

If you want to be more explicit how data is going http or https you can set this to `https:` or `http:`. Usually there is no need to touch this parameter.

### Cookie should be valid only for domain where Javascript is embedded (excludes subdomains)[​](#cookie-should-be-valid-only-for-domain-where-javascript-is-embedded-excludes-subdomains "Direct link to Cookie should be valid only for domain where Javascript is embedded (excludes subdomains)")

Usually then you define domain in embed code 'example.com' cookie is valid also for subdomains. So chat can work within same domain and subdomains. If you want chat to be working only within exact domain you can check this option.

tip

New widget does not support this and if domain is defined it set's cookie for subdomains also. If you do not define domain in new widget it will work only within domain scope. So in general you can control how all works in a new widget based what you pass as domain.

- No domain - works only within domain
- You define domain - works also within subdomains.

### Use secure cookie, check this if you want to force SSL all the time[​](#use-secure-cookie-check-this-if-you-want-to-force-ssl-all-the-time "Direct link to Use secure cookie, check this if you want to force SSL all the time")

If you are using https connection all the time makes sense to check this as this will make chat cookie available only in secure `https://` mode.

### List online operators.[​](#list-online-operators "Direct link to List online operators.")

Please refer to [online operators](docs__docs__dashboard.md#why-i-cant-see-online-operators) article.

### List closed chats[​](#list-closed-chats "Direct link to List closed chats")

There can be thousands of closed chats and to render only 10 of takes really put's stress on server. So this list is disable by default. See [performance](docs__docs__performance.md) article.

### Disable live auto assign[​](#disable-live-auto-assign "Direct link to Disable live auto assign")

More information about [auto assignment](docs__docs__auto-assignment.md)

### List unread chats[​](#list-unread-chats "Direct link to List unread chats")

Unread chats list just like closed chats can become very big and slow down dashboard UI so this option is disabled by default also.

### Preload widget. It will avoid loading delay after clicking widget[​](#preload-widget-it-will-avoid-loading-delay-after-clicking-widget "Direct link to Preload widget. It will avoid loading delay after clicking widget")

This option influences only old widget. Preloads widget content for old widget so it makes UI feel faster.

### Disable option in widget to open new window. Restore icon will be hidden[​](#disable-option-in-widget-to-open-new-window-restore-icon-will-be-hidden "Direct link to Disable option in widget to open new window. Restore icon will be hidden")

This option enables/disables for visitor return to widget window from popup window.

tip

Not supporter in a new widget yet.

### Show BB Code button[​](#show-bb-code-button "Direct link to Show BB Code button")

Show/Hide face icon for the new widget

### Reopen chat functionality enabled[​](#reopen-chat-functionality-enabled "Direct link to Reopen chat functionality enabled")

Only active for older widget. Means visitor can reopen closed chats.

### Reopen closed chat as new? Otherwise it will be reopened as active.[​](#reopen-closed-chat-as-new-otherwise-it-will-be-reopened-as-active "Direct link to Reopen closed chat as new? Otherwise it will be reopened as active.")

Does what it tells 😄.

### Automatically reopen chat on widget open[​](#automatically-reopen-chat-on-widget-open "Direct link to Automatically reopen chat on widget open")

Does what it tells 😄.

### Allow user to reopen closed chats?[​](#allow-user-to-reopen-closed-chats "Direct link to Allow user to reopen closed chats?")

Does what it tells 😄.

(automatic chat's closing/purging)[auto-close-delete.md]

### How many seconds customer has to open already closed chat.[​](#how-many-seconds-customer-has-to-open-already-closed-chat "Direct link to How many seconds customer has to open already closed chat.")

This value controls how long visitor can access chat which was closed by the operator, this applies only after page refresh.

### Make default pending chats order from old to new[​](#make-default-pending-chats-order-from-old-to-new "Direct link to Make default pending chats order from old to new")

You can change here default order of pending chats.

### Minimum phone number length[​](#minimum-phone-number-length "Direct link to Minimum phone number length")

This is requirement for phone number user has to enter before starting a chat.

### Chats export secret hash[​](#chats-export-secret-hash "Direct link to Chats export secret hash")

This has is used for exporting chats using `export` module. Please use Rest API just instead of this module.

### Which ip should be allowed to update DB by executing http request, separate by a comma?[​](#which-ip-should-be-allowed-to-update-db-by-executing-http-request-separate-by-a-comma "Direct link to Which ip should be allowed to update DB by executing http request, separate by a comma?")

We have option to update database without loggin to database by executing request to

> system/autodbupdate

It does not require any permissions just valid IP which can be set in this field.

### How many seconds chat accept link is valid. Set 0 to force login all the time manually.[​](#how-many-seconds-chat-accept-link-is-valid-set-0-to-force-login-all-the-time-manually "Direct link to How many seconds chat accept link is valid. Set 0 to force login all the time manually.")

When we send chat acceptance link we can define how long this link is valid. This link is generated when unanswered chat event accours.

### How long operator should go offline automatically because of inactivity. Value in minutes[​](#how-long-operator-should-go-offline-automatically-because-of-inactivity-value-in-minutes "Direct link to How long operator should go offline automatically because of inactivity. Value in minutes")

[More information](docs__docs__offline-online-automation.md)

### Track all logged operators activity and ignore their individual settings.[​](#track-all-logged-operators-activity-and-ignore-their-individual-settings "Direct link to Track all logged operators activity and ignore their individual settings.")

[More information](docs__docs__offline-online-automation.md)

### Disable chat print[​](#disable-chat-print "Direct link to Disable chat print")

Hides print option from a visitor chat widget.

### Disable chat download[​](#disable-chat-download "Direct link to Disable chat download")

Hides `Download as txt` option from the widget

### Disable chat transcript send[​](#disable-chat-transcript-send "Direct link to Disable chat transcript send")

Hides option for a visitor to print a chat.

### Maximum message length in characters[​](#maximum-message-length-in-characters "Direct link to Maximum message length in characters")

Visitor won't be able to send longer message than define value. So this way you can limit how long visitor message can be.

### Messages box height[​](#messages-box-height "Direct link to Messages box height")

Sets default messages are height for a visitor. It influences only old widget.

### Messages box height for operator[​](#messages-box-height-for-operator "Direct link to Messages box height for operator")

You can set default height for the messages area for the operators.

### Default number of online operators to show[​](#default-number-of-online-operators-to-show "Direct link to Default number of online operators to show")

Tells how many online operators show by default. Untill operator chooses his own value.

### Hide disabled department widget[​](#hide-disabled-department-widget "Direct link to Hide disabled department widget")

If we find that passed department is disabled we should not show a widget otherwise these departments are excluded.

### Home page tabs order[​](#home-page-tabs-order "Direct link to Home page tabs order")

[More information](docs__docs__dashboard.md)

### Hide right column in frontpage[​](#hide-right-column-in-frontpage "Direct link to Hide right column in frontpage")

[More information](docs__docs__dashboard.md)

### Suggest user to leave a message then user chooses offline department[​](#suggest-user-to-leave-a-message-then-user-chooses-offline-department "Direct link to Suggest user to leave a message then user chooses offline department")

When visitor chooses offline department should we suggest him to leave a message instead, because most likely chat won't be accepted just.

tip

Not supporter in a new widget yet.

### How many days voting widget should not be expanded after last show[​](#how-many-days-voting-widget-should-not-be-expanded-after-last-show "Direct link to How many days voting widget should not be expanded after last show")

Related to voting widget functionality. Pending article...

### Ignore users online statuses and use departments online hours[​](#ignore-users-online-statuses-and-use-departments-online-hours "Direct link to Ignore users online statuses and use departments online hours")

[Read article](docs__docs__online-hours.md)

### Is visitor e-mail required for FAQ[​](#is-visitor-e-mail-required-for-faq "Direct link to Is visitor e-mail required for FAQ")

Related to FAQ module. Pending article...

### Show users option to switch language at widget[​](#show-users-option-to-switch-language-at-widget "Direct link to Show users option to switch language at widget")

Show option to switch language for the visitor.

### Between what languages user should be able to switch[​](#between-what-languages-user-should-be-able-to-switch "Direct link to Between what languages user should be able to switch")

You can define between what languages visitor can switch. In list should be put siteAccess list separated by comma. E.g

> eng,lit,hrv,esp,por,nld,ara,ger,pol,rus,ita,fre,chn,cse,nor,tur,vnm,idn,sve,per,ell,dnk,rou,bgr,tha,geo,fin,alb

### Chat closing options[​](#chat-closing-options "Direct link to Chat closing options")

[Read article](docs__docs__auto-close-delete.md)

### Hide close button in dropdown[​](#hide-close-button-in-dropdown "Direct link to Hide close button in dropdown")

By default visitor can close chat either from top right in widget or from settings dropdown menu. This option leaves the only option to close chat from widget top menu.

### On chat close exit chat[​](#on-chat-close-exit-chat "Direct link to On chat close exit chat")

When visitor minimizes chat we should close chat. Influence only old widget.

### Chat duration[​](#chat-duration "Direct link to Chat duration")

[Read article](docs__docs__chat__duration.md)

## Visitor activity[​](#visitor-activity "Direct link to Visitor activity")

### Interval between chat status checks in seconds, 0 disabled.[​](#interval-between-chat-status-checks-in-seconds-0-disabled "Direct link to Interval between chat status checks in seconds, 0 disabled.")

This determines should status widget change it's status once operator logins. Recommended value 290.

[More information](docs__docs__integrating.md#how-to-make-automatic-status-change-for-frontend-visitors)

### Track is user still on site, chat status checks also has to be enabled[​](#track-is-user-still-on-site-chat-status-checks-also-has-to-be-enabled "Direct link to Track is user still on site, chat status checks also has to be enabled")

### Track users activity on site?[​](#track-users-activity-on-site "Direct link to Track users activity on site?")

We will track is user on website based on his activity on website instead of last messages sync time.

### Should mouse movement be tracked as activity measure, if not checked only basic events would be tracked[​](#should-mouse-movement-be-tracked-as-activity-measure-if-not-checked-only-basic-events-would-be-tracked "Direct link to Should mouse movement be tracked as activity measure, if not checked only basic events would be tracked")

As mouse movements takes more resources we can active or deactive it.

## Workflow[​](#workflow "Direct link to Workflow")

In this section you can set some basic workflow parameters related to

- Unanswered messages.
- [Department transfer](docs__docs__department-transfer.md) workflow.
- Informing visitor about unread messages from operator.

## Screen sharing[​](#screen-sharing "Direct link to Screen sharing")

Settings related to screen sharing.

## Data protection[​](#data-protection "Direct link to Data protection")

[More information.](docs__docs__anonymize.md)

## Permissions[​](#permissions "Direct link to Permissions")

Required permission to access this page in general.

> 'lhchat','administrateconfig'

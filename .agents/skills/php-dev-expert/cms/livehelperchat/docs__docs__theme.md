# Theme | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/theme/

---

On this page

## Introduction[​](#introduction "Direct link to Introduction")

If you want to see how themes can look like check our [free themes category](https://livehelperchat.com/free-themes-22c.html).

As with every open source project everyone wan't to change something. We have option to style pretty much everything directly from back office. We can do following things

- Change widget style
- Change back office style
- Have personal themes

## Theming window[​](#theming-window "Direct link to Theming window")

Widget themes has few sections. I'll try in short term describe what you can do in each of them.

![](/assets/images/theme-86e1dfa257a1b55ee3725cc4f3daabac.png)

## Multilanguage flow[​](#multilanguage-flow "Direct link to Multilanguage flow")

Some of the widget theme attributes can be translated. `Main` translation will be shown if widget language matches `default_site_access` from settings file

If you are embedding widget in other language than default you have two options

- Either put text in correct language by clicking `Add translation`
- Either edit [`default_site_access`](https://github.com/LiveHelperChat/livehelperchat/blob/bb8f5b8c5b4e5df6cedc7dbae61cbfd463b14d9f/lhc_web/settings/settings.ini.default.php#L28) and put same value as your widget `lang` attribute without slashes
- Either add your language to `['default_site_access_list'] => ['eng','lit']`. E.g we will use `Main` translation if widget language is `lit` or `eng`. [Setting location](https://github.com/LiveHelperChat/livehelperchat/blob/4.52v/lhc_web/settings/settings.ini.default.php#L29)

## Replaceable variables in translatable text fields[​](#replaceable-variables-in-translatable-text-fields "Direct link to Replaceable variables in translatable text fields")

You can use any variable from `Online visitors` list in any of translatable field.

Click info ico in line visitors list and navigate to `Debug` tab. There you will see json with all possible attributes

E.g

> `{args.ou.online_attr_array.first_name.value__is_empty__Visitor}` Would use attribute from defined json. Also would use `Visitor` as fallback,

```
"online_attr_array": {  
    "first_name": {  
        "h": false,  
        "secure": true,  
        "identifier": "first_name",  
        "key": "First Name",  
        "value": "First name"  
    }  
}
```

> `{args.ou.id}` id of online visitor

> `{args.ou.online_attr_system_array.playerClass__is_empty__Visitor}` Would use attribute from

```
"online_attr_system_array": {  
        "playerClass": "vip_3",  
        "playerClass_secure": true  
    }
```

You can also print a part of the text only when a [condition](docs__docs__bot__conditions.md#printing-content-based-on-a-condition) validates.

```
{if_condition_valid__<condition_identifier>}Printed when condition is valid{/if_condition_valid__<condition_identifier>}  
{if_condition_not_valid__<condition_identifier>}Printed when condition is not valid{/if_condition_not_valid__<condition_identifier>}
```

As visitor is not a chat yet, conditions are checked against online visitor - online visitor attributes and visitor department are available.

E.g

> `{if_condition_valid__vip_visitor}Hello VIP visitor!{/if_condition_valid__vip_visitor}`

## Operator profile before chat start[​](#operator-profile-before-chat-start "Direct link to Operator profile before chat start")

#### Operator intro text[​](#operator-intro-text "Direct link to Operator intro text")

This allows to change `Have a question? Ask us!` text

## Status widget style[​](#status-widget-style "Direct link to Status widget style")

Here you can change main widget attributes. Like logo etc.

tip

Some of these attributes are quite old and not used anymore. They will be removed in old version.

## Widget container[​](#widget-container "Direct link to Widget container")

Here you can change general outlook of widget. Like borders padding etc.

### Widget header background color[​](#widget-header-background-color "Direct link to Widget header background color")

Sets background color for widget header

### Header icons order. \_print is optional and indicates we should also print a text after an icon[​](#header-icons-order-_print-is-optional-and-indicates-we-should-also-print-a-text-after-an-icon "Direct link to Header icons order. _print is optional and indicates we should also print a text after an icon")

Using this field you can adjust icons location in the widget

E.g let's put minimize and close icon to the right

```
* dropdown_print,dropdown_min,dropdown_popup,dropdown_fullheight,dropdown_close  
* left_close,right_min,dropdown_popup,left_fullheight,dropdown_close
```

E.g `dropdown_print,dropdown_min,dropdown_popup,dropdown_fullheight,dropdown_close`

![](data:image/png;base64,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)

`left_min,dropdown_print,dropdown_popup,dropdown_fullheight,dropdown_close`

![](data:image/png;base64,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)

### Widget border color[​](#widget-border-color "Direct link to Widget border color")

Border color for the widget

### Widget border width (px)[​](#widget-border-width-px "Direct link to Widget border width (px)")

Border width for the widget

### Header height (px)[​](#header-height-px "Direct link to Header height (px)")

If you want higher header you can set it's height here.

### Header padding (px)[​](#header-padding-px "Direct link to Header padding (px)")

Set custom padding for widget header

### Widget width (px)[​](#widget-width-px "Direct link to Widget width (px)")

Override widget width directly from a theme

### Widget height (px)[​](#widget-height-px "Direct link to Widget height (px)")

Override widget height directly from a theme

### Minimize image | Only for a legacy widget[​](#minimize-image--only-for-a-legacy-widget "Direct link to Minimize image | Only for a legacy widget")

Image used to minimize the widget

### Restore image | Only for a legacy widget[​](#restore-image--only-for-a-legacy-widget "Direct link to Restore image | Only for a legacy widget")

### Close image | Only for a legacy widget[​](#close-image--only-for-a-legacy-widget "Direct link to Close image | Only for a legacy widget")

### Popup image | Only for a legacy widget[​](#popup-image--only-for-a-legacy-widget "Direct link to Popup image | Only for a legacy widget")

### Widget response layout width trigger (px) | Only for a legacy widget[​](#widget-response-layout-width-trigger-px--only-for-a-legacy-widget "Direct link to Widget response layout width trigger (px) | Only for a legacy widget")

### Hide widget close button[​](#hide-widget-close-button "Direct link to Hide widget close button")

You can hide close button in header by checking this.

### Hide popup option[​](#hide-popup-option "Direct link to Hide popup option")

Hides popup option from header dropdown menu.

### Try to detect language from browser headers[​](#try-to-detect-language-from-browser-headers "Direct link to Try to detect language from browser headers")

Widget will try to detect language by visitor browser and show language in his native langauge.

See youtube video how to setup it.

<https://www.youtube.com/watch?v=iGGTKGrO9Ek&feature=youtu.be>

Things to check if it does not work.

- Make sure you checked this checkbox
- Make sure your browser sends correct language headers while testing.
- Take a look at System configuration -> Speech -> Languages. Make sure Siteaccess column has a proper value.

### Show go to survey button on chat close[​](#show-go-to-survey-button-on-chat-close "Direct link to Show go to survey button on chat close")

Usually when chat is closed visitor is automatically redirected to survey. Instead of that you can show him Go to survey button just.

### Before closing chat ask user does he really want to to close chat[​](#before-closing-chat-ask-user-does-he-really-want-to-to-close-chat "Direct link to Before closing chat ask user does he really want to to close chat")

Visitor will be asked for confirmation does he really want's to close a widget.

### Close chat if page is refreshed. Usefull if you have embed code in popup.[​](#close-chat-if-page-is-refreshed-usefull-if-you-have-embed-code-in-popup "Direct link to Close chat if page is refreshed. Usefull if you have embed code in popup.")

If you have embeded Live Helper Chat script in popup it makes sense on popup close also close the chat.

### Show start chat form instantly after operator closes a chat.[​](#show-start-chat-form-instantly-after-operator-closes-a-chat "Direct link to Show start chat form instantly after operator closes a chat.")

Instead of writing message chat was closed we will show start chat form for the visitor instantly.

### Allow visitor to change font size.[​](#allow-visitor-to-change-font-size "Direct link to Allow visitor to change font size.")

You can allow visitor to change messages font size directly in widget.

### Show previous chat messages in chat widget.[​](#show-previous-chat-messages-in-chat-widget "Direct link to Show previous chat messages in chat widget.")

In case you want to allow visitor to see previous chat message you can check this. Previous messages are shown only if we find previous chats by same online visitor.

### Show operator profile in a new row[​](#show-operator-profile-in-a-new-row "Direct link to Show operator profile in a new row")

Usefull for UI combinations.

### Close chat if page is refreshed. Usefull if you have embed code in popup.[​](#close-chat-if-page-is-refreshed-usefull-if-you-have-embed-code-in-popup-1 "Direct link to Close chat if page is refreshed. Usefull if you have embed code in popup.")

### Do not prefill offline message with chat messages.[​](#do-not-prefill-offline-message-with-chat-messages "Direct link to Do not prefill offline message with chat messages.")

In case you are prefilling user message, but do not want to prefill it in offline mode you can check this option.

### Hide BB Code button[​](#hide-bb-code-button "Direct link to Hide BB Code button")

If you are using widget theme and want to hide Face icon (bb code) you have to check this option.

### After how many user messages show switch to human button. empty - never, 0 - always[​](#after-how-many-user-messages-show-switch-to-human-button-empty---never-0---always "Direct link to After how many user messages show switch to human button. empty - never, 0 - always")

If you want to give easy way for a visitor to be transferred to operator you can enable this option.

This option is always shown and does not pay attention is there any operator at the moment in back office. So most logical way is just to use bot workflow itself as it can check is there any operators online.

## Messages style[​](#messages-style "Direct link to Messages style")

Here you can change how message style looks like for visitor.

## Need help widget[​](#need-help-widget "Direct link to Need help widget")

You can change how need help widget looks like.

## Chat widget[​](#chat-widget "Direct link to Chat widget")

Here you can change default text in widget itself. Few more complex ones I have explained here.

### Thank you for your feedback text[​](#thank-you-for-your-feedback-text "Direct link to Thank you for your feedback text")

This text is visible after visitor fills in offline form. You can write bbcode there including custom html by warpping it with `[html][/html]` tag

```
Your request was logged [b]bold[/b] [html]<i>Italic</i>[/html]
```

### Blocked visitor message[​](#blocked-visitor-message "Direct link to Blocked visitor message")

This field also support replaceable variables and [condition blocks](docs__docs__bot__conditions.md#printing-content-based-on-a-condition).

- E.g department e-mail `{args.chat.department.email}`
- Custom text from Translatable group items. `{blocked_email__Blocked email}`

Text you can use in translation item or directly in widget theme.

Few more samples

- `You can't chat with us at the moment contact us by [url=mailto:{args.chat.department.email}]e-mail[/url]`
- `You can't chat with us at the moment contact us by {args.chat.department.email}`
- `{blocked_email__Blocked email}`

### How to show average wait time instead of a number in the queue?[​](#how-to-show-average-wait-time-instead-of-a-number-in-the-queue "Direct link to How to show average wait time instead of a number in the queue?")

- You have to be running department [statistic cronbjob](docs__docs__development__cronjob.md#statistic-cronjob)
- `Text when user starts a chat and is waiting for operator to join a chat. Only if queue is 1 or if less than a minute wait time.` set value like **Less than a minute**
- `Text when user starts a chat and is waiting for operator to join a chat. Only if queue is > 1. {number}, {avg_wait_time}, {avg_wait_time_live}, {avg_wait_time_live__string if more than one minute live wait time}, {avg_wait_time__string if more than one minute wait time}`
  - Department average wait time - **Your average waiting time for attention is {avg\_wait\_time} minute{avg\_wait\_time\_\_s}**
  - Live wait time (`departament wait time` - `how long visitor is waiting`) E.g **Estimated wait time {avg\_wait\_time\_live} minute{avg\_wait\_time\_live\_\_s}**
  - If `departament wait time` - `how long visitor is waiting` < 0 we assume less than a minute is left. First text is used in that case.

Average wait time will be calculated for all closed chat from last 3 days. You can change that in `Live help configuration (tab) -> Chat (section) -> Statistic -> Configuration (tab)`. You can set shorter period of time. In that case you should set also this cronjob to run more frequently.

## Custom content[​](#custom-content "Direct link to Custom content")

You can write custom HTML in these fields to be appended in various chat widget places. You can also use [start chat form settings](docs__docs__chat__start-chat-form-settings.md#pre-chat) to write HTML above all fields.

### Custom html before start chat form fields, popup[​](#custom-html-before-start-chat-form-fields-popup "Direct link to Custom html before start chat form fields, popup")

React attribute path

```
{'k': ['chat_ui','custom_html_widget'], 'v' : 'Custom html before start chat form fields, popup'}
```

This HTML is shown if chat will be started with an operator and not a bot in popup window.

![](/assets/images/custom-html-popup-27e68964906688251d919b1d67a9eee1.png)

### Custom html before start chat form fields, widget[​](#custom-html-before-start-chat-form-fields-widget "Direct link to Custom html before start chat form fields, widget")

React attribute path

```
{'k': ['chat_ui','custom_html_widget'], 'v' : 'Custom html before start chat form fields, popup'}
```

This HTML is shown if chat will be started with an operator and not a bot.

![](/assets/images/widget-operator-515ff96b2683e0e605bdff1b4323fd99.png)

### Custom html before start chat form fields, popup (bot mode)[​](#custom-html-before-start-chat-form-fields-popup-bot-mode "Direct link to Custom html before start chat form fields, popup (bot mode)")

React attribute path

```
{'k': ['chat_ui','custom_html_widget'], 'v' : 'Custom html before start chat form fields, popup (bot mode)'}
```

This HTML is shown only if chat will be started with a bot in a popup.

![Only bot online](/assets/images/custom-html-popup-bot-512571e4bc28b7ca0c02c502973f9304.png)

### Custom html before start chat form fields, widget (bot mode)[​](#custom-html-before-start-chat-form-fields-widget-bot-mode "Direct link to Custom html before start chat form fields, widget (bot mode)")

React attribute path

```
{'k': ['chat_ui','custom_html_widget'], 'v' : 'Custom html before start chat form fields, widget (bot mode)'}
```

This HTML is shown only if chat will be started with a bot.

![Only bot online](/assets/images/only-bot-online-9e830739782dfeb588ac368196a7a8b7.png)

### Custom html before standard widget header[​](#custom-html-before-standard-widget-header "Direct link to Custom html before standard widget header")

React attribute path

```
{'k': ['chat_ui','custom_html_header'], 'v' : 'Custom html before start chat form fields, popup'}
```

HTML is rendered before widget header

![Inside widget header](/assets/images/before-header-3efaaf695b1b3bf4d8e7bcc0ea4678b3.png)

### Custom html after widget content[​](#custom-html-after-widget-content "Direct link to Custom html after widget content")

This field also supports JS execution on rendering.

```
<script data-bot-action="execute-js">  
</script>
```

![Below content](data:image/png;base64,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)

### Custom html inside standard widget header[​](#custom-html-inside-standard-widget-header "Direct link to Custom html inside standard widget header")

React attribute path

```
{'k': ['chat_ui','custom_html_header_body'], 'v' : 'inside header'}
```

HTML content is shown above standard widget header.

![Inside widget header](/assets/images/inside-header-ae7948cbec53f0c692fd9ff298a12255.png)

### Custom html above status/profile body in online mode[​](#custom-html-above-statusprofile-body-in-online-mode "Direct link to Custom html above status/profile body in online mode")

React attribute path

```
{'k': ['chat_ui','pre_chat_html'], 'v' : '<b>Intro</b> pre chat HTML'}
```

This field location is identical to Start chat form settings. `Pre-chat HTML` field location.

![Pre-chat HTML](/assets/images/before-profile-d07870e2970c3641f1103a782d9e7e51.png)

### Custom html above status/profile body in offline mode[​](#custom-html-above-statusprofile-body-in-offline-mode "Direct link to Custom html above status/profile body in offline mode")

React attribute path

```
{'k': ['chat_ui','pre_chat_html'], 'v' : '<b>Intro</b> pre chat HTML'}
```

This field location is identical to Start chat form settings. `Offline Pre-chat HTML` field location.

![Offline Pre-chat HTML](data:image/png;base64,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)

### Intro messages[​](#intro-messages "Direct link to Intro messages")

#### Operator intro message. You can wrap custom HTML with [html][/html] bbcode`[​](#operator-intro-message-you-can-wrap-custom-html-with-html-bbcode "Direct link to operator-intro-message-you-can-wrap-custom-html-with-html-bbcode")

React attribute path

```
{'k': ['chat_ui','intro_message'], 'v' : '[html]<b>Intro</b> message with custom html[/html]'}
```

```
[html]<b>Intro</b> message with custom html[/html]
```

#### Operator intro message in HTML[​](#operator-intro-message-in-html "Direct link to Operator intro message in HTML")

React attribute path

```
{'k': ['chat_ui','intro_message_html'], 'v' : 'Custom html before start chat form fields, popup'}
```

```
<b>Intro</b> message with custom html
```

Results in

![Intro messages](data:image/png;base64,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)

### Custom html before standard widget status header[​](#custom-html-before-standard-widget-status-header "Direct link to Custom html before standard widget status header")

This field is not used in a new widget.

### Custom html before standard widget status header[​](#custom-html-before-standard-widget-status-header-1 "Direct link to Custom html before standard widget status header")

This field is not used in a new widget.

### Custom html after chat status[​](#custom-html-after-chat-status "Direct link to Custom html after chat status")

```
<div id="after-chat-status" className="bg-transparent"><div class="my-1 bg-transparent" align="center"><div class="btn-group bg-light m-auto" role="group" aria-label="Basic example">  
    <button type="button" id="switch-messages-button" data-action='[{"action": "set_state","target":"messages_ui","value":true},{"action":"remove_css_class","target": "#switch-promotions-button", "value": "btn-secondary"},{"action":"remove_css_class","target": "#switch-messages-button", "value": "btn-outline-secondary"},{"action":"add_css_class","target": "#switch-promotions-button", "value": "btn-outline-secondary"},{"action":"add_css_class","target": "#switch-messages-button", "value": "btn-secondary"},{"action":"add_css_class","target": "#promotions-list", "value": "d-none"},{"action":"remove_css_class","target": "#messages-scroll", "value": "d-none"}]' class="btn btn-sm btn-secondary ps-4 pe-4">  
        Messages<newmessages>&nbsp;&nbsp;&nbsp;<svg style="width: 15px" viewBox="0 0 10 10" class="position-absolute" xmlns="http://www.w3.org/2000/svg"><circle cx="5" cy="5" r="4" stroke="white" stroke-width="1" fill="#0094ff"></circle></svg></newmessages>  
    </button>  
    <button type="button" id="switch-promotions-button" data-action='[{"action": "set_state","target":"messages_ui","value":false},{"action":"remove_css_class","target": "#switch-messages-button", "value": "btn-secondary"},{"action":"remove_css_class","target": "#switch-promotions-button", "value": "btn-outline-secondary"},{"action":"add_css_class","target": "#switch-messages-button", "value": "btn-outline-secondary"},{"action":"add_css_class","target": "#switch-promotions-button", "value": "btn-secondary"},{"action":"add_css_class","target": "#messages-scroll", "value": "d-none"},{"action":"remove_css_class","target": "#promotions-list", "value": "d-none"}]' class="ps-4 pe-4 btn btn-sm btn-outline-secondary">  
        Promotions  
    </button>  
</div>  
</div></div>  
  
<div class="promotions d-none bottom-message p-2" id="promotions-list">  
    <div class="promotion-item">Promotion 1</div>  
    <div class="promotion-item">Promotion 2</div>  
</div>
```

In combination with `Widget body additional CSS, takes effect after save`

```
#after-chat-status {  
    width: 100%;  
    position: absolute;  
    z-index:999;  
}  
#promotions-list {  
    top:40px;  
}
```

Results in switchable tabs in the chat. Messages tab also has indicator if there is new message while visitor is reading promotions.

![](/assets/images/promotions-7328d5c0161d1de4239b6602348d7f03.png)

### Header HTML here you can paste custom header html you want that widget should have.[​](#header-html-here-you-can-paste-custom-header-html-you-want-that-widget-should-have "Direct link to Header HTML here you can paste custom header html you want that widget should have.")

This file content will be appended to widget `head` content. You can use this field to add custom JS or any other HTML you want.

## Custom CSS[​](#custom-css "Direct link to Custom CSS")

If you want to style form directly using CSS you can use this section.

### Status widget additional CSS, takes effect after save[​](#status-widget-additional-css-takes-effect-after-save "Direct link to Status widget additional CSS, takes effect after save")

This place styles iframe of status widget itself.

CSS

```
body {  
    background-color: red!important;  
}
```

You can also change default icon by SVG body

```
#lhc_status_container #status-icon:not(.offline-status):before, #lhc_status_container .lhc-icon-online:before {  
    content: url("data:image/svg+xml,rest of your SVG");  
}
```

Will result

![](data:image/png;base64,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)

See [example](docs__docs__development__modifying-widget.md#how-to-make-status-icon-smaller-based-on-user-resolution) how to change status widget dimensions using this field.

### Widget container additional CSS, takes effect after save[​](#widget-container-additional-css-takes-effect-after-save "Direct link to Widget container additional CSS, takes effect after save")

This field has to contain direct CSS rules.

```
box-shadow: rgba(0, 0, 0, 0.3) 0px 4px 12px!important;border-radius: 12px!important;
```

Will result in a widget with a shadow. It set's style directly to an iframe itself.

![](/assets/images/shadow-widget-d981d8ad5e109b6773513b8190c39f25.png)

### Widget body additional CSS, takes effect after save[​](#widget-body-additional-css-takes-effect-after-save "Direct link to Widget body additional CSS, takes effect after save")

```
.message-send-area{  
    background-color: red!important;  
}
```

This field also supports fonts/styles preloads

If you put something like that font will be preloaded. Quotes `"` is required around font path

```
@font-face {  
  font-family: 'Poppins';  
  font-style: normal;  
  font-weight: 700;  
  font-display: swap;  
  src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2") format('woff2');  
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;  
}
```

This way style itself would be preloaded

```
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
```

Will result in

![](data:image/png;base64,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)

If you want to style messages depending on their state here is logic to follow.

- Messages which will be stored has a class `.msg-to-store`
- Messages appearing as intro bot messages can be selected by `.start-chat > .index-row-0` should *be* animated
- Messages which are fetched first can be selected by `.online-chat > .index-row-0` these should *not be* animated
- Messages not having `.online-chat > .index-row-0` should be animated.
- Stylings buttons default button has those CSS classes `btn btn-sm btn-outline-primary btn-bot`
- While button click being processed it has `disabled` attribute set.

#### How to change widget loader colors?[​](#how-to-change-widget-loader-colors "Direct link to How to change widget loader colors?")

This is a loader circle which you see while the widget content loads for the first time.

```
#lhc-spinner-overlay .lhc-spinner-circle {  
    border: 3px solid #f3f3f3!important;  
    border-top: 3px solid #007bff!important;  
}
```

#### CSS Rules to style form buttons and inputs and their shadows[​](#css-rules-to-style-form-buttons-and-inputs-and-their-shadows "Direct link to CSS Rules to style form buttons and inputs and their shadows")

E.g if you want high contrast ratio you can set `--bs-btn-focus-shadow-rgb: 0,0,0` and change

> `--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .25);`

to

> `--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .95);`

```
/* To change buttons focus options */  
/* You can apply similar rules to .btn-primary,.btn-info,.btn-success buttons also */  
.btn-secondary {  
    --bs-btn-color: #fff;  
    --bs-btn-bg: #6c757d;  
    --bs-btn-border-color: #6c757d;  
    --bs-btn-hover-color: #fff;  
    --bs-btn-hover-bg: #5c636a;  
    --bs-btn-hover-border-color: #565e64;  
    --bs-btn-focus-shadow-rgb: 130, 138, 145; /*change focus shadow color*/  
    --bs-btn-active-color: #fff;  
    --bs-btn-active-bg: #565e64;  
    --bs-btn-active-border-color: #51585e;  
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);  
    --bs-btn-disabled-color: #fff;  
    --bs-btn-disabled-bg: #6c757d;  
    --bs-btn-disabled-border-color: #6c757d;  
    --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .25); /*Increase .25 to have higher contrast ratio*/  
}  
  
/* Options to change colors for form fields. */  
.form-control:focus {  
    color: var(--bs-body-color);  
    background-color: var(--bs-form-control-bg);  
    border-color: #86b7fe; /* Border color of input field */  
    box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25) /*You can increase 0.25 to have higher contrast radio or just change a color*/  
}  
  
/* Make higher contrast ratio for settings icons */  
#chat-dropdown-options {  
    color: #000000!important;  
}  
  
/* Make send icon color red if it's missing text to sent */  
#ChatSendButtonContainer .text-muted-light{  
    color: red!important;  
}
```

### Custom CSS only for popup[​](#custom-css-only-for-popup "Direct link to Custom CSS only for popup")

```
#messagesBlock{  
    background-color:red;  
}
```

Will result

![](/assets/images/popup-css-a303183e0645fafee153acb20be844f4.png)

This will be applied only to a popup.

### Custom page CSS (new widget only)[​](#custom-page-css-new-widget-only "Direct link to Custom page CSS (new widget only)")

This will move widget. Same way you can change dimensions of a status widget.

```
#lhc_container_v2 #lhc_status_widget_v2{   
        bottom:80px!important;   /* Adjust position from bottom */   
        right:20px!important;    /* Adjust position from right */  
}
```

Changed position from bottom. If you want to change size see this [example](docs__docs__development__modifying-widget.md#how-to-make-status-icon-smaller-based-on-user-resolution)

![](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAADcCAYAAADZaosFAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAB9+SURBVHhe7Z0LsJ1VdcfXfeTm3uTemwd5kQCBgBAbEkFCg/KqNIiCTgl1kOnYYLEMY5XpCEhHncrADNBWpVJqHaQ6ksoMWFsYBRVDkacVQUHQEnkEeYSQhCRyb5L7yH10/9fZa2d9+3zfOefenJucbNZvZs1ee+3vnPutvf/Z2d/jfF/TqIMMo0Ho6enx3vho9qVhJIEJ2kgKE7SRFCZoIylM0EZSmKCNpDBBG0lhgjaSwgRtJIUJ2kgKE7SRFCZoIylM0EZSmKCNpDBBG0lhgjaSwgRtJIUJ2kgKE7SRFCZoIylM0EZSmKCNpDBBG0lhgjaSwgRtJIUJ2kgKE7SRFCZoIylM0EZSmKCNpDBBG0lhgjaSwgRtJIUJ2kgKE7SRFCZoIylM0EZSmKCNpEjjtW5NTd6pH5U6Jbct2ocxf95TKZOytmjo8j5b/56JqLN89va1biboiKLOKItXEHDed4y3k/VfibMsy1oNZVGPFMXHTYMJ2pYciiIhZuIQsheztFWyEW8h5j5b1dT2+rOZ74mMcZ8VMnFFXiwlbIb2VB38SCy6BHkxLXwh015AnA3X/TDptjw/xKrM1nmxcdFgM7QJ2hF3QKZeQchxiW3LYo68WDV0RuJnykjgReWEC9sEPQGMU9Bx4pl6gZC1nyfgsm1AzndVIpNNjnC1H0q3XWEbmChhm6AngHEIOk46U/ffJzFdsu+FHOq+FL9I6LqshGSTWyqBi4Hg74Ww43pNmKAngDEIOi/ZTCxHzGJADtrYV6ZFDnQc6HgldCbBzxEp+yqeafNDWhYvufw5IcQ8cb0qdZaPCRrUKOg40Uy9QMiAfdUOwxkHLWIxiYFMHER/IyaTRSRKMca1lcVdDKesQh2l3459b0BK/TcE7deE/456YYIGXiiViJPM1COxguB7gepTZhKTuK6LxTEgcY20ZaJKaNpqEnK0DZ+XVTGgff23NHG9EP/5emGCBpFIYuIEM3X/WcS0xYKMhSt1LfT4HHL8HUDiuaihwBbaYqHK7AsT0cbC1nWJZepSunjwFXE9F//ZemGCBkUCceQlF2L+c6hrEyEWitX5oS3eVm/n60DHAr6NUcOAqBhgX4vR+0Gwrq79wu2cxaLmGHBxEOqeuF6G/1y9MEEDLYwInVwm0RyhsSlByiwsfka8ztcijgUtdfm8toBrC6hhQFSbiDAWLdedXyTsePtgcd0Z4+Ig1B3az8V/pl6YoIEWhkInlknSiwygDBaJMVfAvszEonb9Hfhb8AFv5w00+W1l7zEU4qMM5uNlYtVxH9N+KL0ffweX3gCXLh58RVwP+O3rhQkaOGHE6KQyCfptEcuYF574KEWgKLWPcrhCW/isqmuDkAF8DaIiam0QTRArzNelFL+lQhuXOb78DRjg0sWDr4jrjN+2XpiggReIRicVfCWkjGkRRj7KESmVjzYtaqnDx9/hGNwFC6h52TJqfec7qXnRImpGffZsaurqoqbJk0v75IZgdGCARnt7aWTLFhrZsIFG1q+noWefpZGnn+a6iFOLu9n7Qbxx6dtioaMX2Fd1bYyLg1D3xHUT9EQAUSh0QsH326CeMRdHKaJEqX0RahCsbBOVsj22aTnxRJq0ciW1nnoqtR55pIvsHUMvvkhDDz9Mu++7j4Yff5zFqEVaJuSCMmyvfPTKWEStfcZvUy9M0MCJSdDJBN+3o54xF0epBSl+oYgL2sjNuK0XXEBtq1ZlRNy7e4Se3DpIv9nWTy/07KbXdg7R5v5h6hkcof5hNzO7bbB37S1N1N3WTHPaW+iQqa10VPckOnZmOx1/UBt1TYL0SkDcg3feSbtvv52a3IzOAnVDKAJHyQKG5bSJkFnM3sffh8+lMsbFQag7tG+CngicqIBOJJOUa0c9Y16I2g+ilVL5It64HHVCnnzxxTT5wgupqb3dRYk2ONHeu2EX/XRjHz2xpZ9je8Py2e30voM76KwFU2iBEzsY7e+ngVtvpYFbbmFhayGLH2KqLfgonY1H1CEOfFu9MEEDCMu7Qqj7toz5GAva+UVijsUr/rAv21avpo5LL6Wm7m5XI3rojX66Y30v3f/6Lq5PBGfMn0IfXdRFp80r/eMZdQLou+kmGlyzJggYkhcBl4nb+yLkPFHDB0HULga0kIPv2+qFCRo4gekkgu/iAHUYxIqYCFiEDXHCj4XLpfKHfNm0eDF1fP7z1LpihYuUhHzL796qy2xcK5i1Lz5mWhD20GOPUd9119HounUsWhF1C0x8X2pRS4me0gJHXYxxMRDqDvZ9vF6YoB0Qo4YT8jH4wVwMpRY0+66MxQwhaxGL3/rRj9LUq6/m78fS4ivPbKcfvTZxM3I1PnjIFLp86YzSUsQN5c6rrqKhO+4oEzTKPFGz70qIuEjQoXd9XINt64kJ2qEFHZJxMfFZvDAIU+reR5k3G8MXMYvf/rnPUfvHP+48ou+9tIOue2ob9bkDu/1Nhzug/PxxM+kjR3Ryvf/b36b+669nUYuQtR/P2iLmqqJ2MbCnt0vb1RMTtEMEHRJR9WAuFouZZ15favHGYoa1f/nLNPlDH3JRoquf3Ea3v9jLfiNxwZFddNXxM9kfuPtu6r/iipJ4xVxcfBEz+66MZ2oWsfadMS4WfIcJegLIE3QQspiLaUFXWmKIiMU63EFX25ln8im4z/x8Cz26ad+tlcfKyXPb6Z9Pms2n+gbXrqU+d9AaBO0tb30tgg7C9r6IWSyepRtN0Nj3JAjd6gSoyROzLrWvRS7ixswMMb/ZP0yfeGhTQ4sZYP+wn9hf7Df2X/63EeM8JeZ99IH0FZfKz+BijUwygtaEAeFaCfbVoFUTMovZrZmxzMDM/DePbqZntg+66L7jshMPoe+ft4RWLpzuI7WB/cT+Yr+x/8hDctJ5ajEXiRqIL3Wg/UYiLUG7gRDCIKjByZgfRD3AvPTwMZzNkANALDP2tZjBR46eRQ+8+hb97fIFPrIHiPxXF76bbvzT/Evr2F/sN0AeLS6fOMdgrh76A76yRp+RY5IQNHe8JwwEcIOhB4Z9PXDKl0HGmhnnmfnUnAMHgPtrmbG1fzctOWgKr3XnDb/l1r7Y05KY/+lPFtE9L26jE+d1cSwP7Df2H3S6fJAX8hNhx/2g+0n3XWwicvYbjHRmaN/JQuh8hwxWPIB6pkJMBhkXTfB9ODW3P89mHDm9gzrbWmjj9h7qae6g2cM7OH7NKYfTk5t20DlHzqT7X95ORwxtpekj+efCsf/IA/kgL8mb+8DnHfcL+8pE3AcCSZzlwMBIpwfzgwOfRetLDKY+g4F1JZfeWlevpilf+AJfNPnwT16vy3nma05ZSN1trbRoeumqnrB51256fccAPeSWFfe9/Acf3cMP/nwJLeicTA+8sJGufeh5anNZfG/1abRu6y6aM3USvblzkK65++e0taWTZgzvopdbZ/hPZsF56h+8fz5ffNl17bU0tGYNtbphh/FZD5RuOzkLEs58qBJnMzBlsO+MQZuzemKn7Rx5ghYRi69nY/gQbxC1t+GuLuq+/36+N+Myt/4c7xXA1Uvm0upj59Kiae00e8okH63MFifujU6g9zth//0jv+cDQqyhsez47mPP0k9eeYu+fPZxNH1qO+1yB3uzOibRRbc9SDuaJlH36ACLuqdpsv+2cnBF8YaTZvO9H71nnEHNvb0ZUYvJBRgIOCNsZyJqMRP0BBELmoXs6jwr+3Yt6iBiVxdho2y77DJqv+QSvjfjkkc2udaxgQO0lQtn0GHdxcKqhZ6BYXp22y7qaG1mO+dbD9C1K99JS+bPot9s7aPD3T+Uv7rtAdrZ1Maz9qCTGwRdjZtPmcv3fvTffDMN3nBD2SyduZrofBYzDL4zCFpm6EYVNPbvwMeJUcQs3Rv8qE1EznW0ecP9zLgFFOBGo7GAGfm3Fy2ni5bO22sxg+7JLbTi4C46ZmYH/e+r26ltdJiWzj+IHnujl46f20n/+rPnaHdTK7U2QXgjNYkZSF6cp8tX5w8L/aIM/QfYj0vf1kikIegYNQgZw8B5P8zezjBz4+Z83M+M2Xksd8198wNH0w1nLKqLkGMmtzTT6mXz6V/OXU73rnuNlszqpKt/+iz96qWNPCtPckJ/rWU6L0/wj6oayAv5IU/ky/9jOZP+kDKeBGBMJO5GJI0lR3Nz6HgeGNfxKNngO8PgyZpZr5t3uzjKzh/+kH9p8qmfban5fmaI+fzFs31tYvntll466banaeHQdvrYScfQinldNHuam2VdW9/QCC9N3nvbU6WNK4D7qb/23tmEX77sOPts949iz3JDL0FqXXY0j/A/gbphSw6PCFpg3wlV/EJz2+A3gBAzzmw0opjBktld9ND5S+jr559M5x4zl/qbJ9Ev3BLklZ4BzqPdCXrK6CBN5iODYpAf8kS+yFuWG9IfMhFInfHtBwJJCDrubKnnDQoszN6+jh+0Avxsqhbw3/ufveMgX9t3HD9/Oh01vZ3eGmqiQ7raadmsDhoeHKB7nn6JVn3zf2jmyC6aN1T9vLnkibx1X0h/cJ+p/hLEl7huaxSSWHIMqyWHLDewxICvz2zwUsPVZbnBSw5nstz4ywc31bR+xgHgRKyZa2H38Agt++qPXF7NfLDY39xKA25xAB9nPCaNDtFLrZX/seHXLv9x+lzCsmOnW3bIUiOY2yYsO2CuLksN8WXJ0WJLjokjiJprvnSC1XGInGPe8JwMiBk38tQiZszO+0vMYJI7ULzx7KW8vBhuaqb2kSHqhO/ktaVlalUxA+SJfJE3nhuC/tAmfcX4uqD9RiSpNXQGDI5HBki20XU8BAbgUQO1cOGx1c8mTDTLFsyiySO76bWWaXx1EGc6trZ0upkac2ttSL7IP15uaAtE/dmoJDVDx8SDInVteKIRwHMzauHgzjbvFbNzcDcvDfJAHO1FbOqpvo6f1z2FmptG6SB/b8d4kHyRP/oBSJ8ALqPZWkqg/UYiLUGrAch0uPpvU7ehxOO5AB4CUwtzqlzKfuLlzbTyxrvos3c+Stt3DfhoCYgVcbT/5vWtPloCQv/6Q8/QuTffQ9/5xe98tJgPLz2Cpo/Wfr48RvJF/tIn2mIkptvyttvfvH1m6EjsYlhDAzzRqBZwsaMS6zZt5/Kxl96gF7Zkrzi+un0Hx8GTr2UFvW1nP615bB37X3vwaS4rcdjMLupwa+fxIvki/7x+iWfnA4UkBF2t00O7GyQBMTwFFA9OBHg8Vz14l1vfgj9adDgdPjt799shMzppxRHzqK+pjY45dJ6Plpg5tZ1Wr1js9quZPnnWyT5azCvbSqfnqp13LkLy5QdHqv/B8pC2vH5sNJI4bTckp+1cR8sBTnwzUrg6iO1Rus/glN20p57iS8HvvvOVmm4V/b9PLKdDuyqf5dgxsJvaWluorWA2H3TLi6I2fLZzcvU79N7zpf/k8pXWgyreZVcEbin91arD+JFiPccdt+eU3chIuGrIp+ycyVVDnK7jq4feh6yxfT2x03ZjxYlYzzD8SFsHHpxYCxt3VP9vHoIsEiyo1FaLmPWB40ATJDZ2JF/kn8nc901tvdF4vG0EHQ9QqI9xAO9ZX/pJ0/7k1xve9J4T9BhO1Wlqyb/WPmkk3n4ztCfM0e6/TrBnzq7MDY+/Rq/2Zs9e7EtwNuSqux9jH2vx8VJL/rX2SSPxthF0ZgD9IAI8OR/g+cy18g8/f5XXwfuDO375PJc4uPxDU/YnXWNB8kX+8MKhVC0CV/3XaLxtZ2gMIA9kb+lsAR42XitrfruJ7no+e9ptX4Bz13JK7zNnHEfnLBv/2wEkX+QfizkWbJ64G5UkBF2tw/NmFhazq+OdJgBPzh8Ln/jxc/Rf6zb72sTz/OY/0MW33c/+TeefTgtndvFleHm0wViRfJE/+qKoD6v1baOR1gztBKoHIDNQXsw6hhIv5AF4DcRYwQ1B+wLMzKtvXcv+373/BFq+cA7775ozlQ4d2j6uc9GSr+Qv/SKW15e6bFSSXHKEQREiMWvD26YA3mkyVj5wROlJnxMFLp3jMrjMzLjwcvaxh7MPcNXyytOOCc/rGAuSL/LP6xeYiJp9VQpxvRFIUtAaPRh5hlenAbygZyzgFyv4MetEgJuXHn7hdTr7a98Pa+Z/XHUyffK0pWXnsOd0dVD3cJ+v1Y7ki/zjPsnFTwpC4Xb7mWQEXdbB6r9MGai8Ot4DCPC2qbFQbXbG7BrfnFQJiBjrZMzIuHnpyjsf5ThuQvrvS86h046az/WYzb19fOcdns0xFiRf5J/XL2J5Sw9dbzSSuPQ9pl+swFxMfq2Ccqy/WKn0e0JcxVu77tUws+L02vLD5vBBXMek7Dp9265+FuQTr2wONy0JV575bn4Ox9FzpvlIPrhDDzc1bWzurvlxBvoXK5kfyoq5bWq57A1rtF+spCdoZxAwulmX8vOrIGplbf5VE996roe+9HTpbrlKbPjkSWXLjVjIwhXvP5GWHzrLCXcnrXtjO/3y1S1l4sUsfOiMTr7sfeTs6bRo1jTnVz9Ixf8AWJaAsdzT8dllM+iio7v51RWDeHWFk4A2CBl/Pe8nWIiJmE3QE4Q8xgBdy6J2IpUZWgQtYs7M1N7oxBOp8zvf4V9Dr/xR6ai/iHh2LhIyruJtaelikeGxt++Y0eFb6sddv15P//iTX7K/vnUW7arxyuF9H1zAz7nb8bGPET3+eFbIvhQho5RZWQtbBG2PMZhApJMBl67zBWnLmGuH4XXD+O8Xg4znVlTiPQtK7yTE5e81v3iOb8jXYoaQMVu+6AQmM+aVD6ynHYNjP7VWCay3RcyDTZNqFjPyQ57Id8jlLX2A/tBCFWN8OwixBiUpQQt6MLj0A8ImA6gGEYbXDQO81LISa3+/nb76xAY69RsP0Ncf/LWP5gtZwJNFv/T4hrpdLsf9HHJeGmxunuq96kh+yFfWxCxk1x/cT8647izTbxJrcNz+I5MDG/3kJDFZP2cODF0ZLztQ4sdII93d1PXII3xvdC0Hh0cOvcm/GNFLi2qctXAafeX0hXyAuLfIwWBvU0fhY3Rj5GAQ90D3nnIKtRQ8gVSWG/qAkIXvSogaPmDflhwTgO9oPYsEP2rjgYGPuDfuBDe4eHc2wBtaq7G1eUrhjFzEvS+/RX986xN077OvjumUXh4rFx9KI6NNNYsZSF6cp8tX94H0A/eNMt1/IFO6tkbD5dGAezVGMPvivt54hubS+zJL65laZujgd3VRVx2eD10N3H+BS9YXHDufTj1qPh09p/RSIPwMC8/dADjY7OkfpLf6BvkMyNzu8rX9dT9+gm58trem9bN+PnTPGWdkZueyGdptj9mYBS6lMxY+Sm8QNNrriZ3lcOQJWs5wwGch+zIsP5zJ+WgRNGwinuBfBB5DcNBoH7WNVv/F+adOX0ZnullZCxsHhqvWPFJ1lq7lCf7xabpY0CJm9p0xaHNWT2zJoZCZgzvcD4D2eQBUDL4cGMkgDrrBxovgMfh43fBEsrWlk55rnU3PT5rD63Csx2GlPSuBOtbJ1zy8ns76xlq+kig/wXqHm9n/4th5VW9OQh58ZsPlhfxYuC6u85f+gIl4M32oSsa1NSJJzNCYjTkJXwZz9aJZGrMyfH1+Wmbr0cWLqeuuu/j78Bap2xvoNci4xD17uJeuOG0xLZ47gy797oMVDwzD65LdMPeeey7RunWZmZlLtx2LHOZ9ETbqInAYix+4GGi0GTotQQPvw1jMvg4Ri8BlySHCDoL2dQgb7/Wbes01LkL01w833htkRdjybA7M8vHvC/Ga5H8/tfTosp1f/CIN33FHRsQi6jBj+zYRs56xufQmYua69+uFLTkqIB0uA5ExGTCU3jCobM4fcoOPS8MA785eOmNsNy9NNDizgjMsONOytbn8uXbYX+w3QB7IR+coOQexShkbtnHlgUIygg6d7gdATGBf2qJBZIPvDQMOeQxcfz0N3H03vwj+306e03CiBhD2xpbS1UsB+4n9xX5j//txv4aLw3SekrvuD+kf3X/ic921AWlrNJBH0vBA+AGKBw8lm/f1zAVDve/yy2lw7Vqa1d5C3zxtLv833shg/7Cf2F/sN/Y/FjLnKTHvx2LWsZi8WKOA/T7gkQ4OHS2Do4wHKKrLoLGP0hkGmw+OvEEMuz796TBTY02KA61GBPuF/ZOZGfuN/Q/5wHcmuYa8UXrTfQTieqPjxtNldKDjDuJ0Euz7WMZ8TA4M5aBRn5uOfTlghD/Z32YK8Lrh657aNqHnqWsF55lxau4jR5Tuh8aaWZYZEDJEq30RN/uuzPyjRt3HtJhZ0C4G2Pdgu3piZzmAE5xOIvg+HszXWdC+Hs56+FL7WtSo4yxIK85+4MX2ro6LL195ZvuEXVGsBVwBvHzpDD7PDMHtvOoqPgCEgMvEq3wRcxCxL8UvEzPwcYF9F6snJmjgxBUnwXUXFx8G8SKmBY04RKtn6oyo0e5jEDTKpsWL+UXwrStWuAjxu//wUstafu1SL3CjEe7NwJthAS6a9F13HY2uW8ciDYJ2ZZiZfUxErEv0VJGgGRcDoe5g38frhQkaOJEBnUjwXRv8jPkYixqlq8tMHUpnWtQ6xgJ35aTVq6nj0kv53g8AYd+xvrfmV8ONB9zPjFtARci4N6Pvppv4CqCIN28WjmPxjMyl8gHX4bgYKPVyieD7tnphggZOYIJOJviuHX7GfExmahay94OApVSxuMQrhtsuvphfN4xbTwGWInh12k839tVl1sZs/L6DO+isBaWb8wFuAcVdcwO33EJNvb254tUiZvH6WCUxc6lMC5brnuCr9npgggYQlkISCon5dtQz5uIoi0RdSdxxG4SN1w23rVrFP7gV8LYpvKAH7zTBayDw5Hw8bLxncIQfaYu/j73Ds+bweC480QgPgcFzM/CoAfw6G2ctBPzSBDfnD91+O98CGgu1qoil9DH8be1rY1wchLpD+yboicCJSqMTCr7bRnyUwXw8T9RBxDWUQeDO8IZWvNSy9dRTM+IeL/xzqYcfpqH77uOfTbFonZWJtEoZtvc+ek372hgXB6HuydT9NvXCBA2cmGJ0UsH326GeMRdHKcLUvhat9kXAsk3YVsec4T2AeHUa3jaFF/TgnSb8Ggg3o/PD1t22EAWeAooHJ+JZc3g8F55ohIfA4LkZqGshxj5KPUPrbbSYkX2Rr41xcRDqnrhugp4IIIqIOKlQ99uinjEXRylCrChUFdMC5zLy8fdC3BveaQK43YMIhkIyQRnMx0WALFTljyUWvkfVxQCXLh58j/Yz+G3rhQkaeIHExImFuttefJTBfFwLM9Sdr8tMLGrX3yGCBrydNy1qeDIM8LWBPCFqocIgLPHjdvlM/B1cegNcuriQiRehtq8HJmjgxZFHnFyoe+EBlMF8HMZC9IKUttjX22hfvkP+jjbGxcvwQ4EWbYiLD0HG4pV4NT9YVAdS6n0QtF+G375emKBBnjgidJLB959DXZuIUAtTz7xoD23xtr4uJt+ViQmuLaCGAVFtWtBsvl4mXFUv285b2XchBlxcCDGH9nNRn6sHJmighVFAnGSo+8+iLjHxY3HqughbfJSoB2H7evB9KX7uPvuhQIu0Bl8JEQKVeq6Qq9SB9ovEDOJ6Geqz9cAEDfLEkUOcaKj7z6MuMfHLRO1MC1ULW1tuDPi/BULMkcnAiw+gFNOiDhbF9DYidh0D2teCDDFPXM9Ffb4emKCBEkk14mRD3X+H1FGKgWrCLooBiQdfgXqukPywwJf24CuBVopB7EDHgJT6b8TkxXLx31EvTNDAi2Us6KSDr74HMYkHv0CscRvQcaDjlZA9CHsSiRIE37WJH2IoK30GqCEPMU9cr0qd5WOCBnspaJCpF4gQZfDVNmXtBW2C9jU6C/HjUkQMUGorEr8ui8Ss/TFhgp4AxiFoECeeqavvlDhK7TNuuzietw0I9SqEv5wjPpRlvhKylNoP1FvMwAQ9AYxT0CAv+UwsR4zix6WIG6AMcUeRL8QZ5AkuU+aIWJcg+AVCFvJiNWOCngD2QtBCXidkYupv6Lj4cckogYNMWwV0NsGPBAzEz90eVBEyKIrXjAl6AqiDoIW8ziiLVRE3KPKZvP0tGAa9ZS0+sy+ELDSYoPkcvbGHvIFGLBPHIPqB1G3ix6av1LG5z5ZZvI2zss8pA9oP+wTzhDZF5jMJYoLOoWjAy8SgRCRtRVZJnHlWy/b672tCuyIvliJucoh6wzD2I7bkMAyFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpTNBGUpigjaQwQRtJYYI2ksIEbSSFCdpIChO0kRQmaCMpmkYd3jeM/U5PT4/39nDhhRd6r5xbb73VeyVshjYanli0Ql7cBG0cEMTiLRK5Cdo4YBARF4kZ2BraaCjy1tBjwWZoIylM0EZSmKCNpDBBG0lhgjaSwgRtJEXTeeedZ6ftjGRoOuGEE0zQRjLYksNIChO0kRQmaCMpTNBGQhD9P50by2w8jj6SAAAAAElFTkSuQmCC)

## Custom bot style[​](#custom-bot-style "Direct link to Custom bot style")

You can change default bot buttons style.

## Notification[​](#notification "Direct link to Notification")

If you are using notifications functionality you should set logo and notification details here.

## FAQ[​](#faq "Direct link to FAQ")

### How do I make custom status icon?[​](#how-do-i-make-custom-status-icon "Direct link to How do I make custom status icon?")

In `Custom CSS` tab do the following changes.

In `Status widget additional CSS, takes effect after save` enter

```
#lhc_status_container #status-icon:not(.offline-status):before, #lhc_status_container .lhc-icon-online:before {  
    content: url("data:image/svg+xml,%3Csvg%20class%3D%22w-20%20h-20%22%20xmlns......."); /*SVG content urlencoded*/  
}
```

### How do I make status icon smaller?[​](#how-do-i-make-status-icon-smaller "Direct link to How do I make status icon smaller?")

In `Custom CSS` tab do the following changes.

In `Status widget additional CSS, takes effect after save` enter

```
#lhc_status_container{   
    bottom:3px!important;  
    right:3px!important;  
    padding-left:3px!important;  
    padding-top:3px!important;  
}  
  
#lhc_status_container #status-icon{  
    box-shadow:none!important;  
    padding:5px!important;  
}
```

In `Custom page CSS (new widget only)` enter

```
#lhc_container_v2 #lhc_status_widget_v2{   
    min-height: 65px!important;  
    min-width: 65px!important;  
    max-height: 65px!important;  
    max-width: 65px!important;  
    width: 65px!important;  
    height: 65px!important;  
}
```

### How do I place new widget at the bottom left corner using custom CSS section?[​](#how-do-i-place-new-widget-at-the-bottom-left-corner-using-custom-css-section "Direct link to How do I place new widget at the bottom left corner using custom CSS section?")

Create a new theme and make it default or just choose it while generating an embed code

In `Custom CSS` tab do the following changes.

In `Widget container additional CSS, takes effect after save` enter

```
  left:30px;
```

In `Widget body additional CSS, takes effect after save` enter

```
.proactive-need-help{  
  border-radius:10px!important;  
  border-bottom-left-radius:0px!important;  
}
```

In `Custom page CSS (new widget only)` enter

```
#lhc_container_v2 #lhc_status_widget_v2{   
        left:20px!important;  
}  
  
#lhc_container_v2 #lhc_widget_v2{  
    left:50px!important;;  
}  
  
#lhc_container_v2 #lhc_needhelp_widget_v2{  
    left:45px!important;  
}
```

That's it.

### I have created a theme, how can I share it with community?[​](#i-have-created-a-theme-how-can-i-share-it-with-community "Direct link to I have created a theme, how can I share it with community?")

Community Themes will be published in github.

<https://github.com/LiveHelperChat/themes>

Few samples how widget look can be styled using widget themes in back office and start chat form settings. There was no file changes except back office settings.

![](/assets/images/theme-chat-1-a5b64ac1f8d46b338a5a23b479d47360.png)

![](/assets/images/widget-theme-2-81c90e9e4761b5b4ae4acae81d5d8c16.png)

![](/assets/images/widget-theme-3-6dea95c860c3525c20288f1282b04cdd.png)

![](/assets/images/widget-theme-4-53fc1e50c9631c11101f96c27dc698fc.png)

### How do I apply a theme?[​](#how-do-i-apply-a-theme "Direct link to How do I apply a theme?")

You can either set default theme in back office or you can choose theme in embed code generation window.

### How do I import a theme?[​](#how-do-i-import-a-theme "Direct link to How do I import a theme?")

Navigation to

> "System configuration" -> "Live help configuration" -> "Import new theme"

In this window just upload a new theme.

### How do I apply imported theme, set the default one?[​](#how-do-i-apply-imported-theme-set-the-default-one "Direct link to How do I apply imported theme, set the default one?")

- You can set default theme in
  > Configuration -> Live Chat configuration -> Default theme
- Also you can apply themes individually to embed code by selecting combobox in widget generation window. So you can just choose which theme widget should use.

### How do I pass theme to start chat window?[​](#how-do-i-pass-theme-to-start-chat-window "Direct link to How do I pass theme to start chat window?")

Theme argument is /(theme)/<theme\_id> so you can just manually write what theme should use. E.g index.php/chat/start/(theme)/2

### I have created a theme and want to share with community where should I send a theme file?[​](#i-have-created-a-theme-and-want-to-share-with-community-where-should-isend-a-theme-file "Direct link to I have created a theme and want to share with community where should I send a theme file?")

Just send it to me. [remdex@gmail.com](mailto:remdex@gmail.com)

### How to avoid visitors finding out existing themes?[​](#how-to-avoid-visitors-finding-out-existing-themes "Direct link to How to avoid visitors finding out existing themes?")

Just set an alias in widget theme. Theme won't be used if not valid theme alias is passed as argument.

## Permissions for themes management[​](#permissions-for-themes-management "Direct link to Permissions for themes management")

In order operator to be able edit themes, set default theme he has to have this permission

> 'lhtheme', 'administratethemes'

Manage abstract objects

> 'lhabstract','use'

## Permissions for personal themes[​](#permissions-for-personal-themes "Direct link to Permissions for personal themes")

Give permission to manage personal themes

> 'lhtheme','personaltheme'

Manage abstract objects

> 'lhabstract','use'

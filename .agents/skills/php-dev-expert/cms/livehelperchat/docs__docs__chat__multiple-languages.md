# Multiple languages support general workflow | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/chat/multiple-languages

---

On this page

## Introduction[​](#introduction "Direct link to Introduction")

Live Helper Chat support many languages sometimes it's confusing how to use Live Helper Chat in multiple language environment. I'll give basic tips how to have it properly setup.

- So first thing if possible you should generate Embed Code and use `Choose a language` option in that window.
- If above is not possible you can setup theme and just `Widget container section` check `Try to detect language from browser headers option`
- If you are using static URL e.g `chat/start`, `chat/begin`, `/` etc. You can change default `siteaccess`. See below.
- For static URL you can also just append language to url E.g `/fre`, `/fre/chat/start`
- You can also use [widget themes](docs__docs__theme.md) and translate basic texts there
- [Read how to override default translations](docs__docs__language.md#how-to-override-default-translations)

If you want you can also use [extension to translate text](https://github.com/LiveHelperChat/livehelperchat-extensions/tree/master/overridetranslation/translations)

## How to change default language (`siteaccess`)?[​](#how-to-change-default-language-siteaccess "Direct link to how-to-change-default-language-siteaccess")

If you are not using embed code, where you can choose a langauge, chat language is english. You can change default language by editing `settings/settings.ini.php` file and changing.

```
'default_site_access' => 'eng', // Change to fre as example.
```

You should set to one of the available [siteaccess options](https://github.com/LiveHelperChat/livehelperchat/blob/master/lhc_web/settings/settings.ini.default.php#L32) you can also add a new language [language](docs__docs__language.md)

You should click clear cache in back office after you have changed this value.

If you want that widget themes translations `Main` tab content would be used in your language add your language to `['default_site_access_list'] => ['eng','lit']`. E.g we will use `Main` translation if widget language is `lit` or `eng`. [Setting location](https://github.com/LiveHelperChat/livehelperchat/blob/4.52v/lhc_web/settings/settings.ini.default.php#L29)

## How to apply multiple languages for `Canned messages`, `Auto responder`, `Pro active chat invitations`?[​](#how-to-apply-multiple-languages-for-canned-messages-auto-responder-pro-active-chat-invitations "Direct link to how-to-apply-multiple-languages-for-canned-messages-auto-responder-pro-active-chat-invitations")

These objects has an option to be translated directly in their editing windows.

## How to have multi language bot?[​](#how-to-have-multi-language-bot "Direct link to How to have multi language bot?")

Refer to [language](docs__docs__bot__multiple-languages.md) document.

## How to add completely new language?[​](#how-to-add-completely-new-language "Direct link to How to add completely new language?")

Refer to [language](docs__docs__language.md) article.

## I have translated auto responder,canned messages etc... but language is still incorrect?[​](#i-have-translated-auto-respondercanned-messages-etc-but-language-is-still-incorrect "Direct link to I have translated auto responder,canned messages etc... but language is still incorrect?")

- You should check what value got `chat_locale`. You can do that by going to chat window and clicking edit icon and view Debug tab

![](/assets/images/chat-locale-e7de3de80cde9bf027e2e31424e0e14f.png)

- After that you should check what language you have checked and what locales it has assigned.

![](data:image/png;base64,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)

- In this particular case all is good because chat is in `sv` locale and assigned langauge also has this value `sv`
- If for some reason `chat_locale` is not represented in the language, although it should. You can add missing language in `System configuration -> Speech -> Dialects`
  - There you can find already existing language and add short code if it's missing
  - You can also add a new item completely

## Live Helper Chat does not detect correct language?[​](#live-helper-chat-does-not-detect-correct-language "Direct link to Live Helper Chat does not detect correct language?")

- Check above steps that that everything is ok.
- Live Helper Chat uses `System configuration -> Languages` to determine what `siteaccess` should be used by visitor language. Each language has assigned `Dialects`. It is important that a langauge should have a correct `Dialect` and correct `Language Code` and `Short code` values.
- Once visitor comes to website we first try to find hist locale by browser headers.
- If `siteacess` (`lit`,`fre`) etc... is provided it overrides `chat_locale` by `siteaccess` `content_language` attribute value.

```
// Detect user locale  
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {  
    $parts = explode(';',$_SERVER['HTTP_ACCEPT_LANGUAGE']);  
    $languages = explode(',',$parts[0]);  
    if (isset($languages[0])) {  
        $chat->chat_locale = $languages[0];  
    }  
}  
  
// We set custom chat locale only if visitor is not using default siteaccss and default langauge is not english.  
if (erConfigClassLhConfig::getInstance()->getSetting('site','default_site_access') != erLhcoreClassSystem::instance()->SiteAccess) {  
    $siteAccessOptions = erConfigClassLhConfig::getInstance()->getSetting('site_access_options', erLhcoreClassSystem::instance()->SiteAccess);  
    // Never override to en  
    if (isset($siteAccessOptions['content_language']) && $siteAccessOptions['content_language'] != 'en') {  
        $chat->chat_locale = $siteAccessOptions['content_language'];  
    }  
}
```

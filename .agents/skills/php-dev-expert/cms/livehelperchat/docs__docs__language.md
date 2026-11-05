# How to add new language? | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/language

---

On this page

In order to install new translation you have to download lhc from github or just [click this link](https://github.com/remdex/livehelperchat/archive/master.zip). Archive contains two folders:

1. lhc\_dc - contains desktop client
2. lhc\_web - contains desktop client

You now can make translations directly on <https://www.transifex.com/projects/p/live-helper-chat/>

I constantly update live helper chat translations based on transifex updates. So the easiest way to have a new language just translate it there and I will add it automatically to live helper chat.

## How configure Live Helper Chat header detection languages?[​](#how-configure-live-helper-chat-header-detection-languages "Direct link to How configure Live Helper Chat header detection languages?")

Recent version already have it configured but if you want to play around see. In

> System configuration -> Speech

You can find few usefull links

- `Languages` - it's all defined languages in Live Helper Chat. Where each language can be mapped to a specific siteaccess.
- `Dialects` - dialects is basically a short code for a langauge. When we do language detection from browser we are looking to match one of these.

[More information](docs__docs__chat__multiple-languages.md)

## Installing translations for web client.[​](#installing-translations-for-web-client "Direct link to Installing translations for web client.")

Let say we are installing Russian language, the workflow would be the following.

1. Add siteaccess

```
 'available_site_access' =>    
       array (    
         0 => 'eng',    
         1 => 'lit',    
         2 => 'hrv',    
         3 => 'esp',    
         4 => 'por',    
         5 => 'nld',    
         6 => 'site_admin',    
       ),
```

Change to

```
 'available_site_access' =>    
       array (    
         0 => 'eng',    
         1 => 'lit',    
         2 => 'hrv',    
         3 => 'esp',    
         4 => 'por',    
         5 => 'nld',    
         6 => 'rus',  
         7 => 'site_admin',    
   ),
```

Now you have to add new siteaccess. It will be similar to the one you see bellow

```
 'site_access_options' =>    
     array (    
       'eng' =>    
       array (    
         'locale' => 'en_EN',    
         'content_language' => 'en',    
         'default_url' =>    
         array (    
           'module' => 'chat',    
           'view' => 'startchat',    
         ),    
         'theme' =>    
         array (    
           0 => 'customtheme',    
           1 => 'defaulttheme',    
         ),    
       ),
```

Our new siteaccess description will look like:

```
 'site_access_options' =>    
     array (    
       'rus' =>    
       array (    
         'locale' => 'ru_RU',    
         'content_language' => 'ru',    
         'default_url' =>    
         array (    
           'module' => 'chat',    
           'view' => 'startchat',    
         ),    
         'theme' =>    
         array (    
           0 => 'customtheme',    
           1 => 'defaulttheme',    
         ),    
       ),
```

Now let say you want to change site\_admin (our back office language). You just have to change

```
 'site_admin' =>    
       array (    
         'locale' => 'ru_RU',    
         'content_language' => 'ru',    
         'theme' =>    
         array (    
           0 => 'customtheme',    
           1 => 'defaulttheme',    
         ),    
         'login_pagelayout' => 'login',    
         'default_url' =>    
         array (    
           'module' => 'front',    
           'view' => 'default',    
         ),    
       ),
```

That's all.

## Installing translations for desktop client.[​](#installing-translations-for-desktop-client "Direct link to Installing translations for desktop client.")

Now you have to enter "dc" folder and copy two files to desktop client "translations" folder. Then you have to edit "settings.xml" file and edit `<language>en</language>` variable.

To compile desktop client translation you have to use QT Linquist application. It can be downloaded from:  
<https://code.google.com/p/qtlinguistdownload/downloads/list>

## Recomendation for languages translations[​](#recomendation-for-languages-translations "Direct link to Recomendation for languages translations")

- English (en\_EN) - it's default system language and no translations file is needed.
- Lithuanian (lt\_LT) - it's my native language :), so I make translations to this language.
- Danish - (da\_DA) (Based on google translations)
- German - (de\_DE) (Based on google translations)
- Spanish - (es\_ES) (Based on google translations)
- French - (fr\_FR) (Based on google translations)
- Indian - (hi\_HI) (Based on google translations)
- Italian - (it\_IT) (Based on google translations)
- Japan - (ja\_JA) (Based on google translations)
- Norwegian - (no\_NO) (Based on google translations)
- Portugal - (pt\_PT) (Based on google translations)
- Russian - (ru\_RU) (Based on google translations)
- Czech - (cs\_CS) (Based on google translations)
- Croatia - (hr\_HR) (Based on google translations)
- Icelandic - (is\_IS) (Based on google translations)
- Finnish - (fi\_FI) (Based on google translations)
- Romanian - (ro\_RO) (Based on google translations)
- Swedish - (sv\_SV) (Based on google translations)
- Belarusian - (be\_BE) (Based on google translations)
- Ukrainian - (uk\_UK) (Based on google translations)
- Turkish - (tr\_TR) (Based on google translations)
- Polish - (pl\_PL) (Based on google translations)

## I have updated translation file but still I see untranslated text?[​](#i-have-updated-translation-file-but-still-i-see-untranslated-text "Direct link to I have updated translation file but still I see untranslated text?")

- Clear cache in back office.
- If you are updating widget text also disable network cache in chrome to be sure new content is delivered.

## How to switch from LTR to RTL language, how to add RTL language?[​](#how-to-switch-from-ltr-to-rtl-language-how-to-add-rtl-language "Direct link to How to switch from LTR to RTL language, how to add RTL language?")

Since 1.30v we have support for full RTL language.

Section example

```
'lit' =>  
      array (  
        'locale' => 'lt_LT',  
        'content_language' => 'lt',  
          'dir_language' => 'ltr',  
        'title' => '',  
        'description' => '',  
        'theme' =>  
        array (  
          0 => 'customtheme',  
          1 => 'defaulttheme',  
        ),  
        'default_url' =>  
        array (  
          'module' => 'chat',  
          'view' => 'startchat',  
        ),  
      ),
```

So if you want that it would be RTL just write `RTL` instead of `LTR`

Languages which may require RTL support. We do not have at the moment translated any of these languages. But now you can be sure, that it will work 100% with Live Helper Chat

- Arabic: ar
- Chinese: zh
- Farsi: fa
- Hebrew: he, iw
- Japanese: ja
- Urdu: ur
- Yiddish: yi, ji

Example of back office RTL language. Dark theme does not support RTL language.

```
'site_admin' => array (  
    'locale' => 'he_HE',  
    'content_language' => 'he',  
    'dir_language' => 'rtl',  
    'theme' =>  
        array (  
          0 => 'customtheme',  
          1 => 'defaulttheme',  
        ),  
    'login_pagelayout' => 'login',  
    'default_url' =>  
        array (  
            'module' => 'front',  
            'view' => 'default',  
        ),  
),
```

So if anyone will translate to any of these languages, please send me translation.

## How to override default translations?[​](#how-to-override-default-translations "Direct link to How to override default translations?")

Create an extension with the following structure. In this case we are overriding `lt_LT` and `en_EN` translations. Source on [github](https://github.com/LiveHelperChat/livehelperchat-extensions)

```
overridetranslation  
    translations  
        lt_LT (change folder name to your language)  
            translation.ts  
        en_EN (override english translations)  
            translation.ts
```

`translation.ts` file content can look like

```
<?xml version="1.0" ?><!DOCTYPE TS><TS language="lt">  
  <context>  
    <name>system/configuration</name>  
    <message>  
    <source>Browse offers embed code</source>  
    <translation>Default translation changed</translation>  
    </message>  
  </context>  
  <context>  
    <name>extensioncontent/extensioncontent</name>      
    <message>  
      <source>Only in extesnion found text</source>  
      <translation>Completely new context</translation>  
    </message>  
  </context>  
</TS>
```

Activate extension in `lhc_web/settings.ini.php` file

```
...  
'extensions' =>   
      array (  
        'overridetranslation'  
      ),  
...
```

After you modify translations file you have to click `System -> Clean cache`. You might need to click few times to effect.

It's possible to change some main text directly in [widget themes](docs__docs__theme.md#chat-widget)

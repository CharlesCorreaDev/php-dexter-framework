# Upgrade Localization — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_localization.html

---

# Upgrade Localization[](#upgrade-localization "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Language Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/language.html)
- [Localization Documentation CodeIgniter 4.x](outgoing__localization.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- In CI4 the language files return the language lines as array.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Specify the default language in **Config/App.php**:

   ```
   <?php

   namespace Config;

   use CodeIgniter\Config\BaseConfig;

   class App extends BaseConfig
   {
       // ...

       public string $defaultLocale = 'en';

       // ...
   }
   ```
2. Now move your language files to **app/Language/<locale>**.
3. After that you have to change the syntax within the language files. Below in the Code Example you will see how the language array within the file should look like.
4. Remove from every file the language loader `$this->lang->load($file, $lang);`.
5. Replace the method to load the language line `$this->lang->line('error_email_missing')` with `echo lang('Errors.errorEmailMissing');`.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

// error.php
$lang['error_email_missing']    = 'You must submit an email address';
$lang['error_url_missing']      = 'You must submit a URL';
$lang['error_username_missing'] = 'You must submit a username';

// ...

$this->lang->load('error', $lang);
echo $this->lang->line('error_email_missing');
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

// Errors.php
return [
    'errorEmailMissing'    => 'You must submit an email address',
    'errorURLMissing'      => 'You must submit a URL',
    'errorUsernameMissing' => 'You must submit a username',
    'nested'               => [
        'error' => [
            'message' => 'A specific error message',
        ],
    ],
];

// ...

echo lang('Errors.errorEmailMissing');
```

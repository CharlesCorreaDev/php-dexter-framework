# Internationalization — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/i18n.html

---

# Internationalization[](#internationalization "Permalink to this heading")

Make your UI translatable into many different languages.

If you’d like to contribute translations to Elgg, see [the contributors’ guide](contribute__i18n.md).

The default language is `en` for English. Elgg uses a fallback system for languages:

1. The language of the user
2. The site language
3. English

## Overview[](#overview "Permalink to this heading")

Translations are stored in PHP files in the `/languages` directory of your plugin. Each file corresponds to a language. The format is
`/languages/{language-code}.php` where `{language-code}` is the ISO 639-1 short code for the language. For example:

```
<?php // mod/example/languages/en.php

return [
        'example:text' => 'Some example text',
];
```

To override an existing translation, include it in your plugin’s language file, and make sure your plugin is
ordered later on the Admin > Plugins page:

```
<?php // mod/better_example/languages/en.php

return [
        'example:text' => 'Some better text!',
];
```

Note

Unless you are overriding core’s or another plugin’s language strings, it is good practice for the language keys to start with your plugin name.
For example: `yourplugin:success`, `yourplugin:title`, etc. This helps avoid conflicts with other language keys.

## Server-side API[](#server-side-api "Permalink to this heading")

`elgg_echo($key, $args, $language)`

Output the translation of the key in the current language.

Example:

```
echo elgg_echo('example:text');
```

It also supports variable replacement using `vsprintf` syntax:

```
// 'welcome' => 'Welcome to %s, %s!'
echo elgg_echo('welcome', [
        elgg_get_config('sitename'),
        elgg_get_logged_in_user_entity()->getDisplayName(),
]);
```

To force which language should be used for translation, set the third parameter:

```
echo elgg_echo('welcome', [], $user->getLanguage());
```

To first test whether `elgg_echo()` can find a translation:

```
$key = 'key:that:might:not:exist';
if (!elgg_language_key_exists($key)) {
        $key = 'fallback:key';
}

echo elgg_echo($key);
```

Note

Some APIs allow creating translations for new keys. Translators should always include an English translation as a fallback.
This makes `elgg_language_key_exists($key)` a reliable way to predict whether `elgg_echo($key)` will succeed.

## Javascript API[](#javascript-api "Permalink to this heading")

`i18n.echo(key, args)`

This function is like `elgg_echo` in PHP.

Client-side translations are loaded asynchronously. Ensure translations are available by requiring the “elgg/i18n” module:

```
import i18n from 'elgg/i18n';

alert(i18n.echo('my_key'));
```

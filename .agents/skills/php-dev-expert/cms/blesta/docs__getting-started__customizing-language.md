# Custom Language | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/customizing-language

---

Version: 6

On this page

It can be useful to customize the language, which can be done without modifying the language files directly. When done correctly, your changes to the language will survive an upgrade.

Information

The ability to override existing language definitions was added in 5.11+

### Customizing Language[â](#customizing-language "Direct link to Customizing Language")

To customize language:

1. Visit /language/ab\_cd/ where ab\_cd is the language, like en\_us.
2. Find `_override-example.php` and rename it to `_override.php`
3. Add your language overrides by copying the definition from any other language file for this language and pasting it into this file, modifying the language string as desired.

For example, if you want to change a definition found in /language/en\_us/users.php, copy the language string like:

```
$lang['Users.!error.username.empty'] = 'Please enter a username.';
```

And paste it into /language/en\_us/\_override.php with your changes like so:

```
$lang['Users.!error.username.empty'] = 'My custom text here.';
```

### How can I update all clients to use a specific language?[â](#how-can-i-update-all-clients-to-use-a-specific-language "Direct link to How can I update all clients to use a specific language?")

You can run the following query, replacing en\_us with your desired language, like es\_es. Please note that this will update **all clients** to use the language you set. Make sure the language is installed and valid andÂ take a backup of your database before running the query.

```
UPDATE client_settings SET `value` = 'en_us' WHERE `key` = 'language';
```

# Debug mode · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Debug-mode

---

When troubleshooting various issues in Subrion CMS, you may find it beneficial to put your website in debug mode. Enabling the debug system allows you to see details about how Subrion CMS is rendering your site, including:

- Constants Defined
- Profile Information
- Memory Usage
- Database Queries
- Hooks Available

There are two ways to activate debug mode in Subrion CMS. In this article I will try to explain each of them.

## Global debug mode

You can simply enable global debug mode in **includes/config.inc.php** file. Find the line below and change `0` to `1`

```
...
define("INTELLI_DEBUG", 0);
```

*Please note*: this mode activates debug mode for the whole script and everybody, including unauthorized visitors, can see the debug information. Use it carefully on test sites only. It **MUST NOT** be used in production.

## User specific debug mode

You can enable debug mode for your account only. It creates a session for your visitor and you can see the debug information only. *Highly recommended* for customer websites.

Since Subrion CMS 4.1 you can easily activate user specific debug mode in Admin Dashboard top menu.

For versions below 4.1 you need to run the following query in order to activate it:

```
UPDATE `{prefix}config` SET `value` = 'subrion' WHERE `name` = 'debug_pass';
```

Once you run this query you need to clear your script cache - **Admin Panel -> Clear Cache**. You can activate it by passing `subrion` value to GET `debugger` param:

```
domain.com/?debugger=subrion
```

Don't forget to clear the config value once you've successfully completed debugging your website.

## Debug functions

Subrion CMS offers several functions to debug your code.

**\_v()** - *only works when debug mode is enabled*

```
_v($var);
```

**\_vc()** - *works with debug mode turned off. It can be used in production as it prints $var within HTML comments. So you can see the results in HTML source only and it doesn't affect your website look.*

Please note that both these functions are available in Smarty. So you can debug your template variables the same way.

```
{_v($smartyVar)}
```

Ask questions if you have any. We would be happy to assist.

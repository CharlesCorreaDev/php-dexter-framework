# Documentation / Home / Reasons for Blank Pages | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Home/Reasons-for-Blank-Pages

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Reasons for Blank Pages

If when attempting to access the program you are receiving mysterious blank pages, please consider the following potential issues before contacting support:

### Did you change your MySQL database credentials recently?

Make sure that you update your "admin/sd-system/config.php" file to reflect the new credentials.

### Are the paths correct in your settings?

Open the "admin/sd-system/config.php" file and ensure that all paths and URLs are correct.

### Turn on Error Reporting

If all else fails, please open the "admin/sd-system/loader.php" file and set the following the lines as follows (roughly lines 14 and 15):

```
error_reporting(1);
error_reporting(E_ALL);
```

Reload the page causing issues. If there is an error onscreen, see if it is something you can manually troubleshoot. If there is no error on screen, go to the "custom" folder in your Zenbership folder and look for an "errors.log" file. Open it and see if the error is something you can easily troubleshoot.

If you can't decipher the error, please create a ticket and include the error in the message so that we can troubleshoot the issue.

### Article Links

- [Did you change your MySQL database credentials recently?](#Did_you_change_your_MySQL_database_credentials_recently)
- [Are the paths correct in your settings?](#Are_the_paths_correct_in_your_settings)
- [Turn on Error Reporting](#Turn_on_Error_Reporting)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2015/08/19.  
Last updated on 2015/08/19.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)

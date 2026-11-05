# Documentation / Home / Server Requirements | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Home/Server-Requirements

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Server Requirements

## Server Requirements

Note that Zenbership needs to be installed directly on your web server, therefore services like Wix or Squarespace will NOT work with Zenbership!

Zenbership is currently NOT compatible with MySQL servers running in STRICT mode. You will need to be able to run your MySQL server in TRADITIONAL mode for Zenbership to work! If you are unsure whether this is possible, please contact your web hosting provider or system admin to inquire.

These are requirements for your web server. You can confirm these with your web hosting provider or system administrator.

- FTP or SSH access to your server (to upload the program's files)
- PHP 5.3+
- Required Libraries and Extensions:
- PDO\_MySQL
- mcrypt
- php curl (for plugins and external connections)
- "Magic Quotes" need to be turned off.
- Contact your web hosting provider to have this turned off if you believe it is turned on!
- Recommended Libraries and Extensions:
- GD
- MySQL 5+
- See highlighted note above about STRICT mode restrictions with Zenbership.

### Recommended Configuration

- Linux-based web hosting
- Apache or Nginx web server
- Ability to run cron jobs (scheduled tasks)
- Without these, you will lose vital functionality.
- Memory\_limit at or above 128Mb (higher is better)
- Zenbership does work on Windows web servers but is not optimized for them. We recommend a Linux-based server.

## Recommended Web Hosting Providers

If you require web hosting, we recommend one of the following providers:

- [Storm on Demand](http://goo.gl/I18Icl)
- [Liquid Web](http://goo.gl/WLMKro)
- [Media Temple](http://goo.gl/xnWFyB)
- [Digital Ocean](http://goo.gl/MlJm3v)

## Local Requirements

These are requirements for your local computer, or any computer that will be using Zenbership. Note that while ideally your server should be linux-based, your local computer can run any operating system, including Windows and Mac, as long as these are met:

- You are using a modern web browser with JavaScript and cookies enabled.
- We recommend either [Chrome 24+](https://www.google.com/intl/en/chrome/browser/), [FireFox 18+](http://www.mozilla.org/en–US/firefox/new/), [Opera 12.1+](http://www.opera.com/computer/windows), [Safari 5.1+](http://www.apple.com/safari/), or [Internet Explorer v10+](http://windows.microsoft.com/en–us/internet–explorer/download–ie).
- Minimum recommend screen resolution of 1024 x 768. Larger resolutions will provide more work space.
- Note that while the member frontend is mobile-friendly, the Zenbership administrative dashboard is not currently designed to be used with mobile devices!

### Article Links

- [Server Requirements](#Server_Requirements)
- [Recommended Configuration](#Recommended_Configuration)
- [Recommended Web Hosting Providers](#Recommended_Web_Hosting_Providers)
- [Local Requirements](#Local_Requirements)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/03/29.  
Last updated on 2017/04/11.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)

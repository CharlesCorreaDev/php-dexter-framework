# Logging In | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/logging-in

---

Version: 6

On this page

### Logging in for the first time a Staff user[â](#logging-in-for-the-first-time-a-staff-user "Direct link to Logging in for the first time a Staff user")

After installation is complete, the initial login occurs automatically.

To log in subsequently, visit [https://www.yourdomain.com/[installation\_directory]/admin/loginand](https://www.yourdomain.com/%5Binstallation_directory%5D/admin/loginand) enter the username and password specified during installation.

URLs without mod\_rewrite

If mod\_rewrite is not supported by the web server, the path will need to be preceded by index.php. For example, **[http://www.yourdomain.com/[installation\_directory]/index.php/admin/login](http://www.yourdomain.com/%5Binstallation_directory%5D/index.php/admin/login)**

Information

If your hosting provider installed Blesta for you, or provided a VM image to do so, and you did not specify a username and password, they may have already set up a login for you. If the system is installed, and a login has not yet been created, accessing the login page will prompt you to create one. Review their documentation, or contact them to determine what you should use to login if you are prompted.

![](/assets/images/loggingin-stafflogin-9fcea1cfd3e04fb7a540f5bf1466699c.png)

### Resetting your Password[â](#resetting-your-password "Direct link to Resetting your Password")

To reset your Staff password, click the **Reset My Password** link from the login page atÂ [http://www.yourdomain.com/[installation\_directory]/index.php/admin/login](http://www.yourdomain.com/%5Binstallation_directory%5D/index.php/admin/login), enter your username, and click "Reset Password". Check your email for a time sensitive link that you will use to choose a new password.

![](/assets/images/loggingin-resetpassword-04a2935af859daab5ac1da9b05f49e82.png)

Clients and Staff members alike may request to reset their password from their respective log in screens by clicking the *Reset Password* link. Users are then asked to enter their username, and, if a match is found, an email with a temporarily link is sent to the address on file. Clicking the link will take the user to a page that will allow them to enter a new password.

By default Blesta will display a success message for all reset requests, regardless of whether or not a match is found. This is a security measure designed to not reveal information about users that may or may not exist within the system. You can disable this feature by modifying the `Blesta.default_password_reset_value` [Configuration File](docs__getting-started__configs.md) value.

The length of time that the reset password link is active for is controlled by theÂ *Blesta.reset\_password\_ttl* Configuration value.

### Logging in From Another Page as a Client[â](#logging-in-from-another-page-as-a-client "Direct link to Logging in From Another Page as a Client")

By default, clients log in at /client/login. Blesta makes use of CSRF tokens by default, so logging in directly from another page will not work by default. To get around this restriction it's necessary to edit your config/blesta.php config file to add an exception. Back up, and then open config/blesta.php in a UTF-8 friendly text editor. Look for this line:

```
Configure::set("Blesta.csrf_bypass", array());
```

Change it to:

```
Configure::set("Blesta.csrf_bypass", array('client_login::index'));
```

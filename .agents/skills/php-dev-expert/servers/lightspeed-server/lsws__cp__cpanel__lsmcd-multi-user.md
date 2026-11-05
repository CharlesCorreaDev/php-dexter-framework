# LSMCD (LiteSpeed Memcached) for MultiUser | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/lsmcd-multi-user/

---

# LSMCD (LiteSpeed Memcached) for MultiUser[¶](#lsmcd-litespeed-memcached-for-multiuser "Permanent link")

Warning

Please note that LSMCD, LiteSpeed’s Memcached replacement, has been deprecated and is no longer supported. We encourage you to try our Redis solution, available in our [cPanel/WHM](lsws__cp__cpanel__whm-litespeed-plugin__wp-cache-management.md#cache-redis-for-users) and [Plesk](lsws__cp__plesk__configuration.md#cache-redis-for-users) plugins.

This facility provides a user interface for those CloudLinux/cPanel users using LSMCD configured with SASL and User-Level security. See [LSMCD Secure User Data Using SASL](https://docs.litespeedtech.com/products/lsmcd/configuration/sasl/#secure-user-data)

This interface is intended for cPanel end-users. Administrators will need to use the command line SASL to create and delete users. This panel lets a user change their own password and see statistics for their specific data in their user-managed LSMCD space.

## Installation[¶](#installation "Permanent link")

Installation must be performed on the system running as root. The process is:

- Download the software
- Install the software by running the installation script.

### Download the Software[¶](#download-the-software "Permanent link")

The easiest way to download the software is to clone the specific git repository. This is done from a root command prompt, after changing to a directory where the software can be stored (`cd /tmp` is often used):

`git clone https://github.com/litespeedtech/lsmcd_cpanel_plugin.git`

### Install the Software[¶](#install-the-software "Permanent link")

To install the software you will need to change to the correct directory where the installation script is stored and execute the script:

```
cd lsmcd_cpanel_plugin/res/lsmcd_usermgr
./install.sh
```

The install should run without errors, but any significant ones will be displayed on the screen. It will determine if lsmcd has been installed and install it if it's not already there.

If you see missing dependencies, particularly concerning Perl and Git, check your `/etc/yum.conf` file. You must not have `perl*` in the exclude list. If it's there, temporarily remove it and try the install script again.

## Administration[¶](#administration "Permanent link")

You must configure LSMCD and SASL using the sasldb method which uses the `saslpasswd2` program. This is described at [LSMCD Security Using SASL](https://docs.litespeedtech.com/products/lsmcd/configuration/sasl/#configuring-sasl)

Users must be created in advance and must match their cPanel user names. Passwords and stats can be managed by the users themselves using the cPanel plugin described here.

## Use[¶](#use "Permanent link")

Once the software is installed, cPanel users will see a new option in their **Advanced** group:

[![!LSCMD Menu Item](../images/lsmcd-multi-user01.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/lsmcd-multi-user01.jpg)

When the item has been selected users will be brought to the main menu:

[![!LSMCD Main Menu](../images/lsmcd-multi-user02.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/lsmcd-multi-user02.jpg)

This screen has 3 groups of data: **Who you are**, **Change Password**, and **Display Stats**.

### Who you are[¶](#who-you-are "Permanent link")

**Who you are** contains the following information:

- User to be used for LSMCD (the logged on user)
- LSMCD server address extracted from `/usr/local/lsmcd/conf/node.conf`. Can be an IP address/port or UDS (Unix Domain Socket).
- Whether SASL security is enabled (the setting of `Cached.UseSasl` in node.conf)
- Whether User Level Security is enabled (the setting of `Cached.DataByUser` in node.conf).

### Change Password[¶](#change-password "Permanent link")

The **Change Password** button will only be enabled if both SASL and user-level security is enabled. This facility is provided as access to a command prompt for running `saslpasswd2`. It is not available to regular users, and regular users need the ability to keep the SASL password consistent with company policy. Press the button to enter the **Change Password** screen.

[![!LSMCD Change Password](../images/lsmcd-multi-user03.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/lsmcd-multi-user03.jpg)

As is common with password change facilities, the new password must be entered twice and must match. Other than requiring a password, no additional password restrictions are placed on the password. When the user enters the new password in both text boxes and presses **Change Password**, the `saslpasswd2` program is run and it is up to that program to validate the new password with system restrictions.

If there are errors, they are displayed in this screen and the user can fix the problem and try again. If the password change is successful, that fact is displayed and the text of the button is changed to **Ok**. When the user presses the button, the main window is redisplayed.

### Display Stats[¶](#display-stats "Permanent link")

To display the Memcached statistics for the user (or the system as a whole if security is disabled), the user can press the **Display Stats** button.

Stats are displayed in the format below, the format determined by LSMCD, and are basically identical to those available from Memcached. The primary difference being that the stats only reflect activity for those transactions done by the user validated by SASL and LSMCD.

[![!LSMCD cPanel Stats](../images/lsmcd-multi-user04.jpg)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/lsmcd-multi-user04.jpg)

Use the browser **Back** button to return to the main window.

# Installation and Configuration | LiteSpeed Plugin | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/da-litespeed-plugin/da-install/

---

# Installation and Configuration[¶](#installation-and-configuration "Permanent link")

## Installation[¶](#installation "Permanent link")

Set up DirectAdmin LiteSpeed Plugin to manage cache installations.

Log in to the DirectAdmin Panel with the `admin` username, or with a user who has admin-level authorizations. Then, navigate to **Extra Features > Plugin Manager** and click **Add New**.

Click **Upload**, and paste this control panel plugin link into the **URL** field: `https://www.litespeedtech.com/packages/da/litespeed.tgz`

In the **Password** section, enter your DirectAdmin user password. Click **Install**.

Once the installation is complete, you should see the **LiteSpeed Web Server Plugin** option listed among **Extra Features**.

## Update the plugin[¶](#update-the-plugin "Permanent link")

Navigate to **Extra Features > Plugin Manager**. Select the LiteSpeed plugin from the list and click **Upgrade**. Alternatively, you can upload the updated plugin package directly.

## Uninstall or disable the plugin[¶](#uninstall-or-disable-the-plugin "Permanent link")

Navigate to **Extra Features > Plugin Manager** and check the box next to the LiteSpeed extension. Click **Delete** to remove it, or **Disable** to deactivate it.

## Switch licenses[¶](#switch-licenses "Permanent link")

You can switch to an Enterprise license from a trial license with the **License Management** section of the LiteSpeed DirectAdmin plugin. Click the **Change License** button, and execute the following:

1. Check **I agree**
2. Check **Use an Enterprise license**
3. Enter your serial number, e.g. `TEST-DRue-zm-m-TEST`
4. Click the **Switch** button

## Switch to Apache when license expires[¶](#switch-to-apache-when-license-expires "Permanent link")

LiteSpeed will automatically switch to Apache if the LiteSpeed license expires. To avoid this behavior, please renew your LiteSpeed license (from the store where it was purchased) *before* the expiration date.

# Installation and Configuration | DirectAdmin | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/directadmin/installation/

---

# Installation and Configuration[¶](#installation-and-configuration "Permanent link")

Video walkthrough

Watch **Set Up LiteSpeed Web Server on DirectAdmin** on [YouTube](https://youtu.be/weiahtGvqkI).

## Before you begin[¶](#before-you-begin "Permanent link")

1. Obtain a LiteSpeed Web Server license from [the LiteSpeed Store](https://store.litespeedtech.com/store/cart.php).
2. Confirm that you have root SSH access on the server.
3. Remove any existing Apache replacements or reverse-proxy layers, such as nginx or Varnish, before you install LiteSpeed Web Server.
4. Verify that your DirectAdmin server is healthy on Apache before migration.
5. Confirm that your firewall allows the required ports: `TCP 80`, `TCP 443`, `UDP 443`, and `TCP 7080`.

If you need help choosing a plan, see [Choosing a License](https://www.litespeedtech.com/products/litespeed-web-server/choosing-a-license).

## Choose an installation method[¶](#choose-an-installation-method "Permanent link")

- Use [Detailed installation](#detailed-installation) for your first deployment or when you want to review every prompt.
- Use [Quick automated installation](#quick-automated-installation) for unattended or bulk provisioning.

## Detailed installation[¶](#detailed-installation "Permanent link")

This method is recommended for first-time installations.

### Run the installer script[¶](#run-the-installer-script "Permanent link")

1. Connect to your server over SSH as root.
2. Run the installer command, replacing `your_serial_no` with your license key:

```
bash <(curl -fsSL https://get.litespeed.sh) your_serial_no
```

Tip

To request a trial license, replace `your_serial_no` with `TRIAL`:

```
bash <(curl -fsSL https://get.litespeed.sh) TRIAL
```

If the trial request fails, see [What if I see a failure message when I request a trial license during installation?](lsws__cp__directadmin__faq.md#what-if-i-see-a-failure-message-when-i-request-a-trial-license-during-installation).

### Respond to installer prompts[¶](#respond-to-installer-prompts "Permanent link")

The script uses [DirectAdmin CustomBuild](https://docs.directadmin.com/webservices/litespeed/) and prompts for DirectAdmin-specific options.

When you run in guided mode, you may see this prompt:

```
Could not find an lsws.options file. We will ask you for your preferred settings instead, but for automated bulk provisioning, you may want to exit and create an lsws.options file. Continue Installer (Y/N)?
```

For a guided installation, enter `Y`, and press `Enter`.

The installer then prompts for PHP versions:

| Prompt | Purpose | Typical input |
| --- | --- | --- |
| `php_version_default` | Sets the primary PHP version. | A supported version shown by the installer |
| `php_version_second` | Adds a second PHP version (optional). | A supported version, or `no` |
| `php_version_third` | Adds a third PHP version (optional). | A supported version, or `no` |
| `php_version_fourth` | Adds a fourth PHP version (optional). | A supported version, or `no` |

### Confirm successful installation[¶](#confirm-successful-installation "Permanent link")

After the script finishes, it displays a success message and a generated **LiteSpeed WebAdmin Console** password.

```
Install finished! Your randomly generated admin password for the LiteSpeed WebAdmin interface on port 7080 is <generated_password>
```

Store this password in a secure location. You can change it later.

If you encounter installation errors, [open a support ticket](https://store.litespeedtech.com/store/submitticket.php?step=2&deptid=1).

## Quick automated installation[¶](#quick-automated-installation "Permanent link")

Use this method for unattended provisioning across multiple servers.

### Create an `lsws.options` file[¶](#create-an-lswsoptions-file "Permanent link")

Place an `lsws.options` file in your installer working directory, or host it internally for download:

```
php_version_default="8.3"
php_version_second="8.4"
php_version_third="no"
php_version_fourth="no"
```

If you are unsure about option values, run [Detailed installation](#detailed-installation) once first.

### Run unattended installation[¶](#run-unattended-installation "Permanent link")

1. Download your prepared options file (example URL shown):

```
curl -fsSL -o lsws.options https://repo.example.com/lsws.options
```

1. Run the installer:

```
bash <(curl -fsSL https://get.litespeed.sh) your_serial_no
```

1. Optional: request a trial license by using `TRIAL` instead of `your_serial_no`.

## Verify LiteSpeed Web Server is running[¶](#verify-litespeed-web-server-is-running "Permanent link")

[![LiteSpeed service status in DirectAdmin](../images/installation04.jpg)](https://docs.litespeedtech.com/lsws/cp/directadmin/images/installation04.jpg)

In DirectAdmin, navigate to **Admin Level > Service Monitor** and confirm that `litespeed` is running.

## Switching between LiteSpeed and Apache[¶](#switching-between-litespeed-and-apache "Permanent link")

Switching between LiteSpeed and Apache should be done through the LiteSpeed Extension or the command line.

You can switch between servers at the command line by using the `cp_switch_ws` script.

Switch to LiteSpeed:

```
/usr/local/lsws/admin/misc/cp_switch_ws.sh lsws
```

Switch to Apache:

```
/usr/local/lsws/admin/misc/cp_switch_ws.sh apache
```

Warning

You may be tempted to switch between servers using commands like `service httpd stop` followed by `service lsws start`. We strongly do not recommend this. The switching process involves several other important steps, and must be done using the LiteSpeed Plugin or the SSH command above.

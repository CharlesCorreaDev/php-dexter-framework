# Trial License | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/trial/

---

# Trial License Installation[¶](#trial-license-installation "Permanent link")

A LiteSpeed Web Server trial gives you 15 free days with a Web Host Professional license, and includes the LiteMage Unlimited option.

Note

You may request two consecutive trials for the same IP address, giving you 30 days to test. If you need more time beyond 30 days, please contact `support@litespeedtech.com` to reset the trial period for your IP address.

## Installation[¶](#installation "Permanent link")

There are multiple ways to install LiteSpeed Web Server with a trial license. Choose the best one for you.

### cPanel, Plesk, or DirectAdmin[¶](#cpanel-plesk-or-directadmin "Permanent link")

Use this method if you are a control panel user switching from Apache.

While logged in as `root`, run the following command to install LiteSpeed and to request a trial license automatically:

```
bash <( curl https://get.litespeed.sh ) TRIAL
```

For more details about installing LSWS with a control panel, please see the following:

- cPanel: [documentation](lsws__cp__cpanel__quickstart.md) | [video](https://youtu.be/1Q2YXsF5vDk?si=GfYV02LXAnh5z8l3)
- Plesk: [documentation](lsws__cp__plesk__installation.md) | [video](https://youtu.be/bsNPCdybt9o?si=4AMz7ZnCoogOxh-v)
- DirectAdmin: [documentation](lsws__cp__directadmin__installation.md) | [video](https://youtu.be/weiahtGvqkI?si=DSa0o-clnWwhe6e7)

### CyberPanel[¶](#cyberpanel "Permanent link")

If you are starting from scratch without Apache or a control panel, we recommend CyberPanel with LiteSpeed Web Server as the easiest option.

While logged in as `root`, run the following command to install CyberPanel and LiteSpeed Web Server with a trial license:

```
sh <(curl https://cyberpanel.net/install.sh || wget -O - https://cyberpanel.net/install.sh)
```

Select `2` for LiteSpeed Enterprise, and input the word `TRIAL` when prompted for a serial number.

For more details about installing LSWS with CyberPanel, please see [CyberPanel's installation documentation](https://community.cyberpanel.net/docs?topic=82) or [our video](https://youtu.be/lp654whKQls?si=EpSOxZwlUnn6XnvR).

### Native LSWS[¶](#native-lsws "Permanent link")

If you are starting from scratch without Apache, and you don't want a control panel, you can install LiteSpeed Web Server in Native Mode.

If you haven't already, [request a trial license](https://litespeedtech.com/products/litespeed-web-server/download/get-a-trial-license) from our website.

[Download the LSWS package](https://litespeedtech.com/products/litespeed-web-server/download) and decompress it.

Your trial license key (`trial.key`) is attached to the email you will receive from `info@litespeedtech,com`. You can download it and send it to your remote server via FTP. After downloading the installation package, copy the license key file to the expanded installation directory (where `install.sh` is located).

Run `./install.sh` as root.

For more information about installing LSWS from the command line, please see the [command-line installation documentation](lsws__installation.md) or the [command-line installation video](https://youtu.be/cRZ0JOz8U_M?si=2Zq1YYw1QjwQKnBQ).

## LiteSpeed Cache[¶](#litespeed-cache "Permanent link")

Caching is essential for optimal LiteSpeed Web Server performance. [Configure your cache root and cache policy](https://docs.litespeedtech.com/lscache/start/#configure-cache-root-and-cache-policy), and then [enable caching](https://docs.litespeedtech.com/lscache/start/#enable-caching).

Once you've installed LiteSpeed Web Server and enabled LSCache, you should see a drop in server load and improvements in TTFB. If you do not notice such a difference, there may be a configuration issue. Please contact `support@litespeedtech.com` for assistance.

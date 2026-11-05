# Installation | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/installation/

---

# Install LiteSpeed Web Server[¶](#install-litespeed-web-server "Permanent link")

We recommend installing LiteSpeed Web Server via `litespeed.sh`, and this is the procedure we cover here in the **New installations** section below. We've also provided instructions for installing LSWS from SSH as `root` as a failsafe.

If you are looking for something else, here are some alternatives:

- [Install LiteSpeed on CloudLinux](lsws__cp__cpanel__cloudlinux.md)
- [Set up LiteSpeed Web Server on Cloud](https://docs.litespeedtech.com/cloud/images/#__tabbed_1_2)
- [Use a LiteSpeed Web Server Docker Image](https://docs.litespeedtech.com/cloud/docker/litespeed/)
- [Use One-Click Script](lsws__script.md)

Video

Watch the [Install LiteSpeed Web Server With a Trial License video](https://www.youtube.com/watch?v=U8TaqYUVHkE).

Tip

If you have already installed LiteSpeed Web Server, and you are trying to activate a new license, follow the [Activate a License](https://docs.litespeedtech.com/licenses/how-to/#activate-a-license) instructions.

## New installations[¶](#new-installations "Permanent link")

cPanel, Plesk, and DirectAdmin users may prefer to use our [pre-configured options](https://litespeed.sh/#lsautomation) to automate the installation process.

Otherwise, install interactively by executing the following command as `root`:

```
bash <( curl https://get.litespeed.sh ) YOUR_SERIAL_NO
```

Replace `YOUR_SERIAL_NO` with the serial number you were given in the Welcome email.

## Failsafe installation[¶](#failsafe-installation "Permanent link")

If the script listed above fails to download or install the software, you can install manually. These steps will not affect your current installations, and there will be no service downtime.

### Download[¶](#download "Permanent link")

Download the LiteSpeed Web Server tarball from the [LiteSpeed Technologies website](https://litespeedtech.com/products/litespeed-web-server/download).

Run the following commands from SSH as `root`:

```
wget https://www.litespeedtech.com/packages/6.0/lsws-6.3.4-ent-x86_64-linux.tar.gz
```

Tip

Replace the values in the above URL to reflect your OS and the version of LSWS you wish to download. For example:

- `lsws-6.3.4-ent-x86_64-linux` — LSWS Enterprise v6.3.4 for 64-bit Linux
- `lsws-6.3.4-ent-x86_64-freebsd` — LSWS Enterprise v6.3.4 for 64-bit FreeBSD

### Unpack[¶](#unpack "Permanent link")

Use the following command to unpack the tarball:

```
tar zxfv lsws-*-ent-x86_64-linux.tar.gz
```

### Run installation script[¶](#run-installation-script "Permanent link")

Access the unpacked folder:

```
cd lsws-*
```

Create a `serial.no` file containing your paid license serial number or your trial key:

```
echo "YOUR_SERIAL_NO" > serial.no
```

Replace `YOUR_SERIAL_NO` with your actual license serial number or trial key. (Double quotes are optional in this context.)

Tip

We do not recommend saving the serial number on a Windows machine.

Run the install script:

```
./install.sh
```

The installer will ask you a number of questions covered in detail in the [LSWS installation documentation](https://www.litespeedtech.com/docs/webserver/install).

## Tips[¶](#tips "Permanent link")

- Select `Upgrade` if you are upgrading a current LSWS installation and want to keep your existing server configuration.
- Choose the default setting when in doubt.
- For the LiteSpeed process `username` and `groupname`, set the same values as you would for Apache. Choosing the LiteSpeed default of `nobody:nobody` may create a file permission problem.

Important

Make sure `https://license.litespeedtech.com` is reachable from your server.

## Install PHP[¶](#install-php "Permanent link")

Enable the LiteSpeed repository and download LSPHP according to [these instructions](https://docs.litespeedtech.com/extapp/php/). You may have a default `php.ini` file installed through RPMs.

## Further reading[¶](#further-reading "Permanent link")

For LiteSpeed license-related questions, please refer to our [Licensing documentation](https://docs.litespeedtech.com/licenses).

For support, please open a ticket with us through your client area.

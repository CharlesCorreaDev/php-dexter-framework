# WebAdmin Console Issues | Troubleshooting | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/ts-webadmin/

---

# WebAdmin Console Issues[¶](#webadmin-console-issues "Permanent link")

Here are some possible reasons why the **WebAdmin Console** may not be available in LiteSpeed Web Server.

## WebAdmin Console disabled by default[¶](#webadmin-console-disabled-by-default "Permanent link")

Starting with LiteSpeed Web Server v6.3.7 build 5 (and v6.4.0RC2 build 3), the WebAdmin Console is disabled by default, and port `7080` shows a **WebAdmin Console Is Disabled** page. To enable it, create an empty `enable_webadmin` file and restart LiteSpeed Web Server:

```
touch /usr/local/lsws/admin/conf/enable_webadmin
/usr/local/lsws/bin/lswsctrl restart
```

The file can be left empty so the WebAdmin Console is available from any IP address.

To restrict access to specific IP addresses or subnets, add the IPs to the file one per line or comma-separated. For example:

```
# allowed WebAdmin clients
127.0.0.1
192.0.2.0/24, 2001:db8::/64
```

Only clients from the specified IP addresses can access the WebAdmin Console. All others get a `403 Forbidden` error. To disable the WebAdmin Console again, remove the file and restart LiteSpeed Web Server.

## LSWS is not running[¶](#lsws-is-not-running "Permanent link")

If LiteSpeed Web Server is not running, the **WebAdmin Console** will not be available. Check whether LSWS is running. If it is running, continue to the next troubleshooting scenario. If it is not running, restart it.

Using `lswsctrl`Using `systemctl`Using `ps`

Check LSWS's status with the following command:

```
/usr/local/lsws/bin/lswsctrl status
```

If you see the following message, restart LSWS with the following command, and then try to access the **WebAdmin Console** again:

```
[ERROR] litespeed is not running
```

```
/usr/local/lsws/bin/lswsctrl start
```

Check LSWS's status with the following command:

```
systemctl status lsws
```

This command will give you one of three different results:

- `active`: LiteSpeed Web Server is running.
- `inactive`: LiteSpeed Web Server is not running.
- `failed`: The server encountered errors and failed to start properly.

If the output displays `inactive`, restart LSWS with the following command, and then try to access the **WebAdmin Console** again:

```
systemctl start lsws
```

If the output displays `failed`, you may need to reinstall LiteSpeed Web Server or [open a support ticket](lsws__index.md#additional-support) for assistance.

Check whether LSWS is running:

```
ps -ef | grep litespeed
```

On cPanel, you may be running Apache instead of LSWS. The following command should show which server is currently running:

```
ps -ef | grep httpd
```

## Error 403 in the WebAdmin Console[¶](#error-403-in-the-webadmin-console "Permanent link")

There is an option to restrict access to the **WebAdmin Console**. If you forget to add your IP address, or if it changes, you can edit the access-control settings in `/usr/local/lsws/admin/conf/admin_config.xml`:

```
<security>
 <accessControl>
   <allow>192.0.2.0</allow>
   <deny>ALL</deny>
 </accessControl>
</security>
```

Put your IP address in the allow list. For multiple IP addresses, use the following format:

```
<allow>192.0.2.0, 192.0.2.1</allow>
```

Save the file and restart LSWS.

## Different admin port[¶](#different-admin-port "Permanent link")

If you are still unable to access the **WebAdmin Console**, check the LSWS admin configuration to determine whether the default listener address, `*:7080`, has changed. If it has, open the correct port.

You can find the admin configuration file at `/usr/local/lsws/admin/conf/admin_config.xml`.

## Firewall is blocking port 7080[¶](#firewall-is-blocking-port-7080 "Permanent link")

In most cases, **WebAdmin Console** access problems are caused by a firewall blocking the port. The **WebAdmin Console** port must be open to make the console accessible from outside the server.

With LSWS started, run the following command from your hosting machine to check whether any processes are listening on port `7080`:

```
netstat -na | grep 7080
```

If a process is listening on the port, take a further step to verify which process it is:

```
curl -i http://localhost:7080
```

If the command returns output similar to the following, the LSWS **WebAdmin Console** is working as intended within your server but is likely being blocked by your firewall:

```
Server:LiteSpeed
```

At this point, check your firewall rules and either add allow rules or remove blocking rules as needed. Use the following command to list your current `iptables` rules:

```
iptables -L
```

If you are using cPanel and CFS, you can add this TCP port to the allow list.

In most scenarios, the steps above should fix the problem.

## CDN issues[¶](#cdn-issues "Permanent link")

If you have recently enabled a reverse-proxy content delivery network, such as QUIC.cloud or Cloudflare, your `example.com` site is now served through a CDN. This means that the origin server is no longer accessed directly.

The CDN may not route requests to `https://example.com:7080` correctly.

You can solve the issue by creating a subdomain for your **WebAdmin Console**, such as `webadmin.example.com`. Access this subdomain directly at `https://webadmin.example.com:7080` so that it does not go through the CDN.

## WebAdmin password rejected after LiteSpeed installation[¶](#webadmin-password-rejected-after-litespeed-installation "Permanent link")

If the **WebAdmin Console** at port `7080` rejects the administrator password after installing or reinstalling LiteSpeed Web Server through the WHM plugin, the installation may have been affected by a password-generation issue in WHM plugin versions `5.3.2.0` through `5.3.5.0`. No password can satisfy the resulting credential, and nothing else on the server is affected.

To reset the WebAdmin password, run the following command as `root` and follow the prompts:

```
/usr/local/lsws/admin/misc/admpass.sh
```

If LiteSpeed is installed in a different directory, substitute the actual installation path. The default **WebAdmin Console** login name is `admin`.

You can reset the password before or after upgrading the WHM plugin. Upgrading the plugin alone does not repair an existing broken credential because the installer writes the password only during installation.

This issue was fixed in WHM plugin v5.3.6.0. If the installer cannot generate a valid password hash, it displays `[WARNING]` messages during installation and points to the `admpass.sh` command before continuing. On a new LSWS installation, **WebAdmin Console** login is disabled until you run `admpass.sh`. An existing installation keeps its previous password.

## Hosting provider blocking connections[¶](#hosting-provider-blocking-connections "Permanent link")

If you have looked at all of these scenarios and are still unable to access the **WebAdmin Console**, your hosting provider may be restricting access to the port. Contact the provider and ask to have the port opened for your access.

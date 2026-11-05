# DDoS Attack Protection | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/antiddos/

---

# Anti-DDoS Attack Protection[¶](#anti-ddos-attack-protection "Permanent link")

LiteSpeed Web Server provides several features that reduce or eliminate the impact of HTTP-level Denial of Service (DoS) and Distributed Denial of Service (DDoS) attacks. You can use built-in LiteSpeed Web Server features or third-party ModSecurity rules, such as OWASP, Atomicorp, Comodo, and CloudLinux Imunify360. The following built-in configuration settings can help mitigate these attacks.

## Layer 7 attacks: Enable reCAPTCHA[¶](#layer-7-attacks-enable-recaptcha "Permanent link")

One of the most effective ways to mitigate DoS and DDoS attacks is to enable reCAPTCHA. reCAPTCHA is a free Google service that helps protect websites from spam and abuse. A CAPTCHA is a Turing test that distinguishes humans from bots. It is easy for humans to solve but difficult for bots and other malicious software. reCAPTCHA is supported in LiteSpeed Web Server 5.4 and later. See [these instructions](lsws__cp__cpanel__recaptcha.md) to enable reCAPTCHA.

## Enable LiteSpeed Cache[¶](#enable-litespeed-cache "Permanent link")

Enabling LiteSpeed Cache increases the server's capacity to handle heavy traffic.

LiteSpeed Cache improves site load speed and handles increasingly high traffic volumes. Although LiteSpeed Cache cannot block a DDoS attack, it can help the server handle hundreds or thousands of times more requests per second. This can lessen the impact of DDoS attacks. See [these instructions](lsws__cp__cpanel__lscache.md) to learn how to enable LiteSpeed Cache. On a cPanel server, you can use [LiteSpeed Cache Manager](lsws__cp__cpanel__wp-cache-manage.md) to enable LiteSpeed Cache for multiple sites at once.

## Layer 4 attacks: Use Per-Client Throttling[¶](#layer-4-attacks-use-per-client-throttling "Permanent link")

LiteSpeed Web Server includes the built-in **Per-Client Throttling** feature, which allows you to block abusive IP addresses.

Navigate to **Configuration > Server > Security > Per-Client Throttling** to configure limits for requests, bandwidth, and connections from each remote IP address.

### Request throttling[¶](#request-throttling "Permanent link")

Separate controls are available for throttling requests for static files and dynamic content.

### Bandwidth throttling[¶](#bandwidth-throttling "Permanent link")

The server allows separate inbound and outbound bandwidth limits.

- Bandwidth values are rounded up in `4 KB` increments.
- Set a value to `0` to disable throttling.
- The **Outbound Bandwidth** limit allows the server to serve more unique clients and prevents a small number of clients with fast network connections from consuming limited network bandwidth.

### Connection throttling[¶](#connection-throttling "Permanent link")

These settings control concurrent connections from a single client IP address and help protect against DoS attacks.

- **Connection Hard Limit** controls the number of concurrent connections allowed from one IP address. If an IP address reaches the hard connection limit, the web server immediately closes newly accepted connections from that IP address and moves on to pending connections from other IP addresses. Most web browsers support keep-alive connections, which allow multiple requests through one connection, so normal browsing requires few connections. Typically, one connection is enough, although some browsers establish additional connections to speed up downloads. Allowing `4` to `10` connections from one IP address is recommended. Lower values may affect normal web services.
- Use **Connection Soft Limit**, **Grace Period**, and **Banned Period** to identify and mitigate abusive clients. An IP address that remains above the soft limit for the length of the grace period is banned for the duration configured in **Banned Period**. This can help identify IP addresses that should be added to the **Denied List**.

Note

The number of connections can temporarily exceed the soft limit during the grace period if it remains below the hard limit. After the grace period, if the number remains above the soft limit, no additional connections from that IP address are allowed for the duration of the banned period.

### Example[¶](#example "Permanent link")

Default settings:

[![Per-Client Throttling default settings](../images/antiddos01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/antiddos01.png)

Updated settings:

[![Per-Client Throttling updated settings](../images/antiddos02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/antiddos02.png)

- **Static Requests/second**: `40`
- **Dynamic Requests/second**: `2`
- **Outbound Bandwidth (bytes/sec)**: `0`
- **Inbound Bandwidth (bytes/sec)**: `0`
- **Connection Soft Limit**: `15`
- **Connection Hard Limit**: `20`
- **Block Bad Request**: `Yes`
- **Grace Period (sec)**: `15`
- **Banned Period (sec)**: `60`

An IP address that establishes more than `20` connections with the web server, or remains above `15` connections for more than `15` seconds, is treated as a DoS attacker. The server bans the IP address for `60` seconds and records an entry in the error log. To exclude an IP address from the client-throttle limits and bypass DDoS detection, add a trailing `T` to the IP address in **Allowed List**. Navigate to **WebAdmin Console > Server > Security > Access Control**.

Adjust the hard limit based on an attacker's strategy. If a botnet is not aggressive, lower the limit to just below its maximum connections per IP address without affecting regular visitors. If attackers make very few connections per IP address, do not use the hard limit to detect them.

Find blocked IP addresses in the real-time statistics report.

If you use a CDN with real visitor IP addresses enabled, an IP address forwarded by the CDN may be blocked if the soft or hard limit is too low. To disable this type of blocking or Per-Client Throttling, set the connection limits to very large values, such as `100000` and `150000`, respectively.

Another option, available in LiteSpeed Web Server 6.1 and later, is the `DisableForwardedIpBan` Apache-style directive. Add the directive to the server-level Apache configuration, enclosed in `<IfModule LiteSpeed>` tags:

```
<IfModule LiteSpeed>
    DisableForwardedIpBan <on|off>
</IfModule>
```

Note

`DisableForwardedIpBan` can be set only at the server level, not at the virtual-host level.

## Virtual-host-level bandwidth throttling[¶](#virtual-host-level-bandwidth-throttling "Permanent link")

LiteSpeed Web Server 5.0 and later supports virtual-host-level bandwidth throttling. This feature extends **Per-Client Throttling**, which controls the stress that a single IP address can place on a server. Virtual-host-level bandwidth throttling allows you to configure limits for specific virtual hosts in Apache configuration files.

```
MaxConnPerClient <connection_limit>
LargeFileLimit [Type] [Minimum Size in kilobytes] [Speed in bytes/s]
BandWidth [Origin] [Speed in bytes/s]
MinBandWidth all -1
```

See [Virtual Host-Level Bandwidth Throttling](lsws__cp__cpanel__tunings.md#virtual-host-level-limiting) for details.

## Increase maximum connection settings[¶](#increase-maximum-connection-settings "Permanent link")

Increasing the maximum connection settings increases capacity without unnecessarily limiting the server during an attack.

Default settings:

[![Tuning maximum connections](../images/antiddos03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/antiddos03.png)

Updated settings:

[![Updated tuning maximum connections](../images/antiddos04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/antiddos04.png)

Adjust **Max Connections** and **Max SSL Connections** to `20K` and `10K`, respectively, or higher if the server has sufficient free memory. These changes increase capacity during a DoS attack.

The number of connections on port `80` is not important. If the service remains available, the mitigation is working.

## Manually block known bad IP addresses[¶](#manually-block-known-bad-ip-addresses "Permanent link")

If you know an attacker's IP address, block it by adding it to **Denied List** in the **Access Control** table. Navigate to **Configuration > Server > Security**.

## Manually block target URLs[¶](#manually-block-target-urls "Permanent link")

If your server receives hundreds of requests from different IP addresses for the same URL, create rules that block access to that URL.

For example, to block all access to `/foo/` in a control-panel environment, add the following rules to the targeted virtual host's `/foo/.htaccess` file:

```
RewriteEngine On
RewriteRule .* - [L,F]
```

In LiteSpeed Web Server native mode, you can use rewrite rules or native context configuration:

1. Create a context. Navigate to **Configuration > Virtual Hosts > View/Edit > Context > Add**, then set **Type** to `Static`.
2. Set **Accessible** to `No`, and set the context URI to match or include the URL under attack.

For example, if the server receives requests for `/foo/bar.html`, create a context with **Accessible** set to `No` and the URI set to `/foo/bar.html`. You can also set the context URI to `/foo/` to block all URLs that begin with `/foo/`.

## Use ModSecurity rules[¶](#use-modsecurity-rules "Permanent link")

LiteSpeed Web Server is compatible with common ModSecurity rule sets, such as OWASP, Atomicorp, Comodo, and CloudLinux Imunify360. Enable one or more rule sets on LiteSpeed Web Server.

## Never set Use Client IP in Header to Yes[¶](#never-set-use-client-ip-in-header-to-yes "Permanent link")

To restore real visitor IP addresses, navigate to **LiteSpeed WebAdmin Console > Configuration > General Settings**. Set **Use Client IP in Header** to `Trusted IP Only`, then add your CDN's IP addresses or subnets to the trusted list. Never set **Use Client IP in Header** to `Yes`, because clients can spoof IP addresses through the `X-Forwarded-For` header sent to Cloudflare.

## Troubleshooting[¶](#troubleshooting "Permanent link")

### Check concurrent connections[¶](#check-concurrent-connections "Permanent link")

To check the number of concurrent TCP connections, run the following command:

```
netstat -an | grep 80 | grep ESTA | wc
```

To check concurrent connections sorted by IP address, run the following command:

```
netstat -ntu | grep ESTABLISHED | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -nr
```

The `netstat -ntu` command lists TCP connections in the `TIME_WAIT` state, which inflates the count. To count concurrent TCP connections accurately, count only connections in the `ESTABLISHED` state. Use `grep ESTA` or `grep ESTABLISHED`.

### Analyze attacker IP addresses[¶](#analyze-attacker-ip-addresses "Permanent link")

Malicious IP addresses can make quick connections, resulting in many `TIME_WAIT` entries that are not visible when reviewing only established connections.

If you do not need to count concurrent connections and instead want to identify possible attackers, include `TIME_WAIT` connections. Run the command without `grep ESTABLISHED` to identify IP addresses that recently connected and disconnected:

```
netstat -ntu | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -n | awk '$1 >= 5 {print $0}'
```

An attacker can establish a connection, request an expensive URL, wait briefly, and close the connection. If the server does not stop processing the request, backend resources can be exhausted while the server continues to serve abandoned requests. The preceding command can help identify this situation.

### Check a banned IP address and its reason[¶](#check-a-banned-ip-address-and-its-reason "Permanent link")

If an IP address has been banned and you do not know why, check it through SSH. The following example shows an IP address banned after reaching the hard connection limit.

Note

Set the logging level to at least `NOTICE` to view the reason an IP address was banned.

#### Banned IP address[¶](#banned-ip-address "Permanent link")

```
grep BLOCKED_IP /tmp/lshttpd/.rtreport*
```

```
BLOCKED_IP: 192.0.2.0,
```

#### Banned reason[¶](#banned-reason "Permanent link")

When the server adds an IP address to the block list, it writes an entry to the error log:

```
[<IP.addr>] bot detected for vhost [Example], reason: xxxxx, close connection!
```

For example:

```
tail -f /etc/apache2/logs/error_log
```

```
[NOTICE] [192.0.2.0] reached per-client hard connection limit: 1, close connection!
[NOTICE] [192.0.2.0] bot detected for vhost [N/A], reason: OverConnHardLimit, close connection!
```

Alternatively:

```
[NOTICE] [192.0.2.0] bot detected for vhost [N/A], reason: OverConnSoftLimit, close connection!
```

```
2018-12-05 12:18:05.440745 [NOTICE] [192.0.2.0] bot detected for vhost [APVH_example.com:443], reason: DetectByWAF, close connection!
```

Use the logged reason to determine the appropriate action.

### SSL negotiation-based attacks[¶](#ssl-negotiation-based-attacks "Permanent link")

This feature protects against SSL handshake attacks, which can overload a server with excessive SSL handshakes. To allow more handshakes from a particular IP address, add that IP address to the trusted list.

```
[SSL] too many new SSL connections: 173, possible SSL negotiation-based attack, block!
```

This error message appears when an IP address makes too many direct connections to an SSL port, unless the IP address is in the trusted list. Trusted IP addresses are not blocked, and the message does not appear.

A browser normally does not make excessive SSL connections, particularly when it supports HTTP/2 or HTTP/3. Each Xeon CPU core can usually perform approximately `500` SSL handshakes at `100%` CPU utilization. If one IP address tries to establish too many SSL connections simultaneously, the server blocks that IP address to prevent overload.

Example

A Google Chrome add-on that communicates with a website API without properly closing its HTTP client connections can trigger SSL Negotiation Protection and be blocked.

### ModSecurity[¶](#modsecurity "Permanent link")

If an IP address was banned but no entry appears in `error_log`, ModSecurity may have dropped the IP address.

```
grep "192.0.2.0" /usr/local/apache/logs/modsec_audit.log
```

### Trusted IP addresses[¶](#trusted-ip-addresses "Permanent link")

If the IP address is in the LiteSpeed Web Server trusted list, the following entry appears:

```
2018-12-05 12:18:05.440754 [NOTICE] [192.0.2.0] trusted, ignore!
```

When a ModSecurity rule with a `drop` action is triggered, LiteSpeed Web Server adds the IP address to the blacklist. If the IP address is in the trusted list, LiteSpeed Web Server ignores it. Review the ModSecurity rule and audit log if excessive blocks occur.

If ModSecurity blocks a request and LiteSpeed Web Server identifies the IP address as trusted, the request still receives a `403` response, but the IP address is not blacklisted. If an IP address is blacklisted, LiteSpeed Web Server stops serving future requests from that IP address.

You can configure trusted IP addresses at the server level or virtual-host level through `.htaccess`.

#### Server level in WebAdmin Console[¶](#server-level-in-webadmin-console "Permanent link")

Navigate to **Server > Security > Access Control** in the WebAdmin Console. Add the trusted IP address to **Allowed List** and append a trailing `T`, as in `192.0.2.0T`.

#### Server level with a configuration file[¶](#server-level-with-a-configuration-file "Permanent link")

Configure trusted and denied IP addresses through the `/usr/local/lsws/conf/trusted-ip-list` file. If the file exists, LiteSpeed Web Server loads it automatically.

Add one IP address or subnet per line.

- To mark an entry as trusted, append a trailing `T` or append nothing.
- To mark an entry as denied, append a trailing `N`.

Any text after `#` is treated as a comment. You can use the `trusted-ip-list` file alone or together with the WebAdmin Console **Allowed List** and **Denied List** settings.

Example

```
192.0.2.0    # Trusted
192.0.2.1T   # Trusted
192.0.2.2N   # Denied
```

Instead of listing IP addresses one per line, you may enter a maximum of two URLs–one per line–each of which may contain an IP list.

Example

```
https://www.example.com/path/to/ip/list
```

The `trusted-ip-list` file is downloaded daily. To refresh its contents immediately, delete the cached copy at `admin/conf/custom-acl`, then perform a graceful restart.

#### Virtual-host level with .htaccess[¶](#virtual-host-level-with-htaccess "Permanent link")

Add the following directives to the virtual host document root's `.htaccess` file to remove an IP address from the block list and mark it as trusted for that virtual host:

```
<IfModule LiteSpeed>
    Trusted 192.0.2.0, 192.0.2.1
</IfModule>
```

This is different from setting a trusted IP address at the server level. It does not affect bandwidth limits. Adding an IP address to `.htaccess` removes it from the blacklist and disables WordPress Protect and reCAPTCHA for that specific virtual host.

### Drop or deny[¶](#drop-or-deny "Permanent link")

If ModSecurity performs a `drop` action, which sends a TCP FIN, instead of a `deny` action for a trusted IP address, the trusted list affects only the `drop` action. A trusted IP address is not added to the blacklist, but trusted status does not affect other actions.

## Mitigating SYN floods[¶](#mitigating-syn-floods "Permanent link")

Defending against SYN floods and other TCP-level attacks requires kernel hardening. LiteSpeed Web Server and other HTTP servers cannot directly mitigate these attacks. For an explanation of SYN floods and the TCP handshake, see [this blog article](https://blog.litespeedtech.com/?p=926).

### Turn on SYN cookies[¶](#turn-on-syn-cookies "Permanent link")

Add the following setting to `/etc/sysctl.conf`:

```
net.ipv4.tcp_syncookies = 1
```

SYN cookies allow the system to handle more TCP connection requests. Instead of recording every TCP connection request and waiting for a response, the system sends a cookie with its SYN-ACK response and deletes the original SYN message. An ACK response from the client contains information about this cookie, allowing the server to recreate the original entry. Set the value to `1` to enable this feature or `0` to disable it.

### Set the backlog limit[¶](#set-the-backlog-limit "Permanent link")

Add the following setting to `/etc/sysctl.conf`:

```
net.ipv4.tcp_max_syn_backlog = 2048
```

This setting tells the system when to start using SYN cookies. When the queue contains more than `2,048` TCP connection requests, or the value you specify, the system starts using SYN cookies. Keep this value high enough to prevent the system from using SYN cookies during normal traffic, because SYN cookies can increase CPU usage.

### Lower the number of SYN-ACK retries[¶](#lower-the-number-of-syn-ack-retries "Permanent link")

Add the following setting to `/etc/sysctl.conf`:

```
net.ipv4.tcp_synack_retries = 3
```

This setting controls how many times the system retries sending a SYN-ACK reply before giving up. The default is `5`. Lowering the value to `3` reduces the turnaround time for a TCP connection request to approximately `45` seconds.

### Apply these changes now[¶](#apply-these-changes-now "Permanent link")

The preceding changes do not take effect until you reboot. To apply them immediately, run:

```
echo 1 > /proc/sys/net/ipv4/tcp_syncookies
echo 2048 > /proc/sys/net/ipv4/tcp_max_syn_backlog
echo 3 > /proc/sys/net/ipv4/tcp_synack_retries
```

Running only these commands without updating `/etc/sysctl.conf` means the changes are lost at the next reboot.

## Fix a full Linux conntrack table[¶](#fix-a-full-linux-conntrack-table "Permanent link")

A website that performs well under normal traffic can become slower when traffic spikes. For example, a download server can have a large number of concurrent connections. Under these conditions, response times may increase. One possible cause is a full Linux conntrack table.

### Verify the issue[¶](#verify-the-issue "Permanent link")

```
dmesg | tail
```

```
nf_conntrack: table full, dropping packet.
nf_conntrack: table full, dropping packet.
nf_conntrack: table full, dropping packet.
```

If these messages appear, the conntrack table is full.

```
sysctl -a | grep conntrack
```

```
net.netfilter.nf_conntrack_max = 65536
net.netfilter.nf_conntrack_count = 68999
net.netfilter.nf_conntrack_buckets = 16384
```

```
cat /sys/module/nf_conntrack/parameters/hashsize
```

```
16384
```

If `nf_conntrack_count` is close to or greater than `nf_conntrack_max`, this issue can occur.

### Resolve the issue[¶](#resolve-the-issue "Permanent link")

```
sysctl -w net.netfilter.nf_conntrack_max=655360
echo 163840 > /sys/module/nf_conntrack/parameters/hashsize
```

### Make the changes permanent[¶](#make-the-changes-permanent "Permanent link")

Add the following line to `/etc/sysctl.conf`:

```
net.netfilter.nf_conntrack_max=655360
```

Add the following line to `/etc/rc.local`:

```
echo 163840 > /sys/module/nf_conntrack/parameters/hashsize
```

## Unblock a blocked IP address[¶](#unblock-a-blocked-ip-address "Permanent link")

LiteSpeed Web Server automatically removes most IP blocks from Per-Client Throttling, WordPress Protect, and ModSecurity `drop` actions when the configured **Banned Period** expires. The default period is `300` seconds.

View current blocked IP addresses in the real-time statistics report:

```
grep "BLOCKED_IP" /tmp/lshttpd/.rtreport*
```

If an IP address remains blocked after the ban period and is still visible in `.rtreport` or continues to trigger `403` errors, it may have continued sending requests after the initial block. Persistent traffic can reset or extend the ban duration.

Use one of the following methods to unblock the IP address:

1. Mark the IP address as trusted at the server level or virtual-host level through `.htaccess`.
2. Clear persistent blocks in shared memory.

Warning

Restarting LiteSpeed Web Server no longer clears shared memory automatically. Restarting the server does not remove persistent blocks.

To manually clear client statistics, run:

```
rm /dev/shm/lsws/stats_clients.shm
systemctl restart lsws
```

After you clear the file, the blocked IP address entry should be removed.

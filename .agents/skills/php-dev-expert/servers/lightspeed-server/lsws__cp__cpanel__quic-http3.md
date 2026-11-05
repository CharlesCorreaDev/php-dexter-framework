# QUIC and HTTP/3 Support | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/quic-http3/

---

# Enable or Disable QUIC and HTTP/3[¶](#enable-or-disable-quic-and-http3 "Permanent link")

Video

See a video demonstration of **3 Ways to Check if Your Site is Using QUIC or HTTP/3** [here](https://www.youtube.com/watch?v=cXP28B47IWk).

## Enabling QUIC and HTTP/3[¶](#enabling-quic-and-http3 "Permanent link")

LiteSpeed Web Server supports HTTP/3. In fact, LiteSpeed was the first to introduce production-grade HTTP/3 web server support. And, as the new protocol continues to be defined, we are there at every step, keeping our implementation current and cutting-edge.

HTTP/3 is the newest version of the Hypertext Transfer Protocol, formerly referred to as "HTTP over QUIC," and is the successor to HTTP/2.

QUIC was originally a Google effort to improve HTTP/2 by transporting it encrypted over UDP. In 2016, the IETF began working to standardize the protocol. Part of that process involved splitting QUIC into the transport protocol (QUIC) and the application protocol (HTTP/3). To learn more about it, please see [our HTTP/3 FAQ](https://www.litespeedtech.com/http3-faq).

It is easy to start using QUIC and HTTP/3 with LiteSpeed Web Server. Simply open UDP port 443. QUIC is on by default, and HTTP/3 connections will automatically be made with browsers that support it. No configuration change is required.

Tip

For control panel users, QUIC is turned on by default for Apache HTTPS vhosts. All that is required is to open UDP port 443.

Required:

- HTTPS with a trusted certificate
- UDP port 443 open at the firewall

### Open UDP port 443 at the firewall[¶](#open-udp-port-443-at-the-firewall "Permanent link")

[QUIC](https://en.wikipedia.org/wiki/QUIC) runs a stream-multiplexing protocol over Transport Layer Security (TLS) on top of UDP instead of TCP. Be sure you've enabled the port with both TCP *and* UDP. Most of the time, TCP 443 is already enabled.

You can quickly check to make sure it is listening by running:

```
netstat -lupn | grep 443

udp        0      0 127.0.0.1:443         0.0.0.0:*                               18918/litespeed (ls
udp        0      0 192.0.2.10:443        0.0.0.0:*                               18918/litespeed (ls
udp        0      0 :::443                :::*                                    18918/litespeed (ls
```

QUIC itself should automatically listen on UDP port 443, but any firewall that is running must be configured so that port 443 is open.

You will need to identify which firewall is running, such as firewalld, iptables, CSF, or other external firewalls.

#### When using CSF[¶](#when-using-csf "Permanent link")

If CSF is used, you need to enable it at the CSF level. Navigate to **ConfigServer Security & Firewall > csf - ConfigServer Firewall > Firewall Configuration > IPv4 Port Settings** and add `443` to the lists in **UDP\_IN** and **UDP\_OUT**.

[![CSF Enable QUIC](../images/quic-http301.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http301.png)

Also make sure that `UDPFLOOD` is set to `Off` (`0`).

#### When using iptables[¶](#when-using-iptables "Permanent link")

Enable port 443 with the following command:

```
iptables -I INPUT -p udp --dport 443 -j ACCEPT
/sbin/service iptables save
/sbin/service iptables restart
```

## Testing incoming and outgoing UDP connections[¶](#testing-incoming-and-outgoing-udp-connections "Permanent link")

Although you have enabled UDP on 443 on your server, it may be blocked by the data center at the route, switch, or firewall level. To verify this, you can test using the following method:

1. Use another server that has UDP port 443 open to send a 1-byte UDP packet to the server where your website is hosted.

```
nc -z -v -u YOUR_SERVER_IP 443
```

1. Check whether the UDP packet arrives on the server where the website is hosted.

```
tcpdump -i eth0 -A -s0 port 443 and udp
```

`eth0` should be replaced with your server's primary Ethernet interface.

The output on Step 2 should look like this if the packet is received correctly:

```
listening on eth0, link-type EN10MB (Ethernet), capture size 262144 bytes
09:09:57.124659 IP client-hostname.38227 > server-hostname.https: UDP, length 1
E.....@.6...3S..3M@..S...   ....................
```

You can also reverse the servers during the test to verify outgoing UDP connections from your server to the test server.

## Verifying QUIC and HTTP/3 are enabled[¶](#verifying-quic-and-http3-are-enabled "Permanent link")

You can test your own site, or any site on the Internet, with the [free HTTP/3 Check tool](https://http3check.net/). Enter a URL, and HTTP/3 Check will tell you whether QUIC or HTTP/3 are supported by that site. Detailed connection information, including HTTP header and QLOG output are provided as well. (Please [check out our video tutorial](https://youtu.be/cXP28B47IWk), if needed.)

Another option is the HTTP Indicator extension [for Chrome](https://chrome.google.com/webstore/detail/http-indicator/hgcomhbcacfkpffiphlmnlhpppcjgmbl) or [Mozilla](https://addons.mozilla.org/firefox/addon/http-indicator/). It displays a lightning bolt in the Chrome toolbar. Blue indicates HTTP/2 is enabled, and orange indicates HTTP/3. Alternatively, you can hover over the lightning bolt to see a tool tip that displays the protocol in use.

Tip

You should see the appropriate indicator on dynamic pages with a regular refresh. If not, press `CTRL + SHIFT + R` to request a fresh copy of the page.

[![!HTTP Indicator](../images/sharedverify-quic-https01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/sharedverify-quic-https01.png)

### Troubleshooting checklist[¶](#troubleshooting-checklist "Permanent link")

If QUIC is not working for you, keep these requirements in mind:

- Must have QUIC enabled in the GUI or configuration file
- Must use either Chrome or Opera with QUIC enabled
- Must **not** use self-signed certificates; only trusted certificates will work
- Must configure [SSL Settings](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:config:letsencrypt-ssl#setup_ssl_on_lsws) correctly
- Must have UDP Port 443 open at the firewall
- QUIC will **not** work with a proxy front-end like Cloudflare
- QUIC will only be applied to HTTPS, not HTTP
- QUIC can be enabled at the server level, listener level, or virtual host level
- QUIC won't work with LSWS 5.2.8 anymore, as Chrome only speaks "quic/43", while LSWS 5.2.8 only supports up to "quic/39"

## Three levels of QUIC control[¶](#three-levels-of-quic-control "Permanent link")

QUIC can be enabled or disabled at three different levels: Virtual Host, Listener, and Server. It's important to understand how these settings affect each other.

If QUIC is not explicitly turned off at any level, then priority for enabling QUIC is given at the most specific level: Virtual Host, then Listener, then Server. If QUIC *is* explicitly turned off at any level, then none of the more specific levels may turn it on. In other words, if QUIC is turned off at the Server level, then it cannot be turned on at the Listener level or at the Virtual Host level.

Put another way:

For a particular Virtual Host, QUIC will be `ON` if:

- Virtual Host Level = `ON` or is not set AND
- Listener Level = `ON` or is not set AND
- Server Level = `ON` or is not set.

For a particular Virtual Host, QUIC will be `OFF` if:

- Virtual Host Level = `OFF` OR
- Listener Level = `OFF` OR
- Server Level = `OFF`.

Here is an example setup: [![QUIC settings](../images/quic-http302.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http302.png)

If QUIC is enabled, HTTP/3 will be used automatically to serve requests to browsers that support it.

## Disabling QUIC[¶](#disabling-quic "Permanent link")

### Server level[¶](#server-level "Permanent link")

For EA4: Add the following lines to `/etc/apache2/conf.d/includes/pre_main_global.conf`

```
<IfModule LiteSpeed>
  QuicEnable off
</IfModule>
```

### Virtual host level[¶](#virtual-host-level "Permanent link")

For EA4: Create a `quic_vhosts.conf` file in the `/etc/apache2/conf.d/userdata/str/2_4/user/domain/`, then add the following lines.

```
<IfModule LiteSpeed>
  QuicEnable off
</IfModule>
```

For an SSL website, create `quic_vhosts.conf` in `/etc/apache2/conf.d/userdata/ssl/2_4/<user>/<domain>`.

If you want to disable QUIC for an account, you can create `quic_vhosts.conf` in `/etc/apache2/conf.d/userdata/ssl/2_4/<user>`.

After these changes are made, rebuild Apache conf with the following command:

```
/usr/local/cpanel/scripts/rebuildhttpdconf
```

Finally, restart LiteSpeed Web Server.

## Controlling HTTP/3 via Apache config[¶](#controlling-http3-via-apache-config "Permanent link")

You can enable and disable a variety of protocols in `httpd.conf`, using the `SpdyEnabled` directive.

Example

Disable all protocols

```
<IfModule LiteSpeed>
SpdyEnabled off
</IfModule>
```

Example

Enable HTTP protocols and disable everything else

```
<IfModule LiteSpeed>
SpdyEnabled http2 http3
</IfModule>
```

HTTP protocols are enabled by default, while SPDY protols are disabled by default.

| Parameter | Function | Default Value |
| --- | --- | --- |
| `spdy2` | Enable SPDY/2 | Disabled |
| `spdy3` | Enable SPDY/3 | Disabled |
| `http2` | Enable HTTP/2 | Enabled |
| `http3` | Enable HTTP/3 | Enabled |
| `off` | Disable all protocols |  |

Tip

When you use this directive to explicitly enable one or more protocols, anything not selected will be *disabled*. For example, `SpdyEnabled http2` will enable HTTP/2, while SPDY/2, SPDY/3 and HTTP/3 will be disabled. Be careful not to inadvertantly disable a protocol you wanted to use!

## Why QUIC?[¶](#why-quic "Permanent link")

The QUIC function is running on top of UDP, which improves HTTP transmission efficiency. One of the ways it does so is by avoiding TCP head-of-line blocking. With TCP, packets need to arrive in the correct order. If a packet is lost on its way to the server, it needs to be retransmitted, and the TCP connection needs to wait on that TCP packet before it can continue to send other packets. UDP, on the other hand, is not dependent on the order packets are received. While it's still possible for packets to get lost during transmission, they will only impact individual resources, e.g. the site's CSS file, and will not block the entire connection.

More and more people use mobile devices and they constantly switch between WiFi and LTE. Under TCP, when the IP changes, a new connection needs to be created, which could cost up to 200ms: 50ms\*(handshake\*3+tls\*1)=200ms. QUIC has implemented its own identifier for unique connections called the Connection UUID. It's possible to switch between WiFi and LTE and still keep your connection's UUID. Therefore, renegotiating the connection is no longer needed, and your previous connection is still valid.

QUIC is supported in LiteSpeed Web Server versions 5.2 and up.

## Supported QUIC and HTTP/3 versions[¶](#supported-quic-and-http3-versions "Permanent link")

Initially, LSWS supported QUIC versions Q035, Q037. HTTP/3 support was introduced in July 2019. As of August 2025, the latest version of LSWS supports QUIC versions 1 and 2, Internet Draft versions 29, and 27, and the older Google QUIC versions Q043, Q046, and Q050. Supported versions will continue to change, as both Chrome and LiteSpeed Web Server evolve.

[![QUIC versions not set](../images/quic-http307.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http307.png)

[![Supported QUIC versions](../images/quic-http308.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http308.png)

LSWS will automatically show the supported QUIC versions through the headers.

There are a few ways to check which versions of QUIC and HTTP/3 are supported by a website. You can look up the `alt-svc` response header as shown below, or you can visit [HTTP/3 Check](https://http3check.net/) and enter the site's URL. HTTP/3 Check provides a free detailed report of any site's QUIC and HTTP/3 capabilities.

*Please do not change the LSWS **QUIC versions** setting!* Leave it as `Not Set`, and the `alt-svc` response header will automatically display the currently-supported versions.

## Tuning QUIC UDP socket buffer size[¶](#tuning-quic-udp-socket-buffer-size "Permanent link")

QUIC runs over UDP, and LiteSpeed's QUIC implementation controls socket buffer sizes independently of OS-level settings. If you experience QUIC packet drops due to socket buffer overruns, you can tune the buffer sizes through dedicated parameters in the main server configuration file.

### Configuration parameters[¶](#configuration-parameters "Permanent link")

The `<quicRecvBufSize>` and `<quicSendBufSize>` parameters live in the `<quic>` section of `httpd_config.xml`. They are not exposed in the WebAdmin Console. LiteSpeed controls QUIC socket buffer sizes through these settings — the OS-level parameters (`net.core.rmem_default`, `net.core.rmem_max`) have no effect on LiteSpeed's QUIC sockets.

| Parameter | Default | Description |
| --- | --- | --- |
| `<quicRecvBufSize>` | 1048576 (1 MB) | UDP receive buffer size, in bytes |
| `<quicSendBufSize>` | 2097152 (2 MB) | UDP send buffer size, in bytes |

Note

These QUIC-specific parameters are distinct from the general `<rcvBufSize>` and `<sndBufSize>` settings in `httpd_config.xml`, which apply to TCP sockets and are capped at 512 KB.

### Configure the buffer sizes[¶](#configure-the-buffer-sizes "Permanent link")

Add or update the parameters in the `<quic>` section of `/usr/local/lsws/conf/httpd_config.xml`:

```
<quic>
    <quicEnable>1</quicEnable>
    <quicRecvBufSize>7864320</quicRecvBufSize>
    <quicSendBufSize>7864320</quicSendBufSize>
</quic>
```

All values are in bytes. Only increase these values if you observe packet drops due to socket buffer overrun — an excessively large buffer increases buffering latency without further benefit.

### Apply the configuration[¶](#apply-the-configuration "Permanent link")

A full service stop and start is required. A standard `systemctl restart lshttpd` may not be sufficient to apply changes to these settings:

```
systemctl stop lshttpd
systemctl start lshttpd
```

### Verify the new buffer size[¶](#verify-the-new-buffer-size "Permanent link")

Check the actual UDP socket memory allocation with:

```
ss -ulmpn | grep -A5 ':443'
```

The `skmem` field in the output shows the allocated receive (`rb`) and send (`tb`) buffer sizes. After a successful change, the values will match your configured sizes:

```
UNCONN 0 0 0.0.0.0:443 0.0.0.0:* users:(("litespeed",...))
        skmem:(r0,rb7864320,t0,tb7864320,f4096,w0,o0,bl0,d0)
```

### Memory impact[¶](#memory-impact "Permanent link")

The QUIC UDP socket buffer is allocated per socket, not per QUIC connection. Because LiteSpeed uses a small number of sockets to serve all QUIC connections, increasing the buffer size has minimal impact on total memory and does not reduce the maximum number of concurrent connections.

## Enable HTTP/2[¶](#enable-http2 "Permanent link")

LiteSpeed Web Server has supported HTTP/2 out of the box since Enterprise Version 5.0. HTTP/2 and SPDY are enabled by default for SSL listeners.

Some things to keep in mind:

- If using a front-end SSL proxy server, enabling SPDY or HTTP/2 on LiteSpeed Web Server will have no effect, as front-end SSL proxies are not capable of forwarding SPDY and HTTP/2 requests.
- HTTP/2 requires OpenSSL 1.0.2 at minimum. OpenSSL versions less than 1.0.2 will force HTTP/2 connections to HTTP/1. However, LiteSpeed Enterprise Web Server is statically linked with the latest OpenSSL 1.0.2 release and does not depend on the OpenSSL version installed in the system.
- HTTP/2 should work out of the box for all HTTPS sites with LiteSpeed. Although the HTTP/2 specification does not require TLS, TLS is required by browser implementations.

### Via configuration file[¶](#via-configuration-file "Permanent link")

In `httpd.conf`, use the `SpdyEnabled http2` directive to enable HTTP/2, like so:

```
<IfModule LiteSpeed>
SpdyEnabled http2
</IfModule>
```

Other valid parameters are `spdy2`, `spdy3`, `http3`, and `off`.

All protocols are enabled by default. As such, if you wish to use SPDY, HTTP/2, and HTTP/3, there is no need for a `SpdyEnabled` directive at all.

When you use this directive to explicitly enable one or more protocols, anything not selected will be *disabled*. For example, `SpdyEnabled http2` will enable HTTP/2, while SPDY and HTTP/3 will be disabled.

### Via WebAdmin Console[¶](#via-webadmin-console "Permanent link")

[![Enable HTTP/2 in WebAdmin Console](../images/quic-http304.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http304.png)

In the WebAdmin Console, you can find the **Enable SPDY/HTTP2/HTTP3** option in the **SSL** tab for both **Listeners** and **Virtual Hosts**. Select the `HTTP/2` option to enable HTTP/2.

## Verifying HTTP/2 is enabled[¶](#verifying-http2-is-enabled "Permanent link")

Though you can use third-party web tools to check, the most common and easiest way to check is through the browser's developer tools. `h2` and `http/2` mean HTTP/2 has been enabled for your server.

[![Developer tool view](../images/quic-http305.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http305.png)

If you use third-party web tools, it could show as follows: [![HTTP/2 Test tool](../images/quic-http306.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http306.png)

## Troubleshooting[¶](#troubleshooting "Permanent link")

### You're using a reverse proxy CDN like Cloudflare[¶](#youre-using-a-reverse-proxy-cdn-like-cloudflare "Permanent link")

Cloudflare and other CDNs like it *may* support QUIC connections on the client side, but as of this writing, no CDN (aside from [QUIC.cloud](https://quic.cloud/quic-cloud-services-and-features/quic-and-http3-library-service)) supports QUIC connections to backend servers. As a result, you cannot use or test your LSWS QUIC connection with a service like Cloudflare in front. Please disable your reverse proxy CDN in order to use QUIC with LiteSpeed.

### Possibly Google Chrome has not enabled QUIC by default[¶](#possibly-google-chrome-has-not-enabled-quic-by-default "Permanent link")

At some point we noticed that Google Chrome decided to temporarily disable QUIC by default. Some users explicitly have to enable QUIC under `chrome://flags`. This may not be the case for you, but it's a good idea to check whether QUIC is enabled in Chrome.

### Possibly bad cached SSL certificates[¶](#possibly-bad-cached-ssl-certificates "Permanent link")

Sometimes, especially when the site in question has encountered an SSL/TLS error before, Chrome will save the certificate in cache and cause QUIC to be unable to establish a connection. In this case, it can simply be fixed by clearing the browser cache.

### UDP rate limiting option in CSF should be disabled[¶](#udp-rate-limiting-option-in-csf-should-be-disabled "Permanent link")

If CSF is used, the UDP rate-limiting option is normally disabled by default. You should see `UDPFLOOD = "0"`. However, if you have enabled it somehow, please disable it before running any QUIC checker, such as `http3check.net`.

```
# Outgoing UDP Flood Protection. This option limits outbound UDP packet floods.
# These typically originate from exploit scripts uploaded through vulnerable
# web scripts. Care should be taken on servers that use services that utilise
# high levels of UDP outbound traffic, such as SNMP, so you may need to alter
# the UDPFLOOD_LIMIT and UDPFLOOD_BURST options to suit your environment
#
# We recommend enabling User ID Tracking (UID_INTERVAL) with this feature
UDPFLOOD = "0"
UDPFLOOD_LIMIT = "100/s"
UDPFLOOD_BURST = "500"
# This is a list of usernames that should not be rate limited, such as "named"
# to prevent bind traffic from being limited.
#
# Note: root (UID:0) is always allowed
UDPFLOOD_ALLOWUSER = "named"
```

### `LF_SPI` needs to be turned off when CSF is used[¶](#lf_spi-needs-to-be-turned-off-when-csf-is-used "Permanent link")

`LF_SPI` in CSF should be turned off (set `LF_SPI` = `0`).

According to CSF, the `LF_SPI` option configures CSF iptables as a Stateful Packet Inspection (SPI) firewall by default (which means `LF_SPI` = `1`). If the server has a broken stateful connection tracking kernel then this setting can be set to `0` to configure CSF iptables to be a static firewall, though some functionality and security will inevitably be lost.

[![CSF SPI Settings](../images/quic-http303.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http303.png)

### Supported QUIC versions header is wrong[¶](#supported-quic-versions-header-is-wrong "Permanent link")

[![Wrong QUIC versions in header](../images/quic-http309.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http309.png)

Sometimes you cannot see the latest supported version from the QUIC header, even if LSWS's latest release supports them. For example, let's say, LSWS supports the fictional QUIC versions Q0XX, Q0YY, and Q0ZZ, but the page header only shows `XX,YY`. Why?

One possible reason is that you are using an old version of LSWS. You should always upgrade to the latest build of the latest version.

[![QUIC Versions not blank](../images/quic-http310.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/quic-http310.png)

If you have upgraded to the latest version but *still* see the above inaccuracy, the most likely explanation is that you manually set **QUIC Versions** in LSWS's QUIC settings.

When **QUIC Versions** is not left as `Not Set`, the manual configuration will soon become outdated or wrong.

#### When to manually set "QUIC Versions"[¶](#when-to-manually-set-quic-versions "Permanent link")

Why have a **QUIC Versions** setting at all, if you are not supposed to use it?

The idea behind exposing supported versions is to give the user the ability to disable a particular QUIC version in the case of a security vulnerability or bug. *This is the only occasion during which you should set **QUIC Versions** manually*.

Warning

Don't forget to revert the setting back to `Not Set` once the bug is fixed. Failure to do so will cause your configuration to become outdated in the future.

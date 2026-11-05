# Basic | Configuration | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/settings/

---

# Basic Configuration[¶](#basic-configuration "Permanent link")

This section will cover a basic LiteSpeed Web ADC configuration using a LiteSpeed Web ADC server as well as two (or more) web servers running on separate machines from one another. For simplicity, we will be assuming the following setup:

- Two web servers
- LiteSpeed Web ADC configured to handle HTTP traffic
- A single site being hosted on both of the servers

Tip

If you would like to use LiteSpeed Web ADC for a different application, simply replace `clusterHTTP` in this guide with the appropriate cluster type (AJP,LSAPI,FCGI,MIX).

## Initial Setup[¶](#initial-setup "Permanent link")

To start, log into your LiteSpeed Web ADC WebAdmin Console using the IP address of your LiteSpeed Web ADC server and the port number you assigned the LiteSpeed Web ADC WebAdmin Console during [installation](lsadc__installation.md). We will be using `192.168.0.10` as our LiteSpeed Web ADC IP address and the default port `7090` for the LiteSpeed Web ADC WebAdmin Console.

```
http://192.168.0.10:7090
```

### Create a Cluster[¶](#create-a-cluster "Permanent link")

Once you have logged in, navigate to **Configuration > Clusters** and click **Add** at the top right of **Clusters List**.

First, you will be asked what **Type** of cluster you wish to create. Choose `Layer 7` and click **Next**.

[![!Choose a cluster type](../images/settings01.png)](https://docs.litespeedtech.com/lsadc/images/settings01.png)

On the next screen, fill in the details for the new cluster, like so:

[![!Define a new cluster](../images/settings02.png)](https://docs.litespeedtech.com/lsadc/images/settings02.png)

- **Cluster Name**: `clusterXYZ` (or whatever you would like to call it)
- **Mode**: `Stateful`
- **Strategy**: `Least Load`
- **Session Extraction**: check the following
  - `IP Address`
  - `Query String`
  - `Cookies`
  - `SSL Session`
- **Session ID String**: `phpsessid`
- **Session Timeout**: `600`
- **Insert Tracking Cookie**: `Yes`
- **Tracking Cookie Name**: `lslb_backend`

Click **Save** at the top right.

### Create a Worker Group[¶](#create-a-worker-group "Permanent link")

Now that you have a cluster defined, you can define a worker group, and add in your two web servers as nodes. For this example we will be using `192.168.0.15:81` and `192.168.0.16:82` as our two web servers and ports. Replace these values with the IP addresses and ports of your own web servers.

Click `clusterXYZ` to view the cluster, and click the tab for **Worker Group**. Then click **Add**, and define the worker group as follows:

[![!Define a new worker group](../images/settings03.png)](https://docs.litespeedtech.com/lsadc/images/settings03.png)

- **Name**: `xyzHTTP`
- **Type**: `HTTP Proxy`
- **Enabled**: `Yes`
- **Max Connections**: `20`
- **Initial Request Timeout (secs)**: `60`
- **Retry Timeout (secs)**: `0`
- **Node Address List**:`(**Node1**)192.168.0.10->192.168.0.15:81, (**Node2**)192.168.0.10->192.168.0.16:82`

Leave all other options set to the default values.

Note

**Node Address List** is a comma-separated list in the following format:

```
(Node_Tag)ADC_IP_Address->Destination_IP_Address:Destination_Port
```

If you are using IPv6, the IP must be surrounded by `[]`.

Click **Save** at the top right.

### Create a Virtual Host[¶](#create-a-virtual-host "Permanent link")

With your cluster fully configured, and your web servers added as nodes to a worker group in said cluster, it's time to create a LiteSpeed Web ADC virtual host.

Navigate to **Configuration > Virtual Hosts**.

Tip

Since you will be creating our own virtual host, you no longer need the provided "Example" host. If you'd like to delete it, you can click **Delete** in the **Action** section for that host, and then click **Yes** to confirm.

Click **Add** at the top right of the **Virtual Host List**, and define a new virtual host, like so:

[![!Create a virtual host](../images/settings04.png)](https://docs.litespeedtech.com/lsadc/images/settings04.png)

- **Virtual Host Name**: `vHost-1`
- **Default Cluster**: `clusterXYZ`
- **Configure File**: `$SERVER_ROOT/conf/vhost-1.xml`

Click **Save** at the top right.

### Create a Listener[¶](#create-a-listener "Permanent link")

Now that we have a LiteSpeed Web ADC virtual host configured, the final step is to set a listener for that virtual host.

Navigate to **Configuration > Listeners**

Tip

You may already have a "Default" listener configured and mapped to the "Example" virtual host. If this is the case, you don't need to **Add** a new listener. You can simply **Edit** the `Default` listener and delete it's virtual host mapping to `Example`.

Click **Add** at the top right of the **Listeners** list.

Select **Type** `HTTP (Layer 7)` and click **Next**. Create a new listener with the following values:

[![!Add a listener](../images/settings05.png)](https://docs.litespeedtech.com/lsadc/images/settings05.png)

- **Listener Name** - `Default`
- **Port** - `80`
- **Secure** - `No`

Leave the rest of the settings at their default values, and click **Save** at the top right.

You will be sent back to the listener list. Click `Default`. to view the listener we just added.

Since we created our own LiteSpeed Web ADC Virtual host earlier (`vHost-1`), we can now add a new mapping. Click **Add** in the **Virtual Host Mappings** section, and create a mapping with the following values:

[![!Map a vhost to the listener](../images/settings06.png)](https://docs.litespeedtech.com/lsadc/images/settings06.png)

- **Virtual Host**: `vHost-1`
- **Domains**: `*.your-domain-name.com`

Click **Save** at the top right.

Apply all of the changes with a graceful restart. Navigate to **Actions > Graceful Restart** and click the **OK** button when asked `Are you sure you want to restart server?`.

Your LiteSpeed Web ADC should now be working and ready to handle all incoming HTTP traffic to your specified port/site!

## Testing[¶](#testing "Permanent link")

Below are two methods of testing that LiteSpeed Web ADC is configured correctly and working. We will again be assuming you have two web servers with LiteSpeed Web ADC handling HTTP requests to a web site hosted on both of these servers.

Tip

These tests can both be modified to test other applications of LiteSpeed Web ADC.

For both tests: Run your servers in an isolated environment (no outside traffic), and make a small but noticeable change to the home page on one of your web servers. This is done so that you can easily tell which web server fills the request.

### Test 1: Disable a Server[¶](#test-1-disable-a-server "Permanent link")

Aside from balancing your servers' traffic to avoid a crash, one of the main features of a load balancer is to appropriately redirect traffic to an available server if another server should experience a failure. With two servers running this is an easy thing to check.

To begin, visit your site through a browser. Make note of which server you are being directed to by noticing the presence or absence of the small change you made earlier. We will call this server "Server 1". If your **Mode** is set to `Stateful` under **Load Balancer Definition** in **Configuration > Clusters > clusterXYZ** (as it will be if you followed the tutorial above), then Server 1 will be the preferred server for LiteSpeed Web ADC to direct your IP address to. This is known as "Session Affinity".

Now that we know which server you are being directed to, either stop Server 1 or change Server 1's port to a number LiteSpeed Web ADC is not aware of, and restart it. If everything is working correctly, the next time you attempt to visit your site, LiteSpeed Web ADC will instead redirect your request to Server 2, which you can again confirm with respect to the small change made earlier.

### Test 2: Round Robin[¶](#test-2-round-robin "Permanent link")

From the LiteSpeed Web ADC WebAdmin Console, navigate to **Configuration > Clusters**. Select `clusterXYZ`, or whatever cluster you are using to direct HTTP traffic. Click **Edit** at the top right of the **Load Balancer Definition** section.

Change **Mode** to `Stateless` and **Strategy** to `Round Robin`.

[![!Edit load balancer definition](../images/settings07.png)](https://docs.litespeedtech.com/lsadc/images/settings07.png)

Click **Save** at the top right.

By choosing `Stateless`, you have told LiteSpeed Web ADC to ignore "Session Affinity" for this cluster. Meaning that you are equally likely to be sent to Server 1 or Server 2 on an HTTP request for your site. By choosing `Round Robin`, you have told LiteSpeed Web ADC to rotate back and forth between Server 1 and Server 2 when receiving HTTP requests for your site.

Perform a Graceful Restart to have the new definition take effect.

Tip

Because of possible browser caching, this next part is best done through the terminal.

Use the following terminal command to request your web page. For this example our domain name is `example.com`. Replace this with your own domain name or the IP address and port of your LSLB server.

```
curl -i example.com
```

or

```
curl -i 192.168.0.10:80
```

Run this command a few times to check if LiteSpeed Web ADC is correctly swapping back and forth between Server 1 and Server 2 by checking for the small change made earlier. The output should be similar to Server 1, then Server 2, then Server 1, then Server 2, and so on.

Note

It is recommended to set **Mode** and **Strategy** back to your previous settings when done performing this test. The default settings are `Stateful` and `Least Load` respectively.

## QUIC[¶](#quic "Permanent link")

You can use QUIC on LiteSpeed Web ADC if the following are true:

- QUIC is enabled in the WebAdmin Console (it is enabled by default)
- The browser supports QUIC and has QUIC enabled
- You are not using a self-signed certificate
- You are not using a proxy front end like CloudFlare

### Create Secure Listener[¶](#create-secure-listener "Permanent link")

- Navigate to **WebAdmin Console > Configuration > Listeners** and press the **Add** button.
- Choose `HTTP (Layer 7)` then press the **Next** button.
- Set **Listener Name** to `LS-443` or your choice of name.
- Set **Port** to `443`.
- Set **Secure** to `Yes`.
- Press the **Save** button.

### Configure SSL[¶](#configure-ssl "Permanent link")

- Back at the **Server Listeners** list, select `LS-443`.
- Select the **SSL** tab.
- Click **Edit** in the **SSL Private Key & Certificate** section.
- Set **Private Key File**, **Certificate File** and **CA Certificate File** to your certificate file location.
- Press the **Save** button.

### Enable QUIC[¶](#enable-quic "Permanent link")

QUIC is enabled in Web ADC by default. If it has been turned off, and you need to enable it manually, this is how:

- While still viewing `LS-443`, scroll down to **Security Features** and click **Edit**
- Set **Allow QUIC** to `Yes`.
- Press the **Save** button.

[![!Enable QUIC](../images/settings08.png)](https://docs.litespeedtech.com/lsadc/images/settings08.png)

### Configure Firewall[¶](#configure-firewall "Permanent link")

[QUIC](https://en.wikipedia.org/wiki/QUIC) (Quick UDP Internet Connections) runs a stream-multiplexing protocol over Transport Layer Security (TLS) on top of UDP instead of TCP. Be sure you've enabled the port with both TCP *and* UDP.

### How to verify QUIC is enabled[¶](#how-to-verify-quic-is-enabled "Permanent link")

You can test your own site, or any site on the Internet, with the [free HTTP/3 Check tool](https://http3check.net/). Enter a URL, and HTTP/3 Check will tell you whether QUIC or HTTP/3 are supported by that site. Detailed connection information, including HTTP header and QLOG output are provided as well. (Please [check out our video tutorial](https://youtu.be/cXP28B47IWk), if needed.)

Another option is the HTTP Indicator extension [for Chrome](https://chrome.google.com/webstore/detail/http-indicator/hgcomhbcacfkpffiphlmnlhpppcjgmbl) or [Mozilla](https://addons.mozilla.org/firefox/addon/http-indicator/). It displays a lightning bolt in the Chrome toolbar. Blue indicates HTTP/2 is enabled, and orange indicates HTTP/3. Alternatively, you can hover over the lightning bolt to see a tool tip that displays the protocol in use.

Tip

You should see the appropriate indicator on dynamic pages with a regular refresh. If not, press `CTRL + SHIFT + R` to request a fresh copy of the page.

[![!HTTP Indicator](../images/sharedverify-quic-https01.png)](https://docs.litespeedtech.com/lsadc/images/sharedverify-quic-https01.png)

## Turning On the Debug Log[¶](#turning-on-the-debug-log "Permanent link")

To turn on the Web ADC Debug Log, you would follow the exact same steps that are laid-out [here](https://docs.litespeedtech.com/cp/cpanel/debug-log/) for LiteSpeed Web Server.

## See Also[¶](#see-also "Permanent link")

This document covers the basics, but you will probably also want to configure these more specialized areas:

- [High Availability](lsadc__moresettings.md#high-availability)
- [GeoIP](lsadc__moresettings.md#geoip)
- [Custom Headers](lsadc__moresettings.md#custom-headers)
- [Advanced Reverse Proxy](lsadc__moresettings.md#advanced-reverse-proxy)
- [Cache](lsadc__cache.md)
- [Security](lsadc__security.md)
- [Zeroconf](lsadc__zeroconf.md)

And [more](lsadc__moresettings.md).

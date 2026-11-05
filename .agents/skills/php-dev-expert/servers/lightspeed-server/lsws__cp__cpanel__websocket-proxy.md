# WebSocket Proxy with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/websocket-proxy/

---

# WebSocket Proxy[¶](#websocket-proxy "Permanent link")

LiteSpeed Web Server can work as a WebSocket proxy.

## What's a WebSocket?[¶](#whats-a-websocket "Permanent link")

WebSocket changes the way the Internet works: It is a protocol that allows the server and the client to have a bidirectional conversation where the client doesn't just request content from the server but the server also sends content to the client whenever there is content to be sent (without waiting to be asked). This bidirectional conversation allows for realtime web experiences. Where HTTP tries to simulate real-time interaction at great expense (through incessant refreshing), WebSocket makes realtime interaction a reality. This upgrades all sorts of web applications: stock tickers, data center monitors, news feeds... but probably the most exciting feature of realtime Internet is the ability for multiple users to see and react to each other's actions in real time.

## Set up a WebSocket Backend[¶](#set-up-a-websocket-backend "Permanent link")

The first step is to have a working WebSocket backend set up. Explaining how to achieve this is out of this document's scope but there are plenty of online tutorials that can be consulted. One such tutorial involves usingan Nginx backend with an [nchan module](https://github.com/slact/nchan).

## Test the Backend WebSocket[¶](#test-the-backend-websocket "Permanent link")

Assuming you have a backend WebSocket up and running on port 80 at `ws://domain.com/sub/xx1`, you will need to test it to ensure it is working.

There are many tools available for such testing. You can either try some online tools such as [Echo Test](https://websocket.org/echo.html) or download chrome extension tools like [Simple WebSocket Client](https://chrome.google.com/webstore/detail/simple-websocket-client/pfdhoblngboilpfeibdedpjgfnlcodoo?hl=en). We will use Chrome Simple WebSocket Client as an example in this guide.

[![!Add WebSocket Proxy](../images/websocket-proxy01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/websocket-proxy01.png)

This screenshot shows a successful test. If it had failed, you would see a `Simple WebSocket Client undefined` error, like so:

[![!Failed WebSocket Proxy](../images/websocket-proxy02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/websocket-proxy02.png)

## Configure LiteSpeed Web Server[¶](#configure-litespeed-web-server "Permanent link")

LSWS supports `ProxyPass` for WebSocket, used like so:

```
ProxyPass / ws://localhost:3000/
```

Note

This directive must be placed in an Apache vhost configuration file, not in .htaccess.

For example, for RocketChat, create two files like these, replacing `EXAMPLE` and `www.example.com` with the cPanel username and the actual domain:

`/etc/apache2/conf.d/userdata/ssl/2_4/EXAMPLE/www.example.com/proxy.conf`

`/etc/apache2/conf.d/userdata/std/2_4/EXAMPLE/www.example.com/proxy.conf`

Add the following code to both files:

```
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteRule (.*) http://localhost:3000/$1 [P,L]
ProxyPass / ws://localhost:3000/
</IfModule>
```

Rebuild the Apache configuration file, and restart LSWS:

```
/scripts/buildhttpdconf

/usr/local/lsws/bin/lswsctrl restart
```

Note

As of LiteSpeed Web Server v6.0, Secure websocket connections are supported via `wss://`.

## Final Test: The Front End[¶](#final-test-the-front-end "Permanent link")

Test front-end port 443:

```
wss://example.com/sub/xx1
```

If all is working fine you should see the following:

[![!WebSocket Proxy Success](../images/websocket-proxy03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/websocket-proxy03.png)

## Testing from the command line[¶](#testing-from-the-command-line "Permanent link")

If you have Node.js and npm installed, you can test the connection for your WebSocket URL from the command line.

1. Enter the following command:

   ```
   npx wscat -c ws://example.com/sub/xx1
   ```
2. You should see the following output:

   ```
   Connected (press CTRL+C to quit)
   ```
3. At the prompt, enter any text, like so:

   ```
   hello
   ```
4. If the WebSocket connection is working, the server will echo back what you entered:

   ```
   hello
   ```

# Anubis Protection | cPanel | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/anubis/

---

# Anubis Protection[¶](#anubis-protection "Permanent link")

Beginning with LiteSpeed Web Server 6.4, Anubis is available as an additional method of defense against bots and automated attacks, alongside the existing [CAPTCHA protection](lsws__cp__cpanel__recaptcha.md).

Warning

Anubis is currently available in the v6.4.0RC1 test build. Be sure to test on a non-production server before deploying.

Anubis can be used on its own or together with CAPTCHA verification. When both are enabled, Anubis checks the request first, and CAPTCHA verification follows.

## Upgrade to LSWS v6.4.0RC1[¶](#upgrade-to-lsws-v640rc1 "Permanent link")

To upgrade an existing v6.3.x installation to the v6.4.0RC1 test build, run the following command:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v 6.4.0RC1
```

## Install Anubis[¶](#install-anubis "Permanent link")

Anubis is a proof-of-work challenge that filters out automated traffic before it reaches your site. It runs as a backend service that handles all Anubis-related requests.

To install the service, run the following setup script:

```
/usr/local/lsws/admin/misc/setup_anubis.sh
```

This installs the `anubis@lsanubis.service` service, which acts as the backend for Anubis requests.

The service listens on `127.0.0.1:8923` by default. Confirm that it is running and listening before you continue:

```
systemctl is-active anubis@lsanubis.service
ss -lnt | grep 8923
```

If Anubis is running, the service will report `active` and indicate that the backend is listening on `127.0.0.1:8923`:

```
active LISTEN 0 4096 127.0.0.1:8923 0.0.0.0:*
```

Warning

If the backend service is not running, LiteSpeed Web Server serves traffic without Anubis protection rather than returning an error. It is good practice to confirm that the service is active before relying on it.

## Enable Anubis[¶](#enable-anubis "Permanent link")

Use the `LsAnubis` directive to turn Anubis `on` or `off`. It can be set at the Apache server level or the virtual-host level:

```
LsAnubis on|off
```

For example, to enable Anubis, add the following to your Apache server or virtual-host configuration:

```
<IfModule LiteSpeed>
LsAnubis on
</IfModule>
```

If you prefer, you can use the WebAdmin Console. Navigate to **Configuration > Server > Security > Anubis Proof-of-Work** and set **Enable Anubis** to `On`.

To enable Anubis with cPanel, use one of the two methods described above: the directive or the WebAdmin Console.

## Combine Anubis with CAPTCHA[¶](#combine-anubis-with-captcha "Permanent link")

Anubis can be used together with CAPTCHA verification (reCAPTCHA, hCaptcha, or ALTCHA). When both are active, Anubis evaluates the request first, and CAPTCHA verification is applied afterward.

## Verify Anubis is working[¶](#verify-anubis-is-working "Permanent link")

At the default debug level, Anubis writes nothing to the server error log, so a successful setup looks identical to one that is doing nothing. Verify from the response headers instead.

### Send a test request[¶](#send-a-test-request "Permanent link")

Request a protected page and look for the Anubis cookies:

```
curl -sI -A "Mozilla/5.0" https://example.com/ | grep -i anubis
```

A protected site returns two `techaro.lol-anubis-*` cookies:

```
set-cookie: techaro.lol-anubis-auth=; Path=/; Max-Age=0; Secure; SameSite=None
set-cookie: techaro.lol-anubis-cookie-verification=01a0916c-32f6-7472-bbc5-940a1feaa0ec; Path=/; Secure; SameSite=None
```

Drop the `-I` to see the challenge page itself, which is titled **Making sure you're not a bot!**.

Warning

Run the test from a machine outside your server. Requests from the server itself, from Cloudflare, from QUIC.cloud, and from any address in your **Trusted ACL** skip Anubis silently.

Note

The challenge is served with status `200`, not `403`. The status code alone tells you nothing—check for the cookies.

The `-A "Mozilla/5.0"` option matters. Anubis challenges browser user agents; requests from `curl` and `wget` using their own default user agent are passed through untouched to avoid breaking automation.

### Troubleshooting[¶](#troubleshooting "Permanent link")

If no cookies are returned, work through the following in order:

#### Test from an external machine[¶](#test-from-an-external-machine "Permanent link")

Do not test from the server itself or from any trusted IP addresses.

#### Set a browser user agent[¶](#set-a-browser-user-agent "Permanent link")

Verify that `-A "Mozilla/5.0"` is added to the `curl` command to set a browser user agent.

#### Confirm the backend service is running[¶](#confirm-the-backend-service-is-running "Permanent link")

Run the following:

```
systemctl is-active anubis@lsanubis.service
```

If it is not `active`, start the service with the following command:

```
systemctl start anubis@lsanubis.service
```

#### Check the server-level setting[¶](#check-the-server-level-setting "Permanent link")

In the WebAdmin Console, navigate to **Configuration > Server > Security > Anubis Proof-of-Work** and confirm that **Enable Anubis** is not set to `Disabled`.

#### Check the virtual-host setting[¶](#check-the-virtual-host-setting "Permanent link")

Confirm that `LsAnubis on` is set for the virtual host you are testing, and restart LiteSpeed Web Server after adding it.

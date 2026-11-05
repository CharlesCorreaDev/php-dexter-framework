# SSL Issues | Troubleshooting | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/ts-ssl/

---

# SSL Issues[¶](#ssl-issues "Permanent link")

Most SSL errors are not directly caused by LiteSpeed Web Server itself, but by server configuration issues or environmental factors. Here are some common errors that you may encounter on the client side, along with ways to address them.

## ERR\_CONNECTION\_REFUSED[¶](#err_connection_refused "Permanent link")

The `ERR_CONNECTION_REFUSED` error indicates that your web browser was unable to establish a connection with a website.

This error may be caused by a number of client-side or server-side issues.

### Client-side issues (on your device)[¶](#client-side-issues-on-your-device "Permanent link")

- The information stored in the browser cache may be outdated, causing a new version of the website to fail to load. Clearing the cache can help to resolve the issue.
- If a forward proxy is in use, it may be blocking access to the site.
- Security software might be blocking access to the website.
- An outdated DNS cache may be causing a DNS resolution failure, or it may cause the browser to attempt loading the site from the wrong location. Try clearing your local DNS cache.

### Server side issues (on the website)[¶](#server-side-issues-on-the-website "Permanent link")

- The website may be down at the origin server, or the IP address to access the site may have changed.
- The website's firewall solution may be configured to block or rate limit connections.
- The port on the origin server or intermediary proxy may be closed or badly configured.
- The website's SSL configuration at the listener or virtual host may be wrong.

Try these steps to see if your website has an SSL configuration problem:

1. **Check the HTTPS Listener**: Log in to the LiteSpeed WebAdmin Console and navigate to the HTTPS listener for the domain where you are experiencing the `ERR_CONNECTION_REFUSED` error. Verify that **Port** = `443` (or the correct HTTPS port for that site). Also, verify that **Secure** is set to `Yes`.
2. **Check SSL Certificate Path and File Name**: While still in the WebAdmin Console, click the Listener's **SSL** tab and take note of the SSL certificate paths and file names configured on the **Private Key File** and **Certificate File** fields. (If SSL certificates are configured at the virtual host level, look for this information in the virtual host's **SSL** tab.)
3. **Compare to Certificate Directory**: Open an SSH connection to your server and navigate to the directory containing the SSL certificate for the domain. Compare the file name and path, and verify they are the same as those stored in WebAdmin. If they are different, update the WebAdmin Console settings.
4. **Restart LSWS**: After making any changes, restart the LiteSpeed Web Server and try accessing your site again. If the problem was caused by an SSL configuration issue in the LiteSpeed WebAdmin console, you should now be able to access the site successfully.

Tip

You should always have an SSL certificate configured at the Listener level, even if your server is configured for a single site on a native virtual host. After that, for any further sites you may add, it's fine to configure the SSL certificate at the virtual host level.

## ERR\_SSL\_PROTOCOL\_ERROR[¶](#err_ssl_protocol_error "Permanent link")

When you attempt to access a website with SSL encryption enabled, the browser and the web server exchange credentials in a process called a TLS handshake.

`ERR_SSL_PROTOCOL_ERROR` happens when the server and the web browser fail to complete a proper TLS handshake. This prevents you from viewing the website successfully. There are a number of reasons why this error may occur and some of the reasons include:

- Date and time issues
- Browser cache issues
- Server Configuration issues
- SSL Configuration issue

### Date and time issues[¶](#date-and-time-issues "Permanent link")

Verify that your computer's date and time are set correctly. If they are wrong, it can cause problems with SSL certificate expiration checks and other processes that rely on accurate universal time. The exact steps to check if your computer's date and time are set correctly depend on the operating system that you are using. However the general process is:

1. Go to the operating system date & time settings.
2. Verify the time zone is correct.
3. If possible, enable the **Set date and time automatically** setting.
4. Verify the system date and time is correct.

Once you've confirmed that everything is correct, refresh the website to see if this resolves the `ERR_SSL_PROTOCOL_ERROR` message.

### Browser cache issues[¶](#browser-cache-issues "Permanent link")

Outdated SSL data in your browser's cache or cookies can cause issues with the SSL/TLS handshake. Clearing this data can resolve the `ERR_SSL_PROTOCOL_ERROR` error. Here are the steps to flush the cache/cookies in popular browsers:

- **Google Chrome**: Click the menu button on the top right corner, select **Delete Browsing Data**.
- **Mozilla Firefox**: Click the menu button, then navigate to **Settings > Privacy & Security > Clear Data**.
- **Safari**: Click **Safari** and click **Preferences**.  Click the **Advanced** tab. Select the **Show Develop** menu in menu bar checkbox and close the **Preferences** window. Select the **Develop** drop-down menu. Click **Empty Cache**.

When clearing the cache data, if possible, select all time ranges and select all types of images, files, and cookies before confirming. Finally, reload the affected pages to test whether this has resolved the `ERR_SSL_PROTOCOL_ERROR` issue.

### Server Configuration issues[¶](#server-configuration-issues "Permanent link")

In some cases, the LiteSpeed SSL configuration might be set to use SSL v3.0, TLS v1.0, or TLS v1.1. Using these protocols is not recommended, because they are vulnerable to attack and modern browsers no longer support them.

When attempting to access a website using SSL v3.0, TLS v1.0, or TLS v1.1 a browser may be unable to establish a secure connection because it does not recognize or trust this outdated protocol. This results in the `ERR_SSL_PROTOCOL_ERROR` or `ERR_SSL_VERSION_OR_CIPHER_MISMATCH` message. To ensure security and compatibility with modern browsers, configure LiteSpeed to use the following protocols:

- TLSv1.2
- TLSv1.3

This configuration enables strong encryption and protects your website from known vulnerabilities.

### SSL Configuration issues[¶](#ssl-configuration-issues "Permanent link")

The `ERR_SSL_PROTOCOL_ERROR` may be caused by issues outside of your direct control. In some cases an `ERR_SSL_PROTOCOL_ERROR` can occur due to issues with the or network problems, like these:

- A problem might result in an invalid or untrusted certificate, hindering the secure connection.
- Network instability can disrupt the communication process between your device and the website, preventing the establishment of a secure SSL/TLS connection.

Both scenarios can lead to the browser displaying the `ERR_SSL_PROTOCOL_ERROR` message, indicating a failure in the secure connection handshake. In such a case you will need to contact your hosting or network provider for assistance.

## ERR\_CERT\_DATE\_INVALID[¶](#err_cert_date_invalid "Permanent link")

The `ERR_CERT_DATE_INVALID` error message indicates an issue relating to the date, and the browser couldn't verify the validity of the website's SSL certificate. This error can occur in a few scenarios:

- The computer's time is wrong, causing an SSL validation error.
- Corrupted browser cache or extensions interfering with the certificate verification.
- Security software blocking or interfering with the SSL connection.
- The website's SSL certificate has expired.

To troubleshoot the `ERR_CERT_DATE_INVALID` error, check the computer's date and time and verify that it is correct. Usually a wrong time zone is the culprit. You can consider setting up an internet server to handle date and time updates on the computer.

If the issue is not caused by a wrong date and time, you can try temporarily disabling browser extensions. Disable the extensions one at a time to identify which extension(s) cause the `ERR_CERT_DATE_INVALID` error. Once identified you can try updating the extension(s) to the latest available version if possible, or try using different extensions to provide the desired functionality.

Antivirus or security software may also cause the `ERR_CERT_DATE_INVALID` error. Temporarily disable your antivirus and firewall to see if they're interfering. If the issue is resolved, create exceptions for the website in your security software.

Verify the SSL certificate for the website is valid and is configured correctly. If the certificate has expired or if there is a configuration problem, an `ERR_CERT_DATE_INVALID` error may occur. There are a number of online SSL checking tools that you can use to check for SSL certificate validity and configuration problems.

## ERR\_CERT\_REVOKED[¶](#err_cert_revoked "Permanent link")

`ERR_CERT_REVOKED` is an SSL error that occurs if the a site's certificate has been revoked by the Certificate Authority. SSL revocation is the process of invalidating an issued SSL certificate and terminating the secure HTTPS connection of a website. This error may happen for a number of reasons. The SSL certificate keys may have been compromised, or the CA may have issued the certificate to the wrong site.

To address this issue, start by contacting the Certificate Authority and request that they provide a reason why the error occurs. If a revocation has been done you will need to request a new SSL certificate. If the Certificate Authority did not revoke the SSL certificate try the following steps to address the issue:

- Flush the DNS cache and reset TCP/IP
- Disable any VPN or Proxy in use

Network-related issues can sometimes cause the `ERR_CERT_REVOKED` error. Flushing the DNS cache and resetting TCP/IP can help resolve the problem. This process involves clearing temporary internet files and renewing network configurations. VPNs and proxies can also interfere with SSL certificate verification. Temporarily disabling them can help isolate the issue and determine if they are causing the error. You can also try other solutions covered earlier in this guide such as checking your computer's date and time and clearing the browser cache.

## ERR\_SSL\_VERSION\_OR\_CIPHER\_MISMATCH[¶](#err_ssl_version_or_cipher_mismatch "Permanent link")

Cannot Establish TSL/SSL Connection with Cloudflare

If a domain cannot establish a TSL/SSL connection when using Cloudflare, it is likely because Cloudflare requires a Server Name Indication (SNI) at the virtual host level, in addition to the listener level.

You may see the following notice in your Chrome or Firefox browser:

```
The site can't provide a secure connection
example.com users an unsupported protocl
ERR_SSL_VERSION_OR_CIPHER_MISMATCH
```

[![](../images/ts-ssl01.png)](https://docs.litespeedtech.com/lsws/images/ts-ssl01.png)

Or, you may see this:

```
Secure Connection Failed
An error occurred during a connection to example.com. Peer reports incompatible or unsupported protocol version.
Error code: SSL_ERROR_PROTOCOL_VERSION_ALERT
```

[![](../images/ts-ssl02.png)](https://docs.litespeedtech.com/lsws/images/ts-ssl02.png)

### Solution[¶](#solution "Permanent link")

Add SSL key/certificate configuration at vhost level under the SSL tab. Even if the configurations are identical, CloudFlare requires [SNI](https://www.cloudflare.com/learning/ssl/what-is-sni/) to be set at both the virtual host level and the listener level. Do so, and the problem should go away.

## Certificate Not Trusted errors[¶](#certificate-not-trusted-errors "Permanent link")

A `Certificate Not Trusted` error typically occurs when a web browser or other application cannot verify the authenticity of a website's SSL certificate. SSL certificates are used to secure the connection between a browser and a website by encrypting data and confirming the site's identity. When you see this error, it means that your browser doesn't trust the certificate being presented. While this error can happen due to a number of reasons, these are the most common:

- A Self-Signed Certificate
- An Expired SSL Certificate
- Certificate Chain Issues
- File and Folder permission issues
- Security blocking issues

### Self-Signed Certificates[¶](#self-signed-certificates "Permanent link")

`Certificate Not Trusted` errors may be presented by different browsers in different ways. For example,  Firefox may display a `Certificate Not Trusted` error message as:

```
example.com uses an invalid security certificate. The certificate is not trusted because it is self-signed.
```

While Google Chrome may display a `Certificate Not Trusted` error message as:

```
This server could not prove that it is example.com; its security certificate is not trusted by your computer's operating system. This may be caused by a misconfiguration or an attacker intercepting your connection.
```

If the `Certificate Not Trusted` error happens due to a self-signed certificate, you can verify this by checking the certificate details in the web browser. Using Google Chrome click on the **Not Trusted** button before the URL in the browser address bar.

Click the **Certificate Is Not Valid** option and a popup message will be displayed. If the certificate is self-signed, the issuer and subject fields usually contain the same values. Checking the path where the certificate is located, you may find only 1 file. To address a self signed certificate issue, log in to your control panel and navigate to the **SSL security** section. Upload or request a new valid SSL certificate. In a native LiteSpeed Web Server environment, you may need to do this directly from the server command line interface.

### Expired SSL Certificates[¶](#expired-ssl-certificates "Permanent link")

SSL certificates have an expiry date. If the expiry date for a certificate is reached, a `Certificate Not Trusted` error message may occur when trying to access a website. The error message displayed by browsers will also  indicate that the certificate has expired. The solution for this is requesting an SSL certificate renewal.

### Certificate Chain Issues[¶](#certificate-chain-issues "Permanent link")

When a website presents an SSL/TLS certificate, it's not just about the certificate itself. The certificate is part of a chain of trust, which consists of several certificates linked together:

- **End User Certificate**: This is the certificate for the website.
- **Intermediate Certificate(s)**: These certificates act as intermediaries between the end-entity certificate and the root certificate.
- **Root Certificate**: This is a certificate issued by a trusted Certificate Authority (CA). Root certificates are pre-installed in browsers and operating systems.

If the server hosting the website doesn’t provide the full chain of intermediate certificates, the browser or client may not be able to validate the trust chain all the way up to a trusted root certificate. This missing link can cause a trust problem and result in a `Certificate Not Trusted` error.

If the root certificate that ultimately vouches for the certificate chain is not in the client’s trust store (it’s not recognized by the browser or operating system), the certificate chain cannot be trusted. This can happen if the CA is not in the client’s list of trusted root CAs.

If the certificate presented does not match the domain name of the site (a certificate for `example.com` used on `example.net`), it can also lead to trust issues. This issue can also lead to a `Certificate Not Trusted` error displayed on the browser when the user tries to access a page on a website.

Addressing certificate chain issues can be a challenge and we recommend seeking help from your hosting provider. In general, you should:

- Ensure that all intermediate certificates are properly configured and served by the website.
- Ensure that the root certificates are up-to-date in the client’s trust store.
- Verify that no certificates in the chain are expired or revoked.
- Ensure that the certificate matches the domain it is intended to secure.

### File And Folder Issues[¶](#file-and-folder-issues "Permanent link")

Some SSL/TLS Certificate Authorities use two methods to verify domain ownership prior to issuing a certificate:

- HTTP-01 challenge
- DNS-01 challenge.

**HTTP-01 Challenge**: This is the most common method. The CA provides a token to an ACME client, and the client places a file with this token on the server for example, `https://example.com/.well-known/acme-challenge/123456` (where the token is `123456`).

**DNS-01 Challenge**: This method requires the domain owner to demonstrate control over DNS by adding a specific value in a `TXT` record. The CA may provide a token to the ACME client, and the client creates a `TXT` record based on that token and the account key, placing it at, for example, `acme-challenge.example.com`.

It is important  to ensure that file permissions for the involved directories are set correctly when using HTTP-01 file-based verification. Sometimes, users change file and folder permissions, which can prevent the creation of required files for verification, causing the process to fail. In the event of a failed verification, an SSL certificate will not be issued, and an expired or self-signed certificate will be used, resulting in a `Certificate Not Trusted` error message for users trying to access the website.

If you are using a control panel like CyberPanel, you can resolve this issue by navigating to **Websites -> List Websites**. Then, click the **Manage** button next to the website, and use the **File Manager** option to open the file manager for that website. Click the **Fix Permissions** button at the top right. CyberPanel will fix the permissions for you.

### Security Blocking Issues[¶](#security-blocking-issues "Permanent link")

If a security solution such as ModSecurity is in use to protect the server and websites, sometimes, the security solution can block legitimate traffic considering it spam or an attack.

For example, Let's Encrypt verifies the domain's identity by checking if the file it provides is accessible at your domain. It does this by accessing the file from multiple servers to confirm that you are the owner or an authorized person for that domain.

Since Let's Encrypt issues millions of certificates per day, their servers generate a lot of traffic, and sometimes spam-fighting software and public DNSBL’s mistakenly identify this traffic as spam and puts Let's Encrypt server IPs on their blacklists. As a result, ModSecurity blocks all connections from those IPs, which prevents Let's Encrypt from verifying the domain and issuing an SSL certificate. Since Let's Encrypt does not publicly advertise a list of all server IP addresses you can temporarily disable the security solution, renew the SSL certificates and set the security solution back ON. Alternatively you can whitelist the URI  the CA uses for SSL certificate issuance. For example, the Lets Encrypt URI is `/.well-known/acme-challenge/`.

## Mixed Content Errors[¶](#mixed-content-errors "Permanent link")

Mixed content errors occur when a web page is loaded over a secure HTTPS connection, but some of the resources, such as CSS files, JavaScript files, or image files, are loaded over an insecure HTTP connection. Most browsers are strict about mixed content, and when detected, they display a warning to the user, indicating that the page contains both secure and insecure elements. Some browsers will block the loading of HTTP resources on a site loaded on HTTPS.

Having mixed content on a site also creates a security vulnerability because it potentially allows attackers to manipulate the insecure resources and compromise a user’s interaction with a website. To fix mixed content errors, you need to ensure that all resources are loaded over a secure connection (HTTPS). This typically involves updating links and references to resources within the website’s code, ensuring that they use the HTTPS protocol instead of HTTP, or adjusting LiteSpeed server configuration to enforce loading of all URLs on HTTPS.

To verify you’re dealing with a mixed content issue, check the inspect tool for mixed content errors in the console tab. If mixed content errors are present you will see error messages such as:

```
Mixed Content: The page at 'https://example.com/' was loaded over HTTPS, but requested an insecure stylesheet 'http://example.com/?ver=4.7.3'. This request has been blocked; the content must be served over HTTPS.
```

These types of errors can occur on any site, but here are a few ways to resolve mixed content errors if you're using WordPress:

- Updating the site URL in WordPress settings
- Updating CSS or JS code on your WordPress site
- Using a search and replace plugin

To update the site URL in WordPress settings, log in to your WordPress dashboard and click Settings, General. Update the WordPress Address (URL) and Site Address (URL) settings from `http://example.com` to `https://example.com`. This will update the WordPress site access from HTTP to HTTPS. Remember to replace `example.com` with your actual domain name

Updating the CSS or JS code on your WordPress site is another possibility however this method may be time consuming and complicated. You will need an understanding of the structure of the theme and how pages and URLs are dynamically generated. If you are not the author of the theme we recommend contacting your WordPress developer or theme publisher for assistance

You can also fix mixed content issues using a search and replace WordPress plugin. Such plugins make it possible to search for a particular string (`http://`) in the WordPress system and replace that string with a specified new string (`https://`). An example is the Better Search and Replace plugin. just be careful with this kind of plugin. A single typo can bring your site to its knees and be impossible to reverse. Make sure you have a full backup in place.

## Max SSL Connections Reached[¶](#max-ssl-connections-reached "Permanent link")

The following is an example of a `max SSL connections reached` error:

```
2018-09-17 17:46:41.037821 [NOTICE] [10.33.0.1:443] max SSL connections reached, max: 500, available: 0, suspend accepting!
2018-09-17 17:46:41.699669 [NOTICE] Resume SSL Listeners
2018-09-17 17:46:41.701547 [NOTICE] [10.33.0.1:443] max SSL connections reached, max: 500, available: 0, suspend accepting!
2018-09-17 17:46:42.846374 [NOTICE] Resume SSL Listeners
```

To fix it, navigate to **LSWS WebAdmin Console > Server > Tuning** and increase the value of **Max SSL Connections**. Click the **Graceful Restart** button.

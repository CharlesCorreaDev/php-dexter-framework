# OCSP Stapling | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/ocsp-stapling/

---

# OCSP Stapling[¶](#ocsp-stapling "Permanent link")

Online Certificate Status Protocol (OCSP) is an alternative to the Certificate Revocation List (CRL) protocol, and is used to check whether an SSL Certificate has been revoked. OCSP is an improvement over CRL because it allows the server to query the responder directly and then cache the response.

Requirements:

- Non-self-signed SSL Certificate
- Port 443 enabled for https
- HTTPD Server 2.3.3+ (if using Apache config method)

## Apache Config[¶](#apache-config "Permanent link")

Follow the same method as for an Apache server, as decribed at [digicert.com](https://www.digicert.com/ssl-support/apache-enable-ocsp-stapling-on-server.htm) or [globalsign.com](https://support.globalsign.com/customer/portal/articles/1642333-apache---enable-ocsp-stapling).

## LiteSpeed Native[¶](#litespeed-native "Permanent link")

In the WebAdmin Console, navigate to **Configuration > Listeners > Add** to add a listener.

- Set **Secure** to `Yes`.
- The other settings should be customized to listen to the correct IP and port for the virtual hosts this listener will be mapping to.

Save your settings.

Use the **View/Edit** link to open up the new listener again, and navigate to the **SSL** tab.

- Enter the paths and locations for your certificates and key files.
- Set **Enable OCSP Stapling** to `Yes`
- Set **OCSP Responder** to the address of your OCSP responder. The server may be able to find it in the CA certificate, but it's better if you can enter it yourself. Check with your CA for your OCSP responder's address.

Click the **Apply Changes** link to execute a graceful restart and apply your changes.

## Verify OCSP is Working[¶](#verify-ocsp-is-working "Permanent link")

There are three ways to verify that OCSP stapling is working.

- **METHOD 1:** Visit [SSL Labs](https://www.ssllabs.com/ssltest/index.html), run the test for your domain, and search the results for `OCSP stapling`.
- **METHOD 2:** Check the `/dev/shm/lsws/ocspcache/` directory. If files have been created there, then your OCSP stapling is working.
- **METHOD 3:** Use the `openssl` command:

  ```
  openssl s_client -connect Your_Domain:443 -status | grep "OCSP Response Status"
  ```

  If OCSP stapling is working, it will show `ok`. Check **OCSP Response Status** in the **OCSP Response Data** section. It should be `successful`.

Note

The OCSP response is cached for 1 day. If you change your SSL certificate provider and see a cached OCSP response for a domain, you can safely remove the cache files under OCSP cache folder, but do not remove the folder itself.

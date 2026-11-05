# OCSP Stapling | cPanel | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/ocsp-stapling/

---

# OCSP Stapling[¶](#ocsp-stapling "Permanent link")

Online Certificate Status Protocol (OCSP) is an alternative to the Certificate Revocation List (CRL) protocol, and is used to check whether an SSL Certificate has been revoked. OCSP is an improvement over CRL because it allows the server to query the responder directly and then cache the response.

Requirements:

- Non-self-signed SSL Certificate
- Port 443 enabled for https
- HTTPD Server 2.3.3+

## Enable OCSP[¶](#enable-ocsp "Permanent link")

cPanel/WHM enables OCSP automatically in `/etc/apache2/conf/httpd.conf` so there is nothing you need to do.

```
<IfModule socache_shmcb_module>
  SSLUseStapling On
  SSLStaplingCache shmcb:/run/apache2/stapling_cache_shmcb(256000)
  # Prevent browsers from failing if an OCSP server is temporarily broken.
  SSLStaplingReturnResponderErrors off
  SSLStaplingErrorCacheTimeout 60
  SSLStaplingFakeTryLater off
  SSLStaplingResponderTimeout 3
  SSLSessionCache shmcb:/run/apache2/ssl_gcache_data_shmcb(1024000)
</IfModule>
```

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

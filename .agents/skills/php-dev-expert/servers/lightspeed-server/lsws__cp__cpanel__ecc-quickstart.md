# ECC Certificates | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/ecc-quickstart/

---

# ECC Certificates Quick Start[¶](#ecc-certificates-quick-start "Permanent link")

## About ECC Certificates[¶](#about-ecc-certificates "Permanent link")

RSA is currently the industry standard for public-key cryptography and is used in the majority of SSL/TLS certificates. An ECC SSL certificate is similar to a traditional RSA SSL certificate with the exception of using Elliptic Curve Cryptography (ECC) for it’s key exchange (elliptic-curve Diffie–Hellman [ECDH]) and signing (Elliptic Curve Digital Signature Algorithm [ECDSA]) operations.

An ECC certificate can achieve the same level of security as that of an RSA certificate at a much smaller size with the added benefit of ECC also being easier to encrypt/decrypt than RSA (especially attractive for mobile users who may have underpowered processors). Because of the smaller key size with an ECC certificate, less data is transmitted from the server to the client during the SSL handshake. ECC certificates also require less CPU and memory, increasing network performance and making a potentially large difference on high-volume or high-traffic sites.

An ECC certificate is a good solution if you want to support Internet Explorer 11 without having to use a weak cipher suite for RSA. It is also a good solution when you need to run an online gateway transaction which requires PCI compliance.

LiteSpeed Web Server both supports ECC certificate usage directly and, as of version 6.0, has the ability to load ECC certificates in parallel with existing RSA certificates when the **Enable Multiple SSL Certificates** setting is set (it's disabled by default). In the case of parallel loading, ECC certificates will be used for SSL if supported by the browser/protocol making the request. If unsupported, it will fall back to existing DSA/RSA certificates.

## Enable ECC Certificates[¶](#enable-ecc-certificates "Permanent link")

You can enable and generate ECC Certificates through LiteSpeed's WHM/cPanel plugins.

### Enable ECC Generation in WHM Plugin[¶](#enable-ecc-generation-in-whm-plugin "Permanent link")

Navigate to **WHM plugin > Settings > Enable EC Certificate Generation**. Set **Enable EC Certificate Generation** to `On` or `On + Auto`. See [the full documentation](lsws__cp__cpanel__whm-litespeed-plugin__cpanel-plugin.md#enable-ec-certificate-generation) for more information about these settings.

### Generate ECC Certificates through cPanel plugin[¶](#generate-ecc-certificates-through-cpanel-plugin "Permanent link")

Navigate to **cPanel plugin > LiteSpeed Web Cache Manager > EC Certificate Management > Manage EC Certificates** and click `Generate` for the domain in question. See [the full documentation](lsws__cp__cpanel__whm-litespeed-plugin__cpanel-plugin.md#ec-certificate-management-manage-ec-certificates) for more information about this screen.

### Enable Multiple SSL Certificates on LSWS[¶](#enable-multiple-ssl-certificates-on-lsws "Permanent link")

Navigate to **LSWS Web Admin Console > Configuration > Server > Tuning > SSL Global Settings** and set **Enable Multiple SSL Certificates** to `Yes`.

Alternatively you can edit the LSWS configuration file in the `Tuning` section by adding the following:

```
<sslEnableMultiCerts>1</sslEnableMultiCerts>
```

cPanel autoSSL will generate RSA SSL certificates in `/var/cpanel/ssl/apache_tls/yourdomain.com/combined`, and LiteSpeed WHM/cPanel will generate ESS certificates in the same location with an `.ecc` extension, as in `combined.ecc`.

## Test ECC Certificate[¶](#test-ecc-certificate "Permanent link")

Using an online tool such as ssllabs.com may not work since the tool won't force ECDSA cipher. You should use the command line to enforce ECDSA cipher to test an ECC certificate, like so:

```
openssl s_client -cipher 'ECDHE-ECDSA-AES128-GCM-SHA256' -servername yourdomain.com -connect yourdomain.com:443
```

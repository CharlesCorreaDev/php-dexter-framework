# Security

> **Fonte / Source:** https://nginx.org/en/docs/njs/security.html

---

## Security

All nginx security issues should be reported
via one of the methods listed
[here](https://github.com/nginx/njs/blob/master/SECURITY.md).

Patches are signed using one of the
[PGP public keys](https://nginx.org/en/pgp_keys.html).

#### Special considerations

njs does not evaluate dynamic code,
especially code received from the network, in any way.
The only way to evaluate that code using njs
is to configure the
[js\_import](http__ngx_http_js_module.md#js_import)
directive in nginx.
JavaScript code is loaded once during nginx start.

In the nginx/njs threat model, JavaScript code is considered a trusted source
in the same way as `nginx.conf` and sites certificates.
What this means in practice:

- memory disclosure and other security issues
  triggered by JavaScript code modification
  are not considered security vulnerabilities, but rather ordinary bugs
- measures should be taken for protecting JavaScript code used by njs
- if no [js\_import](http__ngx_http_js_module.md#js_import)
  directives are present in `nginx.conf`,
  nginx is safe from JavaScript-related vulnerabilities

#### Advisories

- Memory exhaustion when parsing malformed XML  
  Severity: medium  
  [Advisory](https://my.f5.com/manage/s/article/K000162614)  
  [CVE-2026-101025](https://www.cve.org/CVERecord?id=CVE-2026-101025)  
  Not vulnerable: 1.0.2+  
  Vulnerable: 0.7.10-1.0.1
- Inconsistent XML attribute values  
  Severity: medium  
  [Advisory](https://my.f5.com/manage/s/article/K000162615)  
  [CVE-2026-101019](https://www.cve.org/CVERecord?id=CVE-2026-101019)  
  Not vulnerable: 1.0.2+  
  Vulnerable: 0.7.10-1.0.1
- Access control bypass in js\_access  
  Severity: medium  
  [Advisory](https://my.f5.com/manage/s/article/K000162599)  
  [CVE-2026-18329](https://www.cve.org/CVERecord?id=CVE-2026-18329)  
  Not vulnerable: 1.0.1+  
  Vulnerable: 0.9.9-1.0.0
- Worker process crash in ngx.fetch()  
  Severity: medium  
  [Advisory](https://my.f5.com/manage/s/article/K000162603)  
  [CVE-2026-78222](https://www.cve.org/CVERecord?id=CVE-2026-78222)  
  Not vulnerable: 1.0.1+  
  Vulnerable: 0.5.1-1.0.0
- Heap buffer overflow in xml.exclusiveC14n()  
  Severity: **major**  
  [Advisory](https://my.f5.com/manage/s/article/K000162602)  
  [CVE-2026-78689](https://www.cve.org/CVERecord?id=CVE-2026-78689)  
  Not vulnerable: 1.0.1+  
  Vulnerable: 0.7.10-1.0.0
- Heap buffer overflow in js\_fetch\_proxy  
  Severity: medium  
  [Advisory](https://my.f5.com/manage/s/article/K000161307)  
  [CVE-2026-8711](https://www.cve.org/CVERecord?id=CVE-2026-8711)  
  Not vulnerable: 0.9.9+  
  Vulnerable: 0.9.4-0.9.8

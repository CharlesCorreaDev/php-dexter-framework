# FreeScout Dependencies Security · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/FreeScout-Dependencies-Security

---

[« FreeScout Security](https://github.com/freescout-helpdesk/freescout/wiki/FreeScout-Security)

You can read how FreeScout Team ensures dependencies security [here](https://github.com/freescout-helpdesk/freescout/wiki/Development-Guide#maintaining-security-and-laravel-no-upgrade-policy).

Below is the list of known security issues in dependencies along with the information on patches fixing them in FreeScout.

---

> `league/flysystem` **Flysystem: WhitespacePathNormalizer's control-character (CorruptedPathDetected) check is bypassed by malformed UTF-8 in the path, affecting every adapter**
>
> <https://github.com/advisories/GHSA-cxf4-7mrp-vvpr>
>
> *Fix: [9dab31f](https://github.com/freescout-help-desk/freescout/commit/9dab31fc9fe5b812f107d8efd40a2180f61a60fc)*

---

> `laravel/framework` **Laravel Framework: CRLF injection in default email rule**
>
> <https://github.com/advisories/GHSA-5vg9-5847-vvmq>
>
> *Fix: [5f2925ef](https://github.com/freescout-help-desk/freescout/commit/5f2925ef)*

---

> `symfony/routing` **UrlGenerator Dot-Segment Encoding Skips Every Other Chained `../` or `./` → Generated URL Collapses Off-Route Under RFC 3986 Normalization**
>
> <https://github.com/advisories/GHSA-h5x3-xfc9-m39h>
>
> *Fix: [5f2925ef](https://github.com/freescout-help-desk/freescout/commit/5f2925ef)*

---

> `guzzlehttp/guzzle` **GHSA-wpwq-4j6v-78m3: Dot-Only Cookie Domains Match All Hosts**
>
> <https://github.com/advisories/GHSA-wpwq-4j6v-78m3>
>
> *Fix: [637fce7d](https://github.com/freescout-help-desk/freescout/commit/637fce7d)*

---

> `guzzlehttp/guzzle` **GHSA-cwxw-98qj-8qjx: Dot-Only Cookie Domains Match All Hosts**
>
> <https://github.com/advisories/GHSA-cwxw-98qj-8qjx>
>
> *Fix: [e188765c](https://github.com/freescout-help-desk/freescout/commit/e188765c)*

---

> `guzzlehttp/psr7` **GHSA-34xg-wgjx-8xph: guzzlehttp/psr7 has Host Confusion via Authority Reinterpretation**
>
> <https://github.com/advisories/GHSA-34xg-wgjx-8xph>
>
> *Fix: [5b5ce88a](https://github.com/freescout-help-desk/freescout/commit/5b5ce88a)*

---

> `guzzlehttp/psr7` **GHSA-hq7v-mx3g-29hw: Reject control and whitespace characters in URI host components**
>
> <https://github.com/advisories/GHSA-hq7v-mx3g-29hw>
>
> *Fix: [7337879a](https://github.com/freescout-help-desk/freescout/commit/7337879a)*

---

> `guzzlehttp/psr7` **GHSA-vm85-hxw5-5432: Mitigate CRLF Injection in HTTP Start-Line Serialization**
>
> <https://github.com/advisories/GHSA-vm85-hxw5-5432>
>
> *Fix: [adec0de3](https://github.com/freescout-help-desk/freescout/commit/adec0de3)*

---

> `symfony/routing` **CVE-2026-45065: Symfony has a UrlGenerator Route-Requirement Bypass via Unanchored Regex Alternation → Off-Site //host URL Injection**
>
> <https://github.com/advisories/GHSA-72xp-p242-47p9>
>
> *Fix: [e2b4151](https://github.com/freescout-help-desk/freescout/commit/e2b4151e788cb0c0a6fcf0c157379202f77b7363)*

> `phpunit/phpunit` **GHSA-qrr6-mg7r-m243: PHPUnit has Argument injection via newline in PHP INI values that are forwarded to child processes**
>
> <https://github.com/advisories/GHSA-qrr6-mg7r-m243>
>
> *Fix: [25edceb](https://github.com/freescout-help-desk/freescout/commit/25edcebd770aa92285c7689736138fcc31a6f355)*

> `psy/psysh` **CVE-2026-25129: PsySH has Local Privilege Escalation via CWD .psysh.php auto-load**
>
> <https://github.com/freescout-help-desk/freescout/security/dependabot/96>
>
> *Fix: [e76b683](https://github.com/freescout-help-desk/freescout/commit/e76b683d8516fde524dfe22e1cb4e466a73108cd)*

> `symfony/process` **CVE-2026-24739: Symfony's incorrect argument escaping under MSYS2/Git Bash can lead to destructive file operations on Windows**
>
> <https://github.com/freescout-help-desk/freescout/security/dependabot/95>
>
> *Fix: [2919365](https://github.com/freescout-help-desk/freescout/commit/2919365ca0ba194b5dc470e57646705a0899b80b)*

> `phpunit/phpunit` **CVE-2026-24765: PHPUnit Vulnerable to Unsafe Deserialization in PHPT Code Coverage Handling**
>
> <https://github.com/freescout-help-desk/freescout/security/dependabot/94>
>
> *Fix: [c862181](https://github.com/freescout-help-desk/freescout/commit/c8621813b8ee179c184023067de1f9653e02c2e9)*

> `symfony/http-foundation` **CVE-2025-64500: Symfony's incorrect parsing of PATH\_INFO can lead to limited authorization bypass**
>
> <https://github.com/freescout-help-desk/freescout/security/dependabot/93>
>
> *Fix: [4b67a88](https://github.com/freescout-help-desk/freescout/commit/4b67a88227bb61248efcae9e89dfca28d32229b3)*

*Before November 20225:*

---

#### laravel/framework

```
Laravel environment manipulation via query string
https://github.com/advisories/GHSA-gv7v-rgg6-548h
```

*Fix: [f411f8c](https://github.com/freescout-help-desk/freescout/commit/f411f8cf5a5f60b4dad71900560072ac62997a66)*

```
RCE vulnerability in "cookie" session driver
https://blog.laravel.com/laravel-cookie-security-releases
```

*Fix: [822fb85](https://github.com/freescout-helpdesk/freescout/commit/822fb85f1c534131a02274971a19dd50a2109c8b)*

---

```
CVE-2021-43808: Possible cross-site scripting (XSS) vulnerability in the Blade templating engine
https://github.com/laravel/framework/security/advisories/GHSA-66hf-2p6w-jqfw
```

*Fix: [1e871813](https://github.com/freescout-helpdesk/freescout/commit/1e871813)*

---

```
Guard bypass in Eloquent models
https://blog.laravel.com/security-release-laravel-61834-7232
```

*Fix: [21d86327](https://github.com/freescout-helpdesk/freescout/commit/21d86327)*

---

```
GHSA-6jvx-8ch9-j2jr: Laravel Cookie serialization vulnerability
https://github.com/advisories/GHSA-6jvx-8ch9-j2jr
```

*Fix: [83636503](https://github.com/freescout-helpdesk/freescout/commit/83636503)*

---

```
CVE-2018-15133: Laravel Framework RCE Vulnerability 
https://github.com/advisories/GHSA-qvqm-h22r-4cp9

GHSA-qm5c-m76r-2hfr: Laravel RCE vulnerability in "cookie" session driver
https://github.com/advisories/GHSA-qm5c-m76r-2hfr
```

*Fix: [83636503](https://github.com/freescout-helpdesk/freescout/commit/83636503)*

---

```
CVE-2020-19316: OS Command Injection in Laravel Framework 
https://github.com/advisories/GHSA-w2pm-r78h-4m7v
```

*Fix: [cf072514](https://github.com/freescout-helpdesk/freescout/commit/cf072514)*

---

```
CVE-2020-24941: Improper Input Validation in Laravel
https://github.com/advisories/GHSA-w68r-5p45-5rqp
```

*Fix: [21d86327](https://github.com/freescout-helpdesk/freescout/commit/21d86327)*

#### symfony/http-foundation

```
CVE-2019-10913: Reject invalid HTTP method overrides
https://symfony.com/cve-2019-10913
```

*Fix: [ba8296ef](https://github.com/freescout-helpdesk/freescout/commit/ba8296ef)*

---

```
CVE-2019-18888: CVE-2019-18888: Prevent argument injection in a MimeTypeGuesser
https://symfony.com/cve-2019-18888
```

*Fix: [c6b50b2c](https://github.com/freescout-helpdesk/freescout/commit/c6b50b2c)*

#### symfony/http-kernel

```
CVE-2022-24894: CVE-2022-24894: Prevent storing cookie headers in HttpCache
https://symfony.com/cve-2022-2489
```

*Fix: [9c1c1806](https://github.com/freescout-helpdesk/freescout/commit/9c1c1806)*

---

```
CVE-2019-18887: CVE-2019-18887: Use constant time comparison in UriSigner
https://symfony.com/cve-2019-18887
```

*Fix: [6bb91df7](https://github.com/freescout-helpdesk/freescout/commit/6bb91df7)*

#### barryvdh/laravel-translation-manager

```
Stored XSS in Laravel Translation Manager
https://github.com/barryvdh/laravel-translation-manager/security/advisories/GHSA-j226-63j7-qrqh
```

*Fix: [570e3b9](https://github.com/freescout-help-desk/freescout/commit/570e3b9)*

```
Possibility for Denial of Service by overwriting PHP files with language export
https://github.com/advisories/GHSA-w68r-5p45-5rqp
```

*Fix: [61335476](https://github.com/freescout-helpdesk/freescout/commit/61335476)*

#### webklex/laravel-imap

```
CVE-2023-35169: php-imap vulnerable to RCE through a directory traversal vulnerability
https://github.com/advisories/GHSA-47p7-xfcc-4pv9
```

*Fix: [d62bf49e](https://github.com/freescout-helpdesk/freescout/commit/d62bf49e)*

#### webklex/php-imap

```
CVE-2023-35169: php-imap vulnerable to RCE through a directory traversal vulnerability
https://github.com/advisories/GHSA-47p7-xfcc-4pv9
```

*Fix: [d62bf49e](https://github.com/freescout-helpdesk/freescout/commit/d62bf49e)*

---

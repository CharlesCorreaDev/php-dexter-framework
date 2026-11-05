# Security FAQ | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/security-faq

---

Search Knowledge Base

# Security FAQ

At Pixel & Tonic, we take security very seriously and work to ensure Craft provides a safe and secure platform for all users. As a result, Craft CMS is trusted by corporations like Microsoft, Apple, Reddit, Adobe, BigCommerce, Netflix, AT&T, McDonald’s, and Dell, as well as numerous government, financial, and educational organizations.

Below are answers to frequently asked questions about Craft security.

## What security practices do Pixel & Tonic employ? [#](#what-security-practices-do-pixel-tonic-employ "Direct link to What security practices do Pixel &amp; Tonic employ?")

Our codebases and their dependencies undergo regular security reviews by our team and third-party security researchers, with both manual code inspection and automated auditing tools used. We also regularly interact with security experts to stay current on best practices and learn about new attack vectors.

## Do you have a security policy in place? [#](#do-you-have-a-security-policy-in-place "Direct link to Do you have a security policy in place?")

The most up-to-date version of our [Security Policy](https://github.com/craftcms/.github/blob/v3/SECURITY.md).

## What measures have been implemented to secure Craft at a core level? [#](#what-measures-have-been-implemented-to-secure-craft-at-a-core-level "Direct link to What measures have been implemented to secure Craft at a core level?")

Craft CMS provides the following built-in security measures:

- Craft and Yii use [PDO](https://php.net/manual/en/book.pdo.php) for all database queries, and all dynamic values are parameterized, helping prevent SQL injection attacks.
- Craft validates sensitive cookie data using a private key to ensure request cookies have not been tampered with.
- Craft uses [CSRF token validation](kb__enabling-csrf-protection.md) by default to help prevent [CSRF attacks](https://en.wikipedia.org/wiki/Cross-site_request_forgery).
- Twig [automatically escapes](https://twig.symfony.com/doc/2.x/templates.html#html-escaping) HTML entities that are dynamically output by default, helping avoid [XSS attack](https://en.wikipedia.org/wiki/Cross-site_scripting) vectors.
- By default, untrusted HTML is sanitized with [HTML Purifier](https://htmlpurifier.org/).
- By default, untrusted SVG documents are sanitized with [SVG Sanitizer](https://github.com/darylldoyle/svg-sanitizer).
- Uploaded file names are cleansed, and images are resaved on upload to remove any malicious code embedded within the image.
- Sensitive information, such as passwords and security keys, are redacted from error messages and logs.
- Craft verifies new email addresses on user accounts by default before accepting them.
- Craft temporarily locks user accounts by default after too many unsuccessful login attempts.
- Craft requires users to re-enter their password within the past 5 minutes by default before performing potentially malicious actions, including changing emails or passwords or assigning new user roles, groups, or permissions.
- Craft provides granular permissions on user accounts and user groups via a simple and intuitive permission system.
- Craft stores the user agent string in identity cookies by default, helping avoid session/cookie hijacking.
- Craft will deny all requests to start a session that don’t present a user agent string or IP address, helping prevent direct socket connections.
- Craft 5 requires PHP 8.2+.
- Craft uses [OpenSSL](https://php.net/manual/en/book.openssl.php) to generate cryptographically secure email verification codes, password reset tokens, and other strings.
- Craft will use the native PHP [password\_hash()](https://secure.php.net/manual/en/function.password-hash.php) method if it is available, which defaults to the blowfish algorithm, arguably the most secure and reliable method of password encryption. If it is not available, it will use PHP’s native [crypt()](https://secure.php.net/manual/en/function.crypt.php) method using the blowfish algorithm with a strong, cryptographically-secure random salt.
- Session cookies are set to HTTP only.
- Craft will set the `secure` flag on all cookies sent over SSL by default.
- Craft sets the `X-Frame-Options: SAMEORIGIN` header on all Control Panel requests, helping prevent clickjacking.
- Craft sets the `X-Content-Type-Options: nosniff` header on all Control Panel requests, helping prevent some Ajax XSS attack vectors on older versions of Internet Explorer.
- Control Panel requests use the `origin-when-cross-origin` referrer policy, preventing outbound links from learning the full URL of the Control Panel.
- Craft uses time-safe methods for sensitive comparisons like checking the equality of password hashes, helping prevent [timing attacks](https://en.wikipedia.org/wiki/Timing_attack).
- Craft’s default folder structure encourages people to keep application files above the web root, and the System Report utility in the Control Panel will warn you if that appears not to be the case.
- New Craft projects have [sandboxed template rendering](https://craftcms.com/docs/5.x/reference/config/general.html#enabletwigsandbox) enabled, by default.

Additionally, Craft provides several config settings that can be set to further strengthen security, which are listed in the [Securing Craft](kb__securing-craft.md) guide.

## What happens if a security issue is reported? [#](#what-happens-if-a-security-issue-is-reported "Direct link to What happens if a security issue is reported?")

When a security issue is reported, we confirm its validity quickly and implement a fix as soon as possible.

If there is a public exploit, we’ll mark the update as critical, triggering an alert across the top of all unpatched Craft installations.

## How can I find out about new security incidents? [#](#how-can-i-find-out-about-new-security-incidents "Direct link to How can I find out about new security incidents?")

There are a few ways to keep track of security-related incidents and improvements:

- We provide a dedicated [Critical Releases](https://feeds.craftcms.com/critical.atom) Atom feed with the release notes for all Craft CMS and plugin releases marked as critical. *This is the fastest way to be notified about critical security issues.*
- We make announcements in the `#security` channel of our [Discord server](https://craftcms.com/discord).
- You can watch the [craftcms/cms](https://github.com/craftcms/cms/) repository on GitHub. To only receive notifications for security alerts such as published [security advisories](https://github.com/craftcms/cms/security/advisories?state=published), choose **Custom** → **Security alerts** in the watch settings. *Incidents are reported here on their agreed-upon disclosure date.*
- We document all security-related improvements in the [Craft CMS changelog](https://github.com/craftcms/cms/blob/master/CHANGELOG.md). Full release notes are provided with each item in our [Craft CMS Releases](https://feeds.craftcms.com/cms.atom) Atom feed. *All Craft releases are published here, so close attention must be paid to the substance of each release if you plan to use this as a discovery mechanism.*
- Visit the **Utilities** → **Updates** screen in the control panel of any Craft project to refresh the update availability cache. Critical updates are marked with a badge. All other pages in the control panel will display a banner.

![](https://craftcms.com/dist/images/icon-loading.png)

![Craft CMS Updater: Critical update available]()

The in-app updater displaying a critical update.

## What do I do when a vulnerability is published? [#](#what-do-i-do-when-a-vulnerability-is-published "Direct link to What do I do when a vulnerability is published?")

[Update Craft](https://craftcms.com/docs/5.x/update.html) to a patched version. Every disclosure includes the affected and patched version numbers.

If you cannot update immediately, we provide a [rough guideline](https://github.com/craftcms/.github/blob/v3/SECURITY.md#severity--remediation) of when we recommend updating based on the reported severity of the issue.

Whenever possible, we also provide hot patches for critical vulnerabilities via the [`craftcms/security-patches` extension](https://github.com/craftcms/security-patches). This is *not* a suitable alternative to updating Craft, but can be used in emergencies or when licensing would otherwise complicate an update. If you do not see a particular vulnerability in the [listed mitigations](https://github.com/craftcms/security-patches#mitigated-security-advisories), *you must update Craft*.

On occasion, vulnerabilities can be temporarily patched with server or firewall configuration. *Application-level fixes via updates are strongly preferred*, so that a project is not re-exposed if it moves to new infrastructure.

If you suspect your site has been compromised, additional steps may be necessary to secure user accounts, content, and the hosting environment.

## I’ve found a security vulnerability. How should I report it? [#](#ive-found-a-security-vulnerability-how-should-i-report-it "Direct link to I’ve found a security vulnerability. How should I report it?")

If you’ve found a security vulnerability in one of our codebases, please read and follow our [Security Policy](https://craftcms.com/security).

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

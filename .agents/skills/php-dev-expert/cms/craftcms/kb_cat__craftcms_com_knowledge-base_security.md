# Guides: Security | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/security

---

Search Knowledge Base

# Security Articles

- [Sendmail and DKIM

  Projects or hosts for which the only mail transport option is the built-in sendmail adapter can still provide DKIM protection for automated emails.
  Craft’s mailer component can be configured to sign all outgoing messages using a private key. Once you’ve generated a key pair and added the required DNS records, save the private key to your development environment, outside the web root (i.e. in the storage/ directory), and do not commit it to a git repository.
  Configuration
  In config/app.php, add the following:
  `php
  use Craft;
  use craft\helpers\App;
  use yii\symfonymailer\DkimMessageSigner;
  use Symfony\Component\Mime\Crypto\DkimSigner;
  return [
  'components' => [
  'mailer' => function() {
  // Load the base mailer config:
  $config = App::mailerConfig();
  // Create a signer and add to the config map:
  $signer = new DkimSigner(
  'file://' . Craft::getAlias('@storage/private-dkim.key'),
  'sub.mydomain.com',
  'selector-name'
  );
  $config['signer'] = new DkimMessageSigner($signer);
  // Return the instantiated component:
  return Craft::createObject($config);
  },
  ],
  ];
  `
  sub.mydomain.com should be the sending domain, without the “selector” or \_domainkey prefixes. selector-name should agree with the prefix chosen when creating the key and DNS record.
  Outbound messages are automatically signed, when the mailer sees the signer configuration present. If there is a problem loading your key file, an error will be thrown.
  You can verify that the DKIM header is added to emails using DDEV’s Mailpit component, which runs alongside your other containers!
  `
  Return-Path: me@domain.com
  Received: from localhost (localhost [127.0.0.1])
  by my-project (Mailpit) with SMTP
  for <user@domain.com>; Thu, 30 Jan 2025 14:20:21 -0800 (PST)
  To: user@domain.com
  Subject: This is a test email from Craft
  From: My Craft Project me@domain.com
  MIME-Version: 1.0
  Date: Thu, 30 Jan 2025 14:20:21 -0800
  Message-ID: 58b7d8104bd2a2eb4cfb2213f0ca0b7e@domain.com
  DKIM-Signature: v=1; q=dns/txt; a=rsa-sha256;
  bh=O+M5ROO/rz3sH4RGCpfbvrQXjESEWlfnfUbnIcHiD5s=; d=domain.com; h=To:
  Subject: From: MIME-Version: Date: Message-ID; i=@domain.com; s=s1;
  t=1738275621; c=relaxed/relaxed;
  b=c07VmLWi+PtCxIXVmfOpOhZCJx0BuBgVWHyk0ebWCV6lqywxgNvpJP7+p65y9tfM7KOfcI+BW
  S6VNkDf2OfAYy4WBClGqbBUMLp9ciqVdfqcBMq+7JPIeIdz5RhEldYWrnISWS9eh765Yyeh/D
  cq2fDpzrBqi6oZRCs8B3PNFvI=
  Content-Type: multipart/alternative; boundary=Axz7Ni6l
  `](https://craftcms.com/knowledge-base/sendmail-and-dkim "Sendmail and DKIM")
- [Craft CMS and CVE-2025‑32432

  On April 7, 2025, we received a report of a Craft CMS vulnerability that was based on a vulnerability in the Yii framework. Yii fixed that vulnerability in Yii 2.0.52.
  We confirmed the vulnerability as valid and released Craft CMS versions 3.9.15, 4.14.15, and 5.6.17 on April 10th with an application-level fix.
  We marked those releases as critical so affected sites would display a banner to control panel users, urging them to update.
  On April 17, 2025, we discovered evidence to suggest the vulnerability was being exploited in the wild, so we emailed all potentially affected license holders, encouraging them to update or install the Craft CMS Security Patches library as a stop-gap.
  Triage
  If you check your firewall logs or web server logs and find suspicious POST requests to the actions/assets/generate-transform Craft controller endpoint, specifically with the string \_\_class in the body, then your site has at least been scanned for this vulnerability.
  This is not a confirmation that your site has been compromised; it has only been probed.](https://craftcms.com/knowledge-base/craft-cms-cve-2025-32432 "Craft CMS and CVE-2025‑32432")
- [Craft CMS, argc, and argv

  On December 19, 2024, we were made aware of reports that a Craft CMS vulnerability was being actively exploited.
  The vulnerability was patched on November 19, 2024 in Craft CMS versions 3.9.14, 4.13.2, and 5.5.2. We retroactively marked those releases as critical, after the disclosure and subsequent exploitation; affected sites will display a banner to control panel users, urging them to update.
  Triage
  If your web PHP configuration has register\_argc\_argv Off, no further action is required.
  You can view this setting in the Craft control panel by navigating to Utilities → PHP Info, and searching for register\_argc\_argv:](https://craftcms.com/knowledge-base/craft-cms-argc-and-argv "Craft CMS, argc, and argv")
- [Craft CMS and Log4j

  A severe, widespread vulnerability in the Java Log4j logging library has prompted extensive audits of web infrastructure that may include Craft CMS sites.
  Craft CMS is a PHP application with no direct relationship to Java or Log4j.
  So while Craft itself isn’t affected by the Log4j bug, you’ll still want to check with your hosting provider to be sure your infrastructure does not rely on any services that rely on Log4j and integrate with Craft. You might use Elasticsearch, for example, to collect and parse application and server logs—and that may use Log4j and be worth auditing.](https://craftcms.com/knowledge-base/craft-cms-and-log4j "Craft CMS and Log4j")
- [Securing Craft

  There are several steps you can take to strengthen the security of your Craft install.
  Do not enable Dev Mode in a production environment
  Dev Mode is intended for local development and should not be enabled in a production environment, where it can cause a wide range of security issues.
  Place your project’s source folder above your webroot
  The best way to ensure that Craft’s PHP files and other sensitive information are not directly accessible over HTTP traffic is to put your project’s source and runtime folders above your public webroot. Particularly vulnerable directories include:
  config/ — PHP, JSON, and YAML configuration files can provide an attacker with clues about your system’s version and settings.
  templates/ — Twig files give insight into your content schema, accepted query parameters, permissions, and more.
  storage/ — Extremely sensitive data, including database backups, lives here.
  vendor/ — Source files can reveal specific versions of installed software and give an attacker information about potential vulnerabilities.
  Any project-specific source directories for CSS or JavaScript
  Asset filesystem or volume roots that contain uploads that aren’t configured to have URLs and ought not to be publicly accessible.
  Additionally, a .env file within the webroot is not necessarily hidden from users—HTTP server misconfiguration can cause it (and other files beginning with a dot) to be served unintentionally.
  Our starter project’s directory structure keeps only essential files within the webroot. As long as it is not substantially reconfigured on a public server, it should protect sensitive files reasonably well.
  If you must to put your source folder below the webroot, ensure that users cannot directly access the contents of any files/folders within it. Remember that Craft’s source files (and other packages) are only part of the picture! Be mindful of other project files that might leak into the web root, such as design files, notes, and database backups.](https://craftcms.com/knowledge-base/securing-craft "Securing Craft")
- [Security FAQ

  At Pixel & Tonic, we take security very seriously and work to ensure Craft provides a safe and secure platform for all users. As a result, Craft CMS is trusted by corporations like Microsoft, Apple, Reddit, Adobe, BigCommerce, Netflix, AT&T, McDonald’s, and Dell, as well as numerous government, financial, and educational organizations.
  Below are answers to frequently asked questions about Craft security.
  What security practices do Pixel & Tonic employ?
  Our codebases and their dependencies undergo regular security reviews by our team and third-party security researchers, with both manual code inspection and automated auditing tools used. We also regularly interact with security experts to stay current on best practices and learn about new attack vectors.
  Do you have a security policy in place?
  The most up-to-date version of our Security Policy.
  What measures have been implemented to secure Craft at a core level?
  Craft CMS provides the following built-in security measures:
  Craft and Yii use PDO for all database queries, and all dynamic values are parameterized, helping prevent SQL injection attacks.
  Craft validates sensitive cookie data using a private key to ensure request cookies have not been tampered with.
  Craft uses CSRF token validation by default to help prevent CSRF attacks.
  Twig automatically escapes HTML entities that are dynamically output by default, helping avoid XSS attack vectors.
  By default, untrusted HTML is sanitized with HTML Purifier.
  By default, untrusted SVG documents are sanitized with SVG Sanitizer.
  Uploaded file names are cleansed, and images are resaved on upload to remove any malicious code embedded within the image.
  Sensitive information, such as passwords and security keys, are redacted from error messages and logs.
  Craft verifies new email addresses on user accounts by default before accepting them.
  Craft temporarily locks user accounts by default after too many unsuccessful login attempts.
  Craft requires users to re-enter their password within the past 5 minutes by default before performing potentially malicious actions, including changing emails or passwords or assigning new user roles, groups, or permissions.
  Craft provides granular permissions on user accounts and user groups via a simple and intuitive permission system.
  Craft stores the user agent string in identity cookies by default, helping avoid session/cookie hijacking.
  Craft will deny all requests to start a session that don’t present a user agent string or IP address, helping prevent direct socket connections.
  Craft 5 requires PHP 8.2+.
  Craft uses OpenSSL to generate cryptographically secure email verification codes, password reset tokens, and other strings.
  Craft will use the native PHP password\_hash() method if it is available, which defaults to the blowfish algorithm, arguably the most secure and reliable method of password encryption. If it is not available, it will use PHP’s native crypt() method using the blowfish algorithm with a strong, cryptographically-secure random salt.
  Session cookies are set to HTTP only.
  Craft will set the secure flag on all cookies sent over SSL by default.
  Craft sets the X-Frame-Options: SAMEORIGIN header on all Control Panel requests, helping prevent clickjacking.
  Craft sets the X-Content-Type-Options: nosniff header on all Control Panel requests, helping prevent some Ajax XSS attack vectors on older versions of Internet Explorer.
  Control Panel requests use the origin-when-cross-origin referrer policy, preventing outbound links from learning the full URL of the Control Panel.
  Craft uses time-safe methods for sensitive comparisons like checking the equality of password hashes, helping prevent timing attacks.
  Craft’s default folder structure encourages people to keep application files above the web root, and the System Report utility in the Control Panel will warn you if that appears not to be the case.
  New Craft projects have sandboxed template rendering enabled, by default.
  Additionally, Craft provides several config settings that can be set to further strengthen security, which are listed in the Securing Craft guide.
  What happens if a security issue is reported?
  When a security issue is reported, we confirm its validity quickly and implement a fix as soon as possible.
  If there is a public exploit, we’ll mark the update as critical, triggering an alert across the top of all unpatched Craft installations.
  How can I find out about new security incidents?
  There are a few ways to keep track of security-related incidents and improvements:
  - We provide a dedicated Critical Releases Atom feed with the release notes for all Craft CMS and plugin releases marked as critical. This is the fastest way to be notified about critical security issues.
  - We make announcements in the #security channel of our Discord server.
  - You can watch the craftcms/cms repository on GitHub. To only receive notifications for security alerts such as published security advisories, choose Custom → Security alerts in the watch settings. Incidents are reported here on their agreed-upon disclosure date.
  - We document all security-related improvements in the Craft CMS changelog. Full release notes are provided with each item in our Craft CMS Releases Atom feed. All Craft releases are published here, so close attention must be paid to the substance of each release if you plan to use this as a discovery mechanism.
  - Visit the Utilities → Updates screen in the control panel of any Craft project to refresh the update availability cache. Critical updates are marked with a badge. All other pages in the control panel will display a banner.](https://craftcms.com/knowledge-base/security-faq "Security FAQ")
- [How In-App Purchasing is Secure

  We’ve ensured that purchasing edition upgrades within Craft is as secure as possible. Here’s exactly what happens when you click ‘Purchase’:
  JavaScript passes your credit card info to Stripe over SSL in exchange for a secure, single-use token using Stripe.js
  JavaScript then passes the credit card token, the edition you’d like to purchase, and the amount you’re expecting to pay for it, back to your Craft install.
  Your Craft install takes everything passed to it in step 2, as well as your license key, and passes it all off to our web service over SSL.
  Our web service verifies that it was passed a valid Craft license, a valid edition ID, the correct price for the edition, and that the license isn’t already set to that edition (or a better one).
  If everything checks out, our web service sends a request to Stripe over SSL to charge the credit card represented by the token for the amount of the edition.
  If Stripe says that the charge was a success, the license is set to the edition.
  Our web service responds to Craft with the result of the transaction, or any validation errors that may have occurred.
  Craft passes the response back to JavaScript, which updates the UI accordingly.
  There is one known security vulnerability: if you’re accessing Craft from a public web server not going over SSL, you could be susceptible to a “man-in-the-middle attack”, where a third party with control over the network could hijack your control panel requests and alter their response’s contents, doctoring up a fake credit card form that doesn’t actually interact with Stripe in the manner described above. It’s unlikely, but worth mentioning.
  To avoid the possibly of that happening, you can either make your edition purchases on a local web server where you have full control over the entire network between the client and the server, or just install SSL on your web server and create an .htaccess redirect that forces SSL on CP requests.](https://craftcms.com/knowledge-base/how-in-app-purchasing-is-secure "How In-App Purchasing is Secure")
- [Enforcing SSL for Control Panel Requests

  Any time you’re managing a public website, it’s a good idea to force SSL in the areas that deal with user accounts and other sensitive information. If you’re running Craft, protecting the entire control panel with SSL is a good place to start.
  To force SSL for the Craft control panel, open up the .htaccess file in your web root, and add this to it:
  `bash
  RewriteEngine On
  # Force SSL for control panel requests
  RewriteCond %{HTTP\_HOST} example.com [NC]
  RewriteCond %{REQUEST\_URI} ^/admin/ [NC]
  RewriteCond %{HTTPS} !=on
  RewriteRule .\* https://%{HTTP\_HOST}%{REQUEST\_URI} [NC,R=301,L]
  `
  If you have an index.php redirect in there already (for the 'omitScriptNameInUrls' setting) this code should go before that.
  Let’s take this line-by-line so it’s clear what’s going on.
  `txt
  RewriteCond %{HTTP\_HOST} example.com$ [NC]
  `
  This prevents the redirect from affecting your local site. Set example\.com to your actual public domain name.
  `txt
  RewriteCond %{REQUEST\_URI} ^/admin/ [NC]
  `
  This limits the SSL enforcement to URLs that begin with “/admin/”. If you have a custom cpTrigger config setting set, use that instead.
  `txt
  RewriteCond %{HTTPS} !=on
  `
  This prevents unnecessary redirects in the event that you’re already accessing the control panel over SSL. Leaving this out would actually create an infinite redirect loop.
  Note that the %{HTTPS} variable might not be an accurate measure for whether the request is over SSL for some web hosts. EngineHosting, for example, requires that you set the following two lines instead:
  `txt
  RewriteCond %{ENV:SECURE\_REDIRECT} !=on
  RewriteCond %{SERVER\_PORT} !^443$
  `
  If you’re having issues with this, ask your web host for more info.
  `txt
  RewriteRule .\* https://%{HTTP\_HOST}%{REQUEST\_URI} [NC,R=301,L]
  `
  If the incoming request has passed all of our RewriteCond checks, this line will handle the actual redirect.](https://craftcms.com/knowledge-base/enforcing-ssl-for-cp-requests "Enforcing SSL for Control Panel Requests")
- [Enabling CSRF Protection

  Craft has built-in, automatically-enabled protection against Cross-Site Request Forgery (CSRF) attacks.
  Any time you generate a CSRF token for a user, Craft sets a CRAFT\_CSRF\_TOKEN validation cookie on their browser. Subsequent POST requests must be accompanied by a matching token—if they aren’t, Craft rejects the request with a 400-level error.
  In most cases, Craft handles both halves of this with a single change to your forms. You can also support CSRF over Ajax!
  CSRF in HTML Forms
  Any <form> that uses method="post" must include a CSRF input. Craft comes with a csrfInput() function that generates a complete, hidden HTML input element:
  `twig
  {{ csrfInput() }}
  {# ... #}
  `
  This is typically equivalent to manually constructing an input:
  `twig
  <input
  type="hidden"
  name="{{ craft.app.config.general.csrfTokenName }}"
  value="{{ craft.app.request.csrfToken }}">
  `
  Caching and Asynchronous CSRF
  Caching CSRF tokens can lead to bugs and security issues. Never manually output a token inside a {% cache %} tag, and avoid statically caching pages with forms that rely on CSRF.
  However, Craft 5.1 added support for cachable, “asynchronous” CSRF inputs. As long as you are using the csrfInput() function in your templates, you can enable the asyncCsrfInputs setting to replace its output with a cachable placeholder element. Craft registers a JavaScript snippet that fetches a CSRF token over Ajax and injects a hidden input—as though it was there all along.
  You can strategically opt-in to asynchronous CSRF by passing an async key to the csrfInput() function:
  `twig
  {# Only use async CSRF in this one form: #}
  {{ csrfInput({ async: true }) }}
  {# ... #}
  `
  CSRF over Ajax
  If your front-end needs to send data to Craft over Ajax, it should still use CSRF. See the documentation on Ajax and Forms for framework-agnostic information on retrieving and sending CSRF tokens.](https://craftcms.com/knowledge-base/enabling-csrf-protection "Enabling CSRF Protection")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

# Guides: Licensing & Editions | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/licensing-editions

---

Search Knowledge Base

# Licensing & Editions Articles

- [What is Craft Console?

  Craft Console is our centralized Cloud project and license management platform. It also powers the Craft Plugin Store, and provides flexible tools for organizing and delegating access to your collaborators.
  Accounts are free, and it only takes a moment to register.](kb__what-is-craft-console.md "What is Craft Console?")
- [Finding your Craft License Keys

  This article covers ways of locating a license key in your project, and how to ensure a key is attached to the right Craft Console account, for future reference.
  Key Lifecycle
  Craft generates a license key for every installation. During a project, you may end up with unique keys on each developer’s machine, or in each environment. This isn’t a problem from a technical perspective, but can result in some confusion when it comes time to launch!
  We recommend purchasing licenses from the control panel of your site, as soon as it goes live. Whatever key is present in that environment will be bound to the live domain and associated with the Craft Console account or organization used at checkout.
  At that point, you may distribute the authoritative license key to your other machines and environments—but this is not required for Craft to function.](kb__finding-your-craft-license-keys.md "Finding your Craft License Keys")
- [Releasing and Claiming Licenses

  Every Craft installation gets a unique license key—even if you’re using the Solo edition. Craft sends that key along with any communications to our web services (say, to check for updates), but we typically don’t know who owns a key when it’s first created.
  Purchasing a Pro edition license (or any plugin license), on the other hand, immediately registers it with the Craft Console account or organization.
  At times, this can result in some confusion about where your licenses live—especially when a site has changed hands, or a service provider took care of purchasing licenses during development. Craft Console provides a few ways to rectify this!
  Scope
  Not all license issues can be resolved by releasing or claiming a key from your account. For instance, banners in the Craft control panel indicating that a license is invalid or belongs to a different domain cannot be remedied solely by moving it to a new Console account.
  This guide will only cover situations in which you suspect a license is missing from the account you expect it to be in, or you aren’t sure what account it should be tied to.
  Claiming a License
  Supposing you have a license key on-hand (from a live Craft installation, a git repository, or your own records), the first thing you should try is claiming it.
  From your personal Console account (or an organization), click Claim License in the main menu.](kb__releasing-and-claiming-licenses.md "Releasing and Claiming Licenses")
- [Setting up an Organization for your Developer

  In most cases, public-facing Craft sites require a valid license.
  We recommend that you—the client or site owner—pay for and hold those licenses so that you always have complete, current, and accurate information about them.
  Organizations are our way of simplifying the license management process for clients and developers.
  Setting up an Organization
  Let’s get you started with Craft Console.
  Create an Account
  Head over to console.craftcms.com/register, and enter a username, email, and password. An activation link will be sent to the provided address, which must be clicked within 24 hours.](kb__craft-console-for-clients.md "Setting up an Organization for your Developer")
- [Using Organizations in Craft Console

  Welcome to Craft Console
  This article covers features of our centralized license management tool, Craft Console. Sign in to follow along!
  If this will be your first time using Craft Console, get started by creating an account. Not sure if you have an account? Request a password reset link with your email address.](kb__craft-console-organizations.md "Using Organizations in Craft Console")
- [Developer Plugin Store FAQ

  Answers to common questions about selling plugins on the Craft Plugin Store.](kb__developer-plugin-store-faq.md "Developer Plugin Store FAQ")
- [Upgrading to Craft Pro

  Craft’s Pro edition offers several benefits over the Solo edition, including unlimited user accounts, enhanced content previewing, and more.
  It costs $399 (USD) per Craft installation, and a single license can be run across multiple development, staging, and production environments.
  To check which edition you’re currently running, look for the edition badge in the control panel footer:](kb__upgrading-to-craft-pro.md "Upgrading to Craft Pro")
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
  To avoid the possibly of that happening, you can either make your edition purchases on a local web server where you have full control over the entire network between the client and the server, or just install SSL on your web server and create an .htaccess redirect that forces SSL on CP requests.](kb__how-in-app-purchasing-is-secure.md "How In-App Purchasing is Secure")
- [How Craft License Enforcement Works

  License Key Creation
  The act of downloading Craft binds you to Craft’s License Agreement, but a license key is not assigned to your installation until Craft and it has made its first call to our web services to check for updates. When we see a request without a license key, one is created and sent with the response. Craft saves this new key to config/license.key.
  Single Website Enforcement
  You’re allowed to run a single Craft license on multiple domains (e.g., example.com and example.fr), so long as they’re all a part of the same installation. To enforce this, Craft does have one technical limitation: you may only access Craft’s control panel from a single public domain per Craft license.
  Each time Craft’s control panel sends a request to our web services, it reports the domain it is being accessed from. The first time a key is used on a public domain, we tie it to that domain. This can happen as early as the same request where the license key gets created, if you’re installing Craft on a public server with the web GUI. On subsequent requests, we compare the reported domain with the domain on record.
  If a Craft license is used on a public domain other than it was last associated with, our web service reports that there is a mismatch in its response, which Craft surfaces in the control panel.](kb__how-craft-license-enforcement-works.md "How Craft License Enforcement Works")
- [Transferring a Craft License to a New Server

  Craft associates edition purchases with the currently-installed Craft license located at config/license.key. So if you want to deploy your site to a different server, make sure you’re including that file in the deployment, and your edition purchase will stay intact.](kb__transferring-a-craft-license-to-a-new-server.md "Transferring a Craft License to a New Server")
- [How to Trial Craft CMS and Plugin Editions

  A valid license is required to run Craft Team or Pro editions (as well as commercial plugins) on a public domain.
  To help developers and clients find the right license, we allow private trialing of paid editions. Craft itself doesn’t make any determination about whether trials are allowed in a given environment—instead, it communicates with our web services and displays potential licensing issues in the control panel.
  If you’d like to explore Craft Team or Pro editions (or any of the commercial plugins in the Plugin Store) before buying, you can upgrade and run your site from any domain that Craft does not consider to be a public domain.
  Here are some examples of domains we consider “private” and therefore permit use of trials on:
  localhost
  127.0.0.1
  mysite.test
  mysite.ddev.site
  testing.mysite.com
  mysite.yolo
  mysite.com:1234
  Changing Editions
  Craft never automatically upgrades itself or plugins (even if you have supplied a key that corresponds to a paid edition). In an environment that allows admin changes, visit the in-app Plugin Store, then click the Upgrade Craft CMS link in the navigation.
  Press Try for free button under the Team or Pro editions:](kb__how-to-trial-craft-cms-and-plugin-editions.md "How to Trial Craft CMS and Plugin Editions")
- [Transferring a Craft License to a New Domain

  Each Craft license may only be used on a single public domain at a time (see How Craft license enforcement works for more info).
  Sometimes, you’ll need to transfer a license between disparate code bases. In this case, you’ll need to transplant the license key file. See the next section.
  Most times, you merely need to associate the license from an existing code base with a new domain name. In that case, skip the next section.](kb__transferring-a-craft-license-to-a-new-domain.md "Transferring a Craft License to a New Domain")
- [More Information than You Require About Craft License Keys

  Craft’s entire licensing system hinges on one file: config/license.key. Here’s everything you’ll ever need to know about them.
  Origins
  A Craft install begins life without a license key. It is assigned one during its first request to the web service. That usually happens immediately after installation, when Craft first checks to see if any updates are available.
  License keys are 250 randomly-generated characters. Craft saves its license key in config/license.key, and refers to that file each time it makes a request to the web service.
  With the license key in place, Craft is now considered licensed, even though it’s still running Solo Edition. This brings us to…
  Craft Editions
  Your Craft license doesn’t change when you upgrade to the Pro Edition. It just becomes associated with the new edition.
  Wherever your license.key file goes, your Craft edition will follow. If you upgrade a Craft install on a development environment and want your staging and production environments to be upgraded, make sure they use the same license key.
  Domains
  One Craft install can handle requests on multiple domains, with one caveat: you can only access the control panel on a single public domain (\*.example.com). That’s because license verification happens in the control panel, and licenses can only be tied to a single public domain at a time.
  Transferring a License
  If you ever need to transfer a license to a new domain, we’ve made it easy. Anyone who has access to a license.key file has the power to mess with it, delete it, transfer it, or copy it to a new website.
  If there is a dispute over which Craft install a license key should be assigned to, we expect our customers to work it out like adults. If that doesn’t work, please email us at support@craftcms.com.
  Gotchas
  Watch out for these common gotchas:
  If you clone an existing Craft site as a starting point for a new one, don’t clone your license.key file. Let a new one be generated for the new site.
  Deleting the contents of the license.key file will not cause a new one to be generated for you. You must delete the actual file.
  Don’t give anyone access to the license.key file that you don’t trust or owe money to! Remember that anyone with access to the license key can easily transfer it to a new domain.
  Recovery
  If you accidentally lost or overwrote a license.key file that was tied to a Pro Edition purchase or need help with any other license-related questions, email support@craftcms.com, and we’ll get you sorted.](kb__more-information-than-you-require-about-craft-license-keys.md "More Information than You Require About Craft License Keys")
- [How to fix a ​“mismatched” Craft license

  If Craft is giving you an error about your Craft license belonging to a different domain, that means that according to our records, your license is already in use somewhere else.](kb__how-to-fix-a-mismatched-craft-license.md "How to fix a “mismatched” Craft license")
- [How Craft Licenses and Renewals Work

  Paid Craft licenses are perpetual and include one year of license updates and developer support.
  You can pay for an additional year of updates and support at any time.](kb__how-craft-licenses-and-renewals-work.md "How Craft Licenses and Renewals Work")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

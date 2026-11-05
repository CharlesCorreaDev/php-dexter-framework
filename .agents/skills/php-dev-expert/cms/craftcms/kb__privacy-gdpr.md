# Guides: Privacy & GDPR | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/privacy-gdpr

---

Search Knowledge Base

# Privacy & GDPR Articles

- [Digital Processing Addendum

  We are offering our customers this DPA to support GDPR compliance. This DPA is especially helpful to our EU customers or agencies representing EU clients. This makes it GDPR friendly to send us technical support requests on your EU client's behalf for example.
  If you wish to see our DPA agreement prior to signing, you may view it here (Dropbox hosted PDF).
  If you would like to have a legally binding DPA with us, please contact us and we'll arrange it with you. Please note this is a 100% free service which we happily provide to our customers doing business in the EU.](kb__dpa.md "Digital Processing Addendum")
- [How does Craft use Cookies?

  This article lists the default cookies Craft CMS uses and provides some context into what they’re used for.
  PHP Session
  Craft relies on PHP sessions to maintain sessions across web requests. That is done via the PHP session cookie. Craft names that cookie “CraftSessionId” by default, but it can be renamed via the phpSessionName config setting. This cookie will expire as soon as the session expires.
  Control Panel Authentication
  When you log into the control panel, you’ll get an authentication cookie used to maintain your authenticated state. The cookie name is prefixed with a long, randomly generated string, followed by \_identity. The cookie only stores information necessary to maintain a secure, authenticated session and will only exist for as long as the user is authenticated in Craft.
  CSRF
  If the enableCsrfProtection and enableCsrfCookie config settings are enabled, then a cookie named CRAFT\_CSRF\_TOKEN will be created to facilitate CSRF protection. It can be changed via the csrfTokenName config setting and will expire as soon as the PHP session expires.
  Remembering Username on Login Duration
  If the rememberUsernameDuration config setting is set to anything besides 0, a cookie will be created with a name that is prefixed with a long, randomly generated string, followed by \_username. That cookie will exist for the given duration to remember the username on the login form.
  Craft Cookies and GDPR
  For GDPR purposes, please note that Craft’s default cookies do not collect any personal or sensitive information. Craft’s default cookies do not collect IP addresses. The information they store is not sent to Pixel & Tonic or any third parties.
  Craft’s default cookies are only used to communicate with your Craft installation for the purposes of user authentication, form validation/security, and basic web application operations.](kb__how-does-craft-use-cookies.md "How does Craft use Cookies?")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

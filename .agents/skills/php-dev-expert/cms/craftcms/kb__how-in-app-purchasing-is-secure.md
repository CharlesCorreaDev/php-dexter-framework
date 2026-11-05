# How In-App Purchasing is Secure | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/how-in-app-purchasing-is-secure

---

Search Knowledge Base

# How In-App Purchasing is Secure

We’ve ensured that purchasing edition upgrades within Craft is as secure as possible. Here’s exactly what happens when you click ‘Purchase’:

1. JavaScript passes your credit card info to Stripe over SSL in exchange for a secure, single-use token using Stripe.js
2. JavaScript then passes the credit card token, the edition you’d like to purchase, and the amount you’re expecting to pay for it, back to your Craft install.
3. Your Craft install takes everything passed to it in step 2, as well as your license key, and passes it all off to our web service over SSL.
4. Our web service verifies that it was passed a valid Craft license, a valid edition ID, the correct price for the edition, and that the license isn’t already set to that edition (or a better one).
5. If everything checks out, our web service sends a request to Stripe over SSL to charge the credit card represented by the token for the amount of the edition.
6. If Stripe says that the charge was a success, the license is set to the edition.
7. Our web service responds to Craft with the result of the transaction, or any validation errors that may have occurred.
8. Craft passes the response back to JavaScript, which updates the UI accordingly.

There is one known security vulnerability: if you’re accessing Craft from a public web server not going over SSL, you could be susceptible to a “[man-in-the-middle attack](http://en.wikipedia.org/wiki/Man-in-the-middle_attack)”, where a third party with control over the network could hijack your control panel requests and alter their response’s contents, doctoring up a fake credit card form that doesn’t actually interact with Stripe in the manner described above. It’s unlikely, but worth mentioning.

To avoid the possibly of that happening, you can either make your edition purchases on a local web server where you have full control over the entire network between the client and the server, or just install SSL on your web server and create an `.htaccess` redirect that [forces SSL on CP requests](kb__enforcing-ssl-for-cp-requests.md).

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

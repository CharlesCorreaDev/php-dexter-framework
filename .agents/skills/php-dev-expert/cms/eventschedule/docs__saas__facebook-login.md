# Facebook Login Setup - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/saas/facebook-login

---

SaaS Platform

# Facebook Login

Let your customers sign up and log in with Facebook. Create a Meta app, register three redirect URIs, and set two environment variables.

Feature overview: [White-label ticketing platform](https://eventschedule.com/saas)

Docs
/
Facebook Login

On this page

## Overview

Adds **Continue with Facebook** to the login and sign-up pages, and a **Facebook Settings** section on the **Integrations** tab of each account's **Settings**, where your customers connect or disconnect Facebook. An account with no password can also verify with Facebook before setting one.

It is optional and **off by default**, and it is set up entirely in the Meta developer console and `.env`: there is no screen for it in the platform admin panel. Until both values under [Configure Event Schedule](#configure) are set there is no Facebook button and no Facebook Settings section, no Facebook entry in the bundled privacy policy's processor list, and every `/auth/facebook` URL returns 404.

Events are not synced

Facebook login only signs people in. It does not import events from Facebook or publish events there: Meta limits reading Page and personal events to its approved Marketing Partners, and publishing them to its Official Events API partners, which is closed to new applicants. To promote an event on Facebook, share its link, post an image from [event graphics](docs__event-graphics.md), or run a paid [Boost](docs__boost.md).

### Reusing the Boost app

We recommend a new Consumer app just for login, as described below. The app the [Boost setup](docs__selfhost__boost.md#facebook-app) creates (`META_APP_ID`) is a Business app, and Business apps usually offer only **Facebook Login for Business**, which Event Schedule does not support.

You can reuse the Boost app only if its dashboard lets you add the **Authenticate and request data from users with Facebook Login** use case. If it does, follow steps 2 to 6 on that app and set `FACEBOOK_CLIENT_ID` and `FACEBOOK_CLIENT_SECRET` to its App ID and App Secret. Both features then share one App Secret, so rotating it means updating `META_APP_SECRET` too.

Decide before launch. Facebook links belong to one app, so switching apps later disconnects everyone who linked Facebook (see [How accounts are matched](#account-matching)).

## 1. Create the app

1. At [developers.facebook.com](https://developers.facebook.com/apps), click **Create App**.
2. Choose the use case **Authenticate and request data from users with Facebook Login**.
3. If you are asked for an app type, choose **Consumer**. A Business app needs business verification before the email permission works for anyone outside the app's roles.

## 2. Basic settings

Under **App settings → Basic**:

| Field | Value |
| --- | --- |
| **App domains** | Your domain, e.g. `yourdomain.com` |
| **Privacy policy URL** | Your privacy policy. If you replaced it under **System → Legal Pages** in the platform admin panel (`/admin/legal`), use that one. |
| **Terms of service URL** | Your terms of service |
| **User data deletion** | Choose **Data deletion instructions URL** and point it at your privacy policy. Customers delete their account under **Settings → Data → Delete Account**, and only the Facebook account ID is stored, so no callback endpoint is needed. |
| **App icon and category** | Both are required before the app can go Live |

Copy the **App ID** and **App Secret**.

## 3. Facebook Login settings

Under **Use cases → Facebook Login → Settings**, turn on Client OAuth login, Web OAuth login, Enforce HTTPS and Strict Mode for redirect URIs. Then add these three **Valid OAuth Redirect URIs**. In SaaS mode signing in lives on the `app` subdomain, so use that host:

Valid OAuth Redirect URIs
Copy

```
https://app.yourdomain.com/auth/facebook/callback
https://app.yourdomain.com/auth/facebook/connect/callback
https://app.yourdomain.com/auth/facebook/set-password/callback
```

Register all three

Facebook rejects any redirect that is not on the list, so a missing one breaks only its own flow (signing in, connecting from Settings, or verifying before setting a password), and Facebook's error does not say which. For local testing, add the same three paths on your local `APP_URL`; Facebook accepts `http://localhost` only while the app is in Development mode.

## 4. Permissions

Under **Use cases → Facebook Login → Customize**, make sure `email` and `public_profile` are added. On a Consumer app both have Advanced Access by default, so no App Review is needed.

## 5. Configure Event Schedule

.env
Copy

```
FACEBOOK_CLIENT_ID=your-facebook-app-id
FACEBOOK_CLIENT_SECRET=your-facebook-app-secret
```

Both values are required; with only one set, Facebook login stays off. Run `php artisan config:clear` afterwards. `FACEBOOK_REDIRECT_URI` can stay unset, because every request passes its own redirect URI.

## 6. Test, then go Live

While the app is in Development mode only people with a role on it can sign in. Add yourself under **App roles → Roles** and create a test user under **App roles → Test users**, then check:

- A new sign-up with Facebook lands on the getting-started page with a verified email
- An existing account with the same email is asked to log in once the usual way, and Facebook is linked as soon as it does
- Pressing **Cancel** on the Facebook dialog returns to the login page with no error
- Unticking the email permission shows **Try again**, which asks for the email again
- **Settings → Integrations → Facebook Settings** connects and disconnects, and offers no **Disconnect** when Facebook is the account's only way in
- A Facebook-only account can use **Verify with Facebook** under **Settings → Security → Set Password**
- The login page marks the button last used with a **Last used** chip

Then switch **App Mode** to **Live** at the top of the app dashboard. Until you do, everyone else sees "App not active".

## How accounts are matched

| Facebook sign-in finds | Result |
| --- | --- |
| An account already linked to this Facebook account | Signed in |
| No email from Facebook | Back to the login page with a **Try again** that re-requests the email permission |
| An invited placeholder account with this email (no password, Google or Facebook yet) | Linked and signed in |
| An account with this email that has a password or Google | Asked to log in with those once. The Facebook account is linked on that login (including after two-factor), within 10 minutes and only if the signed-in email matches |
| An account with this email linked to a different Facebook account | Refused |
| Nobody | A new account, created under the same rules as the sign-up form |

Keep the same Meta app

Facebook gives every app its own ID for each person, and that ID is what Event Schedule stores. Pointing the install at a different Meta app later disconnects everyone who linked Facebook: people with a password or Google are asked to log in once to re-link, and Facebook-only people have to use **Reset password**. To rotate credentials, reset the App Secret on the same app.

## Turning it off

To turn Facebook login off, unset either value. All Facebook UI disappears and the routes return 404, while stored links are kept, so turning it back on restores them. In the meantime, people who only ever signed in with Facebook get back in with **Reset password** on the login page.

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/saas/facebook-login.blade.php)

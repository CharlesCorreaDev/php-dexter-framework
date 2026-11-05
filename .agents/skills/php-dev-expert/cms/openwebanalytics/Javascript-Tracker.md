# Javascript Tracker · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Javascript-Tracker

---

**Tracker** is OWA's JavaScript tracking client. Tracker is responsible for tracking events that happen in the browser and reporting them back to an OWA server instance for analysis and reporting.

# Adding Tracker to Your Web Page

This section discusses the code used to add the tracker to your web page. OWA generates a customized version of this code for each Observation Profile. Pick the Profile from the site control at the top of the admin interface and open its **Tracking Tag** screen to get the code, then use that as a starting point for further customizing how you want the tracker to behave. See [Organizations, Properties and Profiles](Organizations-Properties-and-Profiles.md).

OWA is tracked with a single **asynchronous** tracking tag. To add tracking, cut and paste the async tag below into your web pages (or copy the customized version OWA generates for each Observation Profile, on its **Tracking Tag** screen).

> **Note:** Earlier versions of OWA also documented a "traditional" synchronous tag that constructed a tracker with `new OWA.tracker()` and then called methods on it directly (`OWATracker.trackPageView()`, etc.). **That construction pattern is no longer supported** — the modern tracker bundle is driven entirely by the `owa_cmds` command queue described below. All of the examples on this page use the async approach. (The queue still creates a global `OWATracker` object for you, so the handful of methods that must return a value or run from an inline HTML handler still work — see [Calling tracker methods](#calling-tracker-methods).)

## Async Tracker Code

The async tag takes advantage of the browser's ability to download and execute JavaScript without holding up the rest of the page from loading.

```
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://your.domain.com/path/to/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'REPLACE_WITH_YOUR_SITE_ID']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	_owa.src = owa_baseUrl + 'public/base/dist/owa.tracker.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
```

Lets consider each line one by one:

```
var owa_baseUrl = 'http://your.domain.com/path/to/owa/';
```

This global variable tells all OWA javascript objects (trackers, overlay's etc.) where the OWA server is located.

```
var owa_cmds = owa_cmds || [];
```

The `owa_cmds` is a global variable that houses the queue of commands that you want to execute when the tracker becomes available.

```
owa_cmds.push(['setSiteId', 'REPLACE_WITH_YOUR_SITE_ID']);
```

This line adds a command to execute the `setSiteId` method after the tracker is downloaded and becomes available. Commands take the form of a javascript array whose first value is the method that you wish to execute, followed by values that will be passed to the method as arguments.

**`REPLACE_WITH_YOUR_SITE_ID` is a placeholder and must be replaced.** Your site id is the **Tracking ID** shown on the Observation Profile's own screen — pick the Profile from the site control at the top of the admin interface — and is also what `cmd=add-site` prints when it creates one. It is a 32-character string, not a name you choose.

OWA **refuses tracking events naming a site id it does not have**, so leaving the placeholder in place records nothing at all. That is deliberate: an unregistered site id cannot be selected in reporting, so anything recorded under one would be invisible forever. If you have replaced it and still see no data, see [Troubleshooting](Troubleshooting.md).

```
(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	_owa.src = owa_baseUrl + 'public/base/dist/owa.tracker.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
```

This is an anonymous function that will insert a `<script>` tag into your web page that will download the tracker library from the server.

# Properties the Server Owns

Some properties are derived by the server and **cannot be set from a tracking
request**. Send one and it is discarded before the event is logged — the request
still succeeds, and the value you sent is ignored.

This matters if you build tracking requests by hand rather than through the
tracker. It is a contract, not a bug to report: the server refuses these because
a client that could set them could also misreport them.

The set is derived from OWA's own registry rather than being a fixed list, so it
grows as OWA learns to derive more. It is everything OWA computes or reads from
the request environment that is not on the client-settable list. Today that is
62 properties, and it covers:

- **Environment read from the request** — `ip_address`, `HTTP_USER_AGENT`,
  `HTTP_HOST`, `REMOTE_HOST`, `language`
- **Anything time-derived** — `timestamp`, `yyyymmdd`, `year`, `month`, `day`,
  `hour`, `dayofweek`, `weekofyear` and the rest. The server stamps event time;
  a client clock does not decide when something happened.
- **Anything resolved from another value** — `browser`, `os`, `country`, `city`,
  `latitude`, `longitude`, `is_robot`, `is_repeat_visitor`
- **Attribution resolved from the URL** — `source`, `medium`, `campaign`, `ad`,
  and their ids. You influence these by tagging your links, not by sending the
  resolved value. See [Campaign Tracking](Campaign-Tracking.md).
- **Foreign keys** — `document_id`, `ua_id`, `host_id`, `source_id` and the
  others. These are computed from content so that any node can compute them
  without asking the database.

Properties OWA does not know about are passed through untouched, so your own
custom properties are unaffected.

# Respecting the "Do Not Track" Signal

The tracker honors the browser's [Do Not Track](https://en.wikipedia.org/wiki/Do_Not_Track) (DNT) preference automatically. When a visitor's browser advertises DNT, the tracker does **nothing**: none of the commands you queue onto `owa_cmds` are run and no events are sent to the server. You do not need to configure or opt in to this behavior — it is on by default.

The check happens on the client, before any command in the queue executes:

- If `navigator.doNotTrack` (or the legacy `navigator.msDoNotTrack` used by older browsers) is the string `"1"`, the visitor has opted out and the tracker's command queue is never started. The queued commands are left untouched and no tracker object is even created.
- Any other value — the signal being unset, `"0"`, or a non-committal value such as `"unspecified"` — leaves the visitor trackable, and the command queue runs as normal.

Because the opt-out is an all-or-nothing gate at load time, there is nothing further to do in your tracking code: a DNT visitor simply generates no tracking traffic.

# Calling tracker methods

Everything you ask the tracker to do goes through the `owa_cmds` command queue — the same global array the async tag sets up. You do **not** construct a tracker yourself; the queue creates and configures one for you.

A command is a JavaScript array whose first element is the method name and whose remaining elements are the arguments passed to that method:

```
owa_cmds.push( ['methodName', arg1, arg2, ...] );
```

This works **before or after** the tracker script has loaded. Push commands early (in the async tag) and they run as soon as the tracker is available; push them later (e.g. from an event handler) and they run immediately. The examples throughout this page all use this form.

### Referencing the tracker directly

The queue stores the tracker it creates in a global variable named **`OWATracker`**. A few methods can't be expressed as fire-and-forget queue commands and need this object directly:

- **Methods that return a value** — e.g. `getCustomVar()` returns a string; `makeEvent()` returns an event object. The queue has no way to hand a return value back to you, so call these on `OWATracker` after the tracker has loaded.
- **Inline HTML handlers** — e.g. an `onclick`/`onsubmit` attribute that calls `OWATracker.shareStateByLink(this.href)`. These run in response to a user action, long after load, so referencing the global is fine.

Because `OWATracker` only exists once the async script has run, guard any early direct use, or push a command first to force its creation. Fire-and-forget calls should always prefer the queue form so they work regardless of load timing.

# Click Tracking

Tracker can be configured to track any clicks that occur on any DOM element of your web pages. This includes links, buttons, images, form elements as well as all HTML elements such as `span, div, p`. Tracker will report these click events back to the server as they happen via `<img>` tag requests.

## trackClicks()

To tell the Tracker to track clicks, push the `trackClicks` command onto the queue:

```
owa_cmds.push(['trackClicks']);
```

# DomStream Tracking

Tracker can be configured to record the mouse oriented DOM events (movement, click, focus, etc.) that a user generates while they interact with your web page. The Tracker will record this "Dom Stream" and periodically send it to the server as a single event.

NOTE: The Domstream module must be activated in your OWA instance to record and playback Dom Streams.

### trackDomStream()

To track the Dom Stream of users, push the `trackDomStream` command onto the queue:

```
owa_cmds.push(['trackDomStream']);
```

You can adjust the percentage of time that Domstreams are recorded by setting the `logDomStreamPercentage` option via the `setOption` command:

```
owa_cmds.push(['setOption', 'logDomStreamPercentage', 10]);
```

The numeric value will be interpreted as a percentage. Push it ahead of `trackDomStream` so it takes effect before recording starts.

# Action Tracking

Often time you web site will contain specific "actions" that your users can perform that need to be tracked separately of page views. This could be the submission of a web form, or the click on a particular link or element on a web page.

## trackAction()

It is possible to track an unlimited number of custom actions using the `trackAction` method. This method takes four parameters.

### Parameters

| Param | Type | Description |
| --- | --- | --- |
| `action_group` | string | **Required.** This is the name by which you will later be able to "group" actions in your reporting (i.e. "Cooking"). |
| `action_name` | string | **Required.** This is the name of the action. Unique names will count as unique actions (i.e. "Recipe Print"). |
| `action_label` | string | **Optional.** This is an optional text label that can be used to further describe the action (i.e. "Best Chicken Parmesan Recipe"). |
| `numeric_value` | integer | **Optional.** This is a number that you can store along with each event. This value will be summarized in reporting. |

#### Example

```
owa_cmds.push(['trackAction', 'Cooking', 'Recipe Print', 'Best Chicken Parmesan Recipe', 10]);
```

# E-commerce Tracking

The tracker contains methods for tracking e-commerce transactions the products that are purchased as part of that transaction. See [E-commerce Tracking](Ecommerce-Tracking.md) for more info on how these methods work.

These methods do not perform any calculations, such as quantity,revenue, or currency calculations. Keep the following in mind when using these methods:

- You must make sure that the total amount of your transaction is equal to the sum of the implied value (unit price x quantity) of product line items that you associate with it using `addTransactionLineItem()`.
- Ensure that each product you add has its own unique name and SKU.
- A refund can be represented by creating a new transaction with a with negative total and negative quantities in its associated line items.

## addTransaction()

```
owa_cmds.push(['addTransaction', order_id, order_source, total, tax, shipping, gateway, city, state, country]);
```

Creates an e-commerce transaction object with the values passed.

### Parameters

| Param | Type | Description |
| --- | --- | --- |
| `order_id` | string | **Required.** The unique ID assigned to the transaction by your e-commerce shopping cart application. |
| `order_source` | string | **Optional.** The store name or partner channel associated with the transaction. |
| `total` | string | **Required.** The total amount of the transaction. |
| `tax` | string | **Optional.** The amount of tax associated with the transaction. |
| `shipping` | string | **Optional.** The cost of shipping associated with the transaction. |
| `gateway` | string | **Optional.** The name of the transaction gateway or shopping cart application associated with the transaction. |
| `city` | string | **Optional.** The city associated with the transaction. |
| `state` | string | **Optional.** The state associated with the transaction. |
| `country` | string | **Optional.** The country associated with the transaction. |

## addTransactionLineItem()

```
owa_cmds.push(['addTransactionLineItem', order_id, sku, product_name, category, unit_price, quantity]);
```

Adds a product line item containing information about the product and the quantity that was purchased as part of the transaction. You can call this method repeatedly to add multiple unique product line items to the transaction, however only add a single line item for each unique product that is part of the transaction.

The `AddTransaction` method must be called prior to using this method.

### Paramaters

| Param | Type | Description |
| --- | --- | --- |
| `order_id` | string | **Required.** The unique ID assigned to the transaction by your e-commerce shopping cart application. Should be the same as the value used in the `addTransaction`. |
| `SKU` | string | **Optional.** The SKU of the product associated with the line item. |
| `product_name` | string | **Required.** The name of the product associated with the line item. |
| `category` | string | **Optional.** The category of the product associated with the line item. |
| `unit_price` | string | **Required.** The unit price of the product associated with the line item. |
| `quantity` | string | **Required.** The quantity of the product purchased associated with the line item. |

## trackTransaction()

This method sends the e-commerce transaction and any associated product line items to the server.

```
owa_cmds.push(['trackTransaction']);
```

### Full example

The e-commerce commands must be queued in order: the transaction first, then its line items, then `trackTransaction` to send everything. Because the queue preserves order, push them as a group on the order-confirmation page:

```
owa_cmds.push(['addTransaction', 'order-1234', 'web', '59.98', '4.80', '5.00', 'stripe', 'Portland', 'OR', 'US']);
owa_cmds.push(['addTransactionLineItem', 'order-1234', 'SKU-1', 'Chef Knife', 'Cutlery', '29.99', 2]);
owa_cmds.push(['trackTransaction']);
```

# Using Multiple Trackers on the Same Web Page

You can run more than one independently-configured tracker on a page. You don't construct them yourself — you name them in the command. A command whose method is written `TrackerName.method` is dispatched to a tracker stored in the global variable `TrackerName`, creating it the first time it is referenced.

A bare command (no dot) always targets the default tracker, `OWATracker`. A dotted command targets the named tracker:

```
owa_cmds.push(['setSiteId', 'site_a']);                  // configures the default OWATracker
owa_cmds.push(['trackPageView']);                        // -> default OWATracker

owa_cmds.push(['OWATracker2.setSiteId', 'site_b']);      // creates + configures OWATracker2
owa_cmds.push(['OWATracker2.trackPageView']);            // -> OWATracker2
```

Each named tracker keeps its own configuration (site id, cookie domain, custom vars, etc.), so the two report to their sites independently.

# Pausing and Resuming Tracking

The command queue understands two special commands — `pause-owa` and `unpause-owa` — that let you temporarily stop and later resume tracking without tearing down or reconfiguring the tracker. These are useful when a stretch of page activity should not be recorded (for example, an authenticated admin session, a preview mode, or a region of a single-page app where events would be noise).

## pause-owa

Pushing `pause-owa` onto the queue stops the tracker from acting on any subsequent commands:

```
owa_cmds.push(['pause-owa']);
```

While paused:

- Any command you push is **dropped, not buffered** — it is discarded immediately and will **not** be replayed later when you resume. If a page view or action needs to be recorded, push it *before* pausing or *after* resuming.
- No tracker object is created as a side effect. If `pause-owa` is the very first command on the page, the tracker stays entirely inert and sends nothing.

## unpause-owa

Pushing `unpause-owa` resumes tracking. Commands pushed after it are dispatched normally again:

```
owa_cmds.push(['pause-owa']);
owa_cmds.push(['trackAction', 'Admin', 'Edit Post']); // dropped while paused
owa_cmds.push(['unpause-owa']);
owa_cmds.push(['trackPageView']);                      // recorded normally
```

> **Note:** Pausing applies to the whole command queue, not to an individual named tracker. Because the pause is matched on the command's method name, a dotted form such as `['OWATracker2.pause-owa']` pauses **all** tracking on the page, not just `OWATracker2`.

# Custom Event Tracking

You can use the Tracker to track custom event types that you define. Custom events should only be used when you need to track complex events and control the processing of that event on the server. If you only need ot track simple "actions" then use the Action Tracking methods instead.

Custom events are built from an event object, so this is one of the cases that uses the `OWATracker` global directly (see [Calling tracker methods](#calling-tracker-methods)) — `makeEvent()` returns the object you populate before logging. Run this after the tracker has loaded (for example, from a DOM event handler), so `OWATracker` exists:

```
var myEvent = OWATracker.makeEvent();
myEvent.setEventType("someeventname");
myEvent.set("somename", "somevalue");
OWATracker.trackEvent(myEvent);
```

This event will be sent to the server for processing. You can create an [event handler](Event-Handlers.md) to listen for this event and an [entity](Entities.md) if you want to log it to a new database table.

# Cross Domain Tracking

Sometimes it is necessary to track the same visitor across two different web domains without that them appearing as a separate visitors on each of the domains. To accomplish this, you can tell OWA to share the contents of the visitor's OWA's cookies with the other web site that is also being tracked by OWA. There are three OWA tracker methods that enable you to do this.

Two of them — `shareStateByLink()` and `shareStateByPost()` — run from inline HTML handlers on the **source** domain, so they reference the `OWATracker` global directly (see [Calling tracker methods](#calling-tracker-methods)); they fire on user interaction, well after the tracker has loaded. The third, `checkForLinkedState`, runs on the **destination** domain and is queued like any other command.

## shareStateByLink( url )

This method is used to pass a visitor's OWA state via a text link to another instance of OWA running on another web domain. The method takes the full URL of the link as an argument and is typically called as an "onclick" handler. For example:

```
<a href="/some_page.html" onclick="OWATracker.shareStateByLink(this.href); return false;">Test Link</a>
```

## shareStateByPost( form )

This method is used to pass a visitor's OWA state to another web domain via a http POST operation such as a form submit. This method take the form object as an argument and is typically used as an "onsubmit" handler. For example:

```
<form action="http://www.someotherdomain.com/formHandler.php" 
     name="myform" method="post" onsubmit="OWATracker.shareStateByPost( this );">
. . .
</form>
```

## checkForLinkedState

This method should be added to the OWA tracker that is running under the web domain you want to share the visitor's state with. This method will look for the shared state on the URL and then use store that shared state in cookies instead of creating new state for the visitor. This has the effect of making the visitor's session appear to be in progress" to the tracker which now use the shared visitor ID, session ID etc.

Here is an example of how to call this method.

```
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://your.domain.com/path/to/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'REPLACE_WITH_YOUR_SITE_ID']);
owa_cmds.push(['checkForLinkedState']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	_owa.src = owa_baseUrl + 'public/base/dist/owa.tracker.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
```

# Cookie Domain and Sub Domain Tracking

The domain the tracker sets its cookies on determines whether a visitor is recognized as the same person across a site's hosts, or counted as a new visitor on each one. The tracker chooses this domain automatically, and you can override it with `setCookieDomain()`.

## Automatic behavior

On the **first** tracked event, unless you have already called `setCookieDomain()`, the tracker derives the cookie domain from the page's own hostname (`document.domain`) with one adjustment:

- A leading **`www.`** is stripped, so `www.example.com` and `example.com` share the same cookies and a visitor is not double-counted between them. For example, a page served on `www.example.com` gets a cookie domain of `.example.com`.
- **Any other subdomain is kept as-is.** A page served on `shop.example.com` gets a cookie domain of `.shop.example.com` — its visitors are scoped to that host and are *not* automatically shared with `www.example.com` or other subdomains. Only the `www.` prefix is treated specially.

If you want visitors recognized across *all* of your subdomains (e.g. `www`, `shop`, and `blog` under `example.com`), set a higher-level domain explicitly with `setCookieDomain()`.

## setCookieDomain()

```
setCookieDomain( domain )
```

Pins the domain used when setting cookies, overriding the automatic behavior above. Call it before your first tracking command (in the async queue, push it ahead of `trackPageView`).

```
owa_cmds.push(['setSiteId', 'REPLACE_WITH_YOUR_SITE_ID']);
owa_cmds.push(['setCookieDomain', 'example.com']); // share cookies across *.example.com
owa_cmds.push(['trackPageView']);
```

Notes on how the value is handled:

- A leading `.` is added if you don't supply one, so `example.com` and `.example.com` are equivalent. This is the form a browser needs to scope a cookie to a domain and all of its subdomains.
- An explicit value is used **verbatim** — the automatic `www.` stripping does *not* apply. If you pass `www.example.com`, cookies are scoped to `.www.example.com`. Pass the apex (`example.com`) if you want them shared across subdomains.
- Calling `setCookieDomain()` also stops the automatic first-event resolution from overriding your choice.

### Parameters

- `domain` (string) — The domain name to use, with or without a leading dot. Passing no value re-runs the automatic resolution described above.

## Cookie lifetimes and persistence

New in 1.14.0. Both are `setOption` calls, so they need no new tracker method and can be pushed from the snippet like any other option.

```
owa_cmds.push(['setOption', 'stateStoreExpirations', {v: 90, s: 30, c: 30}]);
owa_cmds.push(['setOption', 'cookiePersistence', false]);
```

**`stateStoreExpirations`** sets how many days each cookie lives, keyed by logical store name:

| Key | Store | Default |
| --- | --- | --- |
| `v` | visitor | 364 days |
| `s` | session | 364 days |
| `c` | campaign | 60 days |

Name only the stores you want to change; anything you leave out keeps its default. Browsers cap this independently of what you ask for — Chrome will not honour more than 400 days on any cookie it is given, and Safari caps a cookie set from JavaScript at 7 days.

**`cookiePersistence`** set to `false` writes every store with no `expires` attribute, so all of the tracker's cookies become session cookies, are discarded when the browser closes, and the visitor is counted as new next time.

This mirrors the server-side `cookie_persistence` setting, which has made OWA's *server*-set cookies session-only since 2016. The JavaScript tracker never read it, so before 1.14.0 an installation with persistence turned off was still handing out a year-long visitor cookie from every page the tracker ran on.

# Custom Variables

## setCustomVar()

```
setCustomVar( slot, name, value, scope )
```

Sets a [custom variable](#custom-variables) that will be recorded with each tracking event. Variables can set for a single page or persisted and set on all requests made in the current and/or future visits.

### Parameters

| Param | Type | Description |
| --- | --- | --- |
| `slot` | integer | **Required.** The variable slot to set. Currently OWA supports 1-5. |
| `name` | string | **Required.** The name portion of the variable. |
| `value` | string | **Required.** The value portion of the variable. |
| `scope` | string | **Required.** The scope of the variable. Allowed values include: page |

### Scope

The `scope` decides how long the variable stays attached to the visitor:

| Scope | Persistence |
| --- | --- |
| `page` | Attached only to events sent from the current page load. It is not stored, so it is gone once the visitor navigates away. |
| `session` | Stored in the session cookie and attached to every event for the rest of the current visit. |
| `visitor` | Stored in the long-lived visitor cookie and attached to every event on this and future visits. |

Slots are independent, but a single slot holds one value at a time. Re-setting a slot at a **broader** scope promotes it: setting a slot at `visitor` scope stores the value in the visitor cookie and removes any `session`-scoped copy of the same slot, so the visitor value is the one that is reported. (Prefer `deleteCustomVar()` and a fresh `setCustomVar()` if you want to narrow a slot's scope.)

### Size limit

The combined `name=value` string must be **65 characters or fewer**. A slot whose `name` + `=` + `value` exceeds this is silently dropped (nothing is stored or sent).

### Example

```
// Tag every event this page sends with a page-scoped variable.
owa_cmds.push( ['setCustomVar', 1, 'article_section', 'sports', 'page'] );

// Remember the visitor's membership tier for the rest of this visit.
owa_cmds.push( ['setCustomVar', 2, 'tier', 'gold', 'session'] );

// Remember an account type across visits.
owa_cmds.push( ['setCustomVar', 3, 'account', 'business', 'visitor'] );
```

## getCustomVar()

```
OWATracker.getCustomVar( slot )
```

Returns the current `name=value` string for a slot, or an empty value if the slot is unset. Because it returns a value, call it on the `OWATracker` global after the tracker has loaded rather than through the queue (see [Calling tracker methods](#calling-tracker-methods)). Scopes are checked in order — page, then session, then visitor — and the first one found is returned. This means a `page`-scoped value set on the current page will shadow a stored `session` or `visitor` value for the same slot.

## deleteCustomVar()

```
owa_cmds.push(['deleteCustomVar', slot]);
```

Clears a slot from all three scopes at once (page, session, and visitor), removing its stored cookie values as well as any value set on the current page.

# Adding Search Engines

> **Note:** `addOrganicSearchEngine()` is deprecated and is now a no-op in the tracker — organic search engine detection has moved to the server side. Calling it has no effect. This section is retained for historical reference.

# Tracker Development

The tracker source lives under `modules/Base/src/tracker` and is bundled by webpack into `public/base/dist/owa.tracker.js` during the OWA build process (see the [Development](Development.md) page).

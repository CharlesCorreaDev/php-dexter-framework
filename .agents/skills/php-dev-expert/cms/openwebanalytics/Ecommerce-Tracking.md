# Ecommerce Tracking · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Ecommerce-Tracking

---

OWA can track e-commerce transactions that visitors make on your web sit or via third party payment systems such as PayPal.

## Overview

To track e-commerce transactions you must use OWA's commerce tracking methods as outlined below. These methods are available in the [Tracker](Javascript-Tracker.md). If you need to track transactions from server-side PHP code (for example, when the order is finalized outside of the browser request), use the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk), which constructs and sends the same events to OWA's `log.php` logging endpoint.

1. *Describe the E-commerce Transaction* - using the `addTransaction` method to tell OWA about the overall e-commerce transaction including it's unique order id, the total amount, total tax, and total shipping.
2. *Add Line Items to the Transaction* - using the `addTransactionLineItem` method, tell OWA about the line items that make up this transaction. A good way to think of line items is as the rows on a paper invoice that describe the products being purchased, their unit prices and the quantities being ordered. Like offline transactions that might occur at a grocery store, a single e-commerce transaction can contain multiple products each of which is represented in OWA as it's own transaction line item. Line items are stored in OWA associated with their parent transaction using the ''order id'' supplied when you described the transaction.
3. *Track the Transaction* - using the `trackTransaction` method, will send the transaction and it's line items to OWA for processing.
4. *Turn on E-commerce reporting for your site* - you need to turn on e-commerce reporting for each site that you want to see the reports and metrics. This is a site setting and can be accessed by visiting ''Administration -> Tracked Sites -> your site -> settings'' in OWA's interface.

## Example

```
<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://your.domain.com/path/to/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '67b3053d792527f6b62e55b20453ad2c']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);
owa_cmds.push(['addTransaction', 
           'order123', // the id of the order, comes from your ecommerce system -required
           'test-app',  // the source or store name that originated the transaction
           '100.50', // the total amount of revenue - required
           '1.25', // amount of tax
           '3.50',  // amount of shipping
           'paypal', // transaction gateway name
           'United States', // country
           'CA', //state
           'Palo Alto' //city
]);
owa_cmds.push(['addTransactionLineItem', 'order123', 'SKU123', 'widget', 'things', 10.00, 5]);
owa_cmds.push(['addTransactionLineItem', 'order123', 'SKU456', 'widget', 'things', 10.10, 5]);
owa_cmds.push(['trackTransaction']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	_owa.src = owa_baseUrl + 'public/base/dist/owa.tracker.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->		
```

## Tracking E-commerce Transactions via the log.php REST Interface

In addition to the Javascript Tracker, OWA can record e-commerce transactions server-side by posting them to its REST based logging endpoint, `log.php`. This is the mechanism used to track transactions from PHP or any other server-side language.

Rather than assembling this request by hand, the recommended way to send a transaction from PHP is the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk), which builds the correct name/value pairs and posts them to `log.php` for you.

The following example shows the name/value pairs that make up the request for a single transaction with one line item:

```
http://domain/path/to/owa/log.php?
		owa_event_type=ecommerce.transaction&
		owa_ct_order_id=foo&
		owa_ct_order_source=foo&
		owa_ct_total=100.23&
		owa_ct_tax=10.21&
		owa_ct_shipping=20.11&
		owa_ct_gateway=paypal&
		owa_page_url=some_encoded_url&
		owa_ct_line_items[0][li_order_id]=foo&
		owa_ct_line_items[0][li_sku]=foo&
		owa_ct_line_items[0][li_product_name]=foo&
		owa_ct_line_items[0][li_category]=foo&
		owa_ct_line_items[0][li_unit_price]=10.34&
		owa_ct_line_items[0][li_quantity]=10&
		owa_siteId=yoursiteid
```

## Tracking Delayed E-commerce Transactions

Some transactions cannot be fully authorized during the user's web request. This is common when a payment provider authorizes cards out of band (for example, PayPal IPN), so the order is only confirmed after the visitor has left your site. In these cases you can record the transaction later by posting it to `log.php` and telling OWA which of the visitor's earlier sessions it belongs to.

To associate a delayed transaction with the session in which it originated, add the `owa_original_session_id` parameter to the request. When this parameter is present, OWA loads the original session and merges its dimensions (visitor, location, referer, etc.) into the transaction so it is attributed correctly:

```
http://domain/path/to/owa/log.php?
		owa_event_type=ecommerce.transaction&
		owa_ct_order_id=foo&
		owa_ct_total=100.23&
		...
		owa_original_session_id=some_session_id&
		owa_siteId=yoursiteid
```

To do this, capture and store the visitor's OWA ''session id'' at the time of the transaction so it is available when you send the delayed request later. You can read the current session id from the OWA session cookie using the Javascript Tracker:

```
var session_id = OWA.getState( OWATracker.storeName('s'), 'sid' );
```

The session store is **scoped to the site**, so its name carries the site id —
`storeName('s')` is what resolves it. Reading `'s'` directly returns nothing.

As with real-time transactions, the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk) is the recommended way to construct and send the delayed request from server-side PHP.

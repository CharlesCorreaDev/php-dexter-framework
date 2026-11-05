# Subscriptions | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/system/subscriptions

---

# Subscriptions

- ### On this Page

  - [Plans](commerce_5x__system__subscriptions.md#plans)
  - [Statuses](commerce_5x__system__subscriptions.md#statuses)
  - [Starting a Subscription](commerce_5x__system__subscriptions.md#starting-a-subscription)
  - [Deleting Subscriptions or Plans](commerce_5x__system__subscriptions.md#deleting-subscriptions-or-plans)
  - [Querying Subscriptions](commerce_5x__system__subscriptions.md#querying-subscriptions)

Commerce supports recurring revenue via *subscriptions*, a feature of [some gateways](#capabilities).

Once you’ve added a payment gateway that supports subscriptions, navigate to

1. Commerce→
2. Subscription Plans

to set up one or more *plans*.

## [#](#plans)Plans

Plans are predefined connections to external products in a gateway.
When you create a new plan, Commerce communicates with the gateway and provides a list of existing candidates.
You must configure these links carefully for subscriptions to work as you expect.

Like gateways, plans are configured globally—but it is up to you where they are displayed in your front-end!

![Creating a new subscription in the Craft control panel](/docs/assets/img/subscription-plan-new.015dd163.png)

Plans have the following settings:

Name
:   A user-facing label for the plan.
    This should be distinct among plans that will be exposed to customers; additional descriptive content can be attached via the **Description** setting.

Handle
:   An identifier used in templates to load this specific plan.

Description
:   Attach an entry to hold additional content.
    Plans themselves are not elements, so they do not have their own field layouts.

Gateway
:   Select a gateway to display a list of its subscription products. If this menu is empty, you’ll need to create a gateway, first.

Gateway plan
:   Choose the externally-defined “plan” to bind the Commerce plan to.

    Gateways may use different, proprietary names for subscription products.

Enabled for customers to select?
:   Determines whether or not customers can start new subscriptions based on this plan. Disabled plans are not returned via `craft.commerce.plans.getAllEnabledPlans()`. (This setting appears in the sidebar, outside the main form!)

### [#](#capabilities)Capabilities

Subscription actions (like [cancellation](#starting-a-subscription) and [switching plans](#starting-a-subscription)) are handled in a gateway-agnostic way for your customers and administrators—but the underlying gateway *does* ultimately determine what actions are supported.

Currently, the only first-party gateway that fully implements subscriptions is [Stripe  (opens new window)](https://plugins.craftcms.com/commerce-stripe).

## [#](#statuses)Statuses

Commerce synthesizes subscription data into the following states:

Trial
:   The subscription is within a predetermined trial period before its first billing cycle.

    ```
    {% if subscription.onTrial %}
      Your trial lasts until {{ subscription.getTrialExpires()|date('short') }}.
    {% endif %}
    ```

Active
:   The subscription is within a paid billing cycle (even if it’s set to cancel at the end of the current billing cycle).

    ```
    {% if subscription.isActive %}
      Your subscription is in good standing, and your next payment will be on {{ subscription.nextPaymentDate()|date('short') }}.
    {% endif %}
    ```

Canceled
:   The subscription is *outside* of a paid billing cycle and was *canceled by the user*.

    ```
    {% if subscription.isCanceled %}
      Your subscription was canceled on {{ subscription.dateCanceled|date('short') }} and will expire on {{ subscription.nextPaymentDate|date('short') }}.
    {% endif %}
    ```

Expired
:   The subscription is *outside* of a paid billing cycle and was marked as such by the gateway (either after a fixed number of billing cycles or a permanently-failed payment).

    ```
    {% if subscription.isCanceled %}
      This subscription expired on {{ subscription.dateExpired|date('short') }}.
    {% endif %}
    ```

You can see where each of these status checks are useful on the [Subscription Templates](commerce_5x__development__subscription-templates.md) page.

Status properties may not be mutually exclusive!
For example, a subscription can be both `onTrial` *and* have an `active` status.

## [#](#starting-a-subscription)Starting a Subscription

Subscriptions are created when a logged-in customer submits a form with a plan ID and a [saved payment source](commerce_5x__development__saving-payment-sources.md) from the same gateway.

[Subscription Templates
→

Learn about building a subscription workflow.](commerce_5x__development__subscription-templates.md)

The [Subscription Templates](commerce_5x__development__subscription-templates.md) page also includes information about [canceling](commerce_5x__development__subscription-templates.md#canceling-the-subscription) and [switching](commerce_5x__development__subscription-templates.md#switching-the-subscription-plan) plans.

## [#](#deleting-subscriptions-or-plans)Deleting Subscriptions or Plans

### [#](#gateways)Gateways

Not all gateways permit deleting subscription plans.
Some gateways allow it and preserve all existing subscriptions, while others do not.
Regardless of individual gateway support, we recommended **against** deleting a subscription plan on the gateway because it might result in the loss of historical data.

If you wish to end support for a plan, you can disable it via its settings. Existing subscriptions will continue to work, but new ones cannot be started.

### [#](#commerce)Commerce

Commerce will attempt to delete all local subscription plans when a gateway is deleted. If any subscription—even an expired one—exists for a given plan, deletion will be prevented. Similarly, Commerce does not allow a user with active or expired subscriptions to be deleted.

## [#](#querying-subscriptions)Querying Subscriptions

You can fetch subscriptions in your templates or PHP code using **subscription queries**.

TwigPHP

```
{# Create a new subscription query #}
{% set mySubscriptionQuery = craft.subscriptions() %}
```

```
// Create a new subscription query
$mySubscriptionQuery = \craft\commerce\elements\Subscription::find();
```

Once you’ve created a subscription query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](https://craftcms.com/docs/5.x/development/element-queries#executing-element-queries) by calling `.all()`. An array of [Subscription  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-subscription.html) elements will be returned.

See [Element Queries](https://craftcms.com/docs/5.x/development/element-queries) in the Craft docs to learn about how element queries work.

### [#](#example)Example

We can display all of the current user’s active subscriptions by doing the following:

1. Create a subscription query with `craft.subscriptions()`.
2. Set the [user](#user) and `status` parameters on it.
3. Fetch the subscriptions with `.all()`.
4. Loop through the subscriptions using a [for  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to output their HTML.

```
{# Make sure someone is logged in: #}
{% requireLogin %}

{# Create a subscription query and set parameters: #}
{% set mySubscriptionQuery = craft.subscriptions()
  .user(currentUser)
  .status('active') %}

{# Fetch the subscriptions: #}
{% set subscriptions = mySubscriptionQuery.all() %}

{# Display the subscriptions, if there were results: #}
{% if subscriptions is not empty %}
  <ul>
    {% for subscription in subscriptions %}
      <li>
        <strong>{{ subscription.title }}</strong>
        {% if subscription.isCanceled %}
          Canceled on {{ subscription.dateCanceled|date('short') }}, ending on {{ subscription.nextPaymentDate|date('short') }}.
        {% else %}
          Renews on {{ subscription.nextPaymentDate|date('short') }}
        {% endif %}
      </li>
    {% endfor %}
  </ul>
{% else %}
  <p>You do not have any active subscriptions.</p>
  <a href="{{ siteUrl('my-account/membership') }}">Join now</a>
{% endif %}
```

### [#](#parameters)Parameters

Subscription queries support the following parameters:

| Param | Description |
| --- | --- |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only subscriptions that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only subscriptions that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching subscriptions eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching subscriptions as arrays of data, rather than [Subscription  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-subscription.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](https://craftcms.com/docs/5.x/development/element-queries#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCanceled](#datecanceled) | Narrows the query results based on the subscriptions’ cancellation date. |
| [dateCreated](#datecreated) | Narrows the query results based on the subscriptions’ creation dates. |
| [dateExpired](#dateexpired) | Narrows the query results based on the subscriptions’ expiration date. |
| [dateSuspended](#datesuspended) | Narrows the query results based on the subscriptions’ suspension date. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the subscriptions’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [gatewayId](#gatewayid) | Narrows the query results based on the gateway, per its ID. |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [hasStarted](#hasstarted) | Narrows the query results to only subscriptions that have started. |
| [id](#id) | Narrows the query results based on the subscriptions’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching subscriptions as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only subscriptions that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [isCanceled](#iscanceled) | Narrows the query results to only subscriptions that are canceled. |
| [isExpired](#isexpired) | Narrows the query results to only subscriptions that have expired. |
| [isSuspended](#issuspended) | Narrows the query results to only subscriptions that are suspended. |
| [language](#language) | Determines which site(s) the subscriptions should be queried in, based on their language. |
| [limit](#limit) | Determines the number of subscriptions that should be returned. |
| [nextPaymentDate](#nextpaymentdate) | Narrows the query results based on the subscriptions’ next payment dates. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only subscriptions that are not related to certain other elements. |
| [offset](#offset) | Determines how many subscriptions should be skipped in the results. |
| [onTrial](#ontrial) | Narrows the query results to only subscriptions that are on trial. |
| [orderBy](#orderby) | Determines the order that the subscriptions should be returned in. (If empty, defaults to `dateCreated DESC`.) |
| [orderId](#orderid) | Narrows the query results based on the order, per its ID. |
| [plan](#plan) | Narrows the query results based on the subscription plan. |
| [planId](#planid) | Narrows the query results based on the subscription plans’ IDs. |
| [preferSites](#prefersites) | If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [reference](#reference) | Narrows the query results based on the reference. |
| [relatedTo](#relatedto) | Narrows the query results to only subscriptions that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only subscriptions that match a search query. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the subscriptions’ IDs in the `elements_sites` table. |
| [status](#status) | Narrows the query results based on the subscriptions’ statuses. |
| [trashed](#trashed) | Narrows the query results to only subscriptions that have been soft-deleted. |
| [trialDays](#trialdays) | Narrows the query results based on the number of trial days. |
| [uid](#uid) | Narrows the query results based on the subscriptions’ UIDs. |
| [user](#user) | Narrows the query results based on the subscriptions’ user accounts. |
| [userId](#userid) | Narrows the query results based on the subscriptions’ user accounts’ IDs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching subscriptions eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only subscriptions that are not related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all subscriptions that are related to myCategoryA and not myCategoryB #}
{% set subscriptions = craft.subscriptions()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all subscriptions that are related to $myCategoryA and not $myCategoryB
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only subscriptions that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all subscriptions that are related to myCategoryA and myCategoryB #}
{% set subscriptions = craft.subscriptions()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all subscriptions that are related to $myCategoryA and $myCategoryB
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching subscriptions eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching subscriptions as arrays of data, rather than [Subscription  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-elements-subscription.html) objects.

TwigPHP

```
{# Fetch subscriptions as arrays #}
{% set subscriptions = craft.subscriptions()
  .asArray()
  .all() %}
```

```
// Fetch subscriptions as arrays
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->asArray()
    ->all();
```

#### [#](#cache)`cache`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-cache)

Enables query cache for this Query.

#### [#](#canonicalsonly)`canonicalsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-canonicalsonly)

Narrows the query results to only canonical elements, including elements
that reference another canonical element via `canonicalId` so long as they
aren’t a draft.

Unpublished drafts can be included as well if `drafts(null)` and
`draftOf(false)` are also passed.

#### [#](#clearcachedresult)`clearCachedResult`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-clearcachedresult)

Clears the [cached result  (opens new window)](https://craftcms.com/docs/5.x/development/element-queries#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#datecanceled)`dateCanceled`

Narrows the query results based on the subscriptions’ cancellation date.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | that were canceled on or after 2018-04-01. |
| `'< 2018-05-01'` | that were canceled before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were canceled between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch subscriptions that were canceled recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set subscriptions = craft.subscriptions()
  .dateCanceled(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch subscriptions that were canceled recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->dateCanceled(">= {$aWeekAgo}")
    ->all();
```

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the subscriptions’ creation dates.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch subscriptions created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set subscriptions = craft.subscriptions()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch subscriptions created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateexpired)`dateExpired`

Narrows the query results based on the subscriptions’ expiration date.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | that expired on or after 2018-04-01. |
| `'< 2018-05-01'` | that expired before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that expired between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch subscriptions that expired recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set subscriptions = craft.subscriptions()
  .dateExpired(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch subscriptions that expired recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->dateExpired(">= {$aWeekAgo}")
    ->all();
```

#### [#](#datesuspended)`dateSuspended`

Narrows the query results based on the subscriptions’ suspension date.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | that were suspended on or after 2018-04-01. |
| `'< 2018-05-01'` | that were suspended before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were suspended between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch subscriptions that were suspended recently #}
{% set aWeekAgo = date('7 days ago')|atom %}

{% set subscriptions = craft.subscriptions()
  .dateSuspended(">= #{aWeekAgo}")
  .all() %}
```

```
// Fetch subscriptions that were suspended recently
$aWeekAgo = new \DateTime('7 days ago')->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->dateSuspended(">= {$aWeekAgo}")
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the subscriptions’ last-updated dates.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch subscriptions updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set subscriptions = craft.subscriptions()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch subscriptions updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch subscriptions in a specific order #}
{% set subscriptions = craft.subscriptions()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch subscriptions in a specific order
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#gatewayid)`gatewayId`

Narrows the query results based on the gateway, per its ID.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | with a gateway with an ID of 1. |
| `'not 1'` | not with a gateway with an ID of 1. |
| `[1, 2]` | with a gateway with an ID of 1 or 2. |
| `['not', 1, 2]` | not with a gateway with an ID of 1 or 2. |

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#hasstarted)`hasStarted`

Narrows the query results to only subscriptions that have started.

TwigPHP

```
{# Fetch started subscriptions #}
{% set subscriptions = craft.subscriptions()
  .hasStarted()
  .all() %}
```

```
// Fetch started subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->hasStarted()
    ->all();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the subscriptions’ IDs.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the subscription by its ID #}
{% set subscription = craft.subscriptions()
  .id(1)
  .one() %}
```

```
// Fetch the subscription by its ID
$subscription = \craft\commerce\elements\Subscription::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching subscriptions as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only subscriptions that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch subscriptions in reverse #}
{% set subscriptions = craft.subscriptions()
  .inReverse()
  .all() %}
```

```
// Fetch subscriptions in reverse
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->inReverse()
    ->all();
```

#### [#](#iscanceled)`isCanceled`

Narrows the query results to only subscriptions that are canceled.

TwigPHP

```
{# Fetch canceled subscriptions #}
{% set subscriptions = craft.subscriptions()
  .isCanceled()
  .all() %}
```

```
// Fetch canceled subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->isCanceled()
    ->all();
```

#### [#](#isexpired)`isExpired`

Narrows the query results to only subscriptions that have expired.

TwigPHP

```
{# Fetch expired subscriptions #}
{% set subscriptions = craft.subscriptions()
  .isExpired()
  .all() %}
```

```
// Fetch expired subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->isExpired()
    ->all();
```

#### [#](#issuspended)`isSuspended`

Narrows the query results to only subscriptions that are suspended.

TwigPHP

```
{# Fetch suspended subscriptions #}
{% set subscriptions = craft.subscriptions()
  .isSuspended()
  .all() %}
```

```
// Fetch suspended subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->isSuspended()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the subscriptions should be queried in, based on their language.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) in conjunction with this.

TwigPHP

```
{# Fetch subscriptions from English sites #}
{% set subscriptions = craft.subscriptions()
  .language('en')
  .all() %}
```

```
// Fetch subscriptions from English sites
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->language('en')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of subscriptions that should be returned.

TwigPHP

```
{# Fetch up to 10 subscriptions  #}
{% set subscriptions = craft.subscriptions()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->limit(10)
    ->all();
```

#### [#](#nextpaymentdate)`nextPaymentDate`

Narrows the query results based on the subscriptions’ next payment dates.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'>= 2018-04-01'` | with a next payment on or after 2018-04-01. |
| `'< 2018-05-01'` | with a next payment before 2018-05-01 |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | with a next payment between 2018-04-01 and 2018-05-01. |

TwigPHP

```
{# Fetch subscriptions with a payment due soon #}
{% set aWeekFromNow = date('+7 days')|atom %}

{% set subscriptions = craft.subscriptions()
  .nextPaymentDate("< #{aWeekFromNow}")
  .all() %}
```

```
// Fetch subscriptions with a payment due soon
$aWeekFromNow = new \DateTime('+7 days')->format(\DateTime::ATOM);

$subscriptions = \craft\commerce\elements\Subscription::find()
    ->nextPaymentDate("< {$aWeekFromNow}")
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only subscriptions that are not related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all subscriptions that are related to myEntry #}
{% set subscriptions = craft.subscriptions()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all subscriptions that are related to $myEntry
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many subscriptions should be skipped in the results.

TwigPHP

```
{# Fetch all subscriptions except for the first 3 #}
{% set subscriptions = craft.subscriptions()
  .offset(3)
  .all() %}
```

```
// Fetch all subscriptions except for the first 3
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->offset(3)
    ->all();
```

#### [#](#ontrial)`onTrial`

Narrows the query results to only subscriptions that are on trial.

TwigPHP

```
{# Fetch trialed subscriptions #}
{% set subscriptions = craft.subscriptions()
  .onTrial()
  .all() %}
```

```
// Fetch trialed subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->isPaid()
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the subscriptions should be returned in. (If empty, defaults to `dateCreated DESC`.)

TwigPHP

```
{# Fetch all subscriptions in order of date created #}
{% set subscriptions = craft.subscriptions()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all subscriptions in order of date created
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#orderid)`orderId`

Narrows the query results based on the order, per its ID.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | with an order with an ID of 1. |
| `'not 1'` | not with an order with an ID of 1. |
| `[1, 2]` | with an order with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an order with an ID of 1 or 2. |

#### [#](#plan)`plan`

Narrows the query results based on the subscription plan.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'foo'` | for a plan with a handle of `foo`. |
| `['foo', 'bar']` | for plans with a handle of `foo` or `bar`. |
| a [Plan  (opens new window)](https://docs.craftcms.com/commerce/api/v5/craft-commerce-base-plan.html) object | for a plan represented by the object. |

TwigPHP

```
{# Fetch Supporter plan subscriptions #}
{% set subscriptions = craft.subscriptions()
  .plan('supporter')
  .all() %}
```

```
// Fetch Supporter plan subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->plan('supporter')
    ->all();
```

#### [#](#planid)`planId`

Narrows the query results based on the subscription plans’ IDs.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | for a plan with an ID of 1. |
| `[1, 2]` | for plans with an ID of 1 or 2. |
| `['not', 1, 2]` | for plans not with an ID of 1 or 2. |

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique subscriptions from Site A, or Site B if they don’t exist in Site A #}
{% set subscriptions = craft.subscriptions()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique subscriptions from Site A, or Site B if they don’t exist in Site A
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#prepforeagerloading)`prepForEagerLoading`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prepforeagerloading)

Prepares the query for lazy eager loading.

#### [#](#preparesubquery)`prepareSubquery`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-preparesubquery)

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#reference)`reference`

Narrows the query results based on the reference.

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only subscriptions that are related to certain other elements.

See [Relations  (opens new window)](https://craftcms.com/docs/5.x/system/relations) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all subscriptions that are related to myCategory #}
{% set subscriptions = craft.subscriptions()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all subscriptions that are related to $myCategory
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only subscriptions that match a search query.

See [Searching  (opens new window)](https://craftcms.com/docs/5.x/system/searching) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all subscriptions that match the search query #}
{% set subscriptions = craft.subscriptions()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all subscriptions that match the search query
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the subscriptions’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the subscription by its ID in the elements_sites table #}
{% set subscription = craft.subscriptions()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the subscription by its ID in the elements_sites table
$subscription = \craft\commerce\elements\Subscription::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#status)`status`

Narrows the query results based on the subscriptions’ statuses.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'active'` *(default)* | that are active. |
| `'expired'` | that have expired. |

TwigPHP

```
{# Fetch expired subscriptions #}
{% set subscriptions = craft.subscriptions()
  .status('expired')
  .all() %}
```

```
// Fetch expired subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->status('expired')
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only subscriptions that have been soft-deleted.

TwigPHP

```
{# Fetch trashed subscriptions #}
{% set subscriptions = craft.subscriptions()
  .trashed()
  .all() %}
```

```
// Fetch trashed subscriptions
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->trashed()
    ->all();
```

#### [#](#trialdays)`trialDays`

Narrows the query results based on the number of trial days.

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the subscriptions’ UIDs.

TwigPHP

```
{# Fetch the subscription by its UID #}
{% set subscription = craft.subscriptions()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the subscription by its UID
$subscription = \craft\commerce\elements\Subscription::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#user)`user`

Narrows the query results based on the subscriptions’ user accounts.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `'foo'` | for a user account with a username of `foo` |
| `['foo', 'bar']` | for user accounts with a username of `foo` or `bar`. |
| a [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | for a user account represented by the object. |

TwigPHP

```
{# Fetch the current user's subscriptions #}
{% set subscriptions = craft.subscriptions()
  .user(currentUser)
  .all() %}
```

```
// Fetch the current user's subscriptions
$user = Craft::$app->user->getIdentity();
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->user($user)
    ->all();
```

#### [#](#userid)`userId`

Narrows the query results based on the subscriptions’ user accounts’ IDs.

Possible values include:

| Value | Fetches subscriptions… |
| --- | --- |
| `1` | for a user account with an ID of 1. |
| `[1, 2]` | for user accounts with an ID of 1 or 2. |
| `['not', 1, 2]` | for user accounts not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the current user's subscriptions #}
{% set subscriptions = craft.subscriptions()
  .userId(currentUser.id)
  .all() %}
```

```
// Fetch the current user's subscriptions
$user = Craft::$app->user->getIdentity();
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->userId($user->id)
    ->all();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching subscriptions eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](https://craftcms.com/docs/5.x/development/eager-loading) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch subscriptions eager-loaded with the "Related" field’s relations #}
{% set subscriptions = craft.subscriptions()
  .with(['related'])
  .all() %}
```

```
// Fetch subscriptions eager-loaded with the "Related" field’s relations
$subscriptions = \craft\commerce\elements\Subscription::find()
    ->with(['related'])
    ->all();
```

#### [#](#withcustomfields)`withCustomFields`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withcustomfields)

Sets whether custom fields should be factored into the query.

#### [#](#withprovisionaldrafts)`withProvisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withprovisionaldrafts)

Causes the query to return provisional drafts for the matching elements,
when they exist for the current user.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!

# Addresses | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/addresses

---

# Addresses

- ### On this Page

  - [Setup](docs_5x__reference__element-types__addresses.md#setup)
  - [Address Repository](docs_5x__reference__element-types__addresses.md#address-repository)
  - [Fields and Formatting](docs_5x__reference__element-types__addresses.md#fields-and-formatting)
  - [Managing Addresses](docs_5x__reference__element-types__addresses.md#managing-addresses)
  - [Validating Addresses](docs_5x__reference__element-types__addresses.md#validating-addresses)
  - [Querying Addresses](docs_5x__reference__element-types__addresses.md#querying-addresses)

Addresses are a type of [element](docs_5x__system__elements.md) you’ll most commonly encounter in conjunction with [Users](docs_5x__reference__element-types__users.md). [Querying addresses](#querying-addresses) and working with their [field data](#fields-and-formatting) is nearly identical to the experience working with any other element type.

For sites supporting [public registration](docs_5x__system__user-management.md#public-registration) (like a storefront built on [Craft Commerce](https://craftcms.com/docs/commerce/5.x/)) users can manage their own [address book](#managing-addresses).

Plugins are also able to use addresses to store their own location data.

## [#](#setup)Setup

All address elements share a single field layout, which is managed in the control panel via

1. Settings→
2. Addresses

.

my-project.ddev.site/admin/settings/addresses

![Screenshot of the address element field layout](/docs/assets/img/address-field-layout.69debea9.png)

### [#](#native-and-custom-fields)Native and Custom Fields

The address field layout has additional native (but optional) fields for a handful of useful attributes:

- **Label** (`title`) — An optional [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "The label field on addresses can be made optional as of Craft 5.9.0") description of the address.
- **Organization** (`organization`) — A text field for entering a business or entity name.
- **Organization Tax ID** (`organizationTaxId`) — Designed to hold an identifier for the legal entity represented by the address. Used by [Commerce](https://craftcms.com/docs/commerce/5.x/) to aide in tax calculations.
- **Full Name** (`fullName` or `firstName` and `lastName`) — Associate the address with a name. As with [users](docs_5x__reference__element-types__users.md), a single input is displayed, unless [showFirstAndLastNameFields](docs_5x__reference__config__general.md#showfirstandlastnamefields) is enabled.
- **Latitude/Longitude** (`latitude` and `longitude`) — A pair of inputs for latitude and longitude values. Craft does not use these, internally.

Just like other element types, addresses support [custom fields](docs_5x__system__fields.md) for anything else you might need to store.

For compatibility and localization, core address components (aside from the **Country Code**) can’t be separated from one another in the field layout.
The relevant fields for the given country are rendered wherever the **Address** field layout element is placed.

When building [front-end address forms](#managing-addresses), you are free to organize the inputs in whatever way is appropriate for your users.

### [#](#config-options)Config Options

These settings affect authors’ (and front-end users’) experience with address elements:

- **[defaultCountryCode](docs_5x__reference__config__general.md#defaultcountrycode)** — Choose a default country for new addresses.
- **[showFirstAndLastNameFields](docs_5x__reference__config__general.md#showfirstandlastnamefields)** — Determines whether the **Full Name** field is a single input, or split into **First Name** and **Last Name** inputs. Names are always stored as a single value, and split back out into first and last, as necessary.
- **[extraLastNamePrefixes](docs_5x__reference__config__general.md#extralastnameprefixes)**, **[extraNameSuffixes](docs_5x__reference__config__general.md#extranamesuffixes)**, and **[extraNameSalutations](docs_5x__reference__config__general.md#extranamesalutations)**, — Additional ways to customize the built-in name parser.

### [#](#copying-addresses)Copying Addresses [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Copying addresses was first available in version 5.7.0 of Craft.")

Addresses can be copied and pasted between users and [addresses fields](docs_5x__reference__field-types__addresses.md).

[Copying Elements
→

Learn how to copy addresses and other elements between contexts.](docs_5x__system__elements.md#copying-elements)

## [#](#address-repository)Address Repository

The [commerceguys/addressing  (opens new window)](https://github.com/commerceguys/addressing) library powers planet-friendly address handling and formatting, and its exhaustive repository of global address information is available to all Craft projects. If you need a list of countries, states, or provinces, for example, you can fetch them via Craft’s [Addresses  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-addresses.html) service, from Twig templates or PHP:

TwigPHP

```
{% set countries = craft.app.getAddresses().getCountryRepository().getAll() %}
```

```
$countries = Craft::$app->getAddresses()->getCountryRepository()->getAll();
```

This returns an array of [Country  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/Country/Country.php) objects, indexed by their two-letter code. You might use this to populate a dropdown menu:

```
<select name="myCountry">
  {% for code, country in countries %}
    <option value="{{ code }}">{{ country.name }}</option>
  {% endfor %}
</select>

{# Output:
<select name="myCountry">
  <option value="AF">Afghanistan</option>
  <option value="AX">Åland Islands</option>
  ...
</select>
#}
```

Similarly, a repository of subdivisions are available, hierarchically—with up to three levels, depending on how a given country is organized: *Administrative Area* → *Locality* → *Dependent Locality*.

Expanding upon our previous example, we could output a nicely organized list of “administrative areas,” like this:

```
{% set subdivisionRepo = craft.app.getAddresses().getSubdivisionRepository() %}
{% set countriesWithSubdivisions = countries | filter(c => subdivisionRepo.getAll([c.countryCode]) | length) %}

<select name="administrativeArea">
  {% for country in countriesWithSubdivisions %}
    {% set administrativeAreas = subdivisionRepo.getAll([country.countryCode]) %}

    <optgroup label="{{ country.name }}">
      {% for a in administrativeAreas %}
        <option value="{{ a.code }}">{{ a.name }}</option>
      {% endfor %}
    </optgroup>
  {% endfor %}
</select>
```

Either repository’s `getList()` method is a shortcut that returns only key-value pairs, suitable for our examples—it also accepts an array of “parent” groups (beginning with country code) to narrow the subdivisions.

These designations are deliberately generic, and won’t generally be recognized by users. Check out the [labels](#attribute-labels) section for information on how to output localized or context-aware names for each level (i.e. *Provinces* in Canada or *States* and *Counties* in the United States).

You may supplement the subdivision data provided by the [upstream repository  (opens new window)](https://github.com/commerceguys/addressing) by listening to the [craft\services\Addresses::EVENT\_DEFINE\_ADDRESS\_SUBDIVISIONS  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-addresses.html#event-define-address_subdivisions) event in a plugin or module. Similarly, deeper customization of the required [fields](#fields-and-formatting) (and those fields’ [labels](#attribute-labels)) may require modifying the defaults via the [EVENT\_DEFINE\_USED\_SUBDIVISION\_FIELDS  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-addresses.html#event-define-used_subdivision_fields) or [EVENT\_DEFINE\_FIELD\_LABEL  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-addresses.html#event-define-field_label) events.

Check out the [addressing docs  (opens new window)](https://github.com/commerceguys/addressing#data-model) for more details and examples of what’s possible—including translation of place names, postal codes, timezones, and [formatting](#fields-and-formatting)!

## [#](#fields-and-formatting)Fields and Formatting

### [#](#field-handles)Field Handles

Individual fields—native and custom—are accessed via their handles, like any other element:

```
<ul>
  <li>Name: {{ myAddress.title }}</li>
  <li>Postal Code: {{ myAddress.postalCode }}</li>
  <li>Custom Label Color: {{ myAddress.myCustomColorFieldHandle }}</li>
</ul>
```

### [#](#attribute-labels)Attribute Labels

The addressing library’s abstracted *Administrative Area* → *Locality* → *Dependent Locality* terminology probably isn’t what you are accustomed to calling those address components in your part of the world—and it’s even less likely you’d want to show those terms to site visitors.

You can use any address element’s `attributeLabel()` method to get human-friendly labels for a given locale. Assuming we’re working with a U.S. address…

```
{{ myAddress.attributeLabel('administrativeArea') }} {# State #}
{{ myAddress.attributeLabel('locality') }} {# City #}
{{ myAddress.attributeLabel('dependentLocality') }} {# Suburb #}
{{ myAddress.attributeLabel('postalCode') }} {# Zip Code #}
```

Labels use the address’s current `countryCode` value for localization.

### [#](#address-formatter)`|address` Formatter

You can use the [`|address`](docs_5x__reference__twig__filters.md#address) filter to output a formatted address with basic HTML:

```
{{ myAddress|address }}
{# Output:
  <p translate="no">
    <span class="address-line1">1234 Balboa Towers Circle</span><br>
    <span class="locality">Los Angeles</span>, <span class="administrative-area">CA</span> <span class="postal-code">92662</span><br>
    <span class="country">United States</span>
  </p>
#}
```

The default formatter includes the following options:

- **locale** – defaults to `'en'`
- **html** – defaults to `true`; disable with `false` to maintain line breaks but omit HTML tags
- **html\_tag** – defaults to `p`
- **html\_attributes** – is an array that defaults to `['translate' => 'no']`

```
{# Swap enclosing paragraph tag for a `div`: #}
{{ myAddress|address({ html_tag: 'div' }) }}
{# Output:
  <div translate="no">
    <span class="address-line1">1234 Balboa Towers Circle</span><br>
    <span class="locality">Los Angeles</span>, <span class="administrative-area">CA</span> <span class="postal-code">92662</span><br>
    <span class="country">United States</span>
  </div>
#}

{# Turn the entire address into a Google Maps link: #}
{{ myAddress|address({
  html_tag: 'a',
  html_attributes: {
    href: url('https://maps.google.com/maps/search/', {
      query_place_id: address.myCustomPlaceIdField,
    }),
  },
}) }}
{# Output:
  <a href="https://maps.google.com/maps/search/?query_place_id=...">
    <span class="address-line1">1234 Balboa Towers Circle</span><br>
    <span class="locality">Los Angeles</span>, <span class="administrative-area">CA</span> <span class="postal-code">92662</span><br>
    <span class="country">United States</span>
  </a>
#}

{# Omit all HTML tags: #}
{{ myAddress|address({ html: false }) }}
{# Output:
  1234 Balboa Towers Circle
  Los Angeles, CA 92662
  United States
#}

{# Force output in the Ukrainian (`uk`) locale: #}
{{ myAddress|address({ html: false, locale: 'uk' }) }}
{# Output:
  1234 Balboa Towers Circle
  Los Angeles, CA 92662
  Сполучені Штати
#}
```

#### [#](#country-names)Country Names

Only the two-letter “country code” is stored on addresses. To display the full country name, use the attached [`Country`  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/Country/Country.php) model:  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "Address.getCountry() was first available in version 5.3.0 of Craft.")

```
{% set country = address.country %}

{{ country.name }}
```

Via the `Country` object, you also have access to the following data:

- `countryCode` — Same ISO 3166-1 alpha-2 code as was stored as `address.countryCode`.
- `name` — Name of the country, localized for the current site.
- `threeLetterCode` — ISO 3166-1 alpha-3 code for the country.
- `numericalCode` — ISO ISO 3166-1 numeric codes.
- `currencyCode` — ISO 4217 currency code (not the symbol).
- `timezones` — A list of PHP timezone identifiers for the country. This is not necessarily specific to the address!
- `locale` — The locale the country name is localized for. Defaults to the app’s current language, which might be a site’s language or a control panel user’s language preference. If you need to manually localize a country’s name, see below.

In earlier versions of Craft, you must directly retrieve its definition from the [address repository](#address-repository):

```
{% set country = craft.app.getAddresses().getCountryRepository().get(address.countryCode) %}

{{ country.name }}
```

To get the localized name of a country outside of a formatted address, you must re-fetch it from the address repository:

```
{% set repo = craft.app.addresses.getCountryRepository() %}
{% set country = repo.get(entry.country, currentSite.locale) %}

{{ country.name }}
{# -> In a site set to use US English (en-US): "United States" #}
{# -> In a site set to use Swiss French (fr-CH): "États-Unis" #}
```

### [#](#customizing-the-formatter)Customizing the Formatter

You can also pass your own formatter to the `|address` filter. The addressing library includes [PostalLabelFormatter  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/Formatter/PostalLabelFormatter.php) to make it easier to print shipping labels. Here, we can specify that formatter and set its additional `origin_country` option:

```
{# Use the postal label formatter #}
{% set addressService = craft.app.getAddresses() %}
{% set labelFormatter = create(
  'CommerceGuys\\Addressing\\Formatter\\PostalLabelFormatter',
  [
    addressService.getAddressFormatRepository(),
    addressService.getCountryRepository(),
    addressService.getSubdivisionRepository(),
  ]
) %}

{{ addr|address({ origin_country: 'GB' }, labelFormatter) }}

{# Output:
  1234 Balboa Towers Circle
  LOS ANGELES, CA 92662
  UNITED STATES
#}
```

You can also write a custom formatter that implements [FormatterInterface  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/Formatter/FormatterInterface.php). We could extend the default formatter, for example, to add a `hide_countries` option that avoids printing the names of specified countries:

```
<?php

namespace mynamespace;

use CommerceGuys\Addressing\AddressInterface;
use CommerceGuys\Addressing\Formatter\DefaultFormatter;
use CommerceGuys\Addressing\Locale;
use craft\helpers\Html;

class OptionalCountryFormatter extends DefaultFormatter
{
    /**
     * @inheritdoc
     */
    protected $defaultOptions = [
        'locale' => 'en',
        'html' => true,
        'html_tag' => 'p',
        'html_attributes' => ['translate' => 'no'],
        'hide_countries' => [],
    ];

    /**
     * @inheritdoc
     */
    public function format(AddressInterface $address, array $options = []): string
    {
        $this->validateOptions($options);
        $options = array_replace($this->defaultOptions, $options);
        $countryCode = $address->getCountryCode();
        $addressFormat = $this->addressFormatRepository->get($countryCode);

        if (!in_array($countryCode, $options['hide_countries'])) {
            if (Locale::matchCandidates($addressFormat->getLocale(), $address->getLocale())) {
                $formatString = '%country' . "\n" . $addressFormat->getLocalFormat();
            } else {
                $formatString = $addressFormat->getFormat() . "\n" . '%country';
            }
        } else {
            // If this is in our `hide_countries` list, omit the country
            $formatString = $addressFormat->getFormat();
        }

        $view = $this->buildView($address, $addressFormat, $options);
        $view = $this->renderView($view);
        $replacements = [];

        foreach ($view as $key => $element) {
            $replacements['%' . $key] = $element;
        }

        $output = strtr($formatString, $replacements);
        $output = $this->cleanupOutput($output);

        if (!empty($options['html'])) {
            $output = nl2br($output, false);

            // Add the HTML wrapper element with Craft’s HTML helper:
            $output = Html::tag($options['html_tag'], $output, $options['html_attributes']);
        }

        return $output;
    }
}
```

We can instantiate and use that just like the postal label formatter:

```
{# Use our custom formatter #}
{% set addressService = craft.app.getAddresses() %}
{% set customFormatter = create(
  'mynamespace\\OptionalCountryFormatter',
  [
    addressService.getAddressFormatRepository(),
    addressService.getCountryRepository(),
    addressService.getSubdivisionRepository(),
  ]
) %}
{{ addr|address({ hide_countries: ['US'] }, customFormatter) }}
{# Output:
  1234 Balboa Towers Circle
  Los Angeles, CA 92662
#}
```

To replace the default formatter, add the following to your [application configuration](docs_5x__reference__config__app.md):

```
return [
    // ...
    'components' => [
        // ...
        'addresses' => [
            'class' => \craft\services\Addresses::class,
            'formatter' => new \mynamespace\OptionalCountryFormatter(
                new \CommerceGuys\Addressing\AddressFormat\AddressFormatRepository(),
                new \CommerceGuys\Addressing\Country\CountryRepository(),
                new \CommerceGuys\Addressing\Subdivision\SubdivisionRepository()
            )
        ],
    ],
];
```

The default formatter is used in the control panel as well as your templates, so make sure it includes all the information required for administrators to act on users’ information! Complete address data is always be available when viewing or editing it in a slideout.

## [#](#managing-addresses)Managing Addresses

Users can add, edit, and delete their own addresses from the front-end via the `users/save-address` and `users/delete-address` [controller actions](docs_5x__reference__controller-actions.md#post-users-save-address).

Craft doesn’t automatically give addresses their own URLs, so it’s up to you to define a [routing scheme](docs_5x__system__routing.md#advanced-routing-with-url-rules) for them via `routes.php`. We’ll cover each of these three routes in the following sections:

```
return [
    // Listing Addresses
    'account' => ['template' => '_account/dashboard'],

    // New Addresses
    'account/addresses/new' => ['template' => '_account/edit-address'],

    // Existing Addresses
    'account/addresses/<addressUid:{uid}>' => ['template' => '_account/edit-address'],
];
```

The next few snippets may be a bit dense—numbered comments are peppered throughout, corresponding to items in the **Guide** section just below it.

### [#](#scaffolding)Scaffolding

The following templates assume you have a layout functionally equivalent to the [models and validation](docs_5x__development__forms.md#models-and-validation) example.

### [#](#listing-addresses)Listing Addresses

Let’s display the current user’s address book on their account “dashboard.”

\_account/dashboard.twig

```
{% extends '_layouts/default' %}

{% requireLogin %}

{# 1. Load Addresses: #}
{% set addresses = currentUser.getAddresses() %}

{% block content %}
  <h1>Hello, {{ currentUser.fullName }}!</h1>

  {% if addresses | length %}
    <ul>
      {% for address in addresses %}
        <li>
          {{ address.title }}<br>
          {{ address|address }}<br>

          {# 2. Build an edit URL: #}
          <a href="{{ url("account/addresses/#{address.uid}") }}">Edit</a>

          {# 3. Use a form to delete Addresses: #}
          <form method="post">
            {{ csrfInput() }}
            {{ actionInput('users/delete-address') }}
            {{ hiddenInput('addressId', address.id) }}

            <button>Delete</button>
          </form>
        </li>
      {% endfor $}
    </ul>
  {% else %}
    <p>You haven’t added any addresses, yet!</p>
  {% endif %}

  {# 4. Link to "new" route: #}
  <p><a href="{{ url('account/addresses/new') }}">New Address</a></p>
{% endblock %}
```

#### [#](#guide)Guide

1. We’re using a [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) convenience method to load the current user’s saved addresses, but this is equivalent to our earlier [query example](#querying-addresses).
2. These URLs will need to match the pattern defined in `routes.php`. In our case, that means we need to interpolate the Address’s UID into the path.
3. [Deleting an Address](docs_5x__development__forms.md#post-users-delete-address) requires a POST request, which—for the sake of simplicity—we’re handling with a regular HTML form.
4. The [New Address](#new-addresses) route is static—there’s nothing to interpolate or parameterize.

### [#](#new-addresses)New Addresses

The code for new addresses will end up being reused for [existing addresses](#existing-addresses).

\_account/edit-address.twig\_account/address-form.twig

```
{% extends '_layouts/default' %}

{% requireLogin %}

{% block content %}
  <h1>New Address</h1>

  {# 1. Render the form #}
  {{ include('_account/address-form', {
    address: address ?? create('craft\\elements\\Address'),
  }) }}
{% endblock %}
```

```
<form method="post">
  {{ csrfInput() }}

  {# 2. Set the controller action: #}
  {{ actionInput('users/save-address') }}

  {# 3. Special cases for existing addresses: #}
  {% if address.id %}
    {{ hiddenInput('addressId', address.id) }}
  {% endif %}

  {# 4. Redirection: #}
  {{ redirectInput('account/addresses/{uid}') }}

  {# 5. Address Fields: #}

  <label for="title">Title</label>
  <input
    type="text"
    name="title"
    id="title"
    value="{{ address.title }}">

  <label for="addressLine1">Address Line 1</label>
  <input
    type="text"
    name="addressLine1"
    id="addressLine1"
    value="{{ address.addressLine1 }}">

  <label for="addressLine2">Address Line 2</label>
  <input
    type="text"
    name="addressLine2"
    id="addressLine2"
    value="{{ address.addressLine2 }}">

  <label for="countryCode">Country</label>
  <select name="countryCode" id="countryCode">
    {% for country in craft.app.getAddresses().getCountryRepository().getAll() %}
      {{ tag('option', {
        value: country.countryCode,
        selected: country.countryCode == address.countryCode,
        text: country.name,
      }) }}
    {% endfor %}
  </select>

  {# ... #}

  <button>Save</button>
</form>
```

#### [#](#guide-2)Guide

1. We pass an [craft\elements\Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-address.html) to the form partial—either from an `address` variable that is available to the template after an attempted submission (say, due to validation errors), or a new one instantiated with the [`create()` function](docs_5x__reference__twig__functions.md#create).
2. Whether we’re creating a new address or editing an existing one (this partial handles both), the request should be sent to the `users/save-address` action.
3. Addresses that have been previously saved will have an `id`, so we need to send that back to apply updates to the correct Address.
4. The [`redirectInput()` function](docs_5x__reference__twig__functions.md#redirectinput) accepts an [object template](docs_5x__system__object-templates.md), which can include properties of the thing we’re working with. The template won’t be evaluated when it appears in the form—instead, Craft will render it using the address element *after* it’s been successfully saved. In this case, we’ll be taken to the [edit screen](#existing-addresses) for the newly-saved address.
5. Which fields are output is up to you—but be aware that the selected `countryCode` may influence what additional address fields are required. If you want to capture input for [custom fields](docs_5x__system__fields.md), it should be nested under the `fields` key, as it is for entries and other element types: `<input type="text" name="fields[myCustomFieldHandle]" value="...">`

See the [complete list of parameters](docs_5x__development__forms.md#post-users-save-address) that can be sent to the `users/save-address` action.

### [#](#existing-addresses)Existing Addresses

To edit an existing address, we’ll use the `addressUid` parameter from our route.

```
{% extends '_layouts/default' %}

{% requireLogin %}

{# 1. Resolve the address: #}
{% set address = address ?? craft.addresses
  .owner(currentUser)
  .uid(addressUid)
  .one() %}

{# 2. Make sure we got something: #}
{% if not address %}
  {% exit 404 %}
{% endif %}

{% block content %}
  <h1>Edit Address: {{ address.title }}</h1>

  {# 3. Render form: #}
  {{ include('_account/address-form', {
    address: address,
  }) }}
{% endblock %}
```

#### [#](#guide-3)Guide

1. In one statement, we’re checking for the presence of an `address` variable sent back to the template by a prior submission, and falling back to a lookup against the user’s Addresses. By calling `.owner(currentUser)`, we can be certain we’re only ever showing a user an Address they own.
2. If an Address wasn’t passed back to the template, *and* the UID from our route didn’t match one of the current user’s addresses, we bail.
3. The Address is passed to the form partial for rendering—see the [new address example](#new-addresses) for the form’s markup.

## [#](#validating-addresses)Validating Addresses

Addresses are validated like any other type of element, but some of the rules are dependent upon its localized format.

You can set requirements for custom fields in the Address Fields [field layout](#native-custom-fields), or directly manipulate validation rules using a [custom plugin or module](docs_5x__extend.md).

Take a look at the [Using Events in a Custom Module  (opens new window)](https://craftcms.com/knowledge-base/custom-module-events) article for a dedicated primer on module setup and events.

[Validation rules  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/input-validation) are added via the `Model::EVENT_DEFINE_RULES` event:

```
use yii\base\Event;
use craft\base\Model;
use craft\elements\Address;
use craft\events\DefineRulesEvent;

Event::on(
    Address::class,
    Model::EVENT_DEFINE_RULES,
    function(DefineRulesEvent $event) {
        $event->rules[] = [
            ['fullName'],
            'match',
            'pattern' => '/droid|bot/i',
            'message' => Craft::t('site', 'Robots are not allowed.'),
        ];
    }
);
```

Errors are available through the same `address.getErrors()` method used in other action and [model validation examples](docs_5x__development__forms.md#models-and-validation), regardless of whether they were produced by built-in rules or ones you added.

This same pattern can also be used to *unset* validation rules that you don’t need (but may have been imposed by the [address repository](#address-repository)).
Your handler function might look something like this:

```
function(DefineRulesEvent $event) {
    $event->rules = array_filter(
        $event->rules,
        function($rule) {
            // Keep/ignore all rules except those having to do with the “state:”
            if ($rule[0] !== 'administrativeArea') {
                return true;
            }

            // Does this rule do something other than mark it as required?
            if ($rule[1] !== 'required') {
              return true;
            }

            // Ok, filter out this rule:
            return false;
        }
    );
}
```

In this example, we are only removing a single rule (one that would be written `['administrativeArea', 'required']`), but others may remain that ensure the selected value is valid *when provided*.

## [#](#querying-addresses)Querying Addresses

You can fetch addresses in your templates or PHP code using an [AddressQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-addressquery.html).

TwigPHP

```
{# Create a new address query #}
{% set myAddressQuery = craft.addresses() %}
```

```
// Create a new address query
$myAddressQuery = \craft\elements\Address::find();
```

[Introduction to Element Queries
→

Learn more about how element queries work.](docs_5x__development__element-queries.md)

### [#](#example)Example

Let’s output a list of the logged-in user’s addresses:

1. Create an address query with `craft.addresses()`.
2. Restrict the query to addresses owned by the current User, with the [`owner`](#owner) parameter.
3. Fetch the addresses with `.all()`.
4. Loop through the addresses using a [`{% for %}` tag  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html).
5. Output preformatted address details with the [`|address`](docs_5x__reference__twig__filters.md#address) filter.

```
{% requireLogin %}

{% set addresses = craft.addresses()
  .owner(currentUser)
  .all() %}

{% for addr in addresses %}
  <address>{{ addr|address }}</address>
{% endfor %}
```

We’ll expand on this example in the [Managing Addresses](#managing-addresses) section.

Protect your users’ personal information by carefully auditing queries and displaying private addresses only on pages that [require login](docs_5x__reference__twig__tags.md#requirelogin).

### [#](#parameters)Parameters

Address queries support the following parameters:

| Param | Description |
| --- | --- |
| [addressLine1](#addressline1) | Narrows the query results based on the first address line the addresses have. |
| [addressLine2](#addressline2) | Narrows the query results based on the second address line the addresses have. |
| [addressLine3](#addressline3) | Narrows the query results based on the third address line the addresses have. |
| [administrativeArea](#administrativearea) | Narrows the query results based on the administrative areas the addresses belongs to. |
| [allowOwnerDrafts](#allowownerdrafts) | Narrows the query results based on whether the addresses’ owners are drafts. |
| [allowOwnerRevisions](#allowownerrevisions) | Narrows the query results based on whether the addresses’ owners are revisions. |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only addresses that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only addresses that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching addresses eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching addresses as arrays of data, rather than [Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-address.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [countryCode](#countrycode) | Narrows the query results based on the country the addresses belong to. |
| [dateCreated](#datecreated) | Narrows the query results based on the addresses’ creation dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the addresses’ last-updated dates. |
| [dependentLocality](#dependentlocality) | Narrows the query results based on the dependent locality the addresses belong to. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [field](#field) | Narrows the query results based on the field the addresses are contained by. |
| [fieldId](#fieldid) | Narrows the query results based on the field the addresses are contained by, per the fields’ IDs. |
| [firstName](#firstname) | Narrows the query results based on the first name the addresses have. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [fullName](#fullname) | Narrows the query results based on the full name the addresses have. |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [id](#id) | Narrows the query results based on the addresses’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching addresses as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only addresses that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [language](#language) | Determines which site(s) the addresses should be queried in, based on their language. |
| [lastName](#lastname) | Narrows the query results based on the last name the addresses have. |
| [limit](#limit) | Determines the number of addresses that should be returned. |
| [locality](#locality) | Narrows the query results based on the locality the addresses belong to. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only addresses that are not related to certain other elements. |
| [offset](#offset) | Determines how many addresses should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the addresses should be returned in. (If empty, defaults to `dateCreated DESC, elements.id`.) |
| [organization](#organization) | Narrows the query results based on the organization the addresses have. |
| [organizationTaxId](#organizationtaxid) | Narrows the query results based on the tax ID the addresses have. |
| [owner](#owner) | Sets the [ownerId](#ownerid) and `\craft\elements\db\siteId()` parameters based on a given element. |
| [ownerId](#ownerid) | Narrows the query results based on the owner element of the addresses, per the owners’ IDs. |
| [postalCode](#postalcode) | Narrows the query results based on the postal code the addresses belong to. |
| [preferSites](#prefersites) | If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [primaryOwner](#primaryowner) | Sets the [primaryOwnerId](#primaryownerid) and `\craft\elements\db\siteId()` parameters based on a given element. |
| [primaryOwnerId](#primaryownerid) | Narrows the query results based on the primary owner element of the addresses, per the owners’ IDs. |
| [relatedTo](#relatedto) | Narrows the query results to only addresses that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only addresses that match a search query. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the addresses’ IDs in the `elements_sites` table. |
| [sortingCode](#sortingcode) | Narrows the query results based on the sorting code the addresses have. |
| [trashed](#trashed) | Narrows the query results to only addresses that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the addresses’ UIDs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching addresses eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#addressline1)`addressLine1`

Narrows the query results based on the first address line the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'23 Craft st'` | with a addressLine1 of `23 Craft st`. |
| `'*23*'` | with a addressLine1 containing `23`. |
| `'23*'` | with a addressLine1 beginning with `23`. |

TwigPHP

```
{# Fetch addresses at 23 Craft st #}
{% set addresses = craft.addresses()
  .addressLine1('23 Craft st')
  .all() %}
```

```
// Fetch addresses at 23 Craft st
$addresses = \craft\elements\Address::find()
    ->addressLine1('23 Craft st')
    ->all();
```

#### [#](#addressline2)`addressLine2`

Narrows the query results based on the second address line the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Apt 5B'` | with an addressLine2 of `Apt 5B`. |
| `'*5B*'` | with an addressLine2 containing `5B`. |
| `'5B*'` | with an addressLine2 beginning with `5B`. |

TwigPHP

```
{# Fetch addresses at Apt 5B #}
{% set addresses = craft.addresses()
  .addressLine2('Apt 5B')
  .all() %}
```

```
// Fetch addresses at Apt 5B
$addresses = \craft\elements\Address::find()
    ->addressLine2('Apt 5B')
    ->all();
```

#### [#](#addressline3)`addressLine3`

Narrows the query results based on the third address line the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Suite 212'` | with an addressLine3 of `Suite 212`. |
| `'*Suite*'` | with an addressLine3 containing `Suite`. |
| `'Suite*'` | with an addressLine3 beginning with `Suite`. |

TwigPHP

```
{# Fetch addresses at Suite 212 #}
{% set addresses = craft.addresses()
  .addressLine3('Suite 212')
  .all() %}
```

```
// Fetch addresses at Suite 212
$addresses = \craft\elements\Address::find()
    ->addressLine3('Suite 212')
    ->all();
```

#### [#](#administrativearea)`administrativeArea`

Narrows the query results based on the administrative areas the addresses belongs to.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'WA'` | with a administrative area of `WA`. |
| `'not WA'` | not in a administrative area of `WA`. |
| `['WA', 'SA']` | in a administrative area of `WA` or `SA`. |
| `['not', 'WA', 'SA']` | not in a administrative area of `WA` or `SA`. |

TwigPHP

```
{# Fetch addresses in Western Australia #}
{% set addresses = craft.addresses()
  .administrativeArea('WA')
  .all() %}
```

```
// Fetch addresses in Western Australia
$addresses = \craft\elements\Address::find()
    ->administrativeArea('WA')
    ->all();
```

#### [#](#allowownerdrafts)`allowOwnerDrafts`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-allowownerdrafts)

Narrows the query results based on whether the addresses’ owners are drafts.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `true` | which can belong to a draft. |
| `false` | which cannot belong to a draft. |

#### [#](#allowownerrevisions)`allowOwnerRevisions`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-allowownerrevisions)

Narrows the query results based on whether the addresses’ owners are revisions.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `true` | which can belong to a revision. |
| `false` | which cannot belong to a revision. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only addresses that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all addresses that are related to myCategoryA and not myCategoryB #}
{% set addresses = craft.addresses()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all addresses that are related to $myCategoryA and not $myCategoryB
$addresses = \craft\elements\Address::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only addresses that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all addresses that are related to myCategoryA and myCategoryB #}
{% set addresses = craft.addresses()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all addresses that are related to $myCategoryA and $myCategoryB
$addresses = \craft\elements\Address::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching addresses eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching addresses as arrays of data, rather than [Address  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-address.html) objects.

TwigPHP

```
{# Fetch addresses as arrays #}
{% set addresses = craft.addresses()
  .asArray()
  .all() %}
```

```
// Fetch addresses as arrays
$addresses = \craft\elements\Address::find()
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

Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#countrycode)`countryCode`

Narrows the query results based on the country the addresses belong to.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'AU'` | with a countryCode of `AU`. |
| `'not US'` | not in a countryCode of `US`. |
| `['AU', 'US']` | in a countryCode of `AU` or `US`. |
| `['not', 'AU', 'US']` | not in a countryCode of `AU` or `US`. |

TwigPHP

```
{# Fetch Australian addresses #}
{% set addresses = craft.addresses()
  .countryCode('AU')
  .all() %}
```

```
// Fetch Australian addresses
$addresses = \craft\elements\Address::find()
    ->countryCode('AU')
    ->all();
```

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the addresses’ creation dates.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch addresses created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set addresses = craft.addresses()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch addresses created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$addresses = \craft\elements\Address::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the addresses’ last-updated dates.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch addresses updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set addresses = craft.addresses()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch addresses updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$addresses = \craft\elements\Address::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#dependentlocality)`dependentLocality`

Narrows the query results based on the dependent locality the addresses belong to.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Darlington'` | with a dependentLocality of `Darlington`. |
| `'*Darling*'` | with a dependentLocality containing `Darling`. |
| `'Dar*'` | with a dependentLocality beginning with `Dar`. |

TwigPHP

```
{# Fetch addresses in Darlington #}
{% set addresses = craft.addresses()
  .dependentLocality('Darlington')
  .all() %}
```

```
// Fetch addresses in Darlington
$addresses = \craft\elements\Address::find()
    ->dependentLocality('Darlington')
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#field)`field`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-field)

Narrows the query results based on the field the addresses are contained by.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'foo'` | in a field with a handle of `foo`. |
| `['foo', 'bar']` | in a field with a handle of `foo` or `bar`. |
| a `\craft\elements\db\craft\fields\Matrix` object | in a field represented by the object. |

TwigPHP

```
{# Fetch addresses in the Foo field #}
{% set addresses = craft.addresses()
  .field('foo')
  .all() %}
```

```
// Fetch addresses in the Foo field
$addresses = \craft\elements\Address::find()
    ->field('foo')
    ->all();
```

#### [#](#fieldid)`fieldId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-fieldid)

Narrows the query results based on the field the addresses are contained by, per the fields’ IDs.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `1` | in a field with an ID of 1. |
| `'not 1'` | not in a field with an ID of 1. |
| `[1, 2]` | in a field with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a field with an ID of 1 or 2. |

TwigPHP

```
{# Fetch addresses in the field with an ID of 1 #}
{% set addresses = craft.addresses()
  .fieldId(1)
  .all() %}
```

```
// Fetch addresses in the field with an ID of 1
$addresses = \craft\elements\Address::find()
    ->fieldId(1)
    ->all();
```

#### [#](#firstname)`firstName`

Narrows the query results based on the first name the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'John'` | with a firstName of `John`. |
| `'*Joh*'` | with a firstName containing `Joh`. |
| `'Joh*'` | with a firstName beginning with `Joh`. |

TwigPHP

```
{# Fetch addresses with first name John #}
{% set addresses = craft.addresses()
  .firstName('John')
  .all() %}
```

```
// Fetch addresses with first name John
$addresses = \craft\elements\Address::find()
    ->firstName('John')
    ->all();
```

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch addresses in a specific order #}
{% set addresses = craft.addresses()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch addresses in a specific order
$addresses = \craft\elements\Address::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#fullname)`fullName`

Narrows the query results based on the full name the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'John Doe'` | with a fullName of `John Doe`. |
| `'*Doe*'` | with a fullName containing `Doe`. |
| `'John*'` | with a fullName beginning with `John`. |

TwigPHP

```
{# Fetch addresses for John Doe #}
{% set addresses = craft.addresses()
  .fullName('John Doe')
  .all() %}
```

```
// Fetch addresses for John Doe
$addresses = \craft\elements\Address::find()
    ->fullName('John Doe')
    ->all();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the addresses’ IDs.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the address by its ID #}
{% set address = craft.addresses()
  .id(1)
  .one() %}
```

```
// Fetch the address by its ID
$address = \craft\elements\Address::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching addresses as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only addresses that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch addresses in reverse #}
{% set addresses = craft.addresses()
  .inReverse()
  .all() %}
```

```
// Fetch addresses in reverse
$addresses = \craft\elements\Address::find()
    ->inReverse()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the addresses should be queried in, based on their language.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) in conjunction with this.

TwigPHP

```
{# Fetch addresses from English sites #}
{% set addresses = craft.addresses()
  .language('en')
  .all() %}
```

```
// Fetch addresses from English sites
$addresses = \craft\elements\Address::find()
    ->language('en')
    ->all();
```

#### [#](#lastname)`lastName`

Narrows the query results based on the last name the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Doe'` | with a lastName of `Doe`. |
| `'*Do*'` | with a lastName containing `Do`. |
| `'Do*'` | with a lastName beginning with `Do`. |

TwigPHP

```
{# Fetch addresses with last name Doe #}
{% set addresses = craft.addresses()
  .lastName('Doe')
  .all() %}
```

```
// Fetch addresses with last name Doe
$addresses = \craft\elements\Address::find()
    ->lastName('Doe')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of addresses that should be returned.

TwigPHP

```
{# Fetch up to 10 addresses  #}
{% set addresses = craft.addresses()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 addresses
$addresses = \craft\elements\Address::find()
    ->limit(10)
    ->all();
```

#### [#](#locality)`locality`

Narrows the query results based on the locality the addresses belong to.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Perth'` | with a locality of `Perth`. |
| `'*Perth*'` | with a locality containing `Perth`. |
| `'Ner*'` | with a locality beginning with `Per`. |

TwigPHP

```
{# Fetch addresses in Perth #}
{% set addresses = craft.addresses()
  .locality('Perth')
  .all() %}
```

```
// Fetch addresses in Perth
$addresses = \craft\elements\Address::find()
    ->locality('Perth')
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only addresses that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all addresses that are related to myEntry #}
{% set addresses = craft.addresses()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all addresses that are related to $myEntry
$addresses = \craft\elements\Address::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many addresses should be skipped in the results.

TwigPHP

```
{# Fetch all addresses except for the first 3 #}
{% set addresses = craft.addresses()
  .offset(3)
  .all() %}
```

```
// Fetch all addresses except for the first 3
$addresses = \craft\elements\Address::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the addresses should be returned in. (If empty, defaults to `dateCreated DESC, elements.id`.)

TwigPHP

```
{# Fetch all addresses in order of date created #}
{% set addresses = craft.addresses()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all addresses in order of date created
$addresses = \craft\elements\Address::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#organization)`organization`

Narrows the query results based on the organization the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'Pixel & Tonic'` | with an organization of `Pixel & Tonic`. |
| `'*Pixel*'` | with an organization containing `Pixel`. |
| `'Pixel*'` | with an organization beginning with `Pixel`. |

TwigPHP

```
{# Fetch addresses for Pixel & Tonic #}
{% set addresses = craft.addresses()
  .organization('Pixel & Tonic')
  .all() %}
```

```
// Fetch addresses for Pixel & Tonic
$addresses = \craft\elements\Address::find()
    ->organization('Pixel & Tonic')
    ->all();
```

#### [#](#organizationtaxid)`organizationTaxId`

Narrows the query results based on the tax ID the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'123-456-789'` | with an organizationTaxId of `123-456-789`. |
| `'*456*'` | with an organizationTaxId containing `456`. |
| `'123*'` | with an organizationTaxId beginning with `123`. |

TwigPHP

```
{# Fetch addresses with tax ID 123-456-789 #}
{% set addresses = craft.addresses()
  .organizationTaxId('123-456-789')
  .all() %}
```

```
// Fetch addresses with tax ID 123-456-789
$addresses = \craft\elements\Address::find()
    ->organizationTaxId('123-456-789')
    ->all();
```

#### [#](#owner)`owner`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-owner)

Sets the [ownerId](#ownerid) and `\craft\elements\db\siteId()` parameters based on a given element.

TwigPHP

```
{# Fetch addresses created for this entry #}
{% set addresses = craft.addresses()
  .owner(myEntry)
  .all() %}
```

```
// Fetch addresses created for this entry
$addresses = \craft\elements\Address::find()
    ->owner($myEntry)
    ->all();
```

#### [#](#ownerid)`ownerId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-ownerid)

Narrows the query results based on the owner element of the addresses, per the owners’ IDs.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `1` | created for an element with an ID of 1. |
| `[1, 2]` | created for an element with an ID of 1 or 2. |

TwigPHP

```
{# Fetch addresses created for an element with an ID of 1 #}
{% set addresses = craft.addresses()
  .ownerId(1)
  .all() %}
```

```
// Fetch addresses created for an element with an ID of 1
$addresses = \craft\elements\Address::find()
    ->ownerId(1)
    ->all();
```

#### [#](#postalcode)`postalCode`

Narrows the query results based on the postal code the addresses belong to.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'10001'` | with a postalCode of `10001`. |
| `'*001*'` | with a postalCode containing `001`. |
| `'100*'` | with a postalCode beginning with `100`. |

TwigPHP

```
{# Fetch addresses with postal code 10001 #}
{% set addresses = craft.addresses()
  .postalCode('10001')
  .all() %}
```

```
// Fetch addresses with postal code 10001
$addresses = \craft\elements\Address::find()
    ->postalCode('10001')
    ->all();
```

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique addresses from Site A, or Site B if they don’t exist in Site A #}
{% set addresses = craft.addresses()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique addresses from Site A, or Site B if they don’t exist in Site A
$addresses = \craft\elements\Address::find()
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

#### [#](#primaryowner)`primaryOwner`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-primaryowner)

Sets the [primaryOwnerId](#primaryownerid) and `\craft\elements\db\siteId()` parameters based on a given element.

TwigPHP

```
{# Fetch addresses created for this entry #}
{% set addresses = craft.addresses()
  .primaryOwner(myEntry)
  .all() %}
```

```
// Fetch addresses created for this entry
$addresses = \craft\elements\Address::find()
    ->primaryOwner($myEntry)
    ->all();
```

#### [#](#primaryownerid)`primaryOwnerId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-primaryownerid)

Narrows the query results based on the primary owner element of the addresses, per the owners’ IDs.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `1` | created for an element with an ID of 1. |
| `[1, 2]` | created for an element with an ID of 1 or 2. |

TwigPHP

```
{# Fetch addresses created for an element with an ID of 1 #}
{% set addresses = craft.addresses()
  .primaryOwnerId(1)
  .all() %}
```

```
// Fetch addresses created for an element with an ID of 1
$addresses = \craft\elements\Address::find()
    ->primaryOwnerId(1)
    ->all();
```

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only addresses that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all addresses that are related to myCategory #}
{% set addresses = craft.addresses()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all addresses that are related to $myCategory
$addresses = \craft\elements\Address::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only addresses that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all addresses that match the search query #}
{% set addresses = craft.addresses()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all addresses that match the search query
$addresses = \craft\elements\Address::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the addresses’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the address by its ID in the elements_sites table #}
{% set address = craft.addresses()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the address by its ID in the elements_sites table
$address = \craft\elements\Address::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#sortingcode)`sortingCode`

Narrows the query results based on the sorting code the addresses have.

Possible values include:

| Value | Fetches addresses… |
| --- | --- |
| `'ABCD'` | with a sortingCode of `ABCD`. |
| `'*BC*'` | with a sortingCode containing `BC`. |
| `'AB*'` | with a sortingCode beginning with `AB`. |

TwigPHP

```
{# Fetch addresses with sorting code ABCD #}
{% set addresses = craft.addresses()
  .sortingCode('ABCD')
  .all() %}
```

```
// Fetch addresses with sorting code ABCD
$addresses = \craft\elements\Address::find()
    ->sortingCode('ABCD')
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only addresses that have been soft-deleted.

TwigPHP

```
{# Fetch trashed addresses #}
{% set addresses = craft.addresses()
  .trashed()
  .all() %}
```

```
// Fetch trashed addresses
$addresses = \craft\elements\Address::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the addresses’ UIDs.

TwigPHP

```
{# Fetch the address by its UID #}
{% set address = craft.addresses()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the address by its UID
$address = \craft\elements\Address::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching addresses eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch addresses eager-loaded with the "Related" field’s relations #}
{% set addresses = craft.addresses()
  .with(['related'])
  .all() %}
```

```
// Fetch addresses eager-loaded with the "Related" field’s relations
$addresses = \craft\elements\Address::find()
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

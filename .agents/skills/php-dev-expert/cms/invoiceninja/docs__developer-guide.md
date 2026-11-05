# Developer guide | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/developer-guide

---

On this page

## Getting Started.[​](#getting-started "Direct link to Getting Started.")

The Invoice Ninja API is built on top of the [Laravel Framework](https://laravel.com), this is a hugely popular PHP framework with extensive high quality documentation and tutorials all over the web. To get started customizing and/or extending Invoice Ninja you will need to be acquainted with the latest version of Laravel and all of its features. The URL namespace for the api is **/api/v1** The Client Portal is a traditional web application also built with Laravel along with Livewire and Tailwind components. The URL namespace for client facing URLs is **/client/**

If you are planning to build new functionality in Invoice Ninja, for example a Inventory Module, rather than integrate this directly into the codebase, we highly recommend using the [Laravel Modules](https://github.com/nwidart/laravel-modules) library. This library is already part of the Invoice Ninja core, so you can dive straight in and start building.

If you plan to contribute your code back to the official Invoice Ninja repository, please ensure you have test coverage for your functionality. We use [Phpunit](https://phpunit.de/) for our API testing, and [Cypress](https://www.cypress.io/) for our UI testing of the client portal.

## Architecture[​](#architecture "Direct link to Architecture")

The app is divided into three main parts: the backend/API and the two admin portals.

### Backend - API[​](#backend---api "Direct link to Backend - API")

#### Lead developer: [David Bomba](https://twitter.com/deadbeefx0)[​](#lead-developer-david-bomba "Direct link to lead-developer-david-bomba")

- Framework: [Laravel](https://laravel.com)
- Code: [GitHub](https://github.com/invoiceninja/invoiceninja/tree/v5-stable)
- API: [Docs](https://api-docs.invoicing.co/)

### Admin Portal - Desktop & Mobile[​](#admin-portal---desktop--mobile "Direct link to Admin Portal - Desktop & Mobile")

#### Lead developer: [Hillel Coren](https://twitter.com/hillelcoren)[​](#lead-developer-hillel-coren "Direct link to lead-developer-hillel-coren")

- Framework: [Flutter](https://flutter.dev)
- Code: [GitHub](https://github.com/invoiceninja/admin-portal)
- Demo: [demo.invoiceninja.com](https://demo.invoiceninja.com)

### Admin Portal - Web[​](#admin-portal---web "Direct link to Admin Portal - Web")

#### Lead developer: [Benjamin Beganović](https://twitter.com/beganovichhh)[​](#lead-developer-benjamin-beganović "Direct link to lead-developer-benjamin-beganović")

- Framework: [React](https://reactjs.org)
- Code: [GitHub](https://github.com/invoiceninja/ui)
- Demo: [react.invoicing.co/demo](https://react.invoicing.co/demo)

## API Definition[​](#api-definition "Direct link to API Definition")

Our full API definition can be found [here](https://api-docs.invoicing.co/)

### Base URL for v5[​](#base-url-for-v5 "Direct link to Base URL for v5")

The base url for v5 is:

```
https://invoicing.co
```

### Migrating from v4[​](#migrating-from-v4 "Direct link to Migrating from v4")

Invoice Ninja v4 was initially built as a web application with an API added on later to support common uses cases and the limited functionality of the v4 mobile app. With v5 we’ve instead built an API first application, all features in the web/mobile/desktop apps are powered by the API.

For example v4 [client includes](https://github.com/invoiceninja/invoiceninja/blob/master/app/Ninja/Transformers/ClientTransformer.php#L51) are limited to contacts, invoices, credits and activities, whereas in v5 [all options](https://github.com/invoiceninja/invoiceninja/blob/v5-develop/app/Transformers/ClientTransformer.php#L32) are available. This includes: contacts, documents, gateway\_tokens, documents, gateway\_tokens, activities, ledger and system\_logs.

Another major shortcoming of the v4 API is the docs, even though the functionality is limited, what is available isn’t necessarily documented. In v5 we’ve made sure to document every aspect of the API.

The v4 and v5 APIs are mostly the same but there are some key changes which are important to be aware of.

warning

The header name for the API token has changed from X-Ninja-Token in v4 to X-API-Token in v5.

The data type of the id fields has changes from integer to string to support the new id format.

The route for uploading documents has changed, here's a v5 cURL example:

```
curl -X POST https://invoicing.co/api/v1/invoices/<invoice_id>/upload \

-H 'Content-Type: multipart/form-data' \

-H 'X-API-TOKEN: TOKEN' \

-H 'X-Requested-With: XMLHttpRequest' \

-F _method=PUT \

-F 'documents[]=@filename.png'
```

### API Headers[​](#api-headers "Direct link to API Headers")

#### X-API-SECRET[​](#x-api-secret "Direct link to X-API-SECRET")

The X-API-SECRET can be used as another layer of protection for your API.

The X-API-SECRET requires you to configure a .env variable `API_SECRET=`

This is an optional header, and is only assessed on the /api/v1/login route.

```
X-API-SECRET: value
```

#### X-API-TOKEN[​](#x-api-token "Direct link to X-API-TOKEN")

The X-API-TOKEN is the authentication token and is required for all API requests

This is a required header.

```
X-API-TOKEN: value
```

#### X-Requested-With;[​](#x-requested-with "Direct link to X-Requested-With;")

The X-Requested-With header is a security minded header, there is only one value accepted.

This is a required header.

```
X-Requested-With: XMLHttpRequest
```

#### Content-Type:application/json[​](#content-typejson "Direct link to Content-Type:application/json")

When submitting data to the API you must declare the content type

This is a required header when using POST/PUT methods.

```
Content-Type: application/json

Content-Type: multipart/form-data
```

### Primary Keys[​](#primary-keys "Direct link to Primary Keys")

In version 5 of Invoice Ninja we move away from integer based primary keys and moved to hashed\_id's, these are obfuscated string representations of the primary key for the all entity records.

# Developers | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/category/developers/

---

[## ðï¸ Style Guide

This document describes the programming style and best practices used in Blesta. Programmers wishing to certify their plugin, module, or gateway, with the Marketplace must conform to these guidelines regardless of whether or not their source code is made available to end users.](dev__developers__style-guide.md)

[## ðï¸ API

This document describes how to configure, connect to, and interact with the API. For information on expanding the API with your own custom code seeÂ Extending the API. All examples are presented using PHP.](dev__developers__api.md)

[## ðï¸ Composer

Blesta and its bundled extensions use Composer to manage PHP dependencies. This page covers what extension authors need to know about Composer in Blesta 6.0+.](dev__developers__composer.md)

[## ðï¸ Example Data

Blesta 6.0 ships an Example Data Library â a schema-driven set of JSON fixtures and a loader class that returns realistic example objects for Blesta models. It's used internally by the AI features to give the model context about Blesta's data shape, and it's available to plugin and module authors who need realistic sample data for tests, screenshot fixtures, or in-app previews.](dev__developers__example-data.md)

[## ðï¸ Query Logger

Blesta 6.0 ships an in-memory Database Query Logger that captures every SQL query executed during a request, along with bindings, execution time, and a short backtrace. It's intended as a developer-only debugging and performance-analysis tool.](dev__developers__query-logger.md)

[## ðï¸ AI

Blesta 6.0 ships an AI integration that plugins and modules can call from PHP via the BlestaAi component. The component wraps the upstream BlestaAiClient library, persists conversations and messages to the database, applies the configured model/temperature/max-tokens defaults, and verifies the integrity of the AI client and Guzzle transport against a SHA-256 manifest.](dev__developers__ai.md)

[## ðï¸ v6 Extension Conversion

Audience: Plugin and module developers porting an extension from Blesta 5.x to Blesta 6.](dev__developers__v6-extension-conversion.md)

[## ðï¸ Contributing

We welcome contributions to Blesta's open source extension repositories on GitHub â modules, gateways, plugins, and messengers. Community fixes and features make the whole ecosystem better, and we'd love to merge yours.](dev__developers__contributing.md)

[## ðï¸ Modules

5 items](dev__category__modules-1.md)

[## ðï¸ Payment Gateways

4 items](dev__category__payment-gateways.md)

[## ðï¸ Messengers

4 items](dev__category__messengers-1.md)

[## ðï¸ Plugins

13 items](dev__category__plugins-1.md)

[## ðï¸ Events

2 items](dev__category__events.md)

[## ðï¸ Settings

4 items](dev__category__settings.md)

[## ðï¸ Deprecated

The following represents namespaces, classes, arguments, or other code/functionality that is currently deprecated. Everything listed here is pending removal. We recommend you update any custom integrations you use (i.e. modules, gateways, plugins, API calls, or custom source code) to no longer use deprecated functionality as soon as possible.](dev__developers__deprecated.md)

[## ðï¸ Resellers

3 items](dev__category__resellers.md)

[## ðï¸ JavaScript

Each of the user interfaces supports its own set of custom JavaScript modules and Blesta functions attached to jQuery. This may include date pickers, tooltips, table row sorting, loading widgets, loading modals, disabling submission buttons, generating random passwords, making AJAX requests, and more.](dev__developers__javascript.md)

[## ðï¸ Error Checking

Blesta uses the Input component to perform automatic error checking and error message handling. The way it works is by defining a set of rules and validating input based on those rules. The Input component is a simple, yet powerful way to validate input. As we'll see, input can even be formatted during validation, either immediately before or after the rule is executed.](dev__developers__error-checking.md)

[## ðï¸ Invoice Templates

Invoice templates allow invoice documents to be downloaded in a variety of formats. All invoice templates must extend the InvoiceTemplate class.](dev__developers__invoice-templates.md)

[## ðï¸ Marketplace

So you've created that awesome module or add-on for Blesta however you want to show it on our Marketplace? Awesome let's get started.](dev__developers__marketplace.md)

[## ðï¸ Translating Blesta

Language in Blesta is handled by a collection of language files, heretoafter referred to as a "language pack." Language packs are primarily located in the language directory /installdir/language/, but additional files may be located in various other locations includingÂ Modules,Â Payment Gateways, Plugins, and some components or helpers. The default language in Blesta is English, US located in /installdir/language/en\_us/.](dev__developers__translating-blesta.md)

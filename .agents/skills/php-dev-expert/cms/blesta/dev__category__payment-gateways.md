# Payment Gateways | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/category/payment-gateways

---

[## ðï¸ Overview

This document describes how to implement both Merchant and Non-merchant payment gateways. The difference between these two types is that Non-merchant gateways process payments on an external web site. That is, rather than enter payment details (credit card number or bank account information) within Blesta as is the case with Merchant gateways, Non-merchant gateways forward the user off to the payment processor's own website to enter their payment details, after which time they may be directed back to Blesta.](dev__developers__gateways__overview.md)

[## ðï¸ Config

Gateways should include a config.json file, which defines basic configuration settings for the gateway.](dev__developers__gateways__gateway-configuration.md)

[## ðï¸ Merchant

As of Blesta 4.12 we've included a useful tool to help developers get started and save time.Â  Blesta's Extension Generator can be used to generate many the files necessary for a gateway and will create basic skeleton code with an option to include comments to help you understand each part of the code. Additionally the SDK includes a sample Merchant Gateway to get you started.](dev__developers__gateways__merchant-gateways.md)

[## ðï¸ Non-merchant

As of Blesta 4.12 we've included a useful tool to help developers get started and save time.Â  Blesta's Extension Generator can be used to generate many the files necessary for a gateway and will create basic skeleton code with an option to include comments to help you understand each part of the code. Additionally the SDK includes a sample Merchant Gateway to get you started.](dev__developers__gateways__non-merchant-gateways.md)

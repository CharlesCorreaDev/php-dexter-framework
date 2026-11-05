# Documentation / Home / Shop / Payment Processors | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Shop/Payment-Processors

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Payment Processors

While Zenbership can integrate with a number of payment processors, the program itself is not a payment gateway. In order to use the billing features of Zenbership, you will need to have an active account with any of the payment processors listed on this page.

## Setting Up a Processor

This article covers a list of all integrated solutions with the software. If you need information on setting up your gateway within Zenbership, please select the gateway from the following list for more information.

## Supported Full Stack Processors

We highly recommend a "Full Stack" payment gateway for your payment processing needs. Full Stack gateways reduce your [PCI compliance](docs__Shop__PCI-Compliance.md) costs, are easy to set up, and are well supported by Zenbership.

### Overview

The "modern", safest, cheapest, and easiest way of accepting credit cards. A "full stack" payment processor is one where everything is handled by the provider, including securely storing cards and direct payouts to your bank account.

### Integrated

| Gateway Name | Tokenization[[1]](#footnotes) | Supported Methods | | |
| --- | --- | --- | --- | --- |
  | | Credit Cards[[2]](#footnotes) | eChecks | Refunds[[3]](#footnotes) ||  |  |  |  |  |
| --- | --- | --- | --- | --- |
| [Stripe](docs__Payment-Gateways__Stripe.md) | Yes | Yes | No | Yes |

## Supported Merchant Accounts

### Overview

These are a more professional way of accepting credit cards directly on your website, although barriers-to-entry may be steep and pricing can be much higher than full stack options. Fees are unpredictable and vary with different transaction types.

### Integrated

| Gateway Name | Tokenization[[4]](#footnotes) | Supported Methods | | |
| --- | --- | --- | --- | --- |
  | | Credit Cards[[5]](#footnotes) | eChecks | Refunds[[6]](#footnotes) ||  |  |  |  |  |
| --- | --- | --- | --- | --- |
| [Authorize.net CIM](docs__Payment-Gateways__Authorize.net-CIM.md) | Yes | Yes | Yes | Yes |
| [Beanstream](docs__Payment-Gateways__Beanstream.md) | Yes | Yes | Yes | Yes |
| [Evalon Virtual Merchant](docs__Payment-Gateways__Evalon-Virtual-Merchant.md) | Yes | Yes | No | Yes |
| [eWay](docs__Payment-Gateways__eWay.md) | Yes | Yes | No | Yes |
| [First Data](docs__Payment-Gateways__First-Data.md) | No | Yes | Yes | Yes |
| [PayPal Payments Pro](docs__Payment-Gateways__PayPal-Payments-Pro.md) | Yes | Yes | No | No |

## Supported Payment Gateways

### Overview

A somewhat less professional and less realiable way of accepting payments, a Payment Gateway requires that users leave your website to make a payment. Fees are predictable and easy to track.

### Integrated

| Gateway Name | Subscription Support |
| --- | --- |
| [PayPal Standard](docs__Payment-Gateways__PayPal.md) | Yes |

## Planned Integration

The following processors are all scheduled to be added into Zenbership going forward.

| Gateway Name | Type | Integrated | Testing Status |
| --- | --- | --- | --- |
| 2CheckOut | Payment Gateway | No | - |
| Authorize.net AIM | Merchant Account | Yes | Untested |
| Bluepay | Merchant Account | No | - |
| Bluesnap | Merchant Account | No | - |
| Braintree | Full Stack | No | - |
| ClickBank | Payment Gateway | No | - |
| WePay | Full Stack | No | - |
| Worldpay | Payment Gateway | No | - |

1. Tokenization means that all sensitive billing information such as credit card numbers are stored on the gateway's servers rather than your own, making PCI compliance easier to achieve.
2. Some gateways have premium charges for Amex and Discover. Please contact your gateway for more information.
3. This reflects whether refunds can be issued from within Zenbership or whether you will need to issue them directly from your payment gateway.
4. Tokenization means that all sensitive billing information such as credit card numbers are stored on the gateway's servers rather than your own, making PCI compliance easier to achieve.
5. Some gateways have premium charges for Amex and Discover. Please contact your gateway for more information.
6. This reflects whether refunds can be issued from within Zenbership or whether you will need to issue them directly from your payment gateway.

### Article Links

- [Setting Up a Processor](#Setting_Up_a_Processor)
- [Supported Full Stack Processors](#Supported_Full_Stack_Processors)
- [Overview](#Overview)
- [Integrated](#Integrated)
- [Supported Merchant Accounts](#Supported_Merchant_Accounts)
- [Overview](#Overview)
- [Integrated](#Integrated)
- [Supported Payment Gateways](#Supported_Payment_Gateways)
- [Overview](#Overview)
- [Integrated](#Integrated)
- [Planned Integration](#Planned_Integration)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/02/24.  
Last updated on 2013/08/14.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)

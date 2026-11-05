# Documentation / Home / Shop / PCI Compliance | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Shop/PCI-Compliance

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# PCI Compliance

## What is PCI Compliance

PCI Compliance are a set of guidelines established to secure credit card data online. [Click here](https://www.pcisecuritystandards.org/) for more information on PCI Compliance.

## How Does Zenbership Help You Achieve PCI Compliance?

- In most cases, the program will use a payment processor's tokenization feature to avoid storing sensitive information within the database. [Click here](docs__Shop__Payment-Processors.md) for a list of payment processors that support tokenization.
- In the event that your payment processor does not support tokenization, Zenbership will encrypt credit card information within the database. Note that we **HIGHLY** recommend using a payment gateway that supports tokenization, as doing so makes achieving PCI compliance far easier.
- The program will only display the last four digits of a credit card number.
- The CVV is never stored or displayed in any capacity.
- Transmission of credit card and sensitive information requires an SSL (encrypted) connection on your server.
- Zenbership helps prevent unauthorized access with system abuse checks and by locking out users and administrators after multiple failed attempts.
- The program has built in password strength requirements.
- We provide guides on how to create strong and secure passwords.

### So does that make me PCI Compliant?

No, however it does greatly help you on your road to becoming PCI compliant. Please see the next section entitled "PCI Requirements by Processor Type" for more information.

## PCI Requirements by Processor Type

The following is provided as opinionated advice only. We are not PCI compliance experts and in no way recommend using this as your only source of information for achieving PCI Compliance. We highly recommend that you speak with a certified PCI compliance consultant to confirm that you are in fact PCI compliant **before** processing any transactions through the program.

### All Processor Types

- Functional dedicated SSL certificate.
- Strict access controls to sensitive information.
- Completion of the [PCI compliance self–assessment questionnaire](https://www.pcisecuritystandards.org/merchants/self_assessment_form.php).

### Full Stack Processors

**Achievement Level:** Easy

Since all full stack processors tokenize and handle PCI compliance locally on their servers, you can achieve PCI compliance with limited costs.

### Merchant Accounts

**Achievement Level:** Easy to Hard, depending on the payment processor.

Depending on whether the payment processor allows for tokenization of credit cards, achieving PCI compliance could be as easy as a full stack payment processor. If it does not allow tokenization of credit cards, achievement becomes "hard" as all sensitive information would be stored directly on your server. Please speak with a PCI compliance consulting firm for more information.

### Payment Gateways

**Achievement Level:** No requirements.

Since payment gateways do not directly interact with your website, all PCI compliance falls within the scope of the payment gateway itself.

### Article Links

- [What is PCI Compliance](#What_is_PCI_Compliance)
- [How Does Zenbership Help You Achieve PCI Compliance?](#How_Does_Zenbership_Help_You_Achieve_PCI_Compliance)
- [So does that make me PCI Compliant?](#So_does_that_make_me_PCI_Compliant)
- [PCI Requirements by Processor Type](#PCI_Requirements_by_Processor_Type)
- [All Processor Types](#All_Processor_Types)
- [Full Stack Processors](#Full_Stack_Processors)
- [Merchant Accounts](#Merchant_Accounts)
- [Payment Gateways](#Payment_Gateways)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/02/24.  
Last updated on 2016/01/20.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)

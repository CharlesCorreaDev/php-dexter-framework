# Frequently Asked Questions | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/user-guide/faq

---

On this page

Here you will find answers to many frequently asked questions about Invoice Ninja.

### What is the Client Portal?[​](#what-is-the-client-portal "Direct link to What is the Client Portal?")

- When you send a client an invoice, the email contains a link to view the invoice online in the client portal.
- The client portal is an online self-serve dashboard for your client to see their invoices, make payments, download statements, manage subscriptions, payment methods, and more.
- Client portal access is available for all your clients. You can optionally allow anyone to register as a new client under Settings>Client Portal>Registration.
- If you enable "Client Initiated Payments" under Settings>Payment Settings, you can even allow your clients to make a payment online without you having to send an invoice (you can also set the "Minimum Payment Amount" for client-initiated payments)
- You can see how the client portal looks for your clients by clicking the "Client Portal" option:

![Edit Client portal dropdown hilighted](/assets/images/editclient_clientportalhilighted-e8a3f0180d4ba187871abebde865a5d0.png "Edit Client portal dropdown hilighted")

![Client portal](/assets/images/client_portal-f9a72849728482dd75ef8c0fb19d19f6.png "Client portal")

See [Client Portal](docs__user-guide__client-portal.md)

### What is a subdomain?[​](#what-is-a-subdomain "Direct link to What is a subdomain?")

- The subdomain is used in the client portal to personalize links to match your brand. Ex., <https://your-brand.invoicing.co>
- Under Settings > Client Portal, you can setup your subdomain.
- Links generated in the system (invoices, quotes, etc.) that are sent to your clients will use the subdomain you have configured.
- If you have multiple companies, you can set a different subdomain for each company. Ex., companya.invoicing.co, companyb.invoicing.co… that way, each company has its own branding and custom link.

![Client portal settings](/assets/images/client_portal_settings-df6c81e9882b7b70c11ac2904df8c2b6.png "Client portal settings")

### How can I accept payments online? What is a payment gateway (AKA, merchant processor)?[​](#how-can-i-accept-payments-online-what-is-a-payment-gateway-aka-merchant-processor "Direct link to How can I accept payments online? What is a payment gateway (AKA, merchant processor)?")

- Accepting online payments has never been easier. Invoice Ninja integrates with all the major online payment gateways to let you accept payments in 135+ currencies: [Payment Gateway Integrations](https://invoiceninja.com/payments/)
- In order to accept payments online, you need to integrate your Invoice Ninja account with a "payment gateway."
- See: [Setting Up Payment Gateways](docs__user-guide__gateways.md)

### How do I setup automatic reminders for unpaid invoices?[​](#how-do-i-setup-automatic-reminders-for-unpaid-invoices "Direct link to How do I setup automatic reminders for unpaid invoices?")

- Auto-reminders for invoices can be configured under *Settings>Templates & Reminders*

  - You have the options for First, Second, Third, Endless reminders.

    ![Email reminder example](/assets/images/first_invoice_reminder_example-a6b086952c72bb41beebd6b5ab0e9466.png "Email reminder example")
- Days: Set how many days until the selected 'Schedule' action selected below is triggered
- You can choose these options from the Schedule dropdown:

  - After the invoice date
  - Before the due date
  - After the due date
- Remember to enable 'Send Email' to have the email reminder enabled
- Optionally set late fees here as well

### What is the Payments module?[​](#what-is-the-payments-module "Direct link to What is the Payments module?")

- Invoice Ninja includes functionality to let you record every payment that you receive on your invoices. This makes it easy to report on invoices, accept partial payments, etc.
- The Payments module records all the INCOMING payments to the system.
- Each payment is linked to an invoice.
- You can apply multiple payments per invoice. Ex., deposits or partial payments.
- The payments module lets you record the amount received, payment date, payment type (the method of payment), a transaction reference, and you can record some notes.
- You also have the option to convert currency when recording the payment. You can select the currency to convert from, and an exchange rate. The exchange rates are updated daily.
- See: [Payments](docs__user-guide__payments.md)

### How can I send payment email?[​](#how-can-i-send-payment-email "Direct link to How can I send payment email?")

- If you want your clients to receive an automatic email acknowledging payments, this can be configured under *Settings>Online Payments*.

  ![Payment email options](/assets/images/payment_email_options-dd4288d627bbf0588a67048c6b97e0ac.png "Payment email options")
- You have the options for:

  - Manual Payment Email – this checks the option 'Send Email' by default in the Enter Payment window. You can uncheck it when manually entering a payment if you don't want a receipt sent out.
  - Online Payment Email – when the client pays online, they will be sent a receipt automatically
  - Mark Paid Payment Email – when you mark an invoice as paid, the client will be sent a receipt automatically
- You can customize the design of your receipt email under *Settings>Templates & Reminders* – select the "Payment" template. There is also a template for "Partial Payment" if the payment made was not for the full invoice amount.
- The payment email by default will include a button to view the invoice for which the payment was made for.

  ![Payment received email template](/assets/images/payment_received_template-fafe84b4a2d023c6a38e874c7a886fb4.png "Payment received email template")

### Is it possible to change a quote into an invoice when my client decides to proceed?[​](#is-it-possible-to-change-a-quote-into-an-invoice-when-my-client-decides-to-proceed "Direct link to Is it possible to change a quote into an invoice when my client decides to proceed?")

- Yes, this is very easy to do in Invoice Ninja.
- On your quote, simply select "Convert to Invoice"

  ![Convert quote to invoice](/assets/images/convert_quote_to_invoice-521b853abbace6f6e080080d314d4812.png "Convert quote to invoice")

### How can I charge late fees or percentages for overdue invoices?[​](#how-can-i-charge-late-fees-or-percentages-for-overdue-invoices "Direct link to How can I charge late fees or percentages for overdue invoices?")

- This can be done under *Settings>Templates & Reminders*

  ![First Reminder email template](/assets/images/first_reminder_email_template-f5aaee5f5e6d82866d05866715ee8aed.png "First Reminder email template")
- You can setup different fee amounts or percentages for each of the three reminder emails. For example, First Reminder may have 5% fee, Second Reminder another 5%, Third Reminder another 5%.

### What is the documents feature?[​](#what-is-the-documents-feature "Direct link to What is the documents feature?")

- The Documents module allows you to upload files to a client, project, or an expense. For example, this may be used for recording disbursements, contracts, or other documentation you need to easily access.
- You can select whether the document you upload is also visible to the client in the client portal.

### I have some clients in different countries. How can I make an invoice in a different currency?[​](#i-have-some-clients-in-different-countries-how-can-i-make-an-invoice-in-a-different-currency "Direct link to I have some clients in different countries. How can I make an invoice in a different currency?")

- The default currency selected when making a new client is determined by the "Currency" you set in Settings>Localization>Currency.
- When you Add or Edit a client, you have the option to change the currency for the client.

  ![Client settings additional info - currency](/assets/images/client_additional_info_currency-0680ab4b742c38b1643f8a43b093acc6.png "Client settings additional info - currency")
- If your configured [Payment Gateway](docs__user-guide__gateways.md) supports the currency, the client will be able to pay in that currency. Payments will record the currency they paid in.
- You are able to report your revenues/payments by currency in the dashboard, and reports.

  ![Dashboard filter by currency](/assets/images/dashboard_filter_by_currency-bd35a7bb99cf2547ae1e29ccbfdb365b.png "Dashboard filter by currency")
- If you have a group of clients that you'd like to bill in a specific currency, or apply other settings to a group of clients, you can use the Groups feature in Invoice Ninja – see: [Group Settings for Client Management](docs__user-guide__clients.md#group-settings-for-client-management)

  - Groups lets you customize any setting or templates (ex. invoice templates) to tailor to your group of clients. For example, if you want a different invoice design or email for your "USD Clients" you can configure that easily with Groups.

### How can I show the currency symbol on invoices/quotes?[​](#how-can-i-show-the-currency-symbol-on-invoicesquotes "Direct link to How can I show the currency symbol on invoices/quotes?")

- Under *Settings>Localization>Currency Format*, select *Code*. Your currency symbol will show on quotes/invoices (ex. *1,000.00 USD*)

![Currency localization](/assets/images/localization_currency_format_code-96d60a2c65e861262fbb0cd22838c3ba.png)

### How to Setup Taxes?[​](#how-to-setup-taxes "Direct link to How to Setup Taxes?")

- Invoice Ninja supports virtually all forms of charging/recording tax.
- You can even apply 1 to 3 tax rates together.
- Taxes can be setup for invoices and expenses
  - Invoice tax is tax you charge a client
  - Expense tax is tax you recorded that you paid on an expense to a vendor (Ex. purchased equipment and X % was spent on Y tax)
- You'll first want to go to *Settings>Tax Settings>New Tax Rate*, and add your tax name and percentage.
- Then you select the way in which you wish to apply the tax rate to your invoices/expenses by default:
  - Invoice Tax Rates
  - If you do not select a tax rate to apply by default, you will have to select the tax rate manually when creating an invoice/expense.
  - Line-item taxation is also supported. When enabled, this will add column(s) to the invoice for the line item tax rate(s) - you can select one to three line item tax rates.
- You can also toggle whether taxes are inclusive or exclusive.
- You can also set a tax category for your each product. That way, you can report which tax category the tax was charge for based on the products you sold. For example, "Physical Goods", "Tax Exempt"…
- See full instructions and videos for tax configuration: [Taxes](docs__user-guide__taxes.md)

### How can I create individual logins to Invoice Ninja for my staff to make invoices and use features, but not see my business's total revenues or reporting?[​](#how-can-i-create-individual-logins-to-invoice-ninja-for-my-staff-to-make-invoices-and-use-features-but-not-see-my-businesss-total-revenues-or-reporting "Direct link to How can I create individual logins to Invoice Ninja for my staff to make invoices and use features, but not see my business's total revenues or reporting?")

- You can manage your additional account users under *Settings>User Management*.

  ![User Management](/assets/images/settings_user_management-d8cca57030fcd4ca3f512a02d4526b2d.png "User Management")
- When creating a New Account User, you can go under Permissions and select which areas of the system the user will have access to. If you don't want them to see any reports or analytics, don't check 'View Dashboard' or 'Reports'.

  ![New User](/assets/images/user_management_new_user-b58781a954607c3838b0196e003d69b5.png "New User")
- See: [User Management](docs__user-guide__advanced-settings.md#user_management)

### What happens when I email an invoice out to the client?[​](#what-happens-when-i-email-an-invoice-out-to-the-client "Direct link to What happens when I email an invoice out to the client?")

- When you email an invoice from Invoice Ninja, the client receives an email which allows them to open and view the invoice online, and make a payment.
- The payment can be made in the client portal via your configured payment gateway(s)
- The email is sent according to the "Invoice" template that you can fully customize under *Settings>Templates & Reminders*

  ![Invoice email template](/assets/images/default_invoice_email_template-abd8ffb6ebd93f355272c17e4f2ac5fd.png "Invoice email template")
- See: [Email Settings](docs__user-guide__advanced-settings.md#email_settings)

### How to make the invoice always included as a PDF attachment in the email?[​](#how-to-make-the-invoice-always-included-as-a-pdf-attachment-in-the-email "Direct link to How to make the invoice always included as a PDF attachment in the email?")

- Go to *Settings>Email Settings* and enable "Attach PDF"
  - This will attach a PDF of the invoice into every invoice and reminder email

### How do I customize my invoice or quote design?[​](#how-do-i-customize-my-invoice-or-quote-design "Direct link to How do I customize my invoice or quote design?")

- You can customize your invoice, quote, purchase order, and other template designs under *Settings>Invoice Design*.
  - You can change the style, layout, colors, fonts, type of company and client information shown, show custom fields, whether to show a PAID stamp, whether to number pages, hide empty columns, and more.
  - See: [Invoice Design](docs__user-guide__advanced-settings.md#invoice_design)
- Designs can be further tailored to individual clients or groups of clients by using the Client Settings and Groups features
  - See: [Custom Settings Per Client](docs__user-guide__clients.md)
  - See: [Group Settings](docs__user-guide__clients.md#group-settings-for-client-management)

### What is the purpose of the User dropdown in invoices/quotes/expenses?[​](#what-is-the-purpose-of-the-user-dropdown-in-invoicesquotesexpenses "Direct link to What is the purpose of the User dropdown in invoices/quotes/expenses?")

- The *User* dropdown can be used in multiple ways. It can be used in the reports for tracking (ex. how many expenses assigned to each user), but it can also be used to give a user permission to view/edit an individual record.

### How can I change which columns show in the different modules?[​](#how-can-i-change-which-columns-show-in-the-different-modules "Direct link to How can I change which columns show in the different modules?")

- Every module in Invoice Ninja that stores many records has a table structure (ex. clients, products, invoices, payments, quotes, credits, expenses...), and you can change the number of rows shown per page as well as the columns.
- There is a 'Columns' button at the bottom of the table where you can adjust the columns shown.
- For example, if you want the expense category column to show in the expenses list:

[

](/assets/videos/faq/add_category_column_to_expenses.mp4)

- The column change to Expenses (showing Category column) also takes effect in every client's Expenses list page (expenses linked to the client):
  ![Client&#39;s expenses](/assets/images/client_example_expenses_linked-63272069352214378f0e89f96eb850ff.png)

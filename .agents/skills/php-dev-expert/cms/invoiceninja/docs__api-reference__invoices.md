# Invoices | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/api-reference/invoices

---

On this page

An invoice is a billable document sent to a client. The Invoices API lets
you create, send, and manage invoices, apply payments, download PDFs, and
trigger actions such as emailing or marking them paid. An invoice drives
the client balance and moves through the statuses below.

## Invoice Statuses[​](#invoice-statuses "Direct link to Invoice Statuses")

- STATUS\_DRAFT = 1
  - Draft invoices are not visible in the client portal, are not active and they do not impact the client balance
- STATUS\_SENT = 2
  - Send invoices are visible in the client portal, are active and impact the client balance
- STATUS\_PARTIAL = 3
  - An invoice which has been partially paid
- STATUS\_PAID = 4
  - An invoice which has been fully paid
- STATUS\_CANCELLED = 5
  - When a invoice is cancelled the invoice balance is set to zero and the status updated to Cancelled, the client balance is also adjusted down. If payments have been applied to the invoice these will remain linked to the invoice
- STATUS\_REVERSED = 6
  - When a invoice has been reversed, the previous payments relationships are unlinked and cannot be restored
- STATUS\_OVERDUE = -1
  - An invoice which is still payable past its due date
- STATUS\_UNPAID = -2
  - An invoice which is not yet due, but also, not paid

[getList invoices

`/api/v1/invoices`](docs__api-reference__get-invoices.md)

[postCreate invoice

`/api/v1/invoices`](docs__api-reference__store-invoice.md)

[getShow invoice

`/api/v1/invoices/{id}`](docs__api-reference__show-invoice.md)

[putUpdate invoice

`/api/v1/invoices/{id}`](docs__api-reference__update-invoice.md)

[deleteDelete invoice

`/api/v1/invoices/{id}`](docs__api-reference__delete-invoice.md)

[getEdit invoice

`/api/v1/invoices/{id}/edit`](docs__api-reference__edit-invoice.md)

[getBlank invoice

`/api/v1/invoices/create`](docs__api-reference__get-invoice-create.md)

[postBulk invoice actions

`/api/v1/invoices/bulk`](docs__api-reference__bulk-invoices.md)

[getCustom invoice action](docs__api-reference__action-invoice.md)

[getDownload invoice PDF

`/api/v1/invoice/{invitation_key}/download`](docs__api-reference__download-invoice-by-invitation.md)

[getDownload delivery note

`/api/v1/invoices/{id}/delivery_note`](docs__api-reference__get-invoice-delivery-note.md)

[postAdd invoice document

`/api/v1/invoices/{id}/upload`](docs__api-reference__upload-invoice-document.md)

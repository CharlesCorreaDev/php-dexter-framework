# Clients | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/api-reference/clients

---

On this page

The Clients API provides endpoints for managing client records within your company. A client represents a customer
or business entity that you provide services or products to.

### Key Features[​](#key-features "Direct link to Key Features")

- Create, read, update, and delete client records
- Manage client contact information and billing details
- View client-specific transaction history
- Handle multiple contacts per client
- Track client-specific settings and preferences

### Client Statuses[​](#client-statuses "Direct link to Client Statuses")

- Active: Client is currently active and can be billed
- Archived: Client is archived and hidden from active lists
- Deleted: Client is marked for deletion but retained in the database

### Best Practices[​](#best-practices "Direct link to Best Practices")

- Always validate client email addresses
- Use unique client numbers for easy reference
- Keep contact information up to date
- Set appropriate client-specific currency and tax settings

[getList clients

`/api/v1/clients`](docs__api-reference__get-clients.md)

[postCreate client

`/api/v1/clients`](docs__api-reference__store-client.md)

[getShow client

`/api/v1/clients/{id}`](docs__api-reference__show-client.md)

[putUpdate client

`/api/v1/clients/{id}`](docs__api-reference__update-client.md)

[deleteDelete client

`/api/v1/clients/{id}`](docs__api-reference__delete-client.md)

[getEdit Client

`/api/v1/clients/{id}/edit`](docs__api-reference__edit-client.md)

[getBlank Client

`/api/v1/clients/create`](docs__api-reference__get-clients-create.md)

[postBulk client actions

`/api/v1/clients/bulk`](docs__api-reference__bulk-clients.md)

[postAdd client document

`/api/v1/clients/{id}/upload`](docs__api-reference__upload-client.md)

[postPurge client

`/api/v1/clients/{id}/purge`](docs__api-reference__purge-client.md)

[postMerge client

`/api/v1/clients/{id}/{mergeable_client_hashed_id}/merge`](docs__api-reference__merge-client.md)

[postClient statement PDF

`/api/v1/client_statement`](docs__api-reference__client-statement.md)

[postRemoves email suppression of a user in the system

`/api/v1/reactivate_email/{bounce_id}`](docs__api-reference__reactivate-email.md)

[postUpdate tax data

`/api/v1/clients/{client}/updateTaxData`](docs__api-reference__update-client-tax-data.md)

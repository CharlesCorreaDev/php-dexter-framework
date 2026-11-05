# Products | Invoice Ninja

> **Fonte / Source:** https://invoiceninja.github.io/docs/api-reference/products

---

On this page

The Products API manages your catalog of reusable line items — the goods
and services you sell. Each product stores a default price, description,
tax settings, and cost, and can be referenced when building invoices,
quotes, and purchase orders to keep pricing and descriptions consistent.

### Common uses[​](#common-uses "Direct link to Common uses")

- Maintain a reusable catalog of goods and services
- Pre-fill invoice and quote line items from a product key
- Track stock quantities and notify on low inventory

[getList products

`/api/v1/products`](docs__api-reference__get-products.md)

[postCreate Product

`/api/v1/products`](docs__api-reference__store-product.md)

[getShow product

`/api/v1/products/{id}`](docs__api-reference__show-product.md)

[putUpdate product

`/api/v1/products/{id}`](docs__api-reference__update-product.md)

[deleteDelete product

`/api/v1/products/{id}`](docs__api-reference__delete-product.md)

[getEdit product

`/api/v1/products/{id}/edit`](docs__api-reference__edit-product.md)

[getBlank product

`/api/v1/products/create`](docs__api-reference__get-products-create.md)

[postBulk product actions

`/api/v1/products/bulk`](docs__api-reference__bulk-products.md)

[postAdd product document

`/api/v1/products/{id}/upload`](docs__api-reference__upload-product.md)

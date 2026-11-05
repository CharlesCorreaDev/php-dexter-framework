# Invoice Templates | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/invoice-templates

---

Version: 6

On this page

Invoice templates allow invoice documents to be downloaded in a variety of formats. All invoice templates must extend the [InvoiceTemplate](https://source-docs.blesta.com/classes/InvoiceTemplate.html) class.

## Invoice Template Structure[â](#invoice-template-structure "Direct link to Invoice Template Structure")

Each invoice template is a directory in /components/invoice\_templates/. From within that directory, each invoice template must consist of a class that matches the name of the invoice template. For example, the quickbooks\_invoice template is identified by /components/invoice\_templates/quickbooks\_invoice/quickbooks\_invoice.php. Invoice templates may have any other additional supporting classes and assets.

Templates that wish to take advantage of PDF formatting may take advantage of the [TcpdfWrapper](https://source-docs.blesta.com/classes/TcpdfWrapper.html) available in /components/invoice\_templates/.

## Call Structure[â](#call-structure "Direct link to Call Structure")

When an invoice template is initialized to render an invoice document, [setMeta](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_setMeta) is called to set all invoice-related meta data. [setCurrency](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_setCurrency) is then called to pass the [CurrencyFormat](https://source-docs.blesta.com/classes/CurrencyFormat.html) helper to the template. Next, [setMimeType](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_setMimeType) is invoked to tell the template what format to render the invoice document in. [includeAddress](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_includeAddress) is called to set whether or not address information should be included in the document. The template is told to build the document when [makeDocument](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_makeDocument) is passed an array of invoice objects. Generally only one invoice is rendered at a time, but in some cases multiple invoices will be included in the same document (e.g. multiple pages in a PDF file). Lastly, the document is output in one of three ways: [fetch](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_fetch), [stream](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_stream), or [download](https://source-docs.blesta.com/classes/InvoiceTemplate.html#method_download), one of which is invoked by the caller.

## Custom Client Fields in Invoice Templates[â](#custom-client-fields-in-invoice-templates "Direct link to Custom Client Fields in Invoice Templates")

It's possible to use custom client field data in your PDF invoice templates. If you have a custom field with a name of `favorite_color`, use it in the PDF template by calling it like so:

```
$this->invoice->client->custom_fields['favorite_color']
```

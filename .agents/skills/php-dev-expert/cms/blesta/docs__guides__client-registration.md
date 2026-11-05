# Client Registration | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/client-registration

---

Version: 6

On this page

This guide is designed to show the basic steps required and best practices to allow **clients to register an account without placing an order**. Here we describe how to set-up the registration form by creating an order form.

## Create an order form[â](#create-an-order-form "Direct link to Create an order form")

The first step is to create the order form where your customers can sign up.Â You can create a order form by going toÂ [Packages]Â > [Order Forms]Â > [Add Order Form]Â ![(plus)](data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48Y2lyY2xlIGZpbGw9IiMwMDg3NUEiIGN4PSI4IiBjeT0iOCIgcj0iOCIvPjxwYXRoIGQ9Ik05IDdoM2ExIDEgMCAwIDEgMCAySDl2M2ExIDEgMCAwIDEtMiAwVjlINGExIDEgMCAxIDEgMC0yaDNWNGExIDEgMCAxIDEgMiAwdjN6IiBmaWxsPSIjRkZGIi8+PC9nPjwvc3ZnPg==).

### Basic[â](#basic "Direct link to Basic")

The Basic section consists of the following options:

![](/assets/images/clientregistration-addorderform1-d23032ba248f731d916b131d5bb5c05e.png)

| Field Name | Description |
| --- | --- |
| Status | "Active" is the default, "Inactive" is also available. |
| Order Form Name | Enter the name of this Order Form, it will be visible when visited and if no default order form is selected. |
| Label | Enter the label for the order form this will be the URI the user visits to register. |
| Description | Enter a Description for this Order Form. HTML is allowed, and descriptions appear above the order forms. |
| Visibility | "Public" is the default, "Shared", and "Client Only" are also available. |
| Type | "General" is the default, however for this guide we need "Client Registration" selected. |

![](/assets/images/clientregistration-addorderform2-9428ed30ea883e4abe95f8ed3dbe8fad.png)

| Field Name | Description |
| --- | --- |
| Template | Select the template you would like to use for the domains, if you just want a basic registration form General is perfect. |
| Default Client Group | Select the client group the client will be assigned after ordering, this is good if you prefer to group customers depending on way they register. |
| Allow Coupons | Check the box if you would like coupons to be enabled for this order form, if you won't offer coupons at all you can leave this blank and the field won't show up. This is not needed really for a registration form. |
| Require Manual review and Approval of all orders | Check this box if you would like to manually approve all orders for domains. Otherwise keep it blank and they will be provisioned with the cron job. This is not needed really for a registration form. |
| Force Secure Connection (HTTPS) | Check this box if you wish to force orders for domains to require [https://yourdomain.com](https://yourdomain.com/)/. This isn't required if you already force https://. |
| Require Human Verification Challenge for all signups | Check this box if you wish to force customers to pass the human verification challenges when ordering. This can be set under the Settings tab on the order forms section. |
| Require Agreement to Terms of Service | Check this box if you wish to force customers to check the box to accept the terms and conditions please link to the terms and condition in the box below. |

## Conclusion[â](#conclusion "Direct link to Conclusion")

And there we have it, you have completed your first client registration order form for Blesta.

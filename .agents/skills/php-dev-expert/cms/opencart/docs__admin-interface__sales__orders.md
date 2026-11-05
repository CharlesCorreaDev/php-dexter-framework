# Orders | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/sales/orders

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__sales__orders.md).

## Introduction

The Orders section is the central hub for managing all customer purchases in OpenCart 4. This comprehensive system allows you to view, process, modify, and track orders from initial placement to final fulfillment.

**Order Processing Workflow** Orders automatically appear in this section when customers complete checkout. You can then process payments, update status, manage shipping, and handle customer communications.

## Accessing Orders

To access the Orders section:

1. **Navigate to Sales** in the main admin menu
2. **Click on Orders** to open the order management interface
3. **View the order list** displaying all customer orders

## Order List Overview

The main Orders page displays a comprehensive list of all customer orders with the following information:

Column

Description

**Order ID**

Unique identifier assigned to each order

**Customer**

Customer name and contact information

**Store**

Store location where order was placed

**Status**

Current order status (Pending, Processing, Complete, etc.)

**Date Added**

When the order was initially placed

**Date Modified**

Last time the order was updated

**Total**

Order total amount

**Action**

Available actions (Edit, Delete, Invoice)

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FYE7QnsYZPvPlcTEp5LVp%252Forders-list-interface.png%3Falt%3Dmedia%26token%3Df753d062-e7e6-43d4-86dd-bca32c1b05c4&width=768&dpr=3&quality=100&sign=06ba4b26bdf282db2d12be3054e43f41&sv=3)

Orders List Interface

## Filtering Orders

OpenCart 4 provides powerful filtering capabilities to help you find specific orders quickly:

1

#### Step 1: Access Filter Options

Click the **Filter** button above the order list to expand the filtering options.

2

#### Step 2: Apply Search Criteria

Use any combination of the following filters:

- **Order ID**: Search by specific order number
- **Customer**: Search by customer name or email
- **Store**: Filter by specific store location
- **Order Status**: Filter by order status
- **Total Amount**: Search by order total
- **Date Ranges**: Filter by date added or modified

3

#### Step 3: Apply and View Results

Click **Apply Filter** to display matching orders. Use **Clear Filter** to reset all criteria.

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FNoVzi5yeJTtS1GtzJ79H%252Forders-filter-interface.png%3Falt%3Dmedia%26token%3D4bd3bf9a-7d3f-4cc9-a856-d36ada8a8860&width=768&dpr=3&quality=100&sign=333ba2c40f5df5bcbb2770f51228729c&sv=3)

Orders Filter Interface

## Viewing Order Details

To view complete order information:

1. **Click the Edit button** next to any order in the list
2. **Review the comprehensive order details** including:

   - Customer information and contact details
   - Payment and shipping addresses
   - Products ordered with quantities and prices
   - Order totals and applied discounts
   - Order history and status updates

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252Fy0HPmRngiBbsxFF70Gh2%252Forder-details-interface.png%3Falt%3Dmedia%26token%3D9dbd4f5e-0e5a-43c6-bae7-d63e84f2a437&width=768&dpr=3&quality=100&sign=419eb457f819d9629f25671e9293f1f0&sv=3)

Order Details Interface

## Order Status Management

### Available Order Statuses

OpenCart 4 includes several built-in order statuses:

Status

Description

**Pending**

Order received but not yet processed

**Processing**

Order is being prepared for shipment

**Shipped**

Order has been shipped to customer

**Complete**

Order fulfilled and completed

**Canceled**

Order has been canceled

**Denied**

Order was denied (fraud, payment issues)

**Failed**

Payment processing failed

**Refunded**

Order has been refunded

### Updating Order Status

1

#### Step 1: Edit Order

Click **Edit** next to the order you want to update.

2

#### Step 2: Navigate to Order History

Scroll to the **Order History** section at the bottom of the order details page.

3

#### Step 3: Update Status

- Select the new **Order Status** from the dropdown
- Add a **Comment** for internal tracking
- Check **Notify Customer** to send email notification
- Click **Add History** to save the status change

**Best Practice** Always add comments when updating order status to maintain clear communication and audit trails for your team.

## Manual Order Creation

You can create orders manually for phone orders, in-person sales, or special customer requests:

1

#### Step 1: Start New Order

Click the **Add** button at the top of the Orders page.

2

#### Step 2: Customer Details

- **Select Customer**: Choose existing customer or enter new customer details
- **Customer Information**: Enter name, email, telephone
- **Customer Group**: Assign appropriate customer group

3

#### Step 3: Payment Details

- **Payment Address**: Select existing address or enter new payment address
- **Payment Method**: Choose payment method (Cash, Bank Transfer, etc.)

4

#### Step 4: Shipping Details

- **Shipping Address**: Select or enter shipping address
- **Shipping Method**: Choose shipping method

5

#### Step 5: Add Products

- **Choose Product**: Search and select products to add to order
- **Set Quantity**: Enter quantity for each product
- **Product Options**: Configure any product options if available

6

#### Step 6: Complete Order

- **Review Totals**: Verify order totals and applied discounts
- **Add Comments**: Include any special instructions
- **Save Order**: Click **Save** to create the order

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252FZw1adHPYIeQTxDCW83ZD%252Fmanual-order-creation-form.png%3Falt%3Dmedia%26token%3D61bc8347-7af8-4f52-827f-1c7758b58fb0&width=768&dpr=3&quality=100&sign=311d05a503a60f763167fa84c5b6e4fb&sv=3)

Manual Order Creation Form

## Invoice Generation

Generate professional invoices for orders:

1

#### Step 1: Select Order

From the Orders list, select the checkbox next to the order(s) you want to invoice.

2

#### Step 2: Generate Invoice

Click the **Print Invoice** button at the top of the page.

3

#### Step 3: Print or Save

- **Print**: Use browser print function to print the invoice
- **Save as PDF**: Use browser's save as PDF option
- **Email**: Copy invoice details to email to customer

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252Fy3PSKbk3S2EXKUj8T8md%252Finvoice-generation-interface.png%3Falt%3Dmedia%26token%3D930c571b-6ffe-41fe-817d-2d6f23593903&width=768&dpr=3&quality=100&sign=e6575e5bc6ff83bfee94b6ca6aaebb77&sv=3)

Invoice Generation Interface

## Advanced Features

### Reward Points Management

Manage customer reward points directly from orders:

- **Add Reward Points**: Award points for completed orders
- **Remove Points**: Deduct points for returns or adjustments
- **Track Point Balance**: Monitor customer reward point totals

### Affiliate Commission

Handle affiliate commissions through order management:

- **Commission Tracking**: Track affiliate commissions per order
- **Commission Payments**: Manage commission payouts
- **Affiliate Performance**: Monitor affiliate sales performance

### Subscription Orders

Orders containing subscription products include:

- **Subscription Details**: View subscription plan information
- **Billing Cycles**: Monitor recurring billing schedules
- **Subscription Status**: Track subscription active/canceled status

## Order Editing

You can modify existing orders to:

- **Update Customer Information**: Change contact details or addresses
- **Modify Products**: Add, remove, or change product quantities
- **Adjust Totals**: Apply discounts, coupons, or manual price adjustments
- **Update Shipping**: Change shipping method or address

**Important Note** When editing orders, be cautious about changing prices or totals as this may affect accounting and reporting accuracy.

## Bulk Actions

Perform actions on multiple orders simultaneously:

- **Delete Orders**: Remove multiple orders at once
- **Update Status**: Change status for multiple orders
- **Print Invoices**: Generate invoices for multiple orders

## Troubleshooting

Common Order Issues

#### Order Not Appearing

- Check if customer completed checkout
- Verify payment was processed successfully
- Ensure order status is not set to hidden

#### Missing Customer Information

- Verify customer account exists
- Check if guest checkout was used
- Ensure required fields were completed

#### Payment Processing Issues

- Confirm payment gateway configuration
- Check for declined payments
- Verify currency settings

#### Shipping Calculation Problems

- Validate shipping method settings
- Check product weight and dimensions
- Verify shipping zone configurations

## Best Practices

**Order Management Tips**

- Update order status promptly to keep customers informed
- Use clear, descriptive comments in order history
- Regularly review and process pending orders
- Maintain accurate inventory through proper order processing
- Use filtering to manage high-volume order periods efficiently

## Next Steps

After mastering order management, explore:

- **Returns Processing** - Handling product returns and refunds
- **Subscription Management** - Managing recurring orders
- [**Order Status Configuration**](https://github.com/wilsonatb/docs-oc-new/blob/main/admin-interface/system/localization/admin-interface/sales/order-statuses.md) - Customizing order status workflow

[PreviousSales](docs__admin-interface__sales.md)[NextSubscriptions](docs__admin-interface__sales__subscriptions.md)

Last updated 11 months ago

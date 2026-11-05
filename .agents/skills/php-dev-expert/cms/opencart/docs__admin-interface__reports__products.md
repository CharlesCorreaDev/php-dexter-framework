# Products | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/reports/products

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__reports__products.md).

## Introduction

**Product Reports** allow you to evaluate the performance of your inventory. By analyzing which products are being viewed and which are actually being purchased, you can identify your best-sellers as well as products that may need better promotion or price adjustments. This data helps in inventory management, seasonal planning, and optimizing your store's layout to highlight high-interest items.

## Accessing Product Reports

1

#### Navigate to Reports

Go to **Reports → Reports** in your admin panel.

2

#### Select Report Type

From the **Report Type** dropdown menu, choose **Products Viewed** or **Products Purchased**.

3

#### Filter and Analyze

Filter by date ranges and order status to focus on valid sales data and specific time frames.

## Product Report Types

### 1. Products Viewed Report

This report lists products based on the number of times they have been viewed on the storefront.

- **Key Columns**: Product Name, Model, Viewed, and Percent.
- **Usage**: Identifying "window shopping" trends. A high view count but low sale count might indicate a price that is too high or a poor product description.

### 2. Products Purchased Report

This report focuses on actual sales performance per product.

- **Key Columns**: Date Start, Date End, Product Name, Model, Quantity, and Total.
- **Usage**: Identifying your most profitable products and managing stock levels based on sales velocity.

## Common Tasks

### Identifying Underperforming Products

To find products that attract interest but don't sell:

1. Compare the **Products Viewed Report** with the **Products Purchased Report**.
2. Look for products with high views but low quantities sold.
3. Review these products' pricing, image quality, and descriptions.

### Planning Seasonal Inventory

To prepare for upcoming seasons:

1. Run a **Products Purchased Report** for the same period last year.
2. Identify which models and quantities were most popular.
3. Use this data to inform your ordering and promotional schedule for the current year.

## Best Practices

**Inventory Optimization**

- **Reset View Counts**: Periodically reset view counts (if your version allows or via database) after making major changes to product pages to see if interest improves.
- **Focus on 'Total'**: When looking at sales, pay attention to the **Total** revenue column, not just the **Quantity**. A low-quantity item with high margins might be more valuable than a high-volume low-margin item.
- **Monitor Models**: Ensure your product models are unique and descriptive so they are easy to identify in reports.

**Marketing Insight**: High view counts in the "Products Viewed" report indicate that your SEO or external advertising is working well to bring traffic to those specific items.

## Troubleshooting

**Products viewed report shows zero or inaccurate view counts**

**View Tracking Issues**

- **Tracking Enabled**: Verify that product view tracking is enabled in your store settings.
- **Cache Issues**: Clear OpenCart cache as view counts may be cached.
- **Bot Traffic**: Some views may be from bots that are not tracked.
- **Time Delay**: View counts may update periodically rather than in real-time.

**Products purchased report missing certain products**

**Data Coverage Issues**

- **Order Status Filter**: Ensure you're including completed orders in the report filter.
- **Date Range**: Verify the date range includes the period when purchases occurred.
- **Product Status**: Check that products are enabled and visible in the catalog.
- **Inventory Settings**: Products with zero stock may not appear if out-of-stock purchases are disabled.

**Discrepancies between viewed and purchased reports**

**Analysis Issues**

- **Time Lag**: Customers may view products and purchase days later; extend date ranges for correlation.
- **Product Variations**: Views may be for parent products while purchases are for specific variants.
- **Price Displays**: Ensure product prices are visible and accurate to encourage conversion.
- **Mobile vs Desktop**: View patterns may differ by device, affecting conversion rates.

**Report data appears outdated**

**Data Refresh Issues**

- **Cache Clearing**: Clear OpenCart cache to refresh report data.
- **Database Indexing**: Ensure database tables are properly indexed for timely updates.
- **Scheduled Tasks**: Some reports rely on scheduled tasks; check cron job configuration.
- **Extension Conflicts**: Disable recently installed extensions to check for conflicts with report updates.

> "Products tell a story—views are the opening chapters, purchases are the climax. Product reports give you the narrative arc of your inventory, showing you which stories resonate and which need rewrites."

[PreviousCustomers](docs__admin-interface__reports__customers.md)[NextMarketing](docs__admin-interface__reports__marketing.md)

Last updated 7 months ago

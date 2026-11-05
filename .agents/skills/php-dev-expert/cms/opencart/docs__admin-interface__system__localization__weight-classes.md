# Weight Classes | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/system/localization/weight-classes

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__system__localization__weight-classes.md).

## Introduction

**Weight Classes** define the measurement units used for product weights in your store. Each class includes a title (e.g., "Kilogram"), a unit abbreviation (e.g., "kg"), and a conversion value relative to your default weight unit. This system ensures accurate shipping calculations while allowing customers to view product weights in their preferred measurement system.

## Accessing Weight Classes Management

1

#### Navigate to Weight Classes

Log in to your admin dashboard and go to **System → Localization → Weight Classes**.

2

#### Weight Class List

You will see a list of all defined weight classes with their titles, units, and conversion values.

3

#### Manage Weight Classes

Use the **Add New** button to create a new weight class or click **Edit** on any existing class to modify its settings.

## Weight Class Interface Overview

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252Fq9G5ioRb0WTzbjsPHiRj%252Fweight-classes.png%3Falt%3Dmedia%26token%3D916ce07e-4629-40d0-a59f-e7be4fcfa881&width=768&dpr=3&quality=100&sign=c7307c4049021afc6d5747c8e59a00e0&sv=3)

Weight Classes Interface

### Weight Class Configuration Fields

**Basic Weight Class Information**

**Core Settings**

- **Weight Title**: **(Required)** Descriptive name of the weight unit (e.g., "Kilogram", "Pound", "Ounce", "Gram")
- **Weight Unit**: **(Required)** Abbreviation or symbol (1-4 characters, e.g., "kg", "lb", "oz", "g")
- **Value**: **(Required)** Conversion rate relative to default weight unit (set to 1.00000000 for default)

**Conversion Value Logic**

**Relative Measurement System**

- **Default Unit**: One weight class has value = 1.00000000 (your base weight unit).
- **Conversion Rates**: Other units have values representing how many of that unit equal one default unit.
- **Example**: If kilogram is default (value=1), pound would have value ≈ 2.20462 (since 1 kg = 2.20462 lb).
- **Reverse Calculation**: The system automatically converts between units using these ratios.

**Shipping Integration**: Weight classes directly impact shipping cost calculations. Ensure your shipping extensions are configured to use the same weight unit system as your products to avoid miscalculations.

## Common Tasks

### Setting Up Metric and Imperial Weight Systems

To support both measurement systems for international sales:

1. Determine your default unit (e.g., kilograms for metric preference).
2. Ensure the default weight class has value = 1.00000000.
3. Add complementary units:

   - **Pounds**: Value ≈ 2.20462 (1 kg = 2.20462 lb)
   - **Ounces**: Value ≈ 35.274 (1 kg = 35.274 oz)
   - **Grams**: Value = 1000 (1 kg = 1000 g)
   - **Metric Tons**: Value = 0.001 (1 kg = 0.001 t)
4. Test product displays and shipping calculations to ensure correct conversions.

### Adding Specialized Weight Units

For niche products (e.g., precious metals sold by the troy ounce):

1. Create a new weight class with title "Troy Ounce" and unit "oz t".
2. Research conversion: 1 troy ounce = 0.0311035 kg.
3. If kilogram is default (value=1), troy ounce value = 32.1507 (1 kg = 32.1507 oz t).
4. Assign the new unit to relevant products and verify display and shipping calculations.

### Configuring Shipping Rate Accuracy

To ensure shipping costs calculate correctly:

1. Verify all products have weights entered in the default unit.
2. Confirm shipping extensions are configured to use the correct weight unit.
3. Test shipping quotes with sample products of known weight.
4. Consider implementing weight-based shipping rules that match your carrier's unit system.

## Best Practices

**Weight System Strategy**

**Consistent Implementation**

- **Shipping Alignment**: Choose default unit that matches your shipping carrier's requirements.
- **Product Data Consistency**: Enter all product weights in the same default unit.
- **Customer Expectations**: Offer units appropriate for your target markets (metric for EU, imperial for US).
- **Precision Balance**: Use sufficient decimal precision for accuracy without unnecessary complexity.

**Data Integrity**

**Accurate Configuration**

- **Exact Conversions**: Use precise conversion factors from authoritative sources.
- **Unit Testing**: Regularly test weight conversions with known values.
- **Shipping Validation**: Verify shipping calculations match carrier rate charts.
- **Documentation**: Record your weight system configuration for team reference.

**Deletion Warning** ⚠️ Never delete a weight class that is: 1) set as default store weight class, or 2) assigned to products. Check error messages and reassign products/default setting before deletion.

## Troubleshooting

**Shipping costs calculating incorrectly**

**Weight Conversion Issues**

- **Unit Mismatch**: Verify shipping extension uses same unit as product weights.
- **Conversion Values**: Check weight class values for mathematical accuracy.
- **Default Unit**: Confirm which unit is set as default.
- **Product Weights**: Ensure product weights are entered in the default unit.

**Cannot delete a weight class**

**Dependency Issues**

- **Default Assignment**: The weight class may be set as default in store settings.
- **Product Assignment**: Products may be using the weight class.
- **Solution**:

  1. Change default weight class in store settings.
  2. Update products to use a different weight class.
  3. Attempt deletion again.

**Product weight displaying wrong values**

**Conversion or Display Issues**

- **Conversion Logic**: Verify the conversion mathematics in theme templates.
- **Caching**: Clear OpenCart cache to refresh weight displays.
- **Theme Overrides**: Check if theme modifies weight display logic.
- **Browser Testing**: Test with different customer sessions and unit preferences.

**Shipping carrier API rejecting weight values**

**API Integration Issues**

- **Unit Requirements**: Verify carrier API requires specific weight units.
- **Conversion Accuracy**: Ensure conversions don't introduce rounding errors.
- **Value Ranges**: Check if weights fall within carrier acceptable ranges.
- **Debug Logging**: Enable logging to see exact weight values sent to carrier API.

> "Weight classes are the gravitational constant of your e-commerce universe—they determine the cost of movement, the physics of packaging, and the customer's perception of value. Each conversion factor bridges the gap between your scale and your customer's expectations."

[PreviousLength Classes](docs__admin-interface__system__localization__length-classes.md)[NextAddress Formats](docs__admin-interface__system__localization__address-formats.md)

Last updated 7 months ago

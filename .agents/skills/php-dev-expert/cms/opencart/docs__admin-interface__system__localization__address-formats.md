# Address Formats | OpenCart

> **Fonte / Source:** https://docs.opencart.com/admin-interface/system/localization/address-formats

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__admin-interface__system__localization__address-formats.md).

## Introduction

The **Address Formats** section allows you to create and manage address format templates that control how customer addresses are displayed throughout your store. These templates use placeholders for address components (name, street, city, etc.) and can be assigned to countries to ensure addresses follow local formatting conventions. Consistent address formatting improves readability in orders, invoices, shipping labels, and customer communications.

## Accessing Address Formats Management

1

#### Navigate to Address Formats

Log in to your admin dashboard and go to **System → Localization → Address Formats**.

2

#### Address Format List

You will see a list of all defined address format templates with their names, previews, and default status indicators.

3

#### Manage Address Formats

Use the **Add New** button to create a new address format template or click **Edit** on any existing format to modify its settings.

## Address Format Interface Overview

![](https://docs.opencart.com/~gitbook/image?url=https%3A%2F%2F3646803-files.gitbook.io%2F%7E%2Ffiles%2Fv0%2Fb%2Fgitbook-x-prod.appspot.com%2Fo%2Fspaces%252F4cP5wmQoIzTALooMO6m7%252Fuploads%252F3dvzr9omYY1FDkUJoCfI%252Faddress-formats.png%3Falt%3Dmedia%26token%3D55f212d2-0bbb-444d-b432-33a22c07b796&width=768&dpr=3&quality=100&sign=e8f3c57d336548d41f4aff475d103d87&sv=3)

Address Formats Interface

### Address Format Configuration Fields

**Basic Format Information**

**Template Identification**

- **Address Format Name**: **(Required)** A descriptive name for the format template (e.g., "US Standard Format", "European Multiline", "UK Compact"). Maximum 128 characters.
- **Address Format Template**: The actual format pattern using placeholders for address components. Line breaks create multi-line addresses in display.

**Available Placeholders**

**Address Component Variables**

- **{firstname}**: Customer's first name
- **{lastname}**: Customer's last name
- **{company}**: Company name (optional)
- **{address\_1}**: Primary address line (street and number)
- **{address\_2}**: Secondary address line (apartment, suite, etc.)
- **{city}**: City or locality name
- **{postcode}**: Postal/ZIP code
- **{zone}**: State/region/province name
- **{zone\_code}**: State/region/province code (abbreviation)
- **{country}**: Country name

**Example Format (US Standard):**

**Example Format (European Single Line):**

**Placeholder Usage**: Placeholders must use exact spelling and braces as shown. The system replaces them with actual customer data when displaying addresses. You can include text, punctuation, and line breaks (`\n`) around placeholders for proper formatting.

## Common Tasks

### Creating a New Address Format Template

To define a custom address display format:

1. Navigate to **System → Localization → Address Formats** and click **Add New**.
2. Enter a descriptive **Address Format Name** (e.g., "Japan Vertical Format").
3. In the **Address Format Template** field, create your format using placeholders.
4. Arrange placeholders in the order they should appear, adding line breaks (`\n`) for multi-line addresses.
5. Include any necessary punctuation (commas, spaces, hyphens) between placeholders.
6. Click **Save**. The new format will be available for assignment to countries.

### Assigning Address Formats to Countries

To apply a format template to specific countries:

1. Navigate to **System → Localization → Countries** and edit the target country.
2. In the **Address Format** dropdown, select the appropriate format template.
3. Save the country settings.
4. Repeat for all countries that should use the same address format.
5. Test by creating a customer address with that country to verify the formatting.

### Setting the Default Address Format

To establish a fallback format for countries without specific assignments:

1. Identify which address format should be the default (usually your most common format).
2. Note its **Address Format ID** from the list (the default format is marked with "(Default)").
3. Configure the `config_address_format_id` setting in your store's configuration (may require technical access).
4. The default format will be used for any country without an explicitly assigned format.

## Best Practices

**Template Design Guidelines**

**Effective Formatting**

- **Research Local Standards**: Study address formats for each country/region you serve.
- **Consistent Line Breaks**: Use consistent line breaks for readability in printed materials.
- **Optional Components**: Consider making {company} and {address\_2} conditional if not always needed.
- **Testing with Real Data**: Test formats with realistic address examples before deployment.
- **Multi-language Considerations**: Ensure formats work with accented characters and right-to-left languages if applicable.

**Template Management Strategy**

**Organizational Approach**

- **Reusable Templates**: Create generic templates (e.g., "North American", "European", "Asian") that can be shared across multiple countries.
- **Country-Specific Variations**: Only create unique formats when standard templates don't meet local requirements.
- **Version Control**: Keep track of format changes, especially if they affect printed materials or legal documents.
- **Documentation**: Document which countries use each format for easy reference.

**Deletion Warning** ⚠️ Never delete an address format that is: 1) set as the default format (`config_address_format_id`), 2) assigned to any countries, or 3) currently in use by customer addresses. Check all error messages and reassign dependencies before deletion.

## Troubleshooting

**Cannot delete an address format**

**Dependency Issues**

- **Default Format**: The format may be set as the default in system configuration.
- **Country Assignments**: One or more countries may be using this format. Check the error message for country count.
- **Solution**: Reassign countries to another format and change the default format before deletion.

**Address placeholders not displaying correctly**

**Template Syntax Issues**

- **Typographical Errors**: Verify placeholder spelling (e.g., `{firstname}` not `{first_name}`).
- **Missing Braces**: Ensure all placeholders have both opening `{` and closing `}`.
- **Line Break Encoding**: Use `\n` for new lines, not actual line breaks in the template field.
- **Special Characters**: Test with addresses containing special characters or accented letters.

**Address format not appearing in country dropdown**

**Availability Issues**

- **Status Check**: Verify the address format exists and is saved correctly.
- **Cache Issues**: Clear OpenCart cache to refresh available format lists.
- **Database Consistency**: Ensure the address\_format table has proper records (may require technical verification).

**Mixed formatting in multi-country orders**

**Consistency Issues**

- **Country Assignments**: Verify each country has the correct address format assigned.
- **Default Format**: Check that the default format is appropriate for unassigned countries.
- **Testing Strategy**: Test orders with addresses from different countries to identify formatting inconsistencies.
- **Zone Considerations**: Some countries may have regional variations not covered by national formats.

> "An address is more than coordinates—it's a connection point between you and your customer. A well-formatted address shows respect for local conventions and attention to detail that builds trust across borders."

[PreviousWeight Classes](docs__admin-interface__system__localization__weight-classes.md)[NextMaintenance](docs__admin-interface__system__maintenance.md)

Last updated 7 months ago

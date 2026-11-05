# Configurable Options | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/guides/configurable-options

---

Version: 6

On this page

Configurable options in Blesta allow you to customize service provisioning behavior through specially named options that a module is designed to utilize. Configurable Options can be created for any module, but they only work if the module anticipates them or they are one of the special types below.

Manage them under **Packages > Options** in the admin UI.

## Overriding Module Rows and Module Groups[â](#overriding-module-rows-and-module-groups "Direct link to Overriding Module Rows and Module Groups")

Certain configurable option names have special functionality that allows you to override the module or server used for service provisioning.

### Module Row Group Override[â](#module-row-group-override "Direct link to Module Row Group Override")

A configurable option with the name **module\_row\_group** can override the Module or Server Group assigned to a package.

This is particularly useful for options like "Location" where you want the client's selection to determine which server group is used for provisioning.

**Example:**

- Create a configurable option named `module_row_group`
- Add option values that correspond to your server group names (e.g., "US East", "US West", "Europe")
- When a client selects a location, their service will be provisioned using servers from that group

### Module Row Override[â](#module-row-override "Direct link to Module Row Override")

A configurable option with the name **module\_row\_id** can override a specific module row or server assigned to a package.

This allows for precise control over which exact server is used for provisioning a service.

**Example:**

- Create a configurable option named `module_row_id`
- Add option values that correspond to specific module row IDs
- When selected, the service will be provisioned on that specific server instead of the default

## Option Value Images (Blesta 6.0+)[â](#option-value-images-blesta-60 "Direct link to Option Value Images (Blesta 6.0+)")

Each value within a configurable option can now have an **image** associated with it. This is useful for visual selectors on the order form (in Blesta v6.1+)â for example, a "Location" option whose values are countries can show flag images instead of (or alongside) plain text labels.

When adding or editing an option value, the **Image** field accepts an upload in the following formats:

- JPEG
- PNG
- GIF
- WebP

If the upload fails or the file is in an unsupported format, you'll see one of:

- *"The option value image could not be uploaded."*
- *"The option value image must be a JPEG, PNG, GIF, or WebP file."*

How the image is rendered on the order form depends on the order form template you're using. The default Paradigm-era order form templates render the image alongside the value label; custom templates may need to be updated to surface the image â see the relevant template's documentation.

## Domain package groups excluded from selection[â](#domain-package-groups-excluded-from-selection "Direct link to Domain package groups excluded from selection")

When assigning configurable option groups to packages under **Packages > Configurable Options**, package groups associated with the Domain Manager are no longer shown in the assignment selector. Configurable options for domains are managed through the Domain Manager itself rather than through generic package configurable options.

This is a v6 polish change â the selector simply no longer offers options that would not have worked correctly when applied to domain packages.

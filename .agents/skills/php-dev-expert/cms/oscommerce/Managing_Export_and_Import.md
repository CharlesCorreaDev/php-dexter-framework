# Managing Export and Import - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Managing_Export_and_Import

---

# Managing Export and Import

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This manual explains how to manage product and catalog data using the Import/Export tools in the admin area.

For a quick overview of this functionality, watch the video first.

**The manual below explains everything step by step.**

#### **1) Accessing the Import/Export Tools**

1. Go to the **admin area** of your website.
2. Click **Products/Catalogue → Import/Export → Manual export**.

[![1249 Export Import.jpg](/wiki/images/thumb/0/09/1249_Export_Import.jpg/800px-1249_Export_Import.jpg)](https://www.oscommerce.com/wiki/File:1249_Export_Import.jpg)

**2) Exporting Data**

1. Under the **Manual export** tab, open the **File** dropdown menu and select what you want to export (e.g., Products, Categories, Brands, etc.).
2. Select the **Export file format** (for example, CSV).
3. (Optional) Select a **Category** and **Product** from the dropdown lists to narrow export results.
4. (Optional) Enable **Price with tax** if you want prices exported including VAT.

[![1250 Select Category Products.jpg](/wiki/images/thumb/4/44/1250_Select_Category_Products.jpg/800px-1250_Select_Category_Products.jpg)](https://www.oscommerce.com/wiki/File:1250_Select_Category_Products.jpg)

5. Click **Download**.

6. A pop-up window will appear.

**Note:** The **Products Model** column (or its equivalent) may have different names depending on the type of file:

| File Type | Identifier Field / Column Name |
| --- | --- |
| Products | Products Model |
| Categories | KEY\_FIELD |
| Brands | KEY\_FIELD |
| Assign products to categories | Products Model |
| Attributes | Products Model |
| Inventory | KEY |
| Supplier | Suppliers name |
| Stock | STOCK\_KEY |
| Bundle | Products Model and Child Products Model |
| Images | Products Model |
| Properties | Products Model |
| Properties Setup | EXISTING\_REF |

[![1251 Select Fields to export.jpg](/wiki/images/thumb/4/42/1251_Select_Fields_to_export.jpg/800px-1251_Select_Fields_to_export.jpg)](https://www.oscommerce.com/wiki/File:1251_Select_Fields_to_export.jpg)

#### **3) Importing Data**

1. Click the **Manual import** tab.
2. From the dropdown, select the file type you want to import.
3. You can:
   - **Upload a new file** (format is auto-detected based on Manual Export structure),
   - **Re-run** previously uploaded files,
   - Or **browse and upload** a new file manually.

[![1252 Manual import.jpg](/wiki/images/thumb/b/b1/1252_Manual_import.jpg/800px-1252_Manual_import.jpg)](https://www.oscommerce.com/wiki/File:1252_Manual_import.jpg)

4. Once the uploaded file appears in the list, you can:

- **Delete** the file,
- Select which **fields to replace**,
- **Apply the changes** to your website,
- **View the import report** using the action icons.

[![](/wiki/images/thumb/9/9d/1253_Manual_import_new_field.jpg/801px-1253_Manual_import_new_field.jpg)](https://www.oscommerce.com/wiki/File:1253_Manual_import_new_field.jpg)

#### **4) Required File Structure Rules**

- The **Products Model** column (or its equivalent listed above) is **mandatory**. This field is used to **find and update existing records**. If missing, duplicates will be created.
- All **other columns are optional**:
  - If a column exists and contains data → the data will be updated.
  - If a column is missing → the original data will remain unchanged.

#### **5) Special Requirements for Certain Data Types**

When importing data for:

- **Assign products to categories**
- **Attributes**
- **Images**
- **Properties**

The product-related rows must be **grouped (sorted) together**.

If the product rows are **not grouped**, the system will treat missing rows as deletions and remove data.

#### **6) Example for Updating Prices**

A minimal price update file may contain **only two columns**, for example:

[![Image 591.png](/wiki/images/thumb/a/af/Image_591.png/675px-Image_591.png)](https://www.oscommerce.com/wiki/File:Image_591.png)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Managing_Export_and_Import&oldid=169274>"

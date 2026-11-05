# Managing Automatic Import and Data Sources - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Managing_Automatic_Import_and_Data_Sources

---

# Managing Automatic Import and Data Sources

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This manual explains how to configure Automatic Import and Data Sources.

#### **1) Managing Automatic Import**

1. **Access the Automatic Import Section**

Access the admin area of your website and go to **Products/Catalogue → Import/Export → Automatic import**.

2. **Understand the Purpose**

This functionality is used for scheduled, recurring imports. For example, a stock inventory feed can be automatically processed on a regular basis.

[![1260 Automatic Import.jpg](/wiki/images/thumb/e/e1/1260_Automatic_Import.jpg/800px-1260_Automatic_Import.jpg)](https://www.oscommerce.com/wiki/File:1260_Automatic_Import.jpg)

3. **Use of File Types**

Automatic import uses the same file types and formats as **Manual Import**.

The difference is that automatic import runs **on a schedule** rather than manually.

4. **Initial Setup**

Before the automatic import starts running, configure:

- The **import type** (file/data type)
- The **data mapping/column setup**
- The **time intervals** for import execution

[![1261 Manual import.jpg](/wiki/images/thumb/e/e5/1261_Manual_import.jpg/800px-1261_Manual_import.jpg)](https://www.oscommerce.com/wiki/File:1261_Manual_import.jpg)

#### **2) Managing Data Sources**

Data Sources are used for more advanced or custom data exchanges (often API-based).

1. **Access Data Sources** Go to **Products/Catalogue → Import/Export → Data Sources**.
2. **Create a New Data Source** Click on **Create data source**.

[![1262 Data sources.jpg](/wiki/images/thumb/f/f4/1262_Data_sources.jpg/800px-1262_Data_sources.jpg)](https://www.oscommerce.com/wiki/File:1262_Data_sources.jpg)

3. **Select Data Source Type**

In the popup window, choose the required type from the **Type** dropdown list.

*These data sources may be used for:*

- Transferring files between servers (EDI)
- Performing actions via API
- Combined operations (file + API)

[![1263 Create Data source.jpg](/wiki/images/thumb/9/96/1263_Create_Data_source.jpg/800px-1263_Create_Data_source.jpg)](https://www.oscommerce.com/wiki/File:1263_Create_Data_source.jpg)

4. **Editing an Existing Data Source**

Double-click **Import from osCommerce 2x** to modify an existing data source.

[![1265 Import from folder.jpg](/wiki/images/thumb/7/75/1265_Import_from_folder.jpg/801px-1265_Import_from_folder.jpg)](https://www.oscommerce.com/wiki/File:1265_Import_from_folder.jpg)

5. **Enter Connection Credentials**

Click the **wrench icon** and enter:

- Base URL
- Secure key
- Required security method

[![1264 Data source configure.jpg](/wiki/images/thumb/b/b3/1264_Data_source_configure.jpg/800px-1264_Data_source_configure.jpg)](https://www.oscommerce.com/wiki/File:1264_Data_source_configure.jpg)

6. **Configure Import Frequency**

Click the **gearwheel icon (to the right of the wrench icon)** to set how often data is imported:

- Schedule imports periodically, or
- Define exact run times

7. **Manage Data Fields**

Add or remove data fields by clicking the respective buttons.

[![1266.jpg](/wiki/images/thumb/b/be/1266.jpg/800px-1266.jpg)](https://www.oscommerce.com/wiki/File:1266.jpg)

8. **Set File Storage Duration**

Click the **gearwheel icon (lower one)** to specify how long processed files should be stored:

- 1 day
- 1–2 weeks
- 1 month
- Do not remove

[![1267 Configure directory keep files.jpg](/wiki/images/thumb/9/9d/1267_Configure_directory_keep_files.jpg/802px-1267_Configure_directory_keep_files.jpg)](https://www.oscommerce.com/wiki/File:1267_Configure_directory_keep_files.jpg)

9. **Configure Individual Frequency Settings**

All the processed files can be configured **individually,** using the action buttons.

[![1268 Processed data table.jpg](/wiki/images/thumb/6/6b/1268_Processed_data_table.jpg/801px-1268_Processed_data_table.jpg)](https://www.oscommerce.com/wiki/File:1268_Processed_data_table.jpg)

Click the **clock icon** to define import execution:

- Run once
- Run periodically
- Set specific time
- Leave disabled if needed

[![1269 Job run frequency.jpg](/wiki/images/thumb/8/8b/1269_Job_run_frequency.jpg/801px-1269_Job_run_frequency.jpg)](https://www.oscommerce.com/wiki/File:1269_Job_run_frequency.jpg)

10. **Apply Processed Data Immediately**

Click the **green triangle (Play) icon** to apply the processed data to the website.

[![1270 Green icon.jpg](/wiki/images/thumb/d/de/1270_Green_icon.jpg/800px-1270_Green_icon.jpg)](https://www.oscommerce.com/wiki/File:1270_Green_icon.jpg)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Managing_Automatic_Import_and_Data_Sources&oldid=145408>"

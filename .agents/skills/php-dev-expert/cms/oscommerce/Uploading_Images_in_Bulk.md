# Uploading Images in Bulk - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Uploading_Images_in_Bulk

---

# Uploading Images in Bulk

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

Welcome to the user guide for uploading images in bulk for your products. In this guide, we'll walk you through the process step by step, offering two methods for your convenience.

**1. Access Easy Populate Page**

Firstly, open the Easy Populate page using the following link: https://www.your\_web\_site.com/admin/easypopulate

**2. Select Image Options**

Once on the Easy Populate page:

- Choose "Images” from “File” field.
- Click the "Download" button. You can also specify the category in the "Select category" field if needed.

[![1 Import Export.png](/wiki/images/thumb/8/85/1_Import_Export.png/800px-1_Import_Export.png)](https://www.oscommerce.com/wiki/File:1_Import_Export.png)

**3. Customize Image Fields**

In the pop-up window, select the following fields:

- **Products Model**
- **Default Image**
- **Image Status**
- **Sort Order**
- **Original filename Main**

Then, click "Confirm".

[![2 Select fields.png](/wiki/images/thumb/a/a0/2_Select_fields.png/800px-2_Select_fields.png)](https://www.oscommerce.com/wiki/File:2_Select_fields.png)

**4. Optional: Assign Images to Specific Attributes**

If required, you can also choose additional options under "Assign..." in the pop-up window.

[![3 Assign Image.png](/wiki/images/thumb/e/ea/3_Assign_Image.png/802px-3_Assign_Image.png)](https://www.oscommerce.com/wiki/File:3_Assign_Image.png)

**5. Fill in Image Details**

After downloading the file, open it in Excel or Libre/Open Office and fill in the following columns:

- **Products Model** - model of the product where images need to be uploaded. If you need to upload more than one image per product, you need to copy this row several times with the same product model, but different image file name.
- **Default Image** - enter 1 for default image and 0 for all other images (not default) per product.
- **Image Status** - enter 1 for enabled and 0 for disabled (not visible) image per product.
- **Sort Order** - enter number of images to sort them, starting from 0.
- **Original filename Main** - enter image file name, exactly as file is named (including extensions - like .jpg or .png)
- **Assign to option** - enter 1 for those options which should be assigned to the image.

[![4 Excel.png](/wiki/images/thumb/5/51/4_Excel.png/800px-4_Excel.png)](https://www.oscommerce.com/wiki/File:4_Excel.png)

**6. Example Product Structure**

Refer to the example provided for clarity on how to fill in the columns correctly for a product that has 4 images. Ensure consistency in the product model and image details for each row.

- **Product model** - the same for each row (for each image).
- **Default image** - 1 for the first image and 0 for all other images (rows).
- **Image status** - 1 for all images (all enabled).
- **Sort order** - 0 for the first image, 1 for the second, 2 for the third, and 3 for the fourth image.
- **Original filename Main** - filenames of the images to a product.

[![5 Example.png](/wiki/images/thumb/4/43/5_Example.png/802px-5_Example.png)](https://www.oscommerce.com/wiki/File:5_Example.png)

**7. Save the Updated File**

Save the file with the updated image information.

**8. Uploading Options**

You have two options for uploading the images:

**Option 1: Manual Import**

- If you have a manageable number of products:
  - Place the images and CSV file into a folder named 'images'.
  - Pack them together into one zip archive (file images.csv, and images folder should be placed at one level (images.csv file should not be in "images" folder)

[![6 Images Folder.png](/wiki/images/3/32/6_Images_Folder.png)](https://www.oscommerce.com/wiki/File:6_Images_Folder.png)

- Visit the **Manual Import** tab at Easy Populate: https://www.**your\_web\_site**.com /admin/easypopulate?directory\_id=2.
- Click "Choose File", select the zip archive, and click "Upload".

[![7 Easy Populate.png](/wiki/images/thumb/0/07/7_Easy_Populate.png/801px-7_Easy_Populate.png)](https://www.oscommerce.com/wiki/File:7_Easy_Populate.png)

- Confirm the correct fields from the CSV file and choose the appropriate import options: replace images for product or add to existing ones.

[![8 New fields.png](/wiki/images/thumb/5/55/8_New_fields.png/800px-8_New_fields.png)](https://www.oscommerce.com/wiki/File:8_New_fields.png)

After this, the file will appear in the table below, where you need to click the green triangle button to start processing the images (assign them to products).

**Option 2: Server Upload**

- If dealing with a large number of images:
  - Upload the images directly to the server following the path shown on the Easy Populate import tab: **/**home/**your\_web\_site**/public\_html/ep\_files/manual\_import/images**/**.

[![9 EP Import Tab.png](/wiki/images/thumb/d/d9/9_EP_Import_Tab.png/799px-9_EP_Import_Tab.png)](https://www.oscommerce.com/wiki/File:9_EP_Import_Tab.png)

- Only upload the CSV file prepared in the previous steps.
- Click the green triangle button to process the images.

*You've successfully uploaded images in bulk for your products. Should you have any further questions, feel free to refer back to this guide or reach out for assistance.*

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Uploading_Images_in_Bulk&oldid=134043>"

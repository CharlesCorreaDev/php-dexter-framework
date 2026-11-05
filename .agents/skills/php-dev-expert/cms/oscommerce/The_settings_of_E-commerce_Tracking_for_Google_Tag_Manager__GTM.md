# The settings of E-commerce Tracking for Google Tag Manager (GTM) - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/The_settings_of_E-commerce_Tracking_for_Google_Tag_Manager_(GTM)

---

# The settings of E-commerce Tracking for Google Tag Manager (GTM)

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This manual explains how to set up E-commerce Tracking using Google Tag Manager (GTM).

**Note: The manual is for osCommerce v4.**

**1) Create a Google Tag Manager Account**

1. Go to **https://tagmanager.google.com/**
2. Create a new account.
   - Enter the **Account Name** (for example: *Holbi*).
   - Click **CONTINUE**

[![Image 261.png](/wiki/images/1/13/Image_261.png)](https://www.oscommerce.com/wiki/File:Image_261.png)

- Enter the **Website URL** and choose **WEB** as the container type.

[![Image 262.png](/wiki/images/f/f5/Image_262.png)](https://www.oscommerce.com/wiki/File:Image_262.png)

3. Accept the **Service Agreement** by clicking **YES**.

[![Image 263.png](/wiki/images/9/93/Image_263.png)](https://www.oscommerce.com/wiki/File:Image_263.png)

4. After registration, GTM will provide the installation code.

[![](/wiki/images/4/4c/Image_558.png)](https://www.oscommerce.com/wiki/File:Image_558.png)

5. In the admin area of your website, specify only the container code in the following format:

**Example:** `GTM-TG63T3S`

*(No need to insert full script manually.)*

[![](/wiki/images/thumb/e/ef/Image_1009.png/800px-Image_1009.png)](https://www.oscommerce.com/wiki/File:Image_1009.png)

[![](/wiki/images/thumb/f/fe/Image_1008.png/800px-Image_1008.png)](https://www.oscommerce.com/wiki/File:Image_1008.png)

When using GTM in the admin area, **Google Analytics does not need to be configured directly** there.

The assumed look of the window will be as follows.

[![](/wiki/images/7/75/Image_559.png)](https://www.oscommerce.com/wiki/File:Image_559.png)

**2. Configure the Google Analytics Tag in GTM**

1. In GTM, create a **New Tag**.

[![](/wiki/images/c/cf/Image_560.png)](https://www.oscommerce.com/wiki/File:Image_560.png)

2. Under **Tag Configuration**, select **Universal Analytics**.

[![](/wiki/images/0/0c/Image_561.png)](https://www.oscommerce.com/wiki/File:Image_561.png)

[![Image 270.png](/wiki/images/f/fb/Image_270.png)](https://www.oscommerce.com/wiki/File:Image_270.png)

3. For **Track Type**, choose **Page View**.

4. Enable **Override settings in this tag** and enter your **Google Analytics Tracking ID**

*(Example: `UA-84506429-1`)*.

5. Open **More Settings → Ecommerce → Enable Enhanced Ecommerce**.

6. Enable **Use Data Layer**.

[![](/wiki/images/5/5a/Image_562.png)](https://www.oscommerce.com/wiki/File:Image_562.png)

7. Under **Triggering**, select **All Pages** — this collects general data.

[![](/wiki/images/1/18/Image_563.png)](https://www.oscommerce.com/wiki/File:Image_563.png)

[![Image 273.png](/wiki/images/a/a1/Image_273.png)](https://www.oscommerce.com/wiki/File:Image_273.png)

8. For E-commerce data transfer, select one of the following trigger types:

- **DOM Ready**, or
- **Window Loaded**

Do not choose more than one, otherwise data may be duplicated.

[![Image 274.png](/wiki/images/4/4f/Image_274.png)](https://www.oscommerce.com/wiki/File:Image_274.png)

[![Image 275.png](/wiki/images/7/77/Image_275.png)](https://www.oscommerce.com/wiki/File:Image_275.png)

[![Image 276.png](/wiki/images/5/56/Image_276.png)](https://www.oscommerce.com/wiki/File:Image_276.png)

**3) Save the Tag**

- Click **Save** to apply the configuration.

[![Image 277.png](/wiki/images/c/c4/Image_277.png)](https://www.oscommerce.com/wiki/File:Image_277.png)

[![Image 278.png](/wiki/images/3/3e/Image_278.png)](https://www.oscommerce.com/wiki/File:Image_278.png)

[![](/wiki/images/6/6f/Image_564.png)](https://www.oscommerce.com/wiki/File:Image_564.png)

[![](/wiki/images/2/26/Image_565.png)](https://www.oscommerce.com/wiki/File:Image_565.png)

The possible look of the window after saving.

[![](/wiki/images/e/e7/Image_566.png)](https://www.oscommerce.com/wiki/File:Image_566.png)

**4) Publish the Container**

1. In GTM, click **Submit**.
2. Enter a version name or note (optional).
3. Click **Publish** to activate the container.

- Until the container is published, no tracking data will be transferred.

[![](/wiki/images/3/36/Image_567.png)](https://www.oscommerce.com/wiki/File:Image_567.png)

[![](/wiki/images/1/1d/Image_568.png)](https://www.oscommerce.com/wiki/File:Image_568.png)

[![](/wiki/images/4/40/Image_569.png)](https://www.oscommerce.com/wiki/File:Image_569.png)

**5) Activate the Ecommerce Tracking Module**

1. In your website admin area, activate the **E-commerce Tracking module**.
2. If both **Google Analytics** and **GTM** tracking are active, you will be prompted to choose which one to use.
   - Select the **GTM-based setup**.

[![](/wiki/images/thumb/2/2a/Image_1007.png/800px-Image_1007.png)](https://www.oscommerce.com/wiki/File:Image_1007.png)

**6)** **Enable Enhanced E-commerce in Google Analytics**

1. In **Google Analytics**, go to: **Admin → View → Ecommerce Settings**
2. Enable:
   - **Ecommerce**
   - **Enhanced Ecommerce Reporting**

[![Image 286.png](/wiki/images/3/38/Image_286.png)](https://www.oscommerce.com/wiki/File:Image_286.png)

[![Image 287.png](/wiki/images/7/7c/Image_287.png)](https://www.oscommerce.com/wiki/File:Image_287.png)

[![Image 288.png](/wiki/images/8/87/Image_288.png)](https://www.oscommerce.com/wiki/File:Image_288.png)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=The_settings_of_E-commerce_Tracking_for_Google_Tag_Manager_(GTM)&oldid=145432>"

# Setting up GA4 - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Setting_up_GA4

---

# Setting up GA4

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This manual explains how to set up Google Analytics 4 (GA4) for your website.

**1) Log in to Google Analytics**

1. Go to **https://analytics.google.com/**
2. Log in using your Google account.
3. Select the required **Analytics account**.

[![Image 1020.png](/wiki/images/thumb/a/a6/Image_1020.png/511px-Image_1020.png)](https://www.oscommerce.com/wiki/File:Image_1020.png)

**2) Access the GA4 Setup Assistant**

1. In the left navigation panel, click **Admin**.

[![Image 1019.png](/wiki/images/a/a2/Image_1019.png)](https://www.oscommerce.com/wiki/File:Image_1019.png)

A similar page will appear.

[![Image 1018.png](/wiki/images/f/f1/Image_1018.png)](https://www.oscommerce.com/wiki/File:Image_1018.png)

2. Make sure the **correct account and property** are selected.

[![Image 1017.png](/wiki/images/f/fd/Image_1017.png)](https://www.oscommerce.com/wiki/File:Image_1017.png)

3. Under **Property**, click **GA4 Setup Assistant**.

[![Image 1016.png](/wiki/images/4/4c/Image_1016.png)](https://www.oscommerce.com/wiki/File:Image_1016.png)

**3) Create GA4 Property**

1. Click **I want to create a new Google Analytics 4 property**.
2. Click **Create and Continue**.

[![Image 1015.png](/wiki/images/8/8a/Image_1015.png)](https://www.oscommerce.com/wiki/File:Image_1015.png)

3. A green confirmation note will appear showing the property is **Connected**.

[![Image 1014.png](/wiki/images/b/b1/Image_1014.png)](https://www.oscommerce.com/wiki/File:Image_1014.png)

**4) Configure the New GA4 Property**

1. Click **Go to your GA4 property**.

[![Image 1013.png](/wiki/images/6/69/Image_1013.png)](https://www.oscommerce.com/wiki/File:Image_1013.png)

2. Review the settings and apply any required changes.

3. Return to **Setup Assistant**.

[![Image 1012.png](/wiki/images/2/24/Image_1012.png)](https://www.oscommerce.com/wiki/File:Image_1012.png)

**5) Get the Measurement ID**

1. On the right side of the Setup Assistant, locate **Collect website and app data**.
2. Click the arrow and select **Manage Data Streams**.
3. Select the **Web** data stream.

[![Image 1011.png](/wiki/images/4/44/Image_1011.png)](https://www.oscommerce.com/wiki/File:Image_1011.png)

4. In the **Web stream details** window, click **View tag instructions**.

[![Image 1021.png](/wiki/images/c/cf/Image_1021.png)](https://www.oscommerce.com/wiki/File:Image_1021.png)

5. Copy the **Measurement ID** (looks like *G-XXXXXXX*).

[![Image 1022.png](/wiki/images/a/a0/Image_1022.png)](https://www.oscommerce.com/wiki/File:Image_1022.png)

**6) Add Measurement ID to Your Website**

1. Go to your shop's **Admin Area (backend)**.
2. Insert the **Measurement ID** into the GA4 tracking field.

[![Image 1023.png](/wiki/images/thumb/0/0e/Image_1023.png/517px-Image_1023.png)](https://www.oscommerce.com/wiki/File:Image_1023.png)

3. Note: Both **Universal Analytics** and **GA4** codes are supported and may work in parallel.

**7) Verify the Tracking**

1. Open your website and refresh the page.
2. Check the source code to confirm the GA4 tag is present.

[![Image 1024.png](/wiki/images/e/ed/Image_1024.png)](https://www.oscommerce.com/wiki/File:Image_1024.png)

3. In Google Analytics, go to:

- **Reports → Real-time**

[![Image 1025.png](/wiki/images/a/a9/Image_1025.png)](https://www.oscommerce.com/wiki/File:Image_1025.png)

4. Ensure the **Users in Last 30 Minutes** section displays an active user count.

*GA4 setup is now complete and the tracking should be working correctly.*

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Setting_up_GA4&oldid=145435>"

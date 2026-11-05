# Managing Notify Me when in Stock - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Managing_Notify_Me_when_in_Stock

---

# Managing Notify Me when in Stock

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This manual explains how to enable and manage the “Notify Me When in Stock” functionality.

#### **1) How Customers Request Stock Notification**

1. If a product is currently **out of stock**, the **Notify me when in stock** button appears on the product page.
2. The customer clicks **Notify me when in stock**.
3. In the pop-up window, the customer enters their **name** and **email address**.
4. The customer clicks **Notify me** to submit the request.
5. When the product becomes available again, the customer will automatically receive a notification email.

[![Image 1309.png](/wiki/images/thumb/e/e9/Image_1309.png/799px-Image_1309.png)](https://www.oscommerce.com/wiki/File:Image_1309.png)

#### **2) Editing the Notification Email Template**

1. Go to the **admin area** of your website.
2. Click **Design and CMS → E-mail templates**.
3. Locate the **Notify Back in Stock** email template using the search field.
4. Click **Edit**.

[![Image 1311.png](/wiki/images/thumb/3/3d/Image_1311.png/799px-Image_1311.png)](https://www.oscommerce.com/wiki/File:Image_1311.png)

5. Update:

- **Email title**
- **Email content** for the required **front end**, **format**, and **language** using the available tabs.

6. Select or adjust the **email type** and **design template** if needed.

7. Save the changes.

[![Image 1312.png](/wiki/images/thumb/e/e3/Image_1312.png/799px-Image_1312.png)](https://www.oscommerce.com/wiki/File:Image_1312.png)

#### **3) Ensuring Notification Delivery (Cron Setup Required)**

**Note:** The **Cron Scheduler** module must be installed for this feature to function.

1. Go to **App Shop** and install the **[Cron Scheduler](https://www.oscommerce.com/app/cron-scheduler)** module (if not already installed).

[![Image 1313.png](/wiki/images/thumb/b/b7/Image_1313.png/799px-Image_1313.png)](https://www.oscommerce.com/wiki/File:Image_1313.png)

2. After installation, click **Settings → Cron manager**.

3. Locate the required **stock notification cron job** in the list:

- If it already exists → click **Edit**.
- If it does not exist → click **Add standard job** to create it.

[![Image 1314.png](/wiki/images/thumb/6/64/Image_1314.png/799px-Image_1314.png)](https://www.oscommerce.com/wiki/File:Image_1314.png)

4. Under the **Settings** and **Advanced** tabs, configure the cron job according to the provided sample or recommended parameters.

5. Save the cron job settings.

[![Image 1315.png](/wiki/images/thumb/a/ac/Image_1315.png/799px-Image_1315.png)](https://www.oscommerce.com/wiki/File:Image_1315.png)

[![Image 1316.png](/wiki/images/thumb/0/0b/Image_1316.png/799px-Image_1316.png)](https://www.oscommerce.com/wiki/File:Image_1316.png)

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Managing_Notify_Me_when_in_Stock&oldid=145387>"

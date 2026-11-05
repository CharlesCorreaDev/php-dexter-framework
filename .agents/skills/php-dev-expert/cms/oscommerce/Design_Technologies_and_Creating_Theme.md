# Design Technologies and Creating Theme - osCommerce Wiki

> **Fonte / Source:** https://www.oscommerce.com/wiki/Design_Technologies_and_Creating_Theme

---

# Design Technologies and Creating Theme

From osCommerce Wiki

[Jump to navigation](#mw-head)
[Jump to search](#searchInput)

This section explains the design technologies used in osCommerce and provides step-by-step instructions for creating and configuring a theme.

**Note: This manual is for osCommerce v4.**

**1) Design Technologies Used**

osCommerce uses the following technologies for front-end design and theme structure:

- **CSS**
- **HTML**
- **AJAX**
- **jQuery**
- **Smarty**

**Key Characteristics:**

1. Design-related data is stored in the **database**.
2. **CSS and jQuery are cached**, and updates are applied automatically when saving a theme.
3. Only the **CSS and jQuery used on the specific page** are loaded for improved performance.
4. Version numbering is used for **cache control**.
5. All changes to CSS and jQuery can be reviewed under the **Log** tab in the designer.

[![Image 621.png](/wiki/images/e/e4/Image_621.png)](https://www.oscommerce.com/wiki/File:Image_621.png)

6. The theme is built using **widgets**, each with its own styles and settings.

[![Image 622.png](/wiki/images/5/56/Image_622.png)](https://www.oscommerce.com/wiki/File:Image_622.png)

**2) Creating a Theme**

1. Access the **admin area** of your website.
2. In the left-hand menu, select **Design and CMS**.
3. Click on the **Themes** tab.
4. Click the **Add Theme** button.

[![Image 623.png](/wiki/images/c/c7/Image_623.png)](https://www.oscommerce.com/wiki/File:Image_623.png)

5. Choose one of the following options:

- **Copy the current theme**, or
- **Create a blank theme**, or
- **Upload a theme file**.

[![Image 624.png](/wiki/images/4/41/Image_624.png)](https://www.oscommerce.com/wiki/File:Image_624.png)

**3) Working with Widgets**

The template page is divided into three main sections:

- **Header**
- **Content**
- **Footer**

1. To add a widget, move your cursor to the desired location.

2. A pop-up button **Add Widget** will appear.

3. Click the button and choose a widget from the list.

#### **The “Block” Widget**

- Used to create the main **page layout**.
- Allows selecting the **number of columns**.
- The system automatically generates layout structure.

[![Image 625.png](/wiki/images/6/67/Image_625.png)](https://www.oscommerce.com/wiki/File:Image_625.png)

- osCommerce includes many pre-defined widgets for various purposes.

[![Image 626.png](/wiki/images/9/91/Image_626.png)](https://www.oscommerce.com/wiki/File:Image_626.png)

**4) Working with Banners**

1. Go to **Marketing Tools → Banner Manager**.
2. Click **New Banner**.
3. Under the **Sales Channels** tab, **enable** the banner for the required platform.
4. Create a **new banner group**.

[![Image 627.png](/wiki/images/1/15/Image_627.png)](https://www.oscommerce.com/wiki/File:Image_627.png)

5. Under the **Name and Description** tab, enter the details and upload the banner image.

[![Image 628.png](/wiki/images/9/96/Image_628.png)](https://www.oscommerce.com/wiki/File:Image_628.png)

6. Go back to your theme and **add the Banner widget**.

7. Hover over the widget and click **Edit**.

8. In the pop-up window, **select the banner group** and adjust settings as needed.

[![Image 629.png](/wiki/images/4/41/Image_629.png)](https://www.oscommerce.com/wiki/File:Image_629.png)

**5) Working with Menus**

1. Go to **Design and CMS → Menus**.
2. Click **Create Menu**.
3. Enter the **menu name** in the pop-up window.
4. Drag and drop the required **menu items** from the left column to the right.
5. Click **Save**.
6. Return to your theme and **add the Menu widget**.
7. Hover over the widget and click **Edit**.
8. Select your menu and add your settings to the widget if necessary.

[![Image 630.png](/wiki/images/5/55/Image_630.png)](https://www.oscommerce.com/wiki/File:Image_630.png)

**6) Working with CSS and jQuery**

1. Open the **Designer** in the admin area.

[![Image 631.png](/wiki/images/a/a6/Image_631.png)](https://www.oscommerce.com/wiki/File:Image_631.png)

2. To manage CSS:

- Go to the **CSS** tab.
- Use the dropdown to access styles grouped by **widgets**.
- Add new classes if needed.

[![Image 632.png](/wiki/images/8/80/Image_632.png)](https://www.oscommerce.com/wiki/File:Image_632.png)

3. To manage JavaScript:

- Go to the **js** tab.
- Use the **tl()** function wrapper to insert your code.

[![Image 633.png](/wiki/images/4/40/Image_633.png)](https://www.oscommerce.com/wiki/File:Image_633.png)

**Example**:

tl (){

console.log(‘Hello’);

}

Your theme setup and UI components can now be customized further depending on layout and design requirements.

Retrieved from "<https://www.oscommerce.com/wiki/index.php?title=Design_Technologies_and_Creating_Theme&oldid=145443>"

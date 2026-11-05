# Appearance Themes Screen – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/appearance-themes-screen/

---

# Appearance Themes Screen

## In this article

Table of Contents

- [Manage Themes](#manage-themes)
- [Install Themes](#install-themes)

[Back to top](#wp--skip-link--target)

The **Appearance Themes Screen** allows you to manage your Themes. That means you can install, preview, delete Themes, activate, and update Themes.

A WordPress Theme is a collection of files that work together to produce a graphical interface with an underlying unifying design for a weblog. These files are called **template files**. A Theme modifies the way the site is displayed, without modifying the underlying software. Themes may include customized template files, image files (\*.jpg, \*.gif), style sheets (\*.css), custom Pages, as well as any necessary code files (\*.php).

### [Manage Themes](#manage-themes)

#### [Current Theme](#current-theme)

The current active Theme appears first in the upper left corner. Initially, as part of the WordPress installation process, the [WordPress Twenty Nineteen theme](https://wordpress.org/themes/twentynineteen/) is displayed as the active Theme.

[![](https://i1.wp.com/wordpress.org/documentation/files/2019/01/themes-screen.png?fit=1296%2C308&ssl=1)](https://wordpress.org/support/?attachment_id=11131496)

Themes Screen

![](https://wordpress.org/documentation/files/2019/01/theme-twenty-ninteen.png)

A small screenshot of the Theme is shown. If you roll over the image with your cursor, a “Theme Details” button appears. Click it and you’ll be provided with the name of the Theme, the Theme version, the Theme author, and a short description of the Theme. Additional buttons are below that activate specific current theme appearance screens that correspond to the menu picks on the left.

**Update Available**

If there is an update available for the Theme a message similar to this is displayed: “**There is a new version of Coral Lite available.**View Details or update now.”

- **View Details** : click this link and a page from the WordPress Theme Directory will display the details of that specific version.
- **Update now** : click this link to install the Theme upgrade. Also don’t forget that Themes can be upgraded via the Administration > Dashboard > Updates Screen.

[![](https://i1.wp.com/wordpress.org/documentation/files/2019/01/themes-more-info.png?fit=591%2C298&ssl=1)](https://wordpress.org/support/?attachment_id=11131523)

Theme Needing updates

#### [Available Themes](#available-themes)

The remainder of the Manage Themes screen shows the other Themes that
are installed. If there are more than 15 installed Themes then a page
navigation tool is displayed above and below the available Themes.
Fifteen Themes per page are displayed, so click the page number to
navigate to the next or previous page of Themes.

As with the Current Theme image, a small screenshot of each Theme is shown. Roll over the image to show “Theme Details”, “Activate”, and “Live Preview” buttons. Click the “Theme Details” button to see, along with the name of the Theme, the Theme version, and the Theme author, a short description of the Theme. The Theme Details modal has buttons displayed to Activate, Live Preview, and links to Delete, and if available, upgrade the Theme.

**Activate**

Click this to make this Theme the Current Theme.

**Live Preview**

Click this link and you can preview how your blog will appear with this specific theme version.

**Delete**

Click this to delete the Theme completely. The Theme files and folders will be completely deleted, so if you have made any customizations to that Theme, they too will be deleted so please consider backing up before deleting.

**Update Available**

Refer Current Theme section.

### [Install Themes](#install-themes)

Themes can be installed in several ways:

- The automated Theme installer for Themes located in the WordPress Theme Directory
- The upload method for any Theme that is located in a ZIP file on your local computer
- The manual method via an FTP connection from your local machine to your host
- The manual method via a hosting control panel such as cPanel

Each of these installation methods is described below.

#### [Automated Theme installer](#automated-theme-installer)

The automated Theme installer can be used to install any Theme in the [WordPress Theme Directory](https://wordpress.org/extend/themes/). This is the easiest way to install a Theme.

Visit Administration > Appearance > **Themes**, click the Add New button. You can find additional themes for your site from the [WordPress Theme Directory](https://wordpress.org/themes/). These themes are designed and developed by third parties, are available free of charge, and are compatible with the license WordPress uses.

Use one of three Search methods to find the desired Theme:

- **Filter search** – at the top of the screen select one of three filters, Featured, Popular, or Latest. When you find a theme you like, you can preview it or install it.
- **Keyword search** – Enter keyword, author, or tag. The search results will be updated as you type.
- **Attribute search** – Click Feature Filter link to get more specific and search by categorized criteria. Select multiple criteria and click Apply Filters button.

[![](https://i2.wp.com/wordpress.org/documentation/files/2019/01/theme-features.png?fit=739%2C485&ssl=1)](https://wordpress.org/support/?attachment_id=11131546)

Themes Features Search

Once you have generated a list of themes, you can preview and install
any of them. Click on the thumbnail of the theme you’re interested in
previewing. It will open up in a full-screen Preview page to give you a
better idea of how that theme will look.

To install the theme so you can preview it with your site’s content and customize its theme options, click the “Install” button at the top of the left-hand pane. The theme files will be downloaded to your website automatically. When this is complete, the theme is now available for activation, which you can do by clicking the “Activate” link. Or you may click “Live Preview” or “Return to Theme Installer”.

[![](https://i2.wp.com/wordpress.org/documentation/files/2019/01/theme-add-upload-process.png?fit=410%2C147&ssl=1)](https://wordpress.org/support/?attachment_id=11131564)

Installing a theme (Upload Method)

#### [Using the upload method](#using-the-upload-method)

The upload method is another easy way to install a Theme. This can be used to install any Theme that is in a ZIP file. All the Themes in the [WordPress Theme Directory](https://wordpress.org/extend/themes/) can be installed using this method. Download the ZIP file. First find the Theme you want to install. Other sources of Themes can be used and the key is to download the Theme ZIP file to your local computer. Place the file anywhere convenient.

Visit Administration > Appearance > **Themes**, click the Add New button, then click the Upload Theme link. Click **Browse** button and specify the ZIP file you downloaded in above step and click Install Now.

The Install Theme from uploaded file will display the results of the installation. Click the **Activate** link to make that the Current Theme.

#### [Using the FTP method](#using-the-ftp-method)

1. Download the Theme files to your local computer. If the Theme is in ZIP file archive and extract the ZIP file contents to a folder on your local computer. You may need to preserve the directory structure in the archive when extracting these files. Follow the guidelines provided by your Theme author.
2. Using an FTP client to access your host web server. If necessary create a directory to contain your Theme in the /wp-content/themes directory provided by WordPress. For example, a Theme named **Test** should be in /wp-content/themes/test. Your Theme may provide this directory as part of the archive.
3. Upload the Theme files to the new directory on your host server.
4. Visit Administration > Appearance > **Themes**, if necessary navigate to the page displaying that Theme, then click the Activate link to make the Theme, the Current Theme.

#### [Installing with cPanel](#installing-with-cpanel)

If your host offers the cPanel control panel, and the Theme files are in a .zip or .gz archive follow these instructions.

1. Download the Theme ZIP file to your local machine.
2. In cPanel File Manager, navigate to your Themes folder. If you have WordPress installed in it’s own folder called wordpress, you would navigate to “public\_html/wordpress/wp-content/themes” and if WordPress is installed in your web-root folder you would navigate to “public\_html/wp-content/themes”.
3. Once you’ve navigated to the Themes folder in cPanel File Manager, click on Upload file(s) and upload that ZIP file you saved in Step 1.
4. Once the ZIP file is uploaded, click on the ZIP file name in cPanel, then in the panel to the right, click on Extract File Contents, and that ZIP file will be uncompressed.
5. Visit Administration > Appearance > **Themes**, if necessary navigate to the page displaying that Theme, then click the Activate link to make the Theme, the Current Theme.

## Was this article helpful? How could it be improved? [Cancel reply](article__appearance-themes-screen.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fappearance-themes-screen%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 8, 2019

Last updated

January 11, 2023

# Manage Plugins – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/manage-plugins/

---

# Manage Plugins

## In this article

Table of Contents

- [What are plugins?](#what-are-plugins-1)
  - [How do they relate to WordPress core?](#how-do-they-relate-to-wordpress-core-1)
  - [What are some examples?](#what-are-some-examples-1)
- [Finding and Installing Plugins](#finding-and-installing-plugins-1)
  - [Finding Plugins](#finding-plugins-1)
  - [Plugin Compatibility](#plugin-compatibility-1)
- [Installing Plugins](#installing-plugins-1)
  - [Automatic Plugin Installation](#automatic-plugin-installation-1)
  - [Upload via WordPress Admin](#upload-via-wordpress-admin)
  - [Manual Plugin Installation](#manual-plugin-installation-1)
- [Plugin Favorites](#plugin-favorites-1)
  - [Favorite a Plugin](#favorite-a-plugin-1)
  - [View a User’s Favorite Plugins](#view-a-user-s-favorite-plugins-1)
- [Updating Plugins](#updating-plugins)
  - [Manual Plugin Update From The Dashboard](#manual-plugin-update-from-the-dashboard)
  - [Manual Plugin Update From The Plugins Page](#manual-plugin-update-from-the-plugins-page)
  - [Enable Automatic Plugin Update](#enable-automatic-plugin-update)
  - [Disable Automatic Plugin Update](#disable-automatic-plugin-update)
  - [Bulk Update WordPress Plugins](#bulk-update-wordpress-plugins)
- [Uninstalling Plugins](#uninstalling-plugins-1)
  - [Automatic Uninstallation](#automatic-uninstallation-1)
  - [Manual Uninstallation](#manual-uninstallation)
- [Reinstalling Plugins](#reinstalling-plugins)
- [Troubleshooting](#troubleshooting-1)
  - [Resources To Help Diagnose The Issue](#resources-to-help-diagnose-the-issue)
  - [Possible Resolutions](#possible-resolutions-1)
- [Plugin Management](#plugin-management-1)
  - [Must-Use Plugins](#must-use-plugins-1)
- [Developing Plugins](#developing-plugins-2)

[Back to top](#wp--skip-link--target)

## [What are plugins?](#what-are-plugins-1)

[WordPress Plugins](https://wordpress.org/plugins/) are PHP scripts that extend the functionality of WordPress. They enhance the features of WordPress or add entirely new features to your site. Plugins are often developed by volunteers and are usually free to the public.

Plugins are available via the [WordPress Plugin Directory](https://wordpress.org/plugins/). Although plugins you find here are thoroughly tested and considered safe to use, they are of varying quality and are often works in progress.

### [How do they relate to WordPress core?](#how-do-they-relate-to-wordpress-core-1)

The WordPress content management system software, or WordPress core, provides the primary functionality for publishing content and managing users. Each WordPress plugin is an additional piece of software that can be easily installed to extend the functionality of WordPress core.

This allows you to customize your WordPress site with your desired functionality. Since so much functionality is provided through plugins, WordPress core is full-featured and customizable, without having to include everything for everyone.

### [What are some examples?](#what-are-some-examples-1)

Some of the more popular plugins in the [WordPress Plugin Directory](https://wordpress.org/plugins/) fall into these categories:

- Spam control
- SEO
- Data import and export
- E-commerce
- Security
- Caching

This is just a small sample. There are thousands of plugins available in the directory, so there’s a good chance you’ll find some that are useful to you.

## [Finding and Installing Plugins](#finding-and-installing-plugins-1)

### [Finding Plugins](#finding-plugins-1)

You can browse and search for plugins in the [WordPress Plugin Directory](https://wordpress.org/plugins/). Each plugin listed there is available for download as a zip file you can upload to your WordPress site.

An alternative way to find and install plugins is from within the WordPress admin screens. Navigate to **Plugins > Add New**, and you can browse and search for plugins from within your dashboard.

![](https://lh3.googleusercontent.com/TfnDziq6tE1BaXQgJygVht4KMRdRIdOQOWRMJnA3XCYfLbgq02cY3OvdMOBZ8FUCl38zaSJsJrz7la39dKcLRS3jDLLXqHsCpoXPyFw__iRIsOQnjngM_jFtN59B7i5b64VKyUYU)

Each plugin listed there has an “Install Now” button so you can easily add it to your site.

### [Plugin Compatibility](#plugin-compatibility-1)

If a plugin hasn’t been updated since the most recent update to WordPress core, it may be incompatible, or its compatibility may be unknown. You can view compatibility information about plugins from the Add Plugins page, or from the Installed Plugins list.

#### [Compatibility of New Plugins](#compatibility-of-new-plugins-1)

To learn about the compatibility of a plugin before you install it, navigate to **Plugins > Add New.** Each plugin description on this page includes a note that reads “Compatible with your version of WordPress” or “Untested with your version of WordPress.” You can click the “More Details” link to see information about this plugin’s compatibility.

![](https://lh3.googleusercontent.com/owermNk0T0VyD2wCRRL1rc78jdyVdhBPzi4wN8ClBpgzGV5hgXY5QrPlF1p3BLjwtOYtXwx9embtqtSpiVVWEWiJ5X9HB-Xui0Xoz0LizzbKaq-jDkMsLvU83c7U3vzXRu4TZe-Y)

#### [Compatibility of Installed Plugins](#compatibility-of-installed-plugins-1)

To learn about the compatibility of plugins you’ve already installed, click the “Plugins” link in the left nav of your site’s dashboard. Each item on this list should contain a “View details” link. Click this to see information about this plugin’s compatibility with different versions of WordPress.

![](https://lh5.googleusercontent.com/V7JA70pa9sLqvYh8D3qzwr1gAmZ8FRpg9iz7-woT1XRwebuxDrm6Z-Jk9gKH6Smka6UMYZaner-oG59oOHIDQuJH-xvTIR2fwUo9-UDQM8nAgbJS3mT1KBN9sBL8TdRglC77tb4L)
![](https://lh6.googleusercontent.com/HHshZ7_axuHWO7l2vxvk1GK8yAG3zVreoqSDGe5MLXBaj0uY5-OJO7mMbnhedX-JCrUubtSnlOJKTAVgxJcuthDopz0WWBnKs2kV4RD0su7CmNngw17plMzM6N4ha_tmU_3cvf4b)

## [Installing Plugins](#installing-plugins-1)

There are 3 ways to install WordPress plugins.

**Automatic Plugin Installation.** Any plugin available in the WordPress Plugins Directory can be installed via the built-in plugin installer.

**Upload via WordPress Admin.** You can easily add a new plugin by uploading a zip archive of the plugin from your local computer.

**Manual Plugin Installation.** In some cases, you may need to manually upload a plugin directly using an SFTP client.

### [Automatic Plugin Installation](#automatic-plugin-installation-1)

This is the simplest method of installing a plugin. To add a plugin using the built-in plugin installer:

1. Navigate to **Plugins > Add New**.

![](https://lh6.googleusercontent.com/N6h3Lw8CjauJIr12OKGvZByhvkIa_L2W1XFWEIfwQIVY9lFb_WeX0cvKCqOkjdhk1GEja8QxWU32r7R7gnMtx3M1Qi2qkBNno2nQBX85jaT5JiMRGMLhVvSagaxOEm_Taelp6Swc)

2. Use the search form in the top-right to search by keyword, author, or tag.

![](https://lh6.googleusercontent.com/dlBCMHSZfkcc1jI-9_HyJDz_dNyUc2ehSv5hlVVyCxzqDE853VZDBGqLgpIXNzl37aaujgV4ENdI92FN7RUS3DJs38BMf0UrfjMOFbhEWE4iP7AM1N-u2n1UB-HI7Ax4fwiMzX8k)

3. On the search results that appear, click a plugin’s title or the link ‘More Details’ to read more about it, including installation notes, plugin documentation, or other useful information.
4. Click the **Install Now** button to install the plugin.
5. Once the plugin installation is complete, click **Activate** to activate the plugin.

![](https://lh4.googleusercontent.com/mK7jYDK79rwZW-r75EaBNg_iYHcSS-2xviCvwqhWXTV7UfXpByNHOVpTeGlQMpgLMOMCxqmaagUcQvsPx2mtMeGIvdpvNqiz0OvQJc5wnSB0HjuTVfFAfPnRllJCi389CS1mQm7s)

### [Upload via WordPress Admin](#upload-via-wordpress-admin)

If you have a copy of the plugin as a zip file, you can manually upload it and install it through the Plugins admin screen.

1. Navigate to **Plugins > Add New**.
2. Click the **Upload Plugin** button at the top of the screen.

![](https://lh6.googleusercontent.com/oEFfpPUbKnnK02uPQXjjSPHNPgw_7MA1DHv-s6rCRHyK6EAFT55UHhox9lFNptrnpdJeVhEG1sk2WV63AtL1gPQBlNKLC_N_YwGAJbALaO8uKdTthhdFCAZC4X9HkrbtO66G6G67)

3. Select the zip file from your local filesystem.

![](https://lh4.googleusercontent.com/7lvDycsExPEQ48TzelZ-vkazpVPo-XhopRJliCSuYSc_zD3TTKL44dYXiXAvBZKUoTge9S-qHMpWj-CIAzh3s4N-mFT-mxTBxk1FlH8M2Hy3LthDkXrvURm1tVewLlmXfjWHlsZl)

4. Click the **Install Now** button.

![](https://lh5.googleusercontent.com/6-ihDrMuaLwpTV7qzNlKNZruxkDv2zy5YSsJs2pKlJE9SSkfdEJTfl6K78qPZlR_LVsCDrUllo908NAIGHBbPjRldkKPgTP6YZn419-RzmgIC6tc-C3bqcEUDCH8571tCKxEM066)

5. When the installation is complete, you’ll see “Plugin installed successfully.” Click the **Activate Plugin** button.

![](https://lh4.googleusercontent.com/8itCEZxi266PVdKqStrJouGg5bZ-JD3d41AZNZfh0obq_CaqopfACyGFa_O6HTkSQODZ7LEru7l7BnVHUYUC3_eB1d-QcEw7xpIxNlrROziKj8MSYSTKWRPoNhLpG1vuAJbkaDXc)

### [Manual Plugin Installation](#manual-plugin-installation-1)

In rare cases, you may need to install a plugin by manually transferring the files onto the server. This is recommended only when absolutely necessary, for example when your server is not configured to allow automatic installations.

This procedure requires you to be familiar with the process of transferring files using an SFTP client. It is recommended for advanced users and developers.

Here are the detailed instructions to manually install a WordPress plugin by transferring the files onto the webserver.

1. Download the plugin zip file from the [WordPress Plugin Directory](https://wordpress.org/plugins/) and unzip it locally. For example, in the case of Gutenberg plugin, download as gutenberg.X.Y.Z.zip (X.Y.Z is version) and unzip it to get the gutenberg/ folder.
2. Transfer the extracted folder to the wp-content/plugins directory of your WordPress site via SFTP or remote file manager.
3. From the Plugins menu in the Administration Screen, click Activate for the transferred plugin.

## [Plugin Favorites](#plugin-favorites-1)

You can add a plugin to your list of favorites, and you can view and easily install another WordPress.org user’s favorite plugins.

### [Favorite a Plugin](#favorite-a-plugin-1)

1. Log in to the [WordPress Plugins Directory](https://wordpress.org/plugins) using your WordPress.org ID.
2. Find the plugin you want to like and go to the plugin’s page.
3. Click the heart icon next to the Download button.

![](https://lh6.googleusercontent.com/j-hmt1AYvgVFLBc1oS3DINde-qNSk5sUEM7vfZWHyiAhTRkM-Glv8-1dWOE-VCygbQlxPS-yRbk6fC5ozVVgeW6XOsXPz1wT-lfOgv9uX8x07rxRjP0UQ4fG77nYmRFJ27zkkM1q)

4. Once you have favorited a plugin, it will show up in your WordPress.org public profile. If you have published a review of the plugin, your rating of the plugin will also appear here.

### [View a User’s Favorite Plugins](#view-a-user-s-favorite-plugins-1)

To see a WordPress.org user’s favorite plugins (including your own):

1. Browse to the Add Plugins admin screen (**Plugins > Add New**).
2. Click the Favorites tab.

![](https://lh4.googleusercontent.com/kCAfGscrnL9MXtj8065hNrtLhRj0WCgwRbFzp-i3UFmFw4eFuz71QQ5oIZN601Xxp6cXmhBnmajwC9pWgv4ffDSR6GlCaJYbG_by0b9QWN15yBpOUVd7YT9V0LLF6HWGD-0BbeO3)

3. Type the user’s name in the “Your WordPress.org username” field.

![](https://lh4.googleusercontent.com/xfNUER6Xu_bx6h9CcUaFDKOgBr3Y4Ps08iWKqH_dq4CPIA2nTmWf1jfWZXdb83ihdHt2hebRUIVQA1a3xVRB5de7N28pZqxoK1t_fl3pbxPvV7FTBB2VbrEMehqfNeh1-EuerFkj)

4. Click Get Favorites.
5. Each of the plugins listed here has an ‘Install Now’ button that you can use to add the plugin to your site.

## [Updating Plugins](#updating-plugins)

Plugin developers update their plugins occasionally by adding new features, improving code quality, and keeping them secure. To ensure that these changes are applied on your site immediately, you should keep your WordPress plugins up to date. This helps to improve your site’s WordPress security and performance.

### [Manual Plugin Update From The Dashboard](#manual-plugin-update-from-the-dashboard)

Your WordPress Dashboard automatically notifies you when a plugin needs to be updated — you can view this notification under the **Dashboard->Updates** tab.

![](https://lh4.googleusercontent.com/o4FLf5okx7WcQ_N4zJgRhXPwOBVccRagnjiaZ1s3cWLS-nGuCWb_puEv9VVhwVo07wbNwCWUKB2wvaO2JThVBlR0jLyb8hcf2Q-muNx0Fs2JZxDtXwRDilduAk2bkgZF77VaVE54)

1. Scroll down to the Plugins section.

![](https://lh3.googleusercontent.com/yye1dedACG13LHldc9p4Khhuey8a4nEh2etcP4nU9r5E4zKsR-9IHgT5V8TeRvzk4WXUhmzZTaAi4zqAc9LeN3MSXDdmhC2OkbQzawWpoJWZHqyvx3Kl2VRVD2HR8JTcjrf5iG_p)

2. Select the checkbox for the plugins you want to update and then click  ‘Update Plugins’ button.

**NOTE:** Always make sure you have a current backup of your site before updating your plugins. Sometimes problems can happen during the update process.

### [Manual Plugin Update From The Plugins Page](#manual-plugin-update-from-the-plugins-page)

You can find the plugins that need to be updated on your site’s Plugins page.

To find any plugins installed on your site that need to be updated:

1. Click the “Plugins” link in the left nav of your site’s dashboard.
2. Look down the list of installed plugins for any that include a line reading “There is a new version…”
3. Click the “View version…” link in that note to view details about the plugin’s update.
4. Click the “update now” link to update the plugin.

![](https://lh5.googleusercontent.com/Y97qPI3h0vtdDbU5zTKb3Xl2Bj6BWFHA2W8D_5nY9XhcBpn3YXmDKotJ81f3a-DVgF3EhLteD51n0wJ9WjEQQ6iarVNO3BuDftIO0Ls6A7A-iY5-IxaQrWl90G9bMr1op4mrttgN)

**NOTE:** Always make sure you have a current backup of your site before updating your plugins. Sometimes problems can happen during the update process.

### [Enable Automatic Plugin Update](#enable-automatic-plugin-update)

WordPress introduced automatic updates for WordPress plugins in WordPress 5.5. This allows you to enable automatic updates for individual WordPress plugins directly from the Plugins Page in the WordPress dashboard.

1. Go to **Plugins -> Installed Plugins** page inside WordPres Admin area. Here you’ll see the list of all your installed plugins.  Each plugin in the list has a link ‘Enable auto-updates’ in the right-most column (under Automatic Updates).
2. Select the checkbox for the plugins you want to enable auto-update and click the link  ‘Enable auto-updates’ for the selected plugin. This will enable automatic updates for the selected plugin.

![](https://lh6.googleusercontent.com/XloqyuZdklW2PwWOI4qo36yjGop98qQzeoV7Q_NMkBYKRSzacafSdlwMP9PU7Vuz5_QgX0ThgC7Nan97BxPQxGkOM1j0yRn6ZBw5gETS77E11AwL5BBY5vz5Ngro62HlbsCds-bA)

### [Disable Automatic Plugin Update](#disable-automatic-plugin-update)

  To stop your plugins from updating automatically, do the following:

1. Go to **Plugins -> Installed Plugins** page inside WordPres Admin area. Here you’ll see the list of all your installed plugins.
2. Each plugin in the list that has auto-update enabled will have a link ‘Disable auto-updates’ in the right-most column (under Automatic Updates).
3. Select the checkbox for the plugin you want to disable auto-update and click the link  Disable auto-updates’ for the selected plugin. This will disable automatic updates for the selected plugin.

![](https://lh4.googleusercontent.com/kW-4WcotlH1Whz04jiRZlR9p2irGLCdeY_Hf_v1n_xU8e1SxVj5X7BIpexJMz7T--8wJjZdKAV482NgcXPV4kGWDHINLiSTb45hS_F8aZy0Aih_X7OZZgzINodWJvS77q_4qh4Ru)

### [Bulk Update WordPress Plugins](#bulk-update-wordpress-plugins)

If you have several plugins on your website that need an update, then you can bulk update those plugins.  It is always recommended to do a quick review of all the plugins before updating.

1. Go to the Plugins page and click on the ‘Update Available’ link. This will show you the list of all plugins that have updates available.

![](https://lh3.googleusercontent.com/3ZN09QFOMEW8Dj40yisLlb1XIKCQ_ZTr5Jyt1RexZvmP9_ba-eWMDabDrd_pDElO7ckUdWTAQAevoNpFNt6tuKPsetAeiRqkxRe0eEHssELJLhYnPm3Nkoft2tfLeLQNL6UZ0ruf)

2. Click the checkbox to select all the plugins you want to update.

![](https://lh5.googleusercontent.com/jy5yzLCBfNI144JvI738Tb-upE6ufOMXDSTtF-u8NHLs1wtHZyi1i33rGP_HvnxQ6wmUKfBHNlKu5Y1IHvDPdEXlUv3XOmi6GLXPRLaRlfc7qOR1KTHcbgRDpW5tTDPU93wP1yv_)

3. From the ‘Bulk Actions’ drop down, select ‘Update’ and click ‘Apply’.

![](https://lh5.googleusercontent.com/39mmjXugezEqiX2arF4YNfS2UPaBk-VxnYbBfKJbWJgVEnULJ92g_VHAfz4vPLPI-kKPrC_qXbenGJSjhWJjHvtp4f_JDfnilQaEdEQiSFDzLm7lYYHS3JyMUNVM38cYN99ucwPq)

If all goes well with the updates, you will see a message saying that the updates were completed successfully.

![](https://lh6.googleusercontent.com/jIxxjCDn4GKILGXJgt9ePWWz-wTl5fJ8q-DYUV54ffRyPJ6op1e3jZjfHfOowyygq_gPSfGT9ABetCti48k2WfRQDBCaB7boZrrms52LGx872zUvh-kY0D_kLcidALhYYobG0iUO)

## [Uninstalling Plugins](#uninstalling-plugins-1)

Plugins have a safe and easy-to-use uninstaller. If that is not available, you can also manually uninstall the plugins.

### [Automatic Uninstallation](#automatic-uninstallation-1)

The safe and easy way to uninstall a plugin is via the WordPress admin screen.

1. Navigate to your **Plugins** admin screen and locate the plugin to be uninstalled.
2. Select the checkbox next to the plugin name and click the “Deactivate” link.

![](https://lh5.googleusercontent.com/shq7p8Uyrdg9CyS32p49iNlIfoxi1K0QsC84N1bDsTAzXIh7d-tH1cqdDEgLP0sO8AmEZSQzC5zwa7FvmKT7HI_e2_w8FjMiKtIxMGl0jEmRQRUSMH0mK_TiGFb-U2H_FdBxDlSu)

3. Once the plugin is successfully deactivated, click the plugin’s “Delete” link.

![](https://lh4.googleusercontent.com/i0ZnXpyY-z7f3ZGxeBTIbvcccqI5W25LQGRR1oz2h7_eGt9MJTqCHPPIzukRB84xK9yXtHiQrKaGyzbLfGGjK3QJo8mWHjQt_rodE3a2F8tkmbXQum-85EW2VJQLYTIbOYcjt94L)

### [Manual Uninstallation](#manual-uninstallation)

In rare cases, you may need to uninstall a plugin by manually deleting the files from the server. This is recommended only when absolutely necessary, for example when your server is not configured to allow automatic uninstallation.

1. From the Plugins menu in the Administration Screen, click Deactivate for your plugin.
2. Access to your WordPress site via remote file manager.
3. Go to wp-content/plugins directory.
4. Remove your plugin folder.

## [Reinstalling Plugins](#reinstalling-plugins)

To reinstall the plugin, refer to the documentation above, remove it once, and then install it.

## [Troubleshooting](#troubleshooting-1)

Occasionally, a WordPress Plugin may not work as expected. This section provides helpful resources and steps you can take for troubleshooting plugin issues.

### [Resources To Help Diagnose The Issue](#resources-to-help-diagnose-the-issue)

- Review the plugin’s documentation to confirm that you’ve followed the instructions. You can find this information in the Plugins page under the name of each Plugin > View details.

![](https://lh3.googleusercontent.com/9PexHXAW-p8kPeYZShF236ZGkP6DnZNhgX0XOsf0yAHBb-pPrRILJnXpA8cjYA6PVbwLAaBvU6_DyKorF_f-UdvOnyxrZZa3XYIHHIlRV8Xte6nfT1RHgTybB-in78nAZWtySR3b)

NOTE: If you have access to the plugin files, you can also find this information in the Plugin’s folder inside readme.txt.

- Search the [WordPress Support Forums](https://wordpress.org/support/forums/) for the name of the Plugin and keywords associated with the problem you are experiencing or the specific error message that is displayed.
- Search the [WordPress Plugins Directory](https://wordpress.org/plugins/) for the name of the Plugin. On the Plugins page, select the Support tab to read about issues reported in the Support Forums for that plugin.

![](https://lh4.googleusercontent.com/TZg3Z5oy6h5jC0juH0IWvmBbZce9bmt7WL24ZF_IFjI24597Cu5gTt1tEmEzo1Ji6fE642dFbMlLF0_4m_COYR6kmykGz3LPV2wTDu6nqDMJZQNJGHA8R3cnS5-bUEs21h0cKy8s)

- Go to the website of the plugin author and check their blog and Plugin page for known issues or advice.

![](https://lh4.googleusercontent.com/qEXukXptueedg1_sPPjMr4fKet0VvRR11ug5RAUbw0ypIs5m_jsUrcRAEN1pPBCxJsriHUMYav8-Fd8WQ5vxp_mXpzPN9AH221W6Jc3wDk19LHvKBnjQHAcMrjfrsO7oBjxnNiuK)

- Search the web with the name of the Plugin and keywords associated with the problem you are experiencing or the specific error message that is displayed.
- Post a question in the [WordPress Support Forums](https://wordpress.org/support/forums/) with the name of the Plugin and keywords associated with the problem you are experiencing or the specific error message that is displayed. Make sure to include the problem in the title of the question. For advice on how to improve your chances of getting help, see [Finding WordPress Help](article__finding-wordpress-help.md).

### [Possible Resolutions](#possible-resolutions-1)

#### [Make sure that the plugin is activated after it is installed.](#make-sure-that-the-plugin-is-activated-after-it-is-installed)

1. Go to the **Plugins** > **Installed Plugins** from the WordPress admin screen.
2. Find the Plugin and click ‘Activate’.

![](https://lh5.googleusercontent.com/CUpGZg3TQS4wxrO0HvJT2LTJH0nMZkgEE5gk8l2qpnM_9gTboz7Xg9yfsWA_xLFYDhhyJx-77R4_scZA2_iLIM61m-lgwXPO-bvQe3G5JVFqjLdzF_UYG5yc8lRmBiCI7o68eH9z)

#### [If you know which plugin is causing the issue:](#if-you-know-which-plugin-is-causing-the-issue)

1. Deactivate that plugin and activate it again to see if this helps.

![](https://lh3.googleusercontent.com/YvqgmALVb4W0gLP0mUSF0yzffdb8odzPmxZK1FAUgcJh3K_obQpHFWFL2A6qIpx3HUrqHGiMdV6OWgpf5ib9Z4taflYqDSL7-QtuzWzMudPpBe76J4ssXNdhbgXutTc3uIm83_ea)

2. In some cases, the plugin may be buggy or incompatible. Deactivate the plugin. Search for other similar plugins, install and activate it and see it this revolves the issue.

#### [If you don’t know which plugin is causing the issue:](#if-you-don-t-know-which-plugin-is-causing-the-issue)

Sometimes problems may be caused by a conflict with different WordPress plugins. There are a few different ways you can tell which plugin is causing the issue.

- You installed a single plugin and experienced issues with your site soon after that.
- You updated a single plugin and experienced issues with your site soon after that.
- There’s an error message telling you exactly which plugin file is causing the issue.
- Try deactivating plugins one at a time until you find the one that’s causing the issue.
- Once you find the plugin that is causing the issue, you can either deactivate and activate it again to see if this helps. Or you can find other similar plugins from the [WordPress Plugins Directory](https://wordpress.org/plugins/), install and activate it and see if this resolves the issue.

## [Plugin Management](#plugin-management-1)

Plugins are managed from the Plugins admin screen of your WordPress site.

![](https://lh5.googleusercontent.com/WgkAR2VYH-J9UuWIL5qIpwLjBIEnxSGVjE5Njfss-2UOc0KGhMMWiRgFbyZjuVi8KG1ZvjUt5JaGUZD3ZSDJKTvsabKaVG7JNAVw-8QHMHHqplQUwsSGURdFTvxQgH2IhQ_mtZ4s)

Here you will find a list of all installed plugins, whether they are active or inactive. From this screen, you can activate, deactivate and delete plugins.

Plugins listed in bold are currently active.

Each plugin on the list also contains links to further information about the plugin.

### [Must-Use Plugins](#must-use-plugins-1)

Must-use plugins (a.k.a. mu-plugins) are plugins installed in a special directory inside the content folder and which are automatically enabled.

Must-use plugins do not show in the default list of plugins on the Plugins page and cannot be disabled except by removing the plugin file from the must-use directory, which is found in wp-content/mu-plugins by default.

For more details, please refer [Must Use Plugins](article__must-use-plugins.md).

## [Developing Plugins](#developing-plugins-2)

The WordPress community relies on plugin developers to maintain a healthy and growing collection of plugins. A large part of what makes WordPress valuable is the extensive and freely available plugins.

You can help WordPress users by creating your own plugins for distribution through the WordPress plugin directory.

You can get started with the WordPress plugin development using the resources in the [WordPress Plugin Developer Handbook](https://developer.wordpress.org/plugins/).

## Was this article helpful? How could it be improved? [Cancel reply](article__manage-plugins.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fmanage-plugins%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

October 24, 2018

Last updated

January 10, 2026

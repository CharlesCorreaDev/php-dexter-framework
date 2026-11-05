# Back Office Theming | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/back-office-theme

---

On this page

## Changing the Back Office Theme Directly[​](#changing-the-back-office-theme-directly "Direct link to Changing the Back Office Theme Directly")

Navigate to `Settings > Live help configuration > Back office theming` to change the back office theme directly.

## Changing the Back Office Theme via Code[​](#changing-the-back-office-theme-via-code "Direct link to Changing the Back Office Theme via Code")

Since version 2.23, the back office is powered by Bootstrap 3. The easiest way to change the back office theme is as follows:

1. Download or generate a Bootstrap CSS file. Here are a few URLs where you can do that:
   1. <http://bootswatch.com/>
   2. <http://getbootstrap.com/customize/>
2. In `design/backendtheme/vendor/bootstrap/css`, you will find a few CSS files. These are demo files that will be used if the default styles from these files are removed.
3. After downloading a file (for example, `bootstrap.default.css`), place it in the `css` folder and clear the cache from the back office. The new theme should then be applied.

To change the front office theme, you can use style widgets with internal [themes](docs__docs__theme.md). To change the front office widgets' content, follow the same steps as above, but for the `design/customtheme/vendor/bootstrap/css` folder. You can also change themes using extensions.

If you have created a cool theme, please share it with us!

# Understanding Themes - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/editor/understanding-themes.html

---

# Understanding Themes

Create a theme to hold your site's pages, layouts, and assets

- [Navigate to the Theme Settings](docs__user-guide__quickstart__editor__understanding-themes.md#navigate-to-the-theme-settings)
- [Create a New Blank Theme](docs__user-guide__quickstart__editor__understanding-themes.md#create-a-new-blank-theme)
- [Activate Your Theme](docs__user-guide__quickstart__editor__understanding-themes.md#activate-your-theme)
- [Next Steps](docs__user-guide__quickstart__editor__understanding-themes.md#next-steps)

In October CMS, a **theme** is the folder that holds everything your visitors see: pages, layouts, partials, content blocks, and assets like CSS and JavaScript. Your site always has one active theme, and switching themes changes the entire look and feel without affecting your content.

A theme's folder structure looks like this:

```
├── themes
|   └── my-theme
|       ├── pages  ← individual pages, each with its own URL
|       ├── layouts  ← shared page structures (header, footer)
|       ├── partials  ← reusable template fragments
|       ├── content  ← static content blocks, editable in the backend
|       └── assets  ← CSS, JavaScript, images, and fonts
```

You don't need to memorize this. You will learn each piece as we go. For now, let's create a theme.

## [#](#navigate-to-the-theme-settings) Navigate to the Theme Settings

1. In the backend, go to **Settings → Frontend Theme**.
2. You will see any themes that are currently installed. A fresh installation includes a demo theme.

## [#](#create-a-new-blank-theme) Create a New Blank Theme

1. Click the **Create a New Blank Theme** button.
2. Enter the following:
   - **Name**: `My Theme`
   - **Directory Name**: `mytheme`
3. Click **Create**.

Your new theme now appears in the list. It is an empty theme with no pages and no layouts, just an empty folder ready for you to build in.

## [#](#activate-your-theme) Activate Your Theme

1. Find **My Theme** in the theme list.
2. Click the **Activate** button next to it.
3. Confirm the activation.

Your site is now using your new blank theme. If you visit the frontend right now, you will see a blank page. That is expected. We haven't created any pages yet.

The demo theme is still installed and you can switch back to it at any time. Switching themes does not delete anything.

## [#](#next-steps) Next Steps

Your theme is created and active. Let's give it some structure. Continue to [Creating a Layout](docs__user-guide__quickstart__editor__creating-a-layout.md) to build the HTML skeleton that all your pages will share.

← [System Updates](docs__user-guide__quickstart__backend__system-updates.md)[Creating a Layout](docs__user-guide__quickstart__editor__creating-a-layout.md) →

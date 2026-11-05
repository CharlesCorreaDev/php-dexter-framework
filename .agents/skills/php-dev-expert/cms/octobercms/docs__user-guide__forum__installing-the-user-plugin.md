# Installing the User Plugin - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/forum/installing-the-user-plugin.html

---

# Installing the User Plugin

Install the RainLab User plugin, add the session component, and update your layout.

- [Installing the Plugin](docs__user-guide__forum__installing-the-user-plugin.md#installing-the-plugin)
- [Adding the Session Component to Your Layout](docs__user-guide__forum__installing-the-user-plugin.md#adding-the-session-component-to-your-layout)
- [How Components Work](docs__user-guide__forum__installing-the-user-plugin.md#how-components-work)
- [Enabling Registration](docs__user-guide__forum__installing-the-user-plugin.md#enabling-registration)
- [Next Steps](docs__user-guide__forum__installing-the-user-plugin.md#next-steps)

The first step in building a forum is setting up user authentication. The RainLab User plugin provides everything you need: user registration, login, password reset, and account management. It creates database tables, backend management pages, and frontend components that you can use in your theme.

## [#](#installing-the-plugin) Installing the Plugin

Navigate to **Settings → Updates & Plugins → Install Packages** and search for "RainLab.User". Click **Install** to add it to your project.

Alternatively, install via the command line:

```
php artisan plugin:install RainLab.User
```

After installation, you will see a new **Users** section in the backend where you can manage registered accounts.

## [#](#adding-the-session-component-to-your-layout) Adding the Session Component to Your Layout

The `session` component makes the `user` variable available on every page and enables page-level access control. Open your default layout and add it to the configuration section:

```
description = "Default layout"

[session]
security = "all"
```

```
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>___TWIG0___ - My Site</title>
    ___TWIG1___
    <script src="https://cdn.tailwindcss.com"></script>
    ___TWIG2___
</head>
<body class="min-h-screen bg-gray-50">
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-lg font-semibold text-gray-900">
                My Site
            </a>
            <div class="flex items-center gap-4">
                ___TWIG3___
                    <a href="___TWIG4___" class="text-sm text-gray-600 hover:text-gray-900">
                        Account
                    </a>
                    <a
                        href="javascript:;"
                        data-request="onLogout"
                        data-request-data="redirect: '/'"
                        class="text-sm text-gray-600 hover:text-gray-900"
                    >
                        Sign out
                    </a>
                ___TWIG5___
                    <a href="___TWIG6___" class="text-sm text-gray-600 hover:text-gray-900">
                        Sign in
                    </a>
                ___TWIG7___
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-8">
        ___TWIG8___
    </main>

    ___TWIG9___
</body>
</html>
```

The `{% styles %}` tag in `<head>` allows components to inject CSS when needed. The `{% framework extras %}` tag includes the AJAX framework with validation and loading indicators.

## [#](#how-components-work) How Components Work

When you add `[session]` to your layout, the plugin runs automatically during the page lifecycle. It injects the `user` variable into every page, which is either the logged-in user object or `null` for guests.

Components provide two things to your templates:

- **Variables**: data injected into the page that you use in your Twig markup (like `user`)
- **AJAX handlers**: server-side actions you can call with `data-request` (like `onLogout`)

You write all the HTML yourself using these variables and handlers. The navigation above demonstrates both: it checks `{% if user %}` to show different links, and calls `data-request="onLogout"` to sign the user out.

## [#](#enabling-registration) Enabling Registration

Navigate to **Settings → User Settings → Registration** and ensure that "Allow user registration" is enabled. This allows new visitors to create accounts through the registration form you will build next.

## [#](#next-steps) Next Steps

Continue to [Login and Registration](docs__user-guide__forum__login-and-registration.md) to create the login and registration pages.

← [Creating a Forum](docs__user-guide__forum__introduction.md)[Login and Registration](docs__user-guide__forum__login-and-registration.md) →

# Installing the Forum Plugin - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/forum/installing-the-forum-plugin.html

---

# Installing the Forum Plugin

Install the RainLab Forum plugin and create your first channels.

- [Installing the Plugin](docs__user-guide__forum__installing-the-forum-plugin.md#installing-the-plugin)
- [Creating Forum Channels](docs__user-guide__forum__installing-the-forum-plugin.md#creating-forum-channels)
- [Updating the Navigation](docs__user-guide__forum__installing-the-forum-plugin.md#updating-the-navigation)
- [Next Steps](docs__user-guide__forum__installing-the-forum-plugin.md#next-steps)

With user authentication in place, you can now add the forum functionality. The RainLab Forum plugin provides discussion channels, topics, posts, member profiles, and moderation tools.

## [#](#installing-the-plugin) Installing the Plugin

Navigate to **Settings → Updates & Plugins → Install Packages** and search for "RainLab.Forum". Click **Install** to add it to your project.

Alternatively, install via the command line:

```
php artisan plugin:install RainLab.Forum
```

The Forum plugin depends on RainLab.User, which you already installed in Part 1. After installation, you will see a new **Forum Channels** item on the Settings page, under the **Users** category.

## [#](#creating-forum-channels) Creating Forum Channels

Channels are the top-level categories that organize discussions. Navigate to **Settings → Forum Channels** and create a few channels to get started:

| Channel | Description |
| --- | --- |
| General Discussion | Talk about anything and everything |
| Help & Support | Get help with your questions |
| Announcements | Official news and updates |

You can always add more channels later or reorganize them from the backend.

## [#](#updating-the-navigation) Updating the Navigation

Now add a "Forum" link to your layout navigation so visitors can find the forum. Update the nav section in your default layout:

```
<div class="flex items-center gap-4">
    <a href="___TWIG0___" class="text-sm text-gray-600 hover:text-gray-900">
        Forum
    </a>
    ___TWIG1___
        <a href="___TWIG2___" class="text-sm text-gray-600 hover:text-gray-900">
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
    ___TWIG3___
        <a href="___TWIG4___" class="text-sm text-gray-600 hover:text-gray-900">
            Sign in
        </a>
    ___TWIG5___
</div>
```

The "Forum" link is outside the `{% if user %}` block so it appears for both guests and logged-in users.

## [#](#next-steps) Next Steps

Continue to [Forum Pages](docs__user-guide__forum__forum-pages.md) to create the forum index and channel pages.

← [Password Reset](docs__user-guide__forum__password-reset.md)[Forum Pages](docs__user-guide__forum__forum-pages.md) →

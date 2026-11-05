# Member Profile - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/forum/member-profile.html

---

# Member Profile

Add member profiles with recent activity and moderation tools.

- [Creating the Member Page](docs__user-guide__forum__member-profile.md#creating-the-member-page)
- [Creating the Preview Partial](docs__user-guide__forum__member-profile.md#creating-the-preview-partial)
- [Creating the Recent Posts Partial](docs__user-guide__forum__member-profile.md#creating-the-recent-posts-partial)
- [Creating the Control Panel Partial](docs__user-guide__forum__member-profile.md#creating-the-control-panel-partial)
- [How Forum Members Work](docs__user-guide__forum__member-profile.md#how-forum-members-work)
- [Try It Out](docs__user-guide__forum__member-profile.md#try-it-out)
- [Summary](docs__user-guide__forum__member-profile.md#summary)
- [Going Further](docs__user-guide__forum__member-profile.md#going-further)

[More...](#)

The member profile page shows a forum member's information, recent posts, and moderation tools. It serves double duty: when you visit your own profile, you see your details; when you visit another member's profile, you see theirs along with actions like reporting or moderating.

## [#](#creating-the-member-page) Creating the Member Page

Create a new page at `pages/forum/member.htm`:

```
title = "Forum Member"
url = "/forum/member/:slug?"
layout = "default"

[forumMember]
slug = "{{ :slug }}"
topicPage = "forum/topic"
channelPage = "forum/channel"
```

```
___TWIG0___
    ___TWIG1___
___TWIG2___

<div class="mb-4">
    <a href="___TWIG3___" class="text-sm text-blue-600 hover:underline">
        &larr; Back to Forum
    </a>
</div>

<div class="flex items-start gap-8">
    <div class="flex-1 min-w-0">
        ___TWIG4___
    </div>

    <div class="w-64 shrink-0">
        <div id="memberControlPanel">
            ___TWIG5___
        </div>
    </div>
</div>
```

The URL uses an optional slug (`:slug?`). When no slug is provided, the component loads the currently logged-in user's profile. When a slug is present, it loads that member's profile. If the member is not found, `{% do abort(404) %}` returns a 404 page.

## [#](#creating-the-preview-partial) Creating the Preview Partial

Create `partials/forum/member/preview.htm` to display the member's information and recent posts:

```
<div class="flex items-center gap-4 mb-6">
    <img
        src="___TWIG0___"
        alt="___TWIG1___"
        class="w-16 h-16 rounded-full"
    />
    <div>
        <h1 class="text-2xl font-bold">
            ___TWIG2___
        </h1>
        <p class="text-sm text-gray-500">
            Member since ___TWIG3___
        </p>
        <div class="flex items-center gap-2 mt-1">
            ___TWIG4___
                <span class="text-xs font-medium text-purple-700 bg-purple-100 px-1.5 py-0.5 rounded">
                    Moderator
                </span>
            ___TWIG5___
            ___TWIG6___
                <span class="text-xs font-medium text-red-700 bg-red-100 px-1.5 py-0.5 rounded">
                    Banned
                </span>
            ___TWIG7___
        </div>
    </div>
</div>

<h2 class="text-lg font-semibold mb-3">
    Recent Posts
</h2>

___TWIG8___
```

## [#](#creating-the-recent-posts-partial) Creating the Recent Posts Partial

Create `partials/forum/member/recentposts.htm` to list the member's recent forum activity:

```
___TWIG0___

___TWIG1___
    <div class="bg-white border border-gray-200 rounded-lg divide-y divide-gray-200">
        ___TWIG2___
            <div class="p-4">
                <div class="text-sm text-gray-500 mb-1">
                    Posted in
                    <a href="___TWIG3___" class="text-blue-600 hover:underline">
                        ___TWIG4___
                    </a>
                    <span class="mx-1">&middot;</span>
                    ___TWIG5___
                </div>
                <div class="text-sm text-gray-700">
                    ___TWIG6___
                </div>
            </div>
        ___TWIG7___
    </div>
___TWIG8___
    <p class="text-gray-500">
        This member has not posted in the forum yet.
    </p>
___TWIG9___
```

The `forumMember.getRecentPosts()` method returns the last 10 posts by this member, each with its topic URL already set.

## [#](#creating-the-control-panel-partial) Creating the Control Panel Partial

Create `partials/forum/member/controlpanel.htm` for the sidebar actions:

```
<div class="bg-white border border-gray-200 rounded-lg divide-y divide-gray-200">
    <div class="px-4 py-3 text-sm text-gray-500">
        ___TWIG0___ posts
    </div>

    ___TWIG1___
        ___TWIG2___
            <div class="px-4 py-3">
                <p class="text-xs font-semibold text-gray-400 uppercase mb-2">
                    Moderation
                </p>
                <div class="space-y-2">
                    <a
                        href="javascript:;"
                        data-request="onApprove"
                        data-request-update="{ 'forum/member/controlpanel': '#memberControlPanel' }"
                        class="block text-sm text-gray-700 hover:text-blue-600"
                    >
                        ___TWIG3___
                            Approve member
                        ___TWIG4___
                            Unapprove member
                        ___TWIG5___
                    </a>
                    <a
                        href="javascript:;"
                        data-request="onBan"
                        data-request-update="{ 'forum/member/controlpanel': '#memberControlPanel' }"
                        class="block text-sm text-gray-700 hover:text-blue-600"
                    >
                        ___TWIG6___
                            Unban member
                        ___TWIG7___
                            Ban member
                        ___TWIG8___
                    </a>
                    <a
                        href="javascript:;"
                        data-request="onPurgePosts"
                        data-request-confirm="Are you sure? This will delete all posts by this member."
                        class="block text-sm text-red-600 hover:underline"
                    >
                        Purge posts
                    </a>
                </div>
            </div>
        ___TWIG9___
            <a
                href="javascript:;"
                data-request="onReport"
                data-request-confirm="Are you sure you want to flag this member as a spammer?"
                class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50"
            >
                Report spammer
            </a>
        ___TWIG10___
    ___TWIG11___
</div>
```

The sidebar shows different actions depending on who is viewing:

- **All logged-in users**: can report spammers. The `onReport` handler flags the member and reloads the page
- **Moderators** (`otherMember.is_moderator`): can approve/unapprove, ban/unban, and purge all posts by the member

The approve and ban buttons refresh the sidebar via `data-request-update` to reflect the updated state.

The component also provides an `onPoke` handler for sending a friendly notification to a member. It requires the RainLab.UserPlus plugin, so it is not included in this tutorial.

## [#](#how-forum-members-work) How Forum Members Work

When a user first posts in the forum, a Member record is automatically created with a username derived from their name. The member profile tracks their post count and recent activity.

The component injects two member variables:

- `member`: the profile being viewed (loaded from the URL slug, or the current user when no slug is given)
- `otherMember`: the logged-in user who is viewing the page (used for permission checks)

This separation allows the template to check whether the viewer has moderation rights over the member being viewed.

## [#](#try-it-out) Try It Out

1. Navigate to `/forum/member` (no slug) to see your own profile
2. Create some topics and replies, then check that they appear under "Recent Posts"
3. Click a username on any forum post to visit that member's profile
4. Mark a user as a moderator in the backend (**Users** section, click the user, **Forum** tab, check **Forum moderator**) and test the approve, ban, and purge actions

## [#](#summary) Summary

You now have a complete forum built with October CMS plugins:

1. **User Authentication**: login, registration, and password reset pages powered by the RainLab.User plugin
2. **Forum Index and Channels**: a channel listing and channel detail page that organize discussions
3. **Topics and Posts**: topic creation, threaded replies, inline editing, and Markdown support
4. **Member Profiles**: member information, recent post history, and moderation tools
5. **Moderation**: lock, sticky, move, ban, approve, and purge actions for moderators

All of this was built using the data and handlers provided by the plugins. You wrote all the markup yourself, directly in your pages and partials, using the variables and AJAX handlers that the components inject.

## [#](#going-further) Going Further

Here are some ways to extend your forum:

- **Account Management**: add a page with the `account` component from RainLab.User for profile editing, password changes, and avatar uploads
- **RSS Feed**: add a page with the `forumRssFeed` component for topic subscriptions
- **Embedded Discussions**: use the `forumEmbedTopic` component to add comment threads to blog posts or any page
- **Email Notifications**: the forum sends reply notifications automatically when members follow topics. Configure your mail settings in **Settings > Mail Configuration**.

← [Topic Page](docs__user-guide__forum__topic-page.md)

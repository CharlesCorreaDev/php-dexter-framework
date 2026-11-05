# Forum Pages - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/forum/forum-pages.html

---

# Forum Pages

Create the forum index and channel pages to browse discussions.

- [Creating the Forum Index Page](docs__user-guide__forum__forum-pages.md#creating-the-forum-index-page)
- [How Component Properties Work](docs__user-guide__forum__forum-pages.md#how-component-properties-work)
- [Creating the Channel Page](docs__user-guide__forum__forum-pages.md#creating-the-channel-page)
- [Try It Out](docs__user-guide__forum__forum-pages.md#try-it-out)
- [Next Steps](docs__user-guide__forum__forum-pages.md#next-steps)

The forum needs two browsing pages: an index page that lists all channels, and a channel page that shows the topics within a selected channel.

## [#](#creating-the-forum-index-page) Creating the Forum Index Page

Create a new page at `pages/forum/index.htm`:

```
title = "Forum"
url = "/forum"
layout = "default"

[forumChannels]
channelPage = "forum/channel"
topicPage = "forum/topic"
memberPage = "forum/member"
```

```
<h1 class="text-2xl font-bold mb-6">
    Forum
</h1>

___TWIG0___
    <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">
            ___TWIG1___
        </h2>

        ___TWIG2___
            <div class="bg-white rounded-lg border border-gray-200 divide-y divide-gray-200">
                ___TWIG3___
                    <div class="p-4 flex items-start justify-between">
                        <div>
                            <a href="___TWIG4___" class="font-medium text-blue-600 hover:underline">
                                ___TWIG5___
                            </a>
                            ___TWIG6___
                                <p class="text-sm text-gray-500 mt-1">
                                    ___TWIG7___
                                </p>
                            ___TWIG8___
                        </div>
                        <div class="text-right text-sm text-gray-500 shrink-0 ml-4">
                            <span>___TWIG9___ topics</span>
                            <span class="mx-1">&middot;</span>
                            <span>___TWIG10___ posts</span>
                        </div>
                    </div>
                ___TWIG11___
            </div>
        ___TWIG12___
            <p class="text-gray-500">
                No channels available.
            </p>
        ___TWIG13___
    </div>
___TWIG14___
```

## [#](#how-component-properties-work) How Component Properties Work

The `channelPage`, `topicPage`, and `memberPage` properties tell the `forumChannels` component which CMS pages to generate URLs for. When the component runs, it calls `setUrl()` on each channel, topic, and member object, making the `.url` property available in your markup.

For example, `channelPage = "forum/channel"` means that `channel.url` will point to your `pages/forum/channel.htm` page with the channel's slug filled in.

## [#](#creating-the-channel-page) Creating the Channel Page

Create a new page at `pages/forum/channel.htm`:

```
title = "Forum Channel"
url = "/forum/channel/:slug"
layout = "default"

[forumChannel]
slug = "{{ :slug }}"
topicPage = "forum/topic"
memberPage = "forum/member"
```

```
<div class="mb-4">
    <a href="___TWIG0___" class="text-sm text-blue-600 hover:underline">
        &larr; Back to Forum
    </a>
</div>

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">
        ___TWIG1___
    </h1>
    ___TWIG2___
        <a
            href="___TWIG3___?channel=___TWIG4___"
            class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700"
        >
            New Topic
        </a>
    ___TWIG5___
</div>

___TWIG6___
    <p class="text-gray-600 mb-6">
        ___TWIG7___
    </p>
___TWIG8___

___TWIG9___
    <div class="bg-white rounded-lg border border-gray-200 divide-y divide-gray-200">
        ___TWIG10___
            <div class="p-4 flex items-start justify-between">
                <div>
                    <div class="flex items-center gap-2">
                        ___TWIG11___
                            <span class="text-xs font-medium text-amber-700 bg-amber-100 px-1.5 py-0.5 rounded">
                                Sticky
                            </span>
                        ___TWIG12___
                        ___TWIG13___
                            <span class="text-xs font-medium text-red-700 bg-red-100 px-1.5 py-0.5 rounded">
                                Locked
                            </span>
                        ___TWIG14___
                        <a href="___TWIG15___" class="font-medium text-gray-900 hover:text-blue-600">
                            ___TWIG16___
                        </a>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">
                        by <a href="___TWIG17___" class="hover:underline">___TWIG18___</a>
                    </p>
                </div>
                <div class="text-right text-sm text-gray-500 shrink-0 ml-4">
                    <div>___TWIG19___ replies</div>
                    <div>___TWIG20___ views</div>
                </div>
            </div>
        ___TWIG21___
    </div>
___TWIG22___
    <p class="text-gray-500">
        There are no topics in this channel yet.
        ___TWIG23___
            <a href="___TWIG24___?channel=___TWIG25___" class="text-blue-600 hover:underline">
                Start a discussion
            </a>
        ___TWIG26___
    </p>
___TWIG27___
```

The `slug = "{{ :slug }}"` property binds the URL parameter `:slug` to the component, which uses it to load the correct channel. The component injects the `channel` and `topics` variables into the page.

## [#](#try-it-out) Try It Out

1. Preview your site and navigate to `/forum`
2. You should see the channels you created in the backend
3. Click a channel to see its topic list (empty for now)
4. The "New Topic" button links to the topic page (which you will create next)

## [#](#next-steps) Next Steps

Continue to [Topic Page](docs__user-guide__forum__topic-page.md) to build the page where users create topics and post replies.

← [Installing the Forum Plugin](docs__user-guide__forum__installing-the-forum-plugin.md)[Topic Page](docs__user-guide__forum__topic-page.md) →

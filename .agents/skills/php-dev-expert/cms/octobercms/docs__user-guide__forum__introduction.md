# Creating a Forum - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/forum/introduction.html

---

# Creating a Forum

Build a community forum with October CMS using the RainLab Forum and User plugins.

- [What You Will Build](docs__user-guide__forum__introduction.md#what-you-will-build)
- [Plugins vs Tailor](docs__user-guide__forum__introduction.md#plugins-vs-tailor)
- [Prerequisites](docs__user-guide__forum__introduction.md#prerequisites)
- [Overview](docs__user-guide__forum__introduction.md#overview)
- [Next Steps](docs__user-guide__forum__introduction.md#next-steps)

In this tutorial, you will build a community forum using October CMS plugins. By the end, you will have user registration and login, discussion channels, topics with replies, and member profiles, all powered by plugins with no custom PHP.

## [#](#what-you-will-build) What You Will Build

You will create a forum powered by two plugins: RainLab.User for authentication and RainLab.Forum for discussions. The finished forum includes:

- **User registration and login** with password reset
- **Discussion channels** for organizing topics by category
- **Topics and posts** where members can start discussions and reply
- **Member profiles** showing activity and post history
- **Moderation tools** for managing content and members

## [#](#plugins-vs-tailor) Plugins vs Tailor

In the [blog tutorial](docs__user-guide__blog__introduction.md), you defined content with YAML blueprints and wrote all the Twig markup yourself. Tailor gives you complete control over the data structure, but you build everything from scratch.

Plugins take a different approach. They are installable packages that bring their own database tables, backend management pages, and frontend components. You install them, configure their settings, and write your own templates to display the data they provide.

## [#](#prerequisites) Prerequisites

Before starting, you should have:

- October CMS installed and running
- A theme with a default layout that includes Tailwind CSS

If you haven't done this yet, work through the [Quick Start guide](docs__user-guide__quickstart__editor__creating-a-layout.md) first. This tutorial assumes you have a working layout similar to the one created there.

## [#](#overview) Overview

This tutorial is split into two parts:

**Part 1: User Authentication**

1. [Installing the User Plugin](docs__user-guide__forum__installing-the-user-plugin.md): install RainLab.User and configure your layout
2. [Login and Registration](docs__user-guide__forum__login-and-registration.md): create login and registration pages
3. [Password Reset](docs__user-guide__forum__password-reset.md): add a password reset flow

**Part 2: The Forum**

4. [Installing the Forum Plugin](docs__user-guide__forum__installing-the-forum-plugin.md): install RainLab.Forum and create channels
5. [Forum Pages](docs__user-guide__forum__forum-pages.md): build the forum index and channel pages
6. [Topic Page](docs__user-guide__forum__topic-page.md): create topics, post replies, and moderate discussions
7. [Member Profile](docs__user-guide__forum__member-profile.md): add member profiles with activity and moderation tools

Part 1 covers user authentication as a self-contained guide. Future tutorials that need user accounts will reference these pages. Part 2 builds on Part 1 to create the forum itself.

## [#](#next-steps) Next Steps

Continue to [Installing the User Plugin](docs__user-guide__forum__installing-the-user-plugin.md) to get started with user authentication.

[Installing the User Plugin](docs__user-guide__forum__installing-the-user-plugin.md) →

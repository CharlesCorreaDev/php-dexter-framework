# Creating a Blog - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/introduction.html

---

# Creating a Blog

Build a fully-featured blog with October CMS using Tailor and the CMS theme engine.

- [What You Will Build](docs__user-guide__blog__introduction.md#what-you-will-build)
- [Prerequisites](docs__user-guide__blog__introduction.md#prerequisites)
- [Overview](docs__user-guide__blog__introduction.md#overview)
- [Next Steps](docs__user-guide__blog__introduction.md#next-steps)

In this tutorial, you will build a complete blog from scratch using October CMS. By the end, you will have a working blog with a listing page, individual post pages, categories, tags, and an RSS feed, all without writing a single plugin.

## [#](#what-you-will-build) What You Will Build

You will create a blog powered entirely by Tailor blueprints and CMS pages. The finished blog includes:

- A **listing page** that displays posts with featured images, excerpts, and pagination
- **Detail pages** for each post, accessed by slug, with full content and tags
- **Category filtering** so visitors can browse posts by topic
- **Tag filtering** so readers can find related content
- An **RSS feed** so readers can subscribe

No PHP code, no plugins. Just YAML blueprints for the content structure and Twig templates for the frontend.

## [#](#prerequisites) Prerequisites

Before starting, you should have:

- October CMS installed and running
- A theme with a default layout that includes Tailwind CSS

If you haven't done this yet, work through the [Quick Start guide](docs__user-guide__quickstart__editor__creating-a-layout.md) first. This tutorial assumes you have a working layout similar to the one created there.

## [#](#overview) Overview

This tutorial is split into six steps:

1. [Blog Blueprint](docs__user-guide__blog__blog-blueprint.md): define the content structure for posts, categories, and tags
2. [Listing Page](docs__user-guide__blog__listing-page.md): display posts with pagination
3. [Detail Page](docs__user-guide__blog__detail-page.md): show a single post by its slug
4. [Categories](docs__user-guide__blog__categories.md): filter posts by category
5. [Tags](docs__user-guide__blog__tags.md): add a tag cloud with post counts
6. [RSS Feed](docs__user-guide__blog__rss-feed.md): add a subscription feed

Each step builds on the previous one. By the end, you will have a fully functional blog managed entirely through the backend.

## [#](#next-steps) Next Steps

Continue to [Blog Blueprint](docs__user-guide__blog__blog-blueprint.md) to define the content structure for your blog posts.

[Blog Blueprint](docs__user-guide__blog__blog-blueprint.md) →

# Comparing Patterns, Template Parts, and Synced Patterns (Reusable Blocks) – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/comparing-patterns-template-parts-and-reusable-blocks/

---

# Comparing Patterns, Template Parts, and Synced Patterns (Reusable Blocks)

## In this article

Table of Contents

- [Overview](#overview)
  - [Template Part](#template-part)
  - [Synced pattern (Reusable block)](#synced-pattern-reusable-block)
  - [Block Patterns](#block-patterns)
- [Guidelines](#guidelines)
- [Situationals](#situationals)
  - [Repeated content across your site](#repeated-content-across-your-site)
  - [Repeated structure across your site](#repeated-structure-across-your-site)
  - [Repeated design or layout](#repeated-design-or-layout)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

## [Overview](#overview)

With more types of reusable content you can create with WordPress, this article seeks to clarify when it makes sense to use certain types in different situations to help guide you to make the best decisions possible. At a high level, this will focus on Template Part blocks, Block Patterns, and Synced Patterns (Reusable Blocks).

WordPress 6.3 renamed Reusable Blocks to Patterns. A synced pattern will behave in exactly the same way as a reusable block.

### [Template Part](#template-part)

The Template Part block is an advanced block that can be used with a block theme or a theme that supports [template editing](https://wordpress.org/themes/tags/template-editing/). They often come with your theme and are used to organize and display your site structure. For more information, you can learn more in the [Template Part block support article](article__template-part-block.md).

### [Synced pattern (Reusable block)](#synced-pattern-reusable-block)

Synced pattern is a kind of block pattern that enabled Synced option, and it will behave in exactly the same way as a reusable block. Editing the synced pattern will update it anywhere it is used. After creating a synced pattern, you can ‘Detach’ it to a regular block, and edit the block without affecting your already saved synced pattern. For more information, you can learn more in the [Synced Pattern article](article__reusable-blocks.md).

### [Block Patterns](#block-patterns)

Block Patterns are a collection of predefined blocks that you can insert into posts and pages and then customize with your own content. For more information, you can learn more in the [Block Pattern support article](article__block-pattern.md).

Here’s a table comparing these different options to each other:

|  |  |  |  |
| --- | --- | --- | --- |
|  | **Template Part** | **Synced Patterns**  **(Reusable Block)** | **Patterns** |
| Type | Site Structure | User Content | User Content |
| Syncing Ability | Synced | Synced | Un-synced |
| Example | Footer | Business hours | Call to action |

Site structure means it should not be a part of your content, like a post or page. Syncing ability touches on whether if you update it in one spot, it updates everywhere the same block is used.

## [Guidelines](#guidelines)

Based on the above, this means it’s best to use template parts and Synced pattern for things you want to have in sync with each other whereas patterns are best for content that you expect to change across your site.

In general, template parts should not be added to a Synced pattern or a regular pattern since this is meant to represent site structure rather than content. A template part can include a Synced pattern though or be built using patterns! You can also use block patterns to build templates and template parts, but you should not use a template part inside a pattern.

## [Situationals](#situationals)

### [Repeated content across your site](#repeated-content-across-your-site)

This could be everything from how to get in touch to your business hours to your social media accounts. To avoid having to add the same content to a paragraph block every time you want to place it at the end of your post, you can make it a Synced pattern.

### [Repeated structure across your site](#repeated-structure-across-your-site)

For anything that’s more about site structure that’s repeated across your site, like a Header or Footer, it’s best to use a template part. These are intended for structural elements in a block theme, so it’s important to distinguish them from patterns.

### [Repeated design or layout](#repeated-design-or-layout)

When it’s less about content and more about wanting to repeat a design or layout, patterns are best to use. This is because the content doesn’t need to be synced and, instead, what you want repeated is how something visually looks.

## [Changelog](#changelog)

- Updated 2023-08-08
  - WP 6.3 introduced custom patterns, and Reusable Block was renamed to Synced Pattern.

## Was this article helpful? How could it be improved? [Cancel reply](article__comparing-patterns-template-parts-and-reusable-blocks.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fcomparing-patterns-template-parts-and-reusable-blocks%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

January 25, 2022

Last updated

June 26, 2026

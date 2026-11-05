# Introduction to Tailor - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/content-management/tailor-introduction.html

---

# Introduction to Tailor

How Tailor uses YAML blueprints to build your content management system

- [Blueprints and Entries](docs__user-guide__quickstart__content-management__tailor-introduction.md#blueprints-and-entries)
- [Where Blueprints Live](docs__user-guide__quickstart__content-management__tailor-introduction.md#where-blueprints-live)
- [Anatomy of a Blueprint](docs__user-guide__quickstart__content-management__tailor-introduction.md#anatomy-of-a-blueprint)
- [Blueprint Types](docs__user-guide__quickstart__content-management__tailor-introduction.md#blueprint-types)
- [Next Steps](docs__user-guide__quickstart__content-management__tailor-introduction.md#next-steps)

Tailor is October CMS's built-in content management system. It lets you define custom content types (team members, products, events, anything) using simple YAML files called **blueprints**. Once you create a blueprint, Tailor automatically generates the backend forms, list views, and database tables for you. No PHP code, no manual database setup.

## [#](#blueprints-and-entries) Blueprints and Entries

The two core concepts are:

- **Blueprints** define the *structure*: what fields each piece of content has, how it appears in the backend, and what type of content it is.
- **Entries** are the actual content records you create. Each entry follows the structure defined by its blueprint.

Think of a blueprint as a mold and entries as the things you make with it. A "Team Member" blueprint defines what a team member looks like (name, photo, email), and each person you add is an entry.

## [#](#where-blueprints-live) Where Blueprints Live

Blueprints can live in two places:

- **In the app** (`app/blueprints/`): These are globally available regardless of which theme is active. Use this for content that should persist across theme changes.
- **In the theme** (`themes/mytheme/blueprints/`): These only appear when that theme is selected. Use this for content that is specific to a theme's design.

For this tutorial, we will create blueprints in the theme so they stay bundled with everything else we have built.

## [#](#anatomy-of-a-blueprint) Anatomy of a Blueprint

Every blueprint file has a few key properties:

```
handle: Team\Member
type: entry
name: Team Member
```

- **`handle`**: A human-readable name that follows PHP namespace syntax (e.g., `Team\Member`, `Site\Settings`). You use this handle to reference the blueprint in your templates.
- **`type`**: The kind of content: `entry`, `global`, `single`, `structure`, `stream`, or `mixin`.
- **`name`**: The display name shown in the backend.

Each blueprint also gets a **UUID** automatically, a unique identifier that determines the database table name. You do not need to set this yourself.

Because blueprints are identified by handle, they are totally portable. You can move them into any folder or subdirectory and they will continue to work.

## [#](#blueprint-types) Blueprint Types

| Type | Purpose | Example |
| --- | --- | --- |
| `entry` | A collection of items | Blog posts, team members, products |
| `global` | A single record for site-wide settings | Footer text, social links, display options |
| `single` | A one-off page with custom fields | About page, contact page |
| `structure` | Entries with parent-child nesting | Documentation sections, FAQ categories |
| `stream` | Time-ordered entries | News feed, changelog, activity log |
| `mixin` | Reusable field definitions | SEO fields shared across blueprints |

We will use **entry** and **global** in this tutorial.

## [#](#next-steps) Next Steps

Now that you understand what Tailor is, let's build something. Continue to [Creating Blueprints](docs__user-guide__quickstart__content-management__creating-blueprints.md) to define a Team Members content type and a settings global.

For the full technical reference, see [Tailor Introduction](docs__4.x__cms__tailor__introduction.md) in the developer documentation.

← [Media Manager](docs__user-guide__quickstart__editor__media-manager.md)[Creating Blueprints](docs__user-guide__quickstart__content-management__creating-blueprints.md) →

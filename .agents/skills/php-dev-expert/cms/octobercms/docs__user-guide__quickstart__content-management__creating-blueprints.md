# Creating Blueprints - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/content-management/creating-blueprints.html

---

# Creating Blueprints

Define a Team Members content type and a settings global

- [Create the Team Member Blueprint](docs__user-guide__quickstart__content-management__creating-blueprints.md#create-the-team-member-blueprint)
- [Create the Team Settings Global](docs__user-guide__quickstart__content-management__creating-blueprints.md#create-the-team-settings-global)
- [Run the Migration](docs__user-guide__quickstart__content-management__creating-blueprints.md#run-the-migration)
- [Verify in the Backend](docs__user-guide__quickstart__content-management__creating-blueprints.md#verify-in-the-backend)
- [Next Steps](docs__user-guide__quickstart__content-management__creating-blueprints.md#next-steps)

Let's create two blueprints: an **entry** blueprint for team members and a **global** blueprint for team page settings. Together, they will give us a complete content type with a backend form and configurable display options.

## [#](#create-the-team-member-blueprint) Create the Team Member Blueprint

1. In your theme's directory, create a `blueprints` folder if it doesn't exist.
2. Create a new file at `themes/mytheme/blueprints/team/member.yaml`.
3. Paste the following:

```
handle: Team\Member
type: entry
name: Team Member

fields:
    role:
        label: Role
        type: text
        span: auto
    email:
        label: Email Address
        type: text
        span: auto
        validation: email
    photo:
        label: Photo
        type: fileupload
        mode: image
        span: auto
    bio:
        label: Bio
        type: textarea
        size: small
        span: full
```

This blueprint defines a team member with a role, email address, photo, and short bio. Tailor automatically adds **title** and **slug** fields to every entry blueprint, so we don't need to define those.

You can organize blueprint files in any folder structure you like, such as `blueprints/team/member.yaml`, `blueprints/member.yaml`, or even `blueprints/my-stuff/team-member.yaml`. Tailor finds them by handle, not by file path.

## [#](#create-the-team-settings-global) Create the Team Settings Global

Now create a global blueprint to control how the team page behaves. Create a new file at `themes/mytheme/blueprints/team/settings.yaml`:

```
handle: Team\Settings
type: global
name: Team Settings

fields:
    page_title:
        label: Page Title
        type: text
        default: Meet the Team
    introduction:
        label: Introduction
        type: textarea
        size: small
    show_photos:
        label: Show Profile Photos
        type: switch
        default: true
        comment: Toggle whether team member photos are displayed on the team page.
    per_page:
        label: Members Per Page
        type: number
        default: 6
        comment: How many team members to show per page before pagination kicks in.
```

This global provides settings we will use when building the frontend: the page title, an intro paragraph, a toggle for profile photos, and a pagination control.

## [#](#run-the-migration) Run the Migration

After creating blueprints, you need to run a migration so Tailor can set up the database tables:

```
php artisan tailor:migrate
```

Or with DDEV:

```
ddev artisan tailor:migrate
```

This reads your blueprint files and creates the necessary database structure. Run this command every time you add or modify a blueprint.

You can also migrate blueprints from the Editor. When editing a blueprint file in the backend, click the **Save & Migrate** button to save your changes and run the migration in one step.

## [#](#verify-in-the-backend) Verify in the Backend

Log into the backend and look at the navigation. You should see new entries for **Team Member** and **Team Settings** under the **Content** menu. Click into each one to see the forms Tailor generated. They match the fields you defined, with no code written.

## [#](#next-steps) Next Steps

Your blueprints are ready. Continue to [Managing Entries](docs__user-guide__quickstart__content-management__managing-entries.md) to add some team members and customize how they appear in the backend.

For the complete blueprint reference, see [Blueprints](docs__4.x__cms__tailor__blueprints.md) in the developer documentation.

← [Introduction to Tailor](docs__user-guide__quickstart__content-management__tailor-introduction.md)[Managing Entries](docs__user-guide__quickstart__content-management__managing-entries.md) →

# Managing Entries - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/content-management/managing-entries.html

---

# Managing Entries

Customize the navigation, add team members, and manage your content

- [Reassign the Navigation](docs__user-guide__quickstart__content-management__managing-entries.md#reassign-the-navigation)
- [Add Your First Team Member](docs__user-guide__quickstart__content-management__managing-entries.md#add-your-first-team-member)
- [Duplicate and Add More Members](docs__user-guide__quickstart__content-management__managing-entries.md#duplicate-and-add-more-members)
- [Configure the Team Settings](docs__user-guide__quickstart__content-management__managing-entries.md#configure-the-team-settings)
- [Next Steps](docs__user-guide__quickstart__content-management__managing-entries.md#next-steps)

Your blueprints are created and the database is set up. Now let's customize how the content type appears in the backend, then add some team members.

## [#](#reassign-the-navigation) Reassign the Navigation

By default, new blueprints appear under the **Content** menu. Let's give Team Members their own top-level navigation item with a custom label and icon.

1. Open your team member blueprint at `themes/mytheme/blueprints/team/member.yaml`.
2. Add a `navigation` section below the `name` field:

```
handle: Team\Member
type: entry
name: Team Member

navigation:
    label: Our Team
    icon: ph ph-users
    order: 200
```

3. Save the file.
4. Refresh the backend. You should now see **Our Team** in the top navigation with a users icon.

October CMS uses the [Font Awesome 4  (opens new window)](https://fontawesome.com/v4/icons/) icon set. Browse the icons to find one that fits your content type. Common choices: `icon-pencil` for blog posts, `icon-calendar` for events, `icon-shopping-cart` for products.

## [#](#add-your-first-team-member) Add Your First Team Member

1. Click **Our Team** in the navigation.
2. Click the **Create** button.
3. Fill in the fields:
   - **Title**: `Ada Lovelace`
   - **Role**: `Lead Engineer`
   - **Email**: `ada@example.com`
   - **Photo**: upload any image (or skip this for now)
   - **Bio**: `Pioneer of computer programming and mathematical genius.`
4. Click **Save**.

Your first team member is created and appears in the list.

## [#](#duplicate-and-add-more-members) Duplicate and Add More Members

Instead of filling out the form from scratch each time, you can duplicate an existing entry.

1. Open **Ada Lovelace** from the list.
2. Click the **Duplicate** button (or find it in the toolbar menu).
3. A copy is created. Update the fields:
   - **Title**: `Grace Hopper`
   - **Role**: `Systems Architect`
   - **Email**: `grace@example.com`
   - **Bio**: `Invented the first compiler and popularized machine-independent programming languages.`
4. Click **Save**.

Repeat to add a few more team members. Here are some suggestions:

- **Alan Turing**: `Research Scientist`, `Laid the foundation for modern computing and artificial intelligence.`
- **Margaret Hamilton**: `Software Director`, `Led the team that wrote the onboard flight software for NASA's Apollo missions.`
- **Linus Torvalds**: `Open Source Lead`, `Created Linux and Git, two pillars of modern software development.`

Add as many or as few as you like. We will use these entries when building the frontend.

## [#](#configure-the-team-settings) Configure the Team Settings

1. Navigate to the **Team Settings** global. You will find it under **Content** in the navigation (or wherever Tailor placed it).
2. Fill in the settings:
   - **Page Title**: `Meet the Team`
   - **Introduction**: `The people behind the project. Each one brings something unique to the table.`
   - **Show Profile Photos**: leave it toggled **on**
   - **Members Per Page**: set to `2` (we are using a small number so you can see pagination in action)
3. Click **Save**.

These settings will control the frontend display when we build the team page in the next article.

## [#](#next-steps) Next Steps

You have team members in the system and settings configured. Continue to [Building the Frontend](docs__user-guide__quickstart__content-management__building-the-frontend.md) to create a team listing page and individual profile pages that display this content.

← [Creating Blueprints](docs__user-guide__quickstart__content-management__creating-blueprints.md)[Building the Frontend](docs__user-guide__quickstart__content-management__building-the-frontend.md) →

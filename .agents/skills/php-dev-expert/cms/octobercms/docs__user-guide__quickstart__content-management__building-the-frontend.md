# Building the Frontend - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/content-management/building-the-frontend.html

---

# Building the Frontend

Display team members on the frontend with collection, section, and global components

- [Create the Team Listing Page](docs__user-guide__quickstart__content-management__building-the-frontend.md#create-the-team-listing-page)
- [What This Does](#what-this-does)
- [Create the Team Profile Page](docs__user-guide__quickstart__content-management__building-the-frontend.md#create-the-team-profile-page)
- [How the URL Works](#how-the-url-works)
- [Add the Team Link to the Layout](docs__user-guide__quickstart__content-management__building-the-frontend.md#add-the-team-link-to-the-layout)
- [Try It Out](docs__user-guide__quickstart__content-management__building-the-frontend.md#try-it-out)
- [Next Steps](docs__user-guide__quickstart__content-management__building-the-frontend.md#next-steps)

[More...](#)

You have team members in the database and settings configured. Now let's build the frontend pages to display them. We will create a team listing page and an individual profile page, both powered by Tailor components.

October CMS provides three components for displaying Tailor content:

- **Collection**: loops through a list of entries (our team members)
- **Section**: displays a single entry by its slug (one team member's profile)
- **Global**: makes global settings available to the page (our team settings)

## [#](#create-the-team-listing-page) Create the Team Listing Page

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Our Team`
   - **URL**: `/team`
   - **File Name**: `team`
   - **Layout**: select `default`
3. Before writing the markup, we need to add components. Click the **Components** panel on the side and add:
   - **Collection**: set its **handle** to `Team\Member`
   - **Global**: set its **handle** to `Team\Settings`
4. In the markup editor, enter:

```
<h1 class="text-3xl font-bold mb-2">___TWIG0___</h1>

___TWIG1___
    <p class="text-lg text-gray-600 mb-8">___TWIG2___</p>
___TWIG3___

___TWIG4___

<div class="grid gap-6 sm:grid-cols-2">
    ___TWIG5___
        <div class="bg-white rounded-lg shadow-sm p-6">
            ___TWIG6___
                <img
                    src="___TWIG7___"
                    alt="___TWIG8___"
                    class="w-24 h-24 rounded-full mb-4"
                >
            ___TWIG9___
            <h2 class="text-xl font-semibold">
                <a href="___TWIG10___" class="hover:text-blue-600">
                    ___TWIG11___
                </a>
            </h2>
            ___TWIG12___
                <p class="text-gray-500">___TWIG13___</p>
            ___TWIG14___
        </div>
    ___TWIG15___
</div>

___TWIG16___
```

5. Click **Save**.

Don't worry about the `team-profile` link showing errors. We haven't created that page yet. We will do that next.

### [#](#what-this-does) What This Does

- **`{{ global.page_title }}`** and **`{{ global.introduction }}`**: pull the title and intro text from our Team Settings global.
- **`collection.paginate(global.per_page)`**: fetches team members with pagination controlled by the `per_page` setting. Since we set it to `2`, you will see 2 members per page.
- **`global.show_photos`**: controls whether profile photos are shown. Toggle this off in the backend and the photos disappear.
- **`{{ pager(members) }}`**: renders pagination links (Previous, Next, page numbers).

## [#](#create-the-team-profile-page) Create the Team Profile Page

1. Go to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Team Profile`
   - **URL**: `/team/:slug`
   - **File Name**: `team-profile`
   - **Layout**: select `default`
3. Add a component:
   - **Section**: set its **handle** to `Team\Member`
4. In the markup editor, enter:

```
___TWIG0___
    ___TWIG1___
___TWIG2___

<div class="max-w-2xl">
    <a href="___TWIG3___" class="text-blue-600 hover:underline mb-6 inline-block">&larr; Back to team</a>

    ___TWIG4___
        <img
            src="___TWIG5___"
            alt="___TWIG6___"
            class="w-32 h-32 rounded-full mb-6"
        >
    ___TWIG7___

    <h1 class="text-3xl font-bold mb-2">___TWIG8___</h1>

    ___TWIG9___
        <p class="text-lg text-gray-500 mb-4">___TWIG10___</p>
    ___TWIG11___

    ___TWIG12___
        <p class="mb-4">
            <a href="mailto:___TWIG13___" class="text-blue-600 hover:underline">___TWIG14___</a>
        </p>
    ___TWIG15___

    ___TWIG16___
        <div class="prose mt-6">
            <p>___TWIG17___</p>
        </div>
    ___TWIG18___
</div>
```

5. Click **Save**.

### [#](#how-the-url-works) How the URL Works

The `:slug` in the URL (`/team/:slug`) is a parameter. When someone visits `/team/ada-lovelace`, the section component looks up the team member with that slug and makes it available as `section`. If no match is found, the `{% do abort(404) %}` returns a 404 page.

## [#](#add-the-team-link-to-the-layout) Add the Team Link to the Layout

Let's add a link to the team page in our navigation.

1. Open **Editor → Layouts → default**.
2. Add a team link to the navigation:

```
<a href="___TWIG0___" class="text-gray-600 hover:text-gray-900">Home</a>
<a href="___TWIG1___" class="text-gray-600 hover:text-gray-900">About</a>
<a href="___TWIG2___" class="text-gray-600 hover:text-gray-900">Team</a>
```

3. Click **Save**.

## [#](#try-it-out) Try It Out

1. Preview your site and click the **Team** link in the navigation.
2. You should see the team listing page with the title and introduction from your global settings, and your team members displayed in a grid.
3. Since you set **Members Per Page** to `2`, you will see pagination at the bottom. Click through the pages.
4. Click on a team member's name to see their profile page.
5. Go back to the backend and toggle **Show Profile Photos** off in Team Settings. Refresh the frontend and the photos disappear.
6. Change **Members Per Page** to `10` and all members now appear on one page with no pagination.

This is the power of Tailor: the content, the structure, and the display settings are all managed through the backend without touching any code.

## [#](#next-steps) Next Steps

You have built a complete content-driven section of your site, from blueprints to backend management to frontend display. The Content Management section is complete.

Continue to [Meet the AJAX Framework](docs__user-guide__quickstart__interactive-features__ajax-introduction.md) to add interactive features like forms and dynamic page updates.

For the full reference on Tailor components, see [Collection](docs__4.x__cms__components__collection.md), [Section](docs__4.x__cms__components__section.md), and [Global](docs__4.x__cms__components__global.md) in the developer documentation.

← [Managing Entries](docs__user-guide__quickstart__content-management__managing-entries.md)[Meet the AJAX Framework](docs__user-guide__quickstart__interactive-features__ajax-introduction.md) →

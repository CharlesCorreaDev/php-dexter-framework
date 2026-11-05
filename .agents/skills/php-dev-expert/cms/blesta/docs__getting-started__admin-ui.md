# Admin UI Tour | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/getting-started/admin-ui

---

Version: 6

On this page

Blesta 6.0's admin UI is built on Bootstrap 5 and introduces several navigation surfaces that weren't present in 5.x. This page is an orientation for staff who are new to v6, or for 5.x users coming over.

- [At a glance](#at-a-glance)
- [Top bar](#top-bar)
- [Icon Bar](#icon-bar)
  - [Customizing your Icon Bar](#customizing-your-icon-bar)
- [Sidebar (context-aware)](#sidebar-context-aware)
- [Settings navigation](#settings-navigation)
  - [Filtering extension listings](#filtering-extension-listings)

## At a glance[â](#at-a-glance "Direct link to At a glance")

The 6.0 admin shell has four navigation surfaces:

| Surface | Where | What it's for |
| --- | --- | --- |
| **Top bar** | Across the top of every page | Logo, search, Pinned Notes, Quick Jump, notifications, user menu |
| **Icon Bar** | Vertical strip on the left | One-click access to the screens you visit most |
| **Sidebar** | Right of the Icon Bar (context-aware) | Page-specific navigation when relevant |
| **Settings navigation** | Inside Settings only | Two-pane settings tree with search and Company/System toggle |

## Top bar[â](#top-bar "Direct link to Top bar")

The top bar carries the global search and most cross-cutting controls.

- **Logo** â branded by your Look and Feel configuration (separate light/dark variants in 6.0 â see [Customizing the Layout](docs__getting-started__customizing-the-layout.md)). On narrow screens, the logo collapses to the icon-only variant.
- **Search bar** with `Ctrl + K` keyboard shortcut. The icon to the left of the search box opens a dropdown to pick what you're searching: smart search, clients, invoices, services, etc.
- **Pinned Notes** icon â appears on client-related pages when the client has sticky notes. The number badge shows the note count. Click to view the notes inline without leaving the current page.
- **Quick Jump** icon â when enabled, opens a dropdown to jump to a recently viewed client or other entity without going through the full search flow.
- **Notifications** bell â shows the unread notification count. Click to see recent notifications and mark them as read. See [Notifications](docs__getting-started__notifications.md).
- **User menu** (your name in the top right) â links to My Info, Notifications preferences, Icon Bar customization, and Log Out.

## Icon Bar[â](#icon-bar "Direct link to Icon Bar")

The Icon Bar is the vertical strip on the left side of every admin page. It's split into two regions:

- **Top region** â icons for major sections like Clients, Billing, Packages, Tools, etc. These appear in the order you configure.
- **Bottom region** â Settings (gear), the AI Chatbot icon (when enabled), and any custom icons you've added.

Hovering an icon shows its label; clicking opens that section. The current section's icon is highlighted.

### Customizing your Icon Bar[â](#customizing-your-icon-bar "Direct link to Customizing your Icon Bar")

Each staff member has their own Icon Bar configuration. To customize yours:

1. Click your name in the top-right, then **My Info > Icon Bar** (or the Icon Bar entry in the user menu).
2. **Drag** icons up and down to reorder them.
3. **Check** or **uncheck** icons to enable or disable them.
4. Click the **edit** button on an existing icon to change its icon (Bootstrap Icons class) or destination URL.
5. Click **Create Custom Icon** to add a new icon. Fill in Name, URL, and a Bootstrap Icons class (e.g. `bi-grid`, `bi-people`, `bi-calendar-event`). Use **Browse icons** in the dialog if you need to look up a class name.
6. Click **Save Changes** to persist your layout.

To start over, click **Reset to Default** and confirm. The Show Chatbot Icon checkbox controls whether the AI chatbot icon appears in your Icon Bar regardless of the company-level chatbot configuration â uncheck it if you have access but don't use the feature.

## Sidebar (context-aware)[â](#sidebar-context-aware "Direct link to Sidebar (context-aware)")

The sidebar to the right of the Icon Bar shows page-specific navigation when relevant. For example, on a client profile page it shows sections for Services, Invoices, Transactions, etc. The sidebar collapses on narrow screens.

There's nothing to configure here â it changes based on the page you're viewing.

## Settings navigation[â](#settings-navigation "Direct link to Settings navigation")

Settings has its own two-pane layout, redesigned in 6.0:

- **Search box** at the top â filter the settings tree by keyword. Matches against both the displayed setting name and the underlying metadata (`data-search-keywords`, `data-search-description`) â so searching for "tax" finds settings related to taxation even when the heading uses a different word.
- **Company / System toggle** â switch between Company settings (per-company configuration like emails, gateways, modules) and System settings (installation-wide configuration like staff, AI, license).
- **Icon-labelled settings list** â every entry has a Bootstrap Icon for faster visual scanning. Group headers cluster related settings together.

Within a settings page itself, the previously-active link remains highlighted as you drill into secondary views (e.g. an Add or Edit form) so you can find your way back without retracing.

### Filtering extension listings[â](#filtering-extension-listings "Direct link to Filtering extension listings")

The Gateways, Modules, and Plugins list pages under Settings each have a **filter** field at the top of the listing (placeholder: *"Filter plugins..."*, *"Filter gateways..."*, etc.). Type to narrow the list as you go â useful when you have many installed extensions and want to find one quickly. If your filter matches nothing, the listing shows a *"No matching items found"* message.

The per-row column previously labelled **Options** is now labelled **Actions** for consistency with the rest of the admin UI. The buttons it contains (Manage, Uninstall, etc.) are unchanged.

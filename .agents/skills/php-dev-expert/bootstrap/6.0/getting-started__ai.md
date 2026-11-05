# Using Bootstrap with AI · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/getting-started/ai

---

# Using Bootstrap with AI

Learn about Bootstrap’s machine-readable docs and skills files for working with LLMs and agentic developer tools.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/getting-started/ai)

On this page…

##### On this page

Bootstrap ships resources built for large language models and AI-powered coding tools: machine-readable documentation you can feed to an LLM, and a set of agent skills that walk agents through common Bootstrap tasks step by step.

## LLM-ready docs

Our docs are available in a machine-readable format, following the [llms.txt](https://llmstxt.org/) convention.

| File | Description | Link |
| --- | --- | --- |
| `llms.txt` | A curated index of every documentation page with links and descriptions. | [/llms.txt](https://getbootstrap.com/llms.txt) |
| `llms-full.txt` | The full text of the documentation concatenated into a single file for direct ingestion. | [/llms-full.txt](https://getbootstrap.com/llms-full.txt) |

## Skills

Install every Bootstrap skill into your coding agent:

Shell

```
          npx skills add twbs/bootstrap
```

The Skills CLI copies each `SKILL.md` from our repository into your agent. [skills.sh](https://skills.sh) lists the package after people run that command. There is no submit form.

Bootstrap also ships the same [agent skills](https://github.com/twbs/bootstrap/tree/main/skills) in the `skills/` directory of our repository. Each skill is a focused, step-by-step playbook for one Bootstrap task, from migrating a project or setting up a new build to authoring a component and customizing our color system.

To use one without the CLI, point your agent at the relevant `SKILL.md` file and describe what you want to do. The skill’s `description` field tells the agent when it applies, and its steps keep the agent aligned with our official guidance. Always review an agent’s changes against the matching documentation.

| Skill | Description | Guide |
| --- | --- | --- |
| [`bootstrap-v4-v6-migration`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-v4-v6-migration) | Migrate a project from Bootstrap 4 to Bootstrap 6. Use when upgrading from Bootstrap 4, jumping two major versions, or updating v4 class names, data attributes, forms, and JavaScript across the v4-to-v5 and v5-to-v6 steps. | [Migration](guides__migration.md) |
| [`bootstrap-v5-v6-migration`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-v5-v6-migration) | Migrate projects from Bootstrap 5 to Bootstrap 6. Use when upgrading from Bootstrap 5, migrating v5 to v6, or updating v5 class names, components, Sass, or JavaScript to the latest version. For Bootstrap 4 projects, start with the v4-to-v6 migration skill instead. | [Migration](guides__migration.md) |
| [`bootstrap-v6-install`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-v6-install) | Add Bootstrap 6 to a project and set it up for local development. Use when installing Bootstrap, adding Bootstrap to a new or existing project, or setting up Bootstrap's CSS and JavaScript via CDN or a package manager. | [Install Bootstrap](getting-started__install.md) |
| [`bootstrap-npm`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-npm) | Build a Bootstrap 6 starter project using just npm and command-line tools (no bundler). Use when setting up Bootstrap with npm, compiling Bootstrap's Sass to CSS from the command line, or creating an npm-based Bootstrap project. | [Bootstrap and npm](guides__npm.md) |
| [`bootstrap-webpack`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-webpack) | Include and bundle Bootstrap 6's CSS and JavaScript in a project using Webpack. Use when setting up Bootstrap with Webpack, configuring Webpack loaders for Bootstrap's Sass and JS, or creating a Webpack-based Bootstrap project. | [Bootstrap and Webpack](guides__webpack.md) |
| [`bootstrap-parcel`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-parcel) | Include and bundle Bootstrap 6's CSS and JavaScript in a project using Parcel. Use when setting up Bootstrap with Parcel, bundling Bootstrap's Sass and JS through Parcel, or creating a Parcel-based Bootstrap project. | [Bootstrap and Parcel](guides__parcel.md) |
| [`bootstrap-vite`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-vite) | Include and bundle Bootstrap 6's CSS and JavaScript in a project using Vite. Use when setting up Bootstrap with Vite, bundling Bootstrap's Sass and JS through Vite, or creating a Vite-based Bootstrap project. | [Bootstrap and Vite](guides__vite.md) |
| [`bootstrap-component`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-component) | Build a Bootstrap 6 component's CSS and markup. Use when creating a new component, adding modifier or variant classes, or authoring component styles with Bootstrap's Sass token maps and theme overrides. | [Components](customize__components.md) |
| [`bootstrap-component-js`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-component-js) | Add JavaScript behavior to a Bootstrap 6 component. Use when writing a component's TypeScript source, extending BaseComponent, wiring the data API, adding events or config options, or integrating Floating UI or a third-party library. | [JavaScript](getting-started__javascript.md) |
| [`bootstrap-color-system`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-color-system) | Work with Bootstrap 6's color system in Sass and CSS. Use when customizing colors, adding or overriding theme colors, working with color modes, or using the color scales, semantic tokens, and theme classes. | [Color](customize__color.md) |
| [`bootstrap-utility-api`](https://github.com/twbs/bootstrap/tree/main/skills/bootstrap-utility-api) | Use, extend, and customize Bootstrap 6's utility API. Use when adding a custom utility class, modifying or removing Bootstrap's default utilities, enabling responsive or state variants, or trimming the generated utility CSS. | [Utility API](utilities__api.md) |

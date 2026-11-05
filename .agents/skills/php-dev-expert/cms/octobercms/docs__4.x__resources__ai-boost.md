# AI Development with Boost - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/ai-boost.html

---

# AI Development with Boost

Enhance AI-assisted development with October CMS Boost.

- [Installation](docs__4.x__resources__ai-boost.md#installation)
- [Supported Agents](docs__4.x__resources__ai-boost.md#supported-agents)
- [Using AI with October CMS](docs__4.x__resources__ai-boost.md#using-ai-with-october-cms)
- [Try These Prompts](#try-these-prompts)
- [What Gets Configured](docs__4.x__resources__ai-boost.md#what-gets-configured)
- [Guidelines](#guidelines)
- [Skills](#skills)
- [MCP Tools](#mcp-tools)
- [Keeping Boost Updated](docs__4.x__resources__ai-boost.md#keeping-boost-updated)

[More...](#)

October CMS Boost requires [Laravel Boost  (opens new window)](https://laravel.com/docs/boost) as a foundation.

October CMS Boost is a Composer package that extends [Laravel Boost  (opens new window)](https://laravel.com/docs/boost) with October CMS-specific guidelines, skills, and tools. It teaches AI agents how to write idiomatic October CMS code instead of defaulting to standard Laravel patterns.

While Laravel Boost provides the foundation (database tools, log inspection, documentation search), October CMS Boost adds the layer that understands plugins, Tailor blueprints, backend controllers, CMS themes, the AJAX framework, and October's model conventions.

## [#](#installation) Installation

```
composer require october/boost --dev
```

Then run the Boost installer to configure your AI agent.

```
php artisan boost:install
```

During installation, select **october/boost** when prompted to include third-party guidelines.

The installer automatically configures your AI agent based on what it detects in your environment. For Claude Code, it writes a **CLAUDE.md** file with the compiled guidelines, registers the MCP server in **.mcp.json**, and copies skills to **.claude/skills/**. For other agents, it writes to their equivalent configuration files. No manual wiring is needed - once the installer finishes, your AI agent is ready to use.

## [#](#supported-agents) Supported Agents

October CMS Boost works with any AI agent that Laravel Boost supports, including Claude Code, Cursor, GitHub Copilot, Codex, Gemini CLI, and Junie. Refer to the [Laravel Boost documentation  (opens new window)](https://laravel.com/docs/boost) for agent-specific setup instructions.

## [#](#using-ai-with-october-cms) Using AI with October CMS

Once installed, your AI agent automatically knows about October CMS conventions. You can start asking it to build plugins, create backend pages, design themes, and work with Tailor, and it will follow October CMS patterns instead of defaulting to standard Laravel.

### [#](#try-these-prompts) Try These Prompts

Here are some examples of what you can ask your AI agent to do.

**Creating a plugin from scratch:**

> Create a Blog plugin with Post and Category models. Posts should belong to a category and have a featured image. Add a backend controller with list and form pages.

**Building a theme page:**

> Create a blog listing page that displays the 10 most recent published posts with pagination. Use the default layout.

**Working with Tailor:**

> Create a Tailor blueprint for a FAQ section with question, answer, and sort order fields. Make it a stream type with a primary navigation entry.

**Adding AJAX functionality:**

> Add a "Load More" button to the blog listing that loads the next page of posts via AJAX without refreshing the page.

The AI will use October's conventions automatically - array-based model relationships, the `Validation` trait, YAML-configured backend behaviors, Twig templates, and the `data-request` AJAX framework.

## [#](#what-gets-configured) What Gets Configured

October CMS Boost provides three layers of context to your AI agent.

### [#](#guidelines) Guidelines

A core guideline file loaded into every AI conversation that covers:

- Critical differences from Laravel (don't suggest Livewire, Inertia, Blade, etc.)
- Architecture overview (plugins, themes, backend, Tailor, AJAX)
- Model conventions (array-based relationships, Validation trait)
- Event system and settings model patterns
- Artisan commands and naming conventions

### [#](#skills) Skills

Skills are on-demand knowledge modules that AI agents activate when working in specific domains.

| Skill | Covers |
| --- | --- |
| **Plugin Development** | Plugin.php, registration, migrations, settings models, events, console commands, localization, mail templates |
| **Tailor Development** | Blueprints, content fields, entry records, multisite, navigation, columns |
| **Backend Controllers** | Form/List/Relation/Import-Export/Reorder controllers, behavior overrides, filter scopes, YAML configs |
| **Theme Development** | Pages, layouts, partials, Twig, components, theme.yaml customization, error pages, asset compilation |
| **AJAX Framework** | Data attributes, jax API, handlers, partial updates, file uploads, validation, turbo router |
| **Model Development** | Relationships, validation, traits, events, accessors/mutators, deferred bindings, eager loading, extending models |

### [#](#mcp-tools) MCP Tools

MCP (Model Context Protocol) tools give the AI real-time access to your application. The AI can inspect your actual Tailor blueprints, installed plugins, and theme structure instead of guessing.

| Tool | Purpose |
| --- | --- |
| **SearchOctoberDocs** | Search official documentation for Laravel, October CMS, Larajax, and Meloncart from their GitHub-hosted repos |
| **GetBlueprints** | List and inspect Tailor blueprint definitions and fields |
| **GetPluginRegistration** | List installed plugins with their components, permissions, and navigation |
| **GetThemeStructure** | Inspect the active theme's pages, layouts, partials, and content files |

MCP tools are registered automatically when the package is installed - no manual configuration needed.

## [#](#keeping-boost-updated) Keeping Boost Updated

Run the update command after updating your Composer dependencies to ensure Boost guidelines and skills stay current.

```
php artisan boost:update
```

You can automate this by adding the command to your `composer.json` scripts.

```
"scripts": {
    "post-update-cmd": [
        "@php artisan boost:update --ansi"
    ]
}
```

#### [#](#see-also) See Also

- [Laravel Boost Documentation  (opens new window)](https://laravel.com/docs/boost)

← [Debugbar](docs__4.x__resources__debugbar.md)[Development Docker Image (opens new window)](https://octobercms.com/docker-dev-image) →

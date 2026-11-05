# Laravel Boost | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/boost

---

[Skip to content](#main-content)

# Laravel Boost

- [Introduction](#introduction)
- [Installation](#installation)
  - [Set Up Your Agents](#set-up-your-agents)
  - [Keeping Boost Resources Updated](#keeping-boost-resources-updated)
- [MCP Server](#mcp-server)
  - [Available MCP Tools](#available-mcp-tools)
  - [Manually Registering the MCP Server](#manually-registering-the-mcp-server)
- [AI Guidelines](#ai-guidelines)
  - [Available AI Guidelines](#available-ai-guidelines)
  - [Adding Custom AI Guidelines](#adding-custom-ai-guidelines)
  - [Overriding Boost AI Guidelines](#overriding-boost-ai-guidelines)
  - [Third-Party Package AI Guidelines](#third-party-package-ai-guidelines)
- [Agent Skills](#agent-skills)
  - [Available Skills](#available-skills)
  - [Custom Skills](#custom-skills)
  - [Overriding Skills](#overriding-skills)
  - [Third-Party Package Skills](#third-party-package-skills)
- [Guidelines vs. Skills](#guidelines-vs-skills)
- [Project Rules](#project-rules)
  - [Recording Rules](#recording-rules)
  - [Inferring Your Application's Conventions](#inferring-your-applications-conventions)
  - [Disabling Project Rules](#disabling-project-rules)
- [Documentation API](#documentation-api)
- [Extending Boost](#extending-boost)
  - [Adding Support for Other IDEs / AI Agents](#adding-support-for-other-ides-ai-agents)

## [Introduction](#introduction)

Laravel Boost accelerates AI-assisted development by providing the essential guidelines and agent skills that help AI agents write high-quality Laravel applications that adhere to Laravel best practices.

Boost also provides a powerful Laravel ecosystem documentation API that combines a built-in MCP tool with an extensive knowledge base containing over 17,000 pieces of Laravel-specific information, all enhanced by semantic search capabilities using embeddings for precise, context-aware results. Boost instructs AI agents like Claude Code and Cursor to use this API to learn about the latest Laravel features and best practices.

## [Installation](#installation)

Laravel Boost can be installed via Composer:

```
1composer require laravel/boost --dev

composer require laravel/boost --dev
```

Next, install the MCP server and coding guidelines:

```
1php artisan boost:install

php artisan boost:install
```

The `boost:install` command will generate the relevant agent guideline and skill files for the coding agents you selected during the installation process. If a guideline file such as `CLAUDE.md` or `AGENTS.md` already exists, Boost only replaces the content inside its `<laravel-boost-guidelines>` block, so anything you have written outside of that block is preserved.

Once Laravel Boost has been installed, you're ready to start coding with Cursor, Claude Code, or your AI agent of choice.

Feel free to add the generated MCP configuration file (`.mcp.json`), guideline files (`CLAUDE.md`, `AGENTS.md`, `junie/`, etc.), and the `boost.json` configuration file to your application's `.gitignore`, as these files are automatically regenerated when running `boost:install` and `boost:update`.

### [Set Up Your Agents](#set-up-your-agents)

Cursor
Claude Code
Codex
GitHub Copilot (VS Code)
Junie

```
11. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)

22. Press `enter` on "/open MCP Settings"

33. Turn the toggle on for `laravel-boost`

1. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)
2. Press `enter` on "/open MCP Settings"
3. Turn the toggle on for `laravel-boost`
```

```
1Claude Code support is typically enabled automatically. If you find it isn't, open a shell in the project's directory and run the following command:

2

3claude mcp add -s local -t stdio laravel-boost php artisan boost:mcp

Claude Code support is typically enabled automatically. If you find it isn't, open a shell in the project's directory and run the following command:

claude mcp add -s local -t stdio laravel-boost php artisan boost:mcp
```

```
1Codex support is typically enabled automatically. If you find it isn't, open a shell in the project's directory and run the following command:

2

3codex mcp add laravel-boost -- php "artisan" "boost:mcp"

Codex support is typically enabled automatically. If you find it isn't, open a shell in the project's directory and run the following command:

codex mcp add laravel-boost -- php "artisan" "boost:mcp"
```

```
11. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)

22. Press `enter` on "MCP: List Servers"

33. Arrow to `laravel-boost` and press `enter`

44. Choose "Start server"

1. Open the command palette (`Cmd+Shift+P` or `Ctrl+Shift+P`)
2. Press `enter` on "MCP: List Servers"
3. Arrow to `laravel-boost` and press `enter`
4. Choose "Start server"
```

```
11. Press `shift` twice to open the command palette

22. Search "MCP Settings" and press `enter`

33. Check the box next to `laravel-boost`

44. Click "Apply" at the bottom right

1. Press `shift` twice to open the command palette
2. Search "MCP Settings" and press `enter`
3. Check the box next to `laravel-boost`
4. Click "Apply" at the bottom right
```

### [Keeping Boost Resources Updated](#keeping-boost-resources-updated)

You may want to periodically update your local Boost resources (AI guidelines and skills) to ensure they reflect the latest versions of the Laravel ecosystem packages you have installed. To do so, you can use the `boost:update` Artisan command.

```
1php artisan boost:update

php artisan boost:update
```

You may also automate this process by adding it to your Composer "post-update-cmd" scripts:

```
1{

2  "scripts": {

3    "post-update-cmd": [

4      "@php artisan boost:update --ansi"

5    ]

6  }

7}

{
  "scripts": {
    "post-update-cmd": [
      "@php artisan boost:update --ansi"
    ]
  }
}
```

By default, the `boost:update` command will also scan your application for any newly installed packages and offer to publish their corresponding guidelines and skills. This prompt is skipped when the command runs non-interactively, such as from a Composer script. If you would like Boost to only update the existing Boost resources already published within your application, you may use the `--no-discover` option:

```
1php artisan boost:update --no-discover

php artisan boost:update --no-discover
```

## [MCP Server](#mcp-server)

Laravel Boost provides an MCP (Model Context Protocol) server that exposes tools for AI agents to interact with your Laravel application. These tools give agents the ability to inspect your application's structure, query the database, execute code, and more.

### [Available MCP Tools](#available-mcp-tools)

| Name | Notes |
| --- | --- |
| Application Info | Read PHP & Laravel versions, database engine, list of ecosystem packages with versions, and Eloquent models |
| Browser Logs | Read logs and errors from the browser |
| Database Connections | Inspect available database connections, including the default connection |
| Database Query | Execute a query against the database |
| Database Schema | Read the database schema |
| Get Absolute URL | Convert relative path URIs to absolute so agents generate valid URLs |
| Last Error | Read the last error from the application's log files |
| Read Log Entries | Read the last N log entries |
| Record Rule | Record a durable [project rule](#project-rules) into `.ai/rules` so future agents inherit it |
| Search Docs | Query the Laravel hosted documentation API service to retrieve documentation based on installed packages |

### [Manually Registering the MCP Server](#manually-registering-the-mcp-server)

Sometimes you may need to manually register the Laravel Boost MCP server with your editor of choice. You should register the MCP server using the following details:

|  |  |
| --- | --- |
| **Command** | `php` |
| **Args** | `artisan boost:mcp` |

JSON example:

```
1{

2    "mcpServers": {

3        "laravel-boost": {

4            "command": "php",

5            "args": ["artisan", "boost:mcp"]

6        }

7    }

8}

{
    "mcpServers": {
        "laravel-boost": {
            "command": "php",
            "args": ["artisan", "boost:mcp"]
        }
    }
}
```

## [AI Guidelines](#ai-guidelines)

AI guidelines are composable instruction files that are loaded upfront to provide AI agents with essential context about Laravel ecosystem packages. These guidelines contain core conventions, best practices, and framework-specific patterns that help agents generate consistent, high-quality code.

### [Available AI Guidelines](#available-ai-guidelines)

Laravel Boost includes AI guidelines for the following packages and frameworks. The `core` guidelines provide generic, generalized advice to the AI for the given package that is applicable across all versions.

| Package | Versions Supported |
| --- | --- |
| Core & Boost | core |
| Laravel Framework | core, 10.x, 11.x, 12.x, 13.x |
| Livewire | core, 2.x, 3.x, 4.x |
| Flux UI | core, free, pro |
| Folio | core |
| Herd | core |
| Inertia Laravel | core, 1.x, 2.x, 3.x |
| Inertia React | core, 1.x, 2.x, 3.x |
| Inertia Vue | core, 1.x, 2.x, 3.x |
| Inertia Svelte | core, 1.x, 2.x, 3.x |
| MCP | core |
| Pennant | core |
| Pest | core, 3.x, 4.x |
| PHPUnit | core |
| Pint | core |
| Sail | core |
| Tailwind CSS | core, 3.x, 4.x |
| Livewire Volt | core |
| Wayfinder | core |
| Enforce Tests | conditional |

To keep your AI guidelines up-to-date, see the [Keeping Boost Resources Updated](#keeping-boost-resources-updated) section.

### [Adding Custom AI Guidelines](#adding-custom-ai-guidelines)

To augment Laravel Boost with your own custom AI guidelines, add `.blade.php` or `.md` files to your application's `.ai/guidelines/*` directory. These files will automatically be included with Laravel Boost's guidelines when you run `boost:install`.

### [Overriding Boost AI Guidelines](#overriding-boost-ai-guidelines)

You can override Boost's built-in AI guidelines by creating your own custom guidelines with matching file paths. When you create a custom guideline that matches an existing Boost guideline path, Boost will use your custom version instead of the built-in one.

For example, to override Boost's "Inertia React v2 Form Guidance" guidelines, create a file at `.ai/guidelines/inertia-react/2/forms.blade.php`. When you run `boost:install`, Boost will include your custom guideline instead of the default one.

### [Third-Party Package AI Guidelines](#third-party-package-ai-guidelines)

If you maintain a third-party package and would like Boost to include AI guidelines for it, you can do so by adding a `resources/boost/guidelines/core.blade.php` file to your package. When users of your package run `php artisan boost:install`, Boost will automatically load your guidelines.

AI guidelines should provide a short overview of what your package does, outline any required file structure or conventions, and explain how to create or use its main features (with example commands or code snippets). Keep them concise, actionable, and focused on best practices so AI can generate correct code for your users. Here is an example:

```
1## Package Name

2

3This package provides [brief description of functionality].

4

5### Features

6

7- Feature 1: [clear & short description].

8- Feature 2: [clear & short description]. Example usage:

9

10@verbatim

11<code-snippet name="How to use Feature 2" lang="php">

12$result = PackageName::featureTwo($param1, $param2);

13</code-snippet>

14@endverbatim

## Package Name

This package provides [brief description of functionality].

### Features

- Feature 1: [clear & short description].
- Feature 2: [clear & short description]. Example usage:

@verbatim
<code-snippet name="How to use Feature 2" lang="php">
$result = PackageName::featureTwo($param1, $param2);
</code-snippet>
@endverbatim
```

## [Agent Skills](#agent-skills)

[Agent Skills](https://agentskills.io/home) are lightweight, targeted knowledge modules that agents can activate on-demand when working on specific domains. Unlike guidelines, which are loaded upfront, skills allow detailed patterns and best practices to be loaded only when relevant, reducing context bloat and improving the relevance of AI-generated code.

When you run `boost:install` and select skills as a feature, skills are automatically installed based on the packages detected in your `composer.json`. For example, if your project includes `livewire/livewire`, the `livewire-development` skill will be installed automatically. Skills included with Boost, such as `infer-conventions`, are installed regardless of which packages you have.

### [Available Skills](#available-skills)

| Skill | Package |
| --- | --- |
| fluxui-development | Flux UI |
| folio-routing | Folio |
| infer-conventions | Boost |
| inertia-react-development | Inertia React |
| inertia-svelte-development | Inertia Svelte |
| inertia-vue-development | Inertia Vue |
| livewire-development | Livewire |
| mcp-development | MCP |
| pennant-development | Pennant |
| pest-testing | Pest |
| tailwindcss-development | Tailwind CSS |
| volt-development | Volt |
| wayfinder-development | Wayfinder |

To keep your skills up-to-date, see the [Keeping Boost Resources Updated](#keeping-boost-resources-updated) section.

### [Custom Skills](#custom-skills)

To create your own custom skills, add a `SKILL.md` file to your application's `.ai/skills/{skill-name}/` directory. When you run `boost:update`, your custom skills will be installed alongside Boost's built-in skills.

For example, to create a custom skill for your application's domain logic:

```
1.ai/skills/creating-invoices/SKILL.md

.ai/skills/creating-invoices/SKILL.md
```

### [Overriding Skills](#overriding-skills)

You can override Boost's built-in skills by creating your own custom skills with matching names. When you create a custom skill that matches an existing Boost skill name, Boost will use your custom version instead of the built-in one.

For example, to override Boost's `livewire-development` skill, create a file at `.ai/skills/livewire-development/SKILL.md`. When you run `boost:update`, Boost will include your custom skill instead of the default one.

### [Third-Party Package Skills](#third-party-package-skills)

If you maintain a third-party package and would like Boost to include skills for it, you can do so by adding a `resources/boost/skills/{skill-name}/SKILL.md` file to your package. When users of your package run `php artisan boost:install`, Boost will automatically install your skills based on user preference.

Boost Skills support the [Agent Skills format](https://agentskills.io/what-are-skills) and should be structured as a folder containing a `SKILL.md` file with YAML frontmatter and Markdown instructions. The `SKILL.md` file must include required frontmatter (`name` and `description`) and can optionally include scripts, templates, and reference materials.

Skills should outline any required file structure or conventions, and explain how to create or use its main features (with example commands or code snippets). Keep them concise, actionable, and focused on best practices so AI can generate correct code for your users:

```
1---

2name: package-name-development

3description: Build and work with PackageName features, including components and workflows.

4---

5

6# Package Name Development

7

8## When to use this skill

9Use this skill when working with PackageName features...

10

11## Features

12

13- Feature 1: [clear & short description].

14- Feature 2: [clear & short description]. Example usage:

15

16$result = PackageName::featureTwo($param1, $param2);

---
name: package-name-development
description: Build and work with PackageName features, including components and workflows.
---

# Package Name Development

## When to use this skill
Use this skill when working with PackageName features...

## Features

- Feature 1: [clear & short description].
- Feature 2: [clear & short description]. Example usage:

$result = PackageName::featureTwo($param1, $param2);
```

## [Guidelines vs. Skills](#guidelines-vs-skills)

Laravel Boost provides two distinct ways to give AI agents context about your application: **guidelines** and **skills**.

**Guidelines** are loaded upfront when the AI agent starts, providing essential context about Laravel conventions and best practices that apply broadly across your codebase.

**Skills** are activated on-demand when working on specific tasks, containing detailed patterns for particular domains (like Livewire components or Pest tests). Loading skills only when relevant reduces context bloat and improves code quality.

| Aspect | Guidelines | Skills |
| --- | --- | --- |
| **Loaded** | Upfront, always present | On-demand, when relevant |
| **Scope** | Broad, foundational | Focused, task-specific |
| **Purpose** | Core conventions & best practices | Detailed implementation patterns |

Both guidelines and skills describe the Laravel ecosystem. To capture the conventions of your own application, you should use [project rules](#project-rules).

## [Project Rules](#project-rules)

While guidelines and skills teach agents how to write Laravel, project rules teach them how to write your application. A rule is anything you would otherwise need to explain again in every new session:

- Decisions made along the way by you, your agents, or your teammates.
- Style guidelines and preferences that are difficult to get an agent to follow.
- Traps and constraints that can't be inferred from the surrounding code.

Rules are stored as Markdown files within your application's `.ai/rules` directory and should be committed to source control. Unlike an agent's own memory, which is personal and session-scoped, your rules are shared with your team and with every agent that works on your application.

Each rule file declares the file globs it applies to within its frontmatter:

```
1---

2paths:

3  - app/Http/Controllers/**

4---

5

6# Http Controllers

7

8## Extend BaseController for tenant scoping

9

10All controllers must extend `App\Http\Controllers\BaseController`, which applies the

11current tenant's query scope. Extending Laravel's base controller directly will leak

12data across tenants.

---
paths:
  - app/Http/Controllers/**
---

# Http Controllers

## Extend BaseController for tenant scoping

All controllers must extend `App\Http\Controllers\BaseController`, which applies the
current tenant's query scope. Extending Laravel's base controller directly will leak
data across tenants.
```

In addition, Boost maintains an `.ai/rules/index.md` file which maps globs to their rule files. Agents are instructed to consult this index before planning or editing any file, so a rule is only loaded when it is relevant:

```
1# Project Rules Index

2

3Before planning or editing, find the row whose globs match the file's path and read that rule file.

4

5| Applies to | Rule file |

6| --- | --- |

7| app/Http/Controllers/** | .ai/rules/controllers.md |

8| app/Models/** | .ai/rules/models.md |

# Project Rules Index

Before planning or editing, find the row whose globs match the file's path and read that rule file.

| Applies to | Rule file |
| --- | --- |
| app/Http/Controllers/** | .ai/rules/controllers.md |
| app/Models/** | .ai/rules/models.md |
```

Unlike the `.mcp.json` and generated guideline files, the `.ai/rules` directory should be committed to source control so that your rules are shared with your team.

### [Recording Rules](#recording-rules)

To record a rule, you may simply ask your agent to remember it:

```
1Remember that all money values are stored as integer cents, never as floats.

Remember that all money values are stored as integer cents, never as floats.
```

The agent will invoke Boost's `record-rule` MCP tool with a `glob`, a short `title`, and a `note`. Boost will then file the rule under the matching area, creating the rule file if needed, and update the index.

You should always record rules using the `record-rule` tool rather than creating rule files by hand. Boost regenerates `.ai/rules/index.md` as part of recording a rule, and agents rely on that index to discover which rules apply to the file they are working on. A rule file that is added manually will not be discovered until the index is next regenerated.

### [Inferring Your Application's Conventions](#inferring-your-applications-conventions)

Recording rules one at a time works well going forward; however, an existing application already contains years of conventions. The `infer-conventions` skill will bootstrap your rules from the code you have already written. To get started, ask your agent to use the skill:

```
1Use the infer-conventions skill

Use the infer-conventions skill
```

The skill will sweep your application across a checklist of Laravel convention dimensions, including validation, controllers, authorization, models, architecture, testing, frontend, database, and console, followed by an open-ended pass for patterns such as base classes, shared traits, and module layouts.

The skill documents what your code actually does rather than what it should do. It records only well-supported, non-default conventions, skips framework defaults and anything Pint or Rector already enforces, and reports genuinely mixed patterns instead of recording them. Before writing any rules, the skill will present each convention it discovered, along with its supporting evidence, for your approval. If you would like the skill to record all discovered conventions without confirmation, you may tell it to "yolo".

### [Disabling Project Rules](#disabling-project-rules)

Project rules are enabled by default. To disable them entirely, define the following environment variable. This removes the `record-rule` MCP tool and stops Boost from managing the `.ai/rules` directory:

```
1BOOST_RULES_ENABLED=false

BOOST_RULES_ENABLED=false
```

## [Documentation API](#documentation-api)

Laravel Boost includes a Documentation API that provides AI agents with access to an extensive knowledge base containing over 17,000 pieces of Laravel-specific information. The API uses semantic search with embeddings to deliver precise, context-aware results.

The `Search Docs` MCP tool allows agents to query the Laravel hosted documentation API service to retrieve documentation based on your installed packages. Boost's AI guidelines and skills will automatically instruct your coding agent to use this API.

| Package | Versions Supported |
| --- | --- |
| Laravel Framework | 10.x, 11.x, 12.x, 13.x |
| Filament | 2.x, 3.x, 4.x, 5.x |
| Flux UI | 2.x Free, 2.x Pro |
| Inertia | 1.x, 2.x |
| Livewire | 1.x, 2.x, 3.x, 4.x |
| Nova | 4.x, 5.x |
| Pest | 3.x, 4.x |
| Tailwind CSS | 3.x, 4.x |

## [Extending Boost](#extending-boost)

Boost works with many popular IDEs and AI agents out of the box. If your coding tool isn't supported yet, you can create your own agent and integrate it with Boost.

### [Adding Support for Other IDEs / AI Agents](#adding-support-for-other-ides-ai-agents)

To add support for a new IDE or AI agent, create a class that extends `Laravel\Boost\Install\Agents\Agent` and implement one or more of the following contracts depending on what you need:

- `Laravel\Boost\Contracts\SupportsGuidelines` - Adds support for AI guidelines.
- `Laravel\Boost\Contracts\SupportsMcp` - Adds support for MCP.
- `Laravel\Boost\Contracts\SupportsSkills` - Adds support for Agent Skills.

#### [Writing the Agent](#writing-the-agent)

```
1<?php

2

3declare(strict_types=1);

4

5namespace App;

6

7use Laravel\Boost\Contracts\SupportsGuidelines;

8use Laravel\Boost\Contracts\SupportsMcp;

9use Laravel\Boost\Contracts\SupportsSkills;

10use Laravel\Boost\Install\Agents\Agent;

11

12class CustomAgent extends Agent implements SupportsGuidelines, SupportsMcp, SupportsSkills

13{

14    // Your implementation...

15}

<?php

declare(strict_types=1);

namespace App;

use Laravel\Boost\Contracts\SupportsGuidelines;
use Laravel\Boost\Contracts\SupportsMcp;
use Laravel\Boost\Contracts\SupportsSkills;
use Laravel\Boost\Install\Agents\Agent;

class CustomAgent extends Agent implements SupportsGuidelines, SupportsMcp, SupportsSkills
{
    // Your implementation...
}
```

For an example implementation, see [ClaudeCode.php](https://github.com/laravel/boost/blob/main/src/Install/Agents/ClaudeCode.php).

#### [Registering the Agent](#registering-the-agent)

Register your custom agent in the `boot` method of your application's `App\Providers\AppServiceProvider`:

```
1use Laravel\Boost\Boost;

2

3public function boot(): void

4{

5    Boost::registerAgent('customagent', CustomAgent::class);

6}

use Laravel\Boost\Boost;

public function boot(): void
{
    Boost::registerAgent('customagent', CustomAgent::class);
}
```

Once registered, your agent will be available for selection when running `php artisan boost:install`.

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Installation](#installation)
  - [Set Up Your Agents](#set-up-your-agents)
  - [Keeping Boost Resources Updated](#keeping-boost-resources-updated)
- [MCP Server](#mcp-server)
  - [Available MCP Tools](#available-mcp-tools)
  - [Manually Registering the MCP Server](#manually-registering-the-mcp-server)
- [AI Guidelines](#ai-guidelines)
  - [Available AI Guidelines](#available-ai-guidelines)
  - [Adding Custom AI Guidelines](#adding-custom-ai-guidelines)
  - [Overriding Boost AI Guidelines](#overriding-boost-ai-guidelines)
  - [Third-Party Package AI Guidelines](#third-party-package-ai-guidelines)
- [Agent Skills](#agent-skills)
  - [Available Skills](#available-skills)
  - [Custom Skills](#custom-skills)
  - [Overriding Skills](#overriding-skills)
  - [Third-Party Package Skills](#third-party-package-skills)
- [Guidelines vs. Skills](#guidelines-vs-skills)
- [Project Rules](#project-rules)
  - [Recording Rules](#recording-rules)
  - [Inferring Your Application's Conventions](#inferring-your-applications-conventions)
  - [Disabling Project Rules](#disabling-project-rules)
- [Documentation API](#documentation-api)
- [Extending Boost](#extending-boost)
  - [Adding Support for Other IDEs / AI Agents](#adding-support-for-other-ides-ai-agents)

Laravel is the most productive way to  
 build, deploy, and monitor software.

First name

Last name

Email address

Stay updated

By submitting this form, you agree to our [terms](https://laravel.com/legal). You can opt-out anytime.

- © 2026 Laravel
- [Legal](https://laravel.com/legal)
- [Status](https://status.laravel.com/)

Products

- [Cloud](https://laravel.com/cloud)
- [Forge](https://forge.laravel.com)
- [Nightwatch](https://nightwatch.laravel.com)
- [Vapor](https://vapor.laravel.com)
- [Nova](https://nova.laravel.com)

Packages

- [Cashier](billing.md)
- [Dusk](dusk.md)
- [Horizon](horizon.md)
- [Octane](octane.md)
- [Scout](scout.md)
- [Pennant](pennant.md)
- [Pint](pint.md)
- [Sail](sail.md)
- [Sanctum](sanctum.md)
- [Socialite](socialite.md)
- [Telescope](telescope.md)
- [Pulse](pulse.md)
- [Reverb](reverb.md)
- [Echo](broadcasting.md)

Resources

- [Documentation](index.md)
- [Starter Kits](https://laravel.com/starter-kits)
- [Release Notes](releases.md)
- [Blog](https://laravel.com/blog)
- [News](https://laravel-news.com)
- [Community](https://laravel.com/community)
- [Larabelles](https://larabelles.com/)
- [Learn](https://laravel.com/learn)
- [Jobs](https://larajobs.com/?partner=5)
- [Careers](https://laravel.com/careers)
- [Trust](https://trust.laravel.com)

Partners

- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Jump24](https://laravel.com/partners/jump24)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [Pixel](https://laravel.com/partners/pixel)
- [Curotec](https://laravel.com/partners/curotec)
- [Tighten](https://laravel.com/partners/tighten)
- [See All](https://laravel.com/partners)

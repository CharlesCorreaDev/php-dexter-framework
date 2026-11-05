# Installation | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/install

---

# Installation

- ### On this Page

  - [Quick-Start](docs_5x__install.md#quick-start)
  - [Next Steps](docs_5x__install.md#next-steps)
  - [Further Reading](docs_5x__install.md#further-reading)

The prevalence of modern, mature PHP development tools and infrastructure makes Craft easy to install, run, [upgrade](docs_5x__upgrade.md), and [deploy](docs_5x__deploy.md).

This [quick-start](#quick-start) guide focuses solely on setting up a local Craft development environment. If you’re ready to launch, jump to the [hosting](#hosting) or [deployment](#deployment) section.

If at any point you feel stuck, the [Tutorial](https://craftcms.com/docs/getting-started-tutorial/) is a comprehensive guide for *anyone* who wants to get set up with a fast, reliable development environment.

Downloading or installing Craft by any means binds you to its [license  (opens new window)](https://craftcms.com/license).

## [#](#quick-start)Quick-Start

Your journey with Craft begins on your local machine, using [DDEV  (opens new window)](https://ddev.readthedocs.io/en/stable/). DDEV is a Docker-based PHP development environment that streamlines the creation and management of resources required by a Craft project.

While we [strongly recommend](#why-ddev) DDEV for new Craft projects, [alternate installation methods](#alternative-installation-methods) are available for anyone with a preexisting environment or preferred workflow that meets its [requirements](docs_5x__requirements.md).

[Install or update DDEV  (opens new window)](https://ddev.readthedocs.io/en/stable/users/install/), then follow these steps:

1. Create a project directory and move into it:

   ```
   mkdir my-craft-project
   cd my-craft-project/
   ```
2. Create DDEV configuration files:

   ```
   ddev config --project-type=craftcms --docroot=web
   ```
3. Scaffold the project from the official [starter project  (opens new window)](https://github.com/craftcms/craft):

   ```
   ddev composer create-project "craftcms/craft"
   ```

   The setup wizard will start automatically! Accept all defaults (in `[square brackets]`), and note your chosen username and password.

   Our [First-Time Setup  (opens new window)](https://craftcms.com/knowledge-base/first-time-setup) guide in the Knowledge Base has more information about what to expect during setup.

Congratulations! You now have a fully-functional Craft application installed and configured. Run `ddev launch` to view the starter project’s welcome screen:

my-craft-project.ddev.site

![A new Craft installation’s welcome screen](/docs/assets/img/welcome.cac20f5a.png)

1

## [#](#next-steps)Next Steps

Ready to dive in? Sign in to the [control panel](docs_5x__system__control-panel.md) by clicking **Go to your control panel** 1 from the welcome screen, or running `ddev launch admin`. The username and password you provided during [setup  (opens new window)](https://craftcms.com/knowledge-base/first-time-setup) were used to create the first admin user.

You’re welcome to explore things at your own pace—but here are some great starting points:

- Get familiar with the [directory structure](docs_5x__system__directory-structure.md) that was created during installation;
- Review [configuration](docs_5x__configure.md) methods and options;
- Explore Craft’s main content tools: [elements](docs_5x__system__elements.md) and [custom fields](docs_5x__system__fields.md);
- Run a [console command](docs_5x__reference__cli.md) using `ddev craft ...` to explore the CLI;
- Discover [plugins](docs_5x__system__plugins.md) to add features or integrate with other services;
- Find help and inspiration within our vibrant [community  (opens new window)](https://craftcms.com/community)!

Done for the day? [`ddev stop`  (opens new window)](https://ddev.readthedocs.io/en/stable/users/basics/commands/#stop) will spin down any containers for the project and free up system resources. [`ddev start`  (opens new window)](https://ddev.readthedocs.io/en/stable/users/basics/commands/#start) boots everything back up, right where you left off.

### [#](#workflow-collaboration)Workflow + Collaboration

We believe that starting with a local development environment (rather than directly on a remote server) fosters a workflow that will support the reliability and longevity of your project.

[Defining a Workflow
→

Recommendations for hosting and deploying a Craft application.](docs_5x__deploy.md)

To get a collaborator set up, commit your working folder to git (including the `.ddev/` directory) and create a [database backup](docs_5x__reference__cli.md#db-backup). Have them clone the project, download the backup, and run:

```
ddev start
ddev import-db < path/to/backup.sql
```

## [#](#further-reading)Further Reading

### [#](#why-ddev)Why DDEV?

DDEV is our recommended development environment because it isolates software required to run Craft from your local machine—and from your other projects. Each of your sites can be spun up with its own database and PHP version, without the need to manage or switch between specific software packages.

The environment for each project is [defined as YAML files  (opens new window)](https://ddev.readthedocs.io/en/stable/users/configuration/config/), meaning `ddev start` is usually the only thing required to start working on a project on a new machine—or with a collaborator.

The Docker requirement is not taken lightly! We believe that this one-time installation is much more sustainable for new and returning Craft developers than managing a bare-metal development environment—locally or on a remote server.

### [#](#alternative-installation-methods)Alternative Installation Methods

Depending on your experience and preferred development environment, you may find one of these platform-agnostic installation processes more comfortable:

- For most environments meeting Craft’s requirements, see [Using the Starter Project  (opens new window)](https://craftcms.com/knowledge-base/using-the-starter-project) to get started with Composer.
- Especially adventurous users may want to read about [Setting up a Craft Project from Scratch  (opens new window)](https://craftcms.com/knowledge-base/setting-up-a-craft-project-from-scratch).

### [#](#hosting)Hosting

The fastest way to share your work is with a free seven-day trial of our first-party hosting platform, [Craft Cloud  (opens new window)](https://craftcms.com/cloud).

[Selecting a Host
→

Know your options when looking for a good hosting solution.](docs_5x__deploy.md#selecting-a-host)

Craft’s own footprint is relatively light, but it’s important to choose a platform that matches your traffic, storage, and redundancy needs. We maintain a [list of Craft-friendly hosting products  (opens new window)](https://craftcms.com/knowledge-base/hosting-craft-101) for projects of varying scale.

### [#](#deployment)Deployment

[Hosting & Deployment
→

Recommendations for hosting and deploying a Craft application.](docs_5x__deploy.md)

There is no one-size-fits-all deployment strategy for a Craft project, but we’ve collected our most salient advice in the [Deployment Best Practices  (opens new window)](https://craftcms.com/knowledge-base/deployment-best-practices) Knowledge Base article.

Regardless of your target infrastructure, it’s important to define a workflow for yourself and your collaborators. Starting a project from a local environment sets a precedent for the flow of code and configuration; while it is *possible* to scaffold a project directly on a remote host, maintaining a single source of truth for the site will become difficult with changes being made in multiple places, by multiple parties, or without a means of testing those changes in isolation.

### [#](#troubleshooting)Troubleshooting

Having trouble with DDEV? Make sure your [Docker  (opens new window)](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/#testing-and-troubleshooting-your-docker-installation) installation is working properly, then head to their [troubleshooting  (opens new window)](https://ddev.readthedocs.io/en/stable/users/basics/troubleshooting/) page for specific issues.

See the [Troubleshooting a Failed Craft Installation  (opens new window)](https://craftcms.com/knowledge-base/troubleshooting-failed-installation) Knowledge Base article for more common installation hang-ups.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/install.md)

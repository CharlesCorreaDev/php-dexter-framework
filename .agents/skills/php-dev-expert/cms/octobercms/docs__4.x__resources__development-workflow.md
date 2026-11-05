# Development Workflow - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/resources/development-workflow.html

---

# Development Workflow

Learn how to manage your October CMS project with Git and keep environments in sync.

- [Repository Strategies](docs__4.x__resources__development-workflow.md#repository-strategies)
- [Monolith Repository](#monolith-repository)
- [Modular Repositories](#modular-repositories)
- [Installing Packages from Git](docs__4.x__resources__development-workflow.md#installing-packages-from-git)
- [Synchronizing with the Server](docs__4.x__resources__development-workflow.md#synchronizing-with-the-server)
- [Recommended Workflow](docs__4.x__resources__development-workflow.md#recommended-workflow)
- [Automated Deployments](#automated-deployments)
- [Working with the Backend Editor](docs__4.x__resources__development-workflow.md#working-with-the-backend-editor)

[More...](#)

October CMS projects can be managed using different Git strategies depending on the size and complexity of your site. This article covers recommended workflows for local development, version control, and server synchronization.

## [#](#repository-strategies) Repository Strategies

There are two primary approaches to structuring your Git repositories.

### [#](#monolith-repository) Monolith Repository

For smaller sites, a single Git repository containing the entire project is the simplest approach. This keeps everything in one place and is easy to manage.

```
# Clone the entire project
git clone git@github.com:yourorg/myproject.git
```

Use a `.gitignore` file to exclude vendor packages and core modules that are managed by Composer.

```
/vendor
/modules
/plugins/*/*
!/plugins/yourcompany
/themes/*
!/themes/yourtheme
```

This approach tracks only your custom code while letting Composer manage dependencies.

### [#](#modular-repositories) Modular Repositories

For larger sites, each in-house plugin and theme can be its own Git repository. This provides better separation of concerns and allows different team members to work on different packages independently.

```
plugins/
├── acme/
│   └── blog/          ← Separate Git repo
├── acme/
│   └── shop/          ← Separate Git repo
themes/
└── mycompany-theme/   ← Separate Git repo
```

Both strategies are compatible with each other. You can have a monolith repository that contains submodules, or manage packages entirely independently.

## [#](#installing-packages-from-git) Installing Packages from Git

Plugins and themes can be installed directly from a Git repository using Composer.

```
php artisan plugin:install Acme.Blog --from=git@github.com:acme/blog-plugin.git
```

Use the `--want` option to specify a branch or version.

```
php artisan plugin:install Acme.Blog --from=git@github.com:acme/blog-plugin.git --want=dev-develop
```

The same applies to themes.

```
php artisan theme:install acme-starter --from=git@github.com:acme/starter-theme.git
```

Use the `--oc` option if the repository name has the `oc-` prefix convention, for example `oc-blog-plugin`.

## [#](#synchronizing-with-the-server) Synchronizing with the Server

When working with modular repositories, you can pull updates for all Git-managed packages at once using the utility command.

```
php artisan october:util git pull
```

This command iterates through all plugins and themes that are Git repositories and pulls the latest changes from their remotes.

For individual packages, navigate to the package directory and use standard Git commands.

```
cd plugins/acme/blog
git pull origin main
```

After pulling changes, run migrations to apply any database updates.

```
php artisan october:migrate
```

## [#](#recommended-workflow) Recommended Workflow

A typical development workflow looks like this.

1. **Develop locally** using your preferred IDE
2. **Commit changes** to your Git repository
3. **Push to remote** (GitHub, GitLab, Bitbucket, etc.)
4. **Pull on server** via SSH using `git pull` or `october:util git pull`
5. **Run migrations** with `php artisan october:migrate`

### [#](#automated-deployments) Automated Deployments

For more automated workflows, consider these options.

- **CI/CD pipelines** that deploy on push to specific branches
- **Git hooks** on the server that pull changes automatically
- **[Deploy Plugin  (opens new window)](https://octobercms.com/plugin/rainlab-deploy)** for environments without SSH access

## [#](#working-with-the-backend-editor) Working with the Backend Editor

The backend CMS editor saves changes directly to the theme files on the server filesystem. When using Git:

- Changes made in the backend editor exist only on the server until committed
- Pull these changes to your local environment before making local edits
- Consider using [database themes](docs__4.x__cms__themes__database-themes.md) if multiple editors need to work simultaneously

For teams where content editors use the backend while developers use local files, establish a clear workflow to avoid conflicts. One approach is to have editors work on a staging server, with changes reviewed and merged into the main repository periodically.

#### [#](#see-also) See Also

- [Installing Plugins & Themes](docs__4.x__resources__installing-packages.md)
- [Deployment](docs__4.x__setup__deployment.md)
- [Database Themes](docs__4.x__cms__themes__database-themes.md)

← [Installing Plugins & Themes](docs__4.x__resources__installing-packages.md)[Migrating a Laravel Project](docs__4.x__resources__migrate-laravel-project.md) →

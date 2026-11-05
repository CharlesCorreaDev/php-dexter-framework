# Deploying Your Site - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/deployment/deploying-your-site.html

---

# Deploying Your Site

Deploy your site using Git or FTP: two approaches for different hosting setups

- [Option 1: Git-Based Deployment (Recommended)](docs__user-guide__quickstart__deployment__deploying-your-site.md#option-1-git-based-deployment-recommended)
- [Push Your Project to Git](#push-your-project-to-git)
- [Clone and Set Up on the Server](#clone-and-set-up-on-the-server)
- [Set Up the Public Directory with Mirror](#set-up-the-public-directory-with-mirror)
- [Updating Your Site](#updating-your-site)
- [Option 2: FTP Upload](docs__user-guide__quickstart__deployment__deploying-your-site.md#option-2-ftp-upload)
- [Install on the Server First](#install-on-the-server-first)
- [Upload Your App Files](#upload-your-app-files)
- [Run Migrations](#run-migrations)
- [Configure Nginx](#configure-nginx)
- [Post-Deployment Checklist](docs__user-guide__quickstart__deployment__deploying-your-site.md#post-deployment-checklist)
- [Next Steps](docs__user-guide__quickstart__deployment__deploying-your-site.md#next-steps)

[More...](#)

You have built your site and [prepared it for production](docs__user-guide__quickstart__deployment__preparing-for-production.md). Now let's get it onto a live server. There are two main approaches: Git-based deployment for servers with SSH access, and FTP upload for shared hosting.

## [#](#option-1-git-based-deployment-recommended) Option 1: Git-Based Deployment (Recommended)

If you have SSH access to your server, Git gives you version control, easy rollbacks, and a clean deployment workflow.

### [#](#push-your-project-to-git) Push Your Project to Git

Initialize a repository and push to GitHub, GitLab, or Bitbucket:

```
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/your-username/your-project.git
git push -u origin main
```

You will notice that `modules/` and `vendor/` are already excluded in `.gitignore`. These are framework dependencies provided by Composer. The rest of the project (including your `app/`, `plugins/`, and `themes/` directories) is what makes up your site.

Never commit your `.env` file to version control. It contains sensitive credentials. October CMS excludes it by default via `.gitignore`. You will create a separate `.env` file on your production server.

### [#](#clone-and-set-up-on-the-server) Clone and Set Up on the Server

SSH into your server, clone the project, and install dependencies:

```
ssh user@your-server.com
cd /var/www
git clone https://github.com/your-username/your-project.git your-site
cd your-site
```

Copy your `auth.json` file to the server (it contains your license key for Composer):

```
# Run this from your local machine
scp auth.json user@your-server.com:/var/www/your-site/auth.json
```

Then install dependencies and run migrations on the server:

```
composer install --no-dev
cp .env.example .env
# Edit .env with your production settings
php artisan october:migrate
```

### [#](#set-up-the-public-directory-with-mirror) Set Up the Public Directory with Mirror

For Git deployments, we recommend using the `october:mirror` command. This creates a `public/` directory and mirrors the necessary assets (like plugin and theme assets) into it. Point your web server's document root to this `public/` directory.

```
php artisan october:mirror
```

You need to run `october:mirror` again any time you install a new plugin or create a new theme, so the new assets get mirrored into the public directory.

### [#](#updating-your-site) Updating Your Site

After the initial deployment, updates are straightforward:

1. Push changes to your Git repository.
2. Pull them on the server: `git pull`
3. Run `composer update` if dependencies changed.
4. Run `php artisan october:migrate` if there are new migrations.
5. Run `php artisan october:mirror` if you added new plugins or themes.

## [#](#option-2-ftp-upload) Option 2: FTP Upload

If you are on shared hosting without SSH, the simplest approach is to install October CMS on the server first, then upload your app files.

### [#](#install-on-the-server-first) Install on the Server First

1. Download the **Wizard Installer** from octobercms.com.
2. Upload the installer zip to your server's web root via FTP.
3. Extract the zip on the server (most hosting control panels let you do this).
4. Visit the URL in your browser and follow the on-screen wizard to install October CMS with your production database.

This gives you a clean October CMS installation on the server with all framework files in place.

### [#](#upload-your-app-files) Upload Your App Files

Now upload just your custom files on top of the installation. Using your FTP client, upload:

- **`themes/`**: your theme with layouts, pages, partials, and blueprints
- **`app/`**: your application code (if any)
- **`plugins/`**: any custom plugins (marketplace plugins can be installed through the backend)

These three directories contain everything that makes your site unique. The rest of the framework is already installed.

### [#](#run-migrations) Run Migrations

If your host provides SSH or a terminal in the control panel, run:

```
php artisan october:migrate
```

If SSH is not available, October CMS handles migrations automatically when you first access the backend.

### [#](#configure-nginx) Configure Nginx

If your hosting uses Nginx, copy the `nginx.conf` file from the October CMS project root and use it in your server block configuration. Apache servers work out of the box with the included `.htaccess` file.

## [#](#post-deployment-checklist) Post-Deployment Checklist

Once your site is live, verify everything works:

- **Visit the frontend.** Browse your pages and check that images, styles, and content load correctly.
- **Log into the backend.** Go to `yoursite.com/admin` and confirm you can sign in.
- **Test interactive features.** Submit the contact form on a team member's profile and check that it works.
- **Check for mixed content.** If using HTTPS, make sure all assets load over HTTPS too.
- **Set up backups.** Configure automated backups for your files and database.

## [#](#next-steps) Next Steps

Your site is live. Continue to [Where to Go from Here](docs__user-guide__quickstart__deployment__what-next.md) for ideas on what to build next, from exploring the demo theme to building plugins and selling products.

← [Preparing for Production](docs__user-guide__quickstart__deployment__preparing-for-production.md)[Where to Go from Here](docs__user-guide__quickstart__deployment__what-next.md) →

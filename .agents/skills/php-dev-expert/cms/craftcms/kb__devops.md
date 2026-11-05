# Guides: DevOps | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/devops

---

Search Knowledge Base

# DevOps Articles

- [Production-Ready Docker Images for Craft

  Docker is a powerful and widely-used containerization engine.
  Craft’s architecture is well-suited for deployment on container orchestration platforms like AWS ECS, Google Cloud Run, a Kubernetes provider, or even a virtual private server running as a Docker host.
  This guide covers the adoption of source-controlled, production-ready infrastructure for Craft, using Dockerfiles.
  It's intended primarily for experienced Docker users who want to understand Craft’s needs and explore some complementary ops patterns. A companion article covers a similar setup for local development.](kb__docker-in-production.md "Production-Ready Docker Images for Craft")
- [Database Character Set and Collation

  If your Craft project uses the default MySQL database driver (or MariaDB), it’s worth taking a moment to consider how the selected character set (charset) and collation will affect things like sorting or searching.
  Definitions
  The character set is the set of symbols and encodings (an “alphabet”) used by the database to store text.
  The collation is the set of rules used to compare and order those characters when querying.
  Craft 5.x defaults to the utf8mb4 character set and utf8mb4\_0900\_ai\_ci collation, when using MySQL. This is also the default combination for MySQL 8.x; it’s language-nonspecific, accent-insensitive (ai), case-insensitive (ci), and is based on Unicode Collation Algorithm version 9.0.0 weight keys (0900).
  Languages
  If your project has a primary language with accents or other character sequences that require special handling in element queries (as constraints, search keywords, or when sorting), you may want to use the corresponding language-specific collation. Keep in mind that all of your content will use a single charset and collation.
  Craft provides the db/convert-charset command to simplify the process of switching character sets and collations. You can either…
  - …run the command with the new charset and collation…
  `bash
  craft db/convert-charset [charset] [collation]
  `
  …and then add the same values to your .env under CRAFT\_DB\_CHARSET and CRAFT\_DB\_COLLATION.
  - …set the CRAFT\_DB\_CHARSET and CRAFT\_DB\_COLLATION environment variables, then run db/convert-charset without any arguments (accepting the suggested values when prompted) to apply those settings.](kb__database-character-set-and-collation.md "Database Character Set and Collation")
- [Connecting to Multiple Databases

  Craft typically reads and writes data to and from a single database. In some situations, though, it may be necessary to connect to one or more additional databases:
  Importing content from a legacy system without a public API;
  Cross-referencing or validating data in external systems;
  Storing data in proprietary or optimized formats, outside of Craft’s schema;
  Using features of other PDO drivers that Craft doesn’t support as the primary connection;
  Replication, read-write splitting, caching, and other performance reasons;
  Configuration
  Craft’s database configuration is a developer-friendly layer that translates a variety of configuration schemes into an instance of craft\db\Connection, which is mounted to the application as the db component. You do not need to change how you establish Craft’s primary database connection.
  Additional database components, however, must be defined directly via app.php:
  `php
  use craft\helpers\App;
  use craft\db\Connection;
  return [
  'components' => [
  'altDb' => [
  'class' => Connection::class,
  'dsn' => App::env('ALT\_DB\_DSN'),
  'username' => App::env('ALT\_DB\_USERNAME'),
  'password' => App::env('ALT\_DB\_PASSWORD'),
  ],
  ],
  ];
  `
  Your database’s dsn is typically in this format, but it may differ slightly based on the PDO adapter (designated by the leading mysql:):
  mysql:host=localhost;port=3307;dbname=testdb
  The username and password must be explicitly set in the config array. If your platform or provider uses database “URLs,” you can use craft\helpers\Db::url2config($url) helper to convert it to a compatible array:
  `php
  use craft\helpers\App;
  use craft\helpers\Db;
  use craft\db\Connection;
  return [
  'components' => [
  'altDb' => array\_merge(
  Db::url2config(App::env('ALT\_DB\_URL')),
  [
  'class' => Connection::class,
  ]
  ),
  ],
  ];
  `](kb__connecting-to-multiple-databases.md "Connecting to Multiple Databases")
- [Using Cloudflare with Craft Cloud

  Every Craft Cloud project is protected by Cloudflare’s enterprise-grade global WAF or web application firewall. For most sites and apps, our default policies (in combination with an envolving set of custom rules) will be enough to thwart inorganic and malicious traffic—but occasionally, customers will need access to deeper customization.
  As part of launching a site on Cloud, you’ll connect a domain by adding a few DNS records with your provider. If you or your client are already users of Cloudflare’s proxy (colloquially, “orange cloud”), you may encounter validation errors unless you follow a specific “Orange-to-Orange” setup process.](https://craftcms.com/docs/cloud/cloudflare.html "Using Cloudflare with Craft Cloud")
- [Setting up a Server for Craft

  Craft’s system requirements are simple to satisfy in local development with tools like DDEV. When it comes time to share your project with the world, though, you’ll need to find a host that meets its requirements, or provision a VPS yourself.](kb__setting-up-a-server-for-craft.md "Setting up a Server for Craft")
- [Sendmail and DKIM

  Projects or hosts for which the only mail transport option is the built-in sendmail adapter can still provide DKIM protection for automated emails.
  Craft’s mailer component can be configured to sign all outgoing messages using a private key. Once you’ve generated a key pair and added the required DNS records, save the private key to your development environment, outside the web root (i.e. in the storage/ directory), and do not commit it to a git repository.
  Configuration
  In config/app.php, add the following:
  `php
  use Craft;
  use craft\helpers\App;
  use yii\symfonymailer\DkimMessageSigner;
  use Symfony\Component\Mime\Crypto\DkimSigner;
  return [
  'components' => [
  'mailer' => function() {
  // Load the base mailer config:
  $config = App::mailerConfig();
  // Create a signer and add to the config map:
  $signer = new DkimSigner(
  'file://' . Craft::getAlias('@storage/private-dkim.key'),
  'sub.mydomain.com',
  'selector-name'
  );
  $config['signer'] = new DkimMessageSigner($signer);
  // Return the instantiated component:
  return Craft::createObject($config);
  },
  ],
  ];
  `
  sub.mydomain.com should be the sending domain, without the “selector” or \_domainkey prefixes. selector-name should agree with the prefix chosen when creating the key and DNS record.
  Outbound messages are automatically signed, when the mailer sees the signer configuration present. If there is a problem loading your key file, an error will be thrown.
  You can verify that the DKIM header is added to emails using DDEV’s Mailpit component, which runs alongside your other containers!
  `
  Return-Path: me@domain.com
  Received: from localhost (localhost [127.0.0.1])
  by my-project (Mailpit) with SMTP
  for <user@domain.com>; Thu, 30 Jan 2025 14:20:21 -0800 (PST)
  To: user@domain.com
  Subject: This is a test email from Craft
  From: My Craft Project me@domain.com
  MIME-Version: 1.0
  Date: Thu, 30 Jan 2025 14:20:21 -0800
  Message-ID: 58b7d8104bd2a2eb4cfb2213f0ca0b7e@domain.com
  DKIM-Signature: v=1; q=dns/txt; a=rsa-sha256;
  bh=O+M5ROO/rz3sH4RGCpfbvrQXjESEWlfnfUbnIcHiD5s=; d=domain.com; h=To:
  Subject: From: MIME-Version: Date: Message-ID; i=@domain.com; s=s1;
  t=1738275621; c=relaxed/relaxed;
  b=c07VmLWi+PtCxIXVmfOpOhZCJx0BuBgVWHyk0ebWCV6lqywxgNvpJP7+p65y9tfM7KOfcI+BW
  S6VNkDf2OfAYy4WBClGqbBUMLp9ciqVdfqcBMq+7JPIeIdz5RhEldYWrnISWS9eh765Yyeh/D
  cq2fDpzrBqi6oZRCs8B3PNFvI=
  Content-Type: multipart/alternative; boundary=Axz7Ni6l
  `](kb__sendmail-and-dkim.md "Sendmail and DKIM")
- [Craft CMS and CVE-2025‑32432

  On April 7, 2025, we received a report of a Craft CMS vulnerability that was based on a vulnerability in the Yii framework. Yii fixed that vulnerability in Yii 2.0.52.
  We confirmed the vulnerability as valid and released Craft CMS versions 3.9.15, 4.14.15, and 5.6.17 on April 10th with an application-level fix.
  We marked those releases as critical so affected sites would display a banner to control panel users, urging them to update.
  On April 17, 2025, we discovered evidence to suggest the vulnerability was being exploited in the wild, so we emailed all potentially affected license holders, encouraging them to update or install the Craft CMS Security Patches library as a stop-gap.
  Triage
  If you check your firewall logs or web server logs and find suspicious POST requests to the actions/assets/generate-transform Craft controller endpoint, specifically with the string \_\_class in the body, then your site has at least been scanned for this vulnerability.
  This is not a confirmation that your site has been compromised; it has only been probed.](kb__craft-cms-cve-2025-32432.md "Craft CMS and CVE-2025‑32432")
- [Craft CMS, argc, and argv

  On December 19, 2024, we were made aware of reports that a Craft CMS vulnerability was being actively exploited.
  The vulnerability was patched on November 19, 2024 in Craft CMS versions 3.9.14, 4.13.2, and 5.5.2. We retroactively marked those releases as critical, after the disclosure and subsequent exploitation; affected sites will display a banner to control panel users, urging them to update.
  Triage
  If your web PHP configuration has register\_argc\_argv Off, no further action is required.
  You can view this setting in the Craft control panel by navigating to Utilities → PHP Info, and searching for register\_argc\_argv:](kb__craft-cms-argc-and-argv.md "Craft CMS, argc, and argv")
- [Choosing a Cache Duration for Assets

  When configuring your asset storage in Craft, many remote filesystems provide a Cache Duration setting. By remote, we’re referring to adapters that push files to a different host, like Amazon S3 or Digital Ocean Spaces.](kb__choosing-a-cache-duration-for-assets.md "Choosing a Cache Duration for Assets")
- [Local Development with Docker

  Requirements
  Craft will run in any environment that meets its base requirements—and with a bit of configuration, it can take advantage of all kinds of modern development tools and infrastructure technology.
  This article covers a minimal Docker Compose configuration that meets Craft’s requirements, and explores a couple of opportunities for more advanced tooling.
  We’ll show you how to combine serversideup/php base images into a fully-functional application—but you are free to use some, all, or none of the services in your own containerized environment.](kb__docker-for-local-development.md "Local Development with Docker")
- [Migrating from Craft Nitro to DDEV

  With Nitro being discontinued, we recommend DDEV as a great local development environment:
  It’s Docker-based, freely available, and it works on macOS, Windows, and Linux.
  It’s well documented and has an active community.
  It’s perfect for PHP-based projects like Craft.
  It’s a convenient layer on top of Docker, and you can bring as little or as much Docker as you want.
  For each site you migrate, you’ll need to grab a database export (from Nitro or your production environment), create and configure a new DDEV site, and import the database.
  Most sites should only take a few minutes to migrate.
  1. Export existing databases
  Pick either method for exporting each site’s database:
  From your production environment, you can visit the Craft control panel (with sufficient permissions) and navigate to Utilities → Database Backup, make sure Download backup is checked, and press Backup. This will create and download a compressed database dump.
  From your local machine with Nitro installed, you can run nitro db backup and choose each engine and database. (Take note of the directories these are saved to, or collect the backups someplace more convenient for step 5.)](kb__migrating-from-craft-nitro-to-ddev.md "Migrating from Craft Nitro to DDEV")
- [Craft Database Options and Best Practices

  Choosing a Database Engine
  Whether it’s your first or fiftieth Craft project, choosing a database engine is important.
  For each build, you should pick an engine and stick with it. Moving from MySQL to PostgreSQL (or vice-versa) can be painful and error-prone, and even finer differences between MySQL and MariaDB can cause issues.
  We don’t have a standout database recommendation because it truly comes down to your requirements, tooling, and preferences. But here’s an overview of your options.
  MySQL
  MySQL is the most prevalent of the supported databases—so whether you’re looking for a host or a local database client for your OS, you’ll likely have an easier time with more options to choose from.
  MariaDB
  MariaDB is a fast option that’s similar to MySQL and was originally considered a drop-in replacement. Avoid switching between MariaDB and MySQL in different environments.](kb__craft-database-options-and-best-practices.md "Craft Database Options and Best Practices")
- [Using Live Preview with an Alternate Control Panel Domain

  Craft automatically sets Content-Security-Policy and X-Frame-Options headers for control panel requests, but doesn’t for front-end requests—including live preview.
  If you access the Craft CMS control panel from its own separate domain or subdomain, you may need to send special response headers from your front-end to avoid “Refused to display” errors in your browser.
  Recommended Headers
  Our Securing Craft article includes some recommendations for headers that harden sites accessed and managed from a single domain. In these cases, live preview will work exactly as expected, but can benefit from restricting the frame-ancestors directive:
  `txt
  Content-Security-Policy: frame-ancestors 'self'
  `
  When your control panel is accessed from a different domain, it will need to be explicitly allowed, as self would be too restrictive:
  `txt
  Content-Security-Policy: frame-ancestors 'self' https://control-panel.domain
  `
  Configuration Options
  You can send these Content-Security-Policy headers directly from your HTTP server, or (as of Craft 5.3) via application configuration:
  `php
  use craft\filters\Headers;
  use craft\helpers\App;
  return [
  // Attach the headers filter to the application:
  'as headersFilter' => [
  'class' => Headers::class,
  'headers' => [
  'Content-Security-Policy' => join(' ', [
  'frame-ancestors',
  "'self'",
  App::env('CRAFT\_BASE\_CP\_URL'),
  ]),
  ],
  ],
  ];
  `](kb__live-preview-alternate-control-panel-domain.md "Using Live Preview with an Alternate Control Panel Domain")
- [Running the Craft Console Command as Root

  Craft 3.7 and higher will warn you if you try to run the craft console command as a system’s root user in an interactive environment:
  Craft commands should not be run as the root/super user.
  You’ll be prompted to proceed anyway, but please be aware that it’s generally a bad practice that should be avoided.
  Be sure to SSH into any remote servers and execute commands as the appropriate user, and make sure your environment is configured properly with the appropriate permissions in the first place.
  Normally Craft should be run as the web user, able to execute PHP files and read+write files it needs to work with. When you run the craft command as a root or super user, any files it creates get root permissions that could lead to more conflicts. (You can fix those as long as you find them and use chown to reassign them to www-data or whatever user and group your environment uses for web permissions.)
  Composer issues a warning if it’s run as a root/super user for the same reason.](kb__craft-console-root.md "Running the Craft Console Command as Root")
- [Populating MySQL and MariaDB Timezone Tables

  Craft Commerce calculates some statistics that rely on the database engine’s native timezone conversion for optimal performance. While this should work by default with any PostgreSQL database, some MariaDB and MySQL users may need to populate the engine’s timezone tables.](kb__populating-mysql-mariadb-timezone-tables.md "Populating MySQL and MariaDB Timezone Tables")
- [Adding a Custom Nitro Container

  Nitro includes container commands you can use to add Docker containers to your development environment. In this article we’ll use them to add a phpMyAdmin container for managing MySQL databases.
  phpMyAdmin is a popular, open source MySQL GUI written in PHP. If you don’t have a favorite GUI client like TablePlus but would still like a graphical interface for managing your MySQL databases, you can add a local phpMyAdmin container to do just that.
  We’ll assume you’ve already installed Nitro.
  Adding a Container
  Let’s add and configure the container so we can use it.
  1. Create the Container
  First, run nitro container new and follow the prompts.
  `sh
  $ nitro container new
  What image are you trying to add? phpmyadmin
  Which image should we use?
  1. phpmyadmin
  2. phpmyadmin/phpmyadmin
  3. bitnami/phpmyadmin
  4. nazarpc/phpmyadmin
  5. jackgruber/phpmyadmin
  6. rkcreation/phpmyadmin
  7. silintl/phpmyadmin
  8. drud/phpmyadmin
  9. maxexcloo/phpmyadmin
  10. sk278/phpmyadmin-armhf
  Enter your selection: 1
  What tag should we use [latest]?
  … downloading docker.io/library/phpmyadmin:latest
  Expose port 1024 on host [Y/n]? Y
  Does the image contain a web-based UI [Y/n]? Y
  What is the name of the container [phpmyadmin]?
  Create a file to add environment variables [Y/n]? Y
  Created environment variables file at "/Users/oli/.nitro/.phpmyadmin".
  New container "phpmyadmin.containers.nitro" added! 🐳
  Apply changes now [Y/n]? Y
  ...
  `
  Nitro will update its configuration and apply the changes to create your new container. You’ll see it in Docker Desktop:](kb__custom-nitro-container.md "Adding a Custom Nitro Container")
- [Hosting Craft 101

  Craft CMS is a self-hosted PHP application that connects to MySQL or Postgres databases. It can run on just about everything from a basic shared server, to multi-region serverless infrastructure, to a Raspberry Pi!
  Requirements
  You can view the complete list of system requirements in the documentation.
  Needs Assessment
  Every {entry:glossary/project:linkLower} and audience is different, so there’s no one right way to host. Here are some important considerations for your team or client:
  Where is your primary audience located, geographically? → Find a host that has presence in that part of the world, and make sure they are able to satisfy applicable privacy laws.
  How many active users do you need to support at once? → Consider Craft control panel users and front-end registrants, as well as regular viewers!
  Are you hosting a monolithic, headless, or hybrid front end? → Does the server only need to generate dynamic responses for control panel users, or will it load and render everything your visitors see?
  What portion of your site can be cached? → Statically caching full pages is a great way to stretch your resources.
  What volume of content does Craft CMS need to hold? → Craft scales well with large content models, but it’s always good to have a plan for projects that are apt to grow over time.
  Does your traffic trickle in, or come in bursts? → Have a plan to deal with sudden popularity.
  How critical is availability and response time? → Hosting is always a tradeoff between performance and cost.
  Who is going to manage and support your hosting or infrastructure? → A dedicated dev/ops engineer can help keep your stack healthy; not all hosts’ support teams can actually assist with problems that may arise.
  Do you anticipate regular, active website development? → Content can change any time, but software updates and improvements need to be deployed by a developer.
  Abstractly, your hosting solution should balance convenience, capability, and cost.
  Hosting Terminology
  These are some common terms you’re likely to encounter.
  Managed Hosting — Servers are configured and maintained by the host. In the event of issues with the underlying hardware, operating system, or network issues, the host typically intervenes to patch or migrate, without input from customers. These hosts do not support Craft CMS or any other software you install—their obligations end with the HTTP server, PHP interpreter, and database.
  Unmanaged Hosting — Unlike managed hosting, unmanaged servers are a clean slate—often provisioned with your choice of lightweight Linux. You are responsible for installing all of Craft’s underlying requirements, like an HTTP server, PHP interpreter, and database.
  High Availability — An umbrella term for any number of technologies that distribute traffic among multiple web servers, often with the ability to automatically add and remove resources from the pool as necessary. This can be similar to managed hosting, but shifts some of the underlying complexity onto your organization in exchange for a more failure-tolerant website.
  Load balancing — A load balancer distributes traffic among multiple web servers. It’s often a part of high-availability infrastructure, providing “horizontal” scaling in addition to “vertical” scaling.
  Platform as a Service (PaaS) — Infrastructure tailored to a specific software. Craft Cloud is a Craft-specific PaaS, but not all PaaS options support Craft (or even PHP).
  Virtual Private Server (VPS) — A common type of semi-managed environment that shares hardware with other servers, but is isolated through virtualization. You typically rent a VPS that has guaranteed resources, like the number of “CPUs,” memory, disk space, etc. If a host shares resources effectively, you won’t often notice or be impacted by noisy neighbors.
  Dedicated Server — An entire physical machine, usually in a datacenter. If a VPS is like renting an apartment, a dedicated server is akin to owning the building—its resources are fully available to you, all the time. Despite the ownership analogy, most dedicated servers are still rented from a provider.
  Content Delivery Network (CDN) — A layer that sits between be an important part of how your website performs across the planet. Your web server or servers would typically live behind a CDN which transparently caches pages and content all over the world so each visitor enjoys fast speeds right from their neighborhood rather than having to wait on the full round-trip to wherever your server(s) are located.
  Service-Level Agreement (SLA) — A formal guarantee of uptime, durability, support coverage and response times, and so on. Hosts without an SLA can still offer great service—but having specific metrics and remedies spelled out in a contract is valuable to many organizations.
  Common Strategies
  Everyone wants their website to be fast and available. A sensible hosting strategy balances durability and scale with the financial and human resources available for management. Let’s look at a few solutions.
  Single VPS
  A single VPS can be great for smaller sites with stable traffic. It means one virtual machine hosts all the web, database, and cache components Craft needs. It’s simple, low cost, and requires a minimal amount of maintenance, so long as it’s been configured well. This simplicity can also be a liability: the server exists in one location and is a single point of failure; if it’s unreachable, your site is offline.
  Many small projects are hosted on a single VPS, provisioned by a developer with a service like Laravel Forge, Ploi, or ServerPilot. Those services are also easy to connect with providers like Digital Ocean, Linode, or Vultr.
  The original Craft-optimized virtual server host is Arcustech, with rock-solid infrastructure available in fifteen datacenters across eight regions.
  One key benefit of a virtual server over a dedicated server or shared hosting is that they often can be scaled “vertically” after creation—say, as a site’s audience grows. While the management experience might otherwise be very similar, dedicated servers often can’t be scaled up and down without a disruptive migration process.](kb__hosting-craft-101.md "Hosting Craft 101")
- [Resolving PHP Requirement Conflicts

  If a Craft CMS update can’t be installed because of an error like this:
  This update requires PHP 7.2.5, but your composer.json file is currently set to PHP 7.0.
  The error is saying that the update requires a higher PHP version than the version your composer.json file is set to. To resolve, you will need to edit the config.platform.php setting in your composer.json file.
  The purpose of this setting is to ensure that Composer only installs dependencies that are compatible with each of your environments. For example, if your development environment is running PHP 7.4.11, but production is running PHP 7.2.24, you would want to set the setting to 7.2.24 so that Composer doesn’t install any dependencies that require PHP 7.3 or 7.4, as they would end up causing PHP syntax errors on production.
  Before changing the setting, first determine which PHP versions are running on each of your environments, and go with the smallest one.
  Then open your composer.json file in a text editor, and find your config.platform.php setting:
  `json
  {
  "...": "...",
  "config": {
  "platform": {
  "php": "7.0"
  }
  }
  }
  `
  Change the value to the lowest PHP version in use. Then try checking for updates or running composer update again.
  If the lowest PHP version in use is lower than the version required by the update, you will need to update your environment(s) to meet the new requirement.](kb__resolving-php-requirement-conflicts.md "Resolving PHP Requirement Conflicts")
- [Using Local Volumes for Development

  If your project’s assets are stored in remote volumes, such as Amazon S3, Google Cloud Storage, or DigitalOcean Spaces, then you may wish to use a local volume for your development environment—especially if you are working with an intermittent or metered internet connection.](kb__using-local-volumes-for-development.md "Using Local Volumes for Development")
- [Deployment Best Practices

  The specific steps required to deploy Craft CMS depend on your hosting setup, but there are a few things everyone can do to make the process smoother and safer.](kb__deployment-best-practices.md "Deployment Best Practices")
- [Running Craft on Laravel Homestead

  In this article, we’ll walk through setup using Laravel Homestead, a tool for managing your local development environment on macOS, Windows, and Linux.
  Why Homestead?
  Homestead provides a great local development environment:
  it’s free, available on multiple platforms, and straightforward to install;
  it runs its included software inside a virtual environment, which can be updated, rebuilt or destroyed without affecting your system;
  it’s highly configurable and well documented;
  it can run multiple projects on one or several machines;
  Homestead provisions Vagrant boxes based on several virtualization providers that do the lower-level work of emulating hardware, on which Vagrant and Homestead manage software.
  Step 1: Install a virtualization provider
  Whatever system you’re on, you’ll need to choose a package and run its installer.
  VirtualBox is a great free option, whatever OS you’re on.
  VMWare and Parallels are commercial options that offer better performance. (To use Parallels for this setup you’ll need the Pro or Business edition!) With either of these, you’ll also need to install a Vagrant plugin.
  Hyper-V can be enabled and used in Windows 10 Enterprise, Pro, or Education editions.
  Step 2: Install Vagrant
  Once you’ve installed a provider, you’ll need to download and install Vagrant for your operating system.
  Step 3: Install the Homestead machine
  Now we’ll install the virtual machine Homestead uses to power your local development projects.
  Run the following command in your terminal:
  `bash
  vagrant box add laravel/homestead
  `
  Step 4: Install Homestead
  Next we’ll add configuration files to a project folder for controlling how Homestead creates environments for our web projects to use.
  First, use git to clone a copy of the Homestead repository. If you don’t have git installed, you can alternatively visit the Homestead repository, choose “Clone or download” and “Download ZIP”, then extract the contents of the archive to the ~/Homestead directory.
  `bash
  git clone https://github.com/laravel/homestead.git ~/Homestead
  cd ~/Homestead
  git checkout release
  `
  Once those files are established, run the setup script from that directory:
  `bash
  Mac / Linux...
  bash init.sh
  Windows...
  init.bat
  `](kb__craft-laravel-homestead.md "Running Craft on Laravel Homestead")
- [Running Multiple Craft Installations from the Same Domain

  If you need to run multiple Craft CMS installations from the same domain, there are a couple things you should do to ensure your Craft installs are able to run independently of each other.](kb__running-multiple-craft-installations-from-the-same-domain.md "Running Multiple Craft Installations from the Same Domain")
- [Configuring Craft for Load-Balanced Environments

  Web servers with finite resources can become overwhelmed by bursts of unexpected traffic—or simply by steady growth of an audience! One way to mitigate the risk of downtime is by scaling the server’s resources vertically by provisioning it with more CPU cores, RAM, and disk space; alternatively, you can scale your infrastructure horizontally by distributing the traffic across multiple servers.
  This strategy is often called load balancing. Craft can be configured to take advantage of a variety of distributed “topologies” to meet the needs of your users.](kb__configuring-load-balanced-environments.md "Configuring Craft for Load-Balanced Environments")
- [How to Access the Control Panel from an Alternate Domain

  If you’d like to access Craft’s control panel from an alternate domain or subdomain—meaning one that differs from the public site—you’ll need to configure your web server and tell Craft how to handle URLs.
  In the example below, we’re pretending your-domain.com is the public-facing site, and cp-domain.com is used for accessing the control panel. (The configuration would be the same if you were using a subdomain as your alternate, like cp.your-domain.com.)
  1. Configure the alternate domain on your server.
  Have your server route requests for cp-domain.com to the same web root (e.g. your web/ folder) as your main site.
  Once that’s configured correctly, you should be able to access your control panel from https://cp-domain.com/admin. (If you’ve given your site a custom CP trigger word, replace admin with that.)
  You may notice at this stage that your site’s front-end is also accessible at the control panel domain—we’ll fix that in step 3.
  2. Tell Craft to use your alternate domain for control panel URLs.
  Craft needs to know what control panel URLs should look like, so it can generate them accurately across control panel, site, and CLI contexts.
  This is controlled by the baseCpUrl config setting, which can be added to config/general.php…
  `php
  return [
  'baseCpUrl' => 'https://cp-domain.com',
  // ...
  ];
  `
  …or as an environment override:
  `bash
  CRAFT\_BASE\_CP\_URL="https://cp-domain.com"
  `
  The base CP URL should not include the CP trigger word (e.g. /admin).
  3. Set or remove the cpTrigger
  If the alternate domain is used exclusively for the Craft control panel (and not a secondary site, as well), set cpTrigger to null to avoid displaying the site’s front end at your control panel domain:
  `php
  return [
  'baseCpUrl' => 'https://cp-domain.com',
  'cpTrigger' => null,
  // ...
  ];
  `
  This can also be accomplished by setting the CRAFT\_CP\_TRIGGER environment override to an empty string.](kb__access-control-panel-from-alternate-domain.md "How to Access the Control Panel from an Alternate Domain")
- [How to Make Changes to php.ini

  php.ini is the name of PHP’s master configuration file.
  To find out where your php.ini file is located, create a PHP file called ini.php in your web root (alongside your index.php file) with this:
  `php
  <?php
  echo 'Loaded php.ini: ' . php\_ini\_loaded\_file();
  `
  Then access that file in your web browser by going to https://your-project.nitro/ini.php.
  There’s a good chance that the php.ini file will be different for console requests. If you need to make a change that targets console requests, open up your terminal and run this command:
  `bash
  php -i | grep 'Loaded Configuration File'
  `
  Or if you’re on a Windows server:
  `bash
  php -i | find "Loaded Configuration File"
  `
  Once you known where your php.ini file is, you can open it with your favorite text editor to make changes to it.
  For example, we recommend that you set the max\_execution\_time setting to at least 120 (two minutes), to accommodate for long-running Composer operations.
  `bash
  max\_execution\_time = 120
  `
  Craft also requires a memory\_limit value of at least 256M.
  `bash
  memory\_limit = 256M
  `
  Before adding any new lines to the file, search for the setting you want to modify, and make sure it’s not already defined somewhere.
  It may be that the setting is listed, but commented out. To uncomment it, remove the ; from the beginning of the line.
  Changes made to the php.ini file will not take effect until you restart the server.](kb__php-ini.md "How to Make Changes to php.ini")
- [Moving Craft’s Files Below the Webroot

  We recommend that all of Craft’s PHP files live above your server’s webroot, but sometimes that may not be possible due to hosting restrictions.
  Let’s look at what’s involved in restructuring the starter project’s files so that everything lives below your webroot.](kb__moving-craft-files.md "Moving Craft’s Files Below the Webroot")
- [Removing ​“index.php” from URLs

  To remove the “index.php” from your site’s URLs, you will first need to make sure your server is set up to pass would-be 404 requests off to Craft’s index.php file behind the scenes.
  If you’re running Apache, you can do that by creating a redirect in your site’s .htaccess file. If you don’t already have one, create a new file called “.htaccess” in your site’s web root.
  Save this inside your .htaccess file:
  `txt
  RewriteEngine On
  # Send would-be 404 requests to Craft
  RewriteCond %{REQUEST\_FILENAME} !-f
  RewriteCond %{REQUEST\_FILENAME} !-d
  RewriteCond %{REQUEST\_URI} !^/(favicon.ico|apple-touch-icon.\*.png)$ [NC]
  RewriteRule (.+) index.php?p=$1 [QSA,L]
  `
  That rewrite rule basically says, “if a request is coming in that doesn’t map to an existing folder or file, pass it along to index.php instead.”
  With that file in place, try accessing a page on your site (besides your homepage), without the “index.php”. If it works, great! If not, you should check with your host to see why the .htaccess file isn’t working.
  That’s great, but my URLs are still outputting with “index.php”
  The last step is to tell Craft that your site is set up to handle URLs without “index.php” in them. (Craft does its best to determine that for itself, but it only checks every 24 hours, and sometimes it gets it wrong.)
  You can tell Craft not to include the “index.php” by opening up craft/config/general.php, and adding this to the array:
  `php
  'omitScriptNameInUrls' => true,
  `
  With that in place, Craft will take your word for it and stop performing its daily checks.
  But seriously, my URLs still have “index.php” in them
  If you’re on Apache, your httpd.conf file probably has AllowOverride None set for your site, effectively disabling all .htaccess file changes. Change it to AllowOverride All, restart Apache and you should finally be set. Also make sure mod\_rewrite is enabled.](kb__removing-index-php-from-urls.md "Removing “index.php” from URLs")
- [Determining Which Folders in craft/​storage to Add to .gitignore

  There’s a lot going on within your craft/storage/ folder. Let’s go through it all one-by-one and figure out what, if any, would be missed if it went missing, versus what can safely be .gitignore’d.
  craft/storage/backups/
  Keeping database backups is important, but unless you are planning on keeping everyone’s databases in sync, there’s probably not a whole lot of reason why you’d want to store them in version control.
  Verdict: Ignore
  craft/storage/rebrand/
  If you’re running Craft Pro and you’ve uploaded a custom Login Page Logo or Site Icon, this is where those files will be stored. There’s no corresponding database value to worry about either.
  Verdict: Don’t ignore
  craft/storage/runtime/
  Everything in this folder can be recreated in a pinch, and much of it is constantly being regenerated anyway. There’s no compelling reason to keep any of it in version control, and there are good reasons not to. In fact, Craft actually creates a .gitignore file within craft/storage/runtime/ for you, telling Git to ignore everything in the folder but itself (the .gitignore file). So you don’t really have to worry about this one.
  Verdict: Ignore
  craft/storage/userphotos/
  It might seem like a no-brainer that user photos should get added to version control, but keep in mind that when a user uploads a photo, the file is saved in this folder and its filename is saved to the user’s row in the database’s ‘users’ table. So unless you have a way to keep the databases in sync between servers, there’s not a whole lot of point to sharing these files. You might be better off keeping them out of version control, and just manually FTP’ing this folder over to the new server when you’re first setting it up.
  Verdict: Ignore
  Summary
  At the end of the day, the only folder that really might be worth putting in version control is craft/storage/rebrand. And that’s assuming you have Craft Pro. Otherwise, you might as well just .gitignore the craft/storage/ folder as a whole, and call it a day.](kb__craft-storage-gitignore.md "Determining Which Folders in craft/storage to Add to .gitignore")
- [Sharing a craft/​app Folder Across Multiple Sites

  If you’re running multiple Craft sites off of the same server, it’s possible for them to share the same Craft application files, while each having their own templates, plugins, configs, etc..
  The easiest way to do it is by setting the CRAFT\_BASE\_PATH in your index.php file:
  `php
  // Path to your craft/ folder
  $craftPath = '../craft';
  // Override the path to all of the craft/\* folders except craft/app/
  define('CRAFT\_BASE\_PATH', DIR.'/craft/');
  `
  With that one extra line, your index.php file will continue to look for Craft’s app/ folder in ../craft/app/, but all the other craft/\\* folders will be expected to be in a separate craft/ subfolder located relative to the index.php file.
  Note: If you decide to put your secondary craft/ folder below web root (as we’re doing in this example), it’s up to you to prevent direct HTTP traffic to the folder. You can do that by putting a .htaccess file in that folder with this:
  `txt
  deny from all
  `](kb__sharing-a-craft-app-folder-across-multiple-sites.md "Sharing a craft/app Folder Across Multiple Sites")
- [Enabling PATH\_​INFO

  There are some cases where Craft will generate URLs to your site that include “index.php”, followed by the Craft path:
  All URLs, if your omitScriptNameInUrls config setting is set to false, or 'auto' and Craft’s test determined that the result should be false.
  URLs generated using UrlHelper::getActionUrl() or the template function actionUrl(), preventing any POST parameters that might accompany the request from getting lost in an index.php redirect.
  URLs generated using using UrlHelper::getUrl() or the template function url() where the fourth argument passed is true.
  When it is determined that a URL should include “index.php”, Craft must then decide how to append the Craft path onto the URL after “index.php”. There are two options:
  Append it as a query string (e.g. http://example.com/index.php?p=some/path)
  Treat “index.php” as just another directory segment (e.g. http://example.com/index.php/some/path)
  The second option is generally preferable because it is cleaner and more semantic, in that it does a better job expressing that “some/path” is the page you’re linking to, and not just some additional parameter on the request that will affect the response in some not-so-meaningful way.
  When a request using the second format comes in, behind the scenes the request will get routed to index.php, and whatever follows it will get stored in a server environment variable called “PATH\_INFO”, which Craft has access to and will use in its own internal routing.
  The problem is, not all servers are equipped to support PATH\_INFO, and will simply try to find a directory called “index.php”. (That’s why the actual URL format Craft will use is determined by a config setting.)
  You can test whether your server supports PATH\_INFO by pointing your browser to https://example.com/index.php/testPathInfo. If “success” is returned, you’re golden. Otherwise you’ve got a little work to do if you want Craft to use PATH\_INFO-formatted URLs.
  If you’re running Apache, you should just need to set the AcceptPathInfo directive in your .htaccess file:
  `bash
  AcceptPathInfo On
  `
  If you’re running Nginx, it’s a little more complicated, since Nginx does not have any built-in concept of PATH\_INFO. It can be done by following these instructions, though.
  If you’re running IIS, you’ll want to configure it so that it’s using FastCGI to host PHP applications. Once you’ve done that, setting the cgi.fix\_pathinfo setting to 1 as described in that article will enable proper PATH\_INFO support in IIS.](kb__enabling-path-info.md "Enabling PATH_INFO")
- [Using Classic Live Preview Across Multiple Subdomains

  If your site has multiple locales whose base URLs span across multiple subdomains, you will need to make some special configuration changes in order to get Live Preview in cross-domain scenarios.
  As an example, let’s say your site has two locales: English (located at mydomain.com), and German (located at de.mydomain.com). If you are accessing the control panel from mydomain.com/admin and edit an entry’s German translation, you will likely get a JavaScript error about a cross-domain security restriction if you try to open Live Preview.
  To work around this, two changes must be made:
  Open craft/config/general.php and set the defaultCookieDomain config setting to '.mydomain.com':
  `php
  'defaultCookieDomain' => '.mydomain.com',
  `
  This will cause user session cookies generated by Craft to apply to all subdomains of your domain name, so user sessions can persist across them.
  Open up the .htaccess file in each of your public web-roots, and add the following code to them:
  `bash
  Header set Access-Control-Allow-Origin "http://mydomain.com"
  Header set Access-Control-Allow-Credentials true
  `
  On the first line, replace http://mydomain.com with the domain name you will be accessing the control panel with.
  Once those changes have been made, you will need to either clear your browser’s cookies or restart the browser, so the new defaultCookieDomain config value can take effect.](kb__using-live-preview-across-multiple-subdomains.md "Using Classic Live Preview Across Multiple Subdomains")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

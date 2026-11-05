# Hosting Craft 101 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/hosting-craft-101

---

Search Knowledge Base

# Hosting Craft 101

![](https://craftcms.com/dist/images/icon-tip.svg)

We are pleased to announce the launch of our first-party hosting platform, [Craft Cloud](https://craftcms.com/cloud)! Get started with a free seven-day trial.

Craft CMS is a self-hosted PHP application that connects to MySQL or Postgres databases. It can run on just about everything from a basic shared server, to multi-region serverless infrastructure, to a Raspberry Pi!

## Requirements [#](#requirements "Direct link to Requirements")

You can view the complete list of [system requirements](https://craftcms.com/docs/5.x/requirements.html) in the documentation.

## Needs Assessment [#](#needs-assessment "Direct link to Needs Assessment")

Every [project](https://craftcms.com/glossary/project) and audience is different, so there’s no *one right way* to host. Here are some important considerations for your team or client:

- **Where is your primary audience located, geographically?** → Find a host that has presence in that part of the world, and make sure they are able to satisfy applicable privacy laws.
- **How many active users do you need to support at once?** → Consider Craft control panel users and [front-end registrants](kb__front-end-user-accounts.md), as well as regular viewers!
- **Are you hosting a monolithic, headless, or hybrid front end?** → Does the server only need to generate dynamic responses for control panel users, or will it load and render everything your visitors see?
- **What portion of your site can be cached?** → Statically caching full pages is a great way to stretch your resources.
- **What volume of content does Craft CMS need to hold?** → Craft scales well with large content models, but it’s always good to have a plan for projects that are apt to grow over time.
- **Does your traffic trickle in, or come in bursts?** → Have a plan to deal with sudden popularity.
- **How critical is availability and response time?** → Hosting is always a tradeoff between performance and cost.
- **Who is going to manage and support your hosting or infrastructure?** → A dedicated dev/ops engineer can help keep your stack healthy; not all hosts’ support teams can actually assist with problems that may arise.
- **Do you anticipate regular, active website development?** → Content can change any time, but software updates and improvements need to be deployed by a developer.

Abstractly, your hosting solution should balance convenience, capability, and cost.

## Hosting Terminology [#](#hosting-terminology "Direct link to Hosting Terminology")

These are some common terms you’re likely to encounter.

**Managed Hosting** — Servers are configured and maintained by the host. In the event of issues with the underlying hardware, operating system, or network issues, the host typically intervenes to patch or migrate, without input from customers. These hosts *do not* support Craft CMS or any other software you install—their obligations end with the HTTP server, PHP interpreter, and database.

**Unmanaged Hosting** — Unlike *managed* hosting, unmanaged servers are a clean slate—often provisioned with your choice of lightweight Linux. You are responsible for installing all of Craft’s underlying requirements, like an HTTP server, PHP interpreter, and database.

**High Availability** — An umbrella term for any number of technologies that distribute traffic among multiple web servers, often with the ability to automatically add and remove resources from the pool as necessary. This can be similar to managed hosting, but shifts some of the underlying complexity onto your organization in exchange for a more failure-tolerant website.

**Load balancing** — A [load balancer](kb__configuring-load-balanced-environments.md) distributes traffic among multiple web servers. It’s often a part of high-availability infrastructure, providing “horizontal” scaling in addition to “vertical” scaling.

**Platform as a Service (PaaS)** — Infrastructure tailored to a specific software. [Craft Cloud](https://craftcms.com/cloud) is a Craft-specific PaaS, but not all [PaaS options](#paas) support Craft (or even PHP).

**Virtual Private Server (VPS)** — A common type of semi-managed environment that shares hardware with other servers, but is isolated through [virtualization](https://en.wikipedia.org/wiki/Virtualization). You typically rent a VPS that has guaranteed resources, like the number of “CPUs,” memory, disk space, etc. If a host shares resources effectively, you won’t often notice or be impacted by noisy neighbors.

**Dedicated Server** — An entire physical machine, usually in a datacenter. If a VPS is like renting an apartment, a dedicated server is akin to owning the building—its resources are fully available to you, all the time. Despite the ownership analogy, most dedicated servers are still rented from a provider.

**Content Delivery Network (CDN)** — A layer that sits between be an important part of how your website performs across the planet. Your web server or servers would typically live behind a CDN which transparently caches pages and content all over the world so each visitor enjoys fast speeds right from their neighborhood rather than having to wait on the full round-trip to wherever your server(s) are located.

**Service-Level Agreement (SLA)** — A formal guarantee of uptime, durability, support coverage and response times, and so on. Hosts without an SLA can still offer great service—but having specific metrics and remedies spelled out in a contract is valuable to many organizations.

## Common Strategies [#](#common-strategies "Direct link to Common Strategies")

Everyone wants their website to be fast and available. A sensible hosting strategy balances durability and scale with the financial and human resources available for management. Let’s look at a few solutions.

### Single VPS [#](#single-vps "Direct link to Single VPS")

A single VPS can be great for smaller sites with stable traffic. It means one virtual machine hosts all the web, database, and cache components Craft needs. It’s simple, low cost, and requires a minimal amount of maintenance, so long as it’s been configured well. This simplicity can also be a liability: the server exists in one location and is a single point of failure; if it’s unreachable, your site is offline.

Many small projects are hosted on a single VPS, provisioned by a developer with a service like [Laravel Forge](https://forge.laravel.com/), [Ploi](https://ploi.io/), or [ServerPilot](https://serverpilot.io/). Those services are also easy to connect with providers like [Digital Ocean](https://www.digitalocean.com/), [Linode](https://www.linode.com/), or [Vultr](https://www.vultr.com/).

The original Craft-optimized virtual server host is [Arcustech](https://arcustech.com/), with rock-solid infrastructure available in [fifteen datacenters](https://www.arcustech.com/data-centers/) across eight regions.

One key benefit of a virtual server over a *dedicated server* or *shared hosting* is that they often can be scaled “vertically” after creation—say, as a site’s audience grows. While the management experience might otherwise be very similar, dedicated servers often can’t be scaled up and down without a disruptive migration process.

![](https://craftcms.com/dist/images/icon-tip.svg)

When relying on the limited resources of a VPS, a firewall like [Cloudflare](https://cloudflare.com) (or a local tool like [fail2ban](https://www.digitalocean.com/community/tutorials/how-fail2ban-works-to-protect-services-on-a-linux-server)) can protect you against bots and bad actors.

#### Separation of Concerns

As a way to get more capacity out of a single server, you can offload some of its responsibilities to other systems.

- **Databases** — Craft can [connect to remote databases](https://craftcms.com/docs/5.x/reference/config/db.html), and is compatible with a number of off-the-shelf database-as-a-service products like Digital Ocean’s Managed Databases, Heroku’s [data services](https://www.heroku.com/managed-data-services), or AWS [Aurora](https://aws.amazon.com/rds/aurora/) or [RDS](https://aws.amazon.com/rds/).
- **Assets** — Storing uploaded assets in a third-party system like AWS [S3](https://aws.amazon.com/s3) or Google [Cloud Storage](https://cloud.google.com/storage) also alleviates disk space concerns for media-heavy projects. Craft supports a variety of [filesystem types](https://craftcms.com/docs/5.x/reference/element-types/assets.html#remote-filesystems) that make working with remote assets seamless for authors and developers.
- **Cache** — By default, Craft uses the local filesystem for caches. You can replace this with a [database driver](https://craftcms.com/docs/5.x/reference/config/app.html#cache) so it follows your content storage—or use a separate key/value store like [redis](https://craftcms.com/docs/5.x/reference/config/app.html#redis-example)!

The next section covers these same topics, but from a different angle.

### Load Balancing [#](#load-balancing "Direct link to Load Balancing")

Most HTTP servers are capable of handling multiple requests at the same time. For dynamic websites, you’ll often start noticing sluggish performance before hitting any hard connection limits—a single server can only do so much work at a given time!

A *load balancer* distributes traffic to two or more servers, so if one gets busy (or goes down), traffic can be sent to a healthy one. Once you’ve implemented a load balancer, it becomes significantly easier to add and remove capacity at a later date.

You can configure your own load-balanced infrastructure by teasing apart the main services that Craft requires:

- The load balancer acts as your primary HTTP server, and a proxy to multiple back-end instances. Common HTTP servers [Apache](https://httpd.apache.org/docs/2.4/mod/mod_proxy_balancer.html), [nginx](https://nginx.org/en/docs/http/ngx_http_proxy_module.html#proxy_pass), and [Caddy](https://caddyserver.com/docs/caddyfile/directives/reverse_proxy#load-balancing) all have built-in reverse proxies and load balancing features.
- Each server runs some number of PHP processes;
- Resources that every server needs access to are hosted centrally (or remotely), like the database and assets;

There are many ways to go about this, whether [fully-managed by the provider](#paas), or orchestrated by your own team using cloud service providers like [AWS](https://aws.amazon.com/), [Azure](https://azure.microsoft.com/), or [Google Cloud](https://cloud.google.com/).

### PaaS [#](#paaS "Direct link to PaaS")

The benefits of a load balanced setup are often a key selling point for *platform-as-a-service* providers.
PaaS offerings wrap highly-tuned infrastructure with an “interface” accessible to teams without dedicated dev/ops experience.

[Heroku](https://heroku.com) and the Digital Ocean [App Platform](https://www.digitalocean.com/products/app-platform) are examples of framework- and language-agnostic PaaS products—they work just as well for PHP apps as they do for JavaScript, Ruby, or Python.

[Servd](https://servd.host) is the original Craft-specific PaaS provider.

### Craft Cloud [#](#craft-cloud "Direct link to Craft Cloud")

Our first-party hosting platform, [Craft Cloud](https://craftcms.com/cloud), is purpose-built for projects of all shapes and sizes. It also integrates tightly with licensing, and has flat, predictable pricing.

If you are just dipping your toes into Craft and are interested in a turn-key production environment, sign up for a seven-day trial. You can run a single command in an existing project, connect the repo to Cloud, and start your first deploy in [just a few minutes](kb__cloud-getting-started.md)!

### Shared Hosting [#](#shared-hosting "Direct link to Shared Hosting")

We generally recommend against shared hosting products, and especially those managed with cPanel or Plesk. Services that can’t guarantee specific compute resources often become congested, and come with increased risk of “noisy neighbors.” Such hosts are typically operated by resellers or white-labelers who themselves lease hardware or infrastructure from another provider.

There are certainly exceptions to this, but altogether the circumstances put your site at a significant disadvantage, and tend to work against the Craft CMS developer experience—especially when it comes to security, access, and deployment.

![](https://craftcms.com/dist/images/icon-warning.svg)

If a host only offers FTP access to a web space, you are apt to encounter difficulty with some essential parts of Craft—like running [commands](https://craftcms.com/docs/5.x/system/cli.html), or handling the [queue](https://craftcms.com/docs/5.x/system/queue.html).

## Production Tips [#](#production-tips "Direct link to Production Tips")

Some best practices apply to any production environment, regardless of how or where it’s hosted.

- **Familiarize yourself with [deployment best practices](https://craftcms.com/deployment-best-practices)** and establish a [clean process for getting files into production](https://craftcms.com/docs/5.x/deploy.html) and running updates, including [project config](https://craftcms.com/docs/5.x/system/project-config.html) and turning off the [allowAdminChanges](https://craftcms.com/docs/5.x/reference/config/general.html#allowadminchanges) setting.
- **Disable [`devMode`](https://craftcms.com/docs/5.x/reference/config/general.html#devmode)** to improve performance and avoid exposing sensitive information in error messages.
- **Enable PHP’s [OPcache](https://www.php.net/manual/en/book.opcache.php)** for optimal performance, and be sure to clear it in your deployment process.
- **Use an email delivery service** like [Postmark](https://postmarkapp.com), [Mailgun](https://www.mailgun.com), or [SES](https://aws.amazon.com/ses/) to ensure transactional email is delivered properly. (The default `sendmail` fallback may not always be reliable.)
- **Set up an always-running queue** so jobs are processed in a timely and efficient manner. Relying on Craft’s default [runQueueAutomatically](https://craftcms.com/docs/5.x/reference/config/general.html#runqueueautomatically) setting could result in queue delays if the control panel is accessed infrequently. Read about more options for handling your queue.
- **Cache carefully** whether it’s with the [`{% cache %}` tag](https://craftcms.com/docs/5.x/reference/twig/tags.html#cache), a CDN, a plugin like [Blitz](https://plugins.craftcms.com/blitz), or a mixture of strategies.
- **Consider [image transforms](https://craftcms.com/docs/5.x/development/image-transforms.html)** since they’re likely to have the biggest performance impact especially on image-heavy sites. Your web server(s) will need enough resources to handle them efficiently or you may want to offload them to a service like [Imgix](https://www.imgix.com) or [your own Lambda function](https://nystudio107.com/blog/setting-up-your-own-image-transform-service).
- **Use a key/value store for sessions** like Redis or DynamoDB so they can be fast, persistent, and scalable unlike the common file system default. See the [session component](https://craftcms.com/docs/5.x/reference/config/app.html#session) example in the docs.

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).

# Modules & Marketplace | HumHub Documentation

> **Fonte / Source:** https://docs.humhub.org/docs/admin/modules

---

On this page

## HumHub Marketplace[â](#humhub-marketplace "Direct link to HumHub Marketplace")

HumHub utilizes a modular system for customization, enhanced stability, and versatility to accommodate various individual use cases. The HumHub Marketplace provides a wide array of modules, including official, partner, and community-contributed ones.

### Installing Modules[â](#installing-modules "Direct link to Installing Modules")

Modules can be easily installed through HumHub's integrated marketplace. To browse, install, and activate modules, navigate to **Profile Dropdown > Marketplace**.

![Navigate to Marketplace](/assets/images/hh-docs-navigate-to-marketplace-e6816cbc5d53f2b365ac10b830fc6ed0.png)

### Installing purchased Modules[â](#installing-purchased-modules "Direct link to Installing purchased Modules")

To activate a license for individually purchased modules, navigate to **Marketplace > Settings > Add License Key**. After adding the license key, the module will be available for installation.

![Add License Key](/assets/images/hh-docs-add-license-key-bc3fe800ed7cca09fcb40522db3bea50.png)

### Activating & Installing Modules of the HumHub Professional Edition[â](#activating--installing-modules-of-the-humhub-professional-edition "Direct link to Activating & Installing Modules of the HumHub Professional Edition")

To activate HumHub Professional Edition, navigate to **Administration > Information > Upgrade to Professional Edition**. After activation, all Professional Edition modules will be available for installation on the Marketplace.

![Activate Professional Edition](/assets/images/hh-docs-activate-pe-778e9da7b3ab665663a2791d3c9540e7.png)

### Installing Modules manually[â](#installing-modules-manually "Direct link to Installing Modules manually")

Modules available in the integrated marketplace can also be sourced from the [HumHub Marketplace](https://marketplace.humhub.com/). This includes both paid Professional Edition modules and free modules. These modules, including custom modules or those not available in the official Marketplace, can be manually installed by uploading the module `module_name.zip` and unpacking it into the `protected/modules` directory (or even better in a separated path, [see Module Loader Path](https://github.com/humhub/humhub/blob/develop/docs/develop/intro-environment.md#module-loader-path)).

> **Note:** It is recommended to use a separate path for custom/unofficial modules. Refer to [Module Loader Path](https://github.com/humhub/humhub/blob/develop/docs/develop/intro-environment.md#module-loader-path).

After unpacking the custom module into the directory, navigate to **Administration > Modules** and activate the module.

![Activate Module](/assets/images/hh-docs-activate-module-c4d93126c3a6b481959ba165ca6574f1.png)

**Updating modules manually:**

Docker

On the [Docker installation](docs__admin__installation-docker.md), marketplace modules are updated automatically on **every container start**: the image updates all installed marketplace modules to their latest compatible version, applies pending migrations and flushes the caches. So a restart of the container is all it takes. Only modules you placed on disk yourself still need the steps below.

1. Unpack the `module_update.zip` file and overwrite the original files with new ones.
2. Navigate to **Administration > Information > Database** to perform possible database migrations.

![Perform DB Migrations](/assets/images/hh-docs-perform-migrations-690e62d19e670a02e16e830e27175c41.png)

3. Navigate to **Administration > Settings > Advanced** and click the **Save & Flush Caches** button.

![Flush Cache](/assets/images/hh-docs-flush-cache-8fffd24130c4fa624426b82f6ea2fe13.png)

## Firewall / Whitelist[â](#firewall--whitelist "Direct link to Firewall / Whitelist")

If the HumHub server does not have a direct or filtered internet connection, the following options are available:

- Setup a HTTP Proxy Server (`Administration` -> `Settings` -> `Advanced` -> `Proxy`).
- Whitelist HumHub API Endpoints. Following hosts `www.humhub.com` and `api.humhub.com` must be accessible with HTTPS (443) protocol.
- Disable Outgoing Marketplace connections. [See configuration options](docs__admin__config-options.md#marketplace)

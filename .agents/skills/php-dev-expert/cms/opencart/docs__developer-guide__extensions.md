# Extensions | OpenCart

> **Fonte / Source:** https://docs.opencart.com/developer-guide/extensions

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__developer-guide__extensions.md).

### Create your own extensions

OpenCart supports extensions to add or modify functionality without altering core files. Extensions can include modules (e.g., for adding features like sliders or analytics), payment gateways, shipping methods, themes, reports, and more. In OpenCart 4.x, extensions leverage the MVC-L (Model-View-Controller-Language) pattern, the Events system for hooks, and OCMOD for modifications. This guide provides a step-by-step approach to creating, packaging, and installing extensions, focusing on modules as a common example.

### Prerequisites

- A working installation of OpenCart 4.x.
- Basic knowledge of PHP, HTML, CSS, JavaScript, and the MVC pattern.
- Familiarity with Twig templating (used for views).
- Access to the admin panel and file system (via FTP or server access).
- Tools like a code editor (e.g., VS Code, Notepad++) and ZIP archiver.

Ensure your extension follows OpenCart's naming conventions: filenames should be 1-128 characters, end in `.ocmod.zip` for installable packages, and not exceed 32 MB.

### Types of Extensions

Possible extensions types are:

- **Modules**: Add features like banners, carousels, or custom pages.
- **Feeds:** Product feeds (e.g., Google Merchant)
- **Payments/Shipping**: Integrate gateways (e.g., PayPal) or methods (e.g., UPS).
- **Themes**: Customize the storefront appearance.
- **Reports/Analytics**: Generate insights or integrate tools like Google Analytics.
- **Others**: Anti-fraud, captcha, order totals, etc.

All extensions are managed via the admin panel under **Extensions > Extensions**.

### Directory Structure

Extensions in OpenCart 4.x are packed in a zip file named for example `test_module.ocmod.zip`, once that zip package uploaded into extension installer a folder will be created into the `extension/` directory based on the name of your file, in this case it will be `extension/test_module/`.

The zip package must be structured as follows:

- **install.json**: Metadata file (required for installation).
- **admin/**: Backend files.

  - `controller/module/test_module.php`: Admin controller.
  - `language/en-gb/module/test_module.php`: Language strings.
  - `view/template/module/test_module.twig`: Admin view.
  - `model/module/test_module.php`: Optional model for custom DB operations.
- **catalog/**: Frontend files.

  - `controller/module/test_module.php`: Frontend controller.
  - `language/en-gb/module/test_module.php`: Language strings.
  - `view/theme/default/template/module/test_module.twig`: Frontend view (use `default` or theme name).
  - `model/module/test_module.php`: Optional model.
- **ocmod/**: Optional, for OCMOD modifications (e.g., `test_module.ocmod.xml`).

Default extensions are in `extension/opencart/`. Make sure to use unique name on your package .ocmod.zip to avoid conflicts (e.g., prefix with your brand).

### Step-by-Step: Creating a Simple Module Extension

Let's create a sample module called "Test Module" that will use events to trigger an action on adding a product to cart.

#### Create the folder

Create a folder named `Test module/`, inside this folder you will create the files as described below.

#### 1. Create the install.json File

This JSON file provides extension metadata.

#### 2. Create the Admin Controller

File: `admin/controller/module/test_module.php`

This handles the admin interface, form saving, and event registration during installation.

#### 3. Create the Admin Language File

File: `admin/language/en-gb/module/test_module.php`

#### 4. Create the Admin View Template

File: `admin/view/template/module/test_module.twig`

#### 5. Create the Frontend Event Controller

File: `catalog/controller/events.php`

This listens to events and will log an entry when it has been triggered.

When the current event does have `$output`, it's possible alter it to change the final rendering.

#### 6. Optional: Add Models if Needed

For custom database operations, create `admin/model/module/test_module.php` or `catalog/model/module/test_module.php`. Extend `\Opencart\System\Engine\Model` and define methods like `addData()` with SQL queries.

#### 7. Using OCMOD for Core Modifications (If Events Are Insufficient)

For modifications not covered by events, use OCMOD XML files in `ocmod/test_module.ocmod.xml`. Example to add a menu item in admin:

### Packaging and Installation

1. Zip the files in your extension folder (e.g., `test_module.ocmod.zip`), including `install.json` and all subfolders/files. Note that you must not zip the folder `Test module/` but the inside files directly (so when you open your zip file you will see `install.json`, `admin/`, `catalog/`).
2. Go to **Extensions > Installer** > Upload the ZIP.
3. Click on install button near the new entry that appeared in `Extensions > Installer`.
4. Install via **Extensions > Extensions > Modules** (click Install).
5. If you have an ocmod, refresh modifications in **Extensions > Modifications** > Refresh (blue button).
6. Clear cache in **Dashboard > Gear Icon > Clear Cache**.
7. Configure and enable the module in **Extensions > Extensions > Modules**.

If errors occur, check logs in `system/storage/logs/` or ensure no file conflicts.

### Best Practices

- **Namespace Usage**: Always use namespaces (e.g., `Opencart\Admin\Controller\Extension\MyExtension\Module`).
- **Internationalization**: Use language files for all text.
- **Security**: Validate inputs, check permissions (`$this->user->hasPermission()`).
- **Compatibility**: Test on multiple themes and PHP versions (8.1+ recommended).
- **Cleanup**: Implement `uninstall()` to remove DB entries/events.
- **Documentation**: Include instructions in `install.json` or a README.
- **Avoid Core Changes**: Prefer events over OCMOD when possible.
- **Testing**: Use a development store; clear caches frequently.
- **Marketplace Ready**: If distributing, ensure compliance with OpenCart's extension standards.

### More Examples

Current example is basic and will help to understand the logic for extension creation, then to go further and see how are made all extension types (modules, payment gateways, shipping methods, etc) the best is to check the opencart example packages that are included by default.

On default install go to `Extension > Installer`, you will see the following items:

- **OpenCart Language Example**
- **OpenCart OCMOD Example**
- **OpenCart Payment Example**
- **OpenCart Theme Example**

These are specifically made to show how to create an extension of each of these types, there is also :

- **OpenCart Default Extensions**

This one contains various default opencart modules (bestsellers, latest, carrousel, etc), payment gateways (bank transfer, checkout on delivery), and others that will give you practical example of extensions, you can find the zip packages into `storage/marketplace/`folder so you can extract them to see the structure and adapt for you own usage.

[PreviousDatabase Schema](docs__developer-guide__database-schema.md)[NextEvents](docs__developer-guide__events.md)

Last updated 1 year ago

# Startups | OpenCart

> **Fonte / Source:** https://docs.opencart.com/developer-guide/startups

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__developer-guide__startups.md).

### Introduction

The **startup system** allow developers process code at very early stage when opening a page, it is useful for example to initialize some library for further use, handle seo related data, etc. This guide explains how to work with startups in OpenCart with practical examples.

#### Key Components

- **Startup class**: The class to execute at startup.
- **Startup registry**: The system that stores the startups.

### How to Register a Startup

1. **Create a startup class**: Write your code into the index() method.
2. **Register the startup**: Save your startup using the startup registry.
3. **Ensure accessibility**: Ensure the startup is loaded when accessing a page.

#### Example: Registering a Startup

**Step 1: Create the Startup Class**

Create a PHP class for your extension. For example, place the following code in `extension/test_module/catalog/controller/startup.php`:

Copy

```
<?php
namespace Opencart\Catalog\Controller\Extension\TestModule;

class Startup extends \Opencart\System\Engine\Controller {
  public function index(): void {
    // Process your customizations here
    $this->log->write('My startup has been successfully initialized!');
  }
  
}
```

**Step 2: Register the Startup**

Startups are typically registered in the `install()` method of your extension. For programmatic registration, use the `setting/startup` model.

Add the following code to your module’s controller:

**Step 3: Test the Startup**

- Install your module via the OpenCart admin panel (`Extensions > Installer`).
- Install your module in Extensions menu (`Extensions > Extensions`).
- Check if the startup has been correctly registered into `Extensions > Startups`.
- Open a page on front-end
- Check the log file (`System > Maintenance > Error logs`) to verify that your custom log message appears.

[PreviousEvents](docs__developer-guide__events.md)[NextTasks](docs__developer-guide__tasks.md)

Last updated 11 months ago

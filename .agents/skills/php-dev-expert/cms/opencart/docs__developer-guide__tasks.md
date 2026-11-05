# Tasks | OpenCart

> **Fonte / Source:** https://docs.opencart.com/developer-guide/tasks

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__developer-guide__tasks.md).

### Introduction

Tasks have been introduced in OpenCart v4.2, they are background processes for tasks that does not require immediate feedback, aiming to speed up the whole experience.

Tasks are run in a background process using PHP shell\_exec() function, which may overcome some server limitations while using normal PHP process.

### How to Create a task

- **Create a task class**: Write your code into the index() method.
- **Register the task**: Save your task using the task registry.
- **Ensure Accessibility**: Ensure the task is correctly working.

#### Example

**Step 1: Create the Task Class**

Create a PHP class for your extension. For example, place the following code in `extension/test_module/catalog/controller/task.php`:

Copy

```
<?php
namespace Opencart\Catalog\Controller\Extension\TestModule;

class Task extends \Opencart\System\Engine\Controller {
  public function index(): void {
    // Process your customizations here
    $this->log->write('My task has successfully started!');
  }
  
}
```

**Step 2: Register the Task**

Tasks are typically registered in the `install()` method of your extension.

Add the following code to your module’s controller:

**Step 3: Test the Task**

- Install your module via the OpenCart admin panel (`Extensions > Installer`).
- Install your module in Extensions menu (`Extensions > Extensions`).
- Open `Extension > Tasks`, you should see your new entry
- Click on the button `▶️ Run Tasks`
- Check the log file (`System > Maintenance > Error logs`) to verify that your custom log message appears.

[PreviousStartups](docs__developer-guide__startups.md)[NextCron Jobs](docs__developer-guide__cron-jobs.md)

Last updated 11 months ago

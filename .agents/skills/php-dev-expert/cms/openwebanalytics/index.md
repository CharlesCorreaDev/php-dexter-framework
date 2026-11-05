# Home · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki

---

Documentation for **Open Web Analytics Server** and the **JavaScript Tracker**.

Every page is listed in the sidebar. This page is a starting point for the most
common tasks.

- Tracking a *WordPress* site: see the [WordPress plugin](https://github.com/Open-Web-Analytics/owa-wordpress-plugin).
- Tracking from *PHP*: see the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk).

## Install and upgrade

|  |  |
| --- | --- |
| [Technical Requirements](Technical-Requirements.md) | What OWA needs to run. |
| [Installation](Installation.md) | Install from a release package. |
| [Installing from Github](Installing-from-Github.md) | Install from source, which needs a build step. |
| [Updating](Updating.md) | Upgrade an existing installation, including version-specific notes. |
| [Troubleshooting](Troubleshooting.md) | When something does not work. |

## Track a website

|  |  |
| --- | --- |
| [Javascript Tracker](Javascript-Tracker.md) | The tracker, its methods and options. |
| [Campaign Tracking](Campaign-Tracking.md) | Attributing visits to campaigns. |
| [Conversion Tracking](Conversion-Tracking.md) | Goal events and funnels. |
| [E-commerce Tracking](Ecommerce-Tracking.md) | Transactions and line items. |
| [Action Tracking](Action-Tracking.md) | Arbitrary events you define. |

## Analyze the data

|  |  |
| --- | --- |
| [Reports](Reports.md) | The reports OWA ships, and how to open one. |
| [Custom Reports](Custom-Reports.md) | Building your own. |
| [Metrics & Dimensions](Metrics-_26-Dimensions.md) | Everything that can be measured and grouped by. |
| [REST API](REST-API.md) | Reading data out over HTTP. |

## Run an installation

|  |  |
| --- | --- |
| [Keeping an Install Healthy](Keeping-An-Install-Healthy.md) | What needs to keep happening, and how to check it. |
| [Command Line Interface (CLI)](Command-Line-Interface-_28CLI_29.md) | Every command, including `instance-info`. |
| [Scheduled Jobs](Scheduled-Jobs.md) | The one cron entry, and the jobs it runs. |
| [Organizations, Properties and Profiles](Organizations-Properties-and-Profiles.md) | How a tracked site is described. |
| [User Permissions](User-Permissions.md) | Roles and capabilities. |
| [Partitioning Fact Tables](Partitioning-Fact-Tables.md) | Retention and table size. |

## Extend OWA

|  |  |
| --- | --- |
| [Framework Overview](Framework-Overview.md) | How the pieces fit together. |
| [Creating A New Module](Creating-A-New-Module.md) | Module layout and registration. |
| [Entities](Entities.md) | Objects that persist to the database. |
| [Metrics](Metrics.md) | Declaring what can be measured. |
| [Report Definitions](Report-Definitions.md) | Reports as JSON. |
| [Event Handlers](Event-Handlers.md) · [Filters](Filters.md) | Hooking into the pipeline. |
| [Schema Updater](Schema-Updater.md) | Changing a module's tables after release. |
| [Testing](Testing.md) | Running and writing the test suites. |

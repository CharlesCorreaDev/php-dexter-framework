# Pages: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/pages

---

#### [Develop](develop__develop.md)

- [Introduction](develop__guides__develop-introduction.md)
- Getting started
  - [Setting Up](develop__guides__getting-started-part-1.md)
  - [Distributing Your Plugin](develop__guides__distributing-your-plugin.md)
- Analytics
  - [Custom Report](develop__guides__custom-reports.md)
  - [Dimensions](develop__guides__dimensions.md)
  - [Widgets](develop__guides__widgets.md)
  - [Report visualizations](develop__guides__visualizing-report-data.md)
  - [Record Builder](develop__guides__writing-a-record-builder.md)
  - [JS Tracker](develop__guides__enrich-js-tracker.md)
- Tag Manager
  - [Setting Up](develop__guides__tagmanager__settingup.md)
  - [Tags](develop__guides__tagmanager__custom-tag.md)
  - [Triggers](develop__guides__tagmanager__custom-trigger.md)
  - [Variables](develop__guides__tagmanager__custom-variable.md)
  - [Parameters](develop__guides__tagmanager__parameters.md)
  - [Testing](develop__guides__tagmanager__testing.md)
  - [Developer FAQ](develop__guides__tagmanager__faq.md)
- WordPress
  - [Getting Started](develop__guides__wordpress__getting-started.md)
  - [Basics](develop__guides__wordpress__basics.md)
  - [Data Access](develop__guides__wordpress__data-access.md)
  - [Matomo Plugin](develop__guides__wordpress__matomo-plugin.md)
- Plugin Basics
  - [Themes](develop__guides__theming.md)
  - [Plugin file](develop__guides__plugin-file.md)
  - [Pages](develop__guides__pages.md)
  - [Menus](develop__guides__menus.md)
  - [Handling Request Parameters](develop__guides__request-parameters.md)
  - [API Methods](develop__guides__expose-api-methods.md)
  - [JavaScript and CSS](develop__guides__working-with-piwiks-ui.md)
  - [Plugin Settings](develop__guides__plugin-settings.md)
  - [Scheduled tasks](develop__guides__scheduled-tasks.md)
  - [Visitor log & profile](develop__guides__visitor-log-and-profile.md)
  - [Data Table](develop__guides__datatable.md)
  - [System check](develop__guides__system-check.md)
  - [Commands](develop__guides__piwik-on-the-command-line.md)
  - [Plugin Directory Structure](develop__guides__plugin-directory-structure.md)
  - [Dependency injection](develop__guides__dependency-injection.md)
  - [GDPR](develop__guides__gdpr.md)
- Security
  - [Security best practices](develop__guides__security-in-piwik.md)
  - [User permissions](develop__guides__permissions.md)
- Utils
  - [Events](develop__guides__events.md)
  - [Translations](develop__guides__translations.md)
  - [Notifications](develop__guides__notifications.md)
  - [Database](develop__guides__database.md)
  - [Extending the database](develop__guides__extending-database.md)
  - [Logging](develop__guides__logging.md)
  - [Sending Emails](develop__guides__sending-emails.md)
  - [Providing updates](develop__guides__providing-updates.md)
- [Tests](develop__guides__tests.md)
  - [PHP Tests](develop__guides__tests-php.md)
  - [UI Tests](develop__guides__tests-ui.md)
  - [JavaScript Tracker](develop__guides__tests-js-tracker.md)
  - [Running tests as GitHub Action](develop__guides__tests-github.md)
  - [Troubleshooting](develop__guides__tests-troubleshooting.md)
- Migrations
  - [Migrate Plugin from Matomo 5.X to Matomo 6](develop__guides__migrate-matomo-5-to-6.md)
  - [Migrate Plugin from Matomo 4.X to Matomo 5](develop__guides__migrate-matomo-4-to-5.md)
  - [Migrate Plugin from Matomo 3.X to Matomo 4](develop__guides__migrate-matomo-3-to-4.md)
  - [Migrate Plugin from Matomo 2.X to Matomo 3 (Matomo 3)](develop__guides__migrate-piwik-2-to-3.md)
- [Matomo In Depth](develop__piwik-in-depth.md)

#### Pages

- [Creating a page](#creating-a-page)
- [Creating an admin page](#creating-an-admin-page)
- [What's next?](#whats-next)

# Pages

A page can contain any corporate related content, key metrics, news, help pages, custom reports, contact details, information about your server, forms to manage any data and anything else.

## Creating a page

Creating a page means creating [a controller](develop__guides__controllers.md) and [a Twig template](develop__guides__views.md).

You can use the console for this:

```
$ ./console generate:controller
```

The command will ask you to enter the name of your plugin and will create two files:

- a **Controller** (`plugins/MyPlugin/Controller.php`)

  ```
  class Controller extends \Piwik\Plugin\Controller
  {
      public function index()
      {
          return $this->renderTemplate('index', array(
               'answerToLife' => 42
          ));
      }
  }
  ```

  The controller defines the view variable `answerToLife` and renders the Twig template.
- a **Twig template** (`plugins/MyPlugin/templates/index.twig`)

  ```
  {% extends 'dashboard.twig' %}

  {% block content %}
      <strong>Hello world!</strong>
      <br/>

      The answer to life is {{ answerToLife }}
  {% endblock %}
  ```

  Variables passed by controllers can be used in views, like for example here: `{{ answerToLife }}`.

  The template above is extending the dashboard template: the logo and the top menu will be included in your page.

Using a Twig template to generate your page is optional: you can also generate any content by returning a string in your controller action.

Now that your page is created, you can access it at the following URL: [/index.php?module=MyPlugin&action=index&…](http://localhost:8000/index.php?module=MyPlugin&action=index&idSite=1&period=day&date=yesterday). It should look like this:

![](https://matomo.org/wp-content/uploads/2014/09/action_example.png)

## Creating an admin page

If you would like to add the admin menu on the left you have to modify the following parts:

- extend `\Piwik\Plugin\ControllerAdmin` instead of `\Piwik\Plugin\Controller`
- extend the template `admin.twig` instead of `dashboard.twig`
- define a headline using a `<h2>` element

```
{% extends 'admin.twig' %}

{% block content %}
    <h2>Hello world!</h2>
    <br/>

    The answer to life is {{ answerToLife }}
{% endblock %}
```

The result should look like this:

![](https://matomo.org/wp-content/uploads/2014/09/action_admin_example.png)

Note: if you just want **to make your plugin configurable** you should [use the Plugin Settings instead](develop__guides__plugin-settings.md).

## What's next?

So far you have created a page but you can still not access it. To add it to one of the menus, keep on reading the [Menus guide](develop__guides__menus.md).

You can also read the following guides:

- [Controllers](develop__guides__controllers.md)
- [Views](develop__guides__views.md)
- [Security in Matomo (formerly Piwik)](develop__guides__security-in-piwik.md)

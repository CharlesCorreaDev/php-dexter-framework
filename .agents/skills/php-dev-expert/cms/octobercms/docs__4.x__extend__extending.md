# Extension Methodology - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/extending.html

---

# Extension Methodology

Learn about the common methods used to extend October CMS.

- [Extending by Plugin Registration](docs__4.x__extend__extending.md#extending-by-plugin-registration)
- [Extending with Events](docs__4.x__extend__extending.md#extending-with-events)
- [Subscribing to Events](#subscribing-to-events)
- [Declaring / Firing Events](#declaring-firing-events)
- [Extending Backend Views](docs__4.x__extend__extending.md#extending-backend-views)
- [Usage Examples](docs__4.x__extend__extending.md#usage-examples)
- [Extending a User Model](#extending-a-user-model)
- [Extending Backend Forms](#extending-backend-forms)
- [Extending a Backend List](#extending-a-backend-list)
- [Extending a Component](#extending-a-component)

[More...](#)

## [#](#extending-by-plugin-registration) Extending by Plugin Registration

In almost all situations, extending October CMS happens in the plugin registration file, which is essentially a [Laravel Service Provider  (opens new window)](https://laravel.com/docs/12.x/providers). The registration file is called **Plugin.php** and is found in the root directory of a plugin.

The following extension methods are available to override in the plugin registration class:

| Method | Description |
| --- | --- |
| **register()** | called when the plugin is first registered, called before `boot`. |
| **boot()** | called right before the request route, called after `register`. |
| **registerMarkupTags()** | registers [additional markup tags](docs__4.x__extend__twig-tags.md) that can be used in the CMS. |
| **registerComponents()** | registers any [CMS components](docs__4.x__extend__cms-components.md) used by this plugin. |
| **registerNavigation()** | registers [backend navigation menu items](docs__4.x__extend__backend__navigation.md) for this plugin. |
| **registerPermissions()** | registers any [backend permissions](docs__4.x__extend__backend__permissions.md) used by this plugin. |
| **registerSettings()** | registers any [backend configuration links](docs__4.x__extend__settings__settings.md) used by this plugin. |
| **registerFormWidgets()** | registers any [backend form widgets](docs__4.x__extend__forms__form-widgets.md) supplied by this plugin. |
| **registerDashboards()** | registers any [dashboards](docs__4.x__extend__dashboards__dash-controller.md), [report widgets](docs__4.x__extend__dashboards__report-widgets.md) and [data sources](docs__4.x__extend__dashboards__data-sources.md) supplied by this plugin. |
| **registerListColumnTypes()** | registers any [custom list column types](docs__4.x__extend__lists__list-controller.md) supplied by this plugin. |
| **registerMailTemplates()** | registers any [mail view templates](docs__4.x__extend__system__sending-mail.md) supplied by this plugin. |
| **registerMailLayouts()** | registers any [mail view layouts](docs__4.x__extend__system__sending-mail.md) supplied by this plugin. |
| **registerMailPartials()** | registers any [mail view partials](docs__4.x__extend__system__sending-mail.md) supplied by this plugin. |
| **registerSchedule()** | registers [scheduled tasks](docs__4.x__extend__system__scheduling.md) that are executed on a regular basis. |
| **registerContentFields()** | registers [content fields](docs__4.x__extend__tailor-fields.md) that are used by Tailor blueprints. |

## [#](#extending-with-events) Extending with Events

The [Event service](docs__4.x__extend__services__event.md) is the primary way to inject or modify the functionality of core classes or other plugins. This service can be imported for use in any class by adding `use Event` to the top of your PHP file (after the namespace statement) to import the Event facade.

### [#](#subscribing-to-events) Subscribing to Events

The most common place to subscribe to an event is the `boot` method of the plugin registration file. For example, when a user is first registered you might want to add them to a third party mailing list, this could be achieved by subscribing to a `rainlab.user.register` global event.

```
class Plugin extends PluginBase
{
    // ...

    public function boot()
    {
        Event::listen('rainlab.user.register', function ($user) {
            // Code to register $user->email to mailing list
        });
    }
}
```

The same can be achieved by extending the model's constructor and using a local event.

```
User::extend(function ($model) {
    $model->bindEvent('user.register', function () use ($model) {
        // Code to register $model->email to mailing list
    });
});
```

### [#](#declaring-firing-events) Declaring / Firing Events

Fire events locally by calling `fireEvent()` on an instance of an object that implements `October\Rain\Support\Traits\Emitter`. Since local events are only fired on a specific object instance, it is not required to namespace them as it is less likely that a given project would have multiple events with the same name being fired on the same objects within a local context.

```
$this->fireEvent('post.beforePost', [$firstParam, $secondParam]);
```

Global events are fired by calling `Event::fire()`. As these events are global across the entire application, it is best practice to namespace them by including the vendor information in the name of the event. If your plugin Author is ACME and the plugin name is Blog, then any global events provided by the ACME.Blog plugin should be prefixed with `acme.blog`.

```
Event::fire('acme.blog.post.beforePost', [$firstParam, $secondParam]);
```

If both global and local events are provided at the same place it's best practice to fire the local event before the global event so that the local event takes priority. Additionally, the global event should provide the object instance that the local event was fired on as the first parameter.

```
$this->fireEvent('post.beforePost', [$firstParam, $secondParam]);
Event::fire('rainlab.blog.beforePost', [$this, $firstParam, $secondParam]);
```

Once this event has been subscribed to, the parameters are available in the handler method. For example:

```
// Global
Event::listen('acme.blog.post.beforePost', function ($post, $param1, $param2) {
    Log::info($post->name . 'posted. Parameters: ' . $param1 . ' ' . $param2);
});

// Local
$post->bindEvent('post.beforePost', function ($param1, $param2) use ($post) {
    Log::info($post->name . 'posted. Parameters: ' . $param1 . ' ' . $param2);
});
```

## [#](#extending-backend-views) Extending Backend Views

Sometimes you may wish to allow a backend view file or partial to be extended, such as a toolbar. This is possible using the `fireViewEvent` method found in all backend controllers.

Place this code in your view file:

```
<div class="footer-area-extension">
    <?= $this->fireViewEvent('backend.auth.extendSigninView', [$firstParam]) ?>
</div>
```

This will allow other plugins to inject HTML to this area by hooking the event and returning the desired markup.

```
Event::listen('backend.auth.extendSigninView', function ($controller, $firstParam) {
    return '<a href="#">Sign in with Google!</a>';
});
```

The first parameter in the event handler will always be the calling object (the controller).

The above example would output the following markup:

```
<div class="footer-area-extension">
    <a href="#">Sign in with Google!</a>
</div>
```

## [#](#usage-examples) Usage Examples

These are some practical examples of how events can be used.

### [#](#extending-a-user-model) Extending a User Model

This example will modify the `model.getAttribute` event of the `User` model by binding to its local event. This is carried out inside the `boot` method of the plugin registration file. In both cases, when the `$model->foo` attribute is accessed it will return the value **bar**.

```
// Local event hook that affects all users
User::extend(function ($model) {
    $model->bindEvent('model.getAttribute', function ($attribute, $value) {
        if ($attribute === 'foo') {
            return 'bar';
        }
    });
});

// Double event hook that affects user #2 only
User::extend(function ($model) {
    $model->bindEvent('model.afterFetch', function () use ($model) {
        if ($model->id !== 2) {
            return;
        }

        $model->bindEvent('model.getAttribute', function ($attribute, $value) {
            if ($attribute === 'foo') {
                return 'bar';
            }
        });
    });
});
```

To add model validation for introduced fields, hook into the `beforeValidate` event and throw a `ValidationException` exception.

```
User::extend(function ($model) {
    $model->bindEvent('model.beforeValidate', function () use ($model) {
        if (!$model->billing_first_name) {
            throw new \ValidationException(['billing_first_name' => 'First name is required']);
        }
    });
});
```

### [#](#extending-backend-forms) Extending Backend Forms

There are a number of ways to extend backend forms, see the [Backend Controller article](docs__4.x__extend__forms__form-controller.md) for more information.

This example will listen to the `backend.form.extendFields` global event of the `Backend\Widget\Form` widget and inject some extra fields when the Form widget is being used to modify a user. This event is also subscribed inside the `boot` method of the plugin registration file.

```
// Extend all backend form usage
Event::listen('backend.form.extendFields', function($widget) {
    // Only apply this listener when the Users controller is being used
    if (!$widget->getController() instanceof \RainLab\User\Controllers\Users) {
        return;
    }

    // Only apply this listener when the User model is being modified
    if (!$widget->model instanceof \RainLab\User\Models\User) {
        return;
    }

    // Only apply this listener when the Form widget in question is a root-level
    // Form widget (not a repeater, nestedform, etc)
    if ($widget->isNested) {
        return;
    }

    // Add an extra birthday field
    $widget->addFields([
        'birthday' => [
            'label' => 'Birthday',
            'comment' => 'Select the users birthday',
            'type' => 'datepicker'
        ]
    ]);

    // Remove a Surname field
    $widget->removeField('surname');
});
```

You may also use the `backend.form.extendFieldsBefore` event to add fields.

### [#](#extending-a-backend-list) Extending a Backend List

This example will modify the `backend.list.extendColumns` global event of the `Backend\Widget\Lists` class and inject some extra columns values under the conditions that the list is being used to modify a user. This event is also subscribed inside the `boot` method of the plugin registration file.

```
// Extend all backend list usage
Event::listen('backend.list.extendColumns', function ($widget) {
    // Only for the User controller
    if (!$widget->getController() instanceof \RainLab\User\Controllers\Users) {
        return;
    }

    // Only for the User model
    if (!$widget->model instanceof \RainLab\User\Models\User) {
        return;
    }

    // Add an extra birthday column
    $widget->addColumns([
        'birthday' => [
            'label' => 'Birthday'
        ],
    ]);

    // Remove a Surname column
    $widget->removeColumn('surname');
});
```

### [#](#extending-a-component) Extending a Component

This example will declare a new global event `rainlab.forum.topic.post` and local event called `topic.post` inside a `Topic` component. This is carried out in the [component class definition](docs__4.x__extend__cms-components.md).

```
class Topic extends ComponentBase
{
    public function onPost()
    {
        // ...

        $this->fireEvent('topic.post', [$post, $postUrl]);

        Event::fire('rainlab.forum.topic.post', [$this, $post, $postUrl]);
    }
}
```

Next this will demonstrate how to hook this new event from inside the [Layout Execution Life Cycle](docs__4.x__cms__themes__layouts.md). This will write to the trace log when the `onPost` event handler is called inside the `Topic` component (above).

```
[topic]
slug = "{{ :slug }}"
```

```
<?
function onInit()
{
    $this->topic->bindEvent('topic.post', function($post, $postUrl) {
        trace_log('A post has been submitted at '.$postUrl);
    });
}
?>
```

#### [#](#see-also) See Also

- [Event Service](docs__4.x__extend__services__event.md)

← [MultisiteGroup](docs__4.x__extend__multisite__multisite-group.md)[Building Twig Tags](docs__4.x__extend__twig-tags.md) →

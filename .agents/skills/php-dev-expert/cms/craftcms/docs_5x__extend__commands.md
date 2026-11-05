# Console Commands | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/commands

---

# Console Commands

- ### On this Page

  - [Module Setup](docs_5x__extend__commands.md#module-setup)
  - [Adding a Controller](docs_5x__extend__commands.md#adding-a-controller)
  - [Registering Custom Console Commands](docs_5x__extend__commands.md#registering-custom-console-commands)
  - [Output Helpers](docs_5x__extend__commands.md#output-helpers)

Plugins and modules can add additional [console commands](docs_5x__reference__cli.md)
to Craft, which will be available via the `craft` executable in the terminal.

Console commands are implemented very similarly to [controllers](docs_5x__extend__controllers.md), except that they should live within a `console/controllers/` folder within your plugin or module’s base source folder, and they should extend [craft\console\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controller.html) (rather than [craft\web\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html)).

For the most part, writing console commands for Craft is identical to writing console commands for Yii, so be sure to read the [Yii documentation  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#create-command) as a starting point.

## [#](#module-setup)Module Setup

Plugins are [automatically configured](docs_5x__extend__plugin-guide.md#automatic-defaults) to locate web and console controllers. Modules, on the other hand, must explicitly define their root `controllerNamespace` for both request types:

```
namespace acme;

use Craft;

class Module extends \yii\base\Module
{
    public function init()
    {
        // Define a custom alias named after the namespace:
        Craft::setAlias('@acme', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request:
        if (Craft::$app->getRequest()->getIsConsoleRequest()) {
            $this->controllerNamespace = 'acme\\console\\controllers';
        } else {
            $this->controllerNamespace = 'acme\\controllers';
        }

        // Call init() *after* setting the `controllerNamespace` so Yii doesn’t try and set it:
        parent::init();

        // Additional custom initialization code goes here...
    }
}
```

You’ll also need to make sure your module is getting [bootstrapped  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/runtime-bootstrapping) on every request from `config/app.php` (or `config/app.console.php`):

```
return [
    'bootstrap' => ['acme'],
    'modules' => [
        'acme' => acme\Module::class,
    ],
];
```

## [#](#adding-a-controller)Adding a Controller

Any classes within the folder corresponding to your [`controllerNamespace` setting](#module-setup) will be automatically discovered when the console application initializes. Every controller has a default action (run when an action is not specified), and supports [options  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#options).

Create `GreetController.php` in `modules/console/controllers/`, with this content:

```
namespace modules\console\controllers;

use craft\console\Controller;
use craft\helpers\Console;
use yii\console\ExitCode;

/**
 * Greet Controller
 */
class GreetController extends Controller
{
    public $defaultAction = 'developer';

    /**
     * @var string|null The name used when referring to the runner.
     */
    public ?string $who = null;

    public function options($actionID): array
    {
        $options = parent::options($actionID);

        // Always allow a --who flag:
        $options[] = 'who';

        switch ($actionID) {
            case 'developer':
                // Action-specific arguments:
                // $options[] = '...';
                break;
        }

        return $options;
    }

    /**
     * Issues a greeting to new Craft developers.
     */
    public function actionDeveloper(): int
    {
        $who = $this->who ?? 'world';

        $this->stdout("Hello, {$who}!", Console::FG_GREEN);

        return ExitCode::OK;
    }
}
```

### [#](#running-actions)Running Actions

Supposing your [module ID](docs_5x__extend__module-guide.md#preparation) or plugin handle was `acme`, you would access your controller like this:

```
# Run the "default action":
php craft acme/greet
# -> Hello, world!

# Run the developer-specific greeting:
php craft acme/greet/developer
# -> Hello, world!

# Pass a name:
php craft acme/greet/developer --who="Marvin"
# -> Hello, Marvin!
```

### [#](#options)Options

In the example, we’ve declared a public class property, and set up a mapping for the single *action ID*. Any [option  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#options) can be set using bash’s familiar `--kebab-case-option-name` syntax.

Use the [`optionAliases()` method  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#options-aliases) to define shorthand options like `-m`.

### [#](#arguments)Arguments

Actions can declare arguments that will be processed from the command’s input. Arguments are separated by spaces, and the values are processed according to their declared types:

```
public function actionDeveloper(string $emotion, ?int $days = null): int
{
    $who = $this->who ?? 'world';

    if ($days >= 500) {
        $this->stderr("Sorry, I don’t remember you, {$who}!", Console::FG_YELLOW);

        return ExitCode::TEMPFAIL;
    }

    $this->stdout("Hello, {$who}! I am {$emotion} to see you!", Console::FG_GREEN);

    return ExitCode::OK;
}
```

Read more about passing [arguments  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#arguments) to console commands.

### [#](#help-text)Help Text

To assist CLI users, Yii automatically parses docblocks from your controller’s action methods (as well as any public properties matching options you’ve registered) and displays them when running `php craft help`.

```
php craft help acme/greet
# -> List of actions

php craft help acme/greet/developer
# -> Action description, list of available --options

php craft acme/greet --help
# This works the same way as the main `help` command!
```

## [#](#registering-custom-console-commands)Registering Custom Console Commands

You can register custom console commands on Craft’s own controllers, or plugin-supplied controllers, so long as they extend [craft\console\Controller  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controller.html). For example, plugins that supply custom element types can add their own actions to the [resave  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controllers-resavecontroller.html) controller.

To do that, use the [craft\console\Controller::EVENT\_DEFINE\_ACTIONS  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controller.html#event-define-actions) event.

```
use craft\events\DefineConsoleActionsEvent;
use craft\console\Controller;
use craft\console\controllers\ResaveController;
use yii\base\Event;

Event::on(
    ResaveController::class,
    Controller::EVENT_DEFINE_ACTIONS,
    function(DefineConsoleActionsEvent $event) {
        $event->actions['products'] = [
            'options' => ['type'],
            'helpSummary' => 'Re-saves products.',
            'action' => function($params): int {
                /** @var ResaveController $controller */
                $controller = Craft::$app->controller;
                $query = Product::find();
                if ($controller->type) {
                    $query->type(explode(',', $controller->type));
                }
                return $controller->saveElements($query);
            }
        ];
    }
);
```

## [#](#output-helpers)Output Helpers

Internally, Craft keeps console feedback consistent with a suite of helper methods provided by [craft\console\ControllerTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controllertrait.html).

- **Success** — Output a message with a ✅ icon: `$this->success('Done!');`
- **Failure** — Output a message prefixed with an `X`: `$this->failure('Something went wrong.');`
- **Tips** — Output a message with a 💡 icon: `$this->tip('Try this, next!');`
- **Warning** — Output a message with a ⚠️ icon: `$this->warning('Check your input and try again.');`
- **Generic “Note”** — Output a message with a custom icon or prefix: `$this->note('Eat your vegetables!', '🥬 ');`

The above methods run the `$note` argument through [craft\console\ControllerTrait::markdownToAnsi()  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-controllertrait.html#method-markdowntoansi), which provides some basic formatting for long messages. All methods write to `stdout`—use `$this->stderr()` if you need to target a particular output stream.

You can also format messages directly, using [yii\console\Controller::stdout()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-console-controller#stdout()-detail). Additional [craft\helpers\Console  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-console.html) constants can be passed after the first argument (the message itself) to decorate the text output:

```
use craft\helpers\Console;

$this->stdout(
    'This message will be bold and vibrant!',
    Console::FG_RED,
    Console::BG_YELLOW,
    Console::BOLD,
    // ...
);
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/commands.md)

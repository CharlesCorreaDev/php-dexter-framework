# Plugin API · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Plugin-API

---

# Plugin Resources

*Also see [Plugin Hooks](wiki__Plugin-Hooks.md), [Javascript API](wiki__Javascript-API.md), [Plugin Events](wiki__Plugin-Events.md)*

Plugins extend the functionality of Roundcube.
They are not part of the core application but can be installed and activated individually.
Roundcube comes with a number of plugins, and more third-party plugins are available for download.

## Installing and Activating Plugins

After downloading a plugin, extract (unzip) it in Roundcube's `plugins` directory. Doing this correctly should result in a subdirectory `plugins/<name of plugin>` which contains all of the plugin's files.

A plugin is not used until you enable it by adding its directory name to the config option `plugins`, as an array element. This is done by editing your local `config/config.inc.php` file. Only plugins listed in the array will be enabled.

For example, to enable plugins named `additional_message_headers` and `archive`, `config/config.inc.php` should contain this line:

```
    $config['plugins'] = array('additional_message_headers', 'archive');
```

To disable a plugin, just remove it from the list.

### Plugin Repository

The official plugin repository lists plugins written by community members and they can be installed and updated from there using [Composer](http://getcomposer.org). Visit [plugins.roundcube.net](https://plugins.roundcube.net) and read the instructions how to install or publish plugins.

## How to Write a Plugin

### Names, Files and Locations

Each plugin defines a folder in the local plugins directory `[roundcuberoot]/plugins`.
Make sure you choose a unique, unix-style name for your plugin folder. A plugin can be built with any number of files inside this folder but there needs to be one file named the same as the folder itself (with .php added) which holds the plugin class definition. This class extends the `rcube_plugin` class and has again the same name as the plugin folder itself.

For example, if your plugin is called *Fancy Emoticons* the unix-name will probably be `fancy_emoticons`. This will lead to the following file structure:

```
plugins/
  fancy_emoticons/
    composer.json
    fancy_emoticons.php
    localization/
    media/
```

Inside `fancy_emoticons.php` you create the plugin class with the name `fancy_emoticons` which will be explained in the next section.

### The Plugin class

Roundcube defines an abstract class named `rcube_plugin` which provides basic functions and connections to the internal API. Each plugin consists of a class which extends `rcube_plugin`. The plugin API instantiates a plugin object and then calls the method `init()` which has to be implemented by the derived plugin class. This startup method is the place where a plugin registers hooks, actions and scripts that will be passed to the client.

When the `init()` method is invoked Roundcube is already fully initialized. If you wanted to execute some code earlier in the process (e.g. before session initialization), use `onload()` method. This is a solution for a special use-case, most plugins should use the `init()` method.

To continue our sample plugin *Fancy Emoticons*, the plugin class could look like this:

```
    /**
     * Fancy Emoticons
     *
     * Sample plugin to replace emoticons in plain text message body with real icons
     *
     * @version 1.0
     * @author Thomas Bruederli
     * @url http://roundcube.net/plugins/fancy_emoticons
     */
    class fancy_emoticons extends rcube_plugin
    {
      public $task = 'mail';
      private $map;
    
      function init()
      {
        $this->add_hook('message_part_after', array($this, 'replace'));
      
        $this->map = array(
          ':)'  => html::img(array('src' => $this->urlbase.'media/smile.gif', 'alt' => ':)')),
          ':-)' => html::img(array('src' => $this->urlbase.'media/smile.gif', 'alt' => ':-)')),
          ':('  => html::img(array('src' => $this->urlbase.'media/cry.gif', 'alt' => ':(')),
          ':-(' => html::img(array('src' => $this->urlbase.'media/cry.gif', 'alt' => ':-(')),
        );
      }
    
      function replace($args)
      {
        if ($args['type'] == 'plain')
          return array('body' => strtr($args['body'], $this->map));
      
        return null;
      }
    }
```

Let's have a deeper look at the above example:

- The plugin class should be preceded by a comment block that describes the plugin.
- If your plugin is meant to only run in a certain task (e.g. mail,addressbook,settings) you should specify a public property `$task`. If this property is set the plugin will only be activated within that specific task in order to save memory and performance in all the other tasks.
- The method `init()` is mandatory and first links the hook *message\_part\_after* to the object method `replace`.
- The callback method `replace` receives one argument containing context-specific data. In this example we first check if the message type is `plain` and then the `body` field is altered and returned. The plugin API will replace the returned fields in it's original context.

### Plugin hooks

The way plugin hooks work is that at various times while Roundcube is processing, it checks to see if any plugins have registered functions to run at that time, and if so, the functions are run (by executing a "hook"). These functions may modify or extend the default behavior of Roundcube.

Registration of hooks is done by calling

```
    $this->add_hook('hook-name', $callback);
```

where the second argument is a [PHP Callback](http://php.net/manual/en/language.pseudo-types.php#language.types.callback) which can link to a simple function or an object method.

The registered function receives one hash array as argument which contains specific data of the current context depending on the hook. See [Plugin Hooks](wiki__Plugin-Hooks.md) for a complete description of all hooks and their argument fields. The argument var may be altered by the callback function and can (even partially) be returned to the application.

### Client scripts and UI elements

Of course there is more to do with plugins than just catching events on the server side. The plugin API also enables you to extend the UI and the client functionality.

First step is to add JavaScript code to a specific page/action. Create a script file in your plugin folder and then include it in the `init()` method of your plugin class with

```
    $this->include_script('client.js');
```

The client script can actually make use of all the methods of the Roundcube application object. This application object - which can be accessed by `window.rcmail` - also provides hooks but in a slightly different way: similar to the browser DOM one can register event listeners using the following methods:

```
    rcmail.addEventListener('event', callback);
    rcmail.removeEventListener('event', callback);
```

For a detailed list of events supported by the app see [Plugin Events](wiki__Plugin-Events.md).
The most important event of course is `init`. This is where your plugin can add buttons and register its own commands to the main application script. Here's a sample showing what a plugin script could look like:

```
    rcmail.addEventListener('init', function(evt) {
      // create custom button
      var button = $('<A>').attr('id', 'rcmSampleButton').html(rcmail.gettext('buttontitle', 'sampleplugin'));
      button.bind('click', function(e){ return rcmail.command('plugin.samplecmd', this); });
      
      // add and register
      rcmail.add_element(button, 'toolbar');
      rcmail.register_button('plugin.samplecmd', 'rcmSampleButton', 'link');
      rcmail.register_command('plugin.samplecmd', sample_handler, true);
    });
```

With `rcmail.add_element(button,'toolbar')` the button is appended to the toolbar container. Then `rcmail.register_button()` tells the application where the button is and which command it is responsible for. And finally `rcmail.register_command()` links the custom command (triggered by the onclick handler of the button) with the callback function of the plugin client script. For a detailed documentation of the client API, see [Javascript API](wiki__Javascript-API.md).

[jQuery](http://jquery.com/) is an integrated part of Roundcube which allows you to make use of the very comfortable jQuery functions when writing plugin scripts.

### Custom actions

Now you still need to combine the client functionality of your plugin with server-side actions. The client script can send GET or POST ajax-requests to the server by using `rcmail.http_get('plugin.someaction', ...)` and `rcmail.http_post('plugin.someaction', ...)`.

In order to direct these requests to the right function of your plugin, a custom action (e.g. 'plugin.someaction') is registered in the `init()` method of the plugin class:

```
    $this->register_action('plugin.someaction', array($this, 'request_handler'));
```

Now HTTP requests of the form `./?_task=mail&_action=plugin.someaction` will trigger the registered callback function. This function is responsible to process the request and send a valid response back to the client. Calling `rcmail::get_instance()->output->send('plugin')` at the end of the function will do the job.

Custom actions are not only meant to serve ajax-requests but can also extend the application with custom screens and steps.

### Ajax requests and callbacks

If your custom actions on the server side need to send back some data and trigger a custom callback function on the client, the client scripts can register an event and by sending a command with the magic prefix "plugin." the according event on the client will be triggered. Here's an example how this could look like:

*Send ajax request on client:*

```
    rcmail.addEventListener('plugin.somecallback', some_callback_function);
    rcmail.http_post('plugin.someaction', ...);
```

*Process request on the server:*

```
    function init()
    {
      $this->register_action('plugin.someaction', array($this, 'request_handler'));
      ...
    }
    
    function request_handler($args)
    {
      $rcmail = rcmail::get_instance();
      $rcmail->output->command('plugin.somecallback', array('message' => 'done.'));
    }
```

*Processing response data on the client again:*

```
    function some_callback_function(response)
    {
      $('#somecontainer').html(response.message);
    }
```

Please note that the callback function can only receive one single argument. Therefore you need to pack all the response data into an array which will automatically be converted into a javascript object.

### Templates

In order to render HTML pages from a plugin there exists a blank skin template named `plugin` which can be used. This template defines one object container where the HTML content is put into. Your plugin therefore needs to define a handler function which is called once the template engine processes the placeholder tag:

```
    $this->register_handler('plugin.body', array($this, 'generate_html'));
    
    function generate_html()
    {
       ...
       return($the_content);
    }
```

If the blank `plugin` template does not fulfill your needs, you can create your own templates. You can put these inside a sub directory `skins/default/` of your plugin:

```
plugins/
  my_plugin/
    my_plugin.php
    localization/
    skins/default/templates/mytemplate.html
```

`mytemplate.html` can have one or more object containers that can be filled by your plugin. You can use plugin.html from the default skin as an example to start with.

```
    <roundcube:object name="plugin.my_content" />
```

In your plugin code, you need to link this container with a function using a handler:

```
    $this->register_handler('plugin.my_content', array($this, 'my_function'));
    
    function my_function()
    {
      $content = "Foo";
      return($content);
    }
```

Finally, to instruct roundcube to show your template:

```
        $rcmail = rcmail::get_instance();
        $rcmail->output->set_pagetitle('my_title');
        $rcmail->output->send('my_plugin.mytemplate');
```

When Roundcube renders the template it encounters the container objects, and for each object will call the specific handler function to generate the HTML.

`$this->include_script(...)` , `$this->include_stylesheet(...)` and others can be used to include Javascript and CSS. Have a look at the [rcube\_template](http://roundcube.net/doc/phpdoc/View/rcube_template.html) class to find methods for adding stuff to the HTML output of your handler function.

### Plugin Configuration

Each plugin can have its own configuration file:

```
plugins/
  fancy_emoticons/
    fancy_emoticons.php
    config.inc.php
    localization/
    media/
```

The file can be loaded through an API call:

```
    $this->load_config();
```

Even though `config.inc.php` is the default name, you can use your own filename as well. This allows you to do things like:

```
    $this->load_config('config.inc.php.dist');
    $this->load_config('config.inc.php');
```

This will load a distribution config file, and then merge a local configuration file overriding any settings.

### Internationalization

Plugins that add UI elements usually have their own texts to name and describe things. It is easy to use the integrated localization system of Roundcube to display texts in the user's language.

First, create php-style localization files that contain the custom texts in an array named `$labels`, just as in `program/localization/*/labels.inc`.

Then put these files in a subfolder of your plugin folder and name them like `[langcode].inc`. The *langcode* is a combination of language and country code (see [source:trunk/program/localization/index.inc] for a list of language codes). Having a localization file named *en\_US.inc* is mandatory!

Finally, tell the plugin API where to search for texts by calling

```
    $this->add_texts('localization/', true);
```

in the `init()` sequence of your plugin. The first argument is the folder name (relative to the plugin folder) which contains all the localization files. The seconds argument makes the texts available on the client if set to true.

Now you can access the localized texts with `$this->gettext('somelabel')` in PHP and `rcmail.gettext('somelabel', 'plugin-name')` in JavaScript.

#### Publish your plugin's texts for translation

For Roundcube we use [Transifex](https://explore.transifex.com/roundcube/roundcube-webmail/) for collaborative translations. You can add your plugin's texts to our translation repository as well in order to get them translated by our volunteering translators. In order to do so, please send us a public URL to your en\_US.inc source file to hello[at]roundcube.net and we'll add it as a resource to our Transifex account. The translation system will periodically pull the latest version from that URL.

Finally, register at Transifex.com and read [the documentation](https://developers.transifex.com/docs/cli) about how to pull translations using the tx command line utility.
As there are a couple of differences in localization names between roundcube and transifex, please also check the [tx configuration](https://github.com/roundcube/roundcubemail/blob/master/.tx/config) of the main roundcube repository for a correct list of language mappings. You need to add this configuration before running tx the first time. E.g. if you already have a `fr.inc` file in your project you first need to remove that file manually, then run `tx pull` again to retrieve a `fr_FR.inc` file.

## Publishing Plugins

We strongly encourage plugin developers to maintain the code in a git or svn repository, best done by creating separate repositories for every single plugin. There are many platforms which offer such repositories for free (e.g. [Github](http://github.com), [Gitorious](http://gitorious.org) or [Sourceforge](http://sourceforge.net)).

### Plugin Repository

Roundcube Plugin are published to [packagist.org](https://packagist.org) which is the default repository for PHP packages. Using [Composer](https://getcomposer.org/), plugins can be installed and updated from the repository. As a plugin developer you can publish your plugin on that platform and by using git or svn repositories, the latest version you check in there will automatically find its way to the repository and finally to the users.

Visit [plugins.roundcube.net](https://plugins.roundcube.net) and read the instructions how to publish plugins there.

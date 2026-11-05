# Javascript API · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Javascript-API

---

# JavaScript API Documentation

Together with the [Plugin API](wiki__Plugin-API.md) Roundcube allows plugins and third party scripts to access the client object and register specific event listeners as well as custom actions and buttons.

## Adding event listeners

This is generally done with the following two functions:

```
    rcmail.addEventListener('event', callback);
    rcmail.removeEventListener('event', callback);
```

The `callback` function gets the event object as one single argument. This event object usually contains event-specific properties. These are listed as *arguments* below the according event description.

There are yet a few events that your script can subscribe to listed in [Plugin Events](wiki__Plugin-Events.md).

## Custom actions and UI elements

Of course a plugin can add its own buttons somewhere in the document and let them call specific functions directly. Nevertheless we recommend to use the command interface of the RoundCube client. It will automatically handle all UI elements linked with a certain command and allows other plugins to hook into your custom commands.

As you can see in the [example](wiki__Plugin-API.md#client-scripts-and-ui-elements), there are a few methods you should know:

```
    rcmail.add_element(node, container)
```

This method adds the given DOM node to a specific container of the current page. Containers can be extended with custom buttons and other UI elements. Since each skin can build the HTML page individually it's strongly recommended to use this method rather than appending DOM nodes directly to some contains. Roundcube's default skin defines following containers: 'taskbar', 'toolbar', 'tabs', 'userprefs', 'messagemenu', 'markmenu'.

```
    rcmail.register_button(command, DomId, type, act, sel, over)
```

Buttons can be linked with the command they're triggering. This is useful if you make use of the `rcmail.enable_command()` method to toggle the command status. All linked buttons will automatically be activated/deactivated.

Arguments:

- command: *String of the command linked with this button*
- DomID: *ID of the button node*
- type: `image|input|link` *Type of the button*
- act: *CSS class or image src for active state*
- sel: *CSS class or image src for selected state*
- over: *CSS class or image src for mouse overs*

```
    rcmail.register_command(command, handler, enable)
```

Custom commands have to be registered together with the callback function which should be executed if the command is triggered. The third argument activates the command right after registration.

```
    rcmail.enable_command(command[, command, ...], enable)
```

Finally a plugin can toggle the status of its custom commands using this method. Several commands can be enabled/disabled with one call, the last argument just has to be a boolean value that either enables or disabled all commands in the arguments list.

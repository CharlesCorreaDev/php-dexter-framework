# Group Tools — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/group-tools.html

---

# Group Tools[](#group-tools "Permalink to this heading")

Elgg groups allow group administrators to enable/disable various tools available within a group.
These tools are provided by other plugins like blog or file.

Plugins can access group tool register via `elgg()->group_tools`.

```
elgg()->group_tools->register('my-tool', [
        'default_on' => false, // default is true
        'label' => elgg_echo('my-tool:checkbox:label'),
        'priority' => 300, // display this earlier than other modules/tools
]);
```

A registered tool will have an option to be toggled on the group edit form, and can have a profile view module associated with it.
To add a profile module, simply add a corresponding view as `groups/profile/module/<tool_name>`. This view will only be called
if the tool is enabled.

If you simply wish to list some content in the group you can use the `groups/profile/module` view with some additional parameters.

> - `entity_type`: in combination with the `entity_subtype` it can generate everything the module needs
> - `entity_subtype`: in combination with the `entity_type` it can generate everything the module needs
> - `no_results`: custom no results found text

The following will be automaticly generated:

> - `title`: based on the language key `collection:<entity_type>:<entity_subtype>:group`
> - `content`: `elgg_list_entities()` based on given type/subtype
> - `all_link`: based on the route name `collection:<entity_type>:<entity_subtype>:group`
> - `add_link`: based on the route name `add:<entity_type>:<entity_subtype>:group` and with a permissions check to the given type/subtype

```
// file: groups/profile/module/my-tool.php

// if you wish to list some content (eg. files) in the group
// you can use the following
$params = [
        'entity_type' => 'object',
        'entity_subtype' => 'file',
        'no_results' => elgg_echo('file:none'),
];
$params = $params + $vars;

echo elgg_view('groups/profile/module', $params);
```

Alternatively you can generate your own title and content

```
// file: groups/profile/module/my-tool.php

echo elgg_view('groups/profile/module', [
        'title' => elgg_echo('my-tool'),
        'content' => 'Hello, world!',
]);
```

You can programmically enable and disable tools for a given group:

```
$group = get_entity($group_guid);

// enables the file tool for the group
$group->enableTool('file');

// disables the file tool for the group
$group->disableTool('file');
```

If you want to allow a certain feature in a group only if the group tool option is enabled, you can check this using `\ElggGroup::isToolEnabled($tool_option)`.

It is also a possibility to use a gatekeeper function to prevent access to a group page based on an enabled tool.

```
elgg_group_tool_gatekeeper('file', $group);
```

See also

Read more about gatekeepers here: [Gatekeepers](guides__authentication.md#authentication-gatekeepers)

If you need the configured group tool options for a specific group you can use the `elgg()->group_tools->group($group)` function.

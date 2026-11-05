# Vue Components - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/system/vue-components.html

---

# Vue Components

Build reactive user interfaces with Vue 3 components.

- [Directory Structure](docs__4.x__extend__system__vue-components.md#directory-structure)
- [Component Class](docs__4.x__extend__system__vue-components.md#component-class)
- [Requiring Dependencies](#requiring-dependencies)
- [Loading Additional Assets](#loading-additional-assets)
- [Preparing Template Variables](#preparing-template-variables)
- [JavaScript Module](docs__4.x__extend__system__vue-components.md#javascript-module)
- [Importing Utilities](#importing-utilities)
- [Extending Other Components](#extending-other-components)
- [Template Partial](docs__4.x__extend__system__vue-components.md#template-partial)
- [Using Slots](#using-slots)
- [Subcomponents](docs__4.x__extend__system__vue-components.md#subcomponents)
- [Registering Components](docs__4.x__extend__system__vue-components.md#registering-components)
- [Backend Controllers](#backend-controllers)
- [CMS Components](#cms-components)
- [Using Components in Templates](docs__4.x__extend__system__vue-components.md#using-components-in-templates)
- [Creating Vue Applications](docs__4.x__extend__system__vue-components.md#creating-vue-applications)
- [Inline Templates](#inline-templates)
- [Component Communication](docs__4.x__extend__system__vue-components.md#component-communication)
- [Props and Events](#props-and-events)
- [Template Refs](#template-refs)
- [Provide and Inject](#provide-and-inject)
- [Global Objects](docs__4.x__extend__system__vue-components.md#global-objects)
- [Best Practices](docs__4.x__extend__system__vue-components.md#best-practices)
- [Naming Conventions](#naming-conventions)
- [Component Design](#component-design)
- [Performance](#performance)

[More...](#)

October CMS provides a powerful framework for building Vue 3 components that integrate seamlessly with the backend panel and CMS. Vue components consist of three parts: a PHP class, a JavaScript ES module, and a template partial. This architecture enables reactive user interfaces while maintaining clean separation of concerns.

## [#](#directory-structure) Directory Structure

Vue components reside in the **vuecomponents** directory within a plugin or module. Each component has its own subdirectory containing the PHP class, JavaScript files, optional CSS, and template partials.

```
├── vuecomponents
|   ├── mycomponent
|   |   ├── assets
|   |   |   ├── js
|   |   |   |   └── mycomponent.js  ← JavaScript Module
|   |   |   └── css
|   |   |       └── mycomponent.css  ← StyleSheet File (optional)
|   |   └── partials
|   |       └── _mycomponent.php  ← Template Partial
|   └── MyComponent.php  ← Component Class
```

The naming convention uses lowercase for directories and file names, while the PHP class uses PascalCase. The JavaScript and partial files derive their names from the component class.

## [#](#component-class) Component Class

The `create:vuecomponent` command generates a Vue component class, template partial and basic asset files. The first argument specifies the author and plugin name. The second argument specifies the Vue component class name.

```
php artisan create:vuecomponent Acme.Blog PostEditor
```

The PHP class defines the server-side configuration for your Vue component. It must extend `System\Classes\VueComponentBase` and define a component name.

```
namespace Acme\Blog\VueComponents;

use System\Classes\VueComponentBase;

class PostEditor extends VueComponentBase
{
    /**
     * @var string componentName is the Vue component tag name (kebab-case)
     */
    protected $componentName = 'acme-blog-post-editor';
}
```

The `componentName` property defines the HTML tag used in templates. Use a unique, namespaced name in kebab-case to avoid conflicts with other components.

### [#](#requiring-dependencies) Requiring Dependencies

Components can declare dependencies on other Vue components using the `$require` property. Dependencies are automatically registered before the component.

```
class PostEditor extends VueComponentBase
{
    protected $componentName = 'acme-blog-post-editor';

    /**
     * @var array require lists dependent Vue component classes
     */
    protected $require = [
        \Backend\VueComponents\RichEditor::class,
        \Backend\VueComponents\Modal::class
    ];
}
```

### [#](#loading-additional-assets) Loading Additional Assets

Override the `loadAssets` method to include additional JavaScript or CSS files beyond the automatic defaults.

```
protected function loadAssets()
{
    $this->addJs('js/helpers.js', ['type' => 'module']);
    $this->addCss('css/custom-styles.css');
}
```

To load assets from dependencies (like vendor libraries), use `loadDependencyAssets`. These are loaded before the component's own assets.

```
protected function loadDependencyAssets()
{
    $this->addCss('vendor/library/styles.css');
    $this->addJs('vendor/library/script.js');
}
```

### [#](#preparing-template-variables) Preparing Template Variables

Use the `prepareVars` method to pass data from PHP to the template partial.

```
protected function prepareVars()
{
    $this->vars['maxFileSize'] = Config::get('cms.max_upload_size');
    $this->vars['allowedTypes'] = ['image/png', 'image/jpeg'];
}
```

## [#](#javascript-module) JavaScript Module

The JavaScript file defines the Vue component using the Options API and ES module syntax. The module exports a default object containing the component definition.

```
export default {
    props: {
        initialContent: {
            type: String,
            default: ''
        },
        readonly: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            content: this.initialContent,
            isDirty: false
        };
    },
    computed: {
        characterCount() {
            return this.content.length;
        }
    },
    methods: {
        save() {
            this.$emit('save', this.content);
            this.isDirty = false;
        },
        reset() {
            this.content = this.initialContent;
            this.isDirty = false;
        }
    },
    watch: {
        content(newValue, oldValue) {
            this.isDirty = newValue !== this.initialContent;
        }
    },
    mounted() {
        // Component is ready
    },
    beforeUnmount() {
        // Cleanup before removal
    }
};
```

### [#](#importing-utilities) Importing Utilities

JavaScript modules can import utilities and helper classes from other files.

```
import { formatDate, parseDate } from './classes/date-utils.js';
import { validateInput } from './classes/validators.js';

export default {
    methods: {
        formatTimestamp(timestamp) {
            return formatDate(timestamp);
        }
    }
};
```

### [#](#extending-other-components) Extending Other Components

Components can extend other component definitions using the `extends` property.

```
import BaseEditor from './base-editor.js';

export default {
    extends: BaseEditor,
    methods: {
        // Override or add methods
        customMethod() {
            // Call parent method if needed
        }
    }
};
```

## [#](#template-partial) Template Partial

The template partial contains the Vue template markup. It's a PHP file that can include server-side logic if needed.

```
<div class="post-editor-component">
    <div class="editor-toolbar">
        <button
            type="button"
            class="btn btn-primary"
            :disabled="!isDirty"
            @click="save"
        >
            <?= e(trans('acme.blog::lang.editor.save')) ?>
        </button>
        <button
            type="button"
            class="btn btn-secondary"
            @click="reset"
        >
            <?= e(trans('acme.blog::lang.editor.reset')) ?>
        </button>
    </div>

    <textarea
        v-model="content"
        :readonly="readonly"
        class="form-control"
    ></textarea>

    <div class="editor-footer">
        <span v-text="characterCount"></span> characters
    </div>
</div>
```

Templates support standard Vue 3 syntax including directives, event bindings, and slots. PHP can be used for translations, asset URLs, and server-side configuration.

### [#](#using-slots) Using Slots

Define slots to allow parent components to inject content.

```
<div class="modal-component">
    <div class="modal-header">
        <slot name="header">
            <h5>Default Title</h5>
        </slot>
    </div>
    <div class="modal-body">
        <slot></slot>
    </div>
    <div class="modal-footer">
        <slot name="footer">
            <button @click="close">Close</button>
        </slot>
    </div>
</div>
```

## [#](#subcomponents) Subcomponents

Complex components can define subcomponents that share the parent's context. Register subcomponents in the PHP class.

```
class Modal extends VueComponentBase
{
    protected $componentName = 'backend-modal';

    protected function registerSubcomponents()
    {
        $this->registerSubcomponent('alert');
        $this->registerSubcomponent('confirm');
    }
}
```

Each subcomponent requires its own JavaScript file and template partial.

```
├── vuecomponents
|   ├── modal
|   |   ├── assets
|   |   |   └── js
|   |   |       ├── modal.js  ← Main component
|   |   |       ├── alert.js  ← Subcomponent
|   |   |       └── confirm.js  ← Subcomponent
|   |   └── partials
|   |       ├── _modal.php
|   |       ├── _alert.php
|   |       └── _confirm.php
|   └── Modal.php
```

Subcomponents are named by appending the subcomponent name to the parent name. For example, `backend-modal` with subcomponent `alert` becomes `backend-modal-alert`.

Subcomponents can extend the parent component or other subcomponents.

```
// alert.js
import modal from './modal.js';

export default {
    extends: modal,
    data() {
        return {
            alertType: 'info'
        };
    },
    methods: {
        showAlert(message) {
            this.content = message;
            this.show();
        }
    }
};
```

## [#](#registering-components) Registering Components

### [#](#backend-controllers) Backend Controllers

In backend controllers, register Vue components using the `registerVueComponent` method. This is typically done in the controller's constructor or action methods.

```
class Posts extends Controller
{
    public function edit($id)
    {
        $this->registerVueComponent(\Acme\Blog\VueComponents\PostEditor::class);
        $this->registerVueComponent(\Backend\VueComponents\Modal::class);

        // ... rest of the action
    }
}
```

The controller's layout automatically outputs the component templates and JavaScript registration code.

### [#](#cms-components) CMS Components

CMS components can also register Vue components for use in the frontend. The call forwards to the CMS controller, which provides the same registration methods available to backend controllers.

```
class MyComponent extends ComponentBase
{
    public function init()
    {
        $this->registerVueComponent(\Acme\Blog\VueComponents\PostViewer::class);
    }
}
```

Registering in the `init` method makes the Vue component available during both page renders and AJAX requests. The `onRun` method may also be used when the component is only needed for the initial page render.

On the frontend, the Vue library and registered components are output by two Twig tags that work together. The `{% framework vue %}` tag loads the Vue library and exposes it as the `Vue` global. If the tag is omitted, include a Vue 3 build yourself and expose it as `window.Vue`.

```
___TWIG0___
```

The `{% vuecomponents %}` tag renders the component templates and registration code, along with the `oc.createVueApp` and `oc.mountVueApp` factory functions. Place it near the end of the page, before any scripts that mount a Vue application.

```
<div id="app">
    <acme-blog-post-viewer :post-id="7"></acme-blog-post-viewer>
</div>

___TWIG0___

<script type="module">
    oc.mountVueApp('#app');
</script>
```

Frontend component JavaScript modules should read the `Vue` global (`const { ref } = Vue`) instead of using bare imports (`import { ref } from 'vue'`), since bare module specifiers only resolve in the backend panel.

Vue components registered during an AJAX request, for example by a component inside an updated partial, are delivered through the AJAX framework and registered before the page is updated. Mounting an application over the updated markup remains the responsibility of the page.

## [#](#using-components-in-templates) Using Components in Templates

Once registered, use Vue components in your templates with their tag name.

```
<div id="app">
    <acme-blog-post-editor
        ref="editor"
        :initial-content="content"
        :readonly="isLocked"
        @save="onSave"
    ></acme-blog-post-editor>

    <backend-modal ref="confirmModal">
        <template #header>
            <h5>Confirm Action</h5>
        </template>
        <p>Are you sure you want to proceed?</p>
        <template #footer>
            <button @click="confirm">Yes</button>
            <button @click="$refs.confirmModal.hide()">No</button>
        </template>
    </backend-modal>
</div>
```

## [#](#creating-vue-applications) Creating Vue Applications

To mount a Vue application, use the `oc.createVueApp` factory function. This automatically registers all Vue components that have been output to the page.

```
<script type="module">
    const app = oc.createVueApp({
        data() {
            return {
                content: '',
                isLocked: false
            };
        },
        methods: {
            onSave(content) {
                // Handle save
            },
            confirm() {
                this.$refs.confirmModal.hide();
                // Proceed with action
            }
        }
    });

    app.mount('#app');
</script>
```

For convenience, use `oc.mountVueApp` to create and mount in one step.

```
<script type="module">
    const { app, vm } = oc.mountVueApp('#app', {
        data() {
            return {
                message: 'Hello World'
            };
        }
    });
</script>
```

### [#](#inline-templates) Inline Templates

If the mount element contains a `<template>` child, it will be used as the app's template automatically.

```
<div id="app">
    <template>
        <div>
            <h1 v-text="title"></h1>
            <acme-blog-post-editor></acme-blog-post-editor>
        </div>
    </template>
</div>

<script type="module">
    oc.mountVueApp('#app', {
        data() {
            return {
                title: 'Edit Post'
            };
        }
    });
</script>
```

## [#](#component-communication) Component Communication

### [#](#props-and-events) Props and Events

Components communicate through props (parent to child) and events (child to parent).

```
<!-- Parent template -->
<child-component
    :value="parentValue"
    @update="handleUpdate"
></child-component>
```

```
// Child component
export default {
    props: ['value'],
    methods: {
        save() {
            this.$emit('update', this.localValue);
        }
    }
};
```

### [#](#template-refs) Template Refs

Access child component instances using template refs.

```
<child-component ref="child"></child-component>
<button @click="$refs.child.doSomething()">Trigger</button>
```

### [#](#provide-and-inject) Provide and Inject

Share data across deeply nested components without prop drilling.

```
// Ancestor component
export default {
    provide() {
        return {
            theme: this.theme,
            updateTheme: this.updateTheme
        };
    }
};

// Descendant component
export default {
    inject: ['theme', 'updateTheme'],
    computed: {
        themeClass() {
            return `theme-${this.theme}`;
        }
    }
};
```

## [#](#global-objects) Global Objects

October CMS exposes several global objects for Vue component development.

| Object | Description |
| --- | --- |
| `oc.createVueApp()` | Create a Vue app with registered components |
| `oc.mountVueApp()` | Create and mount a Vue app |
| `oc.vueComponents` | Registry of all Vue component definitions |
| `oc.vueDirectives` | Registry of custom Vue directives |

## [#](#best-practices) Best Practices

### [#](#naming-conventions) Naming Conventions

- Use a unique namespace prefix for component names (e.g., `acme-blog-`)
- Use kebab-case for component tag names
- Use PascalCase for PHP class names
- Use lowercase for directory and file names

### [#](#component-design) Component Design

- Keep components focused on a single responsibility
- Use props for configuration, events for communication
- Avoid direct DOM manipulation; use Vue's reactivity
- Clean up resources in `beforeUnmount`

### [#](#performance) Performance

- Lazy load heavy components when possible
- Use `v-show` instead of `v-if` for frequently toggled content
- Avoid expensive computations in templates

#### [#](#see-also) See Also

- [Vue Report Widgets](docs__4.x__extend__dashboards__vue-report-widgets.md)
- [Widgets](docs__4.x__extend__system__widgets.md)
- [CMS Components](docs__4.x__extend__cms-components.md)

← [Widgets](docs__4.x__extend__system__widgets.md)[AJAX](docs__4.x__extend__system__ajax.md) →

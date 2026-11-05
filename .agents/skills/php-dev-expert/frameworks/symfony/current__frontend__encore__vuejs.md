# Enabling Vue.js (vue-loader) with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/vuejs.html

---

# Enabling Vue.js (`vue-loader`) with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/vuejs.rst)

Screencast

Do you prefer video tutorials? Check out the [Vue screencast series](https://symfonycasts.com/screencast/vue).

Tip

Check out live demos of Symfony UX Vue.js component at <https://ux.symfony.com/vue>!

Want to use [Vue.js](https://vuejs.org/)? No problem! First enable it in `webpack.config.js`:

```
1
2
3
4
5
6
7
8
9
```

```
// webpack.config.js
  // ...

  Encore
      // ...
      .addEntry('main', './assets/main.js')

+     .enableVueLoader()
  ;
```

Then restart Encore. When you do, it will give you a command you can run to
install any missing dependencies. After running that command and restarting
Encore, you're done!

Any `.vue` files that you require will be processed correctly. You can also
configure the [vue-loader options](https://vue-loader.vuejs.org/options.html) by passing an options callback to
`enableVueLoader()`. See the [Encore's index.js file](https://github.com/symfony/webpack-encore/blob/master/index.js) for detailed documentation.

## [Runtime Compiler Build](#runtime-compiler-build "Permalink to this headline")

By default, Encore uses a Vue "build" that allows you to compile templates at
runtime. This means that you *can* do either of these:

```
1
2
3
4
5
6
7
```

```
new Vue({
    template: '<div>{{ hi }}</div>'
})

new Vue({
    el: '#app', // where <div id="app"> in your DOM contains the Vue template
});
```

If you do *not* need this functionality (e.g. you use single file components),
then you can tell Encore to create a *smaller* build following Content Security Policy:

```
1
2
3
4
5
6
7
8
```

```
// webpack.config.js
// ...

Encore
    // ...

    .enableVueLoader(() => {}, { runtimeCompilerBuild: false })
;
```

You can also silence the recommendation by passing `runtimeCompilerBuild: true`.

## [Hot Module Replacement (HMR)](#hot-module-replacement-hmr "Permalink to this headline")

The `vue-loader` supports hot module replacement: update your code and watch
your Vue.js app update *without* a browser refresh! To activate it, use the
`dev-server`:

```
1
```

```
$ npm run dev-server
```

That's it! Change one of your `.vue` files and watch your browser update. But
note: this does *not* currently work for *style* changes in a `.vue` file. Seeing
updated styles still requires a page refresh.

See [Using webpack-dev-server and HMR](current__frontend__encore__dev-server.md) for more details.

## [JSX Support](#jsx-support "Permalink to this headline")

You can enable [JSX with Vue.js](https://github.com/vuejs/jsx) by configuring the second parameter of the
`.enableVueLoader()` method:

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// webpack.config.js
  // ...

  Encore
      // ...
      .addEntry('main', './assets/main.js')

-     .enableVueLoader()
+     .enableVueLoader(() => {}, {
+         useJsx: true
+     })
  ;
```

Next, run or restart Encore. When you do, you will see an error message helping
you install any missing dependencies. After running that command and restarting
Encore, you're done!

Your `.jsx` files will now be transformed through `@vue/babel-plugin-jsx`.

### [Using styles](#using-styles "Permalink to this headline")

You can't use `<style>` in `.jsx` files. As a workaround, you can import
`.css`, `.scss`, etc. files manually:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
// App.jsx
import './App.css'

export default {
    name: 'App',
    render() {
        return (
            <div>
                ...
            </div>
        )
    }
}
```

Note

Importing styles this way makes them global. See the next section for
scoping them to your component.

### [Using Scoped Styles](#using-scoped-styles "Permalink to this headline")

You can't use [Scoped Styles](https://vue-loader.vuejs.org/guide/scoped-css.html) (`<style scoped>`) either in `.jsx` files. As
a workaround, you can use [CSS Modules](https://github.com/css-modules/css-modules) by suffixing import paths with
`?module`:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
```

```
// Component.jsx
import styles from './Component.css?module' // suffix with "?module"

export default {
    name: 'Component',
    render() {
        return (
            <div>
                <h1 class={styles.title}>
                    Hello World
                </h1>
            </div>
        )
    }
}
```

```
1
2
3
4
5
```

```
/* Component.css */

.title {
    color: red
}
```

The output will be something like `<h1 class="title_a3dKp">Hello World</h1>`.

### [Using images](#using-images "Permalink to this headline")

You can't use `<img src="./image.png">` in `.jsx` files. As a workaround,
you can `import` them:

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
import imageUrl from './image.png';

export default {
    name: 'Component',
    render() {
        return (
            <div>
                <img src={imageUrl}/>
            </div>
        )
    }
}
```

7.0

Since Webpack Encore 7.0 is ESM-only, the CommonJS `require()` function is no
longer available in your application code. Before Encore 7.0, you could inline
the image with `<img src={require("./image.png")}/>`; use a top-level
`import` instead.

## [Using Vue inside Twig templates](#using-vue-inside-twig-templates "Permalink to this headline")

Twig templates can instantiate a Vue.js app in the same way as any other
JavaScript code. However, given that both Twig and Vue.js use the same delimiters
for variables, you should configure the `delimiters` Vue.js option to change
the default variable delimiters.

If you set for example `delimiters: ['${', '}$']`, then you can use the
following in your Twig templates:

> ```
> 1
> 2
> ```
>
> ```
> {{ twig_variable }}   {# renders a Twig variable #}
> ${ vuejs_variable }$  {# renders a Vue.js variable #}
> ```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

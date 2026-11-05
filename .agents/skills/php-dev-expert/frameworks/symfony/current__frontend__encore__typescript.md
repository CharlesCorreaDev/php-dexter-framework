# Enabling TypeScript (ts-loader) with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/typescript.html

---

# Enabling TypeScript (ts-loader) with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/typescript.rst)

Want to use [TypeScript](https://www.typescriptlang.org/)? No problem! First, enable it:

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
```

```
// webpack.config.js

  // ...
  Encore
      // ...
+     .addEntry('main', './assets/main.ts')

+     .enableTypeScriptLoader()

      // optionally enable forked type script for faster builds
      // https://www.npmjs.com/package/fork-ts-checker-webpack-plugin
      // requires that you have a tsconfig.json file that is setup correctly.
+     //.enableForkedTypeScriptTypesChecking()
  ;
```

Then create an empty `tsconfig.json` file with the contents `{}` in the project
root folder (or in the folder where your TypeScript files are located; e.g. `assets/`).
In `tsconfig.json` you can define more options, as shown in [tsconfig.json reference](https://www.typescriptlang.org/docs/handbook/tsconfig-json.html).

Then restart Encore. When you do, it will give you a command you can run to
install any missing dependencies. After running that command and restarting
Encore, you're done!

Any `.ts` files that you require will be processed correctly. You can
also configure the [ts-loader options](https://github.com/TypeStrong/ts-loader#options) via the `enableTypeScriptLoader()`
method.

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
// webpack.config.js
  Encore
      // ...
      .addEntry('main', './assets/main.ts')

-     .enableTypeScriptLoader()
+     .enableTypeScriptLoader(function(tsConfig) {
+         // You can use this callback function to adjust ts-loader settings
+         // https://github.com/TypeStrong/ts-loader/blob/master/README.md#loader-options
+         // For example:
+         // tsConfig.silent = false
+     })

          // ...
  ;
```

See the [Encore's index.js file](https://github.com/symfony/webpack-encore/blob/master/index.js) for detailed documentation and check
out the [tsconfig.json reference](https://www.typescriptlang.org/docs/handbook/tsconfig-json.html) and the [Webpack guide about Typescript](https://webpack.js.org/guides/typescript/).

If React is enabled (`.enableReactPreset()`), any `.tsx` file will also be
processed by `ts-loader`.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

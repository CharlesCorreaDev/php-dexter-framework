# Enabling React.js with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/reactjs.html

---

# Enabling React.js with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/reactjs.rst)

Screencast

Do you prefer video tutorials? Check out the [React.js screencast series](https://symfonycasts.com/screencast/reactjs).

Tip

Check out live demos of Symfony UX React component at <https://ux.symfony.com/react>!

Using React? First add some dependencies with npm:

```
1
```

```
$ npm install react react-dom prop-types --save
```

Enable react in your `webpack.config.js`:

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
// webpack.config.js
  // ...

  Encore
      // ...
+     .enableReactPreset()
  ;
```

Then restart Encore. When you do, it will give you a command you can run to
install any missing dependencies. After running that command and restarting
Encore, you're done!

Your `.js` and `.jsx` files will now be transformed through `babel-preset-react`.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

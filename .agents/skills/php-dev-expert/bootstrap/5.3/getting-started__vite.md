# Bootstrap and Vite · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/getting-started/vite

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/getting-started/vite.mdx "View and edit this file on GitHub")

# Bootstrap and Vite

The official guide for how to include and bundle Bootstrap’s CSS and JavaScript in your project using Vite.

On this page
   
**On this page**

---

![](/docs/5.3/assets/img/guides/bootstrap-vite.png)

**Want to skip to the end?** Download the source code and working demo for this guide from the [twbs/examples repository](https://github.com/twbs/examples/tree/main/vite). You can also [open the example in StackBlitz](https://stackblitz.com/github/twbs/examples/tree/main/vite?file=index.html) for live editing.

## What is Vite?

[Vite](https://vite.dev/) is a modern frontend build tool designed for speed and simplicity. It provides an efficient and streamlined development experience, especially for modern JavaScript frameworks.

## Setup

We’re building a Vite project with Bootstrap from scratch, so there are some prerequisites and upfront steps before we can really get started. This guide requires you to have Node.js installed and some familiarity with the terminal.

1. **Create a project folder and set up npm.** We'll create the `my-project` folder and initialize npm with the `-y` argument to avoid it asking us all the interactive questions.

   ```
   mkdir my-project && cd my-project
   npm init -y
   ```
2. **Install Vite.** Unlike our Webpack guide, there’s only a single build tool dependency here. We use `--save-dev` to signal that this dependency is only for development use and not for production.

   ```
   npm i --save-dev vite
   ```
3. **Install Bootstrap.** Now we can install Bootstrap. We'll also install Popper since our dropdowns, popovers, and tooltips depend on it for their positioning. If you don’t plan on using those components, you can omit Popper here.

   ```
   npm i --save bootstrap @popperjs/core
   ```
4. **Install additional dependency.** In addition to Vite and Bootstrap, we need another dependency (Sass) to properly import and bundle Bootstrap’s CSS.

   ```
   npm i --save-dev sass
   ```

Now that we have all the necessary dependencies installed and set up, we can get to work creating the project files and importing Bootstrap.

## Project structure

We’ve already created the `my-project` folder and initialized npm. Now we'll also create our `src` folder, stylesheet, and JavaScript file to round out the project structure. Run the following from `my-project`, or manually create the folder and file structure shown below.

```
mkdir {src,src/js,src/scss}
touch src/index.html src/js/main.js src/scss/styles.scss vite.config.js
```

When you’re done, your complete project should look like this:

```
my-project/
├── src/
│   ├── js/
│   │   └── main.js
│   └── scss/
│   |   └── styles.scss
|   └── index.html
├── package-lock.json
├── package.json
└── vite.config.js
```

At this point, everything is in the right place, but Vite won’t work because we haven’t filled in our `vite.config.js` yet.

## Configure Vite

With dependencies installed and our project folder ready for us to start coding, we can now configure Vite and run our project locally.

1. **Open `vite.config.js` in your editor.** Since it’s blank, we'll need to add some boilerplate config to it so we can start our server. This part of the config tells Vite where to look for our project’s JavaScript and how the development server should behave (pulling from the `src` folder with hot reload).

   ```
   import { resolve } from 'path'

   export default {
     root: resolve(__dirname, 'src'),
     build: {
       outDir: '../dist'
     },
     server: {
       port: 8080
     },
     // Optional: Silence Sass deprecation warnings. See note below.
     css: {
        preprocessorOptions: {
           scss: {
             silenceDeprecations: [
               'import',
               'mixed-decls',
               'color-functions',
               'global-builtin',
             ],
           },
        },
     },
   }
   ```

   **Note:** Sass deprecation warnings are shown when compiling source Sass files with the latest versions of Dart Sass. This does not prevent compilation or usage of Bootstrap. We’re [working on a long-term fix](https://github.com/twbs/bootstrap/issues/40962), but in the meantime these deprecation notices can be ignored.
2. **Next we fill in `src/index.html`.** This is the HTML page Vite will load in the browser to utilize the bundled CSS and JS we'll add to it in later steps.

   ```
   <!doctype html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Bootstrap w/ Vite</title>
       <script type="module" src="./js/main.js"></script>
     </head>
     <body>
       <div class="container py-4 px-3 mx-auto">
         <h1>Hello, Bootstrap and Vite!</h1>
         <button class="btn btn-primary">Primary button</button>
       </div>
     </body>
   </html>
   ```

   We’re including a little bit of Bootstrap styling here with the `div class="container"` and `<button>` so that we see when Bootstrap’s CSS is loaded by Vite.
3. **Now we need an npm script to run Vite.** Open `package.json` and add the `start` script shown below (you should already have the test script). We'll use this script to start our local Vite dev server.

   ```
   {
     // ...
     "scripts": {
       "start": "vite",
       "test": "echo \"Error: no test specified\" && exit 1"
     },
     // ...
   }
   ```
4. **And finally, we can start Vite.** From the `my-project` folder in your terminal, run that newly added npm script:

   ```
   npm start
   ```

   ![Vite dev server running](/docs/5.3/assets/img/guides/vite-dev-server.png)

In the next and final section to this guide, we’ll import all of Bootstrap’s CSS and JavaScript.

## Import Bootstrap

1. **Import Bootstrap’s CSS.** Add the following to `src/scss/styles.scss` to import all of Bootstrap’s source Sass.

   ```
   // Import all of Bootstrap’s CSS
   @import "bootstrap/scss/bootstrap";
   ```

   *You can also import our stylesheets individually if you want. [Read our Sass import docs](customize__sass.md#importing) for details.*
2. **Next we load the CSS and import Bootstrap’s JavaScript.** Add the following to `src/js/main.js` to load the CSS and import all of Bootstrap’s JS. Popper will be imported automatically through Bootstrap.

   ```
   // Import our custom CSS
   import '../scss/styles.scss'

   // Import all of Bootstrap’s JS
   import * as bootstrap from 'bootstrap'
   ```

   You can also import JavaScript plugins individually as needed to keep bundle sizes down:

   ```
   import Alert from 'bootstrap/js/dist/alert';

   // or, specify which plugins you need:
   import { Tooltip, Toast, Popover } from 'bootstrap';
   ```

   *[Read our JavaScript docs](getting-started__javascript.md) for more information on how to use Bootstrap’s plugins.*
3. **And you’re done! 🎉** With Bootstrap’s source Sass and JS fully loaded, your local development server should now look like this:

   ![Vite dev server running with Bootstrap](/docs/5.3/assets/img/guides/vite-dev-server-bootstrap.png)

   Now you can start adding any Bootstrap components you want to use. Be sure to [check out the complete Vite example project](https://github.com/twbs/examples/tree/main/vite) for how to include additional custom Sass and optimize your build by importing only the parts of Bootstrap’s CSS and JS that you need.

---

*See something wrong or out of date here? Please [open an issue on GitHub](https://github.com/twbs/bootstrap/issues/new/choose). Need help troubleshooting? [Search or start a discussion](https://github.com/twbs/bootstrap/discussions) on GitHub.*

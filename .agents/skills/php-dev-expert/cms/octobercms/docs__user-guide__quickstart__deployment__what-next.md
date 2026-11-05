# Where to Go from Here - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/deployment/what-next.html

---

# Where to Go from Here

Ideas and resources for your next project, from beginner exercises to advanced development

- [Beginner: Explore the Demo Theme](docs__user-guide__quickstart__deployment__what-next.md#beginner-explore-the-demo-theme)
- [Intermediate: Go Deeper](docs__user-guide__quickstart__deployment__what-next.md#intermediate-go-deeper)
- [Advanced: Extend October CMS](docs__user-guide__quickstart__deployment__what-next.md#advanced-extend-october-cms)
- [Additional Resources](docs__user-guide__quickstart__deployment__what-next.md#additional-resources)

Congratulations, you have completed the Quick Start guide! You went from a fresh installation to a deployed website with:

- A **theme** with a layout, pages, content blocks, and partials
- A **content management system** with team member blueprints and configurable settings
- An **interactive contact form** with validation, email sending, and dynamic page updates
- A **production deployment** with proper configuration

That covers the core of October CMS, but there is a lot more to explore. Here are some ideas depending on where you want to go next.

## [#](#beginner-explore-the-demo-theme) Beginner: Explore the Demo Theme

The October Demo plugin that came with your installation includes a theme with working examples. Reinstall it (if you disabled it earlier) and dig around.

- **Read the theme files**: open the demo theme in your text editor and study how the layouts, pages, and partials are structured. Compare them to what you built.
- **Add a new page**: create a page that does not exist in the demo, like a FAQ or a contact page. Practice using layouts, content blocks, and the `|page` filter.
- **Experiment with Tailor fields**: add new field types to your team member blueprint (a dropdown for department, a date field for hire date, a repeater for skills). See how they appear in the backend form and how to display them on the frontend.
- **Try different blueprint types**: create a `structure` blueprint for nested content (like documentation categories) or a `stream` blueprint for time-ordered entries (like a changelog).
- **Customize the backend**: change the navigation icon and label for your blueprints. Try grouping content types under a custom menu item.

## [#](#intermediate-go-deeper) Intermediate: Go Deeper

Once you are comfortable with the basics, try building something more ambitious.

- **Follow a tutorial**: build a [Blog](docs__user-guide__blog.md), [Forum](docs__user-guide__forum.md), [Helpdesk](docs__user-guide__helpdesk.md), or [Mailing List](docs__user-guide__mailing-list.md) using the step-by-step tutorials. Each one teaches different patterns and techniques.
- **Add user authentication**: install the [RainLab.User  (opens new window)](https://octobercms.com/plugin/rainlab-user) plugin to add frontend user registration, login, and account management.
- **Build a multi-language site**: install the [RainLab.Translate  (opens new window)](https://octobercms.com/plugin/rainlab-translate) plugin and learn how to serve your content in multiple languages.
- **Use the Turbo Router**: replace `{% framework extras %}` with `{% framework turbo %}` in your layout to get instant page transitions that make your site feel like a single-page app.
- **Create an API**: use the AJAX framework to build dynamic features like live search, infinite scroll, or real-time filtering without writing any JavaScript.
- **Explore the plugin marketplace**: browse [octobercms.com/plugins  (opens new window)](https://octobercms.com/plugins) for plugins that add SEO tools, analytics, sitemaps, image resizing, and more.

## [#](#advanced-extend-october-cms) Advanced: Extend October CMS

Ready to go beyond configuration and into code?

- **Build a custom plugin**: learn the plugin development workflow: scaffolding, models, controllers, migrations, and backend forms. See the [Extending October CMS](docs__4.x__extend.md) documentation to get started.
- **Sell products with Meloncart**: [Meloncart  (opens new window)](https://octobercms.com/plugin/responsiv-pay) adds a full e-commerce system to October CMS, including products, carts, checkout, and payment processing.
- **Learn Laravel**: October CMS is built on [Laravel  (opens new window)](https://laravel.com/docs), one of the most popular PHP frameworks. Understanding Laravel's service container, Eloquent ORM, middleware, and event system will make you a more powerful October CMS developer.
- **Contribute to the ecosystem**: publish your own plugins and themes on the marketplace, report bugs, or contribute to the core framework on [GitHub  (opens new window)](https://github.com/octobercms/october).

## [#](#additional-resources) Additional Resources

This Quick Start guide is a high-level introduction. The [developer documentation](docs__4.x.md) goes much deeper into every topic, from the template engine and component API to database management and console commands.

If you have questions or want to connect with other developers, join the [October CMS community  (opens new window)](https://octobercms.com/support).

We can't wait to see what you build.

← [Deploying Your Site](docs__user-guide__quickstart__deployment__deploying-your-site.md)

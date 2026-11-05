# Templates - Slim Framework

> **Fonte / Source:** https://www.slimframework.com/docs/v4/features/templates.html

---

# Templates

[Edit This Page](https://github.com/slimphp/Slim-Website/tree/gh-pages/docs/v4/features/templates.md)

Slim does not have a view layer like traditional MVC frameworks.
Instead, Slim’s “view” *is the HTTP response*.
Each Slim application route is responsible for preparing and returning an appropriate PSR-7 response object.

> Slim’s “view” is the HTTP response.

That being said, the Slim project provides the [Twig-View](features__twig-view.md) and [PHP-View](features__php-view.md) components
to help you render templates to a PSR-7 Response object.

## Other template systems

You are not limited to the `Twig-View` and `PHP-View` components.
You can use any PHP template system provided that you ultimately
write the rendered template output to the PSR-7 Response object’s body.

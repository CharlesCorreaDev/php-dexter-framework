# Jumbotron · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/components/jumbotron/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/components/jumbotron.md "View and edit this file on GitHub")

# Jumbotron

Lightweight, flexible component for showcasing hero unit style content.

A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.

# Hello, world!

This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.

---

It uses utility classes for typography and spacing to space content out within the larger container.

[Learn more](#)

```
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
```

To make the jumbotron full width, and without rounded corners, add the `.jumbotron-fluid` modifier class and add a `.container` or `.container-fluid` within.

# Fluid jumbotron

This is a modified jumbotron that occupies the entire horizontal space of its parent.

```
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
```

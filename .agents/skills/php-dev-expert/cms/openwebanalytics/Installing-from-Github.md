# Installing from Github · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Installing-from-Github

---

# Installing OWA from a Github Branch

You can install OWA directly from a branch on Github. Here are the steps:

1. Clone the repository: `git clone https://github.com/Open-Web-Analytics/Open-Web-Analytics.git`
2. Choose a branch or tag: `git checkout the-branch-name`
3. Run Composer to fetch all dependencies: `composer install` or if you are installing into a production environment `composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction`
4. Run `npm run build` to build the javascript packages from source. See OWA's npm build process documentation for more info.

`npm run build` is **required, not optional**. The built assets live in `public/`,
which is not committed to the repository — a fresh clone has no JavaScript or CSS
at all, and the install wizard will render unstyled and inert without it. A binary
release, by contrast, ships `public/` already built.

Then follow the [Installation](Installation.md) steps from the install wizard onwards, including
[the cron entry](Scheduled-Jobs.md) that OWA's periodic maintenance runs from. Note
that PHP 8.2 or later is required; see [Technical Requirements](Technical-Requirements.md).

For more information on installing composer in your environment see: [Composer install docs](https://getcomposer.org/doc/00-intro.md)

For more information about how the OWA Git repository is structured see: [OWA Git and Github](OWA-Git-Github.md)

# Installing a packaged release

Every release on the [Releases](https://github.com/Open-Web-Analytics/Open-Web-Analytics/releases)
page has exactly one uploaded asset, named `owa_<version>_packaged.tar`. It contains
all of the 3rd party dependencies the release needs and the built JavaScript and CSS,
so it requires neither Composer nor npm: unpack it and go straight to
[Installation](Installation.md). Use it if you do not want to deal with a build.

The two "Source code" links GitHub shows next to it are **not** that package. They
are a snapshot of the repository — the same thing `git clone` gives you at that tag —
and they need the same `composer install` and `npm run build` steps described above.
Unpacking one and pointing a browser at it produces a blank page or an empty `500`,
because with no `vendor/` there is no autoloader and none of OWA's classes can be
found.

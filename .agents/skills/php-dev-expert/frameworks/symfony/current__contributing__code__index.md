# Contributing Code (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/contributing/code/index.html

---

# Contributing Code

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/contributing/code.rst)

There are many ways to contribute to the Symfony code, listed here from the
quickest to the most involved: reporting a bug you found, fixing a bug, or
adding a new feature. This guide covers all of them.

Screencast

Prefer video? Check out the [Contributing Back To Symfony](https://symfonycasts.com/screencast/contributing) screencast series.

## [Reporting a Bug](#reporting-a-bug "Permalink to this headline")

The simplest way to contribute is to report a bug you found. It helps us make
Symfony better even if you don't fix it yourself.

Warning

If you think you've found a **security issue**, don't report it publicly.
Follow the [security procedure](current__contributing__code__security.md) instead.

Note

This is about **bugs**. If you have an idea for a **new feature**, discuss it
first on the `#contribs` channel of the [Symfony Slack](https://symfony.com/slack) or open an issue
(ideally alongside a pull request) rather than just filing a request.

### [Before Reporting](#before-reporting "Permalink to this headline")

- Check the [documentation](current__index.md) to make sure it's not a misuse of the
  framework;
- Ask on the `#support` channel of the [Symfony Slack](https://symfony.com/slack) if you're not sure
  it's a bug.

### [Writing a Good Bug Report](#writing-a-good-bug-report "Permalink to this headline")

Report the bug on the official [issue tracker](https://github.com/symfony/symfony/issues) following these rules:

- Use the title to clearly describe the issue;
- Describe the steps to reproduce the bug with short code examples (a failing
  unit test is best);
- Give as much detail as possible about your environment (OS, PHP version,
  Symfony version, enabled extensions);
- If an exception was thrown, include its [stack trace](current__contributing__code.md#getting-a-stack-trace)
  as **plain text** (never a screenshot, so search engines can index it).
  **Redact any sensitive information first**;
- If the bug is complex or spans several layers, add a
  [reproducer](current__contributing__code.md#reproducing-the-bug).

### [Reproducing the Bug](#reproducing-the-bug "Permalink to this headline")

A *bug reproducer* is the minimum amount of code needed to trigger the bug. It
makes the difference between a bug that's fixed quickly and one that can't be
understood.

**For a component used outside the framework**, a small PHP script is enough:

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
```

```
// first, run "composer require symfony/validator"
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Validator\Constraints;

$wrongUrl = 'http://example.com/exploit.html?<script>alert(1);</script>';
$urlValidator = new Constraints\UrlValidator();
$urlConstraint = new Constraints\Url();

// this should display an error, but it displays "null" instead
var_dump($urlValidator->validate($wrongUrl, $urlConstraint));
```

**For a bug in the framework**, create a minimal project, push it to a new GitHub
repository and link it in your issue:

```
1
```

```
$ composer create-project symfony/skeleton bug_app
```

The key is to add **only** the code needed to reproduce the bug: don't copy your
whole application. Start from the feature you suspect (a route, a service, an
event listener...), add the smallest possible code that shows the bug, and use
the [Symfony CLI](current__setup__symfony_cli.md) (`symfony server:start`) to check
it. Keep adding small changes until the bug appears.

### [Getting a Stack Trace](#getting-a-stack-trace "Permalink to this headline")

A stack trace shows the trail of function calls that led to an exception. When
reporting an exception, always include the **plain text** stack trace.

Tip

When reading a stack trace, focus first on the lines under `src/` (your
code) rather than `vendor/`, since third-party code is less likely to be
the source of the bug. If several exceptions are shown, the most relevant one
is usually the first (`exception [1/n]`). Report the bug to the library
that throws it (for Symfony components, use `composer home symfony/symfony`,
which opens the package's repository URL or homepage in your browser).

#### [In your Web Browser](#in-your-web-browser "Permalink to this headline")

Symfony's exception page provides the **Stack Trace** in plain text, ready to
paste into a bug report (remember to remove sensitive data):

![The default Symfony exception page with the "Exceptions", "Logs" and "Stack Traces" tabs.](/doc/8.1/_images/stack-trace.gif)

#### [In the Console](#in-the-console "Permalink to this headline")

Commands only show the exception message by default. Add `--verbose` to get the
full stack trace:

```
1
```

```
$ php bin/console --verbose your:command
```

#### [For API Calls](#for-api-calls "Permalink to this headline")

When the response isn't suitable for sharing, open the profiler to get a plain
text trace. Its URL is in the `X-Debug-Token-Link` response header:

```
1
2
3
```

```
$ curl --head http://localhost:8000/api/posts/1
…
X-Debug-Token-Link: http://localhost:8000/_profiler/110e1e
```

## [Set up your Environment](#set-up-your-environment "Permalink to this headline")

To fix a bug or work on a feature, set up a local copy of Symfony. You only need
to do this once.

Install **Git** and **PHP 8.2 or higher**. Then set your name and email in Git
(they appear in your commits):

```
1
2
```

```
$ git config --global user.name "Your Name"
$ git config --global user.email you@example.com
```

Tip

On Windows, make sure Git doesn't rewrite line endings when cloning:
`git config --global core.autocrlf input`.

### [Get the Source Code](#get-the-source-code "Permalink to this headline")

1. Create a [GitHub](https://github.com/signup) account and sign in.
2. [Fork the Symfony repository](https://github.com/symfony/symfony/fork) (click the "Fork" button). This creates your
   own copy of Symfony where you can push your changes.
3. Clone your fork locally (this creates a `symfony/` directory):

   ```
   1
   ```

   ```
   $ git clone git@github.com:YOUR_USERNAME/symfony.git
   ```
4. Add the original repository as a remote called `upstream`. You'll use it to
   keep your fork up to date:

   ```
   1
   2
   ```

   ```
   $ cd symfony/
   $ git remote add upstream https://github.com/symfony/symfony.git
   ```

Now check that everything works by [running the test suite](current__contributing__code.md#running-symfony-tests).

### [Test your Changes in a Real Project](#test-your-changes-in-a-real-project "Permalink to this headline")

To try your Symfony changes inside an existing project, use the `link` script
included in the repository. It replaces the Symfony packages in your project's
`vendor/` directory with symbolic links to your local Symfony clone:

```
1
2
```

```
$ cd symfony/
$ php link /path/to/your/project
```

Make sure the project's dependencies are installed (`composer install`) before
running it. Use `--copy` if your environment can't resolve symlinks, and
`--rollback` to restore the original dependencies when you're done.

## [Proposing a Change](#proposing-a-change "Permalink to this headline")

Tip

**Quick reference**

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
```

```
# fork symfony/symfony on GitHub, then:
$ git clone git@github.com:YOUR_USERNAME/symfony.git
$ cd symfony
$ git remote add upstream https://github.com/symfony/symfony.git
$ git fetch upstream
$ git checkout -b fix_XXX upstream/6.4   # bug fix: oldest maintained branch
# ... change + add tests ...
$ composer update                        # install test dependencies
$ php ./phpunit src/Symfony/...          # run the relevant tests
$ git commit -m "[Component] Describe the change"
$ git push origin fix_XXX                # then open a PR against 6.4
```

New features target the current development branch instead of `6.4`.

A pull request (PR) is the way to send a bug fix or a new feature to Symfony.

Before working on a change, [search the existing issues and pull requests](https://github.com/symfony/symfony/issues?q=+is%3Aopen+) to
see if someone already reported the topic or started a PR. If you have any
question during the process, ask on the `#contribs` channel of the
[Symfony Slack](https://symfony.com/slack).

All the code you contribute must be [released under the MIT license](current__contributing__code.md#symfony-license).

### [Choose the Branch](#choose-the-branch "Permalink to this headline")

Note

**Which branch should I use?** Base your pull request on the right branch so
it can be merged without extra work:

- **Bug fix:** use the *oldest maintained branch* that contains the bug. If
  you're unsure, use the oldest branch listed as maintained on the
  [Symfony releases](https://symfony.com/releases) page. Fixes are merged up into the newer branches automatically.
- **New feature:** use the current development branch shown on the
  [Symfony releases](https://symfony.com/releases) page.

You only pick the branch once, when creating your topic branch. Everything
else in this guide works the same regardless of the branch you chose.

Create a topic branch off the branch you chose. Use a descriptive name
(`fix_XXX`, where `XXX` is the issue number, is a good convention for bug
fixes):

```
1
2
```

```
$ git fetch upstream
$ git checkout -b fix_XXX upstream/6.4
```

### [Make your Change](#make-your-change "Permalink to this headline")

Work on the code and commit as much as you want, keeping these rules in mind:

- Follow the [coding standards](current__contributing__code__standards.md) and
  [conventions](current__contributing__code__conventions.md) (run PHP CS Fixer to fix
  code style automatically);
- Add tests that prove the bug is fixed or the feature works;
- Never break backward compatibility (see the [BC promise](current__contributing__code__bc.md));
- Don't edit files unrelated to your change (e.g. to fix coding standards)
  because it makes the review harder.

Write good commit messages. Start with a short subject line: the affected
component, bridge or bundle in square brackets, then a capitalized, imperative
sentence with no trailing period. Add a blank line and a longer description if
needed. For example:

```
1
```

```
[HttpClient] Add support for streaming large responses
```

If your change is a new feature or changes existing behavior, also update:

- the relevant `CHANGELOG.md` file(s) (prefix the entry with `[BC BREAK]` or
  `[DEPRECATION]` when relevant);
- the relevant `UPGRADE-*.md` file(s) if you break backward compatibility or
  deprecate something.

### [Submit your Pull Request](#submit-your-pull-request "Permalink to this headline")

Update your branch with the latest changes from `upstream` and resolve any
conflict (replace `6.4` with the branch you chose):

```
1
2
```

```
$ git fetch upstream
$ git rebase upstream/6.4
```

Then push your branch to your fork:

```
1
```

```
$ git push origin fix_XXX
```

Now open a pull request on the `symfony/symfony` repository, targeting the
branch you chose (e.g. `6.4`). The PR description contains a table you must
fill in; some answers add requirements:

- **Bug fix?** Reference the related issue(s), if any.
- **BC breaks / Deprecations?** Update the relevant `CHANGELOG.md` and
  `UPGRADE-*.md` files.

Give as much detail as possible in the description: it helps the review and
becomes part of the permanent record when the PR is merged. If the code isn't
finished yet, open the PR as a **draft** so reviewers know it's still in progress.

### [Receiving Feedback](#receiving-feedback "Permalink to this headline")

We ask all contributors to follow some [review best practices](current__contributing__reviews.md)
to keep feedback constructive. The [core team](current__contributing__core_team.md)
decides which PRs get merged, so their feedback is the most relevant. Don't feel
pressured to apply every suggestion immediately. If you receive feedback you
find abusive, contact the [CARE team](current__contributing__code_of_conduct__care_team.md).

#### [Automated Checks](#automated-checks "Permalink to this headline")

When you open a PR, several automated checks run on **GitHub Actions**:

- **Code style** is checked with [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer). If it fails, run
  `php php-cs-fixer.phar fix` locally and commit the result.
- **Tests** run on the supported PHP versions and operating systems. A failure
  usually points to a real problem in your change, but it can also be unrelated;
  if you suspect that, check whether the target branch fails too and leave a comment.
- **Static analysis** ([PHPStan](https://phpstan.org/) and [Psalm](https://psalm.dev/)) may comment on potential type errors.
  Review each one, but don't update their baseline files or add `@phpstan-` /
  `@psalm-` annotations.

#### [Reworking your Pull Request](#reworking-your-pull-request "Permalink to this headline")

To apply review feedback, commit your changes on the same branch, rebase on the
latest `upstream` branch (don't merge) and force-push:

```
1
2
```

```
$ git rebase upstream/6.4
$ git push --force origin fix_XXX
```

Note

Always specify the branch name explicitly when force-pushing, to avoid
touching other branches.

You don't need to squash your commits: Symfony squashes them automatically when
merging. Once merged, the pull request number is kept in the commit message
(e.g. `merged branch USER/BRANCH (PR #1111)`) so the full discussion stays
linked to the code.

## [Running Tests](#running-tests "Permalink to this headline")

Symfony runs the test suite automatically on every pull request, but it's good
practice to run the relevant tests locally before submitting your change.

### [Before Running the Tests](#before-running-the-tests "Permalink to this headline")

To run the Symfony test suite, install the external dependencies used during the
tests, such as Doctrine, Twig and Monolog. To do so, [install Composer](https://getcomposer.org/download/) and
execute the following:

```
1
```

```
$ composer update
```

Tip

Dependencies might fail to update and in this case Composer might need you
to tell it what Symfony version you are working on. To do so set
`COMPOSER_ROOT_VERSION` variable, e.g.:

```
1
```

```
$ COMPOSER_ROOT_VERSION=7.4.x-dev composer update
```

### [Running the Tests](#running-the-tests "Permalink to this headline")

Then, run the test suite from the Symfony root directory with the following command:

```
1
```

```
$ php ./phpunit symfony
```

The output should display `OK`. If not, read the reported errors to figure out
what's going on and if the tests are broken because of the new code.

Tip

The entire Symfony suite can take up to several minutes to complete. If you
want to test a single component, type its path after the `phpunit` command,
e.g.:

```
1
```

```
$ php ./phpunit src/Symfony/Component/Finder/
```

Tip

On Windows, use a modern terminal (like [Windows Terminal](https://learn.microsoft.com/windows/terminal/)) to see colored
test results.

### [Testing Generated Code](#testing-generated-code "Permalink to this headline")

Some tests generate code on the fly and verify that it matches the expected
output stored in a file. To regenerate those files, run the tests with the
environment variable `TEST_GENERATE_FIXTURES` set to `1`:

```
1
```

```
$ TEST_GENERATE_FIXTURES=1 php ./phpunit src/Symfony/Component/Config/Tests/Builder/GeneratedConfigTest.php
```

## [License](#license "Permalink to this headline")

Symfony code is released under [the MIT license](https://en.wikipedia.org/wiki/MIT_License):

Copyright (c) 2004-present Fabien Potencier

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Check out the [license of the Symfony documentation](current__contributing__doc.md#symfony-documentation-license)
and other [Symfony licenses and trademarks](https://symfony.com/license).

Tip

Once your pull request is merged, you're credited on the
[Symfony Code Contributors](https://symfony.com/contributors/code) list.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

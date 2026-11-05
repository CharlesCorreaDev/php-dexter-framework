# Upgrading from 4.0.x to 4.0.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_404.html

---

# Upgrading from 4.0.x to 4.0.4[](#upgrading-from-4-0-x-to-4-0-4 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

CodeIgniter 4.0.4 fixes a bug in the implementation of [Controller Filters](incoming__filters.md), breaking
code implementing the `FilterInterface`.

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Update FilterInterface Declarations](#id2)[](#update-filterinterface-declarations "Link to this heading")

The method signatures for `after()` and `before()` must be updated to include `$arguments`. The function
definitions should be changed from:

```
public function before(RequestInterface $request)
public function after(RequestInterface $request, ResponseInterface $response)
```

to:

```
public function before(RequestInterface $request, $arguments = null)
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
```

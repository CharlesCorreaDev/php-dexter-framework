# Upgrade Controllers — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_controllers.html

---

# Upgrade Controllers[](#upgrade-controllers "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Controller Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/general/controllers.html)
- [Controller Documentation CodeIgniter 4.x](incoming__controllers.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- Since namespaces have been added to CodeIgniter 4, the controllers must be changed to support namespaces.
- The constructor of CI4 Controller does not automatically load core classes into the properties.
- CI4’s Controller has a special constructor [initController()](incoming__controllers.md#controller-constructor).
- CI4 provides [Request](incoming__incomingrequest.md) and [Responses](outgoing__response.md)
  objects for you to work with - more powerful than the CI3-way.
- If you want a base controller (`MY_Controller` in CI3), use **app/Controllers/BaseController.php**.
- Calling `echo` within Controllers, as in CI3, is still supported, but
  it is recommended that a string or Response object be returned from Controllers.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. First, move all controller files to the folder **app/Controllers**.
2. Add this line just after the opening php tag: `namespace App\Controllers;`
3. Replace `extends CI_Controller` with `extends BaseController`.
4. Remove the line `defined('BASEPATH') OR exit('No direct script access allowed');` if it exists.

If you use sub-directories in your controller structure, you have to change the namespace according to that.

For example, you have a version 3 controller located in **application/controllers/users/auth/Register.php**,
the namespace has to be `namespace App\Controllers\Users\Auth;` and the controller path in the version 4
should look like this: **app/Controllers/Users/Auth/Register.php**. Make sure to have the first letters of
the sub-directories as capitalized.

After that you have to insert a `use` statement below the namespace definition in order to extend the `BaseController`:
`use App\Controllers\BaseController;`

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

Path: **application/controllers**:

```
<?php

class Helloworld extends CI_Controller
{
    public function index($name)
    {
        echo 'Hello ' . html_escape($name) . '!';
    }
}
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

Path: **app/Controllers**:

```
<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name)
    {
        return 'Hello ' . esc($name) . '!';
    }
}
```

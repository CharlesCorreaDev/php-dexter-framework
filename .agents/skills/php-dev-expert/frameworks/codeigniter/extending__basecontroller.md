# Extending the Controller — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/extending/basecontroller.html

---

# Extending the Controller[](#extending-the-controller "Link to this heading")

CodeIgniter’s core Controller should not be changed, but a default class extension is provided for you at
**app/Controllers/BaseController.php**. Any new controllers you make should extend `BaseController` to take
advantage of preloaded components and any additional functionality you provide:

```
<?php

namespace App\Controllers;

class Home extends BaseController
{
    // ...
}
```

## [Preloading Components](#id1)[](#preloading-components "Link to this heading")

The base controller is a great place to load any helpers, models, libraries, services, etc. that you intend to
use every time your project runs. Helpers should be added to the pre-defined `$helpers` array. For example, if
you want the HTML and Text helpers universally available:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

abstract class BaseController extends Controller
{
    // ...

    protected $helpers = ['html', 'text'];

    // ...
}
```

Any other components to load or data to process should be added to the constructor `initController()`. For
example, if your project uses the Session Library heavily you may want to initiate it here:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

abstract class BaseController extends Controller
{
    // ...

    /**
     * @var \CodeIgniter\Session\Session;
     */
    protected $session;

    public function initController(/* ... */)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->session = service('session');
    }
}
```

## [Additional Methods](#id2)[](#additional-methods "Link to this heading")

The base controller is not routable. As an added security
measure **all** new methods you create should be declared as `protected` or `private` and only be accessed through the
controllers you create that extend `BaseController`.

## [Other Options](#id3)[](#other-options "Link to this heading")

You may find that you need more than one base controller. You can create new base controllers as long as any other controllers that you make extend the correct base. For example, if your project
has an involved public interface and a simple administrative portal you may want to extend `BaseController` to
the public controllers and make `AdminController` for any administrative controllers.

If you do not want to use the base controller you may bypass it by having your controllers extend the system
Controller instead:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    // ...
}
```

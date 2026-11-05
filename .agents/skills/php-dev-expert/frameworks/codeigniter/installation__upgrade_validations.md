# Upgrade Validations — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_validations.html

---

# Upgrade Validations[](#upgrade-validations "Link to this heading")

## [Documentations of Library](#id1)[](#documentations-of-library "Link to this heading")

- [Form Validation Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/form_validation.html)
- [Validation Documentation CodeIgniter 4.x](libraries__validation.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- If you want to change validation error display, you have to set CI4 [validation View templates](libraries__validation.md#validation-customizing-error-display).
- CI4 validation has no [Callbacks](http://www.codeigniter.com/userguide3/libraries/form_validation.html#callbacks-your-own-validation-methods)
  in CI3.
  Use [Callable Rules](libraries__validation.md#validation-using-callable-rule) (since v4.5.0) or
  [Closure Rules](libraries__validation.md#validation-using-closure-rule) (since v4.3.0) or
  [Rule Classes](libraries__validation.md#validation-using-rule-classes) instead.
- In CI3, Callbacks/Callable rules were prioritized, but in CI4, Closure/Callable Rules are
  not prioritized, and are checked in the order in which they are listed.
- Since v4.5.0, [Callable Rules](libraries__validation.md#validation-using-callable-rule) has been
  introduced, but it is a bit different from CI3’s [Callable](http://www.codeigniter.com/userguide3/libraries/form_validation.html#callable-use-anything-as-a-rule).
- CI4 validation format rules do not permit empty string.
- CI4 validation never changes your data.
- Since v4.3.0, [`validation_errors()`](helpers__form_helper.md#validation_errors "validation_errors") has been introduced, but the API is different from CI3’s.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Within the view which contains the form you have to change:

   > - `<?php echo validation_errors(); ?>` to `<?= validation_list_errors() ?>`
2. Within the controller you have to change the following:

   > - `$this->load->helper(array('form', 'url'));` to `helper('form');`
   > - remove the line `$this->load->library('form_validation');`
   > - `if ($this->form_validation->run() == FALSE)` to `if (! $this->validateData($data, $rules))`
   >   where `$data` is the data to validate, typically, the POST data `$this->request->getPost()`.
   > - `$this->load->view('myform');` to `return view('myform', ['validation' => $this->validator,]);`
3. You have to change the validation rules. The new syntax is to set the rules as array in the controller:

   ```
   <?php

   $isValid = $this->validateData($data, [
       'name'  => 'required|min_length[3]',
       'email' => 'required|valid_email',
       'phone' => 'required|numeric|max_length[10]',
   ]);
   ```

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

Path: **application/views**:

```
<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?php echo validation_errors(); ?>

    <?php echo form_open('form'); ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50" />

    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>
</html>
```

Path: **application/controllers**:

```
<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        // Set validation rules

        if ($this->form_validation->run() == FALSE) {
                $this->load->view('myform');
        } else {
                $this->load->view('formsuccess');
        }
    }
}
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

Path: **app/Views**:

```
<html>
<head>
    <title>My Form</title>
</head>
<body>

    <?= validation_list_errors() ?>

    <?= form_open('form') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50" />

    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>
</html>
```

Path: **app/Controllers**:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
    public function index()
    {
        helper('form');

        $data = $this->request->getPost();

        if (! $this->validateData($data, [
            // Validation rules
        ])) {
            return view('myform');
        }

        return view('formsuccess');
    }
}
```

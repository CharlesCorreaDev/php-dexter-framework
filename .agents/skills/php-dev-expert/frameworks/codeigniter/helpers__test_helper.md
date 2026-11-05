# Test Helper — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/helpers/test_helper.html

---

# Test Helper[](#test-helper "Link to this heading")

The Test Helper file contains functions that assist in testing your project.

## [Loading this Helper](#id1)[](#loading-this-helper "Link to this heading")

This helper is loaded using the following code:

```
<?php

helper('test');
```

## [Available Functions](#id2)[](#available-functions "Link to this heading")

The following functions are available:

fake(*$model*, *array $overrides = null*)[](#fake "Link to this definition")
:   Parameters:
    :   - **$model** (`Model|object|string`) – Instance or name of the model to use with Fabricator
        - **$overrides** (`array|null`) – Overriding data to pass to Fabricator::setOverrides()

    Returns:
    :   A random fake item created and added to the database by Fabricator

    Return type:
    :   `object|array`

    Uses `CodeIgniter\Test\Fabricator` to create a random item and add it to the database.

    Usage example:

    ```
    <?php

    use CodeIgniter\Test\CIUnitTestCase;

    final class MyTestClass extends CIUnitTestCase
    {
        public function testUserAccess()
        {
            $user = fake('App\Models\UserModel');

            $this->assertTrue($this->userHasAccess($user));
        }
    }
    ```

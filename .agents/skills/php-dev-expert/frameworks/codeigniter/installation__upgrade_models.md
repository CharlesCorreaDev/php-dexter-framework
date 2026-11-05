# Upgrade Models — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_models.html

---

# Upgrade Models[](#upgrade-models "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Model Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/general/models.html)
- [Model Documentation CodeIgniter 4.x](models__model.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- The CI4 model has much more functionality, including automatic database connection, basic CRUD, in-model validation, and automatic pagination.
- Since namespaces has been added to CodeIgniter 4, the models must be changed to support namespaces.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. First, move all model files to the folder **app/Models**.
2. Add this line just after the opening php tag: `namespace App\Models;`.
3. Below the `namespace App\Models;` line add this line: `use CodeIgniter\Model;`.
4. Replace `extends CI_Model` with `extends Model`.
5. Add the `protected $table` property and set the table name.
6. Add the `protected $allowedFields` property and set the array of field names to allow to insert/update.
7. Instead of CI3’s `$this->load->model('x');`, you would now use `$this->x = new X();`, following namespaced conventions for your component. Alternatively, you can use the [`model()`](general__common_functions.md#model "model") function: `$this->x = model('X');`.

If you use sub-directories in your model structure you have to change the namespace according to that.
Example: You have a version 3 model located in **application/models/users/user\_contact.php** the namespace has to be `namespace App\Models\Users;` and the model path in the version 4 should look like this: **app/Models/Users/UserContact.php**

The new Model in CI4 has a lot of built-in methods. For example, the `find($id)` method. With this you can find data where the primary key is equal to `$id`.
Inserting data is also easier than before. In CI4 there is an `insert($data)` method. You can optionally make use of all those built-in methods and migrate your code to the new methods.

You can find more information to those methods in [Using CodeIgniter’s Model](models__model.md).

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

Path: **application/models**:

```
<?php

class News_model extends CI_Model
{
    public function set_news($title, $slug, $text)
    {
        $data = array(
            'title' => $title,
            'slug'  => $slug,
            'text'  => $text,
        );

        return $this->db->insert('news', $data);
    }
}
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

Path: **app/Models**:

```
<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    // Sets the table name.
    protected $table = 'news';

    public function setNews($title, $slug, $text)
    {
        $data = [
            'title' => $title,
            'slug'  => $slug,
            'text'  => $text,
        ];

        // Gets the Query Builder for the table, and calls `insert()`.
        return $this->builder()->insert($data);
    }
}
```

The above code is direct translation from CI3 to CI4. It uses Query Builder
directly in the model. Note that when you use Query Builder directly, you cannot
use features in CodeIgniter’s Model.

If you want to use CodeIgniter’s Model features, the code will be:

```
<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    // Sets the table name.
    protected $table = 'news';

    // Sets the field names to allow to insert/update.
    protected $allowedFields = ['title', 'slug', 'text'];

    public function setNews($title, $slug, $text)
    {
        $data = [
            'title' => $title,
            'slug'  => $slug,
            'text'  => $text,
        ];

        // Uses Model's`insert()` method.
        return $this->insert($data);
    }
}
```

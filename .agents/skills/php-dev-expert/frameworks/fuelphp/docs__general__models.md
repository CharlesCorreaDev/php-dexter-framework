# Models - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/models.html

---

## Models

### What are models?

Whenever data needs to be retrieved, manipulated or deleted this should always be done by a model. A Model is a representation of some kind of
data and has the methods to change them. For example: you never put SQL queries in a Controller, those are put in the Model and the Controller will
call upon the Model to execute the queries. This way if your database changes you won't need to change all your Controllers but just the Model that acts upon it.

### How are Models used?

In Fuel a Model is essentially just a [Class](docs__general__classes.md "Class Documentation") like any other. They do nothing more than a library, but the Model\_ prefix
helps to differentiate it from other classes. To do something useful with a Model you will need to use other classes.

### Creating a model

```
namespace Model;

class Welcome extends \Model {

    public static function get_results()
    {
        // Database interactions
    }

}
```

Remember to prefix a backslash to classes you're using from global, outside the namespace
you're in. If you don't understand why, read up on namespaces on
[PHP.net](http://www.php.net/namespaces).

### Accessing a model

PHP has the `use` keyword for importing classes into the current namespace, this allows
you to shorten the Model's classname from `Model\Welcome` to just `Welcome`
within the file of a specific class:

```
use \Model\Welcome;

class Controller_Welcome extends Controller
{
    public function action_index()
    {
        $results = Welcome::get_results();
    }
}
```

### Writing your own models

While models can be used with any type of data storage we'll focus here on usage with SQL because that's the
most common usage. Almost always your models will have at least all [CRUD](http://en.wikipedia.org/wiki/Create,_read,_update_and_delete)
methods: create, read, update, delete (or variations on those). In Fuel your models don't need to extend
anything by default, though you can of course create your own base model or use Fuel's
[Orm package](#orm_models).

### Writing SQL Queries

You can use the [DB class](docs__classes__database__db.md) to build queries with native SQL like so:

```
DB::query('SELECT * FROM users WHERE id = 5');
```

### Using the Query Builder

When it comes to escaping data, working with data in arrays or making an application portable over multiple database engines, you might find native
SQL to be rather cumbersome. Using the Query Builder methods in the DB Class you can abstract writing native SQL:

```
DB::select('title','content')->from('articles')->execute()->get('title');
```

See more about native SQL queries and using the Query Builder in the [DB class](docs__classes__database__db.md) documentation.

### Using Model\_Crud to create models

One possible way of creating models is by using [Model\_Crud](docs__classes__model_crud__introduction.md), which adds a commonly used functionality to your models for interacting with a database table. There's an example of its usage below.

```
// find all articles
$entry = Model_Article::find_all();

// find all articles from category 1 order descending by date
$entry = Model_Article::find(array(
    'where' => array('category_id', 1),
    'order_by' => array('date' => 'desc')
));
```

### Using the Orm to create models

For models with more functionality, like support for relations, you can use the [Orm Package](docs__packages__orm__intro.md), which adds a lot of functionality out-of-the-box to your models. There's an example of its usage below.

```
// find all articles
$entry = Model_Article::find('all');

// find all articles from category 1 order descending by date
$entry = Model_Article::find('all', array(
    'where' => array('category_id', 1),
    'order_by' => array('date', 'desc')
));
```

Model\_Crud and the ORM package use similar syntax, which makes it simple to migrate once you require more functionality than Model\_Crud can provide.

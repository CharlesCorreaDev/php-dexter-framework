# Introduction - Relations - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/relations/intro.html

---

## Configuration

### Basic config

```
protected static $_has_many = array('comments');
```

This example, if specified in `Model_Article`, enables fetching of an array of
`Model_Comment` objects which have the field `article_id` matching the primary key of
a given Article instance through the property `comments`.

### Fully configured

```
protected static $_has_many = array('comments' => array(
	'model_to' => 'Model_Fancy_Comment',
	'key_from' => 'article_id',
	'key_to' => 'parent_article_id',
	'cascade_save' => true,
	'cascade_delete' => false,
	// there are some more options for specific relation types
));
```

In the basic example, Orm automatically assumes the model name and field mapping. This example
explicitly specifies the class name of the target model, the fields used to relate them, and whether
actions performed on the current object should be cascaded to the target. It will return an array of
`Model_Fancy_Comment` object where the comment's `parent_article_id` field
corresponds to the current object's `article_id`. When saving an object the operation is
also performed on its loaded relations, deleting isn't cascaded by default but can be if you switch
this on.

There is a limitation when fetching relations and limiting their output: you can't use
complex where statements on the main object. That are queries using parenthesis for nesting conditions
using `where_open()`. Normal (non-nested) where queries can be applied without problems.  
Technically it works like this: to limit the output the query on the base model's
table is actually a subquery with a limit set on it. Any of those nested where conditions are applied
on the result of the subquery and further joined relations.

### Configuration Options

All of the configurations are optional when using the most common naming conventions.

| Option | Default | Notes |
| --- | --- | --- |
| model\_to | Calculated from alias | If specified, must the full class name of the target model (ex. `Model_Comment`).  By default, this value is formed by prepending 'Model\_' to the singular form of the alias (ex. 'comments' becomes 'Model\_Comment'). If your model is in another namespace, you must specify the full namespace, excluding the leading backslash (ex. 'Admin\Model\_User'), PHP doesn't support relative namespaces in strings. |
| key\_from | The key used for the relation in the current model (Usually `id`) | Allows mapping the target model to an arbitrary field in the current model's table |
| key\_to | Calculated from the current model name | By default, a relationship from a `Model_Article` to many `Model_Comment`s would use the field `article_id` in the comments table |
| cascade\_save | bool `true` | Cascading means the operation on the model is repeated on its relation. Thus cascading a save will save the relations as well, cascading a delete will delete the relations as well. **Be very careful with cascading delete!**  You can override these options at runtime by passing `true` as the first argument when calling `save()` or `delete()` on the originating model. |
| cascade\_delete | bool `false` |
| conditions | `array()` | Takes 'where' and 'order\_by' keys. These are more limited than the normal usage: `where` must be an array of arrays containing `array(field, compare, value)`. `order_by` contains an array of fields or associative `field => direction`.  **Note:** these are always used and cannot be turned off. |

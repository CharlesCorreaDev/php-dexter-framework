# Generate - Oil Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/oil/generate.html

---

## Generate

Code Generation can be used to speed up development times by building much of the repetitive code for you. This
is entirely optionally - like all of oil - and all code can be edited however you like afterwards. You can generate the following items:

- [Controllers](#controllers)
- [Models](#models)
- [Presenters](#presenters)
- [Migrations](#migrations)
- [Scaffolding](#scaffolding)
- [Admin scaffolding](#admin)
- [Tasks](#tasks)
- [Configs](#configs)
- [Packages](#packages)
- [Modules](#modules)

### Controllers

To generate a skeleton [Controller](docs__general__controllers__base.md) with actions and views
predefined, use the following command:

```
$ php oil g controller posts action1 action2 action3
	Created view: APPPATH/views/posts/action1.php
	Created view: APPPATH/views/posts/action2.php
	Created view: APPPATH/views/posts/action3.php
	Created controller: APPPATH/classes/controller/posts.php
```

This will produce a controller that looks like this:

```
class Controller_Posts extends Controller_Template
{

	public function action_action1()
	{
		$this->template->title = 'Posts » Action1';
		$this->template->content = View::forge('posts/action1');
	}

	public function action_action2()
	{
		$this->template->title = 'Posts » Action2';
		$this->template->content = View::forge('posts/action2');
	}

	public function action_action3()
	{
		$this->template->title = 'Posts » Action3';
		$this->template->content = View::forge('posts/action3');
	}

}

/* End of file posts.php */
```

### Models

Generate a simple Model by listing fields and have
the [Migration](docs__general__migrations.md) automatically created for you to match:

```
$ php oil g model post title:varchar[50] body:text user_id:int
	Created model: APPPATH/classes/model/post.php
	Created migration: APPPATH/migrations/001_create_posts.php
```

That will create a simple Model that uses [Orm](docs__packages__orm__intro.md), so make sure the package is enabled in your config file. It will look like this:

```
class Model_Post extends Orm\Model {

	protected static $_properties = array(
		'id',
		'title',
		'body',
		'created_at',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

}

/* End of file post.php */
```

Not very exciting, but the migration is the useful part here:

```
namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('type' => 'datetime'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}
```

If you do not wish to generate a migration, simply supply the `--no-migration`:

```
$ php oil g model post title:varchar[50] body:text user_id:int --no-migration
	Created model: APPPATH/classes/model/post.php
```

By default, the class name is generated singular (it represents one post), but the corresponding table is generated
in plural (in contains multiple posts). You can make the table use the same name as the model by using `--singular`.

#### Generating Model using Model\_Crud

FuelPHP v1.1 added a simple Model\_Crud base model which offers similar functionality of using ORM without overhead of relational data. You can have the model generated using this by adding `--crud`

```
$ php oil g model post title:varchar[50] body:text user_id:int created_at:datetime --crud
	Created model: APPPATH/classes/model/post.php
	Created migration: APPPATH/migrations/001_create_posts.php
```

That will create a simple Model that uses Fuel\Core\Model\_Crud. It will look like this:

```
class Model_Post extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'title',
		'body',
		'user_id',
		'created_at',
		'updated_at'
	);

	protected static $_table_name = 'posts';

}
```

#### Generating Model Without Timestamp Option

Add `--no-timestamp` to exclude the created/updated fields and observers.

```
$ php oil g model post title:varchar[50] body:text user_id:int --no-timestamp
```

```
class Model_Post extends \Orm\Model
{
  protected static $_properties = array(
    'id',
    'title',
    'body',
    'user_id'
  );

}
```

```
namespace Fuel\Migrations;

class Create_posts
{
  public function up()
  {
    \DBUtil::create_table('posts', array(
      'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
      'title' => array('constraint' => 50, 'type' => 'varchar'),
      'body' => array('type' => 'text'),
      'user_id' => array('constraint' => 11, 'type' => 'int'),

    ), array('id'));
  }

  public function down()
  {
    \DBUtil::drop_table('posts');
  }
}
```

#### Changing the Timestamp and Timestamp Fields

When you're using the timestamp fields in either ORM models or CRUD models (\Model\_Crud) you can
chose your own field names. Use the `--created-at` and `--updated-at`
options to set your own field names.

By default, when you enable timestamps, the timestamps are stored in unixtime, as an integer. If you
prefer the MySQL DATETIME format, you can use the `--mysql-timestamp` option.

```
$ php oil g model post title:varchar[50] body:text user_id:int --mysql-timestamp --created-at=my_created
```

Which will give you:

```
<?php

class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
		'body',
		'user_id',
		'my_created',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
			'property' => 'my_created',
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);
}
```

```
<?php

namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'my_created' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}
```

#### Generating Model using Model\_Soft

FuelPHP v1.5 added a Model\_Soft based ORM model. Add `--soft-delete` to use Model\_Soft.

```
$ php oil g model post title:varchar[50] body:text user_id:int --soft-delete
```

Which will give you:

```
<?php

class Model_Post extends \Orm\Model_Soft
{
	protected static $_properties = array(
		'id',
		'title',
		'body',
		'user_id',
		'created_at',
		'updated_at',
		'deleted_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_soft_delete = array(
		'mysql_timestamp' => false,
	);
}
```

```
<?php

namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'deleted_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}
```

If you wish changing deleted\_at field name. Use the `--deleted-at` option to set your own field name.

```
$ php oil g model post title:varchar[50] body:text user_id:int --soft-delete --deleted-at=mydeleted
```

#### Generating Model using Model\_Temporal

Add `--temporal` to use Model\_Temporal.

```
$ php oil g model post title:varchar[50] body:text user_id:int --temporal
```

Which will give you:

```
<?php

class Model_Post extends \Orm\Model_Temporal
{
	protected static $_properties = array(
		'id',
		'temporal_start',
		'temporal_end',
		'title',
		'body',
		'user_id',
	);

	protected static $_temporal = array(
		'mysql_timestamp' => false,
	);

	protected static $_primary_key = array('id', 'temporal_start', 'temporal_end');
	protected static $_table_name = 'posts';

}
```

```
<?php

namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'temporal_start' => array('constraint' => 11, 'type' => 'int'),
			'temporal_end' => array('constraint' => 11, 'type' => 'int'),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}
```

Please note that **temporal\_start** and **temporal\_end** are not added to the migration's primary\_key array. You have to add them manually.

`--no-timestamp` is set to true by default which means both **created\_at** and **updated\_at** fields and the related observers are ommited. You can bypass this default with `--no-timestamp=0` to get them back.

If you wish changing temporal\_start or temporal\_end field name. Use `--temporal-start` or `--temporal-end` option to set your own field name.

```
$ php oil g model post title:varchar[50] body:text user_id:int --temporal --temporal-start=mystart --temporal-end=myend
```

#### Generating Model using Model\_Nestedset

Add `--nestedset` to use Model\_Nestedset.

```
$ php oil g model post title:varchar[50] body:text user_id:int --nestedset
```

Which will give you:

```
<?php

class Model_Post extends \Orm\Model_Nestedset
{
	protected static $_properties = array(
		'id',
		'left_id',
		'right_id',
		'title',
		'body',
		'user_id',
	);

	protected static $_table_name = 'posts';

}
```

```
<?php

namespace Fuel\Migrations;

class Create_posts
{
	public function up()
	{
		\DBUtil::create_table('posts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'left_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'right_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'body' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('posts');
	}
}
```

`--no-timestamp` is set to true by default which means both **created\_at** and **updated\_at** fields and the related observers are ommited.You can bypass this default with `--no-timestamp=0` to get them back.

If you wish changing title, tree\_id, left\_id, right\_id field name. Use one of `--title`, `--tre-id`, `--left-id`, `--right-id` options to set your own field name.

```
$ php oil g model post title:varchar[50] body:text user_id:int --nestedset --title=mytitle --tree-id=mytreeid --left-id=myleftid --right-id=myrightid
```

### Presenters

Optionally you have have oil to generate a Presenter class to accompany the view.

```
$ php oil g controller posts action1 action2 action3 --with-presenter
```

### Running Migrations

The following commands illustrate how to use the refine command to run useful migration tasks,
assuming that the system is currently at migration 5. The migrate task can be given parameters to
move directly to a given version, or just up/down by a single version.

```
$ php oil refine migrate
	Currently on migration: 5.

$ php oil refine migrate --version=4
	Migrated to version: 4.

$ php oil refine migrate --version=5
	Migrated to version: 5.

$ php oil refine migrate:down
	Migrated to version: 4.

$ php oil refine migrate:up
	Migrated to version: 5.
```

The following field types are supported: **string[n]**, **varchar[n]**, **int[n]**, **enum[value1, value2]**, **decimal[n, n]**, **float[n, n]**, **text**, **blob**, **datetime**, **date**, **timestamp** and **time**.

If you are using Windows Powershell to execute oil commands, you need to enclose parameters with a comma in quotes (**decimal['n, n']**) so Powershell doesn't see them as arrays. Alternatively, you can use [Git Bash](https://git-scm.com/downloads), especially if you are a git user too.

### Generating Migrations

You can generate migrations without creating a model. This could be used to rename a table, or add fields to a table in a way that is easy to deploy in other environments.

```
$ php oil generate migration rename_table_users_to_accounts
	Building magic migration: rename_table
	Created migration: APPPATH/migrations/002_rename_table_users_to_accounts.php
```

### Magic Migrations

There are a number of "magic" migrations which automatically build you a migration based on a prefix to your migration name.

```
$ php oil generate migration create_users name:text email:string[50] password:string[125]
$ php oil generate migration rename_table_users_to_accounts
$ php oil generate migration add_bio_to_accounts bio:text
$ php oil generate migration delete_bio_from_accounts bio:text
$ php oil generate migration rename_field_name_to_username_in_accounts
$ php oil generate migration drop_accounts
```

Note: Be careful when naming your migrations that you don't begin with any keywords by accident.

### Scaffolding

Scaffolding is the really exciting part of Oil's code generation. This approach is heavily borrowed from Rails who have done
a great job with it. The idea is that you create not only the MVC skeletons and migrations, but populate them with default CRUD code
so the code will actually work after writing the command.

```
$ php oil g scaffold monkey name:string description:text
	Created model: APPPATH/classes/model/monkey.php
	Created migration: APPPATH/migrations/003_create_monkeys.php
	Created controller: APPPATH/classes/controller/monkeys.php
	Created view: APPPATH/views/monkeys/index.php
	Created view: APPPATH/views/monkeys/view.php
	Created view: APPPATH/views/monkeys/create.php
	Created view: APPPATH/views/monkeys/edit.php
	Created view: APPPATH/views/monkeys/_form.php

$ php oil refine migrate
Migrated to latest version: 3.
```

As you can see lots of code is generated by this command including a command that is executed in the second command.
The controller looks like this:

```
class Controller_Monkey extends Controller_Template
{

	public function action_index()
	{
		$data['monkeys'] = Model_Monkey::find('all');
		$this->template->title = "Monkeys";
		$this->template->content = View::forge('monkey/index', $data);

	}

	public function action_view($id = null)
	{
		$data['monkey'] = Model_Monkey::find($id);

		$this->template->title = "Monkey";
		$this->template->content = View::forge('monkey/view', $data);

	}

	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$monkey = Model_Monkey::forge(array(
				'name' => Input::post('name'),
				'description' => Input::post('description'),
			));

			if ($monkey and $monkey->save())
			{
				Session::set_flash('success', 'Added monkey #'.$monkey->id.'.');

				Response::redirect('monkey');
			}

			else
			{
				Session::set_flash('error', 'Could not save monkey.');
			}
		}

		$this->template->title = "Monkeys";
		$this->template->content = View::forge('monkey/create');

	}

	public function action_edit($id = null)
	{
		$monkey = Model_Monkey::find($id);

		if (Input::method() == 'POST')
		{
			$monkey->name = Input::post('name');
			$monkey->description = Input::post('description');

			if ($monkey->save())
			{
				Session::set_flash('success', 'Updated monkey #' . $id);

				Response::redirect('monkey');
			}

			else
			{
				Session::set_flash('error', 'Could not update monkey #' . $id);
			}
		}

		else
		{
			$this->template->set_global('monkey', $monkey, false);
		}

		$this->template->title = "Monkeys";
		$this->template->content = View::forge('monkey/edit');

	}

	public function action_delete($id = null)
	{
		if ($monkey = Model_Monkey::find($id))
		{
			$monkey->delete();

			Session::set_flash('success', 'Deleted monkey #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete monkey #'.$id);
		}

		Response::redirect('monkey');

	}

}
```

### Admin scaffolding

You can swap scaffold with admin and generate a controller which extends Controller\_Admin instead of Controller\_Template.
On the first use of this command an admin skeleton will be generated, to expand this skeleton use the skip force argument.
To generate in subdirectories name the prefix the model's name accordingly.

```
$ php oil g admin project_entry title:string abstract:text full_text:text project_id:int is_draft:int order:int -s
	Creating migration: APPPATH/migrations/012_create_project_entries.php
	Creating model: APPPATH/classes/model/project/entry.php
	Creating controller: APPPATH/classes/controller/admin/project/entry.php
	Creating view: APPPATH/views/admin/project/entry/index.php
	Creating view: APPPATH/views/admin/project/entry/view.php
	Creating view: APPPATH/views/admin/project/entry/create.php
	Creating view: APPPATH/views/admin/project/entry/edit.php
	Creating view: APPPATH/views/admin/project/entry/_form.php
```

### Tasks

You can also have oil generate the skeleton of a new task.

```
$ php oil g task newtask cmd1 cmd2
```

Which will generate

```
<?php

namespace Fuel\Tasks;

class Newtask
{
	public static function run($args = NULL)
	{
		echo "\n===========================================";
		echo "\nRunning DEFAULT task [Newtask:Run]";
		echo "\n-------------------------------------------\n\n";

		/***************************
		 Put in TASK DETAILS HERE
		 **************************/
	}

	public static function cmd1($args = NULL)
	{
		echo "\n===========================================";
		echo "\nRunning task [Newtask:Cmd1]";
		echo "\n-------------------------------------------\n\n";

		/***************************
		 Put in TASK DETAILS HERE
		 **************************/
	}

	public static function cmd2($args = NULL)
	{
		echo "\n===========================================";
		echo "\nRunning task [Newtask:Cmd2]";
		echo "\n-------------------------------------------\n\n";

		/***************************
		 Put in TASK DETAILS HERE
		 **************************/
	}
}
/* End of file tasks/newtask.php */
```

### Configs

To generate a [Config](docs__classes__config.md), use the following command:

```
$ php oil g config sample hello:world
	Created config: APPPATH/config/sample.php
```

This will produce a config that looks like this:

```
return array (
	'hello' => 'world',
);

/* End of file sample.php */
```

### Generate Config from COREPATH

To combine config from COREPATH/config if APPPATH/config doesn't have one

```
$ php oil g config package
	Created config: APPPATH/config/package.php
```

This will produce a config that looks like this:

```
return array (
	'sources' =>
	array (
		0 => 'github.com/fuel-packages',
	),
);
```

### Force Update Config from COREPATH & APPPATH

To combine config from COREPATH/config and combine APPPATH/config to APPPATH/config

```
$ php oil g config form --overwrite
	Created config: APPPATH/config/form.php
```

This will produce a config that looks like this:

```
return array (
	'prep_value' => true,
	'auto_id' => true,
	'auto_id_prefix' => '',
	'form_method' => 'post',
);

/* End of file form.php */
```

### Packages

To generate a [Package](docs__general__packages.md), use the following command:

```
$ php oil g package sample
	Creating file: PKGPATH/sample/classes/sample.php
	Creating file: PKGPATH/sample/config/sample.php
	Creating file: PKGPATH/sample/bootstrap.php
```

The path where the package is generated is PKGPATH by default, but this value can be changed to any path defined in the `package_paths` config by passing the `--path=package_path` or `-p=package_path` option to the command.

### Generate Driver-based Package

If you wish to generate a driver-based package, simply supply the `--drivers` or `-d` option:

```
$ php oil g package sample -d
	Creating file: PKGPATH/sample/classes/sample.php
	Creating file: PKGPATH/sample/classes/sample/driver.php
	Creating file: PKGPATH/sample/config/sample.php
	Creating file: PKGPATH/sample/bootstrap.php
```

You can also generate your own drivers. Simply pass the driver names separated by commas to the `--drivers` or `-d` option:

```
$ php oil g package sample -d=driver1,driver2
	Creating file: PKGPATH/sample/classes/sample.php
	Creating file: PKGPATH/sample/classes/sample/driver.php
	Creating file: PKGPATH/sample/classes/sample/driver1.php
	Creating file: PKGPATH/sample/classes/sample/driver2.php
	Creating file: PKGPATH/sample/config/sample.php
	Creating file: PKGPATH/sample/bootstrap.php
```

### Generate Package with VCS files

If you wish to generate composer.json and README.md files for your package, simply supply the `--vcs` or `-v` option:

```
$ php oil g package sample -v
	Creating file: PKGPATH/sample/composer.json
	Creating file: PKGPATH/sample/README.md
	Creating file: PKGPATH/sample/classes/sample.php
	Creating file: PKGPATH/sample/config/sample.php
	Creating file: PKGPATH/sample/bootstrap.php
```

### Modules

To generate a [Module](docs__general__modules.md), use the following command:

```
$ php oil g module blog
```

This command will create a folder called `blog` in you app's module path defined in `config.module_paths`. If you have multiple module paths defined, you will get a list of paths that you can choose from, e.g.:

```
$ php oil g module blog
Your app has multiple module paths defined. Please choose the appropriate path from the list below
[1] /var/www/fuel/shared/modules/
[2] /var/www/fuel/app/modules/
```

To provide for even easier module generation, you can supply the `--folders` option with a list of comma-separated folders to be created. These can be nested almost indefinitely and you don't need to provide every parent folder. A short yet useful example can be:

```
$ php oil g module blog --folders=classes/model,classes/controller,config,lang
```

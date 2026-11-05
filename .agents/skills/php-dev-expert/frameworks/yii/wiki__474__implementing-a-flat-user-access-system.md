# Implementing a Flat User Access System | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/474/implementing-a-flat-user-access-system

---

## [Implementing a Flat User Access System](wiki__474__implementing-a-flat-user-access-system.md)

6    0

7

Viewed: 21 664 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [access control](wiki__index.md)
- [authorization](wiki__index.md)
- [rbac](wiki__index.md)

Written by: [![Trejder](/user/avatar/7141?v=1) Trejder](https://www.yiiframework.com/user/7141)

Updated by: [![Trejder](/user/avatar/7141?v=1) Trejder](https://www.yiiframework.com/user/7141)

Created: Apr 10, 2013

Updated: 13 years ago

1. [Intro](#intro)
2. [Implementation](#implementation)
3. [Usage](#usage)

This article shows a quick and easy way to implement flat user access control system. Flat means, that user access is controlled by level only, which is solution exactly opposite to complex RBAC access systems.

#### Intro [¶](#intro)

This solution is meant only for a very simple applications and does not provide enough flexibility in larger, live or production systems. Therefore, it should be avoided in such solutions.

This article is inspired by "[Implementing a User Level Access System](http://www.yiiframework.com/wiki/191/implementing-a-user-level-access-system/)" article, written by Antonio Ramirez. Though it provides a bit different approach and in my opinion is easier to implement.

Differences:

1. User types are stored all together in one array, not in separate constants, which means, that adding or removing user types requires change only in one place, not across all code.
2. `EWebUser` class (extended version of `CWebUser`) stores current user level, which doesn't require to load User model each time, user level variable is requested (but has also some negative side effects -- look below).

#### Implementation [¶](#implementation)

##### Modify user table [¶](#modify-user-table)

Start in the same point as in [Antonio's article](http://www.yiiframework.com/wiki/191/implementing-a-user-level-access-system/) -- i.e. add column `level` to your table, that stores all your users.

##### Update `UserIdentity` [¶](#update-useridentity)

Now, change `UserIdentity` (usually stored in `protected/components`). Locate part of the code executed after successful login and above line `$this->errorCode = self::ERROR_NONE;` add `$this->setState('level', $user->level);`.

You can access this value via `Yii::app()->user->level` anywhere in your code.

Antonio's article mentions about declaring additional `private $_id;` and `getId()` function in this class:

```
public function getId()
{
    return $this->_id;
}
```

This is useful, since `CWebUser.id` property is set to the value taken form `username` table of `User` model by default, where in most situations it is far better to have `id` column value here. But take this modification as optional -- it is not used in my solution.

##### `EWebUser` class [¶](#ewebuser-class)

Write a `EWebUser` class, that will act as extended version of default `CWebUser` providing some additional functionallity.

In my implementation this class looks like this:

```
class EWebUser extends CWebUser
{
	private $_userTable = array
	(
		0=>'Normal',
		1=>'Editor',
		8=>'Admin',
		9=>'Superuser'
	);
		
	protected $_model;
 
	function isAdmin()
	{
		//Access this via Yii::app()->user->isAdmin()
		
		return (Yii::app()->user->isGuest) ? FALSE : $this->level == 8;
	}
	
	public function isSuperuser()
	{
		//Access this via Yii::app()->user->isSuperuser()
		
		return (Yii::app()->user->isGuest) ? FALSE : $this->level == 9;
	}
	
	public function canAccess($minimumLevel)
	{
		//Access this via Yii::app()->user->canAccess(9)
		
		return (Yii::app()->user->isGuest) ? FALSE : $this->level >= $minimumLevel;
	}
	
	public function getRoleName()
	{
		//Access this via Yii::app()->user->roleName()
		
		return (Yii::app()->user->isGuest) ? '' : $this->getUserLabel($this->level);
	}
 
	public function getUserLabel($level)
	{
		//Use this for example as a column in CGridView.columns:
		//
		//array('value'=>'Yii::app()->user->getUserLabel($data->level)'),
		
		return $this->_userTable[$level];
	}
	
	public function getUserLevelsList()
	{
		//Access this via Yii::app()->user->getUserLevelList()
		
		return $this->_userTable;
	} 
}
```

Modify it, whether you like. Write it in `protected/components` folder.

Since user level is stored directly in `EWebUser`, there is no need to pool database on each check, if he or she is an admin, super user, what is his or her level etc. But, there is also a side effect. Entire `EWebUser` data is stored in a session, so any change to user settings (for example level) won't be visible until next login of that user.

Tell Yii to use `EWebUser` instead of `CWebUser` by changing `components->user` part in your config file:

```
'components'=>array
(
	'user'=>array
	(
		'allowAutoLogin'=>true,
		'class'=>'application.components.EWebUser',
	),
```

That would be generally all about implementation of this solution.

#### Usage [¶](#usage)

If you implement exactly the same class as mine, you can use it in a various ways.

Directly in the text or code:

```
echo('Admin: <strong>'.(Yii::app()->user->isAdmin() ? 'yes' : 'now').'</strong> | ');
echo('Level: <strong>'.(Yii::app()->user->level).'</strong> | ');
echo('Role: <strong>'.(Yii::app()->user->roleName).'</strong>');
```

Checking, if currently logged-in user can access some place:

```
Yii::app()->user->canAccess(8)
```

And providing *minimum* level number user must have to access that part of website.

Changing column in `CGridView` to display textual role name, instead of level number:

```
array('value'=>'Yii::app()->user->getUserLabel($data->level)'),
```

Getting all users levels as one array, to feed elements like listbox or radio button list:

```
Yii::app()->user->getUserLevelsList()
```

Finally, checking, if user can access particular action in a controller:

```
public function accessRules()
{
	return array
	(
		array
		(
			'allow',
			'actions'=>array
			(
				'admin',
				'create',
				'delete',
				'update'
			),
			'expression'=>'$user->isAdmin()'
		),
		
		//Deny all users
		array('deny', 'users'=>array('*'))
	)
}
```

You fill find other examples mentioned in source code as comments.

You can easily extend this solution, by adding own user levels and or other functionality.

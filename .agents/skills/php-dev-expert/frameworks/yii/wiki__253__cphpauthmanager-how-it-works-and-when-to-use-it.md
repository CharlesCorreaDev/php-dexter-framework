# CPhpAuthManager - how it works, and when to use it | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/253/cphpauthmanager-how-it-works-and-when-to-use-it

---

## [CPhpAuthManager - how it works, and when to use it](wiki__253__cphpauthmanager-how-it-works-and-when-to-use-it.md)

1    2

6

Viewed: 37 883 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [accessControl](wiki__index.md)
- [admin](wiki__index.md)
- [banned](wiki__index.md)
- [CPhpAuthManager](wiki__index.md)
- [guest](wiki__index.md)
- [moderator](wiki__index.md)
- [rbac](wiki__index.md)
- [roles](wiki__index.md)

Written by: [![dckurushin](/user/avatar/18398?v=1) dckurushin](https://www.yiiframework.com/user/18398)

Updated by: [![François Gannaz](/image/user/default_user.svg) François Gannaz](https://www.yiiframework.com/user/3121)

Created: Oct 12, 2011

Updated: 14 years ago

1. [Introduction](#introduction)
2. [Why CPhpAuthManager can be evil?](#why-cphpauthmanager-can-be-evil)
3. [What to do?](#what-to-do)
4. [The rules](#the-rules)
5. [Conclusion](#conclusion)
6. [Addition1](#addition1)

#### Introduction [¶](#introduction)

Before reading this article, you should first learn this [How to setup RBAC with a php file](http://www.yiiframework.com/wiki/65/how-to-setup-rbac-with-a-php-file)

It is actually mentioned in the documentation

[CPhpAuthManager](http://www.yiiframework.com/doc/api/1.1/CPhpAuthManager "CPhpAuthManager") :
CPhpAuthManager is mainly suitable for authorization data that is not too big (for example, the authorization data for a personal blog system). Use CDbAuthManager for more complex authorization data.

So you maybe mistakenly thought it was perfect and would allow you to manage the roles of the next website with million users, and it doesn't ...
BUT there are ways to improve it actually, if your hierarchy structure is simple, so you can serve up to million users with it.

#### Why CPhpAuthManager can be evil? [¶](#why-cphpauthmanager-can-be-evil)

At the first glance what is the problem? You set auth.php file, it has the rules - no problems.

But actually when you dig deeper you understand there is a lot of issues with it .

Lets take a look at the [CPhpAuthManager::assign](http://www.yiiframework.com/doc/api/1.1/CPhpAuthManager#assign-detail)
The key to start understanding is this snippet:

```
$this->_assignments[$userId][$itemName]
```

when you assign a role to some userId, it is added to the existing assignments, userId serve as key, and that is how the access is checked... just like

```
isset($this->_assignments[$userId][$itemName])
```

Now as you saw in the code, there is no sessions there, so if you don't save next time user go to another page, no roles...

so you should save **at the end** of role assignment or revoke (at and of cycle, not in the middle!!!)

Now to the punch line

[CPhpAuthManager::save](http://www.yiiframework.com/doc/api/1.1/CPhpAuthManager#save-detail)

what it does is it takes all the assignments and roles and just write them to auth.php

THe problem: Remember?

```
$this->_assignments[$userId][$itemName]
```

So as you I think understood, auth.php will be overwritten, and rows with users ID will be added to each role...

So if you have for example 10000 users, you will have about 10000+ rows inside auth.php loaded every time !!!

if you have 100000 it will just break...

cause it overwrite it **every time**!!!

#### What to do? [¶](#what-to-do)

So as mentioned in the documentation, if you don't use some smart strategy, you should not use CPhpAuthManager for project with more than few hundred users!

But... if your hierarchy is simple like:

banned, guest, user, moderator, admin

And in **most** of the websites this is the case...

You can follow this rules and handle a million users easily!

#### The rules [¶](#the-rules)

**1)** **Never** revoke if you don't delete the user or change row...  
**2)** assign role and do CPhpAuthManager::save if and only if the user is assigned with moderator or admin rule  
**3)** in accessControl **never** use

```
'roles'=>array('user')
```

*Assuming that you have some role field in your users table...*

the banned rule will serve you in the authorization... no reason to assigned save it at all, just don't login banned users!

instead of **'roles'=>array('user')** **always** use the **@** for guests use **?**
Like this:

```
'users' => array('@')
```

**3)** use the

```
'roles'=>array('someROle')
```

**only** for moderators and admins!

#### Conclusion [¶](#conclusion)

If you follow this rules, if you have 1 million of users.
You will have about 100 moderators and few admins... so it is peace of cake for CPhpAuthManager if you follow the rules.

You just need to remember that for every role assignment hou have to add a row to your auth.php file that is loaded every time!

#### Addition1 [¶](#addition1)

I described the issue, but it is always better to do it yourself to understand in more depth what is the "problem" with it.
And don't understand me wrong... it is awesome! but it not meant to work with a lot of users and assignments.

Just do this loop after you set the basic rules in auth.php

```
$auth = Yii::app()->authManager;
for($userID=1;$userID<10000;$userID++)
   $auth->assign('user', $userID);
$auth->save();
```

execute it and after this open the "data/auth.php".

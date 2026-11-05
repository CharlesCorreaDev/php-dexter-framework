# Role Management | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/743/role-management

---

## [Role Management](wiki__743__role-management.md)

0    0

5

Viewed: 32 562 times

Version: 2.0

Category: [How-tos](wiki__index.md)

- [rbac](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Dency G B](/image/user/default_user.svg) Dency G B](https://www.yiiframework.com/user/131809)

Updated by: [![Dency G B](/image/user/default_user.svg) Dency G B](https://www.yiiframework.com/user/131809)

Created: Aug 19, 2014

Updated: 12 years ago

Implementing a role based access control is a very easy process and you can even load your roles from the database if you want.

Step1: Creating necessary tables in the database

The first step is to create necessary tables in the database.Below is the sql you need to run in the database.

```
drop table if exists `auth_assignment`;
drop table if exists `auth_item_child`;
drop table if exists `auth_item`;
drop table if exists `auth_rule`;

create table `auth_rule`
(
`name` varchar(64) not null,
`data` text,
`created_at` integer,
`updated_at` integer,
    primary key (`name`)
) engine InnoDB;

create table `auth_item`
(
`name` varchar(64) not null,
`type` integer not null,
`description` text,
`rule_name` varchar(64),
`data` text,
`created_at` integer,
`updated_at` integer,
primary key (`name`),
foreign key (`rule_name`) references `auth_rule` (`name`) on delete set null on update cascade,
key `type` (`type`)
) engine InnoDB;

create table `auth_item_child`
(
`parent` varchar(64) not null,
`child` varchar(64) not null,
primary key (`parent`, `child`),
foreign key (`parent`) references `auth_item` (`name`) on delete cascade on update cascade,
foreign key (`child`) references `auth_item` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `auth_assignment`
(
`item_name` varchar(64) not null,
`user_id` varchar(64) not null,
`created_at` integer,
primary key (`item_name`, `user_id`),
foreign key (`item_name`) references `auth_item` (`name`) on delete cascade on update cascade
) engine InnoDB;
```

Step2: Setting up the config file

Now you can set up the config file to use the authmanager as DbManager. This is done by adding the following lines to the components section of your config file

```
     'authManager' => [
                           'class' => 'yii\rbac\DbManager',
                           'defaultRoles' => ['guest'],
          ],
```

Step3: Adding and assigning roles.

Now you can add roles by simply writing the following code to your corresponding controller.

```
    use yii\rbac\DbManager;
    $r=new DbManager;
    $r->init();
    $test = $r->createRole('test');
    $r->add($test);
```

And you can assign it to the users by

```
$r->assign($test, 2);
```

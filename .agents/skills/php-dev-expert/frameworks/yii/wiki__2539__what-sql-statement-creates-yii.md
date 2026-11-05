# What SQL-Statement creates yii? | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2539/what-sql-statement-creates-yii

---

## [What SQL-Statement creates yii?](wiki__2539__what-sql-statement-creates-yii.md)

0    0

1

Viewed: 17 797 times

Version: 1.1

Category: [Tips](wiki__index.md)

- [Logging](wiki__index.md)
- [sql](wiki__index.md)
- [XDebug](wiki__index.md)

Written by: [![Necip](/image/user/default_user.svg) Necip](https://www.yiiframework.com/user/272603)

Updated by: [![Necip](/image/user/default_user.svg) Necip](https://www.yiiframework.com/user/272603)

Created: Jul 26, 2018

Updated: 8 years ago

The usual way to find out what Yii has created for an SQL query is to mutilate the SQL in the sourcecode and call the program again so that the SQL statement with errors is displayed. Or you can use the SQL logger, which must be switched on and off each time and logs all SQL statements, which leads to an enormous slowdown in program execution and decelerates your workflow.

These all is not necessary if you use XDebug and place a breakpoint after the function "getCommandBuilder" in the CActiveRecord.php and take a closer look at the return value in $command.

This database access is created in yii:

![yii-sql11.png?w=474](https://user-content.yiiframework.com/img/cm_n4zLRvoZZ_zdqJ0_IKw/https/ncpup.files.wordpress.com/2018/07/yii-sql11.png?w=474)

This code is called by the yii framework

![yii-sql21.png?w=474](https://user-content.yiiframework.com/img/08NYsJuDWB2kPtkCoC56UA/https/ncpup.files.wordpress.com/2018/07/yii-sql21.png?w=474)

getCommandBuilder returns this data structure with the generated SQL statement:

![yii-sql32.png?w=474](https://user-content.yiiframework.com/img/Qqs88bbFDfR-91-vDKtWIQ/https/ncpup.files.wordpress.com/2018/07/yii-sql32.png?w=474)

**Path to CActiveRecord.php**

C:\xampp\htdocs\your\_project\yii\framework\db\ar\CActiveRecord.php

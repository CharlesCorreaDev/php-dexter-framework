# Remove Byte Order Mark (BOM) from files recursively | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/570/remove-byte-order-mark-bom-from-files-recursively

---

## [Remove Byte Order Mark (BOM) from files recursively](wiki__570__remove-byte-order-mark-bom-from-files-recursively.md)

2    1

7

Viewed: 40 659 times

Version: all

Category: [How-tos](wiki__index.md)

- [BOM](wiki__index.md)
- [files](wiki__index.md)
- [folder](wiki__index.md)
- [recursive](wiki__index.md)
- [utf-8](wiki__index.md)
- [without](wiki__index.md)

Written by: [![Kostas Apazidis (KonApaz)](/user/avatar/14552?v=1) Kostas Apazidis (KonApaz)](https://www.yiiframework.com/user/14552)

Updated by: [![samdark](/user/avatar/415?v=1) samdark](https://www.yiiframework.com/user/415)

Created: Oct 2, 2013

Updated: 7 years ago

The problem was that all my web applications ran normally on localhost, but on server the Greek characters (or any other no-english characters) displayed with problems.

So, I needed to remove BOM from hundreds view files of Yii from a lot of Yii projects manually.
Netbeans has an option to keep files Encoding in utf-8 but not utf-8 without BOM.

My previous solution was the converting in utf-8 without BOM encoding one by one file on notepad++ consuming a lot of my time!

Many servers has not this issue but for other servers this is important.
So, after of two hours searching I found a fast way to do that by commands.

(If you have windows, install cygwin first)

1) Open a shell command, go into your root folder that contains the project

2) Run this command

```
grep -rl $'\xEF\xBB\xBF'  /home/rootfolder/Yii_project  > file_with_boms.txt
```

3) Now, Run this one

```
while read l; do sed -i '1 s/^\xef\xbb\xbf//'  $l; done < file_with_boms.txt
```

Thats it! The BOM will be removed from all files that contained it. Now you can upload your project on your server.

**Note:** Because I didn't use this way many times and I don't know if it works properly for all cases and files, make first a backup of your project! :)

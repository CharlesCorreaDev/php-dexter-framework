# Upgrade Sessions — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_sessions.html

---

# Upgrade Sessions[](#upgrade-sessions "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Session Library Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/sessions.html)
- [Session Library Documentation CodeIgniter 4.x](libraries__sessions.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- Only small things like the method names and the loading of the library have changed.
- The definition of the session table in Database Driver has changed.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Wherever you use the Session Library replace `$this->load->library('session');` with `$session = session();`.
2. From that on you have to replace every line starting with `$this->session` with `$session` followed by the new method name.

   > - To access session data use the syntax `$session->item` or `$session->get('item')` instead of the CI3 syntax `$this->session->name`.
   > - To set data use `$session->set($array);` instead of `$this->session->set_userdata($array);`.
   > - To remove data use `unset($_SESSION['some_name']);` or `$session->remove('some_name');` instead of `$this->session->unset_userdata('some_name');`.
   > - To mark session data as flashdata, which will only be available for the next request, use `$session->markAsFlashdata('item');` instead of `` $this->session->mark_as_flash('item');` ``
3. If you use Database Driver, you need to recreate the session table. See [DatabaseHandler Driver](libraries__sessions.md#sessions-databasehandler-driver).

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('session');

$_SESSION['item'];
$this->session->item;
$this->session->userdata('item');
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$session = session();

$_SESSION['item'];  // But we do not recommend to use superglobal directly.
$session->get('item');
$session->item;
session('item');
```

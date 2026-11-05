# Upgrade Security — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_security.html

---

# Upgrade Security[](#upgrade-security "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Security Class Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/security.html)
- [Security Documentation CodeIgniter 4.x](libraries__security.md)

Note

If you use the [Form Helper](helpers__form_helper.md) and enable the CSRF filter globally, then [`form_open()`](helpers__form_helper.md#form_open "form_open") will automatically insert a hidden CSRF field in your forms. So you do not have to upgrade this by yourself.

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- The method to implement CSRF tokens to HTML forms has been changed.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. To enable CSRF protection in CI4 you have to enable it in **app/Config/Filters.php**:

   ```
   <?php

   namespace Config;

   use CodeIgniter\Config\BaseConfig;

   class Filters extends BaseConfig
   {
       // ...

       public $globals = [
           'before' => [
               // 'honeypot',
               'csrf',
           ],
       ];

       // ...
   }
   ```
2. Within your HTML forms you have to remove the CSRF input field which looks similar to `<input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>" />`.
3. Now, within your HTML forms you have to add `<?= csrf_field() ?>` somewhere in the form body, unless you are using `form_open()`.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
);

?>

<form>
    <input name="name" type="text">
    <input name="email" type="text">
    <input name="password" type="password">

    <input type="hidden" name="<?= $csrf['name'] ?>" value="<?= $csrf['hash'] ?>">
    <input type="submit" value="Save">
</form>
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<form>
    <input name="name" type="text">
    <input name="email" type="text">
    <input name="password" type="password">

    <?= csrf_field() ?>
    <input type="submit" value="Save">
</form>
```

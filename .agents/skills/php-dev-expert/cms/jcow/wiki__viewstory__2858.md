# How to create a new Jcow module - Jcow Community

> **Fonte / Source:** https://community.jcow.net/wiki/viewstory/2858

---

[![](https://community.jcow.net/themes/gray/logo.png)](https://community.jcow.net)

[Login](https://community.jcow.net/member/login)     [Sign up](https://community.jcow.net/member/signup)

[Create an account](https://community.jcow.net/member/signup)

 [Connect with Facebook](https://community.jcow.net/fblogin)[![](https://community.jcow.net/files/common_css/g-logo.png) Connect with Google](https://community.jcow.net/jcowoauth/google)[Login](https://community.jcow.net/member/login)

Explore

[newspaperHome](https://community.jcow.net/feed)

[live\_helpQuestions](https://community.jcow.net/questions)

[articleBlogs](https://community.jcow.net/blogs)

[Client Area](https://community.jcow.net/clientarea)

[panoramaImages](https://community.jcow.net/images)

[storefrontStore](https://community.jcow.net/store)

[local\_libraryWiki](wiki__index.md)

[linkAffiliate](https://community.jcow.net/jcowaffiliate)

- [View](javascript:void(0))
- [Edit](wiki__editstory__2858.md)
- [History](wiki__viewhistory__2858.md)

[How to create a new Jcow module](wiki__viewstory__2858.md)

Assuming we are creating a new module named "Test". Module URI is "test".

Create a folder named "test". Then create 3 files in it.

![](uploads/userfiles/202203/2_11_58_4njwkf2z.jpg)

**test.info**:

This is the information file. Change the *test* to your real module URI.

```
name = Test Module
version = 1.0
description = This is a test module.
```

**test.install.php**:

This is installation file. Change the *test* to your real module URI.

the "*icon"* is your module icon. It support Font-Awesome Icons 4.7(<https://fontawesome.com/v4/icons/>) and Material Icons (<https://fonts.google.com/icons>). For Material Icons you need to add a "*mi-*" in front the name. In this example, we use "*mi-mood*".

```
<?php
function test_menu() {
    $items = array();
    $items['test'] = array(
        'name'=>'Test Module',
        'type'=>'community',
        'icon'=>'mi-mood'
    );
    return $items;
}
```

**test.php**:

This is the main file. Change the *test* to your real module URI.

```
<?php
class test {
    function index() {
        $output = 'Hello Jcow Module!';
        $output .= button(['type'=>'link', 'uri'=>'test/page1', 'title'=>t('Demo Link')]);
        new_section( $output );
        render();
    }

    function page1() {
        $output = 'This is Page1';
        new_section( $output );
        render();
    }
}
```

After creating those files, upload the "test" folder to your Jcow modules folder (Jcow\_installation\_folder/modules). Then login your website as administrator, go to AdminCP -> Modules, enable the test module:

![](uploads/userfiles/202203/2_12_08_605x5va2.jpg)

Finally, your members can see the module link from the menu:

![](uploads/userfiles/202203/2_12_10_f0hjf8x8.jpg)

[Jcow Home](https://community.jcow.net/go/Jcow_Home) | [Contact](https://community.jcow.net/go/Contact)

×

You need to login to do this

## Jcow Community

for Jcow users

[Sign up](https://community.jcow.net/member/signup)
[Login](https://community.jcow.net/member/login)

 [Connect with Facebook](https://community.jcow.net/fblogin)[![](https://community.jcow.net/files/common_css/g-logo.png) Connect with Google](https://community.jcow.net/jcowoauth/google)

[Follow @jcownet](https://twitter.com/jcownet)

© Jcow!  

×

####

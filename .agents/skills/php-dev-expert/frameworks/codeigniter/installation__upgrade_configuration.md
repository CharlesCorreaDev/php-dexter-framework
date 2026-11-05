# Upgrade Configuration — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_configuration.html

---

# Upgrade Configuration[](#upgrade-configuration "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Config Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/config.html)
- [Configuration Documentation CodeIgniter 4.x](general__configuration.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- In CI4, the configurations are now stored in classes which extend `CodeIgniter\Config\BaseConfig`.
- The **application/config/config.php** in CI3 will be **app/Config/App.php**
  and some other files like **app/Config/Security.php** for the specific classes.
- Within the configuration class, the config values are stored in public class properties.
- The method to fetch config values has been changed.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. You have to change the values in the default CI4 config files according to the
   changes in the CI3 files. The config names are pretty much the same as in CI3.
2. If you are using custom config files in your CI3 project you have to create those
   files as new PHP classes in your CI4 project in **app/Config**. These classes
   should be in the `Config` namespace and should extend `CodeIgniter\Config\BaseConfig`.
3. Once you have created all custom config classes, you have to copy the variables
   from the CI3 config into the new CI4 config class as public class properties.
4. Now, you have to change the config fetching syntax everywhere you fetch config
   values. The CI3 syntax is something like `$this->config->item('item_name');`.
   You have to change this into `config('MyConfig')->item_name;`.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

Path: **application/config/site.php**:

```
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$siteName  = 'My Great Site';
$siteEmail = '[email protected]';
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

Path: **app/Config/Site.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Site extends BaseConfig
{
    public $siteName  = 'My Great Site';
    public $siteEmail = '[email protected]';
}
```

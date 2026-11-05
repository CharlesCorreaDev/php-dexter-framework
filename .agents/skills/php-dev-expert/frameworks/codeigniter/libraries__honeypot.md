# Honeypot Class — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/honeypot.html

---

# Honeypot Class[](#honeypot-class "Link to this heading")

The Honeypot Class makes it possible to determine when a Bot makes a request to a CodeIgniter4 application,
if it’s enabled in **app/Config/Filters.php** file. This is done by attaching form fields to any form,
and this form field is hidden from a human but accessible to a Bot. When data is entered into the field, it’s
assumed the request is coming from a Bot. The bundled Honeypot filter throws a `HoneypotException` with
an HTTP status code of 403 (Forbidden).

## [Enabling Honeypot](#id1)[](#enabling-honeypot "Link to this heading")

To enable a Honeypot, changes have to be made to the **app/Config/Filters.php**. Just uncomment honeypot
from the `$globals` array, like:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public $globals = [
        'before' => [
            'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            'honeypot',
            // 'secureheaders',
        ],
    ];

    // ...
}
```

A sample Honeypot filter is bundled, as **system/Filters/Honeypot.php**.
If it is not suitable, make your own at **app/Filters/Honeypot.php**,
and modify the `$aliases` in **app/Config/Filters.php** appropriately.

## [Customizing Honeypot](#id2)[](#customizing-honeypot "Link to this heading")

Honeypot can be customized. The fields below can be set either in
**app/Config/Honeypot.php** or in **.env**.

- `$hidden` - `true` or `false` to control visibility of the honeypot field; default is `true`
- `$label` - HTML label for the honeypot field, default is `'Fill This Field'`
- `$name` - name of the HTML form field used for the template; default is `'honeypot'`
- `$template` - form field template used for the honeypot; default is `'<label>{label}</label><input type="text" name="{name}" value="">'`
- `$container` - container tag for the template; default is `'<div style="display:none">{template}</div>'`.
  If you enables CSP, you can remove `style="display:none"`.
- `$containerId` - [Since v4.3.0] this setting is used only when you enable CSP. You can change the id attribute for the container tag; default is `'hpc'`

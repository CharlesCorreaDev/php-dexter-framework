# Fetch uploaded files

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getfiles.php

---

# Yaf\_Request\_Abstract::getFiles

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::getFiles — Fetch uploaded files

### Descrição

public function **Yaf\_Request\_Abstract::getFiles**([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retrieves a variable from $\_FILES.

### Parâmetros

`name`
:   The variable name. If omitted, the whole array is returned.

`default`
:   The value to return if the variable is not found.

### Valor Retornado

The uploaded files array, or `default` if it is not set.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::getFiles()** example**

```
<?php
class UploadController extends Yaf_Controller_Abstract
{
    public function saveAction()
    {
        $file = $this->getRequest()->getFiles("avatar");

        if (is_array($file) && $file["error"] === UPLOAD_ERR_OK) {
            move_uploaded_file(
                $file["tmp_name"],
                "/var/www/uploads/" . basename($file["name"])
            );
        }
    }
}
?>
```

**Exemplo #2 **Yaf\_Request\_Abstract::getFiles()** example**

```
<?php
class UploadController extends Yaf_Controller_Abstract
{
    public function saveAction()
    {
        // Assuming a file was uploaded with the form field name "avatar"
        var_dump($this->getRequest()->getFiles("avatar"));
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(5) {
  ["name"]=>
  string(9) "photo.jpg"
  ["type"]=>
  string(10) "image/jpeg"
  ["tmp_name"]=>
  string(14) "/tmp/phpXvBXqZ"
  ["error"]=>
  int(0)
  ["size"]=>
  int(12455)
}
```

### Veja também

- [Yaf\_Request\_Abstract::getQuery()](yaf-request-abstract.getquery.md) - Fetch a query parameter
- [Yaf\_Request\_Abstract::getRequest()](yaf-request-abstract.getrequest.md) - Fetch a REQUEST variable
- [Yaf\_Request\_Abstract::getPost()](yaf-request-abstract.getpost.md) - Fetch a POST parameter
- [Yaf\_Request\_Abstract::getCookie()](yaf-request-abstract.getcookie.md) - Fetch a COOKIE variable
- **Yaf\_Request\_Abstract::getFiles()**
- [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md) - Obtém o parâmetro da chamada

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

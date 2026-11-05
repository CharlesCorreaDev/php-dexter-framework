# Retrieve the raw request body

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getraw.php

---

# Yaf\_Request\_Abstract::getRaw

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::getRaw — Retrieve the raw request body

### Descrição

public function **Yaf\_Request\_Abstract::getRaw**(): [?](language.types.null.md)[string](language.types.string.md)

Retrieves the raw request body.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

The raw request body as a string, or **`null`** on failure.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::getRaw()** example**

```
<?php
class ApiController extends Yaf_Controller_Abstract
{
    public function createAction()
    {
        // Assuming the client POSTs '{"name":"yaf","version":3}'
        $raw  = $this->getRequest()->getRaw();
        $data = json_decode($raw, true);

        var_dump($data);
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["name"]=>
  string(3) "yaf"
  ["version"]=>
  int(3)
}
```

### Veja também

- [Yaf\_Request\_Abstract::getQuery()](yaf-request-abstract.getquery.md) - Fetch a query parameter
- [Yaf\_Request\_Abstract::getRequest()](yaf-request-abstract.getrequest.md) - Fetch a REQUEST variable
- [Yaf\_Request\_Abstract::getPost()](yaf-request-abstract.getpost.md) - Fetch a POST parameter
- [Yaf\_Request\_Abstract::getCookie()](yaf-request-abstract.getcookie.md) - Fetch a COOKIE variable
- [Yaf\_Request\_Abstract::getFiles()](yaf-request-abstract.getfiles.md) - Fetch uploaded files
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

# Fetch a REQUEST variable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getrequest.php

---

# Yaf\_Request\_Abstract::getRequest

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::getRequest — Fetch a REQUEST variable

### Descrição

public function **Yaf\_Request\_Abstract::getRequest**([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retrieves a variable from $\_REQUEST.

### Parâmetros

`name`
:   The variable name. If omitted, the whole array is returned.

`default`
:   The value to return if the variable is not found.

### Valor Retornado

The $\_REQUEST variable value, or `default` if it is not set.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::getRequest()** example**

```
<?php
class SearchController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        // Assuming the request is /search?keyword=yaf
        $keyword = $this->getRequest()->getRequest("keyword");
        $source  = $this->getRequest()->getRequest("source", "web");

        var_dump($keyword, $source);
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(3) "yaf"
string(3) "web"
```

### Veja também

- [Yaf\_Request\_Abstract::getQuery()](yaf-request-abstract.getquery.md) - Fetch a query parameter
- **Yaf\_Request\_Abstract::getRequest()**
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

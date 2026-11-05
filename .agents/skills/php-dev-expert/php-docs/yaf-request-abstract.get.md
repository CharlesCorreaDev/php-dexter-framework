# Retrieve a variable from the request

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.get.php

---

# Yaf\_Request\_Abstract::get

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::get — Retrieve a variable from the request

### Descrição

public function **Yaf\_Request\_Abstract::get**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retrieves a variable from the request. The search order is: request parameters set by [Yaf\_Request\_Abstract::setParam()](yaf-request-abstract.setparam.md), then POST, GET, COOKIE, SERVER.

### Parâmetros

`name`
:   The variable name.

`default`
:   The value to return if the variable is not found.

### Valor Retornado

The value if found, or `default` if it was provided, **`null`** otherwise.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::get()** example**

```
<?php
class SearchController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $request = $this->getRequest();

        // Assuming the request is /search?keyword=yaf&page=2
        $keyword = $request->get("keyword");
        $page    = (int) $request->get("page", 1);
        $sort    = $request->get("sort", "relevance");

        var_dump($keyword, $page, $sort);
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(3) "yaf"
int(2)
string(9) "relevance"
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

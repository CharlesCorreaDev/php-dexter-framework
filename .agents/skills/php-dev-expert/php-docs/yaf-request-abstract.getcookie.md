# Fetch a COOKIE variable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getcookie.php

---

# Yaf\_Request\_Abstract::getCookie

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::getCookie — Fetch a COOKIE variable

### Descrição

public function **Yaf\_Request\_Abstract::getCookie**([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retrieves a variable from $\_COOKIE.

### Parâmetros

`name`
:   The variable name. If omitted, the whole array is returned.

`default`
:   The value to return if the variable is not found.

### Valor Retornado

The cookie value, or `default` if it is not set.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::getCookie()** example**

```
<?php
class UserController extends Yaf_Controller_Abstract
{
    public function profileAction()
    {
        $request = $this->getRequest();

        $theme     = $request->getCookie("theme", "light");
        $sessionId = $request->getCookie("sid");

        var_dump($theme, $sessionId);
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(4) "dark"
string(8) "1f2a3b4c"
```

### Veja também

- [Yaf\_Request\_Abstract::getQuery()](yaf-request-abstract.getquery.md) - Fetch a query parameter
- [Yaf\_Request\_Abstract::getRequest()](yaf-request-abstract.getrequest.md) - Fetch a REQUEST variable
- [Yaf\_Request\_Abstract::getPost()](yaf-request-abstract.getpost.md) - Fetch a POST parameter
- **Yaf\_Request\_Abstract::getCookie()**
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

# Fetch a POST parameter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getpost.php

---

# Yaf\_Request\_Abstract::getPost

(Yaf >=3.2.2)

Yaf\_Request\_Abstract::getPost — Fetch a POST parameter

### Descrição

public function **Yaf\_Request\_Abstract::getPost**([string](language.types.string.md) `$name` = ?, [mixed](language.types.mixed.md) `$default` = ?): [mixed](language.types.mixed.md)

Retrieves a variable from $\_POST.

### Parâmetros

`name`
:   The variable name. If omitted, the whole array is returned.

`default`
:   The value to return if the variable is not found.

### Valor Retornado

The POST parameter value, or `default` if it is not set.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::getPost()** example**

```
<?php
class LoginController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        // Assuming the form was submitted with POST /login
        if ($this->getRequest()->isPost()) {
            $username = $this->getRequest()->getPost("username");
            $remember = $this->getRequest()->getPost("remember", "no");

            var_dump($username, $remember);
        }
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(8) "laruence"
string(3) "yes"
```

### Veja também

- [Yaf\_Request\_Abstract::getQuery()](yaf-request-abstract.getquery.md) - Fetch a query parameter
- [Yaf\_Request\_Abstract::getRequest()](yaf-request-abstract.getrequest.md) - Fetch a REQUEST variable
- **Yaf\_Request\_Abstract::getPost()**
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

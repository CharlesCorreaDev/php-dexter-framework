# Determine if the request is a PATCH request

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.ispatch.php

---

# Yaf\_Request\_Abstract::isPatch

(Yaf >=3.0.5)

Yaf\_Request\_Abstract::isPatch — Determine if the request is a PATCH request

### Descrição

public function **Yaf\_Request\_Abstract::isPatch**(): [bool](language.types.boolean.md)

Checks whether the request was sent with the PATCH method.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns **`true`** if the request method is PATCH, **`false`** otherwise.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::isPatch()** example**

```
<?php
class ProfileController extends Yaf_Controller_Abstract
{
    public function updateAction()
    {
        // Assuming the request was sent with PATCH /profile/update
        var_dump($this->getRequest()->isPatch());
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
```

### Veja também

- [Yaf\_Request\_Abstract::isGet()](yaf-request-abstract.isget.md) - Informa se a requisição é GET
- [Yaf\_Request\_Abstract::isPost()](yaf-request-abstract.ispost.md) - Informa se a requisição é POST
- [Yaf\_Request\_Abstract::isPut()](yaf-request-abstract.isput.md) - Informa se a requisição é PUT
- [Yaf\_Request\_Abstract::isHead()](yaf-request-abstract.ishead.md) - Informa se a requisição é HEAD
- [Yaf\_Request\_Abstract::isOptions()](yaf-request-abstract.isoptions.md) - Informa se a requisição é OPTIONS
- [Yaf\_Request\_Abstract::isDelete()](yaf-request-abstract.isdelete.md) - Determine if the request is a DELETE request
- [Yaf\_Request\_Abstract::isCli()](yaf-request-abstract.iscli.md) - Informa se é uma requisição CLI
- [Yaf\_Request\_Abstract::isXmlHttpRequest()](yaf-request-abstract.isxmlhttprequest.md) - Informa se a requisição é AJAX

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

# Determine if the request is a DELETE request

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.isdelete.php

---

# Yaf\_Request\_Abstract::isDelete

(Yaf >=3.0.5)

Yaf\_Request\_Abstract::isDelete — Determine if the request is a DELETE request

### Descrição

public function **Yaf\_Request\_Abstract::isDelete**(): [bool](language.types.boolean.md)

Checks whether the request was sent with the DELETE method.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns **`true`** if the request method is DELETE, **`false`** otherwise.

### Examples

**Exemplo #1 **Yaf\_Request\_Abstract::isDelete()** example**

```
<?php
class CommentController extends Yaf_Controller_Abstract
{
    public function removeAction()
    {
        // Assuming the request was sent with DELETE /comment/remove/id/12
        var_dump($this->getRequest()->isDelete());
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
- [Yaf\_Request\_Abstract::isPatch()](yaf-request-abstract.ispatch.md) - Determine if the request is a PATCH request
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

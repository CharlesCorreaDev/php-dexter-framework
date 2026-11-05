# Get the response object

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getresponse.php

---

# Yaf\_Dispatcher::getResponse

(Yaf >=1.0.0)

Yaf\_Dispatcher::getResponse — Get the response object

### Descrição

public function **Yaf\_Dispatcher::getResponse**(): [?](language.types.null.md)[Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

Retrieve the [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) instance used
by the dispatcher.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

The [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) instance, or **`null`** if
the application is not initialized.

### Examples

**Exemplo #1 **Yaf\_Dispatcher::getResponse()** example**

```
<?php
class CharsetPlugin extends Yaf_Plugin_Abstract
{
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        // Same response object as the one held by the dispatcher
        Yaf_Dispatcher::getInstance()->getResponse()->setHeader(
            "Content-Type", "text/html; charset=utf-8"
        );
    }
}
?>
```

### Veja também

- [Yaf\_Dispatcher::setResponse()](yaf-dispatcher.setresponse.md) - Set the response object
- [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

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

# Set the response object

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.setresponse.php

---

# Yaf\_Dispatcher::setResponse

(Yaf >=3.2.2)

Yaf\_Dispatcher::setResponse — Set the response object

### Descrição

public function **Yaf\_Dispatcher::setResponse**([Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [?](language.types.null.md)[Yaf\_Dispatcher](class.yaf-dispatcher.md)

Set the response object used by the dispatcher. This allows using a
custom response implementation instead of the built-in ones.

### Parâmetros

`response`
:   A [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) instance.

### Valor Retornado

Returns the [Yaf\_Dispatcher](class.yaf-dispatcher.md) object itself on
success, or **`null`** if the application is not initialized.

### Examples

**Exemplo #1 **Yaf\_Dispatcher::setResponse()** example**

```
<?php
class ApiResponse extends Yaf_Response_Http
{
    public function response()
    {
        header("Content-Type: application/json");
        parent::response();
    }
}

$app = new Yaf_Application(dirname(__FILE__) . "/conf/application.ini");

Yaf_Dispatcher::getInstance()->setResponse(new ApiResponse());

$app->run();
?>
```

### Veja também

- [Yaf\_Dispatcher::getResponse()](yaf-dispatcher.getresponse.md) - Get the response object
- [Yaf\_Dispatcher::setRequest()](yaf-dispatcher.setrequest.md) - setRequest

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

# Obtém a instância de Yaf_Dispatcher

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.getdispatcher.php

---

# Yaf\_Application::getDispatcher

(Yaf >=1.0.0)

Yaf\_Application::getDispatcher — Obtém a instância de Yaf\_Dispatcher

### Descrição

public function **Yaf\_Application::getDispatcher**(): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Application::getDispatcher()****

```
<?php
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);

/** Yaf_Application */
$application = new Yaf_Application($config);
print_r($application->getDispatcher());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Yaf_Dispatcher Object
(
    [_router:protected] => Yaf_Router Object
        (
            [_routes:protected] => Array
                (
                    [_default] => Yaf_Route_Static Object
                        (
                        )

                )

            [_current:protected] =>
        )

    [_view:protected] =>
    [_request:protected] => Yaf_Request_Http Object
        (
            [module] =>
            [controller] =>
            [action] =>
            [method] => Cli
            [params:protected] => Array
                (
                )

            [language:protected] =>
            [_exception:protected] =>
            [_base_uri:protected] =>
            [uri:protected] =>
            [dispatched:protected] =>
            [routed:protected] =>
        )

    [_plugins:protected] => Array
        (
        )

    [_auto_render:protected] => 1
    [_return_response:protected] =>
    [_instantly_flush:protected] =>
    [_default_module:protected] => Index
    [_default_controller:protected] => Index
    [_default_action:protected] => index
    [_response] => Yaf_Response_Cli Object
        (
            [_header:protected] => Array
                (
                )

            [_body:protected] =>
            [_sendheader:protected] =>
        )

)
```

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

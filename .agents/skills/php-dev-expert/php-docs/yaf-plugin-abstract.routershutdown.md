# routerShutdown

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-plugin-abstract.routershutdown.php

---

# Yaf\_Plugin\_Abstract::routerShutdown

(Yaf >=1.0.0)

Yaf\_Plugin\_Abstract::routerShutdown — routerShutdown

### Descrição

public function **Yaf\_Plugin\_Abstract::routerShutdown**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

Este gancho será acionado após a conclusão do processo de rota. Este gancho
geralmente é usado para verificação de login.

### Parâmetros

`request`

`response`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yaf\_Plugin\_Abstract::routerShutdown()****

```
<?php
class UserInitPlugin extends Yaf_Plugin_Abstract {

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        $controller = $request->getControllerName();

        /**
         * O controlador de acesso do usuário é desnecessário para APIs
         */
        if (in_array(strtolower($controller), array(
            'api',
        ))) {
            return TRUE;
        }

        if (Yaf_Session::getInstance()->has("login")) {
            return TRUE;
        }

        /* Falha na verificação de acesso do usuário, é necessário fazer login */
        $response->setRedirect("http://yourdomain.com/login/");
        return FALSE;
    }
}
?>
```

### Veja também

- [Yaf\_Plugin\_Abstract::routerStartup()](yaf-plugin-abstract.routerstartup.md) - Gancho RouterStartup
- [Yaf\_Plugin\_Abstract::dispatchLoopStartup()](yaf-plugin-abstract.dispatchloopstartup.md) - Gancho antes do loop de despacho
- [Yaf\_Plugin\_Abstract::preDispatch()](yaf-plugin-abstract.predispatch.md) - preDispatch
- [Yaf\_Plugin\_Abstract::postDispatch()](yaf-plugin-abstract.postdispatch.md) - postDispatch
- [Yaf\_Plugin\_Abstract::dispatchLoopShutdown()](yaf-plugin-abstract.dispatchloopshutdown.md) - dispatchLoopShutdown

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

# Obtém o nome efetivo da rota

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-router.getcurrentroute.php

---

# Yaf\_Router::getCurrentRoute

(Yaf >=1.0.0)

Yaf\_Router::getCurrentRoute — Obtém o nome efetivo da rota

### Descrição

public function **Yaf\_Router::getCurrentRoute**(): [string](language.types.string.md)

Obtém o nome efetivo da rota no processo de encaminhamento.
> **Nota**:
>
> A chamada a este método deve ser feita após a finalizado do processo de encaminhamento, já
> que, antes disso, o método sempre retornará **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string com o nome da rota efetiva.

### Examples

**Exemplo #1 Registrando alguns nomes no Bootstrap**

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = $dispatcher->getRouter();
        $rewrite_route  = new Yaf_Route_Rewrite(
            "/product/list/:page",
            array(
                "controller" => "product",
                "action"     => "list",
            )
        );

        $regex_route  = new Yaf_Route_Rewrite(
            "#^/product/info/(\d+)",
            array(
                "controller" => "product",
                "action"     => "info",
            )
        );

        $router->addRoute('rewrite', $rewrite_route)->addRoute('regex', $regex_route);
    }

    /**
     * registra plugin
     */
    public function __initPlugins(Yaf_Dispatcher $dispatcher) {
        $dispatcher->registerPlugin(new DummyPlugin());
    }
}
?>
```

**Exemplo #2 Plugin Dummy.php (no caminho [application.directory](yaf.appconfig.md#configuration.yaf.directory)/plugins)**

```
<?php
class DummyPlugin extends Yaf_Plugin_Abstract {
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
         var_dump(Yaf_Dispatcher::getInstance()->getRouter()->getCurrentRoute());
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* Para http://seudominio.com/product/list/1,
 * DummyPlugin exibirá:
 */
string(7) "rewrite"

/* Para http://seudominio.com/product/info/34,
 * DummyPlugin exibirá:
 */
string(5) "regex"

/* Para outros URIs,
 * DummyPlugin exibirá:
 */
string(8) "_default"
```

### Veja também

- [Yaf\_Bootstrap\_Abstract](class.yaf-bootstrap-abstract.md)
- [Yaf\_Plugin\_Abstract](class.yaf-plugin-abstract.md)
- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota

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

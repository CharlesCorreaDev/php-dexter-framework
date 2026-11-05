# Adiciona nova rota

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-router.addroute.php

---

# Yaf\_Router::addRoute

(Yaf >=1.0.0)

Yaf\_Router::addRoute — Adiciona nova rota

### Descrição

public function **Yaf\_Router::addRoute**([string](language.types.string.md) `$name`, Yaf\_Route\_Abstract `$route`): [bool](language.types.boolean.md)

Por padrão, Yaf\_Router usa uma [Yaf\_Route\_Static](class.yaf-route-static.md) como sua rota padrão. Podem
ser adicionadas novas rotas à pilha chamando-se este método.

A rota mais recente será chamada antes da mais antiga (pilha de rotas). Se a mais recente retornar
**`true`**, o processo de roteamento finalizará. Caso contrário, a mais antiga será
chamada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de [Yaf\_Dispatcher::autoRender()](yaf-dispatcher.autorender.md)**

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set("config", $config);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = $dispatcher->getRouter();
        /**
         * podem ser adicionadas algumas rotas predefinidas no application.ini
         */
        $router->addConfig(Yaf_Registry::get("config")->routes);
        /**
         * Adiciona uma rota de re-escrita. Para uma URI
         * http://example.com/product/list/22/foo
         * a ser correspondida, o resultado será:
         *
         *  [module] =>
         *  [controller] => product
         *  [action] => info
         *  [method] => GET
         *  [params:protected] => Array
         *      (
         *          [id] => 22
         *          [name] => foo
         *      )
         *
         */
        $route  = new Yaf_Route_Rewrite(
            "/product/list/:id/:name",
            array(
                "controller" => "product",
                "action"     => "info",
            )
        );

        $router->addRoute('dummy', $route);
    }
}
?>
```

### Veja também

- [Yaf\_Router::addConfig()](yaf-router.addconfig.md) - Adiciona as rotas definidas na configuração
- [Yaf\_Route\_Static](class.yaf-route-static.md)
- [Yaf\_Route\_Supervar](class.yaf-route-supervar.md)
- [Yaf\_Route\_Simple](class.yaf-route-simple.md)
- [Yaf\_Route\_Regex](class.yaf-route-regex.md)
- [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md)
- [Yaf\_Route\_Map](class.yaf-route-map.md)

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

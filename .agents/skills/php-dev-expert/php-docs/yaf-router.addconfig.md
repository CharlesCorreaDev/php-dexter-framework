# Adiciona as rotas definidas na configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-router.addconfig.php

---

# Yaf\_Router::addConfig

(Yaf >=1.0.0)

Yaf\_Router::addConfig — Adiciona as rotas definidas na configuração

### Descrição

public function **Yaf\_Router::addConfig**([Yaf\_Config\_Abstract](class.yaf-config-abstract.md) `$config`): [bool](language.types.boolean.md)

Adiciona as rotas definidas na configuração
à pilha de rotas do [Yaf\_Router](class.yaf-router.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de [Yaf\_Config\_Abstract](class.yaf-config-abstract.md), que deve
conter uma ou mais configurações de rotas válidas.

### Examples

**Exemplo #1 Exemplo de **application.ini()****

```
;a ordem é muito importante, as primeiras serão chamadas primeiro

;uma rota de re-escrita que corresponde a /product/*/*
routes.route_name.type="rewrite"
routes.route_name.match="/product/:name/:value"
routes.route_name.route.controller=product
routes.route_name.route.action=info

;uma rota regex que corresponde a /list/*/*
routes.route_name1.type="regex"
routes.route_name1.match="#^list/([^/]*)/([^/]*)#"
routes.route_name1.route.controller=Index
routes.route_name1.route.action=action
routes.route_name1.map.1=name
routes.route_name1.map.2=value

;uma rota simples que corresponde a /**?c=controller&a=action&m=module
routes.route_name2.type="simple"
routes.route_name2.controller=c
routes.route_name2.module=m
routes.route_name2.action=a

;uma rota simples que corresponde a /**?r=PATH_INFO
routes.route_name3.type="supervar"
routes.route_name3.varname=r

;uma rota de mapeamento que corresponde a qualquer requisição ao controlador
routes.route_name4.type="map"
routes.route_name4.controllerPrefer=TRUE
routes.route_namer.delimiter="#!"
```

**Exemplo #2 Exemplo de **Yaf\_Dispatcher::autoConfig()****

```
<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {
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
    }
}
?>
```

### Veja também

- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
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

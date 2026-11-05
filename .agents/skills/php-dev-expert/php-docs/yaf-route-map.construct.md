# __construct

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-map.construct.php

---

# Yaf\_Route\_Map::\_\_construct

(Yaf >=1.0.0)

Yaf\_Route\_Map::\_\_construct — \_\_construct

### Descrição

public function **Yaf\_Route\_Map::\_\_construct**([string](language.types.string.md) `$controller_prefer` = **`false`**, [string](language.types.string.md) `$delimiter` = "")

### Parâmetros

`controller_prefer`
:   Informa se o resultado a considerar é um controlador ou uma ação.

`delimiter`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de [Yaf\_Route\_Map](class.yaf-route-map.md)**

```
<?php
   /**
    * Adiciona uma rota de mapeamento à pilha de rotas Yaf_Router
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("name",
        new Yaf_Route_Map());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* para a rota http://seudominio.com/produto/foo/bar,
 * o resultado será o seguinte:
 */
array(
  "controller" => "produto_foo_bar",
)
```

**Exemplo #2 Exemplo de [Yaf\_Route\_Map](class.yaf-route-map.md)**

```
<?php
   /**
    * Adiciona uma rota de mapeamento à pilha de rotas Yaf_Router
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("name",
        new Yaf_Route_Map(true, "_"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* para a rota http://seudominio.com/usuario/lista/_/foo/22
 * o resultado será o seguinte:
 */
array(
    "action" => "usuario_lista",
)

/**
 * e os parâmetros da requisição:
 */
array(
  "foo"   => 22,
)
```

**Exemplo #3 Exemplo de [Yaf\_Route\_Map](class.yaf-route-map.md)**

```
<?php
   /**
    * Adiciona uma rota de mapeamento à pilha de rotas Yaf_Router chamando addconfig
    */
    $config = array(
        "name" => array(
           "type"  => "map",         // rota Yaf_Route_Map
           "controllerPrefer" => FALSE,
           "delimiter"        => "#!",
           ),
    );
    Yaf_Dispatcher::getInstance()->getRouter()->addConfig(
        new Yaf_Config_Simple($config));
?>
```

### Veja também

- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
- [Yaf\_Route\_Static](class.yaf-route-static.md)
- [Yaf\_Route\_Supervar](class.yaf-route-supervar.md)
- [Yaf\_Route\_Simple](class.yaf-route-simple.md)
- [Yaf\_Route\_Regex](class.yaf-route-regex.md)
- [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md)

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

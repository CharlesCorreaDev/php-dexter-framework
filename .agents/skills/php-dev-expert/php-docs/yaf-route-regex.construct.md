# Construtor de Yaf_Route_Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-regex.construct.php

---

# Yaf\_Route\_Regex::\_\_construct

(Yaf >=1.0.0)

Yaf\_Route\_Regex::\_\_construct — Construtor de Yaf\_Route\_Regex

### Descrição

public function **Yaf\_Route\_Regex::\_\_construct**(  
    [string](language.types.string.md) `$match`,  
    [array](language.types.array.md) `$route`,  
    [array](language.types.array.md) `$map` = ?,  
    [array](language.types.array.md) `$verify` = ?,  
    [string](language.types.string.md) `$reverse` = ?  
)

### Parâmetros

`match`
:   Uma expressão regular completa. Será usada para corresponder a uma URI de requisição. Se
    não corresponder, [Yaf\_Route\_Regex](class.yaf-route-regex.md) retornará
    **`false`**.

`route`
:   Quando a expressão corresponder ao URI,
    [Yaf\_Route\_Regex](class.yaf-route-regex.md) usará este parâmetro para decidir que
    valores m/c/a serão usados na rota.

    Qualquer dos valores de m/c/a neste array é opcional. Se não for especificado um
    valor, será usado o roteamento padrão.

`map`
:   Um array para atribuir nomes aos grupos de captura no resultado da correspondência.

`verify`

`reverse`
:   Uma string usada para montar o URL, consulte
    [Yaf\_Route\_Regex::assemble()](yaf-route-regex.assemble.md).
    > **Nota**:
    >
    > Este parâmetro está disponível a partir do Yaf 2.3.0.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de [Yaf\_Route\_Regex](class.yaf-route-regex.md)**

```
<?php
   /**
    * Adiciona uma rota "regex" à pilha de rotas Yaf_Router
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("name",
        new Yaf_Route_Regex(
           "#^/product/([^/]+)/([^/])+#", // corresponde a um URI iniciando com "/product"
           array(
               'controller' => "product",  // rota para o controlador de "/product",
           ),
           array(
              1 => "name",   // agora é possível chamar $request->getParam("name")
              2 => "id",     // para obter o primeiro grupo de captura na expressão correspondida.
           )
        )
    );
?>
```

**Exemplo #2 Exemplo de [Yaf\_Route\_Regex](class.yaf-route-regex.md) (a partir do Yaf 2.3.0)**

```
<?php
   /**
    * Usa o resultado da correspondência como nome MVC
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("name",
        new Yaf_Route_Regex(
           "#^/product/([^/]+)/([^/])+#i", // corresponde ao URI iniciando com "/product"
           array(
              'controller' => ":name", // rota para :name, que é $1 no resultado da correspondência como o nome do controlador
           ),
           array(
              1 => "name",   // agora é possível chamar $request->getParam("name")
              2 => "id",     // para obter o primeiro grupo de captura na expressão correspondida.
           )
        )
    );
?>
```

**Exemplo #3 Exemplo de [Yaf\_Route\_Regex](class.yaf-route-regex.md) e grupo de captura nomeado (a partir do Yaf 2.3.0)**

```
<?php
   /**
    * Usa o resultado da correspondência como nome MVC
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("name",
        new Yaf_Route_Regex(
           "#^/product/(?<name>[^/]+)/([^/])+#i", // corresponde ao URI iniciando com "/product"
           array(
           'controller' => ":name", // rota para :name,
                                    // que é o grupo de captura nomeado 'name' no resultado da correspondência como o nome do controlador
           ),
           array(
              2 => "id",
           )
        )
    );
?>
```

**Exemplo #4 Exemplo de [Yaf\_Route\_Regex](class.yaf-route-regex.md)**

```
<?php
   /**
    * Adiciona uma rota "regex" à pilha de rotas Yaf_Router chamando addconfig
    */
    $config = array(
        "name" => array(
           "type"  => "regex",          // rota Yaf_Route_Regex
           "match" => "#(.*)#",         // corresponde a um URI de requisição genérico
           "route" => array(
               'controller' => "product",  // rota para o controlador de "product",
               'action'     => "dummy",    // rota para uma ação "dummy"
           ),
           "map" => array(
              1 => "uri",   // agora pode-se chamar $request->getParam("uri")
           ),
        ),
    );
    Yaf_Dispatcher::getInstance()->getRouter()->addConfig(
        new Yaf_Config_Simple($config));
?>
```

### Veja também

- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
- [Yaf\_Router::addConfig()](yaf-router.addconfig.md) - Adiciona as rotas definidas na configuração
- [Yaf\_Route\_Static](class.yaf-route-static.md)
- [Yaf\_Route\_Supervar](class.yaf-route-supervar.md)
- [Yaf\_Route\_Simple](class.yaf-route-simple.md)
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

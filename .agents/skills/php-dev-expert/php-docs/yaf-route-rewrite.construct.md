# Construtor de Yaf_Route_Rewrite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-rewrite.construct.php

---

# Yaf\_Route\_Rewrite::\_\_construct

(Yaf >=1.0.0)

Yaf\_Route\_Rewrite::\_\_construct — Construtor de Yaf\_Route\_Rewrite

### Descrição

public function **Yaf\_Route\_Rewrite::\_\_construct**([string](language.types.string.md) `$match`, [array](language.types.array.md) `$route`, [array](language.types.array.md) `$verify` = ?)

### Parâmetros

`match`
:   Uma expressão que será usada para corresponder ao URI da requisição. Se
    não for correspondida, [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md) retornará
    **`false`**.

    Pode ser usado o estilo ":nome" para nomear os segmentos correspondidos, e "\*"
    para corresponder ao restante dos segmentos do URI.

`route`
:   Quando a expressão corresponde ao URI da requisição,
    [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md) usará este parâmetro para decidir qual
    módulo, controlador ou ação é o destino.

    Cada chave ("module", "controller", "action") neste array é opcional, se não for atribuído um
    valor específico, o encaminhamento será o padrão.

`verify`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md)**

```
<?php
   /**
    * Adiciona uma rota de re-escrita à pilha de rotas Yaf_Router
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute("nome",
        new Yaf_Route_Rewrite(
           "/produto/:nome/:id/*", // corresponde ao URI que inicia com "/produto"
           array(
               'controller' => "produto",  // rota para o controlador "produto"
           ),
        )
    );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* para http://seudominio.com/produto/foo/22/foo/bar,
 * a rota resultará nos seguintes valores:
 */
array(
  "controller" => "produto",
  "module"     => "index", // (padrão)
  "action"     => "index", // (padrão)
)

/**
 * e os parâmetros da requisição:
 */
array(
  "nome" => "foo",
  "id"   => 22,
  "foo"  => bar
)
```

**Exemplo #2 Exemplo de [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md)**

```
<?php
   /**
    * Adiciona uma rota de re-escrita à pilha de rotas Yaf_Router chamando addconfig
    */
    $config = array(
        "name" => array(
           "type"  => "rewrite",        // rota Yaf_Route_Rewrite
           "match" => "/user-list/:id", // corresponde apenas a /user-list/?/
           "route" => array(
               'controller' => "user",  // rota para o controlador "user"
               'action'     => "list",  // rota para a ação "list"
           ),
        ),
    );
    Yaf_Dispatcher::getInstance()->getRouter()->addConfig(
        new Yaf_Config_Simple($config));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* para http://seudominio.com/user-list/22
 * a rota resultará nos seguintes valores:
 */
array(
  "controller" => "user",
  "action"     => "list",
  "module"     => "index", // (padrão)
)

/**
 * e os parâmetros da requisição:
 */
array(
  "id"   => 22,
)
```

**Exemplo #3 Exemplo de [Yaf\_Route\_Rewrite](class.yaf-route-rewrite.md) (a partir do Yaf 2.3.0)**

```
<?php
   /**
    * Adiciona uma rota de re-escrita e usa o resultado da correspondência como o nome m/c/a
    */
    $config = array(
        "name" => array(
           "type"  => "rewrite",
           "match" => "/user-list/:a/:id", // corresponde apenas a /user-list/*
           "route" => array(
               'controller' => "user",   // rota para o controlador "user"
               'action'     => ":a",     // rota para a ação ":a"
           ),
        ),
    );
    Yaf_Dispatcher::getInstance()->getRouter()->addConfig(
        new Yaf_Config_Simple($config));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/* para http://seudominio.com/user-list/list/22,
 * a rota resultará nos seguintes valores:
 */
array(
  "controller" => "user",
  "action"     => "list",
  "module"     => "index", // (padrão)
)

/**
 * e os parâmetros da requisição:
 */
array(
  "id"   => 22,
)
```

### Veja também

- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
- [Yaf\_Router::addConfig()](yaf-router.addconfig.md) - Adiciona as rotas definidas na configuração
- [Yaf\_Route\_Static](class.yaf-route-static.md)
- [Yaf\_Route\_Supervar](class.yaf-route-supervar.md)
- [Yaf\_Route\_Simple](class.yaf-route-simple.md)
- [Yaf\_Route\_Regex](class.yaf-route-regex.md)
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

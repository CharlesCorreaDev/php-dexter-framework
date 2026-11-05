# Construtor de Yaf_Route_Supervar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-supervar.construct.php

---

# Yaf\_Route\_Supervar::\_\_construct

(Yaf >=1.0.0)

Yaf\_Route\_Supervar::\_\_construct — Construtor de Yaf\_Route\_Supervar

### Descrição

public function **Yaf\_Route\_Supervar::\_\_construct**([string](language.types.string.md) `$supervar_name`)

[Yaf\_Route\_Supervar](class.yaf-route-supervar.md) é similar a
[Yaf\_Route\_Static](class.yaf-route-static.md), a diferença é que
[Yaf\_Route\_Supervar](class.yaf-route-supervar.md) irá procurar por informação de caminho na
string da requisição e o parâmetro supervar\_name é a chave.

### Parâmetros

`supervar_name`
:   O nome da chave.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de [Yaf\_Route\_Supervar](class.yaf-route-supervar.md)**

```
<?php
   /**
    * Adiciona uma rota supervar à pilha de rotas Yaf_Router
    */
    Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
        "name",
        new Yaf_Route_Supervar("r")
    );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/** for request: http://seudominio.com/xx/oo/?r=/ctr/act/var/value
  * will result in following:
  */
  array (
      "module"   => index, // padrão
      "controller" => ctr,
      "action"     => act,
      "params"     => array (
          "var" => value,
      )
  )
```

### Veja também

- [Yaf\_Router::addRoute()](yaf-router.addroute.md) - Adiciona nova rota
- [Yaf\_Router::addConfig()](yaf-router.addconfig.md) - Adiciona as rotas definidas na configuração
- [Yaf\_Route\_Static](class.yaf-route-static.md)
- [Yaf\_Route\_Regex](class.yaf-route-regex.md)
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

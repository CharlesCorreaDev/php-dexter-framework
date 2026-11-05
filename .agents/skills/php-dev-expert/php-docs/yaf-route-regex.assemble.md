# Monta um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-regex.assemble.php

---

# Yaf\_Route\_Regex::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Regex::assemble — Monta um URL

### Descrição

public function **Yaf\_Route\_Regex::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [?](language.types.null.md)[string](language.types.string.md)

Monta um URL.

### Parâmetros

`info`

`query`

### Valor Retornado

Retorna uma [string](language.types.string.md) em caso de sucesso ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Route\_Regex::assemble()****

```
<?php

$router = new Yaf_Router();

$route  = new Yaf_Route_Regex(
            "#^/product/([^/]+)/([^/])+#",
            array(
                'controller' => "product",  // rota para o controlador de "/product",
                ),
            array(),
            array(),
            '/:m/:c/:a'
        );

$router->addRoute("regex", $route);

var_dump($router->getRoute('regex')->assemble(
            array(
                ':m' => 'module',
                ':c' => 'controller',
                ':a' => 'action'
                ),
            array(
                'tkey1' => 'tval1',
                'tkey2' =>
                'tval2'
                )
            )
        );
```

O exemplo acima produzirá
algo semelhante a:

```
string(49) "/module/controller/action?tkey1=tval1&tkey2=tval2"
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

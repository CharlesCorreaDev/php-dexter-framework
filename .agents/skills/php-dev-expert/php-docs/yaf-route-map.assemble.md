# Monta um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-map.assemble.php

---

# Yaf\_Route\_Map::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Map::assemble — Monta um URL

### Descrição

public function **Yaf\_Route\_Map::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

Monta um URL.

### Parâmetros

`info`

`query`

### Valor Retornado

Retorna uma [string](language.types.string.md) em caso de sucesso ou **`null`** em caso de falha.

### Erros/Exceções

Pode lançar uma exceção [Yaf\_Exception\_TypeError](class.yaf-exception-typeerror.md).

### Examples

**Exemplo #1 Exemplo de **Yaf\_Route\_Map::assemble()****

```
<?php

$router = new Yaf_Router();

$route  = new Yaf_Route_Map();

$router->addRoute("map", $route);

var_dump($router->getRoute('map')->assemble(
                        array(
                                ':c' => 'foo_bar'
                        ),
                        array(
                                'tkey1' => 'tval1',
                                'tkey2' => 'tval2'
                        )
                   )
);

$route = new Yaf_Route_Map(true, '_');
$router->addRoute("map", $route);

var_dump($router->getRoute('map')->assemble(
                        array(
                                ':a' => 'foo_bar'
                        ),
                        array(
                                'tkey1' => 'tval1',
                                'tkey2' => 'tval2'
                        )
                   )
);
```

O exemplo acima produzirá
algo semelhante a:

```
string(%d) "/foo/bar?tkey1=tval1&tkey2=tval2"
string(%d) "/foo/bar/_/tkey1/tval1/tkey2/tval2"
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

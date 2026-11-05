# Monta um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-rewrite.assemble.php

---

# Yaf\_Route\_Rewrite::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Rewrite::assemble — Monta um URL

### Descrição

public function **Yaf\_Route\_Rewrite::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

Monta um URL.

### Parâmetros

`info`

`query`

### Valor Retornado

Retorna uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo de **Yaf\_Route\_Rewrite::assemble()****

```
$router = new Yaf_Router();

$route  = new Yaf_Route_Rewrite(
                "/product/:name/:id/*",
                array(
                        'controller' => "product",
                ),
                array()
);

$router->addRoute("rewrite", $route);

var_dump($router->getRoute('rewrite')->assemble(
                        array(
                                ':name' => 'foo',
                                ':id' => 'bar',
                                ':tmpkey1' => 'tmpval1'
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
string(57) "/product/foo/bar/tmpkey1/tmpval1/?tkey1=tval1&tkey2=tval2"
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

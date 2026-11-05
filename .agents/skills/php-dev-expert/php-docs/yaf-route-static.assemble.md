# Monta um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-static.assemble.php

---

# Yaf\_Route\_Static::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Static::assemble — Monta um URL

### Descrição

public function **Yaf\_Route\_Static::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

Monta um URL.

### Parâmetros

`info`

`query`

### Valor Retornado

Retorna uma [string](language.types.string.md).

### Erros/Exceções

Lança uma exceção [Yaf\_Exception\_TypeError](class.yaf-exception-typeerror.md) se as chaves `':c'` e `':a'`
do parâmetro `info` não forem definidas.

### Examples

**Exemplo #1 Exemplo de **Yaf\_Route\_Static::assemble()****

```
<?php

$router = new Yaf_Router();

$route  = new Yaf_Route_Static();

$router->addRoute("static", $route);

var_dump($router->getRoute('static')->assemble(
            array(
                ':a' => 'yafaction',
                'tkey' => 'tval',
                ':c' => 'yafcontroller',
                ':m' => 'yafmodule'
            ),
        )
);

var_dump($router->getRoute('static')->assemble(
            array(
                ':a' => 'yafaction',
                'tkey' => 'tval',
                ':c' => 'yafcontroller',
                ':m' => 'yafmodule'
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
string(%d) "/yafmodule/yafcontroller/yafaction"
string(%d) "/yafmodule/yafcontroller/yafaction?tkey1=tval1&tkey2=tval2"
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

# Monta um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-supervar.assemble.php

---

# Yaf\_Route\_Supervar::assemble

(Yaf >=2.3.0)

Yaf\_Route\_Supervar::assemble — Monta um URL

### Descrição

public function **Yaf\_Route\_Supervar::assemble**([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

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

**Exemplo #1 Exemplo de **Yaf\_Route\_Supervar::assemble()****

```
<?php

$router = new Yaf_Router();

$route  = new Yaf_Route_Supervar('r');

$router->addRoute("supervar", $route);

var_dump($router->getRoute('supervar')->assemble(
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
));

try {
var_dump($router->getRoute('supervar')->assemble(
        array(
              ':a' => 'yafaction',
              'tkey' => 'tval',
              ':m' => 'yafmodule'
        ),
        array(
              'tkey1' => 'tval1',
              'tkey2' => 'tval2',
              1 => array(),
        )
));
} catch (Exception $e) {
    var_dump($e->getMessage());
}
```

O exemplo acima produzirá
algo semelhante a:

```
string(%d) "?r=/yafmodule/yafcontroller/yafaction&tkey1=tval1&tkey2=tval2"
string(%d) "You need to specify the controller by ':c'"
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

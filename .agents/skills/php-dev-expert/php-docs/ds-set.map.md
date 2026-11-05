# Retorna o resultado da aplicação de um retorno de chamada a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.map.php

---

# Ds\Set::map

(PECL ds >= 1.2.7)

Ds\Set::map — Retorna o resultado da aplicação de um retorno de chamada a cada valor

### Descrição

public function **Ds\Set::map**([callable](language.types.callable.md) `$callback`): [Ds\Set](class.ds-set.md)

Retorna o resultado da aplicação de uma função `callback` a
cada valor no conjunto.

### Parâmetros

`callback`
:   A função a ser aplicada a cada valor do conjunto deve ter a seguinte assinatura:

    function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

### Valor Retornado

Retorna uma nova instância de [Ds\Set](class.ds-set.md) onde cada valor
é o resultado da aplicação da função `callback` a cada valor
do conjunto.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::map()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);

var_dump($set->map(function($value) { return $value * 2; }));
var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (3) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
}
object(Ds\Set)#1 (3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
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

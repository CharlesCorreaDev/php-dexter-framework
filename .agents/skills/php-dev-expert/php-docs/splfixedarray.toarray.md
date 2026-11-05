# Retorna um array PHP do array fixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.toarray.php

---

# SplFixedArray::toArray

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::toArray — Retorna um array PHP do array fixo

### Descrição

public function **SplFixedArray::toArray**(): [array](language.types.array.md)

Retorna um array PHP do array fixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) PHP, semelhante ao array fixo.

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::toArray()****

```
<?php
$fa = new SplFixedArray(3);
$fa[0] = 0;
$fa[2] = 2;
var_dump($fa->toArray());
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(0)
  [1]=>
  NULL
  [2]=>
  int(2)
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

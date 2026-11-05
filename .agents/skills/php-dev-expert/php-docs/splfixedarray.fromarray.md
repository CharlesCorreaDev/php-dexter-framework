# Importa um array PHP em uma instância SplFixedArray

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.fromarray.php

---

# SplFixedArray::fromArray

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::fromArray — Importa um array PHP em uma instância [SplFixedArray](class.splfixedarray.md)

### Descrição

public static function **SplFixedArray::fromArray**([array](language.types.array.md) `$array`, [bool](language.types.boolean.md) `$preserveKeys` = **`true`**): [SplFixedArray](class.splfixedarray.md)

Importa o array PHP `array`
em uma nova instância de [SplFixedArray](class.splfixedarray.md)

### Parâmetros

`array`
:   O array a ser importado.

`preserveKeys`
:   Tenta preservar os índices numéricos usados no array original.

### Valor Retornado

Retorna uma instância de [SplFixedArray](class.splfixedarray.md)
contendo o conteúdo do array.

### Examples

**Exemplo #1 Exemplo de **SplFixedArray::fromArray()****

```
<?php
$fa = SplFixedArray::fromArray(array(1 => 1, 0 => 2, 3 => 3));

var_dump($fa);

$fa = SplFixedArray::fromArray(array(1 => 1, 0 => 2, 3 => 3), false);

var_dump($fa);
?>
```

O exemplo acima produzirá:

```
object(SplFixedArray)#1 (4) {
  [0]=>
  int(2)
  [1]=>
  int(1)
  [2]=>
  NULL
  [3]=>
  int(3)
}
object(SplFixedArray)#2 (3) {
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

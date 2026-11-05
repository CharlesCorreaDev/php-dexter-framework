# Troca o array por outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.exchangearray.php

---

# ArrayObject::exchangeArray

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayObject::exchangeArray — Troca o array por outro

### Descrição

public function **ArrayObject::exchangeArray**([array](language.types.array.md)|[object](language.types.object.md) `$array`): [array](language.types.array.md)

Troca o [array](language.types.array.md) atual por outro [array](language.types.array.md) ou [object](language.types.object.md).

### Parâmetros

`array`
:   O novo [array](language.types.array.md) ou [object](language.types.object.md) para trocar pelo array atual.

### Valor Retornado

Retorna o [array](language.types.array.md) antigo.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::exchangeArray()****

```
<?php
// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);
// Array de locais na Europa
$locations = array('Amsterdam', 'Paris', 'London');

$fruitsArrayObject = new ArrayObject($fruits);

// Agora troque as frutas por locais
$old = $fruitsArrayObject->exchangeArray($locations);
var_dump($old);
var_dump($fruitsArrayObject);

?>
```

O exemplo acima produzirá:

```
array(4) {
  ["lemons"]=>
  int(1)
  ["oranges"]=>
  int(4)
  ["bananas"]=>
  int(5)
  ["apples"]=>
  int(10)
}
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    [0]=>
    string(9) "Amsterdam"
    [1]=>
    string(5) "Paris"
    [2]=>
    string(6) "London"
  }
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

# Cria uma cópia do ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.getarraycopy.php

---

# ArrayObject::getArrayCopy

(PHP 5, PHP 7, PHP 8)

ArrayObject::getArrayCopy — Cria uma cópia do ArrayObject

### Descrição

public function **ArrayObject::getArrayCopy**(): [array](language.types.array.md)

Exporta o [ArrayObject](class.arrayobject.md) para um array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia do array. Quando o [ArrayObject](class.arrayobject.md) se refere a um objeto,
um array com as propriedades desse objeto será retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::getArrayCopy()****

```
<?php
// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);
$fruitsArrayObject['pears'] = 4;

// cria uma cópia do array
$copy = $fruitsArrayObject->getArrayCopy();
var_dump($copy);

?>
```

O exemplo acima produzirá:

```
array(5) {
  ["lemons"]=>
  int(1)
  ["oranges"]=>
  int(4)
  ["bananas"]=>
  int(5)
  ["apples"]=>
  int(10)
  ["pears"]=>
  int(4)
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

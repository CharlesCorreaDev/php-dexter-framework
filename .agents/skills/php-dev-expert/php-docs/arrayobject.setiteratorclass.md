# Define a classe do iterador para o ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.setiteratorclass.php

---

# ArrayObject::setIteratorClass

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayObject::setIteratorClass — Define a classe do iterador para o ArrayObject

### Descrição

public function **ArrayObject::setIteratorClass**([string](language.types.string.md) `$iteratorClass`): [void](language.types.void.md)

Define o nome da classe do iterador de array que é usado por
[ArrayObject::getIterator()](arrayobject.getiterator.md).

### Parâmetros

`iteratorClass`
:   O nome da classe do iterador de array a ser usado ao iterar sobre este objeto.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::setIteratorClass()****

```
<?php
// ArrayIterator Personalizado (herda de ArrayIterator)
class MyArrayIterator extends ArrayIterator {
    // implementação personalizada
}

// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);

// Define a classe do iterador para a nova
$fruitsArrayObject->setIteratorClass('MyArrayIterator');
var_dump($fruitsArrayObject->getIterator());

?>
```

O exemplo acima produzirá:

```
object(MyArrayIterator)#2 (1) {
  ["storage":"ArrayIterator":private]=>
  object(ArrayObject)#1 (1) {
    ["storage":"ArrayObject":private]=>
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

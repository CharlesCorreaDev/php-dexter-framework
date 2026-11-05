# Obtém o nome da classe do iterador para o ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.getiteratorclass.php

---

# ArrayObject::getIteratorClass

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

ArrayObject::getIteratorClass — Obtém o nome da classe do iterador para o ArrayObject

### Descrição

public function **ArrayObject::getIteratorClass**(): [string](language.types.string.md)

Obtém o nome da classe do iterador de array que é usado por
[ArrayObject::getIterator()](arrayobject.getiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome da classe do iterador que é usado para iterar sobre este objeto.

### Examples

**Exemplo #1 Exemplo de **ArrayObject::getIteratorClass()****

```
<?php
// ArrayIterator Personalizado  (herda de ArrayIterator)
class MyArrayIterator extends ArrayIterator {
    // implementação personalizada
}

// Array de frutas disponíveis
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);

// Obtém o nome da classe atual
$className = $fruitsArrayObject->getIteratorClass();
var_dump($className);

// Define novo nome de classe
$fruitsArrayObject->setIteratorClass('MyArrayIterator');

// Obtém o novo nome de classe do iterador
$className = $fruitsArrayObject->getIteratorClass();
var_dump($className);
?>
```

O exemplo acima produzirá:

```
string(13) "ArrayIterator"
string(15) "MyArrayIterator"
```

### Veja também

- O método [ArrayObject::setIteratorClass](arrayobject.setiteratorclass.md)

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

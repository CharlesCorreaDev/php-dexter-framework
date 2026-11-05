# Constrói um novo objeto de array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.construct.php

---

# ArrayObject::\_\_construct

(PHP 5, PHP 7, PHP 8)

ArrayObject::\_\_construct — Constrói um novo objeto de array

### Descrição

public function **ArrayObject::\_\_construct**([array](language.types.array.md)|[object](language.types.object.md) `$array` = [], [int](language.types.integer.md) `$flags` = 0, [string](language.types.string.md) `$iteratorClass` = **`ArrayIterator::class`**)

Constrói um novo objeto de array (do tipo [object](language.types.object.md)).

### Parâmetros

`array`
:   O parâmetro `array` aceita um
    [array](language.types.array.md) ou um [Object](language.types.object.md).

`flags`
:   Opções para controlar o comportamento do objeto [ArrayObject](class.arrayobject.md).
    Consulte [ArrayObject::setFlags()](arrayobject.setflags.md).

`iteratorClass`
:   Especifica a classe que será usada para iteração do objeto [ArrayObject](class.arrayobject.md).
    A classe deve ser um subtipo da classe [ArrayIterator](class.arrayiterator.md).

### Examples

**Exemplo #1 Exemplo de **ArrayObject::\_\_construct()****

```
<?php

$array = [
    '1' => 'um',
    '2' => 'dois',
    '3' => 'três'
];

$arrayobject = new ArrayObject($array);

var_dump($arrayobject);

?>
```

O exemplo acima produzirá:

```
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(3) {
    [1]=>
    string(3) "um"
    [2]=>
    string(3) "dois"
    [3]=>
    string(5) "três"
  }
}
```

### Veja também

- [ArrayObject::setflags()](arrayobject.setflags.md) - Define as opções de comportamento

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

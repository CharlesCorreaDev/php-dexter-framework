# Verifica se esta classe é iterável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isiterable.php

---

# ReflectionClass::isIterable

(PHP 7 >= 7.2.0, PHP 8)

ReflectionClass::isIterable — Verifica se esta classe é iterável

### Descrição

public function **ReflectionClass::isIterable**(): [bool](language.types.boolean.md)

Verifica se esta classe é iterável (ou seja, pode ser usada dentro do [`foreach`](control-structures.foreach.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a classe for iterável ou **`false`** caso contrário.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::isIterable()****

```
<?php

class IteratorClass implements Iterator
{
    public function __construct() {}

    public function key(): mixed {}

    public function current(): mixed {}

    public function next(): void {}

    public function valid(): bool {}

    public function rewind(): void {}
}

class DerivedClass extends IteratorClass {}

class NonIterator {}

function dump_iterable($class)
{
    $reflection = new ReflectionClass($class);
    var_dump($reflection->isIterable());
}

$classes = ["ArrayObject", "IteratorClass", "DerivedClass", "NonIterator",];

foreach ($classes as $class) {
    echo "$class é iterável? ";
    dump_iterable($class);
}
?>
```

O exemplo acima produzirá:

```
ArrayObject é iterável? bool(true)
IteratorClass é iterável? bool(true)
DerivedClass é iterável? bool(true)
NonIterator é iterável? bool(false)
```

### Veja também

- [ReflectionClass::\_\_construct()](reflectionclass.construct.md) - Constrói uma ReflectionClass

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

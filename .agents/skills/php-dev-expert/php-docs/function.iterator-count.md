# Conta os elementos em um iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iterator-count.php

---

# iterator\_count

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

iterator\_count — Conta os elementos em um iterador

### Descrição

function **iterator\_count**([Traversable](class.traversable.md)|[array](language.types.array.md) `$iterator`): [int](language.types.integer.md)

Conta os elementos em um iterador.
**iterator\_count()** não garante a manutenção da posição atual
do `iterator`.

### Parâmetros

`iterator`
:   O iterador sendo contado.

### Valor Retornado

O número de elementos em `iterator`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo de `iterator` foi ampliado de [Traversable](class.traversable.md) para [Traversable](class.traversable.md)|[array](language.types.array.md). |

### Examples

**Exemplo #1 Exemplo de **iterator\_count()****

```
<?php
$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));
var_dump(iterator_count($iterator));
?>
```

O exemplo acima produzirá:

```
int(4)
```

**Exemplo #2 **iterator\_count()** modifica a posição**

```
<?php
$iterator = new ArrayIterator(['one', 'two', 'three']);
var_dump($iterator->current());
var_dump(iterator_count($iterator));
var_dump($iterator->current());
?>
```

O exemplo acima produzirá:

```
string(3) "one"
int(3)
NULL
```

**Exemplo #3 **iterator\_count()** em laços [`foreach`](control-structures.foreach.md)**

```
<?php
$iterator = new ArrayIterator(['one', 'two', 'three']);
foreach ($iterator as $key => $value) {
    echo "$key: $value (", iterator_count($iterator), ")\n";
}?>
```

O exemplo acima produzirá:

```
0: one (3)
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

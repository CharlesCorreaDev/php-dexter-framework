# Acrescenta um iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.append.php

---

# AppendIterator::append

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::append — Acrescenta um iterador

### Descrição

public function **AppendIterator::append**([Iterator](class.iterator.md) `$iterator`): [void](language.types.void.md)

Acrescenta um iterador.

### Parâmetros

`iterator`
:   O iterador a ser acrescentado.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **AppendIterator::append()****

```
<?php
$array_a = new ArrayIterator(array('a', 'b', 'c'));
$array_b = new ArrayIterator(array('d', 'e', 'f'));

$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);

foreach ($iterator as $current) {
    echo $current;
}
?>
```

O exemplo acima produzirá:

```
abcdef
```

### Veja também

- [AppendIterator::\_\_construct()](appenditerator.construct.md) - Constrói um AppendIterator

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

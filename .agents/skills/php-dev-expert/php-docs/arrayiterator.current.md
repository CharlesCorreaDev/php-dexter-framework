# Retorna a entrada atual do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.current.php

---

# ArrayIterator::current

(PHP 5, PHP 7, PHP 8)

ArrayIterator::current — Retorna a entrada atual do array

### Descrição

public function **ArrayIterator::current**(): [mixed](language.types.mixed.md)

Obtém a entrada atual do [array](language.types.array.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A entrada atual do [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo de **ArrayIterator::current()****

```
<?php
$array = array('1' => 'um',
               '2' => 'dois',
               '3' => 'três');

$arrayobject = new ArrayObject($array);

for($iterator = $arrayobject->getIterator();
    $iterator->valid();
    $iterator->next()) {

    echo $iterator->key() . ' => ' . $iterator->current() . "\n";
}
?>
```

O exemplo acima produzirá:

```
1 => um
2 => dois
3 => três
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

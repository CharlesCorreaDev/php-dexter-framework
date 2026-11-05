# Retorna o iterador do ArrayObject

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.getiterator.php

---

# ArrayObject::getIterator

(PHP 5, PHP 7, PHP 8)

ArrayObject::getIterator — Retorna o iterador do ArrayObject

### Descrição

public function **ArrayObject::getIterator**(): [Iterator](class.iterator.md)

Cria um novo [Iterator](class.iterator.md) (o padrão é
[ArrayIterator](class.arrayiterator.md)) a partir de uma instância de [ArrayObject](class.arrayobject.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um iterador de um [ArrayObject](class.arrayobject.md).

### Examples

**Exemplo #1 Exemplo de **ArrayObject::getIterator()****

```
<?php

$array = [
    '1' => 'um',
    '2' => 'dois',
    '3' => 'três',
];

$arrayobject = new ArrayObject($array);

$iterator = $arrayobject->getIterator();

while ($iterator->valid()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";

    $iterator->next();
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

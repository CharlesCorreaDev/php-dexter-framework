# Verifica se a posição atual do DirectoryIterator é um arquivo válido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.valid.php

---

# DirectoryIterator::valid

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::valid — Verifica se a posição atual do DirectoryIterator é um arquivo válido

### Descrição

public function **DirectoryIterator::valid**(): [bool](language.types.boolean.md)

Verifica se a posição atual do [DirectoryIterator](class.directoryiterator.md) é um arquivo válido.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a posição é válida, caso contrário **`false`**

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::valid()****

```
<?php
$iterator = new DirectoryIterator(dirname(__FILE__));

// Loop to end of iterator
while($iterator->valid()) {
    $iterator->next();
}

$iterator->valid(); // FALSE
$iterator->rewind();
$iterator->valid(); // TRUE

?>
```

### Veja também

- [DirectoryIterator::current()](directoryiterator.current.md) - Retorna o item atual do DirectoryIterator
- [DirectoryIterator::key()](directoryiterator.key.md) - Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator
- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início
- [Iterator::valid()](iterator.valid.md) - Verifica se a posição atual é válida

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

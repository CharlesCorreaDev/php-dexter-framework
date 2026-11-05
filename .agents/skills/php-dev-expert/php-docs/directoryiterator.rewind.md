# Rebobina o DirectoryIterator de volta ao início

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.rewind.php

---

# DirectoryIterator::rewind

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::rewind — Rebobina o DirectoryIterator de volta ao início

### Descrição

public function **DirectoryIterator::rewind**(): [void](language.types.void.md)

Rebobina o [DirectoryIterator](class.directoryiterator.md) de volta ao início.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DirectoryIterator::rewind()****

```
<?php
$iterator = new DirectoryIterator(dirname(__FILE__));

$iterator->next();
echo $iterator->key(); // 1

$iterator->rewind(); // retocedendo até o início
echo $iterator->key(); // 0
?>
```

### Veja também

- [DirectoryIterator::current()](directoryiterator.current.md) - Retorna o item atual do DirectoryIterator
- [DirectoryIterator::key()](directoryiterator.key.md) - Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator
- [DirectoryIterator::valid()](directoryiterator.valid.md) - Verifica se a posição atual do DirectoryIterator é um arquivo válido
- [Iterator::rewind()](iterator.rewind.md) - Retrocede o Iterator para o primeiro elemento

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

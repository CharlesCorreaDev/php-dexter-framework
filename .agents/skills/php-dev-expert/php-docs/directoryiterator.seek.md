# Aponta para uma determinada posição no item do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.seek.php

---

# DirectoryIterator::seek

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DirectoryIterator::seek — Aponta para uma determinada posição no item do DirectoryIterator

### Descrição

public function **DirectoryIterator::seek**([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Aponta para uma determinada posição no item do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

`offset`
:   Posição para apontar com referência em zero.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DirectoryIterator::seek()****

Aponta para o quarto item no diretório que contém o script.
Os dois primeiros geralmente são `.` e `..`

```
<?php
$iterator = new DirectoryIterator(dirname(__FILE__));
$iterator->seek(3);
if ($iterator->valid()) {
    echo $iterator->getFilename();
} else {
    echo 'Sem arquivos na posição 3';
}
?>
```

### Veja também

- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início
- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator
- [SeekableIterator::seek()](seekableiterator.seek.md) - Aponta para uma posição

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

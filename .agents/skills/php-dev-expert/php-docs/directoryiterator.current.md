# Retorna o item atual do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.current.php

---

# DirectoryIterator::current

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::current — Retorna o item atual do DirectoryIterator

### Descrição

public function **DirectoryIterator::current**(): [mixed](language.types.mixed.md)

Obtém o item atual do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O item atual do [DirectoryIterator](class.directoryiterator.md).

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::current()****

Este exemplo listará o conteúdo do diretório que contém o script.

```
<?php
$iterator = new DirectoryIterator(__DIR__);
while($iterator->valid()) {
    $file = $iterator->current();
    echo $iterator->key() . " => " . $file->getFilename() . "\n";
    $iterator->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
0 => .
1 => ..
2 => apple.jpg
3 => banana.jpg
4 => index.php
5 => pear.jpg
```

### Veja também

- [DirectoryIterator::key()](directoryiterator.key.md) - Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator
- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início
- [DirectoryIterator::valid()](directoryiterator.valid.md) - Verifica se a posição atual do DirectoryIterator é um arquivo válido
- [Iterator::current()](iterator.current.md) - Retorna o elemento atual

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

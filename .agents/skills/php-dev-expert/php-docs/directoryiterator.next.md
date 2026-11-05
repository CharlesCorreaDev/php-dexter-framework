# Mover para o próximo item do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.next.php

---

# DirectoryIterator::next

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::next — Mover para o próximo item do DirectoryIterator

### Descrição

public function **DirectoryIterator::next**(): [void](language.types.void.md)

Move para o próximo item do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **DirectoryIterator::next()****

Lista o conteúdo de um diretório usando um loop while.

```
<?php
$iterator = new DirectoryIterator(dirname(__FILE__));
while($iterator->valid()) {
    echo $iterator->getFilename() . "\n";
    $iterator->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
.
..
apple.jpg
banana.jpg
index.php
pear.jpg
```

### Veja também

- [DirectoryIterator::current()](directoryiterator.current.md) - Retorna o item atual do DirectoryIterator
- [DirectoryIterator::key()](directoryiterator.key.md) - Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início
- [DirectoryIterator::valid()](directoryiterator.valid.md) - Verifica se a posição atual do DirectoryIterator é um arquivo válido
- [Iterator::next()](iterator.next.md) - Move para o próximo elemento

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

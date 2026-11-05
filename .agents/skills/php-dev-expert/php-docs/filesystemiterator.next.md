# Move para o próximo arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.next.php

---

# FilesystemIterator::next

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::next — Move para o próximo arquivo

### Descrição

public function **FilesystemIterator::next**(): [void](language.types.void.md)

Mover para o próximo arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **FilesystemIterator::next()****

Liste o conteúdo de um diretório usando um loop while.

```
<?php
$iterator = new FilesystemIterator(dirname(__FILE__));
while($iterator->valid()) {
    echo $iterator->getFilename() . "\n";
    $iterator->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
apple.jpg
banana.jpg
example.php
```

### Veja também

- [DirectoryIterator::next()](directoryiterator.next.md) - Mover para o próximo item do DirectoryIterator

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

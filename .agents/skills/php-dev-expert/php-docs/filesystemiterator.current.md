# O arquivo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.current.php

---

# FilesystemIterator::current

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::current — O arquivo atual

### Descrição

public function **FilesystemIterator::current**(): [string](language.types.string.md)|[SplFileInfo](class.splfileinfo.md)|[FilesystemIterator](class.filesystemiterator.md)

Obtém informações do arquivo do elemento atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do arquivo, as informações do arquivo ou $this dependendo das opções definidas.
Veja as [constantes FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants).

### Examples

**Exemplo #1 Exemplo de **FilesystemIterator::current()****

Este exemplo listará o conteúdo do diretório que contém o script.

```
<?php
$iterator = new FilesystemIterator(__DIR__, FilesystemIterator::CURRENT_AS_PATHNAME);
foreach ($iterator as $fileinfo) {
    echo $iterator->current() . "\n";
}
?>
```

A saída do exemplo acima no PHP 8.2 é semelhante a:

```
/www/examples/.
/www/examples/..
/www/examples/apple.jpg
/www/examples/banana.jpg
/www/examples/example.php
```

### Veja também

- [Constantes FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants)
- [DirectoryIterator::current()](directoryiterator.current.md) - Retorna o item atual do DirectoryIterator
- [DirectoryIterator::getFileName()](directoryiterator.getfilename.md) - Retorna o nome do arquivo do item atual do DirectoryIterator

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

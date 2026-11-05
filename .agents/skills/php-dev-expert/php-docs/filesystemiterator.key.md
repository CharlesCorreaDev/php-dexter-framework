# Recupera a chave para o arquivo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.key.php

---

# FilesystemIterator::key

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::key — Recupera a chave para o arquivo atual

### Descrição

public function **FilesystemIterator::key**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho ou nome do arquivo dependendo das opções definidas.
Veja as [constantes FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants).

### Examples

**Exemplo #1 Exemplo de **FilesystemIterator::key()****

Este exemplo listará o conteúdo do diretório que contém o script.

```
<?php
$iterator = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::KEY_AS_FILENAME);
foreach ($iterator as $fileinfo) {
    echo $iterator->key() . "\n";
}
?>
```

A saída do exemplo acima no PHP 8.2 é semelhante a:

```
.
..
apple.jpg
banana.jpg
example.php
```

### Veja também

- [Constantes FilesystemIterator](class.filesystemiterator.md#filesystemiterator.constants)
- [DirectoryIterator::key()](directoryiterator.key.md) - Retorna a chave para o item atual do DirectoryIterator
- [DirectoryIterator::getFilename()](directoryiterator.getfilename.md) - Retorna o nome do arquivo do item atual do DirectoryIterator
- **DirectoryIterator::getPathname()**

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

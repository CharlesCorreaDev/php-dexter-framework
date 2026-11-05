# Retorna o nome do arquivo do item atual do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.getfilename.php

---

# DirectoryIterator::getFilename

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::getFilename — Retorna o nome do arquivo do item atual do DirectoryIterator

### Descrição

public function **DirectoryIterator::getFilename**(): [string](language.types.string.md)

Obtém o nome do arquivo do item atual do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo do item atual do [DirectoryIterator](class.directoryiterator.md).

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::getFilename()****

Este exemplo listará o conteúdo do diretório que contém o script.

```
<?php
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    echo $fileinfo->getFilename() . "\n";
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

- [DirectoryIterator::getBasename()](directoryiterator.getbasename.md) - Retorna o nome do item corrente do DirectoryIterator
- **DirectoryIterator::getPath()**
- **DirectoryIterator::getPathname()**
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo

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

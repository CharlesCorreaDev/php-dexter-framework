# Retorna o nome do item corrente do DirectoryIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.getbasename.php

---

# DirectoryIterator::getBasename

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

DirectoryIterator::getBasename — Retorna o nome do item corrente do DirectoryIterator

### Descrição

public function **DirectoryIterator::getBasename**([string](language.types.string.md) `$suffix` = ""): [string](language.types.string.md)

Retorna o nome do item corrente do [DirectoryIterator](class.directoryiterator.md).

### Parâmetros

`suffix`
:   Se o nome base terminar no `suffix`,
    ele é retirado.

### Valor Retornado

O nome do item corrente do [DirectoryIterator](class.directoryiterator.md).

### Examples

**Exemplo #1 Exemplo do **DirectoryIterator::getBasename()****

Esse exemplo irá listar todo o nome base e o nome base com o
sufixo `.jpg` removido dos nomes de arquivo do diretório
o qual o script irá rodar.

```
<?php
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if ($fileinfo->isFile()) {
        echo $fileinfo->getBasename() . "\n";
        echo $fileinfo->getBasename('.jpg') . "\n";
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
apple.jpg
apple
banana.jpg
banana
index.php
index.php
pear.jpg
pear
```

### Veja também

- [DirectoryIterator::getFilename()](directoryiterator.getfilename.md) - Retorna o nome do arquivo do item atual do DirectoryIterator
- **DirectoryIterator::getPath()**
- **DirectoryIterator::getPathname()**
- [basename()](function.basename.md) - Retorna a última parte do caminho
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

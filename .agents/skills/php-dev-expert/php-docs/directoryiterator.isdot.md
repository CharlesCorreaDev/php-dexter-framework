# Determina se o item atual do DirectoryIterator é '.' ou '..'

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.isdot.php

---

# DirectoryIterator::isDot

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::isDot — Determina se o item atual do DirectoryIterator é '.' ou '..'

### Descrição

public function **DirectoryIterator::isDot**(): [bool](language.types.boolean.md)

Determina se o item atual do [DirectoryIterator](class.directoryiterator.md)
é um diretório e é
`.` ou `..`

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a entrada for `.` ou `..`,
caso contrário **`false`**

### Examples

**Exemplo #1 Um exemplo de **DirectoryIterator::isDot()****

Este exemplo listará todos os arquivos, omitindo as entradas `.` e
`..`.

```
<?php
$iterator = new DirectoryIterator(dirname(__FILE__));
foreach ($iterator as $fileinfo) {
    if (!$fileinfo->isDot()) {
        echo $fileinfo->getFilename() . "\n";
    }
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
apple.jpg
banana.jpg
example.php
pears.jpg
```

### Veja também

- **DirectoryIterator::getType()**
- **DirectoryIterator::isDir()**
- **DirectoryIterator::isFile()**
- **DirectoryIterator::isLink()**

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

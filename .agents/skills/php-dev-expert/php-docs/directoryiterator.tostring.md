# Retorna o nome do arquivo como texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/directoryiterator.tostring.php

---

# DirectoryIterator::\_\_toString

(PHP 5, PHP 7, PHP 8)

DirectoryIterator::\_\_toString — Retorna o nome do arquivo como texto

### Descrição

public function **DirectoryIterator::\_\_toString**(): [string](language.types.string.md)

Retorna o nome do item corrente do [DirectoryIterator](class.directoryiterator.md) como texto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do item corrente do [DirectoryIterator](class.directoryiterator.md) como texto.

### Examples

**Exemplo #1 Exemplo do **DirectoryIterator::\_\_toString()****

Este exemplo irá listar o conteúdo do diretório o qual o script está rodando.

```
<?php
$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    echo $fileinfo;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
.
..
maça.jpg
banana.jpg
index.php
pera.jpg
```

### Veja também

- [DirectoryIterator::getFilename()](directoryiterator.getfilename.md) - Retorna o nome do arquivo do item atual do DirectoryIterator
- O método mágico [\_\_toString()](language.oop5.magic.md#object.tostring)

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

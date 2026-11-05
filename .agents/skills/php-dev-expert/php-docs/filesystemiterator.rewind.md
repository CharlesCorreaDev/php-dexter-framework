# Retrocede para o início

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystemiterator.rewind.php

---

# FilesystemIterator::rewind

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

FilesystemIterator::rewind — Retrocede para o início

### Descrição

public function **FilesystemIterator::rewind**(): [void](language.types.void.md)

Retrocede o diretório para o início.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **FilesystemIterator::rewind()****

```
<?php
$iterator = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::KEY_AS_FILENAME);

echo $iterator->key() . "\n";

$iterator->next();
echo $iterator->key() . "\n";

$iterator->rewind();
echo $iterator->key() . "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
apple.jpg
banana.jpg
apple.jpg
```

### Veja também

- [DirectoryIterator::rewind()](directoryiterator.rewind.md) - Rebobina o DirectoryIterator de volta ao início

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

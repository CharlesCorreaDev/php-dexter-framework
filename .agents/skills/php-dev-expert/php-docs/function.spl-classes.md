# Retorna as classes SPL disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-classes.php

---

# spl\_classes

(PHP 5, PHP 7, PHP 8)

spl\_classes — Retorna as classes SPL disponíveis

### Descrição

function **spl\_classes**(): [array](language.types.array.md)

Esta função retorna um array com as classes SPL atualmente disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo as classes SPL atualmente disponíveis.

### Examples

**Exemplo #1 Exemplo de **spl\_classes()****

```
<?php

print_r(spl_classes());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [ArrayObject] => ArrayObject
    [ArrayIterator] => ArrayIterator
    [CachingIterator] => CachingIterator
    [RecursiveCachingIterator] => RecursiveCachingIterator
    [DirectoryIterator] => DirectoryIterator
    [FilterIterator] => FilterIterator
    [LimitIterator] => LimitIterator
    [ParentIterator] => ParentIterator
    [RecursiveDirectoryIterator] => RecursiveDirectoryIterator
    [RecursiveIterator] => RecursiveIterator
    [RecursiveIteratorIterator] => RecursiveIteratorIterator
    [SeekableIterator] => SeekableIterator
    [SimpleXMLIterator] => SimpleXMLIterator
)
```

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

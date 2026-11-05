# Recupera o conteúdo do cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/cachingiterator.getcache.php

---

# CachingIterator::getCache

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

CachingIterator::getCache — Recupera o conteúdo do cache

### Descrição

public function **CachingIterator::getCache**(): [array](language.types.array.md)

Recupera o conteúdo do cache.

> **Nota**:
>
> A opção **`CachingIterator::FULL_CACHE`**
> deve estar sendo utilizada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo os itens do cache.

### Erros/Exceções

Lança uma [BadMethodCallException](class.badmethodcallexception.md) quando a
opção **`CachingIterator::FULL_CACHE`** não está sendo utilizada.

### Examples

**Exemplo #1 Exemplo de **CachingIterator::getCache()****

```
<?php
$iterator = new ArrayIterator(array(1, 2, 3));
$cache    = new CachingIterator($iterator, CachingIterator::FULL_CACHE);

$cache->next();
$cache->next();
var_dump($cache->getCache());

$cache->next();
var_dump($cache->getCache());
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
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

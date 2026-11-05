# Retorna a chave do elemento atual do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.key.php

---

# ArrayIterator::key

(PHP 5, PHP 7, PHP 8)

ArrayIterator::key — Retorna a chave do elemento atual do array

### Descrição

public function **ArrayIterator::key**(): [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

Esta função retorna a chave do elemento atual do array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chave do atual elemento do [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo de **ArrayIterator::key()****

```
<?php
$array = array('chave' => 'valor');

$arrayobject = new ArrayObject($array);
$iterator = $arrayobject->getIterator();

echo $iterator->key(); // chave
?>
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

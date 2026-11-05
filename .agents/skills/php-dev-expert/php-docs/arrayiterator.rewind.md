# Retrocede o array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.rewind.php

---

# ArrayIterator::rewind

(PHP 5, PHP 7, PHP 8)

ArrayIterator::rewind — Retrocede o array

### Descrição

public function **ArrayIterator::rewind**(): [void](language.types.void.md)

Esta função retrocede o iterador para o início do array.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayIterator::rewind()****

```
<?php
$arrayobject = new ArrayObject();

$arrayobject[] = 'zero';
$arrayobject[] = 'um';
$arrayobject[] = 'dois';

$iterator = $arrayobject->getIterator();

$iterator->next();
echo $iterator->key(); // 1

$iterator->rewind(); // retrocedendo ao início
echo $iterator->key(); // 0
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

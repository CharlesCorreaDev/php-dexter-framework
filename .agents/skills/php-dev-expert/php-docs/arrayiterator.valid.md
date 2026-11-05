# Verifica se o iterador de array contém mais entradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.valid.php

---

# ArrayIterator::valid

(PHP 5, PHP 7, PHP 8)

ArrayIterator::valid — Verifica se o iterador de array contém mais entradas

### Descrição

public function **ArrayIterator::valid**(): [bool](language.types.boolean.md)

Verifica se o [array](language.types.array.md) contém mais alguma entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o iterador for válido, caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **ArrayIterator::valid()****

```
<?php
$array = array('1' => 'um');

$arrayobject = new ArrayObject($array);
$iterator = $arrayobject->getIterator();

var_dump($iterator->valid()); // bool(true)

$iterator->next(); // avança para o próximo item

// bool(false) porque existe somente um elemento no array
var_dump($iterator->valid());
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

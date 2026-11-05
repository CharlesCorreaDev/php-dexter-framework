# Avança para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.next.php

---

# ArrayIterator::next

(PHP 5, PHP 7, PHP 8)

ArrayIterator::next — Avança para o próximo elemento

### Descrição

public function **ArrayIterator::next**(): [void](language.types.void.md)

Avança o iterador para o próximo elemento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ArrayIterator::next()****

```
<?php
$arrayobject = new ArrayObject();

$arrayobject[] = 'zero';
$arrayobject[] = 'um';

$iterator = $arrayobject->getIterator();

while($iterator->valid()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";

    $iterator->next();
}
?>
```

O exemplo acima produzirá:

```
0 => zero
1 => um
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

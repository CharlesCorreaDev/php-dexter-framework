# Retorna uma cópia rasa da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-collection.copy.php

---

# Ds\Collection::copy

(PECL ds >= 1.0.0)

Ds\Collection::copy — Retorna uma cópia rasa da coleção

### Descrição

public function **Ds\Collection::copy**(): [Ds\Collection](class.ds-collection.md)

Retorna uma cópia rasa da coleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa da coleção.

### Examples

**Exemplo #1 Exemplo de **Ds\Collection::copy()****

```
<?php
$a = new \Ds\Vector([1, 2, 3]);
$b = $a->copy();

$b->push(4);

print_r($a);
print_r($b);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Ds\Vector Object
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
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

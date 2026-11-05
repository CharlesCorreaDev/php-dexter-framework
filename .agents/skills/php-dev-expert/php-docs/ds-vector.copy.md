# Retorna uma cópia rasa do vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.copy.php

---

# Ds\Vector::copy

(PECL ds >= 1.0.0)

Ds\Vector::copy — Retorna uma cópia rasa do vetor

### Descrição

public function **Ds\Vector::copy**(): [Ds\Vector](class.ds-vector.md)

Retorna uma cópia rasa do vetor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa do vetor.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::copy()****

```
<?php
$a = new \Ds\Vector([1, 2, 3]);
$b = $a->copy();

// Atualizar a cópia não afeta o original
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

# Retorna uma cópia rasa do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.copy.php

---

# Ds\Set::copy

(PECL ds >= 1.0.0)

Ds\Set::copy — Retorna uma cópia rasa do conjunto

### Descrição

public function **Ds\Set::copy**(): [Ds\Set](class.ds-set.md)

Retorna uma cópia rasa do conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa do conjunto.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::copy()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = $a->copy();

// Atualizar a cópia não afeta o original
$b->add(4);

print_r($a);
print_r($b);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Set Object
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Ds\Set Object
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

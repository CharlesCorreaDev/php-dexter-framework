# Retorna uma cópia invertida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.reversed.php

---

# Ds\Set::reversed

(PECL ds >= 1.0.0)

Ds\Set::reversed — Retorna uma cópia invertida

### Descrição

public function **Ds\Set::reversed**(): [Ds\Set](class.ds-set.md)

Retorna uma cópia invertida do conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia invertida do conjunto.
> **Nota**:
>
> A instância atual não é afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::reversed()****

```
<?php
$set = new \Ds\Set(["a", "b", "c"]);

print_r($set->reversed());
print_r($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Set Object
(
    [0] => c
    [1] => b
    [2] => a
)
Ds\Set Object
(
    [0] => a
    [1] => b
    [2] => c
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

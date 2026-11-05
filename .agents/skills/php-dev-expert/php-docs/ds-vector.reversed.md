# Retorna uma cópia invertida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.reversed.php

---

# Ds\Vector::reversed

(PECL ds >= 1.0.0)

Ds\Vector::reversed — Retorna uma cópia invertida

### Descrição

public function **Ds\Vector::reversed**(): [Ds\Vector](class.ds-vector.md)

Retorna uma cópia invertida do vetor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia invertida do vetor.
> **Nota**:
>
> A instância atual não é afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::reversed()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);

print_r($vector->reversed());
print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => c
    [1] => b
    [2] => a
)
Ds\Vector Object
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

# Inverte o vetor no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.reverse.php

---

# Ds\Vector::reverse

(PECL ds >= 1.0.0)

Ds\Vector::reverse — 
Inverte o vetor no local

### Descrição

public function **Ds\Vector::reverse**(): [void](language.types.void.md)

Inverte o vetor no local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplod de **Ds\Vector::reverse()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c"]);
$vector->reverse();

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

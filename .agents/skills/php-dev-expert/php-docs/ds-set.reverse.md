# Inverte o conjunto no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.reverse.php

---

# Ds\Set::reverse

(PECL ds >= 1.0.0)

Ds\Set::reverse — 
Inverte o conjunto no local

### Descrição

public function **Ds\Set::reverse**(): [void](language.types.void.md)

Inverte o conjunto no local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::reverse()****

```
<?php
$set = new \Ds\Set(["a", "b", "c"]);
$set->reverse();

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

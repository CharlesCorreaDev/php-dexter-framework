# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.clear.php

---

# Ds\Set::clear

(PECL ds >= 1.0.0)

Ds\Set::clear — Remove todos os valores

### Descrição

public function **Ds\Set::clear**(): [void](language.types.void.md)

Remove todos os valores do conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::clear()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);
print_r($set);

$set->clear();
print_r($set);
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

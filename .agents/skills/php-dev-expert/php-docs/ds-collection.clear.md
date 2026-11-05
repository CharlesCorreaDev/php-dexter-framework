# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-collection.clear.php

---

# Ds\Collection::clear

(PECL ds >= 1.0.0)

Ds\Collection::clear — Remove todos os valores

### Descrição

public function **Ds\Collection::clear**(): [void](language.types.void.md)

Remove todos os valores da coleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Collection::clear()****

```
<?php
$collection = new \Ds\Vector([1, 2, 3]);
print_r($collection);

$collection->clear();
print_r($collection);
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

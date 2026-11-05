# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-pair.clear.php

---

# Ds\Pair::clear

(No version information available, might only be in Git)

Ds\Pair::clear — Remove todos os valores

### Descrição

public function **Ds\Pair::clear**(): [void](language.types.void.md)

Remove todos os valores do par.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Pair::clear()****

```
<?php
$pair = new \Ds\Pair("a", 1);
print_r($pair);

$pair->clear();
print_r($pair);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Pair Object
(
    [key] => a
    [value] => 1
)
Ds\Pair Object
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

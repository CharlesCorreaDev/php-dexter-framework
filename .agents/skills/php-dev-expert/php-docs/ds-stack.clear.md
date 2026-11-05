# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.clear.php

---

# Ds\Stack::clear

(PECL ds >= 1.0.0)

Ds\Stack::clear — Remove todos os valores

### Descrição

public function **Ds\Stack::clear**(): [void](language.types.void.md)

Remove todos os valores da pilha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::clear()****

```
<?php
$stack = new \Ds\Stack([1, 2, 3]);
print_r($stack);

$stack->clear();
print_r($stack);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Stack Object
(
    [0] => 3
    [1] => 2
    [2] => 1
)
Ds\Stack Object
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

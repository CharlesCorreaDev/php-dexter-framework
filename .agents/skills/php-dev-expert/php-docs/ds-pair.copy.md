# Retorna uma cópia rasa do par

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-pair.copy.php

---

# Ds\Pair::copy

(No version information available, might only be in Git)

Ds\Pair::copy — Retorna uma cópia rasa do par

### Descrição

public function **Ds\Pair::copy**(): [Ds\Pair](class.ds-pair.md)

Retorna uma cópia rasa do par.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa do par.

### Examples

**Exemplo #1 Exemplo de **Ds\Pair::copy()****

```
<?php
$a = new \Ds\Pair("a", 1);
$b = $a->copy();

$a->key = "x";

print_r($a);
print_r($b);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Pair Object
(
    [key] => x
    [value] => 1
)
Ds\Pair Object
(
    [key] => a
    [value] => 1
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

# Cria uma nova instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.construct.php

---

# Ds\Stack::\_\_construct

(PECL ds >= 1.0.0)

Ds\Stack::\_\_construct — Cria uma nova instância

### Descrição

public function **Ds\Stack::\_\_construct**([mixed](language.types.mixed.md) `$values` = ?)

Cria uma nova instância, utilizando um objeto [traversable](class.traversable.md)
ou um [array](language.types.array.md) para os `values` iniciais.

### Parâmetros

`values`
:   Um objeto traversable ou um [array](language.types.array.md) para usar como valores iniciais.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::\_\_construct()****

```
<?php
$stack = new \Ds\Stack();
print_r($stack);

$stack = new \Ds\Stack([1, 2, 3]);
print_r($stack);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Stack Object
(
)
Ds\Stack Object
(
    [0] => 3
    [1] => 2
    [2] => 1
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

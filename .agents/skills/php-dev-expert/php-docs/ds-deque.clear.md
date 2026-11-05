# Remove todos os valores do deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.clear.php

---

# Ds\Deque::clear

(PECL ds >= 1.0.0)

Ds\Deque::clear — Remove todos os valores do deque

### Descrição

public function **Ds\Deque::clear**(): [void](language.types.void.md)

Remove todos os valores do deque.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::clear()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);
print_r($deque);

$deque->clear();
print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Ds\Deque Object
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

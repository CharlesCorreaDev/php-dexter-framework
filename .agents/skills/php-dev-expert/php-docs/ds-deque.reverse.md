# Inverte a deque no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.reverse.php

---

# Ds\Deque::reverse

(PECL ds >= 1.0.0)

Ds\Deque::reverse — 
Inverte a deque no local

### Descrição

public function **Ds\Deque::reverse**(): [void](language.types.void.md)

Inverte a deque no local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::reverse()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);
$deque->reverse();

print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
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

# Retorna uma cópia invertida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.reversed.php

---

# Ds\Deque::reversed

(PECL ds >= 1.0.0)

Ds\Deque::reversed — Retorna uma cópia invertida

### Descrição

public function **Ds\Deque::reversed**(): [Ds\Deque](class.ds-deque.md)

Retorna uma cópia invertida da deque.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia invertida da deque.
> **Nota**:
>
> A instância atual não é afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::reversed()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c"]);

print_r($deque->reversed());
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
Ds\Deque Object
(
    [0] => a
    [1] => b
    [2] => c
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

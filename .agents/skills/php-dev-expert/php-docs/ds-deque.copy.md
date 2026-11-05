# Retorna uma cópia rasa da deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.copy.php

---

# Ds\Deque::copy

(PECL ds >= 1.0.0)

Ds\Deque::copy — Retorna uma cópia rasa da deque

### Descrição

public function **Ds\Deque::copy**(): [Ds\Deque](class.ds-deque.md)

Retorna uma cópia rasa da deque.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia rasa da deque.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::copy()****

```
<?php
$a = new \Ds\Deque([1, 2, 3]);
$b = $a->copy();

$b->push(4);

print_r($a);
print_r($b);
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
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
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

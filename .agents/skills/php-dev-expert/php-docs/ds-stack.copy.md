# Retorna uma cópia rasa da pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.copy.php

---

# Ds\Stack::copy

(PECL ds >= 1.0.0)

Ds\Stack::copy — Retorna uma cópia rasa da pilha

### Descrição

public function **Ds\Stack::copy**(): [Ds\Stack](class.ds-stack.md)

Retorna uma cópia rasa da pilha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa da pilha.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::copy()****

```
<?php
$a = new \Ds\Stack([1, 2, 3]);
$b = $a->copy();

// Atualizar a cópia não afeta o original
$b->push(4);

print_r($a);
print_r($b);
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
    [0] => 4
    [1] => 3
    [2] => 2
    [3] => 1
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

# Retorna o valor no topo da pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.peek.php

---

# Ds\Stack::peek

(PECL ds >= 1.0.0)

Ds\Stack::peek — Retorna o valor no topo da pilha

### Descrição

public function **Ds\Stack::peek**(): [mixed](language.types.mixed.md)

Retorna o valor no topo da pilha mas não o remove.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor no topo da pilha.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::peek()****

```
<?php
$stack = new \Ds\Stack();

$stack->push("a");
$stack->push("b");
$stack->push("c");

var_dump($stack->peek());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "c"
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

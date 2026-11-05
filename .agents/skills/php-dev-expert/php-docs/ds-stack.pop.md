# Remove e retorna o valor no topo da pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.pop.php

---

# Ds\Stack::pop

(PECL ds >= 1.0.0)

Ds\Stack::pop — Remove e retorna o valor no topo da pilha

### Descrição

public function **Ds\Stack::pop**(): [mixed](language.types.mixed.md)

Remove e retorna o valor no topo da pilha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor removido que estava no topo da pilha.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::pop()****

```
<?php
$stack = new \Ds\Stack();

$stack->push("a");
$stack->push("b");
$stack->push("c");

var_dump($stack->pop());
var_dump($stack->pop());
var_dump($stack->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "c"
string(1) "b"
string(1) "a"
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

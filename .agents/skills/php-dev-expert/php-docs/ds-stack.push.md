# Empurra valores para a pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.push.php

---

# Ds\Stack::push

(PECL ds >= 1.0.0)

Ds\Stack::push — Empurra valores para a pilha

### Descrição

public function **Ds\Stack::push**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Empurra os `values` para a pilha.

### Parâmetros

`values`
:   Os valores a serem empurrados para a pilha.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::push()****

```
<?php
$stack = new \Ds\Stack();

$stack->push("a");
$stack->push("b");
$stack->push("c", "d");
$stack->push(...["e", "f"]);

print_r($stack);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Stack Object
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
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

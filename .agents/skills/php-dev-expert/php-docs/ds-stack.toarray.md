# Converte a pilha para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.toarray.php

---

# Ds\Stack::toArray

(PECL ds >= 1.0.0)

Ds\Stack::toArray — 
Converte a pilha para um [array](language.types.array.md)

### Descrição

public function **Ds\Stack::toArray**(): [array](language.types.array.md)

Converte a pilha para um [array](language.types.array.md).

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que na pilha.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::toArray()****

```
<?php
$stack = new \Ds\Stack([1, 2, 3]);

var_dump($stack->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  int(3)
  [1]=>
  int(2)
  [2]=>
  int(1)
}
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

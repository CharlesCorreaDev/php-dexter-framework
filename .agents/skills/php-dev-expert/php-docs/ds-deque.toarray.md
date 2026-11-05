# Converte a deque para um array.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.toarray.php

---

# Ds\Deque::toArray

(PECL ds >= 1.0.0)

Ds\Deque::toArray — 
Converte a deque para um [array](language.types.array.md).

### Descrição

public function **Ds\Deque::toArray**(): [array](language.types.array.md)

Converte a deque para um [array](language.types.array.md).

> **Nota**:
>
> A conversão para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que a deque.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::toArray()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

var_dump($deque->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
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

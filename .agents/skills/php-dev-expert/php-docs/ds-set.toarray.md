# Converte o conjunto para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.toarray.php

---

# Ds\Set::toArray

(PECL ds >= 1.0.0)

Ds\Set::toArray — 
Converte o conjunto para um [array](language.types.array.md)

### Descrição

public function **Ds\Set::toArray**(): [array](language.types.array.md)

Converte o conjunto para um [array](language.types.array.md).

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que o conjunto.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::toArray()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);

var_dump($set->toArray());
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

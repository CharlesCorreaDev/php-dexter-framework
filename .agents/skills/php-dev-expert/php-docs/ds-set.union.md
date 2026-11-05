# Cria um novo conjunto usando valores da instância atual e de outro conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.union.php

---

# Ds\Set::union

(PECL ds >= 1.0.0)

Ds\Set::union — Cria um novo conjunto usando valores da instância atual e de outro conjunto

### Descrição

public function **Ds\Set::union**([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

Cria um novo conjunto que contém os valores da instância atual, bem como os
valores de outro conjunto `set`.

`A ∪ B = {x: x ∈ A ∨ x ∈ B}`

### Parâmetros

`set`
:   O outro conjunto, para combinar com a instância atual.

### Valor Retornado

Um novo conjunto contendo todos os valores da instância atual, bem como outro conjunto `set`.

### Veja também

- [» União](https://en.wikipedia.org/wiki/Union_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Set::union()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = new \Ds\Set([3, 4, 5]);

var_dump($a->union($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
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

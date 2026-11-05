# Retorna o resultado da adição de todos os valores dados ao conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.merge.php

---

# Ds\Set::merge

(PECL ds >= 1.0.3)

Ds\Set::merge — Retorna o resultado da adição de todos os valores dados ao conjunto

### Descrição

public function **Ds\Set::merge**([mixed](language.types.mixed.md) `$values`): [Ds\Set](class.ds-set.md)

Retorna o resultado da adição de todos os valores dados ao conjunto.

### Parâmetros

`values`
:   Um objeto [traversable](class.traversable.md) ou um [array](language.types.array.md).

### Valor Retornado

O resultado da adição de todos os valores dados ao conjunto,
efetivamente o mesmo que adicionar os valores a uma cópia e, em seguida, retornar essa cópia.

> **Nota**:
>
> A instância atual não será afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::merge()****

```
<?php
$set = new \Ds\Set([1, 2, 3]);

var_dump($set->merge([3, 4, 5]));
var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#2 (6) {
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
object(Ds\Set)#1 (3) {
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

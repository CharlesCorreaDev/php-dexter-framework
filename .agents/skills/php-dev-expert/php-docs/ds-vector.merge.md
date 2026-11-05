# Retorna o resultado da adição de todos os valores fornecidos ao vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.merge.php

---

# Ds\Vector::merge

(PECL ds >= 1.0.0)

Ds\Vector::merge — Retorna o resultado da adição de todos os valores fornecidos ao vetor

### Descrição

public function **Ds\Vector::merge**([mixed](language.types.mixed.md) `$values`): [Ds\Vector](class.ds-vector.md)

Retorna o resultado da adição de todos os valores fornecidos ao vetor.

### Parâmetros

`values`
:   Um objeto [traversable](class.traversable.md) ou um [array](language.types.array.md).

### Valor Retornado

O resultado da adição de todos os valores fornecidos ao vetor,
efetivamente o mesmo que adicionar os valores a uma cópia e, em seguida, retornar essa cópia.

> **Nota**:
>
> A instância atual não será afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::merge()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);

var_dump($vector->merge([4, 5, 6]));
var_dump($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Vector)#2 (6) {
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
  [5]=>
  int(6)
}
object(Ds\Vector)#1 (3) {
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

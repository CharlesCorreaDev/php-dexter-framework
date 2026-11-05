# Retorna o resultado de adicionar todos os valores dados à deque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.merge.php

---

# Ds\Deque::merge

(PECL ds >= 1.0.0)

Ds\Deque::merge — Retorna o resultado de adicionar todos os valores dados à deque

### Descrição

public function **Ds\Deque::merge**([mixed](language.types.mixed.md) `$values`): [Ds\Deque](class.ds-deque.md)

Retorna o resultado de adicionar todos os valores dados à deque.

### Parâmetros

`values`
:   Um objeto [traversable](class.traversable.md) ou um [array](language.types.array.md).

### Valor Retornado

O resultado de adicionar todos os valores dados à deque,
efetivamente o mesmo que adicionar os valores a uma cópia e então retornar essa cópia.

> **Nota**:
>
> A instância atual não será afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::merge()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

var_dump($deque->merge([4, 5, 6]));
var_dump($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Deque)#2 (6) {
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
object(Ds\Deque)#1 (3) {
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

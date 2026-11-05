# Cria uma nova instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.construct.php

---

# Ds\Deque::\_\_construct

(PECL ds >= 1.0.0)

Ds\Deque::\_\_construct — Cria uma nova instância

### Descrição

public function **Ds\Deque::\_\_construct**([mixed](language.types.mixed.md) `$values` = ?)

Cria uma nova instância, utilizando um objeto [traversable](class.traversable.md)
ou um [array](language.types.array.md) para os `values` iniciais.

### Parâmetros

`values`
:   Um objeto traversable ou um [array](language.types.array.md) para utilizar como valores iniciais.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::\_\_construct()****

```
<?php
$deque = new \Ds\Deque();
var_dump($deque);

$deque = new \Ds\Deque([1, 2, 3]);
var_dump($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Deque)#2 (0) {
}
object(Ds\Deque)#2 (3) {
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

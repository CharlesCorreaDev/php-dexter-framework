# Cria uma nova instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.construct.php

---

# Ds\Set::\_\_construct

(PECL ds >= 1.0.0)

Ds\Set::\_\_construct — Cria uma nova instância

### Descrição

public function **Ds\Set::\_\_construct**([mixed](language.types.mixed.md) `$values` = [])

Cria uma nova instância, usando um objeto [traversable](class.traversable.md)
ou um [array](language.types.array.md) para os `values` iniciais.

### Parâmetros

`values`
:   Um objeto traversable ou um [array](language.types.array.md) para usar como os valores iniciais.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::\_\_construct()****

```
<?php
$set = new \Ds\Set();
var_dump($set);

$set = new \Ds\Set([1, 2, 3]);
var_dump($set);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#1 (0) {
}
object(Ds\Set)#2 (3) {
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

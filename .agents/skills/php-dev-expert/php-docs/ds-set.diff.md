# Cria um novo conjunto usando valores que não estão em outro conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.diff.php

---

# Ds\Set::diff

(PECL ds >= 1.0.0)

Ds\Set::diff — Cria um novo conjunto usando valores que não estão em outro conjunto

### Descrição

public function **Ds\Set::diff**([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

Cria um novo conjunto usando valores que não estão em outro conjunto.

`A \ B = {x ∈ A | x ∉ B}`

### Parâmetros

`set`
:   Conjunto contendo os valores a serem excluídos.

### Valor Retornado

Um novo conjunto contendo todos os valores que não estavam no outro `set`.

### Veja também

- [» Complemento](https://en.wikipedia.org/wiki/Complement_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Set::diff()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = new \Ds\Set([3, 4, 5]);

var_dump($a->diff($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
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

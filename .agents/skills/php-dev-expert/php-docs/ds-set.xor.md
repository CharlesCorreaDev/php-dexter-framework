# Cria um novo conjunto usando valores na instância atual ou em outro conjunto, mas não em ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.xor.php

---

# Ds\Set::xor

(PECL ds >= 1.0.0)

Ds\Set::xor — Cria um novo conjunto usando valores na instância atual ou em outro conjunto, mas não em ambos

### Descrição

public function **Ds\Set::xor**([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

Cria um novo conjunto que contém valores na instância atual, bem como em outro conjunto `set`,
mas não em ambos.

`A ⊖ B = {x : x ∈ (A \ B) ∪ (B \ A)}`

### Parâmetros

`set`
:   O outro conjunto.

### Valor Retornado

Um novo conjunto que contém valores na instância atual, bem como em outro conjunto `set`,
mas não em ambos.

### Veja também

- [» Diferença Simétrica](https://en.wikipedia.org/wiki/Symmetric_difference) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Set::xor()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = new \Ds\Set([3, 4, 5]);

var_dump($a->xor($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (4) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(4)
  [3]=>
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

# Cria um novo conjunto interseccionando valores com outro conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.intersect.php

---

# Ds\Set::intersect

(PECL ds >= 1.0.0)

Ds\Set::intersect — Cria um novo conjunto interseccionando valores com outro conjunto

### Descrição

public function **Ds\Set::intersect**([Ds\Set](class.ds-set.md) `$set`): [Ds\Set](class.ds-set.md)

Cria um novo conjunto usando valores comuns tanto à instância atual quanto a outro conjunto `set`.
Em outras palavras, retorna uma cópia da instância atual com todos os valores removidos que
não estão no outro conjunto `set`.

`A ∩ B = {x : x ∈ A ∧ x ∈ B}`

### Parâmetros

`set`
:   O outro conjunto.

### Valor Retornado

A interseção da instância atual e de outro conjunto `set`.

### Veja também

- [» Interseção](https://en.wikipedia.org/wiki/Intersection_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Set::intersect()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = new \Ds\Set([3, 4, 5]);

var_dump($a->intersect($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#3 (1) {
  [0]=>
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

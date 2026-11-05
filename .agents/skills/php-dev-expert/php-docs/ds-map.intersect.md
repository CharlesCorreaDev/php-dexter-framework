# Cria um novo mapa intersectando chaves com outro mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.intersect.php

---

# Ds\Map::intersect

(PECL ds >= 1.0.0)

Ds\Map::intersect — Cria um novo mapa intersectando chaves com outro mapa

### Descrição

public function **Ds\Map::intersect**([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

Cria um novo mapa contendo os pares da instância atual cujas chaves
também estão presentes no `map` fornecido.
Em outras palavras, retorna uma cópia da instância atual com todas as chaves removidas que
não estão no outro `map`.

`A ∩ B = {x : x ∈ A ∧ x ∈ B}`

> **Nota**:
>
> Os valores da instância atual serão mantidos.

### Parâmetros

`map`
:   O outro mapa, contendo as chaves para intersectar.

### Valor Retornado

A interseção de chaves da instância atual e outro `map`.

### Veja também

- [» Interseção](https://en.wikipedia.org/wiki/Intersection_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Map::intersect()****

```
<?php
$a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$b = new \Ds\Map(["b" => 4, "c" => 5, "d" => 6]);

var_dump($a->intersect($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#3 (2) {
  [0]=>
  object(Ds\Pair)#4 (2) {
    ["key"]=>
    string(1) "b"
    ["value"]=>
    int(2)
  }
  [1]=>
  object(Ds\Pair)#5 (2) {
    ["key"]=>
    string(1) "c"
    ["value"]=>
    int(3)
  }
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

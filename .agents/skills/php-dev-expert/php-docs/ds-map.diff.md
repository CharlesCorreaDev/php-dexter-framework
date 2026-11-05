# Cria um novo mapa usando chaves que não estão em outro mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.diff.php

---

# Ds\Map::diff

(PECL ds >= 1.0.0)

Ds\Map::diff — Cria um novo mapa usando chaves que não estão em outro mapa

### Descrição

public function **Ds\Map::diff**([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

Retorna o resultado da remoção de todas as chaves da instância atual que estão
presentes em um `map` dado.

`A \ B = {x ∈ A | x ∉ B}`

### Parâmetros

`map`
:   O mapa contendo as chaves a serem excluídas no mapa resultante.

### Valor Retornado

O resultado da remoção de todas as chaves da instância atual que estão
presentes em um `map` dado.

### Veja também

- [» Complemento](https://en.wikipedia.org/wiki/Complement_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Map::diff()****

```
<?php
$a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$b = new \Ds\Map(["b" => 4, "c" => 5, "d" => 6]);

var_dump($a->diff($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#3 (1) {
  [0]=>
  object(Ds\Pair)#4 (2) {
    ["key"]=>
    string(1) "a"
    ["value"]=>
    int(1)
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

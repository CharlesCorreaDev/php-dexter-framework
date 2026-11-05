# Retorna um subconjunto do mapa definido por um índice inicial e comprimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.slice.php

---

# Ds\Map::slice

(PECL ds >= 1.0.0)

Ds\Map::slice — 
Retorna um subconjunto do mapa definido por um índice inicial e comprimento

### Descrição

public function **Ds\Map::slice**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Map](class.ds-map.md)

Retorna um subconjunto do mapa definido por um `index` inicial e `length`.

### Parâmetros

`index`
:   O índice no qual o intervalo começa.

    Se positivo, o intervalo começará nesse índice no mapa.
    Se negativo, o intervalo começará nessa distância do final.

`length`
:   Se um comprimento for fornecido e for positivo, o mapa resultante
    terá até esse número de pares nele.
    Se um comprimento for fornecido e for negativo, o intervalo
    irá parar esse número de pares a partir do final.
    Se o comprimento resultar em um overflow, apenas
    pares até o final do mapa serão incluídos.
    Se um comprimento não for fornecido, o mapa resultante
    conterá todos os pares entre o índice e o
    final do mapa.

### Valor Retornado

Um subconjunto do mapa definido por um índice inicial e comprimento.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::slice()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5]);

// Cortar a partir de 2
print_r($map->slice(2)->toArray());

// Cortar a partir de 1, por um comprimento de 3
print_r($map->slice(1, 3)->toArray());

// Cortar a partir de 1
print_r($map->slice(1)->toArray());

// Cortar a partir de 2 do final
print_r($map->slice(-2)->toArray());

// Cortar de 1 até 1 do final
print_r($map->slice(1, -1)->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [c] => 3
    [d] => 4
    [e] => 5
)
Array
(
    [b] => 2
    [c] => 3
    [d] => 4
)
Array
(
    [b] => 2
    [c] => 3
    [d] => 4
    [e] => 5
)
Array
(
    [d] => 4
    [e] => 5
)
Array
(
    [b] => 2
    [c] => 3
    [d] => 4
)
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

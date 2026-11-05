# Retorna a soma de todos os valores no mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.sum.php

---

# Ds\Map::sum

(No version information available, might only be in Git)

Ds\Map::sum — Retorna a soma de todos os valores no mapa

### Descrição

public function **Ds\Map::sum**(): [int](language.types.integer.md)|[float](language.types.float.md)

Retorna a soma de todos os valores no mapa.

> **Nota**:
>
> Arrays e objetos são considerados iguais a zero ao calcular a soma.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de todos os valores no mapa como um [float](language.types.float.md) ou [int](language.types.integer.md)
dependendo dos valores no mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::sum()** com inteiros**

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(6)
```

**Exemplo #2 Exemplo de **Ds\Map::sum()** com float**

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2.5, "c" => 3]);
var_dump($map->sum());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
float(6.5)
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

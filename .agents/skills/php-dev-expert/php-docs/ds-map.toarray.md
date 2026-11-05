# Converte o mapa em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.toarray.php

---

# Ds\Map::toArray

(PECL ds >= 1.0.0)

Ds\Map::toArray — 
Converte o mapa em um [array](language.types.array.md)

### Descrição

public function **Ds\Map::toArray**(): [array](language.types.array.md)

Converte o mapa em um [array](language.types.array.md).

**Cuidado**

Mapas com chaves não escalares não podem ser convertidos para um [array](language.types.array.md).

**Cuidado**

Um [array](language.types.array.md) tratará todas as chaves numéricas como inteiros,
por exemplo, `"1"` e `1` como chaves no mapa
resultarão apenas em `1` sendo incluído no array.

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem do mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::toArray()****

```
<?php
$map = new \Ds\Map([
    "a" => 1,
    "b" => 2,
    "c" => 3,
]);

var_dump($map->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["a"]=>
  int(1)
  ["b"]=>
  int(2)
  ["c"]=>
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

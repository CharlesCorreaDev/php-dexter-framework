# Retorna o resultado da aplicação de um callback a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.map.php

---

# Ds\Map::map

(PECL ds >= 1.0.0)

Ds\Map::map — Retorna o resultado da aplicação de um callback a cada valor

### Descrição

public function **Ds\Map::map**([callable](language.types.callable.md) `$callback`): [Ds\Map](class.ds-map.md)

Retorna o resultado da aplicação de uma função `callback` a
cada valor do mapa.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor no mapa.

    O callable deve retornar o valor para o qual a chave será mapeada no
    mapa resultante.

### Valor Retornado

O resultado da aplicação de um `callback` a cada valor
no mapa.

> **Nota**:
>
> As chaves e valores da instância atual não serão afetados.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::map()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

print_r($map->map(function($key, $value) { return $value * 2; }));
print_r($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
(
    [0] => Ds\Pair Object
        (
            [key] => a
            [value] => 2
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 4
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 6
        )

)
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => a
            [value] => 1
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 3
        )

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

# Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.apply.php

---

# Ds\Map::apply

(PECL ds >= 1.0.0)

Ds\Map::apply — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor

### Descrição

public function **Ds\Map::apply**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Atualiza todos os valores aplicando uma função de retorno de chamada `callback`
a cada valor no mapa.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor no mapa.

    A função de retorno de chamada deve retornar pelo que o valor deve ser substituído.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::apply()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$map->apply(function($key, $value) { return $value * 2; });

print_r($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
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

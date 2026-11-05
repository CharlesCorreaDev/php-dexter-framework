# Associa todos os pares chave-valor de um objeto traversable ou array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.putall.php

---

# Ds\Map::putAll

(PECL ds >= 1.0.2)

Ds\Map::putAll — Associa todos os pares chave-valor de um objeto traversable ou array

### Descrição

public function **Ds\Map::putAll**([mixed](language.types.mixed.md) `$pairs`): [void](language.types.void.md)

Associa todos os `pairs` chave-valor de um objeto [traversable](class.traversable.md) ou [array](language.types.array.md).

> **Nota**:
>
> Chaves do tipo [object](language.types.object.md) são suportadas.
> Se um objeto implementar [Ds\Hashable](class.ds-hashable.md),
> a igualdade será determinada pela função `equals` do objeto.
> Se um objeto não implementar [Ds\Hashable](class.ds-hashable.md),
> os objetos devem ser referências à mesma instância para serem considerados iguais.

### Parâmetros

`pairs`
:   Objeto [traversable](class.traversable.md) ou [array](language.types.array.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::putAll()****

```
<?php
$map = new \Ds\Map();

$map->putAll([
    "a" => 1,
    "b" => 2,
    "c" => 3,
]);

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

# Retorna o resultado da adição de todas as associações fornecidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.merge.php

---

# Ds\Map::merge

(PECL ds >= 1.0.0)

Ds\Map::merge — Retorna o resultado da adição de todas as associações fornecidas

### Descrição

public function **Ds\Map::merge**([mixed](language.types.mixed.md) `$values`): [Ds\Map](class.ds-map.md)

Retorna o resultado da associação de todas as chaves de um objeto [traversable](class.traversable.md)
ou [array](language.types.array.md) fornecido com seus valores correspondentes, combinados com a instância atual.

> **Nota**:
>
> Os valores da instância atual serão sobrescritos pelos fornecidos quando as chaves forem iguais.

### Parâmetros

`values`
:   Um objeto [traversable](class.traversable.md) ou um [array](language.types.array.md).

### Valor Retornado

O resultado da associação de todas as chaves de um objeto [traversable](class.traversable.md)
ou [array](language.types.array.md) fornecido com seus valores correspondentes, combinados com a instância atual.

> **Nota**:
>
> A instância atual não será afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::merge()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

print_r($map->merge(["a" => 10, "e" => 50]));
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
            [value] => 10
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

    [3] => Ds\Pair Object
        (
            [key] => e
            [value] => 50
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

# Aloca memória suficiente para uma capacidade requerida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.allocate.php

---

# Ds\Map::allocate

(PECL ds >= 1.0.0)

Ds\Map::allocate — Aloca memória suficiente para uma capacidade requerida

### Descrição

public function **Ds\Map::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Aloca memória suficiente para uma capacidade requerida.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se este valor for menor ou igual à
    > capacidade atual.

    > **Nota**:
    >
    > A capacidade será sempre arredondada para cima até a potência de 2 mais próxima.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::allocate()****

```
<?php
$map = new \Ds\Map();
var_dump($map->capacity());

$map->allocate(100);
var_dump($map->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(16)
int(128)
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

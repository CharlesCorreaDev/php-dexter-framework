# Retorna o resultado da aplicação de uma função de callback a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.map.php

---

# Ds\Vector::map

(PECL ds >= 1.0.0)

Ds\Vector::map — Retorna o resultado da aplicação de uma função de callback a cada valor

### Descrição

public function **Ds\Vector::map**([callable](language.types.callable.md) `$callback`): [Ds\Vector](class.ds-vector.md)

Retorna o resultado da aplicação de uma função de `callback` a
cada valor no vetor.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor no vetor.

    O callable deve retornar qual será o novo valor no novo vetor.

### Valor Retornado

O resultado da aplicação de uma `callback` a cada valor no
vetor.

> **Nota**:
>
> Os valores da instância atual não serão afetados.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::map()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);

print_r($vector->map(function($value) { return $value * 2; }));
print_r($vector);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => 2
    [1] => 4
    [2] => 6
)
Ds\Vector Object
(
    [0] => 1
    [1] => 2
    [2] => 3
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

# Atualiza todos os valores aplicando uma função de callback a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.apply.php

---

# Ds\Vector::apply

(PECL ds >= 1.0.0)

Ds\Vector::apply — Atualiza todos os valores aplicando uma função de callback a cada valor

### Descrição

public function **Ds\Vector::apply**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Atualiza todos os valores aplicando uma função de `callback`
a cada valor no vetor.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor no vetor.

    A função de callback deve retornar o valor pelo qual o valor deve ser substituído.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::apply()****

```
<?php
$vector = new \Ds\Vector([1, 2, 3]);
$vector->apply(function($value) { return $value * 2; });

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

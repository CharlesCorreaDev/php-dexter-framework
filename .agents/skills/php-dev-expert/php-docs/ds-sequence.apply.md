# Atualiza todos os valores aplicando uma função callback a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.apply.php

---

# Ds\Sequence::apply

(PECL ds >= 1.0.0)

Ds\Sequence::apply — Atualiza todos os valores aplicando uma função callback a cada valor

### Descrição

abstract public function **Ds\Sequence::apply**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Atualiza todos os valores aplicando uma função `callback` a
cada valor na sequência.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor na sequência.

    A função callback deve retornar pelo que o valor deve ser substituído.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::apply()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);
$sequence->apply(function($value) { return $value * 2; });

print_r($sequence);
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

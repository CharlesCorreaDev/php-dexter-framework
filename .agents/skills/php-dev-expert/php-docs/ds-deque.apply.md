# Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.apply.php

---

# Ds\Deque::apply

(PECL ds >= 1.0.0)

Ds\Deque::apply — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor

### Descrição

public function **Ds\Deque::apply**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Atualiza todos os valores aplicando uma função de retorno de chamada `callback` a
cada valor no deque.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor no deque.

    A função de retorno de chamada deve retornar pelo que o valor deve ser substituído.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::apply()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);
$deque->apply(function($value) { return $value * 2; });

print_r($deque);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Deque Object
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

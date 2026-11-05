# Retorna o resultado de aplicar uma função de retorno de chamada a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.map.php

---

# Ds\Deque::map

(PECL ds >= 1.0.0)

Ds\Deque::map — Retorna o resultado de aplicar uma função de retorno de chamada a cada valor

### Descrição

public function **Ds\Deque::map**([callable](language.types.callable.md) `$callback`): [Ds\Deque](class.ds-deque.md)

Retorna o resultado de aplicar uma função de retorno de chamada `callback` a
cada valor na deque.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor na deque.

    O callable deve retornar o que será o novo valor na nova deque.

### Valor Retornado

O resultado de aplicar uma `callback` a cada valor na
deque.

> **Nota**:
>
> Os valores da instância atual não serão afetados.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::map()****

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

print_r($deque->map(function($value) { return $value * 2; }));
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
Ds\Deque Object
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

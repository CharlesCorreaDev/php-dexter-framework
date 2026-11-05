# Retorna o resultado da aplicação de um callback a cada valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.map.php

---

# Ds\Sequence::map

(PECL ds >= 1.0.0)

Ds\Sequence::map — Retorna o resultado da aplicação de um callback a cada valor

### Descrição

abstract public function **Ds\Sequence::map**([callable](language.types.callable.md) `$callback`): [Ds\Sequence](class.ds-sequence.md)

Retorna o resultado da aplicação de uma função de `callback`
a cada valor na sequência.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    Um [callable](language.types.callable.md) para aplicar a cada valor na sequência.

    O callable deve retornar qual será o novo valor na nova sequência.

### Valor Retornado

O resultado da aplicação de um `callback` a cada valor
na sequência.

> **Nota**:
>
> Os valores da instância atual não serão afetados.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::map()****

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);

print_r($sequence->map(function($value) { return $value * 2; }));
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

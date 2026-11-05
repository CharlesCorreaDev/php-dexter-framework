# Rotaciona a sequência pelo número dado de rotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.rotate.php

---

# Ds\Sequence::rotate

(PECL ds >= 1.0.0)

Ds\Sequence::rotate — Rotaciona a sequência pelo número dado de rotações

### Descrição

abstract public function **Ds\Sequence::rotate**([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

Rotaciona a sequência pelo número dado de rotações, o que é equivalente
a chamar sucessivamente `$sequence->push($sequence->shift())` se o número
de rotações for positivo, ou `$sequence->unshift($sequence->pop())` se for negativo.

### Parâmetros

`rotations`
:   O número de vezes que a sequência deve ser rotacionada.

### Valor Retornado

Nenhum valor é retornado.. A sequência da instância atual será rotacionada.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::rotate()****

```
<?php
$sequence = new \Ds\Vector(["a", "b", "c", "d"]);

$sequence->rotate(1);  // "a" é deslocado e, em seguida, adicionado.
print_r($sequence);

$sequence->rotate(2);  // "b" e "c" são ambos deslocados e, em seguida, adicionados.
print_r($sequence);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
(
    [0] => b
    [1] => c
    [2] => d
    [3] => a
)
Ds\Vector Object
(
    [0] => d
    [1] => a
    [2] => b
    [3] => c
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

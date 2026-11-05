# Rotaciona a deque por um número dado de rotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.rotate.php

---

# Ds\Deque::rotate

(PECL ds >= 1.0.0)

Ds\Deque::rotate — Rotaciona a deque por um número dado de rotações

### Descrição

public function **Ds\Deque::rotate**([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

Rotaciona a deque por um número dado de rotações, o que é equivalente
a chamar sucessivamente `$deque->push($deque->shift())` se o número
de rotações for positivo, ou `$deque->unshift($deque->pop())` se for negativo.

### Parâmetros

`rotations`
:   O número de vezes que a deque deve ser rotacionada.

### Valor Retornado

Nenhum valor é retornado.. A deque da instância atual será rotacionada.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::rotate()****

```
<?php
$deque = new \Ds\Deque(["a", "b", "c", "d"]);

$deque->rotate(1);  // "a" é deslocado e, em seguida, adicionado.
print_r($deque);

$deque->rotate(2);  // "b" e "c" são ambos deslocados e, em seguida, adicionados.
print_r($deque);
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
Ds\Deque Object
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

# Rotaciona o vetor por um número dado de rotações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.rotate.php

---

# Ds\Vector::rotate

(PECL ds >= 1.0.0)

Ds\Vector::rotate — Rotaciona o vetor por um número dado de rotações

### Descrição

public function **Ds\Vector::rotate**([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

Rotaciona o vetor por um número dado de rotações, o que é equivalente
a chamar sucessivamente `$vector->push($vector->shift())` se o número
de rotações for positivo, ou `$vector->unshift($vector->pop())` se negativo.

### Parâmetros

`rotations`
:   O número de vezes que o vetor deve ser rotacionado.

### Valor Retornado

Nenhum valor é retornado.. O vetor da instância atual será rotacionado.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::rotate()****

```
<?php
$vector = new \Ds\Vector(["a", "b", "c", "d"]);

$vector->rotate(1);  // "a" é deslocado e incluído no final.
print_r($vector);

$vector->rotate(2);  // "b" e "c" são ambos deslocados e incluídos no final.
print_r($vector);
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

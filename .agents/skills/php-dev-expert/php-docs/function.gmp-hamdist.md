# Distância de Hamming

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-hamdist.php

---

# gmp\_hamdist

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_hamdist — Distância de Hamming

### Descrição

function **gmp\_hamdist**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [int](language.types.integer.md)

Retorna a distância de Hamming entre `num1` e
`num2`. Ambos argumentos devem ser positivos.

### Parâmetros

`num1`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

    Tem que ser positivo.

`num2`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

    Tem que ser positivo.

### Valor Retornado

A distância de Hamming entre `num1` e `num2`, do tipo [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **gmp\_hamdist()****

```
<?php
$ham1 = gmp_init("1001010011", 2);
$ham2 = gmp_init("1011111100", 2);
echo gmp_hamdist($ham1, $ham2) . "\n";

/* a distância de Hamming é equivalente a : */
echo gmp_popcount(gmp_xor($ham1, $ham2)) . "\n";
?>
```

O exemplo acima produzirá:

```
6
6
```

### Veja também

- [gmp\_popcount()](function.gmp-popcount.md) - Contagem de população
- [gmp\_xor()](function.gmp-xor.md) - Operação binária XOR

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

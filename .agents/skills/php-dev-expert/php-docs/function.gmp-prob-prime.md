# Verifica se o número é "provavelmente primo"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-prob-prime.php

---

# gmp\_prob\_prime

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_prob\_prime — Verifica se o número é "provavelmente primo"

### Descrição

function **gmp\_prob\_prime**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$repetitions` = 10): [int](language.types.integer.md)

A função usa o teste probabilístico de Miller-Rabin para verificar se um número é primo.

### Parâmetros

`num`
:   O número a ser verificado como um primo.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`repetitions`
:   Valores razoáveis
    de `repetitions` variam de 5 a 10 (o padrão é
    10); um valor mais alto diminui a probabilidade de um não-primo
    passar como um "provável" primo.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Se esta função retornar 0, `num`
definitivamente não é primo. Se retornar 1,
`num` é "provavelmente" primo. Se retornar 2,
`num` com certeza é primo.

### Examples

**Exemplo #1 Exemplo de **gmp\_prob\_prime()****

```
<?php
// definitivamente não é primo
echo gmp_prob_prime("6") . "\n";

// provavelmente um primo
echo gmp_prob_prime("1111111111111111111") . "\n";

// definitamente é primo
echo gmp_prob_prime("11") . "\n";
?>
```

O exemplo acima produzirá:

```
0
1
2
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

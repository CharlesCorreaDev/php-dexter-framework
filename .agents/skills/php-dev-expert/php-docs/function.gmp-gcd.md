# Calcula o MDC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-gcd.php

---

# gmp\_gcd

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_gcd — Calcula o MDC

### Descrição

function **gmp\_gcd**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [GMP](class.gmp.md)

Calcula o máximo divisor comum de `num1` e
`num2`. O resultado é sempre positivo, mesmo que um
ou ambos os argumentos sejam negativos.

### Parâmetros

`num1`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`num2`
:   Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um número positivo GMP divisor de
`num1` e `num2`.

### Examples

**Exemplo #1 Exemplo de **gmp\_gcd()****

```
<?php
$gcd = gmp_gcd("12", "21");
echo gmp_strval($gcd) . "\n";
?>
```

O exemplo acima produzirá:

```
3
```

### Veja também

- [gmp\_lcm()](function.gmp-lcm.md) - Calcula o MMC

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

# Sinal do número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-sign.php

---

# gmp\_sign

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_sign — Sinal do número

### Descrição

function **gmp\_sign**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`): [int](language.types.integer.md)

Verifica o sinal de um número.

### Parâmetros

`num`
:   Pode ser um objeto [GMP](class.gmp.md), ou uma string
    numérica desde que seja possível convertê-la para um
    [int](language.types.integer.md).

### Valor Retornado

Retorna 1 se `num` for positivo,
-1 se `num` for negativo,
e 0 se `num` for zero.

### Examples

**Exemplo #1 Exemplo de **gmp\_sign()****

```
<?php
// positivo
echo gmp_sign("500") . "\n";

// negativo
echo gmp_sign("-500") . "\n";

// zero
echo gmp_sign("0") . "\n";
?>
```

O exemplo acima produzirá:

```
1
-1
0
```

### Veja também

- [gmp\_abs()](function.gmp-abs.md) - Valor absoluto
- [abs()](function.abs.md) - Valor absoluto

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

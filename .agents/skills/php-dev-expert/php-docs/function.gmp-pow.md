# Elevar o número a uma potência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-pow.php

---

# gmp\_pow

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_pow — Elevar o número a uma potência

### Descrição

function **gmp\_pow**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$exponent`): [GMP](class.gmp.md)

Eleva `num` à potência `exponent`.

### Parâmetros

`num`
:   O número da base.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`exponent`
:   A potência positiva à qual `num` será elevado.

### Valor Retornado

O novo número (exponenciado), como um número GMP. O caso de
`0^0` produz 1.

### Examples

**Exemplo #1 Exemplo **gmp\_pow()****

```
<?php
$pow1 = gmp_pow("2", 31);
echo gmp_strval($pow1) . "\n";
$pow2 = gmp_pow("0", 0);
echo gmp_strval($pow2) . "\n";
$pow3 = gmp_pow("2", -1); // Expoente negativo, gera um alerta
echo gmp_strval($pow3) . "\n";
?>
```

O exemplo acima produzirá:

```
2147483648
1
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

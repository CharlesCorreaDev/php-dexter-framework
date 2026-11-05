# Eleva um número a uma potência com módulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-powm.php

---

# gmp\_powm

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_powm — Eleva um número a uma potência com módulo

### Descrição

function **gmp\_powm**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$exponent`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$modulus`): [GMP](class.gmp.md)

Calcula o resto da divisão de (`num` elevado à potência
`exponent`) por `modulus`. Se
`exponent` for negativo, o resultado é indefinido.

### Parâmetros

`num`
:   O número da base.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`exponent`
:   A potência positiva à qual `num` será elevado.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

`modulus`
:   O divisor para obtenção do resto (módulo).

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

O novo número (exponenciado), como um número GMP.

### Examples

**Exemplo #1 Exemplo de **gmp\_powm()****

```
<?php
$pow1 = gmp_powm("2", "31", "2147483649");
echo gmp_strval($pow1) . "\n";
?>
```

O exemplo acima produzirá:

```
2147483648
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

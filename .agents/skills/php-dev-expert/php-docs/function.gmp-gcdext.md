# Calcula MDC e multiplicadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-gcdext.php

---

# gmp\_gcdext

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_gcdext — Calcula MDC e multiplicadores

### Descrição

function **gmp\_gcdext**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num1`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num2`): [array](language.types.array.md)

Calcula g, s, e t, de forma que `a*s + b*t = g =
gcd(a,b)`, onde gcd é o máximo divisor comum (MDC). Retorna
um array com os respectivos elementos g, s e t.

Esta função pode ser usada para resolver equações lineares de Diophantine com duas
variáveis. São equações que permitem somente soluções com inteiros e têm a forma:
`a*x + b*y = c`.
Para mais informações, acesse a página [» "Equação de
Diophantine"](https://mathworld.wolfram.com/DiophantineEquation.html) (em inglês) na MathWorld.

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

Um [array](language.types.array.md) de números GMP.

### Examples

**Exemplo #1 Resolvendo uma equação linear de Diophantine**

```
<?php
// Soluciona a equação a*s + b*t = g
// onde a = 12, b = 21, g = MDC(12, 21) = 3
$a = gmp_init(12);
$b = gmp_init(21);
$g = gmp_gcd($a, $b);
$r = gmp_gcdext($a, $b);

$check_gcd = (gmp_strval($g) == gmp_strval($r['g']));
$eq_res = gmp_add(gmp_mul($a, $r['s']), gmp_mul($b, $r['t']));
$check_res = (gmp_strval($g) == gmp_strval($eq_res));

if ($check_gcd && $check_res) {
    $fmt = "Solução: %d*%d + %d*%d = %d\n";
    printf($fmt, gmp_strval($a), gmp_strval($r['s']), gmp_strval($b),
    gmp_strval($r['t']), gmp_strval($r['g']));
} else {
    echo "Erro ao solucionar a equação\n";
}

// saída: Solução: 12*2 + 21*-1 = 3
?>
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

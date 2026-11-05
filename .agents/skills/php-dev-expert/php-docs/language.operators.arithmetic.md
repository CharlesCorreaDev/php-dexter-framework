# Operadores Aritméticos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.arithmetic.php

---

## Operadores Aritméticos

Lembra-se da aritmética básica da escola? Estes operadores funcionam
exatamente como aqueles.

**Operadores Aritméticos**

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| `+$a` | Identidade | Conversão de $a para [int](language.types.integer.md) ou [float](language.types.float.md) conforme apropriado. |
| `-$a` | Negativação | Oposto de $a. |
| `$a + $b` | Adição | Soma de $a e $b. |
| `$a - $b` | Subtração | Diferença entre $a e $b. |
| `$a * $b` | Multiplicação | Produto de $a e $b. |
| `$a / $b` | Divisão | Quociente de $a e $b. |
| `$a % $b` | Resto | Resto de $a dividido por $b. |
| `$a ** $b` | Exponenciação | Resultado de $a elevado à potência de $b. |

O operador de divisão `/` retorna um valor [float](language.types.float.md),
a não ser que os dois operandos sejam [int](language.types.integer.md) (ou
[strings numéricas](language.types.numeric-strings.md)
que são convertidas para [int](language.types.integer.md)) e o numerador seja um múltiplo
do divisor, neste caso será retornado um valor inteiro.
Para divisão de inteiros, consulte [intdiv()](function.intdiv.md).

Operandos da operação de resto de divisão são convertidos para [int](language.types.integer.md)
antes do processamento. Para restos de divisão de números em ponto flutuante, veja
[fmod()](function.fmod.md).

O resultado do operador de resto `%` tem o mesmo sinal
do dividendo — ou seja, o resultado de `$a % $b`
terá o mesmo sinal de $a. Exemplos:

**Exemplo #1 O Operador de Resto**

```
<?php
var_dump(5 % 3);
var_dump(5 % -3);
var_dump(-5 % 3);
var_dump(-5 % -3);
?>
```

O exemplo acima produzirá:

```
int(2)
int(2)
int(-2)
int(-2)
```

### Veja também

- [Funções matemáticas](ref.math.md)

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

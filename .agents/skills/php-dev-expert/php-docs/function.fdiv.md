# Divide dois números de acordo com a IEEE 754

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdiv.php

---

# fdiv

(PHP 8)

fdiv — Divide dois números de acordo com a IEEE 754

### Descrição

function **fdiv**([float](language.types.float.md) `$num1`, [float](language.types.float.md) `$num2`): [float](language.types.float.md)

Retorna o resultado em ponto flutuante da divisão de
`num1` por `num2`.
Se `num2` for zero, um dos valores **`INF`**,
-**`INF`** ou **`NAN`** será retornado.

Note que em comparações, **`NAN`** nunca será igual (`==`) ou idêntica (`===`)
a nenhum valor, incluindo a si mesma.

### Parâmetros

`num1`
:   O dividendo (numerador)

`num2`
:   O divisor

### Valor Retornado

O resultado em ponto flutuante de
`num1`/`num2`

### Examples

**Exemplo #1 Usando **fdiv()****

```
<?php
var_dump(fdiv(5.7, 1.3)); // float(4.384615384615385)
var_dump(fdiv(4, 2)); // float(2)
var_dump(fdiv(1.0, 0.0)); // float(INF)
var_dump(fdiv(-1.0, 0.0)); // float(-INF)
var_dump(fdiv(0.0, 0.0)); // float(NAN)
?>
```

### Veja também

- Operador de divisão
  [`/`](language.operators.arithmetic.md)
- [intdiv()](function.intdiv.md) - Divisão de inteiros - Divisão de inteiros
- [fmod()](function.fmod.md) - Retorna o resto (módulo) em ponto flutuante da divisão
  dos argumentos
- [fpow()](function.fpow.md) - Eleva um número à potência de outro, de acordo com a IEEE 754

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

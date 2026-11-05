# Divisão de inteiros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intdiv.php

---

# intdiv

(PHP 7, PHP 8)

intdiv — Divisão de inteiros

### Descrição

function **intdiv**([int](language.types.integer.md) `$num1`, [int](language.types.integer.md) `$num2`): [int](language.types.integer.md)

Retorna o quociente inteiro da divisão de `num1` por `num2`.

### Parâmetros

`num1`
:   Número a ser dividido.

`num2`
:   Número que divide o `num1`.

### Valor Retornado

O quociente inteiro da divisão de `num1` por `num2`.

### Erros/Exceções

Se `num2` for `0`, uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md)
é lançada. Se `num1` for **`PHP_INT_MIN`**
e `num2` for `-1`, então uma exceção
[ArithmeticError](class.arithmeticerror.md) é lançada.

### Examples

**Exemplo #1 Exemplo de **intdiv()****

```
<?php
var_dump(intdiv(3, 2));
var_dump(intdiv(-3, 2));
var_dump(intdiv(3, -2));
var_dump(intdiv(-3, -2));
var_dump(intdiv(PHP_INT_MAX, PHP_INT_MAX));
var_dump(intdiv(PHP_INT_MIN, PHP_INT_MIN));
?>
```

O exemplo acima produzirá:

```
int(1)
int(-1)
int(-1)
int(1)
int(1)
int(1)
```

**Exemplo #2 Exemplo de **intdiv()** com divisor inválido**

```
<?php
try {
    intdiv(PHP_INT_MIN, -1);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}

try {
    intdiv(1, 0);
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
ArithmeticError: Division of PHP_INT_MIN by -1 is not an integer
DivisionByZeroError: Division by zero
```

### Veja também

- [`/`](language.operators.arithmetic.md) - Divisão de ponto flutuante
- [`%`](language.operators.arithmetic.md) - Resto de divisão de inteiros
- [fmod()](function.fmod.md) - Retorna o resto (módulo) em ponto flutuante da divisão
  dos argumentos - Resto de divisão em ponto flutuante

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

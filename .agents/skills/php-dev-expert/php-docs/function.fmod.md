# Retorna o resto (módulo) em ponto flutuante da divisão
  dos argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fmod.php

---

# fmod

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

fmod — Retorna o resto (módulo) em ponto flutuante da divisão
dos argumentos

### Descrição

function **fmod**([float](language.types.float.md) `$num1`, [float](language.types.float.md) `$num2`): [float](language.types.float.md)

Retorna o resto em ponto flutuante da divisão do dividendo
(`num1`) pelo divisor (`num2`).
O resto (r) é definido como: num1 = i \* num2 + r, para
algum inteiro i. Se o `num2` for
diferente de zero, r terá o mesmo sinal de
`num1` e uma magnitude menor que a magnitude de
`num2`.

### Parâmetros

`num1`
:   O dividendo

`num2`
:   O divisor

### Valor Retornado

O resto em ponto flutuante de
`num1`/`num2`.
**`NAN`** ([float](language.types.float.md)) se o segundo argumento for 0.

### Examples

**Exemplo #1 Usando **fmod()****

```
<?php
$x = 5.7;
$y = 1.3;
$r = fmod($x, $y);
// $r é igual a 0.5, porque 4 * 1.3 + 0.5 = 5.7

var_dump($x, $y, $r);
?>
```

### Veja também

- [`/`](language.operators.arithmetic.md) - Divisão de ponto flutuante
- [`%`](language.operators.arithmetic.md) - Módulo de inteiros
- [intdiv()](function.intdiv.md) - Divisão de inteiros - Divisão de inteiros

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

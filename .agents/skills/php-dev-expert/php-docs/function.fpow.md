# Eleva um número à potência de outro, de acordo com a IEEE 754

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fpow.php

---

# fpow

(PHP 8 >= 8.4.0)

fpow — Eleva um número à potência de outro, de acordo com a IEEE 754

### Descrição

function **fpow**([float](language.types.float.md) `$num`, [float](language.types.float.md) `$exponent`): [float](language.types.float.md)

Retorna o resultado em ponto flutuante da elevação de
`num` à potência de `exponent`.
Se `num` for zero e `exponent`
for menor que zero, retorna **`INF`**.

### Parâmetros

`num`
:   A base a ser usada.

`exponent`
:   O expoente.

### Valor Retornado

Retorna um [float](language.types.float.md) correspondente a
`$num$exponent`.

### Examples

**Exemplo #1 Exemplo de **fpow()****

```
<?php
var_dump(fpow(10, 2));
var_dump(fpow(0, -3));
var_dump(fpow(-1, 5.5));
?>
```

O exemplo acima produzirá:

```
float(100)
float(INF)
float(NAN)
```

### Veja também

- Operador de exponenciação
  [`**`](language.operators.arithmetic.md)
- [pow()](function.pow.md) - Expressão exponencial
- [fdiv()](function.fdiv.md) - Divide dois números de acordo com a IEEE 754
- [fmod()](function.fmod.md) - Retorna o resto (módulo) em ponto flutuante da divisão
  dos argumentos

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

# Raiz quadrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqrt.php

---

# sqrt

(PHP 4, PHP 5, PHP 7, PHP 8)

sqrt — Raiz quadrada

### Descrição

function **sqrt**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna a raiz quadrada de `num`.

### Parâmetros

`num`
:   O argumento para processar

### Valor Retornado

A raiz quadrada de `num`
ou o valor especial **`NAN`** para números negativos.

### Examples

**Exemplo #1 Exemplo da **sqrt()****

```
<?php
// Precisão depende de sua diretiva precision
echo sqrt(9), PHP_EOL; // 3
echo sqrt(10), PHP_EOL; // 3.16227766 ...
?>
```

### Veja também

- [pow()](function.pow.md) - Expressão exponencial
- **`M_SQRTPI`** - `sqrt(pi)`
- **`M_2_SQRTPI`** - `2/sqrt(pi)`
- **`M_SQRT2`** - `sqrt(2)`
- **`M_SQRT3`** - `sqrt(3)`
- **`M_SQRT1_2`** - `1/sqrt(2)`

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

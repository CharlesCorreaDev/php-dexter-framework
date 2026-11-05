# Obtém o valor de pi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pi.php

---

# pi

(PHP 4, PHP 5, PHP 7, PHP 8)

pi — Obtém o valor de pi

### Descrição

function **pi**(): [float](language.types.float.md)

Retorna uma aproximação de pi.
Alternativamente, pode-se usar a constante **`M_PI`** que fornece
resultado idêntico a **pi()**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor de pi como float.

### Examples

**Exemplo #1 Exemplo de **pi()****

```
<?php
echo pi(), PHP_EOL; // 3.1415926535898
echo M_PI, PHP_EOL; // 3.1415926535898
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

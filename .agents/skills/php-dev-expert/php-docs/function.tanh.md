# Tangente hiperbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tanh.php

---

# tanh

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

tanh — Tangente hiperbólica

### Descrição

function **tanh**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna a tangente hiperbólica de `num`,
definida como `sinh($num)/cosh($num)`.

### Parâmetros

`num`
:   O argumento para processar

### Valor Retornado

A tangente hiperbólica de `num`

### Veja também

- [tan()](function.tan.md) - Tangente
- [atanh()](function.atanh.md) - Arco tangente hiperbólico
- [sinh()](function.sinh.md) - Seno hiperbólico
- [cosh()](function.cosh.md) - Cosseno hiperbólico

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

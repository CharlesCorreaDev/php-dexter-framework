# Média Móvel Adaptativa MESA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-mama.php

---

# trader\_mama

(PECL trader >= 0.2.0)

trader\_mama — Média Móvel Adaptativa MESA

### Descrição

function **trader\_mama**([array](language.types.array.md) `$real`, [float](language.types.float.md) `$fastLimit` = ?, [float](language.types.float.md) `$slowLimit` = ?): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`fastLimit`
:   Limite superior usado no algoritmo adaptativo. Intervalo válido de 0.01 a 0.99.

`slowLimit`
:   Limite inferior usado no algoritmo adaptativo. Intervalo válido de 0.01 a 0.99.

### Valor Retornado

Retorna um array com os dados calculados ou false em caso de falha.

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

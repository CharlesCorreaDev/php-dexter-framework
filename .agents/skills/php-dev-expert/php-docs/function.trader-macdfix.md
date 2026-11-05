# Convergência/Divergência da Média Móvel Fixa 26/12

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-macdfix.php

---

# trader\_macdfix

(PECL trader >= 0.2.0)

trader\_macdfix — Convergência/Divergência da Média Móvel Fixa 26/12

### Descrição

function **trader\_macdfix**([array](language.types.array.md) `$real`, [int](language.types.integer.md) `$signalPeriod` = ?): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`signalPeriod`
:   Suavização da linha de sinal (número de período). Intervalo válido de 1 a 100000.

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

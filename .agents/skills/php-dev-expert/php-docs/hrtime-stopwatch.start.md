# Inicia a medição de tempo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/hrtime-stopwatch.start.php

---

# HRTime\StopWatch::start

(PECL hrtime >= 0.4.3)

HRTime\StopWatch::start — Inicia a medição de tempo

### Descrição

public function **HRTime\StopWatch::start**(): [void](language.types.void.md)

Inicia a medição de tempo. Não tem efeito se a medição já tiver sido
iniciada. A medição será continuada se tiver sido parada anteriormente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna void.

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

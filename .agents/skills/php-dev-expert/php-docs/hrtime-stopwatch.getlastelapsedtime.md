# Obtém o tempo decorrido para o último intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/hrtime-stopwatch.getlastelapsedtime.php

---

# HRTime\StopWatch::getLastElapsedTime

(PECL hrtime >= 0.4.3)

HRTime\StopWatch::getLastElapsedTime — Obtém o tempo decorrido para o último intervalo

### Descrição

public function **HRTime\StopWatch::getLastElapsedTime**([int](language.types.integer.md) `$unit` = ?): [float](language.types.float.md)

Obtém o tempo decorrido para o último intervalo previamente fechado.

### Parâmetros

`unit`
:   Unidade de tempo representada por uma constante HRTime\Unit. O padrão é
    HRTime\Unit::SECOND.

### Valor Retornado

Retorna um [float](language.types.float.md) indicando o tempo decorrido.

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

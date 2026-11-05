# Desabilita o profiler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.disableprofiler.php

---

# LuaSandbox::disableProfiler

(PECL luasandbox >= 1.1.0)

LuaSandbox::disableProfiler — Desabilita o profiler

### Descrição

public function **LuaSandbox::disableProfiler**(): [void](language.types.void.md)

Desabilita o profiler.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [LuaSandbox::enableProfiler()](luasandbox.enableprofiler.md) - Habilita o profiler
- [LuaSandbox::getProfilerFunctionReport()](luasandbox.getprofilerfunctionreport.md) - Obtém dados do profiler

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

# Habilita o profiler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.enableprofiler.php

---

# LuaSandbox::enableProfiler

(PECL luasandbox >= 1.1.0)

LuaSandbox::enableProfiler — Habilita o profiler

### Descrição

public function **LuaSandbox::enableProfiler**([float](language.types.float.md) `$period` = 0.02): [bool](language.types.boolean.md)

Habilita o profiler. O profiler começará quando o código Lua for inserido.

O profiler periodicamente faz uma amostragem do ambiente Lua para registrar a
função em execução. Os testes indicam que, pelo menos no Linux, definir um
período menor que 1 ms levará a uma alta contagem de estouro, mas não a
problemas de desempenho.

### Parâmetros

`period`
:   Período de amostragem em segundos.

### Valor Retornado

Retorna um booleano indicando se o profiler está habilitado.

### Veja também

- [LuaSandbox::disableProfiler()](luasandbox.disableprofiler.md) - Desabilita o profiler
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

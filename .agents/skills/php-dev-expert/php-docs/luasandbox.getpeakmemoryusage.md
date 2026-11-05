# Busca o pico de uso de memória do ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.getpeakmemoryusage.php

---

# LuaSandbox::getPeakMemoryUsage

(PECL luasandbox >= 1.0.0)

LuaSandbox::getPeakMemoryUsage — Busca o pico de uso de memória do ambiente Lua

### Descrição

public function **LuaSandbox::getPeakMemoryUsage**(): [int](language.types.integer.md)

Busca o pico de uso de memória do ambiente Lua.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o pico de uso de memória em bytes.

### Veja também

- [LuaSandbox::getMemoryUsage()](luasandbox.getmemoryusage.md) - Obtém o uso atual da memória do ambiente Lua
- [LuaSandbox::getCPUUsage()](luasandbox.getcpuusage.md) - Obtém o uso atual do tempo de CPU do ambiente Lua
- [LuaSandbox::setMemoryLimit()](luasandbox.setmemorylimit.md) - Define o limite de memória para o ambiente Lua

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

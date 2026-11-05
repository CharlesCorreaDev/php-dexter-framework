# Obtém o uso atual do tempo de CPU do ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.getcpuusage.php

---

# LuaSandbox::getCPUUsage

(PECL luasandbox >= 1.0.0)

LuaSandbox::getCPUUsage — Obtém o uso atual do tempo de CPU do ambiente Lua

### Descrição

public function **LuaSandbox::getCPUUsage**(): [float](language.types.float.md)

Obtém o uso atual do tempo de CPU do ambiente Lua.

Isso inclui o tempo gasto em funções de retorno PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o uso atual do tempo da CPU em segundos.

> **Nota**:
>
> No Windows, esta função sempre retorna zero. Em sistemas operacionais que
> não suportam **`CLOCK_THREAD_CPUTIME_ID`**, como FreeBSD
> e Mac OS X, esta função retornará o tempo decorrido do relógio de parede, não
> o tempo da CPU.

### Veja também

- [LuaSandbox::getMemoryUsage()](luasandbox.getmemoryusage.md) - Obtém o uso atual da memória do ambiente Lua
- [LuaSandbox::getPeakMemoryUsage()](luasandbox.getpeakmemoryusage.md) - Busca o pico de uso de memória do ambiente Lua
- [LuaSandbox::setCPULimit()](luasandbox.setcpulimit.md) - Define o limite de tempo da CPU para o ambiente Lua

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

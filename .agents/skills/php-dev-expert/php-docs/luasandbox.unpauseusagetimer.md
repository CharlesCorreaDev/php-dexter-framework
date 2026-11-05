# Despausa o cronômetro pausado por LuaSandbox::pauseUsageTimer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.unpauseusagetimer.php

---

# LuaSandbox::unpauseUsageTimer

(PECL luasandbox >= 1.4.0)

LuaSandbox::unpauseUsageTimer — Despausa o cronômetro pausado por [LuaSandbox::pauseUsageTimer()](luasandbox.pauseusagetimer.md)

### Descrição

public function **LuaSandbox::unpauseUsageTimer**(): [void](language.types.void.md)

Despausa o cronômetro pausado por [LuaSandbox::pauseUsageTimer()](luasandbox.pauseusagetimer.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [LuaSandbox::pauseUsageTimer()](luasandbox.pauseusagetimer.md) - Pausa o cronômetro de uso da CPU
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

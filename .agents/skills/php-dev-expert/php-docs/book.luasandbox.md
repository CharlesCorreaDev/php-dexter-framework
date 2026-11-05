# LuaSandbox

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.luasandbox.php

---

# LuaSandbox

# Introdução

LuaSandbox é uma extensão para PHP 7 e PHP 8 para permitir a execução
segura de código Lua 5.1 não confiável de dentro do PHP.

Diferenças em comparação com a extensão [Lua](book.lua.md):

- O LuaSandbox tem suporte para limites de tempo e memória.
- LuaSandbox fornece um ambiente seguro padrão para executar código não confiável.
  As funções do Lua Stock foram revisadas para segurança, e várias foram corrigidas
  de acordo.
- LuaSandbox tem uma interface PHP que é mais complexa, precisa e poderosa,
  mas é menos conveniente para desenvolvedores.
- LuaSandbox suporta apenas Lua 5.1. É difícil mudar isso, porque
  LuaSandbox usa bibliotecas padrão Lua bastante modificadas, e
  devido à falta de compatibilidade com versões anteriores entre as principais versões Lua.
  LuaSandbox visa maximizar a compatibilidade com versões anteriores com scripts
  fornecidos pelo usuário.

- [Instalação/Configuração](luasandbox.setup.md)
  - [Dependências](luasandbox.requirements.md)
  - [Instalação](luasandbox.installation.md)
- [Diferenças do Lua Padrão](reference.luasandbox.differences.md)
- [Examples](luasandbox.examples.md)
  - [Uso básico para LuaSandbox](luasandbox.examples-basic.md)
- [LuaSandbox](class.luasandbox.md) — A classe LuaSandbox
  - [LuaSandbox::callFunction](luasandbox.callfunction.md) — Chama uma função em uma variável global Lua
  - [LuaSandbox::disableProfiler](luasandbox.disableprofiler.md) — Desabilita o profiler
  - [LuaSandbox::enableProfiler](luasandbox.enableprofiler.md) — Habilita o profiler
  - [LuaSandbox::getCPUUsage](luasandbox.getcpuusage.md) — Obtém o uso atual do tempo de CPU do ambiente Lua
  - [LuaSandbox::getMemoryUsage](luasandbox.getmemoryusage.md) — Obtém o uso atual da memória do ambiente Lua
  - [LuaSandbox::getPeakMemoryUsage](luasandbox.getpeakmemoryusage.md) — Busca o pico de uso de memória do ambiente Lua
  - [LuaSandbox::getProfilerFunctionReport](luasandbox.getprofilerfunctionreport.md) — Obtém dados do profiler
  - [LuaSandbox::getVersionInfo](luasandbox.getversioninfo.md) — Retorna as versões de LuaSandbox e Lua
  - [LuaSandbox::loadBinary](luasandbox.loadbinary.md) — Carrega um bloco binário pré-compilado no ambiente Lua
  - [LuaSandbox::loadString](luasandbox.loadstring.md) — Carrega código Lua no ambiente Lua
  - [LuaSandbox::pauseUsageTimer](luasandbox.pauseusagetimer.md) — Pausa o cronômetro de uso da CPU
  - [LuaSandbox::registerLibrary](luasandbox.registerlibrary.md) — Registra um conjunto de funções PHP como uma biblioteca Lua
  - [LuaSandbox::setCPULimit](luasandbox.setcpulimit.md) — Define o limite de tempo da CPU para o ambiente Lua
  - [LuaSandbox::setMemoryLimit](luasandbox.setmemorylimit.md) — Define o limite de memória para o ambiente Lua
  - [LuaSandbox::unpauseUsageTimer](luasandbox.unpauseusagetimer.md) — Despausa o cronômetro pausado por LuaSandbox::pauseUsageTimer
  - [LuaSandbox::wrapPhpFunction](luasandbox.wrapphpfunction.md) — Encapsula um chamável PHP em uma LuaSandboxFunction
- [LuaSandboxFunction](class.luasandboxfunction.md) — A classe LuaSandboxFunction
  - [LuaSandboxFunction::call](luasandboxfunction.call.md) — Chama uma função Lua
  - [LuaSandboxFunction::\_\_construct](luasandboxfunction.construct.md) — Não utilizado
  - [LuaSandboxFunction::dump](luasandboxfunction.dump.md) — Despeja a função como um blob binário
- [LuaSandboxError](class.luasandboxerror.md) — A classe LuaSandboxError
- [LuaSandboxErrorError](class.luasandboxerrorerror.md) — A classe LuaSandboxErrorError
- [LuaSandboxFatalError](class.luasandboxfatalerror.md) — A classe LuaSandboxFatalError
- [LuaSandboxMemoryError](class.luasandboxmemoryerror.md) — A classe LuaSandboxMemoryError
- [LuaSandboxRuntimeError](class.luasandboxruntimeerror.md) — A classe LuaSandboxRuntimeError
- [LuaSandboxSyntaxError](class.luasandboxsyntaxerror.md) — A classe LuaSandboxSyntaxError
- [LuaSandboxTimeoutError](class.luasandboxtimeouterror.md) — A classe LuaSandboxTimeoutError

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

# A classe LuaSandbox

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.luasandbox.php

---

# A classe LuaSandbox

(PECL luasandbox >= 1.0.0)

## Introdução

A classe LuaSandbox cria um ambiente Lua e permite a execução de
código Lua.

## Resumo da classe

class **LuaSandbox**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[SAMPLES](class.luasandbox.md#luasandbox.constants.samples) = 0;

const
[int](language.types.integer.md)
[SECONDS](class.luasandbox.md#luasandbox.constants.seconds) = 1;

const
[int](language.types.integer.md)
[PERCENT](class.luasandbox.md#luasandbox.constants.percent) = 2;

/\* Métodos \*/

public function [callFunction](luasandbox.callfunction.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `...$args`): [array](language.types.array.md)|[bool](language.types.boolean.md)

public function [disableProfiler](luasandbox.disableprofiler.md)(): [void](language.types.void.md)

public function [enableProfiler](luasandbox.enableprofiler.md)([float](language.types.float.md) `$period` = 0.02): [bool](language.types.boolean.md)

public function [getCPUUsage](luasandbox.getcpuusage.md)(): [float](language.types.float.md)

public function [getMemoryUsage](luasandbox.getmemoryusage.md)(): [int](language.types.integer.md)

public function [getPeakMemoryUsage](luasandbox.getpeakmemoryusage.md)(): [int](language.types.integer.md)

public function [getProfilerFunctionReport](luasandbox.getprofilerfunctionreport.md)([int](language.types.integer.md) `$units` = LuaSandbox::SECONDS): [array](language.types.array.md)

public static function [getVersionInfo](luasandbox.getversioninfo.md)(): [array](language.types.array.md)

public function [loadBinary](luasandbox.loadbinary.md)([string](language.types.string.md) `$code`, [string](language.types.string.md) `$chunkName` = ''): [LuaSandboxFunction](class.luasandboxfunction.md)

public function [loadString](luasandbox.loadstring.md)([string](language.types.string.md) `$code`, [string](language.types.string.md) `$chunkName` = ''): [LuaSandboxFunction](class.luasandboxfunction.md)

public function [pauseUsageTimer](luasandbox.pauseusagetimer.md)(): [bool](language.types.boolean.md)

public function [registerLibrary](luasandbox.registerlibrary.md)([string](language.types.string.md) `$libname`, [array](language.types.array.md) `$functions`): [void](language.types.void.md)

public function [setCPULimit](luasandbox.setcpulimit.md)([float](language.types.float.md)|[bool](language.types.boolean.md) `$limit`): [void](language.types.void.md)

public function [setMemoryLimit](luasandbox.setmemorylimit.md)([int](language.types.integer.md) `$limit`): [void](language.types.void.md)

public function [unpauseUsageTimer](luasandbox.unpauseusagetimer.md)(): [void](language.types.void.md)

public function [wrapPhpFunction](luasandbox.wrapphpfunction.md)([callable](language.types.callable.md) `$function`): [LuaSandboxFunction](class.luasandboxfunction.md)

}

## Constantes predefinidas

**`LuaSandbox::SAMPLES`**
:   Usado com [LuaSandbox::getProfilerFunctionReport()](luasandbox.getprofilerfunctionreport.md) para retornar cronometragem em amostras.

**`LuaSandbox::SECONDS`**
:   Usado com [LuaSandbox::getProfilerFunctionReport()](luasandbox.getprofilerfunctionreport.md) para retornar cronometragem em segundos.

**`LuaSandbox::PERCENT`**
:   Usado com [LuaSandbox::getProfilerFunctionReport()](luasandbox.getprofilerfunctionreport.md) para retornar cronometragem em porcentagens do total.

## Índice

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

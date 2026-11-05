# A classe HRTime\StopWatch

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.hrtime-stopwatch.php

---

# A classe HRTime\StopWatch

(PECL hrtime >= 0.4.3)

## Introdução

## Resumo da classe

class **HRTime\StopWatch**

extends
[HRTime\PerformanceCounter](class.hrtime-performancecounter.md)
{

/\* Métodos \*/

public function [getElapsedTicks](hrtime-stopwatch.getelapsedticks.md)(): [int](language.types.integer.md)

public function [getElapsedTime](hrtime-stopwatch.getelapsedtime.md)([int](language.types.integer.md) `$unit` = ?): [float](language.types.float.md)

public function [getLastElapsedTicks](hrtime-stopwatch.getlastelapsedticks.md)(): [int](language.types.integer.md)

public function [getLastElapsedTime](hrtime-stopwatch.getlastelapsedtime.md)([int](language.types.integer.md) `$unit` = ?): [float](language.types.float.md)

public function [isRunning](hrtime-stopwatch.isrunning.md)(): [bool](language.types.boolean.md)

public function [start](hrtime-stopwatch.start.md)(): [void](language.types.void.md)

public function [stop](hrtime-stopwatch.stop.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

public static function [HRTime\PerformanceCounter::getFrequency](hrtime-performancecounter.getfrequency.md)(): [int](language.types.integer.md)

public static function [HRTime\PerformanceCounter::getTicks](hrtime-performancecounter.getticks.md)(): [int](language.types.integer.md)

public static function [HRTime\PerformanceCounter::getTicksSince](hrtime-performancecounter.gettickssince.md)([int](language.types.integer.md) `$start`): [int](language.types.integer.md)

}

## Índice

- [HRTime\StopWatch::getElapsedTicks](hrtime-stopwatch.getelapsedticks.md) — Obtém os tiques decorridos para todos os intervalos
- [HRTime\StopWatch::getElapsedTime](hrtime-stopwatch.getelapsedtime.md) — Obtém o tempo decorrido para todos os intervalos
- [HRTime\StopWatch::getLastElapsedTicks](hrtime-stopwatch.getlastelapsedticks.md) — Obtém os tiques decorridos para o último intervalo
- [HRTime\StopWatch::getLastElapsedTime](hrtime-stopwatch.getlastelapsedtime.md) — Obtém o tempo decorrido para o último intervalo
- [HRTime\StopWatch::isRunning](hrtime-stopwatch.isrunning.md) — Informa se a medição está em execução
- [HRTime\StopWatch::start](hrtime-stopwatch.start.md) — Inicia a medição de tempo
- [HRTime\StopWatch::stop](hrtime-stopwatch.stop.md) — Para a medição do tempo

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

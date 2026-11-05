# Temporização de alta resolução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.hrtime.php

---

# Temporização de alta resolução

# Introdução

A extensão HRTime implementa uma classe StopWatch de alta resolução. Ela usa as
melhores APIs possíveis em diferentes plataformas, o que traz resolução de até nanossegundos. Ela também torna possível implementar
um cronômetro personalizado usando tiques de baixo nível entregues pelas APIs subjacentes.

> **Nota**:
>
> A partir do PHP 7.3.0, a função relacionada [hrtime()](function.hrtime.md) faz parte
> do núcleo.

- [Instalação/Configuração](hrtime.setup.md)
  - [Instalação](hrtime.installation.md)
- [Examples](hrtime.examples.md)
  - [Uso básico](hrtime.example.basic.md)
- [HRTime\PerformanceCounter](class.hrtime-performancecounter.md) — A classe HRTime\PerformanceCounter
  - [HRTime\PerformanceCounter::getFrequency](hrtime-performancecounter.getfrequency.md) — Frequência do temporizador em tiques por segundo
  - [HRTime\PerformanceCounter::getTicks](hrtime-performancecounter.getticks.md) — Tiques atuais do sistema
  - [HRTime\PerformanceCounter::getTicksSince](hrtime-performancecounter.gettickssince.md) — Tiques decorridos desde um valor informado
- [HRTime\StopWatch](class.hrtime-stopwatch.md) — A classe HRTime\StopWatch
  - [HRTime\StopWatch::getElapsedTicks](hrtime-stopwatch.getelapsedticks.md) — Obtém os tiques decorridos para todos os intervalos
  - [HRTime\StopWatch::getElapsedTime](hrtime-stopwatch.getelapsedtime.md) — Obtém o tempo decorrido para todos os intervalos
  - [HRTime\StopWatch::getLastElapsedTicks](hrtime-stopwatch.getlastelapsedticks.md) — Obtém os tiques decorridos para o último intervalo
  - [HRTime\StopWatch::getLastElapsedTime](hrtime-stopwatch.getlastelapsedtime.md) — Obtém o tempo decorrido para o último intervalo
  - [HRTime\StopWatch::isRunning](hrtime-stopwatch.isrunning.md) — Informa se a medição está em execução
  - [HRTime\StopWatch::start](hrtime-stopwatch.start.md) — Inicia a medição de tempo
  - [HRTime\StopWatch::stop](hrtime-stopwatch.stop.md) — Para a medição do tempo
- [HRTime\Unit](class.hrtime-unit.md) — A classe HRTime\Unit

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

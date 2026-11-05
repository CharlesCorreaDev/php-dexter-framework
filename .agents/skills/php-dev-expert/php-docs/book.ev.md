# Ev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ev.php

---

# Ev

# Introdução

Esta extensão fornece interface para a biblioteca
[» libev](https://software.schmorp.de/pkg/libev.html)
- um laço de eventos completo de alto desempenho escrito em C.

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

*Libev*
é um laço de eventos: registra-se interesse em certos eventos (como um descritor
de arquivo sendo legível ou ocorrendo um tempo limite) e ele gerenciará essas
fontes de eventos e fornecerá eventos ao programa.

Para fazer isso, ele deve assumir controle mais ou menos completo sobre o processo (ou
thread) executando o manipulador de laço de eventos e, então, comunicará
os eventos por meio de um mecanismo de retorno de chamada.

O interesse em determinados eventos é feito registrando os chamados monitores
de eventos e, em seguida, entregando-os ao libev e iniciando o observador.

Para obter detalhes consulte a
[» documentação do libev](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod).

- [Instalação/Configuração](ev.setup.md)
  - [Dependências](ev.requirements.md)
  - [Instalação](ev.installation.md)
- [Examples](ev.examples.md)
- [Observadores](ev.watchers.md)
- [Retornos de chamada do observador](ev.watcher-callbacks.md)
- [Modos de operação do observador periódico](ev.periodic-modes.md)
- [Ev](class.ev.md) — A classe Ev
  - [Ev::backend](ev.backend.md) — Retorna um inteiro descrevendo o backend usado por libev
  - [Ev::depth](ev.depth.md) — Retorna profundidade de recursão
  - [Ev::embeddableBackends](ev.embeddablebackends.md) — Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos
  - [Ev::feedSignal](ev.feedsignal.md) — Alimenta um evento de sinal no Ev
  - [Ev::feedSignalEvent](ev.feedsignalevent.md) — Alimenta o evento de sinal no laço padrão
  - [Ev::iteration](ev.iteration.md) — Retorna o número de vezes que o laço de eventos padrão pesquisou novos
    eventos
  - [Ev::now](ev.now.md) — Retorna o horário em que a última iteração do laço de eventos padrão
    foi iniciada
  - [Ev::nowUpdate](ev.nowupdate.md) — Estabelece a hora atual consultando o kernel, atualizando o horário
    retornado por Ev::now no progresso
  - [Ev::recommendedBackends](ev.recommendedbackends.md) — Retorna uma máscara de bits de backends recomendados para a
    plataforma atual
  - [Ev::resume](ev.resume.md) — Retoma o laço de eventos padrão suspenso anteriormente
  - [Ev::run](ev.run.md) — Começa a verificar eventos e chamar funções de retorno para o
    laço padrão
  - [Ev::sleep](ev.sleep.md) — Bloqueia o processo pelo número de segundos fornecido
  - [Ev::stop](ev.stop.md) — Interrompe o laço de eventos padrão
  - [Ev::supportedBackends](ev.supportedbackends.md) — Retorna o conjunto de backends suportados pela configuração atual
    do libev
  - [Ev::suspend](ev.suspend.md) — Suspende o laço de eventos padrão
  - [Ev::time](ev.time.md) — Retorna o horário atual em segundos fracionários desde a época
  - [Ev::verify](ev.verify.md) — Executa verificações de consistência interna (para depuração)
- [EvCheck](class.evcheck.md) — A classe EvCheck
  - [EvCheck::\_\_construct](evcheck.construct.md) — Constrói o objeto observador EvCheck
  - [EvCheck::createStopped](evcheck.createstopped.md) — Cria uma instância de um observador EvCheck parado
- [EvChild](class.evchild.md) — A classe EvChild
  - [EvChild::\_\_construct](evchild.construct.md) — Constrói o objeto observador EvChild
  - [EvChild::createStopped](evchild.createstopped.md) — Cria uma instância de um observador EvChild parado
  - [EvChild::set](evchild.set.md) — Configura o observador
- [EvEmbed](class.evembed.md) — A classe EvEmbed
  - [EvEmbed::\_\_construct](evembed.construct.md) — Constrói o objeto EvEmbed
  - [EvEmbed::createStopped](evembed.createstopped.md) — Cria objeto observador EvEmbed parado
  - [EvEmbed::set](evembed.set.md) — Configura o observador
  - [EvEmbed::sweep](evembed.sweep.md) — Faz uma varredura única e sem bloqueio sobre o laço incorporado
- [EvFork](class.evfork.md) — A classe EvFork
  - [EvFork::\_\_construct](evfork.construct.md) — Constrói o objeto observador EvFork
  - [EvFork::createStopped](evfork.createstopped.md) — Cria uma instância parada da classe observadora EvFork
- [EvIdle](class.evidle.md) — A classe EvIdle
  - [EvIdle::\_\_construct](evidle.construct.md) — Constrói o objeto observador EvIdle
  - [EvIdle::createStopped](evidle.createstopped.md) — Cria uma instância de um objeto observador EvIdle
- [EvIo](class.evio.md) — A classe EvIo
  - [EvIo::\_\_construct](evio.construct.md) — Constrói objeto observador EvIo
  - [EvIo::createStopped](evio.createstopped.md) — Cria objeto observador EvIo parado
  - [EvIo::set](evio.set.md) — Configura o observador
- [EvLoop](class.evloop.md) — A classe EvLoop
  - [EvLoop::backend](evloop.backend.md) — Retorna um inteiro descrevendo o backend usado por libev
  - [EvLoop::check](evloop.check.md) — Cria o objeto EvCheck associado à instância atual do laço
    de eventos
  - [EvLoop::child](evloop.child.md) — Cria o objeto EvChild associado ao laço de eventos atual
  - [EvLoop::\_\_construct](evloop.construct.md) — Constrói o objeto de laço de eventos
  - [EvLoop::defaultLoop](evloop.defaultloop.md) — Retorna ou cria o laço de eventos padrão
  - [EvLoop::embed](evloop.embed.md) — Cria uma instância do observador EvEmbed associado
    ao objeto EvLoop atual
  - [EvLoop::fork](evloop.fork.md) — Cria um objeto observador EvFork associado à instância atual
    do laço de eventos
  - [EvLoop::idle](evloop.idle.md) — Cria objeto observador EvIdle associado à instância de laço de evento
    atual
  - [EvLoop::invokePending](evloop.invokepending.md) — Invoca todos os observadores pendentes enquanto redefine seu estado pendente
  - [EvLoop::io](evloop.io.md) — Cria objeto observador EvIo associado à instância de laço de evento
    atual
  - [EvLoop::loopFork](evloop.loopfork.md) — Deve ser chamado após um fork
  - [EvLoop::now](evloop.now.md) — Retorna o "horário do laço de eventos" atual
  - [EvLoop::nowUpdate](evloop.nowupdate.md) — Estabelece o horário atual consultando o kernel, atualizando o
    horário retornado por EvLoop::now no progresso
  - [EvLoop::periodic](evloop.periodic.md) — Cria um objeto observador EvPeriodic associado à instância atual do
    laço de eventos
  - [EvLoop::prepare](evloop.prepare.md) — Cria um objeto observador EvPrepare associado à instância atual do
    laço de eventos
  - [EvLoop::resume](evloop.resume.md) — Retoma o laço de eventos padrão suspenso anteriormente
  - [EvLoop::run](evloop.run.md) — Começa a verificar eventos e chamar funções de retorno para o laço
  - [EvLoop::signal](evloop.signal.md) — Cria um objeto observador EvSignal associado à instância atual do
    laço de eventos
  - [EvLoop::stat](evloop.stat.md) — Cria objeto observador EvStat associado à instância de laço de evento
    atual
  - [EvLoop::stop](evloop.stop.md) — Interrompe o laço de eventos
  - [EvLoop::suspend](evloop.suspend.md) — Suspende o laço
  - [EvLoop::timer](evloop.timer.md) — Cria objeto observador EvTimer associado à instância de laço de evento
    atual
  - [EvLoop::verify](evloop.verify.md) — Executa verificações de consistência interna (para depuração)
- [EvPeriodic](class.evperiodic.md) — A classe EvPeriodic
  - [EvPeriodic::again](evperiodic.again.md) — Simplesmente para e reinicia o observador periódico novamente
  - [EvPeriodic::at](evperiodic.at.md) — Retorna o tempo absoluto em que este observador
    deve disparar em seguida
  - [EvPeriodic::\_\_construct](evperiodic.construct.md) — Constrói objeto observador EvPeriodic
  - [EvPeriodic::createStopped](evperiodic.createstopped.md) — Cria um observador EvPeriodic parado
  - [EvPeriodic::set](evperiodic.set.md) — Configura o observador
- [EvPrepare](class.evprepare.md) — A classe EvPrepare
  - [EvPrepare::\_\_construct](evprepare.construct.md) — Constrói objeto observador EvPrepare
  - [EvPrepare::createStopped](evprepare.createstopped.md) — Cria uma instância parada do observador EvPrepare
- [EvSignal](class.evsignal.md) — A classe EvSignal
  - [EvSignal::\_\_construct](evsignal.construct.md) — Constrói objeto observador EvSignal
  - [EvSignal::createStopped](evsignal.createstopped.md) — Cria objeto observador EvSignal parado
  - [EvSignal::set](evsignal.set.md) — Configura o observador
- [EvStat](class.evstat.md) — A classe EvStat
  - [EvStat::attr](evstat.attr.md) — Retorna os valores detectados mais recentemente por Ev
  - [EvStat::\_\_construct](evstat.construct.md) — Contrói objeto observador EvStat
  - [EvStat::createStopped](evstat.createstopped.md) — Cria um objeto observador EvStat parado
  - [EvStat::prev](evstat.prev.md) — Retorna o conjunto anterior de valores retornados por EvStat::attr
  - [EvStat::set](evstat.set.md) — Configura o observador
  - [EvStat::stat](evstat.stat.md) — Inicia a chamada stat
- [EvTimer](class.evtimer.md) — A classe EvTimer
  - [EvTimer::again](evtimer.again.md) — Reinicia o observador do temporizador
  - [EvTimer::\_\_construct](evtimer.construct.md) — Contrói objeto observador EvTimer
  - [EvTimer::createStopped](evtimer.createstopped.md) — Cria objeto observador EvTimer parado
  - [EvTimer::set](evtimer.set.md) — Configura o observador
- [EvWatcher](class.evwatcher.md) — A classe EvWatcher
  - [EvWatcher::clear](evwatcher.clear.md) — Limpa o status pendente do observador
  - [EvWatcher::\_\_construct](evwatcher.construct.md) — Construtor abstrato de um objeto observador
  - [EvWatcher::feed](evwatcher.feed.md) — Alimenta o conjunto de "revents" fornecido no laço de eventos
  - [EvWatcher::getLoop](evwatcher.getloop.md) — Retorna o laço responsável pelo observador
  - [EvWatcher::invoke](evwatcher.invoke.md) — Invoca a função de retorno do observador com a máscara de bits dos eventos
    recebidos fornecidos
  - [EvWatcher::keepalive](evwatcher.keepalive.md) — Configura opção de impedir que o laço retorne
  - [EvWatcher::setCallback](evwatcher.setcallback.md) — Define uma nova função de retorno para o observador
  - [EvWatcher::start](evwatcher.start.md) — Inicia o observador
  - [EvWatcher::stop](evwatcher.stop.md) — Interrrompe o observador

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

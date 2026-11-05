# Extensões para Controle de Processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.fileprocess.process.php

---

# Extensões para Controle de Processo

- [Eio](book.eio.md)
  - [Instalação/Configuração](eio.setup.md)
  - [Constantes predefinidas](eio.constants.md)
  - [Examples](eio.examples.md)
  - [Funções de Eio](ref.eio.md)
- [Ev](book.ev.md)
  - [Instalação/Configuração](ev.setup.md)
  - [Examples](ev.examples.md)
  - [Observadores](ev.watchers.md)
  - [Retornos de chamada do observador](ev.watcher-callbacks.md)
  - [Modos de operação do observador periódico](ev.periodic-modes.md)
  - [Ev](class.ev.md) — A classe Ev
  - [EvCheck](class.evcheck.md) — A classe EvCheck
  - [EvChild](class.evchild.md) — A classe EvChild
  - [EvEmbed](class.evembed.md) — A classe EvEmbed
  - [EvFork](class.evfork.md) — A classe EvFork
  - [EvIdle](class.evidle.md) — A classe EvIdle
  - [EvIo](class.evio.md) — A classe EvIo
  - [EvLoop](class.evloop.md) — A classe EvLoop
  - [EvPeriodic](class.evperiodic.md) — A classe EvPeriodic
  - [EvPrepare](class.evprepare.md) — A classe EvPrepare
  - [EvSignal](class.evsignal.md) — A classe EvSignal
  - [EvStat](class.evstat.md) — A classe EvStat
  - [EvTimer](class.evtimer.md) — A classe EvTimer
  - [EvWatcher](class.evwatcher.md) — A classe EvWatcher
- [Expect](book.expect.md)
  - [Instalação/Configuração](expect.setup.md)
  - [Constantes predefinidas](expect.constants.md)
  - [Examples](expect.examples.md)
  - [Funções de Expect](ref.expect.md)
- [PCNTL](book.pcntl.md) — Controle de Processos
  - [Instalação/Configuração](pcntl.setup.md)
  - [Constantes predefinidas](pcntl.constants.md)
  - [Examples](pcntl.examples.md)
  - [Pcntl\QosClass](enum.pcntl-qosclass.md) — A Enumeração Pcntl\QosClass
  - [Funções PCNTL](ref.pcntl.md)
- [POSIX](book.posix.md)
  - [Instalação/Configuração](posix.setup.md)
  - [Constantes predefinidas](posix.constants.md)
  - [Funções de POSIX](ref.posix.md)
- [Execução de programa](book.exec.md) — Execução de programa do sistema
  - [Instalação/Configuração](exec.setup.md)
  - [Funções para Execução de programas](ref.exec.md)
- [parallel](book.parallel.md)
  - [Instalação](parallel.setup.md)
  - [Filosofia](philosophy.parallel.md)
  - [API funcional](functional.parallel.md)
  - [parallel\Runtime](class.parallel-runtime.md) — A classe parallel\Runtime
  - [parallel\Future](class.parallel-future.md) — A classe parallel\Future
  - [parallel\Channel](class.parallel-channel.md) — A classe parallel\Channel
  - [parallel\Events](class.parallel-events.md) — A classe parallel\Events
  - [parallel\Events\Input](class.parallel-events-input.md) — A classe parallel\Events\Input
  - [parallel\Events\Event](class.parallel-events-event.md) — A classe parallel\Events\Event
  - [parallel\Events\Event\Type](class.parallel-events-event-type.md) — A classe parallel\Events\Event\Type
  - [parallel\Sync](class.parallel-sync.md) — A classe parallel\Sync
- [pthreads](book.pthreads.md)
  - [Instalação/Configuração](pthreads.setup.md)
  - [Constantes predefinidas](pthreads.constants.md)
  - [Threaded](class.threaded.md) — A classe Threaded
  - [Thread](class.thread.md) — A classe Thread
  - [Worker](class.worker.md) — A classe Worker
  - [Collectable](class.collectable.md) — A interface Collectable
  - [Pool](class.pool.md) — A classe Pool
  - [Volatile](class.volatile.md) — A classe Volatile
- [Semaphore](book.sem.md) — Semáforos, Memória Compartilhada e Comunicação entre Processos
  - [Instalação/Configuração](sem.setup.md)
  - [Constantes predefinidas](sem.constants.md)
  - [Funções de Semaphore](ref.sem.md)
  - [SysvMessageQueue](class.sysvmessagequeue.md) — A classe SysvMessageQueue
  - [SysvSemaphore](class.sysvsemaphore.md) — A classe SysvSemaphore
  - [SysvSharedMemory](class.sysvsharedmemory.md) — A classe SysvSharedMemory
- [Memória Compartilhada](book.shmop.md)
  - [Instalação/Configuração](shmop.setup.md)
  - [Examples](shmop.examples.md)
  - [Funções para Memória Compartilhada](ref.shmop.md)
  - [Shmop](class.shmop.md) — A classe Shmop
- [Sync](book.sync.md)
  - [Instalação/Configuração](sync.setup.md)
  - [SyncMutex](class.syncmutex.md) — A classe SyncMutex
  - [SyncSemaphore](class.syncsemaphore.md) — A classe SyncSemaphore
  - [SyncEvent](class.syncevent.md) — A classe SyncEvent
  - [SyncReaderWriter](class.syncreaderwriter.md) — A classe SyncReaderWriter
  - [SyncSharedMemory](class.syncsharedmemory.md) — A classe SyncSharedMemory

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

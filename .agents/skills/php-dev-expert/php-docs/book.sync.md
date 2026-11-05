# Sync

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.sync.php

---

# Sync

# Introdução

A extensão `sync` introduz objetos de sincronização multiplataforma no PHP.
Objetos de Mutex, Semaphore, Event, Reader-Writer e Shared Memory nomeados e não nomeados
fornecem sincronização em nível de sistema operacional em plataformas POSIX (por exemplo, Linux)
e Windows.

A limpeza automática de objetos de sincronização adquiridos ocorre durante a desmontagem
da extensão. Isso significa que se o PHP encerrar prematuramente um script (por exemplo,
o tempo de execução do script for excedido), os objetos não serão deixados em um estado desconhecido. A
única exceção a isso é se o próprio PHP travar (por exemplo, uma sobrecarga de buffer interna).

Objetos de sincronização não nomeados não têm muita utilidade fora de um cenário
multithread. Objetos não nomeados são mais úteis em conjunto com a extensão pthreads
do PECL.

> **Nota**:
>
> Objetos nomeados requerem cuidados adicionais para serem usados em todos os sistemas.
> Se um objeto for instanciado com um conjunto específico de parâmetros, ele sempre deve
> ser instanciado com esses parâmetros, caso contrário, o objeto provavelmente acabará em um
> estado inconsistente até a próxima reinicialização ou até que um administrador de sistema limpe
> a bagunça.

- [Instalação/Configuração](sync.setup.md)
  - [Dependências](sync.requirements.md)
  - [Instalação](sync.installation.md)
- [SyncMutex](class.syncmutex.md) — A classe SyncMutex
  - [SyncMutex::\_\_construct](syncmutex.construct.md) — Constrói um novo objeto SyncMutex
  - [SyncMutex::lock](syncmutex.lock.md) — Aguarda um bloqueio exclusivo
  - [SyncMutex::unlock](syncmutex.unlock.md) — Destrava o mutex
- [SyncSemaphore](class.syncsemaphore.md) — A classe SyncSemaphore
  - [SyncSemaphore::\_\_construct](syncsemaphore.construct.md) — Constrói um novo objeto SyncSemaphore
  - [SyncSemaphore::lock](syncsemaphore.lock.md) — Diminui a contagem do semáforo ou espera
  - [SyncSemaphore::unlock](syncsemaphore.unlock.md) — Aumenta a contagem do semáforo
- [SyncEvent](class.syncevent.md) — A classe SyncEvent
  - [SyncEvent::\_\_construct](syncevent.construct.md) — Constrói um novo objeto SyncEvent
  - [SyncEvent::fire](syncevent.fire.md) — Ativa/configura o evento
  - [SyncEvent::reset](syncevent.reset.md) — Redefine um evento manual
  - [SyncEvent::wait](syncevent.wait.md) — Espera o evento ser ativado/configurado
- [SyncReaderWriter](class.syncreaderwriter.md) — A classe SyncReaderWriter
  - [SyncReaderWriter::\_\_construct](syncreaderwriter.construct.md) — Constrói um novo objeto SyncReaderWriter
  - [SyncReaderWriter::readlock](syncreaderwriter.readlock.md) — Aguarda um bloqueio de leitura
  - [SyncReaderWriter::readunlock](syncreaderwriter.readunlock.md) — Libera um bloqueio de leitura
  - [SyncReaderWriter::writelock](syncreaderwriter.writelock.md) — Aguarda um bloqueio de gravação exclusivo
  - [SyncReaderWriter::writeunlock](syncreaderwriter.writeunlock.md) — Libera um bloqueio de gravação
- [SyncSharedMemory](class.syncsharedmemory.md) — A classe SyncSharedMemory
  - [SyncSharedMemory::\_\_construct](syncsharedmemory.construct.md) — Constrói um novo objeto SyncSharedMemory
  - [SyncSharedMemory::first](syncsharedmemory.first.md) — Verifica se o objeto é a primeira instância de todo o sistema de memória compartilhada nomeada
  - [SyncSharedMemory::read](syncsharedmemory.read.md) — Copia dados da memória compartilhada nomeada
  - [SyncSharedMemory::size](syncsharedmemory.size.md) — Retorna o tamanho da memória compartilhada nomeada
  - [SyncSharedMemory::write](syncsharedmemory.write.md) — Copia dados para memória compartilhada nomeada

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

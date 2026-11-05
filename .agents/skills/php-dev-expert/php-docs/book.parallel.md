# parallel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.parallel.php

---

# parallel

# Introdução

parallel é uma extensão de simultaneidade paralela para PHP ≥ 7.2.0.
A partir do parallel 1.2.0, PHP ≥ 8.0.0 é necessário.

Segue uma breve descrição dos conceitos básicos do parallel; informações mais detalhadas podem ser encontradas nesta seção do manual.

### Runtime

Um [parallel\Runtime](class.parallel-runtime.md) representa um thread interpretador de PHP. Um [parallel\Runtime](class.parallel-runtime.md) é configurado com um arquivo de bootstrap opcional passado para [parallel\Runtime::\_\_construct()](parallel-runtime.construct.md), normalmente é um autoloader
ou alguma outra rotina de pré-carregamento: O arquivo de bootstrap irá ser incluído antes de qualquer tarefa ser executada.

Após a construção, o [parallel\Runtime](class.parallel-runtime.md) permanece disponível até ser fechado, eliminado ou destruído pelas regras normais de escopo dos objetos PHP.
[parallel\Runtime::run()](parallel-runtime.run.md) permite ao programador agendar tarefas para execução em paralelo.
Um [parallel\Runtime](class.parallel-runtime.md) possui um agendamento FIFO, as tarefas serão executadas na ordem em que foram agendadas.

### API funcional

parallel implementa uma API funcional de nível superior sobre [parallel\Runtime](class.parallel-runtime.md) que fornece um único ponto de entrada de função para executar código paralelo
com agendamento automático: [parallel\run()](parallel.run.md).

### Task

Uma tarefa é simplesmente um [Closure](class.closure.md) destinado à execução paralela. O [Closure](class.closure.md) pode conter quase qualquer instrução, incluindo closures aninhados.
Porém, existem algumas instruções que são proibidas nas tarefas:

- yield
- operador 'use' por referência
- declaração de classe
- declaração de função com nome

> **Nota**:
>
> Closures aninhados podem ter 'use' por referência ou 'yield', mas não devem conter declarações de classe ou de função nomeada.

> **Nota**:
>
> Nenhuma instrução é proibida nos arquivos que a tarefa pode incluir.

### Future

[parallel\Future](class.parallel-future.md) é usado para acessar o valor de retorno da tarefa e expõe uma API para cancelamento da tarefa.

### Channel

Uma tarefa pode ser agendada com argumentos, usar variáveis de escopo léxico (por valor) e retornar um valor (através de um [parallel\Future](class.parallel-future.md)), mas estes só permitem comunicação unidirecional:
Eles permitem que o programador envie e recupere dados de uma tarefa, mas não permitem a comunicação bidirecional entre tarefas.
A API [parallel\Channel](class.parallel-channel.md) permite a comunicação bidirecional entre tarefas, um [parallel\Channel](class.parallel-channel.md) é uma conexão entre tarefas semelhante a um soquete que o programador pode usar para enviar e receber dados.

### Events

A API [parallel\Events](class.parallel-events.md) implementa um loop de eventos de sensação nativa ([Traversable](class.traversable.md)) e um método [parallel\Events::poll()](parallel-events.poll.md).
Permite ao programador trabalhar com conjuntos de channels e/ou futures.
O programador simplesmente adiciona channels e futures ao loop de eventos, opcionalmente definindo a entrada para gravações com [parallel\Events::setInput()](parallel-events.setinput.md),
e entra em um foreach: parallel irá ler e escrever em objetos à medida que eles se tornam disponíveis produzindo objetos [parallel\Events\Event](class.parallel-events-event.md)
que descrevem as operações que ocorreram.

### Veja também

- [Filosofia](philosophy.parallel.md)

- [Instalação](parallel.setup.md)
- [Filosofia](philosophy.parallel.md)
- [API funcional](functional.parallel.md)
  - [parallel\bootstrap](parallel.bootstrap.md) — Inicialização
  - [parallel\run](parallel.run.md) — Execução
- [parallel\Runtime](class.parallel-runtime.md) — A classe parallel\Runtime
  - [parallel\Runtime::\_\_construct](parallel-runtime.construct.md) — Construção de Runtime
  - [parallel\Runtime::run](parallel-runtime.run.md) — Execução
  - [parallel\Runtime::close](parallel-runtime.close.md) — Encerramento elegante de Runtime
  - [parallel\Runtime::kill](parallel-runtime.kill.md) — Encerramento de Runtime
- [parallel\Future](class.parallel-future.md) — A classe parallel\Future
  - [parallel\Future::cancel](parallel-future.cancel.md) — Cancelamento
  - [parallel\Future::cancelled](parallel-future.cancelled.md) — Detecção de estado
  - [parallel\Future::done](parallel-future.done.md) — Detecção de estado
  - [parallel\Future::value](parallel-future.value.md) — Resolução
- [parallel\Channel](class.parallel-channel.md) — A classe parallel\Channel
  - [parallel\Channel::\_\_construct](parallel-channel.construct.md) — Construção de canal
  - [parallel\Channel::make](parallel-channel.make.md) — Construção de canal
  - [parallel\Channel::open](parallel-channel.open.md) — Acesso
  - [parallel\Channel::recv](parallel-channel.recv.md) — Compartilhamento
  - [parallel\Channel::send](parallel-channel.send.md) — Compartilhamento
  - [parallel\Channel::close](parallel-channel.close.md) — Fechamento
- [parallel\Events](class.parallel-events.md) — A classe parallel\Events
  - [parallel\Events::setBlocking](parallel-events.setblocking.md) — Comportamento
  - [parallel\Events::setTimeout](parallel-events.settimeout.md) — Comportamento
  - [parallel\Events::setInput](parallel-events.setinput.md) — Entrada
  - [parallel\Events::addChannel](parallel-events.addchannel.md) — Alvos
  - [parallel\Events::addFuture](parallel-events.addfuture.md) — Alvos
  - [parallel\Events::remove](parallel-events.remove.md) — Alvos
  - [parallel\Events::poll](parallel-events.poll.md) — Pesquisa
- [parallel\Events\Input](class.parallel-events-input.md) — A classe parallel\Events\Input
  - [parallel\Events\Input::add](parallel-events-input.add.md) — Entradas
  - [parallel\Events\Input::clear](parallel-events-input.clear.md) — Entradas
  - [parallel\Events\Input::remove](parallel-events-input.remove.md) — Entradas
- [parallel\Events\Event](class.parallel-events-event.md) — A classe parallel\Events\Event
- [parallel\Events\Event\Type](class.parallel-events-event-type.md) — A classe parallel\Events\Event\Type
- [parallel\Sync](class.parallel-sync.md) — A classe parallel\Sync
  - [parallel\Sync::\_\_construct](parallel-sync.construct.md) — Construção
  - [parallel\Sync::get](parallel-sync.get.md) — Acesso
  - [parallel\Sync::set](parallel-sync.set.md) — Acesso
  - [parallel\Sync::wait](parallel-sync.wait.md) — Sincronização
  - [parallel\Sync::notify](parallel-sync.notify.md) — Sincronização
  - [parallel\Sync::\_\_invoke](parallel-sync.invoke.md) — Sincronização

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

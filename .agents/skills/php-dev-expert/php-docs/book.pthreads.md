# pthreads

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pthreads.php

---

# pthreads

# Introdução

pthreads é uma API orientada a objetos que fornece todas as ferramentas necessárias
para multithreading em PHP. Aplicações PHP podem criar, ler, escrever,
executar e sincronizar com Threads, Workers e objetos Threaded.

**Aviso**

Esta extensão é considerada sem manutenção e inoperante.

**Dica**

Considere usar [parallel](book.parallel.md) no lugar.

**Aviso**

A extensão pthreads não pode ser usada em um ambiente de servidor web.
Threading em PHP é, portanto, restrito apenas a aplicações baseadas em CLI.

**Aviso**

pthreads (v3) só pode ser usado com PHP 7.2+: Isso ocorre porque o modo ZTS
não é seguro em 7.0 e 7.1.

A classe [Threaded](class.threaded.md) forma a base da
funcionalidade que permite a operação dos pthreads. Expõe métodos de sincronização
e algumas interfaces úteis para o programador.

A classe [Thread](class.thread.md) permite que threads sejam criadas
simplesmente estendendo-as e implementando um método `run`. Quaisquer
membros podem ser gravados e lidos por qualquer contexto com uma referência ao
thread. Qualquer contexto também pode executar qualquer método público e protegido.
O corpo do método run será executado em um thread separado quando o
método [Thread::start()](thread.start.md) da implementação for
chamado a partir do contexto que o criou. Somente o contexto que cria um
thread pode iniciar e ingressar nele.

A classe [Worker](class.worker.md) tem um estado persistente e estará
disponível a partir da chamada para [Thread::start()](thread.start.md) (um
método herdado) até que o objeto saia do escopo ou seja explicitamente
desligamento (via [Worker::shutdown()](worker.shutdown.md)). Qualquer contexto com uma
referência ao objeto worker pode empilhar tarefas no Worker (via
[Worker::stack()](worker.stack.md)), onde essas tarefas serão executadas
pelo worker em um thread separado. O método `run` de um
objeto worker será executado antes de qualquer objeto na pilha do worker,
permitindo a inicialização de recursos que os objetos a serem executados possam
necessitar.

A classe [Pool](class.pool.md) é usada para criar um grupo de workers
para distribuir objetos [Threaded](class.threaded.md) entre eles. É a
maneira mais fácil e eficiente de usar vários threads em
aplicações PHP.

**Cuidado**

A classe [Pool](class.pool.md) não estende a classe
[Threaded](class.threaded.md) e, portanto, objetos baseados em pool são
considerados objetos PHP normais. Como tal, as suas instâncias não devem ser
partilhadas entre diferentes contextos.

A classe [Volatile](class.volatile.md) é nova no pthreads v3. É usado
para denotar propriedades [Threaded](class.threaded.md) mutáveis de classes
[Threaded](class.threaded.md) (uma vez que agora são imutáveis por
padrão). Também é usado para armazenar arrays PHP em
contextos [Threaded](class.threaded.md).

A sincronização é uma habilidade importante durante o threading. Todos os objetos
que o pthreads cria possuem sincronização integrada na forma (que será
familiar aos programadores java) de
[Threaded::wait()](threaded.wait.md) e
[Threaded::notify()](threaded.notify.md). Chamar
[Threaded::wait()](threaded.wait.md) em um objeto fará com que o contexto
espere por outro contexto para chamar
[Threaded::notify()](threaded.notify.md) no mesmo objeto. Este mecanismo
permite uma sincronização poderosa entre objetos [Threaded](class.threaded.md)
em PHP.

**Cuidado**

Quaisquer objetos destinados ao uso nas partes multithread de sua
aplicação devem estender [Threaded](class.threaded.md).

Armazenamento de dados:
Como regra geral, qualquer tipo de dados que possa ser serializado pode ser usado como membro de um objeto Threaded, ele pode ser lido e escrito a partir de qualquer contexto com uma referência ao objeto Threaded.
Nem todo tipo de dados é armazenado em série; os tipos básicos são armazenados em sua forma verdadeira.
Tipos complexos, arrays e objetos que não são encadeados são armazenados serialmente; eles podem ser lidos e gravados no Threaded Object a partir de qualquer contexto com uma referência.
Com exceção dos Objetos Threaded, qualquer referência usada para definir um membro de um Objeto Threaded é separada da referência no Objeto Threaded;
os mesmos dados podem ser lidos diretamente do Objeto Threaded a qualquer momento por qualquer contexto com uma referência ao Objeto Threaded.

Membros Estáticos:
Quando um novo contexto é criado (Thread ou Worker), geralmente eles são copiados, mas recursos e objetos com estado interno são anulados (por questões de segurança). Isso permite que eles funcionem como uma espécie de armazenamento local de threads. Por exemplo, ao iniciar o contexto, uma classe cujos membros estáticos incluem informações de conexão para um servidor de banco de dados, e a própria conexão, terá apenas as informações de conexão simples copiadas, não a conexão. Permitir que o novo contexto inicie uma conexão da mesma forma que o contexto que a criou, armazenando a conexão no mesmo local sem afetar o contexto original.

**Cuidado**

Quando print\_r, var\_dump e outras funções de depuração de objetos são executadas, elas não incluem proteção recursiva.

> **Nota**:
>
> Recursos:
> As extensões e funcionalidades que definem recursos em PHP são completamente despreparadas para este tipo de ambiente; O pthreads prevê que os recursos sejam compartilhados entre contextos; no entanto, para a maioria dos tipos de recursos, isso deve ser considerado inseguro. Deve-se ter extrema cautela e cuidado ao compartilhar recursos entre contextos.

**Cuidado**

No ambiente em que o pthreads é executado, algumas restrições e limitações são necessárias para fornecer um ambiente estável.

- [Instalação/Configuração](pthreads.setup.md)
  - [Dependências](pthreads.requirements.md)
  - [Instalação](pthreads.installation.md)
- [Constantes predefinidas](pthreads.constants.md)
- [Threaded](class.threaded.md) — A classe Threaded
  - [Threaded::chunk](threaded.chunk.md) — Manipulação
  - [Threaded::count](threaded.count.md) — Manipulação
  - [Threaded::extend](threaded.extend.md) — Manipulação em tempo de execução
  - [Threaded::isRunning](thread.isrunning.md) — Detecção de estado
  - [Threaded::isTerminated](threaded.isterminated.md) — Detecção de estado
  - [Threaded::merge](threaded.merge.md) — Manipulação
  - [Threaded::notify](threaded.notify.md) — Sincronização
  - [Threaded::notifyOne](threaded.notifyone.md) — Sincronização
  - [Threaded::pop](threaded.pop.md) — Manipulação
  - [Threaded::run](threaded.run.md) — Execução
  - [Threaded::shift](threaded.shift.md) — Manipulação
  - [Threaded::synchronized](threaded.synchronized.md) — Sincronização
  - [Threaded::wait](threaded.wait.md) — Sincronização
- [Thread](class.thread.md) — A classe Thread
  - [Thread::getCreatorId](thread.getcreatorid.md) — Identificação
  - [Thread::getCurrentThread](thread.getcurrentthread.md) — Identificação
  - [Thread::getCurrentThreadId](thread.getcurrentthreadid.md) — Identificação
  - [Thread::getThreadId](thread.getthreadid.md) — Identificação
  - [Thread::isJoined](thread.isjoined.md) — Detecção de estado
  - [Thread::isStarted](thread.isstarted.md) — Detecção de estado
  - [Thread::join](thread.join.md) — Sincronização
  - [Thread::start](thread.start.md) — Execução
- [Worker](class.worker.md) — A classe Worker
  - [Worker::collect](worker.collect.md) — Coleta referências a tarefas concluídas
  - [Worker::getStacked](worker.getstacked.md) — Obtém o tamanho da pilha restante
  - [Worker::isShutdown](worker.isshutdown.md) — Detecção de estado
  - [Worker::shutdown](worker.shutdown.md) — Desliga o trabalhador
  - [Worker::stack](worker.stack.md) — Trabalho de empilhamento
  - [Worker::unstack](worker.unstack.md) — Trabalho de desempilhamento
- [Collectable](class.collectable.md) — A interface Collectable
  - [Collectable::isGarbage](collectable.isgarbage.md) — Determina se um objeto foi marcado como lixo
- [Pool](class.pool.md) — A classe Pool
  - [Pool::collect](pool.collect.md) — Coleta referências a tarefas concluídas
  - [Pool::\_\_construct](pool.construct.md) — Cria um novo pool de trabalhadores
  - [Pool::resize](pool.resize.md) — Redimensiona o Pool
  - [Pool::shutdown](pool.shutdown.md) — Desliga todos os trabalhadores
  - [Pool::submit](pool.submit.md) — Envia um objeto para execução
  - [Pool::submitTo](pool.submitTo.md) — Envia uma tarefa a um trabalhador específico para execução
- [Volatile](class.volatile.md) — A classe Volatile

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

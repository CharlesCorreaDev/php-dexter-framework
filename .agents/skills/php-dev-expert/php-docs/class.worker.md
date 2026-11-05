# A classe Worker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.worker.php

---

# A classe Worker

(PECL pthreads >= 2.0.0)

## Introdução

Worker Threads têm um contexto persistente, portanto, devem ser usados sobre Threads na maioria dos casos.

Quando um Worker é iniciado, o método run será executado, mas o Thread não sairá até que uma das seguintes condições seja atendida:

- o Worker sai do escopo (não restam mais referências)
- o programador chama shutdown
- o script morre

Isto significa que o programador pode reutilizar o contexto durante a execução; colocar objetos na pilha do Worker fará com que o Worker
execute o método run dos objetos empilhados.

## Resumo da classe

class **Worker**

extends
[Thread](class.thread.md)
implements
[Traversable](class.traversable.md), [Countable](class.countable.md), [ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [collect](worker.collect.md)([Callable](language.types.callable.md) `$collector` = ?): [int](language.types.integer.md)

public function [getStacked](worker.getstacked.md)(): [int](language.types.integer.md)

public function [isShutdown](worker.isshutdown.md)(): [bool](language.types.boolean.md)

public function [shutdown](worker.shutdown.md)(): [bool](language.types.boolean.md)

public function [stack](worker.stack.md)([Threaded](class.threaded.md) `&$work`): [int](language.types.integer.md)

public function [unstack](worker.unstack.md)(): [int](language.types.integer.md)

/\* Métodos herdados \*/

public function [Thread::getCreatorId](thread.getcreatorid.md)(): [int](language.types.integer.md)

public static function [Thread::getCurrentThread](thread.getcurrentthread.md)(): [Thread](class.thread.md)

public static function [Thread::getCurrentThreadId](thread.getcurrentthreadid.md)(): [int](language.types.integer.md)

public function [Thread::getThreadId](thread.getthreadid.md)(): [int](language.types.integer.md)

public function [Thread::isJoined](thread.isjoined.md)(): [bool](language.types.boolean.md)

public function [Thread::isStarted](thread.isstarted.md)(): [bool](language.types.boolean.md)

public function [Thread::join](thread.join.md)(): [bool](language.types.boolean.md)

public function [Thread::start](thread.start.md)([int](language.types.integer.md) `$options` = ?): [bool](language.types.boolean.md)

}

## Índice

- [Worker::collect](worker.collect.md) — Coleta referências a tarefas concluídas
- [Worker::getStacked](worker.getstacked.md) — Obtém o tamanho da pilha restante
- [Worker::isShutdown](worker.isshutdown.md) — Detecção de estado
- [Worker::shutdown](worker.shutdown.md) — Desliga o trabalhador
- [Worker::stack](worker.stack.md) — Trabalho de empilhamento
- [Worker::unstack](worker.unstack.md) — Trabalho de desempilhamento

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

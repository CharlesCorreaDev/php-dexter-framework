# A classe Thread

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.thread.php

---

# A classe Thread

(PECL pthreads >= 2.0.0)

## Introdução

Quando o método start de um Thread é invocado, o código do método run será executado em Thread separado, em paralelo.

Após a execução do método run, o Thread será encerrado imediatamente e será unido ao Thread de criação no momento apropriado.

**Aviso**

Depender do mecanismo para determinar quando um Thread deve ingressar pode causar um comportamento indesejável; o programador deve ser explícito, sempre que possível.

## Resumo da classe

class **Thread**

extends
[Threaded](class.threaded.md)
implements
[Countable](class.countable.md), [Traversable](class.traversable.md), [ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [getCreatorId](thread.getcreatorid.md)(): [int](language.types.integer.md)

public static function [getCurrentThread](thread.getcurrentthread.md)(): [Thread](class.thread.md)

public static function [getCurrentThreadId](thread.getcurrentthreadid.md)(): [int](language.types.integer.md)

public function [getThreadId](thread.getthreadid.md)(): [int](language.types.integer.md)

public function [isJoined](thread.isjoined.md)(): [bool](language.types.boolean.md)

public function [isStarted](thread.isstarted.md)(): [bool](language.types.boolean.md)

public function [join](thread.join.md)(): [bool](language.types.boolean.md)

public function [start](thread.start.md)([int](language.types.integer.md) `$options` = ?): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [Threaded::chunk](threaded.chunk.md)([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$preserve`): [array](language.types.array.md)

public function [Threaded::count](threaded.count.md)(): [int](language.types.integer.md)

public function [Threaded::extend](threaded.extend.md)([string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

public function [Threaded::isRunning](thread.isrunning.md)(): [bool](language.types.boolean.md)

public function [Threaded::isTerminated](threaded.isterminated.md)(): [bool](language.types.boolean.md)

public function [Threaded::merge](threaded.merge.md)([mixed](language.types.mixed.md) `$from`, [bool](language.types.boolean.md) `$overwrite` = ?): [bool](language.types.boolean.md)

public function [Threaded::notify](threaded.notify.md)(): [bool](language.types.boolean.md)

public function [Threaded::notifyOne](threaded.notifyone.md)(): [bool](language.types.boolean.md)

public function [Threaded::pop](threaded.pop.md)(): [bool](language.types.boolean.md)

public function [Threaded::run](threaded.run.md)(): [void](language.types.void.md)

public function [Threaded::shift](threaded.shift.md)(): [mixed](language.types.mixed.md)

public function [Threaded::synchronized](threaded.synchronized.md)([Closure](class.closure.md) `$block`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [Threaded::wait](threaded.wait.md)([int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

}

## Índice

- [Thread::getCreatorId](thread.getcreatorid.md) — Identificação
- [Thread::getCurrentThread](thread.getcurrentthread.md) — Identificação
- [Thread::getCurrentThreadId](thread.getcurrentthreadid.md) — Identificação
- [Thread::getThreadId](thread.getthreadid.md) — Identificação
- [Thread::isJoined](thread.isjoined.md) — Detecção de estado
- [Thread::isStarted](thread.isstarted.md) — Detecção de estado
- [Thread::join](thread.join.md) — Sincronização
- [Thread::start](thread.start.md) — Execução

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

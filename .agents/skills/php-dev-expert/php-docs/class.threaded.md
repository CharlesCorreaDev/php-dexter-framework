# A classe Threaded

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.threaded.php

---

# A classe Threaded

(PECL pthreads >= 2.0.0)

## Introdução

Objetos threaded formam a base da capacidade do pthreads de executar código do usuário em paralelo; eles expõem métodos de sincronização e várias interfaces úteis.

Objetos threaded, mais importante ainda, fornecem segurança implícita para o programador; todas as operações no escopo do objeto são seguras.

## Resumo da classe

class **Threaded**
implements
[Collectable](class.collectable.md), [Traversable](class.traversable.md), [Countable](class.countable.md), [ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [chunk](threaded.chunk.md)([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$preserve`): [array](language.types.array.md)

public function [count](threaded.count.md)(): [int](language.types.integer.md)

public function [extend](threaded.extend.md)([string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

public function [isRunning](thread.isrunning.md)(): [bool](language.types.boolean.md)

public function [isTerminated](threaded.isterminated.md)(): [bool](language.types.boolean.md)

public function [merge](threaded.merge.md)([mixed](language.types.mixed.md) `$from`, [bool](language.types.boolean.md) `$overwrite` = ?): [bool](language.types.boolean.md)

public function [notify](threaded.notify.md)(): [bool](language.types.boolean.md)

public function [notifyOne](threaded.notifyone.md)(): [bool](language.types.boolean.md)

public function [pop](threaded.pop.md)(): [bool](language.types.boolean.md)

public function [run](threaded.run.md)(): [void](language.types.void.md)

public function [shift](threaded.shift.md)(): [mixed](language.types.mixed.md)

public function [synchronized](threaded.synchronized.md)([Closure](class.closure.md) `$block`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [wait](threaded.wait.md)([int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

}

## Índice

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

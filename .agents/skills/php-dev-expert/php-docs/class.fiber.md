# A classe Fiber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.fiber.php

---

# A classe Fiber

(PHP 8 >= 8.1.0)

## Introdução

Fibers representam funções interruptíveis de pilha completa. Fibers podem ser suspensas de qualquer lugar na pilha de chamadas,
pausando a execução dentro de Fiber até que ela seja retomada posteriormente.

## Resumo da classe

final
class ****Fiber****
{

/\* Métodos \*/

public function [\_\_construct](fiber.construct.md)([callable](language.types.callable.md) `$callback`)

public function [start](fiber.start.md)([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [resume](fiber.resume.md)([mixed](language.types.mixed.md) `$value` = **`null`**): [mixed](language.types.mixed.md)

public function [throw](fiber.throw.md)([Throwable](class.throwable.md) `$exception`): [mixed](language.types.mixed.md)

public function [getReturn](fiber.getreturn.md)(): [mixed](language.types.mixed.md)

public function [isStarted](fiber.isstarted.md)(): [bool](language.types.boolean.md)

public function [isSuspended](fiber.issuspended.md)(): [bool](language.types.boolean.md)

public function [isRunning](fiber.isrunning.md)(): [bool](language.types.boolean.md)

public function [isTerminated](fiber.isterminated.md)(): [bool](language.types.boolean.md)

public static function [suspend](fiber.suspend.md)([mixed](language.types.mixed.md) `$value` = **`null`**): [mixed](language.types.mixed.md)

public static function [getCurrent](fiber.getcurrent.md)(): [?](language.types.null.md)[Fiber](class.fiber.md)

}

## Veja também

[Visão geral de Fibers](language.fibers.md)

## Índice

- [Fiber::\_\_construct](fiber.construct.md) — Cria uma nova instância de Fiber
- [Fiber::start](fiber.start.md) — Inicia execução de uma Fibra
- [Fiber::resume](fiber.resume.md) — Retoma a execução de uma Fiber com um valor
- [Fiber::throw](fiber.throw.md) — Retoma a execução de uma Fiber com uma exceção
- [Fiber::getReturn](fiber.getreturn.md) — Obtém o valor retornado pela Fiber
- [Fiber::isStarted](fiber.isstarted.md) — Determina se uma Fiber foi iniciada
- [Fiber::isSuspended](fiber.issuspended.md) — Determina se uma Fiber está suspensa
- [Fiber::isRunning](fiber.isrunning.md) — Determina se a Fiber está em execução
- [Fiber::isTerminated](fiber.isterminated.md) — Determina se a Fiber terminou
- [Fiber::suspend](fiber.suspend.md) — Suspende a execução da Fiber atual
- [Fiber::getCurrent](fiber.getcurrent.md) — Obtém a instância de Fiber sendo executada no momento

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

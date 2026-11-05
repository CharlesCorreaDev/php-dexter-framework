# A classe ReflectionFiber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflectionfiber.php

---

# A classe ReflectionFiber

(PHP 8 >= 8.1.0)

## Introdução

## Resumo da classe

final
class ****ReflectionFiber****
{

/\* Métodos \*/

public function [\_\_construct](reflectionfiber.construct.md)([Fiber](class.fiber.md) `$fiber`)

public function [getCallable](reflectionfiber.getcallable.md)(): [callable](language.types.callable.md)

public function [getExecutingFile](reflectionfiber.getexecutingfile.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getExecutingLine](reflectionfiber.getexecutingline.md)(): [?](language.types.null.md)[int](language.types.integer.md)

public function [getFiber](reflectionfiber.getfiber.md)(): [Fiber](class.fiber.md)

public function [getTrace](reflectionfiber.gettrace.md)([int](language.types.integer.md) `$options` = **`DEBUG_BACKTRACE_PROVIDE_OBJECT`**): [array](language.types.array.md)

}

## Índice

- [ReflectionFiber::\_\_construct](reflectionfiber.construct.md) — Constrói um objeto ReflectionFiber
- [ReflectionFiber::getCallable](reflectionfiber.getcallable.md) — Obtém o callable usado para criar o Fiber
- [ReflectionFiber::getExecutingFile](reflectionfiber.getexecutingfile.md) — Obtém o nome do arquivo do ponto de execução atual
- [ReflectionFiber::getExecutingLine](reflectionfiber.getexecutingline.md) — Obtém o número da linha do ponto de execução atual
- [ReflectionFiber::getFiber](reflectionfiber.getfiber.md) — Obtém a instância do Fiber refletida
- [ReflectionFiber::getTrace](reflectionfiber.gettrace.md) — Obtém o rastreamento do ponto de execução atual

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

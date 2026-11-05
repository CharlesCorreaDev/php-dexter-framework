# Obtém o callable usado para criar o Fiber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfiber.getcallable.php

---

# ReflectionFiber::getCallable

(PHP 8 >= 8.1.0)

ReflectionFiber::getCallable — Obtém o callable usado para criar o Fiber

### Descrição

public function **ReflectionFiber::getCallable**(): [callable](language.types.callable.md)

Retorna o callable usado para construir o [Fiber](class.fiber.md). Se o Fiber tiver terminado, um
[Error](class.error.md) é lançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O callable usado para criar o [Fiber](class.fiber.md).

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

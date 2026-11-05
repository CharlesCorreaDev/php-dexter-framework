# Obtém o número da linha do ponto de execução atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfiber.getexecutingline.php

---

# ReflectionFiber::getExecutingLine

(PHP 8 >= 8.1.0)

ReflectionFiber::getExecutingLine — Obtém o número da linha do ponto de execução atual

### Descrição

public function **ReflectionFiber::getExecutingLine**(): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o número da linha do ponto de execução atual no [Fiber](class.fiber.md) refletido.
Se o Fiber refletido for usado fora de uma função definida pelo usuário, **`null`** é retornado.
Se o Fiber não tiver sido iniciado ou tiver terminado, um [Error](class.error.md) será lançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número da linha do ponto de execução atual no Fiber.

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

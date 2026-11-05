# Suspende a execução da Fiber atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.suspend.php

---

# Fiber::suspend

(PHP 8 >= 8.1.0)

Fiber::suspend — Suspende a execução da Fiber atual

### Descrição

public static function **Fiber::suspend**([mixed](language.types.mixed.md) `$value` = **`null`**): [mixed](language.types.mixed.md)

Suspende a execução da Fiber atual. O valor fornecido a este método será retornado da chamada a
[Fiber::start()](fiber.start.md), [Fiber::resume()](fiber.resume.md) ou
[Fiber::throw()](fiber.throw.md) que mudou a execução para a Fiber atual.

Quando a Fiber é retomada, este método retorna o valor fornecido a [Fiber::resume()](fiber.resume.md).
Se a Fiber é retomada usando [Fiber::throw()](fiber.throw.md), a exceção fornecida àquele método será
disparada a partir da chamada a este método.

Se este método for chamado de fora de uma Fiber, uma exceção [FiberError](class.fibererror.md) será disparada.

### Parâmetros

`value`
:   O valor a retornar da chamada a [Fiber::start()](fiber.start.md),
    [Fiber::resume()](fiber.resume.md) ou [Fiber::throw()](fiber.throw.md) que mudou a execução para
    a Fiber atual.

### Valor Retornado

O valor fornecido a [Fiber::resume()](fiber.resume.md).

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

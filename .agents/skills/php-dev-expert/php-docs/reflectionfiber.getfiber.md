# Obtém a instância do Fiber refletida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfiber.getfiber.php

---

# ReflectionFiber::getFiber

(PHP 8 >= 8.1.0)

ReflectionFiber::getFiber — Obtém a instância do Fiber refletida

### Descrição

public function **ReflectionFiber::getFiber**(): [Fiber](class.fiber.md)

Retorna a instância [Fiber](class.fiber.md) que está sendo refletida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A instância [Fiber](class.fiber.md) sendo refletida.

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

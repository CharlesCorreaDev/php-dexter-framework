# Determina se a Fiber está em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.isrunning.php

---

# Fiber::isRunning

(PHP 8 >= 8.1.0)

Fiber::isRunning — Determina se a Fiber está em execução

### Descrição

public function **Fiber::isRunning**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** apenas se a Fiber estiver em execução. Um Fiber é considerado em execução após uma chamada a
[Fiber::start()](fiber.start.md), [Fiber::resume()](fiber.resume.md) ou
[Fiber::throw()](fiber.throw.md) que ainda não retornaram.
Retorna **`false`** se a Fiber não está em execução.

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

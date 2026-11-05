# Cria uma nova instância de Fiber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.construct.php

---

# Fiber::\_\_construct

(PHP 8 >= 8.1.0)

Fiber::\_\_construct — Cria uma nova instância de Fiber

### Descrição

public function **Fiber::\_\_construct**([callable](language.types.callable.md) `$callback`)

### Parâmetros

`callback`
:   O [callable](language.types.callable.md) a ser invocado ao iniciar a Fiber.
    Argumentos informados a [Fiber::start()](fiber.start.md) serão
    fornecidos como argumentos ao callable informado.

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

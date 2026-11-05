# Obtém o valor retornado pela Fiber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.getreturn.php

---

# Fiber::getReturn

(PHP 8 >= 8.1.0)

Fiber::getReturn — Obtém o valor retornado pela Fiber

### Descrição

public function **Fiber::getReturn**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor retornado pela [callable](language.types.callable.md) fornecida a [Fiber::\_\_construct()](fiber.construct.md).
Se a Fiber não retornar um valor, por não ter iniciado ou terminado, ou por ter disparado
uma exceção, uma [FiberError](class.fibererror.md) será disparada.

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

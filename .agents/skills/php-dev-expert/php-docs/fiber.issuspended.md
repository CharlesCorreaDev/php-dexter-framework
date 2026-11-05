# Determina se uma Fiber está suspensa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.issuspended.php

---

# Fiber::isSuspended

(PHP 8 >= 8.1.0)

Fiber::isSuspended — Determina se uma Fiber está suspensa

### Descrição

public function **Fiber::isSuspended**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se uma Fiber está atualmente suspensa; caso contrário retorna **`false`**.

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

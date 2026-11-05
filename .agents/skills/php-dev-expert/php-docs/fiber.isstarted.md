# Determina se uma Fiber foi iniciada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.isstarted.php

---

# Fiber::isStarted

(PHP 8 >= 8.1.0)

Fiber::isStarted — Determina se uma Fiber foi iniciada

### Descrição

public function **Fiber::isStarted**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** apenas se a Fiber foi iniciada; caso contrário retorna **`false`**.

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

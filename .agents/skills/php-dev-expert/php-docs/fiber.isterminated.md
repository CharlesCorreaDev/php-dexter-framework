# Determina se a Fiber terminou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.isterminated.php

---

# Fiber::isTerminated

(PHP 8 >= 8.1.0)

Fiber::isTerminated — Determina se a Fiber terminou

### Descrição

public function **Fiber::isTerminated**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** apenas após a Fiber ter terminado, ou retornando da execução ou disparando uma exceção;
caso contrário retorna **`false`**.

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

# Obtém a instância de Fiber sendo executada no momento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fiber.getcurrent.php

---

# Fiber::getCurrent

(PHP 8 >= 8.1.0)

Fiber::getCurrent — Obtém a instância de Fiber sendo executada no momento

### Descrição

public static function **Fiber::getCurrent**(): [?](language.types.null.md)[Fiber](class.fiber.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a instância de [Fiber](class.fiber.md) sendo executada no momento ou **`null`** se este método é chamado
do lado de fora de uma Fiber.

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

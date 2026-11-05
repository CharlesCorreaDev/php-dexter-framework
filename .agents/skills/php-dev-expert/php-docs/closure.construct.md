# Construtor que desabilita a instanciação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/closure.construct.php

---

# Closure::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Closure::\_\_construct — Construtor que desabilita a instanciação

### Descrição

private function **Closure::\_\_construct**()

Este método existe somente para desabilitar a instanciação da classe
[Closure](class.closure.md). Objetos desta classe são criados
como descrito na página de
[funções anônimas](functions.anonymous.md).

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [Funções anônimas](functions.anonymous.md)

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

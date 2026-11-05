# Obtém o rastreamento de pilha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.gettrace.php

---

# Throwable::getTrace

(PHP 7, PHP 8)

Throwable::getTrace — Obtém o rastreamento de pilha

### Descrição

public function **Throwable::getTrace**(): [array](language.types.array.md)

Obtém o rastreamento de pilha como um [array](language.types.array.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o rastreamento de pilha como um [array](language.types.array.md) no mesmo formato de
[debug\_backtrace()](function.debug-backtrace.md).

### Veja também

- [Exception::getTrace()](exception.gettrace.md) - Obtém a stack trace

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

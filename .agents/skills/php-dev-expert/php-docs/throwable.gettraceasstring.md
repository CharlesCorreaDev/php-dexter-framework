# Obtém o rastreamento de pilha como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.gettraceasstring.php

---

# Throwable::getTraceAsString

(PHP 7, PHP 8)

Throwable::getTraceAsString — Obtém o rastreamento de pilha como uma string

### Descrição

public function **Throwable::getTraceAsString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o rastreamento de pilha como uma string.

### Veja também

- [Exception::getTraceAsString()](exception.gettraceasstring.md) - Obtém a stack trace como uma string

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

# Função de finalização da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-register-shutdown.php

---

# session\_register\_shutdown

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

session\_register\_shutdown — Função de finalização da sessão

### Descrição

function **session\_register\_shutdown**(): [void](language.types.void.md)

Registra [session\_write\_close()](function.session-write-close.md) como uma função de finalização.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Dispara um **`E_WARNING`** se o processo de registrar a função
falhar.

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

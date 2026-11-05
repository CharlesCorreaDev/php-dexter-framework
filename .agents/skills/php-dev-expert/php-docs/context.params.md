# Listagem de parâmetros de contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.params.php

---

# Parâmetros de contexto

Parâmetros de contexto — Listagem de parâmetros de contexto

### Descrição

Estes `parâmetros` podem ser definidos em um `contexto`
usando a função [stream\_context\_set\_params()](function.stream-context-set-params.md).

### Parâmetros

`notification` [callable](language.types.callable.md)
:   Um [callable](language.types.callable.md) pode ser chamado quando um evento ocorre em um fluxo.

    Veja [stream\_notification\_callback](function.stream-notification-callback.md) para mais detalhes.

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

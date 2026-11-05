# Define a prioridade do evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.setpriority.php

---

# Event::setPriority

(PECL event >= 1.2.6-beta)

Event::setPriority — Define a prioridade do evento

### Descrição

public
function **Event::setPriority**(
[int](language.types.integer.md) `$priority`
): [bool](language.types.boolean.md)

Define a prioridade do evento.

### Parâmetros

`priority`
:   A prioridade do evento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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

# Detecta se o evento está pendente ou agendado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.pending.php

---

# Event::pending

(PECL event >= 1.2.6-beta)

Event::pending — Detecta se o evento está pendente ou agendado

### Descrição

public
function **Event::pending**(
[int](language.types.integer.md) `$flags`
): [bool](language.types.boolean.md)

Detecta se o evento está pendente ou agendado.

### Parâmetros

`flags`
:   Uma das seguintes constantes ou uma composição delas:
    **`Event::READ`**,
    **`Event::WRITE`**,
    **`Event::TIMEOUT`**,
    **`Event::SIGNAL`**.

### Valor Retornado

Retorna **`true`** se o evento estiver pendente ou agendado. Caso contrário, **`false`**.

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

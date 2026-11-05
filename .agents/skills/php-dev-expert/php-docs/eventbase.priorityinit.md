# Define o número de prioridades por base de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.priorityinit.php

---

# EventBase::priorityInit

(PECL event >= 1.2.6-beta)

EventBase::priorityInit — Define o número de prioridades por base de eventos

### Descrição

public
function **EventBase::priorityInit**(
[int](language.types.integer.md) `$n_priorities`
): [bool](language.types.boolean.md)

Define o número de prioridades por base de eventos.

### Parâmetros

`n_priorities`
:   O número de prioridades por base de eventos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Event::setPriority()](event.setpriority.md) - Define a prioridade do evento

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

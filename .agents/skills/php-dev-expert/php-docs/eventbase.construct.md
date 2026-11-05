# Constrói objeto EventBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.construct.php

---

# EventBase::\_\_construct

(PECL event >= 1.2.6-beta)

EventBase::\_\_construct — Constrói objeto EventBase

### Descrição

public
function **EventBase::\_\_construct**(
[EventConfig](class.eventconfig.md) `$cfg`
 = ?)

Constrói objeto EventBase.

### Parâmetros

`cfg`
:   Objeto
    [EventConfig](class.eventconfig.md)
    opcional.

### Erros/Exceções

Se [EventBase](class.eventbase.md) não puder ser construído com a configuração informada,
uma exceção [EventException](class.eventexception.md) será lançada.

### Veja também

- [EventConfig](class.eventconfig.md)

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

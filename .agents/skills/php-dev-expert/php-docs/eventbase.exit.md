# Para de despachar eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.exit.php

---

# EventBase::exit

(PECL event >= 1.2.6-beta)

EventBase::exit — Para de despachar eventos

### Descrição

public
function **EventBase::exit**(
[float](language.types.float.md) `$timeout`
 = ?): [bool](language.types.boolean.md)

Informa à base do evento para parar opcionalmente após determinado número de segundos.

### Parâmetros

`timeout`
:   Número opcional de segundos após o qual a base de eventos deve parar
    de despachar eventos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBase::stop()](eventbase.stop.md) - Informa ao event\_base para parar de despachar eventos

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

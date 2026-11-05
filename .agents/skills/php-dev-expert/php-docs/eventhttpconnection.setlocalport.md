# Define a porta local a partir da qual as conexões são feitas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setlocalport.php

---

# EventHttpConnection::setLocalPort

(PECL event >= 1.2.6-beta)

EventHttpConnection::setLocalPort — Define a porta local a partir da qual as conexões são feitas

### Descrição

public
function **EventHttpConnection::setLocalPort**(
[int](language.types.integer.md) `$port`
): [void](language.types.void.md)

Define a porta local a partir da qual as conexões são feitas.

### Parâmetros

`port`
:   O número da porta.

### Valor Retornado

### Veja também

- [EventHttpConnection::setLocalAddress()](eventhttpconnection.setlocaladdress.md) - Define o endereço IP a partir do qual as conexões HTTP são feitas

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

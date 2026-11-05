# Define o endereço IP a partir do qual as conexões HTTP são feitas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setlocaladdress.php

---

# EventHttpConnection::setLocalAddress

(PECL event >= 1.2.6-beta)

EventHttpConnection::setLocalAddress — Define o endereço IP a partir do qual as conexões HTTP são feitas

### Descrição

public
function **EventHttpConnection::setLocalAddress**(
[string](language.types.string.md) `$address`
): [void](language.types.void.md)

Define o endereço IP a partir do qual as conexões HTTP são feitas.

### Parâmetros

`address`
:   O endereço IP a partir do qual as conexões HTTP são feitas.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpConnection::setLocalPort()](eventhttpconnection.setlocalport.md) - Define a porta local a partir da qual as conexões são feitas

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

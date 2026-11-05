# Obtém o endereço remoto e a porta associados à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.getpeer.php

---

# EventHttpConnection::getPeer

(PECL event >= 1.2.6-beta)

EventHttpConnection::getPeer — Obtém o endereço remoto e a porta associados à conexão

### Descrição

public
function **EventHttpConnection::getPeer**(
[string](language.types.string.md) `&$address`
, 
[int](language.types.integer.md) `&$port`
): [void](language.types.void.md)

Obtém o endereço remoto e a porta associados à conexão.

### Parâmetros

`address`
:   Endereço do par.

`port`
:   Porta do par.

### Valor Retornado

Nenhum valor é retornado.

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

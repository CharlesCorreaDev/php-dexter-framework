# Define o tempo limite para a conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.settimeout.php

---

# EventHttpConnection::setTimeout

(PECL event >= 1.2.6-beta)

EventHttpConnection::setTimeout — Define o tempo limite para a conexão

### Descrição

public
function **EventHttpConnection::setTimeout**(
[int](language.types.integer.md) `$timeout`
): [void](language.types.void.md)

Define o tempo limite para a conexão.

### Parâmetros

`timeout`
:   Tempo limite em segundos.

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

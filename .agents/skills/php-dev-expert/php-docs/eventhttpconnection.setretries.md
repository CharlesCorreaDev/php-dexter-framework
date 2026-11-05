# Define o limite de novas tentativas para a conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setretries.php

---

# EventHttpConnection::setRetries

(PECL event >= 1.2.6-beta)

EventHttpConnection::setRetries — Define o limite de novas tentativas para a conexão

### Descrição

public
function **EventHttpConnection::setRetries**(
[int](language.types.integer.md) `$retries`
): [void](language.types.void.md)

Define o limite de novas tentativas para a conexão.

### Parâmetros

`retries`
:   O limite de repetição.
    **`-1`**
    significa infinito.

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

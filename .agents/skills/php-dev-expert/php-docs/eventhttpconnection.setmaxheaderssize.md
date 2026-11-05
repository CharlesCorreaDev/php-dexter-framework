# Define o tamanho máximo do cabeçalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setmaxheaderssize.php

---

# EventHttpConnection::setMaxHeadersSize

(PECL event >= 1.2.6-beta)

EventHttpConnection::setMaxHeadersSize — Define o tamanho máximo do cabeçalho

### Descrição

public
function **EventHttpConnection::setMaxHeadersSize**(
[string](language.types.string.md) `$max_size`
): [void](language.types.void.md)

Define o tamanho máximo do cabeçalho para a conexão.

### Parâmetros

`max_size`
:   O tamanho máximo do cabeçalho em bytes.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpConnection::setMaxBodySize()](eventhttpconnection.setmaxbodysize.md) - Define o tamanho máximo do corpo para a conexão

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

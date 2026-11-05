# Define o tamanho máximo do corpo para a conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.setmaxbodysize.php

---

# EventHttpConnection::setMaxBodySize

(PECL event >= 1.2.6-beta)

EventHttpConnection::setMaxBodySize — Define o tamanho máximo do corpo para a conexão

### Descrição

public
function **EventHttpConnection::setMaxBodySize**(
[string](language.types.string.md) `$max_size`
): [void](language.types.void.md)

Define o tamanho máximo do corpo para a conexão.

### Parâmetros

`max_size`
:   O tamanho máximo do corpo em bytes.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpConnection::setMaxHeadersSize()](eventhttpconnection.setmaxheaderssize.md) - Define o tamanho máximo do cabeçalho

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

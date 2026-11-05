# Remove sinônimo do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.removeserveralias.php

---

# EventHttp::removeServerAlias

(PECL event >= 1.4.0-beta)

EventHttp::removeServerAlias — Remove sinônimo do servidor

### Descrição

public
function **EventHttp::removeServerAlias**(
[string](language.types.string.md) `$alias`
): [bool](language.types.boolean.md)

Remove sinônimo do servidor adicionado com
[EventHttp::addServerAlias()](eventhttp.addserveralias.md)

### Parâmetros

`alias`
:   O sinônimo a remover.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventHttp::addServerAlias()](eventhttp.addserveralias.md) - Adiciona um sinônimo de servidor ao objeto do servidor HTTP

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

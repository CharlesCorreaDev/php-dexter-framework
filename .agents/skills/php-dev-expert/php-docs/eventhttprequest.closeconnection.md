# Fecha a conexão HTTP associada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.closeconnection.php

---

# EventHttpRequest::closeConnection

(PECL event >= 1.8.0)

EventHttpRequest::closeConnection — Fecha a conexão HTTP associada

### Descrição

public
function **EventHttpRequest::closeConnection**(): [void](language.types.void.md)

Fecha a conexão HTTP associada à solicitação.

### Parâmetros

Esta função não possui parâmetros.

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

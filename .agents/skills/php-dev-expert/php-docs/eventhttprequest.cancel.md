# Cancela uma requisição HTTP pendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.cancel.php

---

# EventHttpRequest::cancel

(PECL event >= 1.4.0-beta)

EventHttpRequest::cancel — Cancela uma requisição HTTP pendente

### Descrição

public
function **EventHttpRequest::cancel**(): [void](language.types.void.md)

Cancela uma requisição HTTP pendente.

Cancela uma requisição HTTP em andamento. A função de retorno associada a esta solicitação
não é executada e o objeto da solicitação é liberado. Se a requisição estiver
sendo processada no momento, por exemplo, em andamento, o objeto
[EventHttpConnection](class.eventhttpconnection.md)
correspondente será redefinido.

Uma requisição não pode ser cancelada se sua função de retorno já tiver sido executada. Uma requisição
pode ser cancelada reentrantemente de sua função de retorno em partes.

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

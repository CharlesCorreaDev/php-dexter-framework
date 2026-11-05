# Envia a solicitação e aguarda uma resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-send-request.php

---

# radius\_send\_request

(PECL radius >= 1.1.0)

radius\_send\_request — Envia a solicitação e aguarda uma resposta

### Descrição

function **radius\_send\_request**([resource](language.types.resource.md) `$radius_handle`): [int](language.types.integer.md)

Após a solicitação Radius ser construída, ela é enviada por
**radius\_send\_request()**.

A função **radius\_send\_request()** envia a solicitação e
aguarda uma resposta válida, repetindo as tentativas nos servidores definidos em rodízio
conforme necessário.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

### Valor Retornado

Se uma resposta válida for recebida, **radius\_send\_request()**
retorna o código Radius que especifica o tipo de resposta. Este será
normalmente **`RADIUS_ACCESS_ACCEPT`**,
**`RADIUS_ACCESS_REJECT`** ou
**`RADIUS_ACCESS_CHALLENGE`**. Se nenhuma resposta válida for
recebida, **radius\_send\_request()** retornará **`false`**.

### Veja também

- [radius\_create\_request()](function.radius-create-request.md) - Cria solicitação de contabilidade ou de autenticação

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

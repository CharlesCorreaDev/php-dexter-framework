# Define quais métodos HTTP são suportados em solicitações aceitas por este servidor e passadas para funções de retorno do usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.setallowedmethods.php

---

# EventHttp::setAllowedMethods

(PECL event >= 1.4.0-beta)

EventHttp::setAllowedMethods — Define quais métodos HTTP são suportados em solicitações aceitas por este servidor e passadas para funções de retorno do usuário

### Descrição

public
function **EventHttp::setAllowedMethods**(
[int](language.types.integer.md) `$methods`
): [void](language.types.void.md)

Define quais métodos HTTP são suportados em solicitações aceitas por este
servidor e passadas para funções de retorno do usuário.

Se não forem suportados, eles gerarão uma
resposta
`"405 Method not
allowed"`.

Por padrão, inclui os seguintes métodos:
`GET`,
`POST`,
`HEAD`,
`PUT` e
`DELETE`.
Consulte
as constantes
`EventHttpRequest::CMD_*`.

### Parâmetros

`methods`
:   Uma máscara de bits das constantes
    [`EventHttpRequest::CMD_*`](class.eventhttprequest.md#eventhttprequest.constants).

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

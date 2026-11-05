# Define parâmetros para um fluxo/empacotador/contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-set-params.php

---

# stream\_context\_set\_params

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_context\_set\_params — Define parâmetros para um fluxo/empacotador/contexto

### Descrição

function **stream\_context\_set\_params**([resource](language.types.resource.md) `$context`, [array](language.types.array.md) `$params`): [true](language.types.singleton.md)

Define parâmetros para o contexto especificado.

### Parâmetros

`context`
:   O fluxo ou contexto ao qual os parâmetros devem ser aplicados.

`params`
:   Um array associativo de parâmetros a serem definidos no seguinte formato:
    `$params['nome_parametro'] = "valor_parametro";`.

    **Parâmetros suportados**

    | Parâmetro | Propósito |
    | --- | --- |
    | `notification` | Nome da função de retorno de chamada definida pelo usuário a ser chamada sempre que um fluxo ativar uma notificação. Suportada apenas para empacotadores de fluxo [http://](wrappers.http.md) e [ftp://](wrappers.ftp.md). |
    | `options` | Array de opções como em [opções de contexto e parâmetros](context.md). |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [stream\_notification\_callback()](function.stream-notification-callback.md) - Uma função de chamada de retorno para o parâmetro de contexto de notification

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

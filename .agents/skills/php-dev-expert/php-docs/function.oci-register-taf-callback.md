# Registra uma função de retorno definida pelo usuário para o TAF do Oracle Database

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-register-taf-callback.php

---

# oci\_register\_taf\_callback

(PHP 7.0 >= 7.0.21, PHP 8, PHP 7 >= 7.1.7, PHP 8, PECL OCI8 >= 2.1.7)

oci\_register\_taf\_callback — Registra uma função de retorno definida pelo usuário para o TAF do Oracle Database

### Descrição

function **oci\_register\_taf\_callback**([resource](language.types.resource.md) `$connection`, [?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Registra uma função de retorno definida pelo usuário para a conexão `connection`.
Se a conexão de `connection` falhar devido a uma falha de instância ou de rede,
a função de retorno registrada será invocada várias vezes durante
o failover. Consulte [Suporte para Failover Transparente
de Aplicativos (TAF) OCI8](oci8.taf.md) para obter informações.

Quando **oci\_register\_taf\_callback()** é chamada várias vezes,
cada registro substitui o anterior.

Use [oci\_unregister\_taf\_callback()](function.oci-unregister-taf-callback.md) para cancelar explicitamente o registro de uma
função de retorno definida pelo usuário.

O registro de função de retorno do TAF NÃO será salvo em
conexões persistentes, portanto, a função de retorno precisa ser registrada novamente para
uma nova conexão persistente.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle.

`callback`
:   Uma função de retorno definida pelo usuário para registro no Oracle TAF. Pode ser uma
    string com o nome da função ou um Closure (função anônima).

    A interface de uma função de retorno definida pelo usuário do TAF é a seguinte:

    function **userCallbackFn**([resource](language.types.resource.md) `$connection`, [int](language.types.integer.md) `$event`, [int](language.types.integer.md) `$type`): [int](language.types.integer.md)

    Veja a descrição do parâmetro e um exemplo na página [Suporte ao Failover Transparente de Aplicativos (TAF) do OCI8](oci8.taf.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [oci\_unregister\_taf\_callback()](function.oci-unregister-taf-callback.md) - Cancelar o registro de uma função de retorno definida pelo usuário para o TAF do Oracle Database

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

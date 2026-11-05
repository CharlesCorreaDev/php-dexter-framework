# Cancelar o registro de uma função de retorno definida pelo usuário para o TAF do Oracle Database

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-unregister-taf-callback.php

---

# oci\_unregister\_taf\_callback

(PHP 7.0 >= 7.0.23, PHP 8, PHP 7 >= 7.1.9, PHP 8, PECL OCI8 >= 2.1.7)

oci\_unregister\_taf\_callback — Cancelar o registro de uma função de retorno definida pelo usuário para o TAF do Oracle Database

### Descrição

function **oci\_unregister\_taf\_callback**([resource](language.types.resource.md) `$connection`): [bool](language.types.boolean.md)

Cancela o registro da função de retorno definida pelo usuário registrada em
`connection` por [oci\_register\_taf\_callback()](function.oci-register-taf-callback.md). Consulte
[Suporte a Failover Transparente de Aplicativos (TAF) OCI8](oci8.taf.md) para obter mais informações.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [oci\_register\_taf\_callback()](function.oci-register-taf-callback.md) - Registra uma função de retorno definida pelo usuário para o TAF do Oracle Database

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

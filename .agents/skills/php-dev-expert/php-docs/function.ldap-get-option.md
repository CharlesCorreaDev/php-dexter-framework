# Obtém o valor atual para a opção informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-get-option.php

---

# ldap\_get\_option

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ldap\_get\_option — Obtém o valor atual para a opção informada

### Descrição

function **ldap\_get\_option**([?](language.types.null.md)[LDAP\Connection](class.ldap-connection.md) `$ldap`, [int](language.types.integer.md) `$option`, [array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md) `&$value` = **`null`**): [bool](language.types.boolean.md)

Obtém o valor da opção especificada e armazena em `value`.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md) retornada por
    [ldap\_connect()](function.ldap-connect.md), para obter a opção para essa conexão,
    ou **`null`** para obter a opção global.

`option`
:   O parâmetro `option` pode ser um destes valores:

    | Opção | Tipo | desde |
    | --- | --- | --- |
    | **`LDAP_OPT_DEREF`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_SIZELIMIT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_TIMELIMIT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_NETWORK_TIMEOUT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_PROTOCOL_VERSION`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_ERROR_NUMBER`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_DIAGNOSTIC_MESSAGE`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_REFERRALS`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_RESTART`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_HOST_NAME`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_ERROR_STRING`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_MATCHED_DN`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_SERVER_CONTROLS`** | [array](language.types.array.md) |  |
    | **`LDAP_OPT_CLIENT_CONTROLS`** | [array](language.types.array.md) |  |
    | **`LDAP_OPT_X_KEEPALIVE_IDLE`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_KEEPALIVE_PROBES`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_KEEPALIVE_INTERVAL`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CACERTDIR`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CACERTFILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CERTFILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CIPHER_SUITE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CRLCHECK`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CRL_NONE`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CRL_PEER`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CRL_ALL`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_CRLFILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_DHFILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_KEYFILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_PACKAGE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_PROTOCOL_MIN`** | [int](language.types.integer.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_PROTOCOL_MAX`** | [int](language.types.integer.md) | 8.4 |
    | **`LDAP_OPT_X_TLS_RANDOM_FILE`** | [string](language.types.string.md) | 7.1 |
    | **`LDAP_OPT_X_TLS_REQUIRE_CERT`** | [int](language.types.integer.md) |  |

`value`
:   Esta variável por referência irá armazenar o valor da opção informada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `ldap` agora pode ser nulo. |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Examples

**Exemplo #1 Verifica a versão do protocolo**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório
if (ldap_get_option($ds, LDAP_OPT_PROTOCOL_VERSION, $version)) {
    echo "Usando protocolo versão $version\n";
} else {
    echo "Não foi possível determinar a versão do protocolo\n";
}
?>
```

### Notas

> **Nota**:
>
> Esta função está disponível somente ao usar OpenLDAP 2.x.x OU Netscape
> Directory SDK x.x.

### Veja também

- [ldap\_set\_option()](function.ldap-set-option.md) - Define o valor para a opção informada

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

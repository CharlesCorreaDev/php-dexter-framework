# Define o valor para a opção informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-set-option.php

---

# ldap\_set\_option

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

ldap\_set\_option — Define o valor para a opção informada

### Descrição

function **ldap\_set\_option**([?](language.types.null.md)[LDAP\Connection](class.ldap-connection.md) `$ldap`, [int](language.types.integer.md) `$option`, [array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

Define, para a opção especificada, o valor informado em `value`.

> **Nota**:
>
> Opções relacionadas a TLS (`LDAP_OPT_X_TLS_*`) precisam ser
> definidas globalmente passando **`null`** como `ldap`,
> porque o contexto TLS é inicializado antes que o estado por conexão
> esteja disponível. Essas opções também precisam ser definidas antes de chamar
> [ldap\_bind()](function.ldap-bind.md).

### Parâmetros

`ldap`
:   Pode ser uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por
    [ldap\_connect()](function.ldap-connect.md), para definir a opção para essa conexão,
    ou **`null`** para definir a opção de forma global.

`option`
:   O parâmetro `option` pode ser uma das constantes:

    | Opção | Tipo | Disponível desde |
    | --- | --- | --- |
    | **`LDAP_OPT_DEREF`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_SIZELIMIT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_TIMELIMIT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_NETWORK_TIMEOUT`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_PROTOCOL_VERSION`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_ERROR_NUMBER`** | [int](language.types.integer.md) |  |
    | **`LDAP_OPT_REFERRALS`** | [bool](language.types.boolean.md) |  |
    | **`LDAP_OPT_RESTART`** | [bool](language.types.boolean.md) |  |
    | **`LDAP_OPT_HOST_NAME`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_ERROR_STRING`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_DIAGNOSTIC_MESSAGE`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_MATCHED_DN`** | [string](language.types.string.md) |  |
    | **`LDAP_OPT_SERVER_CONTROLS`** | [array](language.types.array.md) |  |
    | **`LDAP_OPT_CLIENT_CONTROLS`** | [array](language.types.array.md) |  |
    | **`LDAP_OPT_X_KEEPALIVE_IDLE`** | [int](language.types.integer.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_KEEPALIVE_PROBES`** | [int](language.types.integer.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_KEEPALIVE_INTERVAL`** | [int](language.types.integer.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CACERTDIR`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CACERTFILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CERTFILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CIPHER_SUITE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CRLCHECK`** | [int](language.types.integer.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_CRLFILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_DHFILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_KEYFILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_PROTOCOL_MIN`** | [int](language.types.integer.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_PROTOCOL_MAX`** | [int](language.types.integer.md) | PHP 8.4.0 |
    | **`LDAP_OPT_X_TLS_RANDOM_FILE`** | [string](language.types.string.md) | PHP 7.1.0 |
    | **`LDAP_OPT_X_TLS_REQUIRE_CERT`** | [int](language.types.integer.md) | PHP 7.0.5 |

    **`LDAP_OPT_SERVER_CONTROLS`** e
    **`LDAP_OPT_CLIENT_CONTROLS`** requerem uma lista de
    controles, que significa que o valor precisa ser um array de controles. Um
    controle consiste de um *oid* identificando o controle,
    um *valor* opcional, e um sinalizador opcional para
    *criticalidade*. No PHP, um controle é dado por um
    array contendo um elemento com a chave *oid*
    e um valor string, e dois elementos opcionais. Os elementos
    opcionais são a chave *value* com um valor string
    e a chave *iscritical* com valor booleano.
    O padrão de *iscritical* é ***`false`***
    se não fornecido. Consulte [» draft-ietf-ldapext-ldap-c-api-xx.txt](https://www.ietf.org/proceedings/50/I-D/ldapext-ldap-c-api-05.txt)
    para detalhes. Consulte também o segundo exemplo abaixo.

    > **Nota**:
    >
    > Todas as opções TLS devem ser definidas globalmente antes de
    > [ldap\_connect()](function.ldap-connect.md) para conexão ldaps ou
    > para a conexão antes de [ldap\_start\_tls()](function.ldap-start-tls.md).

`value`
:   O novo valor para a opção especificada em `option`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Examples

**Exemplo #1 Define a versão de protocolo**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório
if (ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3)) {
    echo "Usando LDAPv3";
} else {
    echo "Falha ao definir protocolo para versão 3";
}
?>
```

**Exemplo #2 Set server controls**

```
<?php
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório
// controle sem valor
$ctrl1 = array("oid" => "1.2.752.58.10.1", "iscritical" => true);
// o padrão de "iscritical" é FALSE
$ctrl2 = array("oid" => "1.2.752.58.1.10", "value" => "magic");
// tente definir os dois controles
if (!ldap_set_option($ds, LDAP_OPT_SERVER_CONTROLS, array($ctrl1, $ctrl2))) {
    echo "Falha ao definir controles do servidor";
}
?>
```

### Notas

> **Nota**:
>
> Esta função está disponível somente ao usar OpenLDAP 2.x.x OU Netscape
> Directory SDK x.x.

### Veja também

- [ldap\_get\_option()](function.ldap-get-option.md) - Obtém o valor atual para a opção informada

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

# Realiza uma operação estendida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-exop.php

---

# ldap\_exop

(PHP 7 >= 7.2.0, PHP 8)

ldap\_exop — Realiza uma operação estendida

### Descrição

function **ldap\_exop**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$request_oid`,  
    [?](language.types.null.md)[string](language.types.string.md) `$request_data` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**,  
    [string](language.types.string.md) `&$response_data` = ?,  
    [string](language.types.string.md) `&$response_oid` = ?  
): [LDAP\Result](class.ldap-result.md)|[bool](language.types.boolean.md)

Realiza uma operação estendida no `ldap` especificado com
o OID da operação em `request_oid` e os dados em
`request_data`.

**Aviso**

O uso de mais de 4 parâmetros foi descontinuado.
Use [ldap\_exop\_sync()](function.ldap-exop-sync.md) em vez disso.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`request_oid`
:   A solicitação de operação estendida OID.
    Pode ser uma das
    constantes
    **`LDAP_EXOP_*`**
    ou uma string com o OID da operação.

`request_data`
:   Os dados estendidos da solicitação de operação. Podem ser NULL para algumas operações como
    **`LDAP_EXOP_WHO_AM_I`**, e também podem precisar ser codificados em BER.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) que são enviados com a requisição.

`response_data`
:   Será preenchido com os dados de resposta da operação estendida se fornecido.
    Se não fornecido, pode-se utilizar [ldap\_parse\_exop()](function.ldap-parse-exop.md) no objeto de resultado
    mais tarde para obter estes dados.

`response_oid`
:   Será preenchido com o OID da resposta se informado,
    geralmente igual ao OID da requisição.

### Valor Retornado

Quando usado com `response_data`, retorna **`true`** em caso de sucesso ou **`false`** em caso de erro.
Quando usado sem `response_data`, retorna um identificador de resultado ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O uso de mais de 4 parâmetros foi descontinuado. Use [ldap\_exop\_sync()](function.ldap-exop-sync.md) em vez disso. |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Examples

**Exemplo #1 Operação estendida 'Whoami'**

```
<?php
$ds = ldap_connect("localhost");  // assumindo que o servidor LDAP é local

if ($ds) {
    // faz ligação com dn apropriado para acesso de atualização
    $bind = ldap_bind($ds, "cn=root, o=My Company, c=US", "secret");
    if (!$bind) {
      echo "Não foi possível ligar ao servidor";
      exit;
    }

    // Chama a operação estendida WHOAMI
    $r = ldap_exop($ds, LDAP_EXOP_WHO_AM_I);

    // Interpreta o objeto de resultado
    ldap_parse_exop($ds, $r, $retdata);
    // Mostra: string(31) "dn:cn=root, o=My Company, c=US"
    var_dump($retdata);

    // O mesmo usando $response_data parameter
    $success = ldap_exop($ds, LDAP_EXOP_WHO_AM_I, NULL, NULL, $retdata, $retoid);
    if ($success) {
      var_dump($retdata);
    }

    ldap_close($ds);
} else {
    echo "Não foi possível conectar ao servidor LDAP";
}
?>
```

### Veja também

- [ldap\_exop\_sync()](function.ldap-exop-sync.md) - Realiza uma operação estendida
- [ldap\_exop\_whoami()](function.ldap-exop-whoami.md) - Facilitador para operação estendida WHOAMI
- [ldap\_exop\_refresh()](function.ldap-exop-refresh.md) - Facilitador para operação estendida REFRESH
- [ldap\_exop\_passwd()](function.ldap-exop-passwd.md) - Facilitador para operação estendida PASSWD
- [ldap\_parse\_result()](function.ldap-parse-result.md) - Extrai informação de resultado
- [ldap\_parse\_exop()](function.ldap-parse-exop.md) - Interpreta o objeto de resultado de uma operação estendida LDAP

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

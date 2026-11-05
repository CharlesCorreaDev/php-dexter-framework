# Extrai informação de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-parse-result.php

---

# ldap\_parse\_result

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

ldap\_parse\_result — Extrai informação de resultado

### Descrição

function **ldap\_parse\_result**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [LDAP\Result](class.ldap-result.md) `$result`,  
    [int](language.types.integer.md) `&$error_code`,  
    [string](language.types.string.md) `&$matched_dn` = **`null`**,  
    [string](language.types.string.md) `&$error_message` = **`null`**,  
    [array](language.types.array.md) `&$referrals` = **`null`**,  
    [array](language.types.array.md) `&$controls` = **`null`**  
): [bool](language.types.boolean.md)

Interpreta um resultado de pesquisa LDAP.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

`error_code`
:   Uma referência a uma variável que será definida para o código de erro LDAP no
    resultado, ou `0` se não houve erro.

`matched_dn`
:   Uma referência a uma variável que será definida para um DN correspondente se algum foi
    reconhecido na requisição, caso contrário será definido para **`null`**.

`error_message`
:   Uma referência a uma variável que será definida para a mensagem de erro LDAP no
    resultado, ou uma string vazia se não houve erro.

`referrals`
:   Uma referência a uma variável que será definida para um [array](language.types.array.md) definido
    para todas as strings referenciadas no resultado, ou um array vazio se nenhuma
    referência foi retornada.

`controls`
:   Um [array](language.types.array.md) de Controles LDAP que foram enviados com a resposta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Examples

**Exemplo #1 Exemplo de **ldap\_parse\_result()****

```
<?php
$result = ldap_search($ldap, "cn=userref,dc=my-domain,dc=com", "(cn=user*)");
$errcode = $dn = $errmsg = $refs =  null;
if (ldap_parse_result($ldap, $result, $errcode, $dn, $errmsg, $refs)) {
    // faz alguma coisa com $errcode, $dn, $errmsg e $refs
}
?>
```

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

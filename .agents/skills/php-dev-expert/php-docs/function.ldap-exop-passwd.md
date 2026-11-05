# Facilitador para operação estendida PASSWD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-exop-passwd.php

---

# ldap\_exop\_passwd

(PHP 7 >= 7.2.0, PHP 8)

ldap\_exop\_passwd — Facilitador para operação estendida PASSWD

### Descrição

function **ldap\_exop\_passwd**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$user` = "",  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$old_password` = "",  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$new_password` = "",  
    [array](language.types.array.md) `&$controls` = **`null`**  
): [string](language.types.string.md)|[bool](language.types.boolean.md)

Realiza uma operação estendida PASSWD.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`user`
:   DN do usuário que terá a senha alterada.

`old_password`
:   A senha antiga do usuário. Pode ser omitida dependendo da configuração do servidor.

`new_password`
:   A nova senha deste usuário. Pode ser omitida ou vazia para geração de uma senha.

`controls`
:   Se fornecido, um contrlo de requisição de política de senhas é enviado com a requisição e esta variável é
    preenchida com um array de [Controles LDAP](ldap.controls.md)
    retornados com a requisição.

### Valor Retornado

Retorna a senha gerada se `new_password` estava vazia ou foi omitida.
Caso contrário retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte a `controls`. |

### Examples

**Exemplo #1 Operação estendida PASSWD**

```
<?php
$ds = ldap_connect("localhost");  // assumindo que o servidor LDAP é local

if ($ds) {
    // faz ligação com o dn apropriado para dar acesso de atualização
    $bind = ldap_bind($ds, "cn=root, o=My Company, c=US", "secret");
    if (!$bind) {
      echo "Não foi possível fazer ligação com o servidor LDAP";
      exit;
    }

    // usa a operação estendida PASSWD para mudar a senha do usuário por uma senha gerada
    $genpw = ldap_exop_passwd($ds, "cn=root, o=My Company, c=US", "secret");
    if ($genpw) {
      // usa a senha gerada para fazer ligação
      $bind = ldap_bind($ds, "cn=root, o=My Company, c=US", $genpw);
    }

    // retorna a senha para "secret"
    ldap_exop_passwd($ds, "cn=root, o=My Company, c=US", $genpw, "secret");

    ldap_close($ds);
} else {
    echo "Não foi possível conexão com o servidor LDAP";
}
?>
```

### Veja também

- [ldap\_exop()](function.ldap-exop.md) - Realiza uma operação estendida
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

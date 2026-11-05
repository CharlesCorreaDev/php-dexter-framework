# Compara valor de atributo encontrado em entrada especificada com DN

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-compare.php

---

# ldap\_compare

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

ldap\_compare — Compara valor de atributo encontrado em entrada especificada com DN

### Descrição

function **ldap\_compare**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [string](language.types.string.md) `$attribute`,  
    [string](language.types.string.md) `$value`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [bool](language.types.boolean.md)|[int](language.types.integer.md)

Compara o valor informado em `value` do atributo informado em `attribute`
com o valor do mesmo atributo na entrada do diretório LDAP.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto de uma entidade LDAP.

`attribute`
:   O nome do atributo.

`value`
:   O valor para comparação.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) a ser enviado com a requisição.

### Valor Retornado

Retorna **`true`** se `value` tem correspondência, caso contrário retorna
**`false`**. Retorna -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Suporte para `controls` foi adicionado |

### Examples

O exemplo a seguir demonstra como verificar se a senha informada corresponde ou não
à senha definida na entrada especificada pelo DN.

**Exemplo #1 Exemplo completo de verificação de senha**

```
<?php

$ds=ldap_connect("localhost");  // assumindo que o servidor LDAP está no servidor local

if ($ds) {

    // ligação
    if (ldap_bind($ds)) {

        // prepara dados
        $dn = "cn=Matti Meikku, ou=My Unit, o=My Company, c=FI";
        $value = "secretpassword";
        $attr = "password";

        // compara o valor
        $r=ldap_compare($ds, $dn, $attr, $value);

        if ($r === -1) {
            echo "Erro: " . ldap_error($ds);
        } elseif ($r === true) {
            echo "Senha correta.";
        } elseif ($r === false) {
            echo "Tentativa inválida! Senha incorreta.";
        }

    } else {
        echo "Não foi possível fazer ligação com o servidor LDAP.";
    }

    ldap_close($ds);

} else {
    echo "Não foi possível conexão ao servidor LDAP.";
}
?>
```

### Notas

**Aviso**

**ldap\_compare()** NÃO pode ser usada para comparar valores BINÁRIOS!

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

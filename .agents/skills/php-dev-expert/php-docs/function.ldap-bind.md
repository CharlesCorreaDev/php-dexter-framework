# Faz ligação ao diretório LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-bind.php

---

# ldap\_bind

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_bind — Faz ligação ao diretório LDAP

### Descrição

function **ldap\_bind**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [?](language.types.null.md)[string](language.types.string.md) `$dn` = **`null`**, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**): [bool](language.types.boolean.md)

Faz ligação ao diretório LDAP com DN/RDN e senha especificados.

> **Nota**:
>
> Esta função estabelece a conexão de rede real com o
> servidor LDAP (uma vez que [ldap\_connect()](function.ldap-connect.md) apenas
> inicializa os parâmetros de conexão). Quaisquer opções que afetem a
> conexão, como **`LDAP_OPT_PROTOCOL_VERSION`**
> ou opções relacionadas ao TLS, devem ser definidas antes de chamar esta função.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto para conexão. Pode ser DN (nome distinto) ou RDN (nome distinto relativo).

`password`
:   A senha associada ao DN.

Se `password`
não for especificada ou estiver vazia, haverá uma tentativa de ligação anônima. O parâmetro `dn` também pode ser deixado vazio para uma ligação anônima. Esta definição está em https://tools.ietf.org/html/rfc2251#section-4.2.2

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Examples

**Exemplo #1 Usando ligação LDAP**

```
<?php

// usando ligação LDAP
$ldaprdn  = 'uname';     // DN ou RDN LDAP
$ldappass = 'password';  // senha associada

// conexão ao servidor LDAP
$ldapconn = ldap_connect("ldap://ldap.example.com")
    or die("Não foi possível conecar ao servidor LDAP.");

if ($ldapconn) {

    // ligando-se ao servidor ldap
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verifica ligação
    if ($ldapbind) {
        echo "Ligação bem sucedida ao LDAP...";
    } else {
        echo "Falha na ligação ao LDAP...";
    }

}

?>
```

**Exemplo #2 Usando Ligação Anônima ao LDAP**

```
<?php

// usando ligação anônima ao LDAP

// conexão ao servidor LDAP
$ldapconn = ldap_connect("ldap://ldap.example.com")
    or die("Não foi possível conectar ao servidor LDAP.");

if ($ldapconn) {

    // ligação anônima
    $ldapbind = ldap_bind($ldapconn);

    if ($ldapbind) {
        echo "Ligação anônima ao LDAP bem sucedida...";
    } else {
        echo "Falha na ligação anônima ao LDAP...";
    }

}

?>
```

### Veja também

- [ldap\_bind\_ext()](function.ldap-bind-ext.md) - Faz ligação ao diretório LDAP
- [ldap\_unbind()](function.ldap-unbind.md) - Desliga-se do diretório LDAP

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

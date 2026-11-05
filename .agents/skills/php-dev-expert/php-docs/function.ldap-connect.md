# Conecta a um servidor LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-connect.php

---

# ldap\_connect

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_connect — Conecta a um servidor LDAP

### Descrição

function **ldap\_connect**([?](language.types.null.md)[string](language.types.string.md) `$uri` = **`null`**): [LDAP\Connection](class.ldap-connection.md)|[false](language.types.singleton.md)

**Aviso**

A partir do PHP 8.3.0, a assinatura *a seguir* foi descontinuada.

function **ldap\_connect**([?](language.types.null.md)[string](language.types.string.md) `$host` = **`null`**, [int](language.types.integer.md) `$port` = 389): [LDAP\Connection](class.ldap-connection.md)|[false](language.types.singleton.md)

Cria uma instância [LDAP\Connection](class.ldap-connection.md) e verifica se o
`uri` informado é plausível.

> **Nota**:
>
> Esta função *não* abre uma conexão de rede.
> Ela apenas verifica a sintaxe da URI e inicializa os parâmetros de conexão.
> A conexão TCP real é estabelecida quando
> [ldap\_bind()](function.ldap-bind.md) é chamada.

> **Nota**:
>
> Opções que afetam a configuração da conexão, como
> **`LDAP_OPT_PROTOCOL_VERSION`** e opções relacionadas ao TLS
> (`LDAP_OPT_X_TLS_*`), precisam ser definidas
> usando [ldap\_set\_option()](function.ldap-set-option.md) após chamar esta
> função e antes de chamar [ldap\_bind()](function.ldap-bind.md).
> Opções relacionadas ao TLS devem ser definidas globalmente (passando **`null`** como
> o primeiro argumento para [ldap\_set\_option()](function.ldap-set-option.md)).

### Parâmetros

`uri`
:   Uma URI LDAP completa na forma `ldap://hostname:port`
    ou `ldaps://hostname:port` para criptografia SSL.

    Pode-se também informar múltiplas URIs LDAP separadas por um espaço como uma string

    Observe que `hostname:port` não é um URI LDAP suportada pois não contém o esquema.

`host`
:   O servidor para conexão.

`port`
:   A porta para conexão.

### Valor Retornado

Retorna uma instância [LDAP\Connection](class.ldap-connection.md) quando a URI LDAP informada
parece plausível. É uma verificação sintática do parâmetro fornecido mas o(s) servidor(es) não
serão contactados! Se a verificação sintática falhar será retornado **`false`**.
**ldap\_connect()** irá
retornar uma instância [LDAP\Connection](class.ldap-connection.md) já que ela não conecta realmente mas somente
inicializa os parâmetros de conexão. A conexão real acontece com
as próximas chamadas às funções ldap\_\*, normalmente com
[ldap\_bind()](function.ldap-bind.md).

Se nenhum argumento for especificado, a instância [LDAP\Connection](class.ldap-connection.md) da conexão
já aberta será retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Chamar **ldap\_connect()** com mais de dois argumentos foi descontinuado. |
| 8.3.0 | Chamar **ldap\_connect()** com `hostname` e `port` separados agora foi descontinuado. |
| 8.1.0 | Retorna uma instância [LDAP\Connection](class.ldap-connection.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de conexão a um servidor LDAP.**

```
<?php

// Variáveis LDAP
$ldapuri = "ldap://ldap.example.com:389";  // URI LDAP

// Conexão ao LDAP
$ldapconn = ldap_connect($ldapuri)
          or die("Não foi possível interpretar a URI LDAP.");

?>
```

**Exemplo #2 Exemplo de conexão segura a um servidor LDAP.**

```
<?php

// confirme que o servidor é o correto,
// aquele para o qual o certificado seguro foi emitido
$ldaphost = "ldaps://ldap.example.com/";

// Conectando ao LDAP
$ldapconn = ldap_connect($ldaphost)
          or die("Não foi possível interpretar a URI LDAP.");

?>
```

### Veja também

- [ldap\_bind()](function.ldap-bind.md) - Faz ligação ao diretório LDAP

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

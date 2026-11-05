# Solicita informações sobre um servidor de banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-server-info.php

---

# ibase\_server\_info

(PHP 5, PHP 7 < 7.4.0)

ibase\_server\_info — Solicita informações sobre um servidor de banco de dados

### Descrição

function **ibase\_server\_info**([resource](language.types.resource.md) `$service_handle`, [int](language.types.integer.md) `$action`): [string](language.types.string.md)

### Parâmetros

`service_handle`
:   Uma conexão criada anteriormente com o servidor de banco de dados.

`action`
:   Uma constante válida.

### Valor Retornado

Retorna tipos mistos dependendo do contexto.

### Examples

**Exemplo #1 Exemplo de [ibase\_service\_attach()](function.ibase-service-attach.md)**

```
<?php
    // Conecta-se ao servidor Firebird remoto
    if (($service = ibase_service_attach('10.1.1.254/3050', 'sysdba', 'masterkey')) != FALSE) {

        // Conectado com sucesso.

        // Exibe a informação
        echo "Versão do servidor: " . ibase_server_info($service, IBASE_SVC_SERVER_VERSION) . "\n";
        echo "Implementação do servidor: " . ibase_server_info($service, IBASE_SVC_IMPLEMENTATION) . "\n";
        echo "Usuários do servidor: " . print_r(ibase_server_info($service, IBASE_SVC_GET_USERS), true) . "\n";
        echo "Diretório do servidor: " . ibase_server_info($service, IBASE_SVC_GET_ENV) . "\n";
        echo "Caminho de travas do servidor: " . ibase_server_info($service, IBASE_SVC_GET_ENV_LOCK) . "\n";
        echo "Caminho de bibliotecas do servidor: " . ibase_server_info($service, IBASE_SVC_GET_ENV_MSG) . "\n";
        echo "Caminho do banco de dados do usuário: " . ibase_server_info($service, IBASE_SVC_USER_DBPATH) . "\n";
        echo "Conexões estabelecidas: " . print_r(ibase_server_info($service, IBASE_SVC_SVR_DB_INFO),true) . "\n";

        // Desconecta do servidor
        ibase_service_detach($service);

    }
    else {
        // Exibe mensagem em caso de erro
        $conn_error = ibase_errmsg();
        die($conn_error);
    }
?>
```

O exemplo acima produzirá:

```
Versão do servidor: LI-V3.0.4.33054 Firebird 3.0
Implementação do servidor: Firebird/Linux/AMD/Intel/x64
Usuários do servidor: Array
(
    [0] => Array
        (
            [user_name] => SYSDBA
            [first_name] => Sql
            [middle_name] => Server
            [last_name] => Administrator
            [user_id] => 0
            [group_id] => 0
        )

)

Diretório do servidor: /etc/firebird/
Caminho de travas do servidor: /tmp/firebird/
Caminho de bibliotecas do servidor: /usr/lib64/firebird/lib/
Caminho do banco de dados do usuário: /var/lib/firebird/secdb/security3.fdb
Conexões estabelecidas: Array
(
    [attachments] => 3
    [databases] => 2
    [0] => /srv/firebird/poss.fdb
    [1] => /srv/firebird/employees.fdb
)
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

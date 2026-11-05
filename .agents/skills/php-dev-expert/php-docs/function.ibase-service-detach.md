# Desconecta do gerenciador de serviços

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-service-detach.php

---

# ibase\_service\_detach

(PHP 5, PHP 7 < 7.4.0)

ibase\_service\_detach — Desconecta do gerenciador de serviços

### Descrição

function **ibase\_service\_detach**([resource](language.types.resource.md) `$service_handle`): [bool](language.types.boolean.md)

### Parâmetros

`service_handle`
:   Uma conexão criada anteriormente com o servidor de banco de dados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ibase\_service\_detach()****

```
<?php
    // Conecta ao servidor Firebird remoto pelo endereço IP
    if (($service = ibase_service_attach('10.1.1.199', 'sysdba', 'masterkey')) != FALSE) {

        // Conectado com sucesso.
        // Obtém versão do servidor (algo como 'LI-V3.0.4.33054 Firebird 3.0')
        $server_version  = ibase_server_info($service, IBASE_SVC_SERVER_VERSION);

        // Busca a implementação do servidor (algo como 'Firebird/Linux/AMD/Intel/x64')
        $server_implementation = ibase_server_info($service, IBASE_SVC_IMPLEMENTATION);

        // Desconecta do servidor
        if(ibase_service_detach($service) == FALSE) {
            echo "Erro ao desconectar do serviço.";
        }
        else {
            echo "Desconectado do serviço com sucesso.";
        }

    }
    else {
        // Exibe mensagem em caso de erro
        $conn_error = ibase_errmsg();
        die($conn_error);
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

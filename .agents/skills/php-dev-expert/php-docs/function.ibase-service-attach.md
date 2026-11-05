# Conecta ao gerenciador de serviços

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-service-attach.php

---

# ibase\_service\_attach

(PHP 5, PHP 7 < 7.4.0)

ibase\_service\_attach — Conecta ao gerenciador de serviços

### Descrição

function **ibase\_service\_attach**([string](language.types.string.md) `$host`, [string](language.types.string.md) `$dba_username`, [string](language.types.string.md) `$dba_password`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

### Parâmetros

`host`
:   O nome ou endereço IP do host do banco de dados. Você pode definir a porta adicionando
    '/' e o número da porta. Se nenhuma porta for especificada, a porta 3050 será usada.

`dba_username`
:   O nome de qualquer usuário válido.

`dba_password`
:   A senha do usuário.

### Valor Retornado

Retorna um identificador de conexão Interbase/Firebird em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ibase\_service\_attach()****

```
<?php
    // Conecta-se ao servidor Firebird remoto por endereço IP
    if (($service = ibase_service_attach('10.1.1.199', 'sysdba', 'masterkey')) != FALSE) {

        // Conectado com sucesso.
        // Obtém versão do servidor (algo como 'LI-V3.0.4.33054 Firebird 3.0')
        $server_version  = ibase_server_info($service, IBASE_SVC_SERVER_VERSION);

        // Busca a implementação do servidor (algo como 'Firebird/Linux/AMD/Intel/x64')
        $server_implementation = ibase_server_info($service, IBASE_SVC_IMPLEMENTATION);

        // Desconecta do servidor
        ibase_service_detach($service);

        // Exibe a informação
        echo "Versão do servidor: " . $server_version . "<br/>";
        echo "Implementação do servidor: " . $server_implementation;
    }
    else {
        // Exibe mensagem em caso de erro
        $conn_error = ibase_errmsg();
        die($conn_error);
    }

?>
```

**Exemplo #2 Exemplo de **ibase\_service\_attach()** usando a sintaxe `hostname/port`**

```
<?php
    // Conecta-se ao servidor Firebird remoto pelo nome. Usa a porta 3050.
    if (($service = ibase_service_attach('FB-SRV-01.contoso.local/3050', 'sysdba', 'masterkey')) != FALSE) {

        // Conectado com sucesso.
        // Obtém versão do servidor (algo como 'LI-V3.0.4.33054 Firebird 3.0')
        $server_version  = ibase_server_info($service, IBASE_SVC_SERVER_VERSION);

        // Busca a implementação do servidor (algo como 'Firebird/Linux/AMD/Intel/x64')
        $server_implementation = ibase_server_info($service, IBASE_SVC_IMPLEMENTATION);

        // Desconecta do servidor
        ibase_service_detach($service);

        // Exibe a informação
        echo "Versão do servidor: " . $server_version . "<br/>";
        echo "Implementação do servidor: " . $server_implementation;
    }
    else {
        // Exibe mensagem em caso de erro
        $conn_error = ibase_errmsg();
        die($conn_error);
    }

?>
```

### Veja também

- [ibase\_service\_detach()](function.ibase-service-detach.md) - Desconecta do gerenciador de serviços

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

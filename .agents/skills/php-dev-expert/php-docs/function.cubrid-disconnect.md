# Fecha uma conexão ao banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-disconnect.php

---

# cubrid\_disconnect

(PECL CUBRID >= 8.3.0)

cubrid\_disconnect — Fecha uma conexão ao banco de dados

### Descrição

function **cubrid\_disconnect**([resource](language.types.resource.md) `$conn_identifier` = ?): [bool](language.types.boolean.md)

A função **cubrid\_disconnect()** fecha o identificador da
conexão e desconecta do servidor. Se algum identificador de requisição não estiver fechado neste ponto,
ele será fechado. É similar à função compatível do MySQL CUBRID [cubrid\_close()](function.cubrid-close.md).

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_disconnect()****

```
<?php
$con = cubrid_connect ("localhost", 33000, "demodb");
if ($con) {
    echo "conectado com sucesso";

    $req = cubrid_execute( $con, "create table person(id int,name char(10))");
    if ($req) {
        cubrid_close_request($req);
        cubrid_commit($con);
    } else {
        cubrid_rollback($con);
    }

    $req = cubrid_execute( $con, "insert into person values(1,'James')");
    if ($req) {
        cubrid_close_request($req);
        cubrid_commit($con);
    } else {
        cubrid_rollback($con);
    }
    cubrid_disconnect($con);
}
?>
```

### Veja também

- [cubrid\_close()](function.cubrid-close.md) - Fecha conexão CUBRID
- [cubrid\_connect()](function.cubrid-connect.md) - Abre uma conexão a um servidor CUBRID
- [cubrid\_connect\_with\_url()](function.cubrid-connect-with-url.md) - Prepara o ambiente para conexão ao servidor CUBRID

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

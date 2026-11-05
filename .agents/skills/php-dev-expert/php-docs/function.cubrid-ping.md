# Verifica atividade em uma conexão ao servidor ou reconecta se não houver conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-ping.php

---

# cubrid\_ping

(PECL CUBRID >= 8.3.1)

cubrid\_ping — Verifica atividade em uma conexão ao servidor ou reconecta se não houver conexão

### Descrição

function **cubrid\_ping**([resource](language.types.resource.md) `$conn_identifier` = ?): [bool](language.types.boolean.md)

Verifica se a conexão ao servidor está ativa ou não.

### Parâmetros

`conn_identifier`
:   O identificador de conexão CUBRID. Se o identificador da conexão não
    for especificado, será assumida a última conexão aberta por
    [cubrid\_connect()](function.cubrid-connect.md).

### Valor Retornado

Retorna **`true`** se a conexão ao servidor CUBRID estiver ativa, caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **cubrid\_ping()****

```
<?php
set_time_limit(0);

$conn = cubrid_connect('localhost', 33000, 'demodb');

/* Assumindo que esta consulta irá levar muito tempo */
$sql = "select * from athlete";
$result = cubrid_query($sql);
if (!$result) {
    echo 'Consulta #1 falhou, saindo.';
    exit;
}

/* Certificando que a conexão ainda está ativa, caso contrário, tenta reconectar */
if (!cubrid_ping($conn)) {
    echo 'Conexão perdida, saindo após consulta #1';
    exit;
}
cubrid_free_result($result);

/* Então a conexão ainda está ativa, executando mais uma consulta */
$sql2 = "select * from code";
$result2 = cubrid_query($sql2);
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

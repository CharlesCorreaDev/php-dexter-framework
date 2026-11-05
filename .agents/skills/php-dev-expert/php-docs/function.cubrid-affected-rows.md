# Retorna o número de linhas afetadas pela última instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-affected-rows.php

---

# cubrid\_affected\_rows

(PECL CUBRID >= 8.3.0)

cubrid\_affected\_rows — Retorna o número de linhas afetadas pela última instrução SQL

### Descrição

function **cubrid\_affected\_rows**([resource](language.types.resource.md) `$conn_identifier` = ?): [int](language.types.integer.md)

function **cubrid\_affected\_rows**([resource](language.types.resource.md) `$req_identifier` = ?): [int](language.types.integer.md)

A função **cubrid\_affected\_rows()** é usada para obter o
número de linhas afetadas pela instrução SQL (INSERT, DELETE, UPDATE).

### Parâmetros

`conn_identifier`
:   A conexão CUBRID. Se o identificador da conexão não
    for especificado, será assumido a última conexão aberta por
    [cubrid\_connect()](function.cubrid-connect.md).

`req_identifier`
:   O identificador de requisição pode ser retornado de [cubrid\_prepare()](function.cubrid-prepare.md) ou [cubrid\_execute()](function.cubrid-execute.md).
    Se o identificador da requisição não for especificado, será assumido o último identificador requisitado
    por [cubrid\_prepare()](function.cubrid-prepare.md) ou [cubrid\_execute()](function.cubrid-execute.md).

### Valor Retornado

Número de linhas afetadas pela instrução SQL em caso de sucesso.

-1, quando a instrução SQL não for INSERT, DELETE ou UPDATE.

**`false`**, quando o identificador da requisição não for especificado e não houver última
requisição.

### Examples

**Exemplo #1 Exemplo de **cubrid\_affected\_rows()****

```
<?php
$conn = cubrid_connect('localhost', 33000, 'demodb', 'dba', '');
cubrid_execute($conn, "DROP TABLE IF EXISTS cubrid_test");
cubrid_execute($conn, "CREATE TABLE cubrid_test (d varchar)");
$sql_stmt = "INSERT INTO cubrid_test(d) VALUES('php-test')";
$req = cubrid_prepare($conn, $sql_stmt);

for ($i = 0; $i < 10; $i++) {
    cubrid_execute($req);
}
cubrid_commit($conn);

$req = cubrid_execute($conn, "DELETE FROM cubrid_test WHERE d='php-test'", CUBRID_ASYNC);
var_dump(cubrid_affected_rows());
var_dump(cubrid_affected_rows($conn));
var_dump(cubrid_affected_rows($req));

cubrid_disconnect($conn);

print "pronto!";
?>
```

O exemplo acima produzirá:

```
int(10)
int(10)
int(10)
pronto!
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL

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

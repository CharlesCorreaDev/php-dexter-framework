# Instruções Múltiplas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.multiple-statement.php

---

## Instruções Múltiplas

O MySQL opcionalmente permite múltiplas instruções em uma só string,
mas isso requer uma manipulação especial.

Instruções ou consultas múltiplas devem ser executadas
com [mysqli::multi\_query()](mysqli.multi-query.md). As instruções individuais
da string são separadas por ponto-e-vírgula.
Assim, todos os conjuntos de resultados retornados pelas instruções executadas precisam ser recebidas.

O servidor MySQL permite instruções que retornam dados e
instruções que não retornam, em uma só instrução múltipla.

**Exemplo #1 Instruções Múltiplas**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");

$sql = "SELECT COUNT(*) AS _num FROM test;
        INSERT INTO test(id) VALUES (1);
        SELECT COUNT(*) AS _num FROM test; ";

$mysqli->multi_query($sql);

do {
    if ($result = $mysqli->store_result()) {
        var_dump($result->fetch_all(MYSQLI_ASSOC));
        $result->free();
    }
} while ($mysqli->next_result());
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  array(1) {
    ["_num"]=>
    string(1) "0"
  }
}
array(1) {
  [0]=>
  array(1) {
    ["_num"]=>
    string(1) "1"
  }
}
```

**Considerações de Segurança**

As funções da API [mysqli::query()](mysqli.query.md) e
[mysqli::real\_query()](mysqli.real-query.md) não definem uma opção de conexão necessária
para ativar consultas múltiplas no servidor. Uma chamada extra da API é usada para
instruções múltiplas para reduzir o estrago de ataques de injeção SQL
acidentais. Um atacante pode tentar adicionar instruções como
'`; DROP DATABASE mysql`' ou '`; SELECT SLEEP(999)`'.
Se o atacante obtiver sucesso na adição de SQL ao string da instrução mas
[mysqli::multi\_query()](mysqli.multi-query.md) não for usada, o servidor não irá
executar a instrução SQL maliciosa que foi injetada.

**Exemplo #2 Injeção SQL**

```
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");
$result = $mysqli->query("SELECT 1; DROP TABLE mysql.user");
?>
```

O exemplo acima produzirá:

```
PHP Fatal error:  Uncaught mysqli_sql_exception: You have an error in your SQL syntax;
check the manual that corresponds to your MySQL server version for the right syntax to
use near 'DROP TABLE mysql.user' at line 1
```

**Instruções preparadas**

O uso de instruções múltiplas com instruções preparadas não é suportado.

**Veja também**

- [mysqli::query()](mysqli.query.md)
- [mysqli::multi\_query()](mysqli.multi-query.md)
- [mysqli::next\_result()](mysqli.next-result.md)
- [mysqli::more\_results()](mysqli.more-results.md)

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

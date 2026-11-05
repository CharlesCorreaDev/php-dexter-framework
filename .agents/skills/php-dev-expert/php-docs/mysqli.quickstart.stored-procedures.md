# Procedimentos Armazenados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.stored-procedures.php

---

## Procedimentos Armazenados

O banco de dados MySQL suporta procedimentos armazenados. Um procedimento armazenado é uma
sub-rotina armazenada no catálogo do banco de dados. Aplicações podem chamar e
executar o procedimento. A declaração `CALL`
da linguagem SQL é usada para executar um procedimento armazenado.

**Parâmetro**

Procedimentos armazenados podem ter parâmetros `IN`,
`INOUT` e `OUT`,
dependendo da versão do MySQL. A interface mysqli não tem nenhuma ciência
especial dos diferentes tipos de parâmetros.

**Parâmetro IN**

Parâmetros de entrada são providos pela declaração `CALL`.
Certifique-se que os valores são corretamente escapados.

**Exemplo #1 Chamando um procedimento armazenado**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;");

$mysqli->query("CALL p(1)");

$result = $mysqli->query("SELECT id FROM test");

var_dump($result->fetch_assoc());
```

O exemplo acima produzirá:

```
array(1) {
  ["id"]=>
  string(1) "1"
}
```

**Parâmetros INOUT/OUT**

Os valores dos parâmetros `INOUT`/`OUT`
são acessados com o uso de variáveis de sessão.

**Exemplo #2 Uso de variáveis de sessão**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hi!" INTO msg; END;');

$mysqli->query("SET @msg = ''");
$mysqli->query("CALL p(@msg)");

$result = $mysqli->query("SELECT @msg as _p_out");

$row = $result->fetch_assoc();
echo $row['_p_out'];
```

O exemplo acima produzirá:

```
Hi!
```

Desenvolvedores de aplicações e de frameworks podem ser capazes de fornecer uma API mais
conveniente que use uma mistura de variáveis de sessão e inspeção de catálogos de banco de dados.
Entretanto, deve ser observado o possível impacto em desempenho de uma solução
customizada baseada em inspeção de catálogo.

**Lidando com conjuntos de resultados**

Procedimentos armazenados podem retornar conjuntos de resultados. Resultados retornados de um
procedimento armazenado não podem ser recebidos corretamente usando [mysqli::query()](mysqli.query.md).
A função [mysqli::query()](mysqli.query.md) combina execução de instrução
e recebimento do primeiro conjunto de dados em um conjunto de resultados com buffer, se houver.
Porém, haverá conjuntos adicionais de resultados que estarão ocultos
para o usuário, o que fará com que [mysqli::query()](mysqli.query.md) falhe
no retorno dos dados esperados.

Conjuntos de resultados retornados de um procedimento armazenado são recebidos usando-se
[mysqli::real\_query()](mysqli.real-query.md) ou [mysqli::multi\_query()](mysqli.multi-query.md).
Ambas as funções permitem receber qualquer número de conjuntos retornados pela
instrução, como `CALL`. Falha no recebimento de todos
os conjuntos retornados pelo procedimento armazenado causa um erro.

**Exemplo #3 Recebendo resultados de procedimentos armazenados**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');

$mysqli->multi_query("CALL p()");

do {
    if ($result = $mysqli->store_result()) {
        printf("---\n");
        var_dump($result->fetch_all());
        $result->free();
    }
} while ($mysqli->next_result());
```

O exemplo acima produzirá:

```
---
array(3) {
  [0]=>
  array(1) {
    [0]=>
    string(1) "1"
  }
  [1]=>
  array(1) {
    [0]=>
    string(1) "2"
  }
  [2]=>
  array(1) {
    [0]=>
    string(1) "3"
  }
}
---
array(3) {
  [0]=>
  array(1) {
    [0]=>
    string(1) "2"
  }
  [1]=>
  array(1) {
    [0]=>
    string(1) "3"
  }
  [2]=>
  array(1) {
    [0]=>
    string(1) "4"
  }
}
```

**Uso de procedimentos armazenados**

Nenhuma manipulação especial é necessária ao usar a interface de procedimentos
armazenados para receber resultados do mesmo procedimento como no exemplo acima.
As interfaces para procedimentos armazenados e não armazenados são similares.
Deve ser observado que pode haver versões do servidor MYSQL que não suportem
preparação da instrução `CALL` da linguagem SQL.

**Exemplo #4 Procedimentos Armazenados e Instruções Preparadas**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');

$stmt = $mysqli->prepare("CALL p()");

$stmt->execute();

do {
    if ($result = $stmt->get_result()) {
        printf("---\n");
        var_dump($result->fetch_all());
        $result->free();
    }
} while ($stmt->next_result());
```

O exemplo acima produzirá:

```
---
array(3) {
  [0]=>
  array(1) {
    [0]=>
    int(1)
  }
  [1]=>
  array(1) {
    [0]=>
    int(2)
  }
  [2]=>
  array(1) {
    [0]=>
    int(3)
  }
}
---
array(3) {
  [0]=>
  array(1) {
    [0]=>
    int(2)
  }
  [1]=>
  array(1) {
    [0]=>
    int(3)
  }
  [2]=>
  array(1) {
    [0]=>
    int(4)
  }
}
```

Obviamente, o uso da API 'bind' para recebimento de dados também é suportado.

**Exemplo #5 Procedimentos Armazenados e Instruções Preparadas usando a API bind**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

$mysqli->query("DROP PROCEDURE IF EXISTS p");
$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');

$stmt = $mysqli->prepare("CALL p()");

$stmt->execute();

do {
    if ($stmt->store_result()) {
        $stmt->bind_result($id_out);
        while ($stmt->fetch()) {
            echo "id = $id_out\n";
        }
    }
} while ($stmt->next_result());
```

O exemplo acima produzirá:

```
id = 1
id = 2
id = 3
id = 2
id = 3
id = 4
```

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

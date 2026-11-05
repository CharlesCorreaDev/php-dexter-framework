# Executando instruções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.statements.php

---

## Executando instruções

Instruções podem ser executadas com
[mysqli::query()](mysqli.query.md), [mysqli::real\_query()](mysqli.real-query.md)
e [mysqli::multi\_query()](mysqli.multi-query.md).
A função [mysqli::query()](mysqli.query.md) é a mais
comum, e combina a instrução em execução com
uma busca em buffer de seu conjunto de resultados, se houver, em uma chamada.
Chamar [mysqli::query()](mysqli.query.md) é idêntico a
chamar [mysqli::real\_query()](mysqli.real-query.md)
seguido de [mysqli::store\_result()](mysqli.store-result.md).

**Exemplo #1 Executando consultas**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
```

**Conjunto de resultados com buffer**

Depois da execução da instrução, os resultados podem ser recebidos de uma vez
ou lidos linha a linha do servidor. O buffer do conjunto de resultados do lado do cliente
permite ao servidor liberar recursos associados com os resultados da
instrução da forma mais antecipada possível. Em geral, clientes são consumidores lentos
dos resultados. Portanto, é recomendado usar conjuntos de resultados com
buffer. [mysqli::query()](mysqli.query.md) combina buffer de execução de
instrução e de conjunto de resultados.

As aplicações PHP podem navegar livremente através de resultados em buffer.
A navegação é rápida porque os conjuntos de resultados são mantidos na memória do cliente.
Tenha em mente que muitas vezes é mais fácil escalar por cliente
do que escalar por servidor.

**Exemplo #2 Navegando através de resultados em buffer**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");
$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");

$result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");

echo "Ordem reversa...\n";
for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
    $result->data_seek($row_no);
    $row = $result->fetch_assoc();
    echo " id = " . $row['id'] . "\n";
}

echo "Ordem do conjunto de resultados...\n";
foreach ($result as $row) {
    echo " id = " . $row['id'] . "\n";
}
```

O exemplo acima produzirá:

```
Ordem reversa...
 id = 3
 id = 2
 id = 1
Ordem do conjunto de resultados...
 id = 1
 id = 2
 id = 3
```

**Conjuntos de resultado sem buffer**

Se a memória do cliente é um recurso escasso e liberar recursos do servidor
tão cedo quanto possível para manter a carga baixa não seja necessário,
resultados sem buffer podem ser usados. Navegar por resultados sem buffer
não é possível enquanto os dados não tenham sido completamente lidos.

**Exemplo #3 Navegando através de resultados sem buffer**

```
<?php

$mysqli->real_query("SELECT id FROM test ORDER BY id ASC");
$result = $mysqli->use_result();

echo "Ordem do conjunto de resultados...\n";
foreach ($result as $row) {
    echo " id = " . $row['id'] . "\n";
}
```

**Tipos de dados dos valores do conjunto de resultados**

As funções [mysqli::query()](mysqli.query.md), [mysqli::real\_query()](mysqli.real-query.md)
e [mysqli::multi\_query()](mysqli.multi-query.md) são usadas para executar
instruções não preparadas. No nível do protocolo cliente-servidor do MySQL,
o comando `COM_QUERY` e o protocolo de texto são usados
para execução de instrução. Com o protocolo de texto, o servidor MySQL converte
todos os dados de um resultado em strings antes do envio. Esta conversão é feita
independente do tipo de dados da coluna do resultado SQL. As bibliotecas do cliente mysql
recebem todos os valores de colunas como strings. Nenhuma conversão adicional do lado do cliente é feita
para retornar as colunas a seus tipos nativos. Ao invés disso, todos os valores são
fornecidos como strings PHP.

**Exemplo #4 Protocolo de texto retorna strings por padrão**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");

$result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
$row = $result->fetch_assoc();

printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
```

O exemplo acima produzirá:

```
id = 1 (string)
label = a (string)
```

É possível converter colunas de inteiros e floats de volta para números PHP configurando
a opção de conexão **`MYSQLI_OPT_INT_AND_FLOAT_NATIVE`**,
se a biblioteca mysqlnd estiver sendo usada. Se configurada, a biblioteca mysqlnd irá
verificar os tipos de coluna nos metadados do conjunto de resultados e converter colunas SQL
para números PHP, se a faixa de valores do tipo de dado PHP permitir.
Desta forma, por exemplo, colunas INT do SQL são retornadas como inteiros.

**Exemplo #5 Tipos de dados nativos com mysqlnd e opção de conexão**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli();
$mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
$mysqli->real_connect("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");

$result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
$row = $result->fetch_assoc();

printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
```

O exemplo acima produzirá:

```
id = 1 (integer)
label = a (string)
```

**Veja também**

- [mysqli::\_\_construct()](mysqli.construct.md)
- [mysqli::options()](mysqli.options.md)
- [mysqli::real\_connect()](mysqli.real-connect.md)
- [mysqli::query()](mysqli.query.md)
- [mysqli::multi\_query()](mysqli.multi-query.md)
- [mysqli::use\_result()](mysqli.use-result.md)
- [mysqli::store\_result()](mysqli.store-result.md)

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

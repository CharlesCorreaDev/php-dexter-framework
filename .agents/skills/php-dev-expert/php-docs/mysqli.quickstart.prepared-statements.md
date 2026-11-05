# Instruções Preparadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.prepared-statements.php

---

## Instruções Preparadas

O banco de dados MySQL suporta instruções preparadas. Uma instrução preparada
ou uma instrução parametrizada é usada para executar o mesmo comando
repetidamente com alta eficiência e proteger contra injeções SQL.

**Fluxo básico**

A execução de uma instrução preparada consiste em dois estágios:
preparação e execução. No estágio de preparação um modelo de instrução é enviado ao
servidor de banco de dados. O servidor realiza uma verificação de sintaxe e inicializa
os recursos internos para uso posterior.

O servidor MySQL suporta o uso de reservas de espaço posicionais anônimas
com ponto de interrogação (`?`).

A preparação é seguida pela execução. Durante a execução o cliente vincula
valores aos parâmetros e envia-os ao servidor. O servidor executa
a instrução com os valores vinculados usando os recursos internos criados anteriormente.

**Exemplo #1 Instrução preparada**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");

/* Instrução preparada, estágio 1: prepara */
$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");

/* Instrução preparada, estágio 2: vincula e executa */
$id = 1;
$label = 'PHP';
$stmt->bind_param("is", $id, $label); // "is" significa que $id está vinculada como um inteiro e $label como uma string

$stmt->execute();
```

**Execução repetida**

Uma instrução preparada pode ser executada repetidas vezes. Em cada execução
o valor atual da variável vinculada é avaliado e enviado ao servidor.
A instrução não é analisada novamente. O modelo de instrução não é mais
transferido ao servidor.

**Exemplo #2 INSERT preparado uma vez, executado múltiplas vezes**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");

/* Instrução preparada, estágio 1: prepara */
$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");

/* Instrução preparada, estágio 2: vincula e executa */
$stmt->bind_param("is", $id, $label); // "is" significa que $id está vinculada como um inteiro e $label como uma string

$data = [
    1 => 'PHP',
    2 => 'Java',
    3 => 'C++'
];
foreach ($data as $id => $label) {
    $stmt->execute();
}

$result = $mysqli->query('SELECT id, label FROM test');
var_dump($result->fetch_all(MYSQLI_ASSOC));
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(3) "PHP"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["label"]=>
    string(4) "Java"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["label"]=>
    string(3) "C++"
  }
}
```

Cada instrução preparada ocupa recursos do servidor.
Instruções devem ser fechadas explicitamente logo após o uso.
Se não for fechada explicitamente, a instrução será fechada quando o
manipulador da instrução for liberado pelo PHP.

Usar uma instrução preparada não é sempre a maneira mais eficiente
de executar um comando. Uma instrução preparada executada apenas uma vez
causa mais idas e voltas entre cliente e servidor do que uma não preparada.
Este é o motivo pelo qual o `SELECT` não é executado como uma
instrução preparada no exemplo acima.

Além disso, considere o uso da sintaxe SQL multi-INSERT do MySQL para inserção de dados.
Para o exemplo, multi-INSERT requer menos idas e voltas entre
o servidor e o cliente do que a instrução preparada mostrada acima.

**Exemplo #3 Menos idas e voltas usando o multi-INSERT do SQL**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT)");

$values = [1, 2, 3, 4];

$stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?), (?), (?), (?)");
$stmt->bind_param('iiii', ...$values);
$stmt->execute();
```

**Tipos de dados dos valores do conjunto de resultados**

O Protocolo Cliente-Servidor do MySQL define um protocolo de transferência de dados diferente
entre instruções preparadas e não preparadas. Instruções preparadas
usam o chamado protocolo binário. O servidor MySQL envia os dados do conjunto
de resultado como eles realmente são, em formato binário. Os resultados não são serializados em
strings antes do envio. Bibliotecas cliente recebem os dados binários e tentam converter os valores
para os tipos de dados apropriados do PHP. Por exemplo, resultados de uma coluna
`INT` do SQL serão fornecidos como variáveis do tipo inteiro do PHP.

**Exemplo #4 Tipos nativos de dados**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");

$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
```

O exemplo acima produzirá:

```
id = 1 (integer)
label = PHP (string)
```

Este comportamento difere das instruções não preparadas. Por padrão,
instruções não preparadas retornam todos os resultados como strings.
Este padrão pode ser alterado com o uso de uma opção de conexão.
Se a opção de conexão for usada, não haverá diferenças.

**Recebendo resultados usando variáveis vinculadas**

Resultados de instruções preparadas podem ser recebidos por
vinculação a variáveis de saída, ou por requisição de um objeto [mysqli\_result](class.mysqli-result.md).

Variáveis de saída devem ser vinculadas depois da execução da instrução.
Uma variável deve ser vinculada a cada coluna do conjunto de resultados da instrução.

**Exemplo #5 Vinculação de variável de saída**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");

$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
$stmt->execute();

$stmt->bind_result($out_id, $out_label);

while ($stmt->fetch()) {
    printf("id = %s (%s), label = %s (%s)\n", $out_id, gettype($out_id), $out_label, gettype($out_label));
}
```

O exemplo acima produzirá:

```
id = 1 (integer), label = PHP (string)
```

Instruções preparadas retornam conjuntos de resultados sem buffer por padrão.
Os resultados da instrução não são implicitamente recebidos e transformados
do servidor para o cliente para buffer do lado do cliente. O conjunto de resultados
consome recursos do servidor até que todos os resultados tenham sido recebidos pelo cliente.
Por isso é recomendado consumir os resultados em tempo hábil. Se um cliente falha em receber todos
os resultados, ou fecha a instrução antes de ter recebido todos os resultados,
os dados têm que ser recebidos implicitamente pela `mysqli`.

Também é possível fazer buffer dos resultados de uma instrução preparada
usando [mysqli\_stmt::store\_result()](mysqli-stmt.store-result.md).

**Recebendo resultados usando a interface mysqli\_result**

Ao invés de usar resultados vinculados, eles podem também ser recebidos através da
interface mysqli\_result. [mysqli\_stmt::get\_result()](mysqli-stmt.get-result.md)
retorna um conjunto de resultados em buffer.

**Exemplo #6 Usando mysqli\_result para receber resultados**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");

$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
$stmt->execute();

$result = $stmt->get_result();

var_dump($result->fetch_all(MYSQLI_ASSOC));
```

O exemplo acima produzirá:

```
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    int(1)
    ["label"]=>
    string(3) "PHP"
  }
}
```

Usar a interface [mysqli\_result](class.mysqli-result.md) oferece benefícios adicionais de
flexibilidade de navegação pelos resultados no lado do cliente.

**Exemplo #7 Conjunto de resultados com buffer para leitura flexível**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "user", "password", "database");

/* Instrução não preparada */
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP'), (2, 'Java'), (3, 'C++')");

$stmt = $mysqli->prepare("SELECT id, label FROM test");
$stmt->execute();

$result = $stmt->get_result();

for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
    $result->data_seek($row_no);
    var_dump($result->fetch_assoc());
}
```

O exemplo acima produzirá:

```
array(2) {
  ["id"]=>
  int(3)
  ["label"]=>
  string(3) "C++"
}
array(2) {
  ["id"]=>
  int(2)
  ["label"]=>
  string(4) "Java"
}
array(2) {
  ["id"]=>
  int(1)
  ["label"]=>
  string(3) "PHP"
}
```

**Escape e injeção SQL**

Variáveis vinculadas são enviadas ao servidor separadas da consulta e, portanto,
não podem interferir nela. O servidor usa estes valores diretamente no ponto
de execução, depois que o modelo de instrução é analisado. Parâmetros vinculados não
precisam ser escapados já que nunca são substituídos na string da consulta
diretamente. Uma dica deve ser fornecida ao servidor sobre o tipo da variável
vinculada, para criar a conversão apropriada.
Consulte a página da função [mysqli\_stmt::bind\_param()](mysqli-stmt.bind-param.md) para mais
informações.

Tal separação algumas vezes é considerada como o único recurso de segurança para
evitar injeção SQL, mas o mesmo grau de segurança pode ser conseguido com
instruções não preparadas, se todos os valores forem formatados corretamente. Deve ser
observado que a formatação correta não é o mesmo que escapar e envolve
mais lógica que um simples escape. Sendo assim, instruções preparadas são simplesmente uma
abordagem mais conveniente e com menos propensão a erros a este aspecto de segurança de banco de dados.

**Emulação de instrução preparada no lado do cliente**

A API não inclui suporte para instrução preparada no lado do cliente.

**Veja também**

- [mysqli::\_\_construct()](mysqli.construct.md)
- [mysqli::query()](mysqli.query.md)
- [mysqli::prepare()](mysqli.prepare.md)
- [mysqli\_stmt::prepare()](mysqli-stmt.prepare.md)
- [mysqli\_stmt::execute()](mysqli-stmt.execute.md)
- [mysqli\_stmt::bind\_param()](mysqli-stmt.bind-param.md)
- [mysqli\_stmt::bind\_result()](mysqli-stmt.bind-result.md)

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

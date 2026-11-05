# Executa uma consulta no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.query.php

---

# mysqli::query

# mysqli\_query

(PHP 5, PHP 7, PHP 8)

mysqli::query -- mysqli\_query — Executa uma consulta no banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::query**([string](language.types.string.md) `$query`, [int](language.types.integer.md) `$result_mode` = **`MYSQLI_STORE_RESULT`**): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_query**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$query`, [int](language.types.integer.md) `$result_mode` = **`MYSQLI_STORE_RESULT`**): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

Executa uma `query` no banco de dados.

**Aviso**

# Alerta de segurança: injeção de SQL

Se a consulta contiver qualquer entrada de
variável, [instruções
preparadas parametrizadas](mysqli.quickstart.prepared-statements.md) devem ser usadas. Alternativamente, os
dados devem ser formatados corretamente e todas as strings devem ser escapadas usando
a função [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md).

Para consultas não-DML (não INSERT, UPDATE ou DELETE),
esta função é semelhante a chamar
[mysqli\_real\_query()](mysqli.real-query.md) seguido por
[mysqli\_use\_result()](mysqli.use-result.md) ou
[mysqli\_store\_result()](mysqli.store-result.md).

> **Nota**:
>
> No caso em que uma instrução é passada para
> **mysqli\_query()** que é maior que
> `max_allowed_packet` do servidor, os códigos de
> erro retornados são diferentes dependendo se você está usando MySQL
> Native Driver (`mysqlnd`)ou MySQL Client Library
> (`libmysqlclient`). O comportamento é o seguinte:
>
> - `mysqlnd` no Linux retorna um código de erro de 1153.
>   A mensagem de erro significa que "recebi um pacote maior que
>   `max_allowed_packet` bytes".
> - `mysqlnd` no Windows retorna um código de erro 2006.
>   Esta mensagem de erro significa que o "server has gone away".
> - `libmysqlclient` em todas as plataformas retorna um código de erro
>   2006. Essa mensagem de erro significa que o "servidor foi
>   desativado".

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`query`
:   A string de consulta.

`result_mode`
:   O modo de resultado pode ser uma das 3 constantes que indicam como o
    resultado será retornado do servidor MySQL.

    **`MYSQLI_STORE_RESULT`** (padrão) - retorna um objeto
    [mysqli\_result](class.mysqli-result.md)com conjunto de resultados em buffer.

    **`MYSQLI_USE_RESULT`** - retorna um objeto
    [mysqli\_result](class.mysqli-result.md) com conjunto de resultados sem buffer.
    Enquanto houver registros pendentes esperando para serem buscados, a linha de
    conexão estará ocupada e todas as chamadas subseqüentes retornarão o erro
    `Commands out of sync`. Para evitar o erro, todos os registros
    devem ser buscados no servidor ou o conjunto de resultados deve ser descartado
    chamando [mysqli\_free\_result()](mysqli-result.free.md).

    **`MYSQLI_ASYNC`** (disponível com mysqlnd) - a consulta é
    executada de forma assíncrona e nenhum conjunto de resultados é retornado imediatamente.
    [mysqli\_poll()](mysqli.poll.md) é então usado para obter resultados de tais
    consultas. Usado em combinação com a constante
    **`MYSQLI_STORE_RESULT`** ou
    **`MYSQLI_USE_RESULT`**.

### Valor Retornado

Retorna **`false`** em caso de falha. Para consultas bem-sucedidas que produzem um
conjunto de resultados, como `SELECT, SHOW, DESCRIBE` ou
`EXPLAIN`, **mysqli\_query()** retornará um objeto
[mysqli\_result](class.mysqli-result.md). Para outras consultas bem-sucedidas,
**mysqli\_query()** retornará
**`true`**.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::query()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Criar tabela não retorna um conjunto de resultados */
$mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");
printf("Tabela myCity criada com sucesso.\n");

/* Consultas selecionadas retornam um conjunto de resultados */
$result = $mysqli->query("SELECT Name FROM City LIMIT 10");
printf("Select retornou %d linhas.\n", $result->num_rows);

/* Se tivermos que recuperar uma grande quantidade de dados, usamos MYSQLI_USE_RESULT */
$result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT);

/* Observe que não podemos executar nenhuma função que interaja com o
servidor até que todos os registros tenham sido totalmente recuperados ou o resultado
conjunto foi fechado. Todas as chamadas retornarão um erro 'fora de sincronia' */
$mysqli->query("SET @a:='isso não vai funcionar'");
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* Criar tabela não retorna um conjunto de resultados */
mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City");
printf("Tabela myCity criada com sucesso.\n");

/* Consultas de seleção retornam um conjunto de resultados */
$result = mysqli_query($link, "SELECT Name FROM City LIMIT 10");
printf("Select retornou %d linhas.\n", mysqli_num_rows($result));

/* Se tivermos que recuperar uma grande quantidade de dados, usamos MYSQLI_USE_RESULT */
$result = mysqli_query($link, "SELECT * FROM City", MYSQLI_USE_RESULT);

/* Observe que não podemos executar nenhuma função que interaja com o
servidor até que todos os registros tenham sido totalmente recuperados ou o resultado
conjunto foi fechado. Todas as chamadas retornarão um erro 'fora de sincronia' */
mysqli_query($link, "SET @a:='isso não vai funcionar'");
```

Os exemplos acima produzirão
algo semelhante a:

```
Tabela myCity criada com sucesso.
Select retornou 10 linhas.

Fatal error: Uncaught mysqli_sql_exception: Commands out of sync; you can't run this command now in...
```

### Veja também

- [mysqli\_execute\_query()](mysqli.execute-query.md) - Prepara, vincula parâmetros e executa a instrução SQL
- [mysqli\_real\_query()](mysqli.real-query.md) - Executa uma consulta SQL
- [mysqli\_multi\_query()](mysqli.multi-query.md) - Executa uma ou mais consultas no banco de dados
- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_free\_result()](mysqli-result.free.md) - Libera memória associada a um resultado

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

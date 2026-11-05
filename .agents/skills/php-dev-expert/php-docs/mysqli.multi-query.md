# Executa uma ou mais consultas no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.multi-query.php

---

# mysqli::multi\_query

# mysqli\_multi\_query

(PHP 5, PHP 7, PHP 8)

mysqli::multi\_query -- mysqli\_multi\_query — Executa uma ou mais consultas no banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::multi\_query**([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_multi\_query**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

Executa uma ou múltiplas consultas que são concatenadas com ponto-e-vírgula.

**Aviso**

# Alerta de segurança: injeção de SQL

Se a consulta contiver qualquer entrada de
variável, [instruções
preparadas parametrizadas](mysqli.quickstart.prepared-statements.md) devem ser usadas. Alternativamente, os
dados devem ser formatados corretamente e todas as strings devem ser escapadas usando
a função [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md).

Consultas são enviadas em uma chamada única ao banco de dados e processadas sequencialmente.
**mysqli\_multi\_query()** espera pela finalização da primeira
consulta antes de retornar o controle ao PHP. Enquanto isso, o servidor MySQL
continuará processando as consultas remanescentes de forma assíncrona a partir do PHP e
disponibilizará os resultados para busca.

É recomendado usar
[do-while](control-structures.do.while.md) para processar consultas
múltiplas. A conexão estará ocupada enquanto todas as consultas tiverem concluído e
seus resultados enviados ao PHP. Nenhuma outra declaração pode ser emitida na
mesma conexão até que todas as consultas sejam processadas.
Para proceder à consulta seguinte, use
[mysqli\_next\_result()](mysqli.next-result.md). Se a consulta seguinte ainda não estiver pronta,
mysqli esperará pela resposta do servidor MySQL.
Para verificar se há mais resultados,
use [mysqli\_more\_results()](mysqli.more-results.md).

Para consultas que produzem um conjnto de resultados, como em
`SELECT, SHOW, DESCRIBE` ou
`EXPLAIN`,
[mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_store\_result()](mysqli.store-result.md)
podem ser usadas para recuperar o conjunto. Para consultas que não produzem um
conjunto de resultados, as mesmas funções podem ser usadas para recuperar informação como
o número de linhas afetadas.

**Dica**

Executar declarações `CALL` para procedimentos armazenados pode
produzir múltiplos conjuntos de resultados. Se o procedimento armazenado contiver
declarações `SELECT`, os conjuntos são retornados na
ordem em que são produzidos enquanto o procedimento é executado. Em geral, a função que
chama não sabe quantos conjuntos de resultados um procedimento irá retornar e deve
estar preparada para recuperar múltiplos conjuntos. O resultado final do procedimento
é um resultado de estado que não inclui nenhum conjunto. O estado indica se
o procedimento teve sucesso ou se ocorreu um erro.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`query`
:   Uma string contendo as consultas que serão executadas.
    Consultas múltiplas devem ser separadas por ponto-e-vírgula (;).

### Valor Retornado

Retorna **`false`** se a primeira consulta falhar.
Para recuperar erros subsequentes de outras consultas, deve-se chamar
[mysqli\_next\_result()](mysqli.next-result.md) primeiro.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::multi\_query()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT CURRENT_USER();";
$query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";

/* executa as consultas múltiplas */
$mysqli->multi_query($query);
do {
    /* armazena o conjunto de resultados no PHP */
    if ($result = $mysqli->store_result()) {
        while ($row = $result->fetch_row()) {
            printf("%s\n", $row[0]);
        }
    }
    /* divisor de impressão */
    if ($mysqli->more_results()) {
        printf("-----------------\n");
    }
} while ($mysqli->next_result());
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT CURRENT_USER();";
$query .= "SELECT Name FROM City ORDER BY ID LIMIT 20, 5";

/* executa as consultas múltiplas */
mysqli_multi_query($link, $query);
do {
    /* armazena o conjunto de resultados no PHP */
    if ($result = mysqli_store_result($link)) {
        while ($row = mysqli_fetch_row($result)) {
            printf("%s\n", $row[0]);
        }
    }
    /* divisor de impressão */
    if (mysqli_more_results($link)) {
        printf("-----------------\n");
    }
} while (mysqli_next_result($link));
```

Os exemplos acima produzirão
algo semelhante a:

```
my_user@localhost
-----------------
Amersfoort
Maastricht
Dordrecht
Leiden
Haarlemmermeer
```

### Veja também

- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_next\_result()](mysqli.next-result.md) - Prepara o próximo resultado de multi\_query
- [mysqli\_more\_results()](mysqli.more-results.md) - Verifica se há mais algum resultado de uma consulta múltipla

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

# Define o número de linhas a serem pré-buscadas pelas consultas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-set-prefetch.php

---

# oci\_set\_prefetch

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_set\_prefetch — Define o número de linhas a serem pré-buscadas pelas consultas

### Descrição

function **oci\_set\_prefetch**([resource](language.types.resource.md) `$statement`, [int](language.types.integer.md) `$rows`): [bool](language.types.boolean.md)

Define o número de linhas a serem armazenadas em buffer pelas bibliotecas do Oracle Client
após uma chamada de consulta bem-sucedida
a [oci\_execute()](function.oci-execute.md) e para cada
solicitação de busca interna subsequente ao banco de dados. Para consultas que retornam um
grande número de linhas, o desempenho pode ser significativamente melhorado
aumentando a contagem de pré-busca acima do
valor padrão
[oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch).

A pré-busca é a maneira eficiente da Oracle de retornar mais de uma
linha de dados do banco de dados em cada solicitação de rede. Isso pode
resultar em melhor utilização da rede e da CPU. O buffer de
linhas é interno ao OCI8 e o comportamento das funções de busca
do OCI8 permanece inalterado, independentemente da contagem de pré-busca. Por
exemplo, [oci\_fetch\_row()](function.oci-fetch-row.md) sempre retornará uma
linha. O buffer de pré-busca é por instrução e não é usado por
instruções reexecutadas ou por outras conexões.

Chame **oci\_set\_prefetch()** antes
de chamar [oci\_execute()](function.oci-execute.md).

Uma meta de ajuste é definir o valor de pré-busca para um tamanho razoável
para a rede e o banco de dados manipularem. Para consultas que retornam um
número muito grande de linhas, a eficiência geral do sistema pode ser melhor se
as linhas forem recuperadas do banco de dados em vários blocos (ou seja, definir o
valor de pré-busca menor que o número de linhas). Isso permite que o
banco de dados manipule as instruções de outros usuários enquanto o script PHP está
processando o conjunto atual de linhas.

A pré-busca de consultas foi introduzida no Oracle 8*i*. REF CURSOR
A pré-busca de CURSOR REF foi introduzida no Oracle 11*g*R2 e ocorre quando o PHP é
vinculado às bibliotecas do cliente Oracle 11*g*R2 (ou posterior).
A pré-busca de cursor aninhado foi
introduzida no Oracle 11*g*R2 e requer que tanto as bibliotecas do cliente Oracle
quanto o banco de dados sejam da versão 11*g*R2 ou superior.

A pré-busca não é suportada quando consultas contêm colunas LONG ou LOB.
O valor da pré-busca é ignorado e buscas de linha única serão usadas
em todas as situações em que a pré-busca não for suportada.

Ao utilizar o Oracle Database 12*c*, o valor de pré-busca
definido pelo PHP pode ser substituído pelo arquivo de configuração `oraaccess.xml` do cliente
da Oracle. Consulte
a documentação da Oracle para obter mais detalhes.

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

`rows`
:   O número de linhas a serem pré-buscadas, >= 0

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando o valor de pré-busca padrão para uma consulta**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'SELECT * FROM myverybigtable');
oci_set_prefetch($stid, 300);  // Defina antes de chamar oci_execute()
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 Alterando a pré-busca padrão para uma busca de CURSOR REF**

```
<?php
/*
  Crie o procedimento armazenado PL/SQL como:

  CREATE OR REPLACE PROCEDURE myproc(p1 OUT SYS_REFCURSOR) AS
  BEGIN
    OPEN p1 FOR SELECT * FROM all_objects WHERE ROWNUM < 5000;
  END;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'BEGIN myproc(:rc); END;');
$refcur = oci_new_cursor($conn);
oci_bind_by_name($stid, ':rc', $refcur, -1, OCI_B_CURSOR);
oci_execute($stid);

// Altera a pré-busca antes de executar o cursor.
// A pré-busca do REF CURSOR funciona quando o PHP está vinculado a bibliotecas de cliente Oracle 11gR2 ou posterior
oci_set_prefetch($refcur, 200);
oci_execute($refcur);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($refcur, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($refcur);
oci_free_statement($stid);
oci_close($conn);

?>
```

Se o PHP OCI8 buscar um CURSOR REF e, em seguida, passar o CURSOR REF de volta
para um segundo procedimento PL/SQL para processamento posterior,
defina a contagem de pré-busca do CURSOR REF como `0` para
evitar que linhas sejam "perdidas" do conjunto de resultados. O valor da pré-busca é
o número de linhas extras buscadas em cada solicitação interna do OCI8 para
o banco de dados, portanto, defini-lo como `0` significa apenas
buscar uma linha por vez.

**Exemplo #3 Definindo o valor de pré-busca ao passar um CURSOR REF de volta para o Oracle**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/orcl');

// Obtém o CURSOR REF
$stid = oci_parse($conn, 'BEGIN myproc(:rc_out); END;');
$refcur = oci_new_cursor($conn);
oci_bind_by_name($stid, ':rc_out', $refcur, -1, OCI_B_CURSOR);
oci_execute($stid);

// Exibe duas linhas, mas não pré-busca nenhuma linha extra, caso contrário
// essas linhas extras não seriam passadas de volta para myproc_use_rc().
oci_set_prefetch($refcur, 0);
oci_execute($refcur);
$row = oci_fetch_array($refcur);
var_dump($row);
$row = oci_fetch_array($refcur);
var_dump($row);

// Passa o CURSOR REF para myproc_use_rc() para realizar mais processamento de dados
// com o conjunto de resultados
$stid = oci_parse($conn, 'begin myproc_use_rc(:rc_in); end;');
oci_bind_by_name($stid, ':rc_in', $refcur, -1, OCI_B_CURSOR);
oci_execute($stid);

?>
```

### Veja também

- Opção INI
  [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch)

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

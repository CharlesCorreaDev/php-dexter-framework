# Retorna a próxima linha de uma consulta como um array associativo ou numérico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-fetch-array.php

---

# oci\_fetch\_array

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_fetch\_array — Retorna a próxima linha de uma consulta como um array associativo ou numérico

### Descrição

function **oci\_fetch\_array**([resource](language.types.resource.md) `$statement`, [int](language.types.integer.md) `$mode` = OCI\_BOTH | OCI\_RETURN\_NULLS): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array contendo a próxima linha do conjunto de resultados de uma consulta.
Cada entrada do array corresponde a uma coluna da linha. Esta função
é normalmente chamada em um laço até retornar **`false`**, indicando
que não existem mais linhas.

Se `statement` corresponder a um bloco PL/SQL
retornando Conjuntos de Resultados Implícitos do Banco de Dados Oracle, as linhas de
todos os conjuntos serão buscadas consecutivamente. Se
`statement` for retornado
por [oci\_get\_implicit\_resultset()](function.oci-get-implicit-resultset.md), somente o
subconjunto de linhas de uma consulta filha será retornado.

Para obter detalhes sobre o mapeamento dos tipos de dados realizado pela
extensão OCI8, consulte os [tipos de dados
suportados pelo driver](oci8.datatypes.md).

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

    Também pode ser um identificador de instrução retornado por [oci\_get\_implicit\_resultset()](function.oci-get-implicit-resultset.md).

`mode`
:   Um segundo parâmetro opcional pode ser qualquer combinação das seguintes
    constantes:

    **Modos de **oci\_fetch\_array()****

    | Constante | Descrição |
    | --- | --- |
    | **`OCI_BOTH`** | Retorna um array com índices associativos e numéricos. É o mesmo que **`OCI_ASSOC`** + **`OCI_NUM`** e é o comportamento padrão. |
    | **`OCI_ASSOC`** | Retorna um array associativa. |
    | **`OCI_NUM`** | Retorna um array numérico. |
    | **`OCI_RETURN_NULLS`** | Cria elementos para campos **`null`**. Os valores do elemento serão um PHP **`null`**. |
    | **`OCI_RETURN_LOBS`** | Retorna o conteúdo dos LOBs em vez dos descritores de LOB. |

    O `mode` padrão é **`OCI_BOTH`**.

    Use o operador de adição "+" para especificar mais de
    um modo por vez.

### Valor Retornado

Retorna um array com índices associativos e/ou numéricos. Se não houver
mais linhas em `statement`,
**`false`** será retornado.

Por padrão, as colunas `LOB` são retornadas como descritores LOB.

As colunas `DATE` são retornadas como strings
no formato de data atual. O formato padrão pode ser alterado com
variáveis ​​de ambiente Oracle, como `NLS_LANG` ou
por um comando `ALTER SESSION SET
NLS_DATE_FORMAT` executado anteriormente.

Os nomes de colunas padrão do Oracle, que não diferenciam maiúsculas de minúsculas, terão
índices associativos em letras maiúsculas no array de resultados. Os nomes de colunas que diferenciam maiúsculas de minúsculas
terão índices de array usando a mesma capitalização da coluna.
Use [var\_dump()](function.var-dump.md) no array de resultados para verificar
a capitalização apropriada a ser usada para cada consulta.

O nome da tabela não está incluído no índice do array. Se a consulta
contiver duas colunas diferentes com o mesmo nome,
use **`OCI_NUM`** ou adicione um apelido de coluna à consulta
para garantir a exclusividade do nome, veja o exemplo nº 7. Caso contrário, apenas
uma coluna será retornada via PHP.

### Examples

**Exemplo #1 **oci\_fetch\_array()** com **`OCI_BOTH`****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT department_id, department_name FROM departments');
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
    // Usa os nomes das colunas em letras maiúsculas para os índices do array associativo
    echo $row[0] . " e " . $row['DEPARTMENT_ID']   . " são a mesma coisa<br>\n";
    echo $row[1] . " e " . $row['DEPARTMENT_NAME'] . " são a mesma coisa<br>\n";
}

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 **oci\_fetch\_array()** com **`OCI_NUM`****

```
<?php

/*
  Antes de executar, crie a tabela:
      CREATE TABLE mytab (id NUMBER, description CLOB);
      INSERT INTO mytab (id, description) values (1, 'Uma string muito longa');
      COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, description FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_NUM)) != false) {
    echo $row[0] . "<br>\n";
    echo $row[1]->read(10) . "<br>\n"; // isso produzirá os primeiros 10 bytes de DESCRIPTION
}

// O resultado é:
//    1
//    Uma string

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 **oci\_fetch\_array()** com **`OCI_ASSOC`****

```
<?php

/*
  Antes de executar, crie a tabela:
      CREATE TABLE mytab (id NUMBER, description CLOB);
      INSERT INTO mytab (id, description) values (1, 'Uma string muito longa');
      COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, description FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
    echo $row['ID'] . "<br>\n";
    echo $row['DESCRIPTION']->read(10) . "<br>\n"; // isso produzirá os primeiros 10 bytes de DESCRIPTION
}

// O resultado será:
//    1
//    Uma string

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #4 **oci\_fetch\_array()** com **`OCI_RETURN_NULLS`****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT 1, null FROM dual');
oci_execute($stid);
while (($row = oci_fetch_array ($stid, OCI_ASSOC)) != false) { // Ignora NULLs
    var_dump($row);
}

/*
O código acima exibe:
  array(1) {
    [1]=>
    string(1) "1"
  }
*/

$stid = oci_parse($conn, 'SELECT 1, null FROM dual');
oci_execute($stid);
while (($row = oci_fetch_array ($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) { // Busca NULLs
    var_dump($row);
}

/*
O código acima exibe:
  array(2) {
    [1]=>
    string(1) "1"
    ["NULL"]=>
    NULL
  }
*/

?>
```

**Exemplo #5 **oci\_fetch\_array()** com **`OCI_RETURN_LOBS`****

```
<?php

/*
  Antes de executar, crie a tabela:
      CREATE TABLE mytab (id NUMBER, description CLOB);
      INSERT INTO mytab (id, description) values (1, 'Uma string muito longa');
      COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT id, description FROM mytab');
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS)) != false) {
    echo $row['ID'] . "<br>\n";
    echo $row['DESCRIPTION'] . "<br>\n"; // contém todo o campo DESCRIPTION
    // Em um laço, liberar a variável grande antes da segunda busca reduz o pico de uso de memória do PHP
    unset($row);
}

// O resultado será:
//    1
//    Uma string muito longa

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #6 **oci\_fetch\_array()** com nomes de colunas sensíveis a maiúsculas/minúsculas**

```
<?php

/*
   Antes de executar, crie a tabela:
      CREATE TABLE mytab ("Name" VARCHAR2(20), city VARCHAR2(20));
      INSERT INTO mytab ("Name", city) values ('Chris', 'Melbourne');
      COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'select * from mytab');
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);

// Como 'Name' foi criada como uma coluna que diferencia maiúsculas de minúsculas, a mesma
// capitalização é usada para o índice do array. Entretanto, 'CITY' em maiúsculas precisa ser
// usada para o índice da coluna que não diferencia maiúsculas de minúsculas
print $row['Name'] . "<br>\n";   //  exibe Chris
print $row['CITY'] . "<br>\n";   //  exibe Melbourne

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #7 **oci\_fetch\_array()** com colunas que possuem nomes duplicados**

```
<?php

/*
  Antes de executar, crie as tabelas:
      CREATE TABLE mycity (id NUMBER, name VARCHAR2(20));
      INSERT INTO mycity (id, name) values (1, 'Melbourne');
      CREATE TABLE mycountry (id NUMBER, name VARCHAR2(20));
      INSERT INTO mycountry (id, name) values (1, 'Australia');
      COMMIT;
*/

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'SELECT mycity.name, mycountry.name
        FROM mycity, mycountry
        WHERE mycity.id = mycountry.id';
$stid = oci_parse($conn, $sql);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
var_dump($row);

// A saída contém apenas uma entrada "NAME":
//    array(1) {
//      ["NAME"]=>
//      string(9) "Australia"
//    }

// Para consultar um nome de coluna repetido, use um apelido de coluna SQL como "AS ctnm":
$sql = 'SELECT mycity.name AS ctnm, mycountry.name
        FROM mycity, mycountry
        WHERE mycity.id = mycountry.id';
$stid = oci_parse($conn, $sql);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
var_dump($row);

// A saída agora contém ambas as colunas selecionadas:
//    array(2) {
//      ["CTNM"]=>
//      string(9) "Melbourne"
//      ["NAME"]=>
//      string(9) "Australia"
//    }

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #8 **oci\_fetch\_array()** com colunas `DATE`**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Defina o formato de data para esta conexão.
// Por motivos de desempenho, considere alterar o formato
// em um gatilho ou com variáveis ​​de ambiente
$stid = oci_parse($conn, "ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD'");
oci_execute($stid);

$stid = oci_parse($conn, 'SELECT hire_date FROM employees WHERE employee_id = 188');
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC);
echo $row['HIRE_DATE'] . "<br>\n";  // exibe 1997-06-14

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #9 **oci\_fetch\_array()** com `REF CURSOR`**

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
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'BEGIN myproc(:rc); END;');
$refcur = oci_new_cursor($conn);
oci_bind_by_name($stid, ':rc', $refcur, -1, OCI_B_CURSOR);
oci_execute($stid);

// Executa o REF CURSOR retornado e busca nele como um identificador de instrução
oci_execute($refcur);
echo "<table border='1'>\n";
while (($row = oci_fetch_array($refcur, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
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

**Exemplo #10 Paginação com **oci\_fetch\_array()** usando uma consulta tipo `LIMIT`**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Encontra a versão do banco de dados
preg_match('/Release ([0-9]+)\./', oci_server_version($conn), $matches);
$oracleversion = $matches[1];

// Esta é a consulta a ser "paginada"
$sql = 'SELECT city, postal_code FROM locations ORDER BY city';

if ($oracleversion >= 12) {
    // Utilize a sintaxe Oracle 12c OFFSET / FETCH NEXT
    $sql = $sql . ' OFFSET :offset ROWS FETCH NEXT :numrows ROWS ONLY';
} else {
    // Versões mais antigas do Oracle precisam de uma consulta aninhada selecionando um subconjunto
    // de $sql. Ou, se a instrução SQL for conhecida no momento do desenvolvimento,
    // considere usar uma função row_number() em vez desta
    // solução aninhada. Em ambientes de produção, tome cuidado para
    // evitar problemas de injeção de SQL com concatenação.
    $sql = "SELECT * FROM (SELECT a.*, ROWNUM AS my_rnum
                           FROM ($sql) a
                           WHERE ROWNUM <= :offset + :numrows)
            WHERE my_rnum > :offset";
}

$offset  = 0;  // pula esta quantidade de linhas
$numrows = 5;  // retorna 5 linhas
$stid = oci_parse($conn, $sql);
oci_bind_by_name($stid, ':numrows', $numrows);
oci_bind_by_name($stid, ':offset', $offset);
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
    echo $row['CITY'] . " " . $row['POSTAL_CODE'] . "<br>\n";
}

// O resultado será:
//    Beijing 190518
//    Bern 3095
//    Bombay 490231
//    Geneva 1730
//    Hiroshima 6823

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #11 **oci\_fetch\_array()** com conjuntos de resultados implícitos do Oracle Database**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/pdborcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Requer OCI8 2.0 (ou posterior) e Oracle Database 12c (ou posterior)
// Veja também oci_get_implicit_resultset()
$sql = 'DECLARE
           c1 SYS_REFCURSOR;
        BEGIN
           OPEN c1 FOR SELECT city, postal_code FROM locations WHERE ROWNUM < 4 ORDER BY city;
           DBMS_SQL.RETURN_RESULT(c1);
           OPEN c1 FOR SELECT country_id FROM locations WHERE ROWNUM < 4 ORDER BY city;
           DBMS_SQL.RETURN_RESULT(c1);
        END;';

$stid = oci_parse($conn, $sql);
oci_execute($stid);

// Nota: oci_fetch_all e oci_fetch() não podem ser usados ​​desta maneira
echo "<table>\n";
while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>".($item!==null?htmlentities($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

// O resultado será:
//    Beijing 190518
//    Bern    3095
//    Bombay  490231
//    CN
//    CH
//    IN

oci_free_statement($stid);
oci_close($conn);

?>
```

### Notas

> **Nota**:
>
> Os índices de array associativo precisam estar em letras maiúsculas para colunas
> padrão do Oracle que foram criadas com nomes que não diferenciam maiúsculas de minúsculas.

> **Nota**:
>
> Para
> consultas que retornam um grande número de linhas, o desempenho pode ser
> melhorado significativamente
> aumentando [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch)
> ou usando [oci\_set\_prefetch()](function.oci-set-prefetch.md).

> **Nota**:
>
> A função **oci\_fetch\_array()**
> é *insignificantemente* mais lenta que
> [oci\_fetch\_assoc()](function.oci-fetch-assoc.md)
> ou [oci\_fetch\_row()](function.oci-fetch-row.md), mas é mais flexível.

### Veja também

- [oci\_fetch()](function.oci-fetch.md) - Busca a próxima linha de uma consulta em buffers internos
- [oci\_fetch\_all()](function.oci-fetch-all.md) - Busca várias linhas de uma consulta em um array bidimensional
- [oci\_fetch\_assoc()](function.oci-fetch-assoc.md) - Retorna a próxima linha de uma consulta como um array associativo
- [oci\_fetch\_object()](function.oci-fetch-object.md) - Retorna a próxima linha de uma consulta como um objeto
- [oci\_fetch\_row()](function.oci-fetch-row.md) - Retorna a próxima linha de uma consulta como um array numérico
- [oci\_set\_prefetch()](function.oci-set-prefetch.md) - Define o número de linhas a serem pré-buscadas pelas consultas

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

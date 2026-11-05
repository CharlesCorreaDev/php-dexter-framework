# Vincula uma variável PHP a um marcador Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-bind-by-name.php

---

# oci\_bind\_by\_name

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_bind\_by\_name — Vincula uma variável PHP a um marcador Oracle

### Descrição

function **oci\_bind\_by\_name**(  
    [resource](language.types.resource.md) `$statement`,  
    [string](language.types.string.md) `$param`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [int](language.types.integer.md) `$max_length` = -1,  
    [int](language.types.integer.md) `$type` = 0  
): [bool](language.types.boolean.md)

Vincula uma variável PHP `var` ao marcador de variável vinculada do Oracle
`param`. A vinculação é
importante para o desempenho do banco de dados Oracle e também é uma forma de
evitar problemas de segurança de injeção de SQL.

A vinculação permite que o banco de dados reutilize o contexto da instrução e
armazena em cache execuções anteriores da instrução, mesmo que outro
usuário ou processo a tenha executado originalmente. A vinculação reduz as preocupações
com injeção de SQL porque os dados associados a uma variável vinculada
nunca são tratados como parte da instrução SQL. Ela não
precisa de escape.

Variáveis ​​PHP que foram vinculadas podem ser alteradas e a
declaração reexecutada sem a necessidade de analisar novamente a declaração ou
revincular.

No Oracle, as variáveis de vinculação são comumente divididas
em vinculações `IN` para valores que são passados ​​para
o banco de dados, e vinculações `OUT` para valores que são
retornados ao PHP. Uma variável de vinculação pode ser
tanto `IN` quanto `OUT`. O fato de uma
variável de vinculação ser usada para entrada ou saída é determinado em
tempo de execução.

É necessário especificar `max_length` ao usar
uma vinculação `OUT` para que o PHP aloque memória suficiente
para armazenar o valor retornado.

Para vinculações `IN`, é recomendado definir
o comprimento `max_length` se a instrução for
reexecutada várias vezes com valores diferentes para a variável PHP.
Caso contrário, o Oracle pode truncar os dados para o comprimento do
valor inicial da variável PHP. Se não for conhecido o
comprimento máximo, deve ser chamada novamente a função **oci\_bind\_by\_name()**
com o tamanho de dados atual antes de
cada chamada [oci\_execute()](function.oci-execute.md). Vincular um
comprimento desnecessariamente grande trará um impacto na memória do processo
no banco de dados.

Uma chamada de vinculação informa ao Oracle de qual endereço de memória os dados serão lidos.
Para vinculações `IN`, esse endereço precisa conter
dados válidos quando [oci\_execute()](function.oci-execute.md) for chamada. Isso
significa que a variável vinculada deve permanecer no escopo até
a execução. Se isso não acontecer, resultados inesperados ou erros como
"ORA-01460: unimplemented or unreasonable conversion requested" (solicitada conversão não implementada não razoável)
podem ocorrer. Para vinculações `OUT`, um dos sintomas é quando nenhum
valor é definido na variável PHP.

Para uma instrução que é executada repetidamente, valores vinculados que
nunca mudam podem reduzir a capacidade do otimizador Oracle em
escolher o melhor plano de execução de instrução. Instruções de execução longa
que raramente são reexecutadas podem não se beneficiar da vinculação. No entanto,
em ambos os casos a vinculação pode ser mais segura do que juntar strings em uma
instrução SQL, pois isso pode ser um risco de segurança se o texto não filtrado do usuário
for concatenado.

### Parâmetros

`statement`
:   Um identificador de instrução OCI8 válido.

`param`
:   O marcador de variável vinculada prefixado com dois pontos usado na instrução.
    Os dois pontos são opcionais
    em `param`. O Oracle não usa
    pontos de interrogação para marcadores.

`var`
:   A variável PHP a ser associada a `param`.

`max_length`
:   Define o comprimento máximo para os dados. Se for definido como -1, esta
    função usará o comprimento atual
    de `var` para definir o comprimento
    máximo. Neste caso, o `var` deve
    existir e conter dados
    quando **oci\_bind\_by\_name()** for chamada.

`type`
:   O tipo de dados como o Oracle tratará os dados. O
    `type` padrão usado
    é **`SQLT_CHR`**. O Oracle converterá os dados
    entre este tipo e a coluna do banco de dados (ou tipo de variável PL/SQL),
    quando possível.

    Se for necessário vincular um tipo de dado abstrato (LOB/ROWID/BFILE), ele
    deve ser alocado primeiro usando a
    função [oci\_new\_descriptor()](function.oci-new-descriptor.md). O parâmetro
    `length` não é usado para tipos de dados abstratos
    e deve ser definido como -1.

    Os valores possíveis para `type` são:

    - **`SQLT_BFILEE`** ou **`OCI_B_BFILE`**
      - para BFILEs;
    - **`SQLT_CFILEE`** ou **`OCI_B_CFILEE`**
      - para CFILEs;
    - **`SQLT_CLOB`** ou **`OCI_B_CLOB`**
      - para CLOBs;
    - **`SQLT_BLOB`** ou **`OCI_B_BLOB`**
      - para BLOBs;
    - **`SQLT_RDD`** ou **`OCI_B_ROWID`**
      - para ROWIDs;
    - **`SQLT_NTY`** ou **`OCI_B_NTY`**
      - para tipos de dados nomeados;
    - **`SQLT_INT`** ou **`OCI_B_INT`** - para inteiros;
    - **`SQLT_CHR`** - para VARCHARs;
    - **`SQLT_BIN`** ou **`OCI_B_BIN`**
      - para colunas RAW;
    - **`SQLT_LNG`** - para colunas LONG;
    - **`SQLT_LBI`** - para colunas LONG RAW;
    - **`SQLT_RSET`** - para cursores criados
      com [oci\_new\_cursor()](function.oci-new-cursor.md);
    - **`SQLT_BOL`** ou **`OCI_B_BOL`**
      - para BOOLEANs PL/SQL (Requer Oracle Database 12c)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Inserindo dados com **oci\_bind\_by\_name()****

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (id NUMBER, text VARCHAR2(40));

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn,"INSERT INTO mytab (id, text) VALUES(:id_bv, :text_bv)");

$id = 1;
$text = "Dados a inserir     ";
oci_bind_by_name($stid, ":id_bv", $id);
oci_bind_by_name($stid, ":text_bv", $text);
oci_execute($stid);

// A tabela agora contém: 1, 'Dados a inserir     '

?>
```

**Exemplo #2 Vinculando uma vez para múltiplas execuções**

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (id NUMBER);

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$a = array(1,3,5,7,11);  // dados a inserir

$stid = oci_parse($conn, 'INSERT INTO mytab (id) VALUES (:bv)');
oci_bind_by_name($stid, ':bv', $v, 20);
foreach ($a as $v) {
    $r = oci_execute($stid, OCI_DEFAULT);  // não confirma automaticamente
}
oci_commit($conn); // confirma tudo de uma vez

// A tabela contém cinco linhas: 1, 3, 5, 7, 11

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 Vinculando com um laço `foreach`**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql = 'SELECT * FROM departments WHERE department_name = :dname AND location_id = :loc';
$stid = oci_parse($conn, $sql);

$ba = array(':dname' => 'IT Support', ':loc' => 1700);

foreach ($ba as $key => $val) {

    // oci_bind_by_name($stid, $key, $val) não funciona
    // porque ela vincula cada marcado à mesma localização: $val
    // em vez disso, use a localização real dos dados: $ba[$key]
    oci_bind_by_name($stid, $key, $ba[$key]);
}

oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
foreach ($row as $item) {
    print $item."<br>\n";
}

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #4 Vinculando em uma cláusula WHERE**

```
<?php

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql = 'SELECT last_name FROM employees WHERE department_id = :didbv ORDER BY last_name';
$stid = oci_parse($conn, $sql);
$didbv = 60;
oci_bind_by_name($stid, ':didbv', $didbv);
oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
    echo $row['LAST_NAME'] ."<br>\n";
}

// O resultado é
//    Austin
//    Ernst
//    Hunold
//    Lorentz
//    Pataballa

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #5 Vinculando com uma cláusula LIKE**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

// Encontre todas as cidades que começam com 'South'
$stid = oci_parse($conn, "SELECT city FROM locations WHERE city LIKE :bv");
$city = 'South%';  // '%' é um coringa no SQL
oci_bind_by_name($stid, ":bv", $city);
oci_execute($stid);
oci_fetch_all($stid, $res);

foreach ($res['CITY'] as $c) {
    print $c . "<br>\n";
}
// O resultado é
//   South Brunswick
//   South San Francisco
//   Southlake

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #6 Vinculando com REGEXP\_LIKE**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

// Encontre todas as cidades que contenham 'ing'
$stid = oci_parse($conn, "SELECT city FROM locations WHERE REGEXP_LIKE(city, :bv)");
$city = '.*ing.*';
oci_bind_by_name($stid, ":bv", $city);
oci_execute($stid);
oci_fetch_all($stid, $res);

foreach ($res['CITY'] as $c) {
    print $c . "<br>\n";
}
// O resultado é
//   Beijing
//   Singapore

oci_free_statement($stid);
oci_close($conn);

?>
```

Para um número pequeno e fixo de condições de cláusula IN, use variáveis vinculadas
individuais. Valores desconhecidos no momento da execução podem ser definidos como NULL.
Isso permite que uma única instrução seja usada por todos os usuários
do aplicativo, maximizando a eficiência do cache do Oracle DB.

**Exemplo #7 Vinculando vários valores em uma cláusula IN**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql = 'SELECT last_name FROM employees WHERE employee_id in (:e1, :e2, :e3)';
$stid = oci_parse($conn, $sql);
$mye1 = 103;
$mye2 = 104;
$mye3 = NULL; // finja que não nos foi dado esse valor
oci_bind_by_name($stid, ':e1', $mye1);
oci_bind_by_name($stid, ':e2', $mye2);
oci_bind_by_name($stid, ':e3', $mye3);
oci_execute($stid);
oci_fetch_all($stid, $res);
foreach ($res['LAST_NAME'] as $name) {
    print $name ."<br>\n";
}

// O resultado é
//   Ernst
//   Hunold

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #8 Vinculando um ROWID retornado por uma consulta**

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (id NUMBER, salary NUMBER, name VARCHAR2(40));
//   INSERT INTO mytab (id, salary, name) VALUES (1, 100, 'Chris');
//   COMMIT;

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT ROWID, name FROM mytab WHERE id = :id_bv FOR UPDATE');
$id = 1;
oci_bind_by_name($stid, ':id_bv', $id);
oci_execute($stid);
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
$rid = $row['ROWID'];
$name = $row['NAME'];

// Altera nome para maiúsculas e salva as alterações
$name = strtoupper($name);
$stid = oci_parse($conn, 'UPDATE mytab SET name = :n_bv WHERE ROWID = :r_bv');
oci_bind_by_name($stid, ':n_bv', $name);
oci_bind_by_name($stid, ':r_bv', $rid, -1, OCI_B_ROWID);
oci_execute($stid);

// A tabela agora contém 1, 100, CHRIS

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #9 Vinculando um ROWID em INSERT**

```
<?php

// Este exemplo insere um id e um nome e, em seguida, atualiza o salário
// Crie a tabela com:
//   CREATE TABLE mytab (id NUMBER, salary NUMBER, name VARCHAR2(40));
//
// Baseado no exemplo ROWID original de thies at thieso dot net (980221)

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql = "INSERT INTO mytab (id, name) VALUES(:id_bv, :name_bv)
        RETURNING ROWID INTO :rid";

$ins_stid = oci_parse($conn, $sql);

$rowid = oci_new_descriptor($conn, OCI_D_ROWID);
oci_bind_by_name($ins_stid, ":id_bv",   $id,    10);
oci_bind_by_name($ins_stid, ":name_bv", $name,  32);
oci_bind_by_name($ins_stid, ":rid",     $rowid, -1, OCI_B_ROWID);

$sql = "UPDATE mytab SET salary = :salary WHERE ROWID = :rid";
$upd_stid = oci_parse($conn, $sql);
oci_bind_by_name($upd_stid, ":rid", $rowid, -1, OCI_B_ROWID);
oci_bind_by_name($upd_stid, ":salary", $salary,   32);

// ids e nomes para inserir
$data = array(1111 => "Larry",
              2222 => "Bill",
              3333 => "Jim");

// Salário de cada pessoa
$salary = 10000;

// Insere e atualiza imediatamente cada linha
foreach ($data as $id => $name) {
    oci_execute($ins_stid);
    oci_execute($upd_stid);
}

$rowid->free();
oci_free_statement($upd_stid);
oci_free_statement($ins_stid);

// Mostra as novas linhas
$stid = oci_parse($conn, "SELECT * FROM mytab");
oci_execute($stid);
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    var_dump($row);
}

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #10 Vinculação para uma função armazenada PL/SQL**

```
<?php

//  Antes de executar o programa PHP, crie uma função armazenada em
//  SQL*Plus ou SQL Developer:
//
//  CREATE OR REPLACE FUNCTION myfunc(p IN NUMBER) RETURN NUMBER AS
//  BEGIN
//      RETURN p * 3;
//  END;

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$p = 8;

$stid = oci_parse($conn, 'begin :r := myfunc(:p); end;');
oci_bind_by_name($stid, ':p', $p);

// O valor de retorno é uma vinculação OUT. O tipo padrão
// será um tipo string, então vincular um comprimento 40
// significa que no máximo 40 dígitos serão retornados.
oci_bind_by_name($stid, ':r', $r, 40);

oci_execute($stid);

print "$r\n";   // prints 24

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #11 Vinculando parâmetros para um procedimento armazenado PL/SQL**

```
<?php

//  Antes de executar o programa PHP, crie um procedimento armazenado em
//  SQL*Plus ou SQL Developer:
//
//  CREATE OR REPLACE PROCEDURE myproc(p1 IN NUMBER, p2 OUT NUMBER) AS
//  BEGIN
//      p2 := p1 * 2;
//  END;

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$p1 = 8;

$stid = oci_parse($conn, 'begin myproc(:p1, :p2); end;');
oci_bind_by_name($stid, ':p1', $p1);

// O segundo parâmetro do procedimento é uma vinculação OUT. O tipo padrão
// será um tipo string, então vincular um comprimento 40 significa que no máximo 40
// dígitos serão retornados.
oci_bind_by_name($stid, ':p2', $p2, 40);

oci_execute($stid);

print "$p2\n";   // exibe 16

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #12 Vinculando uma coluna CLOB**

```
<?php

// Antes de executar, crie a tabela:
//     CREATE TABLE mytab (mykey NUMBER, myclob CLOB);

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$mykey = 12343;  // chave arbitrária para este exemplo;

$sql = "INSERT INTO mytab (mykey, myclob)
        VALUES (:mykey, EMPTY_CLOB())
        RETURNING myclob INTO :myclob";

$stid = oci_parse($conn, $sql);
$clob = oci_new_descriptor($conn, OCI_D_LOB);
oci_bind_by_name($stid, ":mykey", $mykey, 5);
oci_bind_by_name($stid, ":myclob", $clob, -1, OCI_B_CLOB);
oci_execute($stid, OCI_DEFAULT);
$clob->save("A very long string");

oci_commit($conn);

// Obtendo dados CLOB

$query = 'SELECT myclob FROM mytab WHERE mykey = :mykey';

$stid = oci_parse ($conn, $query);
oci_bind_by_name($stid, ":mykey", $mykey, 5);
oci_execute($stid);

print '<table border="1">';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS)) {
    print '<tr><td>'.$row['MYCLOB'].'</td></tr>';
    // Em um laço, liberar a variável grande antes da segunda busca reduz o pico de uso de memória do PHP
    unset($row);
}
print '</table>';

?>
```

**Exemplo #13 Vinculando um BOOLEAN PL/SQL**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$plsql =
  "begin
    :output1 := true;
    :output2 := false;
   end;";

$s = oci_parse($c, $plsql);
oci_bind_by_name($s, ':output1', $output1, -1, OCI_B_BOL);
oci_bind_by_name($s, ':output2', $output2, -1, OCI_B_BOL);
oci_execute($s);
var_dump($output1);  // true
var_dump($output2);  // false

?>
```

### Notas

**Aviso**

Não use [addslashes()](function.addslashes.md)
e **oci\_bind\_by\_name()** simultaneamente, pois nenhum
escape é necessário. Qualquer escape aplicado magicamente será gravado
no banco de dados porque **oci\_bind\_by\_name()**
insere dados literalmente e não remove asaps ou caracteres de
escape.

> **Nota**:
>
> Se uma string for vinculada a uma coluna `CHAR` em
> uma cláusula `WHERE`, lembre-se de que o Oracle usa
> semântica de comparação com preenchimento em branco para colunas `CHAR`.
> A variável PHP deve ser preenchida com preenchimento em branco para a mesma
> largura da coluna para que a cláusula `WHERE`
> seja bem-sucedida.

> **Nota**:
>
> O argumento `var` do PHP é uma referência. Algumas
> formas de laços não funcionam como esperado:
>
> ```
> <?php
> foreach ($myarray as $key => $value)  {
>     oci_bind_by_name($stid, $key, $value);
> }
> ?>
> ```
>
> Isso vincula cada chave à localização de $value, então todas as variáveis
> vinculadas acabam apontando para o valor da última iteração do laço.
> Em vez disso, use o seguinte:
>
> ```
> <?php
> foreach ($myarray as $key => $value) {
>     oci_bind_by_name($stid, $key, $myarray[$key]);
> }
> ?>
> ```

### Veja também

- [oci\_bind\_array\_by\_name()](function.oci-bind-array-by-name.md) - Vincula um array PHP a um parâmetro de array Oracle PL/SQL
- [oci\_parse()](function.oci-parse.md) - Prepara uma instrução Oracle para execução

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

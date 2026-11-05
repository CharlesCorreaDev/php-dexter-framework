# Executa uma instrução SQL diretamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-exec.php

---

# db2\_exec

(PECL ibm\_db2 >= 1.0.0)

db2\_exec — 
Executa uma instrução SQL diretamente

### Descrição

function **db2\_exec**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$statement`, [array](language.types.array.md) `$options` = []): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Executa uma instrução SQL diretamente.

Se for planejado interpolar variáveis ​​PHP na instrução SQL, é necessário ter ciência
que esta é uma das exposições de segurança mais comuns. Deve ser considerado chamar
[db2\_prepare()](function.db2-prepare.md) para preparar uma instrução SQL com marcadores
de parâmetro para valores de entrada. Na sequência pode ser chamada a função [db2\_execute()](function.db2-execute.md)
para passar os valores de entrada e evitar ataques de injeção de SQL.

Se a intenção for emitir repetidamente a mesma instrução SQL com diferentes
parâmetros, podem ser chamadas as funções [db2\_prepare()](function.db2-prepare.md) e
[db2\_execute()](function.db2-execute.md) para permitir que o servidor de banco de dados reutilize o
plano e aumente a eficiência do acesso ao banco de dados.

### Parâmetros

`connection`
:   Uma variável de recurso de conexão de banco de dados válida, conforme retornada de
    [db2\_connect()](function.db2-connect.md) ou [db2\_pconnect()](function.db2-pconnect.md).

`statement`
:   Uma instrução SQL. A instrução não pode conter nenhum marcador de parâmetro.

`options`
:   Um array associativo contendo opções de instrução. Este parâmetro pode ser
    usado para solicitar um cursor rolável em servidores de banco de dados que
    suportam esta funcionalidade.

    Para uma descrição das opções de instrução válidas, consulte
    [db2\_set\_option()](function.db2-set-option.md).

### Valor Retornado

Retorna um recurso de instrução se a instrução SQL foi emitida com sucesso,
ou **`false`** se o banco de dados falhou ao executar a instrução SQL.

### Examples

**Exemplo #1 Criando uma tabela com **db2\_exec()****

O exemplo a seguir usa **db2\_exec()** para emitir um conjunto
de instruções DDL no processo de criação de uma tabela.

```
<?php
$conn = db2_connect($database, $user, $password);

// Cria a tabela de teste
$create = 'CREATE TABLE animals (id INTEGER, breed VARCHAR(32),
    name CHAR(16), weight DECIMAL(7,2))';
$result = db2_exec($conn, $create);
if ($result) {
    print "A tabela foi criada com sucesso.\n";
}

// Preenche a tabela de teste
$animals = array(
    array(0, 'cat', 'Pook', 3.2),
    array(1, 'dog', 'Peaches', 12.3),
    array(2, 'horse', 'Smarty', 350.0),
    array(3, 'gold fish', 'Bubbles', 0.1),
    array(4, 'budgerigar', 'Gizmo', 0.2),
    array(5, 'goat', 'Rickety Ride', 9.7),
    array(6, 'llama', 'Sweater', 150)
);

foreach ($animals as $animal) {
    $rc = db2_exec($conn, "INSERT INTO animals (id, breed, name, weight)
      VALUES ({$animal[0]}, '{$animal[1]}', '{$animal[2]}', {$animal[3]})");
    if ($rc) {
        print "Insert... ";
    }
}
?>
```

O exemplo acima produzirá:

```
A tabela foi criada com sucesso.
Insert... Insert... Insert... Insert... Insert... Insert... Insert...
```

**Exemplo #2 Executando uma instrução SELECT com um cursor rolável**

O exemplo a seguir demonstra como solicitar um cursor rolável para
uma instrução SQL emitida por **db2\_exec()**.

```
<?php
$conn = db2_connect($database, $user, $password);
$sql = "SELECT name FROM animals
    WHERE weight < 10.0
    ORDER BY name";
if ($conn) {
    require_once 'prepare.inc';
    $stmt = db2_exec($conn, $sql, array('cursor' => DB2_SCROLLABLE));
    while ($row = db2_fetch_array($stmt)) {
        print "$row[0]\n";
    }
}
?>
```

O exemplo acima produzirá:

```
Bubbles
Gizmo
Pook
Rickety Ride
```

**Exemplo #3 Retornando dados XML como um SQL ResultSet**

O exemplo a seguir demonstra como trabalhar com documentos armazenados
em uma coluna XML usando o banco de dados SAMPLE. Usando um pouco de
SQL/XML bem simples, este exemplo retorna alguns dos nós em um documento XML em
um formato SQL ResultSet com o qual a maioria dos usuários está familiarizada.

```
<?php

$conn = db2_connect("SAMPLE", "db2inst1", "ibmdb2");

$query = 'SELECT * FROM XMLTABLE(
    XMLNAMESPACES (DEFAULT \'http://posample.org\'),
    \'db2-fn:xmlcolumn("CUSTOMER.INFO")/customerinfo\'
    COLUMNS
    "CID" VARCHAR (50) PATH \'@Cid\',
    "NAME" VARCHAR (50) PATH \'name\',
    "PHONE" VARCHAR (50) PATH \'phone [ @type = "work"]\'
    ) AS T
    WHERE NAME = \'Kathy Smith\'
    ';
$stmt = db2_exec($conn, $query);

while($row = db2_fetch_object($stmt)){
    printf("$row->CID     $row->NAME     $row->PHONE\n");
}
db2_close($conn);

?>
```

O exemplo acima produzirá:

```
1000     Kathy Smith     416-555-1358
1001     Kathy Smith     905-555-7258
```

**Exemplo #4 Executando um "JOIN" com dados XML**

O exemplo a seguir funciona com documentos armazenados em 2 colunas XML diferentes
no banco de dados SAMPLE. Ele cria 2 tabelas temporárias
dos documentos XML de 2 colunas diferentes e
retorna um SQL ResultSet com informações sobre o status de envio
para o cliente.

```
<?php

$conn = db2_connect("SAMPLE", "db2inst1", "ibmdb2");

$query = '
    SELECT A.CID, A.NAME, A.PHONE, C.PONUM, C.STATUS
    FROM
    XMLTABLE(
    XMLNAMESPACES (DEFAULT \'http://posample.org\'),
    \'db2-fn:xmlcolumn("CUSTOMER.INFO")/customerinfo\'
    COLUMNS
    "CID" BIGINT PATH \'@Cid\',
    "NAME" VARCHAR (50) PATH \'name\',
    "PHONE" VARCHAR (50) PATH \'phone [ @type = "work"]\'
    ) as A,
    PURCHASEORDER AS B,
    XMLTABLE (
    XMLNAMESPACES (DEFAULT \'http://posample.org\'),
    \'db2-fn:xmlcolumn("PURCHASEORDER.PORDER")/PurchaseOrder\'
    COLUMNS
    "PONUM"  BIGINT PATH \'@PoNum\',
    "STATUS" VARCHAR (50) PATH \'@Status\'
    ) as C
    WHERE A.CID = B.CUSTID AND
    B.POID = C.PONUM AND
    A.NAME = \'Kathy Smith\'
';

$stmt = db2_exec($conn, $query);

while($row = db2_fetch_object($stmt)){
    printf("$row->CID     $row->NAME     $row->PHONE     $row->PONUM     $row->STATUS\n");
}

db2_close($conn);

?>
```

O exemplo acima produzirá:

```
1001     Kathy Smith     905-555-7258     5002     Shipped
```

**Exemplo #5 Retornando dados SQL como parte de um documento XML maior**

O exemplo a seguir funciona com uma parte dos documentos PRODUCT.DESCRIPTION
no banco de dados SAMPLE. Ele cria um documento XML contendo
descrição do produto (dados XML) e informações de preço (dados SQL).

```
<?php

$conn = db2_connect("SAMPLE", "db2inst1", "ibmdb2");

$query = '
SELECT
XMLSERIALIZE(
XMLQUERY(\'
    declare boundary-space strip;
    declare default element namespace "http://posample.org";
    <promoList> {
    for $prod in $doc/product
    where $prod/description/price < 10.00
    order by $prod/description/price ascending
    return(
        <promoitem> {
        $prod,
        <startdate> {$start} </startdate>,
        <enddate> {$end} </enddate>,
        <promoprice> {$promo} </promoprice>
        } </promoitem>
    )
    } </promoList>
\' passing by ref DESCRIPTION AS "doc",
PROMOSTART as "start",
PROMOEND as "end",
PROMOPRICE as "promo"
RETURNING SEQUENCE)
AS CLOB (32000))
AS NEW_PRODUCT_INFO
FROM PRODUCT
WHERE PID = \'100-100-01\'
';

$stmt = db2_exec($conn, $query);

while($row = db2_fetch_array($stmt)){
    printf("$row[0]\n");
}
db2_close($conn);

?>
```

O exemplo acima produzirá:

```
<promoList xmlns="http://posample.org">
    <promoitem>
    <product pid="100-100-01">
        <description>
            <name>Snow Shovel, Basic 22 inch</name>
            <details>Basic Snow Shovel, 22 inches wide, straight handle with D-Grip</details>
            <price>9.99</price>
            <weight>1 kg</weight>
        </description>
    </product>
    <startdate>2004-11-19</startdate>
    <enddate>2004-12-19</enddate>
    <promoprice>7.25</promoprice>
    </promoitem>
</promoList>
```

### Veja também

- [db2\_execute()](function.db2-execute.md) - Executa uma instrução SQL preparada
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada

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

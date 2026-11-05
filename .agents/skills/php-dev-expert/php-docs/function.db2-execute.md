# Executa uma instrução SQL preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-execute.php

---

# db2\_execute

(PECL ibm\_db2 >= 1.0.0)

db2\_execute — 
Executa uma instrução SQL preparada

### Descrição

function **db2\_execute**([resource](language.types.resource.md) `$stmt`, [array](language.types.array.md) `$parameters` = []): [bool](language.types.boolean.md)

**db2\_execute()** executa uma instrução SQL que foi
preparada por [db2\_prepare()](function.db2-prepare.md).

Se a instrução SQL retornar um conjunto de resultados, por exemplo, uma instrução SELECT
ou uma CALL para um procedimento armazenado que retorna um ou mais conjuntos de resultados,
pode ser recuperada uma linha como um array a partir do recurso `stmt`
usando [db2\_fetch\_assoc()](function.db2-fetch-assoc.md),
[db2\_fetch\_both()](function.db2-fetch-both.md) ou
[db2\_fetch\_array()](function.db2-fetch-array.md). Como alternativa, pode ser usada a função
[db2\_fetch\_row()](function.db2-fetch-row.md) para mover o ponteiro do conjunto de resultados para a
próxima linha e buscar uma coluna por vez dessa linha com
[db2\_result()](function.db2-result.md).

Consulte [db2\_prepare()](function.db2-prepare.md) para uma breve discussão sobre as
vantagens de usar [db2\_prepare()](function.db2-prepare.md) e
**db2\_execute()** em vez de [db2\_exec()](function.db2-exec.md).

### Parâmetros

`stmt`
:   Uma instrução preparada retornada de [db2\_prepare()](function.db2-prepare.md).

`parameters`
:   Um array de parâmetros de entrada que correspondem a quaisquer marcadores de parâmetros contidos
    na instrução preparada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Preparando e executando uma instrução SQL com marcadores de parâmetros**

O exemplo a seguir prepara uma instrução INSERT que aceita quatro
marcadores de parâmetros e, em seguida, itera sobre um array de arrays contendo os
valores de entrada a serem passados ​​para **db2\_execute()**.

```
<?php
$pet = array(0, 'cat', 'Pook', 3.2);

$insert = 'INSERT INTO animals (id, breed, name, weight)
    VALUES (?, ?, ?, ?)';

$stmt = db2_prepare($conn, $insert);
if ($stmt) {
    $result = db2_execute($stmt, $pet);
    if ($result) {
        print "Novo animal de estimação adicionado com sucesso.";
    }
}
?>
```

O exemplo acima produzirá:

```
Novo animal de estimação adicionado com sucesso.
```

**Exemplo #2 Chamando um procedimento armazenado com um parâmetro OUT**

O exemplo a seguir prepara uma instrução CALL que aceita um
marcador de parâmetro representando um parâmetro OUT, vincula a variável PHP
`$my_pets` ao parâmetro usando
[db2\_bind\_param()](function.db2-bind-param.md), então emite
**db2\_execute()** para executar a instrução CALL. Após a
CHAMADA para o procedimento armazenado ter sido feita, o valor de
`$num_pets` muda para refletir o valor retornado pelo
procedimento armazenado para aquele parâmetro OUT.

```
<?php
$num_pets = 0;
$res = db2_prepare($conn, "CALL count_my_pets(?)");
$rc = db2_bind_param($res, 1, "num_pets", DB2_PARAM_OUT);
$rc = db2_execute($res);
print "I have $num_pets pets!";
?>
```

O exemplo acima produzirá:

```
I have 7 pets!
```

**Exemplo #3 Retornando dados XML como um ResultSet SQL**

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
    WHERE NAME = ?
    ';

$stmt = db2_prepare($conn, $query);

$name = 'Kathy Smith';

if ($stmt) {
    db2_bind_param($stmt, 1, "name", DB2_PARAM_IN);
    db2_execute($stmt);

    while($row = db2_fetch_object($stmt)){
    printf("$row->CID     $row->NAME     $row->PHONE\n");
    }
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
    A.NAME = ?
';

$stmt = db2_prepare($conn, $query);

$name = 'Kathy Smith';

if ($stmt) {
    db2_bind_param($stmt, 1, "name", DB2_PARAM_IN);
    db2_execute($stmt);

    while($row = db2_fetch_object($stmt)){
    printf("$row->CID     $row->NAME     $row->PHONE     $row->PONUM     $row->STATUS\n");
    }
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
WHERE PID = ?
';

$stmt = db2_prepare($conn, $query);

$pid = "100-100-01";

if ($stmt) {
    db2_bind_param($stmt, 1, "pid", DB2_PARAM_IN);
    db2_execute($stmt);

    while($row = db2_fetch_array($stmt)){
    printf("$row[0]\n");
    }
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

- [db2\_exec()](function.db2-exec.md) - Executa uma instrução SQL diretamente
- [db2\_fetch\_array()](function.db2-fetch-array.md) - Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_assoc()](function.db2-fetch-assoc.md) - Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both()](function.db2-fetch-both.md) - Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
- [db2\_fetch\_row()](function.db2-fetch-row.md) - Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada
- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada
- [db2\_result()](function.db2-result.md) - Retorna uma única coluna de uma linha no conjunto de resultados

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

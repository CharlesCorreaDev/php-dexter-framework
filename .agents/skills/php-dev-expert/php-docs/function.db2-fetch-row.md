# Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-fetch-row.php

---

# db2\_fetch\_row

(PECL ibm\_db2 >= 1.0.0)

db2\_fetch\_row — 
Define o ponteiro do conjunto de resultados para a próxima linha ou linha solicitada

### Descrição

function **db2\_fetch\_row**([resource](language.types.resource.md) `$stmt`, [int](language.types.integer.md) `$row_number` = -1): [bool](language.types.boolean.md)

Use **db2\_fetch\_row()** para iterar por um conjunto de resultados ou
para apontar para uma linha específica em um conjunto de resultados se você solicitou um cursor
rolável.

Para recuperar campos individuais do conjunto de resultados, chame a
função [db2\_result()](function.db2-result.md).

Em vez de chamar **db2\_fetch\_row()** e
[db2\_result()](function.db2-result.md), a maioria das aplicações chamará
[db2\_fetch\_assoc()](function.db2-fetch-assoc.md), [db2\_fetch\_both()](function.db2-fetch-both.md),
ou [db2\_fetch\_array()](function.db2-fetch-array.md) para avançar o ponteiro do conjunto de resultados
e retornar uma linha completa como um array.

### Parâmetros

`stmt`
:   Um recurso `stmt` válido.

`row_number`
:   Com cursores roláveis, pode ser solicitado um número de linha específico no
    conjunto de resultados. A numeração de linhas é indexada em 1.

### Valor Retornado

Retorna **`true`** se a linha solicitada existir no conjunto de resultados. Retorna
**`false`** se a linha solicitada não existir no conjunto de resultados.

### Examples

**Exemplo #1 Iterando por um conjunto de resultados**

O exemplo a seguir demonstra como iterar por um conjunto de resultados
com **db2\_fetch\_row()** e recuperar colunas do
conjunto de resultados com [db2\_result()](function.db2-result.md).

```
<?php
$sql = 'SELECT name, breed FROM animals WHERE weight < ?';
$stmt = db2_prepare($conn, $sql);
db2_execute($stmt, array(10));
while (db2_fetch_row($stmt)) {
    $name = db2_result($stmt, 0);
    $breed = db2_result($stmt, 1);
    print "$name $breed";
}
?>
```

O exemplo acima produzirá:

```
cat Pook
gold fish Bubbles
budgerigar Gizmo
goat Rickety Ride
```

**Exemplo #2 Alternativas i5/OS recomendadas para db2\_fetch\_row/db2\_result**

No i5/OS, é recomendado que seja usada a função [db2\_fetch\_both()](function.db2-fetch-both.md),
[db2\_fetch\_array()](function.db2-fetch-array.md) ou [db2\_fetch\_object()](function.db2-fetch-object.md)
em vez de **db2\_fetch\_row()**/[db2\_result()](function.db2-result.md). Em geral,
**db2\_fetch\_row()**/[db2\_result()](function.db2-result.md) têm mais problemas
com vários tipos de coluna na tradução de `EBCDIC` para `ASCII`,
incluindo possível truncamento em aplicações `DBCS`.
Pode-se perceber também que o desempenho de [db2\_fetch\_both()](function.db2-fetch-both.md),
[db2\_fetch\_array()](function.db2-fetch-array.md) e [db2\_fetch\_object()](function.db2-fetch-object.md)
é superior a **db2\_fetch\_row()**/[db2\_result()](function.db2-result.md).

```
<?php
  $conn = db2_connect("","","");
  $sql = 'SELECT SPECIFIC_SCHEMA, SPECIFIC_NAME, ROUTINE_SCHEMA, ROUTINE_NAME, ROUTINE_TYPE, ROUTINE_CREATED, ROUTINE_BODY, IN_PARMS, OUT_PARMS, INOUT_PARMS, PARAMETER_STYLE, EXTERNAL_NAME, EXTERNAL_LANGUAGE FROM QSYS2.SYSROUTINES FETCH FIRST 2 ROWS ONLY';
  $stmt = db2_exec($conn, $sql, array('cursor' => DB2_SCROLLABLE));
  while ($row = db2_fetch_both($stmt)){
    echo "<br>db2_fetch_both {$row['SPECIFIC_NAME']} {$row['ROUTINE_CREATED']} {$row[5]}";
  }
  $stmt = db2_exec($conn, $sql, array('cursor' => DB2_SCROLLABLE));
  while ($row = db2_fetch_array($stmt)){
    echo "<br>db2_fetch_array {$row[1]}  {$row[5]}";
  }
  $stmt = db2_exec($conn, $sql, array('cursor' => DB2_SCROLLABLE));
  while ($row = db2_fetch_object($stmt)){
    echo "<br>db2_fetch_object {$row->SPECIFIC_NAME} {$row->ROUTINE_CREATED}";
  }
  db2_close($conn);
?>
```

O exemplo acima produzirá:

```
db2_fetch_both MATCH_ANIMAL 2006-08-25-17.10.23.775000 2006-08-25-17.10.23.775000
db2_fetch_both MULTIRESULTS 2006-10-17-10.11.05.308000 2006-10-17-10.11.05.308000
db2_fetch_array MATCH_ANIMAL 2006-08-25-17.10.23.775000
db2_fetch_array MULTIRESULTS 2006-10-17-10.11.05.308000
db2_fetch_object MATCH_ANIMAL 2006-08-25-17.10.23.775000
db2_fetch_object MULTIRESULTS 2006-10-17-10.11.05.308000
```

### Veja também

- [db2\_fetch\_array()](function.db2-fetch-array.md) - Retorna um array, indexado pela posição da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_assoc()](function.db2-fetch-assoc.md) - Retorna um array, indexado pelo nome da coluna, representando uma linha em um conjunto de resultados
- [db2\_fetch\_both()](function.db2-fetch-both.md) - Retorna um array, indexado pelo nome da coluna e pela posição, representando uma linha em um conjunto de resultados
- [db2\_fetch\_object()](function.db2-fetch-object.md) - Retorna um objeto com propriedades que representam colunas na linha buscada
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

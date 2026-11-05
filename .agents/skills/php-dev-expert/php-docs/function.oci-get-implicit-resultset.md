# Retorna o próximo recurso de instrução filho de um recurso de instrução pai que possui conjuntos de resultados implícitos do Oracle Database

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-get-implicit-resultset.php

---

# oci\_get\_implicit\_resultset

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL OCI8 >= 2.0.0)

oci\_get\_implicit\_resultset — Retorna o próximo recurso de instrução filho de um recurso de instrução pai que possui conjuntos de resultados implícitos do Oracle Database

### Descrição

function **oci\_get\_implicit\_resultset**([resource](language.types.resource.md) `$statement`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Usado para buscar conjuntos consecutivos de resultados de consulta após a
execução de um bloco Oracle PL/SQL armazenado ou anônimo, onde esse
bloco retorna resultados de consulta com a
função PL/SQL *DBMS\_SQL.RETURN\_RESULT* do Oracle Database 12
(ou posterior). Isso permite que blocos PL/SQL retornem facilmente
resultados de consulta.

A instrução filha pode ser usada com qualquer uma das funções de busca do OCI8:
[oci\_fetch()](function.oci-fetch.md), [oci\_fetch\_all()](function.oci-fetch-all.md),
[oci\_fetch\_array()](function.oci-fetch-array.md), [oci\_fetch\_object()](function.oci-fetch-object.md),
[oci\_fetch\_assoc()](function.oci-fetch-assoc.md) ou [oci\_fetch\_row()](function.oci-fetch-row.md).

As instruções filhas herdam o valor de pré-busca da instrução pai,
ou podem ser definidas explicitamente com [oci\_set\_prefetch()](function.oci-set-prefetch.md).

### Parâmetros

`statement`
:   Um identificador de instrução OCI8 válido criado
    por [oci\_parse()](function.oci-parse.md) e executado
    por [oci\_execute()](function.oci-execute.md). O identificador
    da instrução pode ou não estar associado a uma instrução SQL
    que retorna Conjuntos de Resultados Implícitos.

### Valor Retornado

Retorna um identificador de instrução para a próxima instrução filha disponível
em `statement`. Retorna **`false`** quando as instruções filhas
não existem ou todas as instruções filhas foram retornadas
por chamadas anteriores
para **oci\_get\_implicit\_resultset()**.

### Examples

**Exemplo #1 Buscando conjuntos de resultados implícitos em um laço**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/pdborcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

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

while (($stid_c = oci_get_implicit_resultset($stid))) {
    echo "<h2>Novo conjunto de resultados implícitos:</h2>\n";
    echo "<table>\n";
    while (($row = oci_fetch_array($stid_c, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "  <td>".($item!==null?htmlentities($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;")."</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
}

// Resultado:
//    Novo conjunto de resultados implícitos:
//     Beijing 190518
//     Bern    3095
//     Bombay  490231
//    Novo conjunto de resultados implícitos:
//     CN
//     CH
//     IN

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 Obtendo identificadores de instruções filhas individualmente**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/pdborcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

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

$stid_1 = oci_get_implicit_resultset($stid);
$stid_2 = oci_get_implicit_resultset($stid);

$row = oci_fetch_array($stid_1, OCI_ASSOC+OCI_RETURN_NULLS);
var_dump($row);
$row = oci_fetch_array($stid_2, OCI_ASSOC+OCI_RETURN_NULLS);
var_dump($row);
$row = oci_fetch_array($stid_1, OCI_ASSOC+OCI_RETURN_NULLS);
var_dump($row);
$row = oci_fetch_array($stid_2, OCI_ASSOC+OCI_RETURN_NULLS);
var_dump($row);

// Resultado:
//    array(2) {
//      ["CITY"]=>
//      string(7) "Beijing"
//      ["POSTAL_CODE"]=>
//      string(6) "190518"
//    }
//    array(1) {
//      ["COUNTRY_ID"]=>
//      string(2) "CN"
//    }
//    array(2) {
//      ["CITY"]=>
//      string(4) "Bern"
//      ["POSTAL_CODE"]=>
//      string(4) "3095"
//    }
//    array(1) {
//      ["COUNTRY_ID"]=>
//      string(2) "CH"
//    }

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 Definindo explicitamente a contagem de pré-busca**

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/pdborcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'DECLARE
            c1 SYS_REFCURSOR;
        BEGIN
           OPEN c1 FOR SELECT city, postal_code FROM locations ORDER BY city;
           DBMS_SQL.RETURN_RESULT(c1);
        END;';

$stid = oci_parse($conn, $sql);
oci_execute($stid);

$stid_c = oci_get_implicit_resultset($stid);
oci_set_prefetch($stid_c, 200);   // Defina a pré-busca antes de buscar na instrução filho
echo "<table>\n";
while (($row = oci_fetch_array($stid_c, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>".($item!==null?htmlentities($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #4 Exemplo de conjunto de resultados implícitos sem usar **oci\_get\_implicit\_resultset()****

Todos os resultados de todas as consultas são retornados consecutivamente.

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/pdborcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

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

// Resultado:
//    Beijing 190518
//    Bern 3095
//    Bombay 490231
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
> Para
> consultas que retornam um grande número de linhas, o desempenho pode ser
> melhorado significativamente
> aumentando [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch)
> ou usando [oci\_set\_prefetch()](function.oci-set-prefetch.md).

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

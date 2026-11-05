# Busca várias linhas de uma consulta em um array bidimensional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-fetch-all.php

---

# oci\_fetch\_all

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_fetch\_all — Busca várias linhas de uma consulta em um array bidimensional

### Descrição

function **oci\_fetch\_all**(  
    [resource](language.types.resource.md) `$statement`,  
    [array](language.types.array.md) `&$output`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [int](language.types.integer.md) `$limit` = -1,  
    [int](language.types.integer.md) `$flags` = OCI\_FETCHSTATEMENT\_BY\_COLUMN | OCI\_ASSOC  
): [int](language.types.integer.md)

Busca várias linhas de uma consulta em um array bidimensional.
Por padrão, todas as linhas são retornadas.

Esta função pode ser chamada apenas uma vez para cada consulta executada
com [oci\_execute()](function.oci-execute.md).

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

`output`
:   A variável para conter as linhas retornadas.

    As colunas LOB são retornadas como strings, onde o Oracle suporta
    conversão.

    Veja [oci\_fetch\_array()](function.oci-fetch-array.md) para mais informações
    sobre como dados e tipos são obtidos.

`offset`
:   O número de linhas iniciais a serem descartadas ao buscar o
    resultado. O valor padrão é 0, então a primeira linha em diante é
    retornada.

`limit`
:   O número de linhas a serem retornadas. O padrão é -1, o que significa que retorna
    todas as linhas a partir de `offset` + 1.

`flags`
:   O parâmetro `flags` indica a estrutura
    do array e se arrays associativos devem ser usados.

    **Modos de estrutura de array de **oci\_fetch\_all()****

    | Constante | Descrição |
    | --- | --- |
    | **`OCI_FETCHSTATEMENT_BY_ROW`** | O array externo conterá um sub-array por linha de consulta. |
    | **`OCI_FETCHSTATEMENT_BY_COLUMN`** | O array externo conterá um sub-array por coluna de consulta. Este é o padrão. |

    Os arrays podem ser indexados por título de coluna ou numericamente.
    Apenas um modo de indexação será retornado.

    ****oci\_fetch\_all()** Array Index Modes**

    | Constante | Descrição |
    | --- | --- |
    | **`OCI_NUM`** | Índices numéricos são usados ​​para cada array de coluna. |
    | **`OCI_ASSOC`** | Índices associativos são usados para cada array de coluna. Este é o padrão. |

    Use o operador de adição "+" para escolher uma combinação
    de estrutura de array e modos de índice.

    Os nomes de colunas padrão do Oracle não diferenciam maiúsculas de minúsculas e terão
    chaves de array em letras maiúsculas. Os nomes de colunas que diferenciam maiúsculas de minúsculas terão
    chaves de array usando a capitalização exata da coluna.
    Use [var\_dump()](function.var-dump.md)
    em `output` para verificar a capitalização apropriada
    a ser usada em cada consulta.

    Consultas que tenham mais de uma coluna com o mesmo nome
    devem usar apelidos de coluna. Caso contrário, apenas uma das colunas
    aparecerá em um array associativo.

### Valor Retornado

Retorna o número de linhas em `output`, que
pode ser 0 ou mais.

### Examples

**Exemplo #1 Exemplo de **oci\_fetch\_all()****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT POSTAL_CODE, CITY FROM locations WHERE ROWNUM < 3');
oci_execute($stid);

$nrows = oci_fetch_all($stid, $res);

echo "$nrows linhas buscadas<br>\n";
var_dump($res);

// O resultado será:
//    2 linhas buscadas
//    array(2) {
//      ["POSTAL_CODE"]=>
//      array(2) {
//        [0]=>
//        string(6) "00989x"
//        [1]=>
//        string(6) "10934x"
//      }
//      ["CITY"]=>
//      array(2) {
//        [0]=>
//        string(4) "Roma"
//        [1]=>
//        string(6) "Venice"
//      }
//    }

// Tabelando os resultados
echo "<table border='1'>\n";
foreach ($res as $col) {
    echo "<tr>\n";
    foreach ($col as $item) {
        echo "    <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #2 Exemplo de **oci\_fetch\_all()** com **`OCI_FETCHSTATEMENT_BY_ROW`****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT POSTAL_CODE, CITY FROM locations WHERE ROWNUM < 3');
oci_execute($stid);

$nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW);

echo "$nrows linhas buscadas<br>\n";
var_dump($res);

// O resultado será:
//    2 linhas buscadas
//    array(2) {
//      [0]=>
//      array(2) {
//        ["POSTAL_CODE"]=>
//        string(6) "00989x"
//        ["CITY"]=>
//        string(4) "Roma"
//      }
//      [1]=>
//      array(2) {
//        ["POSTAL_CODE"]=>
//        string(6) "10934x"
//        ["CITY"]=>
//        string(6) "Venice"
//      }
//    }

oci_free_statement($stid);
oci_close($conn);

?>
```

**Exemplo #3 **oci\_fetch\_all()** com **`OCI_NUM`****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT POSTAL_CODE, CITY FROM locations WHERE ROWNUM < 3');
oci_execute($stid);

$nrows = oci_fetch_all($stid, $res, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_NUM);

echo "$nrows linhas buscadas<br>\n";
var_dump($res);

// O resultado será:
//    2 linhas buscadas
//    array(2) {
//      [0]=>
//      array(2) {
//        [0]=>
//        string(6) "00989x"
//        [1]=>
//        string(4) "Roma"
//      }
//      [1]=>
//      array(2) {
//        [0]=>
//        string(6) "10934x"
//        [1]=>
//        string(6) "Venice"
//      }
//    }

oci_free_statement($stid);
oci_close($conn);

?>
```

### Notas

> **Nota**:
>
> Usar `offset` é muito ineficiente. Todas as
> linhas a serem ignoradas são incluídas no conjunto de resultados que é
> retornado do banco de dados para o PHP. Elas são então descartadas. É
> mais eficiente usar SQL para restringir o deslocamento e o intervalo de
> linhas na consulta. Veja [oci\_fetch\_array()](function.oci-fetch-array.md) para
> um exemplo.

> **Nota**:
>
> Consultas que retornam um grande número de linhas podem ser mais eficientes em termos de memória
> se uma função de busca de linha única
> como [oci\_fetch\_array()](function.oci-fetch-array.md) for usada.

> **Nota**:
>
> Para
> consultas que retornam um grande número de linhas, o desempenho pode ser
> melhorado significativamente
> aumentando [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch)
> ou usando [oci\_set\_prefetch()](function.oci-set-prefetch.md).

> **Nota**:
>
> Esta função não retornará linhas do Conjuntos de Resultados Implícitos
> do Oracle Database 12*c*. Use [oci\_fetch\_array()](function.oci-fetch-array.md)
> em vez disso.

### Veja também

- [oci\_fetch()](function.oci-fetch.md) - Busca a próxima linha de uma consulta em buffers internos
- [oci\_fetch\_array()](function.oci-fetch-array.md) - Retorna a próxima linha de uma consulta como um array associativo ou numérico
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

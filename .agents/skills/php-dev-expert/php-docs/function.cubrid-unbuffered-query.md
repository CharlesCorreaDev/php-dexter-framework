# Execute uma consulta sem buscar os resultados para a memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-unbuffered-query.php

---

# cubrid\_unbuffered\_query

(PECL CUBRID >= 8.3.0)

cubrid\_unbuffered\_query — Execute uma consulta sem buscar os resultados para a memória

### Descrição

function **cubrid\_unbuffered\_query**([string](language.types.string.md) `$query`, [resource](language.types.resource.md) `$conn_identifier` = ?): [resource](language.types.resource.md)

Esta função executa uma consulta sem esperar que todos os resultados da consulta tenham sido concluídos. Ela retornará
quando os resultados estiverem sendo gerados.

### Parâmetros

`query`
:   Uma consulta SQL.

`conn_identifier`
:   A conexão CUBRID connection. Se o identificador de conexão não for especificado, a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) será usada.

### Valor Retornado

Para instruções SELECT, SHOW, DESCRIBE ou EXPLAIN, retorna um recurso de identificador de requisição em caso de sucesso.

Para outros tipos de instrução SQL como UPDATE, DELETE, DROP, etc., retorna **`true`** em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_unbuffered\_query()****

```
<?php
    $link = cubrid_connect("localhost", 30000, "demodb", "dba", "");
    if (!$link)
    {
        die('Não foi possível conectar.');
    }
    $query = "select * from code";
    $result = cubrid_unbuffered_query($query, $link);

    while ($row = cubrid_fetch($result))
    {
        var_dump($row);
    }

    cubrid_close_request($result);
    cubrid_disconnect($link);
?>
```

### Notas

> **Nota**:
>
> Os benefícios de **cubrid\_unbuffered\_query()** vêm
> com um custo: [cubrid\_num\_rows()](function.cubrid-num-rows.md) e
> [cubrid\_data\_seek()](function.cubrid-data-seek.md) não podem ser usadas em um conjunto de resultados retornado por
> **cubrid\_unbuffered\_query()**.

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

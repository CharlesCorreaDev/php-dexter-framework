# Retorna o nome TTY associado à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-tty.php

---

# pg\_tty

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_tty — 
Retorna o nome TTY associado à conexão

### Descrição

function **pg\_tty**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [string](language.types.string.md)

**pg\_tty()** retorna o nome TTY para o qual a saída
de depuração do lado do servidor é enviada na instância de
`connection` do PostgreSQL fornecida.

> **Nota**:
>
> **pg\_tty()** está obsoleto, pois o servidor não presta mais
> atenção à configuração do TTY, mas a função permanece para compatibilidade com
> versões anteriores.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Uma [string](language.types.string.md) contendo o TTY de depuração da `connection`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_tty()****

```
<?php
$pgsql_conn = pg_connect("dbname=mark host=localhost");

if ($pgsql_conn) {
   print "O TTY de depuração do servidor é: " . pg_tty($pgsql_conn) . "<br/>\n";
} else {
   print pg_last_error($pgsql_conn);
   exit;
}
?>
```

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

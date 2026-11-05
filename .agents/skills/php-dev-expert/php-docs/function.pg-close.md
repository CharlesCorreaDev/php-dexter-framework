# Fecha uma conexão PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-close.php

---

# pg\_close

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_close — Fecha uma conexão PostgreSQL

### Descrição

function **pg\_close**([?](language.types.null.md)[PgSql\Connection](class.pgsql-connection.md) `$connection` = **`null`**): [true](language.types.singleton.md)

**pg\_close()** fecha a conexão não persistente
com um banco de dados PostgreSQL associado à instância de
`connection` fornecida.

> **Nota**:
>
> Usar **pg\_close()** geralmente não é necessário, pois
> conexões abertas não persistentes são fechadas automaticamente no
> final do script.

Se houver uma instância [PgSql\Lob](class.pgsql-lob.md) aberta na conexão, não
feche a conexão antes de fechar todas as instâncias [PgSql\Lob](class.pgsql-lob.md).

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` for **`null`**, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `connection` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **pg\_close()****

```
<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=mary")
   or die("Não foi possível conectar");
echo "Conectado com sucesso";
pg_close($dbconn);
?>
```

O exemplo acima produzirá:

```
Conectado com sucesso
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL

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

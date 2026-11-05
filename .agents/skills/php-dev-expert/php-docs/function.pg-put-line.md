# Envia uma string terminada em NULL para o backend do PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-put-line.php

---

# pg\_put\_line

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

pg\_put\_line — Envia uma string terminada em NULL para o backend do PostgreSQL

### Descrição

function **pg\_put\_line**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

**pg\_put\_line()** envia uma string terminada em NULL
para o servidor backend do PostgreSQL. Isto é necessário em conjunto
com o comando `COPY FROM` do PostgreSQL.

`COPY` é uma interface de carregamento de dados de alta velocidade
suportada pelo PostgreSQL. Os dados são transmitidos sem serem analisados
e em uma única transação.

Uma alternativa ao uso de comandos **pg\_put\_line()** brutos
é usar [pg\_copy\_from()](function.pg-copy-from.md). Esta é uma interface muito mais
simples.

> **Nota**:
>
> A aplicação deve enviar explicitamente os dois caracteres "\."
> na última linha para indicar ao backend que terminou de
> enviar seus dados, antes de emitir [pg\_end\_copy()](function.pg-end-copy.md).

**Aviso**

O uso de **pg\_put\_line()** faz com que a maioria das
operações de objetos grandes, incluindo [pg\_lo\_read()](function.pg-lo-read.md) e
[pg\_lo\_tell()](function.pg-lo-tell.md), falhem posteriormente. Você pode usar
[pg\_copy\_from()](function.pg-copy-from.md) e [pg\_copy\_to()](function.pg-copy-to.md)
no lugar.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`query`
:   Uma linha de texto a ser enviada diretamente para o backend do PostgreSQL. Um terminador `NULL`
    é adicionado automaticamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_put\_line()****

```
<?php
  $conn = pg_pconnect("dbname=foo");
  pg_query($conn, "create table bar (a int4, b char(16), d float8)");
  pg_query($conn, "copy bar from stdin");
  pg_put_line($conn, "3\thello world\t4.5\n");
  pg_put_line($conn, "4\tgoodbye world\t7.11\n");
  pg_put_line($conn, "\\.\n");
  pg_end_copy($conn);
?>
```

### Veja também

- [pg\_end\_copy()](function.pg-end-copy.md) - Sincroniza com back-end do PostgreSQL

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

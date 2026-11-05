# Exclui um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-unlink.php

---

# pg\_lo\_unlink

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_unlink — Exclui um objeto grande

### Descrição

function **pg\_lo\_unlink**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$oid`): [bool](language.types.boolean.md)

**pg\_lo\_unlink()** exclui um objeto grande com o
`oid`. Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_lounlink()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`oid`
:   O OID do objeto grande no banco de dados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_unlink()****

```
<?php
   // OID do objeto grande a ser excluído
   $doc_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   pg_lo_unlink($database, $doc_oid);
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_create()](function.pg-lo-create.md) - Cria um objeto grande
- [pg\_lo\_import()](function.pg-lo-import.md) - Importa um objeto grande do arquivo

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

# Importa um objeto grande do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-import.php

---

# pg\_lo\_import

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_import — Importa um objeto grande do arquivo

### Descrição

function **pg\_lo\_import**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$filename`, [int](language.types.integer.md)|[string](language.types.string.md) `$oid` = ?): [int](language.types.integer.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_lo\_import()** cria um novo objeto grande
no banco de dados usando um arquivo no sistema de arquivos como fonte
de dados.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_loimport()**.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`filename`
:   O caminho completo e o nome do arquivo no sistema de arquivos do
    cliente a partir do qual serão lidos os dados do objeto grande.

`oid`
:   Se um `oid` for fornecido, a função
    tentará criar um objeto grande com este id, caso contrário,
    um id de objeto livre será atribuído pelo servidor. O parâmetro
    depende da funcionalidade que apareceu pela primeira
    vez no PostgreSQL 8.1.

### Valor Retornado

O OID do objeto grande recém-criado, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_import()****

```
<?php
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $oid = pg_lo_import($database, '/tmp/lob.dat');
   pg_query($database, "commit");
?>
```

### Veja também

- [pg\_lo\_export()](function.pg-lo-export.md) - Exporta um objeto grande para arquivo
- [pg\_lo\_open()](function.pg-lo-open.md) - Abra um objeto grande

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

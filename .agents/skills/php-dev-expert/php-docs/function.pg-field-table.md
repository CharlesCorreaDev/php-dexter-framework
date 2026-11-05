# Retorna o nome ou oid do campo da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-table.php

---

# pg\_field\_table

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

pg\_field\_table — Retorna o nome ou oid do campo da tabela

### Descrição

function **pg\_field\_table**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field`, [bool](language.types.boolean.md) `$oid_only` = **`false`**): [string](language.types.string.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

**pg\_field\_table()** retorna o nome da tabela à qual o campo
pertence, ou o oid da tabela se `oid_only` for **`true`**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número do campo, começando em 0.

`oid_only`
:   Por padrão, o nome da tabela à qual o campo pertence é retornado, mas
    se `oid_only` estiver definido como **`true`**, então o
    oid será retornado.

### Valor Retornado

Em caso de sucesso, o nome da tabela de campos ou oid, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações da tabela sobre um campo**

```
<?php
$dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

$res = pg_query($dbconn, "SELECT bar FROM foo");

echo pg_field_table($res, 0);
echo pg_field_table($res, 0, true);

$res = pg_query($dbconn, "SELECT version()");
var_dump(pg_field_table($res, 0));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
foo
14379580

bool(false)
```

### Notas

> **Nota**:
>
> Retornar o oid é muito mais rápido do que retornar o nome da tabela porque
> buscar o nome da tabela requer uma consulta à tabela do sistema do banco de dados.

### Veja também

- [pg\_field\_name()](function.pg-field-name.md) - Retorna o nome de um campo
- [pg\_field\_type()](function.pg-field-type.md) - Retorna o nome do tipo para o número do campo correspondente

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

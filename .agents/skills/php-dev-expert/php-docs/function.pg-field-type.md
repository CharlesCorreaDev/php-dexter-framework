# Retorna o nome do tipo para o número do campo correspondente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-type.php

---

# pg\_field\_type

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_type — 
Retorna o nome do tipo para o número do campo correspondente

### Descrição

function **pg\_field\_type**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field`): [string](language.types.string.md)

**pg\_field\_type()** retorna uma string contendo o
nome do tipo base do `field` na instância
de `result` fornecida.

> **Nota**:
>
> Se o campo usar um domínio PostgreSQL (em vez de um tipo básico), será
> retornado o nome do tipo subjacente do domínio, e não o
> nome do próprio domínio.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldtype()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número do campo, começando em 0.

### Valor Retornado

Uma [string](language.types.string.md) contendo o nome base do tipo do campo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Suponha que 'título' seja um tipo varchar
  $res = pg_query($dbconn, "select title from authors where author = 'Orwell'");

  echo "Tipo de campo: ", pg_field_type($res, 0);
?>
```

O exemplo acima produzirá:

```
Tipo de campo: varchar
```

### Veja também

- [pg\_field\_prtlen()](function.pg-field-prtlen.md) - Retorna o comprimento impresso
- [pg\_field\_name()](function.pg-field-name.md) - Retorna o nome de um campo
- [pg\_field\_type\_oid()](function.pg-field-type-oid.md) - Retorna o ID do tipo (OID) para o número do campo correspondente

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

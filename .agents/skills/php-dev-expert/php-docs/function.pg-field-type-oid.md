# Retorna o ID do tipo (OID) para o número do campo correspondente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-type-oid.php

---

# pg\_field\_type\_oid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_field\_type\_oid — 
Retorna o ID do tipo (OID) para o número do campo correspondente

### Descrição

function **pg\_field\_type\_oid**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field`): [string](language.types.string.md)|[int](language.types.integer.md)

**pg\_field\_type\_oid()** retorna um número inteiro contendo o
OID do tipo base do `field` fornecido na instância
de `result` fornecida.

Você pode obter mais informações sobre o tipo de campo consultando a tabela de sistema
`pg_type` do PostgreSQL usando o OID obtido com esta função.
A função **format\_type()** do PostgreSQL converterá um
tipo OID em um nome de tipo padrão SQL.

> **Nota**:
>
> Se o campo usar um domínio PostgreSQL (em vez de um tipo básico), será
> retornado o OID do tipo subjacente do domínio, e não o OID
> do próprio domínio.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número do campo, começando em 0.

### Valor Retornado

O OID do tipo base do campo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Suponha que 'title' seja um tipo varchar
  $res = pg_query($dbconn, "select title from authors where author = 'Orwell'");

  echo "Campo title de tipo OID: ", pg_field_type_oid($res, 0);
?>
```

O exemplo acima produzirá:

```
Campo title de tipo OID: 1043
```

### Veja também

- [pg\_field\_type()](function.pg-field-type.md) - Retorna o nome do tipo para o número do campo correspondente
- [pg\_field\_prtlen()](function.pg-field-prtlen.md) - Retorna o comprimento impresso
- [pg\_field\_name()](function.pg-field-name.md) - Retorna o nome de um campo

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

# Retorna o nome de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-name.php

---

# pg\_field\_name

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_name — Retorna o nome de um campo

### Descrição

function **pg\_field\_name**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field`): [string](language.types.string.md)

**pg\_field\_name()** retorna o nome do campo que
ocupa o `field` fornecido na instância
de `result` fornecida. A numeração
dos campos começa em 0.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldname()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número do campo, começando em 0.

### Valor Retornado

O nome do campo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre os campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  $res = pg_query($dbconn, "select * from authors where author = 'Orwell'");
  $i = pg_num_fields($res);
  for ($j = 0; $j < $i; $j++) {
      echo "coluna $j\n";
      $fieldname = pg_field_name($res, $j);
      echo "nome da coluna: $fieldname\n";
      echo "tamanho impresso: " . pg_field_prtlen($res, $fieldname) . " characters\n";
      echo "tamanho de armazenamento: " . pg_field_size($res, $j) . " bytes\n";
      echo "tipo de campo: " . pg_field_type($res, $j) . " \n\n";
  }
?>
```

O exemplo acima produzirá:

```
coluna 0
nome da coluna: author
tamanho impresso: 6 characters
tamanho de armazenamento: -1 bytes
tipo de campo: varchar

coluna 1
nome da coluna: year
tamanho impresso: 4 characters
tamanho de armazenamento: 2 bytes
tipo de campo: int2

coluna 2
nome da coluna: title
tamanho impresso: 24 characters
tamanho de armazenamento: -1 bytes
tipo de campo: varchar
```

### Veja também

- [pg\_field\_num()](function.pg-field-num.md) - Retorna o número do campo para o campo nomeado

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

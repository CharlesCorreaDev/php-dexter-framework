# Retorna o comprimento impresso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-prtlen.php

---

# pg\_field\_prtlen

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_prtlen — Retorna o comprimento impresso

### Descrição

function **pg\_field\_prtlen**([PgSql\Result](class.pgsql-result.md) `$result`, [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md) `$row`, [mixed](language.types.mixed.md) `$field_name_or_number`): [int](language.types.integer.md)

function **pg\_field\_prtlen**([PgSql\Result](class.pgsql-result.md) `$result`, [mixed](language.types.mixed.md) `$field_name_or_number`): [int](language.types.integer.md)

**pg\_field\_prtlen()** retorna o comprimento real impresso
(número de caracteres) de um valor específico em um
`result` do PostgreSQL. A numeração das linhas começa em 0. Esta
função retornará **`false`** em caso de erro.

`field_name_or_number` pode ser passado como um
[int](language.types.integer.md) ou como uma [string](language.types.string.md). Se for passado como
[int](language.types.integer.md), o PHP o reconhece como o número do campo, caso contrário, como
o nome do campo.

Veja o exemplo dado na página [pg\_field\_name()](function.pg-field-name.md).

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldprtlen()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado. As linhas são numeradas de 0 para cima. Se omitido,
    a linha atual será buscada.

### Valor Retornado

O comprimento impresso do campo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A assinatura com dois argumentos da função **pg\_field\_prtlen()** (`result`, `field_name_or_number`) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo `row` para **`null`**. |
| 8.3.0 | `row` agora é anulável. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Could not connect");

  $res = pg_query($dbconn, "select * from authors where author = 'Orwell'");
  $i = pg_num_fields($res);
  for ($j = 0; $j < $i; $j++) {
      echo "column $j\n";
      $fieldname = pg_field_name($res, $j);
      echo "fieldname: $fieldname\n";
      echo "printed length: " . pg_field_prtlen($res, $fieldname) . " characters\n";
      echo "storage length: " . pg_field_size($res, $j) . " bytes\n";
      echo "field type: " . pg_field_type($res, $j) . " \n\n";
  }
?>
```

O exemplo acima produzirá:

```
column 0
fieldname: author
printed length: 6 characters
storage length: -1 bytes
field type: varchar

column 1
fieldname: year
printed length: 4 characters
storage length: 2 bytes
field type: int2

column 2
fieldname: title
printed length: 24 characters
storage length: -1 bytes
field type: varchar
```

### Veja também

- [pg\_field\_size()](function.pg-field-size.md) - Retorna o tamanho de armazenamento interno do campo nomeado

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

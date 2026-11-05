# Retorna o tamanho de armazenamento interno do campo nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-size.php

---

# pg\_field\_size

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_size — 
Retorna o tamanho de armazenamento interno do campo nomeado

### Descrição

function **pg\_field\_size**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)

**pg\_field\_size()** retorna o tamanho do armazenamento interno
(em bytes) do número do campo no `result` do
PostgreSQL fornecido.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldsize()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número do campo, começando em 0.

### Valor Retornado

O tamanho do armazenamento do campo interno (em bytes). -1 indica um campo de
comprimento variável.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  $res = pg_query($dbconn, "select * from authors where author = 'Orwell'");
  $i = pg_num_fields($res);
  for ($j = 0; $j < $i; $j++) {
      echo "coluna $j\n";
      $fieldname = pg_field_name($res, $j);
      echo "nome do campo: $fieldname\n";
      echo "comprimento impresso: " . pg_field_prtlen($res, $fieldname) . " caracteres\n";
      echo "comprimento de armazenamento: " . pg_field_size($res, $j) . " bytes\n";
      echo "tipo do campo: " . pg_field_type($res, $j) . " \n\n";
  }
?>
```

O exemplo acima produzirá:

```
coluna 0
nome do campo: author
comprimento impresso: 6 caracteres
comprimento de armazenamento: -1 bytes
tipo do campo: varchar

coluna 1
nome do campo: year
comprimento impresso: 4 caracteres
comprimento de armazenamento: 2 bytes
tipo do campo: int2

coluna 2
nome do campo: title
comprimento impresso: 24 caracteres
comprimento de armazenamento: -1 bytes
tipo do campo: varchar
```

### Veja também

- [pg\_field\_prtlen()](function.pg-field-prtlen.md) - Retorna o comprimento impresso
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

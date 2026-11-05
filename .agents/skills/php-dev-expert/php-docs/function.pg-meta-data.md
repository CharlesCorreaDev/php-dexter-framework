# Obtém metadados para tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-meta-data.php

---

# pg\_meta\_data

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_meta\_data — 
Obtém metadados para tabela

### Descrição

function **pg\_meta\_data**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$table_name`, [bool](language.types.boolean.md) `$extended` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_meta\_data()** retorna a definição de tabela para
`table_name` como um array.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   O nome da tabela.

`extended`
:   Opção para retornar metadados estendidos. O padrão é **`false`**.

### Valor Retornado

Um [array](language.types.array.md) da definição da tabela, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo metadados da tabela**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  $meta = pg_meta_data($dbconn, 'authors');
  if (is_array($meta)) {
      echo '<pre>';
      var_dump($meta);
      echo '</pre>';
  }
?>
```

O exemplo acima produzirá:

```
array(3) {
["author"]=>
array(5) {
  ["num"]=>
  int(1)
  ["type"]=>
  string(7) "varchar"
  ["len"]=>
  int(-1)
  ["not null"]=>
  bool(false)
  ["has default"]=>
  bool(false)
}
["year"]=>
array(5) {
  ["num"]=>
  int(2)
  ["type"]=>
  string(4) "int2"
  ["len"]=>
  int(2)
  ["not null"]=>
  bool(false)
  ["has default"]=>
  bool(false)
}
["title"]=>
array(5) {
  ["num"]=>
  int(3)
  ["type"]=>
  string(7) "varchar"
  ["len"]=>
  int(-1)
  ["not null"]=>
  bool(false)
  ["has default"]=>
  bool(false)
}
}
```

### Veja também

- [pg\_convert()](function.pg-convert.md) - Converte valores de array associativo em formas adequadas para instruções SQL

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

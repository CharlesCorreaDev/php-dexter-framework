# Obtém um registro do banco de dados como um array associativo.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-get-record-with-names.php

---

# dbase\_get\_record\_with\_names

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_get\_record\_with\_names — 
Obtém um registro do banco de dados como um array associativo.

### Descrição

function **dbase\_get\_record\_with\_names**([resource](language.types.resource.md) `$database`, [int](language.types.integer.md) `$number`): [array](language.types.array.md)

Obtém um registro do banco de dados como um array associativo.

### Parâmetros

`database`
:   Recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

`number`
:   O índice do registro entre `1` e
    `dbase_numrecords($dbase_identifier)`.

### Valor Retornado

Um array associativo com o registro. Isto também irá incluir uma chave chamada
`deleted` a qual é definida como 1 se o registro foi marcado
para exclusão (veja [dbase\_delete\_record()](function.dbase-delete-record.md)).
Portanto, não é possível obter o valor de um campo com nome
`deleted` com esta função.

Cada campo é convertido para o tipo PHP apropriado, exceto:

- Datas são mantidas como strings.
- Valores DateTime são convertidos em strings.
- Números inteiros fora do intervalo
  **`PHP_INT_MIN`**..**`PHP_INT_MAX`** são
  retornados como strings.
- Antes do dbase 7.0.0, os booleanos (`L`) eram convertidos em `1` ou
  `0`.

Em caso de erro, **dbase\_get\_record\_with\_names()** irá retornar **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Listando todos os membros registrados no banco de dados**

```
<?php
// open in read-only mode
$db = dbase_open('/tmp/test.dbf', 0);

if ($db) {
  $record_numbers = dbase_numrecords($db);
  for ($i = 1; $i <= $record_numbers; $i++) {
      $row = dbase_get_record_with_names($db, $i);
      if ($row['ismember'] == 1) {
          echo "Member #$i: " . trim($row['name']) . "\n";
      }
  }
}
?>
```

### Veja também

- [dbase\_get\_record()](function.dbase-get-record.md) - Obtém um registro do banco de dados como um array indexado

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

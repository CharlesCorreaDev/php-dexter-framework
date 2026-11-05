# Comprime um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-pack.php

---

# dbase\_pack

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_pack — Comprime um banco de dados

### Descrição

function **dbase\_pack**([resource](language.types.resource.md) `$database`): [bool](language.types.boolean.md)

Comprime o banco de dados especificado, apagando permanentemente todos os registros marcados
para remoção usando [dbase\_delete\_record()](function.dbase-delete-record.md).
Note que o arquivo será truncado após empacotamento bem sucedido (ao contrário do
comando PACK do dBASE III).

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` é agora do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Limpando um banco de dados dBase**

```
<?php

// abre somente-leitura
$db = dbase_open('/tmp/test.dbf', 2);

if ($db) {
  $record_numbers = dbase_numrecords($db);
  for ($i = 1; $i <= $record_numbers; $i++) {
      dbase_delete_record($db, $i);
  }
  // expurga os dados marcados para remoção
  dbase_pack($db);
}

?>
```

### Veja também

- [dbase\_delete\_record()](function.dbase-delete-record.md) - Exclui um registro do banco de dados

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

# Obtém o número de registros em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-numrecords.php

---

# dbase\_numrecords

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_numrecords — Obtém o número de registros em um banco de dados

### Descrição

function **dbase\_numrecords**([resource](language.types.resource.md) `$database`): [int](language.types.integer.md)

Obtém o número de registros (linhas) no banco de dados especificado.

> **Nota**:
>
> Resgistros marcados para remoção também são contados.

> **Nota**:
>
> Número de registros estão entre 1 e `dbase_numrecords($db)`,
> enquanto que números de campo estão entre 0 e `dbase_numfields($db)-1`.

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

### Valor Retornado

O número de registros no banco de dados, ou **`false`** se ocorrer um erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Lendo todos os registros de um banco de dados**

```
<?php

// abre somente leitura
$db = dbase_open('/tmp/test.dbf', 0);

if ($db) {
  $record_numbers = dbase_numrecords($db);
  for ($i = 1; $i <= $record_numbers; $i++) {
      $record = dbase_get_record($db, $i);
      if (!$record['deleted']) {
          // faz algo com o registro
      } else {
          // faz algo com o registro deletado ou ignora
      }
  }
}

?>
```

### Veja também

- [dbase\_numfields()](function.dbase-numfields.md) - Obtém o número de campos em um banco de dados

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

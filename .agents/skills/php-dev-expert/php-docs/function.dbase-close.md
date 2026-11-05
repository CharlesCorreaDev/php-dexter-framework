# Fecha um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-close.php

---

# dbase\_close

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_close — Fecha um banco de dados

### Descrição

function **dbase\_close**([resource](language.types.resource.md) `$database`): [bool](language.types.boolean.md)

Fecha o recurso de banco de dados indicado.

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés do tipo [int](language.types.integer.md). |

### Examples

**Exemplo #1 Fechando um banco de dados dBase**

```
<?php

// abre em modo leitura/escrita
$db = dbase_open('/tmp/test.dbf', 0);

if ($db) {
  // lê alguns dados ..

  dbase_close($db);
}

?>
```

### Veja também

- [dbase\_open()](function.dbase-open.md) - Abre um banco de dados
- [dbase\_create()](function.dbase-create.md) - Cria um banco de dados

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

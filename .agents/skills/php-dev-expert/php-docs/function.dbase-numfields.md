# Obtém o número de campos em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-numfields.php

---

# dbase\_numfields

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_numfields — Obtém o número de campos em um banco de dados

### Descrição

function **dbase\_numfields**([resource](language.types.resource.md) `$database`): [int](language.types.integer.md)

Obtém o número de campos(colunas) no banco de dados especificados.

> **Nota**:
>
> Números de campo estão entre 0 e `dbase_numfields($db)-1`,
> enquanto que números de registro estão entre 1 e `dbase_numrecords($db)`.

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

### Valor Retornado

O números de campos em um banco de dados, ou **`false`** se acontecer um erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplo **dbase\_numfields()****

```
<?php

$rec = dbase_get_record($db, $recno);
$nf  = dbase_numfields($db);
for ($i = 0; $i < $nf; $i++) {
  echo $rec[$i], "\n";
}

?>
```

### Veja também

- [dbase\_numrecords()](function.dbase-numrecords.md) - Obtém o número de registros em um banco de dados

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

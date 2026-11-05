# Exclui um registro do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-delete-record.php

---

# dbase\_delete\_record

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_delete\_record — Exclui um registro do banco de dados

### Descrição

function **dbase\_delete\_record**([resource](language.types.resource.md) `$database`, [int](language.types.integer.md) `$number`): [bool](language.types.boolean.md)

Marca o registro indicado para ser excluído do banco de dados.

> **Nota**:
>
> Para realmente remover o registro do banco de dados, deve-se também
> utilizar [dbase\_pack()](function.dbase-pack.md).

### Parâmetros

`database`
:   Recurso do banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

`number`
:   Um inteiro que vai de 1 até o número de registros no banco de dados
    (como retornado por [dbase\_numrecords()](function.dbase-numrecords.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Veja também

- [dbase\_add\_record()](function.dbase-add-record.md) - Adiciona um registro a um banco de dados
- [dbase\_replace\_record()](function.dbase-replace-record.md) - Substitui um registro em um banco de dados

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

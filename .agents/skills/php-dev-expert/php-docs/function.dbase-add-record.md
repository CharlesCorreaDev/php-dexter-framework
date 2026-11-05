# Adiciona um registro a um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-add-record.php

---

# dbase\_add\_record

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_add\_record — Adiciona um registro a um banco de dados

### Descrição

function **dbase\_add\_record**([resource](language.types.resource.md) `$database`, [array](language.types.array.md) `$data`): [bool](language.types.boolean.md)

Adiciona os dados fornecidos ao banco de dados.

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

`data`
:   Um array indexado de dados. O número de itens deve ser igual ao número de
    campos no banco de dados, caso contrário **dbase\_add\_record()**
    irá falhar.

    > **Nota**:
    >
    > Se o valor de retorno de [dbase\_get\_record()](function.dbase-get-record.md) estiver sendo usado
    > para este parâmetro, deve-se redefinir a chave de nome `deleted`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés do tipo [int](language.types.integer.md). |

### Examples

**Exemplo #1 Inserindo um registro num banco de dados dBase**

```
<?php

// abre em modo leitura/escrita
$db = dbase_open('/tmp/test.dbf', 2);

if ($db) {
  dbase_add_record($db, array(
      date('Ymd'),
      'Maxim Topolov',
      '23',
      'max@example.com',
      'T'));
  dbase_close($db);
}

?>
```

### Veja também

- [dbase\_delete\_record()](function.dbase-delete-record.md) - Exclui um registro do banco de dados
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

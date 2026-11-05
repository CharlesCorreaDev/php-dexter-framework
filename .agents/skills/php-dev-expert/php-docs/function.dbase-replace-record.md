# Substitui um registro em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-replace-record.php

---

# dbase\_replace\_record

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_replace\_record — Substitui um registro em um banco de dados

### Descrição

function **dbase\_replace\_record**([resource](language.types.resource.md) `$database`, [array](language.types.array.md) `$data`, [int](language.types.integer.md) `$number`): [bool](language.types.boolean.md)

Substitui o registro no banco de dados com os dados indicados.

### Parâmetros

`database`
:   O recurso de banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

`data`
:   Um array indexado de dados. O número deve ser igual ao
    número de campos no banco de dados, caso contrário
    **dbase\_replace\_record()** irá falhar.

    > **Nota**:
    >
    > Se o valor de retorno de [dbase\_get\_record()](function.dbase-get-record.md) for usado
    > para este parâmetro, lembre-se de redefinir a chave de nome `deleted`.

`number`
:   Um inteiro que vai de 1 até o número de registros no banco de dados
    (como retornado por [dbase\_numrecords()](function.dbase-numrecords.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Atualizando um registro no banco de dados**

```
<?php

// abre somente leitura
$db = dbase_open('/tmp/test.dbf', 2);

if ($db) {
  // obtém o registro antigo
  $row = dbase_get_record_with_names($db, 1);

  // remove a entrada 'deletada'
  unset($row['deleted']);

  // Atualiza o campo 'date' com a dada atual
  $row['date'] = date('Ymd');

  // converte o registro para um array indexado
  $row = array_values($row);

  // Substitui o registro
  dbase_replace_record($db, $row, 1);
  dbase_close($db);
}

?>
```

### Notas

> **Nota**:
>
> Campos booleanos resultam em um elemento do tipo [int](language.types.integer.md)
> (`0` ou `1`) quando obtidos através de
> [dbase\_get\_record()](function.dbase-get-record.md) ou
> [dbase\_get\_record\_with\_names()](function.dbase-get-record-with-names.md). Se fores escritos de volta,
> resulta no valor tornando-se `0`, portanto deve-se ter cuidado
> para ajustar os valores adequadamente.

### Veja também

- [dbase\_add\_record()](function.dbase-add-record.md) - Adiciona um registro a um banco de dados
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

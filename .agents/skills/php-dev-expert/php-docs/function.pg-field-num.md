# Retorna o número do campo para o campo nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-num.php

---

# pg\_field\_num

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_num — Retorna o número do campo para o campo nomeado

### Descrição

function **pg\_field\_num**([PgSql\Result](class.pgsql-result.md) `$result`, [string](language.types.string.md) `$field`): [int](language.types.integer.md)

**pg\_field\_num()** retornará o número do
campo que corresponde ao
`field` na instância de `result` fornecida.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldnum()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   O nome do campo.
    O nome fornecido é tratado como um identificador em um comando SQL,
    ou seja, é colocado em minúscula, a menos que esteja entre aspas duplas.

### Valor Retornado

O número do campo (numerado de 0) ou -1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo informações sobre os campos**

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  $res = pg_query($dbconn, "select author, year, title from authors where author = 'Orwell'");

  echo "A coluna 'title' é o campo número: ", pg_field_num($res, 'title');
?>
```

O exemplo acima produzirá:

```
A coluna 'title' é o campo número: 2
```

### Veja também

- [pg\_field\_name()](function.pg-field-name.md) - Retorna o nome de um campo

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

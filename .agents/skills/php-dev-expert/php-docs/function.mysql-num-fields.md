# Obtém o numero de campos em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-num-fields.php

---

# mysql\_num\_fields

(PHP 4, PHP 5)

mysql\_num\_fields — Obtém o numero de campos em um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_num\_fields()](mysqli-result.field-count.md)
- [PDOStatement::columnCount()](pdostatement.columncount.md)

### Descrição

function **mysql\_num\_fields**([resource](language.types.resource.md) `$result`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o numero de campos de uma consulta.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

Retorna o numero de campos em um conjunto de resultados [resource](language.types.resource.md) em
caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_num\_fields()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}

/* retorna 2 porque id,email === dois campos */
echo mysql_num_fields($result);
?>
```

### Notas

> **Nota**:
>
> Para compatibilidade com versões anteriores, o seguinte
> apelido descontinuado pode ser usado:
> **mysql\_numfields()**

### Veja também

- [mysql\_select\_db()](function.mysql-select-db.md) - Seleciona um banco de dados MySQL
- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
- [mysql\_fetch\_field()](function.mysql-fetch-field.md) - Obtém informações de coluna de um resultado e retorna como um objeto
- [mysql\_num\_rows()](function.mysql-num-rows.md) - Obtém o número de linhas em um resultado

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

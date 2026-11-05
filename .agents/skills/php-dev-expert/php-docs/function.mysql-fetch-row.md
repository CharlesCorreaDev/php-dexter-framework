# Obtém uma linha como um array numérico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-row.php

---

# mysql\_fetch\_row

(PHP 4, PHP 5)

mysql\_fetch\_row — Obtém uma linha como um array numérico

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_row()](mysqli-result.fetch-row.md)
- [PDOStatement::fetch()](pdostatement.fetch.md)
  com `mode` como **`PDO::FETCH_NUM`**

### Descrição

function **mysql\_fetch\_row**([resource](language.types.resource.md) `$result`): [array](language.types.array.md)

Retorna um array numérico que corresponde a linha obtida
e move o ponteiro interno dos dados adiante.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

Retorna um array numérico de strings que corresponde linha obtida, ou
**`false`** se não houverem mais linhas.

**mysql\_fetch\_row()** obtém uma linha de dados do
resultado associado ao identificador do resultado especificado. A
linha é retornada como um array. Cada coluna do resultado é armazenado em um
índice do array, começando no índice 0.

### Examples

**Exemplo #1 Obtendo uma linha com **mysql\_fetch\_row()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // o valor do campo email
?>
```

### Notas

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Veja também

- [mysql\_fetch\_array()](function.mysql-fetch-array.md) - Obtém uma linha de resultado como um array associativo, numérico, ou ambos
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
- [mysql\_fetch\_object()](function.mysql-fetch-object.md) - Obtém o resultado de uma linha como um objeto
- [mysql\_data\_seek()](function.mysql-data-seek.md) - Move o ponteiro interno do resultado
- [mysql\_fetch\_lengths()](function.mysql-fetch-lengths.md) - Obtém o tamanho de cada saída de um resultado
- [mysql\_result()](function.mysql-result.md) - Retorna dados do resultado

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

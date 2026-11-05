# Obtém o tamanho de cada saída de um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-fetch-lengths.php

---

# mysql\_fetch\_lengths

(PHP 4, PHP 5)

mysql\_fetch\_lengths — Obtém o tamanho de cada saída de um resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_fetch\_lengths()](mysqli-result.lengths.md)
- [PDOStatement::getColumnMeta()](pdostatement.getcolumnmeta.md)

### Descrição

function **mysql\_fetch\_lengths**([resource](language.types.resource.md) `$result`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array que corresponde aos tamanhos de cada campo
na ultima linha obtida pelo MySQL.

**mysql\_fetch\_lengths()** guarda o tamanho de
cada coluna do resultado na última linha retornada por
[mysql\_fetch\_row()](function.mysql-fetch-row.md),
[mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md),
[mysql\_fetch\_array()](function.mysql-fetch-array.md), e
[mysql\_fetch\_object()](function.mysql-fetch-object.md) em um array, começando
no índice 0.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

### Valor Retornado

Um [array](language.types.array.md) de tamanhos em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **mysql\_fetch\_lengths()****

```
<?php
$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
$row     = mysql_fetch_assoc($result);
$lengths = mysql_fetch_lengths($result);

print_r($row);
print_r($lengths);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [id] => 42
    [email] => user@example.com
)
Array
(
    [0] => 2
    [1] => 16
)
```

### Veja também

- [mysql\_field\_len()](function.mysql-field-len.md) - Retorna o tamanho do campo especificado
- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string

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

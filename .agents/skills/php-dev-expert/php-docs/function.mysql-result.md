# Retorna dados do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-result.php

---

# mysql\_result

(PHP 4, PHP 5)

mysql\_result — Retorna dados do resultado

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_data\_seek()](mysqli-result.data-seek.md) em conjunto com
  [mysqli\_field\_seek()](mysqli-result.field-seek.md) e
  [mysqli\_fetch\_field()](mysqli-result.fetch-field.md)
- [PDOStatement::fetchColumn()](pdostatement.fetchcolumn.md)

### Descrição

function **mysql\_result**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$row`, [mixed](language.types.mixed.md) `$field` = 0): [string](language.types.string.md)

Retorna o conteúdo de uma célula do resultado MySQL.

Ao trabalhar com conjuntos grandes de resultados, deve ser considerado o uso de
uma das funções que retornam uma linha inteira (especificadas abaixo). Como
estas funções retornam o conteúdo de múltiplas células em uma
chamada de função, elas são MUITO mais rápidas que
**mysql\_result()**. Observe também que especificar
um índice numérico para o argumento de campo (field) é muito mais rápido que
especificar um argumento com nome de campo ou nome\_tabela.nome\_de\_campo.

### Parâmetros

`result`
:   O [resource](language.types.resource.md) do resultado que
    está sendo avaliado. Este resultado vem de uma chamada a
    [mysql\_query()](function.mysql-query.md).

`row`
:   O número da linha do resultado que está sendo recuperado. Os números
    das linhas começam em `0`.

`field`
:   O nome ou posição do campo que está sendo recuperado.

    Pode ser a posição do campo, o nome do campo ou o nome da tabela mais um
    ponto mais o nome do campo (nome\_tabela.nome\_campo). Se o nome da coluna tiver sido
    apelidado ('select foo as bar from...'), o apelido deve ser usado no lugar do
    nome da coluna. Se indefinido, o primeiro campo será recuperado.

### Valor Retornado

O conteúdo de uma célula de um conjunto de resultado MySQL em caso de sucesso ou
**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_result()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
if (!mysql_select_db('database_name')) {
    die('Não foi possível selecionar o banco de dados: ' . mysql_error());
}
$result = mysql_query('SELECT name FROM work.employee');
if (!$result) {
    die('Não foi possível consultar:' . mysql_error());
}
echo mysql_result($result, 2); // mostra o nome do terceiro empregado (employee)

mysql_close($link);
?>
```

### Notas

> **Nota**:
>
> Chamadas a **mysql\_result()** não devem ser misturadas
> com chamadas a outras funções que lidam com o conjunto de resultados.

### Veja também

- [mysql\_fetch\_row()](function.mysql-fetch-row.md) - Obtém uma linha como um array numérico
- [mysql\_fetch\_array()](function.mysql-fetch-array.md) - Obtém uma linha de resultado como um array associativo, numérico, ou ambos
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
- [mysql\_fetch\_object()](function.mysql-fetch-object.md) - Obtém o resultado de uma linha como um objeto

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

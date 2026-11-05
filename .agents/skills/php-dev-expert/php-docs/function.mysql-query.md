# Envia uma consulta MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-query.php

---

# mysql\_query

(PHP 4, PHP 5)

mysql\_query — Envia uma consulta MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_query()](mysqli.query.md)
- [PDO::query()](pdo.query.md)

### Descrição

function **mysql\_query**([string](language.types.string.md) `$query`, [resource](language.types.resource.md) `$link_identifier` = NULL): [mixed](language.types.mixed.md)

**mysql\_query()** envia uma única consulta (consultas múltiplas
não são suportadas) ao banco de dados
atualmente ativo no servidor associado ao
`link_identifier` especificado.

### Parâmetros

`query`
:   A consulta SQL.

    A consulta não deve terminar com um ponto e vírgula.
    Os dados dentro da consulta devem ser [adequadamente escapados](function.mysql-real-escape-string.md).

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Para comandos SELECT, SHOW, DESCRIBE, EXPLAIN e outras instruções que retornam resultados,
**mysql\_query()**
retorna um [resource](language.types.resource.md) em caso de sucesso ou **`false`** em
caso de erro.

Para outros tipos de instruções SQL, UPDATE, DELETE, DROP, etc,
**mysql\_query()** retorna **`true`** em caso de sucesso
ou **`false`** em caso de erro.

O recurso de resultado retornado pode ser passado para
[mysql\_fetch\_array()](function.mysql-fetch-array.md) e para outras
funções para lidar com tabelas de resultados e para acessar os dados retornados.

Use [mysql\_num\_rows()](function.mysql-num-rows.md) para obter quantas linhas foram retornadas
para uma instrução SELECT ou
[mysql\_affected\_rows()](function.mysql-affected-rows.md) para obter quantas
linhas foram afetadas por uma instrução DELETE, INSERT, REPLACE
ou UPDATE.

**mysql\_query()** também falhará e retornará **`false`**
se o usuário não tiver permissões para acessar a(s) tabela(s) referenciada(s)
pela consulta.

### Examples

**Exemplo #1 Consulta Inválida**

A seguinte consulta é sintaticamente inválida, assim
**mysql\_query()** falha e retorna **`false`**.

```
<?php
$result = mysql_query('SELECT * WHERE 1=1');
if (!$result) {
    die('Consulta inválida: ' . mysql_error());
}

?>
```

**Exemplo #2 Consulta Válida**

A seguinte consulta é válida, assim **mysql\_query()**
retorna um [resource](language.types.resource.md).

```
<?php
// Isto poderia ser fornecido pelo usuário, por exemplo
$firstname = 'fred';
$lastname  = 'fox';

// Formula a Consulta
// Esta é a melhor forma de realizar uma consulta SQL
// Para mais exemplo, consulte mysql_real_escape_string()
$query = sprintf("SELECT firstname, lastname, address, age FROM friends
    WHERE firstname='%s' AND lastname='%s'",
    mysql_real_escape_string($firstname),
    mysql_real_escape_string($lastname));

// Realiza a Consulta
$result = mysql_query($query);

// Verifica o resultado
// Isto mostra a consulta real enviada ao MySQL, e o erro. Útil para depuração.
if (!$result) {
    $message  = 'Consulta inválida: ' . mysql_error() . "\n";
    $message .= 'Consulta completa: ' . $query;
    die($message);
}

// Usa o resultado
// Tentar mostrar $result não permitirá acesso à informação no recurso
// Uma das funções de resultados da extensão mysql precisa ser usada
// Consulte também mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
while ($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['address'];
    echo $row['age'];
}

// Libera os recursos associados com o conjunto de resultados
// Isto é feito automaticamente no final do script
mysql_free_result($result);
?>
```

### Veja também

- [mysql\_connect()](function.mysql-connect.md) - Abre uma conexão a um servidor MySQL
- [mysql\_error()](function.mysql-error.md) - Retorna o texto da mensagem de erro da operação MySQL anterior
- [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md) - Escapa os caracteres especiais em uma string para uso em uma instrução SQL
- [mysql\_result()](function.mysql-result.md) - Retorna dados do resultado
- [mysql\_fetch\_assoc()](function.mysql-fetch-assoc.md) - Obtém uma linha do resultado como um array associativo
- [mysql\_unbuffered\_query()](function.mysql-unbuffered-query.md) - Envia uma consulta SQL ao MySQL sem buscar e armazenar em buffer as linhas de resultados

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

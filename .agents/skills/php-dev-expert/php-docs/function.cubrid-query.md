# Envia uma consulta CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-query.php

---

# cubrid\_query

(PECL CUBRID >= 8.3.1)

cubrid\_query — Envia uma consulta CUBRID

### Descrição

function **cubrid\_query**([string](language.types.string.md) `$query`, [resource](language.types.resource.md) `$conn_identifier` = ?): [resource](language.types.resource.md)

**cubrid\_query()** envia uma consulta única (consultas múltiplas não são suportadas) para o
banco de dados atualmente ativo no servidor que está associado ao `conn_identifier` especificado.

### Parâmetros

`query`
:   Uma consulta SQL

    Dados na consulta devem estar [adequadamente escapados](function.cubrid-real-escape-string.md).

`conn_identifier`
:   A conexão CUBRID. Se o identificador de conexão não for especificado,
    a última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) será
    usada.

### Valor Retornado

Para SELECT, SHOW, DESCRIBE, EXPLAIN e outras instruções que retornam um conjunto de resultados,
**cubrid\_query()** retorna um [resource](language.types.resource.md) em caso de sucesso ou **`false`** em caso de erro.

Para outros tipos de instruções SQL como INSERT, UPDATE, DELETE, DROP, etc.,
**cubrid\_query()** retorna **`true`** em caso de sucesso ou **`false`** em caso de erro.

O recurso de resultado retornado deve ser passado para [cubrid\_fetch\_array()](function.cubrid-fetch-array.md) e outras
funções para lidar com tabelas de resultados, para acessar os dados retornados.

Use [cubrid\_num\_rows()](function.cubrid-num-rows.md) para descobrir quantas linhas foram retornadas para uma instrução SELECT ou
[cubrid\_affected\_rows()](function.cubrid-affected-rows.md) para descobrir quantas linhas foram afetadas por uma instrução DELETE, INSERT, REPLACE ou UPDATE.

**cubrid\_query()** também falhará e retornará **`false`**
se o usuário não tiver permissão para acessar as tabelas referenciadas pela consulta.

### Examples

**Exemplo #1 Consulta Inválida**

A consulta a seguir é sintaticamente inválida, portanto **cubrid\_query()** falhará e retornará **`false`**.

```
<?php
$conn = cubrid_connect('localhost', 33000, 'demodb');

$result = cubrid_query('SELECT * WHERE 1=1');
if (!$result) {
    die('Consulta inválida: ' . cubrid_error());
}

?>
```

**Exemplo #2 Consulta Válida**

A consulta a seguir é válida, portanto **cubrid\_query()** retornará um [resource](language.types.resource.md).

```
<?php
// Isso pode ser fornecido por um usuário, por exemplo
$firstname = 'fred';
$lastname  = 'fox';

$conn = cubrid_connect('localhost', 33000, 'demodb');

cubrid_execute($conn,"DROP TABLE if exists friends");
cubrid_execute($conn,"create table friends(firstname varchar,lastname varchar,address char(24),age int)");
cubrid_execute($conn,"insert into friends values('fred','fox','home-1','20')");
cubrid_execute($conn,"insert into friends values('blue','cat','home-2','21')");
// Formula a consulta
// Esta é a melhor maneira de realizar uma consulta SQL
// Para mais exemplos, consulte cubrid_real_escape_string()
$query = sprintf("SELECT firstname, lastname, address, age FROM friends WHERE firstname='%s' AND lastname='%s'",
cubrid_real_escape_string($firstname),
cubrid_real_escape_string($lastname));

// Executa a consulta
$result = cubrid_query($query);

// Verifica o resultado
// Isso mostra a consulta real enviada ao CUBRID e o erro. Útil para depuração.
if (!$result) {
    $message  = 'Consulta inválida: ' . cubrid_error() . "\n";
    $message .= 'Consulta completa: ' . $query;
    die($message);
}

// Usa o resultado
// A tentativa de mostrar $result diretamente não permitirá acesso às informações do recurso
// Uma das funções de resultado cubrid deve ser usada
// Consulte também cubrid_result(), cubrid_fetch_array(), cubrid_fetch_row(), etc.
while ($row = cubrid_fetch_assoc($result)) {
    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['address'];
    echo $row['age'];
}

// Libera os recursos associados ao conjunto de resultados
// Isso é feito automaticamente no final do script
cubrid_free_result($result);
?>
```

### Veja também

- [cubrid\_connect()](function.cubrid-connect.md) - Abre uma conexão a um servidor CUBRID
- [cubrid\_error()](function.cubrid-error.md) - Obtém a mensagem de erro
- [cubrid\_real\_escape\_string()](function.cubrid-real-escape-string.md) - Escapa caracteres especiais em uma string para uso em uma instrução SQL
- [cubrid\_result()](function.cubrid-result.md) - Retorna o valor de um campo específico em uma linha específica
- [cubrid\_fetch\_assoc()](function.cubrid-fetch-assoc.md) - Retorna o array associativo que corresponde à linha buscada
- [cubrid\_unbuffered\_query()](function.cubrid-unbuffered-query.md) - Execute uma consulta sem buscar os resultados para a memória

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

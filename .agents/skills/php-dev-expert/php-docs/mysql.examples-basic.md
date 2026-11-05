# Exemplo de uso da extensão MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql.examples-basic.php

---

## Exemplo de uso da extensão MySQL

Este exemplo simples mostra como conectar, executar uma consulta, mostrar
as linhas do resultado e disconectar de um banco de dados MySQL.

**Exemplo #1 Exemplo de uso da extensão MySQL**

```
<?php
// Conectando e selecionando o banco de dados
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('Não foi possível conectar: ' . mysql_error());
echo 'Conectado com sucesso';
mysql_select_db('my_database') or die('Não foi possível selecionar o banco de dados');

// Realizado a consulta SQL
$query = 'SELECT * FROM my_table';
$result = mysql_query($query) or die('A consulta falhou: ' . mysql_error());

// Exebindo os resultados em HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Libera o conjunto de resultados
mysql_free_result($result);

// Fecha a conexão
mysql_close($link);
?>
```

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

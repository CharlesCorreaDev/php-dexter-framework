# Escolhendo uma API

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlinfo.api.choosing.php

---

# Escolhendo uma API

O PHP oferece diferentes APIs para conexão ao MySQL. Pode-se ver abaixo
as APIs fornecidas pelas extensões mysqli e PDO. Cada porção de código
cria uma conexão a um servidor MySQL sendo executado em "example.com" usando
o usuário "user" e a senha "password". E uma consulta é executada para
cumprimentar o usuário.

**Exemplo #1 Comparando as APIs do MySQL**

```
<?php
// mysqli
$mysqli = new mysqli("example.com", "user", "password", "database");
$result = $mysqli->query("SELECT 'Olá, prezado usuário MySQL!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);

// PDO
$pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
$statement = $pdo->query("SELECT 'Olá, prezado usuário MySQL!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['_message']);
```

**Exemplo #2 Comparando instruções preparadas**

```
<?php
// mysqli
$mysqli = new mysqli("example.com", "user", "password", "database");
$statement = $mysqli->prepare("SELECT District FROM City WHERE Name=?");
$statement->execute(["Amersfoort"]);
$result = $statement->get_result();
$row = $result->fetch_assoc();
echo htmlentities($row['District']);

// PDO
$pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
$statement = $pdo->prepare("SELECT District FROM City WHERE Name=?");
$statement->execute(["Amersfoort"]);
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['District']);
```

**Comparação de características**

O desempenho geral de ambas as extensões é considerada aproximadamente
a mesma, embora o desempenho da extensão contribui somente para uma
fração do tempo total de uma requisição web do PHP. Frequentemente, o impacto é
tão baixo quanto 0,1%.

|  | ext/mysqli | PDO\_MySQL |
| --- | --- | --- |
| Versão em que foi introduzida no PHP | 5.0 | 5.1 |
| Incluída no PHP 7.x e 8.x | Sim | Sim |
| Estado do desenvolvimento | Ativo | Ativo |
| Ciclo de vida | Ativo | Ativo |
| Recomendado para novos projetos | Sim | Sim |
| Interface POO | Sim | Sim |
| Interface Procedural | Sim | Não |
| API suporta consultas sem bloqueio assíncronas com mysqlnd | Sim | Não |
| Conexões persistentes | Sim | Sim |
| API suporta conjuntos de caracteres | Sim | Sim |
| API suporta Instruções Preparadas no lado do servidor | Sim | Sim |
| API suporta Instruções Preparadas no lado do cliente | Não | Sim |
| API suporta Procedimentos Armazenados | Sim | Sim |
| API suporta Múltiplas Instruções | Sim | A maioria |
| API suporta Transações | Sim | Sim |
| Transações podem ser controladas com SQL | Sim | Sim |
| Supporta toda a funcionalidade do MySQL 5.1+ | Sim | A maioria |

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

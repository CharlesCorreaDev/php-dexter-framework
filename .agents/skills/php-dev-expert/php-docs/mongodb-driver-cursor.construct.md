# Cria um novo cursor (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.construct.php

---

# MongoDB\Driver\Cursor::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::\_\_construct — Cria um novo cursor (não utilizado)

### Descrição

final private function **MongoDB\Driver\Cursor::\_\_construct**()

Objetos [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) são retornados como o o
resultado de consultas ou comandos executados e não podem ser construídos diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) - Executa um comando de banco de dados
- [MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md) - Executa uma consulta ao banco de dados
- [MongoDB\Driver\Server::executeCommand()](mongodb-driver-server.executecommand.md) - Executa um comando de banco de dados neste servidor
- [MongoDB\Driver\Server::executeQuery()](mongodb-driver-server.executequery.md) - Executa uma consulta de banco de dados neste servidor

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

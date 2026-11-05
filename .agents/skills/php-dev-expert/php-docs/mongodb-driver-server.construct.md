# Cria um novo servidor (não utilizado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.construct.php

---

# MongoDB\Driver\Server::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\Server::\_\_construct — Cria um novo servidor (não utilizado)

### Descrição

final private function **MongoDB\Driver\Server::\_\_construct**()

Os objetos [MongoDB\Driver\Server](class.mongodb-driver-server.md) são criados internamente
pelo [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) quando uma conexão com o banco de dados
é estabelecida e podem ser retornados por
[MongoDB\Driver\Manager::getServers()](mongodb-driver-manager.getservers.md) e
[MongoDB\Driver\Manager::selectServer()](mongodb-driver-manager.selectserver.md).

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\Driver\Manager::getServers()](mongodb-driver-manager.getservers.md) - Retorna os servidores aos quais este gerenciador está conectado
- [MongoDB\Driver\Manager::selectServer()](mongodb-driver-manager.selectserver.md) - Seleciona um servidor que corresponde a uma preferência de leitura

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

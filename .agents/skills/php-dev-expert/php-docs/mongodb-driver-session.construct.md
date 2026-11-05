# Cria uma nova sessão (não utilizada)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.construct.php

---

# MongoDB\Driver\Session::\_\_construct

(mongodb >=1.4.0)

MongoDB\Driver\Session::\_\_construct — Cria uma nova sessão (não utilizada)

### Descrição

final private function **MongoDB\Driver\Session::\_\_construct**()

Os objetos [MongoDB\Driver\Session](class.mongodb-driver-session.md) são retornados por
[MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) e não podem ser
construídos diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) - Inicia uma nova sessão de cliente para uso com este cliente

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

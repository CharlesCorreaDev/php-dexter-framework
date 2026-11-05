# Camadas de Abstração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.database.abstract.php

---

# Camadas de Abstração

- [DBA](book.dba.md) — Camada de abstração de banco de dados (estilo dbm)
  - [Instalação/Configuração](dba.setup.md)
  - [Constantes predefinidas](dba.constants.md)
  - [Examples](dba.examples.md)
  - [Dba\Connection](class.dba-connection.md) — A classe Dba\Connection
  - [Funções de DBA](ref.dba.md)
- [ODBC](book.uodbc.md) — ODBC (Unificado)
  - [Instalação/Configuração](uodbc.setup.md)
  - [Constantes predefinidas](uodbc.constants.md)
  - [Funções de ODBC](ref.uodbc.md)
  - [Odbc\Connection](class.odbc-connection.md) — A classe Odbc\Connection
  - [Odbc\Result](class.odbc-result.md) — A classe Odbc\Result
- [PDO](book.pdo.md) — PHP Data Objects
  - [Instalação/Configuração](pdo.setup.md)
  - [Constantes predefinidas](pdo.constants.md)
  - [Conexões e gerenciamento de conexões](pdo.connections.md)
  - [Transações e confirmação automática (auto-commit)](pdo.transactions.md)
  - [Declarações preparadas e procedimentos armazenados](pdo.prepared-statements.md)
  - [Erros e manipulação de erros](pdo.error-handling.md)
  - [Objetos Grandes (LOBs)](pdo.lobs.md)
  - [PDO](class.pdo.md) — A classe PDO
  - [PDOStatement](class.pdostatement.md) — A classe PDOStatement
  - [PDORow](class.pdorow.md) — A classe PDORow
  - [PDOException](class.pdoexception.md) — A classe PDOException
  - [Drivers do PDO](pdo.drivers.md)

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

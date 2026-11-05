# Drivers e Plugins MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/set.mysqlinfo.php

---

# Drivers e Plugins MySQL

PHP oferece vários drivers e plugins MySQL para acessar e
lidar com o MySQL.

As diferenças e a funcionalidade das extensões MySQL estão descritas
na visão geral desta seção.

As extensões listadas suportam o protocolo MySQL.
Exemplos de servidores de banco de dados compatíveis são
[» MariaDB Server](https://www.mariadb.org/),
[» MySQL Server](https://www.mysql.com/),
[» Percona Server for MySQL](https://www.percona.com/mysql/software/percona-server-for-mysql)
e
[» TiDB](https://www.pingcap.com/tidb/).

- [Visão geral dos drivers PHP para MySQL](mysql.md)
  - [Visão geral de terminologia](mysqlinfo.terminology.md)
  - [Escolhendo uma API](mysqlinfo.api.choosing.md)
  - [Escolhendo uma biblioteca](mysqlinfo.library.choosing.md)
  - [Conceitos](mysqlinfo.concepts.md)
- [MySQLi](book.mysqli.md) — Extensão MySQL Melhorada
  - [Visão Geral](mysqli.overview.md)
  - [Guia de início rápido](mysqli.quickstart.md)
  - [Instalação/Configuração](mysqli.setup.md)
  - [A extensão mysqli e conexões persistentes](mysqli.persistconns.md)
  - [Constantes predefinidas](mysqli.constants.md)
  - [Notas](mysqli.notes.md)
  - [Resumo da Função de Extensão do MySQLi](mysqli.summary.md)
  - [mysqli](class.mysqli.md) — A classe mysqli
  - [mysqli\_stmt](class.mysqli-stmt.md) — A classe mysqli\_stmt
  - [mysqli\_result](class.mysqli-result.md) — A classe mysqli\_result
  - [mysqli\_driver](class.mysqli-driver.md) — A classe mysqli\_driver
  - [mysqli\_warning](class.mysqli-warning.md) — A classe mysqli\_warning
  - [mysqli\_sql\_exception](class.mysqli-sql-exception.md) — A classe mysqli\_sql\_exception
  - [Apelidos e Funções descontinuadas da Mysqli](ref.mysqli.md)
  - [Registro de Alterações](changelog.mysqli.md)
- [Mysql\_xdevapi](book.mysql-xdevapi.md)
  - [Instalação/Configuração](mysql-xdevapi.setup.md)
  - [Constantes predefinidas](mysql-xdevapi.constants.md)
  - [Registro de Alterações](changelog.mysql_xdevapi.md)
  - [Examples](mysql-xdevapi.examples.md)
  - [Funções de Mysql\_xdevapi](ref.mysql-xdevapi.md)
  - [mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md) — Interface BaseResult
  - [mysql\_xdevapi\Client](class.mysql-xdevapi-client.md) — Classe Client
  - [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md) — Classe Collection
  - [mysql\_xdevapi\CollectionAdd](class.mysql-xdevapi-collectionadd.md) — Classe CollectionAdd
  - [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md) — Classe CollectionFind
  - [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md) — Classe CollectionModify
  - [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md) — Classe CollectionRemove
  - [mysql\_xdevapi\ColumnResult](class.mysql-xdevapi-columnresult.md) — Classe ColumnResult
  - [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md) — Interface CrudOperationBindable
  - [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md) — Interface CrudOperationLimitable
  - [mysql\_xdevapi\CrudOperationSkippable](class.mysql-xdevapi-crudoperationskippable.md) — Interface CrudOperationSkippable
  - [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md) — Interface CrudOperationSortable
  - [mysql\_xdevapi\DatabaseObject](class.mysql-xdevapi-databaseobject.md) — Interface DatabaseObject
  - [mysql\_xdevapi\DocResult](class.mysql-xdevapi-docresult.md) — Classe DocResult
  - [mysql\_xdevapi\Exception](class.mysql-xdevapi-exception.md) — Classe Exception
  - [mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) — Interface Executable
  - [mysql\_xdevapi\ExecutionStatus](class.mysql-xdevapi-executionstatus.md) — Classe ExecutionStatus
  - [mysql\_xdevapi\Expression](class.mysql-xdevapi-expression.md) — Classe Expression
  - [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md) — Classe Result
  - [mysql\_xdevapi\RowResult](class.mysql-xdevapi-rowresult.md) — Classe RowResult
  - [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md) — Classe Schema
  - [mysql\_xdevapi\SchemaObject](class.mysql-xdevapi-schemaobject.md) — Interface SchemaObject
  - [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md) — Classe Session
  - [mysql\_xdevapi\SqlStatement](class.mysql-xdevapi-sqlstatement.md) — Classe SqlStatement
  - [mysql\_xdevapi\SqlStatementResult](class.mysql-xdevapi-sqlstatementresult.md) — Classe SqlStatementResult
  - [mysql\_xdevapi\Statement](class.mysql-xdevapi-statement.md) — Classe Statement
  - [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md) — Classe Table
  - [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md) — Classe TableDelete
  - [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md) — Classe TableInsert
  - [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md) — Classe TableSelect
  - [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md) — TableUpdate class
  - [mysql\_xdevapi\Warning](class.mysql-xdevapi-warning.md) — Classe Warning
- [MySQL (Original)](book.mysql.md) — API Original MySQL
  - [Instalação/Configuração](mysql.setup.md)
  - [Registro de Alterações](changelog.mysql.md)
  - [Constantes predefinidas](mysql.constants.md)
  - [Examples](mysql.examples.md)
  - [Funções da MySQL](ref.mysql.md)
- [Mysqlnd](book.mysqlnd.md) — Driver Nativo MySQL
  - [Visão Geral](mysqlnd.overview.md)
  - [Instalação](mysqlnd.install.md)
  - [Configurações de Execução](mysqlnd.config.md)
  - [Incompatibilidades](mysqlnd.incompatibilities.md)
  - [Conexões Persistentes](mysqlnd.persist.md)
  - [Estatísticas](mysqlnd.stats.md)
  - [Notas](mysqlnd.notes.md)
  - [Gerenciamento de Memória](mysqlnd.memory.md)
  - [API do plugin do Driver Nativo MySQL](mysqlnd.plugin.md)

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

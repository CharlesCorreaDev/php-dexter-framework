# Extensões de Banco de Dados Específicas de Terceiros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.database.vendors.php

---

# Extensões de Banco de Dados Específicas de Terceiros

- [CUBRID](book.cubrid.md)
  - [Instalação/Configuração](cubrid.setup.md)
  - [Constantes predefinidas](cubrid.constants.md)
  - [Examples](cubrid.examples.md)
  - [Funções de CUBRID](ref.cubrid.md)
  - [Funções de compatibilidade CUBRID MySQL](cubridmysql.cubrid.md)
  - [Funções e sinônimos obsoletos do CUBRID](oldaliases.cubrid.md)
- [dBase](book.dbase.md)
  - [Instalação/Configuração](dbase.setup.md)
  - [Constantes predefinidas](dbase.constants.md)
  - [Funções da dBase](ref.dbase.md)
- [Firebird/InterBase](book.ibase.md)
  - [Instalação/Configuração](ibase.setup.md)
  - [Constantes predefinidas](ibase.constants.md)
  - [Funções para Firebird/InterBase](ref.ibase.md)
- [IBM DB2](book.ibm-db2.md) — IBM DB2, Cloudscape e Apache Derby
  - [Instalação/Configuração](ibm-db2.setup.md)
  - [Constantes predefinidas](ibm-db2.constants.md)
  - [Funções de IBM DB2](ref.ibm-db2.md)
- [MongoDB](book.mongodb.md) — Extensão MongoDB
  - [Instalação/Configuração](mongodb.setup.md)
  - [Constantes predefinidas](mongodb.constants.md)
  - [Tutoriais](mongodb.tutorial.md)
  - [Arquitetura do driver e componentes internos](mongodb.architecture.md) — Explica a arquitetura do driver e recursos especiais
  - [Segurança](mongodb.security.md)
  - [MongoDB\Driver](mongodb.mongodb.md) — Classes da Extensão MongoDB
  - [MongoDB\BSON](mongodb.bson.md) — Classes e Funções BSON do MongoDB
  - [MongoDB\Driver\Monitoring](mongodb.monitoring.md) — Classes de monitoramento e funções assinantes
  - [MongoDB\Driver\Exception](mongodb.exceptions.md) — Classes de exceção
- [MySQL](set.mysqlinfo.md) — Drivers e Plugins MySQL
  - [Visão geral dos drivers PHP para MySQL](mysql.md)
  - [MySQLi](book.mysqli.md) — Extensão MySQL Melhorada
  - [Mysql\_xdevapi](book.mysql-xdevapi.md)
  - [MySQL (Original)](book.mysql.md) — API Original MySQL
  - [Mysqlnd](book.mysqlnd.md) — Driver Nativo MySQL
- [OCI8](book.oci8.md) — Oracle OCI8
  - [Instalação/Configuração](oci8.setup.md)
  - [Constantes predefinidas](oci8.constants.md)
  - [Examples](oci8.examples.md)
  - [Manipulação e conjunto de conexões do OCI8](oci8.connection.md)
  - [Suporte à Notificação Rápida de Aplicação (FAN) do OCI8](oci8.fan.md)
  - [Suporte ao OCI8 Transparent Application Failover (TAF)](oci8.taf.md)
  - [OCI8 e Rastreamento dinâmico DTrace](oci8.dtrace.md)
  - [Tipos de dados suportados](oci8.datatypes.md)
  - [Funções OCI8](ref.oci8.md)
  - [OCICollection](class.ocicollection.md) — The OCICollection class
  - [OCILob](class.ocilob.md) — A classe OCILob
  - [Funções e sinônimos e obsoletos do OCI8](oldaliases.oci8.md)
- [PostgreSQL](book.pgsql.md)
  - [Instalação/Configuração](pgsql.setup.md)
  - [Constantes predefinidas](pgsql.constants.md)
  - [Examples](pgsql.examples.md)
  - [Funções PostgreSQL](ref.pgsql.md)
  - [PgSql\Connection](class.pgsql-connection.md) — A classe PgSql\Connection
  - [PgSql\Result](class.pgsql-result.md) — A classe PgSql\Result
  - [PgSql\Lob](class.pgsql-lob.md) — A classe PgSql\Lob
- [SQLite3](book.sqlite3.md)
  - [Instalação/Configuração](sqlite3.setup.md)
  - [Constantes predefinidas](sqlite3.constants.md)
  - [SQLite3](class.sqlite3.md) — A classe SQLite3
  - [SQLite3Exception](class.sqlite3exception.md) — A classe SQLite3Exception
  - [SQLite3Stmt](class.sqlite3stmt.md) — A classe SQLite3Stmt
  - [SQLite3Result](class.sqlite3result.md) — A classe SQLite3Result
- [SQLSRV](book.sqlsrv.md) — Driver Microsoft SQL Server para PHP
  - [Instalação/Configuração](sqlsrv.setup.md)
  - [Constantes predefinidas](sqlsrv.constants.md)
  - [Funções SQLSRV](ref.sqlsrv.md)

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

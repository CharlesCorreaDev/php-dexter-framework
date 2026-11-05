# PHP Data Objects

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pdo.php

---

# PHP Data Objects

# Introdução

A extensão `PHP Data Objects` (PDO) define uma interface leve e consistente para acessar bancos de dados no PHP.
Cada driver de banco de dados que implementa a interface PDO pode expor
recursos específicos do banco de dados como funções de extensão comuns.
Observe que não é possível executar nenhuma função de banco de dados usando
apenas a extensão PDO; um
[driver PDO de banco de dados](pdo.drivers.md)
deve ser usado para acessar o servidor de banco de dados.

O PDO fornece uma camada de abstração de *acesso a dados*,
o que significa que, independentemente de qual banco de dados estiver sendo
usado, as mesmas funções serão usadas para realizar consultas e buscar dados.
O PDO *não* fornece uma abstração de *banco de dados*;
ele não reescreve o SQL nem emula os recursos ausentes. Uma camada
de abstração completa deve ser usada se esse recurso for necessário.

O PDO vem com o PHP.

- [Instalação/Configuração](pdo.setup.md)
  - [Instalação](pdo.installation.md)
  - [Configurações de Execução](pdo.configuration.md)
- [Constantes predefinidas](pdo.constants.md)
  - [Modos de Busca](pdo.constants.fetch-modes.md)
- [Conexões e gerenciamento de conexões](pdo.connections.md)
- [Transações e confirmação automática (auto-commit)](pdo.transactions.md)
- [Declarações preparadas e procedimentos armazenados](pdo.prepared-statements.md)
- [Erros e manipulação de erros](pdo.error-handling.md)
- [Objetos Grandes (LOBs)](pdo.lobs.md)
- [PDO](class.pdo.md) — A classe PDO
  - [PDO::beginTransaction](pdo.begintransaction.md) — Inicia uma transação
  - [PDO::commit](pdo.commit.md) — Envia uma transação
  - [PDO::connect](pdo.connect.md) — Conecta a um banco de dados e retorna uma subclasse PDO para drivers que o suportam
  - [PDO::\_\_construct](pdo.construct.md) — Cria uma instância PDO representando uma conexão a um banco de dados
  - [PDO::errorCode](pdo.errorcode.md) — Busca o SQLSTATE associado com a última operação no identificador do banco de dados
  - [PDO::errorInfo](pdo.errorinfo.md) — Busca informação de erro estendida associada com a última operação no identificador do banco de dados
  - [PDO::exec](pdo.exec.md) — Executa uma instrução SQL e retorna o número de linhas afetadas
  - [PDO::getAttribute](pdo.getattribute.md) — Recuperar um atributo da conexão com o banco de dados
  - [PDO::getAvailableDrivers](pdo.getavailabledrivers.md) — Retorna um array com os drivers PDO disponíveis
  - [PDO::inTransaction](pdo.intransaction.md) — Verifica se está dentro de uma transação
  - [PDO::lastInsertId](pdo.lastinsertid.md) — Retorna o ID da última linha ou valor de sequência inserido
  - [PDO::prepare](pdo.prepare.md) — Prepara uma instrução para execução e retorna um objeto de instrução
  - [PDO::query](pdo.query.md) — Prepara e executa uma instrução SQL sem marcadores
  - [PDO::quote](pdo.quote.md) — Inclui aspas em uma string para uso em uma consulta
  - [PDO::rollBack](pdo.rollback.md) — Reverte uma transação
  - [PDO::setAttribute](pdo.setattribute.md) — Define um atributo
- [PDOStatement](class.pdostatement.md) — A classe PDOStatement
  - [PDOStatement::bindColumn](pdostatement.bindcolumn.md) — Vincula uma coluna a uma variável PHP
  - [PDOStatement::bindParam](pdostatement.bindparam.md) — Vincula um parâmetro ao nome de variável especificado
  - [PDOStatement::bindValue](pdostatement.bindvalue.md) — Vincula um valor a um parâmetro
  - [PDOStatement::closeCursor](pdostatement.closecursor.md) — Fecha o cursor, permitindo que a instrução seja executada novamente
  - [PDOStatement::columnCount](pdostatement.columncount.md) — Retorna o número de colunas no conjunto de resultados
  - [PDOStatement::debugDumpParams](pdostatement.debugdumpparams.md) — Despeja uma instrução preparada SQL
  - [PDOStatement::errorCode](pdostatement.errorcode.md) — Busca o SQLSTATE associado com a última operação no objeto da instrução
  - [PDOStatement::errorInfo](pdostatement.errorinfo.md) — Busca informação de erro estendida associada com a última operação no identificador da instrução
  - [PDOStatement::execute](pdostatement.execute.md) — Executa ums instrução preparada
  - [PDOStatement::fetch](pdostatement.fetch.md) — Busca a próxima linha de um resultado
  - [PDOStatement::fetchAll](pdostatement.fetchall.md) — Busca as linhas remanescentes de um conjunto de resultados
  - [PDOStatement::fetchColumn](pdostatement.fetchcolumn.md) — Retorna uma única coluna do próximo registro de um resultado
  - [PDOStatement::fetchObject](pdostatement.fetchobject.md) — Busca o próximo registro e retorna-o como um objeto
  - [PDOStatement::getAttribute](pdostatement.getattribute.md) — Recupera um atributo da instrução
  - [PDOStatement::getColumnMeta](pdostatement.getcolumnmeta.md) — Retorna metadados para uma coluna no resultado
  - [PDOStatement::getIterator](pdostatement.getiterator.md) — Obtém o iterador do conjunto de resultados
  - [PDOStatement::nextRowset](pdostatement.nextrowset.md) — Avança para o próximo conjunto de registros em um identificados de instrução com múltiplos conjuntos de registros
  - [PDOStatement::rowCount](pdostatement.rowcount.md) — Retorna o número de registros afetados pela última instrução SQL
  - [PDOStatement::setAttribute](pdostatement.setattribute.md) — Define um atributo na instrução
  - [PDOStatement::setFetchMode](pdostatement.setfetchmode.md) — Define o modo de carga de dados para esta instrução
- [PDORow](class.pdorow.md) — A classe PDORow
- [PDOException](class.pdoexception.md) — A classe PDOException
- [Drivers do PDO](pdo.drivers.md)
  - [Driver PDO do CUBRID](ref.pdo-cubrid.md) — Driver PDO do CUBRID (PDO\_CUBRID)
  - [Driver PDO do MS SQL Server](ref.pdo-dblib.md) — Driver PDO do Microsoft SQL Server e Sybase (PDO\_DBLIB)
  - [Pdo\Dblib](class.pdo-dblib.md) — A classe Pdo\Dblib
  - [Driver PDO do Firebird](ref.pdo-firebird.md) — Driver PDO do Firebird (PDO\_FIREBIRD)
  - [Pdo\Firebird](class.pdo-firebird.md) — A classe Pdo\Firebird
  - [Driver PDO da IBM](ref.pdo-ibm.md) — Driver PDO da IBM (PDO\_IBM)
  - [Driver PDO do Informix](ref.pdo-informix.md) — Driver PDO do Informix (PDO\_INFORMIX)
  - [Driver PDO do MySQL](ref.pdo-mysql.md) — Driver PDO do MySQL (PDO\_MYSQL)
  - [Pdo\Mysql](class.pdo-mysql.md) — A classe Pdo\Mysql
  - [Driver PDO do Microsoft SQL Server](ref.pdo-sqlsrv.md) — Driver PDO do Microsoft SQL Server (PDO\_SQLSRV)
  - [Driver PDO do Oracle](ref.pdo-oci.md) — Driver PDO do Oracle (PDO\_OCI)
  - [Driver PDO do ODBC e do DB2](ref.pdo-odbc.md) — Driver PDO do ODBC e do DB2 (PDO\_ODBC)
  - [Pdo\Odbc](class.pdo-odbc.md) — A classe Pdo\Odbc
  - [Driver PDO do PostgreSQL](ref.pdo-pgsql.md) — Driver PDO do PostgreSQL (PDO\_PGSQL)
  - [Pdo\Pgsql](class.pdo-pgsql.md) — A classe Pdo\Pgsql
  - [Driver PDO do SQLite](ref.pdo-sqlite.md) — Driver PDO do SQLite (PDO\_SQLITE)
  - [Pdo\Sqlite](class.pdo-sqlite.md) — A classe Pdo\Sqlite

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

# SQLite3

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.sqlite3.php

---

# SQLite3

# Introdução

Suporte para bancos de dados SQLite versão 3.

- [Instalação/Configuração](sqlite3.setup.md)
  - [Dependências](sqlite3.requirements.md)
  - [Instalação](sqlite3.installation.md)
  - [Configurações de Execução](sqlite3.configuration.md)
- [Constantes predefinidas](sqlite3.constants.md)
- [SQLite3](class.sqlite3.md) — A classe SQLite3
  - [SQLite3::backup](sqlite3.backup.md) — Copia um banco de dados para outro banco de dados
  - [SQLite3::busyTimeout](sqlite3.busytimeout.md) — Define o manipulador de conexão ocupada
  - [SQLite3::changes](sqlite3.changes.md) — Retorna o número de linhas do banco de dados que foram alteradas (ou inseridas ou
    excluídas) pela instrução SQL mais recente
  - [SQLite3::close](sqlite3.close.md) — Fecha a conexão com o banco de dados
  - [SQLite3::\_\_construct](sqlite3.construct.md) — Instancia um objeto SQLite3 e abre um banco de dados SQLite 3
  - [SQLite3::createAggregate](sqlite3.createaggregate.md) — Registra uma função PHP para uso como uma função de agregação SQL
  - [SQLite3::createCollation](sqlite3.createcollation.md) — Registra uma função PHP para uso como uma função de comparação de SQL
  - [SQLite3::createFunction](sqlite3.createfunction.md) — Registra uma função PHP para uso como uma função escalar SQL
  - [SQLite3::enableExceptions](sqlite3.enableexceptions.md) — Habilita o lançamento de exceções
  - [SQLite3::enableExtendedResultCodes](sqlite3.enableextendedresultcodes.md) — Enables or disables the use of extended result codes
  - [SQLite3::escapeString](sqlite3.escapestring.md) — Retorna uma string que foi devidamente escapada
  - [SQLite3::exec](sqlite3.exec.md) — Executa uma consulta sem resultado em um determinado banco de dados
  - [SQLite3::lastErrorCode](sqlite3.lasterrorcode.md) — Retorna o código de resultado numérico da última solicitação SQLite que falhou
  - [SQLite3::lastErrorMsg](sqlite3.lasterrormsg.md) — Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou
  - [SQLite3::lastExtendedErrorCode](sqlite3.lastextendederrorcode.md) — Returns the numeric extended result code of the most recent failed
    SQLite request
  - [SQLite3::lastInsertRowID](sqlite3.lastinsertrowid.md) — Retorna o ID da linha mais recentemente INSERIDA no banco de dados
  - [SQLite3::loadExtension](sqlite3.loadextension.md) — Tenta carregar uma biblioteca de extensão do SQLite
  - [SQLite3::open](sqlite3.open.md) — Abre um banco de dados SQLite
  - [SQLite3::openBlob](sqlite3.openblob.md) — Abre um recurso de fluxo para ler um BLOB
  - [SQLite3::prepare](sqlite3.prepare.md) — Prepara uma declaração SQL para execução
  - [SQLite3::query](sqlite3.query.md) — Executa uma consulta SQL
  - [SQLite3::querySingle](sqlite3.querysingle.md) — Executa uma consulta e retorna um único resultado
  - [SQLite3::setAuthorizer](sqlite3.setauthorizer.md) — Configura um retorno de chamada a ser usado como um autorizador para limitar o que uma declaração pode fazer
  - [SQLite3::version](sqlite3.version.md) — Retorna a versão da biblioteca SQLite3 como uma constante de string e como um número
- [SQLite3Exception](class.sqlite3exception.md) — A classe SQLite3Exception
- [SQLite3Stmt](class.sqlite3stmt.md) — A classe SQLite3Stmt
  - [SQLite3Stmt::bindParam](sqlite3stmt.bindparam.md) — Vincula um parâmetro a uma variável de instrução
  - [SQLite3Stmt::bindValue](sqlite3stmt.bindvalue.md) — Vincula o valor de um parâmetro a uma variável de instrução
  - [SQLite3Stmt::busy](sqlite3stmt.busy.md) — Returns whether the statement has been fetched but not yet completed
  - [SQLite3Stmt::clear](sqlite3stmt.clear.md) — Limpa todos os parâmetros vinculados atuais
  - [SQLite3Stmt::close](sqlite3stmt.close.md) — Fecha a declaração preparada
  - [SQLite3Stmt::\_\_construct](sqlite3stmt.construct.md) — Constrói um objeto SQLite3Stmt
  - [SQLite3Stmt::execute](sqlite3stmt.execute.md) — Executa uma declaração preparada e retorna um objeto de conjunto de resultados
  - [SQLite3Stmt::explain](sqlite3stmt.explain.md) — Returns the explain mode of the statement
  - [SQLite3Stmt::getSQL](sqlite3stmt.getsql.md) — Obtém o SQL da instrução
  - [SQLite3Stmt::paramCount](sqlite3stmt.paramcount.md) — Retorna o número de parâmetros dentro da declaração preparada
  - [SQLite3Stmt::readOnly](sqlite3stmt.readonly.md) — Retorna se uma declaração é definitivamente somente leitura
  - [SQLite3Stmt::reset](sqlite3stmt.reset.md) — Reseta a declaração preparada
  - [SQLite3Stmt::setExplain](sqlite3stmt.setexplain.md) — Changes the explain mode of the statement
- [SQLite3Result](class.sqlite3result.md) — A classe SQLite3Result
  - [SQLite3Result::columnName](sqlite3result.columnname.md) — Retorna o nome da enésima coluna
  - [SQLite3Result::columnType](sqlite3result.columntype.md) — Retorna o tipo da enésima coluna
  - [SQLite3Result::\_\_construct](sqlite3result.construct.md) — Constrói um SQLite3Result
  - [SQLite3Result::fetchArray](sqlite3result.fetcharray.md) — Obtém uma linha de resultado como um array associativo, numericamente indexado ou ambos
  - [SQLite3Result::finalize](sqlite3result.finalize.md) — Fecha o conjunto de resultados
  - [SQLite3Result::numColumns](sqlite3result.numcolumns.md) — Retorna o número de colunas no conjunto de resultados
  - [SQLite3Result::reset](sqlite3result.reset.md) — Reinicia o conjunto de resultados de volta para a primeira linha

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

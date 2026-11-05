# Mysql_xdevapi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mysql-xdevapi.php

---

# Mysql\_xdevapi

# Introdução

Esta extensão fornece acesso ao MySQL Document Store através da X DevAPI. A X DevAPI
é uma API comum fornecida por múltiplos conectores MySQL que permitem acesso fácil a tabelas
relacionais assim como a coleções de documentos, que são representadas em JSON, a partir de uma API
com operações em estilo CRUD.

A X DevAPI usa do protocolo X, o protocolo cliente-servidor de nova geração do servidor
MySQL 8.0.

Para informação geral sobre o MySQL Document Store, favor se referir ao capítulo
[» MySQL Document Store](https://dev.mysql.com/doc/refman/8.0/en/document-store.html)
no manual do MySQL.

- [Instalação/Configuração](mysql-xdevapi.setup.md)
  - [Dependências](mysql-xdevapi.requirements.md)
  - [Instalação](mysql-xdevapi.installation.md)
  - [Configurações de Execução](mysql-xdevapi.configuration.md)
  - [Construindo / Compilando a Partir da Fonte](mysql-xdevapi.build.md)
- [Constantes predefinidas](mysql-xdevapi.constants.md)
- [Registro de Alterações](changelog.mysql_xdevapi.md)
- [Examples](mysql-xdevapi.examples.md)
- [Funções de Mysql\_xdevapi](ref.mysql-xdevapi.md)
  - [expression](function.mysql-xdevapi-expression.md) — Vincula as variáveis de instrução preparada como parâmetros
  - [getSession](function.mysql-xdevapi-getsession.md) — Conecta a um servidor MySQL
- [mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md) — Interface BaseResult
  - [BaseResult::getWarnings](mysql-xdevapi-baseresult.getwarnings.md) — Buscar alertas da última operação
  - [BaseResult::getWarningsCount](mysql-xdevapi-baseresult.getwarningscount.md) — Busca contagem de alertas da última operação
- [mysql\_xdevapi\Client](class.mysql-xdevapi-client.md) — Classe Client
  - [mysql\_xdevapi\Client::close](mysql-xdevapi-client.close.md) — Fecha o cliente
  - [Client::\_\_construct](mysql-xdevapi-client.construct.md) — Construtor de Client
  - [Client::getClient](mysql-xdevapi-client.getsession.md) — Obtém a sessão do cliente
- [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md) — Classe Collection
  - [Collection::add](mysql-xdevapi-collection.add.md) — Adiciona um documento na coleção
  - [Collection::addOrReplaceOne](mysql-xdevapi-collection.addorreplaceone.md) — Adiciona ou substitui um documento na coleção
  - [Collection::\_\_construct](mysql-xdevapi-collection.construct.md) — Construtor de Collection
  - [Collection::count](mysql-xdevapi-collection.count.md) — Obtém a contagem de documentos
  - [Collection::createIndex](mysql-xdevapi-collection.createindex.md) — Cria índice na coleção
  - [Collection::dropIndex](mysql-xdevapi-collection.dropindex.md) — Remove um índice da coleção
  - [Collection::existsInDatabase](mysql-xdevapi-collection.existsindatabase.md) — Verifica se uma coleção existe no banco de dados
  - [Collection::find](mysql-xdevapi-collection.find.md) — Pesquisa por um documento
  - [Collection::getName](mysql-xdevapi-collection.getname.md) — Obtém o nome da coleção
  - [Collection::getOne](mysql-xdevapi-collection.getone.md) — Obtém um documento
  - [Collection::getSchema](mysql-xdevapi-collection.getschema.md) — Obtém o objeto de esquema
  - [Collection::getSession](mysql-xdevapi-collection.getsession.md) — Obtém o objeto de sessão
  - [Collection::modify](mysql-xdevapi-collection.modify.md) — Modifica documentos da coleção
  - [Collection::remove](mysql-xdevapi-collection.remove.md) — Remove documentos da coleção
  - [Collection::removeOne](mysql-xdevapi-collection.removeone.md) — Remove um documento da coleção
  - [Collection::replaceOne](mysql-xdevapi-collection.replaceone.md) — Substitui um documento na coleção
- [mysql\_xdevapi\CollectionAdd](class.mysql-xdevapi-collectionadd.md) — Classe CollectionAdd
  - [CollectionAdd::\_\_construct](mysql-xdevapi-collectionadd.construct.md) — Construtor de CollectionAdd
  - [CollectionAdd::execute](mysql-xdevapi-collectionadd.execute.md) — Executa a instrução
- [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md) — Classe CollectionFind
  - [CollectionFind::bind](mysql-xdevapi-collectionfind.bind.md) — Vincula valor a marcador na consulta
  - [CollectionFind::\_\_construct](mysql-xdevapi-collectionfind.construct.md) — Construtor de CollectionFind
  - [CollectionFind::execute](mysql-xdevapi-collectionfind.execute.md) — Executa a instrução
  - [CollectionFind::fields](mysql-xdevapi-collectionfind.fields.md) — Define filtro de campo de documento
  - [CollectionFind::groupBy](mysql-xdevapi-collectionfind.groupby.md) — Define critérios de agrupamento
  - [CollectionFind::having](mysql-xdevapi-collectionfind.having.md) — Define condição para funções de agregação
  - [CollectionFind::limit](mysql-xdevapi-collectionfind.limit.md) — Limita o número de documentos retornados
  - [CollectionFind::lockExclusive](mysql-xdevapi-collectionfind.lockexclusive.md) — Executa a operação com EXCLUSIVE LOCK
  - [CollectionFind::lockShared](mysql-xdevapi-collectionfind.lockshared.md) — Executa a operação com SHARED LOCK
  - [CollectionFind::offset](mysql-xdevapi-collectionfind.offset.md) — Pula um número de elementos a serem retornados
  - [CollectionFind::sort](mysql-xdevapi-collectionfind.sort.md) — Define os critérios de ordenação
- [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md) — Classe CollectionModify
  - [CollectionModify::arrayAppend](mysql-xdevapi-collectionmodify.arrayappend.md) — Anexa elemento a um array de campos
  - [CollectionModify::arrayInsert](mysql-xdevapi-collectionmodify.arrayinsert.md) — Insere elemento em um array de campos
  - [CollectionModify::bind](mysql-xdevapi-collectionmodify.bind.md) — Vincula valor ao marcador da consulta
  - [CollectionModify::\_\_construct](mysql-xdevapi-collectionmodify.construct.md) — Construtor de CollectionModify
  - [CollectionModify::execute](mysql-xdevapi-collectionmodify.execute.md) — Executa operação de modificação
  - [CollectionModify::limit](mysql-xdevapi-collectionmodify.limit.md) — Limita o número de documentos modificados
  - [CollectionModify::patch](mysql-xdevapi-collectionmodify.patch.md) — Corrige documento
  - [CollectionModify::replace](mysql-xdevapi-collectionmodify.replace.md) — Substitui campo de documento
  - [CollectionModify::set](mysql-xdevapi-collectionmodify.set.md) — Define atributo de documento
  - [CollectionModify::skip](mysql-xdevapi-collectionmodify.skip.md) — Pula elementos
  - [CollectionModify::sort](mysql-xdevapi-collectionmodify.sort.md) — Define os critérios de ordenação
  - [CollectionModify::unset](mysql-xdevapi-collectionmodify.unset.md) — Remove o valor de campos do documento
- [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md) — Classe CollectionRemove
  - [CollectionRemove::bind](mysql-xdevapi-collectionremove.bind.md) — Vincula valor ao marcador
  - [CollectionRemove::\_\_construct](mysql-xdevapi-collectionremove.construct.md) — Construtor de CollectionRemove
  - [CollectionRemove::execute](mysql-xdevapi-collectionremove.execute.md) — Executa operação de remoção
  - [CollectionRemove::limit](mysql-xdevapi-collectionremove.limit.md) — Limita o número de documentos a remover
  - [CollectionRemove::sort](mysql-xdevapi-collectionremove.sort.md) — Define os critérios de ordenação
- [mysql\_xdevapi\ColumnResult](class.mysql-xdevapi-columnresult.md) — Classe ColumnResult
  - [ColumnResult::\_\_construct](mysql-xdevapi-columnresult.construct.md) — Construtor de ColumnResult
  - [ColumnResult::getCharacterSetName](mysql-xdevapi-columnresult.getcharactersetname.md) — Obtém o conjunto de caracteres
  - [ColumnResult::getCollationName](mysql-xdevapi-columnresult.getcollationname.md) — Obtém o nome da colação
  - [ColumnResult::getColumnLabel](mysql-xdevapi-columnresult.getcolumnlabel.md) — Obtém o label da coluna
  - [ColumnResult::getColumnName](mysql-xdevapi-columnresult.getcolumnname.md) — Obtém o nome da coluna
  - [ColumnResult::getFractionalDigits](mysql-xdevapi-columnresult.getfractionaldigits.md) — Obtém o comprimento dos dígitos fracionários
  - [ColumnResult::getLength](mysql-xdevapi-columnresult.getlength.md) — Obtém o comprimento do campo da coluna
  - [ColumnResult::getSchemaName](mysql-xdevapi-columnresult.getschemaname.md) — Obtám o nome do esquema
  - [ColumnResult::getTableLabel](mysql-xdevapi-columnresult.gettablelabel.md) — Obtém o label da tabela
  - [ColumnResult::getTableName](mysql-xdevapi-columnresult.gettablename.md) — Obtém o nome da tabela
  - [ColumnResult::getType](mysql-xdevapi-columnresult.gettype.md) — Obtém o tipo de coluna
  - [ColumnResult::isNumberSigned](mysql-xdevapi-columnresult.isnumbersigned.md) — Verifica se é do tipo com sinal
  - [ColumnResult::isPadded](mysql-xdevapi-columnresult.ispadded.md) — Verifica se é preenchida à esquerda
- [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md) — Interface CrudOperationBindable
  - [CrudOperationBindable::bind](mysql-xdevapi-crudoperationbindable.bind.md) — Vincula valor ao marcador
- [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md) — Interface CrudOperationLimitable
  - [CrudOperationLimitable::limit](mysql-xdevapi-crudoperationlimitable.limit.md) — Define o limite do resultado
- [mysql\_xdevapi\CrudOperationSkippable](class.mysql-xdevapi-crudoperationskippable.md) — Interface CrudOperationSkippable
  - [CrudOperationSkippable::skip](mysql-xdevapi-crudoperationskippable.skip.md) — Número de operações a pular
- [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md) — Interface CrudOperationSortable
  - [CrudOperationSortable::sort](mysql-xdevapi-crudoperationsortable.sort.md) — Ordena resultados
- [mysql\_xdevapi\DatabaseObject](class.mysql-xdevapi-databaseobject.md) — Interface DatabaseObject
  - [DatabaseObject::existsInDatabase](mysql-xdevapi-databaseobject.existsindatabase.md) — Verifica se um objeto existe em um banco de dados
  - [DatabaseObject::getName](mysql-xdevapi-databaseobject.getname.md) — Obtém o nome do objeto
  - [DatabaseObject::getSession](mysql-xdevapi-databaseobject.getsession.md) — Obtém o nome da sessão
- [mysql\_xdevapi\DocResult](class.mysql-xdevapi-docresult.md) — Classe DocResult
  - [DocResult::\_\_construct](mysql-xdevapi-docresult.construct.md) — Construtor de DocResult
  - [DocResult::fetchAll](mysql-xdevapi-docresult.fetchall.md) — Obtém todas as linhas
  - [DocResult::fetchOne](mysql-xdevapi-docresult.fetchone.md) — Obtém uma linha
  - [DocResult::getWarnings](mysql-xdevapi-docresult.getwarnings.md) — Obtém alertas da última operação
  - [DocResult::getWarningsCount](mysql-xdevapi-docresult.getwarningscount.md) — Obtém a contagem de alertas da última operação
- [mysql\_xdevapi\Exception](class.mysql-xdevapi-exception.md) — Classe Exception
- [mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) — Interface Executable
  - [Executable::execute](mysql-xdevapi-executable.execute.md) — Executa instrução
- [mysql\_xdevapi\ExecutionStatus](class.mysql-xdevapi-executionstatus.md) — Classe ExecutionStatus
  - [ExecutionStatus::\_\_construct](mysql-xdevapi-executionstatus.construct.md) — Construtor de ExecutionStatus
- [mysql\_xdevapi\Expression](class.mysql-xdevapi-expression.md) — Classe Expression
  - [Expression::\_\_construct](mysql-xdevapi-expression.construct.md) — Construtor de Expression
- [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md) — Classe Result
  - [Result::\_\_construct](mysql-xdevapi-result.construct.md) — Construtor de Result
  - [Result::getAffectedItemsCount](mysql-xdevapi-result.getaffecteditemscount.md) — Obtém contagem de linhas afetadas
  - [Result::getAutoIncrementValue](mysql-xdevapi-result.getautoincrementvalue.md) — Obtém valor de incremento automático
  - [Result::getGeneratedIds](mysql-xdevapi-result.getgeneratedids.md) — Obtém os IDs gerados
  - [Result::getWarnings](mysql-xdevapi-result.getwarnings.md) — Obtém alertas da última operação
  - [Result::getWarningsCount](mysql-xdevapi-result.getwarningscount.md) — Obtém contagem de alertas da última operação
- [mysql\_xdevapi\RowResult](class.mysql-xdevapi-rowresult.md) — Classe RowResult
  - [RowResult::\_\_construct](mysql-xdevapi-rowresult.construct.md) — Construtor de RowResult
  - [RowResult::fetchAll](mysql-xdevapi-rowresult.fetchall.md) — Obtém todas as linhas do resultado
  - [RowResult::fetchOne](mysql-xdevapi-rowresult.fetchone.md) — Obtém linha do resultado
  - [RowResult::getColumnsCount](mysql-xdevapi-rowresult.getcolumncount.md) — Obtém a contagem de colunas
  - [RowResult::getColumnNames](mysql-xdevapi-rowresult.getcolumnnames.md) — Obtém o nome de todas as colunas
  - [RowResult::getColumns](mysql-xdevapi-rowresult.getcolumns.md) — Obtém metadados de coluna
  - [RowResult::getWarnings](mysql-xdevapi-rowresult.getwarnings.md) — Obtém os alertas da última operação
  - [RowResult::getWarningsCount](mysql-xdevapi-rowresult.getwarningscount.md) — Obtém a contagem de alertas da última operação
- [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md) — Classe Schema
  - [Schema::\_\_construct](mysql-xdevapi-schema.construct.md) — Construtor de Schema
  - [Schema::createCollection](mysql-xdevapi-schema.createcollection.md) — Adiciona coleção ao esquema
  - [Schema::dropCollection](mysql-xdevapi-schema.dropcollection.md) — Remove coleção do esquema
  - [Schema::existsInDatabase](mysql-xdevapi-schema.existsindatabase.md) — Verifica se existe no banco de dados
  - [Schema::getCollection](mysql-xdevapi-schema.getcollection.md) — Obtém coleção do esquema
  - [Schema::getCollectionAsTable](mysql-xdevapi-schema.getcollectionastable.md) — Obtém uma coleção como um objeto Table
  - [Schema::getCollections](mysql-xdevapi-schema.getcollections.md) — Obtém todas as coleções do esquema
  - [Schema::getName](mysql-xdevapi-schema.getname.md) — Obtém o nome do esquema
  - [Schema::getSession](mysql-xdevapi-schema.getsession.md) — Obtém a sessão do esquema
  - [Schema::getTable](mysql-xdevapi-schema.gettable.md) — Obtém tabela do esquema
  - [Schema::getTables](mysql-xdevapi-schema.gettables.md) — Obtém tabelas do esquema
- [mysql\_xdevapi\SchemaObject](class.mysql-xdevapi-schemaobject.md) — Interface SchemaObject
  - [SchemaObject::getSchema](mysql-xdevapi-schemaobject.getschema.md) — Obtém o objeto do esquema
- [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md) — Classe Session
  - [Session::close](mysql-xdevapi-session.close.md) — Fecha sessão
  - [Session::commit](mysql-xdevapi-session.commit.md) — Confirma a transação
  - [Session::\_\_construct](mysql-xdevapi-session.construct.md) — Construtor de Description
  - [Session::createSchema](mysql-xdevapi-session.createschema.md) — Cria novo esquema
  - [Session::dropSchema](mysql-xdevapi-session.dropschema.md) — Remove um esquema
  - [Session::generateUUID](mysql-xdevapi-session.generateuuid.md) — Obtém novo UUID
  - [Session::getDefaultSchema](mysql-xdevapi-session.getdefaultschema.md) — Obtém o nome de esquema padrão
  - [Session::getSchema](mysql-xdevapi-session.getschema.md) — Obtém um novo objeto de esquema
  - [Session::getSchemas](mysql-xdevapi-session.getschemas.md) — Obtém os esquemas
  - [Session::getServerVersion](mysql-xdevapi-session.getserverversion.md) — Obtém a versão do servidor
  - [Session::listClients](mysql-xdevapi-session.listclients.md) — Obtém a lista de clientes
  - [Session::quoteName](mysql-xdevapi-session.quotename.md) — Adiciona escape
  - [Session::releaseSavepoint](mysql-xdevapi-session.releasesavepoint.md) — Libera o ponto de gravação definido
  - [Session::rollback](mysql-xdevapi-session.rollback.md) — Reverte a transação
  - [Session::rollbackTo](mysql-xdevapi-session.rollbackto.md) — Reverte a transação para um ponto de gravação
  - [Session::setSavepoint](mysql-xdevapi-session.setsavepoint.md) — Cria ponto de gravação
  - [Session::sql](mysql-xdevapi-session.sql.md) — Cria consulta SQL
  - [Session::startTransaction](mysql-xdevapi-session.starttransaction.md) — Inicia transação
- [mysql\_xdevapi\SqlStatement](class.mysql-xdevapi-sqlstatement.md) — Classe SqlStatement
  - [SqlStatement::bind](mysql-xdevapi-sqlstatement.bind.md) — Vincula parâmetros da instrução
  - [SqlStatement::\_\_construct](mysql-xdevapi-sqlstatement.construct.md) — Construtor de Description
  - [SqlStatement::execute](mysql-xdevapi-sqlstatement.execute.md) — Executa a operação
  - [SqlStatement::getNextResult](mysql-xdevapi-sqlstatement.getnextresult.md) — Obtém o próximo resultado
  - [SqlStatement::getResult](mysql-xdevapi-sqlstatement.getresult.md) — Obtém resultado
  - [SqlStatement::hasMoreResults](mysql-xdevapi-sqlstatement.hasmoreresults.md) — Verifica por mais resultados
- [mysql\_xdevapi\SqlStatementResult](class.mysql-xdevapi-sqlstatementresult.md) — Classe SqlStatementResult
  - [SqlStatementResult::\_\_construct](mysql-xdevapi-sqlstatementresult.construct.md) — Construtor de SqlStatementResult
  - [SqlStatementResult::fetchAll](mysql-xdevapi-sqlstatementresult.fetchall.md) — Obtém todas as linhas do resultado
  - [SqlStatementResult::fetchOne](mysql-xdevapi-sqlstatementresult.fetchone.md) — Obtém uma única linha
  - [SqlStatementResult::getAffectedItemsCount](mysql-xdevapi-sqlstatementresult.getaffecteditemscount.md) — Obtém a contagem de linhas afetadas
  - [SqlStatementResult::getColumnsCount](mysql-xdevapi-sqlstatementresult.getcolumncount.md) — Obtém a contagem de colunas
  - [SqlStatementResult::getColumnNames](mysql-xdevapi-sqlstatementresult.getcolumnnames.md) — Obtém nomes de colunas
  - [SqlStatementResult::getColumns](mysql-xdevapi-sqlstatementresult.getcolumns.md) — Obtém colunas
  - [SqlStatementResult::getGeneratedIds](mysql-xdevapi-sqlstatementresult.getgeneratedids.md) — Obtém IDs gerados
  - [SqlStatementResult::getLastInsertId](mysql-xdevapi-sqlstatementresult.getlastinsertid.md) — Obtém o ID da última inserção
  - [SqlStatementResult::getWarnings](mysql-xdevapi-sqlstatementresult.getwarnings.md) — Obtém alertas da última operação
  - [SqlStatementResult::getWarningsCount](mysql-xdevapi-sqlstatementresult.getwarningcount.md) — Obtém contagem de alertas da última operação
  - [SqlStatementResult::hasData](mysql-xdevapi-sqlstatementresult.hasdata.md) — Verifica se o resultado tem dados
  - [SqlStatementResult::nextResult](mysql-xdevapi-sqlstatementresult.nextresult.md) — Obtém o próximo resultado
- [mysql\_xdevapi\Statement](class.mysql-xdevapi-statement.md) — Classe Statement
  - [Statement::\_\_construct](mysql-xdevapi-statement.construct.md) — Construtor de Statement
  - [Statement::getNextResult](mysql-xdevapi-statement.getnextresult.md) — Obtém o próximo resultado
  - [Statement::getResult](mysql-xdevapi-statement.getresult.md) — Obtém resultado
  - [Statement::hasMoreResults](mysql-xdevapi-statement.hasmoreresults.md) — Verifica se há mais resultados
- [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md) — Classe Table
  - [Table::\_\_construct](mysql-xdevapi-table.construct.md) — Construtor de Table
  - [Table::count](mysql-xdevapi-table.count.md) — Obtém contagem de linhas
  - [Table::delete](mysql-xdevapi-table.delete.md) — Deleta linhas da tabela
  - [Table::existsInDatabase](mysql-xdevapi-table.existsindatabase.md) — Verifica se uma tabela existe no banco de dados
  - [Table::getName](mysql-xdevapi-table.getname.md) — Obtém nome da tabela
  - [Table::getSchema](mysql-xdevapi-table.getschema.md) — Obtém esquema da tabela
  - [Table::getSession](mysql-xdevapi-table.getsession.md) — Obtém a sessão da tabela
  - [Table::insert](mysql-xdevapi-table.insert.md) — Insere linhas na tabela
  - [Table::isView](mysql-xdevapi-table.isview.md) — Verifica se a tabela é uma visualização
  - [Table::select](mysql-xdevapi-table.select.md) — Seleciona linhas da tabela
  - [Table::update](mysql-xdevapi-table.update.md) — Atualiza linhas na tabela
- [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md) — Classe TableDelete
  - [TableDelete::bind](mysql-xdevapi-tabledelete.bind.md) — Vincula parâmetros na instrução de deleção
  - [TableDelete::\_\_construct](mysql-xdevapi-tabledelete.construct.md) — Construtor de TableDelete
  - [TableDelete::execute](mysql-xdevapi-tabledelete.execute.md) — Executa a instrução de deleção
  - [TableDelete::limit](mysql-xdevapi-tabledelete.limit.md) — Limita as linhas deletadas
  - [TableDelete::orderby](mysql-xdevapi-tabledelete.orderby.md) — Define os critérios de ordenação na deleção
  - [TableDelete::where](mysql-xdevapi-tabledelete.where.md) — Define condição de pesquisa na deleção
- [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md) — Classe TableInsert
  - [TableInsert::\_\_construct](mysql-xdevapi-tableinsert.construct.md) — Construtor de TableInsert
  - [TableInsert::execute](mysql-xdevapi-tableinsert.execute.md) — Executa instrução de inserção
  - [TableInsert::values](mysql-xdevapi-tableinsert.values.md) — Adiciona valores para inserção
- [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md) — Classe TableSelect
  - [TableSelect::bind](mysql-xdevapi-tableselect.bind.md) — Vincula parâmetros de consulta de seleção
  - [TableSelect::\_\_construct](mysql-xdevapi-tableselect.construct.md) — Construtor TableSelect
  - [TableSelect::execute](mysql-xdevapi-tableselect.execute.md) — Executa instrução de seleção
  - [TableSelect::groupBy](mysql-xdevapi-tableselect.groupby.md) — Define critérios de agrupamento de seleção
  - [TableSelect::having](mysql-xdevapi-tableselect.having.md) — Definir condição para função de agregação na seleção
  - [TableSelect::limit](mysql-xdevapi-tableselect.limit.md) — Limita as linhas selecionadas
  - [TableSelect::lockExclusive](mysql-xdevapi-tableselect.lockexclusive.md) — Executa EXCLUSIVE LOCK
  - [TableSelect::lockShared](mysql-xdevapi-tableselect.lockshared.md) — Executa SHARED LOCK
  - [TableSelect::offset](mysql-xdevapi-tableselect.offset.md) — Define o deslocamento limite
  - [TableSelect::orderby](mysql-xdevapi-tableselect.orderby.md) — Define critérios de ordenamento na seleção
  - [TableSelect::where](mysql-xdevapi-tableselect.where.md) — Define condição de pesquisa na seleção
- [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md) — TableUpdate class
  - [TableUpdate::bind](mysql-xdevapi-tableupdate.bind.md) — Vincula parâmetros de consulta de atualização
  - [TableUpdate::\_\_construct](mysql-xdevapi-tableupdate.construct.md) — Construtor de TableUpdate
  - [TableUpdate::execute](mysql-xdevapi-tableupdate.execute.md) — Executa instrução de atualização
  - [TableUpdate::limit](mysql-xdevapi-tableupdate.limit.md) — Limita contagem de atualização de linhas
  - [TableUpdate::orderby](mysql-xdevapi-tableupdate.orderby.md) — Define critérios de ordenação
  - [TableUpdate::set](mysql-xdevapi-tableupdate.set.md) — Adiciona campo a ser atualizado
  - [TableUpdate::where](mysql-xdevapi-tableupdate.where.md) — Define filtro de pesquisa
- [mysql\_xdevapi\Warning](class.mysql-xdevapi-warning.md) — Classe Warning
  - [Warning::\_\_construct](mysql-xdevapi-warning.construct.md) — Construtor de Warning

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

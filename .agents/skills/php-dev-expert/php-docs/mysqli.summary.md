# Resumo da Função de Extensão do MySQLi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.summary.php

---

# Resumo da Função de Extensão do MySQLi

**Resumo dos métodos [mysqli](class.mysqli.md)**

| Classe mysqli |
| --- |
| Interface POO | Interface Procedural | Apelido (não use) | Descrição |
| **Propriedades** |
| [$mysqli::affected\_rows](mysqli.affected-rows.md) | [mysqli\_affected\_rows()](mysqli.affected-rows.md) | N/A | Obtém o número de linhas afetadas em uma operação MySQL anterior |
| [$mysqli::client\_info](mysqli.get-client-info.md) | [mysqli\_get\_client\_info()](mysqli.get-client-info.md) | N/A | Retorna a versão do cliente MySQL como uma string |
| [$mysqli::client\_version](mysqli.get-client-version.md) | [mysqli\_get\_client\_version()](mysqli.get-client-version.md) | N/A | Retorna as informações da versão do cliente MySQL como um número inteiro |
| [$mysqli::connect\_errno](mysqli.connect-errno.md) | [mysqli\_connect\_errno()](mysqli.connect-errno.md) | N/A | Retorna o código de erro da última chamada de conexão |
| [$mysqli::connect\_error](mysqli.connect-error.md) | [mysqli\_connect\_error()](mysqli.connect-error.md) | N/A | Retorna uma descrição de string do último erro de conexão |
| [$mysqli::errno](mysqli.errno.md) | [mysqli\_errno()](mysqli.errno.md) | N/A | Retorna o código de erro da chamada de função mais recente |
| [$mysqli::error](mysqli.error.md) | [mysqli\_error()](mysqli.error.md) | N/A | Retorna uma descrição de string do último erro |
| [$mysqli::field\_count](mysqli.field-count.md) | [mysqli\_field\_count()](mysqli.field-count.md) | N/A | Retorna o número de colunas da consulta mais recente |
| [$mysqli::host\_info](mysqli.get-host-info.md) | [mysqli\_get\_host\_info()](mysqli.get-host-info.md) | N/A | Retorna uma string representando o tipo de conexão usada |
| [$mysqli::protocol\_version](mysqli.get-proto-info.md) | [mysqli\_get\_proto\_info()](mysqli.get-proto-info.md) | N/A | Retorna a versão do protocolo MySQL usado |
| [$mysqli::server\_info](mysqli.get-server-info.md) | [mysqli\_get\_server\_info()](mysqli.get-server-info.md) | N/A | Retorna a versão do servidor MySQL |
| [$mysqli::server\_version](mysqli.get-server-version.md) | [mysqli\_get\_server\_version()](mysqli.get-server-version.md) | N/A | Retorna a versão do servidor MySQL como um inteiro |
| [$mysqli::info](mysqli.info.md) | [mysqli\_info()](mysqli.info.md) | N/A | Recupera informações sobre a consulta executada mais recentemente |
| [$mysqli::insert\_id](mysqli.insert-id.md) | [mysqli\_insert\_id()](mysqli.insert-id.md) | N/A | Retorna o id gerado automaticamente usado na última consulta |
| [$mysqli::sqlstate](mysqli.sqlstate.md) | [mysqli\_sqlstate()](mysqli.sqlstate.md) | N/A | Retorna o erro SQLSTATE da operação MySQL anterior |
| [$mysqli::warning\_count](mysqli.warning-count.md) | [mysqli\_warning\_count()](mysqli.warning-count.md) | N/A | Retorna o número de avisos da última consulta para o link fornecido |
| **Métodos** |
| [mysqli::autocommit()](mysqli.autocommit.md) | [mysqli\_autocommit()](mysqli.autocommit.md) | N/A | Ativa ou desativa modificações de banco de dados de confirmação automática |
| [mysqli::change\_user()](mysqli.change-user.md) | [mysqli\_change\_user()](mysqli.change-user.md) | N/A | Altera o usuário da conexão de banco de dados especificada |
| [mysqli::character\_set\_name()](mysqli.character-set-name.md) | [mysqli\_character\_set\_name()](mysqli.character-set-name.md) | N/A | Retorna o conjunto de caracteres padrão para a conexão do banco de dados |
| [mysqli::close()](mysqli.close.md) | [mysqli\_close()](mysqli.close.md) | N/A | Fecha uma conexão de banco de dados aberta anteriormente |
| [mysqli::commit()](mysqli.commit.md) | [mysqli\_commit()](mysqli.commit.md) | N/A | Confirma a transação atual |
| [mysqli::\_\_construct()](mysqli.construct.md) | [mysqli\_connect()](function.mysqli-connect.md) | N/A | Abra uma nova conexão com o servidor MySQL [Nota: método estático (ou seja, classe)] |
| [mysqli::debug()](mysqli.debug.md) | [mysqli\_debug()](mysqli.debug.md) | N/A | Executa operações de depuração |
| [mysqli::dump\_debug\_info()](mysqli.dump-debug-info.md) | [mysqli\_dump\_debug\_info()](mysqli.dump-debug-info.md) | N/A | Despejar informações de depuração no log |
| [mysqli::get\_charset()](mysqli.get-charset.md) | [mysqli\_get\_charset()](mysqli.get-charset.md) | N/A | Retorna um objeto de conjunto de caracteres |
| [mysqli::get\_connection\_stats()](mysqli.get-connection-stats.md) | [mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md) | N/A | Retorna estatísticas de conexão do cliente. Disponível apenas com o [mysqlnd](book.mysqlnd.md). |
| [mysqli::get\_client\_info()](mysqli.get-client-info.md) | [mysqli\_get\_client\_info()](mysqli.get-client-info.md) | N/A | Retorna a versão do cliente MySQL como uma string |
| N/A | [mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md) | N/A | Retorna as estatísticas do cliente por processo. Disponível apenas com o [mysqlnd](book.mysqlnd.md). |
| [mysqli::get\_server\_info()](mysqli.get-server-info.md) | [mysqli\_get\_server\_info()](mysqli.get-server-info.md) | N/A | Retorna uma string representando a versão do servidor MySQL ao qual a extensão MySQLi está conectada |
| [mysqli::get\_warnings()](mysqli.get-warnings.md) | [mysqli\_get\_warnings()](mysqli.get-warnings.md) | N/A | Retorna o resultado de SHOW WARNINGS |
| [mysqli::init()](mysqli.init.md) | [mysqli\_init()](mysqli.init.md) | N/A | Inicializa o MySQLi e retorna um objeto para uso com mysqli\_real\_connect. |
| [mysqli::kill()](mysqli.kill.md) | [mysqli\_kill()](mysqli.kill.md) | N/A | Pede ao servidor para matar um encadeamento do MySQL |
| [mysqli::more\_results()](mysqli.more-results.md) | [mysqli\_more\_results()](mysqli.more-results.md) | N/A | Verifica se há mais resultados de consulta de uma consulta múltipla |
| [mysqli::multi\_query()](mysqli.multi-query.md) | [mysqli\_multi\_query()](mysqli.multi-query.md) | N/A | Executa uma consulta no banco de dados |
| [mysqli::next\_result()](mysqli.next-result.md) | [mysqli\_next\_result()](mysqli.next-result.md) | N/A | Prepara o próximo resultado da multi\_query |
| [mysqli::options()](mysqli.options.md) | [mysqli\_options()](mysqli.options.md) | [mysqli\_set\_opt()](function.mysqli-set-opt.md) | Define opções |
| [mysqli::ping()](mysqli.ping.md) | [mysqli\_ping()](mysqli.ping.md) | N/A | Faz ping em uma conexão de servidor ou tenta reconectar se a conexão cair |
| [mysqli::prepare()](mysqli.prepare.md) | [mysqli\_prepare()](mysqli.prepare.md) | N/A | Prepara uma instrução SQL para execução |
| [mysqli::query()](mysqli.query.md) | [mysqli\_query()](mysqli.query.md) | N/A | Executa uma consulta no banco de dados |
| [mysqli::real\_connect()](mysqli.real-connect.md) | [mysqli\_real\_connect()](mysqli.real-connect.md) | N/A | Abre uma conexão com um servidor mysql |
| [mysqli::real\_escape\_string()](mysqli.real-escape-string.md), [mysqli::escape\_string()](function.mysqli-escape-string.md) | [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md) | [mysqli\_escape\_string()](function.mysqli-escape-string.md) | Escapa caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão |
| [mysqli::real\_query()](mysqli.real-query.md) | [mysqli\_real\_query()](mysqli.real-query.md) | N/A | Executa uma consulta SQL |
| [mysqli::refresh()](mysqli.refresh.md) | [mysqli\_refresh()](mysqli.refresh.md) | N/A | Libera tabelas ou caches ou redefine as informações do servidor de replicação |
| [mysqli::rollback()](mysqli.rollback.md) | [mysqli\_rollback()](mysqli.rollback.md) | N/A | Reverte a transação atual |
| [mysqli::select\_db()](mysqli.select-db.md) | [mysqli\_select\_db()](mysqli.select-db.md) | N/A | Seleciona o banco de dados padrão para consultas de banco de dados |
| [mysqli::set\_charset()](mysqli.set-charset.md) | [mysqli\_set\_charset()](mysqli.set-charset.md) | N/A | Define o conjunto de caracteres do cliente padrão |
| [mysqli::ssl\_set()](mysqli.ssl-set.md) | [mysqli\_ssl\_set()](mysqli.ssl-set.md) | N/A | Usado para estabelecer conexões seguras usando SSL |
| [mysqli::stat()](mysqli.stat.md) | [mysqli\_stat()](mysqli.stat.md) | N/A | Obtém o status atual do sistema |
| [mysqli::stmt\_init()](mysqli.stmt-init.md) | [mysqli\_stmt\_init()](mysqli.stmt-init.md) | N/A | Inicializa uma instrução e retorna um objeto para uso com mysqli\_stmt\_prepare |
| [mysqli::store\_result()](mysqli.store-result.md) | [mysqli\_store\_result()](mysqli.store-result.md) | N/A | Transfere um conjunto de resultados da última consulta |
| **mysqli::thread\_id()** | [mysqli\_thread\_id()](mysqli.thread-id.md) | N/A | Retorna o ID do thread para a conexão atual |
| [mysqli::thread\_safe()](mysqli.thread-safe.md) | [mysqli\_thread\_safe()](mysqli.thread-safe.md) | N/A | Retorna se a segurança de thread é dada ou não |
| [mysqli::use\_result()](mysqli.use-result.md) | [mysqli\_use\_result()](mysqli.use-result.md) | N/A | Inicia uma recuperação de conjunto de resultados |

**Resumo dos métodos [mysqli\_stmt](class.mysqli-stmt.md)**

| MySQL\_STMT |
| --- |
| Interface POO | Interface Procedural | Apelido (não use) | Descrição |
| **Propriedades** |
| [$mysqli\_stmt::affected\_rows](mysqli-stmt.affected-rows.md) | [mysqli\_stmt\_affected\_rows()](mysqli-stmt.affected-rows.md) | N/A | Retorna o número total de linhas alteradas, excluídas ou inseridas pela última instrução executada |
| [$mysqli\_stmt::errno](mysqli-stmt.errno.md) | [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) | N/A | Retorna o código de erro para a chamada de instrução mais recente |
| [$mysqli\_stmt::error](mysqli-stmt.error.md) | [mysqli\_stmt\_error()](mysqli-stmt.error.md) | N/A | Retorna uma descrição de string para o último erro de instrução |
| [$mysqli\_stmt::field\_count](mysqli-stmt.field-count.md) | [mysqli\_stmt\_field\_count()](mysqli-stmt.field-count.md) | N/A | Retorna o número de campos na instrução |
| [$mysqli\_stmt::insert\_id](mysqli-stmt.insert-id.md) | [mysqli\_stmt\_insert\_id()](mysqli-stmt.insert-id.md) | N/A | Obtenha o ID gerado da operação INSERT anterior |
| [$mysqli\_stmt::num\_rows](mysqli-stmt.num-rows.md) | [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) | N/A | Retorna o número de linhas no conjunto de resultados da instrução |
| [$mysqli\_stmt::param\_count](mysqli-stmt.param-count.md) | [mysqli\_stmt\_param\_count()](mysqli-stmt.param-count.md) | N/A | Retorna o número do parâmetro para a instrução |
| [$mysqli\_stmt::sqlstate](mysqli-stmt.sqlstate.md) | [mysqli\_stmt\_sqlstate()](mysqli-stmt.sqlstate.md) | N/A | Retorna o erro SQLSTATE da operação anterior |
| **Métodos** |
| [mysqli\_stmt::attr\_get()](mysqli-stmt.attr-get.md) | [mysqli\_stmt\_attr\_get()](mysqli-stmt.attr-get.md) | N/A | Usado para obter o valor atual de um atributo de instrução |
| [mysqli\_stmt::attr\_set()](mysqli-stmt.attr-set.md) | [mysqli\_stmt\_attr\_set()](mysqli-stmt.attr-set.md) | N/A | Usado para modificar o comportamento de uma instrução preparada |
| [mysqli\_stmt::bind\_param()](mysqli-stmt.bind-param.md) | [mysqli\_stmt\_bind\_param()](mysqli-stmt.bind-param.md) | N/A | Vincula variáveis a uma instrução preparada como parâmetros |
| [mysqli\_stmt::bind\_result()](mysqli-stmt.bind-result.md) | [mysqli\_stmt\_bind\_result()](mysqli-stmt.bind-result.md) | N/A | Vincula variáveis a uma instrução preparada para armazenamento de resultados |
| [mysqli\_stmt::close()](mysqli-stmt.close.md) | [mysqli\_stmt\_close()](mysqli-stmt.close.md) | N/A | Fecha uma instrução preparada |
| [mysqli\_stmt::data\_seek()](mysqli-stmt.data-seek.md) | [mysqli\_stmt\_data\_seek()](mysqli-stmt.data-seek.md) | N/A | Aponta para uma linha arbitrária no conjunto de resultados da instrução |
| [mysqli\_stmt::execute()](mysqli-stmt.execute.md) | [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) | [mysqli\_execute()](function.mysqli-execute.md) | Executa uma consulta preparada |
| [mysqli\_stmt::fetch()](mysqli-stmt.fetch.md) | [mysqli\_stmt\_fetch()](mysqli-stmt.fetch.md) | N/A | Busca resultados de uma instrução preparada nas variáveis vinculadas |
| [mysqli\_stmt::free\_result()](mysqli-stmt.free-result.md) | [mysqli\_stmt\_free\_result()](mysqli-stmt.free-result.md) | N/A | Libera a memória de resultado armazenada para o identificador de instrução fornecido |
| [mysqli\_stmt::get\_result()](mysqli-stmt.get-result.md) | [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) | N/A | Obtém um conjunto de resultados de uma instrução preparada. Disponível apenas com o [mysqlnd](book.mysqlnd.md). |
| [mysqli\_stmt::get\_warnings()](mysqli-stmt.get-warnings.md) | [mysqli\_stmt\_get\_warnings()](mysqli-stmt.get-warnings.md) | N/A | NÃO DOCUMENTADO |
| [mysqli\_stmt::more\_results()](mysqli-stmt.more-results.md) | [mysqli\_stmt\_more\_results()](mysqli-stmt.more-results.md) | N/A | Verifica se há mais resultados de consulta de uma consulta múltipla |
| [mysqli\_stmt::next\_result()](mysqli-stmt.next-result.md) | [mysqli\_stmt\_next\_result()](mysqli-stmt.next-result.md) | N/A | Lê o próximo resultado de uma consulta múltipla |
| [mysqli\_stmt::num\_rows()](mysqli-stmt.num-rows.md) | [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) | N/A | Veja também a propriedade [$mysqli\_stmt::num\_rows](mysqli-stmt.num-rows.md) |
| [mysqli\_stmt::prepare()](mysqli-stmt.prepare.md) | [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md) | N/A | Prepara uma instrução SQL para execução |
| [mysqli\_stmt::reset()](mysqli-stmt.reset.md) | [mysqli\_stmt\_reset()](mysqli-stmt.reset.md) | N/A | Redefine uma instrução preparada |
| [mysqli\_stmt::result\_metadata()](mysqli-stmt.result-metadata.md) | [mysqli\_stmt\_result\_metadata()](mysqli-stmt.result-metadata.md) | N/A | Retorna os metadados do conjunto de resultados de uma instrução preparada |
| [mysqli\_stmt::send\_long\_data()](mysqli-stmt.send-long-data.md) | [mysqli\_stmt\_send\_long\_data()](mysqli-stmt.send-long-data.md) | N/A | Envia dados em blocos |
| [mysqli\_stmt::store\_result()](mysqli-stmt.store-result.md) | [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) | N/A | Transfere um conjunto de resultados de uma instrução preparada |

**Resumo dos métodos [mysqli\_result](class.mysqli-result.md)**

| mysqli\_result |
| --- |
| Interface POO | Interface Procedural | Apelido (não use) | Descrição |
| **Propriedades** |
| [$mysqli\_result::current\_field](mysqli-result.current-field.md) | [mysqli\_field\_tell()](mysqli-result.current-field.md) | N/A | Obtém o deslocamento de campo atual de um ponteiro de resultado |
| [$mysqli\_result::field\_count](mysqli-result.field-count.md) | [mysqli\_num\_fields()](mysqli-result.field-count.md) | N/A | Obtém o número de campos em um resultado |
| [$mysqli\_result::lengths](mysqli-result.lengths.md) | [mysqli\_fetch\_lengths()](mysqli-result.lengths.md) | N/A | Retorna os comprimentos das colunas da linha atual no conjunto de resultados |
| [$mysqli\_result::num\_rows](mysqli-result.num-rows.md) | [mysqli\_num\_rows()](mysqli-result.num-rows.md) | N/A | Obtém o número de linhas em um resultado |
| **Methods** |
| [mysqli\_result::data\_seek()](mysqli-result.data-seek.md) | [mysqli\_data\_seek()](mysqli-result.data-seek.md) | N/A | Ajusta o ponteiro de resultado para uma linha arbitrária no resultado |
| [mysqli\_result::fetch\_all()](mysqli-result.fetch-all.md) | [mysqli\_fetch\_all()](mysqli-result.fetch-all.md) | N/A | Busca todas as linhas de resultado e retorna o conjunto de resultados como um array associativo, um array numérico ou ambos. Disponível apenas com o [mysqlnd](book.mysqlnd.md). |
| [mysqli\_result::fetch\_array()](mysqli-result.fetch-array.md) | [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) | N/A | Busca uma linha de resultado como um array associativo, um array numérico ou ambos |
| [mysqli\_result::fetch\_assoc()](mysqli-result.fetch-assoc.md) | [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) | N/A | Busca uma linha de resultado como um array associativo |
| [mysqli\_result::fetch\_column()](mysqli-result.fetch-column.md) | [mysqli\_fetch\_column()](mysqli-result.fetch-column.md) | N/A | Busca uma única coluna da próxima linha de um conjunto de resultados |
| [mysqli\_result::fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) | [mysqli\_fetch\_field\_direct()](mysqli-result.fetch-field-direct.md) | N/A | Busca metadados para um único campo |
| [mysqli\_result::fetch\_field()](mysqli-result.fetch-field.md) | [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) | N/A | Retorna o próximo campo no conjunto de resultados |
| [mysqli\_result::fetch\_fields()](mysqli-result.fetch-fields.md) | [mysqli\_fetch\_fields()](mysqli-result.fetch-fields.md) | N/A | Retorna um array de objetos que representam os campos em um conjunto de resultados |
| [mysqli\_result::fetch\_object()](mysqli-result.fetch-object.md) | [mysqli\_fetch\_object()](mysqli-result.fetch-object.md) | N/A | Retorna a linha atual de um conjunto de resultados como um objeto |
| [mysqli\_result::fetch\_row()](mysqli-result.fetch-row.md) | [mysqli\_fetch\_row()](mysqli-result.fetch-row.md) | N/A | Obtém uma linha de resultado como um array enumerado |
| [mysqli\_result::field\_seek()](mysqli-result.field-seek.md) | [mysqli\_field\_seek()](mysqli-result.field-seek.md) | N/A | Define ponteiro de resultado para um deslocamento de campo especificado |
| [mysqli\_result::free()](mysqli-result.free.md), [mysqli\_result::close](mysqli-result.free.md), [mysqli\_result::free\_result](mysqli-result.free.md) | [mysqli\_free\_result()](mysqli-result.free.md) | N/A | Libera a memória associada a um resultado |

**Resumo dos métodos [mysqli\_driver](class.mysqli-driver.md)**

| MySQL\_Driver |
| --- |
| Interface POO | Interface Procedural | Apelido (não use) | Descrição |
| **Propriedades** |
| [$mysqli\_driver::mysqli\_report](mysqli-driver.report-mode.md) | [mysqli\_report()](function.mysqli-report.md) | N/A | Define o modo de relatório de erros do mysqli |
| **Métodos** |
| [mysqli\_driver::embedded\_server\_end()](mysqli-driver.embedded-server-end.md) | [mysqli\_embedded\_server\_end()](mysqli-driver.embedded-server-end.md) | N/A | NÃO DOCUMENTADO |
| [mysqli\_driver::embedded\_server\_start()](mysqli-driver.embedded-server-start.md) | [mysqli\_embedded\_server\_start()](mysqli-driver.embedded-server-start.md) | N/A | NÃO DOCUMENTADO |

> **Nota**:
>
> As funções apelido são fornecidas apenas para fins de compatibilidade com versões
> anteriores. Não os use em novos projetos.

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

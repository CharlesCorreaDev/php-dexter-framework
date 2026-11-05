# Extensão MySQL Melhorada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mysqli.php

---

# Extensão MySQL Melhorada

# Introdução

A extensão `mysqli` permite a você acessar a funcionalidade
provida pelo MySQL 4.1 e posterior. Maiores informações sobre o servidor de
banco de dados MySQL podem ser encontradas em
[» https://www.mysql.com/](https://www.mysql.com/)

Uma visão geral de software disponível para usar MySQL através do PHP
pode ser encontrada em [Visão Geral](mysqli.overview.md)

Documentação para o MySQL pode ser encontrada em
[» https://dev.mysql.com/doc/](https://dev.mysql.com/doc/).

Partes desta documentação foram incluídas do manual do MySQL com a permissão
de Oracle Corporation.

Os exemplos usam tanto o banco de dados
[» world](https://dev.mysql.com/doc/world-setup/en/index.html) quanto o banco de dados
[» sakila](https://dev.mysql.com/doc/sakila/en/index.html), que estão disponíveis livremente.

- [Visão Geral](mysqli.overview.md)
- [Guia de início rápido](mysqli.quickstart.md)
  - [Interface dupla, procedural e orientada a objetos](mysqli.quickstart.dual-interface.md)
  - [Conexões](mysqli.quickstart.connections.md)
  - [Executando instruções](mysqli.quickstart.statements.md)
  - [Instruções Preparadas](mysqli.quickstart.prepared-statements.md)
  - [Procedimentos Armazenados](mysqli.quickstart.stored-procedures.md)
  - [Instruções Múltiplas](mysqli.quickstart.multiple-statement.md)
  - [Suporte da API para transações](mysqli.quickstart.transactions.md)
  - [Metadados](mysqli.quickstart.metadata.md)
- [Instalação/Configuração](mysqli.setup.md)
  - [Dependências](mysqli.requirements.md)
  - [Instalação](mysqli.installation.md)
  - [Configurações de Execução](mysqli.configuration.md)
- [A extensão mysqli e conexões persistentes](mysqli.persistconns.md)
- [Constantes predefinidas](mysqli.constants.md)
- [Notas](mysqli.notes.md)
- [Resumo da Função de Extensão do MySQLi](mysqli.summary.md)
- [mysqli](class.mysqli.md) — A classe mysqli
  - [mysqli::$affected\_rows](mysqli.affected-rows.md) — Retorna o número de linhas afetadas pela operação MySQL anterior
  - [mysqli::autocommit](mysqli.autocommit.md) — Ativa ou desativa a gravação automática das modificações no banco de dados
  - [mysqli::begin\_transaction](mysqli.begin-transaction.md) — Inicia uma transação
  - [mysqli::change\_user](mysqli.change-user.md) — Altera o usuário da conexão com o banco de dados
  - [mysqli::character\_set\_name](mysqli.character-set-name.md) — Retorna o conjunto de caracteres atual da conexão com o banco de dados
  - [mysqli::close](mysqli.close.md) — Fecha uma conexão ao banco de dados previamente aberta
  - [mysqli::commit](mysqli.commit.md) — Grava a transação atual
  - [mysqli::$connect\_errno](mysqli.connect-errno.md) — Retorna o código de erro da última chamada de conexão
  - [mysqli::$connect\_error](mysqli.connect-error.md) — Retorna uma descrição do último erro de conexão
  - [mysqli::\_\_construct](mysqli.construct.md) — Abre uma nova conexão com o servidor MySQL
  - [mysqli::debug](mysqli.debug.md) — Realiza operações de depuração
  - [mysqli::dump\_debug\_info](mysqli.dump-debug-info.md) — Descarrega informação de debug no log
  - [mysqli->errno](mysqli.errno.md) — Retorna o código de erro para a chamada de função mais recente
  - [mysqli->error](mysqli.error.md) — Retorna uma string descrevendo o último erro
  - [mysqli::$error\_list](mysqli.error-list.md) — Retorna uma lista de erros do último comando executado
  - [mysqli::escape\_string](mysqli.escape-string.md) — Sinônimo de mysqli\_real\_escape\_string
  - [mysqli::execute\_query](mysqli.execute-query.md) — Prepara, vincula parâmetros e executa a instrução SQL
  - [mysqli::$field\_count](mysqli.field-count.md) — Retorna o número de campos para a consulta mais recente
  - [mysqli::get\_charset](mysqli.get-charset.md) — Retorna um objeto de conjunto de caracteres
  - [mysqli::$client\_info](mysqli.get-client-info.md) — Obtém informação do cliente MySQL
  - [mysqli::$client\_version](mysqli.get-client-version.md) — Retorna a versão do cliente MySQL como um inteiro
  - [mysqli::get\_connection\_stats](mysqli.get-connection-stats.md) — Retorna estatísticas sobre a conexão do cliente
  - [mysqli::$host\_info](mysqli.get-host-info.md) — Retorna uma string representando o tipo de conexão utilizada
  - [mysqli::$protocol\_version](mysqli.get-proto-info.md) — Retorna a versão do protocolo MySQL usada
  - [mysqli::$server\_info](mysqli.get-server-info.md) — Retorna a versão do servidor MySQL
  - [mysqli::$server\_version](mysqli.get-server-version.md) — Retorna a versão do servidor MySQL como um inteiro
  - [mysqli::get\_warnings](mysqli.get-warnings.md) — Obtém o resultado de SHOW WARNINGS
  - [mysqli::$info](mysqli.info.md) — Recupera informação sobre a recente consulta executada
  - [mysqli::init](mysqli.init.md) — Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli\_real\_connect()
  - [mysqli::$insert\_id](mysqli.insert-id.md) — Retorna o valor gerado para uma coluna AUTO\_INCREMENT pela última consulta
  - [mysqli::kill](mysqli.kill.md) — Solicita ao servidor o encerramento de um thread do MySQL
  - [mysqli::more\_results](mysqli.more-results.md) — Verifica se há mais algum resultado de uma consulta múltipla
  - [mysqli::multi\_query](mysqli.multi-query.md) — Executa uma ou mais consultas no banco de dados
  - [mysqli::next\_result](mysqli.next-result.md) — Prepara o próximo resultado de multi\_query
  - [mysqli::options](mysqli.options.md) — Define opções
  - [mysqli::ping](mysqli.ping.md) — Faz ping em uma conexão de servidor ou tenta reconectar se a conexão cair
  - [mysqli::poll](mysqli.poll.md) — Sondagem de conexões
  - [mysqli::prepare](mysqli.prepare.md) — Prepara uma instrução SQL para execução
  - [mysqli::query](mysqli.query.md) — Executa uma consulta no banco de dados
  - [mysqli::quote\_string](mysqli.quote-string.md) — Quotes and escapes a string for use in an SQL statement
  - [mysqli::real\_connect](mysqli.real-connect.md) — Abre uma conexão a um servidor MySQL
  - [mysqli::real\_escape\_string](mysqli.real-escape-string.md) — Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão
  - [mysqli::real\_query](mysqli.real-query.md) — Executa uma consulta SQL
  - [mysqli::reap\_async\_query](mysqli.reap-async-query.md) — Obtenha o resultado da consulta assíncrona
  - [mysqli::refresh](mysqli.refresh.md) — Atualiza
  - [mysqli::release\_savepoint](mysqli.release-savepoint.md) — Remove o ponto de salvamento nomeado do conjunto de pontos de salvamento da transação atual
  - [mysqli::rollback](mysqli.rollback.md) — Reverte a transação atual
  - [mysqli::savepoint](mysqli.savepoint.md) — Define um ponto de salvamento de transação nomeado
  - [mysqli::select\_db](mysqli.select-db.md) — Seleciona o banco de dados padrão para consultas de banco de dados
  - [mysqli::set\_charset](mysqli.set-charset.md) — Define o conjunto de caracteres do cliente
  - [mysqli::set\_opt](mysqli.set-opt.md) — Sinônimo de mysqli\_options
  - [mysqli::$sqlstate](mysqli.sqlstate.md) — Retorna o erro SQLSTATE da operação MySQL anterior
  - [mysqli::ssl\_set](mysqli.ssl-set.md) — Usado para estabelecer conexões seguras usando SSL
  - [mysqli::stat](mysqli.stat.md) — Obtém o status atual do sistema
  - [mysqli::stmt\_init](mysqli.stmt-init.md) — Inicializa uma instrução e retorna um objeto para uso com mysqli\_stmt\_prepare
  - [mysqli::store\_result](mysqli.store-result.md) — Transfere um conjunto de resultados da última consulta
  - [mysqli::$thread\_id](mysqli.thread-id.md) — Retorna o ID da thread para a conexão atual
  - [mysqli::thread\_safe](mysqli.thread-safe.md) — Retorna se a segurança de thread é dada ou não
  - [mysqli::use\_result](mysqli.use-result.md) — Inicia uma recuperação de conjunto de resultados
  - [mysqli::$warning\_count](mysqli.warning-count.md) — Retorna o número de alertas gerados pela consulta mais recente
- [mysqli\_stmt](class.mysqli-stmt.md) — A classe mysqli\_stmt
  - [mysqli\_stmt::$affected\_rows](mysqli-stmt.affected-rows.md) — Retorna o número total de linhas modificadas, apagadas, inseridas ou
    correspondidas pela última instrução executada
  - [mysqli\_stmt::attr\_get](mysqli-stmt.attr-get.md) — Usado para obter o valor atual de um atributo de instrução
  - [mysqli\_stmt::attr\_set](mysqli-stmt.attr-set.md) — Usado para modificar o comportamento de uma instrução preparada
  - [mysqli\_stmt::bind\_param](mysqli-stmt.bind-param.md) — Liga variáveis a uma declaração preparada como parâmetros
  - [mysqli\_stmt::bind\_result](mysqli-stmt.bind-result.md) — Liga variáveis a uma declaração preparada para armazenamento de resultado
  - [mysqli\_stmt::close](mysqli-stmt.close.md) — Fecha uma instrução preparada
  - [mysqli\_stmt::\_\_construct](mysqli-stmt.construct.md) — Constrói um novo objeto mysqli\_stmt
  - [mysqli\_stmt::data\_seek](mysqli-stmt.data-seek.md) — Ajusta o ponteiro de resultado para uma linha arbitrária no resultado com buffer
  - [mysqli\_stmt::$errno](mysqli-stmt.errno.md) — Retorna o código de erro para a chamada de instrução mais recente
  - [mysqli\_stmt::$error](mysqli-stmt.error.md) — Retorna uma descrição em string para o último erro de instrução
  - [mysqli\_stmt::$error\_list](mysqli-stmt.error-list.md) — Retorna uma lista de erros da última instrução executada
  - [mysqli\_stmt::execute](mysqli-stmt.execute.md) — Executa uma instrução preparada
  - [mysqli\_stmt::fetch](mysqli-stmt.fetch.md) — Recebe resultados de uma instrução preparada nas variáveis vinculadas
  - [mysqli\_stmt::$field\_count](mysqli-stmt.field-count.md) — Retorna o número de colunas na instrução informada
  - [mysqli\_stmt::free\_result](mysqli-stmt.free-result.md) — Libera memória do resultado armazenado para o manipulador de instrução informado
  - [mysqli\_stmt::get\_result](mysqli-stmt.get-result.md) — Obtém um resultado de uma instrução preparada como um objeto mysqli\_result
  - [mysqli\_stmt::get\_warnings](mysqli-stmt.get-warnings.md) — Obtém o resultado de SHOW WARNINGS
  - [mysqli\_stmt::$insert\_id](mysqli-stmt.insert-id.md) — Obtém o ID gerado pela operação INSERT anterior
  - [mysqli\_stmt::more\_results](mysqli-stmt.more-results.md) — Verifica se há mais resultados de uma consulta múltipla
  - [mysqli\_stmt::next\_result](mysqli-stmt.next-result.md) — Lê o próximo resultado de uma consulta múltipla
  - [mysqli\_stmt::$num\_rows](mysqli-stmt.num-rows.md) — Retorna o número de linhas recebidas pelo servidor
  - [mysqli\_stmt::$param\_count](mysqli-stmt.param-count.md) — Retorna o número de parâmetros para uma instrução fornecida
  - [mysqli\_stmt::prepare](mysqli-stmt.prepare.md) — Prepara uma declaração SQL para execução
  - [mysqli\_stmt::reset](mysqli-stmt.reset.md) — Redefine uma instrução preparada
  - [mysqli\_stmt::result\_metadata](mysqli-stmt.result-metadata.md) — Retorna os metadados de resultado de uma instrução preparada
  - [mysqli\_stmt::send\_long\_data](mysqli-stmt.send-long-data.md) — Envia dados em blocos
  - [mysqli\_stmt::$sqlstate](mysqli-stmt.sqlstate.md) — Retorna o erro SQLSTATE da operação da instrução anterior
  - [mysqli\_stmt::store\_result](mysqli-stmt.store-result.md) — Armazena um conjunto de resultados em um buffer interno
- [mysqli\_result](class.mysqli-result.md) — A classe mysqli\_result
  - [mysqli\_result::\_\_construct](mysqli-result.construct.md) — Constrói um objeto mysqli\_result
  - [mysqli\_result::$current\_field](mysqli-result.current-field.md) — Obtém o deslocamento atual de campo de um ponteiro de resultado
  - [mysqli\_result::data\_seek](mysqli-result.data-seek.md) — Ajusta o ponteiro do resultado para uma linha arbitrária no resultado
  - [mysqli\_result::fetch\_all](mysqli-result.fetch-all.md) — Recebe todas as linhas de resultado como array associativo, numérico, ou ambos
  - [mysqli\_result::fetch\_array](mysqli-result.fetch-array.md) — Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
  - [mysqli\_result::fetch\_assoc](mysqli-result.fetch-assoc.md) — Obtém a próxima linha do conjunto de resultados como um array associativo
  - [mysqli\_result::fetch\_column](mysqli-result.fetch-column.md) — Recebe uma única coluna da próxima linha de um resultado
  - [mysqli\_result::fetch\_field](mysqli-result.fetch-field.md) — Retorna o próximo campo no conjunto de resultados
  - [mysqli\_result::fetch\_field\_direct](mysqli-result.fetch-field-direct.md) — Recebe metadados para um único campo
  - [mysqli\_result::fetch\_fields](mysqli-result.fetch-fields.md) — Retorna um array de objetos representando os campos em um conjunto de resultados
  - [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) — Recebe a próxima linha de um resultado como um objeto
  - [mysqli\_result::fetch\_row](mysqli-result.fetch-row.md) — Obtém a próxima linha de um resultado como um array enumerado
  - [mysqli\_result::$field\_count](mysqli-result.field-count.md) — Obtém o número de campos no conjunto de resultados
  - [mysqli\_result::field\_seek](mysqli-result.field-seek.md) — Move o ponteiro do resultado para um campo especificado
  - [mysqli\_result::free](mysqli-result.free.md) — Libera memória associada a um resultado
  - [mysqli\_result::getIterator](mysqli-result.getiterator.md) — Obtém um iterador externo
  - [mysqli\_result::$lengths](mysqli-result.lengths.md) — Retorna os comprimentos das colunas da linha atual do resultado
  - [mysqli\_result::$num\_rows](mysqli-result.num-rows.md) — Obtém o número de linhas no resultado
- [mysqli\_driver](class.mysqli-driver.md) — A classe mysqli\_driver
  - [mysqli\_driver::embedded\_server\_end](mysqli-driver.embedded-server-end.md) — Para o servidor incorporado
  - [mysqli\_driver::embedded\_server\_start](mysqli-driver.embedded-server-start.md) — Inicializa e dispara o servidor incorporado
  - [mysqli\_driver::$report\_mode](mysqli-driver.report-mode.md) — Define o modo de relatório de erros do mysqli
- [mysqli\_warning](class.mysqli-warning.md) — A classe mysqli\_warning
  - [mysqli\_warning::\_\_construct](mysqli-warning.construct.md) — Construtor privado para proibir instanciação direta
  - [mysqli\_warning::next](mysqli-warning.next.md) — Busca o próximo aviso
- [mysqli\_sql\_exception](class.mysqli-sql-exception.md) — A classe mysqli\_sql\_exception
  - [mysqli\_sql\_exception::getSqlState](mysqli-sql-exception.getsqlstate.md) — Retorna o código de erro SQLSTATE
- [Apelidos e Funções descontinuadas da Mysqli](ref.mysqli.md)
  - [mysqli\_connect](function.mysqli-connect.md) — Sinônimo de mysqli::\_\_construct
  - [mysqli::escape\_string](function.mysqli-escape-string.md) — Sinônimo de mysqli\_real\_escape\_string
  - [mysqli\_execute](function.mysqli-execute.md) — Sinônimo de mysqli\_stmt\_execute
  - [mysqli\_get\_client\_stats](function.mysqli-get-client-stats.md) — Retorna as estatísticas do cliente por processo
  - [mysqli\_get\_links\_stats](function.mysqli-get-links-stats.md) — Retorna informações sobre links abertos e em cache
  - [mysqli\_report](function.mysqli-report.md) — Sinônimo de mysqli\_driver->report\_mode
  - [mysqli::set\_opt](function.mysqli-set-opt.md) — Sinônimo de mysqli\_options
- [Registro de Alterações](changelog.mysqli.md)

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

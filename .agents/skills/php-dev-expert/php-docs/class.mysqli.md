# A classe mysqli

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli.php

---

# A classe mysqli

(PHP 5, PHP 7, PHP 8)

## Introdução

Representa uma conexão entre o PHP e um banco de dados MySQL.

## Resumo da classe

class ****mysqli****
{

/\* Propriedades \*/

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$affected\_rows](mysqli.affected-rows.md);

public
readonly
[string](language.types.string.md)
[$client\_info](mysqli.get-client-info.md);

public
readonly
[int](language.types.integer.md)
[$client\_version](mysqli.get-client-version.md);

public
readonly
[int](language.types.integer.md)
[$connect\_errno](mysqli.connect-errno.md);

public
readonly
?[string](language.types.string.md)
[$connect\_error](mysqli.connect-error.md);

public
readonly
[int](language.types.integer.md)
[$errno](mysqli.errno.md);

public
readonly
[string](language.types.string.md)
[$error](mysqli.error.md);

public
readonly
[array](language.types.array.md)
[$error\_list](mysqli.error-list.md);

public
readonly
[int](language.types.integer.md)
[$field\_count](mysqli.field-count.md);

public
readonly
[string](language.types.string.md)
[$host\_info](mysqli.get-host-info.md);

public
readonly
?[string](language.types.string.md)
[$info](mysqli.info.md);

public
readonly
[int](language.types.integer.md)|[string](language.types.string.md)
[$insert\_id](mysqli.insert-id.md);

public
readonly
[string](language.types.string.md)
[$server\_info](mysqli.get-server-info.md);

public
readonly
[int](language.types.integer.md)
[$server\_version](mysqli.get-server-version.md);

public
readonly
[string](language.types.string.md)
[$sqlstate](mysqli.sqlstate.md);

public
readonly
[int](language.types.integer.md)
[$protocol\_version](mysqli.get-proto-info.md);

public
readonly
[int](language.types.integer.md)
[$thread\_id](mysqli.thread-id.md);

public
readonly
[int](language.types.integer.md)
[$warning\_count](mysqli.warning-count.md);

/\* Métodos \*/

public function [\_\_construct](mysqli.construct.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**  
)

public function [autocommit](mysqli.autocommit.md)([bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

public function [begin\_transaction](mysqli.begin-transaction.md)([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

public function [change\_user](mysqli.change-user.md)([string](language.types.string.md) `$username`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`, [?](language.types.null.md)[string](language.types.string.md) `$database`): [bool](language.types.boolean.md)

public function [character\_set\_name](mysqli.character-set-name.md)(): [string](language.types.string.md)

public function [close](mysqli.close.md)(): [true](language.types.singleton.md)

public function [commit](mysqli.commit.md)([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

public function [connect](mysqli.construct.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = **`null`**,  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = **`null`**  
): [bool](language.types.boolean.md)

public function [debug](mysqli.debug.md)([string](language.types.string.md) `$options`): [true](language.types.singleton.md)

public function [dump\_debug\_info](mysqli.dump-debug-info.md)(): [bool](language.types.boolean.md)

public function [execute\_query](mysqli.execute-query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

public function [get\_charset](mysqli.get-charset.md)(): [?](language.types.null.md)[object](language.types.object.md)

#[[\Deprecated](class.deprecated.md)]  
public function [get\_client\_info](mysqli.get-client-info.md)(): [string](language.types.string.md)

public function [get\_connection\_stats](mysqli.get-connection-stats.md)(): [array](language.types.array.md)

public function [get\_server\_info](mysqli.get-server-info.md)(): [string](language.types.string.md)

public function [get\_warnings](mysqli.get-warnings.md)(): [mysqli\_warning](class.mysqli-warning.md)|[false](language.types.singleton.md)

#[[\Deprecated](class.deprecated.md)]  
public function [init](mysqli.init.md)(): [?](language.types.null.md)[bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [kill](mysqli.kill.md)([int](language.types.integer.md) `$process_id`): [bool](language.types.boolean.md)

public function [more\_results](mysqli.more-results.md)(): [bool](language.types.boolean.md)

public function [multi\_query](mysqli.multi-query.md)([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

public function [next\_result](mysqli.next-result.md)(): [bool](language.types.boolean.md)

public function [options](mysqli.options.md)([int](language.types.integer.md) `$option`, [string](language.types.string.md)|[int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [ping](mysqli.ping.md)(): [bool](language.types.boolean.md)

public static function [poll](mysqli.poll.md)(  
    [?](language.types.null.md)[array](language.types.array.md) `&$read`,  
    [?](language.types.null.md)[array](language.types.array.md) `&$error`,  
    [array](language.types.array.md) `&$reject`,  
    [int](language.types.integer.md) `$seconds`,  
    [int](language.types.integer.md) `$microseconds` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [prepare](mysqli.prepare.md)([string](language.types.string.md) `$query`): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

public function [query](mysqli.query.md)([string](language.types.string.md) `$query`, [int](language.types.integer.md) `$result_mode` = [MYSQLI\_STORE\_RESULT](mysqli.constants.md#constant.mysqli-store-result)): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

public function [quote\_string](mysqli.quote-string.md)([string](language.types.string.md) `$string`): [string](language.types.string.md)

public function [real\_connect](mysqli.real-connect.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$hostname` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = [null](reserved.constants.md#constant.null),  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[string](language.types.string.md) `$database` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[int](language.types.integer.md) `$port` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[string](language.types.string.md) `$socket` = [null](reserved.constants.md#constant.null),  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [real\_escape\_string](mysqli.real-escape-string.md)([string](language.types.string.md) `$string`): [string](language.types.string.md)

public function [real\_query](mysqli.real-query.md)([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

public function [reap\_async\_query](mysqli.reap-async-query.md)(): [mysqli\_result](class.mysqli-result.md)|[bool](language.types.boolean.md)

#[[\Deprecated](class.deprecated.md)]  
public function [refresh](mysqli.refresh.md)([int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

public function [release\_savepoint](mysqli.release-savepoint.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [rollback](mysqli.rollback.md)([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = [null](reserved.constants.md#constant.null)): [bool](language.types.boolean.md)

public function [savepoint](mysqli.savepoint.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [select\_db](mysqli.select-db.md)([string](language.types.string.md) `$database`): [bool](language.types.boolean.md)

public function [set\_charset](mysqli.set-charset.md)([string](language.types.string.md) `$charset`): [bool](language.types.boolean.md)

public function [ssl\_set](mysqli.ssl-set.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$key`,  
    [?](language.types.null.md)[string](language.types.string.md) `$certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_path`,  
    [?](language.types.null.md)[string](language.types.string.md) `$cipher_algos`  
): [true](language.types.singleton.md)

public function [stat](mysqli.stat.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [stmt\_init](mysqli.stmt-init.md)(): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

public function [store\_result](mysqli.store-result.md)([int](language.types.integer.md) `$mode` = 0): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

public function [thread\_safe](mysqli.thread-safe.md)(): [bool](language.types.boolean.md)

public function [use\_result](mysqli.use-result.md)(): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

}

## Índice

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

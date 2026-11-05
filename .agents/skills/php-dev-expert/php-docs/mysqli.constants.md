# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`MYSQLI_READ_DEFAULT_GROUP`** ([int](language.types.integer.md))
:   Lê opções do grupo nomeado em my.cnf
    ou no arquivo especificado com **`MYSQLI_READ_DEFAULT_FILE`**.

**`MYSQLI_READ_DEFAULT_FILE`** ([int](language.types.integer.md))
:   Lê opções do arquivo de opções informado ao invés de my.cnf.

**`MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS`** ([int](language.types.integer.md))
:   Indica ao servidor que o cliente consegue lidar com o modo "caixa de areia"
    para senhas expiradas.
    Pode ser usada com [mysqli\_options()](mysqli.options.md).

**`MYSQLI_OPT_LOAD_DATA_LOCAL_DIR`** ([int](language.types.integer.md))
:   Se habilitada, esta opção especifica o diretório
    a partid do qual o carregamento de dados `LOCAL` no lado do cliente é permitido
    em instruções `LOAD DATA LOCAL`.

**`MYSQLI_OPT_CONNECT_TIMEOUT`** ([int](language.types.integer.md))
:   Limite de tempo de conexão em segundos.

**`MYSQLI_OPT_READ_TIMEOUT`** ([int](language.types.integer.md))
:   Limite de tempo do resultado da execução do comando, em segundos. Disponível a partir do PHP 7.2.0.

**`MYSQLI_OPT_LOCAL_INFILE`** ([int](language.types.integer.md))
:   Habilita o comando `LOAD LOCAL INFILE`.

**`MYSQLI_OPT_INT_AND_FLOAT_NATIVE`** ([int](language.types.integer.md))
:   Converte colunas de inteiros e floats de volta para números PHP. Válido apenas para mysqlnd.

**`MYSQLI_OPT_NET_CMD_BUFFER_SIZE`** ([int](language.types.integer.md))
:   O tamanho do buffer interno de comando/rede. Válido apenas para mysqlnd.

**`MYSQLI_OPT_NET_READ_BUFFER_SIZE`** ([int](language.types.integer.md))
:   Máximo tamanho de porção de leitura em bytes ao ler o corpo de um pacote de comando MySQL.
    Válido apenas para mysqlnd.

**`MYSQLI_OPT_SSL_VERIFY_SERVER_CERT`** ([int](language.types.integer.md))

**`MYSQLI_INIT_COMMAND`** ([int](language.types.integer.md))
:   Comando a executar ao se conectar ao servidor MySQL. Será automaticamente re-executado na reconexão.

**`MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS`** ([int](language.types.integer.md))
:   Indica ao servidor que o cliente consegue lidaro com o modo "caixa de areia"
    para senhas expiradas.
    Pode ser usada com [mysqli\_real\_connect()](mysqli.real-connect.md).

**`MYSQLI_CLIENT_FOUND_ROWS`** ([int](language.types.integer.md))
:   Retorna o número de linhas correspondentes, e não o número de linhas afetadas.

**`MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT`** ([int](language.types.integer.md))
:   Verifica o certificado do servidor.

**`MYSQLI_CLIENT_SSL`** ([int](language.types.integer.md))
:   Usa SSL (protocolo criptografado). Esta opção não deve ser definida por aplicações;
    ela é definida internamente na biblioteca cliente MySQL.

**`MYSQLI_CLIENT_COMPRESS`** ([int](language.types.integer.md))
:   Usa protocolo de compressão.

**`MYSQLI_CLIENT_INTERACTIVE`** ([int](language.types.integer.md))
:   Permite `interactive_timeout` segundos
    (ao invés de `wait_timeout` segundos) de inatividade antes
    de fechar a conexão. A variável
    `wait_timeout` da sessão do cliente será definida para
    o valor da variável `interactive_timeout` da sessão.

**`MYSQLI_CLIENT_IGNORE_SPACE`** ([int](language.types.integer.md))
:   Permite espaços depois de nomes de função. Considera todos os nomes de função como palavras reservadas.

**`MYSQLI_CLIENT_NO_SCHEMA`** ([int](language.types.integer.md))
:   Não permite a sintaxe `db_name.tbl_name.col_name`.

**`MYSQLI_CLIENT_MULTI_QUERIES`**
:   Permite múltiplas consultas separadas por ponto-e-vírgula em uma única chamada a [mysqli\_query()](mysqli.query.md).

**`MYSQLI_STORE_RESULT`** ([int](language.types.integer.md))
:   Para uso em conjuntos de resultados com buffer. Tem o valor de `0`.

**`MYSQLI_STORE_RESULT_COPY_DATA`** ([int](language.types.integer.md))
:   A partir do PHP 8.1, esta constante não tem mais efeito.
    Antes do PHP 8.1, esta constante é usada para copiar resultados
    do buffer interno do `mysqlnd`
    para as variáveis PHP buscadas.
    Por padrão, o `mysqlnd` usará uma lógica de referência
    para evitar de copiar e duplicar os resultados mantidos em memória.
    Para certos resultados, por exemplo para conjuntos com muitas linhas pequenas,
    o método de cópia pode reduzir o uso total de memória
    porque as variáveis do PHP que mantêm o resultado podem ser liberadas mais cedo.
    Disponível somente com `mysqlnd`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_USE_RESULT`** ([int](language.types.integer.md))
:   Para uso em conjuntos de resultados sem buffer. Tem o valor de `1`.

**`MYSQLI_ASSOC`** ([int](language.types.integer.md))
:   Colunas são retornadas no array com os nomes dos campos nas chaves.

**`MYSQLI_NUM`** ([int](language.types.integer.md))
:   Colunas são retornadas no array com índices enumerados.

**`MYSQLI_BOTH`** ([int](language.types.integer.md))
:   Colunas são retornadas no array com índice tanto numérico quanto com nomes dos campos.

**`MYSQLI_NOT_NULL_FLAG`** ([int](language.types.integer.md))
:   Indica que um campo é definido como `NOT NULL`.

**`MYSQLI_PRI_KEY_FLAG`** ([int](language.types.integer.md))
:   O campo é parte de um índice primário.

**`MYSQLI_UNIQUE_KEY_FLAG`** ([int](language.types.integer.md))
:   O campo é parte de um índice exclusivo.

**`MYSQLI_MULTIPLE_KEY_FLAG`** ([int](language.types.integer.md))
:   O campo é parte de um índice.

**`MYSQLI_BLOB_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `BLOB`.

**`MYSQLI_UNSIGNED_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `UNSIGNED`.

**`MYSQLI_ZEROFILL_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `ZEROFILL`.

**`MYSQLI_AUTO_INCREMENT_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `AUTO_INCREMENT`.

**`MYSQLI_TIMESTAMP_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `TIMESTAMP`.

**`MYSQLI_SET_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `SET`.

**`MYSQLI_NUM_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `NUMERIC`.

**`MYSQLI_PART_KEY_FLAG`** ([int](language.types.integer.md))
:   O campo é parte de um multi-índice.

**`MYSQLI_GROUP_FLAG`** ([int](language.types.integer.md))
:   O campo é parte de `GROUP BY`.

**`MYSQLI_NO_DEFAULT_VALUE_FLAG`** ([int](language.types.integer.md))
:   Uma coluna não tem cláusula `DEFAULT` em sua definição.
    Isto não se aplica a colunas `NULL`
    ou `AUTO_INCREMENT`
    porque tais colunas têm um valor padrão de `NULL`
    e um valor padrão implícito, respectivamente.

**`MYSQLI_TYPE_DECIMAL`** ([int](language.types.integer.md))
:   O campo é definido como `DECIMAL`.

**`MYSQLI_TYPE_NEWDECIMAL`** ([int](language.types.integer.md))
:   Campo de precisão matemática `DECIMAL` ou `NUMERIC`.

**`MYSQLI_TYPE_BIT`** ([int](language.types.integer.md))
:   O campo é definido como `BIT`.

**`MYSQLI_TYPE_TINY`** ([int](language.types.integer.md))
:   O campo é definido como `TINYINT`.

**`MYSQLI_TYPE_SHORT`** ([int](language.types.integer.md))
:   O campo é definido como `SMALLINT`.

**`MYSQLI_TYPE_LONG`** ([int](language.types.integer.md))
:   O campo é definido como `INT`.

**`MYSQLI_TYPE_FLOAT`** ([int](language.types.integer.md))
:   O campo é definido como `FLOAT`.

**`MYSQLI_TYPE_DOUBLE`** ([int](language.types.integer.md))
:   O campo é definido como `DOUBLE`.

**`MYSQLI_TYPE_NULL`** ([int](language.types.integer.md))
:   O campo é definido como `DEFAULT NULL`.

**`MYSQLI_TYPE_TIMESTAMP`** ([int](language.types.integer.md))
:   O campo é definido como `TIMESTAMP`.

**`MYSQLI_TYPE_LONGLONG`** ([int](language.types.integer.md))
:   O campo é definido como `BIGINT`.

**`MYSQLI_TYPE_INT24`** ([int](language.types.integer.md))
:   O campo é definido como `MEDIUMINT`.

**`MYSQLI_TYPE_DATE`** ([int](language.types.integer.md))
:   O campo é definido como `DATE`.

**`MYSQLI_TYPE_TIME`** ([int](language.types.integer.md))
:   O campo é definido como `TIME`.

**`MYSQLI_TYPE_DATETIME`** ([int](language.types.integer.md))
:   O campo é definido como `DATETIME`.

**`MYSQLI_TYPE_YEAR`** ([int](language.types.integer.md))
:   O campo é definido como `YEAR`.

**`MYSQLI_TYPE_NEWDATE`** ([int](language.types.integer.md))
:   O campo é definido como `DATE`.

**`MYSQLI_TYPE_INTERVAL`** ([int](language.types.integer.md))
:   Sinônimo de **`MYSQLI_TYPE_ENUM`**. Removida a partir do PHP 8.4.0.

**`MYSQLI_TYPE_ENUM`** ([int](language.types.integer.md))
:   O campo é definido como `ENUM`.

**`MYSQLI_TYPE_SET`** ([int](language.types.integer.md))
:   O campo é definido como `SET`.

**`MYSQLI_TYPE_TINY_BLOB`** ([int](language.types.integer.md))
:   O campo é definido como `TINYBLOB`.

**`MYSQLI_TYPE_MEDIUM_BLOB`** ([int](language.types.integer.md))
:   O campo é definido como `MEDIUMBLOB`.

**`MYSQLI_TYPE_LONG_BLOB`** ([int](language.types.integer.md))
:   O campo é definido como `LONGBLOB`.

**`MYSQLI_TYPE_BLOB`** ([int](language.types.integer.md))
:   O campo é definido como `BLOB`.

**`MYSQLI_TYPE_VAR_STRING`** ([int](language.types.integer.md))
:   O campo é definido como `VARCHAR`.

**`MYSQLI_TYPE_STRING`** ([int](language.types.integer.md))
:   O campo é definido como `CHAR` ou `BINARY`.

**`MYSQLI_TYPE_CHAR`** ([int](language.types.integer.md))
:   O campo é definido como `TINYINT`.
    Para `CHAR`, veja `MYSQLI_TYPE_STRING`.

**`MYSQLI_TYPE_GEOMETRY`** ([int](language.types.integer.md))
:   O campo é definido como `GEOMETRY`

**`MYSQLI_TYPE_JSON`** ([int](language.types.integer.md))
:   O campo é definido como `JSON`.
    Válido apenas para mysqlnd e MySQL 5.7.8 ou acima.

**`MYSQLI_TYPE_VECTOR`** ([int](language.types.integer.md))
:   O campo é definido como `VECTOR`.
    Disponível a partir do PHP 8.4.0, para MySQL 9.0 e versões posteriores.

**`MYSQLI_NEED_DATA`**
:   Há mais dados disponíveis para vincular a variáveis.

**`MYSQLI_ENUM_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `ENUM`.

**`MYSQLI_BINARY_FLAG`** ([int](language.types.integer.md))
:   O campo é definido como `BINARY`.

**`MYSQLI_CURSOR_TYPE_FOR_UPDATE`** ([int](language.types.integer.md))
:   Removida a partir do PHP 8.4.0.

**`MYSQLI_CURSOR_TYPE_NO_CURSOR`** ([int](language.types.integer.md))

**`MYSQLI_CURSOR_TYPE_READ_ONLY`** ([int](language.types.integer.md))

**`MYSQLI_CURSOR_TYPE_SCROLLABLE`** ([int](language.types.integer.md))
:   Removida a partir do PHP 8.4.0.

**`MYSQLI_STMT_ATTR_CURSOR_TYPE`** ([int](language.types.integer.md))

**`MYSQLI_STMT_ATTR_PREFETCH_ROWS`** ([int](language.types.integer.md))
:   Removida a partir do PHP 8.4.0.

**`MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH`** ([int](language.types.integer.md))

**`MYSQLI_SET_CHARSET_NAME`** ([int](language.types.integer.md))

**`MYSQLI_REPORT_INDEX`** ([int](language.types.integer.md))
:   Reporta se nenhum índice ou um índice ruim foi usado em uma consulta.

**`MYSQLI_REPORT_ERROR`** ([int](language.types.integer.md))
:   Reporta erros de chamadas a funções mysqli.

**`MYSQLI_REPORT_STRICT`** ([int](language.types.integer.md))
:   Lança uma exceção `mysqli_sql_exception` para erros ao invés de gerar alertas.

**`MYSQLI_REPORT_ALL`** ([int](language.types.integer.md))
:   Define todas as opções ligadas (reportar tudo).

**`MYSQLI_REPORT_OFF`** ([int](language.types.integer.md))
:   Desliga a reportagem de erros.

**`MYSQLI_DEBUG_TRACE_ENABLED`** ([int](language.types.integer.md))
:   É definido para 1 se a funcionalidade [mysqli\_debug()](mysqli.debug.md) estiver habilitada.

**`MYSQLI_SERVER_PUBLIC_KEY`** ([int](language.types.integer.md))

**`MYSQLI_REFRESH_GRANT`** ([int](language.types.integer.md))
:   Atualiza a tabela de permissões.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_LOG`** ([int](language.types.integer.md))
:   Descarrega os registros, como na execução da declaração
    SQL `FLUSH LOGS`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_TABLES`** ([int](language.types.integer.md))
:   Descarrega o cache de tabelas, como na execução da declaração
    SQL `FLUSH TABLES`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_HOSTS`** ([int](language.types.integer.md))
:   Descarrega o cache de servidores, como na execução da declaração
    SQL `FLUSH HOSTS`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_REPLICA`** ([int](language.types.integer.md))
:   Apelido da constante **`MYSQLI_REFRESH_SLAVE`**.
    Disponível a partir do PHP 8.1.0. Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_STATUS`** ([int](language.types.integer.md))
:   Redefine as variáveis de estado, como na execução da declaração
    SQL `FLUSH STATUS`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_THREADS`** ([int](language.types.integer.md))
:   Descarrega o cache de threads.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_SLAVE`** ([int](language.types.integer.md))
:   Em um servidor de replicação escravo: redefine a informação do servidor principal, e
    reinicia o escravo. É como executar a declaração SQL
    `RESET SLAVE`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_MASTER`** ([int](language.types.integer.md))
:   Em um servidor de replicação principal: remove os arquivos de registro binários listados no
    índice de registro binário, e trunca o arquivo de índice. É como executar a declaração
    SQL `RESET MASTER`.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_REFRESH_BACKUP_LOG`** ([int](language.types.integer.md))
:   Fecha e reabre os arquivos de registro reservas.
    Descontinuada a partir do PHP 8.4.0.

**`MYSQLI_TRANS_COR_AND_CHAIN`** ([int](language.types.integer.md))
:   Adiciona "AND CHAIN" a [mysqli\_commit()](mysqli.commit.md) ou
    [mysqli\_rollback()](mysqli.rollback.md).

**`MYSQLI_TRANS_COR_AND_NO_CHAIN`** ([int](language.types.integer.md))
:   Adiciona "AND NO CHAIN" a [mysqli\_commit()](mysqli.commit.md) ou
    [mysqli\_rollback()](mysqli.rollback.md).

**`MYSQLI_TRANS_COR_RELEASE`** ([int](language.types.integer.md))
:   Adiciona "RELEASE" a [mysqli\_commit()](mysqli.commit.md) ou
    [mysqli\_rollback()](mysqli.rollback.md).

**`MYSQLI_TRANS_COR_NO_RELEASE`** ([int](language.types.integer.md))
:   Adiciona "NO RELEASE" a [mysqli\_commit()](mysqli.commit.md) ou
    [mysqli\_rollback()](mysqli.rollback.md).

**`MYSQLI_TRANS_START_READ_ONLY`** ([int](language.types.integer.md))
:   Inicia a transação como em "START TRANSACTION READ ONLY" com
    [mysqli\_begin\_transaction()](mysqli.begin-transaction.md).

**`MYSQLI_TRANS_START_READ_WRITE`** ([int](language.types.integer.md))
:   Inicia a transação como em "START TRANSACTION READ WRITE" com
    [mysqli\_begin\_transaction()](mysqli.begin-transaction.md).

**`MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT`** ([int](language.types.integer.md))
:   Inicia a transação como em "START TRANSACTION WITH CONSISTENT SNAPSHOT".

**`MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT`** ([int](language.types.integer.md))
:   Requer MySQL 5.6.5 e acima.

**`MYSQLI_IS_MARIADB`** ([bool](language.types.boolean.md))
:   Informa se a extensão mysqli foi construída com uma biblioteca cliente MariaDB.
    Disponível a partir do PHP 8.1.2.

**`MYSQLI_ASYNC`** ([int](language.types.integer.md))
:   A consulta é realizada de forma assíncrona e nenhum resultado é retornado imediatamente.
    Disponível somente com `mysqlnd`.

**`MYSQLI_ON_UPDATE_NOW_FLAG`** ([int](language.types.integer.md))
:   Se um campo for atualizado é obtido o valor do horário atual.

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
